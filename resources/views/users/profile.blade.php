<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <form action="/edit" method="post">
                @csrf
                <h3>{{ $user->name }}'s profile</h3>
                @foreach($user as $row)
                    <img src="{{$row['avatar']}}" alt="" width="150" height="150"><br/>
                @endforeach
                <p>{{ $user->sex }}</p>
                <p>{{ $user->birthday }}</p>
                <p>{{ $user->age }}</p>
                <p>{{ $user->address }}</p>
                <p>{{ $user->telephone }}</p>
                <button type="Edit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>