@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-status bg-green"></div>
        <div class="card-header">
            <h3 class="card-title">Bienvenue dans votre Coffee Shop</h3>
            
        </div>
        <div class="card-body">
            <p><strong>Découvrer votre boisson préféré</strong></p>
            
            <p>Choisissez votre boisson dans notre <a href="{{ route('products') }}" ></i> liste des boissons</a></p>
        </div>
    </div>

@endsection 