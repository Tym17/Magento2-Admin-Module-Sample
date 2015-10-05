# AdminSample module

* To add a menu/sub-menu, check out the following files:
  * `etc/adminhtml/menu.xml`
  * `etc/adminhtml/routes.xml`
* To bind a page to those submenus, check out the following files:
  * You will notice the path to look like the action parameter from `etc/adminhtml/menu.xml`
  * `Controller/Adminhtml/SampleOne/Index.php`
  * `Controller/Adminhtml/SampleTwo/Index.php`
* To add content to your freshly created pages, check out the following files:
  * `view/adminhtml/layout/adminsample_sampleone_index.xml`
  * `view/adminhtml/templates/sample/one.phtml`
* To add content to your freshly created pages and pass something to it, You can also check:
  * `view/adminhtml/layout/adminsample_sampletwo_index.xml`
  * `Controller/Adminhtml/SampleTwo/Index.php`
  * `view/adminhtml/templates/sample/two.phtml`
* To set and retrieve values from Magento2's configuration you can check these files:
  * `Controller/Adminhtml/SampleTwo/Index.php`
  * `etc/adminhtml/system.xml` Configuration menu in *Stores/Settings/Configuration* is set here
  * `etc/config.xml` Default configuration
  * `view/adminhtml/templates/sample/two.phtml`

# To do

- Add config menu
- Show config access from php
