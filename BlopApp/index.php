<?php

    $kategori1 ="Macera";
    $kategori2 ="Dram";
    $kategori3 ="Komedi";
    $kategori4 ="Korku";
  
    $film1_baslik="Paper Lives";
    $film1_aciklama="Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $film1_resim="1.jpeg";
    $film1_yorumSayisi="23";
    $film1_begeniSayisi="106";
    $film1_vizyon="evet";


    $film2_baslik="Walking Dead";
    $film2_aciklama="Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $film2_resim="2.jpeg";
    $film2_yorumSayisi="236";
    $film2_begeniSayisi="1023";
    $film2_vizyon="hayır";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog App</title>
</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1 ?></li>
                    <li class="list-group-item"><?php echo $kategori2 ?></li>
                    <li class="list-group-item"><?php echo $kategori3 ?></li>
                    <li class="list-group-item"><?php echo $kategori4 ?></li>
                </ul>

            </div>
            <div class="col-9">


                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php
                                echo "<img class=\"img-fluid\" src=\"img/{$film1_resim}\">"
                                // class="img-fluid" responsive olması için eklenmeli önemli 
                                
                            ?>
                            
                        </div>
                        
                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title"><?php echo  $film1_baslik ?></div>
                                <p class="card-text">
                                <?php echo $film1_aciklama ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo  $film1_yorumSayisi ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo  $film1_begeniSayisi ?> beğeni </span>
                                    <span class="badge bg-warning"> vizyonda: <?php echo  $film1_vizyon ?> </span>
                                </div>

                            </div>
                        </div>

                    </div>    
                </div>

                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php
                                echo "<img class=\"img-fluid\" src=\"img/{$film2_resim}\">"
                                
                            ?>
                            
                        </div>
                        
                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title"><?php echo  $film2_baslik ?></div>
                                <p class="card-text">
                                <?php echo $film2_aciklama ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo  $film2_yorumSayisi ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo  $film2_begeniSayisi ?> beğeni </span>
                                    <span class="badge bg-warning"> vizyonda: <?php echo  $film2_vizyon ?> </span>
                                </div>

                            </div>
                        </div>

                    </div>    
                </div>

                

            </div>

        </div>
    </div>
    
</body>
</html>
