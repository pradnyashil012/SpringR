<?php
session_start();
include"db.php";
include"header.php";
$hero = $_SESSION['hero'];
if($hero == " ")
{
    header("hero_login.php");
}

$id = $_GET['id'];

$album = mysqli_query($con, "SELECT * FROM na_albums WHERE id='$id'");
while ($row = mysqli_fetch_array($album)) {
    $ttl = $row['title'];
   
    $img = $row['image'];
    $link1 = $row['link'];
    $keys = $row['keywords'];
    $desc = $row['description'];
    $trendi = $row['trending'];
}

?>
           
            
<div class="main-content-inner">
              
                    <div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Edit Album:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="title" value="<?php echo $ttl; ?>">    
                                </div><br />
                               
                                <div class="form-gp">    
                                <input type="text" name="image" value="<?php echo $img; ?>">    
                                </div><br />
                               
                                <div class="form-gp">    
                                <input type="text" name="link" value="<?php echo $link1; ?>" required>    
                                </div><br />
                               
                                <div class="form-gp">    
                                    <input type="text" name="keywords" value="<?php echo $keys; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="description" value="<?php echo $desc; ?>" required> 
                                </div><br />
                              
                                <div class="form-gp">    
                                    <input type="text" name="trending" value="<?php echo $trendi; ?>" required> 
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
       
        
        $title = mysqli_real_escape_string($con, $_POST['title']);
       
        $link = mysqli_real_escape_string($con, $_POST['link']);
       
        $image = mysqli_real_escape_string($con, $_POST['image']);
       
        
        $trend = mysqli_real_escape_string($con, $_POST['trending']);
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $date = $_POST['date'];
        
        $sql = mysqli_query($con,"UPDATE na_albums SET title = '$title', date = '$date', keywords = '$key', description = '$desc', trending='$trend', image = '$image', link = '$link' WHERE id = '$id'");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("New Album is updated successfully..!");
    window.location = "home.php";
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("New Album is not updated..!");
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