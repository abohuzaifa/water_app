<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        return Location::all();
    }

    public function store(Request $request)
    {
        // print_r($_POST); exit;
        $data = $request->validate([
            'name' => 'required|string',
            'lat' => 'required',
            'long' => 'required',
            'address' => 'required',
            'category_id' => 'required'
        ]);
        $data['status'] = 1;
        $data['user_id'] = auth()->user()->id;
        $images = [];
            if(isset($_FILES['images']))
            {
                // print_r($_FILES['images']); exit;
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('images'), $imageName);
                        // You may also store the image information in the database if needed.
                        $images[] = $imageName;
                    }
        
                }
            }
        $data['images'] = json_encode($images);
        return response()->json(['data' => Location::create($data)]);
    }

    public function show(Location $location)
    {
        return $location;
    }

    public function update(Request $request, Location $location)
    {
        $location->update($request->all());
        return $location;
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(null, 200);
    }
    public function getPlacesUsingCategoryID(Request $request)
    {
        $request->validate([
            'category_id' => 'required|int'
        ]);

        $locations = Location::where('category_id', $request->category_id)->get();

        return response()->json(['data' => $locations]);
    }
    public function mostNeedPlaces()
    {

        $locations = Location::where('most_need', 1)->get();

        return response()->json(['data' => $locations]);
    }
}