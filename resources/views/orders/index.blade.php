@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Orders List</h2>
    <a href="{{ route('orders.create') }}" class="mb-3 btn btn-success">Add Order</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> OrderName</th>
                <th>CustomerNo</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->ordername }}</td>
                    <td>{{ $order->customerno }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
