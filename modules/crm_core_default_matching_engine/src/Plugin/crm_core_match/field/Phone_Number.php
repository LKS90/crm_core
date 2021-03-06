<?php

/**
 * @file
 * Implementation of FieldHandlerInterface for phone_number field.
 */

namespace Drupal\crm_core_default_matching_engine\Plugin\crm_core_match\field;

/**
 * Class for evaluating phone_number fields.
 */
class Phone_NumberMatchField extends FieldHandlerBase {

  /**
   * @see DefaultMatchingEngineFieldType::fieldRender()
   */
  public function fieldRender($field, $field_info, &$form) {
    foreach ($field_info['columns'] as $item => $info) {
      $description = '';
      switch ($item) {
        case 'number':
          $description = t('Number');
          break;

        case 'country_codes':
          $description = t('Country code');
          break;

        case 'extension':
          $description = t('Extension');
          break;
      }
      $field_item['field_name'] = $field['field_name'];
      $field_item['label'] = $field['label'] . ': ' . $description;
      $field_item['bundle'] = $field['bundle'];
      $field_item['field_item'] = $item;

      $item = new selectMatchField();
      $item->fieldRender($field_item, $field_info, $form);
    }
  }
}
