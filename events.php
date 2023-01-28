<!-- HEADER START -->
<?php require "./required/header.php" ?>
<!-- HEADER END -->

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <span class="fa-2x fw-bold text-dark">Creative Photos</span><i class="fas fa-long-arrow-alt-right fa-lg mx-2 text-dark"></i><span class="fa-lg fw-bold text-dark">Events</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="text-center py-3">
        <p class="fa-2x text-primary fw-bold">Recent Events</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $run = $mysqli->query("SELECT * FROM `events` WHERE `isDeleted` = '0'");
            if ($run && $run->num_rows > 0) {
                while ($row = $run->fetch_object()) {
            ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                        <!-- <a href="event-detail.php"> -->
                        <div class="card h-100 w-100 text-white" role="button" onclick="location.href='event-detail.php'" style="background: #0F046F;">
                            <div class="hover-zoom event-card-img">
                                <img src="assets/images/events/<?= $row->image ?>" class="w-100 h-100 rounded" alt="Image">
                            </div>
                            <div class="card-body bg-white">
                                <h5 class="card-title text-dark fw-bold"><?= $row->name ?></h5>
                                <p class="card-text text-dark">
                                    <?= substr($row->description, 0, 150); ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-white"><?= $row->modifiedOn ?></small>
                            </div>
                        </div>
                        <!-- </a> -->
                    </div>
            <?php
                }
            } else {
                echo "<h3 class='text-center text-dark'>No Events Found</h3>";
            }
            ?>
        </div>
    </div>
</section>



<!-- FOOTER START -->
<?php require "./required/footer.php" ?>
<!-- FOOTER END -->