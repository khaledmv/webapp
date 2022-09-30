@extends('backend.main');



@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <h2>Contact Info</h2>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Address</th>
          <th scope="col">Call us</th>
          <th scope="col">Email us</th>
          <th scope="col">Open Hour</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
        <tr>
          <td scope="row">{{$contact->id}}</td>
          <td>{{$contact->address}}</td>
          <td>{{$contact->phone}}</td>
          <td>{{$contact->email}}</td>
          {{-- <td>{{$contact->open-hour }} </td> --}}
          <td>@Lucia</td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection