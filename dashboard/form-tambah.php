<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<!-- Title Page-->
<title>Forms</title>

<!-- Fontfaces CSS-->
<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">
<!-- CSS SHAKE -->
<link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake-slow.min.css">

<body>
    <div class="col-lg-6 offset-lg-3 mt-5 mb-5">
        <div class="card">
            <div class="card-header text-center">
                <strong>Form</strong> Tambah Data
            </div>
            <div class="card-body card-block">
                <form action="tambah.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class="form-control-label">Judul</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="judul" placeholder="Masukkan Judul..." class="form-control">
                            <small class="form-text text-muted">Judul Yang Tepat Untuk Website Anda</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class="form-control-label">ISI</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="isi" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                            <small class="form-text text-muted">ISI yang tepat untuk Website anda</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Gambar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="gambar" class="form-control-file">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>