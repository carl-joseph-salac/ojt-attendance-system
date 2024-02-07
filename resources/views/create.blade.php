<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Fill up Attendance</h1>
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </div><br>
        <form action="{{ route('attendance.store') }}" method="post">
            @csrf
            @method('post')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name"/>
            </div><br>
            <div>
                <label>Time in</label>
                <input type="text" name="time_in" placeholder="Time in"/>
            </div><br>
            <div>
                <label>Break out</label>
                <input type="text" name="break_out" placeholder="Break out"/>
            </div><br>
            <div>
                <label>Break in</label>
                <input type="text" name="break_in" placeholder="Break in"/>
            </div><br>
            <div>
                <label>Time out</label>
                <input type="text" name="time_out" placeholder="Time out"/>
            </div><br>
            <div>
                <input type="submit" value="Submit Attendance">
            </div>
        </form>
    </body>
</html>
