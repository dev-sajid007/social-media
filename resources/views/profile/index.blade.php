@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-5">
            @include('user.partials.userblock')
            <hr>
        </div>
        <div class="col-lg-4 col-lg-offset-3">
            <h2>Frinds</h2>
        </div>
    </div>
@endsection
