@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="mt-4">
        <h1 class="mt-4 d-inline">Categories</h1>
            <a href="" class="btn btn-danger float-end">Cancel Category</a>
                </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Categories</a></li>
                        <li class="breadcrumb-item active">Categories Create</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Categories List
                        </div>
                        <div class="card-body">
                            <form action="{{route('backend.categories.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Categories Name</label>
                                    <input type="text" class="form-control" id="image" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" aria-label="Upload">
                                </div>
                                <div class="d-grip gap-2">
                                    <button type="submit" class="btn btn-primary w-100">Create</button>
                                </div>
                            </form>
                        </div>
@endsection