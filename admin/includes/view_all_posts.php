<?php
  if(isset($_POST['checkBoxArray'])){
    foreach($_POST['checkBoxArray'] as $postValueId){
      $bulk_options =$_POST['bulk_options'];
      switch($bulk_options){
        case 'published':
          $query = "Update posts set post_status ='{$bulk_options}' where post_id ={$postValueId}";
          $update_publish_status=mysqli_query($connection,$query);
          confirmQuery($update_publish_status);
          break;
        case 'draft':
            $query = "Update posts set post_status ='{$bulk_options}' where post_id ={$postValueId}";
            $update_draft_status=mysqli_query($connection,$query);
            break;
        case 'delete':
              $query = "delete from posts where post_id ={$postValueId}";
              $update_delite_status=mysqli_query($connection,$query);
              break;
      }
    }
  }
 ?>
<form class="" action="" method="post">

<table class="table table-bordered table-hover">


  <div id="bulkOptionContainer" class="col-xs-4">
    <select class="form-control" name="bulk_options">
      <option value="">Select Options</option>
      <option value="published">Publish</option>
      <option value="draft">Draft</option>
      <option value="delete">Delete</option>
    </select>
  </div>
  <div class="col-xs-4">
    <input type="submit" name="submit" class="btn btn-success" value="Apply">
    <a href="add_post.php" class="btn btn-primary">Add New</a>
  </div>
  <thead>
    <tr>
      <th><input id="selectAllBoxes" type="checkbox"></th>
      <th>Id</th>
      <th>Author</th>
      <th>Title</th>
      <th>Content</th>
      <th>Category</th>
      <th>Status</th>
      <!-- <th>Image</th> -->
      <!-- <th>Tags</th> -->
      <th>Comments</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
      <?php

      $query  = "SELECT * from posts ";
      $select_posts = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_posts)){
      $post_id = $row['post_id'];
      $post_author = $row['post_author'];
      $post_title = $row['post_title'];
      $post_category_id = $row['post_category_id'];
      $post_status = $row['post_status'];
      $post_image = $row['post_image'];
      $post_tags = $row['post_tags'];
      $post_content = substr($row['post_content'], 0, 240) . "...";
      $post_comment_count = $row['post_comment_count'];
      $post_date= $row['post_date'];

      echo "<tr>";
      ?>
        <td><input class='checkArray' type='checkbox' name='checkBoxArray[]' value='<?php echo $post_id; ?>'></td>
      <?php

      echo "<td>$post_id</td>";
      echo "<td>$post_author</td>";
      echo "<td>$post_title</td>";
        echo "<td>$post_content</td>";
      $query  = "SELECT * from category where cat_id = {$post_category_id}";
      $select_categories_id = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_categories_id)){
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];


      echo "<td>{$cat_title}</td>";
}

      echo "<td>$post_status</td>";
      // echo "<td><img class='img-responsive' src ='../images/$post_image' alt='image'></td>";
      // echo "<td>$post_tags</td>";
      echo "<td>$post_comment_count</td>";

      echo "<td>$post_date</td>";
      echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
      echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
      echo "</tr>";
    }
       ?>


  </tbody>
</table>
</form>

<?php
if(isset($_GET['delete'])){
  $the_post_id = $_GET['delete'];

  $query = "delete from posts where post_id = {$the_post_id}";
  $delete_query= mysqli_query($connection,$query);
}





 ?>
