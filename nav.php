<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <h1> Alumna: Lucero Acuña de la Torre</h1>
            <a class="navbar-brand" href="productos.php">Ver productos</a>
            <a class="navbar-brand" href="carro.php">Ver carrito</a>
        </div>


        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php echo $page_title=="Products" ? "class='active'" : ""; ?>>
                    <a href="productos.php">Productos</a>
                </li>
                <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?>>
                    <a href="carro.php">
                        <?php
                        // query to count all product in cart
                        $query = "SELECT count(*) FROM cart_items WHERE user=1";
 
                        // prepare query statement
                        $stmt = $con->prepare( $query );
 
                        // execute query
                        $stmt->execute();
 
                        // get row value
                        $rows = $stmt->fetch(PDO::FETCH_NUM);
 
                        // return count
                        $cart_count=$rows[0];
                        ?>
                        Carrito <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->