    @extends('layout')
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
                {{-- <td><img src="{{Storage::url($s -> img)}}" alt="" height="40px"></td> --}}
                <td><iframe src="{{Storage::url($s -> img)}}" frameborder="0"></iframe></td>
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

