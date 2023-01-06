@extends('welcome')
@section('content')
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;{{asset('/frontend/assets/img/blood-donation-qatar.jpg')}}&quot;);color:rgba(255,0,61,0.4);background-position:center;background-size:cover;background-repeat:no-repeat;background-color:rgba(255,1,16,0.32);">
            <div class="text">
                <h2 style="color:rgb(255,255,255);"><strong>Sheba blood donation</strong></h2>
                <p style="color:#e7fbda;height:54px;">A non profitable <strong><em>organization </em></strong>where <strong><em>your effort</em></strong> will be highly appreciatable.</p><a href="/about-us" class="btn btn-outline-light btn-lg" type="button">Learn More</a></div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>We are non profitable organization and we provide only blood for emergency need by the help of you.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{asset('/frontend/assets/img/scenery/image5.jpg')}}"></div>
                    <div class="col-md-6">
                        <h3>Being A Donar</h3>
                        <div class="getting-started-info">
                            <p>Join our community. Save life and make peacefull happy 
                                World.</p>
                        </div><a href="/registration-form" class="btn btn-outline-primary btn-lg" type="button">Join Now</a></div>
                </div>
            </div>
        </section>

        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>We are non profitable organization and we provide only blood for emergency need by the help of you.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Bootstrap 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Live Happily</h2>
                    <p>Donate little and make other to smile and encourage them to see the World.</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" height="500" src="{{asset('frontend/assets/img/World-Blood-Donor-Day.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" height="500" src="{{asset('frontend/assets/img/565095.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" height="500" src="{{asset('frontend/assets/img/565097.jpg')}}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{url('frontend/assets/img/avatars/avatar1.jpg')}}">
                            <div class="card-body info">
                                <h4 class="card-title">John Smith</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{url('frontend/assets/img/avatars/avatar2.jpg')}}">
                            <div class="card-body info">
                                <h4 class="card-title">Robert Downturn</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{url('frontend/assets/img/avatars/avatar3.jpg')}}">
                            <div class="card-body info">
                                <h4 class="card-title">Ally Sanders</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection