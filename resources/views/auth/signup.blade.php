@extends('home')
@section('content')

    <div class="row mt-5">
      <div class="col-md-12">
          <h3>Sign Up</h3>
      </div>
        <div class="col-md-6">
            <form action="{{route('auth.signup.store')}}"  method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                    @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror">
                     @if($errors->has('username'))
                        <div class="text-danger">{{$errors->first('username')}}</div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control  @error('password') is-invalid @enderror">
                     @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">Sign up</button>
                </div>
            </form>
        </div>

    </div>
@endsection
