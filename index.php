<pre>
<?php
require_once 'array.php';

// Callback функция сортировки массива для uasort
function my_sort($a, $b){
  if(!is_string($a)){
    return $a['PRICE'] - $b['PRICE'];
  }
}

// Сортировка вложенного ассоциативного массива при помощи рекурсии
function sortNestedArray(&$a) {
  uasort($a, 'my_sort');
  foreach ($a as $key => &$value) {
    if (is_array($value)) {
        sortNestedArray($value);
    }
  }
}

// Вывод на экран несортированного и сортированного массивов
print_r($array);
sortNestedArray($array);
print_r($array);
?>
</pre>
