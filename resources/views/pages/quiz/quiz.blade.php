@extends('template')

@section('extended_css')
    <style>
        .radio-hidden {
            visibility: hidden;
        }
    </style>
@stop

@section('content')

    <section id="section-quiz" class="section pad-bot20 bg-white">
        <div class="container">
            <div class="row">
                <div class="well">
                    @include('session_error.session_error')

                    {!! Form::open(['url' => '/results', 'class' => 'form-horizontal']) !!}
                    {!! Form::hidden('name', $name) !!}
                    {!! Form::hidden('selected_answer', 0) !!}
                    {!! Form::hidden('questions_ids', $questions_ids) !!}

                    <fieldset style="margin-top: 5%">
                        <legend class="text-left"><h3>WELCOME {{ucfirst($name)}}</h3></legend>

                        @foreach($questions as $question)
                            <legend class="text-center"><h2>Question</h2></legend>

                            <legend class="text-center"><h2><b>{{$question->question}}</b></h2></legend>

                            <legend class="text-center"><h3>Answers:</h3></legend>

                            <div class="form-group">
                                <div class="" data-toggle="buttons">
                                    @foreach($question->answers as $answer)
                                        <div class="row mar-top25">
                                            <div class="col-md-4 col-md-offset-4">
                                                <label class="btn btn-block btn-primary">
                                                    <input type="radio" name="options{{$question->id_question}}"
                                                           id="{{$answer->id_answer}}" class="radio-hidden"
                                                           value="{{$answer->id_answer}}">{{$answer->answer}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <hr>
                        @endforeach
                        <div class="row " style="margin-top: 15%;">
                            <div class="col-md-3 col-md-offset-9">
                                <input type="submit"
                                       value="Send Answer"
                                       class="btn btn-lg btn-primary col-md-12">
                            </div>
                        </div>

                    </fieldset>

                    {!! Form::close()  !!}

                </div>
            </div>
        </div>
    </section>

@stop

@section('extended_js')

@stop