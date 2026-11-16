
@extends('layouts.app')

@section('content')

    <h1>Register New Student</h1>

    <p>Enter the student information below.</p>

    <br>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Student Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}"
               placeholder="Enter student name">

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Enter student email">

        <label>Phone (Optional)</label>
        <input type="text" name="phone"
               value="{{ old('phone') }}"
               placeholder="Enter phone number">

        <label>Select Course</label>
        <select name="course_id">
            <option value="">Choose a course</option>

            @foreach($courses as $course)
                <option value="{{ $course->id }}"
                    {{ old('course_id') == $course->id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach

        </select>

        <button type="submit" class="btn">Register Student</button>

        <a href="{{ route('students.index') }}">Cancel</a>

    </form>

@endsection
