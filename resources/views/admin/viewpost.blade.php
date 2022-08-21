@extends('layouts.adminheader')

@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 bg-light" style="margin-top:0px; width:100%">
            <form method="get" action="{{ route('edit-post', ['post' => $post->slug]) }}" enctype="multipart/form-data" files="true">
                @csrf
                <div class="form-group">
                    <h2 class="col-md-12 text-center mt-4">{{ $post->title }}</h2>
                </div>
                <div class="form-group">
                    <label class="col-md-5">Author: <span class="bold">{{ $post->title }}</span></label>
                    <label class="col-md-5 text-right">Category: <span class="strong">{{ $post->title }}</span></label>
                </div>
                <div class="form-group mt-2">
                    <label class="col-md-12"><img src="public/".{{ $post->image }} width="100%" height="300px" /></label>
                </div>
                <div class="form-group mt-4">
                    <label class="col-md-3 text-dark" for="content">Content:</label>
                    <div class="col-md-12">
                        <textarea class="form-control col-md-12" id="content" rows="20" name="content" readonly required>{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="col-md-3 mb-5 float-left">
                    <button type="submit" class="btn btn-success"> {{__('Edit Post')}} </button>
                </div>
            </form>
          </div>
            
          </div>
        </div>
    </section>
</section>
@endsection