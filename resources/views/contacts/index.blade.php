@extends('layouts.master2')

@section('content')

<section class="flat-row page-contact">
        <div class="container">
            <div class="wrap-formcontact style2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="flat-maps box-shadow3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.267226760404!2d106.80448931535895!3d-6.228456995491348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15aaf3f35e7%3A0x9607c9297ab38940!2sDistrict+8!5e0!3m2!1sid!2sid!4v1524624339325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
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