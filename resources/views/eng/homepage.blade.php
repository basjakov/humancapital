@extends('eng.layouts.app')
@section('switcher_hay')
    <a href="{{route('home')}}" style="color: #fff;font-size:23px;">Հայ</a>
@endsection
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="պրոֆեսիոնալ Jobs and professional HR services
">
<meta name="keywords" content="Humancapital | Jobs and professional HR services|vacancies|jobs in armenia">


<title>
    Humancapital |Jobs and professional HR services
</title>
@section('content')

<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
 <h2 class="font-color-white">HUMAN CAPITAL IS THERE FOR YOU AS ONE TEAM, ONE FAMILY.</հ2>
<p class="font-color-white"> We offer wide range of HR services. And we’ll help you to find your dream job.</p>
<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
</div>
</div>
</div>
</section>


<div id="search-box">
<div class="container search-box" >
<form action="/vacancies/en/?category=category" id="search-box_search_form_3" style="margin-left:33%;" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<select class="dropdown_item_select search-box_search_input" style="margin:1em;" name="category">
<option value="office">Office</option>
<option value="trading">Trade</option>
<option value="finance_law">Finance and Law</option>
<option value="it_development">Computers and Internet</option>
<option value="media_design">Media and Design</option>
<option value="restaurant_kitchen">Food and Restaurants</option>
<option value="tourism_hotel">Tourism and hotels</option>
<option value="transport_taxt">Transportation and Taxi</option>
<option value="beauty_spa">Beauty and spa</option>
<option value="construction_archichecture">Construction and Architecture</option>
<option value="home_economy">housekeeping</option>
<option value="production_craft">Manufacturing and Crafts</option>
<option value="bussiness_marketing">Business and marketing</option>
<option value="education">Education</option>
<option value="medical">Medicine and Health</option>
<option value="other">Other</option>
</select>
<button type="submit" class="search-box_search_button">Search</button>
</div>

</form>
</div>
</div>


<section id="Job-Category">
<div class="container">
<h3 class="text-center">Find your dream job in HumanCapital</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Find your dream job or obtain new skills through the most professional trainings
we offer making your career with us.
</p>
<div class="vertical-space-60"> </div>
<div class="row">

<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-2.png" alt="">
</div>  
<h6>Vacancies</h6>
<a href="{{route('vacancies_en')}}" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>View</span></a>
</div>
</div>

<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-1.png" alt="">
</div>
<h6>Trainings</h6>
<a href="{{route('trainingsen')}}" class="button job_post" style="padding:12px 35px;" data-hover="View Trainings" data-active="I'M ACTIVE"><span>View</span></a>
</div>
</div>
<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-4.png" alt="">
</div>
<h6>Blog</h6>
<a href="{{Route('hcblogen')}}" class="button job_post" data-hover="Go to  blog" data-active="I'M ACTIVE"><span>Read</span></a>
</div>
</div>




<section id="resent-job-post" class="background-color-white">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Recent vacancies</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Apply and we will reach you out very fast:
</p>
@foreach($jobs as $job):
<div class="vertical-space-60"></div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="/uploads/jobs/{{$job->category}}/{{$job->company}}/{{$job->deadline}}/{{$job->title}}/{{$job->image}}" alt="{{$job->title}}" class="mr-3 " width="85px" height="85px">
<div class="media-body text-left  text-align-center">
<h6>{{$job->title}}</h6>
<i class="large material-icons">account_balance</i>
<span class="text">{{$job->company}}</span>
<br>
<i class="large material-icons">place</i>
<span class="text font-size">{{$job->location}}</span>
<div class="float-right margin-top text-align-center">
<a href="{{route('jobsen',$job->id)}}" class="part-full-time">{{$job->job_type}}</a></br>
<a href="{{route('jobsen',$job->id)}}" class="part-full-time">View</a>
<p class="date-time">Deadline: {{$job->deadline}}</p>
</div>
</div>
</div>
</div>



@endforeach

<div class="vertical-space-20"></div>
   <div class="job-list">
       <a href="{{route('vacancies_en')}}" class="Open-Jobs-Page margin-auto">All vacancies<i class="large material-icons float-right">trending_flat</i></a>
      <ul class="pagination justify-content-end margin-auto">
        <li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);">{{$jobs->links()}}</a></li>
      </ul>
    </div>
</div>









<section id="Jobtend">
<div class="container">
<div class="vertical-space-85"></div>
<div class="row">
<div class="col-lg-9 col-md-6  align-self-center">
<h3 class="title">Human Capital</h3>
<div class="vertical-space-30"></div>
<p class="max-width">We offer wide range of HR services focused on a number of major areas, including:

</p>
<div class="vertical-space-30"></div>
<h4>What do we do</h4>
<div class="vertical-space-30"></div>
<ul>
<li class="list-item1 ">Recruiting and staffing
<br /> 
</li>
<li class="list-item1 ">Training and learning (competency building during retreats)</li>
<li class="list-item1 ">Labor and employee relations</li>

<li class="list-item1 ">Organization development</li>
<li class="list-item1 ">Performance appraisal and workforce management</li>

<li class="list-item1 ">Developing and overseeing employee benefits and wellness programs</li>
<li class="list-item1 ">Developing, promoting, and enforcing policies</li>

<li class="list-item1 ">Promoting employee career development and on-job training</li>
<li class="list-item1 ">Providing orientation programs for new hires</li>

<li class="list-item1 ">Providing guidance regarding disciplinary actions</li>
<li class="list-item1 ">Serving as a primary contact for work-site injuries or accidents</li>

</ul>

<div class="vertical-space-30"></div>
<a href="{{route('vacancies_en')}}" class="Explore-Employee">Vacancies</a>
<a href="{{route('trainingsen')}}" class="Explore-New-Jobs">Trainings</a>
</div>

<div class="col-lg-3 col-md-6">
<img src="imags/man.png" alt="" class="man-img">
</div>
</div>
<div class="vertical-space-60"></div>
</div>
</div>
</section>



@endsection
