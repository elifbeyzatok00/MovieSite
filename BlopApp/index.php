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
                    <li class="list-group-item"> Kategori 1 </li>
                    <li class="list-group-item"> Kategori 2 </li>
                    <li class="list-group-item"> Kategori 3 </li>
                    <li class="list-group-item"> Kategori 4 </li>
                </ul>

            </div>
            <div class="col-9">


                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <img class="img-fluid" src="img/1.jpeg" alt="">  
                            <?php // class="img-fluid" responsive olması için eklenmeli önemli ?>
                        </div>

                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title">Film Başlığı</div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam vitae voluptatibus eius ipsa odit labore est provident nam perferendis ut, doloremque qui sunt ea sit suscipit placeat debitis nesciunt?
                                </p>
                                <div>
                                    <span class="badge bg-primary"> 105 yorum </span>
                                    <span class="badge bg-primary"> 105 beğeni </span>
                                    <span class="badge bg-warning"> vizyon </span>
                                </div>

                            </div>
                        </div>

                    </div>    
                </div>

                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <img class="img-fluid" src="img/2.jpeg" alt="">  
                            <?php // class="img-fluid" responsive olması için eklenmeli önemli ?>
                        </div>

                        <div class="col-9">
                            <div class="card-body">
                                <div class="card-title">Film Başlığı</div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam vitae voluptatibus eius ipsa odit labore est provident nam perferendis ut, doloremque qui sunt ea sit suscipit placeat debitis nesciunt?
                                </p>
                                <div>
                                    <span class="badge bg-primary"> 105 yorum </span>
                                    <span class="badge bg-primary"> 105 beğeni </span>
                                    <span class="badge bg-warning"> vizyon </span>
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
