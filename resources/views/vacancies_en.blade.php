@extends('layouts.app')
@section('content')

<style>
    .list_finder{
        display:block;
        margin:0.2em;
    }
</style>

<div id="search-box" class="margin-none">
<div class="container search-box">
<form action="#" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<span class="large material-icons search">search</span>
<input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search">
<select class="dropdown_item_select search-box_search_input">
<option>Category</option>
<option>Category1</option>
<option>Category2</option>
</select>
<span class="large material-icons margin-top search">place</span>
<input class="search-box_search_input " placeholder="Location" required="required" type="search">
</div>
<button type="submit" class="search-box_search_button">Search Jobs</button>
</form>
</div>
</div>


<section id="resent-job-post" class="background-color-white-drak">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h4 class="text-left">Filter Jobs Result</h4>
<div class="vertical-space-30"></div>
<div class="row">
<div class="col-lg-4 col-md-12">
<a href="{{route('vacancies')}}" class="font-color-black" style="font-size:30px;margin:0.2em;text-align:right;">Armenian</a>
<div class="Job-Category-box">
<p class="title">Category</p>
<ul>
<a href="{{route('vacancies_en')}}?category=office" class="font-color-black list_finder">Office work</a>
<a href="{{route('vacancies_en')}}?category=trading" class="font-color-black list_finder">Trade</a>
<a href="{{route('vacancies_en')}}?category=finance_law" class="font-color-black list_finder">Finance and Law</a>
<a href="{{route('vacancies_en')}}?category=it_development" class="font-color-black list_finder">Computers and Internet</a>
<a href="{{route('vacancies_en')}}?category=media_design" class="font-color-black list_finder">Media and Design</a>
<a href="{{route('vacancies_en')}}?category=restaurant_kitchen" class="font-color-black list_finder">Food and Restaurants</a>
<a href="{{route('vacancies_en')}}?category=tourism_hotel" class="font-color-black list_finder">Tourism and hotels</a>
<a href="{{route('vacancies_en')}}?category=transport_taxt" class="font-color-black list_finder">Transportation and Taxi</a>

<a href="{{route('vacancies_en')}}?category=beauty_spa" class="font-color-black list_finder">Beauty and spa</a>
<a href="{{route('vacancies_en')}}?category=construction_archichecture" class="font-color-black list_finder">Construction and Architecture</a>
<a href="{{route('vacancies_en')}}?category=home_economy" class="font-color-black list_finder">housekeeping</a>
<a href="{{route('vacancies_en')}}?category=production_craft" class="font-color-black list_finder">Manufacturing and Crafts</a>
<a href="{{route('vacancies_en')}}?category=bussiness_marketing" class="font-color-black list_finder">Business and marketing</a>

<a href="{{route('vacancies_en')}}?category=education" class="font-color-black list_finder">Education</a>
<a href="{{route('vacancies_en')}}?category=medical" class="font-color-black list_finder">Medicine and Health</a>
<a href="{{route('vacancies_en')}}?category=other" class="font-color-black list_finder">Other</a>
</ul>
</div>
<div class="Job-Nature-box" style="margin-top:100px;">
<!-- <p class="title">Job Nature</p>
<ul>
<li class="list-item1 "><a href="{{route('vacancies')}}" class="font-color-black">Armenian</a></li>

</ul>
</div>
<div class="Salary-Range-box">
<p class="title">Salary Range</p>
<p>
 <input type="text" id="amount1" class="salery-range"> <i class="fa fa-minus minus"></i>
<input type="text" id="amount2" class="salery-range">
</p>
<div id="slider-range"></div>
<p class="small-title">Experience Level</p>
<form action="#" class="search-box_search_form">
<select class="dropdown_item_select search-box_search_input">
<option>Select experience level</option>
<option>Select experience level1</option>
<option>Select experience level2</option>
</select>
<p class="small-title">Location</p>
<input class="search-box_search_input Location " placeholder="Location" required="required" type="search">
<span class="fa fa-map-marker location-icone"></span>
</form>
</div>
<div class="Industry-box">
<p class="title">Industry</p>
<ul>
<li class="deactivate"><a href="#" class="font-color-black">Full Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
</ul> -->
</div>
</div>
<div class="col-lg-8 col-md-12">

@foreach ($jobs as $job)
       

<div class="detail width-100 ">
<div class="media display-inline text-align-center">
<img src="/uploads/jobs/{{$job->category}}/{{$job->company}}/{{$job->deadline}}/{{$job->title}}/{{$job->image}}" alt="{{$job->title}}"  width="128px" height="128px" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6><a href="{{route('jobs.show',$job->id)}}" class="font-color-black">{{$job->title}}</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">{{$job->company}}</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">{{$job->location}}</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">{{$job->job_type}}</a></br>
<a href="{{route('apply',$job->id)}}" class="part-full-time">Apply</a>
<p class="date-time">{{$job->deadline}}</p>
</div>
</div>
</div>
</div>


@endforeach
<div class="vertical-space-20"></div>
<div class="vertical-space-25"></div>
<div class="job-list width-100">
<ul class="pagination justify-content-end margin-auto">
<li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<li class="page-item"><a class="page-link active" href="javascript:void(0);">{{$jobs->links()}}</a></li>
<li class="page-item">
<a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="vertical-space-60"></div>
</section>

@endsection
