<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<!-- <h2>Vertical Navigation Bar</h2> -->
<!-- <p>In this example, we create an "active" class with a green background color and a white text. The class is added to the "Home" link.</p> -->

<ul>
  <li><a class="active" href="flatowner">Upload Flat Details</a></li>
  <li><a href="Review">Add Complaints and Suggestions</a></li>
  <li><a href="#contact">Sign Rental Agreement</a></li>
</ul>

</body>
</html>


