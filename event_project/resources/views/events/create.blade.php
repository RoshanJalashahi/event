@extends('layouts.app')

@section('title', 'Create Event')

@section('content')
<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <h1 style="text-align: center; font-size: 2rem; margin-bottom: 20px; color: #333;">Create Event</h1>

        <form action="{{ url('/events') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="title" style="font-weight: bold; font-size: 1.1rem;">Title</label>
                <input type="text" name="title" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="description" style="font-weight: bold; font-size: 1.1rem;">Description</label>
                <textarea name="description" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="date" style="font-weight: bold; font-size: 1.1rem;">Date</label>
                <input type="date" name="date" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="location" style="font-weight: bold; font-size: 1.1rem;">Location</label>
                <input type="text" name="location" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="category_id" style="font-weight: bold; font-size: 1.1rem;">Category</label>
                <select name="category_id" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">
                    Save Event
                </button>
            </div>
        </form>
    </div>

    <style>
        /* Add hover effects for the primary button */
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            color: white;
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
