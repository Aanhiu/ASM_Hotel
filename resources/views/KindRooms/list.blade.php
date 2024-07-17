@extends('layouts.admin.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active">
                    <h4>Danh sách Loại Phòng</h4>
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
                                <a class="btn btn-add btn-sm" href="{{ route('createKindRooms') }}" title="Thêm">
                                    <i class="fas fa-plus"></i> Thêm mới Loại Phòng
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive" style="max-height: 800px; overflow-y: auto;">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                       
                                        <th>Mã Loại Phòng</th>
                                        <th>Tên Loại Phòng</th>
                                        <th class="w-75">Mô tả</th>
                                        <th>Tình trạng</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                @foreach ($KindRooms as $KindRoom)
                                  
                                <tbody>
                                    <tr>

                                        
                                        <td> {{$KindRoom->id}} </td>
                                        <td>{{$KindRoom->name}}</td>
                                        <td>{{$KindRoom->description}}</td>
                                        <td><span class="badge bg-success">Đã thêm mới</span></td>
                                        <td>
                                            <button class="btn btn-danger btn-sm trash" type="button" title="Xóa">
                                                <i class="fas fa-trash-alt">Xóa</i>
                                            </button>

                                            <a href="#"> <button
                                                    class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                        class="fas fa-edit">Sửa</button></a></i>
                                        </td>
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
