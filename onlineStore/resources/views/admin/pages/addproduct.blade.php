<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>

    <!-- Font & CSS -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar (nếu có) -->
                {{-- @include('admin.partials.topbar') --}}

                <!-- Begin Page Content -->
                <div class="container-fluid mt-4">

                    <h2 class="mb-4 text-primary"> Thêm sản phẩm mới</h2>

                                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
                        @csrf


                        <div class="mb-3">
                            <label for="tensp" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="tensp" name="tensp" value="{{ old('tensp') }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dongia" class="form-label">Giá</label>
                                <input type="number" class="form-control" id="dongia" name="dongia" value="{{ old('dongia') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="giakm" class="form-label">Giá khuyến mãi</label>
                                <input type="number" class="form-control" id="giakm" name="giakm" value="{{ old('giakm') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hinh" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" id="hinh" name="hinh">
                        </div>

                        <div class="mb-3">
                            <label for="mota" class="form-label">Mô tả</label>
                            <textarea class="form-control" id="mota" name="mota" rows="3">{{ old('mota') }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="tendm " class="form-label">Tên Danh Mục </label>
                                
                                <input type="text" class="form-control" id="tendm " name="tendm" value="{{ old('tendm') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="soluong" class="form-label">Số Lượng </label>
                                <input type="number" class="form-control" id="soluong" name="soluong" value="{{ old('soluong') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="trangthai" class="form-label">Trạng thái</label>
                                <select class="form-select form-control" id="trangthai" name="trangthai">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>

                      

                        <button type="submit" class="btn btn-primary w-100">Thêm sản phẩm</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    {{-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
     --}}
     
    @inlude('admin.partials.footer')


    <!-- Scripts -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
