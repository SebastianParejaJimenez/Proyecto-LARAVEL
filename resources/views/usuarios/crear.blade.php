@extends('layouts.app')

@section('content')
    <section class="section">
    <div class="section-header">
            <h1>Crear</h1>
          </div>
        <div class="section-body">
            
        <h2 class="section-title">Formulario para Crear</h2>
            <p class="section-lead">El siguiente formulario le permitira crear el Usuario a desear.</p>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
<!--                         Para atrapar errores y mostrarlos
 -->                    @if($errors->any())
                        <div class="alert " role="alert">
                            @foreach($errors->all() as $error)
                            <button type="button" data-dismiss="alert" arial-label="Close"
                                        class="btn btn-primary btn-icon icon-left">
                                        <i class="fas fa-eye"></i> Error: <span
                                            class="badge badge-transparent">{{$error}}</span>
                            </button>

                            @endforeach

                        </div>
                        @endif


                        {!! Form::open(array("route"=>"usuarios.store", "method"=>"POST"))!!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>
                        
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    {!! Form::text('email', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Contrase??a</label>
                                    {!! Form::password('password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Contrase??a</label>
                                    {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Roles</label>
                                    {!! Form::select('rol_id', $rol_id,[], array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                        {!! Form::close()!!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

