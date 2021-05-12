<?php
$keywords = "Play and Download New Singers Songs, New Hindi Singers, New Punjabi Singers, New Marathi Singers, New Rappers, New Artists, New Indian Singers, New Indian Female Rappers, New Indian Rappers, New Female Rappers";

$description = "Naayab.com is a free website where you can Play and Download New Singers Songs, New Hindi Singers, New Punjabi Singers, New Marathi Singers, New Rappers, New Artists, New Indian Singers, New Indian Female Rappers, New Indian Rappers, New Female Rappers.";

$title = "Naayab.com: New Singers' Albums";
$canonical = "https://www.naayab.com/na_albums_list";
include"header.php";
?>


    <!--==========================
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header mt-5">
          <h1>New Singers Albums</h1>
          <h3>Large Collection of New Singers' Albums.</h3>
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

            $key = $_GET['key'];
          
                        $statement = "na_albums";
          
          $res15 = mysqli_query($con, "SELECT * FROM {$statement} WHERE trending='NO' ORDER BY id DESC");
          
             while($row15 = mysqli_fetch_array($res15))
            {
                $img15 = $row15['image'];
              $id15 = $row15['id'];
              $lyr_title15 = $row15['title'];
              $link15 = $row15['link'];
                
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
               <a href="na_albums?key=<?php echo $lyr_title15; ?>"><img src="<?php echo $img15; ?>" alt="<?php echo $lyr_title15;?>" title="<?php echo $lyr_title15;?>" height="262" width="350"></a>
                <a href="na_albums?key=<?php echo $lyr_title15; ?>" class="btn btn-danger mt-3">Open</a>
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