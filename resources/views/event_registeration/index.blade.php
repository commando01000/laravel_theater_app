
@extends('event_registeration.layout')
{{-- @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/event_registeration/create') }}" class="btn btn-success btn-sm" title="Add New Event">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="row">
                            @foreach($event_registeration as $item)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Name: {{ $item->name }}</h5>
                                            <p class="card-text">Address: {{ $item->address }}</p>
                                            <p class="card-text">Mobile: {{ $item->mobile }}</p>
                                            <a href="{{ url('/event_registeration/' . $item->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('/event_registeration/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ url('/event_registeration' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@section('content')
<div class="reserveTicket vh-100 d-flex justify-content-center align-items-center">
    <a href="{{ url('/event_registeration/create') }}" class="btn btn-danger btn-sm p-3 fs-5" title="Register Event !">
        <i aria-hidden="true" class="fa-solid fa-ticket"></i> Reserve Your Ticket Now !
    </a>
</div>

@endsection