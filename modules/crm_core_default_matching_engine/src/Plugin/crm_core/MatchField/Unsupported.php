<?php
/**
 * @file
 * Contains Drupal\crm_core_default_matching_engine\Plugin\crm_core\MatchField\Unsupported.
 */

namespace Drupal\crm_core_default_matching_engine\Plugin\crm_core\MatchField;

use Drupal\crm_core_contact\Entity\Contact;

/**
 * Class for evaluating unsupported fields.
 *
 * @MatchField (
 *   id = "unsupported"
 * )
 */
class Unsupported extends MatchFieldBase {

  /**
   * {@inheritdoc}
   */
  public function getOperators($property = 'value') {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function match(Contact $contact, $property = 'value') {
    return array();
  }

}
