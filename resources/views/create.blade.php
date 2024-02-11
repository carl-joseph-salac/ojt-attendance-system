@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Fill-up Attendance</h5>
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
                        <form action="{{ route('attendance.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name</label>
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <label for="time_in" class="form-label">Time in</label>
                                <input name="time_in" type="text" class="form-control" id="time_in" placeholder="HH:MM AM/PM">
                            </div>
                            <div class="mb-3">
                                <label for="break_out" class="form-label">Break out</label>
                                <input name="break_out" type="text" class="form-control" id="break_out" placeholder="HH:MM AM/PM">
                            </div>
                            <div class="mb-3">
                                <label for="break_in" class="form-label">Break in</label>
                                <input name="break_in" type="text" class="form-control" id="break_in" placeholder="HH:MM AM/PM">
                            </div>
                            <div class="mb-3">
                                <label for="time_out" class="form-label">Time out</label>
                                <input name="time_out" type="text" class="form-control" id="time_out" placeholder="HH:MM AM/PM">
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
