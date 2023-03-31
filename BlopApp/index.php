<?php

    $kategoriler = array("Macera","Dram","Komedi","Korku","Bilim Kurgu");

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
        ,
        "3"=> array(
            "baslik" => "yeni film 1",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "3.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false
        )
        ,
        "4"=> array(
            "baslik" => "yeni film 2",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "1.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false
        )
    );    

    foreach ($filmler as $key => $film) {
        $filmler[$key]["url"] = strtolower($filmler[$key]["baslik"]);
        $filmler[$key]["url"] = str_replace([" ","ç"],["-","c"],$filmler[$key]["url"]);
    }

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
    
    <div class="container my-5">
    
        <div class="row">

            <div class="col-3">
                <ul class="list-group">
                    <?php
                        foreach($kategoriler as $kategori) {
                            echo '<li class="list-group-item">'.$kategori.'</li>';
                        };
                    ?>                   
                </ul>
            </div>
            <div class="col-9">
                <h1 class="mb-4"><?php echo baslik?></h1>
                <p class="text-muted">
                    <?php echo $ozet?>
                </p>

                <?php     

                    foreach($filmler as $id => $film) {

                        echo  '<div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="img/'.$film["resim"].'">                          
                                </div>
                                <div class="col-9">
                                    <div class="card-body">                        
                                        <h5 class="card-title"><a href="'.$film["url"].'">'.$film["baslik"].'</a></h5>
                                        <p class="card-text">';
                                            
                                            if (strlen($film["aciklama"]) > limit) {
                                                echo substr($film["aciklama"],0,limit)."...";
                                            } else {
                                                echo $film["aciklama"];
                                            };

                                        echo '</p><div>';

                                            if ($film["yorumSayisi"] > 0) {
                                                echo '<span class="badge bg-primary me-1">'.$film["yorumSayisi"].' yorum</span>';
                                            };

                                            echo '<span class="badge bg-primary me-1">'.$film["begeniSayisi"].' beğeni</span>';

                                            echo '<span class="badge bg-warning me-1">';
                                               
                                            if ($film["vizyon"]) {
                                                echo "vizyonda";
                                            } else {
                                                echo "vizyonda değil";
                                            };

                                        echo '</span>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>';

                    }                                 
                
                ?>

            </div>
        
        
        </div>
    
    </div>



</body>
</html>