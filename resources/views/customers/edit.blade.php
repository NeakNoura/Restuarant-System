@extends('layouts.layout')

@section('content')
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="text-white card-header bg-primary">
                <h4 class="mb-0">Edit Customer</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="customerno" class="form-label">CustomerNo:</label>
                        <input type="text" id="customerno" name="customerno" value="{{ $customer->customerno }}" class="form-control" placeholder="Enter CustomerNo" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" id="phone" name="phone" value="{{ $customer->phone }}" class="form-control" placeholder="Enter Phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" id="address" name="address" value="{{ $customer->address }}" class="form-control" placeholder="Enter Address" required>
                    </div>

                    
                    

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Customer</button>
                        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>