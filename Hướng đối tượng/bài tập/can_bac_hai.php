<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="a">X^2 +
    <input type="number" name="b">X +
    <input type="number" name="c"> = 0
    <button type="submit">Tinh</button>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    $quad = new QuadraticEquation($a, $b, $c);
    $quad->calculator();
}
class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA(): int
    {
        return $this->a;
    }
    public function getB(): int
    {
        return $this->b;
    }
    public function getC(): int
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        return (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function getRoot2()
    {
        return  (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);

    }
    public function calculator() {

        if ($this->a == 0) {
            // code them phan giai phuong trinh bac 1
        } else {
            if ($this->getDiscriminant() < 0) {
                echo "The equation has no roots";
            } else if ($this->getDiscriminant() == 0){
                echo "Nghiem kep = " . (-$this->b) / (2 * $this->a);
            } else {
                echo "2 nghiem phan biet r1= " . $this->getRoot1() . " va r2= " . $this->getRoot2();
            }
        }

    }

}
