<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Edit Attendance</h1>
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </div><br>
        <form action="{{ route('attendance.update', ['attendance' => $attendance]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value="{{ $attendance->name }}"/>
            </div><br>
            <div>
                <label>Time in</label>
                <input type="text" name="time_in" placeholder="Time in" value="{{ $attendance->time_in }}"/>
            </div><br>
            <div>
                <label>Break out</label>
                <input type="text" name="break_out" placeholder="Break out" value="{{ $attendance->break_out }}"/>
            </div><br>
            <div>
                <label>Break in</label>
                <input type="text" name="break_in" placeholder="Break in" value="{{ $attendance->break_in }}"/>
            </div><br>
            <div>
                <label>Time out</label>
                <input type="text" name="time_out" placeholder="Time out" value="{{ $attendance->time_out }}"/>
            </div><br>
            <div>
                <input type="submit" value="Submit Attendance">
            </div>
        </form>
    </body>
</html>
