<?php
require('car.php');
require('honda.php');
require('nissan.php');
require('ferrari.php');

if(isset($_POST['number']) && $_POST['number'] > 0) {
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);

    $honda = new Honda();
    $nissan = new Nissan();
    $ferrari = new Ferrari();

    $cars = array($honda, $nissan, $ferrari);
    $total = 0;

    for ($i=0; $i<$number; $i++) {
        $car = array_rand($cars, 1);
        $car_value = $cars[$car];
        $total += $car_value->price;
        print('メーカー：' . $car_value->maker . '<br/>');
        print('価格：' . $car_value->price . '円<br/><br/>');
    }
    print('合計' . $total . '円<br/>');
    print('平均' . round($total / $number) . '円');


} else {
    print('件数を登録ください');
}
?>

<form action="" method="post">
<p>※登録数分の車がランダムで出力されます。<br/>また、各メーカー毎に車体価格の合計を計算します。</p>
<input type="number" name="number">
<input type="submit" value="登録">
</form>
