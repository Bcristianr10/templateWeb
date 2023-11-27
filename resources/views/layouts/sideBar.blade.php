<div class="l-navbar shadow-sm" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">PanaBandas</span>
            </a>
            <div class="nav_list">

                @foreach (App\Models\Menu::menus()->merge(App\Models\Menu::menusAdmin()) as $menu)                        
                    <a href="#" class="nav_link">
                        <i class='{{$menu['icon']}} nav_icon'></i>
                        <span class="nav_name d-flex align-items-center gap-2">
                            {{$menu['text']}}
                            @if (array_key_exists('submenu',$menu))
                            <i class='bx bx-chevron-down'></i>                                                    
                            @endif
                        </span>
                    </a>
                    @if (array_key_exists('submenu',$menu))                            
                        @foreach ($menu['submenu'] as $submenu)
                        {{-- <div class="ps-3">                    
                            <i class='{{$submenu['icon']}}'></i>            
                            <label for="">{{$submenu['text']}}</label>
                        </div> --}}                        
                        <a href="#" class="nav_link nav_option ps-4" onclick="optionMenuOP('dropdown-content')" id="{{$submenu['route']}}">
                            <i class='ps-4 bx bx-bar-chart-alt-2 nav_icon bx-xs'></i>
                            <span class="nav_name">Stats</span>
                        </a>
                        @endforeach                            
                    @endif
                @endforeach
        
{{-- 
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
                <a href="#" class="nav_link ps-4">
                    <i class='ps-4 bx bx-bar-chart-alt-2 nav_icon bx-xs'></i>
                    <span class="nav_name">Stats</span>
                </a> --}}
            </div>
        </div>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>
    </nav>
</div>