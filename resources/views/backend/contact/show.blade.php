@extends('backend.main');



@section('content')

<div class="card card-default">

  <div class="container">

    <div class="row">

      <div class="col">
      
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">From - {{$contact->email}}</h5>
            <hr>
            <h6 class="card-subtitle mb-2 text-muted">Name - {{$contact->name }}</h6>
            <hr>
            <h2 class="card-text">Mail Description - </h2>
            <br>
            <br>
            <div>
              <p> {{$contact->message}}</p>
            </div>
            <br>
            <br>

            <a href="{{route('contact.delete', $contact->id)}}" class="btn btn-danger" onclick="alert('Confirm Delete')" >Delete</a> 
           
          </div>
        </div>
      
      </div>
    
    </div>
  </div>


</div>
@endsection