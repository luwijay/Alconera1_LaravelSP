@extends('layout')

@section('title', 'Student List')

@section('content')
    <div class="row mb-4 align-items-center">
        <div class="col">
            <h2 class="fw-bold text-dark mb-0">Student List</h2>
            <p class="text-muted mb-0">Manage and view all registered students</p>
        </div>
        <div class="col-auto">
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-2"></i>Add New Student
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm overflow-hidden">
        <div class="card-body p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 ps-4 text-uppercase text-muted small fw-bold">ID</th>
                        <th class="py-3 text-uppercase text-muted small fw-bold">Student Name</th>
                        <th class="py-3 text-uppercase text-muted small fw-bold">Course</th>
                        <th class="py-3 text-uppercase text-muted small fw-bold">Year</th>
                        <th class="py-3 text-end pe-4 text-uppercase text-muted small fw-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 fw-bold text-primary">#1001</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center text-primary fw-bold me-3" style="width: 40px; height: 40px;">
                                    JD
                                </div>
                                <div>
                                    <div class="fw-bold">John Doe</div>
                                    <div class="small text-muted">john@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-soft-primary text-primary bg-opacity-10 px-3 py-2 rounded-pill">BSCS</span></td>
                        <td>3rd Year</td>
                        <td class="text-end pe-4">
                            <a href="{{ route('students.show') }}" class="btn btn-light btn-sm text-muted" title="View">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('students.edit') }}" class="btn btn-light btn-sm text-primary ms-1" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="ps-4 fw-bold text-primary">#1002</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center text-success fw-bold me-3" style="width: 40px; height: 40px;">
                                    JS
                                </div>
                                <div>
                                    <div class="fw-bold">Jane Smith</div>
                                    <div class="small text-muted">jane@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-soft-success text-success bg-opacity-10 px-3 py-2 rounded-pill">BSIT</span></td>
                        <td>2nd Year</td>
                        <td class="text-end pe-4">
                            <a href="#" class="btn btn-light btn-sm text-muted" title="View">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-sm text-primary ms-1" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-white py-3 border-0">
            <small class="text-muted">Showing 2 students</small>
        </div>
    </div>
@endsection