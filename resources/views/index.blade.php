<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <h1>OJT Attendance System (CRUD)</h1>
        <div>
            @if (session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div>
            <a href="{{ route('attendance.create') }}">
                Create Attendance
            </a>
        </div><br>
        <table border="1">
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
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->id }}</td>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->time_in }}</td>
                    <td>{{ $attendance->break_out }}</td>
                    <td>{{ $attendance->break_in }}</td>
                    <td>{{ $attendance->time_out }}</td>
                    <td>
                        <a href="{{ route('attendance.edit', ['attendance' => $attendance]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('attendance.destroy', ['attendance' => $attendance]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
