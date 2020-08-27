<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <h3>User List</h3>
            <form action="/userlist" method="post">
                @csrf
                <table class="table table-bordered" border="1" width="50%">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Birthday</th>
                        <th>Delete</th>
                        <th>View</th>
                    </tr>
                    @foreach($userdata as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['name']}}</td>
                            <td>{{$row['sex']}}</td>
                            <td>{{$row['age']}}</td>
                            <td>{{$row['birthday']}}</td>

                            <td>
                            <form class="form-horizontal" method="post" action="{{action('UserController@destroy',$row['id'])}}">
                            @csrf
                            @method('delete')
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <button id="delete" name="delete" class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </form>
                            </td>
                            
                            <td>
                            <form class="form-horizontal" method="post" action="{{action('UserController@show',$row['id'])}}">
                            @csrf
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <button id="view" name="view" class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </form>
                            </td>
                              
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
</body>
</html>