@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Blog 

                    <a class="btn btn-success" href="{{ route('create') }}"> New Post</a>               
                	
                    <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
         
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @yield('posts')

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection