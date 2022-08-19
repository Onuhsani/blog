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
                  <h4>Create Admin Account</h4>
              </div>
              <div class="panel-body">
                <form method="POST" action="{{ route('admin-register') }}">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" id="name" required/>
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" required/>
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" id="password_confirmation" required/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary form-control">
                          {{__('Register')}}
                    </button>
                    <div class="mt">
                      <a href="{{ route('login') }}" class="mt">Already have an account?</a>
                    </div>
                    
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>



</body>
</html>