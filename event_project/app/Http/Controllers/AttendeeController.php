<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Event;
class AttendeeController extends Controller
{

    public function index()
    {
        $attendees = Attendee::with('event')->get();
        return view('attendees.index', compact('attendees'));
    }

    public function create()
    {
        $events = Event::all();
        return view('attendees.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'event_id' => 'required|exists:events,id'
        ]);

        Attendee::create($request->all());
        return redirect('/attendees')->with('success', 'Attendee created successfully.');
    }

    public function show($id)
    {
        $attendee = Attendee::with('event')->findOrFail($id);
        return view('attendees.show', compact('attendee'));
    }

    public function edit($id)
    {
        $attendee = Attendee::findOrFail($id);
        $events = Event::all();
        return view('attendees.edit', compact('attendee', 'events'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'event_id' => 'required|exists:events,id'
        ]);

        $attendee = Attendee::findOrFail($id);
        $attendee->update($request->all());
        return redirect('/attendees')->with('success', 'Attendee updated successfully.');
    }

    public function destroy($id)
    {
        $attendee = Attendee::findOrFail($id);
        $attendee->delete();
        return redirect('/attendees')->with('success', 'Attendee deleted successfully.');
    }
}
