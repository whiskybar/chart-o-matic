<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Chart-O-Matic'
        },
        yAxis: {
            title: {
                text: 'Mmmm numbers!'
            }
        },
        series: [{
            name: "since 2014",
            data: <?php require_once 'lib.php'; echo json_encode(string_to_floats($_POST['series'])); ?>
        }]
    });
});
</script>
</head>
<body>
<div id="container" style="width:100%; height:400px;"></div>
</body>
</html>
