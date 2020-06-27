<?php
function StroopEffect($amount) {
    if ($amount != 0) {
        $colors = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];
        for ($i = 0; $i <= 4; $i++) {
            $rand_keys = array_rand($colors, 2);
            if ($colors[$rand_keys[0]] != $colors[$rand_keys[1]]) {
                $str = '<span style="color: ' . $colors[$rand_keys[0]] . '">' . $colors[$rand_keys[1]] . '</span> &nbsp';
                echo $str;
            }
        }
        echo '<br/>';
        return StroopEffect($amount - 1);
    }
}

StroopEffect(5);
