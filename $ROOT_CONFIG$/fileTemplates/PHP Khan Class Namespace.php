<?php
/** ${NAME} Class*/
//Settup the namespacing
namespace ${Namespace};
use \\${Namespace} as ${Namespace};

/**
 * ${NAME} class ${Description}
 * @category   Core Functionality
 * @package    Khan
 * @author     George Weller <george@ico3.com>
 * @copyright  2013 ICO3 LTD
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0 Initual Release
 * @since      1.0.0
 */
class ${NAME}Core extends ${Namespace}{

#if(${Namespace} == 'Report')
    #parse("PHP Khan Namespace Report.php")
#elseif(${Namespace} == 'Importer')
    #parse("PHP Khan Namespace Importer.php")
#end
}
 
if(!@${DS}core){
	/**
	* Top level version of the class
	* @package	KhanBlank
	*/
	class ${NAME} extends ${NAME}Core{}
}