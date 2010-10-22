<?php
class InitComponent extends Object {
    /**
     * startup
     *
     * @param &$controller
     * @return
     */
    function startup(&$controller) {

        if (Configure::read('debug') < 1) {
            return false;
        }

        $controller->helpers[] = 'Clickinit.Initlabel';
    }

  }