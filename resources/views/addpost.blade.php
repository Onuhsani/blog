@extends('layouts.header')

@section('title')
    BLOG | Add new post
@endsection

@section('contents')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">
                    <div class="comment-form-wrap pt-1">
                      <div class="section-title">
                        <h2 class="mb-1">Create new post</h2>
                      </div>
                      <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                          <label for="name">Title *</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Meta title *</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="website">Category *</label>
                          <input type="url" class="form-control" id="website">
                        </div>
      
                        <div class="form-group">
                          <label for="message">Message *</label>
                          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post" class="btn btn-primary py-3">
                        </div>
      
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection