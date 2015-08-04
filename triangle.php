<?php
class Triangle
{
    private $side_one;
    private $side_two;
    private $side_three;

    function __construct($triangle_side_one, $triangle_side_two, $triangle_side_three)
    {
        $this->side_one = $triangle_side_one;
        $this->side_two = $triangle_side_two;
        $this->side_three = $triangle_side_three;
    }

    function getSideOne()
    {
      return $this->side_one;
    }

    function getSideTwo()
    {
      return $this->side_two;
    }

    function getSideThree()
    {
      return $this->side_three;
    }

    function setSideOne($new_side_one)
    {
      $this->side_one = (integer) $new_side_one;
    }

    function setSideTwo($new_side_two)
    {
      $this->side_two = (integer) $new_side_two;
    }

    function setSideThree($new_side_three)
    {
      $this->side_three = (integer) $new_side_three;
    }

    function validTriangle()
    {
      if (($this->side_one + $this->side_two > $this->side_three) ||
          ($this->side_one + $this->side_three > $this->side_two) ||
          ($this->side_two + $this->side_three > $this->side_one)
          ) {
            if (($this->side_one) == ($this->side_two) == ($this->side_three)) {
                echo "This is an equilateral triangle";
            } else if ($this->side_one == $this->side_two != $this->side_three ||
                       $this->side_one == $this->side_three != $this->side_two ||
                       $this->side_two == $this->side_three != $this->side_one
                      ) {
                      echo "This is an isosceles triangle";
            } else ($this->side_one != $this->side_two != $this->side_three) {
                      echo "This is an scalene triangle";
            }
          } else {
            echo "The combination of three numbers does not make a valid triangle."
          }
    }


}

$new_triangle = new Triangle($_GET["side_one"], $_GET["side_two"], $_GET["side_three"]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Triangle</title>
</head>
<body>
    <h1>Your Triangle</h1>
    <ul>
      <?php
        $final_triangle = $new_triangle->validTriangle();
        echo "$final_triangle";

      ?>
    </ul>
</body>
</html>
