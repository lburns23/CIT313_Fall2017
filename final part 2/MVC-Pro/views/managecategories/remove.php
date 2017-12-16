<?php include('views/elements/header.php');?>

    <div class="container">
            <h1>Delete Category</h1>
            
         <strong><p>Are you sure you want to delete this category?</strong><br/><?php echo $category['name'];?></p>
 
        <div class="container">
   
            <a class="btn btn-danger" href="<?php echo BASE_URL?>managecategories/confirm_delete/<?php echo $category['categoryID'];?>">Delete Category</a>
        </div>
    </div>


<?php include('views/elements/footer.php');?>