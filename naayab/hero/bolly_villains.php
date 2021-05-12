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
                        <h4 class="header-title">Bollywood Villains</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Id</td>
                                        <td>Firstname</td>
                                        <td>lastname</td>
                                        <td>Film</td>
                                        <td>Year</td>
                                        <td>Industry</td>
                                        <td>Role</td>
                                        <td>Trending</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM villains WHERE industry='Bollywood' ORDER BY id DESC");
                                    while($vil = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $vil['id']; ?></td>
                                        <td><?php echo $vil['firstname']; ?></td>
                                        <td><?php echo $vil['lastname']; ?></td>
                                        <td><?php echo $vil['film']; ?></td>
                                        <td><?php echo $vil['year']; ?></td>
                                        <td><?php echo $vil['industry']; ?></td>
                                        <td><?php echo $vil['role']; ?></td>
                                        <td><?php echo $vil['trending']; ?></td>
                                        <td><a href="villain_edit.php?id=<?php echo $vil['id']; ?>">Edit</a></td>
                                        <td><a href="villain_delete.php?id=<?php echo $vil['id']; ?>">Delete</a></td>
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
                                <input type="text" name="fname" placeholder="Firstname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lname" placeholder="lastname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" placeholder="Image Url" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="film" placeholder="Film" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                 <select name="industry" class="form-control" required>
                                        
                                        <option value="Bollywood">Bollywood</option>
                                        
                                    </select>
                                </div><br />
                                <div class="form-gp">    
                                <input type="year" name="year" placeholder="Year of Release" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="role" placeholder="Role Name" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="code" placeholder="Code of Description" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="video" placeholder="Video URL" class="form-control" required>    
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="keywords" placeholder="Keywords" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="description" placeholder="Description" required> 
                                </div><br />
                                <div class="form-gp">    
                                    <input type="text" name="link" placeholder="Link" required> 
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
                        <!-- ads -->
                    </div>
                    
    <?php
    
    if(isset($_POST['upload']))
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
        
        $sql = mysqli_query($con,"INSERT INTO villains(id, firstname, lastname, image, film, industry, year, role, role_desc, youtube, trending, keywords, description, link, date) VALUES('','$fn','$ln','$img', '$film', '$industry', '$year', '$role', '$code', '$video', '$trend', '$key', '$desc', '$link', '$date')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("<?php echo $industry; ?> Villain is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("<?php echo $industry; ?> Villain is not uploaded..!");
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