<?php

$keywords = "New Indian Singers, New Indian Rappers, New Punjabi Singers, New Hindi Singers, New Singers, New Singers Songs, New Singers Punjabi, New Singers Bollywood, New Singers India, New Rappers, Best Female Rappers, New Punjabi songs, New Hindi Songs, New Marathi Songs, New Raps. ";

$description = "Naayab.com is a free website where you can find New Indian Singers, New Indian Rappers, New Punjabi Singers, New Hindi Singers, New Singers, New Singers Songs, New Singers Punjabi, New Singers Bollywood, New Singers India, New Rappers, Best Female Rappers, New Punjabi songs, New Hindi Songs, New Marathi Songs, New Raps.";

$title = "Naayab.com: Find Songs You Want!";

$canonical = "https://www.naayab.com/search_songs.php";

include"header.php";

if($_GET['q'] == ''){
    
    ?>
<script type="text/javascript">
    alert("Search something...");
window.location = "index.php";
</script>
<?php
}
if($_GET['q'] !== ''){ 

include"db.php";

$q = $_GET['q'];

?>

<!--==========================
      Ads Section
    ============================-->
    
    
    <section id="gallery" class="section-with-bg wow fadeInUp">

      <div class="container">
          <div class="col-md-12 mt-5">
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
      Lyrics Section
    ============================-->

       <section id="status" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h1>New Singer's Song</h1>
          <h3>Here you will find a large collection of New Indian Singers &amp; Songs.</h3>
          <br />
        </div>
          
<hr />
        <div class="row">
                    
       
            
            <?php 
          
            $result = mysqli_query($con, "SELECT * FROM na_songs WHERE keywords LIKE '%$q%' ORDER BY id DESC");
                        if(mysqli_num_rows($result) > 0)
                        { 
                        
                        while($row1 = mysqli_fetch_array($result)){
                            
                             $lyr_title = $row1['title'];
                $link = $row1['link'];
              
          ?>
                 <div class="col-lg-4 col-md-6">
            <div class="speaker">
                
                <a href="na_song_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>"><img src="<?php echo $row1['image']; ?>" alt="New Song" height='262' width='350'></a>
                <a href="na_song_details?id=<?php echo $row1['id']; ?>&link=<?php echo $link; ?>" class="btn btn-danger mt-3">Open</a>
              <div class="details">
                  <p><?php echo $row1['title'];?></p>
                
                </div>
              </div>
            </div>
            <?php
                            
                        }
                        }
    else{
        echo"<h1 style='color: grey;'>"; echo "No Search Result Found...' "; echo $q; echo" ' </h1>";
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

}

?>