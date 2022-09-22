<?php
	/**
	 * Example Application
	 *
	 * @package Example-application
	 */
	// session_start();
	// if(!empty($_SESSION['user_history'])){
	// 	session_destroy();
	// }
//  include('index.php');
	require 'libs/Smarty.class.php';
// array with foreach Iteration
	$smarty = new Smarty;
	// $smarty->assign('Contacts',
    // array('fax' => '555-222-9876',
    //       'email' => 'zaphod@slartibartfast.example.com',
    //       'phone' => array('home' => '555-444-3333',
    //                        'cell' => '555-111-1234')
    //                        )
    //      );
		 
		//  $smarty->assign('contacts', array(
		// 							 array('phone' => '555-555-1234',
		// 								   'fax' => '555-555-5678',
		// 								   'cell' => '555-555-0357'),
		// 							 array('phone' => '800-555-4444',
		// 								   'fax' => '800-555-3333',
		// 								   'cell' => '800-555-2222')
		// 							 ));

// function smarty_function_eightball($params)
// {
//     $answers = array('Yes',
//                      'No',
//                      'No way',
//                      'Outlook not so good',
//                      'Ask again soon',
//                      'Maybe in your reality');

//     $result = array_rand($answers);
//     return $answers[$result];
// }


//$smarty->assign('categories', smarty_function_eightball(10));	


$smarty->assign('Title', "Phsycics predict world didn't end");
$smarty->assign('articleTitle', 'next x-men film, x3, delayed.');
$smarty->assign('a',1);
//Data Format
$config['date'] = '%I:%M %p';
$config['time'] = '%H:%M:%S';
$smarty->assign('config', $config);
$smarty->assign('yesterday', strtotime('-1 day'));
//default
$smarty->assign('articleTitle', 'Dealers Will Hear Car Talk at Noon.');
$smarty->assign('email', '');
//escape
$smarty->assign('aTitle',
                "'Stiff Opposition Expected to Casketless Funeral Plan'"
                );
//indent 
$smarty->assign('TitleA',
                'NJ judge to rule on nude beach.
Sun or rain expected today, dark tonight.
Statistics show that teen pregnancy drops off significantly after 25.'
                );
$smarty->assign('Address','smarty@example.com');
//comining modifier

$smarty->assign('modifier', 'Smokers are Productive, but Death Cuts Efficiency.');
//function
$smarty->assign('to',10);
$people = array('fname' => 'John', 'lname' => 'Doe', 'email' => 'j.doe@example.com');
$smarty->assign('myPeople', $people);


$data = array(1001,1002,1003,1004,1005);
$smarty->assign('rows',$data);


//custom Fuction
$str = 'The server name is {$smarty.server.SERVER_NAME|upper} '
       .'at {$smarty.server.SERVER_ADDR}';
$smarty->assign('foo',$str);

$smarty->assign('cust_checkboxes', array(
	1000 => 'Joe Schmoe',
	1001 => 'Jack Smith',
	1002 => 'Jane Johnson',
	1003 => 'Charlie Brown')
  );
$smarty->assign('customer_id', 1001);

$arr['Sport'] = array(6 => 'Golf', 9 => 'Cricket',7 => 'Swim');
$arr['Rest']  = array(3 => 'Sauna',1 => 'Massage');
$smarty->assign('lookups', $arr);
$smarty->assign('fav', 7);

//define('SMARTY_DIR', 'c:/webroot/libs/Smarty-v.e.r/libs/');
// $dsn = 'mysql:host=localhost;dbname=test'; 
//   $login = 'test'; 
//   $passwd = 'test'; 

  // setting PDO to use buffered queries in mysql is 
  // important if you plan on using multiple result cursors 
  // in the template. 

//   $db = new PDO($dsn, $login, $passwd, array( 
//      PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 

//   $res = $db->prepare("select * from users"); 
//   $res->execute(); 
//   $res->setFetchMode(PDO::FETCH_LAZY); 

//   // assign to smarty 
//   $smarty->assign('res',$res); 

//Smarty Class
// $smarty->allow_php_templates = true;
//$smarty->autoload_filters = array('pre' => array('trim', 'stamp'),'output' => array('convert'));
//caching
$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
// clear only cache for index.tpl
$smarty->clearCache('index.tpl');

