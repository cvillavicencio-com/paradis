
<!-- Contact Start -->
<div class="container-fluid py-5" id="contact">
  <div class="container py-5">
    <div class="section-title position-relative text-center">
      <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contacto</h6>
      <h1 class="font-secondary display-4">Conversemos</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-form">
          <div id="success"></div>
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="form-row">
              <div class="col-sm-4 control-group">
                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Por favor, ingresa tu nombre" />
                <p class="help-block text-danger"></p>
              </div>
              <div class="col-sm-4 control-group">
                <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Tu email" required="required" data-validation-required-message="Por favor, ingresa tu email" />
                <p class="help-block text-danger"></p>
              </div>

              <div class="col-sm-4 control-group">
                <input type="telephone" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Tu teléfono" />
                <p class="help-block text-danger"></p>
              </div>

							
						</div>
            <div class="control-group">
              <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor, ingresa un mensaje"></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
              <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Enviar Mensaje</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
