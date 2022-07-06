<!------------- Contact ------------>
<div id="contact">
    <div class="contact-header">Contact Me
        <div class="contact-header-caption"> Get In Touch.</div>
    </div>
    <div class="contact-content">
        <!--Contact form-->
        <div class="contact-form">
            <div class="form-header">
                Message Me
            </div>
            <form id="myForm" action="#">
                <div class="input-line">
                    <input id="name" type="text" placeholder="Name" class="input-name">
                    <input id="email" type="email" placeholder="Email" class="input-name">
                </div>
                <input type="text" id="subject" placeholder="subject" class="input-subject">
                <textarea id="body" class="input-textarea" placeholder="message"></textarea>
                <button type="button" id="submit" value="send">Submit</button>
            </form>

        </div>
        <!--Contact form-->
        <!--Contact information-->
        <div class="contact-info">
            <div class="contact-info-header">
                Contact Info
            </div>
            <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p>Parsa Samandi</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="./images/icon-location.png" class="icon" alt="location-icon">
                    <div class="contact-info-icon-text">
                        <h6>Location</h6>
                        <p>Istanbul, Turkey</p>
                    </div>
                </div>
                <div class="contect-info-content-line">
                    <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                    <div class="contact-info-icon-text">
                        <h6>Skype Name</h6>
                        <a href="skype:<live:.cid.f370891a3d212e7b>?<action>">
                            <p>live:.cid.f370891a3d212e7b</p>
                        </a>
                    </div>
                </div>

                <div class="contect-info-content-line">
                    <img src="./images/icon-email.png" class="icon" alt="email-icon">
                    <div class="contact-info-icon-text">
                        <h6>Email</h6>
                        <a href="mailto:parsasamandizadeh@gmail.com">
                            <p>parsasamandizadeh@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
            <!--Contact information end-->
        </div>
    </div>
    <!--copyright-section-->
    @include('footer')
    <!--copyright-section-->
</div>