@extends('layouts.app')
@section('title', 'Event Details')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 20px; color: #333;">{{ $event->title }}</h1>
        <p style="font-size: 1.2rem; line-height: 1.5; color: #555;">{{ $event->description }}</p>

        <div style="margin: 20px 0; border-top: 1px solid #ccc; padding-top: 10px;">
            <p style="font-size: 1rem; color: #333;"><strong>Date:</strong> {{ $event->date }}</p>
            <p style="font-size: 1rem; color: #333;"><strong>Location:</strong> {{ $event->location }}</p>
            <p style="font-size: 1rem; color: #333;"><strong>Category:</strong> {{ $event->category->name ?? 'Uncategorized' }}</p>
        </div>

        <h3 style="margin-top: 30px; color: #007bff;">Attendees</h3>
        <ul style="list-style-type: none; padding: 0;">
            @foreach($event->attendees as $attendee)
                <li style="padding: 8px; background-color: #e9ecef; margin-bottom: 10px; border-radius: 4px;">
                    {{ $attendee->name }} - <a href="mailto:{{ $attendee->email }}" style="color: #007bff; text-decoration: none;">{{ $attendee->email }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
