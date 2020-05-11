@extends('layouts.app')
@section('content')

<form method="post" action="{{route('applyjobs.store')}}" enctype="multipart/form-data" style="margin-top:10em;">
<input type="hidden" name="jobid" value="{{$jobid}}">    
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

<div class="col-lg-6 col-md-6">
    <div class="form-group" >
        <input type="text" class="form-control" name="name" placeholder="name" required />
    </div>
</div>
<div class=" col-lg-6 col-md-6">
    <div class="form-group">
        <input type="text" class="form-control" name="lastname"  placeholder="lastname" required />
</div>
</div>

<div class=" col-lg-6 col-md-6">
<div class="form-group">
<input type="tel" class="form-control" name="phone"  placeholder="Phone number" required />

</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="էլ-փոստ">
</div>
<div class="form-group">
        <label class="label label-default">ձեր ռեզյումեն</label>
        <input type="file" class="form-control" name="cv">
    </div>

<button type="submit" class="btn btn-info" style="background-color: #ea5a15;border:none;">Send</button>

</form>
       
@endsection 