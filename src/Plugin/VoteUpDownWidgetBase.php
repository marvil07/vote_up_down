<?php

namespace Drupal\vud\Plugin;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Base class for Vote Up/Down Widget plugins.
 */
abstract class VoteUpDownWidgetBase extends PluginBase implements VoteUpDownWidgetInterface
{

  use StringTranslationTrait;

  /**
   * VoteUpDownWidgetBase constructor.
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * Get label for the plugin
   * @return mixed
   */
  public function getLabel() {
    return $this->getPluginDefinition()['label'];
  }

  /**
   * @param $vote
   *  Variable containing vote data from Voting API. \Drupal::service('entity.manager')->getStorage('vote')
   * @param bool $account
   *
   * @return bool
   */
  public function checkUserVoteAllowed($vote, $account = FALSE){
    if (!$account) {
      $account = \Drupal::currentUser();
    }
    // TODO: Logic to be placed for Voting API interaction.
    $permission = "";
    return $account->hasPermission($permission);
  }

  /**
   * @param $vote
   */
  public function getVotes($vote){

    // TODO: Logic to be placed to get the votes on the current entity type only if (checkUserVoteAllowed == true)
    // $vote = $this->getEntityForVoting($entity_type, $entity_bundle, $entity_id, $vote_type, $field_name)
    // return $vote->getVotes();
  }

}