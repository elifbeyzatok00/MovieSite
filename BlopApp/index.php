<?php

    $kategoriler = array("Macera","Dram","Komedi","Korku","Bilim Kurgu");

    $filmler = array( 
        "1"=> array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "106",
            "vizyon" => true,
            "url" => "paper-lives"
        ),
        "2"=> array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false,
            "url" => "walking-dead"
        )
        ,
        "3"=> array(
            "baslik" => "yeni film 1",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "3.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false,
            "url" => "paper-lives"
        )
        ,
        "4"=> array(
            "baslik" => "yeni film 2",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "1.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi" => "305",
            "vizyon" => false,
            "url" => "paper-lives"
        )
    );    

    // $filmler global olduğu için ulaşmak için & referans olarak kullandık
    function filmEkle(&$filmler, string $baslik, string $aciklama, string $resim, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false){
        //global $filmler;
        $new_item[count($filmler) + 1] = array(
            "baslik" => $baslik,
            "aciklama" => $aciklama,
            "resim" =>  $resim,
            "yorumSayisi" => $yorumSayisi,
            "begeniSayisi" => $begeniSayisi,
            "vizyon" => $vizyon
        );

        $filmler = array_merge($filmler, $new_item);

        
    }

    filmEkle($filmler, "yeni film", "yeni film aciklama", "1.jpeg" );
    filmEkle($filmler, "yeni film 2", "yeni film aciklama", "2.jpeg" );

    function kisaAciklama($aciklama, $limit) {
        if (strlen($aciklama) > $limit) {
            echo substr($aciklama,0,$limit)."...";
        } else {
            echo $aciklama;
        };
    }

    const limit = 100;
    const baslik = "Popüler Filmler";
    $kategoriSayisi = count($kategoriler);
    $filmSayisi = count($filmler);
    $ozet = count($kategoriler)." kategoride ".count($filmler)." film listelenmiştir";

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

                <?php foreach($filmler as $id => $film): ?> 

                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="img/<?php echo $film["resim"] ?>">                          
                                </div>
                                <div class="col-9">
                                    <div class="card-body">                        
                                        <h5 class="card-title"><a href="<?php $film["url"] ?>"> <?php echo $film["baslik"] ?> </a></h5>
                                        <p class="card-text">
                                            <?php kisaAciklama($film['aciklama'], 200); ?>
                                        </p>
                                        <div>

                                            <?php if ($film["yorumSayisi"] > 0): ?>
                                                <span class="badge bg-primary me-1"><?php echo $film["yorumSayisi"] ?> yorum</span>
                                            <?php endif; ?>

                                            <span class="badge bg-primary me-1"><?php echo $film["begeniSayisi"] ?> beğeni</span>

                                            <span class="badge bg-warning me-1">
                                               
                                                <?php if ($film["vizyon"]): ?>
                                                    <span>vizyonda</span>
                                                <?php else: ?>
                                                    <span>vizyonda değil</span>
                                                <?php endif; ?>

                                            </span>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                    }                                 
                
                <?php endforeach; ?>

            </div>
        
        
        </div>
    
    </div>



</body>
</html>