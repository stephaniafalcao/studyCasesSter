<?php

namespace Teste\Ster\Paint;

class PaintBucket
{

    private Painting $painting;

    private array $characterMatrix;

    public function __construct(Painting $painting, array $characterMatrix)
    {
        $this->painting = $painting;
        $this->characterMatrix = $characterMatrix;
        $this->painting->setMatrix($characterMatrix);
    }

    public function paintCharacter(array $area, string $color): array
    {
        $prevC = $this->characterMatrix[$area[0]][$area[1]];

        $this->painting->paint($area[0], $area[1], $prevC, $color);

        return $this->painting->getPainting();
    }
}