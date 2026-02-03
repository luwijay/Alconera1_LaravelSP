@extends('layout')

@section('title', 'Students')

@section('content')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-0">
                <i class="bi bi-people-fill me-2"></i>Students
            </h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i>Add New Student
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($students->isEmpty())
        <div class="alert alert-info text-center py-5">
            <p class="mb-0">No students found. <a href="{{ route('students.create') }}">Add your first student</a></p>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Enrollment #</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td><strong>#{{ $student->id }}</strong></td>
                            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->enrollment_number }}</td>
                            <td>
                                <span class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'inactive' ? 'warning' : 'secondary') }}">
                                    {{ ucfirst($student->status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info me-2" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning me-2" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection