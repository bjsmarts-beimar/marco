<?php 
    require("../../../config.php");
	require_once(RAIZ."/config/CRUD/CRUD.class.php");

	class Division  Extends Crud {
		
			# Your Table name 
			protected $table = 'Divisions';
            
            #IsHidden
            protected $isHidden = 'IsHidden';
            
			# Primary Key of the Table
			protected $pk	 = 'Id';
	}

?>