<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div id="content-wrapper">
    <section id="blog" class="white">
        <div class="clearbox50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Bepul Materiallar</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <aside class="col-sm-4 col-sm-push-8">

                    <div class="widget categories">
                        <h3 class="widget-title">Blog Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Tutorial</a></li>
                                    <li><a href="#">Samples</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->
                    <div class="widget tags">
                        <h3 class="widget-title">Post Tags</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Fashion</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Video</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">WordPress</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Plugins</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Downloads</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Freebies</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Envato</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Tutorial</a></li>
                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#">Update</a></li>
                        </ul>
                    </div><!--/.tags-->

                </aside>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-featured-image">

                                <?php
                                $format = $article->getMedia();
                                if (preg_match("/.jpg/i", $format)): ?>
                                    <img width="100%" height="400" src="<?= $article->getMedia(); ?>">
                                <?php else: ?>
                                    <video controls width="100%" height="400">
                                        <source src="<?= $article->getMedia(); ?>" type="video/mov"/>
                                        <source src="<?= $article->getMedia(); ?>" type="video/mp4"/>
                                        <source src="<?= $article->getMedia(); ?>" type="video/ogg"/>
                                        <source src="<?= $article->getMedia(); ?>" type="video/webm"/>
                                    </video>
                                <?php endif; ?>

                            </div>
                            <div class="blog-content">
                                <h3 class="main-title"><?= $article->title; ?></h3>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> <?= $article->category->title; ?></a></span>
                                    <span><i class="fa fa-clock-o"></i> <?= $article->date; ?></span>
                                    <span><i class="fa fa-comment"></i> <span class="counter">14</span> Comments</span>
                                    <span><i class="fa fa-eye"></i> <span class="counter"><?= (int) $article->viewed; ?></span></span>
                                </div>

                                <p><?= $article->description; ?></p>

                                <hr>

                                <div class="tags">
                                    <i class="fa fa-tags"></i> Tags  <a class="btn btn-xs btn-primary btn-outlined" href="#">CSS3</a> <a class="btn btn-xs btn-primary btn-outlined" href="#">HTML5</a> <a class="btn btn-xs btn-primary btn-outlined" href="#">WordPress</a> <a class="btn btn-xs btn-primary btn-outlined" href="#">Joomla</a>
                                </div>

                                <hr>

                                <div class="author well">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar img-thumbnail author-box-image" src="../public/images/author.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <strong>Danny Jones</strong>
                                            </div>
                                            <p>Humanity declared vicinity continue supplied no an. He hastened am no property exercise of. Dissimilar comparison no terminated devonshire no literature on. Say most yet head room such just easy.</p>
                                        </div>
                                    </div>
                                </div><!--/.author-->

                                <div id="comments">
                                    <div id="comments-list">
                                        <h3>3 Comments</h3>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar img-thumbnail comment-avatar" src="../public/images/users.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                        <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2014</small>
                                                    </div>
                                                    <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                                    <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                                </div>
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="avatar img-thumbnail comment-avatar" src="../public/images/users.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="well">
                                                            <div class="media-heading">
                                                                <strong>Peter Jackson</strong>&nbsp; <small>16th Jan, 2014</small>
                                                            </div>
                                                            <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                            <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div><!--/.media-->
                                            </div>
                                        </div><!--/.media-->
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar img-thumbnail comment-avatar" src="../public/images/users.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                        <strong>John Smith</strong>&nbsp; <small>14th Jan, 2014</small>
                                                    </div>
                                                    <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                                    <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div><!--/.media-->
                                    </div><!--/#comments-list-->
                                    <div class="gap"></div>

                                    <div id="comment-form">
                                        <h3  class="main-title">Leave a comment</h3>
                                        <hr>
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-outlined">Submit Comment</button>
                                        </form>
                                    </div><!--/#comment-form-->
                                </div><!--/#comments-->
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
</div>