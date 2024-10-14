<?php 
    if(isset($_POST['submit']))
    {
        // $file = rand(111,999);
        $size = $_FILES['doc']['size']/1024;
        // $filename = $_FILES['doc']['tmp_name'];
        if($size < 2000){
            move_uploaded_file($_FILES['doc']['tmp_name'],'../media/'.$_FILES['doc']['name']);
            // echo "file $filename uploaded successfully ";
        }
        else{
            echo "File size is too large <br>";
        }
        
        echo '<pre>';
        print_r($_FILES);
    }
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc"><br/>
    <input type="submit" name="submit">
</form>