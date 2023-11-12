
//// Process to recreate from start

1. ensure this custom module installed - it will enable dependencies
2. import source db into lando migratedb : lando db-import --host=migratedb --user=mysql _DB-backups/dec2021-backup.sql.zip
3. generate migrate upgrade config // or use those in module config by partial import command below
4. run migrate manifest file ri_manifest.yml


/// drush commands

# import to migrate source db
lando db-import --host=migratedb --user=mysql web/_DB-backups/dec2021-backup.sql.zip
lando db-import --host=migratedb --user=mysql web/_DB-backups/live-10nov2023.sql.gz

#import to rollback on main database
lando db-import --host=database --user=pantheon _DB-backups/D9-starting-base.sql.gz

# generate upgrade migrate config for use in manifest and then migrate (copy to module??)
ld migrate-upgrade --legacy-db-url=mysql://mysql:mysql@migratedb/database --legacy-root=https://www.researchi.co.uk --configure-only

# use this to import active config from this module - rather than install uninstall etc.
ld cim --partial --source=web/modules/custom/ri-modules/migrate_researchi/config/install



Custom migrate module.

///// migrations order tracker
upgrade_d7_taxonomy_vocabulary
upgrade_d7_node_type

upgrade_d7_user_role
upgrade_d7_filter_format
upgrade_d7_profile2_type
upgrade_d7_field_collection_type

upgrade_user_picture_field
upgrade_user_picture_field_instance
upgrade_user_picture_entity_display
upgrade_user_picture_entity_form_display

upgrade_d7_taxonomy_term_project_type
upgrade_d7_taxonomy_term_member_profile_tags

upgrade_d7_user

upgrade_d7_file


>> DB backup taken 
---- after -> turn on comments


upgrade_d7_field
upgrade_d7_field_instance

upgrade_d7_view_modes
upgrade_d7_field_formatter_settings
upgrade_d7_field_instance_widget_settings

upgrade_d7_node_complete_client
upgrade_d7_node_complete_project

upgrade_d7_profile2_member

upgrade_d7_url_alias