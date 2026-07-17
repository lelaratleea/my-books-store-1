@extends('layouts.main' , [
    'title' => $category['name'],
    'titleClasses' =>['app-category-name'],
])

@section('content')
    <main id="app-main-content">
        <table>
    <p>Products List for <em class="app-category-name">{{ $category['name'] }}</em></p>            
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
                                alt="Picture of {{ $product['name'] }}" class="app-cl-product-image" />
                        </td>
                        <td>
                            <a class="app-product-code" href="{{ route('products.view', ['product' => $product['code']]) }}">
                                <em>{{ $product['code'] }}</em>
                            </a>
                        </td>
                        <td>{{ $product['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection