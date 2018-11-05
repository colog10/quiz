@extends('template')

@section('extended_css')
    <style>
        .radio-hidden {
            visibility: hidden;
        }
        hr {
            -moz-border-bottom-colors: none;
            -moz-border-image: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #c4c4c4;
            border-style: solid none;
            border-width: 1px 0;
            margin: 18px 0;
        }
    </style>
@stop

@section('content')
    <section id="section-quiz" class="section pad-bot20 bg-white">
        <div class="container">
            <div class="row">
                <div class="well">


                    <fieldset style="margin-top: 5%">
                        <legend class="text-left"><h3>{{ucfirst($name)}}, Your results are:</h3></legend>

                        @foreach($questions as $question)
                            <hr >
                            <legend class="text-center"><h2>Question</h2></legend>

                            <legend class="text-center"><h2><b>{{$question->question}}</b></h2></legend>

                            <legend class="text-center"><h3>Answers:</h3></legend>

                            <div class="form-group">
                                <div class="" data-toggle="buttons">
                                    @foreach($question->answers as $answer)
                                        <div class="row mar-top25">
                                            <div class="col-md-4 col-md-offset-4">
                                                @if($answer->correct === 1)
                                                    @if($question->selected_answer === strval($answer->id_answer))
                                                        <label class="btn btn-block btn-primary">
                                                            {{$answer->answer}} <i
                                                                    class="fa fa-check-circle pull-right"> Excelent!</i>
                                                        </label>
                                                    @else

                                                        <label class="btn btn-block btn-primary">
                                                            {{$answer->answer}} <i
                                                                    class="fa fa-check-circle pull-right"> Correct
                                                                one!</i>
                                                        </label>
                                                    @endif
                                                @elseif($question->selected_answer === strval($answer->id_answer))

                                                    <label class="btn btn-block btn-danger">
                                                        {{$answer->answer}} <i
                                                                class="fa fa-times-circle pull-right"> Ups, Wrong answer</i>
                                                    </label>
                                                @else

                                                    <label class="btn btn-block btn-default">
                                                        {{$answer->answer}}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        @endforeach
                        <div class="row">
                            <div class="col-md-12 text-center"><h2 style="margin-top: 10%"><b>Your percentage is : {{$percentage_correct}}%</b></h2></div>
                        </div>

                    </fieldset>


                </div>
            </div>
        </div>
    </section>

@stop

@section('extended_js')

@stop