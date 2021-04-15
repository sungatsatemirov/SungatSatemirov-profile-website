
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href= "{{ asset('firstStyle.css') }}" />
<script src="{{ asset('script.js') }}"></script>
</head>
<body onload="load()" >
<h1 onmouseover="bigger(this)" onmouseout="smaller(this)">@lang('lang.name')</h1>

<h3>@lang('lang.about')</h3>
<div class = "generalInfo">
<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>@lang('lang.name')</td>
  </tr>
  <tr>
    <th>Education:</th>
    <td>@lang('lang.education')</td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <td>87089406455</td>
  </tr>
  <tr>
    <th>Location:</th>
    <td>Silicon Valley</td>
  </tr>
  <tr>
    <th>Experience:</th>
    <td>DAR TECH , KASPI LAB , Yandex Academy , in future google or maybe facebook</td>
  </tr>
  <tr>
    <th>Profession:</th>
    <td>Android Developer , front end ezmeister</td>
  </tr>
</table>
</div>

<a href="{{ URL::route('secondPage') }}" id = "nextPage">Projects and Skills</a>
</body>
</html>
