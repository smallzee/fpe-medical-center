<div class="page-header">
    <div class="page-header-carousel owl-carousel owl-theme">
        <?php if(!empty($banner)){ ?>
            <?php foreach($banner as $value): ?>
                <div class="carouselItem">
                    <div class="carousel-item-img" style="background-image: url(<?= (!empty($value->image)?base_url($value->image):base_url('assets_web/img/placeholder/banner_slider.png'))?>)"></div>
                </div>
            <?php endforeach; ?>
        <?php }?>
    </div>
    <div class="page-header-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="" class="carousel-item-content">
                        <h3><?= display('you_need_help')?></h3>
                        <div>
<!--                            --><?php //
//                            if(!empty($setting->phone)){
//                                $phone = explode(",",$setting->phone);
//                                echo $phone[1];
//                             }
//                            ?>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="header-text">
                                <h2><?= (!empty($section['about']['title'])?$section['about']['title']:null)?></h2>
                                <p><?= (!empty($section['about']['description'])?$section['about']['description']:null)?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <nav class="breadcrumbs">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url()?>"><?= display('home')?></a></li>
                                    <li class="breadcrumb-item active"><?= display('about_us')?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.Page header -->
<div class="team-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                <div class="section-title">
                    <h2>Design and implementation of medical center</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="o-separator">
                    <hr><p class="o-separator-text">Supervisor</p><hr>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <h4>Mr Nwakpe Chris</h4>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="o-separator">
                    <hr><p class="o-separator-text">Developed By</p><hr>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            if(!empty($nurses)){
                foreach ($nurses as $nurse) {
            ?>
            <div class="col-sm-6 col-md-3 col-lg-2">
                <article class="team-member">
                    <div class="member-header">
                        <a href="<?= base_url('nurses/profile/'.$nurse->user_id)?>"><img src="<?= (!empty($nurse->picture)?base_url($nurse->picture):base_url('assets_web/img/placeholder/profile.png'))?>" class="img-fluid" alt=""></a>
                        <ul class="member-social list-unstyled">
                            <li><a href="<?= $nurse->facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $nurse->twitter;?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= $nurse->dribbble;?>"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="member-info">
                        <h5 class="member-name m-0"><?= $nurse->firstname.' '. $nurse->lastname;?></h5>
                        <p><?= $nurse->designation; ?></p>
                    </div>
                </article>
            </div>
            <?php } } ?>

        </div>
    </div>
</div>
