<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $a = empty($_POST['a']) ? 'NA' : $_POST['a'];
  $b = empty($_POST['b']) ? 'NA' : $_POST['b'];
  $c = empty($_POST['c']) ? 'NA' : $_POST['c'];
  $d = empty($_POST['d']) ? 'NA' : $_POST['d'];
  $e = empty($_POST['e']) ? 'NA' : $_POST['e'];
  $f = empty($_POST['f']) ? 'NA' : $_POST['f'];
  $g = empty($_POST['g']) ? 'NA' : $_POST['g'];
  $h = empty($_POST['h']) ? 'NA' : $_POST['h'];
  $i = empty($_POST['i']) ? 'NA' : $_POST['i'];
  $l = empty($_POST['l']) ? 'NA' : $_POST['l'];
  $m = empty($_POST['m']) ? 'NA' : $_POST['m'];
  $n = empty($_POST['n']) ? 'NA' : $_POST['n'];
  $o = empty($_POST['o']) ? 'NA' : $_POST['o'];
  $p = empty($_POST['p']) ? 'NA' : $_POST['p'];
  $q = empty($_POST['q']) ? 'NA' : $_POST['q'];
  $r = empty($_POST['r']) ? 'NA' : $_POST['r'];

  $count_non_numeric = 0;
  $count_over_70 = 0;
  $count_60_69 = 0;
  $count_50_59 = 0;
  $count_under_50 = 0;

  



  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>RESULTS</title>
  <style>
    @import url(table.css);
    body {
        font-family: Arial, sans-serif;
background-image: url("33.jpg");
background-size: cover;
background-repeat: no-repeat;
background-color: rgb(0, 0, 0);
    }
    .results {
      width: 30%;
      margin: auto;
      text-align: center;
      border: 1px solid white;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div>
<div class="results" style="background-color: transparent; border: none;  position: absolute; bottom: 70%; right: 34%;">
  <span id="oxford">Oxford</span><br>
			<span id="brookes">Brookes</span><br>
			<span id="university">University</span><br>
    <h1 style="font-family: bold; color: green">RESULTS</h1> </div>
    
    <table class="results" style="background-color: rgba(255, 255, 255, 0.3); border: 2px dashed green; position: absolute; top: 55%; left: 23%;">
  <thead>
    <tr>
      <th>Module</th>
      <th>Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Object-Oriented Programming</td>
      <td>
        <?php 
        if (empty($b)) {
          echo 'NA';
        } elseif (is_numeric($b)) {
          if ($b >= 70) {
            echo 'Grade A+';
          } elseif ($b >= 60 && $b <= 69) {
            echo 'Grade B';
          } elseif ($b >= 50 && $b <= 59) {
            echo 'Grade C';
          } else {
            echo '<span style="color: red;">FAIL</span>';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>


    <tr>
      <td>Modern Computer Systems</td>
      <td>
        <?php 
        if (empty($d)) {
          echo 'NA';
        } elseif (is_numeric($d)) {
          if ($d >= 70) {
            echo 'Grade A+';
          } elseif ($d >= 60 && $d <= 69) {
            echo 'Grade B';
          } elseif ($d >= 50 && $d <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Research, Scholarship and Professional Skills</td>
      <td>
        <?php 
        if (empty($f)) {
          echo 'NA';
        } elseif (is_numeric($f)) {
          if ($f >= 70) {
            echo 'Grade A+';
          } elseif ($f >= 60 && $f <= 69) {
            echo 'Grade B';
          } elseif ($f >= 50 && $f <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Data Science Foundations</td>
      <td>
        <?php 
        if (empty($h)) {
          echo 'NA';
        } elseif (is_numeric($h)) {
          if ($h >= 70) {
            echo 'Grade A+';
          } elseif ($h >= 60 && $h <= 69) {
            echo 'Grade B';
          } elseif ($h >= 50 && $h <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Introduction to Machine Learning</td>
      <td>
        <?php 
        if (empty($l)) {
          echo 'NA';
        } elseif (is_numeric($l)) {
          if ($l >= 70) {
            echo 'Grade A+';
          } elseif ($l >= 60 && $l <= 69) {
            echo 'Grade B';
          } elseif ($l >= 50 && $l <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Advanced Software Development</td>
      <td>
        <?php 
        if (empty($n)) {
          echo 'NA';
        } elseif (is_numeric($n)) {
          if ($n >= 70) {
            echo 'Grade A+';
          } elseif ($n >= 60 && $n <= 69) {
            echo 'Grade B';
          } elseif ($n >= 50 && $n <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Cyber Security and the Web</td>
      <td>
        <?php 
        if (empty($p)) {
          echo 'NA';
        } elseif (is_numeric($p)) {
          if ($p >= 70) {
            echo 'Grade A+';
          } elseif ($p >= 60 && $p <= 69) {
            echo 'Grade B';
          } elseif ($p >= 50 && $p <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>MSc Dissertation in Computing Subjects</td>
      <td>
        <?php 
        if (empty($r)) {
          echo 'NA';
        } elseif (is_numeric($r)) {
          if ($r >= 70) {
            echo 'Grade A+';
          } elseif ($r >= 60 && $r <= 69) {
            echo 'Grade B';
          } elseif ($r >= 50 && $r <= 59) {
            echo 'Grade C';
          } else {
            echo 'FAIL';
          }
        } else {
          echo 'NA';
        }
        ?>
      </td>
    </tr>
    
    </tbody>
    </table>
    
<div>
<div class="results" style="background-color: rgba(255, 255, 255, 0.3); border: 2px dashed green; position: absolute; bottom: 23.1%; right: 7%; font-family: cursive">
<h1 style="color: green;">Congratulations!</h1>
<?php

$vars = ['b', 'd', 'f', 'h', 'l', 'n', 'p', 'r'];

foreach ($vars as $var) {
  if (!is_numeric($$var)) {
    $count_non_numeric++;
  } else if ($$var >= 70) {
    $count_over_70++;
  } else if ($$var >= 60 && $$var <= 69) {
    $count_60_69++;
  } else if ($$var >= 50 && $$var <= 59) {
    $count_50_59++;
  } else {
    $count_under_50++;
  }
}

echo "<br>You have obtained:<br> " . $count_over_70 . " grade A+,<br> ";
echo "" . $count_60_69 . " grade B,<br> ";
echo "" . $count_50_59 . " grade C,<br> ";
echo "" . $count_under_50 . " fail,<br> and ";
echo "" . $count_non_numeric . " Missing modules. <br><br>"
?>
<?php

if ($b < 50 || $b > 100) {
  $a = 0;
}
if ($d < 50 || $d > 100) {
  $c = 0;
}
if ($f < 50 || $f > 100) {
  $e = 0;
}
if ($h < 50 || $h > 100) {
  $g = 0;
}
if ($l < 50 || $l > 100) {
  $i = 0;
}
if ($n < 50 || $n > 100) {
  $m = 0;
}
if ($p < 50 || $p > 100) {
  $o = 0;
}
if ($r < 50 || $r > 100) {
  $q = 0;
}

$credits = $a + $c + $e + $g + $i + $m + $o + $q;
echo "You have got $credits credits<br>";

if ($credits == 180) {
  echo "This means you may obtain a MSc in Computing Science. ";
} elseif ($credits >= 120 && $credits <= 179) {
  echo "This means you may obtain a PG Diploma in Computing Science. ";
} else {
  echo "This means you have not achieved anything yet. Keep on.";
}
?>

<?php

$count = 0;
$sum = 0;

if ($b >= 50 && $b <= 100) {
  $count++;
  $sum += $b;
}
if ($d >= 50 && $d <= 100) {
  $count++;
  $sum += $d;
}
if ($f >= 50 && $f <= 100) {
  $count++;
  $sum += $f;
}
if ($h >= 50 && $h <= 100) {
  $count++;
  $sum += $h;
}
if ($l >= 50 && $l <= 100) {
  $count++;
  $sum += $l;
}
if ($n >= 50 && $n <= 100) {
  $count++;
  $sum += $n;
}
if ($p >= 50 && $p <= 100) {
  $count++;
  $sum += $p;
}
if ($r >= 50 && $r <= 100) {
  $count++;
  $sum += $r;
}

if ($count > 0) {
  $average = $sum / $count;
  $formatted_average = number_format($average, 1); // formatta l'average con un solo decimale
  echo "<br><br>The average score of all the modules you have passed is: $formatted_average<br>";
} else {
  echo "You did not pass any module";
}

?>

<?php
if ($count > 0) {
  $average = $sum / $count;
  

  if ($average > 70) {
    echo "This means that your grade would be: Distinction";
  } else if ($average >= 60 && $average <= 69) {
    echo "This means that your grade would be: Merit";
  } else if ($average >= 50 && $average <= 59) {
    echo "This means that your grade would be: Pass";
  }
} else {
  echo "This means that you did not pass any module";
}
?>





	





</div>
</div>
</div>































    
 
</body>
</html>
<?php
}
?>
