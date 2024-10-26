@extends('layouts.app')

@section('title', 'Edit Attendee')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
        <h1 style="text-align: center; font-size: 2rem; margin-bottom: 20px; color: #333;">Edit Attendee</h1>

        <form action="{{ url('/attendees/' . $attendee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="name" style="font-weight: bold; font-size: 1.1rem;">Name</label>
                <input type="text" name="name" value="{{ $attendee->name }}" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="email" style="font-weight: bold; font-size: 1.1rem;">Email</label>
                <input type="email" name="email" value="{{ $attendee->email }}" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="event_id" style="font-weight: bold; font-size: 1.1rem;">Event</label>
                <select name="event_id" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}" {{ $event->id == $attendee->event_id ? 'selected' : '' }}>{{ $event->title }}</option>
                    @endforeach
                </select>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">
                    Update Attendee
                </button>
                <a href="{{ url('/attendees') }}" class="btn btn-secondary" style="margin-left: 10px; text-decoration: none; color: #fff; background-color: #6c757d; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <style>
        /* Add hover effects for buttons */
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Darker grey on hover */
        }

        /* Style for the form control class */
        .form-control {
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff; /* Highlight border on focus */
            outline: none; /* Remove default outline */
        }
    </style>
@endsection
