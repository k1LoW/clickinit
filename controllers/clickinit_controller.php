<?php
class ClickinitController extends ClickinitAppController {
    var $uses = array();

    /**
     * init
     * description
     *
     * @return
     */
    function init(){
        if (Configure::read('debug') < 1) {
            return;
        }
        Configure::write('debug', 0);
        $this->autoRender = false;

        $shellPath = APP . 'vendors/shells/';

        $return = "\n";

        foreach (glob($shellPath . "*.php") as $filename) {
            if (preg_match('#^' . $shellPath . '[0-9]+#', $filename)) {
                $return .= $filename . "\n";

                require($filename);
            }
        }

        return 'Init OK' . $return;
    }

  }