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
                                <div class="card-footer d-flex justify-content-between">
                                    <div class="show-name">
                                        <p>{{ $show->Name }}</p>
                                    </div>
                                    <div class="show-settings">
                                        <a href="{{ url('/admin/' . $show->id) }}"
                                            title="View Employee"><button class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/' . $show->id . '/edit') }}"
                                            title="Edit Employee"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" action="{{ url('/admin' . '/' . $show->id) }}">
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
                <input type="text" class="form-control" id="name" name="Name" placeholder="Enter show name">
                </div>
                <div class="form-group">
                    <label for="Description">Show Description:</label>
                    <input type="text" class="form-control" id="description" name="Description" placeholder="Enter show name">
                </div>
                <br>
                <div class="form-group">
                    <input type="file" class="form-control" id="Image" name="Image" placeholder="Enter show image">
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
                    <input type="date" class="form-control" id="ShowDate" name="Showdate">
                </div>
                <br>
                <div class="form-group">
                    <label for="Showtime">Show Time:</label>
                    <input type="time" class="form-control" id="Showtime" name="Showtime">
                </div>
                <br>
                <div class="form-group text-center"><button type="submit" class="btn btn-primary">Add Show !</button></div>
            </form>
        </div>
    </div>
@endsection