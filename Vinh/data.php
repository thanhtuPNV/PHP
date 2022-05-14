<?php
$phone = array (
    'spnb' => array(
        'dt1' => array(
            "img" => "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg",
            "phonename" => "Nokia futurare",
            "phoneprice" =>"280000",
            "id" => '1',
            "star" => "4",

        ),
        'dt2' => array(
            "img" => "https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-hh-600x600-600x600.jpg",
            "phonename" => "huawel nokia 2i",
            "phoneprice" =>"3000000",
            "id" => '2',
            "star" => "4",

        ),
        'dt3' => array(
            "img" => "https://cdn.tgdd.vn/Products/Images/42/153953/xiaomi-redmi-note-5-blue-600x600.jpg",
            "phonename" => "Xiome note 5",
            "phoneprice" =>"5000000",
            "id" => '3',
            "star" => "4",

        ),
        'dt4' => array(
            "img" => "https://cdn.tgdd.vn/Products/Images/42/143465/xiaomi-redmi-5-plus-600x600.jpg",
            "phonename" => "Xiome note 5 phus",
            "phoneprice" =>"7000000",
            "id" => '4',
            "star" => "4",

        )

    )
    
)

?>
<?php
;
foreach($phone as $key => $value){
    if ($key == 'spnb'){
        array_splice($value,4,0,$dt4);
    }
}
?>