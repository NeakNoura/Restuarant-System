@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Order</h2>
    <a href="{{ route('orders.index') }}" class="mb-3 btn btn-danger">Back</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ordername" class="form-label">Order Name</label>
            <input type="name" id="ordername" name="ordername" class="form-control" value="{{ $order->ordername }}" placeholder="Enter Ordername" required>
        </div>

        <div class="mb-3">
            <label for="customerno" class="form-label">CustomerNo:</label>
            <input type="text" name="orderno" id="customerno" class="form-control" placeholder="Enter Name"  value="{{ $order->customerno }}" required>
            </input>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $order->quantity }}" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="amount" name="amount" id="amount" class="form-control" placeholder="Enter amount"  value="{{ $order->amount }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="category" name="category" id="category" class="form-control" placeholder="" value="{{ $order->category }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>
@endsection
