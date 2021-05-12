<?php
$keywords = "singam villain, trending Villains, best villains, best villain names, best villains of all time, greatest villains of all time, top villains, bollywood villain, bollywood villains, Prakash Raj, jaykant shikre, Ritesh Deshmukh, Shakti Kapoor, crime master gogo, rauf lala, rishi kapoor, kancha cheena, sanjay datt, gabbar singh, sholay villain, amjad khan";

$description = "Naayab.com is a free website where you can find bollywood singam villain, trending Villains, best villains, best villain names, best villains of all time, greatest villains of all time, top villains.";
$title = "Naayab.com: Find Greatest Bollywood Villains";

$canonical = "https://www.naayab.com/bollywood_villains.php";

include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h1>Bollywood Villains</h1>
          <h3>Here you will find a large collection of Bollywood Villains.</h3>
          <br />
        </div>
          
          <!-- ads row-->
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
           <!-- ads row-->
<hr />
        <div class="row">
                    
       
            
            <?php 
            
          
          $res1 = mysqli_query($con, "SELECT * FROM villains WHERE industry='Bollywood' AND  trending='NO' ORDER BY id DESC");
          
            while($row1 = mysqli_fetch_array($res1))
            {
                $link = $row1['link'];
                $role = $row1['role'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="villains_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="Bollywood Villain" height='262' width='350'></a>
                <a href="villains_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                  <h5><?php echo $role;?></h5>
                
                </div>
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
           <div class="d-flex justify-content-center">
               
               
           </div>
    </section>

 



 <?php
include"footer.php";
?>