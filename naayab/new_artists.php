<?php

$keywords = "New Indian Singers, New Indian Rappers, New Punjabi Singers, New Hindi Singers, New Singers, New Singers Songs, New Singers Punjabi, New Singers Bollywood, New Singers India, New Rappers, Best Female Rappers.";

$description = "Naayab.com is a free website where you can find New Indian Singers, New Indian Rappers, New Punjabi Singers, New Hindi Singers, New Singers, New Singers Songs, New Singers Punjabi, New Singers Bollywood, New Singers India, New Rappers, Best Female Rappers.";

$title = "Naayab.com : Find Greatest Lyricists!";
$canonical = "https://www.naayab.com/new_artists";
include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h2>New Indian Singers & Rappers</h2>
          <h3>Large Collection of New Indian Singers & Rappers</h3>
          <br />
        </div>
          
          <!-- ads row-->
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
            
                        $statement = "new_artists";
          
          $res1 = mysqli_query($con, "SELECT * FROM {$statement} WHERE  trending='NO' ORDER BY id DESC");
          
            while($row1 = mysqli_fetch_array($res1))
            {
                $fn = $row1['firstname'];
                $ln = $row1['lastname'];
                $link = $row1['link'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="na_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="Lyricist: <?php echo $row1['stage_name']; ?>" title="New Artist: <?php echo $row1['stage_name']; ?>" height="262" width="350"></a>
                <a href="na_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                  <h5><?php echo $row1['stage_name']; ?></h5>
                
                </div>
              </div>
            </div>
            <?php
            }
            ?>
             
          </div>
          <hr />
          <!-- ads row-->
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
          
           </div>
           
    </section>

 



 <?php
include"footer.php";
?>