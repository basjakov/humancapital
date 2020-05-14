@extends('eng.layouts.app')
@section('switcher_hay')
    <a href="{{route('trainings')}}" style="color: #fff;font-size:23px;">Հայ</a>
@endsection
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="Professional hr services
">
<meta name="keywords" content="Humancapital |training">


<title>
    Humancapital |Trainings armenia 
</title>
@endsection
@section('content')

<style>
    .list_finder{
        display:block;
        margin:0.2em;
    }
</style>




<section id="resent-job-post" class="background-color-white-drak">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h4 class="text-left"></h4>
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
<h6><a href="{{route('showen',$training->id)}}" class="font-color-black">{{$training->title}}</a></h6>
<i class="large material-icons">account_balance</i>
<span class="text">{{$training->organizer}}</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">{{$training->location}}</span>
<p class="date-time">The course begins {{$training->starting}}</p>
<p class="date-time">The course ends {{$training->end}}</p>
<div class="float-right margin-top text-align-center">

<a href="{{route('applytraining',$training->id)}}" class="part-full-time">Apply</a></br></br>

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
