<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangle.php";

    $app = new Silex\Application();

    $app->get("/new_triangle", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          <title>Make Triangle</title>
        </head>
        <body>
          <div class='container'>
            <h1>Your Triangle</h1>
            <form action='/view_triangle'>
              <div class='form-group'>
                <label for='side_one'>Enter Side 1:</label>
                <input id='side_one' name='side_one' class='form-control' type='number'>
                <label for='side_two'>Enter Side 2:</label>
                <input id='side_two' name='side_two' class='form-control' type='number'>
                <label for='side_three'>Enter Side 3:</label>
                <input id='side_three' name='side_three' class='form-control' type='number'>
              </div>
              <button type='submit' class='btn-success'>Submit</button>
          </div>
        </body>
        </html>
        ";
    });

    $app->get("/view_triangle", function() {
        $new_triangle = new Triangle($_GET["side_one"], $_GET["side_two"], $_GET["side_three"]);

        $output = "";
        $output .= "<h1>Your Triangle</h1>";
        $output .= "<h2>" . $new_triangle->validTriangle() . " </h2>";
        return $output;
    });

    return $app;
?>
