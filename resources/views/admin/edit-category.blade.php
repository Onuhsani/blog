@extends('layouts.adminheader')

@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-7 bg-light" style="margin-top:0px; width:100%">

          <div class="col-lg-10 bg-none mt-5">
            <form method="post" action="{{ route('edit-category', ['category' => $category->slug]) }}" entype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="col-md-3 text-dard" for="title">Title:</label>
                    <div class="col-md-12">
                        <input type="text" name="title" id="title" value="{{ $category->title }}" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 text-dark" for="meta_title">Meta Title:</label>
                    <div class="col-md-12">
                        <input type="text" name="meta_title" id="meta_title" value="{{ $category->meta_title }}" class="form-control" required />
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