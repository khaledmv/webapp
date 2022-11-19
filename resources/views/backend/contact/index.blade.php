@extends('backend.main');



@section('content')

{{-- @if (session('message'))
  <h2 class="text-green-500"> {{ session('message')}}</h2>
@endif --}}

@if (session('message'))
     <div>
      <p> <span class="badge badge-danger">{{ session('message')}} </span></p>  
    </div> 
@endif

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <h2>Contact Info</h2>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Mail</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
        <tr>
          <td scope="row">{{$contact->id}}</td>
          <td>{{$contact->name}}</td>
          <td>{{$contact->email}}</td>
          <td>{{$contact->message}}</td>
          {{-- <td>{{$contact->open-hour }} </td> --}}
          <td><a href="{{route('contact.show', $contact->id)}}">View</a></td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection