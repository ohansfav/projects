<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\Toastr;
use App\Libraries\SendEmail;

class BaseController extends Controller
{
	public $_SESSION = null;
	public $session = null;
	public $toaster = null;
	public $db = null;
	public $send_email = null;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'text','cookie','ben_helper', 'filesystem', 'inflector','multi_language_helper', 'captcha_helper','htmlpurifier_helper', 'ph', 'bengallery'];

	

	/**
	 * Constructor.
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();

		$this->session = \Config\Services::session();
		$this->toaster = new Toastr;
		$this->db = \Config\Database::connect();
		$this->send_email = new SendEmail();
	
		

	}

}
