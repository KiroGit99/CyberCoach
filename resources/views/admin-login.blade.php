<head>
    <!--link rel="stylesheet" href="{{asset('css/index.css')}}"-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    
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

                    <div class="card-body">
                        <h1 class="lead text-center">Admin Login</h1>
                        <form action="">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            <button class="btn btn-success btn-block">Enter</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>