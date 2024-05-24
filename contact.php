<?php include 'header.php' ?>

<div class="viewServices">
    <div class="col-12">
        <img src="imgall/contact.png" alt="img" style='width:100%;'>
    </div>



    <!-- contact section start  -->

<div class="contactSection py-5">
    <div class="container">
        <div class="col-12">
            <h2 class='fs-2 fw-semibold' style='color:#F2E901;'>Start a project</h2>
            <h3 class='fs-2 fw-bold'>Let’s talk about you</h3>
        </div>

        <div class="row">
            <div class="col-md-6 py-5">
                <div class="cardimg ">
                    <div class="card p-4" style='background:#0B2922;'>
                        <img src="imgall/nikhil.png" width='15%' alt="nikilimg">
                        <div class="card-body">
                            <h5 class="card-title text-white">30min consultation</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make
                                up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-5">
                <div class="contctinput">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label class="form-label fs-6 fw-semibold">Name</label>
                            <input type="text" class="form-control shadow-none" placeholder='Your Name' required>

                        </div>
                        <div class="col-md-6">
                            <label class="form-label fs-6 fw-semibold">Email</label>
                            <input type="email" class="form-control shadow-none" placeholder='Your Email' required>

                        </div>

                        <div class="col-md-12">
                            <label class="form-label fs-6 fw-semibold">Estimated budget</label>
                            <input type="number" class="form-control shadow-none" placeholder='Your budget...' required>

                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label fs-6 fw-semibold">Project summary</label>
                                <textarea class="form-control shadow-none" placeholder='Please your Messages'
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <a class="btn btn-outline-secondary rounded-pill shadow-none send-btn"
                                type="submit">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contact section end  -->


  
</div>

<?php include 'footer.php' ?>