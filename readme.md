# BP Email to WP Mail From Bridge #
**Contributors:** thebrandonallen  
**Tags:** buddypress, email  
**Requires at least:** 3.9  
**Tested up to:** 4.6  
**Stable tag:** 1.1  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

## Description ##

>***NOTE: As of BuddyPress 2.5.3+, this plugin is no longer needed.***

BuddyPress 2.5 introduced some wonderful email functionality. In order to do this, it bypasses WordPress' default email methods. This means that any filters you applied to the `wp_mail_from` and `wp_mail_from_name` filters don’t work with emails sent by BuddyPress. This plugin translates those filters into something BuddyPress can use.

## Installation ##

There are not settings for this plugin. Just follow the steps below.

1. Upload the `bp-email-wp-mail-from-bridge` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Changelog ##

### 1.1 ###
* Added support for the upcoming BuddyPress 2.5.3 release. By that, I mean, the plugin will silently fail, because it will no longer needed after upgrading BuddyPress.

### 1.0 ###
* Initial commit. Magic will rain upon you.

## Upgrade Notice ##

### 1.1 ###
* This update prepares for the upcoming BuddyPress 2.5.3 release. Once, you've updated to BP 2.5.3 or greater, you can remove this plugin. If this plugin remains active after you've upgraded to BP 2.5.3 or greater, it will just silently fail to prevent bad things from happening.
