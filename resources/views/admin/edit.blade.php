@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Editing Page</div>
        <div class="card-body">
            <form action="{{ url('admin/' . $Shows->id) }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PATCH')
                
                <div class="form-group">
                    <label for="name">Show Name:</label>
                    <input type="text" class="form-control" id="name" name="Name" value="{{ $Shows->Name }}">
                </div>
                
                <br>
                
                <div class="form-group p-3">
                    <label for="Description">Show Description:</label>
                    <input type="text" class="form-control" id="description" value="{{ $Shows->Description }}" name="Description">
                </div>
                
                <br>
                
                <div class="form-group">
                    <input type="file" required class="form-control" value="{{ $Shows->Image }}" id="Image" name="Image">
                </div>
                
                <br>
                
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="0" id="1" {{ $Shows->Rating == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        0
                    </label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="1" id="2" {{ $Shows->Rating == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        1
                    </label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="2" id="3" {{ $Shows->Rating == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        2
                    </label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="3" id="4" {{ $Shows->Rating == 3 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        3
                    </label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="4" id="5" {{ $Shows->Rating == 4 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        4
                    </label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" name="Rating" type="radio" value="5" id="6" {{ $Shows->Rating == 5 ? 'checked' : '' }}>
                    <label class="form-check-label" for="">
                        5
                    </label>
                </div>
                
                <br>
                
                <div class="form-group my-2">
                    <label for="ShowDate">Show Date:</label>
                    <input type="date" class="form-control" id="ShowDate" name="Showdate" value="{{ $Shows->Showdate }}">
                </div>
                
                <br>
                
                <div class="form-group">
                    <label for="Showtime">Show Time:</label>
                    <input type="time" class="form-control" id="Showtime" name="Showtime" value="{{ $Shows->Showtime }}">
                </div>
                
                <br>
                
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Update Show !</button>
                </div>
            </form>
        </div>
    </div>
@endsection
