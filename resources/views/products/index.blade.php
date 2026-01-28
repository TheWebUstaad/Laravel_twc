<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Product List</h3>
    <button class="btn btn-success mb-3" onclick="window.location='{{ route("products.create") }}'">Add New Product</button>
    <div class="table-responsive">
         @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
        @endif
         @if (session('danger'))
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
        @endif
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td> {{ $product->description }}</td>
                    <td>
                        <img src="{{ asset('storage/'. $product->image)}}" width="100" height="100" class="img-thumbnail" alt="">
                    </td>
                    <td>{{ $product->category->name}}</td>
                    <td>
                        <a  class="btn btn-sm btn-primary" href="{{ route('products.edit',  $product->id) }}">Edit </a>
                        <form action="{{ route('products.destroy', $product->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        
                        
                    </td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
