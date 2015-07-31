<?php

include('/sources/head.phtml');

?>
<br><br><br><title>Search</title>
<?php
	if(isset($_POST['search'])){
	if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
		$search=$_POST['search']; 
		
		//-query  the database table 
		$sql="SELECT  user_id, username, email FROM users WHERE username LIKE '%" . $search .  "%' OR email LIKE '%" . $search ."%'"; 
		//-run  the query against the mysql query function 
		$result=mysql_query($sql);
		//-create  while loop and loop through result set 
		while($row=mysql_fetch_array($result)){ 
			$username=$row['username']; 
			$email=$row['email']; 
			$user_id=$row['user_id']; 
		echo "<ul>\n"; 
		echo "<li>" . "<a  href=\"public.php?user=$user_id\">"   .$username . " " . $email .  "</a></li>\n"; 
		echo "</ul>"; 
		} 
	} 
	else{ 
		echo  "<p>Please enter a search query</p>"; 
	} 
	
	}
	

include('/sources/footer.phtml');
?> 