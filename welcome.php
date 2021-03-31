


<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: login.php");
}


?>



<?php include('header.php');  ?>





<div class="container mt-4">
<hr>
<?php

// Upload and Rename File

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	

	if (in_array($file_ext,$allowed_file_types) || ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $_SESSION['username'] . $file_ext;
		if (file_exists("upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}

?>
</br>
</br>
<h1><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h1>
</br></br>

<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file" type="file" />
<input id="Submit" name="submit" type="submit" value="Submit" />
</form>
</br>
<a href="logout.php"><button class="btn btn-primary">log out</button></a>
</div>

<?php include('footer.php');  ?>
