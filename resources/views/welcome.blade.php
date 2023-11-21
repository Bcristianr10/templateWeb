<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        :root {
            --primary-color: #059edb;
            --header-height: 3rem;
            --nav-width: 45px;
            --sm: 12px;
            --md: 14px;
            --lg: 16px;
            --first-color: #ffffff;
            --first-color-light: #eaeef1;
            --second-color: #ebeff2;
            --second-color-light: #bfc6cd;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            /* padding: 0 1rem;             */
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            /* transition: .05  s; */
            /* padding-top: 3.5rem; */
            background-color: var(--second-color)
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: 8vh;
            top: 0;
            left: 0;
            z-index: var(--z-fixed);
            transition: .5s;
        }

        .center-header {
            /* top: 0; */
            padding-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header_toggle {
            color: #059edb;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            /* padding: .5rem 1rem 0 0; */
            /* padding: 0; */
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem .8rem
        }

        .nav_logo {
            margin-bottom: 2rem;
            align-content: center;
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--primary-color)
        }

        .nav_logo-name {
            color: var(--primary-color);
            font-weight: 700
        }

        .nav_link {
            font-size: var(--sm);
            position: relative;
            color: var(--second-color-light);
            margin-bottom: 0;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color);
            background-color: var(--primary-color);
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
                /* padding-left: 3rem; */
        }

        .active {
            color: var(--primary-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        .height-90 {
            height: 92vh;
            /* background-color: var(--white-color); */
            border-radius: 10px 0px 0px 0px;
        }

        .font-sm {
            font-size: var(--sm);
        }

        .font-md {
            font-size: var(--md);
        }

        .font-lg {
            font-size: var(--lg);
        }

        .icon {
            color: #767f87;
        }

        .hover-primary:hover {
            background-color: var(--primary-color) !important;
        }

        /* Dropdown Button */
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdownHouse {
            /* position: relative; */
            /* display: inline-block; */

        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--white-color);
            min-width: 99%;
            right: .1rem;
            top: 3.3rem;
            border-radius: 5px;
            z-index: 1;

            /* padding: .3rem; */
        }

        .notification-content {
            overflow: auto;
            height: 65vh;
        }

        .user-name {
            display: none;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            /* padding: 12px 16px; */
            text-decoration: none;
            /* display: block; */
        }

        .access-content {
            min-width: 155px;
            right: .1rem;
            top: 1.7rem;

        }

        .dropdown-content a i,
        label {
            cursor: pointer;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown-block {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdownHouse:hover .dropbtn {
            background-color: #3e8e41;
        }

        .notification-img {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        /* Scroll */
        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: var(--second-color-light) #DFE9EB;
        }

        /* Chrome, Edge and Safari */
        *::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 2px;
            background-color: #DFE9EB;
            border: 10px solid var(--white-color);
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-track:active {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: var(--second-color-light);
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: var(--primary-color);
        }

        *::-webkit-scrollbar-thumb:active {
            background-color: var(--primary-color);
        }





        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 0rem)
            }

            .header {
                padding-top: 5px;
                /* padding: 0 2rem 0 calc(var(--nav-width)) */
            }

            .header_img {
                width: 25px;
                height: 25px;
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 0;
            }

            .dropdownHouse {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                min-width: 300px;
                right: .1rem;
                top: 1.7rem;

            }

            .access-content {
                min-width: 155px;
                right: .1rem;
                top: 1.7rem;

            }

            .user-name {
                display: block;
            }

            .show {
                width: calc(var(--nav-width) + 158px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 158px)
            }
        }
    </style>
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)
        
        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        // headerpd.classList.toggle('body-pd')
        })
        }
        }
        
        showNavbar('header-toggle','nav-bar','body-pd','header')
        
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')
        
        function colorLink(){
        if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
        }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))


        
            // Your code to run since DOM is loaded and ready        
        });
        function changeDropdown(obj){
            var object = document.getElementById(obj);  
            var dropDownActive = document.querySelectorAll('.dropdown-block')          
            if(object.classList.contains('dropdown-block')){
                dropDownActive.forEach(l=> l.classList.remove('dropdown-block'))                
            }else{
                dropDownActive.forEach(l=> l.classList.remove('dropdown-block'))  
                object.classList.add('dropdown-block');                
            }
        }

    </script>
</body>

</html>