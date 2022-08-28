@extends('layouts.header')

@section('title')
    BLOG | View post
@endsection

@section('contents')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
            
            <p class="mb-5">
              <img src="{{ asset($post->image) }}" alt="Image" class="img-fluid">
            </p>  
            <h1 class="mb-4">
              {{ $post->title }}
            </h1>
            <div class="post-meta d-flex mb-5">
              <div class="vcard">
                <span class="d-block"><a href="#">{{ $post->user->name }}</a> in <a href="#">{{ $post->category->title }}</a></span>
                <span class="date-read">{{ $post->created_at }} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
            
            {{ $post->content }}
      
                  <div class="pt-5">
                    <div class="section-title">
                      <h2 class="">Comments</h2>
                    </div>
                    <ul class="comment-list">
                      @foreach($post->comment as $comment)
                      <li class="comment">
                        <div class="comment-body">
                          <h3>{{ $comment->user->name }}</h3>
                          <div class="meta">{{ $comment->created_at }}</div>
                          <p>{{ $comment->content }}</p>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                    <!-- END comment-list -->
                    
                    <div class="comment-form-wrap pt-1">
                      <div class="section-title">
                        <h2 class="mb-1">Leave a comment</h2>
                      </div>
                      <form method="post" action="{{ route('post-comment', ['post' => $post->slug]) }}" enctype="multipart/form-data" file="true" class="p-5 bg-light">
                        @csrf
                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn btn-primary py-3">
                        </div>
      
                      </form>
                    </div>
                  </div>
          </div>


          <div class="col-lg-4">
          <div class="section-title">
            <h2>Trending</h2>
          </div>
          @foreach($trendings as $trending)
          <div class="trend-entry d-flex">
            <div class="trend-contents">
              <h2><a href="{{ route('view-post', ['post' =>$trending->slug ]) }}">{{ $trending->title }}</a></h2>
              <div class="post-meta">
                <span class="d-block">{{ $trending->user->name }} in {{ $trending->category->title }} - <span class="date-read">{{ $trending->created_at }}</span></span> 
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </div>
    </div>
@endsection