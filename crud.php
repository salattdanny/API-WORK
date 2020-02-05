<?php
	//We create 
	interface crud{
		/*All these methods haveto be implemented by any 
		class thet implements these interface*/
		public function save();
		public function readAll();
		public function readUnique();
		public function search();
		public function update();
		public function removeOne();
		public function removeAll();
	}
?>