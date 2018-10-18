<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Create Quiz</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="desc">Description:</label>
                    <textarea col="30" name="" id="" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="card mt-3" id="question">
            <div class="card-body">
                <div class="form-group">
                    <label for="type">Question Type:</label>
                    <select class="form-control" name="type" id="type">
                        <option value="identification">Identification</option>
                        <option value="mult_choice">Multiple Choice</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Question:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group" id="mult_choice_type" style="display:none;">
                    <div class="row">
                        <div class="col-md-1">
                            <label for="choice_1">A:</label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" name="choice_1" id="choice_1" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label for="choice_2">B:</label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" name="choice_2" id="choice_2" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label for="choice_3">C:</label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" name="choice_3" id="choice_3" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label for="choice_4">D:</label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" name="choice_4" id="choice_4" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answer">Answer:</label>
                    <textarea col="30" name="answer" id="answer" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-success" id="addQuestion">Add Question</button>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script>
    $('#type').change(function(e){
        console.log(e.target.value);
        e.stopPropagation();
        if(e.target.value == 'mult_choice')
        {
            $('#mult_choice_type').css("display", "block");
        }
        else{
            $('#mult_choice_type').css("display", "none");
        }
    });

    $('#addQuestion').click(function(){
        $('#question').append($('#question').html());
    });
    </script>
</body>