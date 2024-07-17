@extends('layouts.admin.app')

@section('content')
<main class="app-content">
    <div class="app-title d-flex justify-content-center text-center">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active "><h4><b>Thêm mới Phòng</b></h4></li>
        </ul>

    </div>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4">
            <form action="#" method="POST">
              @csrf
                {{-- <div class="mb-3">
                  <label class="form-label">ID</label>
                  <input type="number" class="form-control" placeholder="id hệ thống sẽ tự nhập" disabled >
                 
                </div> --}}

                <div class="mb-3">
                  <label class="form-label">Tên Phòng</label>
                  <input type="text" class="form-control" placeholder="Nhập tên loại phòng"  name="name" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Ảnh</label>
                  <input type="file" class="form-control" name="image" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Giá Phòng</label>
                  <input type="number" step="0.1" class="form-control" name="price" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Mô tả</label>
                 <textarea cols="30" rows="5" class="form-control" name="description" required ></textarea>
                </div>

                <div class="mb-3">
                  <label class="form-label">Loại Phòng</label>
                <select name="" id="" class="form-control">

                    <option value="">Xuất loại phòng</option>
                    
                </select>
                </div>

                <button class="btn btn-warning mx-2"> <a href="{{route('listRooms')}}" class="text-decoration-none">Quay lại</a> </button>

                <button type="submit" class="btn btn-primary" >Thêm mới</button>
                 
              </form>
        </div>
    </div>
</main>
@endsection
