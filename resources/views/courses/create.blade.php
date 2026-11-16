
@extends('layouts.app')

@section('content')

    <h1>Add New Course</h1>

    <p>Enter the course information below.</p>

    <br>

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <label>Course Title</label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter course title">

        <label>Description</label>
        <textarea name="description" rows="4" placeholder="Enter course description">{{ old('description') }}</textarea>

        <label>Price</label>
        <input type="number" name="price" step="0.01" min="0" value="{{ old('price') }}" placeholder="Enter course price">

        <label>Duration (Hours)</label>
        <input type="number" name="duration" min="1" value="{{ old('duration') }}" placeholder="Enter duration">

        <button type="submit" class="btn">Save Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>

    </form>

@endsection
