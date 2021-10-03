<div class="media mt-3">
    <a href="{{route('profile.index',$user->username)}}"><img width="60" class="mr-3" src="{{$user->getAvaterImage()}}" alt="image"></a>
    <div class="media-body">
        <a href="{{route('profile.index',$user->username)}}"><h5 class="mt-0">{{$user->username}}</h5></a>
    </div>
</div>
{{--$user->getAvaterImage()--}}
