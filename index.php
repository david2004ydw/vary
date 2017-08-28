﻿<?php
/**
 * 
 * @package Vary
 * @author David
 * @version 666
 * @link https://github.com/2004David/vary
 */
$this->need('header.php');?>

        <?php if ($this->is('index')): ?>
        <?php if ($this->options->welcome): ?>
        <div class="column four">
          <h1 id="maincontent">
            <?php $this->options->welcome(); ?>
          </h1>
            <?php if ($this->options->indexNotice): ?>
            <p id="goaway" style="font-size:75%;">
              <?php $this->options->indexNotice(); ?>
            </p>
            <?php endif; ?>
        </div>
        <div id="status" style="font-size:100%">
          <div class="column six go">
            <div class="img-con">
              <?php if ($this->options->indexImage): ?>
              <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-v="<?php $this->options->indexImage(); ?>" class="ani2 right">
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>

          <?php while($this->next()): ?>
          <div class="column third font ani in"> 
            <div class="wrapper">
              <div class="card radius shadowDepth1">
                <div class="card__content card__padding">
                  <div class="card__article">
                    <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                    <p><?php $this->content(点开全文); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clr"></div>
          <?php endwhile; ?>
          <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
<?php $this->need('footer.php'); ?>
        <?php endif; ?>

          <?php while($this->next()): ?>
          <div class="column font ani in"> 
            <div class="wrapper">
              <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
              <?php $this->content(点开全文); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <div class=clr></div>
          <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
<?php $this->need('footer.php'); ?>