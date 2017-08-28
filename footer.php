       </div>
      </div>
    </div>
    <div class="clr"></div>
    <br>
    <div style="text-align:center;padding-bottom:1em;font-size:12px">
    <a href="<?php $this->options->feedUrl(); ?>" target="_blank">文章RSS</a> | 
    <a href="<?php $this->options->commentsFeedUrl(); ?>" target="_blank">评论RSS</a> | 
    <a href="http://typecho.org" target="_blank">Typecho</a> | 
    <a href="https://github.com/2004David/vary" target="_blank">Theme Vary</a>
  </div>
  <div role="contentinfo">
    <div class="footmenu">
      Copyright <?php $this->options->title(); ?>. All rights reserved.
    </div>
  </div>
</div>
<script>
        function im() {
             var vizimgDefer = document.getElementsByTagName('img');
for (var i=0; i<vizimgDefer.length; i++) {
if(vizimgDefer[i].getAttribute('data-v')) {
vizimgDefer[i].setAttribute('src',vizimgDefer[i].getAttribute('data-v'));
} }
        }
        window.onload = im;
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} }
</script>
<?php $this->footer(); ?>
</body>
</html>

<?php 
$echo = ob_get_contents(); 
ob_clean(); 
$placeholder = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
$preg = "/<img (.*)src(.*) \/>/i"; 
$replaced = '<img \\1src="'.$placeholder.'" data-v\\2 />';
print preg_replace($preg, $replaced, $echo); 
ob_end_flush(); 
?>