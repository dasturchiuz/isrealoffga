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
                        <h2 class="main-title">Offlayn Videolar</h2>
                        <hr>
                        <p>USHBU SAHIFADA SIZ RO'YXATDAN O'TGAN HOLDA OFFLAYN VIDEOLARIMIZNI ONLAYN TARZDA KO`RISHINGIZ MUMKIN.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="meet-the-team" class="row">
                <div class="col-md-3">
                    <div class="center team-member">
                        <video width="100%">
                            <source src="/public/online-vebinar.mp4" type="video/mp4"/>
                        </video>
                        <div class="team-content fade-up">
                            <h5>Offline videos<small class="role muted"><i class="fa fa-folder" style="color: #00b29e;"></i> SHAXMAT</small></h5>
                            <div class="clearbox10"></div>
                            <div class="center">
                                <a href="<?= Url::toRoute(['site/offline-videosview', 'id' => $article->id]); ?>" class="btn-learn">KO'PROQ O'QISH <span class="arrow">❯</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="center team-member">
                        <video width="100%">
                            <source src="/public/77fa33373fdb59c45176c60bc8509d34.mp4" type="video/mp4"/>
                        </video>
                        <div class="team-content fade-up">
                            <h5>Offline videos<small class="role muted"><i class="fa fa-folder" style="color: #00b29e;"></i> MATEMATIKA</small></h5>
                            <div class="clearbox10"></div>
                            <div class="center">
                                <a href="<?= Url::toRoute(['site/offline-videosview', 'id' => $article->id]); ?>" class="btn-learn">KO'PROQ O'QISH <span class="arrow">❯</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="center team-member">
                        <video width="100%">
                            <source src="/public/online-vebinar.mp4" type="video/mp4"/>
                        </video>
                        <div class="team-content fade-up">
                            <h5>Offline videos<small class="role muted"><i class="fa fa-folder" style="color: #00b29e;"></i> MENTAL ARIFMETIKA</small></h5>
                            <div class="clearbox10"></div>
                            <div class="center">
                                <a href="<?= Url::toRoute(['site/offline-videosview', 'id' => $article->id]); ?>" class="btn-learn">KO'PROQ O'QISH <span class="arrow">❯</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="center team-member">
                        <video width="100%">
                            <source src="/public/77fa33373fdb59c45176c60bc8509d34.mp4" type="video/mp4"/>
                        </video>
                        <div class="team-content fade-up">
                            <h5>Offline videos<small class="role muted"><i class="fa fa-folder" style="color: #00b29e;"></i> GENERAL ENGLISH</small></h5>
                            <div class="clearbox10"></div>
                            <div class="center">
                                <a href="<?= Url::toRoute(['site/offline-videosview', 'id' => $article->id]); ?>" class="btn-learn">KO'PROQ O'QISH <span class="arrow">❯</span></a>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!--/#meet-the-team-->
            <div class="pagin_block" style="text-align: center;">
<!--                --><?php
//                // display pagination
//                echo LinkPager::widget([
//                    'pagination' => $pagination,
//                ]);
//                ?>
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
</div>