<!DOCTYPE html>
<html lang="en">

<head>
    <title>show</title>
</head>

<body>
    <div>
        <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "ecstudy";
     
         #create/check connecction 
         $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error){
             die("Connection failed: " . $conn->connect_error);
         }

        $sql = "SELECT * FROM USERS";

        $result = $conn->query($sql);
        echo "<table>
        <tr>
         <th> ID </th>
          <th >Name</th>
          <th  >Surname</th>
          <th >Email</th>
          <th >Comment</th>
          <th >Gender</th>
          <th >Age</th>
          <th >Degree</th>

        </tr>
        
        ";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo "<tr ><td >" . $row['id'] . "&nbsp</td>" ;
                echo "<td >" . $row['fname'] . "&nbsp</td> <td> " . $row['lname'];
                echo "</td> <td>" . $row['email'] . "</td><td >"  . $row['comment'] . "</td>" ;
                echo "<td >" . $row['GENDER'] . "</td><td >" . $row['age'] . "</td><td >"  . $row['degree'] . "</td>";

                echo "<td > <form method='POST' action='delete.php'>
                                    <input type='hidden' id='id' name='id' value=" . $row["id"] . " />
                                    <input type='hidden' name='action' value='remove' />
                                    <button type='submit' >Remove</button>
                                </form> </td> </tr>";
            }
        } else {
            echo "<td class='tthd'>Opps there are no customers contacting you</td>";
        }
        $conn->close();

        echo "</table> ";
        ?>
        <div>


</body>

</html>