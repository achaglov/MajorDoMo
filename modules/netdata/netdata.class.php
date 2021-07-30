<?php
//
//
class netdata extends module
{

    function __construct()
    {
        $this->name = "netdata";
        $this->title = "Netdata";
        $this->module_category = "<#LANG_SECTION_SYSTEM#>";
        $this->checkInstalled();
    }

    /**
     * saveParams
     *
     * Saving module parameters
     *
     * @access public
     */
    function saveParams($data = 1)
    {
        $p = array();
        if (IsSet($this->id)) {
            $p["id"] = $this->id;
        }
        if (IsSet($this->view_mode)) {
            $p["view_mode"] = $this->view_mode;
        }
        if (IsSet($this->edit_mode)) {
            $p["edit_mode"] = $this->edit_mode;
        }
        if (IsSet($this->tab)) {
            $p["tab"] = $this->tab;
        }
        return parent::saveParams($p);
    }

    /**
     * getParams
     *
     * Getting module parameters from query string
     *
     * @access public
     */
    function getParams()
    {
        global $id;
        global $mode;
        global $view_mode;
        global $edit_mode;
        global $tab;
        if (isset($id)) {
            $this->id = $id;
        }
        if (isset($mode)) {
            $this->mode = $mode;
        }
        if (isset($view_mode)) {
            $this->view_mode = $view_mode;
        }
        if (isset($edit_mode)) {
            $this->edit_mode = $edit_mode;
        }
        if (isset($tab)) {
            $this->tab = $tab;
        }
    }

    /**
     * Run
     *
     * Description
     *
     * @access public
     */
    function run()
    {
        $out = array();
        if ($this->action == 'admin') {
            $this->admin($out);
        } else {
            $this->usual($out);
        }
        if (IsSet($this->owner->action)) {
            $out['PARENT_ACTION'] = $this->owner->action;
        }
        if (IsSet($this->owner->name)) {
            $out['PARENT_NAME'] = $this->owner->name;
        }
        $out['VIEW_MODE'] = $this->view_mode;
        $out['EDIT_MODE'] = $this->edit_mode;
        $out['MODE'] = $this->mode;
        $out['ACTION'] = $this->action;
        $this->data = $out;
        $p = new parser(DIR_TEMPLATES . $this->name . "/" . $this->name . ".html", $this->data, $this);
        $this->result = $p->result;
    }

    /**
     * BackEnd
     *
     * Module backend
     *
     * @access public
     */
    function admin(&$out)
    {

        if (gr('ok_msg')) {
            $out['OK_MSG'] = gr('ok_msg');
        }

        if ($this->mode == 'service_stop') {
            safe_exec('sudo service netdata stop', 1);
            sleep(2);
            $this->redirect("?ok_msg=" . urlencode('Stop command sent'));
        }
        if ($this->mode == 'service_start') {
            safe_exec('sudo service netdata start', 1);
            $this->redirect("?ok_msg=" . urlencode('Start command sent'));
        }

        if ($this->mode == 'service_restart') {
            safe_exec('sudo service netdata stop', 1);
            safe_exec('sudo service netdata start', 1);
            sleep(5);
            $this->redirect("?ok_msg=" . urlencode('Restart command sent'));
        }

        if ($this->mode == 'service_disable') {
            safe_exec('sudo service netdata stop', 1);
            sleep(3);
            safe_exec('sudo systemctl disable netdata.service', 1);
            $this->redirect("?ok_msg=" . urlencode('Disable command sent'));
        }

        if ($this->mode == 'service_enable') {
            safe_exec('sudo systemctl enable netdata.service', 1);
            sleep(3);
            safe_exec('sudo service netdata start', 1);
            $this->redirect("?ok_msg=" . urlencode('Enable command sent'));
        }

        exec('sudo service netdata status', $output);
        if ($output!='') {
            $out['SHOW_DASHBOARD']=1;
        }

    }

    /**
     * FrontEnd
     *
     * Module frontend
     *
     * @access public
     */
    function usual(&$out)
    {
        if ($this->ajax) {
            $op = gr('op');
            if ($op == 'status') {
                $output = array();
                exec('sudo service netdata status', $output);
                $result = implode("\n", $output);
                $result = str_replace('active (running)','<font color="green"><b>active (running)</b></font>',$result);
                $result = str_replace('inactive (dead)','<font color="red"><b>inactive (dead)</b></font>',$result);
                if (!$result) {
                    $result = "Quick installation:\n".htmlspecialchars('bash <(curl -Ss https://my-netdata.io/kickstart.sh)');
                }
                echo '<pre>' . $result . '</pre>';
                exit;
            }
        }
        $this->admin($out);
    }


    function processSubscription($event, &$details) {
        if ($event == 'panelHomeColumnRight') {
            $netdata_url = 'http://'.$_SERVER['HTTP_HOST'].':19999';
            return "<iframe width='100%' frameborder='0' src='$netdata_url/demo.html'></iframe><div align='center'><a href='$netdata_url' taget='_blank' class='btn btn-default'>Resources Usage</a></div>&nbsp;";
        }
    }
    
    /**
     * Install
     *
     * Module installation routine
     *
     * @access private
     */
    function install($data = '')
    {
        subscribeToEvent($this->name, 'panelHomeColumnRight');
        parent::install();
    }
// --------------------------------------------------------------------
}
/*
*
* TW9kdWxlIGNyZWF0ZWQgRmViIDExLCAyMDE5IHVzaW5nIFNlcmdlIEouIHdpemFyZCAoQWN0aXZlVW5pdCBJbmMgd3d3LmFjdGl2ZXVuaXQuY29tKQ==
*
*/