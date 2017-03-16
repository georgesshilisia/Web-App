<?php include 'includes/header.php'?>
<?php
//Define the variable id using super global variable
$id =$_GET['id'];

//Create a DB object
$db = new Database();

//Create a Query
$query="SELECT*FROM category WHERE id=".$id;

//Run the query
$category= $db->select($query)->fetch_assoc();

//Create a Query
$query="SELECT*FROM category";

//Run the query
$categories= $db->select($query);

?>
<form method="post" action="edit_category.php">
    <div class="form-group">
        <label>Category Name</label>
        <input name="name" type="text" class="form-control"  placeholder="Enter Category" value="<?php echo $category['name'];?>">
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="SUBMIT"/>
        <a href="index.php" class="btn btn-default">CANCEL</a>
        <input name="delete" type="submit" class="btn btn-danger" value="DELETE" />
    </div>
    <br>
</form>

<?php include 'includes/footer.php'?>
