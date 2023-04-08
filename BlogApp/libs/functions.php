<?php 
    function filmEkle(&$filmler, string $baslik, string $aciklama, string $resim, int $yorumSayisi=0,int $begeniSayisi=0,bool $vizyon=false) {
        
        $new_item[count($filmler) + 1] = array(
            "baslik" => $baslik,
            "aciklama" => $aciklama,
            "resim" => $resim,
            "yorumSayisi" => $yorumSayisi,
            "begeniSayisi" => $begeniSayisi,
            "vizyon" => $vizyon
        );

        $filmler = array_merge($filmler, $new_item);

        foreach ($filmler as $key => $film) {
            $filmler[$key]["url"] = strtolower($filmler[$key]["baslik"]);
            $filmler[$key]["url"] = str_replace([" ","ç"],["-","c"],$filmler[$key]["url"]);
        }
    }

    function kisaAciklama($aciklama, $limit) {
        if (strlen($aciklama) > $limit) {
            echo substr($aciklama,0,$limit)."...";
        } else {
            echo $aciklama;
        };
    }

?>