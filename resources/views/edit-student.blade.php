@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header">
        <h3>Edit Student</h3>
    </div>

    <div class="card-body">

        <form action="/students/{{ $student->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ $student->name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ $student->email }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input
                    type="number"
                    name="age"
                    class="form-control"
                    value="{{ $student->age }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input
                    type="text"
                    name="course"
                    class="form-control"
                    value="{{ $student->course }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Update Student
            </button>

            <a href="/students" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>

</div>

@endsection