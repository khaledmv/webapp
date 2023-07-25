@extends('backend.main');



@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom flex justify-center ">
    <h2>All work</h2>
    <a style="margin-left: 10px" class="btn btn-success px-2" href="{{ route('work.create')}}">Add new work</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($works as $work)
        <tr>
          <td scope="row">{{$work->id}}</td>
          <td>{{$work->title}}</td>
          
          <td> 
            <a href={{ route('work.edit', $work->id)}} class="btn btn-info">Edit</a> 
            <a href={{ route('work.destroy',$work->id )}} onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a> 
          </td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection