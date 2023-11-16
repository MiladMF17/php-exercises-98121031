<?php
function dd($a)
{
  echo '<pre>';
  var_dump($a);
  die;
}

function get_schedule_programm($profs_lessons, $lessons, $profs ,$table_indices){
    $programm = "";
    $cell = "";
    foreach ($profs_lessons as $profs_id => $lessons_id) {
        foreach ($lessons_id as $lesson_id) {
            $programm = $lessons[$lesson_id]['program'];
            if(in_array($table_indices,$programm)){
                $cell.=$lessons[$lesson_id]["title"].'('.$profs[$profs_id]["name"].')';
            }
        }
        $cell.="\n";
    }
    return $cell;
}

function get_cell_color($profs_lessons,$profs,$lessons,$key){
    $programm = [];
    foreach ($profs_lessons as $profs_id => $lessons_id) {
        foreach ($lessons_id as $lesson_id) {
            $programm = $lessons[$lesson_id]['program'];
            if($key==$programm[0] || $key==$programm[1]){
                $key = $profs[$profs_id]['color_key'];
            }
        }//  98121031 
    }
    return $key;
}
?>























































































































<!-- //  98121031  -->