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
                  <h4>Reset your password</h4>
              </div>
              @if(session()->has('success'))
                    <div class="message text-center text-success mt-3">
                        {{ session()->get('success') }}
                    </div>
                @endif
              <div class="panel-body">
                <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data" files="true" >
                  @csrf
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" required/>
                  </div>
                  @error('email')
                    <span>{{ $message }}</span>
                  @enderror
                  <div class="form-group">
                    <button class="btn btn-primary form-control">
                          {{__('Reset')}}
                    </button>
                    
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>



</body>
</html>