<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Laybrinth Answer class
 * @author Seoung Choi <choisw0823@kaist.ac.kr>
 * @copyright Copyright (c) 학생문화공간위원회 
 *
 *
 */

class Dkfjeslea extends CI_Controller {
	public function index(){
	#	if (!isset($_SESSION['type']) || $_SESSION['type'] != 'admin'){
	#		echo '관리자 계정으로 로그인해주세요';
	#	}
		$this->load->view('dkfjeslea');
	}
}


