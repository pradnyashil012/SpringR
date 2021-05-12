<?php
session_start();
include"db.php";
include"header.php";
$hero = $_SESSION['hero'];
if($hero == " ")
{
    echo "<script>window.location='hero_login.php'</script>";
}
else
{ 
?>
           
            
<div class="main-content-inner">
               
                <!-- order list area start -->
                
     <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">New Artists</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-tr">
                                        <td><a href="hindi_na.php">Hindi</a></td>
                                        <td><a href="marathi_na.php">Marathi</a></td>
                                       <td><a href="punjabi_na.php">Punjabi</a></td>
                                       <td><a href="rapper_na.php">Rapper</a></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <hr />
                </div>
            </div>

            <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">New Singer's Songs</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-tr">
                                        <td><a href="hindi_songs.php">Hindi</a></td>
                                        <td><a href="marathi_songs.php">Marathi</a></td>
                                       <td><a href="punjabi_songs.php">Punjabi</a></td>
                                       <td><a href="rap_songs.php">Raps</a></td>
                                       <td><a href="na_album.php">Albums</a></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <hr />
                </div>
            </div>
             <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">New Songs Albums</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-tr">
                                       <td><a href="na_album">New Songs Album</a></td> 
                                       <td><a href="viral_ones">Viral Ones</a></td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

    
    <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Villains</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-tr">
                                        <td><a href="villains_type.php">Villains</a></td>
                                       
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <hr />
                </div>
                 
                    
   
            </div>
        </div>
        <!-- main content area end -->
        <?php
            include"footer.php";
}
            ?>