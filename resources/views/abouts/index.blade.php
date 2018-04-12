@extends('layouts.master')

@section('content')

<section class="section-aboutus wrap-blance blancejqurey bg-section2 clearfix">
        <div id="blance1" class="featured-aboutus float-left">
            <img src="{{ asset('images/services/about.jpg') }}" alt="image">
        </div>
        <div id="blance2" class="info-aboutus float-left">
            <div class="title-section style2 left">
                <h1 class="title"><span>We advise</span> you, you call the right decision!</h1>
                <div class="sub-title">
                    Over The Last 30 Years, We’ve Been In This Corporate Consulting Business, We Were Able To Help Hundreds Of Top-Flight Companies And Thousands Of SMBs To Call The Right Decisions…
                </div>
                <div class="sub-title">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                </div>
            </div>
            <div class="about-counter">
                <div class="flat-counter float-left color-another text-center">                            
                    <div class="content-counter float-left">
                        <div class="icon-count">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="numb-count" data-to="120" data-speed="2000" data-waypoint-active="yes">120</div>
                        <div class="name-count">Consultants</div>
                    </div>
                </div><!-- /.flat-counter -->
                <div class="flat-counter color-another float-left text-center">                            
                    <div class="content-counter float-left">
                        <div class="icon-count">
                            <i class="ti-bookmark-alt"></i>
                        </div>
                        <div class="numb-count" data-to="50" data-speed="2000" data-waypoint-active="yes">50</div>
                        <div class="name-count">Awards Winning</div>
                    </div>
                </div><!-- /.flat-counter -->
                <div class="flat-counter color-another float-left text-center">                            
                    <div class="content-counter">
                        <div class="icon-count">
                            <i class="ti-heart-broken"></i>
                        </div>
                        <div class="numb-count" data-to="240" data-speed="2000" data-waypoint-active="yes">240</div>
                        <div class="name-count">Satisfied Customers</div>
                    </div>
                </div><!-- /.flat-counter -->
            </div>
        </div>
    </section> 

@endsection