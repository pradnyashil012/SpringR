<?php

$keywords = "lyrics, lyricists, indian lyricists, b praak, majrooh sultanpuri, a r rahman, A. R. Rahman, Jaani, Sampooran (Gulzar) Singh Kalra, Anand Bakshi, Javed Akhtar, Nida Fazli, Prem Dhawan, Aditya Dhar, Surabhi Dashputra, Vishal Bhardwaj, Amitabh Bhattacharya, Tanishk Bagchi, greatest poets, artists, bollywood, hindi lyricists, urdu lyricists, urdu poets";

$description = "Naayab.com is a free website where you can find the best Indian Lyricists, Lyrics, Hindi Lyricists, Urdu Lyricists, Urdu Poets, Hindi Poets.";

$title = "Naayab.com: Find Greatest Lyricists!";
$canonical = "https://www.naayab.com//lyricists.php";

include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h1>Lyricists</h1>
          <h3>Here you will find a large collection of Lyricists.</h3>
          <br />
        </div>
          
          <!-- ads row-->
           
           <!-- ads row-->
<hr />
        <div class="row">
            
            <?php 
                        $statement = "lyricist";
          
          $res1 = mysqli_query($con, "SELECT * FROM {$statement} WHERE  trending='NO' ORDER BY id DESC LIMIT {$startpoint}, {$limit}");
          
            while($row1 = mysqli_fetch_array($res1))
            {
                $fn = $row1['firstname'];
                $ln = $row1['lastname'];
                $link = $row1['link'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="lyricist_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="Lyricist: <?php echo $fn; echo " "; echo $ln; ?>" title="Lyricist: <?php echo $fn; echo " "; echo $ln; ?>" height="262" width="350"></a>
                <a href="lyricist_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                  <h5><?php echo $fn; ?> <?php echo $ln; ?></h5>
                
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
          
    </section>

 



 <?php
include"footer.php";
?>