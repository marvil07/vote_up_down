<?php

namespace Drupal\vud_field\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines an interface for Vote Up/Down Field plugins.
 */
interface VoteUpDownFieldInterface extends PluginInspectionInterface {


  /**
   * Returns the plugin id.
   *
   * @return string
   *   The plugin id.
   */

  public function getId();

  /**
   * Returns the plugin title.
   *
   * @return string
   *   The plugin title.
   */

  public function getTitle();

  /**
   * Returns the plugin description.
   *
   * @return string
   *   The plugin description.
   */

  public function getDescription();

  /**
   * Builds the configuration form.
   *
   * @param array $form
   *   The entire form.
   * @param FormStateInterface $form_state
   *   The form state.
   *
   * @return array
   *   Form API array for the settings page.
   */

  public function buildConfigurationForm(array &$form, FormStateInterface $form_state);

  /**
   * React to the settings form submission.
   *
   * @param array $form
   *   The entire form.
   * @param FormStateInterface $form_state
   *   The form state.
   */

  public function submitConfigurationForm(array &$form, FormStateInterface $form_state);

  /**
   * Creates an instance of this plugin.
   *
   * @param string $id
   *   The plugin id.
   * @param array $configuration
   *   The plugin configuration.
   *
   * @return \Drupal\vud_field\Plugin\VoteUpDownFieldInterface
   *   An object implementing Drupal\vud_field\Plugin\VoteUpDownFieldInterface
   */

  public static function createInstance($id, array $configuration);

}
