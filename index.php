<html>
    <head>
        <title>
            Damage Calculator
        </title>
        <style>
             @import url("css/style.css");
        </style>
    </head>
    <body>
        <img id="calculator" src="css/calc.png" alt="Calculator" height="200" width="300">
        
        <?php 
            include 'functions.php';
            
            $guns = array 
            (
                'handcannon' => array 
                (
                    'name' => 'Handcannon',
                    'roll' => '1d20',
                    'bonus' => '5'
                ),
                'autorifle' => array 
                (
                    'name' => 'Auto Rifle',
                    'roll' => '6d4',
                    'bonus' => '0'
                ),
                'scoutrifle' => array
                (
                    'name' => 'Scout Rifle',
                    'roll' => '1d10',
                    'bonus' => '10'
                ),
                'pulserifle' => array
                (
                    'name' => 'Pulse Rifle',
                    'roll' => "3d8",
                    'bonus' => '0'
                )
            );
            
            shuffle($guns);
            createTable($guns);
        ?>
    </body>
</html>