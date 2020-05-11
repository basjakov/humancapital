@extends('dashboard.layouts.app')

@section('content')

<div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Անուն</th>
                        <th>Հեղինակ</th>
                        <th>Ստեղծվել է</th>
                        <td></td>         
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                      <tr>
                        <td><a href="{{route('blog.show',$blog->id)}}"  style="font-size:20px;">Show {{$blog->id}}</a></td>
                     
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->author}}</td>
                        <td>{{$blog->created_at}}</td>
                       
                        <td>
                          <a href="{{route('blog.edit',$blog->id)}}" class="fas fa-edit" style="font-size:20px;"></a>
                          <form action="{{ route('blog.destroy', $blog->id)}}" method="post">
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
 
    

    {{$blogs ->links()}}
@endsection
