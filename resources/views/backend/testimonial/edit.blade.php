
@extends('backend.main');

@section('title', 'Add Post'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('testimonial.index')}}">Edit Review</a>
  </div>
  <div class="card-body">
       <form action="{{ route('testimonial.update', $review->id)}}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
         
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Client name</label>
          <input type="text" name="name"  class="form-control" id="name" value="{{ $review->name }}">

        </div>
          @if ($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Client Tag line</label>
          <input type="text" name="tagline" value="{{ $review->tagline }}"  class="form-control" id="tagline" >
        </div>    
        @if ($errors->has('slug'))
          <div class="alert alert-danger">{{ $errors->first('tagline') }}</div>
        @endif

 
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
            <img src="https://placehold.jp/150x150.png"  alt="...">
          </div>
          <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
          <div>
            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select client photo</span><span class="fileinput-exists">Change</span><input type="file" name="image" value="{{old('image')}}"></span>
            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>

      </br>
      <hr>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Client review</label>
          <textarea class="form-control" id="summernote"  name="review" id="exampleFormControlTextarea1" rows="10">{{ $review->review }}</textarea>
        </div>
        @if ($errors->has('review'))
        <div class="alert alert-danger">{{ $errors->first('review') }}</div>
      @endif


        <div class="mb-3">
          <button class="btn btn-info" type="submit"> Update review</button>
        </div>
       
       </form>
     
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">

     $('#title').on('blur', function(){
      var theTitle = this.value.toLowerCase().trim(),
          slugInput = $('#slug'),
          theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');
          slugInput.val(theSlug);

     });

     $("#input-tags").selectize({
        delimiter: ",",
        persist: false,
        create: function (input) {
          return {
            value: input,
            text: input,
          };
        },
      });
  </script>
@endsection