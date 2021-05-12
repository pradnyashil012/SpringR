<?php
$keywords = "";
$description = "";
$title = "Viral Songs : Find Viral Raps!";

$canonical = "https://www.naayab.com/viral_ones.php";

include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h1>Viral Raps &amp; Viral Songs</h1>
          <h3>Find Viral Tracks from the World.</h3>
          <br />
        </div>
          
          <!-- ads row-->
         
           <!-- ads row-->
<hr />
        <div class="row">
                    
       
            <?php 
      
          
          $res1 = mysqli_query($con, "SELECT * FROM viral_ones ORDER BY id DESC");
          
            while($row1 = mysqli_fetch_array($res1))
            {
                $link = $row1['link'];
                $track = $row1['track'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="viral_ones_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="Viral Raps & Viral Songs" height='262' width='350'></a>
                <a href="viral_ones_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              </div>
            </div>
            <?php
            }
            ?>
             
          </div>
          <hr />
          <!-- ads row-->
          
           <!-- ads row-->
          
           </div>
           
    </section>

 



 <?php
include"footer.php";
?>