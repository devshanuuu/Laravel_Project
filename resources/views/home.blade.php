@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-body text-center">

        <h1 class="display-5">
            Welcome to Student Management System
        </h1>

        <p class="lead mt-3">
            A simple Laravel CRUD application for managing student records.
        </p>

        <hr>

        <a href="/students" class="btn btn-primary btn-lg">
            View Students
        </a>

    </div>

</div>

@endsection