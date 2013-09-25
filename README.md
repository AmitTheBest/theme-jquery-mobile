theme-jquerymobile
===============

Implements jquerymobile 3 integration for Agile Toolkit.

![image](screenshot.PNG)

Installation
----

into your Frontend::init() add:

        $layout = $this->add('theme_jquerymobile/Controller')
            ->layoutAdmin();

Don't add jUI (although it might work anyway)

If you wish to use jquerymobile items by default, then inside your Frontend::addSharedLocations(){

        $this->defaults = $this->pathfinder->addLocation('my-defaults',array(
            'php'=>'atk4-addons/theme_jquerymobile/defaults',
        ))->setBasePath($parent_directory)
        ;

TODOs:

 - [ ] Add support for composer
 - [ ] Add more items to this todo
