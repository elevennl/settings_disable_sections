settings_disable_sections
=========================

With this plugin you can disable complete sections in the Roundcube settings menu.

Setup
-----
Add a 'settings_disable_sections' config item to the config.inc.php and specify the sections to disable in array form.

The config should look like this:

```php
$config['settings_disable_sections'] = array('general');
```

Contact
-------
Author:   Carlo Vollebregt (carlovollebregt@eleven.nl)

Bug reports through github (https://github.com/elevennl/settings_disable_sections/issues)

License
-------

This plugin is distributed under the GNU General Public License Version 2.
Please read through the file LICENSE for more information about this license.