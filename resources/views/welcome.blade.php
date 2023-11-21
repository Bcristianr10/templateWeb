<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body id="body-pd">
    <header class="header bg ps-1 pt-0" id="header">
        <div class="center-header">
            <div class=" d-flex">
                <div class="header_toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
                <b class="font-lg">Seccion</b>
            </div>
            <div class="pe-2 ps-2 d-flex align-items-center">
                {{-- Fast Access --}}
                <div class="dropdownHouse">
                    {{-- Fast Access --}}
                    <div class="ps-2 d-flex align-items-center gap-4">
                        <a type="button" onclick="changeDropdown('access-content')"
                            class="position-relative icon bx bx-grid-alt" style="font-size: 20px;">
                        </a>
                    </div>
                    {{-- Dropdown Fast Access --}}
                    <div id="access-content" class=" dropdown-content shadow-sm font-sm"
                        style="min-width: 55px !important;">
                        <div class="d-flex justify-content-between p-2 pb-0 font-md align-items-center">
                            <b>Acceso Rápido</b>
                            {{-- <a href="#" class="p-1 bx bx-trash rounded"></a> --}}
                        </div>
                        <div style="min-width:220px !important;"
                            class=" access-content d-flex justify-content-around gap-2 border border-top-0 border-start-0 border-end-0 aqui p-2 flex-wrap">
                            @foreach (['bxs-truck','bx-user','bx-home-alt','bx-devices'] as $item)
                            <a href="#"
                                class="bg-secondary hover-primary rounded d-flex p-4 flex-nowrap align-items-center">
                                <div class="p-4 d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-lg {{$item}}'></i>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="">
                            <a href="#"
                                class=" d-flex justify-content-center gap-1 pt-2 pb-2 nowrap align-items-center">
                                <label for="">Inicio</label>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Notifications --}}
                <div class="dropdownHouse">
                    {{-- Notifications --}}
                    <div class="pe-2 ps-2 me-3 d-flex align-items-center gap-4">
                        <a type="button" onclick="changeDropdown('alert-content')"
                            class="position-relative icon bx bx-bell" style="font-size: 20px;">
                            <span
                                class=" font-sm position-absolute top-0 start-100 translate-middle badge rounded-pill p-1"
                                style="background-color: #ff5b5b;">
                                99
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </div>
                    {{-- Dropdown Notification --}}
                    <div id="alert-content" class=" dropdown-content shadow-sm font-sm">
                        <div class="d-flex justify-content-between p-2 font-md align-items-center">
                            <b>Notificaciones</b>
                            <a href="#" class="p-1 bx bx-trash rounded"></a>
                        </div>
                        <div
                            class="d-flex flex-column border border-top-0 border-start-0 border-end-0 notification-content">
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-danger p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 nowrap p-3 align-items-center">
                                <div>
                                    <div class="notification-img">
                                        <img src="https://i.imgur.com/hczKIze.jpg" alt="">
                                    </div>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Bloquear Sesión Lorem ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Ipsa illo architecto fugit blanditiis ipsum neque consectetur
                                        corporis error, exercitationem quos fuga non eius libero beatae alias? Dicta
                                        adipisci eius illum.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-warning p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-secondary p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-danger p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 nowrap p-3 align-items-center">
                                <div>
                                    <div class="notification-img">
                                        <img src="https://i.imgur.com/hczKIze.jpg" alt="">
                                    </div>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Bloquear Sesión Lorem ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Ipsa illo architecto fugit blanditiis ipsum neque consectetur
                                        corporis error, exercitationem quos fuga non eius libero beatae alias? Dicta
                                        adipisci eius illum.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-warning p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                            <a href="#" class="d-flex gap-2 flex-nowrap p-3 align-items-center">
                                <div class="bg-secondary p-3 rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 20px; height:20px;">
                                    <i class='text-white bx bx-xs bxs-truck'></i>
                                </div>
                                <div class=" d-flex flex-column">
                                    <b class="mb-0">Mario Morales</b>
                                    <label for="" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.</label>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a href="#"
                                class=" d-flex justify-content-center gap-1 pt-2 pb-2 nowrap align-items-center">
                                <label for="">Ver Todas</label>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- User --}}
                <div class=" d-flex align-items-center gap-1">
                    <div class="header_img">
                        <img src="https://i.imgur.com/hczKIze.jpg" alt="">
                    </div>
                    <label for="" class="font-sm user-name">Billi Ruiz</label>
                    {{-- Dropdown User --}}
                    <div class="dropdownHouse">
                        <a href="#" onclick="changeDropdown('dropdown-content')"><i class='bx bx-chevron-down'></i></a>
                        <div id="dropdown-content" class="dropdown-content shadow-sm font-sm"
                            style="min-width: 155px !important;">
                            <div class="d-flex justify-content-between p-2 font-md align-items-center">
                                <b>Mi Cuenta</b>
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="d-flex flex-column border border-top-0 border-start-0 border-end-0">
                                <a href="#" class="d-flex flex-nowrap gap-1 p-2 align-items-center">
                                    <i class='bx bxs-cog'></i>
                                    <label for="">Administrar</label>
                                </a>
                                <a href="#" class="d-flex gap-1 nowrap p-2 align-items-center">
                                    <i class='bx bxs-lock'></i>
                                    <label for="">Bloquear Sesión</label>
                                </a>
                            </div>
                            <div>
                                <a href="#" class=" d-flex gap-1 nowrap p-2 align-items-center">
                                    <i class='bx bx-log-out'></i>
                                    <label for="">Cerrar Sesión</label>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="l-navbar shadow-sm" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">PanaBandas</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bxs-home nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-90 p-1">
        {{-- <h3>sdjfpsj</h3> --}}
    </div>
    <!--Container Main end-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>