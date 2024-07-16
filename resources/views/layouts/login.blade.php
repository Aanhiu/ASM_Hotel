@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Đăng Nhập</label>
                <input type="email" class="form-control" id="email" required>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control"  required>
            </div>
           
            <div class="d-flex justify-content-center p-4 ">
                <button type="submit" class="btn btn-success">Đăng Nhập</button>
            </div>
        </form>
    </div>
@endsection
