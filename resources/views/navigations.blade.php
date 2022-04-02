<div class="w-100" style="height:45px;margin-top:5px; box-shadow:0px 0px 2px 0px gray">
    <div class="container">
        
    <nav style="background-color: white;" class="row">
    <style>
    .active {
        color:white;
        font-weight: 800;
        background-color: rgb(9, 148, 9);
        border-radius: 5px;
    }
    li {
        list-style-type: none;
        z-index: 1;
    }
    a {
        text-decoration: none;
        padding: 0px 3px;
        width:100px;
        height: 40px;
        text-align: center;
    }
    .hover_bg {
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
        left: 338px;
    }
    li:nth-child(2):hover~.hover_bg{
        position: absolute;
        left: 438px;
        transition: all linear .3s;
    }
    li:nth-child(3):hover~.hover_bg {
        left: 538px;
        transition: all linear .3s;
    }
    li:nth-child(4):hover~.hover_bg {
        left: 638px;
        transition: all linear .3s;
    }
    li:nth-child(5):hover~.hover_bg {
        left: 738px;
        transition: all linear .3s;
    }
    li:nth-child(6):hover~.hover_bg {
        left: 838px;
        transition:  all linear .3s;
    }
    li:nth-child(7):hover~.hover_bg {
        left: 938px;
        transition:  all linear .3s;
    }
    .nav-link {
        padding: 2px 3px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    </style>
        <div class="col-md-9" >
            <div class="row" style="border-right: 2px solid gray">
                <div class="col-md-3">
                <ul class=" navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link  text-black" href="{{URL::to('/')}}">CoderBees</a>
                    </li>
                </ul>
            </div>

                <div class="col-md-9">
                    <ul class="nav relative">
                        <li class="nav-item"> <a class="nav-link text-black @if (request()->routeIs('dashboard')) active @endif" href="{{ URL::to('/dashboard')}}">Dashboard</a></li>
                        <li class="nav-item"> <a class="nav-link text-black @if (request()->routeIs('about')) active @endif" href="{{ URL::to('/about')}}">About</a></li>
                        <li class="nav-item"> <a class="nav-link text-black @if (request()->routeIs('contact')) active @endif" href="{{ URL::to('/contact')}}">Contact</a></li>
                        <li class="nav-item"> <a class="nav-link text-black @if (request()->routeIs('profile')) active @endif" href="{{ URL::to('/profile')}}">Profile</a></li>
                        <li class="nav-item"> <a class="nav-link text-black" href="{{ URL::to('/')}}">Home</a></li>
                        <li class="nav-item"> <a class="nav-link text-black" href="{{ URL::to('/')}}">Home</a></li>
                        <div class="hover_bg"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="accordion">
                <div class="accordion-header " id="flush-main">
                    
                    <button class="btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsebody" aria-expanded="false" aria-controls="flush-collapsebody">
                        <img width="25" height="25" style="border-radious:50%; padding:0px 2px" src="#" alt="">
                        {{Auth::user()->name}}
                    </button>

                </div>
                <div id="flush-collapsebody" class="accordion-collapse collapse" aria-labelledby="flush-main" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body mt-1" style="box-shadow: 0px 0px 2px gray; padding:2px;">
                    <ul class="navbar-nav nav">
                        <li class="nav-item">
                            <a class="nav-link text-black justify-content-start @if (request()->routeIs('profile')) active @endif" href="{{ URL::to('/profile') }}">Profile View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black justify-content-start @if (request()->routeIs('profile')) @endif" href="#">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black justify-content-start @if (request()->routeIs('profile')) @endif" href="#">Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black justify-content-start @if (request()->routeIs('profile')) @endif" href="#">Nofitication</a>
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