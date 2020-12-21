<?php require_once 'controller/books.php' ?>
<html>
<head>
	<title>Welcome to Library</title>
</head>
<body>
    <input type="text" id="search" name="search" onkeyup="show_suggestions(this)" size="100">
    <div id="books"> 
    <?php
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
        $books = all_books();
        foreach ($books as $i) 
        {
          echo "<tr> <td> ".$i["id"]." </td> <td> ".$i["name"]." </td> <td> ".$i["author"]." </td> 
          <td> ".$i["edition"]." </td> <td> <img src=' ".$i["image"]."' height='50' width='50'> </td> </tr>";
        }
        echo "</table>";
    ?>
    </div>
    <script>
        function show_suggestions(book_type) {
            var num1 = new XMLHttpRequest();
            num1.onreadystatechange = function() {
               if (num1.readyState == 4 && num1.status == 200) {
                  document.getElementById("books").innerHTML = num1.responseText;
               }
            }
            num1.open("GET", "controller/find.php? book="+book_type.value, true);
            num1.send();
        }
    </script>
</body>
</html>