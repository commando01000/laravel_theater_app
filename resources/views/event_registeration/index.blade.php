@extends('event_registeration.layout')

@section('header')
    <div class="header-image">
        <img src="{{ asset('assets/272200-cinema-movies-theatre-and-theater-hd.jpg') }}" alt="theater">
    </div>
@endsection

@section('content')
<div class="reserveTicket">
    <a href="{{ url('/event_registeration/create') }}" class="btn btn-dark  btn-sm p-3 fs-5 register-ticket position-absolute" title="Register Event !">
        <i aria-hidden="true" class="fa-solid fa-ticket"></i> Reserve Your Ticket Now !
    </a>
</div>
@endsection
