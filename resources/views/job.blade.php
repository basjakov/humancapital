@extends('layouts.app')
@section('seo')
<meta name="author" content="{{$job->title}}">
<meta name="description" content="{{$job->meta_description}}">
<meta name="keywords" content="{{$job->meta_keyword}}">



<title>{{$job->title}}</title>
@endsection
@section('content')
<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="/uploads/jobs/{{$job->category}}/{{$job->company}}/{{$job->deadline}}/{{$job->title}}/{{$job->image}}" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
<h2 class="font-color-white">{{$job->title}}</h2>
<p class="font-color-white width-100"><a href="vacancies?category={{$job->category}}" class="font-color-white">{{$job->category}}</a>
</p>
</div>
</div>
</div>
</section>


<section id="job-Details">
<div class="container background-color-full-white job-Details">
<div class="Exclusive-Product">
<h3>{{$job->title}}</h3>
<a href="{{route('apply',$job->id)}}" class="Apply-Now">Apply Now</a>
<h6 class="font-color-orange">{{$job->company}}</h6>
<i class="material-icons">place</i>
<span class="text">{{$job->location}}</span>|
<span class="text">{{$job->job_type}}</span>
<h4>Նկարագրություն</h4>
<?php 
    echo $job->description;
?>
</div>

<div class="Job-Description">
<h4>Պարտականություններ</h4>
<?php 
    echo  $job->Job_responsibilities
?>    
<div class="vertical-space-20"></div>
<h4>Experience & Requirement</h4>
<?php 
    echo  $job->qualifications
?>  
<ul>
<li class="list-style">Պահանջվող մակարդակը՝ {{$job->level}}</li>
<li class="list-style">
Հմտություններ`{{$job->skills}}
<li class="list-style">
Վերջնաժամկետ`<b>{{$job->deadline}}</b>
<li class="list-style">
Աշխատավարձ`<b>{{$job->salery}}</b>
</ul>
</div>
</div>
</section>

@endsection