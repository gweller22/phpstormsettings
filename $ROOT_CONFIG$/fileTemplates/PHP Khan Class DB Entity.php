<?php
/** ${NAME} Class */
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
class ${NAME}Core extends DatabaseEntity{

    /**
     * The table this entity is for
     * @var ${DS}_table String
     * @access protected
     */
    protected static ${DS}_table = '${Table}';
}
 
if(!@${DS}core){
	/**
	* Top level version of the class
	* @package	KhanBlank
	*/
	class ${NAME} extends ${NAME}Core{}
}