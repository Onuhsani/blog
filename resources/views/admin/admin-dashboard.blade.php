@extends('layouts.adminheader')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 bg-light">

            <div class="row mt col-lg-12 text-center">
                  <h2>Admin Dashboard</h2>
            </div>
            <div class="row col-lg-12 mt-3 mb-5">
                <div class="col-lg-3 col-sm-12 bg-danger ml-5">
                  <div class="content mt-5 mb-5 text-center text-light">
                        <h5>{{ $userCount }}</h5> 
                        <h4>Users</h4>
                  </div>      
                
                </div>
                <div class="col-lg-3 col-sm-12 bg-danger ml-5">
                  <div class="content mt-5 mb-5 text-center text-light">
                        <h5>{{ $postCount }}</h5> 
                        <h4>Posts</h4>      
                  </div>
                </div>
                <div class="col-lg-3 col-sm-12 bg-danger ml-5">
                  <div class="content mt-5 mb-5 text-center text-light">
                        <h5>{{ $categoryCount }}</h5>       
                      <h4>Categories</h4> 
                            
                  </div>
                </div>
            </div>

          </div>
        </div>
      </section>
    </section>
@endsection