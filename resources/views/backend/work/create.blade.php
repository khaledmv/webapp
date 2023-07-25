
@extends('backend.main');

@section('title', 'Add Portfolio'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('work.index')}}">All Work</a>
  </div>
  <div class="card-body">
   <form action="{{route('work.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
     
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Work Title</label>
      <input type="text" name="title"  class="form-control" id="name" value="{{ old('title') }}">

    </div>
      @if ($errors->has('title'))
        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
      @endif

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Portfolio excerpt</label>
      <input type="text" name="excerpt" value="{{ old('excerpt') }}"  class="form-control" id="excerpt" >
    </div>   

    @if ($errors->has('excerpt'))
      <div class="alert alert-danger">{{ $errors->first('excerpt') }}</div>
    @endif

 
    <br>



    <div class="fileinput fileinput-new" data-provides="fileinput">
      <h5> Work Image </h5>
      <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
        <img src="https://placehold.jp/150x150.png"  alt="...">
      </div>
      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
       
      </div>
      <div>
        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="workImage" value="{{old('workImage')}}"></span>
        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>

    <div class="fileinput fileinput-new" data-provides="fileinput">
      <h5> Brand Image </h5>
      <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
        <img src="https://placehold.jp/150x150.png"  alt="...">
      </div>
      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
       
      </div>
      <div>
        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="brandImage" value="{{old('brandImage')}}"></span>
        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>

  </br>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Work Technology title</label>
    <input type="text" name="techTitle" value="{{ old('techTitle') }}"  class="form-control" id="techTitle" >
  </div>   



  @if ($errors->has('techTitle'))
    <div class="alert alert-danger">{{ $errors->first('techTitle') }}</div>
  @endif
  </br>


  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Work body description</label>
    <textarea class="form-control"  name="body" id="exampleFormControlTextarea1" rows="10">{{ old('body') }}</textarea>
  </div>   



  @if ($errors->has('body'))
    <div class="alert alert-danger">{{ $errors->first('body') }}</div>
  @endif

  <br>

  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Result Image1</h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="https://placehold.jp/150x150.png"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="resultImage1" value="{{old('resultImage1')}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
  

  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Result Image2 </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="https://placehold.jp/150x150.png"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="resultImage2" value="{{old('resultImage2')}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>

  <br>
  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Font Image </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="https://placehold.jp/150x150.png"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="fontImage" value="{{old('fontImage')}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Color Image </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="https://placehold.jp/150x150.png"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="colorImage" value="{{old('colorImage')}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>


    <div class="mb-3">
      <button class="btn btn-info" type="submit"> Submit</button>
    </div>
   
   </form>
     
  </div>
</div>
@endsection

