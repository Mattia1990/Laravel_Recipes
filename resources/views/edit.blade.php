@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <h3>Modifica: </h3>
            
            {!! Form::model($recipe, ['method' => 'PUT', 'url' => ['/', $recipe->id]]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome Ricetta: ') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('description', 'Procedimento: ') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'desc']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::submit('Salva modifiche', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection