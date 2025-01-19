<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function updateProfileImage(Request $request)
{
    // Validate the image
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Store the image
    $imageName = time().'.'.$request->image->extension();
    $request->image->storeAs('public/images',$imageName);

    // Save the path to the database
    // ...

    // Redirect to a success page
    return redirect()->back()->with('success','Image uploaded successfully');
}





}
