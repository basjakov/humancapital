@extends('layouts.app')
@section('seo')
<meta name="author" content="humancapital">
<meta name="description" content="պրոֆեսիոնալ HR ծառայություններ աշխատանք ձեր համար
">
<meta name="keywords" content="Humancapital |մեր մասին">


<title>
    Humancapital |Աշխատանք և պրոֆեսիոնալ HR ծառայություններ
</title>
@section('content')

<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
 <h2 class="font-color-white">Գտիր քո երազանքի աշխատանքը</h2>
<p class="font-color-white"> Humancapital-ի հետ դուք կարող եք գտնել ձեզ և ձեր պրոֆիլին համապատասխան աշխատանք:Մեր պրոֆեսիոնալ HR թիմը կանի ամեն ինչ ձեր զբաղվածությունը հավուր պատշաճով ապահովելու համար:</p>
<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
</div>
</div>
</div>
</section>


<div id="search-box">
<div class="container search-box" >
<form action="/vacancies/?category=category" id="search-box_search_form_3" style="margin-left:33%;" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<select class="dropdown_item_select search-box_search_input" style="margin:1em;" name="category">
<option value="office">Գրասենյակային աշխատանք</option>
<option value="trading">Առևտուր</option>
<option value="finance_law">Ֆինանսներ և իրավունք</option>
<option value="it_development">Համակարգիչներ և ինտերնետ</option>
<option value="media_design">Մեդիա և դիզայն</option>
<option value="restaurant_kitchen">Ռեստորաններ և խոհանոց</option>
<option value="tourism_hotel">Զբոսաշրջություն և հյուրանոցներ</option>
<option value="transport_taxt">Տրանսպորտ և տաքսի</option>
<option value="beauty_spa">Գեղեցկության և սպա սրահներ</option>
<option value="construction_archichecture">Շինարարություն և ճարտարապետություն</option>
<option value="home_economy">Տնային տնտեսություն</option>
<option value="production_craft">Արտադրության և արհեստ</option>
<option value="bussiness_marketing">Գործարարություն և մարքեթինգ</option>
<option value="education">Կրթություն</option>
<option value="medical">Բժշկություն և առողջություն</option>
<option value="other">Այլ</option>
</select>
<button type="submit" class="search-box_search_button">Որոնել</button>
</div>

</form>
</div>
</div>


<section id="Job-Category">
<div class="container">
<h3 class="text-center">Գտիր քո երազանքի աշխատանքը "Հյումն Քյափիթալ-ում"</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Գտիր երազանքի աշխատանքը կամ վերապատրաստվիր մեր կողմից առաջարկվող ամենաորակյալ դասընթացներով ստեղծիր քո կարիերան մեր օգնությամբ
</p>
<div class="vertical-space-60"> </div>
<div class="row">

<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-2.png" alt="">
</div>  
<h6>Թափուր հաստիքներ</h6>
<a href="{{route('vacancies')}}" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>Դիտել</span></a>
</div>
</div>

<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-1.png" alt="">
</div>
<h6>Դասընթացներ</h6>
<a href="{{route('trainings')}}" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>Դիտել</span></a>
</div>
</div>
<div class="col-lg-4 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="imags/icone/service-icone-4.png" alt="">
</div>
<h6>Blog</h6>
<a href="{{Route('hcblog')}}" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>Ընթերցել</span></a>
</div>
</div>







<section id="resent-job-post" class="background-color-white" style="margin-left: 15%;">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Ամենաթարմ աշխատանքները</h3>
<div class="vertical-space-30">Ամենաթարմ աշխատանքները՝դիմեք և մենք կկապվենք ձեզ հետ հնարավորինս արագ</div>
<p class="max-width">
</p>
</div>

@foreach($jobs as $job):
<div class="vertical-space-60"></div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="/uploads/jobs/{{$job->category}}/{{$job->company}}/{{$job->deadline}}/{{$job->title}}/{{$job->image}}" alt="{{$job->title}}" class="mr-3 " width="85px" height="85px">
<div class="media-body text-left  text-align-center">
<h6>{{$job->title}}</h6>
<i class="large material-icons">account_balance</i>
<span class="text">{{$job->company}}</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">{{$job->location}}</span>
<div class="float-right margin-top text-align-center">
<a href="{{route('jobs.show',$job->id)}}" class="part-full-time">{{$job->job_type}}</a>
<p class="date-time">Deadline: {{$job->deadline}}</p>
</div>
</div>
</div>
</div>

@endforeach


<div class="vertical-space-20"></div>
   <div class="job-list">
       <a href="{{route('vacancies')}}" class="Open-Jobs-Page margin-auto">Բոլոր հաստիքները<i class="large material-icons float-right">trending_flat</i></a>
      <ul class="pagination justify-content-end margin-auto">
        <li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);">{{$jobs->links()}}</a></li>
      </ul>
    </div>
</div>
<div class="vertical-space-60"></div>
</section>





<section id="Jobtend">
<div class="container">
<div class="vertical-space-85"></div>
<div class="row">
<div class="col-lg-9 col-md-6  align-self-center">
<h3 class="title">Հյումն Քյափիթալ</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Հյումն Քյափիթալը ձեր կողքին է, որպես մեկ թիմ, մեկ ընտանիք:
Մենք առաջարկում ենք ՄՌ ծառայությունների լայն ընտրանի հետևյալ ոլորտներում.

</p>
<div class="vertical-space-30"></div>
<h4>Ինչով ենք մենք զբաղվում</h4>
<div class="vertical-space-30"></div>
<ul>
<li class="list-item1 ">Հավաքագրում և աշխատակիցների համալրում
<br /> 
</li>
<li class="list-item1 ">Վերապատրաստում և ուսուցում (կոմպետենցիաների զարգացում աշխատավայրից հեռու կազմակերպվող
հավաքների ընթացքում)</li>
<li class="list-item1 ">Աշխատանքի և աշխատանքային հարաբերություններ</li>

<li class="list-item1 ">Կազմակերպության զարգացում</li>
<li class="list-item1 ">Կատարողականի գնահատում և աշխատուժի կառավարում</li>

<li class="list-item1 ">Աշխատակիցների խրախուսման և առողջապահական ծրագրերի մշակում</li>
<li class="list-item1 ">Գործընթացների քաղաքականության մշակում, տարածում և ամրագրում</li>

<li class="list-item1 ">Աշխատակիցների կարիերայի և աշխատանքային ունակությունների զարգացման ծրագրերի մշակում</li>
<li class="list-item1 ">Առաջնային կոնտակտային անձ աշխատավայրում տեղի ունեցած վնասվածքների կամ պատահարների
դեպքում</li>

</ul>
<div class="vertical-space-30">
<a href="{{route('vacancies')}}" class="Explore-Employee">Աշխատանքներ</a>
<a href="{{route('trainings')}}" class="Explore-New-Jobs">Դասընթացներ</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<img src="imags/man.png" alt="" class="man-img">
</div>
<div class="vertical-space-60"></div>
</div>
</div>
</section>



@endsection
