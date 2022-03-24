@extends('layouts.app')

@section('content')
     @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                {{--ユーザ情報--}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('backpackersnotes.form')
                {{-- 投稿一覧 --}}
                @include('backpackersnotes.backpackersnotes')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>旅で人と人との未来を創る。</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'さあ、あなただけの地図を作りましょう。', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection