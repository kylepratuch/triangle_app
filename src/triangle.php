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
      if (($this->side_one + $this->side_two >= $this->side_three) &&
          ($this->side_one + $this->side_three >= $this->side_two) &&
          ($this->side_two + $this->side_three >= $this->side_one)
          ) {
            if ($this->side_one == $this->side_two && $this->side_one == $this->side_three) {
                return "This is an equilateral triangle.";
            } elseif (($this->side_one == $this->side_two && $this->side_two != $this->side_three) ||
                       ($this->side_one == $this->side_three && $this->side_three != $this->side_two) ||
                       ($this->side_two == $this->side_three && $this->side_three != $this->side_one)
                      ) {
                      return "This is an isosceles triangle.";
            } else {
                      return "This is an scalene triangle";
            }
      } else {
            return "The combination of three numbers does not make a valid triangle.";
          }
    }
}
?>
