<?php
namespace theme_jquerymobile;
class Menu extends \Menu_Objective {
    function init(){
        parent::init();
        // $this->addClass('nav navbar-nav');
    }
    function addMenuItem($page,$label=null, $isAbsoluteUrl=false){
        if(!$label){
            $label=ucwords(str_replace('_',' ',$page));
        }

        $li=$this->add('View')->setElement('li');
        $a=$li->add('View')->setElement('a')->set($label);
        $a->setAttr('rel', 'external');

        if($page instanceof jQuery_Chain){
            $li->js('click',$page);
            return $li;
        }

        if (!$isAbsoluteUrl) {
            $a->setAttr('href',$this->api->url($page));
        } else {
            $a->setAttr('href',$page);
        }

        if($this->isCurrent($page) && $this->current_menu_class){
            $li->addClass($this->current_menu_class);
        }
        //die('happy menu');

        return $li;
    }
    // function addSeparator(){
    //     return $this->add('View')->setElement('li')
    //         ->addClass('divider');
    // }
    // function addSubMenu($name){
    //     $li=$this->add('View')
    //         ->setElement('li')
    //         ->setClass('dropdown');

    //     $a=$li->add('View')->setElement('a')
    //         ->addClass('dropdown-toggle')
    //         ->setAttr('data-toggle','dropdown')
    //         ;
    //     $a->add('Text')->set($name.' ');
    //     $a->add('View')->setElement('b')->addClass('caret');

    //     return $li
    //         ->add(get_class($this))->setClass('dropdown-menu');
    // }
    //  function addMenuItem($name){
    //     $li=$this->add('View')
    //         ->setElement('li')
    //         ->setClass('top-menu');

    //     $a=$li->add('View')->setElement('a')
    //         ->addClass('dropdown-toggle')
    //         ->setAttr('data-toggle','dropdown')
    //         ;
    //     $a->add('Text')->set($name.' ');
    //     $a->add('View')->setElement('b')->addClass('caret');

    //     return $li
    //         ->add(get_class($this))->setClass('dropdown-menu');
    // }
    function defaultTemplate(){

        //die("Happy!");
        return array('jquerymobile/menu');
    }
}
