<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<div class="tab-pane" id="product" style="margin-top: 5%;">
    <div class="bookroom">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th class="stt">ID</th>
                    <th>Product Name</th>
                    <th>User Name</th>
                    <th>Status</th>
                    <th>View Details</th>
                </tr>
            </thead>
            <tbody id="tbl">
                <?php
                if (is_null($data["orderList"])) {
                    echo "<h3>Sorry, No product to show!</h3>";
                } else
                    foreach ($data["orderList"] as $order) { ?>
                    <tr>
                        <td><?= $order["idOrder"] ?></td>
                        <td><?= $order["nameProduct"] ?></td>
                        <td><?= $order["usersName"] ?></td>
                        <td>
                            <?php if ($order["status"] == "wait for confirmation") { ?>
                                <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/status1/<?= $order["idOrder"] ?>" class="status"><input type="checkbox"> prepare order</a>
                            <?php } elseif ($order["status"] == "prepare order") { ?>
                                <a href="http://localhost:8080/T%E1%BB%B1%20h%E1%BB%8Dc%20PHP/otakuvn/admin/status2/<?= $order["idOrder"] ?>" class="status"><input type="checkbox"> delivering</a>
                            <?php } elseif ($order["status"] == "delivering") { ?>
                                <p>Waiting for confirmation of receipt</p>
                            <?php } else { ?>
                                <p><i class="fas fa-check"></i> received</p>
                            <?php } ?>
                        </td>
                        <td onclick="location.href = 'showOrderDetail/<?= $order['idOrder'] ?>'"><svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z" />
                                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
                            </svg>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>