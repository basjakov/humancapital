@extends('layouts.app')
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="Humancapital |կապ մեզ հետ">
<meta name="keywords" content="">



<title>
    Humancapital |կապ մեզ հետ
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
<h3 class="text-left">Ունեք հարցեր գրեք մեզ՝</h3>
<div class="vertical-space-5"></div>
<p class="text-left">Հարցումների համար. info@humancapital.am
</br>
CV/ռեզյումեն ուղարկելու համար. HR@humancapital.am     </br>
</br>Մեր հեռախոսահամարները. +374 33 335188; +37491042140
Սոցիալական ցանցեր`
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
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Ձեր անունը" required />
<span class="fa fa-user icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="text" name="subject" class="form-control" placeholder="Թեմա" required />
<span class="fa fa-file icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email հասցե" required />
<span class="fa fa-envelope icone "></span>
</div>
</div>
<div class=" col-lg-6 col-md-12">
<div class="form-group">
<input type="tel" name="tel" class="form-control" placeholder="հեռախոս" required />
<span class="fa fa-phone icone "></span>
</div>
</div>
<div class=" col-lg-12 col-md-12">
<div class="form-group">
<textarea class="form-control" name="msg" placeholder="Ձեր հաղորդագրությունը" rows="3" required></textarea>
</div>
</div>
</div>
<button type="submit" class="Send">Ուղղարկել</button>

</form>
</div>
</div>
</section>
@endsection