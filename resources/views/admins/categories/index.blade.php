@extends('admins.layouts.app')

@section('title',' dashboard')

@section('content')
    <div class="d-flex  mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh mục</h1>
        <button title="Thêm mới danh mục" class="btn btn-outline-primary btn-circle ml-2" data-toggle="modal" data-target="#newCategoryModal">
            <i class="fa fa-plus"></i>
        </button>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Dannh mục cha</th>
                    <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>0</th>
                    <th>Nam</th>
                    <th>Không có</th>
                    <th>
                        <a href="#"
                           class="btn btn-circle btn-outline-warning"
                           title="Cập nhật thông tin"
                        >
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <button title="Xóa "
                                class="btn btn-circle btn-outline-danger"
                        >
                            <i class="fas fa-times"></i>
                        </button>

                    </th>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    @include('admins.categories.form')
@endsection
