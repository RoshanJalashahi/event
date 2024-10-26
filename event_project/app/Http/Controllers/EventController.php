<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Attendee;

class EventController extends Controller
{

    // for showing the Event page and all the Events that are organized !!
    public function index()
    {
        $events = Event::with('category')->get();
        return view('events.index', compact('events'));
    }

    // for creating the events 
    public function create()
    {
        $categories = Category::all();
        return view('events.create', compact('categories'));
    }

    // for creating and storing the events in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        Event::create($request->all());
        return redirect('/events')->with('success', 'Event created successfully.');
    }

    // for showing the particular the events 
    public function show($id)
    {
        $event = Event::with('attendees', 'category')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    // for editing the events
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        return view('events.edit', compact('event', 'categories'));
    }

    // for upating the particular events  
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect('/events')->with('success', 'Event updated successfully.');
    }

    // for deleting the events 
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/events')->with('success', 'Event deleted successfully.');
    }
}
