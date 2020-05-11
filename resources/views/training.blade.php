@extends('layouts.app')
@section('seo')
<meta name="author" content="{{$training->title}}">
<meta name="description" content="{{$training->meta_description}}">
<meta name="keywords" content="{{$training->meta_keyword}}">



<title>{{$training->title}}</title>
@endsection
@section('content')

<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="/uploads/training/{{$training->title}}/{{$training->image}}" alt="{{$training->title}}"></div>
<div class="carousel-container">
<div class="carousel-content">
<h2 class="font-color-white">{{$training->title}}</h2>
</p>
</div>
</div>
</div>
</section>


<section id="job-Details">
<div class="container background-color-full-white job-Details">
<div class="Exclusive-Product">
<h3>{{$training->title}}</h3>
<a href="{{route('applytraining',$training->id)}}" class="Apply-Now">Apply Now</a>



<h6 class="font-color-orange">{{$training->company}}</h6>
<i class="material-icons">place</i>
<span class="text">{{$training->location}}</span>|
<span class="text">{{$training->job_type}}</span>
<div class="Job-Description">
<h4>Նկարագրություն</h4>
<?php 
    echo $training->description;
?>
</div>


<ul>
<li class="list-style">Սկսում է`<b>{{$training->starting}}</b></li></br>
<li class="list-style">Վերջնաժամկետ`<b>{{$training->end}}</b></li>

</ul>
</div>
</div>
</div>
</section>

@endsection
