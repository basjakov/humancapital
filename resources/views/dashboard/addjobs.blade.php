@extends('dashboard.layouts.app')

@section('content')
<div class="row center" style="margin:1em;">
      <div class="col-sm-8">
<form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
{{csrf_field()}}
      @if($errors->any())
              <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                              @endforeach
                    </ul>
              </div>
          @endif
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Վերնագիր*" name="title"> 
  </div> 
  <div class="form-group">
   <select class="browser-default custom-select" name="language">
      <option selected>Ընտրեք լեզուն</option>
      <option value="armenian">Հայերեն</option>
      <option value="english">Անգլերեն</option>
    </select>
</div>
  <div class="col-md-6">
                          <div class="form-group">
                              <input type="file" name="image" class="form-control" >
                          </div>
                      </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Աշխատանքի պայմաններ(Մշտական)" name="emp_term"> 
  </div> 
  <div class="form-group">
    <select class="form-control" name="category">
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
        
    </select>*
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" placeholder="կազմակերպություն" name="company"> 
  </div> 
  <div class="form-group">
    <input type="number" class="form-control" placeholder="աշխատավարձ" name="salery"> 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Աշխատանքի տեսակը*" name="job_type" > 
  </div> 
  <div class="form-group">
    @include('dashboard.layouts.region')
  </div>  
  <div class="form-group">
  <label class="label label-default">Աշխատանքի նկարագրություն՝  *</label>
    <textarea class="description" name="description"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
  </div>
  <div class="form-group">
  <label class="label label-default">Աշխատանքային պարտականություններ`  *</label>
    <textarea class="Job_responsibilities" name="Job_responsibilities"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
  </div>
  <div class="form-group">
  <label class="label label-default">Անհրաժեշտ հմտություններ</label>
          <textarea class="qualifications" name="qualifications" placeholder=""
             style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>                          
  </div>  
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Պահանջվող թեկնածուի մակարդակը:" name="level" > 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Մասնագիտական հմտություններ(skills)" name="skills" > 
  </div> 
  <div class="form-group">
  <label class="label label-default">վերջնաժամկետ*</label>
    <input type="date" class="form-control"  name="deadline" > 
  </div> 
  <label class="label label-default">SEO</label>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="meta_description" name="meta_description" > 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" placeholder="meta_keyword" name="meta_keyword" > 
  </div> 
  <input type="hidden"  name="distributor" value="{{Auth::user()->email}}"> 

  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block bg-gradient-info " value="Ավելացնել"> 
  </div> 
</form>    
</div>
</div>                             
@endsection
