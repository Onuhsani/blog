@extends('layouts.header')

@section('title')
    BLOG
@endsection

@section('contents')

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="section-title">
              <h2>{{ $category->title }}</h2>
            </div>
            @forelse($category->post as $cate)
            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('images/img_h_4.jpg')"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="{{ route('view-post', ['post' => $cate->slug ]) }}">{{ $cate->title }}</a></h2>
                <p class="mb-3">{{ substr($cate->content, 0, 200) }}</p>
                <div class="post-meta">
                  <span class="d-block">{{ $cate->user->name }}</span>
                  <span class="date-read">{{ $cate->create_at }}</span>
                </div>
              </div>
            </div>
            @empty
            <h3>There are no post for this category yet</h3>
            @endforelse
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