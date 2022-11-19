
@extends('backend.main');

@section('title', 'Add Post'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('posts.index')}}">All Post</a>
  </div>
  <div class="card-body">
       <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
         
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Post Title</label>
          <input type="text" name="title"  class="form-control" id="title" value="{{ old('title') }}">

        </div>
          @if ($errors->has('title'))
            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
          @endif

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Post Slug</label>
          <input type="text" name="slug" value="{{ old('slug') }}"  class="form-control" id="slug" >
        </div>    
        @if ($errors->has('slug'))
          <div class="alert alert-danger">{{ $errors->first('slug') }}</div>
        @endif

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Post Body</label>
          <textarea class="form-control" id="summernote"  name="body" id="exampleFormControlTextarea1" rows="10">{{ old('body') }}</textarea>
        </div>
        @if ($errors->has('body'))
        <div class="alert alert-danger">{{ $errors->first('body') }}</div>
      @endif

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Post excerpt</label>
          <textarea class="form-control"  name="excerpt" id="exampleFormControlTextarea1" rows="3"> {{ old('title') }}</textarea>
        </div>
        @if ($errors->has('excerpt'))
        <div class="alert alert-danger">{{ $errors->first('excerpt') }}</div>
      @endif

      <div class="mb-3">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
              <option value=""  disabled selected>Select Category</option>
             @foreach ($category as $item)
                   <option value="{{ $item->id }}" {{ ( $item->id == old('category_id')) ? 'selected' : '' }} > {{ $item->title }}</option>
             @endforeach
            </select>
        </div>
        
        @if ($errors->has('category_id'))
            <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
         @endif

         {{-- <div class="mb-3">
          <input type="file" name="image">
         </div> --}}

         <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
            <img src="https://placehold.jp/150x150.png"  alt="...">
          </div>
          <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
          <div>
            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image" value="{{old('image')}}"></span>
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
  </script>
@endsection