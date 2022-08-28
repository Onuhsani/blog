@extends('layouts.adminheader')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-10 bg-light" style="margin-top:0px; width:100%">

                <div class="col-md-12">
                    <table class="table custom-table datatable mt-2">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @forelse($users as $user)
                        <tbody>
                           <tr>
                                <td>{{ $user->name}} </td>
                                <td>{{ $user->email }}</td>
                                <td> @if ($user->role == 1)
                                    {{ $admin }}    
                                @else
                                    {{ $actual_user }}
                                
                                @endif
                                </td>
                                <td>
                                    <form method="post" action = "{{ route('delete-user', ['user' => $user->id]) }}" entype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type = "submit" class="btn btn-danger fa fa-recycle-bin">Delete</button>
                                    </form>
                                </td>
                                @empty
                                    <td col-span="3"><h5>There is no user on this system yet</h5></td>
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