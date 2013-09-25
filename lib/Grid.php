<?php
namespace theme_jquerymobile;
class Grid extends \Grid_Advanced {

    function defaultTemplate(){

        //die("Happy!");
        return array('jquerymobile/grid');
    }
    function addPaginator($ipp = 25, $options = null)
    {
        // adding ajax paginator
        if ($this->paginator) {
            return $this->paginator;
        }
        $this->paginator = $this->add('Paginator', $options);
        $this->paginator->ipp($ipp);
        return $this;
    }
}
