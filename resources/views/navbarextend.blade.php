<html>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav12">
    <div style="width: 100%;min-height: 50px" class="container">
        <img class="navbar-brand" src="img\logo-header.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#firstPage">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ask')}}">ASK DOCTOR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#dental_services">DENTAL SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#our-doctors">DOCTORS</a>
                </li>

                @php
                if (Auth::guest()){
                 echo '<li class="nav-item">
                    <a class="nav-link sign-in" href="/register">SIGN IN</a>
                </li>';
                }else{
                echo '<li class="nav-item">
                    <a class="nav-link sign-in" href="'. route("logout") .'">Logout</a>
                </li> ';
                }
                @endphp
                <li class="nav-item">
                    <!------drop down profile list------->

                            @php
                                if (!(Auth::guest())){
                       echo '<div class="btn-group profile-div">
                        <button type="button" class="btn profile-btn">
                            <img class="profile-img" src="img\choseuse.png">
                        </button>
                        <div class="dropdown-menu profile-menu">';
                                  echo '<a class="dropdown-item" href="/editprofile">
                                <i class="fas fa-user"></i><span style="padding-left:10px;">Profile</span>
                            </a>
                            <a class="dropdown-item" href="/comment">
                                <i class="fas fa-comment"></i><span style="padding-left:10px;">Comment</span>
                            </a>';
                                }
                                 if(!(Auth::guest()) && auth()->user()->role=='Admin'){

                           echo '<a class="dropdown-item" href="/adddoctor">
                                <i class="fas fa-user-md"></i><span style="padding-left:10px;">Add Doctor</span>
                            </a>
                            <div class="dropdown-divider"></div>';
                           }
                            if(!(Auth::guest())){
                           echo '<a class="dropdown-item" href="'.route('logout').'">
                                <i class="fas fa-sign-out-alt"></i><span  style="padding-left:10px;">Log Out</span>
                            </a>';
                            }
                            @endphp
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
