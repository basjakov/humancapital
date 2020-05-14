@extends('eng.layouts.app')
@section('switcher_hay')
    <a href="{{route('hcblog')}}" style="color: #fff;font-size:23px;">Հայ</a>
@endsection
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="Humancapital |hr blog">
<meta name="keywords" content="Humancapital |hr article">


<title>
    Humancapital |hr blog
</title>
@endsection
@section('content')
<section id="Blog">
<div class="vertical-space-100"> </div>
<div class="vertical-space-101"> </div>
<div class="container">
<h3>Blog</h3>
<div class="vertical-space-20"></div>
<p>The latest HR news.</p>

<div class="vertical-space-50"></div>
<div class="row">
@foreach ($blogs as $blog)
<div class="col-lg-4 col-md-6">
<img src="uploads/blog/{{$blog->title}}/{{$blog->image}}" style="height:410px;" class="blog-image" alt="{{$blog->title}}">
<div class="blog-box">
<a href="{{route('blog.show',$blog->id)}}" class="font-color-black font-size">{{$blog->title}}}</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">{{$blog->created_at}}</p>
<?php
    $blog_intro = substr($blog->text, 0,35);
?>
<p class="space10"><?php echo $blog_intro?></p>
<div class="vertical-space-20"></div>
<a href="{{route('blog.show',$blog->id)}}" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
@endforeach
<div class="vertical-space-25"></div>
<div class="job-list">
<ul class="pagination justify-content-end margin-auto">
        {{$blogs->links()}}
<li class="page-item">

</li>
</ul>
</div>
</div>
</div>
<div class="vertical-space-60"> </div>
</section>
@endsection