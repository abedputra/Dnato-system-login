<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once(FCPATH."vendor/thetechnicalcircle/codeigniter_social_login/src/Social.php");

class Login extends CI_Controller 
{
	function __construct(){
    		parent::__construct();
    		$this->load->library('session');
    		$this->load->helper('url');
    		$this->load->model('user_model');
  	}
  
	public function index(){
		$data[]='';//temp
		$this->load->view('header', $data);
        $this->load->view('container');
        $this->load->view('login');
        $this->load->view('footer');
	}

	public function Auth(){
		die("In the login auth");
	}
	
	private function login_facebook() {
		die("qwer");
		$site_url = $this->config->item('base_url');
		$fb_App_id = "YOUR FB APP ID";
		$fb_secret = "YOUR FB APP SECRET";
		$fb_scope = "public_profile,email,user_friends";
		$social_instance = new Social();
		$fbData = $social_instance->facebook_connect(NULL,$this->session,$site_url,$fb_App_id,$fb_secret,$fb_scope);
		if(!empty($fbData['redirectURL'])) {
			redirect($fbData['redirectURL']);
		} else {
			if(!empty($fbData['id'])) {
				echo "<pre>";
				print_r($fbData);
				echo "</pre>";die; /* all the data returned by facebook will be in this variable (Array). Play with it. */
			}
		}
	}
	
	private function login_twitter() {
  		$site_url = $this->config->item('base_url')."/";
  		$client_id = "YOUR TWITTER CLIENT ID";
  		$client_secret = "YOUR TWITTER CLIENT SECRET";
  		$social_instance = new Social();
  		$twtData = $social_instance->twitter_connect($client_id,$client_secret,$site_url);
  		if(!empty($twtData['redirectURL'])) {
  			redirect($twtData['redirectURL']);
  	  	} else {
  			if(!empty($twtData['id'])) {
  				echo "<pre>";print_r($twtData);echo "</pre>";die();
  			}
  		}
  	}
  
  	private function login_linkedin() {
		$site_url = $this->config->item('base_url')."/";
		$client_id = "YOUR LINKED IN CLIENT ID";
		$client_secret = "YOUR LINKED IN SECRET";
		$social_instance = new Social();
		$ldnData = $social_instance->linkedin_connect(NULL,$site_url,$client_id,$client_secret);
		if(!empty($ldnData['redirectURL'])) {
			 redirect($ldnData['redirectURL']);
		} else {
			if(!empty($ldnData['id'])) {
				echo "<pre>";print_r($ldnData);echo "</pre>";die();
		  	}
		}
	}
  
  	private function login_gmail() {
		$site_url = $this->config->item('base_url')."/";
		$client_id = "YOUR GMAIL CLIENT ID";
		$client_secret = "YOUR GMAIL CLIENT SECRET";
		$client_api_key = "GMAIL API KEY";
		$social_instance = new Social();
		$gmailData = $social_instance->gmail_connect(NULL,$site_url,$client_id,$client_secret,$client_api_key);
		if(!empty($gmailData['redirectURL'])) {
			redirect($gmailData['redirectURL']);
		} else {
			if(!empty($gmailData['email'])) {
				echo "<pre>";print_r($gmailData);echo "</pre>";die();
			}
		}
	}
	
	private function login_yahoo() {
  		$site_url = $this->config->item('base_url')."/";
  		$social_instance = new Social();
  		$yahooData = $social_instance->yahoo_connect($site_url);
  		if(!empty($yahooData['redirectURL'])) {
  			redirect($yahooData['redirectURL']);
  		} else {
  			if(!empty($yahooData['email'])) {
  				echo "<pre>";print_r($yahooData);echo "</pre>";die();
  			}
  		}
  	}
  
  	private function login_foursquare() {
  		$site_url = $this->config->item('base_url')."/";
  		$client_id = "FOURSQUARE CLIENT ID";	
  		$client_secret = "FOURSQUARE CLIENT SECRET";
  		$social_instance = new Social();
  		$fsData = $social_instance->foursquare_connect($client_id,$client_secret,$site_url);
  		if(!empty($fsData['redirectURL'])) {
  			redirect($fsData['redirectURL']);
  		} else {
  			if(!empty($fsData['id'])) {
  				echo "<pre>";print_r($fsData);echo "</pre>";die();
  			}
  		}
  	}
}
