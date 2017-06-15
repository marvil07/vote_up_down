<?php

namespace Drupal\vud\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Vote Up/Down Widget plugins.
 */
interface VoteUpDownWidgetInterface extends PluginInspectionInterface
{

  /**
   * Method to return the label of the plugin whenever required
   *
   * @return mixed
   */
  public function getLabel();

  /**
   * @param $vote
   *  $vote = $this->getEntityForVoting($entity_type, $entity_bundle, $entity_id, $vote_type, $field_name)
   * @param string $plugin_id
   * @return mixed
   */
  public function buildVotingWidget($vote, $plugin_id, $entity_id);

}
