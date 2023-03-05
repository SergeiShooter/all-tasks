<?php
/**
Задание 2.1
 */
function task1 (array $string, bool $return = true) {
    $res = implode(array_map(function (string $str) {
        return "<p>$str</p>";
    }, $string));
    if ($return) {
        return $res;
    }
    echo $res;
}

/**
Задание 2.2
 */
function task2(string $act, ...$args) {
    foreach ($args as $arg) {
        if (is_int($arg) && !is_float($arg));
    }
    if ($act =='+') {
        return array_sum($args);
    } elseif ($act == '-') {
        return array_shift($args) - array_sum($args);
    }
      elseif ($act == '/') {
          $result = array_shift($args);
          foreach ($args as $arg) {
              if ($arg == 0) {
                  return 'ERROR';
              }
              $result = $result / $arg;
          }
          return $result;
      }
      elseif ($act == '*')  {
          $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
      }
            return $result;

    }


/**
Задание 2.3
 */
function task3($x, $y)
{
    if (!is_int($x))  {
        return false;
    }
    if (!is_int($y))  {
        return false;
    }
    if ($x < 0 || $y < 0) {
        return false;
    }
    $res = '<table>';
    for ($tr = 1; $tr <= $x; $tr++) {

        $res .= '<tr>';

        for ($td = 1; $td <= $y; $td++) {
            $res .= '<td>';

            $res .= $tr * $td;
            $res .= '</td>';
        }

        $res .= '</tr>';
    }
    $res .= '</table>';
    echo $res;
}




/**
Задание 2.6
 */
function test_file_open (string $filename)
{
    $fp = fopen($filename, 'r');
    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}