@extends('layout')

@section('title', 'Add New Student')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('students.index') }}" class="btn btn-light me-3 rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h2 class="fw-bold mb-0">Add New Student</h2>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <form>
                        <h5 class="mb-4 text-primary">Personal Information</h5>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fullName" placeholder="Full Name">
                            <label for="fullName">Full Name</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Email Address</label>
                        </div>

                        <h5 class="mb-4 text-primary">Academic Details</h5>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="courseSelect">
                                        <option selected>Select Course</option>
                                        <option value="BSCS">BS Computer Science</option>
                                        <option value="BSIT">BS Information Tech</option>
                                    </select>
                                    <label for="courseSelect">Course</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="yearSelect">
                                        <option selected>Select Year</option>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                    </select>
                                    <label for="yearSelect">Year Level</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="button" class="btn btn-primary btn-lg">Save Student Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection