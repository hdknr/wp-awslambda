# Wp Awslambda

    Contributors: HDKNR
    Donate link: https://github.com/hdknr
    Tags: comments, spam
    Requires at least: 5.2.1
    Tested up to: 5.2.1
    Stable tag: 0.1.0
    License: MIT
    License URI: https://opensource.org/licenses/MIT

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

## Description

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

* "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
* "Tags" is a comma separated list of tags that apply to the plugin
* "Requires at least" is the lowest version that the plugin will work on
* "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
* Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

## Installation

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

### Dependencies

Timber:

* [Timber – WordPress plugin - WordPress.org](https://wordpress.org/plugins/timber-library/)

Quasar:

* [Quasar Framework](https://quasar.dev/)

AWS SDK for Javascript:

* [Class: AWS.Lambda — AWS SDK for JavaScript](https://docs.aws.amazon.com/ja_jp/AWSJavaScriptSDK/latest/AWS/Lambda.html)
* [Class: AWS.CloudWatchLogs — AWS SDK for JavaScript](https://docs.aws.amazon.com/ja_jp/AWSJavaScriptSDK/latest/AWS/CloudWatchLogs.html)

## Frequently Asked Questions

    TODO:

## Screenshots

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

## Changelog

### 0.0

* First Commit

## Upgrade Notice

### 1.0 

    TODO:


## Arbitrary section

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.