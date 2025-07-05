@extends('layouts.admin')

@section('content')

<div class="card mt-5">
    <div class="card-header">
        <h4 class="mb-0">
           Categories
            <a href="{{ url('admin/categories/create') }}" class="btn btn-primary float-end">Add Category</a>
        </h4>
    </div>

    @session ('status')
        <div class="alert alert-success">{{ session('status') }}</div>
    @endsession
    
    <div class="card-body">
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>                    
                    <th>Status</th>
                    <th>Popular</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->status == '0' ? 'Show' : 'Hidden' }}</td>
                    <td>{{ $category->popular == '1' ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ url('admin/categories/'.$category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>


    </div>
</div>

@endsection