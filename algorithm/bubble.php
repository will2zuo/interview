<?php

class Bubble
{
    /**
     * 冒泡排序
     *
     * @param $arr
     * @return mixed
     */
    public function demo($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    // > 从小到大；< 从大到小
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }

        return $arr;
    }
}
