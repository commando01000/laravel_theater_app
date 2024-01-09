@extends('admin.layout')
@section('content')

    <div style="width: 400px; height: 100%" class="card">
        <div class="card-header">Show's View Page</div>
        <div class="card-body">

            <div class="card-body overflow-hidden">
                <img src="{{ asset($Shows->Image) }}" class="w-100 h-100" alt="{{ $Shows->Name }}">
            </div>
            <div class="card-footer d-flex flex-column">
                <div class="show-name">
                    <span>Show Name: </span><p>{{ $Shows->Name }}</p>
                </div>
                <div class="show-description-view">
                    <span>Show Description: </span><p>{{ $Shows->Description }}</p>
                </div>
                <div class="show-date">
                   <span>Show Date: </span> <p>{{ $Shows->Showdate }}</p>
                </div>
                <div class="show-time">
                    <span>Show Time: </span><p>{{ $Shows->Showtime }}</p>
                </div>
            </div>
            </hr>
        </div>
    </div>
@endsection