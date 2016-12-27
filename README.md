# salesforce_merge_helper
Helper functions that connect merged Salesforce objects to Drupal usermerges

To ensure entitycache clears after merges, make sure you have the following
patch to the usermerge module:

https://www.drupal.org/node/2839401

Or, if you have drush:

drush make sites/all/modules/salesforce_merge_helper/salesforce_merge_helper.make --no-core
