@extends('layouts.main' , [
    'title' => $product['name'],
])


@section('content')
<main id="app-main-content">
<div class="app-product-image">
    <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
         alt="Picture of {{ $product['name'] }}">
</div>

<dl class="app-cmp-data-detail">
<dt>Code</dt>
<dd><em class="app-product-code">{{ $product['code'] }}</em></dd>

<dt>Category</dt>
<dd>
    <a href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
        <em class="app-category-name">{{ $product['catCode'] }}</em>
    </a>
</dd>

    <dt>Name</dt>
    <dd>{{ $product['name'] }}</dd>
</dl>

@if(!empty($product['description']))
    <p class="app-product-desc">{{ $product['description'] }}</p>
@endif

    </main>
@endsection