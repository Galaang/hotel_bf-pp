<link rel="stylesheet" href="css/style.css" type="text/css" />
<title>Hotel Bintang Flores</title>
<div class="col-md-12">
    <div class="wrapper">
        <div class="row no-gutters">
            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">E-Ticket</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                        Your message was sent, thank you!
                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary" />
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
