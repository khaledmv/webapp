
@extends('backend.main');

@section('title', 'Add Post'); 

@section('content')

<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <a href="{{ route('posts.index')}}">All Post</a>
  </div>
  <div class="card-body">
       <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
         
          @csrf
         
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Categroy Title</label>
          <input type="text" name="title"  class="form-control" id="title" value="{{ old('title') }}">

        </div>
          @if ($errors->has('title'))
            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
          @endif

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Category Slug</label>
          <input type="text" name="slug" value="{{ old('slug') }}"  class="form-control" id="slug" >
        </div>  

          @if ($errors->has('slug'))
            <div class="alert alert-danger">{{ $errors->first('slug') }}</div>
          @endif

          <div class="mb-3">
            <button class="btn btn-info" type="submit"> Submit</button>
          </div>

        </div>


      
       
       </form>
     
  </div>
</div>
@endsection
