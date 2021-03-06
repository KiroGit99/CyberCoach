<button class="btn btn-primary my-3" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-plus"></i> Upload file</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col-2">Filename</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <th scope="row"><a href="{{asset('/ViewerJS/#../../storage/lessons_'.$teacher->id.'/'.$file)}}" target="_blank">{{$file}}</a></th>
                    <td><a href="{{asset('storage/lessons_'.$teacher->id.'/'.$file)}}"><i class="fa fa-lg fa-download"></i></a></td>
                    <td><i class="fa fa-lg fa-times"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>