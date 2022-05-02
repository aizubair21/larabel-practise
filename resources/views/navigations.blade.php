<div class="w-100" style="padding:5px;margin-top:5px; box-shadow:0px 0px 2px 0px gray">
    <div class="container">
        
    <nav style="background-color: white;" class="row">
    <style>
    .navbar-nab .nab-link, .nav-link {
        padding: 2px 3px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
    }
    .active {
        color:white;
        background-color: rgb(4, 170, 109);
        position: relative;
    }
    .active:hover {
        color: white;
    }
    /* .active::after {
        content: "";
        position: absolute;
        bottom: -38px;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 25px;
        height: 25px;
        border-style: solid;
        border-width: 12px;
        border-color: green transparent transparent transparent;
    } */
    li {
        list-style-type: none;
        z-index: 1;
    }
    
    .navbar-nav .nav-link {
        padding-right: 2px;
        padding-left: 2px;
        width: 100%;
    }
    a, .nav-link {        
        width: 100%;
        text-decoration: none;
        padding: 0px 3px;
        width:100px;
        height: 40px;
        text-align: center;
        font-weight: 600;
        font-size: 15px;
        font-family: 'Times New Roman', Times, serif;
    }
    li:hover {
        background-color: rgb(173, 173, 173);
    }
    a, .nav-item, .nav-link:not(.active):hover {
        color:black;
    }
    /* hover background effects start */
    /* .hover_bg {
        background-color: rgb(7, 88, 7);
        width:100px;
        height: 40px;
        position: absolute;
        left: -100%;
        opacity: .5;
        z-index: 0;
        transition: all linear .1s;
        border-radius: 5px;
    }
    li:nth-child(1):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 338px;
    }
    li:nth-child(2):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        position: absolute;
        left: 438px;
        transition: all linear .3s;
    }
    li:nth-child(3):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 538px;
        transition: all linear .3s;
    }
    li:nth-child(4):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 638px;
        transition: all linear .3s;
    }
    li:nth-child(5):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 738px;
        transition: all linear .3s;
    }
    li:nth-child(6):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 838px;
        transition:  all linear .3s;
    }
    li:nth-child(7):hover~.hover_bg {
        font-weight:500;
        transition: all linear .3s;
        left: 938px;
        transition:  all linear .3s;
    } */

    /* hover background effect end  */
    
    </style>


        <div class="col-md-9" >
            <div class="row" style="border-right: 2px solid gray; background-color:white; z-index:99">
                <div class="col-md-3">
                    <a class="nav-link  text-black" href="{{URL::to('/')}}"> coderbees </a>
                </div>

                <div class="col-md-9">
                    <ul class="nav relative">
                        <li class=""> <a class="nav-link @if (request()->routeIs('dashboard')) active @endif" href="{{ URL::to('/dashboard')}}">Dashboard</a></li>
                        <li class=""> <a class="nav-link @if (request()->routeIs('about')) active @endif" href="{{ URL::to('/about')}}">About</a></li>
                        <li class=""> <a class="nav-link @if (request()->routeIs('contact')) active @endif" href="{{ route('contact')}}">Contact</a></li>
                        <li class=""> <a class="nav-link @if (request()->routeIs('profile')) active @endif" href="{{ URL::to('/profile')}}">Profile</a></li>
                        <li class=""> <a class="nav-link @if (request()->routeIs('test-project')) active @endif" href="{{ URL::to('/test-project')}}">Test</a></li>
                        <li class=""> <a class="nav-link @if (request()->routeIs('home')) active @endif" href="{{ route('home')}}">Home</a></li>
                        {{-- <div class="hover_bg"></div> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="accordion">
                <div class="accordion-header bg-white" id="flush-main">
                    
                    <button class="btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsebody" aria-expanded="false" aria-controls="flush-collapsebody">
                        <img width="25" height="25" style="border-radious:50%; padding:0px 2px" src="#" alt="">
                        {{Auth::user()->user_name}}
                    </button>

                </div>
                <div id="flush-collapsebody" class="accordion-collapse collapse bh-wwhite" aria-labelledby="flush-main" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body mt-1" style="box-shadow: 0px 0px 2px gray; padding:2px; background-color:white; z-index:99">
                        <ul class="navbar-nav nav">
                            <li class="nav-item">
                                <a class="nav-link justify-content-start @if (request()->routeIs('profile')) active @endif" href="{{ URL::to('/profile') }}">Profile View</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link justify-content-start @if (request()->routeIs('password.changes')) active @endif" href="{{ route('password.changes') }}">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link justify-content-start @if (request()->routeIs('profile')) @endif" href="#">Message</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link justify-content-start @if (request()->routeIs('profile')) @endif" href="#">Nofitication</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input class="form-control btn btn-warning" type="submit" value="Log out">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </nav>

</div>
</div>