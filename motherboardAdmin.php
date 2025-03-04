<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_disc = $_POST['p_disc'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'images/' . $p_image;
   

   $insert_query = mysqli_query($conn, "INSERT INTO `motherboardAdmin`(name, price, disc, image,  categories) VALUES('$p_name', '$p_price', '$p_disc', '$p_image' ,'cabinate')") or die('query failed');
   $insert_query_total = mysqli_query($conn, "INSERT INTO `totalproduct` (name, price, disc, image, categories) VALUES ('$p_name', '$p_price','$p_disc', '$p_image', 'cabinate')") or die('query failed');

   if($insert_query && $insert_query_total){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product added successfully';
   }else{
      $message[] = 'could not add the product';
   }
}


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `motherboardAdmin` WHERE id = $delete_id ") or die('query failed');
   $delete_query_total = mysqli_query($conn, "DELETE FROM `totalproduct` WHERE id = $delete_id") or die('query failed');

   if($delete_query && $delete_query_total){
      header('location:motherboardAdmin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:motherboardAdmin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_disc = $_POST['update_p_disc'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'images/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `motherboardAdmin` SET name = '$update_p_name', price = '$update_p_price', disc ='$update_p_disc',image = '$update_p_image' WHERE id = '$update_p_id'");

   $update_query_total = mysqli_query($conn, "UPDATE `totalproduct` SET name = '$update_p_name', price = '$update_p_price', disc ='$update_p_disc', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query && $update_query_total){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:motherboardAdmin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:motherboardAdmin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
   <!-- custom css file link  -->
   <link rel="stylesheet" href="stylesheet/mainadmin.css">
</head>
<body>
   
<header>
   <span ><h1 >Welcome to Admin Panel</h1></span>
   <div class="button">
   <a hre="logout.php">
    <button style=" height: 29px;
    width: 90px;
    border-radius: 50px;">logout</button></a>
    <a href="index.php"><button  style=" height: 29px;
    width: 90px;
    border-radius: 50px;">home</button></a></div>
 

</header>

<div class="sidenav">
            <a href="order.php">Manage order</a>
            <a href="desktopAdmin.php">Desktop</a>
            <a href="laptopAdmin.php">Laptop</a>
            <a href="processorAdmin.php">Processor</a>
            <a href="cabinateAdmin.php">Cabinate</a>
            <a href="gamingsetAdmin.php">Gaming Setup</a>
            <a href="motherboardAdmin.php">Motherboard</a>
            <a href="ramAdmin.php">Ram</a>
            <a href="harddiskAdmin.php">Hardisk</a>
            <a href="monitorAdmin.php">Monitor</a>
            <a href="refurbishedAdmin.php">Refurbished</a>
            <a href="keyboardAdmin.php">Keryboard & mouse</a>
            <a href="othersAdmin.php">Other Tools</a>

    
</div>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new Motherboard product</h3>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <input type="text" name="p_disc" placeholder="enter the product disc" class="box" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>description</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `motherboardAdmin`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>Rs.<?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['disc']; ?></td>
            <td>
               <a href="motherboardAdmin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="motherboardAdmin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `motherboardAdmin` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="images/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="text" class="box" required name="update_p_disc" value="<?php echo $fetch_edit['disc']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>

<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'index.php';
};
</script>

</body>
</html>