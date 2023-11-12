## INTRODUCTION

Creating a module to solve this issue: A non-existent config entity name returned by FieldStorageConfigInterface::getBundles(): entity type:

You're going to create a custom module on your computer. Start by making a folder, I called mine "update_config_entity" If you want to use a different name, feel free to, you'll just need to make some adjustments to my code based on @junaidpv's code
Inside this folder, create a file called update_config_entity.info.yml
The contents will be:
name: Update Config Entity Module
description: Fixes Error - A non-existent config entity name returned by FieldStorageConfigInterface::getBundles() entity type comment, bundle.
package: Custom

type: module
core_version_requirement: ^9.4 || ^10
Create another file called drush.services.yml and go to @junaidpv's repository, copy the contents from their example of the same name into this file.
On line 3, change \Drupal\my_module\Commands\UpdateCommands to \Drupal\update_config_entity\Commands\UpdateCommands (or the name of your module)
Create a folder called src, inside that, create a folder called Commands
Inside the Commands folder, create a file called UpdateCommands.php
Put the contents from @junaidpv's UpdateCommands file into your file.
Update line 3 from namespace Drupal\my_module\Commands; to namespace Drupal\update_config_entity\Commands;
Now put the module in the /web/modules/custom/ folder in your site, activate it, and run the drush command.
In your command line, run: drush update:correct-field-config-storage entity_type bundle field_name, changing entity_type, bundle, and field_name to match the errors you're getting on your site.
the errors should go away and you can disable the module and remove it from your site.


ld update:correct-field-config-storage comment comment_node_webform comment_body