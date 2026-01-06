@extends('layout')

@section('title', 'Student Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Student Profile</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <h6 class="card-subtitle mb-2 text-muted">BS Computer Science - 3rd Year</h6>
            
            <hr>
            
            <div class="row">
                <div class="col-md-3 fw-bold">Email:</div>
                <div class="col-md-9">johndoe@example.com</div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3 fw-bold">Student ID:</div>
                <div class="col-md-9">2023-0001</div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3 fw-bold">Address:</div>
                <div class="col-md-9">123 Main St, Davao City</div>
            </div>

            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
            </div>
        </div>
    </div>
@endsection