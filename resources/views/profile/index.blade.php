@extends('layouts.front')

@section('content')
  <div class="container">
      <hr color="#c0c0c0"
      <div class="row">
        <div class="posts col-md-8 mx-auto mt-3">
            @foreach($posts as $post)
            <div class="post">
                <div class="row">
                    <div class="text col-md-6">
                        <div class="data">
                            {{ $post->updated_at->format('Y年m月d日') }}
                        </div>
                        <div class="name">
                            {{ $post->name }}
                        </div>
                        <div class="gender">
                            {{ $post->gender }}
                        </div>
                        <div class="hobby mt-4">
                            {{ str_limit($post->hobby, 300) }}
                        </div>
                        <div class="introduction mt-5">
                           {{ str_limit($post->introduction, 1000) }}
                        </div>
                    </div>
                </div>
            </div>
            <hr color="#c0c0c0">
            @endforeach
        </div>
      </div>
      </div>
    @endsection