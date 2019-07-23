@extends("admin.layouts.layout")

@section("title")
    Tạo mới sản phẩm
@endsection

@section("content")
 {{--Đưa ra thông báo lỗi khi k nhập đúng các trường trong form--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form name="product" method="post" action="{{ secure_url("admin/products") }}">

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
                <label>Hình ảnh sản phẩm:</label>
                <input type="text" class="form-control" name="product_images">
            </div>

            <div class="form-group">
                <label>Mô tả sản phẩm:</label>
                <input type="text" class="form-control" name="product_description">
                <textarea id="mytextarea" rows="4" cols="50" name="product_description"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
