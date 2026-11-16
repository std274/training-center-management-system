
@extends('layouts.app')

@section('content')

    <h1>Students Management</h1>

    <p>Manage all registered students.</p>

    <br>

    <a href="{{ route('students.create') }}" class="btn">
        + Add New Student
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone ?? 'N/A' }}</td>
                    <td>{{ $student->course->title }}</td>

                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            Edit
                        </a>

                        |

                        <form action="{{ route('students.destroy', $student->id) }}"
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
                    <td colspan="6">No students registered yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>

    {{ $students->links() }}

@endsection
