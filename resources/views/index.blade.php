@extends('layout')

@section('title', 'Products list')
@section('content')
    <a class="btn btn-primary" href="{{ route('products.create') }}">Add a product</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Count</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->count }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('products.destroy', $product) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
