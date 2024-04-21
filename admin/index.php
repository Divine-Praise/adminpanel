<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">

    <div class="row index">
        <div class="col-md-12">
            <h1 class="mt-4 fs-4">Dashboard</h1>
            <?php alertMessage(); ?>
            <hr>
        </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-primary">
                    <div class="bg bg-primary">
                        <h5 class="card-title">Total Product</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?= getCount('products'); ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's the total product in your store. click on the <b class="text-primary">View Products</b> button below to view all products in your store</p>
                        <center><a href="products.php" class="btn btn-primary text-white">View Products</a></center>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-warning">
                    <div class="bg bg-warning">
                        <h5 class="card-title">Total Admin</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?= getCount('admins'); ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's the total admin managing this pos system. click on the <b class="text-warning">View Admins</b> button below to view all admins</p>
                        <center><a href="admins.php" class="btn btn-warning text-white">View Admins</a></center>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-info">
                    <div class="bg bg-info">
                        <h5 class="card-title">Total Customers</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?= getCount('customers'); ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's total Customers patronizing Your Store. click on the <b class="text-info">View Customers</b> button below to view all Customers</p>
                        <center><a href="customers.php" class="btn btn-info text-white">View Customers</a></center>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-secondary">
                    <div class="bg bg-secondary">
                        <h5 class="card-title">Total Category</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?= getCount('categories'); ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's Your total product category in your store. click on the <b class="text-secondary">view category</b> button below to view your product category.</p>
                        <center><a href="categories.php" class="btn btn-secondary text-white">View Categories</a></center>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <hr>
                <h5>Orders</h5>
            </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-danger">
                    <div class="bg bg-danger">
                        <h5 class="card-title">Total Orders</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?= getCount('orders'); ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's The total Orders placed by customers in your store. click on the <b class="text-danger">view Orders</b> below to view All Orders.</p>
                        <center><a href="orders.php" class="btn btn-danger text-white">View Orders</a></center>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3 pb-4 sub-index">
                <div class="card border border-1 border-info">
                    <div class="bg bg-info">
                        <h5 class="card-title">Today's Orders</h5>
                        <h5 class="fw-bold mt-1 fs-4 text-center">
                            <?php 
                                $todayDate = date('y,m,d');
                                $todayOrders = mysqli_query($conn, "SELECT * FROM orders WHERE order_date='$todayDate' ");

                                if($todayOrders){
                                    if(mysqli_num_rows($todayOrders) > 0){
                                        $totalCountOrders = mysqli_num_rows($todayOrders);
                                        echo $totalCountOrders;
                                    }else{
                                        echo "0";
                                    }
                                }else{
                                    echo 'Something Went Wrong!';
                                }
                            ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text my-3 text-center">This box display's today's customers Orders. click on the <b class="text-info">view Today Orders</b> button below to view today's order.</p>
                        <center><a href="orders.php" class="btn btn-info text-white">View Today Orders</a></center>
                    </div>
                </div>
            </div>
        </div>
</div> 

<?php include('includes/footer.php'); ?>