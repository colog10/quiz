@extends('template')

@section('extended_css')
    <style>
        .img {
            object-fit: contain !important;
            height: 100% !important;
            width: 100% !important;
        }</style>

@stop

@section('content')

    <section class="featured" style="">
        <div class="container">
            <div class="row mar-bot40">
                <div class="col-md-6 col-md-offset-3">

                    <div class="align-center">
                        <i class="fa fa-edit fa-5x mar-bot20"></i>
                        <h2 class="slogan">Welcome</h2>
                        <h3>
                            Keep scrolling and chose your test
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('session_error.session_error')

    <!-- services -->
    <section id="section-services" class="section pad-bot30 bg-white">
        <div class="container">
            <div class="row">
                <div class="well">

                    {!! Form::open(['url' => '/selectedTest', 'class' => 'form-horizontal','method' => 'get']) !!}
                    {!! Form::hidden('selected_category', 0) !!}


                    <fieldset>

                        <legend class="text-center ">Before start, Enter your name</legend>

                        <!-- Email -->
                        <div class="form-group">
                            {!! Form::label('lblname', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::Text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Enter your name','required',"oninvalid"=>"this.setCustomValidity('Please Enter a name')",
                                    "oninput"=>"setCustomValidity('')"]) !!}
                            </div>
                        </div>
                        <legend class="text-center">Chose your Test</legend>

                        <!-- Radio Buttons -->
                    {{--<div class="form-group">--}}
                    {{--{!! Form::label('radios', 'Radios', ['class' => 'col-lg-2 control-label']) !!}--}}
                    {{--<div class="col-lg-10">--}}
                    {{--<div class="radio">--}}
                    {{--{!! Form::label('radio1', 'This is option 1.') !!}--}}
                    {{--{!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}--}}

                    {{--</div>--}}
                    {{--<div class="radio">--}}
                    {{--{!! Form::label('radio2', 'This is option 2.') !!}--}}
                    {{--{!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <!--                        -->
                        <?php $i = 1;?>
                        <div class="form-group">
                            @foreach($categories->chunk(4) as $chunkCategories)
                                @if($i>1)
                                    <div class="row-fluid mar-top20 text-center">
                                        @elseif($i===1)
                                            <div class="row-fluid text-center">
                                                @endif
                                                <div class="btn-group btn-group-justified" role="group"
                                                     aria-label="Horizontal Button Group">

                                                    @foreach($chunkCategories as $category)
                                                        @if(sizeof($chunkCategories)===4)
                                                            <?php $col = 3?>
                                                        @elseif(sizeof($chunkCategories)===3)
                                                            <?php $col = 4?>
                                                        @elseif(sizeof($chunkCategories)===2)
                                                            <?php $col = 6?>
                                                        @elseif(sizeof($chunkCategories)===1)
                                                            <?php $col = 12?>
                                                        @endif
                                                        <div class="col-md-{{$col}}">
                                                            <button type="button"
                                                                    class="btn btn-lg btn-block btn-info"
                                                                    value="{{$category->id_category}}">{{$category->category}}</button>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                            <?php $i++;?>
                                            @endforeach


                                    </div>
                                    <div class="row mar-top20">
                                        <div class="col-md-3 col-md-offset-9">
                                            <input type="submit"
                                                   value="Begin Test"
                                                   class="btn btn-lg btn-primary col-md-12">
                                        </div>
                                    </div>
                    </fieldset>

                    {!! Form::close()  !!}

                </div>
            </div>
        </div>
    </section>


    <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

@stop

@section('extended_js')
    <script>
        $(document).ready(function () {
            $("button.btn").on("click", function () {
                $("input[name^=selected_category]").val(this.value);
                // if (!$(this).hasClass('active')) {
                //     $('button.btn').each(function () {
                //         $(this).removeClass('active');
                //     });
                //
                //     $(this).addClass('active');
                // }
            });
        });

    </script>
@stop