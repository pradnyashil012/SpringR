<?php
session_start();
include"db.php";
include"header.php";
$hero = $_SESSION['hero'];
if($hero == " ")
{
    header("hero_login.php");
}
?>
           
            
<div class="main-content-inner">
               <?php

               $id = $_GET['id'];

               $new_artists = mysqli_query($con, "SELECT * FROM new_artists WHERE id='$id'");

               while ($row = mysqli_fetch_array($new_artists)) {

                  $fn = $row['firstname'];
                  $ln = $row['lastname'];
                  $sn = $row['stage_name'];
                  $industry = $row['industry'];
                  
                  $pro = $row['professions'];
                  $image = $row['image'];
                  $trend = $row['trending'];
                  $keyw = $row['keywords'];
                  $descrip = $row['description'];
               }


               ?>
                    <div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Edit New Artists:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="fname" value="<?php echo $fn; ?>">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lname" value="<?php echo $ln; ?>">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="stage_name" value="<?php echo $sn; ?>">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="industry" value="<?php echo $industry; ?>" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="professions" value="<?php echo $pro; ?>">    
                                </div><br />

                                <div class="form-gp">    
                                <input type="url" name="image" value="<?php echo $image; ?>" required>    
                                </div><br />

                                <div class="form-gp">    
                                <input type="text" name="keywords" value="<?php echo $keyw; ?>" required>  
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="description" value="<?php echo $descrip; ?>" required>  
                                </div><br />
                              
                                <div class="form-gp">    
                                   <input type="text" name="trending" value="<?php echo $trend;  ?>" required>
                                </div><br />
                                <div class="form-gp">
                                <input type="submit" name="upload" class="btn btn-success" value="Update">
                                </div>
                                <input type="hidden" name="date" value="<?php
                                date_default_timezone_set('Asia/Kolkata');
                                echo $today=date("Y-m-d H:i:s");?>">
                            </form>
                            </div> 
                        <!-- ads -->
                        <div class="col-md-4 pull-right">
                            <a href="#"></a>
                        </div>
                        <!-- ads -->
                    </div>
                    
    <?php
    
    if(isset($_POST['upload']))
    {
       
        
        $fn = mysqli_real_escape_string($con, $_POST['fname']);
        $ln = mysqli_real_escape_string($con, $_POST['lname']);
        $stage_name = mysqli_real_escape_string($con, $_POST['stage_name']);
        $industry = mysqli_real_escape_string($con, $_POST['industry']);
      
        $professions = mysqli_real_escape_string($con, $_POST['professions']);
        $image = mysqli_real_escape_string($con, $_POST['image']);
        
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $trend = mysqli_real_escape_string($con, $_POST['trending']);
       
        $date = $_POST['date'];
        
        $sql = mysqli_query($con,"UPDATE new_artists SET firstname='$fn', lastname='$ln', stage_name='$stage_name', professions='$professions', industry='$industry', image='$image', keywords='$key', description='$desc', trending='$trend', date='$date' WHERE id='$id'");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("<?php echo $industry; ?> New Artist is updated successfully..!");
    window.location = "home.php";
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("<?php echo $industry; ?> New Artist is not updated..!");
    window.location.href = window.location.href;
    </script>
    <?php   
        }
        
    }
    
    ?>
   
            </div>
        </div>
        <!-- main content area end -->
        <?php
            include"footer.php";
            ?>