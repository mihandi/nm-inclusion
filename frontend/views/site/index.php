﻿<?php
$articles_path = '/blog/article?id=';
$articles_image_path = '/elfinder/global/article_';
$articles = array_chunk($recent,3);

$testemonials = array_chunk([1,2,3,4,5,6],2);
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Перемога!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<!-- INTRO-->
<!-- START REVOLUTION SLIDER-->
<div class="slide rev_slider_wrapper fullwidthbanner-container">
    <div class="js-slide rev_slider fullwidthabanner" style="display:none;" data-version="5.4.5" data-slide-layout="fullscreen" data-slide-container=".header" data-slide-bullets="false">
        <ul>
            <!-- LAYER No.1-->
            <li class="revo-layer-1" data-transition="fade" data-slotamount="7" data-masterspeed="500">
                <img class="rev-slidebg" src="images/slide-01.jpg" alt="#" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" />
                <div class="tp-caption tp-resizeme revo-cap-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                     data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['0', '0', '0', '-100']" data-width="['1170', '970', '768', '480']" data-whitespace="normal" data-textAlign="[center']" data-fontsize="[72, 72, 72, 72]"
                     data-lineheight="[72, 72, 72, 72]" data-fontweight="700" data-color="#fff">МЫ ЭТО</div>
                <div class="tp-caption tp-resizeme revo-cap-2" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1600,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1100,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                     data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']" data-voffset="['110', '110', '110', '20']" data-width="['1170', '970', '768', '480']" data-whitespace="normal" data-textAlign="[center']" data-fontsize="[72, 72, 72, 72]"
                     data-lineheight="[72, 72, 72, 72]" data-fontweight="700" data-color="#fff">НЕОБМЕЖЕНI МОЖЛИВОСТI</div>
            </li>
        </ul>
    </div>
    <a class="mouse-wheel" href="#down">
        <span class="mouse-wheel-inner"></span>
    </a>
</div>
<!-- END INTRO-->
<div id="down"></div>
<!-- section about-->
<section class="section section-about bg-white p-t-120 p-b-135">
    <div class="container">
        <article class="section-inner">
            <h3 class="section-heading m-b-40">НЕМНОЖКО О НАС </h3>
            <div class="row justify-content-center">
                <div class="col">
                    <p class="ab-text">
                        Ціль організації "Необмежені можливості" спонукати до створення рівних прав та можливосткй
                        людей з інвалідністю з іншими громадянами України.
                    </p>
                    <div class="ab-sign">
                        <img src="images/icons/sign-01.png" alt="Sign">
                    </div>
                    <div class="ab-btn">
                        <a class="au-btn au-btn-border au-btn-radius wow zoomIn" href="#">DOWNLOAD CV</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<!-- end section about-->

<!-- section services-->


<!-- section statistic-->
<div class="section section-statistic section-statistic-cover p-t-165 p-b-165" style="background: url('images/bg-section-01.jpg') center center / cover fixed no-repeat;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="section-inner">
            <ul class="list-reset row justify-content-center">
                <li class="col-md-3 col-sm-6">
                    <div class="box box-number">
                        <span class="number counterUp">69</span>
                        <span class="title">PROJECTS</span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="box box-number">
                        <span class="number counterUp">12</span>
                        <span class="title">DESIGN AWARDS</span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="box box-number">
                        <span class="number counterUp">7918</span>
                        <span class="title">WORKING HOURS</span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="box box-number">
                        <span class="number counterUp">896</span>
                        <span class="title">COFFEE</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end section statistic-->

<!-- section blog-->
<section class="section section-blog bg-white p-t-120 p-b-135">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-55">СТАТЬИ</h3>
            <div class="js-slick slick-arrow-style-1 bo-list" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                 data-slick-dotsClass="slick-dots dots-style-1">
                <?php foreach ($articles as $recent): ?>
                    <div class="item">
                        <div class="row">
                            <?php foreach ($recent as $article): ?>
                                <div class="col-lg-4 col-md-6">
                                <article class="box-primary box-blog">
                                    <figure class="box-figure">
    <!--                                    --><?//= var_dump($articles_image_path.$article['id'].'/'.$article['image']);die();?>
                                        <a href="<?= $articles_path.$article['id']?>">
                                            <img class="box-image blog-image" src="<?= $articles_image_path.$article['id'].'/'.$article['image']?>" alt="MOBILE FIRST &amp; RESPONSIVE" />
                                        </a>
                                    </figure>
                                    <header class="box-header">
                                        <h3 class="box-title blog-title">
                                            <a href="<?= $articles_path.$article['id']?>"><?= $article['title']?></a>
                                        </h3>
                                    </header>
                                    <p class="box-text"><?= substr($article['description'],0,400).'...'?></p>
                                    <footer class="box-footer">
                                        <a class="blog-link" href="<?= $articles_path.$article['id']?>">Продолжить чтение</a>
                                    </footer>
                                </article>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end latest blog-->

