<?php
function thongkesp_dm(){
    $sql="select danh_muc.dm_id, danh_muc.dm_name, COUNT(*) 'soluong', MIN(sp_price) 'gia_min',
     MAX(sp_price) 'gia_max', AVG(sp_price) 'gia_avg' from danh_muc join san_pham on san_pham.dm_id=danh_muc.dm_id
     group by danh_muc.dm_id, danh_muc.dm_name order by soluong DESC";
     $result=pdo_query_all($sql);
     return $result;
}
// Function để lấy tổng doanh thu
function getTotalRevenue() {
    try {
        // Truy vấn SQL để tính tổng doanh thu từ bảng cart
        $sql = "SELECT SUM(cart_thanhtien) AS total_revenue FROM cart";

        // Thực thi truy vấn và lấy kết quả
        $result = pdo_query_one($sql);

        return $result['total_revenue']; // Trả về tổng doanh thu
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        return 0;
    }
}

function getRevenueByProduct(){
    $sql = "SELECT san_pham.sp_id, san_pham.sp_name, SUM(cart_thanhtien) AS total_revenue, COUNT(*) AS total_purchases
            FROM cart
            JOIN san_pham ON cart.sp_id = san_pham.sp_id
            GROUP BY sp_id, sp_name";
    
    return pdo_query_all($sql);
}

function getRevenueByCategory(){
    $sql = "SELECT danh_muc.dm_id, danh_muc.dm_name, SUM(cart_thanhtien) AS total_revenue
            FROM cart
            JOIN san_pham ON cart.sp_id = san_pham.sp_id
            JOIN danh_muc ON san_pham.dm_id = danh_muc.dm_id
            GROUP BY dm_id, dm_name";
    
    return pdo_query_all($sql);
}

// function getRevenueByDate(){
//     $sql = "SELECT DATE(bill_ngaydat) AS purchase_date, SUM(cart_thanhtien) AS total_revenue
//             FROM bill
//             GROUP BY purchase_date";
    
//     return pdo_query_all($sql);
// }
?>

