@extends('event_registeration.layout')
@section('content')


    <div class="card">
        <div class="card-header">Employee's View Page</div>
        <div class="card-body">


            <div class="card-body">
                <h3 class="card-title">FirstName : {{ $event_registeration->Name }}</h3>
                <p class="card-text">LastName : {{ $event_registeration->Email }}</p>
                <p class="card-text">Address : {{ $event_registeration->Address }}</p>
                <p class="card-text">Birthdate : {{ $event_registeration->Birthdate }}</p>
                <p class="card-text">Governorate : {{ $event_registeration->Governorate }}</p>
                <p class="card-text">City : {{ $event_registeration->City }}</p>
                <p class="card-text">Gender : {{ $employees->Gender }}</p>
                <p class="card-text">Phone : {{ $employees->Phone }}</p>
                <p class="card-text">Email : {{ $employees->Email }}</p>
            </div>

            </hr>

        </div>
    </div>
