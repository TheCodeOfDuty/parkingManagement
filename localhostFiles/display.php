<!-- Menu bar import  -->
<?php
$path = "./Menu.php";
include "$path";
?>

<!-- delete Query -->

<?php

    if(isset($_GET['deletedid'])){
        $id=$_GET['deletedid'];

        $sql="delete from `tbl_parking` where id=$id";
        $result=mysqli_query($conn,$sql);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }
    ?>


<!-- update vehicle category -->
<div class="vehicle_cat_update">
  
    <form action="display.php" method="POST">
      <h1 class="text-center">Vehicle Details</h1>
  </form>
  <!-- table -->
        <table id="tabledata" class=" table table-striped table-hover mt-5">
            <tr class="text-black text-center bg_color">
                <th> Id </th>
                <th> Vehicle Number </th>
                <th> Rate </th>
                <th> Total Time </th>
                <th> Action </th>
              </tr>
          <?php
            

            $sql = "select * from `tbl_parking`";

            $result = mysqli_query($conn,$sql);

            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Vehicle_Number=$row['Vehicle_Number'];
                $Rate=$row['Rate'];
                $Total_Time=$row['Total_Time'];
                ?>
              
              <tr class="text-center">
                <td><?php echo @$id ?></td>
                <td><?php echo @$Vehicle_Number ?></td>
                <td><?php echo @$Rate ?></td>
                <td><?php echo @$Total_Time ?></td>
                <td>
                    <a href="display.php?deletedid=<?php echo $id ?>" onclick="myalert()" class="text-danger"> <span class="material-symbols-outlined">
                                delete
                                </span></a>
                </td>
                      </tr>
                     <?php

                    }
                    }
                     ?> 
                      
        </table>
    </div>
     <script>
    function myalert(){
        if(confirm("Do You Really Want To Delete?") == true){
            alert("Data deleted");
        }
    }
</script>

    <?php
$path = "./footer.php";
include "$path";
?>
