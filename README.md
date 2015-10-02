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
