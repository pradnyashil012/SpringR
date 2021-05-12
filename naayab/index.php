<?php

$keywords = "Naayab.com, New Indian Singers, New Hindi Songs, New Hindi Singers, New Hindi Songs Lyrics, New Indian Singers, New Indian Rappers, New Punjabi Singers, New Punjabi Songs, New Marathi Songs, New Marathi Singers, New Marathi Rappers, New Artists";

$description = "Naayab.com is website where you can Play and Download New Hindi Songs, New Hindi Singers, New Hindi Songs Lyrics, New Indian Singers, New Indian Rappers, New Punjabi Singers, New Punjabi Songs, New Marathi Songs, New Marathi Singers, New Marathi Rappers, New Artists.";

$title = "Naayab.com: New Indian Singers & Rappers, New Indian Songs & Raps";

$canonical = "https://www.naayab.com/index";

include"db.php";
include"header.php";
?>
  <!--==========================
    Intro Section
  
  <section id="intro">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
        
            <div class="col-md-6">
                <a href="lyrics_special?key=Himesh Reshammiya" data-vbtype="text" class="about-btn scrollto" data-autoplay="true" target="_blank"><img src="https://wikibio.in/wp-content/uploads/2019/04/Himesh-Reshammiya.jpg" width="100%" height="auto"></a>
            </div>
            <div class="col-md-6">
            <h1 class="mb-4 pb-0">Himesh Reshammiya<br><span>Artist, Lyricist &amp; Musician</span></h1>
<a href="lyrics_special?key=Himesh Reshammiya" data-vbtype="text" class="about-btn scrollto" data-autoplay="true" target="_blank">Read Lyrics</a>
            </div>
        </div>
        
        </div>
    
  </section>
  
  

============================-->

<section>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
        
            <div class="col-md-9 embed-responsive embed-responsive-16by9">
            <iframe width="740" height="350" class="embed-responsive-item" src="https://www.youtube.com/embed/lJYqqxxQjt8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-3">
            	 <h1 class="mb-4 pb-0"><b>Naayab Originals</b><br> Present <b>Vastava</b></h1>
<a href="search_songs?q=naayab" data-vbtype="text" class="btn btn-warning" data-autoplay="true" target="_blank">View Details</a>
            </div>
        </div>
        
        </div>
    
  </section>
