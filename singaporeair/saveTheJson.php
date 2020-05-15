<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/11/2020
 * Time: 11:49 AM
 */

$input = ["AKL", "AMD", "AMS", "ARN", "ATH", "BCN", "BDO", "BKI", "BKK", "BLR", "BNE", "BOM", "BPN", "BRU", "BWN", "CAN", "CBR", "CCU", "CDG", "CEB", "CGK", "CHC", "CJB", "CKG", "CMB", "CNS", "CNX", "COK", "CPH", "CPT", "CSX", "CTS", "CTU", "DAC", "DAD", "DEL", "DME", "DPS", "DRW", "DUS", "DVO", "DXB", "EWR", "FCO", "FOC", "FRA", "FUK", "HAN", "HGH", "HIJ", "HKG", "HKT", "HND", "HYD", "IAH", "ICN", "IST", "JFK", "JNB", "JOG", "KIX", "KMG", "KNO", "KTM", "KUL", "LAX", "LHR", "LOP", "LPQ", "MAA", "MAN", "MDC", "MDL", "MEL", "MLE", "MNL", "MUC", "MXP", "NGO", "NRT", "PEK", "PEN", "PER", "PLM", "PNH", "PUS", "PVG", "REP", "RGN", "SEA", "SFO", "SGN", "SIN", "SRG", "SUB", "SYD", "SZX", "TPE", "TRV", "UPG", "USM", "VTE", "VTZ", "WLG", "WUH", "XMN", "ZRH"];
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
            console.log(data);
                },
                error: function (request, error) {
                    console.log("Request: " + JSON.stringify(request));
                }
            });
        }

        /*demo_<?php echo $i; ?>();*/
    </script>
    <?php $i++;
} ?>
</html>
<script>
demo_1();
    function saveToList(dataArray, des) {
        $.ajax({
            url: 'pushToServer.php',
            type: 'POST',
            crossDomain: true,
            data: {
                'dataArray': dataArray,
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