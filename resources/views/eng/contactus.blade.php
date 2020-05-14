@extends('eng.layouts.app')
@section('switcher_hay')
    <a href="{{route('contact')}}" style="color: #fff;font-size:23px;">Հայ</a>
@endsection
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="Humancapital |contact us">
<meta name="keywords" content="humancapital ,contact us">



<title>
    Humancapital |Contact us
</title>
@endsection
@section('content')
<section id="Contact_us">
<div id="map" style="width: 100%;
         height: 50vh"></div>
</section>



<section id="Get-in-Touch">
<div class="container text-center position-absolute">
<div class="Get-in-Touch-box">
<h3 class="text-left">Have questions? Write to us:</h3>
<div class="vertical-space-5"></div>
<p class="text-left">For inquires: info@humancapital.am
</br>
For submitting your CV/resume: HR@humancapital.am</br>
</br>Our phone numbers: +374 33 335188; +3749104214
We at social networks:
</br>
<a href="https://www.facebook.com/humancapital8" target="_blank">
<i class="fa fa-facebook social-icon" style="font-size:24px;color:#f26c4f;"></i></a>
<a href="https://www.linkedin.com/company/human2capital/?viewAsMember=true&amp;fbclid=IwAR3KHjaauXLMyPfq7XClrTCjzx_EO7memAUkNFHqFevAqioyedTENKjsmM8" target="_blank">
<i class="fa fa-linkedin social-icon" style="font-size:24px;color:#f26c4f;"></i></a>

<a href="https://instagram.com/humancapital__?igshid=1tiabydmxgn3h" target="_blank" style="margin-top:35px;">
<i class="fa fa-instagram social-icon" style="font-size:24px;color:#f26c4f;"></i></a>
<div class="vertical-space-40"></div>
<form method="post" action="{{route('sendmail')}}">
    {{ csrf_field() }}
    @if($errors->any())
              <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                              @endforeach
                    </ul>
              </div>
          @endif
<div class="row">

<div class="row">
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Your name" required />
<span class="fa fa-user icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="text" name="subject" class="form-control" placeholder="Subject" required />
<span class="fa fa-file icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email " required />
<span class="fa fa-envelope icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="tel" name="tel" class="form-control" placeholder="Phone" required />
<span class="fa fa-phone icone "></span>
</div>
</div>
<div class=" col-lg-12 col-md-12">
<div class="form-group">
<textarea class="form-control" name="msg" placeholder="message" rows="3" required></textarea>
</div>
</div>
</div>
<button type="submit" class="Send">Send</button>



</form>
</div>
</div>
</section>
@endsection