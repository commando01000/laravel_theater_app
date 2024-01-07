@extends('event_registeration.layout')
@section('content')
        {!! csrf_field() !!}
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration-tab-pane" type="button" role="tab" aria-controls="registration-tab-pane" aria-selected="false">Event Registration</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container my-3">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/joker-4557864_1280.jpg') }}" class="w-100 h-100 " alt="Joker">
                            </div>
                            <div class="card-footer">
                                <p>Joker 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/348916R1.webp') }}" class="w-100 h-100 " alt="Joker">
                            </div>
                            <div class="card-footer">
                                <p>The Shift</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/160714.webp') }}" class="w-100 h-100 " alt="Joker">
                            </div>
                            <div class="card-footer">
                                <p>The Iron Claw</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/man-1139066_1280.jpg') }}" class="w-100 h-100 " alt="Joker">
                            </div>
                            <div class="card-footer">
                                <p>The Man</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="registration-tab-pane" role="tabpanel" aria-labelledby="registration-tab" tabindex="0">
        <form action="{{ url('event_registeration') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="Name" placeholder="Enter your name">
            </div>
            <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" class="form-control" id="mobile" name="Mobile_Number" placeholder="Enter your mobile number">
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email">
            </div>
            <div class="form-group">
            <label for="event_day">Theatre Event Date:</label>
            <input type="date" class="form-control" id="event_day" name="Theatre_Event_Date">
            </div>
            <div class="form-group">
            <label for="movie">Movie:</label>
            <select class="form-select" name="Movie_Name" id="movie">
                <option value="">Select Movie</option>
                <option value="Avengers">Avengers</option>
                <option value="No Time To Die">No Time To Die</option>
                <option value="Men in black 3">Men in black 3</option>
                <option value="Transformers Age Of ultron">Transformers Age Of ultron</option>
                </select>
            </div>
            <div class="form-group">
            <label for="showtime">Showtime:</label>
            <input type="time" class="form-control" id="Showtime" name="Showtime">
            </div>
            <br>
            <div class="form-group text-center"><button type="submit" class="btn btn-primary">Register Event !</button></div>
            
        </form>
        </div>
        
    </div>
@endsection