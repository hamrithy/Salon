<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  if ( (!isset($new_products_category_id)) || ($new_products_category_id == '0') ) {
    $new_products_query = tep_db_query("select p.products_id, pd.products_viewed, p.products_image_thumbnail, p.products_image, p.products_tax_class_id, pd
.products_name, if(s.status, s.specials_new_products_price, p.products_price) as products_price from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = pd.products_id and pd.language_id = '" . (int)$languages_id . "' order by p.products_date_added desc limit " . MAX_DISPLAY_NEW_PRODUCTS);
  } else {
    $new_products_query = tep_db_query("select distinct p.products_id, pd.products_viewed, p.products_image, p.products_tax_class_id, pd.products_name, if(s
.status, s.specials_new_products_price, p.products_price) as products_price from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " . TABLE_CATEGORIES . " c where p.products_id = p2c.products_id and p2c.categories_id = c.categories_id and c.parent_id = '" . (int)$new_products_category_id . "' and p.products_status = '1' and p.products_id = pd.products_id and pd.language_id = '" . (int)$languages_id . "' order by p.products_date_added desc limit " . MAX_DISPLAY_NEW_PRODUCTS);
  }

  $num_new_products = tep_db_num_rows($new_products_query);

  if ($num_new_products > 0) {

    $new_prods_content = NULL;

    while ($new_products = tep_db_fetch_array($new_products_query)) {
//      if (strlen($new_products['products_name']) > 35) {
//        $p_name = $new_products['products_name'];//substr($new_products['products_name'], 0, 40) . '...';
//      }else{
//        $p_name = $new_products['products_name'];
//      }
      $new_prods_content .= '<div class="col-sm-4 col-md-3" style="padding-bottom: 10px;">';
      $new_prods_content .= '  <div class="productHolder equal-height" style="height: 170px;">';
      $new_prods_content .= '    <a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $new_products['products_id']) . '">'
          . tep_image(DIR_WS_IMAGES . $new_products['products_image_thumbnail'],
              $new_products['products_name'], SMALL_IMAGE_WIDTH,
              SMALL_IMAGE_HEIGHT, 'style="width:170px;height:100px;"') . '</a>';
      $new_prods_content .= '    <div class="caption">';
      $new_prods_content .= '      <p><b><a href="' . tep_href_link(FILENAME_PRODUCT_INFO,
            'products_id=' . $new_products['products_id']) . '">'
            . $new_products['products_name'] . '</a></b></p>';
//      $new_prods_content .= '<span class="text-center price">' . $currencies->display_price($new_products['products_price'], tep_get_tax_rate($new_products['products_tax_class_id'])) . '</span>';
//      $new_prods_content .= '<span style="float: right;font-weight: bold;">View: '
//          . $new_products['products_viewed'] .' </span>   ';
      $new_prods_content .= '  </div> </div>';
      $new_prods_content .= '</div>';
    }
?>

  <div class="row">
    <?php echo $new_prods_content; ?>
  </div>

<?php
  }
?>
