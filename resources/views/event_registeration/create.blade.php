@extends('event_registeration.layout')
@section('content')
        {!! csrf_field() !!}
    <ul class="nav nav-tabs m-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Review Shows</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration-tab-pane" type="button" role="tab" aria-controls="registration-tab-pane" aria-selected="false">Event Registration</button>
        </li>
    </ul>
    <div class="tab-content shadow p-3" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container my-3">
                <div class="row gy-4">
                    @foreach ($Shows as $show)
                        <div class="col-md-4">
                            <div class="card text-center position-relative">
                                <div class="layer">
                                    <div class="show-description d-flex justify-content-center align-items-center w-100 h-100">
                                        <p>{{ $show->Description }}</p>
                                    </div>
                                </div>
                                <div class="options-layer">
                                    <ul class="social-links d-flex flex-column justify-content-center align-items-center">
                                        <li>
                                          <a href="" target="_blank">
                                            <i class="fa-solid fa-video"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="" target="_blank">
                                            <i class="fa-solid fa-ticket"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="" target="_blank">
                                            <i class="fa-regular fa-heart"></i>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="" target="_blank">
                                            <i class="fa-solid fa-share-from-square"></i>
                                          </a>
                                        </li>
                                      </ul>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset($show->Image) }}" class="w-100 h-100" alt="{{ $show->Name }}">
                                </div>
                                <div class="card-footer">
                                    <div class="show-name">
                                        <p>{{ $show->Name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    <label for="movie">Movie:</label>
                    <select class="form-select" name="Movie_Name" id="movie" onchange="updateShowtimes()">
                        <option value="">Select a movie !</option>
                        @foreach ($Shows as $show)
                            <option value="{{ $show->Name }}">{{ $show->Name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="eventDate">Theater Event Date:</label>
                    <select class="form-select" name="Theatre_Event_Date" id="eventDate">
                        <option value="">Select a theater event date !</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label for="showtime">Showtime:</label>
                    <select class="form-select" name="Showtime" id="showtime">
                        <option value="">Select a movie first</option>
                    </select>
                </div>
                
                <script>
                    function clearDropdown(dropdown) {
                        var length = dropdown.options.length;
                        for (var i = length - 1; i >= 0; i--) {
                            dropdown.remove(i);
                        }
                    }
                    function updateShowtimes() {
                        var movieDropdown = document.getElementById('movie');
                        var selectedMovie = movieDropdown.value;
                        var showtimeDropdown = document.getElementById('showtime');
                        var eventDateDropdown = document.getElementById('eventDate');

                        // Clear existing options
                        clearDropdown(showtimeDropdown);
                        clearDropdown(eventDateDropdown);

                        var ShowsData = {!! json_encode($Shows) !!};
                
                        // Find the selected movie in the Shows array
                        var foundShows = [];
                        ShowsData.forEach(function (show) {
                            if (show.Name === selectedMovie) {
                                foundShows.push(show);
                            }
                        });
                        // console.log(foundShows)
                        // If shows are found, update the showtime dropdown
                        if (foundShows.length > 0) {
                            for(var i = 0; i < foundShows.length; i++)
                            {
                                var showtimes = foundShows[i].Showtime;

                                var option = document.createElement('option');
                                option.value = showtimes;
                                option.text = showtimes;
                                showtimeDropdown.add(option);
                                
                                var showdate = foundShows[i].Showdate

                                var option2 = document.createElement('option');
                                option2.value = showdate;
                                option2.text = showdate;
                                eventDateDropdown.add(option2);
                            }
                        }
                    }
                </script>
                <br>
                <div class="form-group text-center"><button type="submit" class="btn btn-primary">Register Event !</button></div>
            </form>
        </div>
    </div>
@endsection