// clear out all cache files
$smarty->clearAllCache();
//Advance Features
$smarty->enableSecurity();


// $tpl = $smarty->createTemplate('index.tpl);
// $tpl->registerPlugin('modifier','mymodifier');
// $smarty->display($tpl);
function smarty_function_yourPlugin(array $params, Smarty_Internal_Template $template)
{
  // load plugin depended upon
  $template->smarty->loadPlugin('smarty_shared_make_timestamp');
  // plugin code
}

// function smarty_modifier_truncate($string, $length = 80, $etc = '...',
// $break_words = false)
// {
// if ($length == 0)
// return '';

// if (strlen($string) > $length) {
// $length -= strlen($etc);
// $fragment = substr($string, 0, $length+1);
// if ($break_words)
// $fragment = substr($fragment, 0, -1);
// else
// $fragment = preg_replace('/\s+(\S+)?$/', '', $fragment);
// return $fragment.$etc;
// } else
// return $string;
// }

$smarty->display('mypage.tpl');
//Backwards Compatibility Wrapper
// require_once('path/to/smarty/libs/SmartyBC.class.php);
// $smarty = new SmartyBC();

// $startDate = makeTimeStamp($startDate_Year, $startDate_Month, $startDate_Day);

// function makeTimeStamp($year='', $month='', $day='')
// {
//    if(empty($year)) {
//        $year = strftime('%Y');
//    }
//    if(empty($month)) {
//        $month = strftime('%m');
//    }
//    if(empty($day)) {
//        $day = strftime('%d');
//    }

//    return mktime(0, 0, 0, $month, $day, $year);
// }
$smarty->display('index.tpl');

//$smarty->display('file:index.tpl'); // same as above

//stream for php
//$smarty->display('foo:bar.tpl');
//$smarty->display('extends:parent.tpl|child.tpl|grandchild.tpl'); 


// class Smarty_Resource_Mysql extends Smarty_Resource_Custom {
// 	// PDO instance
// 	protected $db;
// 	// prepared fetch() statement
// 	protected $fetch;
// 	// prepared fetchTimestamp() statement
// 	protected $mtime;
   
// 	public function __construct() {
// 		try {
// 			$this->db = new PDO("mysql:dbname=test;host=127.0.0.1", "smarty", "smarty");
// 		} catch (PDOException $e) {
// 			throw new SmartyException('Mysql Resource failed: ' . $e->getMessage());
// 		}
// 		$this->fetch = $this->db->prepare('SELECT modified, source FROM templates WHERE name = :name');
// 		$this->mtime = $this->db->prepare('SELECT modified FROM templates WHERE name = :name');
// 	}
	
// 	/**
// 	 * Fetch a template and its modification time from database
// 	 *
// 	 * @param string $name template name
// 	 * @param string $source template source
// 	 * @param integer $mtime template modification timestamp (epoch)
// 	 * @return void
// 	 */
// 	protected function fetch($name, &$source, &$mtime)
// 	{
// 		$this->fetch->execute(array('name' => $name));
// 		$row = $this->fetch->fetch();
// 		$this->fetch->closeCursor();
// 		if ($row) {
// 			$source = $row['source'];
// 			$mtime = strtotime($row['modified']);
// 		} else {
// 			$source = null;
// 			$mtime = null;
// 		}
// 	}
	
// 	/**
// 	 * Fetch a template's modification time from database
// 	 *
// 	 * @note implementing this method is optional. Only implement it if modification times can be accessed faster than loading the comple template source.
// 	 * @param string $name template name
// 	 * @return integer timestamp (epoch) the template was modified
// 	 */
// 	protected function fetchTimestamp($name) {
// 		$this->mtime->execute(array('name' => $name));
// 		$mtime = $this->mtime->fetchColumn();
// 		$this->mtime->closeCursor();
// 		return strtotime($mtime);
// 	}
//    }
   
   
//    require_once 'libs/Smarty.class.php';
//    $smarty = new Smarty();
//    $smarty->registerResource('mysql', new Smarty_Resource_Mysql());
   
//    // using resource from php script
//    $smarty->display("mysql:index.tpl");

   
 
?>
