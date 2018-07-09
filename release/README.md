Release plugin 0.7.2
====================
Create new software release.

<p align="center"><img src="release-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/release.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `release.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to create a plugin or theme?

Create a repository for each new plugin/theme. The name of your repository should be `yellow-plugin-xyz` or `yellow-theme-xyz`. Your code doesn't have to be perfect, but it should be working in the [developer kit](https://github.com/datenstrom/yellow-developers). The idea is to keep experimental software separate from stable software. Fork the official repositories `yellow-plugins` and `yellow-themes`, add a link and send a pull request. 

## How to create a software release?

You can create a new software release at the [command line](https://github.com/datenstrom/yellow-plugins/tree/master/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php release` followed by the directory of your repository. This will update the necessary files in the official repositories `yellow-plugins` and `yellow-themes`. Finally send a pull request.

## How to configure a software update?

The following settings can be configured in file `update.ini`:

`Plugin` or `Theme` = software name  
`Version` = software version number  
`Published` = software publication date  
`Developer` = plugin developer  
`Designer` = theme designer  

The following file operations are supported:

`create` = create if not exists  
`update` = overwrite if exists  
`delete` = delete if exists  
`careful` = only if not modified  
`optional` = only if new software installation  

## Example

Creating new software release at the command line:

`php yellow.php release`  
`php yellow.php release /Users/steffen/Documents/GitHub/yellow-plugin-example/`  
`php yellow.php release /Users/steffen/Documents/GitHub/yellow-theme-example/`  

## Developer

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).