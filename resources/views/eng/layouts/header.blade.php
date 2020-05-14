<header class="header">

<div class="top_bar background-color-orange">
<div class="top_bar_container">
<div class="container">
<div class="row">
<div class="col">
<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
<ul class="top_bar_contact_list">
<li>
<i class="fa fa-phone coll" aria-hidden="true"></i>
<div class="contact-no"><a href="tel:091 04 21 40" style="color: #fff;">091 04 21 40</a></div>
<div class="contact-no"><a href="tel:033 33 51 88" style="color: #fff;">033 33 51 88</a></div>
</li>
<li style="color:#fff;">
<i class="fa fa-envelope coll" aria-hidden="true"></i>
info@humancapital.am
</li>

</ul>
<div class=" ml-auto ">
    @yield('switcher_hay')
<div class="hamburger menu_mm  search_button transparent search display"><i class="large material-icons font-color-white  search-icone  menu_mm ">menu</i></div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="header_container background-color-orange-light">
<div class="container">
<div class="row">
<div class="col">
<div class="header_content d-flex flex-row align-items-center justify-content-start">
<div class="logo_container">
<a href="{{Route('home')}}">
<img src="/imags/logo.png" class="logo-text" width="120px" alt="">
</a>
</div>
<nav class="main_nav_contaner ml-auto">
<ul class="main_nav">
<li><a href="{{Route('homeen')}}">Home</a></li>
<li><a href="{{Route('vacancies_en')}}">vacancies</a></li>
<li><a href="{{Route('trainingsen')}}">trainings</a></li>
<li><a href="{{Route('hcblogen')}}">Blog</a></li>
<li><a href="/en/about">About us</a></li>
<li><a href="{{Route('contacten')}}">Contact us</a></li>
</ul>

<div class="hamburger menu_mm menu-vertical">
<i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
<div class="menu_close_container">
<div class="menu_close">
<div></div>
<div></div>
</div>
</div>

<nav class="menu_nav">
<ul class="menu_mm">
<li><a href="{{Route('homeen')}}">Home</a></li>
<li><a href="{{Route('vacancies_en')}}">Vacancies</a></li>
<li><a href="{{Route('trainingsen')}}">Trainings</a></li>
<li><a href="{{Route('hcblogen')}}">Blog</a></li>
<li><a href="/abouten">About us</a></li>
<li><a href="{{Route('contacten')}}">Contact us</a></li>
</nav>
</div>
</header>
