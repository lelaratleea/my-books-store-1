@extends('layouts.main', [
    'title' => 'Products',
])

@section('content')
    <main id="app-main-content">
        <table class="app-cmp-data-list">
            <caption>Categories List</caption>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>
                            <a href="{{ route('categories.view', ['category' => $category['code']]) }}">
                                <em>{{ $category['code'] }}</em>
                            </a>
                        </td>
                        <td>{{ $category['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection