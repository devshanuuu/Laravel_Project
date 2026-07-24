@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="mb-0">Students List</h3>

        <a href="/students/create" class="btn btn-success">
            + Add New Student
        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach($students as $student)

                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->course }}</td>

                    <td>

                        <a href="/students/{{ $student->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection