@extends('layouts.main')

@section('title', 'Categories')

@section('content')
    <style>
        table { border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
    </style>
    <main>
        <table>
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