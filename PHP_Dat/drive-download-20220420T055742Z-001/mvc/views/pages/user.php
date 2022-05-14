<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<div class="tab-pane" id="product" style="margin-top: 5%;">
    <div class="bookroom">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th class="stt">ID</th>
                    <th>Họ Và Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                </tr>
            </thead>
            <tbody id="tbl">
                <?php
                if (is_null($data["userList"])) {
                    echo "<h3>Sorry, No product to show!</h3>";
                } else
                    foreach ($data["userList"] as $user) { ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td><?= $user["name"] ?></td>
                        <td><?= $user["phoneNumber"] ?></td>
                        <td><?= $user["address"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>