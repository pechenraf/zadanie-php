<?php

class Rectangle {
    private float $length;
    private float $width;

    public function __construct(float $length, float $width) {
        if ($length < 0 || $width < 0) {
            throw new InvalidArgumentException("Длина и ширина должны быть неотрицательными.");
        }
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea(): float {
        return $this->length * $this->width;
    }

    public function getPerimeter(): float {
        return 2 * ($this->length + $this->width);
    }
}
$rectangle = new Rectangle(5.0, 3.0);
echo "Площадь прямоугольника: " . $rectangle->getArea() . "\n";
echo "Периметр прямоугольника: " . $rectangle->getPerimeter() . "\n";

