<?php

namespace Drupal\vud_widget\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for Vote Up/Down Field plugins.
 */
interface VoteUpDownWidgetInterface extends PluginInspectionInterface
{

  /**
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
