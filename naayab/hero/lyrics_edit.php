<?php
session_start();
     include"header.php";
    include"db.php";
?>

<?php

   $id = $_GET['id'];

   $res = mysqli_query($con,"SELECT * FROM lyrics WHERE id = '$id'");
    while($row = mysqli_fetch_array($res))
    {
        $title_l = $row['title'];
        $link_l = $row['link'];
        $credits_l = $row['credits'];
        $lyrics_l = $row['lyrics'];
        $language_l = $row['language'];
        $trending_l = $row['trending'];
        $image_l = $row['image'];
        $keywords_l = $row['keywords'];
        $description_l = $row['description'];
        
    }
?>

<div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Update Lyrics:</h4><br>
                               <div class="form-gp">    
                                <input type="text" name="title" value="<?php echo $title_l; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="link" value="<?php echo $link_l; ?>" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="credits" value="<?php echo $credits_l; ?>" class="form-control" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lyrics" value="<?php echo $lyrics_l; ?>"  required>    
                                </div><br />
                               
                                <div class="form-gp">    
                                    <input type="text" name="language" value="<?php echo $language_l; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="trending" value="<?php echo $trending_l; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="image" value="<?php echo $image_l; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="keywords" value="<?php echo $keywords_l; ?>" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="description" value="<?php echo $description_l; ?>" required> 
                                </div><br />
                                
                                <div class="form-gp">
                                <input type="submit" name="update" class="btn btn-success" value="Upload">
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
       $title = mysqli_real_escape_string($con, $_POST['title']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
       $credits = mysqli_real_escape_string($con, $_POST['credits']);
    $lyrics = mysqli_real_escape_string($con, $_POST['lyrics']);
    
    $trending = mysqli_real_escape_string($con, $_POST['trending']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $keywords = mysqli_real_escape_string($con, $_POST['keywords']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $date = $_POST['date'];
    
        
        $sql = mysqli_query($con, "UPDATE lyrics SET title='$title', link='$link', credits='$credits', lyrics='$lyrics', trending='$trending',image='$image', keywords='$keywords', description='$description', date='$date'  WHERE id = '$id' ");
    
    if(boolval($sql) == 1)
    {
        ?>

      <script type="text/javascript">
         window.alert("ho raha hai!");
         window.location = "lyrics_raps.php";
      </script>

<?php
   
    }
    
}
    
    
    
?>
        

        
       <?php
   include"footer.php";
?>
