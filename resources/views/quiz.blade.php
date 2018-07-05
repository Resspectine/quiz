@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Quiz name
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            Question
                        </div>
                        <ul class="list-unstyled">
                            @foreach($quizzes as $quiz)
                            <li class="input-group-text">
                                <div class="input-group">
                                    <input name="answer" id="1" type="radio">
                                    <label class="col-form-label" for="1">
                                        {{$quiz->name}}
                                    </label>
                                </div>
                            </li>
                            @endforeach
                            {{--<li class="input-group-text">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input name="answer" id="2" type="radio">--}}
                                    {{--<label class="col-form-label" for="2">--}}
                                        {{--Answer 2--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="input-group-text">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input name="answer" id="3" type="radio">--}}
                                    {{--<label class="col-form-label" for="3">--}}
                                        {{--Answer 3--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="input-group-text">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input name="answer" id="4" type="radio">--}}
                                    {{--<label class="col-form-label" for="4">--}}
                                        {{--Answer 4--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-end">
                            <button class="btn btn-success">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection