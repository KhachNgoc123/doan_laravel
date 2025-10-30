<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>

    <!-- Font & CSS -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    @include('admin.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            @include('admin.partials.topbar')

            <!-- Nội dung chính -->
            <div class="container-fluid mt-4">
                <h2 class="mb-4 text-primary">Danh sách sản phẩm</h2>

                <!-- Thông báo -->
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <!-- Bảng sản phẩm -->
                <div class="card shadow-sm">
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-primary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sanpham as $sp)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($sp->hinh)
                                                <img src="{{ asset('uploads/' . $sp->hinh) }}" width="70" height="70" class="rounded">
                                            @else
                                                <span class="text-muted">Không có hình</span>
                                            @endif
                                        </td>
                                        <td>{{ $sp->tensp }}</td>
                                        <td>{{ number_format($sp->dongia, 0, ',', '.') }} đ</td>
                                        <td>{{ $sp->soluong }}</td>
                                        <td>{{ $sp->danhmuc->tendm ?? 'Chưa phân loại' }}</td>
                                        <td>
                                            <span class="badge bg-{{ $sp->trangthai == 'còn hàng' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($sp->trangthai) }}
                                            </span>
                                        </td>
                                      
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">Chưa có sản phẩm nào.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
    </div>
</div>

<!-- Nút cuộn lên -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.partials.footer')

<!-- Script -->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
