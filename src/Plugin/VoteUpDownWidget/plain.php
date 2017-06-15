<?php

namespace Drupal\vud\Plugin\VoteUpDownWidget;

use Drupal\vud\Plugin\VoteUpDownWidgetBase;

/**
 * Assigns ownership of a node to a user.
 *
 * @VotingApiWidget(
 *   id = "plain",
 *   label = @Translation("Plain rating widget")
 *  )
 */
class Plain extends VoteUpDownWidgetBase
{

  public function buildVotingWidget($vote, $plugin_id, $entity_id)
  {
    // The url will be built using entity_id by the main module. Instantiating it to an empty string for now
    // Note: Values related to VotingAPI are assumed
    $voteUpLink = '';
    $voteDownLink = '';
    $voteResetLink = '';
    $values = array(
      'allowed' => $this->checkUserVoteAllowed($vote),
      'votes' => $this->getVotes($vote),  // not required in plain
      'url' => [
        $voteUpLink,
        $voteDownLink,
        $voteResetLink
      ],
      'default' => array(
        'up' => 'active',
        'down' => 'inactive'
      )
    );
    $output = array(
      '#theme' => 'plain',
      '#vairables' => $values,
      '#attached' => [
        'library' => ['vud/plain'],
      ]
    );
    return $output;
  }

}