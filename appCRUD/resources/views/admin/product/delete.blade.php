@extends("admin.layouts.layouts")

@section("title")
    Xoá sản phẩm
@endsection

@section("content")
    Hiển thị form xoá sản phẩm {{ $id }}

    <div class="container">
        <form name="product" method="post" action="{{ url("appcrud/products/delete/$id") }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label>tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name">
            </div>

            <div class="form-group">
                <label>Slug sản phẩm:</label>
                <input type="text" class="form-control" name="product_slug">
            </div>

            <div class="form-group">
                <label>Mô tả sản phẩm:</label>
                <input type="text" class="form-control" name="product_description">
            </div>


            <div class="form-group">
                <label>Giá sản phẩm:</label>
                <input type="text" class="form-control" name="product_images">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
