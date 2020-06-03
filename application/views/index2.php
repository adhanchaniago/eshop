<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>EShop</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/front/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/font-awesome/css/font-awesome.min.css">
 

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?= base_url(); ?>assets/front/css/mdb.min.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/front/css/style.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-new {
            margin-top: 0;
        }

        .navbar {
            background-color: #414a5c;
        }

        footer.page-footer {
            background-color: #414a5c;
            margin-top: 2rem;
        }

        .list-group-item.active {
            background-color: #afb3c0;
            border-color: #afb3c0;
        }

        .list-group-item:not(.active) {
            color: #222;
        }

        .list-group-item:not(.active):hover {
            color: #666;
        }

        .card {
            font-weight: 300;
        }

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>
</head>

<body>

    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>home">EShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url(); ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                       

                         <?php if ($this->session->userdata('user_login')) { ?>


                        <li class="nav-item btn-group" >
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-activates="drop1"> <?= ucwords($this->session->userdata('name')); ?>
                            </a>
                            <div class="dropdown-menu"   id="drop1">
                                <a class="dropdown-item" href="<?= base_url(); ?>home/profil">Profil</a>
                                <a class="dropdown-item" href="<?= base_url(); ?>home/password">Ubah Password</a>
                                <a class="dropdown-item" href="<?= base_url(); ?>home/transaksi">Transaksi</a>
                                <a class="dropdown-item" href="<?= base_url(); ?>home/logout">Logout</a>
                            </div>
                        </li>
                        <?php } else { ?>

                         <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>home/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>home/registrasi">Registrasi</a>
                        </li>
                         <?php } ?>
                  <li class="nav-item">
                     <a  class="nav-link" href="<?= base_url(); ?>cart">
                        <?php
                        if ($this->cart->total() > 0) {
                           echo 'Rp. '.number_format($this->cart->total(), 0, ',', '.');
                        } else {
                           echo 'cart';
                        }
                        ?>
                     </a>
                  </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>

    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row mt-4">

                <!--Sidebar-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                    <div class="widget-wrapper" data-activates="kat1">
                        <h4 class="h4-responsive font-bold mb-3">Kategori:</h4>
                        <br>
                        <div class="list-group" id="kat1">
                        <?php foreach ($kategori->result() as $kat): ?>
                           <a href="<?=base_url();?>home/kategori/<?=$kat->url;?>" class="list-group-item"> <?=$kat->kategori;?></a>
                        <?php endforeach; ?>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                   

                    <!--Second row-->
                    <div class="item">

                         <?= $content; ?>

                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer links-->
        <div class="container">
            <div class="row mt-4">
                <!--First column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title mb-3">
                        <strong>About material design</strong>
                    </h5>
                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                        and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>First column</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 1</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 2</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 3</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>Second column</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 1</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 2</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 3</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>Third column</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 1</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 2</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 3</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>assets/front/#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href="<?= base_url(); ?>home"> Eshop </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/front/js/jquery-3.1.1.min.js"></script>

    

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/front/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/front/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/front/js/mdb.min.js"></script>

    <script type="text/javascript">
        new WOW().init();
        $(".button-collapse").sideNav();
         $(".modal").modal();

         $(document).ready(function() {
         <?php if($this->uri->segment(1) == 'checkout' || $this->uri->segment(1) == 'Checkout') { ?>

               $('#prov').change(function() {
                  var prov = $('#prov').val();
                  var province = prov.split(',');

                  $.ajax({
                     url: "<?=base_url();?>checkout/city",
                     method: "POST",
                     data: { prov : province[0] },
                     success: function(obj) {
                        $('#kota').html(obj);
                     }
                  });
               });

               $('#kota').change(function() {
                  var kota = $('#kota').val();
                  var dest = kota.split(',');
                  var kurir = $('#kurir').val()

                  $.ajax({
                     url: "<?=base_url();?>checkout/getcost",
                     method: "POST",
                     data: { dest : dest[0], kurir : kurir },
                     success: function(obj) {
                        $('#layanan').html(obj);
                     }
                  });
               });

               $('#kurir').change(function() {
                  var kota = $('#kota').val();
                  var dest = kota.split(',');
                  var kurir = $('#kurir').val()

                  $.ajax({
                     url: "<?=base_url();?>checkout/getcost",
                     method: "POST",
                     data: { dest : dest[0], kurir : kurir },
                     success: function(obj) {
                        $('#layanan').html(obj);
                     }
                  });
               });

               $('#layanan').change(function() {
                  var layanan = $('#layanan').val();

                  $.ajax({
                     url: "<?=base_url();?>checkout/cost",
                     method: "POST",
                     data: { layanan : layanan },
                     success: function(obj) {
                        var hasil = obj.split(",");

                        $('#ongkir').val(hasil[0]);
                        $('#total').val(hasil[1]);
                     }
                  });
               });

         <?php } ?>
            $(window).scroll(function(){
               if ($(this).scrollTop() > 100) {
                  $('.back-top').fadeIn();
                } else {
                  $('.back-top').fadeOut();
               }
            });
            $('.back-top').click(function(){
               $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
         });
    </script>

</body>

</html>