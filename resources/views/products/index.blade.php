
@extends('layouts.app')

@section('content')
<h1>List of products</h1>
<ul>
    @foreach ($products as $product)    
    <li><a href="{{ route('products.show', $product->getid()) }}">{{ $product->getName() }}</a></li>
@endforeach
</ul>
    
@endsection