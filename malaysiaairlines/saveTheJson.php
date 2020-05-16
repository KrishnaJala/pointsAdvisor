<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/11/2020
 * Time: 11:49 AM
 */

$input = ["AKL", "AOR", "BKI", "BKK", "BLR", "BNE", "BOM", "BTU", "BWN", "CAN", "CGK", "CKG", "CMB", "COK", "DAC", "DEL", "DPS", "FOC", "HAK", "HAN", "HKG", "HKT", "HYD", "ICN", "JED", "JHB", "KBR", "KCH", "KIX", "KNO", "KTM", "KUA", "KUL", "LBU", "LGK", "LHR", "MAA", "MED", "MEL", "MNL", "MYY", "NKG", "NRT", "PEN", "PER", "PKU", "PKX", "PNH", "PVG", "RGN", "SBW", "SDK", "SGN", "SIN", "SUB", "SYD", "TGG", "TPE", "TWU", "XMN"];
//$input = ["AOR", "KUL"];
$result = [];
$n = count($input);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($i != $j)
            $result[] = ['ori' => $input[$i], 'des' => $input[$j]];
    }
}

?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<div></div>
<?php $i = 1;
foreach ($result as $eachResult) { ?>
    <script>
        function demo_<?php echo $i; ?>() {
            $.ajax({
                url: 'getJsonData.php',
                type: 'GET',
                crossDomain: true,
                data: {
                    'ori': '<?php echo $eachResult['ori']; ?>',
                    'des': '<?php echo $eachResult['des']; ?>'
                },
                success: function (data) {
                    if (data.milesList[0].Platinum.length > 0)
                        saveToList(data, '<?php echo $eachResult['ori']; ?>', '<?php echo $eachResult['des']; ?>');
                },
                error: function (request, error) {
                    console.log("Request: " + JSON.stringify(request));
                }
            });
        }

        demo_<?php echo $i; ?>();
    </script>
    <?php $i++;
} ?>
</html>
<script>

    function saveToList(dataArray, ori, des) {
        $.ajax({
            url: 'pushToServer.php',
            type: 'POST',
            crossDomain: true,
            data: {
                'dataArray': dataArray,
                'ori': ori,
                'des': des
            },
            success: function (data) {
                console.log(data);
            },
            error: function (request, error) {
                console.log("Request: " + JSON.stringify(request));
            }
        });
    }
</script>