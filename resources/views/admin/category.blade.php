@extends('layouts.adminheader')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-10 bg-light" style="margin-top:0px; width:100%">

            <a href="{{ route('create-category') }}">
                <div class="btn btn-success mt-2">
                    <label class="fa fa-plus">Create category</label>
                </div>
            </a>

                <div class="col-md-10">
                    <table class="table custom-table datatable mt-2">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse($categories as $category)
                        <tbody>
                           <tr>
                                <td>{{ $category->id}} </td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    <a href="{{ route('edit-category', ['category' => $category->slug]) }}"><label class="btn btn-success fa fa-pencil">Edit</label></a>
                                    <form method="post" action = "{{ route('delete-category', ['category' => $category->slug]) }}" entype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type = "submit" class="btn btn-danger fa fa-recycle-bin">Delete</button>
                                    </form>
                                </td>
                                @empty
                                    <td col-span="3"><h5>No category has been added yet</h5></td>
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