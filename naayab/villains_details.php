<?php
include"db.php";

$lid = $_GET['id'];
$link = $_GET['link'];
$canonical = "https://www.naayab.com/villains_details?id=$lid&link=$link";

$res = mysqli_query($con, "SELECT * FROM villains WHERE id='$lid'");
              while($c=mysqli_fetch_array($res))
              {
                $fn = $c['firstname'];
                  $ln = $c['lastname'];
                  $image = $c['image'];
                $film = $c['film'];  
                  $year = $c['year'];
                  $industry = $c['industry'];
                  $role = $c['role'];
                  $character = $c['role_desc'];
                  $yt = $c['youtube'];
                  $keywords = $c['keywords'];
                  $description = $c['description'];
              }
              

$title = "Naayab.com : Great Villain -$role - $fn $ln";

include"header.php";

?>


   <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
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
         <div> 
        <div class="row">
            
          <div class="col-md-3">
              <!-- ads -->
            <section id="gallery" class="section-with-bg wow fadeInUp">

      <div class="container">
          <div class="col-md-12">
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
    </div>
   
  </div>
  </section>
              <!-- ads -->
          </div>

          <div class="col-md-9">
            	
              <div class="col-md-12">
                  <img src="<?php echo $image; ?>" height="auto" width="100%">
              </div>
              <hr />
              <div class="col-md-12">
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
              <div class="col-md-12">
              <h2><b>Role:</b> <?php echo $role; ?></h2><br />
              <h3><b><?php echo $fn; ?> <?php echo $ln; ?></b></h3>
                  
                  <br />
                  <h5><b>Film:</b> <?php echo $film; ?> (<?php echo $year; ?>)</h5>
              
              <h5><b>Industry:</b> <?php echo $industry; ?></h5>
              <hr />
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
              <h6><?php echo $character; ?></h6><hr />
              </div>
              <div class="col-md-12">
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
               <?php echo $yt; ?>
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

            </div>


        </div>
        
      </div>
        
    </section>

  </main>


<?php
include"footer.php";
?>
