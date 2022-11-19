@extends('backend.main');



@section('content')

<div class="card card-default">

  <div class="card-header card-header-border-bottom flex justify-center ">
    <h2>All Post</h2>
    <a style="margin-left: 10px" class="btn btn-success px-2" href="{{ route('category.create')}}">Add New Category</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Post Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorys as $category)
        <tr>
          <td scope="row">{{$category->id}}</td>
          <td>{{$category->title}}</td>
          
          {{-- <td>{{$contact->open-hour }} </td> --}}
          <td> 
            <a href={{ route('category.edit', $category->id)}} class="btn btn-info">Edit</a> 
            <a href={{ route('category.delete',$category->id )}} onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a> 
          </td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection