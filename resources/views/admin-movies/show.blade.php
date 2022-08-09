@extends('admin-layout')
  
@section('content')
<div class="bg-light m-4 p-4 rounded">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie</h2>
            </div>
        </div>
    </div>
          
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Title:</strong>
                  {{ $movie->title }}
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Movie Url:</strong>
                  {{ $movie->movie_url }}
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Thumbnail:</strong><br>
                  <img src="/images/thumbnails/{{ $movie->thumbnail }}" width="500px">
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Description:</strong>
                  {{ $movie->description }}
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Year:</strong>
                  {{ $movie->year }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Date Created:</strong>
                  {{ $movie->created_at->format('m/d/Y H:i') }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Date Updated:</strong>
                  {{ $movie->updated_at->format('m/d/Y H:i') }}
              </div>
          </div>
    </div>
    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route('edit',$movie->id) }}">Edit</a>
        <a class="btn btn-secondary" href="{{ route('index') }}"> Back</a>
    </div> 
</div>

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row card-body">
                    <img class="col-sm-4" src="/images/thumbnails/{{ $movie->thumbnail }}" width="100px" alt="sans"/>
                    <div class="col-sm-8">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                       <a href="#" class="btn btn-info">Edit</a>
                   </div>
                </div>     
            </div>
        </div>
    </div>
    </tr>

@endsection