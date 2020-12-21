<?php
    require_once '../model/dbconnect.php';
    $bname = $_GET["book"];
    $book = getResult("SELECT * FROM books WHERE name like '%".$bname."%'");
    if ($bname != "") {
    	foreach ($book as $i) {
          echo "<p> <a href= 'book_detail.php? book=".$i["name"]."' > <b>".$i["name"]."</b> </a> </p>";
        }
    	echo "
	    <table>
	    	<tr>
	    		<td><b> ID </b></td>
	    		<td><b> Name </b></td>
	    		<td><b> Author </b></td>
	    		<td><b> Edition </b></td>
	    		<td><b> BookImage </b></td>
	    	</tr>
	    ";
	    foreach ($book as $i) {
	      echo "<tr> <td> ".$i["id"]." </td> <td> ".$i["name"]." </td> <td> ".$i["author"]." </td> 
	      <td> ".$i["edition"]." </td> <td> <img src=' ".$i["image"]."' height='50' width='50'> </td> </tr>";
	    }
	    echo "</table>";
    }
    else {
    	echo "
	    <table>
	    	<tr>
	    		<td><b> ID </b></td>
	    		<td><b> Name </b></td>
	    		<td><b> Author </b></td>
	    		<td><b> Edition </b></td>
	    		<td><b> BookImage </b></td>
	    	</tr>
	    ";
        foreach ($book as $i) 
        {
	      echo "<tr> <td> ".$i["id"]." </td> <td> ".$i["name"]." </td> <td> ".$i["author"]." </td> 
	      <td> ".$i["edition"]." </td> <td> <img src=' ".$i["image"]."' height='50' width='50'> </td> </tr>";
	    }
	    echo "</table>";
    }    
?>