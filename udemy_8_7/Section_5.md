## Creation and Configuration of an Extension

05_12_2020

Create Main page
set behaviour as "root tree"

Go to template
Edit Setup.ts
Instead of breaking the whole page when an exception occurs,
 an error message is shown for the part of the page that is broken. Be aware that unlike before, it is now possible that a page with error message gets cached.
````
page.config.contentObjectExceptionHandler = 0

````

To disable Composer Mode install for Extensiosn only:
vendor/typo3/cms-composer-installers/autoload-include.php

// TYPO3 is installed via composer. Flag this with a constant.
#if (!defined('TYPO3_COMPOSER_MODE')) {
#    define('TYPO3_COMPOSER_MODE', TRUE);
#}
# Disable Composer mode


* Go to the Extensions / Get Extensions
Search for Extension Builder

TER ( typo3 Extension Repository)

Install the Extension Builder corresponding to typo3 version.


Extension Builder
Extenison Properties
Name: Memory
key: memory 
// Frontend plugin
Name : Memory, Key : game
/ Controller actions

 Game=>board

/ Non Cacheable actions

Game => board

Because of the form use  Non Cachable

//Backend Plugin
Name: Highscore, key: highscore

Main Module : tools
can choose  web, user
web: appears on Web module
user: appears under user menu
Tools: appears in Admin Tools

Controller action combinations:
Highscore =>leaderboard

Click SAVE
IGnore warning message
Click OK on success