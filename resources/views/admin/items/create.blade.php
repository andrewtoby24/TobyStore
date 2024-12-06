@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="mt-4">
        <h1 class="mt-4 d-inline">Posts</h1>
            <a href="" class="btn btn-danger float-end">Cancel</a>
                </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Posts</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Create Posts
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Categories</label>
                                    <select class="form-select" name="category_id" id="category_id">
                                        <option selected>Choose....</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" aria-label="Upload">
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