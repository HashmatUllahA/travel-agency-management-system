<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update student form</title>
</head>
<body>
    <h2>update student form</h2>
    <form action="../edit/{{$result->id}}" method="post">
        @csrf
        <input type="text"   value="{{$result->name}}" name="txtname">
        <input type="number" value="{{$result->age}}" name="txtage">
        <input type="number" value="{{$result->class}}" name="txtclass">
        <input type="text"   value="{{$result->section}}" name="txtsection">
        <input type="submit" value="Update student" >
    </form>
</body>
</html>