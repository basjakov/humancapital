@extends('layouts.app')
@section('content')
{{$trainingid}}
<form method="post" action="{{route('trainingbook.store',$trainingid)}}" enctype="multipart/form-data" style="margin-top:10em;">
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
          <input type="hidden" name="training_id" value="{{$trainingid}}">
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
        <input type="number" class="form-control" name="age"  placeholder="age" required />
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


<button type="submit" class="btn btn-info" style="background-color: #ea5a15;border:none;">Send</button>

</form>
@endsection