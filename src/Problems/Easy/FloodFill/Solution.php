<?php

class Solution {

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $color) {
        $currentColor = $image[$sr][$sc];
        if ($currentColor == $color) {
            return $image;
        }

        $this->dfs($image, $sr, $sc, $currentColor, $color);

        return $image;
    }

    function dfs(&$image, $sr, $sc, $currentColor, $newColor) {
        if ($sr < 0 || $sr >= count($image) ||
            $sc < 0 || $sc >= count($image[0]) ||
            $image[$sr][$sc] !== $currentColor
        ) {
            return;
        } else {
            $image[$sr][$sc] = $newColor;
            $this->dfs($image, $sr+1, $sc, $currentColor, $newColor);
            $this->dfs($image, $sr-1, $sc, $currentColor, $newColor);
            $this->dfs($image, $sr, $sc+1, $currentColor, $newColor);
            $this->dfs($image, $sr, $sc-1, $currentColor, $newColor);
        }
    }
}
