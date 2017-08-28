<?php $this->need('header.php');?>
        <h2 id="maincontent" tabindex="-1" class="tab"><?php $this->title() ?></h2>
        <p class="date">Updated: <span><?php $this->date(); ?></span></p>
        <article role="main">
          <?php $this->content(); ?>
        </article>
        <br>
        <?php if ($this->options->donateImage): ?>
        <div id="donate">
          <p>赏</p>
          <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-v="<?php $this->options->donateImage(); ?>"/>
        </div>
        <?php endif; ?>
        <div class="clr"></div>
        <?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
