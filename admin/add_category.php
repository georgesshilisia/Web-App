<?php include 'includes/header.php'?>

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