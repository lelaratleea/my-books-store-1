@extends('layouts.main', [
    'title' => 'Products',
])


@section('content')
    <main id="app-main-content">
        <table class="app-cmp-data-list">
            <caption>Products List</caption>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Category</th>
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
                            <a href="{{ route('products.view', $product['code']) }}">
                            <em class="app-product-code">{{ $product['code'] }}</em>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
                                <em class="app-category-name">{{ $categories[$product['catCode']]['name'] }}</em>
                            </a>
                        </td>
                        <td>{{ $product['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection