<?php

namespace Teste\Ster\Paint;

class Painting
{
    public array $characterMatrix = [];

    private int $line = 0;

    private int $column = 0;

    public function setMatrix(array $characterMatrix)
    {
        $this->characterMatrix = $characterMatrix;
        $this->line = count($characterMatrix[1]);
        $this->column = count($characterMatrix);
    }

    public function paint(int $x, int $y, string $oldColor, string $newColor)
    {
        if ($x < 0 || $x >= $this->line || $y < 0 || $y >= $this->column) {
            return;
        }

        if (!isset($this->characterMatrix[$x][$y]) || $this->characterMatrix[$x][$y] !== $oldColor) {
            return;
        }

        $this->characterMatrix[$x][$y] = $newColor;

        $this->paint($x + 1, $y, $oldColor, $newColor);
        $this->paint($x - 1, $y, $oldColor, $newColor);
        $this->paint($x, $y + 1, $oldColor, $newColor);
        $this->paint($x, $y - 1, $oldColor, $newColor);
    }

    public function getPainting(): array
    {
        return $this->characterMatrix;
    }
}