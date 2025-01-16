<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Модуль 11. Введение в PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Модуль 11. Введение в PHP</h1>
    </header>
    <main>
        <table>
            <caption>Таблица истинности PHP</caption>
            <tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>
            <tr>
                <?php $x = 0; $y = 0; ?>
            	<th><?php echo $x; ?></th>
            	<th><?php echo $y; ?></th>
            	<td><?php 
                    $res = !$x;
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $res = $x || $y;
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = $x && $y;
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($x xor $y);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            	<?php $x = 0; $y = 1; ?>
            	<th><?php echo $x; ?></th>
            	<th><?php echo $y; ?></th>
            	<td><?php 
                    $res = !$x;
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $res = $x || $y;
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = $x && $y;
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($x xor $y);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            	<?php $x = 1; $y = 0; ?>
            	<th><?php echo $x; ?></th>
            	<th><?php echo $y; ?></th>
            	<td><?php 
                    $res = !$x;
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $res = $x || $y;
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = $x && $y;
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($x xor $y);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            	<?php $x = 1; $y = 1; ?>
            	<th><?php echo $x; ?></th>
            	<th><?php echo $y; ?></th>
            	<td><?php 
                    $res = !$x;
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $res = $x || $y;
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = $x && $y;
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($x xor $y);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
        </table>

        <table>
            <caption>Гибкое сравнение в PHP</caption>
            <tr><th> </th><th><?php echo $a = 'true';?></th><th><?php echo $b = 'false';?></th><th><?php echo $c = 1;?></th><th><?php echo $d = 0;?></th><th><?php echo $e = -1;?></th><th><?php echo $f = '"1"';?></th><th><?php echo $g = 'null';?></th><th><?php echo $h = '"php"';?></th></tr>
            <tr>
                <th><?php echo $a = 'true';?></th>
            	<td><?php
                    $a = true; 
                    $res = ($a == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $a = true; $b = false;
                    $res = ($a == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php
                    $a = true;
                    $res = ($a == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $a = true;
                    $res = ($a == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true;
                    $res = ($a == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $a = true; $f = "1";
                    $res = ($a == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true; $g = null;
                    $res = ($a == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true; $h = "php"; 
                    $res = ($a == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $b = 'false';?></th>
            	<td><?php 
                    $b = false; $a = true;
                    $res = ($b == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; 
                    $res = ($b == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($b == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($b == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false;
                    $res = ($b == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $f = "1";
                    $res = ($b == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $g = null;
                    $res = ($b == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $h = "php";
                    $res = ($b == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $c = 1;?></th>
            	<td><?php 
                    $a = true;
                    $res = ($c == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($c == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($c == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($c == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($c == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($c == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($c == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($c == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $d = 0;?></th>
            	<td><?php 
                    $a = true;
                    $res = ($d == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($d == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($d == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($d == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($d == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($d == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($d == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($d == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $e = -1;?></th>
            	<td><?php
                    $a = true; 
                    $res = ($e == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($e == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($e == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($e == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($e == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($e == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($e == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($e == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $f = '"1"';?></th>
            	<td><?php 
                    $a = true ;$f = "1";
                    $res = ($f == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false; $f = "1";
                    $res = ($f == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $f = "1";
                    $res = ($f == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $f = "1";
                    $res = ($f == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($f == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($f == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $g = null;
                    $res = ($f == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $h = "php";
                    $res = ($f == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $g = 'null';?></th>
            	<td><?php
                    $a = true; $g = null;
                    $res = ($g == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; $g = null; 
                    $res = ($g == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php
                    $g = null; 
                    $res = ($g == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $g = null;
                    $res = ($g == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($g == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $g = null;
                    $res = ($g == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($g == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null; $h = "php";
                    $res = ($g == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $h = '"php"';?></th>
            	<td><?php 
                    $a = true; $h = "php";
                    $res = ($h == $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; $h = "php"; 
                    $res = ($h == $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $h = "php";
                    $res = ($h == $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $h = "php";
                    $res = ($h == $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($h == $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $f = "1";
                    $res = ($h == $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $h = "php";
                    $g = null; 
                    $res = ($h == $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($h == $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
        </table>

          <table>
            <caption>Жёсткое сравнение в PHP</caption>
            <tr><th> </th><th><?php echo $a = 'true';?></th><th><?php echo $b = 'false';?></th><th><?php echo $c = 1;?></th><th><?php echo $d = 0;?></th><th><?php echo $e = -1;?></th><th><?php echo $f = '"1"';?></th><th><?php echo $g = 'null';?></th><th><?php echo $h = '"php"';?></th></tr>
            <tr>
                <th><?php echo $a = 'true';?></th>
            	<td><?php
                    $a = true; 
                    $res = ($a === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $a = true; $b = false;
                    $res = ($a === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php
                    $a = true;
                    $res = ($a === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $a = true;
                    $res = ($a === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true;
                    $res = ($a === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $a = true; $f = "1";
                    $res = ($a === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true; $g = null;
                    $res = ($a === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $a = true; $h = "php"; 
                    $res = ($a === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $b = 'false';?></th>
            	<td><?php 
                    $b = false; $a = true;
                    $res = ($b === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; 
                    $res = ($b === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($b === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($b === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false;
                    $res = ($b === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $f = "1";
                    $res = ($b === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $g = null;
                    $res = ($b === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $b = false; $h = "php";
                    $res = ($b === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $c = 1;?></th>
            	<td><?php 
                    $a = true;
                    $res = ($c === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($c === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($c === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($c === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($c === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($c === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($c === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($c === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $d = 0;?></th>
            	<td><?php 
                    $a = true;
                    $res = ($d === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($d === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($d === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($d === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($d === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($d === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($d === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($d === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $e = -1;?></th>
            	<td><?php
                    $a = true; 
                    $res = ($e === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false;
                    $res = ($e === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($e === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $res = ($e === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $res = ($e === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($e === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($e === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($e === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $f = '"1"';?></th>
            	<td><?php 
                    $a = true ;$f = "1";
                    $res = ($f === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php 
                    $b = false; $f = "1";
                    $res = ($f === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $f = "1";
                    $res = ($f === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $f = "1";
                    $res = ($f === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($f === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1";
                    $res = ($f === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $g = null;
                    $res = ($f === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $h = "php";
                    $res = ($f === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $g = 'null';?></th>
            	<td><?php
                    $a = true; $g = null;
                    $res = ($g === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; $g = null; 
                    $res = ($g === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php
                    $g = null; 
                    $res = ($g === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $g = null;
                    $res = ($g === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($g === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $f = "1"; $g = null;
                    $res = ($g === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null;
                    $res = ($g === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $g = null; $h = "php";
                    $res = ($g === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
            <tr>
            <th><?php echo $h = '"php"';?></th>
            	<td><?php 
                    $a = true; $h = "php";
                    $res = ($h === $a);
                    echo $res ? 1 : 0; 
                ?></td>
            	<td><?php
                    $b = false; $h = "php"; 
                    $res = ($h === $b);
                    echo $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $h = "php";
                    $res = ($h === $c);
                    echo  $res ? 1 : 0;
                ?></td>
            	<td><?php 
                    $h = "php";
                    $res = ($h === $d);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($h === $e);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $f = "1";
                    $res = ($h === $f);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php
                    $h = "php";
                    $g = null; 
                    $res = ($h === $g);
                    echo  $res ? 1 : 0;
                ?></td>
                <td><?php 
                    $h = "php";
                    $res = ($h === $h);
                    echo  $res ? 1 : 0;
                ?></td>
            </tr>
        </table>
    </main>
</body>
</html>