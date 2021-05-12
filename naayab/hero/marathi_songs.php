<?php
session_start();
include"db.php";
include"header.php";

if($token == " ")
{
    header("hero_login.php");
}

$uid = $_SESSION["uid"];

?>


<div class="main-content-inner">

    <!-- order list area start -->
    <div class="card mt-5">
       
        <div class="col-lg-12">
            <div class="col-md-8 pull-left">
                <form method="post" enctype="multipart/form-data">
                    <h4 class="title">Upload Marathi Song:</h4><br>
                    <input type="hidden" name="uid" value="<?php echo $uid; ?>" required> 
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
                                    <input type="text" name="industry" value="Marathi" readonly> 
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="drive_link" placeholder="Google Drive Link" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="download" placeholder="Download Link" required>    
                                </div><br />
                                 <div class="form-gp">  
                                 <textarea class="form-control" name="keywords" placeholder="Keywords" rows="4" cols="3"></textarea>
                                    
                                </div><br />
                                <div class="form-gp">  
                                <textarea class="form-control" name="description" placeholder="Description" rows="4" cols="3"></textarea> 
                                </div><br />
                                <div class="form-gp">    
                                    <select name="trending" class="form-control" required>
                                        <option value="NO">Select Trending</option>
                                        <option value="YES">Yes</option>
                                        <option value="NO">No</option>
                                    </select> 
                                </div><br />
                                <div class="form-gp">    
                                    <select name="originals" class="form-control" required>
                                        <option value="false">Select Originals</option>
                                        <option value="true">Yes</option>
                                        <option value="false">No</option>
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
                            <a href="#"></a>
                        </div>
                    </div>
                    
    <?php
    
    if(isset($_POST['upload']))
    {
        
        $title1 = $_POST['title'];
        $lang1 = $_POST['industry'];
        $trend1 = $_POST['trending'];
        $originals1 = $_POST['originals'];
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
        $originals = mysqli_real_escape_string($con, $originals1);
        $image = mysqli_real_escape_string($con, $image1);
        $drive_link = mysqli_real_escape_string($con, $_POST['drive_link']);
        $down_link = mysqli_real_escape_string($con, $_POST['download']);
        $key = mysqli_real_escape_string($con, $key1);
        $desc = mysqli_real_escape_string($con, $desc1);

        
        
        $sql = mysqli_query($con,"INSERT INTO na_songs(id, uid, title, link, credits, lyrics, video, trending, image, industry, drive_link, download, keywords, description, date, na_originals) 
        VALUES('', '$hid', '$title', '$link', '$credits', '$lyrics', '$video', '$trend', '$image', '$lang', 
            '$drive_link', '$down_link', '$key', '$desc', '$date', '$originals')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("New Marathi Song is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("New Marathi Song is not uploaded..!");
    window.location.href = window.location.href;
    </script>
    <?php   
        }
        
    }
    
    ?>
   
            </div>
            <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">New Marathi Song</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                <?php
                    $res = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM na_songs WHERE industry='Marathi' AND uid='$uid'");
                    $ros = mysqli_fetch_array($res);
                    ?>
                    <tr>
                    <td>Number Of Marathi Songs: <?php echo $ros['count']; ?></td>
                   
                    </tr>
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
                                    $res = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM na_songs WHERE industry='Marathi' AND uid='$uid'");
                                    $ros = mysqli_fetch_array($res);

                                    ?>
                                    <tr>
                                    <td>Number Of Marathi Songs: <?php echo $ros['count']; ?></td>
                                   
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM na_songs WHERE industry='Rap' AND uid='$uid' order by id desc");
                                    while($lyr = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $lyr['id']; ?></td>
                                        <td><?php echo $lyr['title']; ?></td>
                                        <td><img src="<?php echo $lyr['image']; ?>" height="auto" width="100"></td>
                                        <td><?php echo $lyr['date']; ?></td>
                                        <td><?php echo $lyr['industry']; ?></td>
                                        <td><?php echo $lyr['trending']; ?></td>
                                        <td><a href="na_songs_edit.php?id=<?php echo $lyr['id']; ?>">Edit</a></td>
                                        <td><a href="na_songs_delete.php?id=<?php echo $lyr['id']; ?>">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <hr />
                </div>
        </div>
        <!-- main content area end -->
        <?php
            include"footer.php";
            ?>