# Drive EMail Template
## Usage:
* COPYFILE_DISABLE=1 tar cvfz driveemailtemplate.tgz --exclude .git --exclude .idea driveemailtemplate/
* Copy the driveemailtemplate directory to /var/www/html/drive/apps/
* Add the following line to config.php:
  'mail_template_class' => '\OCA\DriveEMailTemplate\DriveEMailTemplate',
* Enable the app in the admin console