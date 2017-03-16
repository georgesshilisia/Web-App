<?php include 'includes/header.php'; ?>
<?php
//Create a new database object
$db = new Database;

//Create a query
$query = "SELECT posts.*, category.name FROM posts 
                 INNER JOIN category
                 ON posts.category = category.id
                 ORDER BY posts.title DESC";

//Select
$posts= $db->select($query);

//Create a Query
$query="SELECT*FROM `category`
            ORDER BY name DESC";

//Run the query
$categories= $db->select($query);
?>
    <table class="table table-striped">
        <tr>
            <th>Post ID#</th>
            <th>Post Title</th>
            <th>Category</th>
            <th>Author</th>
            <th>Date</th>

        </tr>

            <?php while($row = $posts->fetch_assoc()) :?>
        <tr>
                <td><?php echo $row['id'];?></td>
                <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['author'];?></td>
                <td><?php echo formatDate($row['date']);?></td>
        </tr>
            <?php endwhile;?>

    </table>


    <table class="table table-striped">
        <tr>
            <th>Category ID#</th>
            <th>Category Name</th>


        </tr>
        <?php while($row = $categories->fetch_assoc()) :?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><a href="edit_category.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
            </tr>
        <?php endwhile;?>
    </table>

<?php include 'includes/footer.php'; ?>