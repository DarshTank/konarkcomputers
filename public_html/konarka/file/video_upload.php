<?php

include("../connection.php");

$upload_dir = $_SERVER['DOCUMENT_ROOT'] .  dirname($_SERVER['PHP_SELF']);
$upload_url = '/';

	$temp_name = $_FILES['uploadedfile']['tmp_name'];
	$file_name = $_FILES['uploadedfile']['name'];
	

	$count=0;
		//Insert
		if(isset($_POST['submit']))
		{
			$CN=$_POST['Name'];
			//$DE=$_POST['uploadedfile'];
			
			/*$file_name=$_FILES['uploadedfile']['name'];
			$dest="upload/$file_name";
			$src=$_FILES['image']['tmp_name'];
			move_uploaded_file("$src","$dest");
			$image=$dest;*/
		
				if($_POST['Name']=="")
				{
					$Cmsg="*";
					$count++;
				}
				
		}	
		if(isset($_POST['submit']) && $count==0)
		{
			$que="INSERT INTO tbl_file values ('','$CN','$file_name')";
			$result=mysql_query($que);
			$message="Successfully Added Image In Gallery";
			$CN="";
		}
	
	$CN=$_POST['Name'];
//	$DE=$_POST['uploadedfile'];
		
	$file_path = $upload_dir.$upload_url.$file_name;
	
	
	if(move_uploaded_file($temp_name, $file_path))
	{
		echo "File uploaded Success !";
			
	}

?>