@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>旅と想いで未来を創る。</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'さあ、あなただけの表紙を作りましょう。!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection