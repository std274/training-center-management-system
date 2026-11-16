
@extends('layouts.app')

@section('content')

    <h1>Courses Management</h1>

    <p>Manage all available training courses.</p>

    <br>

    <a href="{{ route('courses.create') }}" class="btn">
        + Add New Course
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Title</th>
                <th>Price</th>
                <th>Duration (Hours)</th>
                <th>Students</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ number_format($course->price, 2) }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->students_count }}</td>

                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}">
                            Edit
                        </a>

                        |

                        <form action="{{ route('courses.destroy', $course->id) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        No courses available yet.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
