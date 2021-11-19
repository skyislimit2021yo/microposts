@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
    
        {!! Form::open(['user.unfollow', $user->id], 'method' => 'delete') !!}
            {!! Form::submit('unfollow', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
    
    @else
        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
            {!! Form::submit('Follow', ['class' => 'btn btn-primary btn-block'])!!}
        {!! Form::close() !!}
    @endif
@endif