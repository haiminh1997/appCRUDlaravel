@extends('admin.layouts.layouts')

@section("title")
    Hiển thị sản phẩm
@endsection

@section("content")
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <p><a href="{{url('admin/products/create')}}" class="btn btn-success">Thêm sản phẩm</a></p>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Slug</th>
                <th>Mô tả</th>
                <th>Giá</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_slug}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>
                        <a href="{{url("admin/products/edit/".$product->id)}}" >Sửa</a>
                        <a href="{{url("admin/products/delete/".$product->id)}}" >Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection
