@extends('layout')

@section('title', isset($product)? 'Update a ' . $product->name: 'Create a product')
@section('content')

        <form
            @if(isset($product))
                action="{{ route('products.update', $product) }}"
            @else
                action="{{ route('products.store') }}"
            @endif
            method="POST">
        <div class="col-6 mx-auto">
            <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"
                       value="{{ isset($product)? $product->name:null }}"
                       placeholder="Enter a name">
            </div>
            <div class="form-group mb-3">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price"
                       value="{{ isset($product)? $product->price:null }}"
                       placeholder="Enter price">
            </div>
            <div class="form-group mb-3">
                <label for="count">Count:</label>
                <input type="number" min="1" class="form-control" id="count" name="count"
                       value="{{ isset($product)? $product->count:null }}"
                       placeholder="Enter count of product">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="category_id"
                       value="{{ isset($product)? $product->category_id:null }}"
                       placeholder="Category">
            </div>
{{--            <div class="form-group mb-3">--}}
{{--                <label for="category">Category:</label>--}}
{{--                <select class="form-select" aria-label="Default select example" >--}}
{{--                    <option selected>Choose a category</option>--}}
{{--                    <option value="3">3</option>--}}
{{--                    @foreach($catagories as $category)--}}
{{--                        <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a description here" id="description" name="description" style="height: 100px">
                    {{ isset($product)? $product->description:null }}
                </textarea>
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
    </form>
@endsection
