@extends('admin.layouts.layouts')

@section("title")
    Sửa sản phẩm
@endsection

@section("content")
    Sửa sản phẩm {{$product->id}}

    <div class="container">
        <form name="product" method="post" action="{{ url("admin/products/edit/$product->id") }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
            </div>

            <div class="form-group">
                <label>Slug sản phẩm:</label>
                <input type="text" class="form-control" name="product_slug"  value="{{$product->product_slug}}">
            </div>


            <div class="form-group">
                <label>Mô tả sản phẩm:</label>
                <input type="text" class="form-control" name="product_description" value="{{$product->product_description}}">
            </div>


            <div class="form-group">
                <label>Giá sản phẩm:</label>
                <input type="text" class="form-control" name="product_price"  value="{{$product->product_price}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
