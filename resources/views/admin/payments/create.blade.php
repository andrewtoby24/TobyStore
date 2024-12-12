@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="mt-4">
        <h1 class="mt-4 d-inline">Payments</h1>
            <a href="" class="btn btn-danger float-end">Cancel Payment</a>
                </div>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">Payments</a></li>
                        <li class="breadcrumb-item active">Payments Create</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Payments List
                        </div>
                        <div class="card-body">
                            <form action="{{route('backend.payments.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Payment Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="image">Payment Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo" aria-label="Upload">
                                </div>
                                <div class="d-grip gap-2">
                                    <button type="submit" class="btn btn-primary w-100">Create</button>
                                </div>
                            </form>
                        </div>
@endsection