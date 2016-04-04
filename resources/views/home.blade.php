@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <h1>Benvenuti nel ricettario!</h1>
            
            <h3>Ricette: </h3>
            
            @foreach($recipes as $recipe)
                    <a href="{{ action('RecipesController@show', [$recipe->id]) }}"><h3>{{ $recipe->name }}</h3></a>
                    <p>{{ $recipe->description }}</p>
                    <p>Creata da: {{ $recipe->users->name }}</p>
                    <table>
                        <tr>
                            <td>
                                <a href="{{ action('RecipesController@edit', [$recipe->id]) }}" class="btn btn-primary">Modifica</a>
                            </td>
                            <td>
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => ['/', $recipe->id]
                                ]) !!}
                                {!! Form::submit('Cancella', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </table>
             @endforeach
        </div>
    </div>
</div>
@endsection
