<?php
include 'components/header.php';
require_once 'businessLogic/userMapper.php';
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location:dashboard.php");
}
?>
<head>
    <link rel="stylesheet" href="css/dashboard.css" type="text/css" />
    </head>
<div class="dash-container">
    <div class="inner-dash-container" >
        <div id="userlist" class="">
            <h2 class="list-title">User list:</h2>
            <table>
                <thead>
                    <tr>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Promote to Admin</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     foreach ($userList as $user) {
                        if($user['role']==0){
                            echo '<tr>';
                            echo  '<td>'.$user['userName'].'</td>';
                            echo  '<td>'.$user['userEmail'].'</td>';
                            echo  '<td><a href= "businessLogic/promoteToAdmin.php?id='.$user['userid'].'">Promote</td>';
                            echo  '<td><a href= "businessLogic/deleteUser.php?id='.$user['userid'].'">Delete</td>';
                            echo  '</tr>';
                            }
                  
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <<div id="products" style="display:none">
            <div>
            <h2 class="list-title">Product list</h2>
              <table>
                  <thead>
                    <tr>
                          <td>Name</td>
                            <td>Photo</td>
                            <td>Price</td>
                            <td>Type</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($productList as $product) {
                        echo '<tr>';
                        echo  '<td>'.$product['prodEmri'].'</td>';
                        echo  '<td><img class="list-photos" src="../photos/'.$product['prodPhoto'].'"/></td>';
                        echo  '<td>'.$product['prodCmimi'].' EUR</td>';
                        echo  '<td>'.$product['prodType'].'</td>';
                        echo  '<td><a href= "../businessLogic/productLogic/deleteProduct.php?id='.$product['prodid'].'">Delete</td>';
                        echo  '</tr>';
                      }
                    ?>
                  </tbody>
              </table>
            </div>
            <div class="form-div">
            <h2 class="list-title register-title">Register new product</h2>
              <form id="formProduct" class="formR" action="../businessLogic/productLogic/productAdmit.php" method="POST" >
                   <div class="form-control">
                     <label for="emri">Name</label>
                     <br>
                     <input
                       type="text"
                       name="emri"
                       id="emri"
                       class="input-field"
                     />
                   </div>
                   <div class="form-control">
                     <label for="image">Photo</label><br>
                     <input type="file" name="image" id="image" class="input-field" />

                   </div>
                   <div class="form-control">
                     <label for="price">Price</label><br>
                     <input
                       type="double"
                       name="cmimi"
                       id="price"
                       class="input-field"
                     />
                   </div>
                   <div class="form-control-select">
                   <label for="type">Type</label><br>
                   <input type="radio" id="protein" name="type" value="Protein" checked="checked">
                   <label for="protein">Protein</label>
                   <input type="radio" id="weightlifting" name="type" value="WeightLifting">
                   <label for="weightlifting">Weight Lifting</label>
                   <input type="radio" id="cardio" name="type" value="Cardio">
                   <label for="cardio">Cardio</label>
                    </div>
                   <br>
                   <button type="submit" name='register-prod' value="register">Register product</button>   
                  </form>
            </div>
        </div>
    </div>
</div>
<?php 
  include 'components/footer.php';
?>


