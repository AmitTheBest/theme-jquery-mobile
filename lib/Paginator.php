<?php
namespace theme_jquerymobile;
class Paginator extends \Paginator_Basic {
    public $ajax_reload=false;
    function defaultTemplate(){
        return array('jquerymobile/paginator');
    }
}
