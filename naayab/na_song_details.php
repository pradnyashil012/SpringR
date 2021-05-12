<?php
include"db.php";

$link = $_GET['link'];
$lid = $_GET['id'];
$canonical = "https://www.naayab.com/na_song_details.php?id=$lid&link=$link";

 $res = mysqli_query($con, "SELECT * FROM na_songs WHERE id='$lid'");
              while($code=mysqli_fetch_array($res))
              {
                  $title = $code['title'];
                  $keywords = $code['keywords'];
                  $description = $code['description'];
                  $image = $code['image'];
                  $credits = $code['credits'];
                  $lyrics = $code['lyrics'];
                  $video = $code['video'];
                  $drive = $code['drive_link'];
                  $download = $code['download']; 
              }


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
          
        <div class="row">
            
          <div class="col-md-3">
              <!-- ads -->
     <!-- ads -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4963702767940715"
     data-ad-slot="3412340288"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
        <!-- ads -->
          </div>

          <div class="col-md-9">
            	<?php
             
                ?>
              <div class="col-md-12">
                  <h1><?php echo $title; ?></h1>
                  <h6><?php echo $description; ?></h6>
                  <!-- ads -->
                 
                  <!-- ads -->
                 <img src="<?php echo $image; ?>" height="auto" width="100%">
                  
                <?php 
                  echo $credits;
                  ?>
                  <br />
              </div>
              <!-- ads -->
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4963702767940715"
     data-ad-slot="3412340288"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
              <!-- ads -->
            <div class="col-md-12 mb-3">
              <?php
              echo $lyrics;
           
              ?>
            </div>
             <!-- ads -->
              
              <!-- ads -->
            <div class="col-md-12 mb-3">
              <?php
             
            echo $video;

              ?>
            </div>

        

            </div>
             
            <div class="col-md-6">
              
            </div>
        </div>

 <!-- ads -->
              
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-4963702767940715"
     data-ad-slot="5469396095"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
              
              <!-- ads -->
<div class="col-md-12 text-center" >
              <a href="https://drive.google.com/uc?export=download&id=<?php echo $download; ?>" style="font-size: 40px;" target="_blank" class="btn btn-success">Download</a>
            </div>
            
            <!-- ads -->
              
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-4963702767940715"
     data-ad-slot="5469396095"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
              
              <!-- ads -->
            
        <div class="col-md-12 fixed-bottom">
            <iframe src="<?php echo $drive; ?>/preview" height="70" 
            width="100%"></iframe>
            </div>
        
    </section>

  </main>


<?php
include"footer.php";
?>