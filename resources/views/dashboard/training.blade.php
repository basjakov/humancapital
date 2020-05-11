@extends('dashboard.layouts.app')

@section('content')

<div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td>Training</td> 
                        <th>Title</th>
                        <th>Starting</th>
                        <th>End</th>
                        <th>Location</th>
                        <th>Organizer</th>
                        <td></td>         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($trainings as $training)
                      <tr>
                        <td><a href="{{route('training.show',$training->id)}}"  style="font-size:20px;">Show {{$training->id}}</a></td>
                        <td>{{$training->title}}</td>
                        <td>{{$training->starting}}</td>
                        <td>{{$training->end}}</td>
                        <td>{{$training->location}}</td>
                        <td>{{$training->organizer}}</td>
                        <td>
                          <a href="{{route('training.edit',$training->id)}}" class="fas fa-edit" style="font-size:20px;"></a>
                          <form action="{{ route('training.destroy', $training->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="fas fa-trash" type="submit"></button>
                          </form>
                    
                        </td>
                      </tr>
                    @endforeach  
                
                    </tbody>
                  </table>
                </div>
 
    

    {{$trainings->links()}}
@endsection
