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
                <div class="card mx-auto" style="width: 30%;">
                    <!-- STUDENT LOGIN FORM -->
                    <div class="card-body">
                        <h1 class="lead text-center">Student Login</h1>
                        <form action="{{route('login')}}" method="post">
                            @csrf <!-- CROSS-SITE REQUEST FORGERY PROTECTION-->

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" />
                            </div>
                            @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                             @endif
                             
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <button class="btn btn-primary btn-block">Enter</button>
                            <a class="btn btn-success btn-block" href="/teacher/login">Login as Teacher</a>
                            <a href="/student/register" class="text-center">No account yet?</a>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>