<?php
$keywords = "Download New Marathi Songs, New Marathi Singers, New Marathi Songs Lyrics";

$description = "Naayab.com is a free website where you can Play and Download New Marathi Songs, New Marathi Singers, New Marathi Songs Lyrics, ";

$title = "Naayab.com : New Marathi Singers' Songs";
$canonical = "https://www.naayab.com/na_marathi_songs";
include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h2>New Marathi Songs</h2>
          <h3>Large Collection of New Marathi Singers' Songs.</h3>
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
          
                        $statement = "na_songs";
          
          $res1 = mysqli_query($con, "SELECT * FROM {$statement} WHERE industry='Marathi' AND trending='NO' ORDER BY id DESC");
          
            while($row1 = mysqli_fetch_array($res1))
            {
                $lyr_title = $row1['title'];
                $link = $row1['link'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="na_song_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="New Marathi Song" title="<?php echo $lyr_title; ?>" class="img-fluid mt-3 mb-3"></a>
                <a href="na_song_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                  <p><?php echo $row1['title']; ?></p>
                
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