@extends('layouts.app')
@section('content')
<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="/uploads/blog/{{$blog->title}}/{{$blog->image}}" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
<h2 class="font-color-white">{{$blog->title}}</h2>

</p>
</div>
</div>
</div>
</section>


<section id="job-Details">
<div class="container background-color-full-white job-Details">
<div class="Exclusive-Product">

<h6 class="font-color-orange">{{$blog->author}}</h6>

<span class="text">{{$blog->created_at}}</span>|

<h1>{{$blog->title}}</h1>
<p class="mb-0">
<?php 
    echo $blog->text;
?>
</p>
</div>
</div>
</section>
@endsection