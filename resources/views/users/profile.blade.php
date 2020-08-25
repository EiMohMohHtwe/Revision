<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <form action="/profile" method="post">
                @csrf
                @foreach($user as $row)
                    <img src="{{$row['avatar']}}" alt="" width="150" height="150"><br/>
                @endforeach
            </form>
        </div>
    </div>
</body>
</html>