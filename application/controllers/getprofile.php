<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Adam Whitney
 * @link		http://outergalactic.org/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Getprofile extends REST_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		
	}
		
	function get()
    { 	
    	//$deviceid = $this->_get('deviceid');
    	//$userid = $this->_get('userid');
		/*$success=array('status' => '200','message' => 'success','data'=>$res);
		$this->response($success, '200');
	
		$failed=array('status' => '500','errorDescription'=>'Profile info does not exists', 'message' => 'failed');
		$this->response($failed, '500');	*/	

		$failed=array('status' => '201','errorDescription'=>'Please login to get the Access', 'message' => 'failed');
		$this->response($failed, '201');			
  
    }
    
    function post()
    {
		/*$data = $this->_post_args;
   		$deviceid = $data['deviceid'];
   		$userid = $data['userid'];*/
    	 // validation ok

	    					
		/*$success=array('status' => '200','message' => 'success','data'=>$res);
		$this->response($success, '200');*/

	    		
		/*$failed=array('status' => '500','errorDescription'=>'Profile info does not exists', 'message' => 'failed');
		$this->response($failed, '500');*/		

		$failed=array('status' => '201','errorDescription'=>'Please login to get the Access', 'message' => 'failed');
		$this->response($failed, '201');		

    }
    
    public function put()
    {
		/*$data = $this->_post_args;
   		$deviceid = $data['deviceid'];
   		$userid = $data['userid'];*/
    	 // validation ok

        $failed=array('status' => '201','errorDescription'=>'Please login to get the Access', 'message' => 'failed');
        $this->response($failed, '201');    
    
   
    }
        
    function delete()
    {
        $failed=array('status' => '201','errorDescription'=>'Please login to get the Access', 'message' => 'failed');
        $this->response($failed, '201');    
    	
    }
}