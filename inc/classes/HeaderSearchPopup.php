<?php
namespace Rmcc;
use Timber\Timber;

/**
 * CUSTOM STORE NOTICE
 *
**/

class HeaderSearchPopup extends Timber {

  public function __construct() {
    parent::__construct();
    
    // timber stuff. the usual stuff
    add_filter('timber/twig', array($this, 'add_to_twig'));
    add_filter('timber/context', array($this, 'add_to_context'));
    
    // enqueue plugin assets
    add_action('wp_enqueue_scripts', array($this, 'header_search_assets'));

    add_action('rmcc_after_header', 'header_search_popup', 20);
  }
  
  public function header_search_assets() {
    // wp_enqueue_style(
    //   header-search',
    //   HEADER_SEARCH_URL . 'public/css/header-search.css'
    // );
  }
  
  public function add_to_twig($twig) { 
    $twig->addExtension(new \Twig_Extension_StringLoader());
    return $twig;
  }

  public function add_to_context($context) {
    $context['HEADER_SEARCH_URL'] = MINICART_POPUP_URL;
    return $context;    
  }

}