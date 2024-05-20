<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        $data['perPage'] = 10;
        $data['contacts'] = Contact::orderByDesc('id')->paginate($data['perPage']);
         return view('contact.index',$data);
    }
    public function store(Request $req)
    {
        // print_r($_POST);
        $data = $_POST;
        $contact = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message']
        ]);

        return redirect()->route('website.index')
                            ->with('success', trans('lang.contact_msg'));
    }
    public function destroy($id)
    {
       
    }
    public function edit($id)
    {
        // echo $id;
        // print_r($_GET); exit;
        if($id == 'all')
        {
            $data = DB::table('contacts')->where('is_read', 0)->update(['is_read' => 1]);
            if(isset($_GET['choice']))
            {
                return redirect()->back();
            }
        } else {
            $data = DB::table('contacts')->where('id', $id)->update(['is_read' => 1]);
            if(isset($_GET['choice']))
            {
                return redirect()->back();
            }
        }
        
        return redirect()->route('contact.index');
    }
}
