# Fetch-Next-Index-in-table-in-MySQL-
fetch next index in MySQL table
<br><br>
all Error Headling of this code
 -- can not enter entered id in the table
 -- only can enter 

<br><br>
<b>Code : </b>
<br>function/functions.php<br>


    <?php 
        use FTP\Connection; 
        include_once("config.php");

        function add_user($id, $email, $usr_name){
            $con = Connection();
            $get_next_id = strval($_SESSION['nextId']);

            $check_sql = "SELECT * FROM user_tbl WHERE id = '$id' || email = '$email'";
            $check_sql_result = mysqli_query($con, $check_sql);

            $check_sql_nor = mysqli_num_rows($check_sql_result);

            if($check_sql_nor > 0){
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>";
            }else{
                if($id == $get_next_id){
                    $insert_user = "INSERT INTO user_tbl(id,email,usr_name)VALUES('$id','$email','$usr_name')";
                    $insert_user_result = mysqli_query($con, $insert_user);
                    header("location:index.php");
                }
                else{
                    return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Your entered id is ".$id."...! Enter ".$get_next_id." as Index                                   Number</div>&nbsp</center>";
                }

            }        
        }

        function all_user(){
            $con = Connection();

            $all_users = "SELECT * FROM user_tbl";
            $all_user_result = mysqli_query($con, $all_users);

            while($user_row = mysqli_fetch_assoc($all_user_result)){
                echo"<tr>
                        <td>".$user_row['id']."</td>
                        <td>".$user_row['email']."</td>
                        <td>".$user_row['usr_name']."</td>
                    </tr>";
            }
        }


        function next_id(){
            $con = Connection();

            $get_last_index = "SELECT id FROM user_tbl ORDER BY id DESC LIMIT 1";
            $get_last_index_result = mysqli_query($con, $get_last_index);

            $last_index = mysqli_fetch_assoc($get_last_index_result);

            $next_index = $last_index['id'] + 1;
            echo $next_index;
            $_SESSION['nextId'] = $next_index;      
        }
    ?>


****************************************************************

<br><br>
<b>Fetch Next Index....</b><br>

    function next_id(){
        $con = Connection();

        $get_last_index = "SELECT id FROM user_tbl ORDER BY id DESC LIMIT 1";
        $get_last_index_result = mysqli_query($con, $get_last_index);

        $last_index = mysqli_fetch_assoc($get_last_index_result);

        $next_index = $last_index['id'] + 1;
        echo $next_index;
        $_SESSION['nextId'] = $next_index;      
    }

According to above part of code, <br>
I fetch  the last index using following lines <br>

        $get_last_index = "SELECT id FROM user_tbl ORDER BY id DESC LIMIT 1";
        $get_last_index_result = mysqli_query($con, $get_last_index);

        $last_index = mysqli_fetch_assoc($get_last_index_result);
        
and then I want to get next index, so that <br>
I add 1 for the last index like following<br>

        $next_index = $last_index['id'] + 1;
        echo $next_index;

*****************************************

and last line is optical, 

        $_SESSION['nextId'] = $next_index;      


<b>This is Optical</b><br>


<br>because I want to check user input id is equal to last index+1 in table the next id, so then I get tha last id and <br>
check it in

<br>user_add() function<br>

    function add_user($id, $email, $usr_name){
        $con = Connection();
        $get_next_id = strval($_SESSION['nextId']);

        $check_sql = "SELECT * FROM user_tbl WHERE id = '$id' || email = '$email'";
        $check_sql_result = mysqli_query($con, $check_sql);

        $check_sql_nor = mysqli_num_rows($check_sql_result);

        if($check_sql_nor > 0){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>";
        }else{
            if($id == $get_next_id){
                $insert_user = "INSERT INTO user_tbl(id,email,usr_name)VALUES('$id','$email','$usr_name')";
                $insert_user_result = mysqli_query($con, $insert_user);
                header("location:index.php");
            }
            else{
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Your entered id is ".$id."...! Enter ".$get_next_id." as Index                                   Number</div>&nbsp</center>";
            }

        }        
    }


converting Session to String like following<br>

    $get_next_id = strval($_SESSION['nextId']);
  
then check it, 

            if($id == $get_next_id){
                $insert_user = "INSERT INTO user_tbl(id,email,usr_name)VALUES('$id','$email','$usr_name')";
                $insert_user_result = mysqli_query($con, $insert_user);
                header("location:index.php");
            }
            else{
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Your entered id is ".$id."...! Enter ".$get_next_id." as Index                                   Number</div>&nbsp</center>";
            }

in here $id is user input id<br>
and $get_next_id is the next id according to the table

*******************************************************************************


DEVELOPER : JEHANKANDY <br>
THANK YOU
