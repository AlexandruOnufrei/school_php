@extends('layout')
    {{isset($student)? "update".$student->name: 'create'}}
    <form
    @if (isset($student))
        action="{{route('students.update', $student)}}"
    @else
        action="{{route('students.store')}}"
    @endif 
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @isset($student)
        @method("PUT")
    @endisset
        <input 
            type="text" 
            name="name" 
            placeholder="name" 
            value="{{isset($student)? $student->name: null}}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        <input 
            type="text" 
            name="surname" 
            placeholder="surname" 
            value="{{isset($student)? $student->surname: null}}">
            @error('surname')
                <div>{{ $message }}</div>
            @enderror
        <input 
            type="text" 
            name="email" 
            placeholder="email" 
            value="{{isset($student)? $student->email: null}}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        <input 
            type="file"
            name="img"
            value="Select Picture"
        >
        <button type="submit">Save</button>
    </form>
