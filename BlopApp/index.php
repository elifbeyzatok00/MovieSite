<?php
    $kategoriler = array("Macera", "Dram", "Komedi", "Korku");

    $filmler = array(
        "1"=> array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "106",
            "vizyon" => true
        ),
        "2"=> array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false
        )
    );

    $filmler["1"]["url"] = strtolower($filmler["1"]["baslik"]); //film1_baslik ı küçültüp film1_url e attık
    $filmler["1"]["url"] = str_replace([" ", "ç"], ["-", "c"], $filmler["1"]["url"]); //film1_url deki boşlukları - ile değiştirdik //tr karakterleri ing e çevirdik
    
    $filmler["2"]["url"] = strtolower($filmler["2"]["baslik"]); //film1_baslik ı küçültüp film1_url e attık
    $filmler["2"]["url"] = str_replace([" ", "ç"], ["-", "c"], $filmler["2"]["url"]); //film1_url deki boşlukları - ile değiştirdik //tr karakterleri ing e çevirdik
    
    const limit = 100;
    const baslik = "Popüler Filmler";
    $kategoriSayisi = count($kategoriler);
    $filmSayisi = count($filmler);
    $ozet = "$kategoriSayisi kategoride $filmSayisi film listelenmiştir";
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
                    <li class="list-group-item"><?php echo $kategoriler[0] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[1] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[2] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[3] ?></li>
                </ul>

            </div>
            <div class="col-9">
                <h1 class="mb-4"><?php echo baslik ?></h1>
                <p class="text-muted">
                <?php echo $ozet ?>
                </p>

                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php
                                echo "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">"
                                // class="img-fluid" responsive olması için eklenmeli önemli 
                                
                            ?>
                            
                        </div>
                        
                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title"><?php echo "<a href=\"{$filmler["1"]["url"]}\">{$filmler["1"]["baslik"]}</a>" ?></div>
                                <p class="card-text">
                                    <?php
                                        if(strlen($filmler["1"]["aciklama"]) > limit){
                                            echo substr($filmler["1"]["aciklama"],0,limit)."...";
                                            // $filmler["1"]["aciklama"] değişkeninde 0'dan başla limit kadar al.Sonuna ... ekle.
                                        }else{
                                            echo $filmler["1"]["aciklama"] ;
                                        }
                                    ?>
                                </p>
                                <div>
                                    
                                    <?php
                                        if($filmler["1"]["yorumSayisi"] > 0){
                                            echo "<span class=\"badge bg-primary\">{$filmler["1"]["yorumSayisi"]} yorum</span>";
                                    
                                        }
                                        
                                    ?>

                                    <span class="badge bg-primary"><?php echo  $filmler["1"]["begeniSayisi"] ?> beğeni </span>


                                    <span class="badge bg-warning"> 
                                        <?php 
                                            if($filmler["1"]["vizyon"]){
                                                echo "vizyonda" ;
                                            }else {
                                                echo "vizyonda değil" ;
                                            }
                                            
                                        ?> 
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>    
                </div>

                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php
                                echo "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">"
                                
                            ?>
                            
                        </div>
                        
                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title"><?php echo  "<a href=\"{$filmler["2"]["url"]}\">{$filmler["2"]["baslik"]}</a>" ?></div>
                                <p class="card-text">
                                <?php
                                        if(strlen($filmler["2"]["aciklama"]) > limit){
                                            echo substr($filmler["2"]["aciklama"],0,limit)."...";
                                            // $filmler["2"]["aciklama"] değişkeninde 0'dan başla limit kadar al.Sonuna ... ekle.
                                        }else{
                                            echo $filmler["2"]["aciklama"] ;
                                        }
                                    ?>
                                </p>
                                <div>
                                    <?php
                                        if($filmler["2"]["yorumSayisi"] > 0){
                                            echo "<span class=\"badge bg-primary\">{$filmler["2"]["yorumSayisi"]} yorum</span>";
                                    
                                        }
                                        
                                    ?>
                                    <span class="badge bg-primary"><?php echo  $filmler["2"]["begeniSayisi"] ?> beğeni </span>

                                    <span class="badge bg-warning"> 
                                        <?php 
                                            if($filmler["2"]["vizyon"]){
                                                echo "vizyonda" ;
                                            }else {
                                                echo "vizyonda değil" ;
                                            }
                                            
                                        ?> 
                                    </span>
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
