<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE CONCAT(`id`, `name`, `description`, `img`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "com");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):
				
				echo
				"
						<form method='post' action='' class='card c' >
	 
				
				<img  src=\"img/" . $row['img'] . "\" />
				<div class='card-body'>
					<p>
					
						<h3>" . $row['name'] . "</h3>
						<p> R " . $row['price'] . "</br>" . $row['description'] . "</p>
						<button type='submit' class='buy btn btn-success'>Buy Now</button>
							<input type='hidden' name='code' value=" . $row['code'] . " />  
					</p>
			   
			</div>
			</form>
		";
				
				
				
				 endwhile;?>

        </form>
        
    </body>
</html>
