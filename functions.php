<?php
    function roll($sides)
    {
        return rand(1, $sides);
    }
    
    function createTable($guns) 
    {
        echo "<table><th>Type</th><th>Possible</th><th>Outcome</th>";
            foreach ($guns as $weapon)
            {
                list($count, $sides) = explode('d', $weapon['roll']);
                $result = 0;
                for ($i = 0; $i < $count; $i++) {
                    $result += roll($sides);
                }
                echo "<tr><td>" . $weapon['name'] . "</td><td>" . $weapon['roll'];
                if ($weapon['bonus'] > 0) {
                    echo "+" . $weapon['bonus'];
                    $result += $weapon['bonus'];
                }
                if ($result >= 20) {
                    echo "</td><td>" . $result . " <b>Critical!</b></td></tr>";
                }
                else {
                    echo "</td><td>" . $result . "</td></tr>";
                }
            }
            echo"</table>";
    }
?>