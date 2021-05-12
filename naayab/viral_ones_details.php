<?php
include"db.php";

$lid = $_GET['id'];
$link = $_GET['link'];
$canonical = "https://www.naayab.com/viral_ones_details?id=$lid&link=$link";

$res = mysqli_query($con, "SELECT * FROM viral_ones WHERE id='$lid'");
              while($c=mysqli_fetch_array($res))
              {
                $fn = $c['firstname'];
                  $ln = $c['lastname'];
                  $image = $c['image'];
                $track = $c['track'];  
                  $stage_name = $c['stage_name'];
                  $language = $c['language'];
                  $download = $c['download'];
                  $article = $c['article'];
                  $yt = $c['youtube'];
                  $keywords = $c['keywords'];
                  $description = $c['description'];
              }
              

$title = "Viral Raps : Viral Songs - $track";

include"header.php";

?>


   <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
<!-- ads -->
       
<!-- ads --> 
          </div>
         <div> 
        <div class="row">
            
          <div class="col-md-3">
              <!-- ads -->
            
              <!-- ads -->
          </div>

          <div class="col-md-9">
            	
              <div class="col-md-12">
                <h2><?php echo $track; ?> - <?php echo $stage_name; ?></h2>
                  <img src="<?php echo $image; ?>" height="auto" width="100%">
              </div>
              <hr />
              <div class="col-md-12">
              <!-- ads -->
                  
                  <!-- ads -->
              </div>
              <div class="col-md-12">
               <?php echo $article; ?>
              
              </div>
              <div class="col-md-12">
               <?php echo $yt; ?>
              </div>

            </div>


        </div>
        <div class="col-md-12 text-center">
           <a href="https://drive.google.com/uc?export=download&id=<?php echo $download; ?>" style="font-size: 40px;" target="_blank" class="btn btn-success">Download</a>
           
            </div>
      </div>
      
      <div class="col-md-12 fixed-bottom">
            <iframe src="https://drive.google.com/file/d/<?php echo $download; ?>/preview" height="70" 
            width="100%"></iframe>
            </div>
            
        
    </section>

  </main>


<?php
include"footer.php";
?>
