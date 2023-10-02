@if($answersCount > 0)
<div class="row mt-4 justify-content-center">
    <div class="row col-md-12">
        @include('layouts._messages')
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{$answersCount . " " . str_plural('Answer', $question->answers_count)}}</h2>
                </div>
                <hr>
                @foreach($answers as $answer)
                    <div class="row">
                        <div class="vote-controls col-md-4">
                            <a href="" title="This answer is useful" class="vote-up {{\Illuminate\Support\Facades\Auth::guest() ? 'off' : ''}}"
                               onclick="event.preventDefault(); document.getElementById('up-vote-answer-{{ $answer->id }}').submit()"
                            >
                                <i class="fas fa-caret-up fa-3x"></i> Vote up
                            </a>
                            <form id="up-vote-answer-{{ $answer->id }}" action="/answers/{{ $answer->id }}/vote" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="vote" value="1">
                            </form>

                            <span class="votes-count">{{ $answer->votes_count }}</span>
                            <a title="This question is not useful" class="vote-down {{ \Illuminate\Support\Facades\Auth::guest() ? 'off' : '' }}"
                               onclick="event.preventDefault(); document.getElementById('down-vote-answer-{{ $answer->id }}').submit()"
                            >
                                <i class="fas fa-caret-down fa-3x"></i> Vote down
                            </a>
                            <form id="down-vote-answer-{{ $answer->id }}" action="/questions/{{ $answer->id }}/vote" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="vote" value="-1">
                            </form>
                            @can('accept', $answer)
                                <a title="Mark this answer as best answer"
                                    class="{{ $answer->status }} mt-2"
                                    onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $answer->id }}').submit()"
                                    >
                                    <i class="fas fa-check fa-3x"></i> Favorite
                                    <span class="favorites-count">123</span>
                                </a>
                                <form id="accept-answer-{{ $answer->id }}" action="{{ route('answers.accept', $answer->id) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                @if ($answer->is_best)
                                    <a title="The question owner accepted this answer as best answer" class="{{ $answer->status }} mt-2">
                                        <i class="fas fa-check fa-3x"></i> Favorite
                                        <span class="favorites-count">123</span>
                                    </a>
                                @endif
                            @endcan
                        </div>
                        <div class="col-md-8">
                            {!! $answer->body_html !!}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="ml-auto">
                                        @can('update', $answer)
                                        <a href="{{route('questions.answers.edit', [$question->id,$answer->id])}}" class="btn btn-sm btn-outline-info">
                                            Edit
                                        </a>
                                        @endcan
                                        @can('delete', $answer)
                                        <form class="form-delete" method="post" action="{{route('questions.answers.destroy', [$question->id,$answer->id])}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                            <div class="float-end">
                                @include('shared._author', [
                                    'model' => $answer,
                                    'label' => 'answered'
                                ])
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
