<?php

    if(!empty($_GET['q'])){ // q içerisi boş değilse burası çalışır
        $keyword = $_GET['q'];

                // array_filter ile $filmler listesindeki her eleman $film yerine kopyalanacak
        $filmler = array_filter($filmler, function($film) use ($keyword){ //use ($keyword) ile yukarıdaki değişkeni array_filter() fonk. içinde de kullanılabilir hale getirdik
        //$filmler = ile esas $filmler listemizi ezdik. Sadece search kısmında aranan bilgileri içeren filmler dönecek

            //stristr string içinde string arayacağız. $film['baslik'] içinde $keyword'ü ya da $film['aciklama'] içinde $keyword'ü arayacağız. Bulursak true olur return ile dönerler.
            return (stristr($film['baslik'], $keyword) or stristr($film['aciklama'], $keyword)) ;
        });
        
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="/" class="navbar-brand">BlogApp</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Link 1</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 3</a>
                </li>
            </ul>

            <!-- action="index.php" ile butona tıklandığı zaman bu form index.php'ye gidecek-->
            <form class="d-flex" action="index.php" method="GET">
                <input type="text" name="q" class="form-control me-2" placeholder="Search">
                <button class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </div>
</nav>