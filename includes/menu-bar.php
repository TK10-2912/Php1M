<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                    class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <ul class="nav navbar-nav">
                                <li id="home" class="dropdown yamm-fw">
                                    <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Trang chủ</a>
                                </li>
                                <?php
                                $sql = mysqli_query($con, "select id,categoryName  from category limit 6");
                                while ($row = mysqli_fetch_array($sql)) { ?>
                                    <li id="category-<?php echo $row['id']; ?>" class="dropdown yamm">
                                        <a href="category.php?cid=<?php echo $row['id']; ?>">
                                            <?php echo $row['categoryName']; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul><!-- /.navbar-nav -->

                            <div class="clearfix"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var navItems = document.querySelectorAll('.navbar-nav .dropdown');
        navItems.forEach(function (item) {
            item.addEventListener('click', function () {
                // Remove 'active' class from all navigation items
                navItems.forEach(function (navItem) {
                    navItem.classList.remove('active');
                });

                // Add 'active' class to the clicked navigation item
                this.classList.add('active');
            });
        });
    });
</script>