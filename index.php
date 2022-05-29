<?php 
    //DEVELOPED BY Jehankandy on 26 May 20
    include_once("function/functions.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Last Index</title>
  </head>
  <body>
    <div class="container">
        <div class="home-page">
            <h1>Find Next index</h1>
            <hr>
            <div class="next-index">
                <h3>Next Index Number is : <span><?php next_id(); ?></span></h3>
            </div>
            <hr><br>

            <div class="usr-form">
                <?php 
                    if(isset($_POST['add'])){
                        $result = add_user($_POST['id'], $_POST['email'], $_POST['usr_name']);
                        echo $result;
                    }
                ?>

                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <p>Enter Index Number : </p>
                    <input type="number" name="id" placeholder="Index Number" class="input" required>
                    <br><br>
                    <p>Enter Email : </p>
                    <input type="email" name="email" placeholder="Email" class="input" required>
                    <br><br>
                    <p>Enter Name : </p>
                    <input type="text" name="usr_name" placeholder="Name" class="input" required>
                    <br><br>
                    <input type="submit" value="Add User" name="add" class="add-btn">        
                </form>
            </div>
            <br><hr><br><br>
            <div class="all_usr">
            <center><h2>All Users</h2></center>
                <table class="usr-tbl">
                    <thead>
                        <tr>
                            <th>User Index Number</th>
                            <th>User Email</th>
                            <th>User Name</th>
                        </tr>
                    </thead>
                        <?php all_user(); ?>
                    <br>
                </table>
            </div>
        </div>
    </div>

    <br><br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
