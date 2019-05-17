@extends('userpost')

@section('posts')

<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Your Posts</h2>
            </div>
 </div>



@foreach($posts as $post)

    


<ul>
    
    <li>
        <div class="row">
        
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}

                by 
               {{ $post->user->name }}
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Body:</strong>
                {{ $post->body }}
                
                
            </div>
        </div>
    </div>
    </li>

</ul>

@endforeach

@endsection
