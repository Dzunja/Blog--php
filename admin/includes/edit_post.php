<?php
if(isset($_GET['p_id'])){
  $the_post_id = $_GET['p_id'];

}
  $query  = "SELECT * from posts where post_id = $the_post_id ";
  $select_posts_by_id = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($select_posts_by_id)){
  $post_id = $row['post_id'];
  $post_author = $row['post_author'];
  $post_title = $row['post_title'];
  $post_category_id = $row['post_category_id'];
  $post_status = $row['post_status'];
  $post_image = $row['post_image'];
  $post_tags = $row['post_tags'];
  $post_comment_count = $row['post_comment_count'];
  $post_date= $row['post_date'];
  $post_content = $row['post_content'];
}

if(isset($_POST['update_post'])){
  $post_title = $_POST['title'];
  $post_status = $_POST['post_status'];
  $post_category_id = $_POST['post_category'];
 $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  $post_tags = $_POST['post_tags'];
  $post_content = $_POST['post_content'];
  move_uploaded_file($post_image_temp,"../images/$post_image");



  $query = "UPDATE posts SET ";
          $query .="post_category_id = {$post_category_id}, ";
          $query .="post_title  = '{$post_title}', ";
          $query .="post_author = '{$post_author}', ";
          $query .="post_date   = now(), ";
          $query .="post_image  = '{post_image}', ";
          $query .="post_content= '{$post_content}', ";
          $query .="post_tags   = '{$post_tags}', ";
          $query .="post_status = '{$post_status}' ";
          $query .= " WHERE post_id = {$the_post_id} ";
          echo $query;
$update_post=mysqli_query($connection,$query);
confirmQuery($update_post);

echo "Post update";
}


 ?>
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
         <label for="title">Post Title</label>
          <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="title">
      </div>

        <div class="form-group">
          <select name="post_category">
            <?php
            $query  = "SELECT * from category";
            $select_categories = mysqli_query($connection, $query);
            confirmQuery($select_categories);
            while($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

              echo "<option  selected value='{$cat_id}'>$cat_title</option>";
}
             ?>
          </select>
      </div>


       <div class="form-group">
       <label for="title">Post Author</label>
       <input value="<?php echo $post_author; ?>" type="text"  class="form-control" name="author">
      </div>

    <div class="form-group">
      <select class="post_status" name="post_status">
        <option value='<?php echo $post_status; ?>'><?php echo $post_status ;?></option>
        <?php
          if($post_status == 'published'){
            echo "<option value='draft'>Draft</option>";
          }else{
            echo "<option value='publicshed'>Publish</option>";

          }
         ?>

      </select>
    </div>


    <div class="form-group">
         <label for="post_image">Post Image</label>
         <img width= "200" height="200" src="../images/<?php echo $post_image; ?>" alt="">
         <input type="file" name="image" value="">
      </div>


      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
      </div>

      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea  class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?>
         </textarea>
      </div>



       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
      </div>


</form>
