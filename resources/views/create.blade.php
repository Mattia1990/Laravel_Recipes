@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <h3>Crea una nuova ricetta: </h3>
            <h5>Tutti i campi devono essere compilati.</h5>
            
            {!! Form::open(['url' => 'sendRecipes']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome Ricetta: ') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('ingredient', 'Ingredienti (inseriscine uno per volta): ') !!}
                    {!! Form::text('ingredient', null, ['class' => 'form-control', 'id' => 'ingr']) !!}
                </div>
                
                <div class="form-group">
                    <a id="add" class="btn btn-primary form-control">Inserisci</a>
                </div>
                
                <div class="form-group">
                    {!! Form::label('description', 'Procedimento: ') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'desc']) !!}
                </div>
                
                <div class="form-group">
                    <a id="saves" class="btn btn-primary form-control">Salva</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection