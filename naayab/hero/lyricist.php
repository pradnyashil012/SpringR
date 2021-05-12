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
                                        <td>Firstname</td>
                                        <td>Lastname</td>
                                        <td>Image</td>
                                        <td>Dob</td>
                                        <td>Dod</td>
                                        <td>Professions</td>
                                        
                                        <td>Trending</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        
                                    </tr>
                                    <?php
                                    $gallery = mysqli_query($con,"SELECT * FROM lyricist order by id desc");
                                    while($lyr = mysqli_fetch_array($gallery))
                                    { 
                                    ?>
                                    <tr>
                                        <td><?php echo $lyr['id']; ?></td>
                                        <td><?php echo $lyr['firstname']; ?></td>
                                        <td><?php echo $lyr['lastname']; ?></td>
                                        <td><img src="<?php echo $lyr['image']; ?>" height="auto" width="100"></td>
                                        <td><?php echo $lyr['dob']; ?></td>
                                        <td><?php echo $lyr['dod']; ?></td>
                                        <td><?php echo $lyr['professions']; ?></td>
                                        
                                        <td><?php echo $lyr['trending']; ?></td>
                                        <td><a href="lyricist_edit.php?id=<?php echo $lyr['id']; ?>">Edit</a></td>
                                        <td><a href="delete3.php?id=<?php echo $lyr['id']; ?>">Delete</a></td>
                                        
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
                                 <h4 class="title">Upload Lyricist:</h4><br>
                                
                                <div class="form-gp">    
                                <input type="text" name="firstname" placeholder="Firstname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="lastname" placeholder="Lastname" required>    
                                </div><br />
                                <div class="form-gp">    
                                <input type="url" name="image" placeholder="Image URL" class="form-control" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="date" name="dob" placeholder="Date of Birth" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="date" name="dod" placeholder="Date of Death" class="form-control">    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="professions" placeholder="Professions" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="about" placeholder="About" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="creations" placeholder="Creations" required>    
                                </div><br />
                                
                                <div class="form-gp">    
                                <input type="text" name="keywords" placeholder="Keywords" required>  
                                </div><br />
                                <div class="form-gp">    
                                <input type="text" name="description" placeholder="Description" required>  
                                </div><br />
                              <div class="form-gp">    
                                <input type="text" name="link" placeholder="Link" class="form-control" required>    
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
        
       $fn1 = $_POST['firstname'];
        $ln1 = $_POST['lastname'];
        $create1 = $_POST['creations'];
        $pro1 = $_POST['professions'];
        $about1 = $_POST['about'];
        $trend1 = $_POST['trending'];
        $date = $_POST['date'];
        $dob = $_POST['dob'];
        $dod = $_POST['dod'];
        $image1 = $_POST['image'];
        
        $fn = mysqli_real_escape_string($con, $fn1);
        $ln = mysqli_real_escape_string($con, $ln1);
        $create = mysqli_real_escape_string($con, $create1);
        $about = mysqli_real_escape_string($con, $about1);
        $pro = mysqli_real_escape_string($con, $pro1);
        $trend = mysqli_real_escape_string($con, $trend1);
        $image = mysqli_real_escape_string($con, $image1);
        $key = mysqli_real_escape_string($con, $_POST['keywords']);
        $desc = mysqli_real_escape_string($con, $_POST['description']);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        
        $sql = mysqli_query($con,"INSERT INTO lyricist(id, firstname, lastname, professions, image, dob, dod, about, creations, trending, keywords, description, link, date) VALUES('','$fn', '$ln', '$pro','$image','$dob', '$dod', 
        '$about', '$create','$trend', '$key', '$desc', '$link', '$date')");
        
        if(boolval($sql) == 1)
        {
             
        
        ?> 
    <script>
        window.alert("Lyricist is uploaded successfully..!");
    window.location.href = window.location.href;
    </script>
    <?php
        }
        else
        {
         ?> 
    <script>
        window.alert("Lyricist is not uploaded..!");
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