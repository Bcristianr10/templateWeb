<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body id="body-pd">
    @include('layouts.header')
    @include('layouts.sidebar')

    <!--Container Main start-->
    <div class="height-90 p-1">
        {{-- <h3>sdjfpsj</h3> --}}        
        {{-- {{$menus = App\Models\Menu::menusAdmin()}} --}}
        {{-- @foreach (App\Models\Menu::menus()->merge(App\Models\Menu::menusAdmin()) as $menu)                        
            <div>
                <i class='{{$menu['icon']}}'></i>
                <label for="">{{$menu['text']}}</label>
            </div>
            @if (array_key_exists('submenu',$menu))                            
                @foreach ($menu['submenu'] as $submenu)
                <div class="ps-3">                    
                    <i class='{{$submenu['icon']}}'></i>            
                    <label for="">{{$submenu['text']}}</label>
                </div>

                @endforeach                            
            @endif
        @endforeach --}}
    </div>
    <!--Container Main end-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/scriptPlus.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>