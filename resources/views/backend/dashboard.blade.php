@extends('backend.layouts.admin')

@section('title', 'Overview')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard Overview</h2>
        <span class="text-muted">Welcome back, {{ Auth::user()->name }} 👋</span>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Active Surveys</h5>
                    <h2 class="display-5 fw-bold">3</h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm border-0 bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h2 class="display-5 fw-bold">12</h2>
                </div>
            </div>
        </div>
    </div>
@endsection