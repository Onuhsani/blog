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
              @if(session()->has('error'))
                    <div class="message text-center text-danger mt-3">
                        {{ session()->get('error') }}
                    </div>
                @endif
              <div class="panel-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" required/>
                  </div>
                  <div class="block">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                  <div class="mt#">
                      <a href="{{ route('register') }}" class="mt">Already have an account?</a>
                    </div>
                  <div class="form-group">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('contact.create') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button class="btn btn-primary form-control">
                          {{__('Login')}}
                    </button>
                    
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>



</body>
</html>