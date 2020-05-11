@extends('dashboard.layouts.app')

@section('content')

<div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Jobs</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Company</th>
                        <th>level</th>
                        <th>Deadline</th>
                        <th>Salery</th>
                        <td></td>         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                      <tr>
                        <td><a href="{{route('jobs.show',$job->id)}}"  style="font-size:20px;">Show {{$job->id}}</a></td>
                        <td>{{$job->title}}</td>
                        <td>{{$job->location}}</td>
                        <td>{{$job->category}}</td>
                        <td>{{$job->company}}</td>
                        <td>{{$job->level}}</td>
                        <td>{{$job->deadline}}</td>
                        <td>{{$job->salery}}</td>
                        <td>
                          <a href="{{route('jobs.edit',$job->id)}}" class="fas fa-edit" style="font-size:20px;"></a>
                          <form action="{{ route('jobs.destroy', $job->id)}}" method="post">
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
 
    

    {{$jobs->links()}}
@endsection
