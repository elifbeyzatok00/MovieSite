<?php
    require "libs/vars.php";
    require "libs/functions.php";
?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>
    
    <div class="container my-3">
    
        <div class="row">

            <div class="col-3">
            <?php include "views/_menu.php" ?>
            </div>
            <div class="col-9">
                
                <div class="card">
                    <div class="card-body">

                        <!-- action="index.php" sayesinde form index.php'ye gönderilir ve kayıt ekleme işlemi orada gerçekleştirilir
                            bu yüzden index.php içinde php kodları ile bu formu çağıralım
                        -->
                        <form action="index.php" method="POST">
                            <div class="mb-3">
                                <label for="baslik" class="form-label">Başlık</label>
                                <input type="text" class="form-control" name="baslik" id="baslik">
                            </div>

                            <div class="mb-3">
                                <label for="aciklama" class="form-label">Açıklama</label>
                                <textarea name="aciklama" id="" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="resimurl" class="form-label">Resim</label>
                                <input type="text" class="form-control" name="resimurl" id="resimurl">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-primary">

                        </form>
                    </div>
                </div>


            </div>
        
        
        </div>
    
    </div>


<?php include "views/_footer.php" ?>