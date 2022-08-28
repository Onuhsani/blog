@extends('layouts.adminheader')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-10 bg-light" style="margin-top:0px; width:100%">

            <a href="{{ route('create-post') }}">
                <div class="btn btn-success mt-2">
                    <label class="fa fa-plus">Create New Post</label>
                </div>
            </a>

                <div class="col-md-12">
                    <table class="table custom-table datatable mt-2">
                        <thead class="thead-light">
                            <tr>
                                <th>User</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse($posts as $post)
                        <tbody>
                           <tr>
                                <td>{{ $post->user_id}} </td>
                                <td>{{ $post->category_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('show-post', ['post' => $post->slug]) }}"><label class="btn btn-success fa fa-pencil">View</label></a>
                                    <form method="post" action = "{{ route('delete-post', ['post' => $post->slug]) }}" entype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type = "submit" class="btn btn-danger fa fa-recycle-bin">Delete</button>
                                    </form>
                                </td>
                                @empty
                                    <td col-span="3"><h5>No post has been added yet</h5></td>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                </div>
                

          </div>
        </div>
      </section>
    </section>
@endsection