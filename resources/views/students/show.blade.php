@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('students.index') }}" class="btn btn-light me-3 rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h1 class="mb-0">Student Profile</h1>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <div class="mb-4 pb-4 border-bottom">
                        <h2 class="mb-2">{{ $student->first_name }} {{ $student->last_name }}</h2>
                        <div class="text-muted">
                            <span class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'inactive' ? 'warning' : 'secondary') }}">
                                {{ ucfirst($student->status) }}
                            </span>
                            <span class="ms-2 text-dark">#{{ $student->enrollment_number }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Email Address</label>
                            <p class="mb-0">{{ $student->email }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Phone Number</label>
                            <p class="mb-0">{{ $student->phone ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Date of Birth</label>
                            <p class="mb-0">{{ $student->date_of_birth ? date('F d, Y', strtotime($student->date_of_birth)) : 'N/A' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Enrollment Date</label>
                            <p class="mb-0">{{ date('F d, Y', strtotime($student->enrollment_date)) }}</p>
                        </div>
                    </div>

                    <div class="row mb-4 pb-4 border-bottom">
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Address</label>
                            <p class="mb-0">{{ $student->address ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">City</label>
                            <p class="mb-0">{{ $student->city ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">State</label>
                            <p class="mb-0">{{ $student->state ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Zip Code</label>
                            <p class="mb-0">{{ $student->zip_code ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning me-2">
                            <i class="bi bi-pencil me-2"></i>Edit Student
                        </a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">
                                <i class="bi bi-trash me-2"></i>Delete Student
                            </button>
                        </form>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary ms-2">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection