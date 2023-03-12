<header>
    <div class="container" >
        <div class="row">
            <div class="col-sm-6"><a class="logo" href="{{ route('home') }}">Fourth Industrial Revolution technologies</a></div>
            <div class="col-sm-6">
                <ul class="nav">
                    

                    @auth
                            
                            <li class="nav-item"><a href="{{ route('signout') }}" class="btn btn-primary ">logout</a></li> 
                            <li >
                                <a href="{{ route('dashboard') }}">
                                    <img  src="{{ (!empty(Auth::user()->image ))?
                                    url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" 
                                    alt="Profile" class="rounded-circle border-primary  mx-auto d-block " width="40" height="40" >
                                </a>
                            </li>
                        @else  
                                <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-primary ">Login</a></li> 
                                <li ><a href="{{ route('register') }}" class=" btn btn-secondary  ">Sign up</a></li>
                        @endauth
                    

                    
                    
                </ul>
            </div>
        </div>
    </div>
</header>