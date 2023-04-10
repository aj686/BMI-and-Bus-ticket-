
<?php
    
    $page_title = 'Kira Kira';
    include ('template/header.html');
    
        // Validate input
        if (!empty($_POST['name'] && !empty($_POST['weight']) && !empty($_POST['height']) && !empty($_POST['age']))) {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        echo "  
                <div class = 'main-container'>
                    <div class='div1'>
                        <p>Below are your details:</b></p>
                        <b> Name : </b> $name <br><br>
                        <b> Age : </b> $age <br><br>
                        <b> Weight: </b> $weight <br><br>
                        <b> Height : </b> $height <br><br>
                        <b> Gender : </b> $gender <br><br>
                        </div>
                </div>";

            $bmi = $weight / ($height*$height);
            $bmi = number_format($bmi,2);
            $lbm = 0;

            if($gender == "Male"){
                $lbm = (1.20 * $bmi) + (0.23 * $age - 16.2);
                $lbm = number_format($lbm,2);
            }
            elseif($gender == "Female"){
                $lbm = (1.20 * $bmi) + (0.23 * $age - 5.4);
                $lbm = number_format($lbm,2);
            }
            echo "
            <div class = 'main-container'>
                <div class='div2'>
                    <p><b>BMI : </b>$bmi<br></p>
                    <p><b>LBM : </b>$lbm<br></p>
                    </div>
            </div>";
        } 

        else{
            $name = NULL;
        echo '<p><h4 style="text-align: center";>Incomplete Form! Please resubmit.</h4></p>';
        }
    
        
    include ('template/footer.html');
?>
