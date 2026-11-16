
@extends('layouts.app')

@section('content')

    <h1>Edit Course</h1>

    <p>Update the course information below.</p>

    <br>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Course Title</label>
        <input type="text" name="title"
               value="{{ old('title', $course->title) }}"
               placeholder="Enter course title">

        <label>Description</label>
        <textarea name="description" rows="4"
                  placeholder="Enter course description">{{ old('description', $course->description) }}</textarea>

        <label>Price</label>
        <input type="number" name="price" step="0.01" min="0"
               value="{{ old('price', $course->price) }}">

        <label>Duration (Hours)</label>
        <input type="number" name="duration" min="1"
               value="{{ old('duration', $course->duration) }}">

        <button type="submit" class="btn">Update Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>

    </form>

@endsection

