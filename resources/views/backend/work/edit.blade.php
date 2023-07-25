
@extends('backend.main');

@section('title', 'Add Portfolio'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('work.index')}}">All Work</a>
  </div>
  <div class="card-body">
   <form action="{{route('work.update', $work->id)}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
     
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Work Title</label>
      <input type="text" name="title"  class="form-control" id="name" value="{{ $work->title }}">

    </div>
      @if ($errors->has('title'))
        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
      @endif

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Portfolio excerpt</label>
      <input type="text" name="excerpt" value="{{ $work->excerpt}}"  class="form-control" id="excerpt" >
    </div>   

    @if ($errors->has('excerpt'))
      <div class="alert alert-danger">{{ $errors->first('excerpt') }}</div>
    @endif

 
    <br>



    <div class="fileinput fileinput-new" data-provides="fileinput">
      <h5> Work Image </h5>
      <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
        <img src="{{($work->work_img)? $work->work_img : 'https://placehold.jp/150x150.png'}}"  alt="...">
      </div>
      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
       
      </div>
      <div>
        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="workImage" value="{{ $work->brandImage }}"></span>
        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>

    <div class="fileinput fileinput-new" data-provides="fileinput">
      <h5> Brand Image </h5>
      <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
        <img src="{{($work->brand_img )? $work->brand_img  : 'https://placehold.jp/150x150.png'}}"  alt="...">
      </div>
      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
       
      </div>
      <div>
        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="brandImage" value="{{ $work->brandImage}}"></span>
        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>

  </br>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Work Technology title</label>
    <input type="text" name="techTitle" value="{{ $work->techTitle }}"  class="form-control" id="techTitle" >
  </div>   



  @if ($errors->has('techTitle'))
    <div class="alert alert-danger">{{ $errors->first('techTitle') }}</div>
  @endif
  </br>


  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Work body description</label>
    {{-- <input type="text" name="body" value="{{ $work->body }}"  class="form-control" id="body" > --}}
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="10">{{ $work->body }}</textarea>
  </div>   



  @if ($errors->has('body'))
    <div class="alert alert-danger">{{ $errors->first('body') }}</div>
  @endif

  <br>

  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Result Image1</h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="{{($work->result1_img)? $work->result1_img : 'https://placehold.jp/150x150.png'}}"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="resultImage1" value="{{ $work->resultImage1 }}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
  

  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Result Image2 </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="{{($work->result2_img)? $work->result2_img : 'https://placehold.jp/150x150.png'}}"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="resultImage2" value="{{$work->resultImage2}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>

  <br>
  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Font Image </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="{{($work->font_img)? $work->font_img : 'https://placehold.jp/150x150.png'}}"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="fontImage" value="{{$work->fontImage}}"></span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
  <div class="fileinput fileinput-new" data-provides="fileinput">
    <h5> Color Image </h5>
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="{{($work->color_img)? $work->color_img : 'https://placehold.jp/150x150.png'}}"  alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
     
    </div>
    <div>
      <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="colorImage" value="{{$work->colorImage }}"></span>
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

