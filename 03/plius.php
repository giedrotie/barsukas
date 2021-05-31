<?php

$sk = 1;
echo ++$sk * $sk++;
// 2 * 2 = 2

/*
paemem skaiciu 1, ji padidinom (++$sk), 
tada paemem kita sk (jis jau yra 2, nes dabar sk reiksme yra 2!), 
kadangi sk++ (++) yra po, vadinasi pirma atliksim * veiksma 
ir tik tada ta (antra) sk++ padidinsim.
kai atliekam daugyba (is karto gauname atsakyma)
ir padidint sk++ (t.y. ++) nebera prasmes, 
nes jau yra gautas atsakymas tad to sk++ (t.y. jo ++) taip ir nebepanaudojam!!!!
*/


echo '<br>';
$sk = 1;
echo $sk++ * $sk++;
// 1 * 2 = 2

echo '<br>';
$sk = 1;
echo $sk++ * ++$sk;
// 1 * 3 = 3

echo '<br>';
$sk = 1;
echo ++$sk * ++$sk;
// 2 * 3 = 6


echo '<hr>';


$sk = 1;
echo ++$sk + $sk++;
// 2 + 2 = 4

echo '<br>';
$sk = 1;
echo $sk++ + $sk++;
// 1 + 2 = 3


echo '<br>';
$sk = 1;
echo $sk++ + ++$sk;
// 1 + 3 = 4


echo '<br>';
$sk = 1;
echo ++$sk + ++$sk;
// 2 + 3 = 5