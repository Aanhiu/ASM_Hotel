<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
</head>

<body>
    <!-- Navbar-->
    <header class="app-header d-flex bg-warning justify-content-between align-items-center">
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-bs-toggle="sidebar" aria-label="Hide Sidebar">
            <i class='bx bx-menu'></i>
        </a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav d-flex ms-auto mb-0">
            <!-- User Menu-->
             <a class="app-nav__item text-success" href="{{route('home')}}"> <i class='bx bx-log-out bx-rotate-180'></i>Home</a> 
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="col-sm-12">

        <div class="d-flex">
            <aside class="app-sidebar">
                <div class="app-sidebar__user">
                    {{-- <img class="app-sidebar__user-avatar" src="" width="50px" alt="User Image"> --}}
                    <div>
                        <p class="app-sidebar__user-name"><b>Admin</b></p>
                        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
                    </div>
                </div>
                <hr>
                <ul class="app-menu">
                    <li><a class="app-menu__item haha" href="#"><i class='app-menu__icon bx bx-cart-alt'></i>
                            <span class="app-menu__label">POS Hoạt Động</span></a></li>

                    <li><a class="app-menu__item active" href="#"><i
                                class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều
                                khiển</span></a></li>

                    <li><a class="app-menu__item" href="table-data-table.html"><i
                                class='app-menu__icon bx bx-id-card'></i><span class="app-menu__label">Quản lý nhân
                                viên</span></a></li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-user-voice'></i><span
                                class="app-menu__label">Quản lý khách hàng</span></a></li>

                    <li><a class="app-menu__item" href="{{ route('listKindRooms')}}"><i
                                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý
                                Loại Phòng</span></a></li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-task'></i><span
                                class="app-menu__label">Quản lý Phòng</span></a></li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-task'></i><span
                                class="app-menu__label">Quản lý Booking</span></a></li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-run'></i><span
                                class="app-menu__label">Quản lý nội bộ</span></a>
                    </li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-dollar'></i><span
                                class="app-menu__label">Bảng thống kê</span></a></li>

                    <li><a class="app-menu__item" href="#"><i
                                class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo
                                doanh
                                thu</span></a></li>

                    <li><a class="app-menu__item" href="#"><i
                                class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công
                                tác</span></a></li>

                    <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span
                                class="app-menu__label">Cài đặt hệ thống</span></a></li>
                </ul>
            </aside>


            <div class="flex-grow-1 p-3  ">

                <!-- Nội dung trang chính ở đây -->
                @yield('content')
                
            </div>
        </div>

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</body>

</html>
