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
                        <h4 class="header-title">Marathi New Artists</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Id</td>
                                        <td>Firstname</td>
                                        <td>lastname</td>
                                        <td>stage_name</td>
                                        <td>image</td>
                                        <td>Industry</td>
                                        <td>Trending</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM new_artists WHERE industry='Marathi' ORDER BY id DESC");
                                    while($vil = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $vil['id']; ?></td>
                                        <td><?php echo $vil['firstname']; ?></td>
                                        <td><?php echo $vil['lastname']; ?></td>
                                        <td><?php echo $vil['stage_name']; ?></td>
                                        <td><img src="<?php echo $vil['image']; ?>" height="100" width="100"></td>
                                        <td><?php echo $vil['industry']; ?></td>
                                        
                                        <td><?php echo $vil['trending']; ?></td>
                                        <td><a href="na_edit.php?id=<?php echo $vil['id']; ?>">Edit</a></td>
                                        <td><a href="na_delete.php?id=<?php echo $vil['id']; ?>">Delete</a></td>
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
                                 <h4 class="title">Upload Villain:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="fname" placeholder="Firstname">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lname" placeholder="Lastname">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="stage_name" placeholder="Stage Name">    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="industry" value="Marathi" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="link" placeholder="Link" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="professions" placeholder="Professions">    
                                </div><br />

                                <div class="form-gp">    
                                <input type="url" name="image" placeholder="Image Url" required>    
                                </div><br />

                                <div class="form-gp">    
                                <input type="date" name="dob" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="about" placeholder="About Artist" required>    
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
       
        
        $fn = mysqli_real_escape_string($con, $_POST['firstname']);
        $ln = mysqli_real_escape_string($con, $_POST['lastname']);
        $stage_name = mysqli_real_escape_string($con, $_POST['stage_name']);
        $industry = mysqli_real_escape_string($con, $_POST['industry']);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        $professions = mysqli_real_escape_string($con, $_POST['professions']);
        $image = mysqli_real_escape_string($con, $_POST['image']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $about = mysqli_real_escape_string($con, $_POST['about']);
        
        $trend = mysqli_real_escape_string($con, $_POST['trending']);
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $date = $_POST['date'];
        
        $sql = mysqli_query($con,"INSERT INTO new_artists(id, firstname, lastname, stage_name, industry, link, professions, image, dob, about, trending, keywords, description, date) VALUES('','$fn','$ln','$stage_name', '$industry', '$link', '$professions', '$image', '$dob', '$about', '$trend', '$key', '$desc', '$date')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("<?php echo $industry; ?> New Artist is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("<?php echo $industry; ?> New Artist is not uploaded..!");
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