<?php

class Sofa {

  public static $instance_count = 0;

  public $seats = 3;
  public $arms = 2;
  public function __construct($seats, $arms) {
	self::$instance_count++;
	$this->seats = $seats;
	$this->arms = $arms;
}

}

	class Couch extends Sofa {
	  var $arms = 0;
	}

class Loveseat extends Sofa {
  var $seats = 2;
}

$sofa = new Sofa(4,7);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';

$couch = new Couch(3,5);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

$loveseat = new Loveseat(4,8);
echo 'Loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count: ' . Sofa::$instance_count . '<br />';

?>
