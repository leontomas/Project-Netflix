@extends('admin-layout')
  
@section('content')
<div class="bg-light m-4 p-4 rounded">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Movie</h2>
            </div>
           
        </div>
    </div>
      
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    <form action="{{ route('updateMovie',$movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" value="{{ $movie->title }}" class="form-control" placeholder="Title">
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Movie Url:</strong>
            <input type="text" name="movie_url" value="{{ $movie->movie_url }}" class="form-control" placeholder="Movie Url">
        </div>
    </div>

    <!-- Image -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Thumbnail:</strong>
            <input type="file" name="thumbnail" value="/images/thumbnails/{{ $movie->thumbnail }}" class="form-control" placeholder="Thumbnail">
            <br>
            <img src="/images/thumbnails/{{ $movie->thumbnail }}" width="500px">

        </div>
    </div>
    <br>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $movie->description }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                <input type="text" name="year" value="{{ $movie->year }}" class="form-control" placeholder="Year">
            </div>
        </div>
        <!-- Dates -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created At:</strong>
                {{ $movie->created_at->format('m/d/Y H:i') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated At:</strong>
                {{ $movie->updated_at->format('m/d/Y H:i') }}
            </div>
        </div>
        <!-- Buttons -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button> 
            <a class="btn btn-secondary" href="{{ route('index') }}"> Back</a>
        </div>
    </form>
</div>  

@endsection