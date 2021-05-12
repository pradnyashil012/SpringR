<?php
session_start();
     include"header.php";
    include"db.php";
?>

<?php

   $id = $_GET['id'];

   $res = mysqli_query($con,"SELECT * FROM lyricist WHERE id = $id");
    while($row = mysqli_fetch_array($res))
    {
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $dob1 = $row['dob'];
        $dod1 = $row['dod'];
        $img1 = $row['image'];
        $prof = $row['professions'];
        $abt = $row['about'];
        $creats = $row['creations'];
        $trendi = $row['trending'];
        $keyw = $row['keywords'];
        $descrip = $row['description'];
        $link_l = $row['link'];
    }
?>

<div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Update Lyricist:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="firstname" value="<?php echo $fname; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lastname" value="<?php echo $lname; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" value="<?php echo $img1; ?>" class="form-control" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="date" name="dob" value="<?php echo $dob1; ?>" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="date" name="dod" value="<?php echo $dod1; ?>" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="professions" value="<?php echo $prof; ?>" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="about" value="<?php echo $abt; ?>" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="creations" value="<?php echo $creats; ?>" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="keywords" value="<?php echo $keyw; ?>" required>  
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="description" value="<?php echo $descrip; ?>" required>  
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="link" value="<?php echo $link_l; ?>" required>  
                                </div><br />
                              
                                <div class="form-gp">    
                                    <input type="text" name="trending" value="<?php echo $trendi; ?>" required>
                                </div><br />
                                <div class="form-gp">
                                <input type="submit" name="update" class="btn btn-success" value="Update">
                                </div>
                                <input type="hidden" name="date" value="<?php
                                date_default_timezone_set('Asia/Kolkata');
                                echo $today=date("Y-m-d H:i:s");?>">
                            </form>
                            </div> 
                        <!-- ads -->
                        <div class="col-md-4 pull-right">
                            <a href="#"><img src="ads_front_left/d6d76287f4e98cc842e437ad72007a8fNames_deco.jpg" width="400" height="300"></a>
                        </div>
                    </div>
<?php

if(isset($_POST['update']))
{
        $fn1 = $_POST['firstname'];
        $ln1 = $_POST['lastname'];
        $create1 = $_POST['creations'];
        $pro1 = $_POST['professions'];
        $about1 = $_POST['about'];
        $trend1 = $_POST['trending'];
        $date = $_POST['date'];
        $dob = $_POST['dob'];
        $dod = $_POST['dod'];
        $image1 = $_POST['image'];
        
        $fn = mysqli_real_escape_string($con, $fn1);
        $ln = mysqli_real_escape_string($con, $ln1);
        $create = mysqli_real_escape_string($con, $create1);
        $about = mysqli_real_escape_string($con, $about1);
        $pro = mysqli_real_escape_string($con, $pro1);
        $trend = mysqli_real_escape_string($con, $trend1);
        $image = mysqli_real_escape_string($con, $image1);
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        
        $sql = mysqli_query($con, "UPDATE lyricist SET firstname='$fn', lastname='$ln', professions='$pro', image='$image', dob='$dob',dod='$dod', about='$about',creations='$create',trending='$trend', keywords='$key', description='$desc', link='$link', date='$date'  WHERE id = $id ");
    
    if(boolval($sql) == 1)
    {
        ?>

      <script type="text/javascript">

         window.location = "lyricist.php";
      </script>

<?php
   
    }
    
}
    
    
    
?>
        

        
       <?php
   include"footer.php";
?>
