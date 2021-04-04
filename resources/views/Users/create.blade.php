<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{ asset('createStyle.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
<div class="container">
<form id = "form" method="POST" action="{{ route('add-profile')}}" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="email" placeholder="email">
        <input type="file" name="profile_photo" accept="image/png,image/jpeg">
        <button type="submit">Create</button>
    </form>
    </div>
</body>
</html> 