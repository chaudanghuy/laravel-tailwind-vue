@if ($model instanceof \App\Models\Question)
    @php
        $name = 'question';
        $firstURISegment = 'questions';
    @endphp
@elseif ($model instanceof \App\Models\Answer)
    @php
        $name = 'answer';
        $firstURISegment = 'answers';
    @endphp
@endif

<div class="d-fex flex-column vote-controls">
    <a href="" title="This question is useful" class="vote-up {{\Illuminate\Support\Facades\Auth::guest() ? 'off' : ''}}"
       onclick="event.preventDefault(); document.getElementById('up-vote-question-{{ $model->id }}').submit()"
    >
        <i class="fas fa-caret-up fa-3x"></i> Vote up
    </a>
    <form id="up-vote-question-{{ $model->id }}" action="/{{ $firstURISegment }}/{{ $model->id }}/vote" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="vote" value="1">
    </form>

    <span class="votes-count">{{ $model->votes_count }}</span>
    <a title="This question is not useful" class="vote-down {{ \Illuminate\Support\Facades\Auth::guest() ? 'off' : '' }}"
       onclick="event.preventDefault(); document.getElementById('down-vote-{{ $name }}-{{ $model->id }}').submit()"
    >
        <i class="fas fa-caret-down fa-3x"></i> Vote down
    </a>
    <form id="down-vote-{{ $name }}-{{ $model->id }}" action="/{{ $firstURISegment }}/{{ $model->id }}/vote" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="vote" value="-1">
    </form>

    @include('shared._favorite', [
        'model' => $model,
        'firstURISegment' => $firstURISegment
    ])
</div>
