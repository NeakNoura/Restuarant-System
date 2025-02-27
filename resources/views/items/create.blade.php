@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Add New Item</h2>
    <a href="{{ route('items.index') }}" class="btn btn-danger mb-3">Back</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <textarea name="category" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Item</button>
    </form>
</div>
@endsection

