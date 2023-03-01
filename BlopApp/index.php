<?php
     /*
        1- kategoriler dizisinin sonuna "Bilim Kurgu" kategorisini ekleyiniz.
        2- kategorileri alfabetik olarak sıralayınız.
        3- filmler dizisinin başına bir film ekleyiniz.
        4- filmleri rastgele sıralayınız.
        5- h1 etiketinin altına "5 kategoride 3 film listelenmiştir" yazısını dizi eleman sayılarına göre yazdırınız.
    */

    $kategoriler = array("Macera", "Dram", "Komedi", "Korku");

    array_push($kategoriler, "Bilim Kurgu");

    sort($kategoriler);

    $filmler = array(
        "1"=> array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "106",
            "vizyon" =>"evet"
        ),
        "2"=> array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "1023",
            "vizyon" =>"hayır"
        )
    );

    $yeni_film = array(
        "baslik" => "yeni film",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "3.jpeg",
        "yorumSayisi" => "236",
        "begeniSayisi" => "1023",
        "vizyon" =>"hayır"
    );

    /*
    array_unshift($filmler, $yeni_film);
    ya da 
    */

    $filmler["0"] = $yeni_film;
    ksort($filmler);

    shuffle($filmler);

    //print_r($filmler);
    


    $filmler["1"]["aciklama"] = strtolower($filmler["1"]["aciklama"]);
    $filmler["1"]["aciklama"] = ucfirst($filmler["1"]["aciklama"]);

    $filmler["2"]["aciklama"] = strtolower($filmler["2"]["aciklama"]);
    $filmler["2"]["aciklama"] = ucfirst($filmler["2"]["aciklama"]);

    $filmler["1"]["aciklama"] = substr($filmler["1"]["aciklama"], 0, 200)."...";
    $filmler["2"]["aciklama"] = substr($filmler["2"]["aciklama"], 0, 200)."...";


    $filmler["0"]["url"] = strtolower($filmler["0"]["baslik"]); //film1_baslik ı küçültüp film1_url e attık
    $filmler["0"]["url"] = str_replace([" ", "ç"], ["-", "c"], $filmler["0"]["url"]); //film1_url deki boşlukları - ile değiştirdik //tr karakterleri ing e çevirdik

    $filmler["1"]["url"] = strtolower($filmler["1"]["baslik"]); //film1_baslik ı küçültüp film1_url e attık
    $filmler["1"]["url"] = str_replace([" ", "ç"], ["-", "c"], $filmler["1"]["url"]); //film1_url deki boşlukları - ile değiştirdik //tr karakterleri ing e çevirdik
    
    $filmler["2"]["url"] = strtolower($filmler["2"]["baslik"]); //film1_baslik ı küçültüp film1_url e attık
    $filmler["2"]["url"] = str_replace([" ", "ç"], ["-", "c"], $filmler["2"]["url"]); //film1_url deki boşlukları - ile değiştirdik //tr karakterleri ing e çevirdik
    

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
                    <li class="list-group-item"><?php echo $kategoriler[4] ?></li>
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
                                echo "<img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\">"
                                // class="img-fluid" responsive olması için eklenmeli önemli 
                                
                            ?>
                            
                        </div>
                        
                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title"><?php echo "<a href=\"{$filmler["0"]["url"]}\">{$filmler["0"]["baslik"]}</a>" ?></div>
                                <p class="card-text">
                                <?php echo $filmler["0"]["aciklama"] ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo  $filmler["0"]["yorumSayisi"] ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo  $filmler["0"]["begeniSayisi"] ?> beğeni </span>
                                    <span class="badge bg-warning"> vizyonda: <?php echo  $filmler["0"]["vizyon"] ?> </span>
                                </div>

                            </div>
                        </div>

                    </div>    
                </div>


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
                                <?php echo $filmler["1"]["aciklama"] ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo  $filmler["1"]["yorumSayisi"] ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo  $filmler["1"]["begeniSayisi"] ?> beğeni </span>
                                    <span class="badge bg-warning"> vizyonda: <?php echo  $filmler["1"]["vizyon"] ?> </span>
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
                                <?php echo $filmler["2"]["aciklama"] ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo  $filmler["2"]["yorumSayisi"] ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo  $filmler["2"]["begeniSayisi"] ?> beğeni </span>
                                    <span class="badge bg-warning"> vizyonda: <?php echo  $filmler["2"]["vizyon"] ?> </span>
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
