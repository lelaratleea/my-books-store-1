@extends('layouts.main' , [
    'title' => $product['name'],
])


@section('content')
    <main id="app-main-content">
        <div>
            <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
                 alt="Picture of {{ $product['name'] }}" >
        </div>

        <dl class="app-cmp-data-detail">
            <dt>Code</dt>
            <dd><em>{{ $product['code'] }}</em></dd>
            
            <dt>Category</dt>
            <dd><em style="color: blue;">{{ $product['catCode'] }}</em></dd>

            <dt>Name</dt>
            <dd>{{ $product['name']}}</dd>
            
        </dl>
    </main>
@endsection