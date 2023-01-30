<!-- HEADER START -->
<?php require "./required/header.php" ?>
<!-- HEADER END -->


<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <span class="fa-2x fw-bold text-dark">Creative Photos</span><i class="fas fa-long-arrow-alt-right fa-lg mx-2 text-dark"></i><span class="fa-lg fw-bold text-dark">Privacy Policy</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">

    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="font-size: 22px;
    text-align: justify;">
                <?php $run = $mysqli->query("SELECT `content` FROM `contents` WHERE `slug` = 'privacy-policy' AND `isDeleted` = '0'");
                $row = $run->fetch_assoc();
                echo $row['content'];
                ?>


                <div class="">

                    At <span class="text-dark fw-bold">Kreative Fotos</span>, we understand the importance of protecting your personal information. Our privacy policy outlines how we collect, use, and share your data, and the steps we take to ensure it is kept safe.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;"> Collection of Information: </p>
                    We collect information from you when you fill out a contact form, book a session, or subscribe to our mailing list. This information may include your name, email address, phone number, and mailing address.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;"> Use of Information:</p>
                    The information we collect is used to provide you with better services and to communicate with you about your session. We may also use it to send you marketing materials, updates, and special offers.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;"> Sharing of Information:</p>
                    We will never sell or rent your personal information to third parties. We may share your information with our trusted service providers who assist us in operating our website, conducting business, or serving you. These third parties are bound by strict confidentiality agreements and are only allowed to use your information for the purpose of providing the services we request.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;">Data Security:</p>
                    We take the security of your information seriously and have implemented measures to protect it from unauthorized access, alteration, or misuse. These measures include the use of secure servers, encryption, and firewalls.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;">Changes to Our Privacy Policy:</p>
                    We may update this policy from time to time to reflect changes in our practices or to comply with legal requirements. If we make changes, we will notify you by posting the revised policy on our website.
                    <p style="font-size: 22px;text-align: justify;font-weight: 700;">Contact Us:</p>
                    If you have any questions or concerns about our privacy policy, please contact us. We are committed to protecting your privacy and will make every effort to resolve any issues you may have."
                </div>




            </div>
        </div>
    </div>
</section>



<!-- FOOTER START -->
<?php require "./required/footer.php" ?>
<!-- FOOTER END -->