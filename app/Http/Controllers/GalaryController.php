<?php

namespace App\Http\Controllers;

use App\Models\Galary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalaryController extends Controller
{
    //
    public function index()
    {
        $data['perPage'] = 10;
        $data['galary'] = Galary::orderByDesc('id')->paginate($data['perPage']);
        return view('galary.index', $data);
    }
    public function create()
    {
        return view('galary.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $images = [];
        // echo "<pre>";print_r($_FILES['images']); exit;
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('images'), $imageName);
                        // You may also store the image information in the database if needed.
                        $images[] = $imageName;
                    }
        
                } else {
                    return redirect()->back()->with('error', 'No images selected.');
                }
        $galary = new Galary;
        $galary->product_name = $request->name;
        $galary->images = json_encode($images);
        $galary->save();

        return redirect()->route('galary.index')->with('success', trans("lang.create_message"));
    }

    public function destroy($id)
    {
        $galary = Galary::find($id);
        $images = json_decode($galary->images, true);
        removeImages($images, 1);
        $galary->delete();
        return redirect()->route('galary.index')->with('success', trans("lang.delete_message"));
    }
}
