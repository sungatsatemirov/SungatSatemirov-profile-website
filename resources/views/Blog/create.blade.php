<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href= "{{ asset('thirdStyle.css') }}" />
</head>
<body>

<h1>Here we are creating post </h1>
<form method = "POST" action = "{{ route('add-post') }}">
    @csrf
    <input type="text" name = "title" placeholder="title">
    <input type="text" name = "body" placeholder="body">
    <button type = "submit">Create</button>
</form>
</body>
</html>