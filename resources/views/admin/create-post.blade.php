@extends('layouts.adminheader')

@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 bg-light" style="margin-top:0px; width:100%">

          <div class="col-lg-10 bg-none mt-5">
            @if(session()->has('success'))
            <div class="message text-center text-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <form method="post" action="{{ route('store-post') }}" enctype="multipart/form-data" files="true">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="title">Title:</label>
                    <div class="col-md-7">
                        <input type="text" name="title" id="title" placeholder="Enter post title" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="meta_title">Meta Title:</label>
                    <div class="col-md-7">
                        <input type="text" name="meta_title" id="meta_title" placeholder="Enter Meta Title" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="category">Category</label>
                    <div class="col-md-7">
                        <select class="form-control" id="category" name="category">  
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="content">Content:</label>
                    <div class="col-md-12">
                        <textarea class="form-control col-md-12" id="content" rows="20" name="content" required>Enter post content...</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="image">Photo</label>
                    <div class="col-md-6">
                        <input type="file" name="image" id="image" class="form-control" required />
                    </div>
                </div>

                <div class="col-md-3 mb-5 float-left">
                    <button type="submit" class="btn btn-success"> {{__('Create Post')}} </button>
                </div>
            </form>
          </div>
            
          </div>
        </div>
    </section>
</section>
@endsection