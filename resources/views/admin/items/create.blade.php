@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="mt-4">
        <h1 class="mt-4 d-inline">Items</h1>
            <a href="" class="btn btn-danger float-end">Cancel Item</a>
                </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Items</a></li>
                        <li class="breadcrumb-item active">Items Create</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Items List
                        </div>
                        <div class="card-body">
                            <form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Code No</label>
                                    <input type="text" class="form-control" id="code_no" name="code_no">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" aria-label="Upload">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Discount</label>
                                    <input type="text" class="form-control" id="discount" name="discount">
                                </div>
                                <div class="mb-3">
                                    <label for="in_stock" class="form-label">In Stock</label>
                                    <select class="form-select" name="in_stock" id="in_stock">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-select" name="category_id" id="category_id">
                                        <option value="">Choose Category</option>
                                        @foreach ($categories as $category )
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                </div>
                                <div class="d-grip gap-2">
                                    <button type="submit" class="btn btn-primary w-100">Create</button>
                                </div>
                            </form>
                        </div>
@endsection