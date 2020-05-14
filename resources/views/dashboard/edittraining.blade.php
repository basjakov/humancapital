@extends('dashboard.layouts.app')

@section('content')
<div class="row center" style="margin:1em;">
<p class="text-warning">փոփոխման ժամանակ պարտադիր նորից ընտրեք նկար(եթե չեք փոխում նույնը ընտրեք)  և պարտադիր լրացրեք տարածաշրջանը</p>
      <div class="col-sm-8">
<form method="post" action="{{route('training.update',$training->id)}}" enctype="multipart/form-data">
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
    <input type="text" class="form-control" value="{{$training->title}}" name="title" > 
  </div> 
  <div class="col-md-6">
      <div class="form-group">
                <input type="file" name="image" class="form-control" >
      </div>
  </div>

  <div class="form-group">
  <label class="label label-default">նկարագրություն՝  *</label>
    <textarea class="description" name="description"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$training->description}}</textarea>
  </div>
  <div class="form-group">
   <select class="browser-default custom-select" name="language">
      <option selected>Ընտրեք լեզուն</option>
      <option value="armenian">Հայերեն</option>
      <option value="english">Անգլերեն</option>
    </select>
</div>

  <div class="form-group">
    <label class="label label-default">Սկիզբ*</label>
    <input type="date" class="form-control"  name="starting" value="{{$training->starting}}"> 
  </div> 
  <div class="form-group">
    <label class="label label-default">Վերջ*</label>
    <input type="date" class="form-control"  name="end" value="{{$training->end}}"> 
  </div> 
  <div class="form-group">
    @include('dashboard.layouts.region')
  </div> 
  <div class="form-group">
    <label class="label label-default">Կազմակերպիչ*</label>
    <input type="text" class="form-control"  name="organizer" value="{{$training->organizer}}"> 
  </div> 
  <input type="hidden"  name="distributor" value="{{Auth::user()->email}}"> 

  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block bg-gradient-info " value="Ավելացնել"> 
  </div> 
</form>    
</div>
</div>                             
@endsection
