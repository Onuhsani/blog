<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>
    @yield('title')
  </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
  <link href="{{ asset('images/favicon.png') }}" rel="icon">
  <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">

</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
        <a href="{{ route('dashboard') }}" class="logo"><b>My<span>Blog</span></b></a>
      <div class="nav notify-row" id="top_menu">
        
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li style="margin-top:15px">
            <a href="route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span>Logout</span>
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                    @csrf
                </form>
        </li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="sub-menu">
            <a class="" href="{{ route('admin.index') }}">
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="" href="{{ route('post-index') }}">
              <span>Posts</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('category-index') }}">
              <span>Categories</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <span>Users</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('admin.create') }}">
              <span>Add Admin</span>
              </a>
          </li>
          <li class="sub-menu">

            <a href="route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span>Logout</span>
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
       
      </div>
    </aside>
   

    @yield('content');
    
    
  </section>
  
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  
  <script src="{{ asset('js/common-scripts.js') }}"></script>
  
</body>

</html>