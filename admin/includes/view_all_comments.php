<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Comment</th>
      <th>Email</th>
      <th>Status</th>
      <th>In Response to</th>
      <th>Date</th>
      <th>Approve</th>
      <th>Unapprove</th>
      <th>Delete</th>

    </tr>
  </thead>
  <tbody>


      <?php

      $query  = "SELECT * from comments ";
      $select_posts = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_posts)){
      $comment_id = $row['comment_id'];

      $comment_author = $row['comment_author'];
      $comment_content= $row['comment_content'];
      $comment_post_id = $row['comment_post_id'];
      $comment_status = $row['comment_status'];
      $comment_email = $row['comment_email'];
      $comment_date= $row['comment_date'];

      echo "<tr>";
      echo "<td>$comment_id</td>";
      echo "<td>$comment_author</td>";
      echo "<td>$comment_content</td>";
      echo "<td>$comment_email</td>";
      echo "<td>$comment_status</td>";

        $query = "select * from posts where post_id = $comment_post_id";
        $select_post_id_query = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_post_id_query)){
          $post_id = $row['post_id'];
          $post_title =$row['post_title'];

          echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
        }
      // $query  = "SELECT * from category where cat_id = {$comment_post_id}";
      // $select_categories_id = mysqli_query($connection, $query);
      // while($row = mysqli_fetch_assoc($select_categories_id)){
      // $cat_id = $row['cat_id'];
      // $cat_title = $row['cat_title'];
      //
      //
      // echo "<td>{$cat_title}</td>";



      echo "<td>$comment_date</td>";
      echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>";
      echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>";
      echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
      echo "</tr>";


}
       ?>


  </tbody>
</table>

<?php
if(isset($_GET['approve'])){
  $the_comment_id = $_GET['approve'];

  $query = "update comments set comment_status = 'approve'  where comment_id = $the_comment_id";
  $approve_comment_query= mysqli_query($connection,$query);
  header("Location: comments.php");
}

if(isset($_GET['unapprove'])){
  $the_comment_id = $_GET['unapprove'];

  $query = "update comments set comment_status = 'unapprove' where comment_id = $the_comment_id";
  $unapprove_comment_query= mysqli_query($connection,$query);
  header("Location: comments.php");
}


if(isset($_GET['delete'])){
  $the_comment_id = $_GET['delete'];

  $query = "delete from comments where comment_id = {$the_comment_id}";
  $delete_query= mysqli_query($connection,$query);
  header("Location: comments.php");
}





 ?>
