<?php $this->need('header.php');?>
            <h2 id="maincontent" tabindex="-1" class="tab"><?php $this->title() ?></h2>
            <p class="date">Updated: <span><?php $this->date(); ?></span></p>
            <article role="main">
                <?php $this->content(); ?>
            </article>
            <br>
            <div id="donate">
                <p>赏</p>
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-v="https://api.host.cs-free.com/uploads/WeChatPay.png"/>
            </div>
            <div class="clr"></div>
            <?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
