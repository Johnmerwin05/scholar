             <?php

             // List numbers 1 to 10000
            $pages = range(10000,100000);
            // Shuffle numbers
            shuffle($pages);
            // Get a page
            $page = array_shift($pages);

            $date = strtotime("+7 day", time());
            $finadate = date('M d, Y', $date);



             
             
             
                error_reporting(0);
                ini_set('display_errors', 0);
                
                $dbhost='localhost';
                $dbname='scholar_registration';
                $dbusername='root';
                $dbpass='';
                
                    $mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
                    
                
                    if(isset($_POST['submit']))
                    {
                        $ticket = $page;
                        $lastname = $_POST["lastname"];
                        $firstname = $_POST["firstname"];
                        $middlename = $_POST["middlename"];
                        $suffix = $_POST["suffix"];
                        $birthday = $_POST["birthday"];
                        $placebirth = $_POST["placebirth"];
                        $civil = $_POST["civil"];
                        $course = $_POST["course"];
                        $yearlvl = $_POST["yearlvl"];
                        $schoolyear = $_POST["schoolyear"];
                        $email = $_POST["email"];
                        $phone = $_POST["phone"];
                        $status_app = $_POST["status_app"];
                        $gender = $_POST["gender"];
                        $age = $_POST["age"];
                        $Elem = $_POST["Elem"];
                        $honor1 = $_POST["honor1"];
                        $graduated1 = $_POST["graduated1"];
                        $junior = $_POST["junior"];
                        $honor2 = $_POST["honor2"];
                        $graduated2 = $_POST["graduated2"];
                        $senior = $_POST["senior"];
                        $honor3 = $_POST["honor3"];
                        $graduated3 = $_POST["graduated3"];
                        $college = $_POST["college"];
                        $honor4 = $_POST["honor4"];
                        $graduated4 = $_POST["graduated4"];
                        $brgy = $_POST["brgy"];
                        $city = $_POST["city"];
                        $provice = $_POST["provice"];
                        $lastfather = $_POST["lastfather"];
                        $firstfather = $_POST["firstfather"];
                        $middlefather = $_POST["middlefather"];
                        $fincome = $_POST["fincome"];
                        $foc = $_POST["foc"];
                        $lastm = $_POST["lastm"];
                        $firstm = $_POST["firstm"];
                        $middlem = $_POST["middlem"];
                        $mincome = $_POST["mincome"];
                        $moc = $_POST["moc"];



                        
                        
                
                
                        $result = mysqli_query($mysqli,"INSERT into scholar_registration (sched,ticket, lastname, firstname, middlename, suffix, birthday, placebirth, civil, course, yearlvl, schoolyear, email, phone, status_app, gender, age, Elem, honor1, graduated1, junior, honor2, graduated2, senior, honor3, graduated3, college, honor4, graduated4, brgy, city, provice, lastfather, firstfather, middlefather, fincome, foc, lastm, firstm, middlem, mincome, moc) values ('$finadate','$ticket','$lastname','$firstname','$middlename', '$suffix', '$birthday' , '$placebirth', '$civil', '$course', '$yearlvl', '$schoolyear', '$email', '$phone', '$status_app', '$gender', '$age', '$Elem', '$honor1', '$graduated1', '$junior', '$honor2', '$graduated2', '$senior', '$honor3', '$graduated3', '$college', '$honor4', '$graduated4', '$brgy', '$city', '$provice', '$lastfather', '$firstfather', '$middlefather', '$fincome', '$foc', '$lastm', '$firstm', '$middlem', '$mincome', '$moc')");
                        
                
                        if($result)
                        {
                            
                            echo "<script type='text/javascript'>window.top.location='email.php';</script>"; exit;

                        }
                        else{
                            echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
                        }
                
                    }


?>