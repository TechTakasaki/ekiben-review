<h1>{{ $item->name }}のレビュー一覧</h1>
<ul class="media-list">
@foreach ($reviews as $review)
<?php $user = $review->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $review->created_at }}</span>
            </div>
        <div class="media-body">
            <div>
                <p>{!! nl2br(e($review->content)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $review->user_id)
                    {!! Form::open(['route' => ['items.reviews.destroy', $review->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
<a href="{{ route('items.reviews.create',$item->id) }}" class="btn btn-primary btn-sm">新規レビューの投稿</a>
{!! $reviews->render() !!}