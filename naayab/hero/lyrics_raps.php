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
               
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Rap Lyrics</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Id</td>
                                        <td>Title</td>
                                        <td>Image</td>
                                        <td>Date</td>
                                        <td>Language</td>
                                        <td>Trending</td>
                                        <td>Edit</td>
                                        <td>Delete</td>   
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM lyrics WHERE language='Rap' order by id desc");
                                    while($lyr = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $lyr['id']; ?></td>
                                        <td><?php echo $lyr['title']; ?></td>
                                        <td><img src="<?php echo $lyr['image']; ?>" height="auto" width="100"></td>
                                        <td><?php echo $lyr['date']; ?></td>
                                        <td><?php echo $lyr['language']; ?></td>
                                        <td><?php echo $lyr['trending']; ?></td>
                                        <td><a href="lyrics_edit.php?id=<?php echo $lyr['id']; ?>">Edit</a></td>
                                        <td><a href="delete2.php?id=<?php echo $lyr['id']; ?>">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <hr />
                </div>
                    <div class="col-lg-12">
                    <div class="col-md-8 pull-left">
                            <form method="post" enctype="multipart/form-data">
                                 <h4 class="title">Upload Lyrics:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="title" placeholder="Title" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="link" placeholder="Link" required>    
                                </div><br />
                                 <div class="form-gp">    
                                <input type="text" name="credits" placeholder="Credits Script" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lyrics" placeholder="Lyrics Script" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="video" placeholder="Video Script" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" placeholder="Image URL" class="form-control" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                    <input type="text" name="language" value="Rap" readonly> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="keywords" placeholder="Keywords" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="description" placeholder="Description" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <select name="trending" class="form-control" required>
                                        <option value="NO">Select Trending</option>
                                        <option value="YES">Yes</option>
                                        <option value="NO">No</option>
                                    </select> 
                                </div><br />
                                <div class="form-gp">
                                <input type="submit" name="upload" class="btn btn-success" value="Upload">
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
    
    if(isset($_POST['upload']))
    {
        
        $title1 = $_POST['title'];
        $lang1 = $_POST['language'];
        $trend1 = $_POST['trending'];
        $date = $_POST['date'];
        $image1 = $_POST['image'];
        $key1 = $_POST['keywords'];
        $desc1 = $_POST['description'];
        
        $title = mysqli_real_escape_string($con, $title1);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        $credits = mysqli_real_escape_string($con, $_POST['credits']);
        $lyrics = mysqli_real_escape_string($con, $_POST['lyrics']);
        $video = mysqli_real_escape_string($con, $_POST['video']);
        $lang = mysqli_real_escape_string($con, $lang1);
        $trend = mysqli_real_escape_string($con, $trend1);
        $image = mysqli_real_escape_string($con, $image1);
        $key = mysqli_real_escape_string($con, $key1);
        $desc = mysqli_real_escape_string($con, $desc1);
        
       $sql = mysqli_query($con,"INSERT INTO lyrics(id, title, link, credits, lyrics, video, language, trending, image, keywords, description, date) VALUES('','$title', '$link', '$credits', '$lyrics', '$video', '$lang', '$trend', '$image', '$key', '$desc', '$date')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("Rap Lyric is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("Rap Lyric is not uploaded..!");
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