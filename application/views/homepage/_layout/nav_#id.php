<!-- <?php 
$modul = $this->uri->segment(2);
$method = $this->uri->segment(3);
?>

<!--
Fixed Navigation
==================================== -->
<section class="header navigation fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?=base_url('home')?>">
                        <img src="<?=home_assets()?>images/navlogo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="tf-ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item <?= (($modul == 'home' or $modul == '') ? 'active' : '') ?>">
                            <a class="nav-link" href="<?=base_url('home')?>">Home</a>
                          </li>
                          <li class="nav-item <?= (($modul == 'about' or $modul == '') ? 'active' : '') ?>">
                            <a class="nav-link" href="<?=base_url('about')?>">About</a>
                          </li>
                          <li class="nav-item <?= (($modul == 'service' or $modul == '') ? 'active' : '') ?>">
                            <a class="nav-link" href="<?=base_url('service')?>">Service</a>
                          </li>
                          <li class="nav-item <?= (($modul == 'portofolio' or $modul == '') ? 'active' : '') ?>">
                            <a class="nav-link" href="<?=base_url('portofolio')?>">Portofolio</a>
                          </li>
                          <li class="nav-item <?= (($modul == 'contact' or $modul == '') ? 'active' : '') ?>">
                            <a class="nav-link" href="<?=base_url('contact')?>">Contact</a>
                          </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>