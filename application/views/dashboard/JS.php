<script type="text/javascript">
function grafikpeminjaman(){
Chart.defaults.global.defaultFontFamily = 'Arial', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
<?php
foreach($blnpjm as $bp){
 $blnp[] = $bp->bulan;
 $qtyp[] = $bp->qty;
}
?>
var ctx = document.getElementById("peminjaman");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($blnp)?>,
    datasets: [{
	  data: <?php echo json_encode($qtyp)?>,
      label: " Jumlah ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.2)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
      
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
     },
   }
 });
}
function grafikpengembalian(){
Chart.defaults.global.defaultFontFamily = 'Arial', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
<?php
foreach($blnk as $bk){
 $bulank[] = $bk->bulan;
 $qtyk[] = $bk->qty;
}
?>
var ctx = document.getElementById("pengembalian");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($bulank)?>,
    datasets: [{
	  data:  <?php echo json_encode($qtyk)?>,
      label: " Jumlah ",
      lineTension: 0.3,
      backgroundColor: "rgba(55, 173, 0, 0.2)",
      borderColor: "rgba(55, 173, 0, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(55, 173, 0, 1)",
      pointBorderColor: "rgba(55, 173, 0, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(55, 173, 0, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
      
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
     },
   }
 });
}

</script>