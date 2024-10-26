@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); font-family: Arial, sans-serif;">
        <h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 20px; color: #333;">All Categories</h1>
        <a href="{{ url('/categories/create') }}" class="btn btn-primary" style="margin-bottom: 20px; display: inline-block; font-size: 1.2rem;">Create Category</a>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #007bff; color: white;">
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd; font-size: 1.2rem;">ID</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd; font-size: 1.2rem;">Name</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd; font-size: 1.2rem; width: 220px;">Actions</th> <!-- Reduced width -->
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $category->id }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; font-size: 1.2rem;">{{ $category->name }}</td>
                        <td style="padding: 12px; border: 1px solid #ddd; display: flex; justify-content: space-between; font-size: 1.1rem;">
                            <div style="display: flex; gap: 10px;"> <!-- Added gap for spacing -->
                                <a href="{{ url('/categories/' . $category->id) }}" class="btn btn-info">View</a>
                                <a href="{{ url('/categories/' . $category->id . '/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('/categories/' . $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
