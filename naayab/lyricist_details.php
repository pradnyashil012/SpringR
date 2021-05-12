<?php
include"db.php";
$lid = $_GET['id'];
$link = $_GET['link'];
$canonical = "https://www.naayab.com//lyricist_details?id=$lid&link=$link";

$res = mysqli_query($con, "SELECT * FROM lyricist WHERE id='$lid'");
while($c=mysqli_fetch_array($res))
{
    $fn = $c['firstname'];
                  $ln = $c['lastname'];
                  $pro = $c['professions'];
                $image = $c['image'];  
                  $dob = $c['dob'];
                  $dod = $c['dod'];
                  $about = $c['about'];
                  $creations = $c['creations'];
                  $keywords = $c['keywords'];
                  $description = $c['description'];
}

$title="Naayab.com - Great Lyricist : $fn $ln";

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
         
          
        <div class="row">
            
          <div class="col-md-3">
              <!-- ads -->
             
              <!-- ads -->
          </div>

          <div class="col-md-9">
            	
              <div class="col-md-12">

              <img src="<?php echo $image; ?>" height="auto" width="100%">

              </div>
              <hr />
              <!-- ads -->
            
              <!-- ads -->
              <div class="col-md-12">
              <h3><b><?php echo $fn; ?> <?php echo $ln; ?></b></h3>
                  <h6><?php echo "("; echo $dob; ?> - <?php echo $dod; echo ")"; ?></h6>
                  <br />
                  <h5><b>Professions:</b> <?php echo $pro; ?></h5>
              <hr />
              
              <h5><b>About:</b> <?php echo $about; ?></h5><hr />
              
              <h5><b>Creations:</b> <?php echo $creations; ?></h5>
              </div>
              
            </div>
        </div>
      </div>
        
    </section>

  </main>


<?php
include"footer.php";
?>