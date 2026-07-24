<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>

    <h1>Add Student</h1>

    <form action ="/students" method ="POST">
         @csrf
        
        <label>Name</label>
        <br>
        <input type="text" name = "name">
        <br><br>

        <label>Email</label>
        <br>
        <input type="email" name = "email">
        <br><br>

        <label>Age</label>
        <br>
        <input type="number" name = "age">
        <br><br>

        <label>Course</label>
        <br>
        <input type="text" name = "course">
        <br><br>

        <button type="submit">
            Save Student
        </button>

    </form>

</body>

</html>