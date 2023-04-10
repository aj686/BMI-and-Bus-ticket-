<?php
    $page_title = 'Kira Kira';
    include ('template/header.html');
    ?>
    <div class="bmi-container">
        <form action="bmi_handler.php"method = "post">
            <p><input type="text" placeholder="Name" name="name" size="20" maxlength="40"/></p>
            <p><input type="number" placeholder="Weight in kg" name="weight" size="20" maxlength="3" /></p>
            <p><input type="text" placeholder="Height in m" name="height" size="20" maxlength="4" /></p>
            <p><input type="number" placeholder="Age" name="age" size="20" maxlength="3" /></p>
            <p>
            <?php
                $gender=array(
                    '' => 'Select Gender',
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
    </div>
        
        <?php
    include ('template/footer.html');
?>
