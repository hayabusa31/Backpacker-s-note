@if (count($backpackersnotes) > 0)
    <ul class="list-unstyled">
        @foreach ($backpackersnotes as $backpackersnote)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($backpackersnote->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $backpackersnote->user->name, ['user' => $backpackersnote->user->id]) !!}
                        <span class="text-muted">posted at {{ $backpackersnote->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($backpackersnote->content)) !!}</p>
                    </div>
                     <div>
                        @if (Auth::id() == $backpackersnote->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['backpackersnotes.destroy', $backpackersnote->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $backpackersnotes->links() }}
@endif