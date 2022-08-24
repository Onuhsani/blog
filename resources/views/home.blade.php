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
                <h2><a href="blog-single.html">{{ $post->title }}</a></h2>
                <p>{{ substr($post->content, 0, 200)."..." }}</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">{{ $post->user->name }}</a> in <a href="#">{{ $post->category->title }}</a> - <span class="date-read">{{ $post->created_at }}</span></span>
                </div>
                <a href="post-single.html"><img src="images/img_h_1.jpg" alt="Image" class="img-fluid" width="100%"></a>
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
              <h2><a href="blog-single.html">{{ $trending->title }}</a></h2>
              <div class="post-meta">
                <span class="d-block"><a href="#">{{ $trending->user->name }}</a> in <a href="#">{{ $trending->category->title }}</a>- <span class="date-read">{{ $trending->created_at }}</span></span> 
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- END section -->
  
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <h2>Politics</h2>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_1.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_2.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_3.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-title">
            <h2>Business</h2>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_1.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_2.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
          <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/img_v_3.jpg')"></div>
            <div class="contents">
              <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
              <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
              <div class="post-meta">
                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection