<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact page</title>
  <script src="javascrypt.js"></script>
</head>

<body>
  <div>
    <form action="ADDTODB.php" method="post" name="myform" onsubmit="return val()">

      <label>First Name*</label>
      <input type="text" id="fname" name="firstname" placeholder="Name" required>

      <br>

      <label>Last Name*</label>
      <input type="text" name="lastname" placeholder="Your last name.." required>

      <br>

      <label>Email*</label>
      <input type="text" name="email" placeholder="Your Email" required>

      <br>

      <label>Comment*</label>
      <textarea name="comment" placeholder="Write something.." style="height:200px" required></textarea>

      <br>

      <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <br>

      <input type="radio" name="age" value="19"> 19
      <input type="radio" name="age" value="20"> 20
      <input type="radio" name="age" value="21"> 21

      <br>

      <input type="checkbox" name="degree" value="BSCIT"><label> BSCIT</label>
      <input type="checkbox" name="degree" value="BCOM"><label> BCOM </label>

      <br>

      <input type="submit" value="Submit" id="Submit">

    </form>
  </div>

</body>

</html>