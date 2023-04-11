<?php
    require "libs/vars.php";
    require "libs/functions.php";

    //php kodları ile create.php içindeki formu çağıralım
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $baslik = $_POST["baslik"]; 
        $aciklama = $_POST["aciklama"]; 
        $resimurl = $_POST["resimurl"]; 

        //functions.php içindeki filmEkle fonksiyonunu kullanalım
        filmEkle($filmler, $baslik, $aciklama, $resimurl);
    }
    //bu şekilde yeni film eklenir ancak şuan hafızada tutulmuyor
    //hafızada tutmak için ayrı bir txt dosyası/klasör/veri tabanına ihtiyaç var
?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>
    
    <div class="container my-3">
    
        <div class="row">

            <div class="col-3">
            <?php include "views/_menu.php" ?>
            </div>
            <div class="col-9">
                
                <?php include "views/_title.php" ?>

                <?php include "views/_blog-list.php" ?>


            </div>
        
        
        </div>
    
    </div>


<?php include "views/_footer.php" ?>