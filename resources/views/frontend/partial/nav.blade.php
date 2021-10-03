<style>
    .nav-item{
        padding: 5px 10px;
    }
</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Social</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @if(\Illuminate\Support\Facades\Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Friends</a>
                    </li>
                </ul>
                    <form action="{{route('search.results')}}"  class="form-inline" method="get">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Find people" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                @endif
                <ul class="navbar-nav" style="margin-left: auto">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.index',Auth::user()->username)}}">{{\Illuminate\Support\Facades\Auth::user()->username}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Update Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.signout')}}">Sign out</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.signup')}}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.signin')}}">Sign in</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>


