@extends('layouts.master')

@section('content')

    <section class="flat-row section-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="title-section style3 left">
                        <h1 class="title">Lorem Ipsum</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-section padding-left50">
                        <div class="sub-title style3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
                            <h5  class="box-title">Lorem Ipsum</h5>  
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero quam, sollicitudin id est vitae, vehicula suscipit neque. Phasellus nec convallis orci. Cras pretium justo lectus, sit amet lobortis magna consequat vitae.</p> 
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
               
            </div>
        </div>
        <div class="wrap-imagebox flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="false"> 
            <div class="imagebox">
                <div class="imagebox-image"> 
                    <a href="#"><img src="{{ asset('images/imagebox/s1.jpg') }}" alt="image"></a> 
                </div> 
                <div class="imagebox-content">
                 <h5 class="imagebox-title"><a href="#">Lorem Ipsum</a></h5>
                  <p class="imagebox-category">Business</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s2.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Lorem Ipsum</a></h5>
                    <p class="imagebox-category">Procurement</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s3.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Lorem Ipsum</a></h5>
                    <p class="imagebox-category">Contractor</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s4.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Lorem Ipsum</a></h5>
                    <p class="imagebox-category">Digital</p>
                </div>
            </div>
            <div class="imagebox">
                <div class="imagebox-image">
                    <a href="#"><img src="{{ asset('images/imagebox/s5.jpg') }}" alt="image"></a>
                </div>
                <div class="imagebox-content">
                    <h5 class="imagebox-title"><a href="#">Lorem Ipsum</a></h5>
                    <p class="imagebox-category">Electrical</p>
                </div>
            </div>
        </div>
    </section>

     <section class="flat-row section-client bg-section">
        <div class="container">
            <div class="row">       
                <div class="col-md-12">
                    <div class="flat-client" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                        <div class="client"><img src="images/clients/1.png" alt="image"></div>
                        <div class="client"><img src="images/clients/2.png" alt="image"></div>
                        <div class="client"><img src="images/clients/3.png" alt="image"></div>
                        <div class="client"><img src="images/clients/4.png" alt="image"></div>
                        <div class="client"><img src="images/clients/5.png" alt="image"></div>
                        <div class="client"><img src="images/clients/6.png" alt="image"></div>
                    </div><!-- /.flat-client -->      
                </div>
            </div>
        </div>             
    </section>

<!-- Footer -->
    <footer class="footer widget-footer">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-6 reponsive-mb30">  
                    <div class="widget-logo">
                        <div id="logo-footer" class="logo">
                            <a href="{{ url('/') }}" rel="home">
                                <img src="{{ asset('images/logofooter1.png') }}" alt="image">
                            </a>
                        </div>
                        <p>San Marino Indonesia is a company engaged in building contractors and construction companies such as construction, maintenance and development of various buildings..</p>          
                    </div>         
                </div><!-- /.col-md-3 --> 

                <div class="col-sm-3 reponsive-mb30">  
                    <div class="widget">
                        <h5 class="widget-title">GET IN TOUCH</h5>
                        <ul class="flat-information">
                            <li><i class="fa fa-map-marker"></i><a href="#">PROSPERITY TOWER FLOOR 16 BLOK A-J 
                                                DISTRICT 8 BUILDING, SCBD LOT 28</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">021-526-0727</a></li>
                            <li><i class="fa fa-envelope"></i><a href="#">admin@sanmarinoindonesia.com</a></li>
                        </ul>  
                    </div>
                </div><!-- /.col-md-3 -->

                 <div class="col-sm-3 reponsive-mb30">  
                    <div class="widget widget-out-link clearfix">
                        <h5 class="widget-title">OUR LINKS</h5>
                        <ul class="one-half">
                            <li><a href="{{ url('/') }}">HOME</a></li>
                            <li><a href="{{ url('about') }}">ABOUT US</a></li>
                             <li><a href="{{ url('contact') }}">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>

                
    </footer>

@endsection