<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;
?>
        <div id="options"><div class="print"><a href="javascript:window.print();"><?php echo $lang['print']; ?></a></div><div class="back"><a href="javascript:history.back();">&laquo; <?php echo $lang['back']; ?></a></div></div>
      </div>
    </div>
  </div>

  <div id="foot"><?php // footer starts here ?>
    <div class="container footer_grid">

        <br>
      <div class="pure-g">

        <div class="pure-u-1 pure-u-md-1-1 inline"><div class="pb_footer_title">Plantbox</div></div>

        <div class="pure-u-1 pure-u-md-1-2 inline"><div class="footer_row1">Klanten beoordelen ons met een: <div class="beoordeeling_green">9.5/10</div></div></div><!--
        --><div class="pure-u-1 pure-u-md-1-2 inline">
        <div class="trust-logos--logo trust-logos--ideal"></div>
        <div class="trust-logos--logo trust-logos--mastercard"></div>
        <div class="trust-logos--logo trust-logos--visa"></div>
        <div class="trust-logos--logo trust-logos--applepay"></div>
        </div></div>


        <div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1"><a class="footer_link" href="">Algemene voorwaarden</a></div></div><!--
      --><div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1"><a class="footer_link" href="">Privacy</a></div></div><!--
      --><div class="pure-u-1 pure-u-md-1-4 inline"><div class="footer_row1"><a class="footer_link" href="">Cookies</a></div></div><!--
      --><div class="pure-u-1 pure-u-lg-1-4 inline"><div class="footer_row1"><div><?php echo $config['foot_info']; ?></div></div></div>
      </div>


    </div>
  </div>
</div>
</body>
</html>
