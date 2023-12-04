<?php

// Lấy dữ liệu từ các hàm trong thongke.php
$resultByProduct = getRevenueByProduct();

$resultByCategory = getRevenueByCategory();
// $resultByDate = getRevenueByDate();
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Doanh thu'],
                <?php foreach ($resultByDate as $data): ?>
                ['<?php echo $data['purchase_date']; ?>', <?php echo $data['total_revenue']; ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'Biểu đồ doanh thu theo ngày',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>

    <!-- Hiển thị thông tin doanh thu theo sản phẩm -->
    <a href="index.php"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>

    
    <h1>Tổng doanh thu theo sản phẩm</h1>
    <div class="frm_dm frmlist_pro">
    <table>
        <thead>
            <tr>
                <th>Sản phẩm ID</th>
                <th>Tên sản phẩm</th>
                <th>Tổng doanh thu</th>
                <th>Số lượt mua</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultByProduct as $product): ?>
            <tr>
                <td><?php echo $product['sp_id']; ?></td>
                <td><?php echo $product['sp_name']; ?></td>
                <td><?php echo number_format($product['total_revenue']); ?>.000</td>
                <td><?php echo $product['total_purchases']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <!-- Hiển thị thông tin tổng doanh thu theo danh mục -->
    <div class="frm_dm frmlist_pro">

    <h1>Tổng doanh thu theo danh mục</h1>
    <table>
        <thead>
            <tr>
                <th>Danh mục ID</th>
                <th>Tên danh mục</th>
                <th>Tổng doanh thu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultByCategory as $category): ?>
            <tr>
                <td><?php echo $category['dm_id']; ?></td>
                <td><?php echo $category['dm_name']; ?></td>
                <td><?php echo number_format($product['total_revenue']); ?>.000</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
            <!-- HTML -->
<div id="chart_div" style="width: 800px; height: 100%;"></div>

<!-- JavaScript -->
<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Sản phẩm');
    data.addColumn('number', 'Doanh thu (đơn vị: nghìn đồng)');

    // Thêm dữ liệu từ PHP vào biểu đồ
    var phpData = <?php echo json_encode($resultByProduct); ?>;
    for (var i = 0; i < phpData.length; i++) {
      data.addRow([phpData[i].sp_name, parseFloat(phpData[i].total_revenue)]);
    }

    var options = {
      title: 'Doanh thu theo sản phẩm',
      chartArea: {width: '50%'},
      hAxis: {
        title: 'Doanh thu ',
        minValue: 0
      },
      vAxis: {
        title: 'Sản phẩm'
      }
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script> -->


    <!-- Biểu đồ doanh thu theo ngày
    <div id="chart_div" style="width: 900px; height: 500px;"></div> -->

