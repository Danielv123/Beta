<?php

include('/sources/head.phtml');

?>
<br><br><br><title>Search</title>
<?php
	if(isset($_POST['search'])){
	if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
		$search=$_POST['search']; 
		
		//-query  the database table 
		$sql="SELECT  user_id, username, email, about FROM users WHERE username LIKE '%" . $search .  "%' OR email LIKE '%" . $search ."%'"; 
		//-run  the query against the mysql query function 
		$result=mysql_query($sql);
		//-create  while loop and loop through result set 
		while($row=mysql_fetch_array($result)){ 
			$username=$row['username'];
			$email=$row['email'];
			$user_id=$row['user_id'];
			$about=$row['about'];
			
			if(!isset($about)){
				$about="<i>This person has not added a profile description yet.</i>";
			}
			
			echo "
				<a  class='search-result' href=\"public.php?user=$user_id\">
					<h1 class='text'>$username</h1>
					<p class='text'>$email</p>
				</a>
					<p class='about'>$about</p>
			";
		} 
	} 
	else{ 
		echo  "<p>Please enter a search query</p>"; 
	} 
	
	}
	

include('/sources/footer.phtml');
?> 