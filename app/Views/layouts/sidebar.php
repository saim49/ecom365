<aside style="margin-top: 30px;" id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="<?php if(isset($dashboard)){echo $dashboard;}else{echo "";}?>">
                        <a href="<?php echo base_url();?>home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if(isset($category)){echo $category;}else{echo "";}?>">
                        <a href="<?php echo base_url();?>categories">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="<?php if(isset($subcategory)){echo $subcategory;}else{echo "";}?>">
                        <a href="<?php echo base_url();?>subcategories">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Sub Categories</span>
                        </a>
                    </li>
                    <li class="<?php if(isset($shop)){echo $shop;}else{echo "";}?>">
                        <a href="<?php echo base_url();?>shops">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Shops</span>
                        </a>
                    </li>
                    <li class="nav-parent <?php if(isset($products)){echo $products;}else{echo "";}?>">
                        <a href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span>Products</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?php if(isset($add_products)){echo $add_products;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product/add">
                                    <i class="fa fa-plus-square"></i> Add New Product
                                </a>
                            </li>
                            <li class="<?php if(isset($product_list)){echo $product_list;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product">
                                    <i class="fa fa-fw fa-list"></i> Product List
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent <?php if(isset($order)){echo $order;}else{echo "";}?>">
                        <a href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span>Orders</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?php if(isset($add_products)){echo $add_products;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product/add">
                                    <i class="fa fa-plus-square"></i> All Orders
                                </a>
                            </li>
                            <li class="<?php if(isset($product_list)){echo $product_list;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product">
                                    <i class="fa fa-fw fa-list"></i> New Orders
                                </a>
                            </li>
                            <li class="<?php if(isset($product_list)){echo $product_list;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product">
                                    <i class="fa fa-fw fa-list"></i> Processed Orders
                                </a>
                            </li>
                            <li class="<?php if(isset($product_list)){echo $product_list;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product">
                                    <i class="fa fa-fw fa-list"></i> FullFilled Orders
                                </a>
                            </li>
                            <li class="<?php if(isset($product_list)){echo $product_list;}else{echo "";}?>">
                                <a href="<?php echo base_url();?>product">
                                    <i class="fa fa-fw fa-list"></i> CR Orders
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if(isset($shop)){echo $shop;}else{echo "";}?>">
                        <a href="<?php echo base_url();?>users">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <hr class="separator" />

        </div>

        <script>
        // Maintain Scroll Position
        if (typeof localStorage !== 'undefined') {
            if (localStorage.getItem('sidebar-left-position') !== null) {
                var initialPosition = localStorage.getItem('sidebar-left-position'),
                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                sidebarLeft.scrollTop = initialPosition;
            }
        }
        </script>


    </div>

</aside>
<!-- end: sidebar-->