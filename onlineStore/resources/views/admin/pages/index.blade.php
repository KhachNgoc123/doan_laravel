@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Danh sách sản phẩm</h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sanpham as $sp)
            <tr>
                <td>{{ $sp->masp }}</td>
                <td>{{ $sp->tensp }}</td>
                <td>{{ $sp->danhmuc->tendm ?? 'Không có' }}</td>
                <td>{{ number_format($sp->dongia, 0, ',', '.') }}₫</td>
                <td>
                    @if($sp->hinhanh)
                        <img src="{{ asset('uploads/sanpham/' . $sp->hinhanh) }}" width="80">
                    @else
                        <span class="text-muted">Chưa có ảnh</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
