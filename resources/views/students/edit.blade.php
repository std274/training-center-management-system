
@extends('layouts.app')

@section('content')

    <h1>Edit Student</h1>

    <p>Update the student information below.</p>

    <br>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Student Name</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}">

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}">

        <label>Phone (Optional)</label>
        <input type="text" name="phone"
               value="{{ old('phone', $student->phone) }}">

        <label>Select Course</label>
        <select name="course_id">

            <option value="">Choose a course</option>

            @foreach($courses as $course)
                <option value="{{ $course->id }}"
                    {{ old('course_id', $student->course_id) == $course->id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach

        </select>

        <button type="submit" class="btn">Update Student</button>

        <a href="{{ route('students.index') }}">Cancel</a>

    </form>

@endsection
