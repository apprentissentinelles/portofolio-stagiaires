<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">

<img style="width:100%" class="contactphoto" src="images/pics3.jpg">
<div class="containercontact">
  <div class="rowcontact">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2>Contact</h2>
      </div>
  </div>
  <div class="rowcontact">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="#" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Send Message</button>
              </div>
          </form>
      </div>
  </div>
</div>

<script type="text/javascript" src="js/app-contact.js"></script>