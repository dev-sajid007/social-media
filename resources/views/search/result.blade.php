@extends('home')
@section('content')
    <h3>You are search for "{{Request::input('query')}}"</h3>
    @if(!$users->count())
        <h3>No user found :)</h3>
    @else
    <div class="row">
        <div class="col-lg-12">
            @foreach($users as $user)
            @include('user.partials.userblock')
            @endforeach
        </div>
    </div>
    @endif
@endsection
