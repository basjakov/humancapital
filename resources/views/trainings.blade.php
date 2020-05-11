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
<div class="Job-Category-box">

</div>


</div>
<div class="col-lg-8 col-md-12">

@foreach ($trainings as $training)
       

<div class="detail width-100 ">
<div class="media display-inline text-align-center">
<img src="/uploads/training/{{$training->title}}/{{$training->image}}" alt="{{$training->title}}"  width="128px" height="128px" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6><a href="{{route('training.show',$training->id)}}" class="font-color-black">{{$training->title}}</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">{{$training->organizer}}</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">{{$training->location}}</span>
<p class="date-time">Սկսվում է՝{{$training->starting}}</p>
<p class="date-time">Ավարտվում է՝{{$training->end}}</p>
<div class="float-right margin-top text-align-center">

<a href="{{route('applytraining',$training->id)}}" class="part-full-time">Դիմել</a></br></br>

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
<li class="page-item"><a class="page-link active" href="javascript:void(0);">{{$trainings->links()}}</a></li>
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
