<style>
<?php
    include('bmi.css');
?>
</style>
<html>
    <head>
        <title>BMI & LBM Calculator</title>
    </header>
    </head>
    <body align="center">
        <form action="bmi_handler.php"method = "post">
        <p><input type="text" placeholder="Name" name="name" size="20" maxlength="40" required/></p>
        <p><input type="number" placeholder="Weight in kg" name="weight" size="20" maxlength="3" /></p>
        <p><input type="text" placeholder="Height in m" name="height" size="20" maxlength="3" /></p>
        <p><input type="number" placeholder="Age" name="age" size="20" maxlength="3" /></p>
        <p><b>Gender :</b>
        <?php
            $gender=array(
                'Male' => 'Male', 
                'Female' => 'Female');

            echo '<select name="gender">';
            foreach ($gender as $key => $value) {
            echo "<option value=\"$key\">$value</option>\n";
            }
            echo '</select>';
            ?></p>
            <br>
        <div><input type="submit" name="submit" value="Calculate"></div>
        </form>
    </body>
    <footer>
        <p>Made by: Akmal & Ajwad<br>UNIKL</p>
    </footer>
</html>
