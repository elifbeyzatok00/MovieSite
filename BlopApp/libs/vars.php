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
            "aciklama" => "Zombi lives kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
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

    const baslik = "Popüler Filmler";
    //  $ozet = count($kategoriler).' kategoride '.count($filmler).'  film listelenmiştir';
    /*  $ozet bilgisine filtreleme yapıldıktan sonra ulaşmalıyız. Yoksa istenen bilgi yanlış döner.
        Bu yüzden index.php sayfasını incelediğimizde _navbar.php'ın tanımlandığı satırın  altında tanımlanmalı.
        _title.php içine taşıyalım
    */
?>