@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header">
        <h3>Add Student</h3>
    </div>

    <div class="card-body">

        <form action="/students" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">
                Save Student
            </button>

            <a href="/students" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>

</div>

@endsection