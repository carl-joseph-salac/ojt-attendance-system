@extends('layouts.app')

@section('content')
<div class="container border border-secondary rounded p-4">
    <div>
        @if (session()->has('created'))
            <div class="alert alert-success alert-dismissable d-flex justify-content-between align-items-center"
                role="alert">
                Attendance Created Successfully!
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
        @elseif (session()->has('updated'))
            <div class="alert alert-success alert-dismissable d-flex justify-content-between align-items-center"
                role="alert">
                Attendance Updated Successfully!
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
        @elseif (session()->has('deleted'))
            <div class="alert alert-success alert-dismissable d-flex justify-content-between align-items-center"
                role="alert">
                Attendance Deleted Successfully!
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
        @endif
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('attendance.create') }}">Fill-up Attendance</a>
    </div><br>
    <div class="table-responsive rounded">
        <table class="table table-striped table-bordered table-hover table-dark border-success align-middle text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Time in</th>
                    <th>Break out</th>
                    <th>Break in</th>
                    <th>Time out</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->time_in }}</td>
                        <td>{{ $attendance->break_out }}</td>
                        <td>{{ $attendance->break_in }}</td>
                        <td>{{ $attendance->time_out }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm"
                                href="{{ route('attendance.edit', ['attendance' => $attendance]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post"
                                action="{{ route('attendance.destroy', ['attendance' => $attendance]) }}">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
