@extends("admin.layouts.layout")

@section("title")
    Xoá sản phẩm
@endsection

@section("content")
    Hiển thị form xoá sản phẩm {{ $id }}

    <div class="container">
        <form name="product" method="post" action="{{ url("admin/products/delete/$id") }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label>tên sản phẩm: {{ $product->product_name }}</label>
            </div>

            <button type="submit" class="btn btn-default">Xoá</button>
        </form>
    </div>
@endsection
