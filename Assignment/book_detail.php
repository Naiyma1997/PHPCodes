<html>
<head>
	<title>Book Details</title>
</head>
<body>
<table style="width:100%">
    	<tr>
    		<td> ID </td>
    		<td> Name </td>
    		<td> Author </td>
    		<td> Edition </td>
    		<td> BookImage </td>
    	</tr>
    	<tr>
    		<?php
    		   require_once 'model/dbconnect.php';
               $books = $_GET["book"];
               $books = getResult("SELECT * FROM books WHERE name = '$books'");
               foreach ($books as $i) 
               echo "
                  <td>".$i["id"]."</td>
                  <td>".$i["name"]."</td>
                  <td>".$i["author"]."</td>
                  <td>".$i["edition"]."</td>
                  <td> <img src='".$i["image"]."' height='50' width='50'></td>
               ";
    		?>
    	</tr>
    </table>
</body>
</html>