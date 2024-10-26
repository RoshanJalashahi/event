@extends('layouts.app')
@section('title', 'Edit Event')

@section('content')
    <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 20px; color: #333;">Edit Event</h1>

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <form action="{{ url('/events/' . $event->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="title" style="font-weight: bold; color: #555;">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $event->title }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="description" style="font-weight: bold; color: #555;">Description</label>
                <textarea name="description" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ $event->description }}</textarea>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="date" style="font-weight: bold; color: #555;">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $event->date }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="location" style="font-weight: bold; color: #555;">Location</label>
                <input type="text" name="location" class="form-control" value="{{ $event->location }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="category_id" style="font-weight: bold; color: #555;">Category</label>
                <select name="category_id" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 1.2rem; background-color: #007bff; border: none; border-radius: 4px; color: white; cursor: pointer;">Update Event</button>
            </div>
        </form>
    </div>
@endsection
