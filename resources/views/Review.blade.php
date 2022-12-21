<!DOCTYPE html>
<html lang="en">
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<!-- <h2>Responsive Form</h2> -->
<!-- <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p> -->

<div class="container">
  <form action="dataInsert" method="post" enctype="multiplepart/form-data">
    @csrf
  <div class="row">
    <div class="col-25">
      <label for="name">Name of Reviewer</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="address">Address of Reviewer</label>
    </div>
    <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Address..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="rname">Name of the person you want to review</label>
    </div>
    <div class="col-75">
      <input type="text" id="rname" name="rname" placeholder="name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="raddress">Address of the person you want to review</label>
    </div>
    <div class="col-75">
      <input type="text" id="raddress" name="raddress" placeholder="Address..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="status">Select his/her status</label>
    </div>
    <div class="col-75">
      <select id="status" name="status">
        <option value="Flat Owner">Flat Owner</option>
        <option value="Tenant">Tenant</option>
      </select>
    </div>
    <div class="row">
    <div class="col-25">
      <label for="subject">Comment</label>
    </div>
    <div class="col-75">
      <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
    
</body>
</html>