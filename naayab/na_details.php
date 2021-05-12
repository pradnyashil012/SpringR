<?php
include"db.php";
$lid = $_GET['id'];
$link = $_GET['link'];
$canonical = "https://www.naayab.com/na_details?id=$lid&link=$link";

$res = mysqli_query($con, "SELECT * FROM new_artists WHERE id='$lid'");
while($c=mysqli_fetch_array($res))
{
$id = $c['id'];
    $fn = $c['firstname'];
                  $ln = $c['lastname'];
                  $pro = $c['professions'];
                $image = $c['image'];  
                  $dob = $c['dob'];
                 $stage_name = $c['stage_name'];
                  $about = $c['about'];
                  
                  $keywords = $c['keywords'];
                  $description = $c['description'];
}

$title="New Singer : $stage_name";

include"header.php";

?>



   <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">

<!-- ads --> 
         
          
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
            	
              <div class="col-md-12">
                <h2><b><?php echo $stage_name; ?></b></h2>

              <img src="<?php echo $image; ?>" height="auto" width="100%">

              </div>
              <hr />
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
              <div class="col-md-12">
              <h3><b><?php echo $fn; ?> <?php echo $ln; ?></b></h3>

                  <h6><?php echo "("; echo $dob; ?> <?php echo ")"; ?></h6>
                  <br />
                  <h5><b>Professions:</b> <?php echo $pro; ?></h5>
              <hr />
              
              <h5><b>About:</b> <?php echo $about; ?></h5><hr />
              
              <h5><b>Creations:</b><a href="search_songs?key=<?php echo $stage_name; ?>" target="_blank"> View All</a></h5>
              </div>
              
            </div>
        </div>
      </div>
        
    </section>

  </main>


<?php
include"footer.php";
?>