<style>
    code {
        background: #ffeff0;
        word-wrap: break-word;
        box-decoration-break: clone;
        padding: .1rem .3rem .2rem;
        border-radius: .2rem;
    }
</style>
<?php

echo "Zadanie 28.<br />";
function zadanie28()
{
    $liczby = [10, 15, 9, 61, 78, 2, 44, 21, 30];
    return max($liczby);
}
echo "<code>" . zadanie28() . "</code> ";
echo "<br />";

echo "Zadanie 29. <br />";
function zadanie29()
{
    $string = "";
    $europa = [
        "włochy" => "rzym",
        "belgia" => "bruksela",
        "dania" => "kopenhaga",
        "finlandia" => "helsinki",
        "francja" => "paryż"
        // ITD ...
    ];

    foreach ($europa as $country => $capital) {
        $string .= "Kraj " . ucfirst($country) . " Stolica " . ucfirst($capital) . "\n";
    }
    return $string;
}
echo "<code>" . nl2br(zadanie29()) . "</code>";

echo "Zadanie 30. <br />";
function zadanie30()
{
    $temp = [15, 18, 22, 28, 33, 37, 30, 25, 19, 14, 13, 7, 5, 0, -1, -9];
    return array_sum($temp) / count($temp);
}
echo "<code>" . zadanie30() . "</code>";
echo "<br />";

echo "Zadanie 31. <br />";
function zadanie31(string $name)
{
    return ucfirst($name);
}
echo "<code>" . zadanie31("paweł") . "</code>";
echo "<br />";

echo "Zadanie 32. <br />";
function zadanie32(int $number)
{
    return round($number * $number * sqrt(3) / 4, 2);
}
echo "<code>" . zadanie32(4) . "</code>";
echo "<br />";

echo "Zadanie 33. <br />";
function zadanie33(int $number1, int $number2)
{
    return $number1 * $number2;
}
echo "<code>" . zadanie33(6, 9) . "</code>";
echo "<br />";

echo "Zadanie 34. <br />";
function zadanie34(int $number)
{
    return $number < 0 ? "true" : "false";
}
echo "<code>" . zadanie34(-99) . "</code>";
echo "<br />";

echo "Zadanie 35. <br />";
function zadanie35(int $number1, int $number2, int $number3)
{
    $temp = compact("number1", "number2", "number3");
    return (max($temp));
}

echo "<code>" . zadanie35(1, 5, 3) . "</code>";
echo "<br />";

echo "Zadanie 36. <br />";
function zadanie36(int $number1)
{
    return ($number1 % 3 == 0 && $number1 % 5 == 0) ? "true" : "false"; 
}

echo "<code>" . zadanie36(30) . "</code>";
echo "<br />";

echo "Zadanie 37. <br />";
function zadanie37(int $weight, float $height)
{
    $ret = "";
    $bmi = round($weight / ($height * $height), 2);

    if ($bmi < 18.5)
        $ret = "Masz niedowagę";
    elseif ($bmi > 18.5 && $bmi < 24.99)
        $ret = "Twoja waga jest prawidłowa";
    else
        $ret = "Masz nadwagę!!!";

    return $ret;
}

echo "<code>" . zadanie37(80, 1.95) . "</code>";
echo "<br />";

echo "Zadanie 38. <br />";
function zadanie38(array $numbers)
{
    return array_sum($numbers) / count($numbers);
}

echo "<code>" . zadanie38([2, 4, 6]) . "</code>";
echo "<br />";

echo "Zadanie 39. <br />";
function zadanie39(string $color, string $text)
{
    return "<font color=\"{$color}\">{$text}</font>";
}

echo "<code>" . zadanie39("#fd0000", "Tekst") . "</code>";
echo "<br />";

echo "Zadanie 40. <br />";
function zadanie40(int $money)
{
    $temp_money = $money;
    $temp = [10 => 0, 5 => 0, 2 => 0, 1 => 0];

    while ($temp_money >= 10) {
        $temp[10] +=1;
        $temp_money -= 10;
    }
    while ($temp_money >= 5) {
        $temp[5] +=1;
        $temp_money -= 5;
    }
    while ($temp_money >= 2) {
        $temp[2] +=1;
        $temp_money -= 2;
    }
    while ($temp_money >= 1) {
        $temp[1] +=1;
        $temp_money -= 1;
    }

    return "Kwota do rozmienienia {$money}zł | 10zł - {$temp[10]}x, 5zł - {$temp[5]}x, 2zł - {$temp[2]}x, 1zł - {$temp[1]}x";
}
?>

<form method="POST">
    <input type="number" name="rozmień" val="0"/>
    <input type="submit" value="Rozmień"/>
</form>

<?php

if (isset($_POST['rozmień']))
{
    echo "<code>" . zadanie40($_POST['rozmień']) . "</code>";
}

?>

