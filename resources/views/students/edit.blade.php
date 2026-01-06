@extends('layout')

@section('title', 'Edit Student')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Student</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" value="John Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" value="johndoe@example.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <input type="text" class="form-control" value="BS Computer Science">
                </div>
                <div class="mb-3">
                    <label class="form-label">Year Level</label>
                    <input type="number" class="form-control" value="3">
                </div>
                
                <button type="button" class="btn btn-success">Update</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection