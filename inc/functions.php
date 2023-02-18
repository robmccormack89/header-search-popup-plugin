<?php
function header_search_popup()
{
  $context = Timber::context();
  Timber::render('header-search-popup.twig', $context);
}