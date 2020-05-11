@extends('dashboard.layouts.app')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<h4>Աշխատանքի դիմումի հայտ</h4>
<div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Անուն Ազգանուն</th>
                        <th>Հեռախոս</th>
                        <th>email</th>
                        <td>Cv</td>         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($sendcvs as $sendcv)
                      <tr>
                        <td><a href="{{route('jobs.show',$sendcv->jobs_id)}}"  style="font-size:20px;">Show {{$sendcv->jobs_id}}</a></td>
                     
                        <td>{{$sendcv->name}}|{{$sendcv->lastname}}</td>
                        <td>{{$sendcv->phone}}</td>
                        <td>{{$sendcv->email}}</td>                   
                        <td>
                        <a href="/uploads/cv/{{$sendcv->jobs_id}}/{{$sendcv->name}}{{$sendcv->lastname}}/{{$sendcv->cv}}">See {{$sendcv->name}} cv</a>
                        </td>
                      </tr>
                    @endforeach  
                
                    </tbody>
                  </table>
                  
        </div>
 </div>  
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 <h4>Դասընթացների հայտ</h4>
<div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Անուն Ազգանուն</th>
                        <th>Տարիք</th>
                        <th>Հեռախոս</th>
                        <th>Email</th>
                        <td>Cv</td>         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($trainings as $training)
                      <tr>
                        <td><a href="{{route('training.show',$training->training_id)}}"  style="font-size:20px;">Show {{$sendcv->jobs_id}}</a></td>
                     
                        <td>{{$training->name}}|{{$training->lastname}}</td>
                        <td>{{$training->age}}</td>
                        <td>{{$training->phone}}</td>
                        <td>{{$training->email}}</td>
                        <td>
                        </td>
                      </tr>
                    @endforeach  
                
                    </tbody>
                  </table>
                  
        </div>
 </div>  
             
</div> 
    

    {{$sendcvs ->links()}}
@endsection
