@extends('layouts.app')

@section('title', 'Attendee Details')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <h1 style="text-align: center; font-size: 2rem; margin-bottom: 20px; color: #333;">Attendee Details</h1>

        <p style="font-size: 1.2rem; line-height: 1.5; color: #555;">
            <strong>ID:</strong> {{ $attendee->id }}
        </p>
        <p style="font-size: 1.2rem; line-height: 1.5; color: #555;">
            <strong>Name:</strong> {{ $attendee->name }}
        </p>
        <p style="font-size: 1.2rem; line-height: 1.5; color: #555;">
            <strong>Email:</strong> {{ $attendee->email }}
        </p>
        <p style="font-size: 1.2rem; line-height: 1.5; color: #555;">
            <strong>Event:</strong> {{ $attendee->event->title }}
        </p>

        <div style="margin-top: 30px; text-align: center;">
            <a href="{{ url('/attendees') }}" class="btn btn-secondary" style="margin-right: 10px;">Back to Attendees</a>
            <a href="{{ url('/attendees/' . $attendee->id . '/edit') }}" class="btn btn-warning" style="margin-right: 10px;">Edit</a>
            <form action="{{ url('/attendees/' . $attendee->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
