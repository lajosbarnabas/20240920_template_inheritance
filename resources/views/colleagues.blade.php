@extends('layouts.app')

@section('title', 'Colleagues')

@section('content')
    <ul>
        @foreach($colleagues as $c)
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-light">{{$c->name}}</li>
                    <li class="list-group-item bg-dark text-light">{{$c->email}}</li>
                    <li class="list-group-item bg-dark text-light">{{$c->phone}}</li>
                </ul>
            </div>
        @endforeach
    </ul>
@endsection