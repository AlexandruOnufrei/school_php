<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Students List</h1>
    <h2><td>Name</td>
    <td>Surname</td>
    <td>Email</td></h2>
    @foreach ($student as $s)
        <table>
            <tr>
                <td>{{$s -> name}}</td>
                <td>{{$s -> surname}}</td>
                <td>{{$s -> email}}</td>
                <td><img src="{{Storage::url($s -> img)}}" alt=""></td>
                <td><a href="{{route('students.edit', $s)}}">Edit</a></td>
                <td>
                    <form action="{{route('students.destroy', $s)}}" method="POST">
                    @csrf
                    @method("DELETE") 
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    @endforeach

    <a href="{{route('students.create')}}">Add users</a>

</body>
</html>