<!-- section testimonials-->
<section class="section section-testi bg-grey-1 p-t-110 p-b-135">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-55">ОТЗЫВЫ КЛИЕНТОВ</h3>
            <div class="js-slick slick-arrow-style-1 te-list" data-slick-lg="1" data-slick-dots="true" data-slick-dotsClass="slick-dots dots-style-1">
                <?php foreach ($testemonials as $block): ?>
                    <div class="item">
                        <div class="row">
                            <?php foreach ($block as $testemonial): ?>
                            <div class="col-lg-6 col-md-12">
                                <article class="box-primary box-testi">
                                    <figure class="box-figure">
                                        <a href="#">
                                            <img class="box-image testi-image" src="images/avatar-01.jpg" alt="CRYSTAL ELLIOTT, ENVATO" />
                                        </a>
                                    </figure>
                                    <div class="box-body">
                                        <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et, viverra et est. Phasellus accumsan dapibus nunc quis gravida. Nam quis purus erat. Suspendisse convallis molestie
                                            ullamcorper
                                        </p>
                                        <p class="box-title testi-title">CRYSTAL ELLIOTT, ENVATO</p>
                                    </div>
                                </article>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<!-- end section testimonials-->
<?php
/*
<!-- section partner-->
<section class="section section-partner bg-white p-t-120 p-b-125">
    <div class="container">
        <div class="section-inner">
            <div class="js-slick pt-list row" data-slick-lg="5" data-slick-md="4" data-slick-sm="3" data-slick-xs="2" data-slick-autoplay="true" data-slick-loop="true">
                <div class="col">
                    <div class="box-partner wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <img src="images/icons/partner-01.png" alt="Partner">
                    </div>
                </div>
                <div class="col">
                    <div class="box-partner wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                        <img src="images/icons/partner-02.png" alt="Partner">
                    </div>
                </div>
                <div class="col">
                    <div class="box-partner wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                        <img src="images/icons/partner-03.png" alt="Partner">
                    </div>
                </div>
                <div class="col">
                    <div class="box-partner wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
                        <img src="images/icons/partner-04.png" alt="Partner">
                    </div>
                </div>
                <div class="col">
                    <div class="box-partner wow zoomIn" data-wow-duration="0.5s" data-wow-delay="1s">
                        <img src="images/icons/partner-05.png" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section partner-->
*/
?>
<!-- section contact-->
<section class="section section-contact bg-dark-1 p-t-120 p-b-135">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-90">Напишите нам</h3>
            <div class="messages" id="status"></div>

            <form  method="post" action="/site/contact?action=index">
            <div class="row co-form-input">
                    <div class="col-xl-6 col-lg-12">
                        <div class="input-item">
                            <div class="input-title">
                                <span class="input-label input-label-white">Ваше имя*</span>
                            </div>
                            <input class="au-input au-input-white au-input-radius" type="text" id="name" name="ContactForm[name]" value="<?= isset($model['name'])?$model['name']:''?>" required>
                            <?php if(isset($model->errors['name'])):?>
                                <?php errr($model->errors['name']); ?>
                            <?php endif;?>
                        </div>
                        <div class="input-item">
                            <div class="input-title input-label-white">
                                <span class="input-label">Ваш email*</span>
                            </div>
                            <input class="au-input au-input-white au-input-radius" type="email" id="email" name="ContactForm[email]" value="<?= isset($model['email'])?$model['email']:''?>" required>
                            <?php if(isset($model->errors['email'])):?>
                                <?php errr($model->errors['email']); ?>
                            <?php endif;?>
                        </div>
                        <div class="input-item">
                            <div class="input-title input-label-white">
                                <span class="input-label">Тема сообщения*</span>
                            </div>
                            <input class="au-input au-input-white au-input-radius" type="text" id="subject" name="ContactForm[subject]" value="<?= isset($model['subject'])? $model['subject']:''?>" required>
                            <?php if(isset($model->errors['subject'])):?>
                                <?php errr($model->errors['subject']); ?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="input-item">
                            <div class="input-title input-label-white">
                                <span class="input-label">Сообщение*</span>
                            </div>
                            <textarea class="au-input au-input-white au-input-radius" style="height: 230px;" id="msg" name="ContactForm[body]" required>
                                <?= isset($model['body'])? $model['body']:''?>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="co-form-btn">
                    <input class="au-btn au-btn-radius au-btn-primary" type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end section contact-->


<div id="up-to-top">
    <i class="fa fa-angle-up"></i>
</div>

