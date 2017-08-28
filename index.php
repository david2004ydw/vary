<?php
/**
 * 
 * @package Vary
 * @author David
 * @version 666
 * @link https://github.com/2004David/vary
 */
$this->need('header.php');?>
            <?php if ($this->is('index')): ?>
            <div class="column four">
                <h1 id="maincontent">欢迎欢迎 :)</h1>
                <p id="goaway" style="font-size:75%;">既然相遇本是偶然<br>那又何必在意分别时的突然</p>
            </div>
            <div id="status" style="font-size:100%">
                <div class="column six go">
                <br><br>
                    <div class="img-con">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-v="https://api.host.cs-free.com/uploads/i.png" class="ani2 right">
                    </div>
                </div>
            </div>
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
