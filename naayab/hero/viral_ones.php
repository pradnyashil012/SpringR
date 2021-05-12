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
                        <h4 class="header-title">Lyricist</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Id</td>
                                       
                                        <td>Stage Name</td>
                                        <td>Image</td>
                                        <td>Track</td>
                                        <td>Language</td>
                                        
                                        <td>Trending</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM viral_ones order by id desc");
                                    while($lyr = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $lyr['id']; ?></td>
                                       
                                        <td><?php echo $lyr['stage_name']; ?> </td>
                                        <td><img src="<?php echo $lyr['image']; ?>" height="auto" width="100"></td>
                                        <td><?php echo $lyr['track']; ?></td>
                                        <td><?php echo $lyr['language']; ?></td>
                                        
                                        <td><?php echo $lyr['trending']; ?></td>
                                        <td><a href="viral_edit.php?id=<?php echo $lyr['id']; ?>">Edit</a></td>
                                        <td><a href="viral_delete.php?id=<?php echo $lyr['id']; ?>">Delete</a></td>
                                        
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
                                 <h4 class="title">Upload Viral:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="firstname" placeholder="Firstname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lastname" placeholder="Lastname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="stage_name" placeholder="Stage Name" class="form-control" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="image" placeholder="Image" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="track" placeholder="Track Name" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="download" placeholder="Download Link" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="link" placeholder="Link" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="youtube" placeholder="Youtube Script" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="article" placeholder="Article Script" required>  
                                </div><br />
                                <div class="form-gp">    
                                    <select name="trending" class="form-control" required>
                                        <option value="NO">Select Trending</option>
                                        <option value="YES">Yes</option>
                                        <option value="NO">No</option>
                                    </select> 
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="description" placeholder="Description" required>  
                                </div><br />
                              <div class="form-gp">    
                                <input type="text" name="keywords" placeholder="Keywords" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="language" placeholder="Language" required>    
                                </div><br />
                                
                                <div class="form-gp">
                                <input type="submit" name="upload" class="btn btn-success" value="Upload">
                                </div>
                                
                            </form>
                            </div> 
                        <!-- ads -->
                        
                    </div>
                    
    <?php
    
    if(isset($_POST['upload']))
    {
        
       $fn1 = $_POST['firstname'];
        $ln1 = $_POST['lastname'];
        $stage_name1 = $_POST['stage_name'];
        $image1 = $_POST['image'];
        $track1 = $_POST['track'];
        $download1 = $_POST['download'];
        $link1 = $_POST['link'];
        $youtube1 = $_POST['youtube'];
        $article1 = $_POST['article'];
        $trending1 = $_POST['trending'];
        $key1 = $_POST['keywords'];
        $desc1 = $_POST['description'];
        $lang1 = $_POST['language'];
        
        $fn = mysqli_real_escape_string($con, $fn1);
        $ln = mysqli_real_escape_string($con, $ln1);
        $stage_name = mysqli_real_escape_string($con, $stage_name1);
        $image = mysqli_real_escape_string($con, $image1);
        $track = mysqli_real_escape_string($con, $track1);
        $download = mysqli_real_escape_string($con, $download1);
        $link = mysqli_real_escape_string($con, $link1);
        $youtube = mysqli_real_escape_string($con, $youtube1);
        $article = mysqli_real_escape_string($con, $article1);
        $trending = mysqli_real_escape_string($con, $trending1);
        $key = mysqli_real_escape_string($con, $key1);
        $desc = mysqli_real_escape_string($con, $desc1);
        $language = mysqli_real_escape_string($con, $lang1);
        
        $sql = mysqli_query($con,"INSERT INTO viral_ones(id, firstname, lastname, stage_name, image, track, download, link, youtube, article, trending, keywords, description, language) VALUES('','$fn', '$ln', '$stage_name','$image','$track', '$download', 
        '$link', '$youtube', '$article', '$trending', '$key', '$desc', '$language')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("Viral One is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("Viral One is not uploaded..!");
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