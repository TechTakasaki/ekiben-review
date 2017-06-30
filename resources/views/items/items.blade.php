<ul class="media-list">
@foreach ($items as $item)
    <li class="media">
        <div class="media-body">
            <div>
                <p>{!! nl2br(e($item->name)) !!}</p>
            </div>
            <div>
                {!! Form::open(['route' => ['items.show', $item->id], 'method' => 'get']) !!}
                    {!! Form::submit('詳細', ['class' => 'btn btn-primary btn-xs']) !!}
                {!! Form::close() !!}
                {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $items->render() !!}