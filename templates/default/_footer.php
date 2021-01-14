<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
        <div id="options"><div class="print"><a href="javascript:window.print();"><?php echo $lang['print']; ?></a></div><div class="back"><a href="javascript:history.back();">&laquo; <?php echo $lang['back']; ?></a></div></div>
      </div>
    </div>
  </div>

  <div id="foot"><?php // footer starts here ?>
    <div class="container">
      <div id="copy"><?php echo $config['foot_info']; ?></div>
        <br>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1">Algemene voorwaarden</div></div><!--
      --><div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1">Privacy</div></div><!--
      --><div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1">Cookies</div></div><!--
      --><div class="pure-u-1 pure-u-lg-1-4 inline"><div class="footer_row1">Algemene voorwaarden</div></div>
      </div>

    </div>
  </div>
</div>
</body>
</html>
