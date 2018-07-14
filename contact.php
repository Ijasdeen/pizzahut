<?php require_once('includes/header.php')?>
<main role="main">
    <div class="container-fluid">
        <div class="contactUs-herosection">

            <div class="hero-section">

                <div class="dark-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="hero-sectionContent">
                                    <h3 class="text text-center">CONTACT US, <span>WE LOVE HEARING FROM YOU.</span></h3>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--       contactForm-->
    <div class="container" id="contactForm">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <h3>TENSEE PIZZA HUT</h3>
                    <div id="sectionTitle"></div>
                </div>
                <ul>
         <li><b>Address :</b> <address>No.26-28, New Road,Batticaloa.</address></li>
               <li><b>Telephones :</b> +94758953142/+94658844656</li>
               <li><b>Email :</b> <br/>TeneseePizzahut@gmail.com</li>
               <li><b>Skype :</b> <br/>TenseePizza</li>
                </ul>
            </div>



            <div class="col-md-6">
                <div class="contact-form">
                    <div class="text-center">
                        <h3>CONTACT WITH US</h3>
                        <div id="sectionTitle"></div>
                    </div>
                    <form method="POST" id="feedBackForm">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Full Name">First Name<span class="tex text-danger font-weight-bold">*</span></label>
                                    <input type="text" class="form-control" placeholder="E.g : David" id="feedBackfirstName" required maxlength="200">
                                   <span class="text text-danger" id="firstNameMessage"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="Second Name">Surname <span class="tex text-danger font-weight-bold">*</span></label>
                                    <input type="text" class="form-control" placeholder="E.g : Warner" id="feedBacksecondName" required maxlength="200">
                                    <span class="text text-danger" id="lastNameMessage"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email <span class="text text-danger font-weight-bold">*</span></label>
                            <input type="email" name="emailAddress" id="emailAddress" class="form-control" required maxlength="200" placeholder="E.g :myEmail@gmail.com">
                            <span class="text text-danger" id="emailMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="Website">Website</label>
                            <input type="url" class="form-control" id="feedBackwebsite" placeholder="E.g:http://WWW.yourwebsite.com (optional)">
                            <span class="text text-danger" id="websiteMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message <span class="tex text-danger font-weight-bold">*</span></label>
                            <textarea id="feedBackMessage" class="form-control" required maxlength="1000"></textarea><span class="messageCount text text-muted"><span id="countLength">0</span>/1000</span></div>
                            <div class="form-group">
                                <p class="generalMessage text text-danger text-center font-weight-bold"></p>
                            </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="form-control btn btn-outline-success">
                        </div>
                    </form>
                </div>
                <div class="feedbackSuccessMessage"></div>
            </div>
        </div>
    </div>

 <hr>

    <!--       Map-->
 <div class="container-fluid">
         <div class="col-md-12">
             <div class="map-area">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="333" id="gmap_canvas" src="https://maps.google.com/maps?q=Batticaloa%20pizza%20hut&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:333px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:333px;width:100%;}</style></div>
        </div>
         </div>
     </div>


    <div style="height:50px"></div>


</main>

<?php require_once('includes/footer.php')?>