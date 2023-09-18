@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            All Questions
                            <div>
                                <a href="{{ route('questions.create') }}" class="float-end btn btn-outline-secondary">
                                    Ask Question
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body ml-auto">
                        @include('layouts._messages')

                        @foreach($questions as $question)
                            <div class="media row">
                                <div class="col-md-3 d-flex flex-column counters">
                                    <div class="vote">
                                        <strong>{{ $question->votes  }}</strong>
                                        {{ str_plural('vote', $question->votes)  }}
                                    </div>
                                    <div class="status {{ $question->status }}">
                                        <strong>{{ $question->answers_count  }}</strong>
                                        {{ str_plural('answer', $question->answers_count)  }}
                                    </div>
                                    <div class="view">
                                        {{ $question->views . " " . str_plural('view', $question->views)  }}
                                    </div>
                                </div>
                                <div class="col-md-6 media-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mt-0">
                                            <a href="{{$question->url}}">{{$question->title}}</a>
                                        </h3>
                                        <div class="ml-auto">
                                            @can('update', $question)
                                                <a href="{{route('questions.edit', $question->id)}}"
                                                   class="btn btn-sm btn-outline-info">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('delete', $question)
                                                <form class="form-delete" method="post"
                                                      action="{{route('questions.destroy', $question->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </div>
                                    <p class="lead">
                                        Asked by
                                        <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        <small class="text-muted">{{$question->created_date}}</small>
                                    </p>
                                    {{str_limit($question->body, 250)}}
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <div class="mx-auto">
                            {{$questions->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
