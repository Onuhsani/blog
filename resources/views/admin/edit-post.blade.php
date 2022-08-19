@extends('layouts.adminheader')

@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-10 bg-light" style="margin-top:0px; width:100%">

          <div class="col-lg-10 bg-none mt-5">
            @if(session()->has('success'))
            <div class="message text-center text-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <form method="post" action="{{ route('edit-post', ['post' => $post->slug]) }}" entype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="col-md-3 text-dard" for="title">Title:</label>
                    <div class="col-md-6">
                        <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="meta_title">Meta Title:</label>
                    <div class="col-md-6">
                        <input type="text" name="meta_title" id="meta_title" value="{{ $post->meta_title }}" class="form-control" readonly required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="content">Content:</label>
                    <div class="col-md-12">
                        <textarea rows="20" class="form-control col-md-12" value="{{ $post->content }}" id="content" name="content" required>Enter post content...</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="photo">Photo</label>
                    <div class="col-md-6">
                        <input type="file" name="photo" id="photo" class="form-control" required />
                    </div>
                </div>
                <div class="text-left ml-3 mb-5">
                <button type="submit" class="btn btn-success"> {{__('Update')}} </button>
                </div>
            </form>
          </div>
            
          </div>
        </div>
    </section>
</section>
@endsection