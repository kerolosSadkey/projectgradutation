<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Dentist</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>BotMan Studio</title>
    
        <!-- Fonts -->
       >
    
        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-header2.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
       
    </head>
    <body>
        @extends('botmanchat')
    <!--  -----   navbar  ------    -->
    @extends("navbarextend");
        <div class="" id="firstPage">
    <!--  -----   carousel  ------    -->

            <div id="carouselExampleCaptions" class="carousel slide mt-40" data-ride="carousel">

                <div class="overlay"></div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\slider-1.jpg" class="d-block w-100" alt="slider 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-2.jpg" class="d-block w-100" alt="slider-2">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-3.jpg" class="d-block w-100" alt="slider-3">
                    </div>
                </div>
                <!-- carousel-caption in top for all -->

                <div class="carousel-caption carousel-caption-edit d-none d-md-block">
                    <p id="carousel-caption-paragraph-lg">
                        Welcome <span id="carousel-caption-paragraph-sm">to <br></span>Shiny
                        <span id="carousel-caption-paragraph-sm">Dental </span>care
                        <br><span id="carousel-caption-paragraph-sm">clinic </span>

                    </p>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    <!--  -----   why choose us  ------  -->
                 
            <div class="container containerhide">
                <h1 class="hed1">Why Choose Us?  
                  @php
              $s="";
        for($i=1;$i<8;$i++){
            if(session()->has("pr".$i)){
             $r= DB::table('treatments')->select("treatments.*")->where("id",session()->get("pr".$i))->get();
           
             if($r[0]->analgesics != "null")
                $s  .= $r[0]->analgesics. " and ";
            
            if($r[0]->antibiotics != "null")
                $s  .= $r[0]->analgesics. " and ";
            }
        }
            print($s);
             
                  @endphp
                  
            </h1>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <img class="choose-img " src="img\slider-3.jpg">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us1.png">
                            <h4>Experienced Doctors</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us2.png">
                            <h4>20 Years of Experience</h4>

                        </div><br>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us3.png">
                            <h4>Successful Cases</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us4.png">
                            <h4>Happy  Patient</h4>

                        </div>

                    </div>

                </div>
            </div>

    <!--    -------   Ask doctor --------   -->

            <div id="ask_doctor">
                <div class="ask_back">
                    <!-- img background-->
                    <div class="ask_overlay">
                        <div class="container container-edit">
                            <div class="row">
                                    <div class="ask_front"></div>
                                    <div class="ask_back_detail">
                                        <h1>Put your question</h1>
                                        <p>Doctors will answer</p>
                                        <a href="/ask">
                                            <button type="button" class="btn btn-primary ask_btn">Ask Doctor</button>
                                        </a>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    <!--   ----   Dental Services   -------  -->

            <div class="container containerhide dental_services" id="dental_services">
                <h1 class="hed1">Dental Services</h1>
                <div class="row">

                    <div class="service-detial">
                        <div class="service-detial-img">
                            <img class="detial-img">
                        </div>
                        <h4></h4>
                        <p class="p1"></p>
                        <p class="p2"></p>
                        <div class="service-detial-exit">
                            <span>X</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-1.jpg" id="service-img" class="col-lg-12">
                        <h4>Root Canal Treatment</h4>
                        <p>
                            A root canal is a treatment used to repair and save a tooth
                            that is badly decayed or becomes infected. During a root canal
                            procedure, the nerve and pulp are removed and the inside of the
                            tooth is cleaned and sealed. Without treatment, the tissue surrounding
                            the tooth will become infected and abscesses may form.
                            "Root canal" is the term used to describe the natural cavity
                            within the center of the tooth. The pulp or pulp chamber is the soft
                            area within the root canal. The tooth's nerve lies within the root canal.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-2.jpg" id="service-img" class="col-lg-12">
                        <h4>Dentures</h4>
                        <p>
                            A denture is a removable replacement for missing
                            teeth and surrounding tissues. Two types of dentures are
                            available -- complete and partial dentures. Complete dentures
                            are used when all the teeth are missing, while partial dentures
                            are used when some natural teeth remain.
                            Complete Dentures
                            Complete dentures can be either "conventional" or "immediate."
                            Made after the teeth have been removed and the gum tissue has begun
                            to heal, a conventional denture is ready for placement in the mouth
                            about eight to 12 weeks after the teeth have been removed.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-3.jpg" id="service-img" class="col-lg-12">
                        <h4>Fillings</h4>
                        <p>
                            A filling is a way to restore a tooth damaged by decay back to its
                            normal function and shape. When a dentist gives you a filling, he
                            or she first removes the decayed tooth material, cleans the affected
                            area, and then fills the cleaned out cavity with a filling material.
                            By closing off spaces where bacteria can enter, a filling also helps
                            prevent further decay. Materials used for fillings include gold,
                            porcelain, a composite resin (tooth-colored fillings), and an amalgam
                            (an alloy of mercury, silver, copper, tin and sometimes zinc).
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-4.jpg" id="service-img" class="col-lg-12">
                        <h4>Scaling</h4>
                        <p>
                            Dental scaling is routinely performed to help patients with gum
                            disease and excessive plaque buildup. While a standard cleaning
                            will address the surface of the tooth, scaling goes much deeper.
                            If your dentist suggests dental scaling and root planing for your teeth,
                            it’s helpful to know what this means so you can prepare for what’s ahead.
                            Understanding Scaling
                            Scaling is a common dental procedure for patients
                            with gum disease. This is a type of dental cleaning that
                            reaches below the gumline to remove plaque buildup.
                            The process of scaling and root planing the teeth is often referred
                            to as a deep cleaning. This treatment goes beyond the general cleaning
                            that you receive with your regular checkup and annual visit.

                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-5.jpg" id="service-img" class="col-lg-12">
                        <h4>Prevention of tooth decay</h4>
                        <p>
                            Tooth decay is parts of teeth with rot that may progress to
                            small or large holes gradually.

                            Tooth decay is one of the most common health
                            problems around the world. It is widespread, mainly, among children
                            and adolescents, but every person in his mouth has teeth that may develop
                            cavities. And if tooth decay is not treated, the holes may get bigger and wider
                            , causing severe pain, inflammation,
                            and even tooth loss and other complications.
                            Cleaning (rubbing) the teeth after eating or drinking

                            Mouth rinse
                            Visit a dentist regularly
                            Checking the possibility of tightening gaps between teeth
                            Drinking water from taps (faucets)
                            Refrain as much as possible from eating snacks and sweetened drinks
                            Eat foods that strengthen dental health
                            Fluoride treatment
                              Use antibacterial agents, if necessary
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-6.jpg" id="service-img" class="col-lg-12">
                        <h4>Teeth Whitening</h4>
                        <p>
                            Teeth whitening is a change from the color of the tooth
                            to a lighter color and is a conservative method for treating tooth
                            discoloration and meets the needs of an increasing number of patients
                            who require a whiter smile, moreover, teeth whitening is technically easier
                            and less expensive than any other type of treatment Aesthetic, such as
                            veners treatment. Teeth whitening can be achieved either by changing
                            the internal color or by removing and controlling the formation
                            of external stains.
                        </p>
                    </div>


                </div>
            </div>




    <!--    -------   feature --------   -->

            <div class="feature">
                <div class="container containerhide">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-1.png" class="rounded-circle">
                            <h2>4,500</h2>
                            <p>Happy  Patient</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-2.png" class="rounded-circle">
                            <h2>15,600+</h2>
                            <p>Successful Cases</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-3.png" class="rounded-circle">
                            <h2>20</h2>
                            <p>Years of Experience</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-4.png" class="rounded-circle">
                            <h2>25</h2>
                            <p>Experienced Doctors</p>
                        </div>
                    </div>
                </div>

            </div>


    <!--  --------   Our Doctors    ------- -->

            <div class="container containerhide" id="our-doctors">
                <h1 class="hed1">Our Doctors</h1>
                <div class="row">
                    @if(isset($datadoctor) )
                    @if( count($datadoctor ) > 0)
                        @foreach($datadoctor  as $data)
                            @if($data->role=='Admin' || $data->role=='doctor')
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="{{ asset('publicimages/'. $data->image ) }}" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>{{$data->fristname}} {{$data->lastname}}</h1>
                            <p>
                                {{$data->clenicAdress}}<br>
                                {{$data->phone}}<br>
                                {{$data->email}}<br>
                                {{$data->describtion}}<br>

                            </p>
                        </div>
                    </div>
                                @endif
                        @endforeach
                    @endif
                    @endif


                </div>
            </div>

            <!--     footer    -->
            <div class="footer">
                <div class="container">

                    <p>
                    <span>Register for free</span>
                    <a class="btn btn-rounded btn-light footer-btn" href="/registeration">Sign In</a>
                    </p>
                    <ul class="ml-auto footerlinks">
                        <li class="nav-item active">
                            <a class="nav-link" href="/#firstPage">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ask">ASK DOCTOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#dental_services">DENTAL SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#our-doctors">DOCTORS</a>
                        </li>
                    </ul>


                </div>

                <div style="background: #111111;">
                    <p>© 2019 Copyright: All right reserved.Made with us for a better teeth. </p>
                </div>

                <div class="arrow-top">
                    <i class="fas fa-chevron-up"></i>
                </div>

            </div>


         

        </div>
               
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
    </body>
   
</html>
