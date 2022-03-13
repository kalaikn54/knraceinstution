<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>contact</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
  include "include/header.php"
  ?>  
  <div class="banner3">
      <div class="mail">
  <i><u><p><a href="mailto:malairajkalai98@gmail.com">click this&Send email</a></p></u></i>
<p>Contact us-8489707512</P>
<p><span>please upload your any ID Proof:</span></p>
<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') 
    {
     
     if (isset($_FILES['upload'])) 
     {
         echo "UPLOAD SET";
         $allowed = ['image/pjpeg', 'image/jpeg', 'image/JPG','image/X-PNG', 'image/PNG', 'image/png', 'image/x-png'];
         if (in_array($_FILES['upload'] ['type'], $allowed)) {

            

        if (move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/responsive/uploads/".$_FILES['upload']['name'])) 
        {
          echo '<p><em>The file has been uploaded!</em></p>';
        }
    }else
    {
        if ($_FILES['upload']['error'] > 0) {
          echo '<p class="error">The filecould not be uploaded because:<strong>';
          switch ($_FILES['upload']['error']) {
            case 1:
            print 'The file exceeds the upload_max_filesize setting in php.ini.';
            break;
            case 2:
            print 'The file exceeds the MAX_FILE_SIZE setting in theHTML form.';
            break;
            case 3:
            print 'The file was only  partially uploaded.';
            break;
            case 4:
            print 'No file was uploaded.';
            break;
            case 6:
                print 'No temporary folder was available. ';
               break;
               case 7:
                print 'Unable to write tothe disk. ';
               break;
               case 8:
               print 'File upload stopped. ';
               break;
               default:
                print 'A system error occurred. ';
               break;
              } 
    }
}
    if (file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name']) ) 
    {
      unlink ($_FILES['upload']['tmp_name']);
      echo "Temperary memory is free";
     }

     
    }
}
    ?>
<form method="POST" action="contact.php" enctype="multipart/form-data" >
        <input type="hidden" name="MAX_FILE_SIZE" value="524288">
 
        File <input type="file" name="upload"><br>
        <input type="submit" name="submit">
    </form> 
  </div>
 <div class="end">
 <p>THANK YOU FOR CHOOSING KN RACE</P>
 </div><?php
  include "include/footer2.php"
  ?>

  </div>
  
</body>
</html>