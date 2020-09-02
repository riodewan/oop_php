<?php
class komputer
{
	public $prosesor;
	public $memory;

	public function __construct($prosesor,$memory = "12 GB")
	{
		$this->prosesor = $prosesor;
		$this->memory = $memory;
	}
}
$komputersaya = new komputer("Core i7","8 GB");
echo $komputersaya->prosesor;
echo " | ";
echo $komputersaya->memory;
?>