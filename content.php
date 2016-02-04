<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<body>
<div class="container one-collumn sidebar-position-leftpage-home">
    <div class="headband"></div>

<?php $this->need('nav.php'); ?>
    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class="content">
                    <section id="posts" class="posts-expand">
                        <?php while($this->next()): ?>
                            <article class="post post-type-normal ">
                                <header class="post-header">
                                    <h1 class="post-title">
                                        <a class="post-title-link" href="<?php $this->permalink() ?>">
                                            <?php $this->title() ?>
                                        </a>
                                    </h1>
                                    <div class="post-meta">
                                        <span class="post-time">
                                            <span class="post-meta-item-icon">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                            <span class="post-meta-item-text">发表于</span>
                                            <time datetime="<?php $this->date(); ?>" content="<?php $this->date(); ?>">
                                                <?php $this->date(); ?>
                                            </time>
                                        </span>
                                        <span class="post-category" >&nbsp; | &nbsp;
                                            <span class="post-meta-item-icon">
                                                <i class="fa fa-folder-o"></i>
                                            </span>
                                            <span class="post-meta-item-text">分类于</span>

                                            <span>
                                              <a href="<?php $this->permalink() ?>"  rel="index">
                                                  <span><?php $this->category('-'); ?></span>
                                              </a>
                                            </span>
                                        </span>

                                          <span class="post-comments-count">&nbsp; | &nbsp;
                                            <a href="">
                                                <span class="post-comments-count ds-thread-count">
                                                    <?php
                                                    $commentNum = $this->commentNum();
                                                    echo is_null($commentNum) ? 0 : $commentNum;
                                                    ?>
                                                    条评论
                                                </span>
                                            </a>
                                          </span>

                                         <span id="/2015/questions-in-writing/" class="leancloud_visitors">
                                           &nbsp; | &nbsp;
                                           <span class="post-meta-item-icon">
                                             <i class="fa fa-eye"></i>
                                           </span>
                                           <span class="post-meta-item-text">阅读次数 </span>
                                           <span class="leancloud-visitors-count">123</span>
                                          </span>

                                    </div>
                                </header>
                                <div class="post-body" >
                                    <?php $this->content(); ?>
                                </div>
                                <footer class="post-footer">
                                    <div class="post-eof"></div>
                                </footer>
                            </article>
                        <?php endwhile; ?>
                    </section>
                    <?php $this->need('pagination.php'); ?>

                </div>
            </div>


            <div class="sidebar-toggle">
                <div class="sidebar-toggle-line-wrap">
                    <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
                </div>
            </div>

            <?php $this->need('sidebar.php'); ?>
        </div>
    </main>
