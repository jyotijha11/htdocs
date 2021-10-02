<?php
            $fnum=$snum=$result="";
            if(isset($_POST["operator"]))
            {
                $fnum = $_POST['first_num'];
                $snum = $_POST['second_num'];
                $operator = $_POST['operator'];
                 $result = '';
                if (is_numeric($first_num) && is_numeric($second_num)) 
                {
                    switch ($operator) 
                    {
                        case "Add":
                            $result = $fnum + $snum;
                            break;
                        case "Subtract":
                           $result = $fnum - $snum;
                            break;
                        case "Multiply":
                            $result = $fnum * $snum;
                            break;
                        case "Divide":
                            $result = $fnum / $snum;
                    }
                }
            }

 ?>