@extends('layouts.header')

@section('title')
    BLOG | Home
@endsection

@section('contents')
<div class="site-section py-0">
      <div class="site-section">
        <div class="container">
          <div class="half-post-entry d-block d-lg-flex bg-light">
            <div class="img-bg" style="background-image: url('images/big_img_1.jpg')"></div>
            <div class="contents">
              <span class="caption">Editor's Note</span>
              <h2>News Needs to Meet Its Audiences Where They Are</h2>
              <p class="mb-3">Sharing of news and edit is the basis of life. it keeps people update and informed about happenings with their present environment. Join our blog today and air your view and opinions about highly sensitive updates.</p>
              
              <div class="post-meta">
                <span class="d-block"><a href="#">Onuh Sani</a> in <a href="#">Tech</a></span>
                <span class="date-read">August 23 <span class="mx-1">&bullet;</span> <span class="icon-star2"></span></span>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>


  <div class="nsite-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>General</h2>
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-12">
            @foreach($posts as $post)
              <div class="post-entry-1">
                <h2><a href="{{ route('view-post', ['post' =>$post->slug]) }}">{{ $post->title }}</a></h2>
                <p>{{ substr($post->content, 0, 200)."..." }}</p>
                <div class="post-meta">
                  <span class="d-block">{{ $post->user->name }} in <a href="#">{{ $post->category->title }}</a> - <span class="date-read">{{ $post->created_at }}</span></span>
                </div>
                <a href="{{ route('view-post', ['post' =>$post->slug ]) }}"><img src="{{ asset($post->image) }}" alt="Image" class="ijmg-fluid" width="100%" height="400px"></a>
              </div>
              @endforeach
            </div>
            {{ $posts->links() }}
          </div>
        </div>
        <div class="col-lg-4">
          <div class="section-title">
            <h2>Trending</h2>
          </div>
          @foreach($trendings as $trending)
          <div class="trend-entry d-flex">
            <div class="trend-contents">
              <h2><a href="{{ route('view-post', ['post' => $trending->slug ]) }}">{{ $trending->title }}</a></h2>
              <div class="post-meta">
                <span class="d-block">{{ $trending->user->name }} in {{ $trending->category->title }} - <span class="date-read">{{ $trending->created_at }}</span></span> 
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  <!-- END section -->
@endsection