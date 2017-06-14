<?php

namespace Drupal\vud_widget\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Vote Up/Down Field item annotation object.
 *
 * @see \Drupal\vud_widget\Plugin\VoteUpDownFieldManager
 * @see plugin_api
 *
 * @Annotation
 */
class VoteUpDownWidget extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $plugin_id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
