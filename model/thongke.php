<?php
function thongkesp_dm(){
    $sql="select danh_muc.dm_id, danh_muc.dm_name, COUNT(*) 'soluong', MIN(sp_price) 'gia_min',
     MAX(sp_price) 'gia_max', AVG(sp_price) 'gia_avg' from danh_muc join san_pham on san_pham.dm_id=danh_muc.dm_id
     group by danh_muc.dm_id, danh_muc.dm_name order by soluong DESC";
     $result=pdo_query_all($sql);
     return $result;
}
?>