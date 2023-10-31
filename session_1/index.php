<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>اولین درس برنامه نویسی وب</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body dir="rtl">
        <h1 style="font-size: 175% ; color:blue"> برنامه ترم اول سال تحصیلی 401-402 مهندسی نرم افزار:</h1>
        <div class="row col-md-6 col-sm-12" style="margin-right:auto;margin-left:auto;">
            <table class="table table-bordered"> 
                <tr class="table-primary">
                    <th>روز كلاس / ساعت </th>
                    <th>8-10</th>
                    <th>10-12</th>
                    <!--98121031-->
                    <th>13:30-15:30</th>
                    <th>15:30-17:30</th>
                </tr>
                <?php
                $week_days = [
                    'شنبه',
                    'یک شنبه',
                    'دوشنبه',
                    'سه شنبه',
                    'چهارشنبه',
                    'پنجشنبه',
                    'جمعه'
                ]; 
                ?>

                <?php 
                $table_styles = ['table-warning','table-info',
                'table-warning','table-info','table-warning'
                ,'table-danger','table-danger'];
                ?>

                <?php for($cnt=0;$cnt<7;$cnt++){ ?>
                    <tr class =<?php echo $table_styles[$cnt]?>>
                        <td><?php echo($week_days[$cnt]) ?></td>
                        <td>#</td>
                        <td>#</td>
                        <!--98121031-->
                        <td>#</td>
                        <td>#</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>