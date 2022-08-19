@extends('layouts.adminheader')

@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 bg-light" style="margin-top:0px; width:100%">
            <form method="post" action="{{ route('edit-post') }}" entype="multipart/form-data" files="true">
                @csrf
                <div class="form-group">
                    <h2 class="col-md-12">{{ $post->title }}</h2>
                </div>
                <div class="form-group">
                    <label class="col-md-6">Author: <span class="bold">{{ $post->user()->name }}</span></label>
                    <label class="col-md-6">Category: <span class="bold">{{ $post->category()->title }}</span></label>
                </div>
                <div class="form-group mt-2">
                    <label class="col-md-12"><img src="/public/images/{{ $post->image }}" width="100%" height="300px" /></label>
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