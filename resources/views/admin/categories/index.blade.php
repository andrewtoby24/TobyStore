@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="mt-4">
        <h1 class="mt-4 d-inline">Categories</h1>
            <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Create Categories</a>
                </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Categories List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>#</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($categories as $category )
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$category->name}}</td>
                                            <td><img src="{{$category->image}}" alt="" width="100" height="50"></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection