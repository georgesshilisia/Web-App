<?php include 'includes/header.php';?>
<?php
//Define the variable id using super global variable

$id =$_GET['id'];

//Create a DB object

$db = new Database();

//Create a Query
$query="SELECT*FROM posts WHERE id=".$id;

//Run the query
$post= $db->select($query)->fetch_assoc();

//Create a Query
$query="SELECT*FROM category";

//Run the query
$categories= $db->select($query);

?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $post['title'];?></h2>
        <p class="blog-post-meta"><?php echo formatDate($post['date']);?> by <a href="#"><?php echo $post['author'];?></a></p>
        <?php echo $post['body'];?>

    </div><!-- /.blog-post -->
<?php include 'includes/footer.php';?>