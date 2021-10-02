@extends('home')
@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Sign In</h3>
        </div>
        <div class="col-md-6">
            <form action="{{route('auth.signin.store')}}"  method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                    @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control  @error('password') is-invalid @enderror">
                     @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
            </form>
        </div>

    </div>
@endsection
