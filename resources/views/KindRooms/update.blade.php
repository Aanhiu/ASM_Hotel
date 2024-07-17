@extends('layouts.admin.app')

@section('content')
<main class="app-content">
    <div class="app-title d-flex justify-content-center text-center">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active "><h4><b>Cập nhật loại Phòng</b></h4></li>
        </ul>

    </div>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4">
            <form>

              <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" placeholder="id hệ thống sẽ tự nhập" disabled>
               
              </div>
              <div class="mb-3">
                <label class="form-label">Tên Loại Phòng</label>
                <input type="text" class="form-control" placeholder="Nhập tên loại phòng" required >
              </div>

              <div class="mb-3">
                <label class="form-label">Mô tả</label>
               <textarea cols="30" rows="5" class="form-control"></textarea>
              </div>


                <button class="btn btn-warning mx-2"> <a href="{{route('listKindRooms')}}" class="text-decoration-none">Quay lại</a> </button>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                 
              </form>
        </div>
    </div>
</main>
@endsection
