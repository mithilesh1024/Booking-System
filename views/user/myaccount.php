<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/myaccount.css" />
    <title>Cars & Bike Rentals - My Account</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <br>
    <div class="tagholder">   
        <center>
            <img class="gridpic" src="./static/image/account" alt="useraccount">
        </center>
    </div>
    <br><br>
    <div class="form-container">
    <br>
            <p>
                <center>
                    <b>
                        Personal Information
                    </b>
                </center>
            </p>
            <br>
            <?php 
                include_once $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/myaccount.php';
                $list = getUser();
                $value = mysqli_fetch_array($list);
                echo '<p>First Name '.$value["fname"].'</p>
                <br>
                <p>Middle Name '.$value["mname"].'</p>
                <br>
                <p>Last Name '.$value["lname"].'</p>
                <br>
                <p>Age: '.$value["age"].'</p>
                <br>
                <p>Registered Email: '.$value["email"].'</p>
                <br>
                <p>Mobile No: '.$value["mobile_no"].'</p>
                <br>
                <p>Address: '.$value["address"].'</p>
                <br>';
            
            ?>

            <hr>

            <!-- <br>
            <p>
                <center>
                    <b>
                        Change Password
                    </b>
                </center>
            </p>
            <br>
            <form name="changepasswordform" class="changepasswordform" action="" method="post">
                <label>Enter New Password:</label>
                <input type="Password" name="newpassword">
                <br><br>
                <label>Confirm New Password:</label>
                <input type="Password" name="confirmnewpassword">
                <br><br>
                    <a href="">
                        <button class="updatepasswordbutton" onclick="confirm"> Update Password </button>
                    </a>
            </form>
            <br>
            
            <hr> -->
            <br>
                <p>
                <center>
                    <b>
                        My Questions
                    </b>
                </center>
            </p>
            <br>

            <center>
            <div>
            <table class="infotable">
            <?php 
                include_once $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/myaccount.php';
                $list = getquestion();
                if(!empty($list)){
                $array = ["Sr.No","Date of Posting","Question","Answer"];
                foreach($array as $value){
                     echo '<th>'.$value.'</th>';
                }
                $i=0;
                $n = mysqli_num_rows($list);
                while($n--){
                    $value = mysqli_fetch_array($list);
                        echo '
                        <tr>
                        <td>'.++$i.'</td>
                        <td>'.$value['dop'].'</td>
                        <td>'.$value['question'].'</td>';
                        if(!empty($value["answer"])){
                            echo '<td>'.$value['answer'].'</td>';
                        }else{
                            echo '<td>NOT ANSWERED</td>';
                        }
                    echo '</form>';
                }
                }else{
                    echo '<center><h1>No questions</h1></center>';
                }
            ?>
        </table>
    </div>
            </center>

            <center>
                <a href="http://localhost/project/views/user/askquestion.php">
                    <button class="backbutton">Ask Question</button>
                </a>
                <a href="home.php">
                    <button class="backbutton">Back</button>
                </a>
            </center>
            <br>
          </div>
        </div>
<br><br>
<div class="footer">
   <?php include_once "include/footer.php"; ?> 
</div>

</body>

</html>

