
@extends('backend.main');

@section('title', 'Edit Portfolio'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('portfolio.index')}}">All Portfolio</a>
  </div>
  <div class="card-body">
   <form action="{{route('portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
      @csrf
     
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Portfolio Title</label>
      <input type="text" name="title"  class="form-control" id="name" value="{{ $portfolio->title }}">

    </div>
      @if ($errors->has('title'))
        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
      @endif

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Portfolio para</label>
      <input type="text" name="para" value="{{ $portfolio->para}}"  class="form-control" id="para" >
    </div>   

    @if ($errors->has('para'))
      <div class="alert alert-danger">{{ $errors->first('para') }}</div>
    @endif

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Portfolio button text</label>
      <input type="text" name="buttonText" value="{{ $portfolio->buttonText }}"  class="form-control" id="buttonText" >
    </div>   

    @if ($errors->has('buttonText'))
      <div class="alert alert-danger">{{ $errors->first('buttonText') }}</div>
    @endif





    <div class="fileinput fileinput-new" data-provides="fileinput">
      <h5> First Image </h5>
      <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
        <img src="{{($portfolio->image_url)? $portfolio->image_url : 'https://placehold.jp/150x150.png'}}"  alt="...">
      </div>
      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
       
      </div>
      <div>
        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="image1" value="{{old('image1')}}"></span>
        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>


    <br>

    <div class="mb-3">
      <button class="btn btn-info" type="submit"> Submit</button>
    </div>
   
   </form>
     
  </div>
</div>
@endsection

