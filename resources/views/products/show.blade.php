@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-status bg-green"></div>
    <div class="card-header">
        <h3 class="card-title">{{ $product->getName() }}</h3>
        
    </div>
    <div class="card-body">
        <p><strong>Prix</strong> : {{ $product->getPrice() }} euros</p>
        
        <p><strong>Description</strong> : {{ $product->getDescription() }}</p>
    </div>
</div>
@endsection