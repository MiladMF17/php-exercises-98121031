<!DOCTYPE html>
<?php
require_once("./Functions.php");
$number_of_sections = 4;
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src='main.js'></script> -->
    <!-- 98121031 -->

    <style>
        p.paragraph{
        text-align: center;
        font-size: xx-large;
        color:black;
        font-family: Arial, Helvetica, sans-serif;
        }
        hr.hr_wirdh{
            width: 100%;
        }
        td.lesson_cell{
            cursor: pointer;
        }
    </style>

</head>
<?php
require("./lessons.php");
require("./profs.php");
require("./relations.php");
?>
<body dir="rtl">
    <?php
    $array_class_time=["#","8-10","10-12","13:30-15:30","15:30-17:30"];
    // $array_exam_period=["#","بازه اول","بازه دوم","بازه سوم","بازه چھارم"];
    $week_days = [
        'شنبه',
        'یک شنبه',
        'دوشنبه',
        'سه شنبه',
        'چهارشنبه',
    ];
    ?>

<div class="row col-md-6 col-sm-12" style="margin-right:auto;margin-left:auto;">
    <p class="paragraph">برنامه درسی ترم اول ١۴٠٣-١۴٠٢</p>
    <hr class="hr_width">
<table class="table table-bordered table-striped">
<thead>
    <?php foreach ($array_class_time as $value){ ?>
       <th>
       <?php echo "$value";}?>
      </th>
</thead>
<tbody>
<?php for ($i=0; $i < count($week_days) ; $i++) {  ?>
       <tr>
        <td><?php echo "$week_days[$i]";?></td>
        <?php for($tcount = 0; $tcount<$number_of_sections ;$tcount++){
            $k = $i*$number_of_sections+$tcount;
            $cell = get_schedule_programm($profs_lessons,$lessons,$profs,$k);
            $cell_color = get_cell_color($profs_lessons,$profs,$lessons,$k);
            // echo"$cell_color"."\n";
        ?>
        <td class="lesson_cell"> <span style="background-color: <?php echo "$cell_color" ?> "> <?php echo"$cell" ?></span></td> 
        <?php }?>
        <?php }?>
      </tr>
</tbody>
</table>
</div>

</body>
<script>
        $(document).ready(function(){
            console.log('jQuery is ready for use');
        })
    </script>
</html>





































































































































































































<!-- 98121031 -->