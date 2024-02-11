@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Edit Attendance</h5>
                        </div>
                        <div class="text-center">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('attendance.update', ['attendance' => $attendance]) }}" method="post">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name</label>
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="Full Name" value="{{ $attendance->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="time_in" class="form-label">Time in</label>
                                <input name="time_in" type="text" class="form-control" id="time_in" placeholder="HH:MM AM/PM" value="{{ $attendance->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="break_out" class="form-label">Break out</label>
                                <input name="break_out" type="text" class="form-control" id="break_out" placeholder="HH:MM AM/PM" value="{{ $attendance->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="break_in" class="form-label">Break in</label>
                                <input name="break_in" type="text" class="form-control" id="break_in" placeholder="HH:MM AM/PM" value="{{ $attendance->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="time_out" class="form-label">Time out</label>
                                <input name="time_out" type="text" class="form-control" id="time_out" placeholder="HH:MM AM/PM" value="{{ $attendance->name }}">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" value="Submit Attendance">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--  <html lang="en">
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
</html> --}}
