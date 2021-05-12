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
               
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">New Singer's Album</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Id</td>
                                        <td>Title</td>
                                        
                                        <td>Trending</td>
                                        <td>Image</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM na_albums ORDER BY id DESC");
                                    while($vil = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $vil['id']; ?></td>
                                        <td><?php echo $vil['title']; ?></td>
                                       
                                        <td><?php echo $vil['trending']; ?></td>
                                        <td><img src="<?php echo $vil['image']; ?>" height="100" width="100"></td>
                                        <td><a href="na_album_edit.php?id=<?php echo $vil['id']; ?>">Edit</a></td>
                                        <td><a href="na_album_delete.php?id=<?php echo $vil['id']; ?>">Delete</a></td>
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
                                 <h4 class="title">New Album:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="title" placeholder="Title - Stage Name">    
                                </div><br />
                               
                                <div class="form-gp">    
                                <input type="text" name="image" placeholder="Image">    
                                </div><br />
                               
                                <div class="form-gp">    
                                <input type="text" name="link" placeholder="Link" required>    
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
        
        $sql = mysqli_query($con,"INSERT INTO na_albums(id, title, date, keywords, description, trending, image, link) VALUES('','$title','$date', '$key', '$desc', '$trend', '$image', '$link')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("New Album is uploaded successfully..!");
    window.location = "home.php";
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("New Album is not uploaded..!");
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