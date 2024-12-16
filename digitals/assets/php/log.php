<?php
session_start();
include '../../conn.php';

switch($_GET['mode']){

    case "user_data":
        $id = $_POST['id'];

        
        $item = mysqli_query($conn, "SELECT count(vendor) FROM `products` WHERE `status`='active' AND `vendor`='$id'");
        $product = mysqli_fetch_row($item);
        $t_product = $product[0];

        $sell = mysqli_query($conn, "SELECT count(vendor) FROM `order_items` WHERE `order_status`='delivered' AND `vendor`='$id'");
        $sold = mysqli_fetch_row($sell);
        $t_sell = $sold[0];

        $res = mysqli_query($conn, "SELECT price FROM order_items WHERE `order_status`='delivered' AND `vendor`='$id'");
        $total_price = 0;

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $prices = explode(',', $row['price']);
                foreach ($prices as $price) {
                    $total_price += floatval(preg_replace("/[^0-9.]/", "", trim($price)));
                }
            }
            $payout = number_format($total_price);
        }

        $sql = "SELECT * FROM `users` WHERE `uid`='$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);

        if($row['user']=='vendor'){
            $row['payout'] = $payout;
            $row['t_sell'] = $t_sell;
            $row['t_product'] = $t_product;
        }else{}
        // Add $payout and $t_sell to $row array

        echo json_encode($row);

    break;

    case "userEdit":
        $uid=$_POST['uid'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $img=$_POST['img'];
        $sql = "UPDATE `users` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `address`='$address', `img`='$img' WHERE `uid`='$uid'";
        $query=mysqli_query($conn,$sql);
        if($query ==true)
        {
        
            $data = array(
                'status'=>'true',
            
            );

            echo json_encode($data);
        }
        else
        {
            $data = array(
                'status'=>'false',
            
            );

            echo json_encode($data);
        }
    break;

    case "vendorCard":
        $sql=mysqli_query($conn, "SELECT * FROM `users` WHERE `user`='vendor' AND `status`!='deleted'");
        if(mysqli_num_rows($sql)>0){
            $id=1;
            foreach($sql as $row){
                ?>
                <div class="col-lg-6 col-xl-4 col-xxl-3">
                    <div class="card card-default mt-24px">
                        <a href="javascript:0" id="viewBtn" data-id="<?= $row['uid'] ?>" data-bs-toggle="modal" data-bs-target="#modal-contact" class="view-detail viewBtn"><i class="mdi mdi-eye-plus-outline"></i>
                        </a>
                        <div class="vendor-info card-body text-center p-4">
                            <a href="javascript:0" class="text-secondary d-inline-block mb-3">
                                <div class="image mb-3">  
                                    <img src="<?=$row['img']?>" class="img-fluid rounded-circle"
                                        alt="Avatar Image">
                                </div>

                                <h5 class="card-title text-dark"><?=$row['firstname']." ".$row['lastname']?></h5>

                                <ul class="list-unstyled">
                                    <!-- <li class="d-flex mb-1">
                                        <i class="mdi mdi-cellphone-basic mr-1"></i>
                                        <span>+91 963-852-7410</span>
                                    </li> -->
                                    <li class="d-flex">
                                        <i class="mdi mdi-email mr-1"></i>
                                        <span><?=$row['email']?></span>
                                    </li>
                                </ul>
                            </a>
                            <div class="row justify-content-center ec-vendor-detail">
                                <div class="col-4">
                                    <h6 class="text-uppercase">Items</h6>
                                    <h5>
                                        <?php
                                        $item = mysqli_query($conn, "SELECT count(vendor) FROM `products` WHERE `status`='active' AND `vendor`='{$row['uid']}'");
                                        $product = mysqli_fetch_row($item);
                                        $t_product = $product[0];
                                        echo $t_product;
                                        ?>
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <h6 class="text-uppercase">Sell</h6>
                                    <h5>
                                        <?php
                                        $sell = mysqli_query($conn, "SELECT count(vendor) FROM `order_items` WHERE `order_status`='delivered' AND `vendor`='{$row['uid']}'");
                                        $sold = mysqli_fetch_row($sell);
                                        $t_sell = $sold[0];
                                        echo $t_sell;
                                        ?>
                                    </h5>
                                </div>
                                <!-- <div class="col-4">
                                    <h6 class="text-uppercase">Payout</h6>
                                    <h5>$2691</h5>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    break;

    case "userCard":
        $sql=mysqli_query($conn, "SELECT * FROM `users` WHERE `user`='member' AND `status`!='deleted'");
        if(mysqli_num_rows($sql)>0){
            $id=1;
            foreach($sql as $row){
                ?>
                <div class="col-lg-6 col-xl-4 mb-24px">
                    <div class="ec-user-card card card-default p-4">
                        <a href="javascript:0" id="viewBtn" data-id="<?= $row['uid'] ?>" data-bs-toggle="modal" data-bs-target="#modalUser" class="view-detail viewBtn"><i class="mdi mdi-eye-plus-outline"></i>
                        </a>
                        <a href="javascript:0" class="media text-secondary">
                            <img src="<?=$row['img']?>" class="mr-3 img-fluid" alt="Avatar Image">

                            <div class="media-body">
                                <h5 class="mt-0 mb-2 text-dark"><?=$row['firstname']." ".$row['lastname']?></h5>

                                <ul class="list-unstyled">
                                    <li class="d-flex mb-1">
                                        <i class="mdi mdi-email mr-1"></i>
                                        <span><?=$row['email']?></span>
                                    </li>

                                    <li class="d-flex">
                                        <i class="fa fa-location-pin mr-1"></i>
                                        <span><?=$row['country']?></span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
    break;


    case "userTable":
        $output = array();
        $sql = "SELECT * FROM `users` WHERE `user`='member' AND `status`!='deleted'"; // Select only where user is 'member'

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'img',
            2 => 'firstname',
            3 => 'email',
            4 => 'status',
            5 => 'date',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (uid LIKE '%" . $search_value . "%'";
            $sql .= " OR firstname LIKE '%" . $search_value . "%'";
            $sql .= " OR lastname LIKE '%" . $search_value . "%'";
            $sql .= " OR email LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        $ids=1;
        while ($row = mysqli_fetch_assoc($query)) {
            $sub_array = array();
            $sub_array[] = $ids;
            $sub_array[] = $row['uid'];
            $sub_array[] = '<img class="vendor-thumb" src="' . $row['img'] . '" alt="user profile" />';
            $sub_array[] = $row['firstname'] . " " . $row['lastname'];
            $sub_array[] = $row['email'];
            $sub_array[] = $row['status'];
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="editBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editUser" data-id="'.$row['uid'].'">Edit</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['uid'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
            $ids++;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "product_list":
        $output = array();
        $sql = "SELECT * FROM `products` WHERE `status`='active'"; // Select only where user is 'member'

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'img',
            2 => 'firstname',
            3 => 'email',
            4 => 'status',
            5 => 'date',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (pid LIKE '%" . $search_value . "%'";
            $sql .= " OR name LIKE '%" . $search_value . "%'";
            $sql .= " OR price LIKE '%" . $search_value . "%'";
            $sql .= " OR offer LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $sql2=mysqli_query($conn,"SELECT count(pid) FROM `order_items` WHERE `pid`='{$row['pid']}' AND `order_status`='delivered' AND `payment_status`='paid'");
            $row2 = mysqli_fetch_row($sql2);
            $t_sell = $row2[0];

            $imageString = $row['img'];
            $imageArray = explode(", ", $imageString);
            $firstImage = $imageArray[0];

            $sub_array = array();
            $sub_array[] = '<img class="tbl-thumb" src="'.$firstImage.'" alt="Product Image" />';
            $sub_array[] = $row['name'];
            $sub_array[] = '$'.$row['price'];
            $sub_array[] = $row['offer']."% OFF";
            $sub_array[] = $t_sell;
            $sub_array[] = $row['status'];
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="viewBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editUser" data-id="'.$row['pid'].'">View</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['pid'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "new_order":
        $output = array();
        $sql = "SELECT * FROM `order_items` WHERE `payment_status`='paid'"; // Select only where user is 'member'
    
        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);
    
        $columns = array(
            0 => 'oid',
            1 => 'pid',
            2 => 'uid',
            3 => 'vendor',
            4 => 'parent_category',
            5 => 'order_status',
        );
    
        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (vendor LIKE '%" . $search_value . "%'";
            $sql .= " OR uid LIKE '%" . $search_value . "%'";
            $sql .= " OR price LIKE '%" . $search_value . "%'";
            $sql .= " OR parent_category LIKE '%" . $search_value . "%'";
            // $sql .= " OR vendor LIKE '%" . $search_value . "%')";
            $sql .= " OR order_status LIKE '%" . $search_value . "%')";
        }
    
        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }
    
        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }
    
        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            // getting product details
            $sql2=mysqli_query($conn,"SELECT * FROM `products` WHERE `pid`='{$row['pid']}'");
            $product_img = null;
            $product_name = null;
            if (mysqli_num_rows($sql2) > 0) {
                while ($row2 = mysqli_fetch_assoc($sql2)) {
                    $product_img = $row2['img'];
                    $product_name = $row2['name'];
                }
            }
    
            // getting customer details
            $sql3=mysqli_query($conn,"SELECT * FROM `users` WHERE `uid`='{$row['uid']}'");
            $customer = null;
            if (mysqli_num_rows($sql3) > 0) {
                while ($row3 = mysqli_fetch_assoc($sql3)) {
                    $customer = '<strong>'.$row3['firstname'].' '.$row3['lastname'].'</strong><br>'.$row3['email'];
                }
            }
    
            // validating delivery status by color
            if($row['order_status']=='ready to ship'){
                $status='<span class="mb-2 mr-2 badge badge-warning">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='on the way'){
                $status='<span class="mb-2 mr-2 badge badge-info">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='delivered'){
                $status='<span class="mb-2 mr-2 badge badge-success">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='pending'){
                $status='<span class="mb-2 mr-2 badge badge-secondary">'.strtoupper($row['order_status']).'</span>';
            }
    
            $sub_array = array();
            $sub_array[] = $row['oid'];
            $sub_array[] = '<img class="product-img tbl-img" src="'.$product_img.'" alt="product">';
            $sub_array[] = $product_name;
            $sub_array[] = $customer;
            $sub_array[] = $row['quantity'];
            $sub_array[] = $row['price'];
            $sub_array[] = $row['payment_status'];
            $sub_array[] = $status;
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>
    
                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="viewBtn" href="order-detail.php?order_id='.$row['oid'].'">View</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['oid'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
        }
    
        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        error_log(json_encode($output));
        echo json_encode($output);
    break;

    case "orderHistory":
        $output = array();
        $sql = "SELECT * FROM order_details WHERE order_status = 'delivered'"; // Select only where user is 'member' and status is not 'deleted'

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'oid',
            1 => 'uid',
            2 => 'firstname',
            3 => 'lastname',
            4 => 'email',
            5 => 'address',
            6 => 'address_to',
            7 => 'state',
            8 => 'country',
            9 => 'phone',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (uid LIKE '%" . $search_value . "%'";
            $sql .= " OR firstname LIKE '%" . $search_value . "%'";
            $sql .= " OR lastname LIKE '%" . $search_value . "%'";
            $sql .= " OR email LIKE '%" . $search_value . "%'";
            $sql .= " OR order_status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            

            $sql3 = mysqli_query($conn, "SELECT * FROM order_items where oid='{$row['oid']}'");
            $totalPrice = 0;
            if(mysqli_num_rows($sql3) > 0){
                while($row3=mysqli_fetch_assoc($sql3)){
                    $quantity = $row3['quantity'];
                    $price = $row3['price'];
                    $totalPrice += ($quantity * $price);
                }
            }
            
             // validating delivery status by color
             if($row['order_status']=='ready to ship'){
                $status='<span class="mb-2 mr-2 badge badge-warning">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='on the way'){
                $status='<span class="mb-2 mr-2 badge badge-info">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='delivered'){
                $status='<span class="mb-2 mr-2 badge badge-success">'.strtoupper($row['order_status']).'</span>';
            }
            else if($row['order_status']=='pending'){
                $status='<span class="mb-2 mr-2 badge badge-secondary">'.strtoupper($row['order_status']).'</span>';
            }

            $sub_array = array();
            $sub_array[] = $row['oid'];
            $sub_array[] = $row['firstname'] . " " . $row['lastname'];
            $sub_array[] = $row['email'];
            $sub_array[] = $row['total_products'];
            $sub_array[] = '$'.$totalPrice;
            $sub_array[] = $row['payment_status'];
            $sub_array[] = $status;
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
            <button type="button"
                class="btn btn-outline-success">Info</button>
            <button type="button"
                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-display="static">
                <span class="sr-only">Info</span>
            </button>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="order-detail.php?order_id='.$row['oid'].'">Detail</a>
                <a class="dropdown-item" href="#">Track</a>
                <a class="dropdown-item" href="#">Cancel</a>
            </div>
        </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "review-list":
        $output = array();
        $sql = "SELECT * FROM `reviews` WHERE `status`='active'"; // Select all category

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'thumb',
            2 => 'name',
            3 => 'status',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (pid LIKE '%" . $search_value . "%'";
            $sql .= " OR products_name LIKE '%" . $search_value . "%'";
            $sql .= " OR vendor_name LIKE '%" . $search_value . "%'";
            $sql .= " OR user_name LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            // validating rating to give the merit star
            if($row['rating']==1){
                $rating='<div class="ec-t-rate">
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
            </div>';
            }
            else if($row['rating']==2){
                $rating='<div class="ec-t-rate">
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
            </div>';
            }
            else if($row['rating']==3){
                $rating='<div class="ec-t-rate">
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star"></i>
                <i class="mdi mdi-star"></i>
            </div>';
            }
            else if($row['rating']==4){
                $rating='<div class="ec-t-rate">
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star"></i>
            </div>';
            }
            else if($row['rating']==5){
                $rating='<div class="ec-t-rate">
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
                <i class="mdi mdi-star is-rated"></i>
            </div>';
            }

            $sub_array = array();
            // $sub_array[] = $row['uid'];
            $sub_array[] = '<img class="tbl-thumb" src="' . $row['products_img'] . '" alt="product image"/>';
            $sub_array[] = strtoupper($row['products_name']) ;
            $sub_array[] = '<img class="tbl-thumb" src="'.$row['user_img'].'" alt="product image"/>';
            $sub_array[] = $row['vendor_name'];
            $sub_array[] = $rating;
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="editBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editVendor" data-id="'.$row['id'].'">Edit</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['id'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "vendorTable":
        $output = array();
        $sql = "SELECT * FROM users WHERE user='vendor' AND status != 'deleted'"; // Select only where user is 'member' and status is not 'deleted'

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'img',
            2 => 'name',
            3 => 'email',
            4 => 'products',
            5 => 'total_sell',
            6 => 'status',
            7 => 'date',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (uid LIKE '%" . $search_value . "%'";
            $sql .= " OR firstname LIKE '%" . $search_value . "%'";
            $sql .= " OR lastname LIKE '%" . $search_value . "%'";
            $sql .= " OR email LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        $ids=1;
        while ($row = mysqli_fetch_assoc($query)) {
            $sql1=mysqli_query($conn,"SELECT count(vendor) FROM `products` WHERE `vendor`='{$row['uid']}'");
            $row1 = mysqli_fetch_row($sql1);
            $t_products = $row1[0];

            $sql2=mysqli_query($conn,"SELECT count(vendor) FROM `order_items` WHERE `order_status`='delivered' AND `vendor`='{$row['uid']}'");
            $row2 = mysqli_fetch_row($sql2);
            $t_sell = $row2[0];

            $sub_array = array();
            $sub_array[] = $ids;
            $sub_array[] = $row['uid'];
            $sub_array[] = '<img class="vendor-thumb" src="' . $row['img'] . '" alt="user profile" />';
            $sub_array[] = $row['firstname'] . " " . $row['lastname'];
            $sub_array[] = $row['email'];
            $sub_array[] = $t_products;
            $sub_array[] = $t_sell;
            $sub_array[] = $row['status'];
            $sub_array[] = $row['date'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="editBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editVendor" data-id="'.$row['uid'].'">Edit</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['uid'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
            $ids++;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "categoryTable":
        $output = array();
        $sql = "SELECT * FROM `category` WHERE `status`='active'"; // Select all category

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'thumb',
            2 => 'name',
            3 => 'status',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (id LIKE '%" . $search_value . "%'";
            $sql .= " OR name LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $sql1=mysqli_query($conn,"SELECT count(category) FROM `products` WHERE `category`='{$row['name']}'");
            $row1 = mysqli_fetch_row($sql1);
            $t_products = $row1[0];

            $sql2=mysqli_query($conn,"SELECT count(parent_category) FROM `order_items` WHERE `parent_category`='{$row['name']}' AND `order_status`='delivered' AND `payment_status`='paid'");
            $row2 = mysqli_fetch_row($sql2);
            $t_sell = $row2[0];

            $sql3=mysqli_query($conn,"SELECT count(parent_category) FROM `sub_category` WHERE `parent_category`='{$row['name']}'");
            $row3 = mysqli_fetch_row($sql3);
            $t_sub_category = $row3[0];

            $sub_cat = mysqli_query($conn, "SELECT * FROM `sub_category` WHERE `parent_category`='{$row['name']}'");
            $sub_cate_array = array(); // Initialize $sub_cate variable outside the loop

            if (mysqli_num_rows($sub_cat)) {
                while ($sub_row = mysqli_fetch_assoc($sub_cat)) {
                    // Assign the fetched row to $sub_cate
                    $sub_cate_array[] = '<span class="ec-sub-cat-tag">'.$sub_row['name'].'</span>';

                    // Process or store the $sub_cate as needed
                }
            }

            $sub_cate = implode(' ', $sub_cate_array);

            $sub_array = array();
            // $sub_array[] = $row['uid'];
            // $sub_array[] = '<img class="cat-thumb" src="' . $row['thumb'] . '" alt="user profile" />';
            $sub_array[] = strtoupper($row['name']) ;
            $sub_array[] = '<span class="ec-sub-cat-count" title="Total Sub Categories">'.$t_sub_category.'</span>'. $sub_cate;
            $sub_array[] = $t_products;
            $sub_array[] = $t_sell;
            $sub_array[] = $row['status'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="editBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editVendor" data-id="'.$row['id'].'">Edit</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['id'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "sub_categoryTable":
        $output = array();
        $sql = "SELECT * FROM `sub_category` WHERE `status`='active'"; // Select all category

        $totalQuery = mysqli_query($conn, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $columns = array(
            0 => 'id',
            1 => 'thumb',
            2 => 'name',
            3 => 'status',
        );

        if (isset($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $sql .= " AND (id LIKE '%" . $search_value . "%'";
            $sql .= " OR name LIKE '%" . $search_value . "%'";
            $sql .= " OR status LIKE '%" . $search_value . "%')";
        }

        if (isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
        } else {
            $sql .= " ORDER BY id DESC";
        }

        if ($_POST['length'] != -1) {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT " . $start . ", " . $length;
        }

        $query = mysqli_query($conn, $sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $sql1=mysqli_query($conn,"SELECT count(sub_categories) FROM `products` WHERE `category`='{$row['name']}'");
            $row1 = mysqli_fetch_row($sql1);
            $t_products = $row1[0];

            $sql2=mysqli_query($conn,"SELECT count(sub_category) FROM `order_items` WHERE `sub_category`='{$row['name']}' AND `order_status`='delivered' AND `payment_status`='paid'");
            $row2 = mysqli_fetch_row($sql2);
            $t_sell = $row2[0];

            // $sql3=mysqli_query($conn,"SELECT count(parent_category) FROM `sub_category` WHERE `parent_category`='{$row['name']}'");
            // $row3 = mysqli_fetch_row($sql3);
            // $t_sub_category = $row3[0];

            $sub_array = array();
            // $sub_array[] = $row['uid'];
            // $sub_array[] = '<img class="cat-thumb" src="' . $row['thumb'] . '" alt="user profile" />';
            $sub_array[] = strtoupper($row['name']) ;
            $sub_array[] = $row['parent_category'];
            $sub_array[] = $t_products;
            $sub_array[] = $t_sell;
            $sub_array[] = $row['status'];
            $sub_array[] = '<div class="btn-group mb-1">
                <button type="button" class="btn btn-outline-success">Info</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <span class="sr-only">Info</span> 
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item editBtn" id="editBtn" href="#" data-bs-toggle="modal"
                    data-bs-target="#editVendor" data-id="'.$row['id'].'">Edit</a>
                    <a class="dropdown-item deleteBtn" data-id="'.$row['id'].'" id="deleteBtn" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                </div>
            </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $count_rows,
            'recordsFiltered' => $total_all_rows,
            'data' => $data,
        );
        echo json_encode($output);
    break;

    case "delUser":
        $id = $_POST['id'];
        $query=mysqli_query($conn, "UPDATE `users` SET `status`='deleted' WHERE `uid`='$id'");
        if($query ==true)
        {
        
            $data = array(
                'status'=>'true',
            
            );

            echo json_encode($data);
        }
    break;

    case "newCategory":
        $name = $_POST['name'];
        $sql=mysqli_query($conn, "SELECT * FROM `category` WHERE `name`='$name'");
        if(mysqli_num_rows($sql) > 0){
            $data = array(
                'status'=>'category already exist',
            
            );
            echo json_encode($data);
        }
        else{
            $query=mysqli_query($conn, "INSERT INTO `category`(`name`, `status`) VALUES ('$name','active')");
            if($query ==true)
            {
            
                $data = array(
                    'status'=>'true',
                
                );

                echo json_encode($data);
            }
        }
    break;

    case "new_subCategory":
        $name = $_POST['name'];
        $parent_category = $_POST['parent_category'];
        $sql=mysqli_query($conn, "SELECT * FROM `sub_category` WHERE `name`='$name'");
        if(mysqli_num_rows($sql) > 0){
            $data = array(
                'status'=>'Sub category already exist',
            
            );
            echo json_encode($data);
        }
        else{
            $query=mysqli_query($conn, "INSERT INTO `sub_category`(`name`, `parent_category`, `status`) VALUES ('$name', '$parent_category', 'active')");
            if($query ==true)
            {
            
                $data = array(
                    'status'=>'true',
                
                );

                echo json_encode($data);
            }
        }
    break;

    case "get_subcategories":
        // Retrieve the selected category from the AJAX request
        $category = $_POST['category'];

        // Query the database to get the subcategories for the selected category
        // Replace the following lines with your database connection and query logic
        $sql = "SELECT * FROM `sub_category` WHERE `parent_category`='$category'";
        $result = mysqli_query($conn, $sql);

        $subcategories = array();
        if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $subcategories[] = $row['name'];
        }
        }

        // Return the subcategories as a JSON-encoded response
        echo json_encode($subcategories);
    break;

    case "image_vali":
        function detectMaliciousContent($text) {
            // Implement your own logic for detecting malicious content
            // For example, you can use pattern matching, keyword filtering, etc.
            // Return true if malicious content is detected, false otherwise
            // Modify this function based on your specific requirements
            return false;
        }
        
        // Check if a file was uploaded
        if (!empty($_FILES["image"]["name"])) {
            // Get the file information
            $imageInfo = getimagesize($_FILES["image"]["tmp_name"]);
            if ($imageInfo === false) {
                echo "Invalid image file.";
            } else {
                // Verify the MIME type
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($imageInfo['mime'], $allowedTypes)) {
                    echo "Invalid image file.";
                } else {
                    // Check for malicious content
                    $isMalicious = detectMaliciousContent(file_get_contents($_FILES["image"]["tmp_name"]));
                    if ($isMalicious) {
                        echo "Invalid image file.";
                    } else {
                        echo "valid";
                    }
                }
            }
        } else {
            echo "No file selected.";
        }
    break;

    case "productAdd":
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the data from the AJAX request
            $img1 = $_POST['img1'];
            $img2 = $_POST['img2'];
            $img3 = $_POST['img3'];
            $img4 = $_POST['img4'];
            $img5 = $_POST['img5'];
            $img6 = $_POST['img6'];
            $img7 = $_POST['img7'];
            $product_name = $_POST['product_name'];
            $categories = $_POST['categories'];
            $sub_categories = $_POST['sub_categories'];
            $slug = $_POST['slug'];
            $sort_description = $_POST['sort_description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $full_details = $_POST['full_details'];
            $product_tag = $_POST['product_tag'];
            $gender = $_POST['gender'];
            $pid = rand(time(), 100000000);
            $date = date('y-m-d h:i:s');
            $status = "active";

            // Perform additional validation if needed

            // Convert base64-encoded images to PNG files with unique filenames
            function base64ToPng($base64Data, $outputDirectory, $uniqueId, $sequentialNumber)
            {
                $filename = $uniqueId . $sequentialNumber . '.png';
                $outputPath = $outputDirectory . '/' . $filename;

                $imageData = str_replace('data:image/png;base64,', '', $base64Data);
                $imageData = str_replace(' ', '+', $imageData);
                $imageData = base64_decode($imageData);

                if (file_put_contents($outputPath, $imageData)) {
                    return $outputPath;
                } else {
                    return null;
                }
            }

            $uniqueId = uniqid();

            $uploadedImages = [];

            // Convert img1 if it is in base64 format and not the excluded filename
            if (!empty($img1) && $img1 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img1Path = base64ToPng($img1, '../uploads', $uniqueId, 'one');
                $img1name = $uniqueId.'one.png';
                $uploadedImages[] = 'assets/uploads/'.$img1name;
            }

            // Convert img2 if it is in base64 format and not the excluded filename
            if (!empty($img2) && $img2 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img2Path = base64ToPng($img2, '../uploads', $uniqueId, 'two');
                $img2name = $uniqueId.'two.png';
                $uploadedImages[] = 'assets/uploads/'.$img2name;
            }

            // Convert img3 if it is in base64 format and not the excluded filename
            if (!empty($img3) && $img3 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img3Path = base64ToPng($img3, '../uploads', $uniqueId, 'three');
                $img3name = $uniqueId.'three.png';
                $uploadedImages[] = 'assets/uploads/'.$img3name;
            }

            // Convert img4 if it is in base64 format and not the excluded filename
            if (!empty($img4) && $img4 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img4Path = base64ToPng($img4, '../uploads', $uniqueId, 'four');
                $img4name = $uniqueId.'four.png';
                $uploadedImages[] = 'assets/uploads/'.$img4name;
            }

            // Convert img5 if it is in base64 format and not the excluded filename
            if (!empty($img5) && $img5 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img5Path = base64ToPng($img5, '../uploads', $uniqueId, 'five');
                $img5name = $uniqueId.'five.png';
                $uploadedImages[] = 'assets/uploads/'.$img5name;
            }

            // Convert img6 if it is in base64 format and not the excluded filename
            if (!empty($img6) && $img6 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img6Path = base64ToPng($img6, '../uploads', $uniqueId, 'six');
                $img6name = $uniqueId.'six.png';
                $uploadedImages[] = 'assets/uploads/'.$img6name;
            }

            // Convert img7 if it is in base64 format and not the excluded filename
            if (!empty($img7) && $img7 !== 'assets/img/products/vender-upload-thumb-preview.jpg') {
                $img7Path = base64ToPng($img7, '../uploads', $uniqueId, 'seven');
                $img7name = $uniqueId.'seven.png';
                $uploadedImages[] = 'assets/uploads/'.$img7name;
            }


            // Insert the data into the database
            // $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
            // if (!$conn) {
            //     die("Connection failed: " . mysqli_connect_error());
            // }

            // Escape special characters to prevent SQL injection
            $product_name = mysqli_real_escape_string($conn, $product_name);
            $categories = mysqli_real_escape_string($conn, $categories);
            $sub_categories = mysqli_real_escape_string($conn, $sub_categories);
            $slug = mysqli_real_escape_string($conn, $slug);
            $sort_description = mysqli_real_escape_string($conn, $sort_description);
            $price = mysqli_real_escape_string($conn, $price);
            $quantity = mysqli_real_escape_string($conn, $quantity);
            $full_details = mysqli_real_escape_string($conn, $full_details);
            $product_tag = mysqli_real_escape_string($conn, $product_tag);

            // Join the uploaded images into a comma-separated string
            $uploadedImagesString = implode(', ', $uploadedImages);

            // Create the SQL query
            $sql = "INSERT INTO products (pid, img, name, category, sub_categories, gender, slug, description, price, quantity, full_details, tags, date, status)
                    VALUES ('$pid', '$uploadedImagesString', '$product_name', '$categories', '$sub_categories', '$gender', '$slug', '$sort_description', '$price', '$quantity', '$full_details', '$product_tag', '$date', '$status')";

            if (mysqli_query($conn, $sql)) {
                // $response = array('status' => 'true');
                echo "success";
            } else {
                echo "failed";
                // $response = array('status' => 'false');
            }

            // Close the database connection
            // mysqli_close($conn);

            // Send the response back to the AJAX request
            // echo json_encode($response);
        }

    break;

    case "product-delete":
        $id=$_POST['id'];
        $query = mysqli_query($conn, "UPDATE `products` SET `status`='deleted' WHERE `pid`='$id'");
        if($query>0){
            echo 'deleted';
        }
    break;
}
?>