@extends('layouts.principal')

@section('style')

@endsection

@section('content')
        <!---->

<div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route("home")}}">Inicio</a></li>
            <li class="active">Marca de Agua</li>
        </ol>

    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <button type="submit" class="btn btn-default">Send invitation</button>
                    </form>


                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="h3Josefin text-center">Informacón del Usuario</h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="col-xs-2 text-right"><i class="fa fa-user" aria-hidden="true"></i></div>
                                            <div class="col-xs-10">luis carlos pineda</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-xs-2 text-right"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                            <div class="col-xs-10">77777777</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="col-xs-2 text-right"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                            <div class="col-xs-10">luis@gmail.com</div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {!!Form::open(['id'=>'formMarcadeAgua','files' => true,'class'=>'form-horizontal','autocomplete'=>'off'])!!}



                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Usuarios con marcas de Agua</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
</div>
>
<!---->
@endsection

@section('scripts')

    <script>

    </script>
@endsection