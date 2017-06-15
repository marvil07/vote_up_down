<?php

namespace Drupal\vud_field\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Vote Up/Down Field item annotation object.
 *
 * @see \Drupal\vud_field\Plugin\VoteUpDownFieldManager
 * @see plugin_api
 *
 * @Annotation
 */
class VoteUpDownField extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * Provides description of the widget plugin.
   *
   * @var string
   */

  public $description;

  /**
   * The plugin configuration.
   *
   * @var array
   */

  protected $configuration = array();

  /**
   * Default configuration.
   *
   * @var array
   */

  protected $defaultConfiguration = array(
    'vud_widget' => 'plain',
    'votingapi_tag' => 'vote'
  );

}
