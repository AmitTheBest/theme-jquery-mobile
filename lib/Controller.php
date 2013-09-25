<?php

/**
 * Add this file to your API to take advantage of the jquerymobile.
 *
 * This theme comes with some ready-to-use layouts:
 *
 * - layoutAdmin
 * - layoutBlank
 *
 * $this->add('theme-jquerymobile/Controller')
 *   ->setLayout('admin');
 */

namespace theme_jquerymobile;
class Controller extends \AbstractController {
    function init(){
        parent::init();


        // add locations
        $l=$this->api->locate('addons',__NAMESPACE__,'location');
        $addon = $this->api->locate('addons',__NAMESPACE__);
        $l=$this->api->pathfinder->addLocation($addon,array(
            'template'=>'templates',
            'php'=>'defaults'
        ))->setParent($l);

    }

    function layoutAdmin(){
        $this->setApiTemplate('layout/admin');

        $this->menu=$this->api->add('theme_jquerymobile\Menu',null,'Menu');
        return $this;
    }

    function layoutBlank(){
        $this->setApiTemplate('layout/blank');
        return $this;
    }
    function setApiTemplate($template){
        $this->api->template->loadTemplate($template);

        $this->api->requires('atk','4.2.4');

        if(@$this->api->jui){
            throw $this->exception('Do not use jUI with jquerymobile');
        }
        if(!@$this->api->jquery){
            $this->api->add('jQuery');
        }


        //$this->api->jquery->addStaticStylesheet('//code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.css');
        //$this->api->jquery->addStaticInclude('//code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js');
    }
}
