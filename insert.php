		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "eventswave");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Event_ID = $_REQUEST['Event_ID'];
		$Caption = $_REQUEST['Caption'];
		$Event_Time = $_REQUEST['Event_Time'];
		$Event_Date = $_REQUEST['Event_Date'];
		$Invite_Link = $_REQUEST['Invite_Link'];
		$Date_Upload = $_REQUEST['Date_Upload'];

  
		// Performing insert query execution
		// here our table name is college
		$sql = $sql = "INSERT INTO Special_Events VALUES ('$Event_ID' ,'$Caption', '$Event_Time', '$Event_Date', '$Invite_Link', '$Date_Upload')";
        
		
        if(mysqli_query($conn, $sql)){
            echo "<h3>Event has been added successfully!</h3>";
            echo("<button onclick=\"location.href='index.php'\">Back </button>");
        
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    
</body>

</html>