<br />
<br />
<br />
<br />
  <main id="main">

 <!--==========================
      New Songs Section
    ============================-->

    <section id="lyrics" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Trending New Singers &amp; Songs</h2>
          <p>Here are some New Indian Singers, Rappers.</p>
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
          
          

        <div class="row">
            <?php
          $res11 = mysqli_query($con, "SELECT * FROM na_songs WHERE industry='Hindi' AND trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row11 = mysqli_fetch_array($res11))
          {
              $img11 = $row11['image'];
              $id11 = $row11['id'];
              $lyr_title11 = $row11['title'];
              $link11 = $row11['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="New Hindi Songs &amp; Lyrics">New Hindi Song</h2>
               
                <a href="na_song_details?id=<?php echo $id11; ?>&link=<?php echo $link11; ?>"><img src="<?php echo $img11; ?>" alt="<?php echo $lyr_title11;?>" title="<?php echo $lyr_title11;?>" height="262" width="350"></a>
                <a href="na_song_details?id=<?php echo $id11; ?>&link=<?php echo $link11; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="na_hindi_songs" class="btn btn-link">More Songs</a></h4>
                
                </div>
              </div>
            </div>
            <?php
          $res12 = mysqli_query($con, "SELECT * FROM na_songs WHERE industry='Punjabi' AND trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row12 = mysqli_fetch_array($res12))
          {
              $img12 = $row12['image'];
              $id12 = $row12['id'];
              $lyr_title12 = $row12['title'];
              $link12 = $row12['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="New Punjabi Songs &amp; Lyrics">New Punjabi Song</h2>
               
                <a href="na_song_details?id=<?php echo $id12; ?>&link=<?php echo $link12; ?>"><img src="<?php echo $img12; ?>" alt="<?php echo $lyr_title12;?>" title="<?php echo $lyr_title12;?>" height="262" width="350"></a>
                <a href="na_song_details?id=<?php echo $id12; ?>&link=<?php echo $link12; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="na_punjabi_songs" class="btn btn-link">More Songs</a></h4>
                
                </div>
              </div>
            </div>
              <?php
          $res13 = mysqli_query($con, "SELECT * FROM na_songs WHERE industry='Marathi' AND trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row13 = mysqli_fetch_array($res13))
          {
              $img13 = $row13['image'];
              $id13 = $row13['id'];
              $lyr_title13 = $row13['title'];
              $link13 = $row13['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="New Marathi Songs &amp; Lyrics">New Marathi Song</h2>
               
                <a href="na_song_details?id=<?php echo $id13; ?>&link=<?php echo $link13; ?>"><img src="<?php echo $img13; ?>" alt="<?php echo $lyr_title13;?>" title="<?php echo $lyr_title13;?>" height="262" width="350"></a>
                <a href="na_song_details?id=<?php echo $id13; ?>&link=<?php echo $link13; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="na_marathi_songs" class="btn btn-link">More Songs</a></h4>
                
                </div>
              </div>
            </div>
               <?php
          $res14 = mysqli_query($con, "SELECT * FROM na_songs WHERE industry='Rap' AND trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row14 = mysqli_fetch_array($res14))
          {
              $img14 = $row14['image'];
              $id14 = $row14['id'];
              $lyr_title14 = $row14['title'];
              $link14 = $row14['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="New Rap &amp; Lyrics">New Rap</h2>
               
                <a href="na_song_details?id=<?php echo $id14; ?>&link=<?php echo $link14; ?>"><img src="<?php echo $img14; ?>" alt="<?php echo $lyr_title14;?>" title="<?php echo $lyr_title14;?>" height="262" width="350"></a>
                <a href="na_song_details?id=<?php echo $id14; ?>&link=<?php echo $link14; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="na_raps" class="btn btn-link">More Raps</a></h4>
                
                </div>
              </div>
            </div>
               <?php
          $res15 = mysqli_query($con, "SELECT * FROM viral_ones WHERE trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row15 = mysqli_fetch_array($res15))
          {
              $img15 = $row15['image'];
              $id15 = $row15['id'];
              $lyr_title15 = $row15['track'];
              $link15 = $row15['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="Viral Raps/Songs">Viral Songs/Raps</h2>
               
                <a href="viral_ones_details?id=<?php echo $id15; ?>&link=<?php echo $link15; ?>"><img src="<?php echo $img15; ?>" alt="<?php echo $lyr_title15;?>" title="<?php echo $lyr_title15;?>" height="262" width="350"></a>
                <a href="viral_ones_details?id=<?php echo $id15; ?>&link=<?php echo $link15; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="viral_ones_list" class="btn btn-link">More Albums</a></h4>
                </div>
              </div>
            </div>
               <?php
          $res16 = mysqli_query($con, "SELECT * FROM new_artists WHERE trending='YES' ORDER BY id DESC LIMIT 1");
          
          while($row16 = mysqli_fetch_array($res16))
          {
              $img16 = $row16['image'];
              $id16 = $row16['id'];
              $lyr_title16 = $row16['stage_name'];
              $link16 = $row16['link'];
          }
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
                <h2 title="New Singer">New Singer</h2>
               
                <a href="na_details?id=<?php echo $id16; ?>&link=<?php echo $link16; ?>"><img src="<?php echo $img16; ?>" alt="<?php echo $lyr_title16;?>" title="<?php echo $lyr_title16;?>" height="262" width="350"></a>
                <a href="na_details?id=<?php echo $id16; ?>&link=<?php echo $link16; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                <h4><a href="new_artists" class="btn btn-link">More Singers</a></h4>
                
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
      

    </section>

    
    <!--==========================
      Ads Section
    ============================-->
    
    
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
  
  
    <!--==========================
      Villain Section
    ============================-->
    <section id="gallery" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Trending Villains</h2>
          <p>Here you will find a large collection of Trending Villains. You will also find the Greatest bollywood villains, hollywood villains, tollywood villains, kollywood villains. </p>
          <!-- ads -->
            
            <!-- ads -->
            
        </div>

        <div class="row mb-3">

            <?php
            $villain1 = mysqli_query($con,"SELECT * FROM villains WHERE industry='Bollywood' AND trending='YES' ORDER BY id DESC LIMIT 1");
            while($vil1 = mysqli_fetch_array($villain1))
            {
                $role1 = $vil1['role'];
                $idv1 = $vil1['id'];
                $vil_img1 = $vil1['image'];
                $fnv1 = $vil1['firstname'];
                $lnv1 = $vil1['lastname'];
               $linkv1 = $vil1['link'];
            }
            ?>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                  <h2 title="Bollywood Villains">Bollywood Villains</h2>
                  
                  <a href="villains_details?id=<?php echo $idv1; ?>&link=<?php echo $linkv1; ?>"><img src="<?php echo $vil_img1; ?>" alt="Villain 1" class="" height="262" width="350"></a>

                <a href="villains_details?id=<?php echo $idv1; ?>&link=<?php echo $linkv1; ?>" class="btn btn-link mt-3"><h3><?php echo $role1; ?></h3></a>
              <div class="details">
                <a href="bollywood_villains" class="btn btn-link" title="See More Bollywood Villains">More Villains</a>

              </div>
              
            </div>
          </div>
            
            </div>
            
            <?php
            $villain2 = mysqli_query($con,"SELECT * FROM `villains` WHERE industry='Hollywood' AND trending='YES' ORDER BY id DESC LIMIT 1");
            while($vil2 = mysqli_fetch_array($villain2))
            {
                $role2 = $vil2['role'];
                $idv2 = $vil2['id'];
                $vil_img2 = $vil2['image'];
                $fnv2 = $vil2['firstname'];
                $lnv2 = $vil2['lastname'];
                $linkv2 = $vil2['link'];
            }
            ?>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
<h2 title="Hollywood Villains">Hollywood Villains</h2>
                  <a href="villains_details?id=<?php echo $idv2; ?>&link=<?php echo $linkv2; ?>"><img src="<?php echo $vil_img2; ?>" alt="Villain 1" class="" height="262" width="350"></a>
                <a href="villains_details?id=<?php echo $idv2; ?>&link=<?php echo $linkv2; ?>" class="btn btn-link mt-3"><h3><?php echo $role2; ?></h3></a>
              <div class="details">
                <a href="hollywood_villains" class="btn btn-link" title="See More Hollywood Villains">More Villains</a>

              </div>
              
            </div>
          </div>
            
            </div>
            
            <?php
            $villain3 = mysqli_query($con,"SELECT * FROM villains WHERE industry='South' AND trending='YES' ORDER BY id DESC LIMIT 1");
            while($vil3 = mysqli_fetch_array($villain3))
            {
                $role3 = $vil3['role'];
                $idv3 = $vil3['id'];
                $vil_img3 = $vil3['image'];
                $fnv3 = $vil3['firstname'];
                $lnv3 = $vil3['lastname'];
                $linkv3 = $vil3['link'];
            }
            ?>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
 <h2 title="South's Villains">South's Villains</h2>
                 
                  <a href="villains_details?id=<?php echo $idv3; ?>&link=<?php echo $linkv3; ?>"><img src="<?php echo $vil_img3; ?>" alt="Villain 1" class="" height="262" width="350"></a>
                <a href="villains_details?id=<?php echo $idv3; ?>&link=<?php echo $linkv3; ?>" class="btn btn-link mt-3"> <h3><?php echo $role3; ?></h3></a>
              <div class="details">
                <a href="south_villains" class="btn btn-link" title="See More South Villains">More Villains</a>

              </div>
              
            </div>
          </div>
            
            </div>
            
            
            
          </div>
        </div>
      </section>
      
      <!--==========================
      Ads Section
    ============================-->
    
    
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
      
    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Get Updates</h2>
        
        </div>

        <form method="post">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="email" name="email" class="form-control" placeholder="Enter your Email">
            </div>
              <input type="hidden" name="date" value="<?php
                                                                  $date = new DateTime('2000-01-01', new DateTimeZone('Asia/Calcutta'));
                                                                  echo $today = date("Y-m-d H:i:s");  ?>">
            <div class="col-auto">
              <button type="submit" name="submit">Subscribe</button>
            </div>
          </div>
        </form>
<?php
          if(isset($_POST['submit']))
          {
              $email = mysqli_real_escape_string($con, $_POST['email']);
              $date = $_POST['date'];
              $sql = mysqli_query($con, "INSERT INTO subscribers(id, email, date)
              VALUES('', '$email', '$date')
              ");
              
              if(boolval($sql) == 1)
              {
                  echo "<script>window.alert('Thank you for subscribing our letter..!')</script>";
              }
          }
          ?>
      </div>
    </section>

    <!-- ads -->
<!--==========================
      Ads Section
    ============================-->
    
    
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

  </main>


<?php
      include"footer.php";
      ?>