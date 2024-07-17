@extends('layouts.admin.app')

@section('content')
<main class="app-content">
    <div class="app-title d-flex justify-content-center text-center">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active "><h4><b>Thêm mới loại Phòng</b></h4></li>
        </ul>

    </div>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4">
            <form>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ID</label>
                  <input type="number" class="form-control" placeholder="id hệ thống sẽ tự nhập" disabled>
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên Loại Phòng</label>
                  <input type="text" class="form-control" placeholder="Nhập tên loại phòng" required >
                </div>
                <button class="btn btn-warning mx-2"> <a href="{{route('listKindRooms')}}" class="text-decoration-none">Quay lại</a> </button>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                 
              </form>
        </div>
    </div>
</main>
@endsection
