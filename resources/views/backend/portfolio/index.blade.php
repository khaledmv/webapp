@extends('backend.main');



@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom flex justify-center ">
    <h2>Portfolio</h2>
    
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
        @foreach ($portfolios as $portfolio)
        <tr>
          <td scope="row">{{$portfolio->id}}</td>
          <td>{{$portfolio->title}}</td>
          
          <td> 
            <a href={{ route('portfolio.edit', $portfolio->id)}} class="btn btn-info">Edit</a> 
            
          </td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>
</div>
@endsection