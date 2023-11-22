<?php

namespace Drupal\layout_bg_options\Plugin\Layout;

// use Drupal\Core\Layout\LayoutDefault;
use Drupal\layout_options\Plugin\Layout\LayoutOptions;
use Drupal\layout_bg\LayoutBgTrait;

/**
 * Adding background region to layout options
 */
class LayoutBgOptions2col extends LayoutOptions {

  use LayoutBgTrait;

  /**
   * The template to use to render the non-bg content.
   *
   * We are (kind of) extending the tw two col layout defined in
   * the researchi theme. 
   *
   * @var string
   */
  protected $baseLayoutTemplate = 'tw-two-column.html.twig';

}
