<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <title>CyberCoach | Student</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-light">
        <a class="navbar-brand">CyberCoach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card mx-auto p-3" style="width: 70%;">
                    <h5>Sign Up</h5>
                    <form action="/student/register" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="first_name">First Name:</label>
                                <input type="text" name="first_name" class="form-control" />
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col">
                                <label for="last_name">Last Name:</label>
                                <input type="text" name="last_name" class="form-control" />
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username" class="form-control">
                            @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password" class="form-control">
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password: </label>
                            <input type="password" name="password_confirmation" id="password" class="form-control">
                            @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                             @endif
                        </div>
                            @foreach ($errors as $e)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $e }}</strong>
                                    </span>
                             @endforeach
                        <div class="form-group">
                            <label for="teacher">Teacher:</label>
                            <select name="teacher" id="teacher" class="form-control">
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->first_name.' '.$teacher->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>