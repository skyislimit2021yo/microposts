@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $user->name }}</h3>
            </div>
            <div class="card-body">
                {{--ユーザーのメールアドレスを基にGravatarを取得して表示--}}
                <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500] )}}" aut="">
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{--ユーザー詳細タブ--}}
                <li class="nav-item"><a href="#" class="nav-link">TimeLine</a></li>
                {{--フォロー一覧タブ--}}
                <li class="nav-item"><a href="#" class="nav-link">Followings</a></li>
                {{--フォロワー一覧タブ--}}
                <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
            </ul>
        </div>
    </div>
@endsection
            