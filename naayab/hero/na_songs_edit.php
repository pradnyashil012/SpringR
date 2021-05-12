<?php
session_start();
include"db.php";
include"header.php";

if($token == " ")
{
    header("hero_login.php");
}
?>
        
<div class="main-content-inner">
<?php
$id = $_GET['id'];
$songs = mysqli_query($con, "SELECT * FROM na_songs WHERE id='$id'");

while($row = mysqli_fetch_array($songs))
{
    $uid = $row['uid'];
    $ttl = $row['title'];
    $linke = $row['link'];
    $cred = $row['credits'];
    $lyr = $row['lyrics'];
    $vid = $row['video'];
    $img = $row['image'];
    $ind = $row['industry'];
    $dlink = $row['drive_link'];
    $down = $row['download'];
    $keyr = $row['keywords'];
    $descc = $row['description'];
    $tredi = $row['trending'];
    $orgi = $row['na_originals'];
}


?>
                    <div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Edit New Songs:</h4><br>
                                 <input type="hidden" name="uid" value="<?php echo $uid; ?>" required>
                                <div class="form-gp">    
                                <input type="text" name="title" value="<?php echo $ttl; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="link" value="<?php echo $linke; ?>" required>    
                                </div><br />
                                 <div class="form-gp">    
                                <input type="text" name="credits" value="<?php echo $cred; ?>" required>    
                                </div><br />
                                <div class="form-gp">   
                                <textarea class="form-control" name="lyrics"  rows="5" cols="3"><?php echo $lyr; ?></textarea>
                                  
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="video" value='.<?php echo $vid; ?>' required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" value="<?php echo $img; ?>" class="form-control" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                    <input type="text" name="industry" value="<?php echo $ind; ?>" readonly> 
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="drive_link" value="<?php echo $dlink; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="download" value="<?php echo $down; ?>" required>    
                                </div><br />
                                 <div class="form-gp"> 
                                 <textarea class="form-control" name="keywords"  rows="4" cols="3"><?php echo $keyr; ?></textarea>
                                    
                                </div><br />
                                <div class="form-gp"> 
                                <textarea class="form-control" name="description" rows="4" cols="3"><?php echo $descc; ?></textarea> 
                                   
                                </div><br />
                                <div class="form-gp">    
                                   <input type="text" name="trending" value="<?php echo $tredi; ?>" required>
                                </div><br />
                                <div class="form-gp">    
                                   <input type="text" name="originals" value="<?php echo $orgi; ?>" required>
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
                    </div>
                    
    <?php
    
    if(isset($_POST['upload']))
    {
        
        $title1 = $_POST['title'];
        
        $lang1 = $_POST['industry'];
        $trend1 = $_POST['trending'];
        $org1 = $_POST['originals'];
        $date = $_POST['date'];
        $image1 = $_POST['image'];
        $key1 = $_POST['keywords'];
        $desc1 = $_POST['description'];
        
        $hid = mysqli_real_escape_string($con, $_POST['uid']);
        $title = mysqli_real_escape_string($con, $title1);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        $credits = mysqli_real_escape_string($con, $_POST['credits']);
        $lyrics = mysqli_real_escape_string($con, $_POST['lyrics']);
        $video = mysqli_real_escape_string($con, $_POST['video']);
        $lang = mysqli_real_escape_string($con, $lang1);
        $trend = mysqli_real_escape_string($con, $trend1);
        $org = mysqli_real_escape_string($con, $org1);
        $image = mysqli_real_escape_string($con, $image1);
        $drive_link = mysqli_real_escape_string($con, $_POST['drive_link']);
        $down_link = mysqli_real_escape_string($con, $_POST['download']);
        $key = mysqli_real_escape_string($con, $key1);
        $desc = mysqli_real_escape_string($con, $desc1);
        
        $sql = mysqli_query($con,"UPDATE na_songs SET uid='$hid', title='$title', link='$link', credits='$credits', lyrics='$lyrics', 
            video='$video', trending='$trend', image='$image', industry='$lang', drive_link='$drive_link', download='$down_link', keywords='$key', description='$desc', date='$date', na_originals='$org' WHERE id='$id'");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("<?php echo $lang; ?> is updated successfully..!");
    window.location = "home.php";
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("<?php echo $lang; ?> is not updated..!");
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