<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBlog | Register</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet">
</head>
<body>
  
    <div class="container">
      <div class="row col-md-4 col-md-offset-4 mt">
          <div class="panel panel-primary mt-4">
              <div class="panel-heading text-center">
                  <h4>Login Here</h4>
              </div>
                @if(session()->has('success'))
                    <div class="message text-center text-success mt-3">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="message text-center text-danger mt-3">
                        {{ session()->get('error') }}
                    </div>
                @endif
              <div class="panel-body">
                <form method="POST" action="{{ route('password-reset') }}" enctype="multipart/form-data" file="true" >
                  @csrf
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" required/>
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation">Confirm password:</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter password" id="password_confirmation" required/>
                  </div>
                  <div class="form-group">
                    <label class="mt-5"><a href="{{ route('login') }}">Go back to login</a></label>
                    <button class="btn btn-primary form-control">
                          {{__('Set')}}
                    </button>
                    
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>



</body>
</html>