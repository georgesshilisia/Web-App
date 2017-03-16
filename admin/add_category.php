<?php include 'includes/header.php'?>

<?php
//Create a DB object
$db = new Database();

if(isset($_POST['submit'])){
    //Assign vars
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    //Simple Validation
    if($name == ''){
        //Set Error
        $error = 'Please fill out all the required field(s)';
    } else{
        $query = "INSERT INTO category
                         (name)
                         VALUES ('$name')";
        //Run the query
        $update_row = $db->update($query);
    }
}
?>

<form method="post" action="add_category.php">
    <div class="form-group">
        <label>Category Name</label>
        <input name="name" type="text" class="form-control"  placeholder="Enter Category">
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="SUBMIT"/>
        <a href="index.php" class="btn btn-default">CANCEL</a>
    </div>
    <br>
</form>

<?php include 'includes/footer.php'?>