<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad_request;
use App\Models\InteractionMetric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ad_requestController extends Controller
{
    //
    public function createAd(Request $req)
    {
        $data = $req->validate([
            'product_id' => 'required|int',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $images = [];
            if(isset($_FILES['images']))
            {
                // print_r($_FILES['images']); exit;
                if ($req->hasFile('images')) {
                    foreach ($req->file('images') as $image) {
                        
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('images'), $imageName);
                        // You may also store the image information in the database if needed.
                        $images[] = $imageName;
                    }
        
                }
            } else {
                return response()->json(['msg' => 'Please add at least one image']);
            }

        $ad = Ad_request::create([
            'seller_id' => auth()->user()->id,
            'image' => json_encode($images),
            'product_id' => $data['product_id'],
            'discount' => $data['discount'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'description' => $req->description
        ]);
        if($ad)
        {
            return response()->json(['msg' => 'Add created successfully.']);
        } else {
            return response()->json(['msg' => 'Something went wrong.']);
        }  
    }

    public function adsList()
    {
        $ads = Ad_request::where('seller_id', auth()->user()->id)->get();

        return response()->json(['ads' => $ads]);
    }

    public function updateAd($id,Request $req)
    {
        $data = $req->validate([
            'product_id' => 'required|int',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $images = [];
            if(isset($_FILES['images']))
            {
                // print_r($_FILES['images']); exit;
                if ($req->hasFile('images')) {
                    foreach ($req->file('images') as $image) {
                        
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('images'), $imageName);
                        // You may also store the image information in the database if needed.
                        $images[] = $imageName;
                    }
        
                }
            }
        $ad_data = Ad_request::find($id);
        $ad = DB::table('ad_requests')->where('id', $id)->update([
            'seller_id' => auth()->user()->id,
            'image' => count($images) > 0 ? json_encode($images) : $ad_data->image,
            'product_id' => $data['product_id'],
            'discount' => $data['discount'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'description' => $req->description
        ]);
        if($ad)
        {
            return response()->json(['msg' => 'Add updated successfully.']);
        } else {
            return response()->json(['msg' => 'Something went wrong.']);
        }  
    }

    public function adClick(Request $req)
    {
        $data = $req->validate([
            'ad_id' => 'required'
        ]);
        $user = auth()->user();
        
        $oldclick = InteractionMetric::where('user_id', $user->id)->where('is_click', 1)->where('ad_id', $data['ad_id'])->first();
        if(empty($oldclick))
        {
            $click = InteractionMetric::create([
                'ad_id' => $data['ad_id'],
                'user_id' => $user->id,
                'is_click' => 1
            ]);
            if($click)
            {
                return response()->json(['msg' => "success"]);
            } else {
                return response()->json(['msg' => "failed"]);
            }

        }else {
            return response()->json(['msg' => "already added"]);
        }
    }

    public function adImpression(Request $req)
    {
        $data = $req->validate([
            'ad_id' => 'required'
        ]);
        $user = auth()->user();
        
        $oldclick = InteractionMetric::where('user_id', $user->id)->where('is_impression', 1)->where('ad_id', $data['ad_id'])->first();
        if(empty($oldclick))
        {
            $click = InteractionMetric::create([
                'ad_id' => $data['ad_id'],
                'user_id' => $user->id,
                'is_impression' => 1
            ]);
            if($click)
            {
                return response()->json(['msg' => "success"]);
            } else {
                return response()->json(['msg' => "failed"]);
            }

        }else {
            return response()->json(['msg' => "already added"]);
        }
    }

    public function adClickList(Request $req)
    {
        $data = $req->validate([
            'ad_id' => 'required'
        ]);
        $user = auth()->user();
        
        $oldclick = InteractionMetric::where('is_click', 1)->where('ad_id', $data['ad_id'])->get();
        
                return response()->json(['clicks' => $oldclick]);
    
    }
    public function adimpressionList(Request $req)
    {
        $data = $req->validate([
            'ad_id' => 'required'
        ]);
        $user = auth()->user();
        
        $oldclick = InteractionMetric::where('is_impression', 1)->where('ad_id', $data['ad_id'])->get();
        
                return response()->json(['impressions' => $oldclick]);
    
    }
}
