<?php include "includes/admin_header.php"; ?>
<?php include "function.php"; ?>
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
                        <div class="col-xs-6">


                      <?php      //INSERT CATEGORIES
                      insert_categories(); ?>



                          <form  action="" method="post">
                            <div class="from-group">
                              <label for="cat_title">Add Category</label><br>
                              <input type="text" class="from-control" name="cat_title"><br><br>
                            </div>
                            <div class="from-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                          </form>

                          <?php //UPDATE AND INCLUDE QUERY

                          if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";
                          } ?>

                        </div>

                        <div class="col-xs-6" >

                          <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                              </tr>
                            </thead>
                            <tbody>

                            <?php  //FIND ALL CATEGORIES QUERY
                            findAllCategories(); ?>


                            <?php     //DELETE QUERY
                             deleteCategories(); ?>

                            </tbody>
                          </table>
                        </div>


                    </div>
                </div>-
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>




        <!-- /#page-wrapper -->
<!--footer include  -->
        <?php include "includes/admin_footer.php"; ?>
