<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href= "{{ asset('secondStyle.css') }}" />
</head>
<body>
<h1>Projects and Skills</h1>
<ol type="1">
  <li>Kotlin</li>
  <li>Java</li>
  <li>MVVM</li>
  <li>Jetpack Navigation</li>
  <li>and as u can see im professional frontendmeister . If u want to have website call me maybe .</li>

</ol>
<div class="card">
  <img src="https://images-na.ssl-images-amazon.com/images/I/41yg3KWfkQL.png" alt="Avatar" style="width:10%">
  <div class="container">
    <h4><b>TicTacToe</b></h4>
    <p>Used Technologies: SafeArgs , Jetpack NAvigation , MVVM </p>
  </div>
</div>
<div class="card">
  <img src="https://miro.medium.com/max/2496/1*hCdywjP_Sg1zTyc_BbbpSg.png" alt="Avatar" style="width:10%">
  <div class="container">
    <h4><b>PacMan</b></h4>
    <p>Used technologies : OOP , JavaFX , JavaCore and something else</p>
  </div>
</div>

<a href="{{ URL::route('thirdPage') }}" id = "nextPage">Contacts</a>

</body>
</html>