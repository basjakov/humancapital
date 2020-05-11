@extends('dashboard.layouts.app')

@section('content')
<div class="row center" style="margin:1em;">
      <div class="col-sm-8">
<form method="post" action="{{route('jobs.update',$job->id)}}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
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
    <input type="text" class="form-control" value="{{$job->title}}" name="title"> 
  </div> 
  <div class="col-md-6">
                          <div class="form-group">
                              <input type="file" name="image" class="form-control" >
                          </div>
                      </div>
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->emp_term}}" name="emp_term"> 
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
    <input type="text" class="form-control" value="{{$job->company}}" name="company"> 
  </div> 
  <div class="form-group">
    <input type="number" class="form-control" value="{{$job->salery}}" name="salery"> 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->job_type}}" name="job_type" > 
  </div> 
  <div class="form-group">
    @include('dashboard.layouts.region')
  </div>  
  <div class="form-group">
  <label class="label label-default">Աշխատանքի նկարագրություն՝  *</label>
    <textarea class="description" name="description" text="{{$job->description}}"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$job->description}}</textarea>
  </div>
  <div class="form-group">
  <label class="label label-default">Աշխատանքային պարտականություններ`  *</label>
    <textarea class="Job_responsibilities" name="Job_responsibilities"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$job->Job_responsibilities}}</textarea>
  </div>
  <div class="form-group">
  <label class="label label-default">Անհրաժեշտ հմտություններ</label>
          <textarea class="qualifications" name="qualifications" 
             style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$job->qualifications}}</textarea>                          
  </div>  
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->level}}" name="level" > 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->skills}}" name="skills" > 
  </div> 
  <div class="form-group">
  <label class="label label-default">վերջնաժամկետ*</label>
    <input type="date" class="form-control"  name="deadline" value="{{$job->deadline}}"> 
  </div> 
  <label class="label label-default">SEO</label>
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->meta_description}}" name="meta_description" > 
  </div> 
  <div class="form-group">
    <input type="text" class="form-control" value="{{$job->meta_keyword}}" name="meta_keyword" > 
  </div> 
  <input type="hidden"  name="distributor" value="{{Auth::user()->email}}"> 

  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block bg-gradient-info " value="Թարմացնել"> 
  </div> 
</form>    
</div>
</div>                             
@endsection
