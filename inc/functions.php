<?php
function header_search_popup() {
  
  // if timber::locations is empty (another plugin hasn't already added to it), make it an array
  if(!Timber::$locations) Timber::$locations = array();

  // add a new views path to the locations array
  array_push(
    Timber::$locations, 
    HEADER_SEARCH_POPUP_PATH . 'views'
  );
  
  $context = Timber::context();
  
  Timber::render('header-search-popup.twig', $context);
}