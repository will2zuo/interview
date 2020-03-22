<?php

class Demo
{
    /**
     * 快速排序
     *
     * @param $arr
     * @return array
     */
    public function quickSort($arr)
    {
        if (count($arr) <= 1) {
            return $arr;
        }

        $firstOne = $arr[0];
        $right = $left = [];

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $firstOne) {
                $right[] = $arr[$i];
            }else {
                $left[] = $arr[$i];
            }
        }

        $left = $this->quickSort($left);
        $left[] = $firstOne;
        $right = $this->quickSort($right);
        $result = array_merge($left, $right);
        return $result;
    }
}
