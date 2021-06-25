@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <img src="/img/tribez.jpg" alt="Tribez Logo">
                <div class="title m-b-md">
                    
                    Best Food Vendor
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
                <a href="/pizzas/create">Order a Pizza</a>
            </div>
        </div>
@endsection
    

   