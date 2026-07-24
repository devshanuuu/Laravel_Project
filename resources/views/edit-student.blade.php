<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h2>Edit Student</h2>

    <form action = "/students/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label><br>
        <input type="text" value="{{ $student->name }}">
        <br><br>

        <label>Email</label><br>
        <input type="email" value="{{ $student->email }}">
        <br><br>

        <label>Age</label><br>
        <input type="number" value="{{ $student->age }}">
        <br><br>

        <label>Course</label><br>
        <input type="text" value="{{ $student->course }}">
        <br><br>

    </form>

</body>
</html>