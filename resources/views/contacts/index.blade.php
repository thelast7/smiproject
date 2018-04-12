@extends('layouts.master')

@section('content')

<section class="flat-row page-contact">
        <div class="container">
            <div class="wrap-formcontact style2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="flat-maps box-shadow3">
                            <div class="maps2" style="width: 100%; height: 570px; "></div> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="margin-left40">
                            <h1>Get In Touch With Us !</h1>
                            <p>Fill out the form below to recieve a free and confidential.</p>

                            @if(Session::has('status'))
                            <div class="alert alert-success">{{ Session::get('status') }}</div>
                            @endif

                            <form id="contactform" class="contactform style4  clearfix" method="post" action="./contact/contact-process.php" novalidate="novalidate">

                                {{ csrf_field() }}

                                <span class="flat-input"><input name="name" type="text" value="" placeholder="Name*" required="required"></span>

                                <span class="flat-input"><input name="email" type="email" value="" placeholder="Email" required="required"></span>

                                <span class="flat-input"><textarea name="message" placeholder="Messages" required="required"></textarea></span>

                                <span class="flat-input"><button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">send messages</button></span>

                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

@endsection