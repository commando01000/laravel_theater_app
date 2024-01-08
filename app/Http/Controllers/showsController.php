<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\event_registeration;
use App\Http\Controllers\eventController;
use App\Models\Shows;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class showsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $Shows = Shows::all();
        $attendees = event_registeration::all();

        // Pass both $events and $attendees to the view
        return view('admin.index', [
            'Shows' => $Shows,
            'attendees' => $attendees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $requestData = $request->all();
        $fileName = time().$request->file('Image')->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images', $fileName, 'public');
        $requestData["Image"] = '/storage/'.$path;
        Shows::create($requestData);
        return redirect('admin')->with('flash_message', 'Show Added !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $Shows = Shows::find($id);
        return view('admin.show')->with('Shows', $Shows);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $Shows = Shows::find($id);
        return view('admin.edit')->with('Shows', $Shows);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Shows = Shows::find($id);

    // Handle image upload if a new image is provided
    if ($request->hasFile('Image')) {
        $fileName = time() . $request->file('Image')->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images', $fileName, 'public');

        
        $requestData['Image'] = '/storage/' . $path;

        // Delete the old image file if it exists
        if ($Shows->Image && file_exists(public_path($Shows->Image))) {
            unlink(public_path($Shows->Image));
        }
    }
    else {
            // Keep the existing image path if no new image is uploaded
            $requestData['Image'] = $Shows->Image;
        }

        // Include all other fields from the request
        $requestData = array_merge($requestData, $request->except('Image'));

        $Shows->update($requestData);

        return redirect('admin')->with('flash_message', 'Show Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Shows::destroy($id);
        return redirect('admin')->with('flash_message', 'Show Deleted !');
    }
}
