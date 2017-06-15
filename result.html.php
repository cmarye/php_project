<!DOCTYPE html>
<!--Create the menu bar-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <a href="/">Home</a>
  <a href="http://www.cnn.com">News</a>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Dropdown</button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
<!--Display the results of the query-->
<h1>Here are all the employees in the database that match your selection criteria: <br></h1>
<p><?php 
	$fnames=array(); 
		foreach ($fname as $fnames) {
			echo "$fnames";
}
	$lnames=array(); 
		foreach ($lname as $lnames) {
			echo "$lnames";
}?></p>
</body>
</html>
