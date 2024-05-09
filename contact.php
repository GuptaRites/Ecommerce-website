<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once('header.php');


?>

<!-- Contact Start -->
<div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-primary">Get in touch</h1>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                                form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                                and you're done.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-7">
                        <form action="" class="">
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                            <input type="email" class="w-100 form-control border-0 py-3 mb-4"
                                placeholder="Enter Your Email">
                            <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10"
                                placeholder="Your Message"></textarea>
                            <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-2">Taramba, Rajkot, Gujarat, India</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-2">sharmapulkit2304@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-2">(+91) 9693353110</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>
<?php
include_once("footer.php");
?>

<?php
}
else{
    header('location:login.php');
}
?>