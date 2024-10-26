@extends('layouts.app')

@section('title', 'Create Attendee')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
        <h1 style="text-align: center; font-size: 2rem; margin-bottom: 20px; color: #333;">Create Attendee</h1>

        <form action="{{ url('/attendees') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="name" style="font-size: 1.1rem; margin-bottom: 5px; display: block;">Name:</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email" style="font-size: 1.1rem; margin-bottom: 5px; display: block;">Email:</label>
                <input type="email" name="email" required style="width: 100%; padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="event_id" style="font-size: 1.1rem; margin-bottom: 5px; display: block;">Event:</label>
                <select name="event_id" required style="width: 100%; padding: 10px; font-size: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 1rem;">Create</button>
                <a href="{{ url('/attendees') }}" class="btn btn-secondary" style="padding: 10px 20px; font-size: 1rem; margin-left: 10px;">Cancel</a>
            </div>
        </form>
    </div>

    <style>
        /* Add hover effects for buttons */
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue for primary button */
            color: white;
        }

        .btn-secondary:hover {
            background-color: #6c757d; /* Darker gray for secondary button */
            color: white;
        }
    </style>
@endsection
