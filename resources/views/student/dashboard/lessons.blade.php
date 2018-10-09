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
                    <th scope="row"><a href="{{asset('/ViewerJS/#../../storage/lessons_'.$student->teacher.'/'.$file)}}">{{$file}}</a></th>
                    <td><a href="{{asset('storage/lessons_'.$student->teacher.'/'.$file)}}"><i class="fa fa-lg fa-download"></i></a></td>
                    <td><i class="fa fa-lg fa-times"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>