@extends('layouts.main')

@section('title', $product['name'])

@section('content')

    <style>
        dl {
            display: grid;
            grid-template-columns: auto 1fr;
        }

        dt {
            display: flex;
            flex-direction: row;
            font-weight: bold;
        }

        dt::after {
            content: '::';
            padding-left: 1ch;
            padding-right: 1ch;
            margin-left: auto;
        }
    </style>

    <main>
        <div>
            <img src="{{ asset("images/products/{$product['code']}.jpg") }}" alt="Picture of{{ $product['name'] }}" />
        </div>

        <dl>
            <dt>Code</dt>
            <dd><em>{{ $product['code'] }}</em></dd>

            <dt>Category</dt>
            <dd><em style="color: blueviolet">{{ $product['catCode'] }}</em></dd>

            <dt>Name</dt>
            <dd>{{ $product['name'] }}</dd>
        </dl>
    </main>
@endsection
