@extends('dashboard.layouts.app')

@section('content')
<div class="row center" style="margin:1em;">
      <div class="col-sm-8">
<form method="post" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
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
    <input type="text" class="form-control" placeholder="Վերնագիր*" name="title"> 
  </div> 
 

  <div class="form-group">
  <label class="label label-default"> *</label>
    <input type="text" class="form-control" value="{{Auth::user()->name}}" name="author"> 
  </div> 
  <div class="col-md-6">
                          <div class="form-group">
                              <input type="file" name="image" class="form-control" >
                          </div>
   </div>

  
  <div class="form-group">
  <label class="label label-default"> *</label>
    <textarea class="description" name="text"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
  </div>
 
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block bg-gradient-info" value="Ավելացնել"> 
  </div> 
</form>    
</div>
</div>                             
@endsection
