@extends('admin-layout')

@section('content')
<!-- from here -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Movie Controller</h4> <a href="{{ route('movies.create') }}" class="btn btn-primary btn-rounded float-right veiwbutton">Add Movie</a> </div>

                </div>
            </div>
        </div>
<!-- to here -->

        <div class="row">
            <div class="col-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0">
                                    
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <thead>
                                    <tr>
                    <!-- Movie ID -->   <!-- <th>MID</th> -->
                    <!-- Thumbnail -->  <th>Thumbnail</th>
                    <!-- Title -->      <th>Title</th>
                    <!-- Movie Url -->  <th>Movie Url</th>
                    <!-- Description --><th>Description</th>
                    <!-- Language -->   <th>Language</th>
                    <!-- Year -->       <th>Year</th>
                    <!-- Created at --> <th>Created at</th>
                    <!-- Updated at --> <th>Updated at</th>
                    <!-- Action -->     <th class="text-right">Status</th>
                    <!-- Actions --> <th>Actions</th>
                                    </tr>
                                </thead>

                                    @foreach ($movies as $movie)

                                    <tbody>
                                        <tr class="<i style></i>">
                        <!-- Movie ID -->   <!-- <td>{{ ++$i }}</td> -->
                        <!-- Thumbnail -->  <td>
                                                <h2 class="table-avatar">
                                                <a href="#" class="mr-2">
                                                <img class="pill" src="/images/thumbnails/{{ $movie->thumbnail }}" width="80px"><!--width="80px"-->
                                                </h2>
                                            </td>
                        <!-- Title -->      <td>{{ $movie->title }}</td>
                        <!-- Movie Url -->  <td>{{ $movie->movie_url }}</td>
                        <!-- Description --><td style="text-overflow: clip">{{ $movie->description }}</td>
                        <!-- Language -->   <td>{{ $movie->language }}</td>
                        <!-- Year -->       <td>{{ $movie->year }}</td>
                        <!-- Created at --> <td>{{ $movie->created_at->format('m/d/Y H:i') }}</td>
                        <!-- Updated at --> <td>{{ $movie->updated_at->format('m/d/Y H:i') }}</td>
                                            
                        <!-- Status -->     <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                            </td>
                        <!-- Action -->     <td class="text-right">
                                                <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"> 
                                                        <!-- Edit -->
                                                        <a class="dropdown-item" href="{{ route('show',$movie->id) }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                                                        @csrf
                                                        <!-- Delete -->
                                                        @method('DELETE')
                                                        <a class="dropdown-item" href="{{ route('edit',$movie->id) }}" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                </div>
                                            </td>
                                        </tr>  
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- here -->

                
    

<!-- to here -->

    @endforeach

{!! $movies->links() !!}

@endsection