@extends('dashboard.layouts.app')

@section('content')
<div class="row center" style="margin:1em;">
      <div class="col-sm-8">
<form method="post" action="{{route('training.store')}}" enctype="multipart/form-data">
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
  <div class="col-md-6">
      <div class="form-group">
                <input type="file" name="image" class="form-control" >
      </div>
  </div>

  <div class="form-group">
  <label class="label label-default">նկարագրություն՝  *</label>
    <textarea class="description" name="description"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
    <input type="date" class="form-control"  name="starting" > 
  </div> 
  <div class="form-group">
    <label class="label label-default">Վերջ*</label>
    <input type="date" class="form-control"  name="end" > 
  </div> 
  <div class="form-group">
    @include('dashboard.layouts.region')
  </div> 
  <div class="form-group">
    <label class="label label-default">Կազմակերպիչ*</label>
    <input type="text" class="form-control"  name="organizer" placeholder=""> 
  </div> 

  <label class="label label-default">Seo</label>
  <div class="form-group">
    <input type="text" class="form-control"  name="meta_description" placeholder="Meta Description"> 
  </div> 

  <div class="form-group">
    <input type="text" class="form-control"  name="meta_keyword" placeholder="Meta Keyword"> 
  </div> 

  <input type="hidden"  name="distributor" value="{{Auth::user()->email}}"> 

  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block bg-gradient-info " value="Ավելացնել"> 
  </div> 
</form>    
</div>
</div>                             
@endsection
