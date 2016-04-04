@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <h3>{{ $recipe->name }}</h3>
        
                <ul>
            
                @foreach($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient->name }}</li>
                @endforeach
                
                </ul>
        
                <p>{{ $recipe->description }}</p>
        
        </div>
    </div>
</div>

@endsection