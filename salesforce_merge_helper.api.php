<?php

/**
 * @file
 * These are the hooks that are invoked by the Salesforce core.
 *
 * Core hooks are typically called in all modules at once using
 * module_invoke_all().
 */

/**
 * @defgroup salesforce_merge_helper_hooks Hooks by Salesforce Merge Helper.
 * @{
 */

/**
 * Alter existing list of mappings to not merge.
 *
 * By default, we're assuming any Salesforce Merge records should trigger a user
 * delete (via usermerge) but if there are cases when a site wouldn't want to
 * do that, this hook allows other modules to define a list of Salesforce
 * Mapping Objects that would not be merged.
 *
 * Expected output is an array of salesforce_mapping_object_ids.
 *
 * @param array $mappings_to_not_merge
 *   Array of Salesforce Mapping Objects IDs to not merge.
 */
function hook_salesforce_merge_helper_to_not_merge(&$mappings_to_not_merge) {
  $mapping_ids_excluded_by_this_hook = array(1234, 10, 7);

  $mappings_to_not_merge = array_merge($mappings_to_not_merge, $mapping_ids_excluded_by_this_hook);
}

/**
 * @} salesforce_merge_helper_hooks
 */
