<?php
class InitlabelHelper extends AppHelper {

    var $helpers = array('Html');

    /**
     * afterLayout
     *
     */
    function afterLayout(){

        parent::afterLayout();
        $view =& ClassRegistry::getObject('view');
        if (!$view) {
            return false;
        }

        $view->output = $view->output;

        if (empty($view->ctp)) {
            $view->ctp = array();
        }

        $tip = '';
        $style = 'position: fixed;
                  border-bottom:1px solid #AAAAAA;
                  background:-moz-linear-gradient(center top , #EFEFEF, #CACACA) repeat scroll 0 0 transparent;
                  -moz-border-radius-bottomright:8px;
                  -moz-border-radius-topright:8px;
                  margin:0px; line-height:1.6em; padding:4px 4px;
                  top:0px; left:0px; cursor:pointer;';
        $tip = "<div id='clickinit' style='" . $style . "'>"
            . $this->Html->image('../clickinit/img/clickinit.png')
            . "</div>";
        $tip .= '<script type="text/javascript">var clickinitInitUrl="'
            . Router::url('/')
            . 'clickinit/clickinit/init'
            . '";</script>';
        $tip .= $this->Html->script('../clickinit/js/clickinit.js');

        if (preg_match('#</body>#', $view->output)) {
            $view->output = preg_replace('#</body>#', $tip . "\n</body>", $view->output, 1);
        }
    }

  }
