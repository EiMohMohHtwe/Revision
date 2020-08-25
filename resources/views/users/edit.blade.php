<!DOCTYPE html>
<html>
<form class="" action="{{route('profile.update',['user' => $user->id]) }}" method="POST">
@csrf
@method('PATCH')
<caption>Edit Profile</caption>
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="name" value="{{$user->name}}"/></td>
        </tr>
        <tr>
            <th>Avatar</th>
            <td><input type="text" name="avatar" id="avatar" value="{{$user->avatar}}"/></td>
        </tr>
        <tr>
            <th>Sex</th>
            <td><input type="text" name="sex" id="sex" value="{{$user->sex}}" /></td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td><input type="text" name="birthday" id="birthday" value="{{$user->birthday}}"/></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="text" name="age" id="age" value="{{$user->age}}"/></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address" value="{{$user->address}}"/></td>
        </tr>
        <tr>
            <th>Telephone</th>
            <td><input type="text" name="telephone" id="telephone" value="{{$user->telephone}}"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="password" id="password" value="{{$user->password}}"/></td>
        </tr>
        <tr>
            <td>
                <button type="update">Update</button>
            </td>
        </tr>
    </table>
</form> 
</html>