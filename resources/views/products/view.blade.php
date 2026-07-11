@extends('layouts.main')

@section('title', $product['name'])

@section('content')
    <main>
        <div>
            <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
                 alt="Picture of {{ $product['name'] }}" 
                 style="width: 200px; margin-bottom: 20px;" />
        </div>

        <div style="font-family: serif; margin-bottom: 10px;">
            <strong>Code &nbsp;&nbsp;&nbsp;&nbsp;::</strong> {{ $product['code'] }} <br>
            
            <strong>Category ::</strong> 
            <a href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
                <em style="color: blue;">{{ $categories[$product['catCode']]['name'] }}</em>
            </a> <br>
            
            <strong>Name &nbsp;&nbsp;&nbsp;&nbsp;::</strong> {{ $product['name'] }}
        </div>

        <pre style="font-family: monospace; white-space: pre-wrap;">{{ $product['description'] }}</pre>
    </main>
@endsection