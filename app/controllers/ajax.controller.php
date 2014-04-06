<?php

/**
 * Description of Ajax Controller
 *
 * @author Ramón Albertí
 */
class Ajax_Controller extends Core_Controller {
    
    private $theme;

    protected function pre_process() {
        $this->theme = Config_Fw::GetThemeName();
    }
    
    protected function process() {
        $this->call($this->sCaction);
    }
    
  
    protected function display() {
        //include(THEMES_PATH.DS.$this->theme.DS.'ajax.view.php');
    }
    
	public function call($action) {
		$method = Tools_Fw::getVar('action', 'default', 'post');
		$method = '_' . $method;
		$params = Tools_Fw::getVar('params', 'default', 'post');
        
        error_log('METHOD:: '.$method.' and PARAMS:: '.$params);
        
		if (method_exists($this, $method)) {
			$result = $this->$method($params);
		} else {
			$result = array('error' => "This method doesn't exists");
		}
		echo json_encode($result);
		exit();
	}
    
    public function _testAction() {
        
    }

	public function upload() {
		$folder = md5(time() . rand(0, 10000));
		mkdir(UPLOAD_PATH . DS . 'limbo' . DS . $folder);
		$uploaded = array('folder' => $folder, 'files' => array());
		foreach ($_FILES["attachments"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$seed = 0;
				$name = $_FILES["attachments"]["name"][$key];
				if (is_file(UPLOAD_PATH . DS . 'limbo' . DS . $folder . DS . $name)) {
					$aParts = explode('.', $name);
					$aOriginal = $aParts;
					do {
						$pos = max(array(0, count($aParts) - 2));
						$aParts[$pos] = $aOriginal[$pos] . '_' . ++$seed;
						$name = implode('.', $aParts);
					} while (is_file(UPLOAD_PATH . DS . 'limbo' . DS . $folder . DS . $name));
				}
				move_uploaded_file(
						$_FILES["attachments"]["tmp_name"][$key], UPLOAD_PATH . DS . 'limbo' . DS . $folder . DS . $name
				);
				$uploaded['files'][] = $name;
			}
		}
		echo json_encode($uploaded);
		exit();
	}    
    
}

?>
