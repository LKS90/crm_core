<?php
/**
 * @file
 * Contains \Drupal\crm_core_match\MatcherInterface.
 */

namespace Drupal\crm_core_match;

interface MatcherInterface {

  /**
   * Adds a match engine to the array of registered engines.
   *
   * @param string $engine_id
   *   Identifier of the match engine.
   * @param \Drupal\crm_core_match\MatchEngineInterface $engine
   *   The engine object.
   * @param int $priority
   *   The engines priority.
   */
  public function addMatchEngine($engine_id, MatchEngineInterface $engine, $priority = 0);

  /**
   * Returns the sorted array of match engines.
   *
   * @return \Drupal\crm_core_match\MatchEngineInterface[]
   *   An array of match engine objects.
   */
  public function getSortedEngines();
}
