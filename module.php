
<?php





// 

 class rdsModule extends OBFModule
{

	public $name = 'RDS Module';
	public $description = ' RADIO DATA SYSTEM module for OB ';

	public function callbacks()
	  {
		
	 //	$this->callback_handler->register_callback('LoggerModel.log','Account.login','return',0);
	   }

	public function install()	{
		$this->db->query('CREATE TABLE IF NOT EXISTS `rdsmodule1` (
              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `datetime` VARCHAR(30)  NOT NULL,
               `user_id` VARCHAR(20)  NOT NULL,
			   `sessionname` VARCHAR(25) NOT NULL,
			   `commands` TEXT NOT NULL,
			   
                PRIMARY KEY (`id`)
                ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');

		return true;

	   }

	public function uninstall()
	  {
		$this->db->query('DROP TABLE  `rdsmodule`');
		return true;
	  }
}


















    
    
  













?>