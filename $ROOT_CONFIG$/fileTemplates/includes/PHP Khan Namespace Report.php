	/**
	 * Return the table selector
	 * @return String
	 */
	protected function getSqlTables(){
	    #if(${Table} != '')
        return "FROM `${Table}`";
		#else
        //@todo settup table hanlding
		#end
    }