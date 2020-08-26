<!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="col-md-12">
            <form action="/profile" method="post">
                @csrf
                <h3> {{ $user->name }}'s profile</h3>
                <img src="{{ route('avatar.show', ['id' => $user->id]) }}" alt="" width="150" height="150"><br/>
                <p> {{ $user->sex }}</p>
                <p> {{ $user->birthday }}</p>
                <p> {{ $user->age }}</p>
                <p> {{ $user->address }}</p>
                <p> {{ $user->telephone }}</p>
            </form>
        </div>
    </div>
</body>
</html>