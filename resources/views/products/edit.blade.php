<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <button class="btn btn-secondary mb-3" onclick="window.location='{{ route('products.index') }}'">Back to Products</button>
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Edit Product</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')  @csrf
                         @method('PUT')
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" value="{{  old('name', $product->name) }}" class="form-control" placeholder="Enter product name" >
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" value="{{  old('price', $product->price) }}" class="form-control" placeholder="Enter price" >
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Product description" >{{ old('description', $product->description) }}</textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>
                        <img src="{{ asset('storage/'.$product->image) }}" width="100%" height="400" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="number" value="{{ old('number', $product->category) }}"  name="category" class="form-control" placeholder="Enter category" >
                        </div>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Save Product
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
