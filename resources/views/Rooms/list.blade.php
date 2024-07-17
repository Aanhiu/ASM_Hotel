@extends('layouts.admin.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active">
                    <h4>Danh sách Phòng</h4>
                </li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="{{route('create')}}" title="Thêm">
                                    <i class="fas fa-plus"></i> Thêm mới Phòng
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive" style="max-height: 800px; overflow-y: auto;">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>

                                        <th>ID Phòng</th>
                                        <th>Tên Phòng</th>
                                        <th>Ảnh</th>
                                        <th>Giá Phòng</th>
                                        <th>Mô Tả</th>
                                        <th>Loại Phòng</th>
                                        <th>Trạng Thái</th>
                                        <th>Chức Năng</th>
                                    </tr>
                                </thead>

                                @foreach ($Rooms as $Room)
                                    <tbody>
                                        <tr>
                                            <td> {{ $Room->id }} </td>
                                            <td> {{ $Room->name }} </td>
                                            <td><img src="{{$Room->image}}" alt="Iamge Room"></td>
                                            <td> {{ $Room->price }}</td>
                                            <td> {{ $Room->description }}</td>
                                            <td> {{ $Room->kindroom_name }} </td>
                                            <td><span class="badge bg-success">
                                                    @if ($Room->status == 0)
                                                        <h6>Có thể thuê</h6>
                                                    @endif
                                                </span></td>
                                            <td>
                                                {{-- nut xoa loai phong theo id --}}
                                                <form action="" method="POST">
                                                    {{-- @csrf
                                                @method('DELETE') --}}
                                                    <button class="btn btn-danger btn-sm trash" type="submit"
                                                        title="Xóa" onclick="confirm('Bạn muốn xóa chứ')">
                                                        <i class="fas fa-trash-alt">Xóa</i>
                                                    </button>

                                                </form>
                                                {{-- nut sua loai phong theo id --}}
                                                <a href=""> <button class="btn btn-primary btn-sm edit"
                                                        type="button" title="Sửa"><i
                                                            class="fas fa-edit">Sửa</button></a></i>
                                        </tr>

                                        <!-- xuat  -->
                                    </tbody>
                                @endforeach



                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
