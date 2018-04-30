<?php include "includes/admin_header.php"; ?>
<?php include "function.php";

if(isset($_SESSION['username'])){

    $username = $_SESSION['username'];

}

    $query = "select * from users where user_name = '{$username}'";

    $select_user_profile_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_profile_query)){

      $user_id = $row['user_id'];
      $user_name = $row['user_name'];
      $user_password= $row['user_password'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $user_email = $row['user_email'];
      $user_image = $row['user_image'];
      $user_role= $row['user_role'];
    }

if(isset($_POST['edit_user'])){
  $user_firstname = $_POST['user_firstname'];
  $user_lastname=$_POST['user_lastname'];
  $user_role = $_POST['user_role'];

  $user_name= $_POST['user_name'];
  $user_password=$_POST['user_password'];
  $user_email=$_POST['user_email'];
  $user_firstname=$_POST['user_firstname'];
  $user_lastname=$_POST['user_lastname'];
  $user_role=$_POST['user_role'];
  $query = "UPDATE users SET ";
          $query .="user_firstname = '{$user_firstname}', ";
          $query .="user_lastname  = '{$user_lastname}', ";
          $query .="user_role = '{$user_role}', ";
          $query .="user_name  = '{$user_name}', ";
          $query .="user_email= '{$user_email}', ";
          $query .="user_password = '{$user_password}' ";
          $query .= "WHERE user_name = '{$username}' ";
$update_user=mysqli_query($connection,$query);
confirmQuery($update_user);

echo "<div style='color:white'>" .$query ."</div>";
}


?>

      <div class="form-group">
        <select class="" name="user_role">
        <option value='subscriber'><?php echo $user_role; ?></option>



      <?php
echo $_SESSION['username'];
       ?>
<?php
    if($user_role == 'admin'){
      echo  "<option value='subscriber'>subscriber</option>";
    }else{
      echo "<option value='admin'>admin</option>";
    }
 ?>
        </select>

    </div>

<?php

 ?>

    <div id="wrapper">

        <!-- Navigation -->

      <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">
                          WELCOME TO ADMIN
                          <small>Author: </small>
                      </h1>
                      <form action="" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                              <select class="" name="user_role">
                              <option value='subscriber'><?php echo $user_role; ?></option>
                      <?php
                          if($user_role == 'admin'){
                            echo  "<option value='subscriber'>subscriber</option>";

                          }else{
                            echo "<option value='admin'>admin</option>";
                          }
                       ?>
                              </select>

                          </div>


                             <div class="form-group">
                             <label for="title">Firstname</label>
                             <input value="<?php echo $user_firstname; ?>" type="text" class="form-control" name="user_firstname">
                            </div>

                            <div class="form-group">
                               <label for="title">Lastname</label>
                                <input value="<?php echo $user_lastname; ?>" type="text" class="form-control" name="user_lastname">
                            </div>

                          <!-- <div class="form-group">
                               <label for="post_image">Post Image</label>
                                <input type="file"  name="image">
                            </div> -->

                            <div class="form-group">
                               <label for="post_tags">Username</label>
                                <input value="<?php echo $user_name; ?>" type="text" class="form-control" name="user_name">
                            </div>

                            <div class="form-group">
                               <label for="post_tags">Email</label>
                                <input value="<?php echo $user_email; ?>" type="email" class="form-control" name="user_email">
                            </div>


                            <div class="form-group">
                               <label for="post_tags">Password</label>
                                <input value="<?php echo $user_password; ?>" type="password" class="form-control" name="user_password">
                            </div>

                             <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="edit_user" value="Update user">
                            </div>

                      </form>

                    </div>
                </div>-
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>




        <!-- /#page-wrapper -->
<!--footer include  -->
        <?php include "includes/admin_footer.php"; ?>
