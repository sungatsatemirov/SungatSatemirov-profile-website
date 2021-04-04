<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href= "{{ asset('usersInfoStyle.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
    @forelse ($usersInfo as $profile)
        <table>
            <tr>
                <td>{{$profile->surname}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->email}}</td>
                <td>{{$profile->profile_photo}}"</td>
            </tr>
        </table>
    @empty
        <p>Nothing at the moment.</p>
    @endforelse
</body>
</html> 