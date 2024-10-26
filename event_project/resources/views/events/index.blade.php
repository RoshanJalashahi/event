@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
        <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 20px; color: #333;">Events</h1>
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ url('/events/create') }}" class="btn btn-primary" style="padding: 10px 20px; font-size: 1.2rem;">Create Event</a>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #007bff; color: white;">
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">Title</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">Date</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">Location</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">Category</th>
                    <th style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem; width: 220px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $event->title }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $event->date }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $event->location }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $event->category->name ?? 'Uncategorized' }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; display: flex; justify-content: space-between; font-size: 1.1rem;">
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ url('/events/' . $event->id) }}" class="btn btn-info">View</a>
                                <a href="{{ url('/events/' . $event->id . '/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('/events/' . $event->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        /* Inline styles for hover effects */
        .btn-info:hover {
            background-color: #17a2b8; /* Darker shade of blue for hover */
            color: white;
        }

        .btn-warning:hover {
            background-color: #ffc107; /* Darker shade of yellow for hover */
            color: black;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker shade of red for hover */
            color: white;
        }
    </style>
@endsection
