<html>

<?php
//$db=mysql_connect('mysql6.000webhost.com','a7392212_admin','Admin@123');
$db=mysql_connect('localhost','root','');
											
											if(!$db)
											{
												die("not connected :".mysql_error());
											}

											$select=mysql_select_db('acm');

											if(!$select)
											{
												die("Not selected :".mysql_error());
											}
											else
											{
											
											
										

    $allowedExts = array("pdf", "doc", "docx");
	$tmp = explode(".", $_FILES["file"]["name"]);
    $extension = end($tmp);
    if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts))
    {
      if ($_FILES["file"]["error"] > 0)
      {
         echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
      }
      else
      {
        echo "Success";
		 move_uploaded_file($_FILES["file"]["tmp_name"],"res_upload/" . $_FILES["file"]["name"]); 
 $nme=$_POST['nam'];
 $mail=$_POST['email'];
$img_name = "res_upload/" . $_FILES["file"]["name"];
$query="insert into resumes values(default,'$nme','$mail','$img_name')";
$result=mysql_query($query);
      }
  }
									
}
?>

</html>