@extends('backend.main');



@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom flex justify-center ">
    <h2>All Testimonial</h2>
    <a style="margin-left: 10px" class="btn btn-success px-2" href="{{ route('testimonial.create')}}">Add New review</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Client name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reviews as $review)
        <tr>
          <td scope="row">{{$review->id}}</td>
          <td>{{$review->name}}</td>
          
          {{-- <td>{{$contact->open-hour }} </td> --}}
          <td> 
            <a href={{ route('testimonial.edit', $review->id)}} class="btn btn-info">Edit</a> 
            <a href={{ route('testimonial.destroy',$review->id )}} onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a> 
          </td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection