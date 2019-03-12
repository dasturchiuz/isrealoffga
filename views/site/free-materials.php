<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div id="content-wrapper">
    <section id="about-us" class="white">
        <div class="clearbox50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Bepul Materiallar</h2>
                        <hr>
                        <p>USHBU SAHIFADA SIZ RO'YXATDAN O'TGAN HOLDA BEPUL MATERIALLARIMIZDAN ONLAYN TARZDA FOYDALANISHINGIZ MUMKIN.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="meet-the-team" class="row">
                <?php foreach($articles as $article): ?>
                    <div class="col-md-2">
                        <div class="center team-member">
                            <?php
                            $format = $article->getMedia();
                            if (preg_match("/.jpg/i", $format)): ?>
                                <img width="100%" src="<?= $article->getMedia(); ?>">
                            <?php else: ?>
                                <video width="100%">
                                    <source src="<?= $article->getMedia(); ?>" type="video/mp4"/>
                                </video>
                            <?php endif; ?>

                            <div class="team-content fade-up">
                                <h5><?= $article->title; ?><small class="role muted"><i class="fa fa-folder" style="color: #00b29e;"></i> <?= !$article->category ? '' : $article->category->title; ?></small></h5>
                                <div class="clearbox10"></div>
                                <div class="center">
                                    <a href="<?= Url::toRoute(['site/freeview', 'id' => $article->id]); ?>" class="btn-learn">BATAFSIL <span class="arrow">❯</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div><!--/#meet-the-team-->
            <div class="pagin_block" style="text-align: center;">
                <?php
                // display pagination
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
</div>