@extends('layout')

@section('title', 'Welcome')

@section('content')
    <div class="row align-items-center justify-content-center" style="min-height: 60vh;">
        <div class="col-lg-8 text-center">
            <div class="mb-4">
                <span class="badge bg-light text-primary border border-primary rounded-pill px-3 py-2">
                    Academic Year 2024-2025
                </span>
            </div>
            <h1 class="display-3 fw-bold mb-4 text-dark">
                Manage Students <br>
                <span class="text-primary">With Excellence</span>
            </h1>
            <p class="lead text-muted mb-5 mx-auto" style="max-width: 600px;">
                A comprehensive digital solution for managing student records, 
                tracking academic progress, and streamlining administrative tasks.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg px-5">
                    View Students <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="{{ route('students.create') }}" class="btn btn-outline-secondary btn-lg px-4">
                    Add New
                </a>
            </div>
            
            <div class="row mt-5 pt-5 border-top">
                <div class="col-4">
                    <h3 class="fw-bold text-dark">500+</h3>
                    <p class="text-muted small">Active Students</p>
                </div>
                <div class="col-4">
                    <h3 class="fw-bold text-dark">12</h3>
                    <p class="text-muted small">Courses</p>
                </div>
                <div class="col-4">
                    <h3 class="fw-bold text-dark">100%</h3>
                    <p class="text-muted small">Secure Data</p>
                </div>
            </div>
        </div>
    </div>
@endsection