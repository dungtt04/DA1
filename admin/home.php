<style>
  .tdt{
    background: #fff;
    border-radius: 7px;
    box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);
    height: 160px;
    padding: 10px 20px;
}
  .tdt a{
    text-decoration:none;
    float: right;
    color: black;
  }
  .tdt a:hover{
    font-weight: bold;

}
</style>

<div class="col-md-8">

  <h1>THỐNG KÊ SẢN PHẨM</h1>
  <?php
// Gọi function để lấy tổng doanh thu
$totalRevenue = getTotalRevenue();
?>

<div class="col-md-3 offset-md-1">
    <div class="card mt-5 tdt"  style="width: 18rem">
        <div class="card-body">
            <h3 class="card-title">Tổng Doanh Thu</h3>
            <p class="card-text"><?= number_format($totalRevenue) ?>.000 VND</p>
            <a href="index.php?act=doanhthu">Xem chi tiết</a>

        </div>
    </div>
</div>

  <div class="row frm_dm frmlist_pro">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">Mã loại</th>
          <th scope="col">Tên loại</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Giá nhỏ nhất</th>
          <th scope="col">Giá lớn nhất</th>
          <th scope="col">Giá trung bình</th>
        </tr>
      </thead>
      <tbody>
        <?php
      foreach ($show  as $value) :
        extract($value);
      ?>
        <tr>
          <td class="text-center">
            <?= $dm_id ?>
          </td>
          <td class="text-center">
            <?= $dm_name ?>
          </td>
          <td class="text-center">
            <?= $soluong ?>
          </td>
          <td class="text-center">
            <?= number_format($gia_min) ?>.000
          </td>
          <td class="text-center">
            <?= number_format($gia_max) ?>.000
          </td>
          <td class="text-center">
            <?= number_format($gia_avg) ?>.000
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>
<?php
// include 'top10.php';
?>
<!-- <div class="col-md-3 offset-md-1">
  <div class="card mt-5" style="width: 18rem">
    <H1>Top 10 SP có nhiều view nhất</H1>
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action list-item-link">
        <img src="../assets/image/sp1.jpg" alt="" />
        Xiaomi Redmi Note 12 8GB 128GB
      </a>
      <a href="#" class="list-group-item list-group-item-action list-item-link">
        <img src="../assets/image/sp2.jpg" alt="" />
        iPhone 13 128GB | Chính hãng VN/A
      </a>
      <a href="#" class="list-group-item list-group-item-action list-item-link">
        <img src="../assets/image/sp3.jpg" alt="" />
        Samsung Galaxy Z Flip5 256GB
      </a>
    </div>
  </div>
</div> -->
<div class="row">
  <div class="col-md-12" id="piechart" style="width:100%; width: 900px; height: 500px; align-items:center"></div>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng'],
        <?php
        foreach ($show  as $value) {
          extract($value);
          echo "['$dm_name',$soluong],";
        }
        ?>
      ]);

      var options = {
        title: 'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</div>