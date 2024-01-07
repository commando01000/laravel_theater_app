<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\event_registeration;
use App\Models\Shows;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(): View
    {
        $Shows = Shows::all();
        return view ('admin.index')->with('admin', $Shows);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.create');
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
        return redirect('admin')->with('flash_message', 'Show Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $event = Shows::find($id);
        return view('admin.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $event = Shows::find($id);
        return view('admin.edit')->with('admin', $event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $event = event_registeration::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('admin')->with('flash_message', 'Updated !');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        event_registeration::destroy($id);
        return redirect('admin')->with('flash_message', 'Deleted!');
    }
}
