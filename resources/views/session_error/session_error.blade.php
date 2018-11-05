@if(Session::has('flash_message'))
    <div class="container" id="commerce_flash_message">
        <div class="row">
            <div class="col-md-12">
                <div class="row margin-top-30">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <p>{{ Session::get('flash_message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('error_message'))
    <div class="container" id="commerce_error_message">
        <div class="row">
            <div class="col-md-12">
                <div class="row margin-top-30">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            <p>{{ Session::get('error_message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('error_messages'))
    <div class="container" id="commerce_error_message">
        <div class="row">
            <div class="col-md-12">
                <div class="row margin-top-30">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (Session::get('error_messages') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

@if (count($errors) > 0)
    <div class="container" id="commerce_input_error_message">
        <div class="row">
            <div class="col-md-12">
                <div class="row margin-top-30">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif