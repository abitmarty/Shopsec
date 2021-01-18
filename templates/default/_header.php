<?php
if( !defined( 'CUSTOMER_PAGE' ) )
  exit;

echo '<?xml'; ?> version="1.0" encoding="<?php echo $config['charset']; ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $config['language']; ?>" lang="<?php echo $config['language']; ?>">
<head>
  <title><?php echo $sTitle.$config['title']; ?></title>
  <meta name="Language" content="<?php echo $config['language']; ?>" />
  <meta name="Description" content="<?php echo $sDescription; ?>" />
  <meta name="Generator" content="<?php echo $config['version']; ?>" />

  <link rel="stylesheet" href="<?php echo $config['dir_skin'].$config['style']; ?>" />
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css">
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css">
  <link rel="stylesheet" href="templates/default/footer.css"/>
  <link rel="stylesheet" href="templates/default/header.css"/>
  <link rel="stylesheet" href="templates/default/contact.css"/>
  <link rel="stylesheet" href="templates/default/fontawesome/css/all.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript" src="<?php echo $config['dir_core']; ?>common.js"></script>
  <script type="text/javascript" src="<?php echo $config['dir_plugins']; ?>mlbox/mlbox.js"></script>
  <script type="text/javascript">
    var cfLangNoWord      = "<?php echo $lang['cf_no_word']; ?>";
    var cfLangMail        = "<?php echo $lang['cf_mail']; ?>";
    var cfWrongValue      = "<?php echo $lang['cf_wrong_value']; ?>";
  </script>
  <?php displayAlternateTranslations( ); ?>
</head>
<body<?php if( isset( $aData['iPage'] ) && is_numeric( $aData['iPage'] ) ) echo ' id="page'.$aData['iPage'].'"'; elseif( isset( $aData['iProduct'] ) && is_numeric( $aData['iProduct'] ) ) echo ' id="product'.$aData['iProduct'].'"'; ?>>
<ul id="skiplinks">
  <li><a href="#menu2" tabindex="1"><?php echo $lang['Skip_to_main_menu']; ?></a></li>
  <li><a href="#content" tabindex="2"><?php echo $lang['Skip_to_content']; ?></a></li>
  <?php
    if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ ?>
  <li><a href="#search" tabindex="3"><?php echo $lang['Skip_to_search']; ?></a></li>
  <?php } ?>
</ul>

<div id="container">
  <div id="header">
    <div id="head2"><?php // banner, logo and slogan starts here ?>
      <div class="container">
        <div id="shop-logo-container" class="pure-u-1-2 pure-u-sm-5-24">
          <div id="shop-logo"></div>
        </div><!--
        --><div class="header-icons-container pure-u-1-2 pure-u-sm-19-24">
          <div class="header-icons">
            <div id="shop-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            <div id="shop-search" class="header-icon"><i class="fas fa-search"></i></div>
            <?php
              if( isset( $config['page_search'] ) && is_numeric( $config['page_search'] ) && isset( $oPage->aPages[$config['page_search']] ) ){ // search form starts here ?>
                <form class="pure-u-sm-3-5" method="post" action="<?php echo $oPage->aPages[$config['page_search']]['sLinkName']; ?>" id="searchForm">
                  <fieldset>
                    <legend><?php echo $lang['Search_form']; ?></legend>
                    <span id="search-span"><label for="searchField"><?php echo $lang['search']; ?></label><input placeholder="Type uw zoekterm..." type="text" size="15" name="sPhrase" id="searchField" value="<?php echo $sPhrase; ?>" class="input" maxlength="100" accesskey="1" /></span>
                    <em><button type="submit" class="submit"><i class="fas fa-search"></i></button></em>
                  </fieldset>
                </form><?php
              }  // search form ends here ?><!--
            --><div id="shop-account" class="header-icon"><i class="fas fa-user"></i></div>
            <?php echo $oPage->throwMenu( 1, $iContent, 0 ); // content of top menu first ?>
          </div>
        </div>
      </div>
    </div>
    <div id="head3"><?php // second top menu starts here ?>
      <div class="container">
        <?php echo $oPage->throwMenu( 2, $iContent, 0 ); // content of top menu second ?>
      </div>
    </div>
  </div>
  <div id="body"<?php if( isset( $config['this_is_order_page'] ) ) echo ' class="order"'; elseif( isset( $config['this_is_basket_page'] ) ) echo ' class="basket-page"'; ?>>
    <div class="container">
      <div id="column"><?php
        if( !isset( $config['this_is_order_page'] ) ){ // left column with left menu ?><?php
          echo $oPage->throwMenu( 3, $iContent, 1, true ); // content of left menu ?><?php
        }?>
      </div>
      <div id="content">
