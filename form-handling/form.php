<?php

$name = '';
$gender = '';
$city = '';
$educationStr = '';
$malechecked = '';
$femalechecked = '';
$education = array();
    if(isset($_POST['submit'])){
        echo '<pre>';
        // print_r($_POST);
        $name = $_POST['name'];
        $password = $_POST['password'];
        if(isset($_POST['gender']))
        {
            $gender = $_POST['gender'];
            if($gender == 'Male')
            {
                $malechecked = "checked='checked'";  // checked=checked
            }
            if($gender == 'Female')
            {
                $femalechecked = "checked='checked'";
            }
        }
        
        $city = $_POST['city'];
        if(isset($_POST['education']))
        {
            $education = $_POST['education'];
            echo '<pre>';
            print_r($education);  // gives array as output
            $educationStr = implode(", ", $education);
        }
   
        echo "Name: $name<br/>";
        echo "Password: $password<br/>";
        echo "Gender: $gender<br/>";
        echo "City: $city<br/>";
        echo "Education: $educationStr<br/>";
    }

?>
<form method="post">
    Name: <input type="textbox" name="name" value="<?php echo $name?>"><br></br>
    Password: <input type="password" name="password"><br></br>
    Gender: 
    Male: <input type="radio" name="gender" value="Male" <?php echo $malechecked?>>
    Female: <input type="radio" name="gender" value="Female" <?php echo $femalechecked?>><br></br>
    City: 
    <?php
    $cityArr = array('Delhi', 'Noida', 'Mumbai', 'Pune', 'Patna');
    sort($cityArr);
    ?>
    <select name="city">
        <option>Select City</option>
        <?php
        foreach($cityArr as $list)
        {
            if($city == $list){
                echo "<option selected>".$list."</option>";
            }else
            {
                echo "<option>".$list."</option>";
            }
        }
        ?>
    </select><br></br>
    Education:
    <?php
    $educationArr = array('B.Tech','M.Tech','BSC');
    foreach($educationArr as $list)
    {
        if(in_array($list, $education))
        {
            echo "$list <input type='checkbox' name='education[]'' value='$list' checked='checked'>";
        }else
        {
            echo "$list <input type='checkbox' name='education[]'' value='$list'>";
        }
    }
    ?>
<br></br>
    <input type="submit" name="submit">
</form>