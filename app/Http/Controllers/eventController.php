<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event_registeration;
use App\Models\Shows;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class eventController extends Controller
{
    public function index(): View
    {
        $event_registeration = event_registeration::all();
        return view ('event_registeration.index')->with('event_registeration', $event_registeration);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $Shows = Shows::all();
        return view ('event_registeration.create')->with('Shows', $Shows);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        event_registeration::create($input);
        return redirect('event_registeration')->with('flash_message', 'Event Added !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = event_registeration::find($id);
        return view('event_registeration.show')->with('event_registeration', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = event_registeration::find($id);
        return view('event_registeration.edit')->with('event_registeration', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = event_registeration::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('event_registeration')->with('flash_message', 'Event Updated !');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        event_registeration::destroy($id);
        return redirect('event_registeration')->with('flash_message', 'Event Deleted!');
    }
}
