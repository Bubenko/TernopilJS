<!DOCTYPE html>
<html>
<body>

<h2>Сортування в алфавітному порядку(англійська мова)</h2>

	<?php
		$cars = array("Vova", "Misha", "Petro", "Vitalik", "Bogdan","Andrew");
		sort($cars);

		$length = count($cars);
		for($i = 0; $i < $length; $i++) {
		    echo $cars[$i] . " / ";
		}
		echo "<br><br>";
	?>

<h2>Сортування чисел по зростанню</h2>

	<?php
		$numbers = array(4, 6, 2, 22, 11, 55, 2, 14, 100, 0);
		sort($numbers);

		foreach($numbers as $sort){
	            echo $sort . ' : ';
	            }
	    echo "<br><br>";
	?>

<h2>Сортування чисел Buble sort (метод бульбашки)</h2>

	<?php
		$array = array(4, 6, 2, 22, 11, 55, 2, 14, 100, 0);
		$loop = true;
				while ($loop) {
				$loop = false;
				for ($i = 0; $i < count($array)-1; $i++) {
					if ($array[$i] > $array[$i + 1]) {
				    $elem_a = $array[$i];
				    $elem_b = $array[$i + 1];
				    $array[$i] = $elem_b;
				    $array[$i + 1] = $elem_a;

				    $loop = true;
					}
				}}

		foreach($array as $sort){
	            echo $sort . ' : ';
	            }
	    

	?>

</body>
</html>