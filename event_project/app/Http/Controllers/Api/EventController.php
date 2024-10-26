<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{

    // 1. Display a list of all events with their categories
    public function getAllEvents()
    {
        $events = Event::with('category')->get();

        return response()->json([
            'success' => true,
            'data' => $events
        ], 200);
    }

    // 2. Display details of a single event with attendees and categories
    public function getEventDetails($id)
    {
        $event = Event::with(['category', 'attendees'])->find($id);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $event
        ], 200);
    }
}
