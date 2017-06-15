<?php

namespace Drupal\vud_field\Plugin;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Base class for Vote Up/Down Field plugins.
 */
abstract class VoteUpDownFieldBase extends PluginBase implements VoteUpDownFieldInterface
{

  public function __construct($id, array $configuration = array())
  {
    $this->pluginDefinition['id'] = $id;
    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public static function createInstance($id, array $configuration)
  {
    return new static($id, $configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration = array())
  {
    if (empty($configuration)) {
      $this->configuration = $this->pluginDefinition['defaultConfiguration'];
    } else {
      $this->configuration = $configuration;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration($key = NULL)
  {
    if ($key) {
      if (isset($this->configuration[$key])) {
        return $this->configuration[$key];
      }
      return isset($this->pluginDefinition['defaultConfiguration'][$key]) ? $this->pluginDefinition['defaultConfiguration'][$key] : FALSE;
    }
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function getId()
  {
    return $this->pluginDefinition['id'];
  }

  /**
   * {@inheritdoc}
   */
  public function getLabel()
  {
    return $this->pluginDefinition['label'];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsFormSubmit(array &$form, FormStateInterface $form_state)
  {

  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = PluginFormInterface::buildConfigurationForm($form, $form_state);
    unset($form['width']['#required']);
    unset($form['height']['#required']);
    return $form;
  }




}
