@extends('layouts.master')

@section('content')

    <section class="flat-row section-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="title-section style3 left">
                        <h1 class="title">Our Industry</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-section padding-left50">
                        <div class="sub-title style3">
                            We help organisations work smarter and grow faster. Reach out to us to build effective organisations, reduce costs, manage risk and regulation and leverage talent.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-pie-chart"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Corporate Finance</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div>
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-bar-chart"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Economic Consulting</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div> 
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-bell"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Forensic & Litigation</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div> 
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-microphone"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Strategic Communications</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div> 
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-desktop"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Technology Consulting</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div> 
                <div class="col-lg-4">
                     <div class="iconbox style3">
                        <div class="box-header">
                            <div class="box-icon">
                                <i class="ti-support"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <h5  class="box-title">Healthcare Consulting</h5>  
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                        </div>
                    </div>     
                </div>       
            </div>  
        </div>
    </section>

    <section class="flat-row v4 bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 reponsive-onehalf">
                    <div class="title-section style2 left">
                        <h1 class="title">Our Projects</h1>
                        <div class="sub-title">
                            We are here to Acelerate your business and help you find the way.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 reponsive-onehalf">
                    <div class="btn-showall float-right">
                        <a href="#" class="flat-button">Show All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-imagebox flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="false"> 
            <div class="imagebox">
                <div class="imagebox-image"> 
                    <a href="#"><img src="{{ asset('images/imagebox/s1.jpg') }}" alt="image"></a> 
                </div> 
                <div class="imagebox-content">
                 <h5 class="imagebox-title"><a href="#">Financial Consulting</a></h5>
                  <p class="imagebox-category">Businiess</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s2.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Financial Consulting</a></h5>
                    <p class="imagebox-category">Businiess</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s3.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Financial Consulting</a></h5>
                    <p class="imagebox-category">Businiess</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s4.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Financial Consulting</a></h5>
                    <p class="imagebox-category">Businiess</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s5.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Financial Consulting</a></h5>
                    <p class="imagebox-category">Businiess</p>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row section-client bg-section">
        <div class="container">
            <div class="row">       
                <div class="col-md-12">
                    <div class="flat-client" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                        <div class="client"><img src="{{ asset('images/clients/1.png') }}" alt="image"></div>
                        <div class="client"><img src="{{ asset('images/clients/2.png') }}" alt="image"></div>
                        <div class="client"><img src="{{ asset('images/clients/3.png') }}" alt="image"></div>
                        <div class="client"><img src="{{ asset('images/clients/4.png') }}" alt="image"></div>
                        <div class="client"><img src="{{ asset('images/clients/5.png') }}" alt="image"></div>
                    </div><!-- /.flat-client -->      
                </div>
            </div>
        </div>             
    </section>

<!-- Footer -->
    <footer class="footer widget-footer">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-3 col-sm-6 reponsive-mb30">  
                    <div class="widget-logo">
                        <div id="logo-footer" class="logo">
                            <a href="{{ url('/') }}" rel="home">
                                <img src="{{ asset('images/logofooter1.png') }}" alt="image">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p> 
                        <ul class="flat-information">
                            <li><i class="fa fa-map-marker"></i><a href="#">Prosperity tower 16 A 
                                                District 8 , SCBD Lot 28</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">021-526-0727</a></li>
                            <li><i class="fa fa-envelope"></i><a href="#">admin@sanmarinoindonesia.com</a></li>
                        </ul>           
                    </div>         
                </div><!-- /.col-md-3 --> 

                <div class="col-lg-3 col-sm-6 reponsive-mb30">  
                    <div class="widget widget-out-link clearfix">
                        <h5 class="widget-title">Our Links</h5>
                        <ul class="one-half">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Company</a></li>
                        </ul>
                        <ul class="one-half">
                            <li><a href="#">News</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-lg-3 col-sm-6 reponsive-mb30">
                    <div class="widget widget-recent-new">
                        <h5 class="widget-title">Recent News</h5>
                        <ul class="popular-new">
                            <li>
                                <div class="text">
                                    <h6><a href="#">Colombia Gets a Business Makeover</a></h6>
                                    <span>20 Aug 2017</span>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <h6><a href="#">Counting the Cost of Delay & Disruption</a></h6>
                                    <span>20 Aug 2017</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col-md-3 -->
    </footer>

@endsection