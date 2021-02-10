<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>TABLE</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1>Movie</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>id</th> 
                <th>Movie</th> 
                <th>Time</th>  
                <th>ลบข้อมูล</th> 
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
			$servername = "localhost";
			$username = "webadmin";
			$password = "1234";
			$dbname = "myDBM";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn ->connect_error) {
				die("Connection failed: ". $conn->connect_error);
}

			$sql = "SELECT id, nameMovie, timeMovie FROM MyGuests";
			$result = $conn->query($sql);

                while($row = $result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $row['id'];?></td> 
                <td><?php echo $row['nameMovie'];?></td> 
                <td><?php echo $row['timeMovie'];?></td> 
                <td><form action="Delete.php" method="post">
		<h1><input type="submit" value="ลบข้อมูล" name="submit_btn"/></h1></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
	<form action="insert_form.php" method="post">
		<h1><input type="submit" value="เข้าสู่หน้าอัพเดท" name="submit_btn"/></h1>
	</form>
</body> 
  
</html> 