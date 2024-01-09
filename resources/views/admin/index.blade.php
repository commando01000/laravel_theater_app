@extends('admin.layout')
@section('content')
        {!! csrf_field() !!}
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration-tab-pane" type="button" role="tab" aria-controls="registration-tab-pane" aria-selected="false">Add Show</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="attendees-tab" data-bs-toggle="tab" data-bs-target="#attendees-tab-pane" type="button" role="tab" aria-controls="attendees-tab-pane" aria-selected="false">Attendees</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container my-3">
                <div class="row gy-4">
                    @foreach ($Shows as $show)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset($show->Image) }}" class="w-100 h-100" alt="{{ $show->Name }}">
                                </div>
                                <div class="card-footer">
                                    <div class="show-name text-center">
                                        <p>{{ $show->Name }}</p>
                                    </div>
                                    <div class="show-settings d-flex flex-row flex-nowrap justify-content-center">
                                        <a href="{{ url('/admin/' . $show->id) }}" class="px-1"
                                            title="View Show"><button class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/' . $show->id . '/edit') }}" class="px-1"
                                            title="Edit Show"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" class="px-1" action="{{ url('/admin' . '/' . $show->id) }}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="registration-tab-pane" role="tabpanel" aria-labelledby="registration-tab" tabindex="0">
            <form action="{{ url('admin') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group my-3">
                <label for="name">Show Name:</label>
                <input type="text" class="form-control" id="name" @required(true) name="Name" placeholder="Enter show name">
                </div>
                <div class="form-group">
                    <label for="Description">Show Description:</label>
                    <input type="text" class="form-control" id="description" @required(true) name="Description" placeholder="Enter show name">
                </div>
                <br>
                <div class="form-group">
                    <input type="file" class="form-control" id="Image" @required(true) name="Image" placeholder="Enter show image">
                </div>
                <br>
                Rating:
                <div class="form-check d-inline-block">
                    <input class="form-check-input"  type="checkbox" name="Rating" value="0" id="1">
                    <label class="form-check-label" for="">
                      0
                    </label>
                  </div>
                  <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" name="Rating" value="1" id="2">
                     <label class="form-check-label" for="">
                      1
                    </label>
                  </div>
                  <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" name="Rating" value="2" id="3">
                    <label class="form-check-label" for="">
                      2
                    </label>
                  </div>
                  <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" name="Rating" value="3" id="4">
                    <label class="form-check-label" for="">
                      3
                    </label>
                  </div>
                  <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" name="Rating" value="4" id="5">
                    <label class="form-check-label" for="">
                      4
                    </label>
                  </div>
                  <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" name="Rating" value="5" id="6">
                    <label class="form-check-label" for="">
                      5
                    </label>
                  </div>
                  <br>
                  <div class="form-group my-2">
                    <label for="ShowDate">Show Date:</label>
                    <input type="date" class="form-control" @required(true) id="ShowDate" name="Showdate">
                </div>
                <br>
                <div class="form-group">
                    <label for="Showtime">Show Time:</label>
                    <input type="time" class="form-control" id="Showtime" @required(true) name="Showtime">
                </div>
                <br>
                <div class="form-group text-center"><button type="submit" class="btn btn-primary">Add Show !</button></div>
            </form>
        </div>
        <div class="tab-pane fade mt-5 p-5" id="attendees-tab-pane" role="tabpanel" aria-labelledby="attendees-tab" tabindex="0">
            <div class="table-responsive my-3">
                <table class="table table-striped table-bordered rounded-3 my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Theatre Event Date</th>
                            <th scope="col">Movie Name</th>
                            <th scope="col">Show Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($attendees as $attendee)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$attendee->Name}}</td>
                                <td>{{$attendee->Mobile_Number}}</td>
                                <td>{{$attendee->Theatre_Event_Date}}</td>
                                <td>{{$attendee->Movie_Name}}</td>
                                <td>{{$attendee->Showtime}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No attendees found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
        </div>
@endsection
