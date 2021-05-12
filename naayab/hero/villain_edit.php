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
<?php
$id = $_GET['id'];

$res = mysqli_query($con, "SELECT * FROM villains WHERE id='$id'");
while($row = mysqli_fetch_array($res))
{
    $fn = $row['firstname'];
    $ln = $row['lastname'];
    $image = $row['image'];
    $film	= $row['film'];
    $industry = $row['industry'];
    $year = $row['year'];
    $role = $row['role'];
    $role_desc = $row['role_desc'];
    $youtube = $row['youtube'];
    $trending = $row['trending'];
    $keywords = $row['keywords'];
    $description = $row['description'];
    $link = $row['link'];
}
?>

  <div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Upload Villains:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="fname" value="<?php echo $fn; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lname" value="<?php echo $ln; ?>" >    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" value="<?php echo $image; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="film" value="<?php echo $film; ?>" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                 <input type="text" name="industry" value="<?php echo $industry; ?>" required>
                                </div><br />
                                <div class="form-gp">    
                                <input type="year" name="year" value="<?php echo $year; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="role" value="<?php echo $role; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="code" value="<?php echo $role_desc; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="video" value='<?php echo $youtube; ?>'class="form-control" required>    
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="keywords" value="<?php echo $keywords; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="description" value="<?php echo $description;  ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="link" value="<?php echo $link;  ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                   <input type="text" name="trending" value="<?php echo $trending; ?>" required> 
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
                        <!-- ads -->
                    </div>

 <?php
    
    if(isset($_POST['update']))
    {
        
       $fn1 = $_POST['fname'];
        $ln1 = $_POST['lname'];
        $img1 = $_POST['image'];
        $film1 = $_POST['film'];
        $industry1 = $_POST['industry'];
        $year1 = $_POST['year'];
        $role1 = $_POST['role'];
        $code1 = $_POST['code'];
        $video1 = $_POST['video'];
        $trend1 = $_POST['trending'];
        $date = $_POST['date'];
       
        
        $fn = mysqli_real_escape_string($con, $fn1);
        $ln = mysqli_real_escape_string($con, $ln1);
        $img = mysqli_real_escape_string($con, $img1);
        $film = mysqli_real_escape_string($con, $film1);
        $industry = mysqli_real_escape_string($con, $industry1);
        $year = mysqli_real_escape_string($con, $year1);
        $role = mysqli_real_escape_string($con, $role1);
        $code = mysqli_real_escape_string($con, $code1);
        $video = mysqli_real_escape_string($con, $video1);
        
        $trend = mysqli_real_escape_string($con, $trend1);
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        
        $sql = mysqli_query($con,"UPDATE villains SET firstname='$fn', lastname='$ln', image='$img', film='$film', industry='$industry', year='$year', role='$role', role_desc='$code', youtube='$video', trending='$trend', keywords='$key', description='$desc', link='$link', date='$date' WHERE id='$id'");
       
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("<?php echo $industry; ?> Ho rha hai..!");
    window.location = "south_villains.php";
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("<?php echo $industry; ?> Nahi ho rha..!");
    window.location.href = window.location.href;
    </script>
    <?php   
        }
        
    }
    
    ?>
   
        <?php
            include"footer.php";
            ?>