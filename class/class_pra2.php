<!-- <?php
 class Point {
    public $x;
    public $y;

    public function calculateDistance(Point $other) {
        return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
    }
}

// Example Usage:
$point1 = new Point();
$point1->x = 1;
$point1->y = 2;

$point2 = new Point();
$point2->x = 4;
$point2->y = 6;

echo $point1->calculateDistance($point2);



?> -->

<?php
class Point2D {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function setCoordinates($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getCoordinates() {
        return "($this->x, $this->y)";
    }
}

// Usage
$point = new Point2D(3, 5);
echo "Coordinates: " . $point->getCoordinates() . PHP_EOL;

$point->setX(7);
$point->setY(9);
echo "New Coordinates: " . $point->getCoordinates() . PHP_EOL;


?>
