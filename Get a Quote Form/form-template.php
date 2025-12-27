<!-- ========================= -->
<!-- START: CUSTOM QUOTE FORMS -->
<!-- ========================= -->

<style>
/* ===== Form Container ===== */
.cpf {
  font-family: Arial, sans-serif;
  max-width: 980px;
  margin: 20px auto;
  padding: 10px;
  box-sizing: border-box;
}

/* Tabs */
.cpf .tabs {
  display: flex;
  gap: 12px;
  justify-content: center;
  margin-bottom: 18px;
}
.cpf .tab-btn {
  padding: 10px 18px;
  border-radius: 50px;
  border: 0;
  cursor: pointer;
  font-weight: 600;
  background: #ffd973;
  color: #222;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
}
.cpf .tab-btn.active { background:#0867ff; color:#fff;  }
.cpf .tab-btn:hover{
  padding: 10px 18px;
  border-radius: 50px;
  border: 0;
  cursor: pointer;
  font-weight: 600;
  background: #0867ff;
  color: #fff;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
}
/* Panel */
.cpf .panel {
  background: #fff;
  border-radius: 12px;
  padding: 22px;
  box-shadow: 0 8px 26px rgba(11,19,40,0.06);
}
.cpf .hidden { display: none !important; }

/* Rows & Columns */
.cpf .row {
  /* display: flex;
  gap: 18px;
  flex-wrap: wrap;
  margin-bottom: 14px; */
}
.cpf .col {
  flex: 1 1 300px;
  min-width: 230px;
}

/* Labels and Inputs */
.cpf label.field-label { display:block; font-weight:600; margin-bottom:6px; font-size:14px; }
.cpf input, .cpf select, .cpf textarea {
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  background: #f6f7f8;
  box-sizing: border-box;
  font-size:14px;
}
.cpf textarea { min-height:110px; resize:vertical; }

/* Services Left/Right */
.cpf .services-block { 
    display:flex; 
    gap:22px; 
    flex-wrap:wrap; 
    align-items:flex-start; 
}
.cpf .services-left, 
.cpf .services-right { 
    flex:1 1 260px; 
    min-width:220px; 
    
}

/* Checkbox alignment */
.cpf .services-left label {
  display:flex;
  align-items:center;
  gap:10px;
  margin-bottom:8px;
  font-size:15px;
}
.cpf input[type="checkbox"] {
  width:18px;
  height:18px;
}

/* LEFT column bottom padding to align with right */
.cpf .services-left {
    padding-bottom: 50px;
}

/* Align Frequency + Details */
.cpf .align-row { 
    display:flex; 
    gap:20px; 
    flex-wrap:wrap; 
    align-items:flex-start; 
    margin-top: 55px;
}
.cpf .align-row .col { 
    min-width:260px; 
    flex:1; 
}

/* Submit + success */
.cpf .submit-row { 
  text-align:right; 
}
.cpf .btn { 
    padding:12px 18px; 
    border-radius:10px; 
    border:0; 
    cursor:pointer; 
    font-size:15px; 
    background:#0867ff; 
    color:#fff; 
}
.cpf .success { 
    background:#e8ffe9; 
    border-left:4px solid #2ecc71; 
    padding:12px; 
    margin-top:10px; 
    border-radius:8px; 
    color:#187d3b; 
    font-size:15px; 
}

/* ===========================
-------Over write CSS--------  
===========================*/
#commercialForm{
  display: flex;
  flex-direction: column;
  gap: 15px;
}
#commercialForm .form-top{
  display: flex;
  flex-direction: column;
  gap: 15px;
}
#commercialForm .row .col input{
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  background: #f6f7f8;
  box-sizing: border-box;
  font-size:14px;
}
#commercialForm .services-block{
  display: flex;
  flex-direction: column;
  justify-content: start;
  gap: 20px;
  margin-top: 10px;
  /* background-color: #0867ff; */
}
#commercialForm .services-block .services-top{
  display: flex;
  /* flex-direction: row; */
  justify-content: start;
  align-items: start;
  /* background-color: #187d3b; */
  width: 100%;
  gap: 20px;
}
#commercialForm .services-block .services-top .services-top-left{
  display: flex;
  flex-direction: column;
  width: 50%;
  /* background-color: #e6c9ff; */
  gap: 5px;
}
#commercialForm .services-block .services-top .services-top-right{
  display: flex;
  flex-direction: column;
  width: 50%;
  gap: 15px;
  /* background-color: red; */
}
#commercialForm .services-block .services-top .services-top-right input{
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  background: #f6f7f8;
  box-sizing: border-box;
  font-size:14px;
}
#commercialForm .services-block .services-bottom{
  display: flex;
  width: 100%;
  /* background-color: #187d3b; */
  gap: 20px;
  align-items: end;
}
#commercialForm .services-block .services-bottom .services-bottom-left{
  width: 50%;
}
#commercialForm .services-block .services-bottom .services-bottom-left .desire-sec{
  margin-bottom: 6px;
}
#commercialForm .services-block .services-bottom .services-bottom-right{
  width: 50%;
}

/* -------RESIDENTIAL STYLES------- */
#residentialForm{
  display: flex;
  flex-direction: column;
  gap: 15px;
}
#residentialForm .form-top{
  display: flex;
  flex-direction: column;
  gap: 15px;
}
#residentialForm .row .col input{
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  background: #f6f7f8;
  box-sizing: border-box;
  font-size:14px;
}
#residentialForm .services-block{
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 10px;
}
#residentialForm .services-block .services-top{
  display: flex;
  gap: 20px;
  width: 100%;
}
#residentialForm .services-block .services-top .services-top-left{
  display: flex;
  flex-direction: column;
  width: 50%;
  gap: 5px;
}
#residentialForm .services-block .services-top .services-top-right{
  display: flex;
  flex-direction: column;
  width: 50%;
  gap: 15px;
}
#residentialForm .services-block .services-top .services-top-right input{
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #e0e0e0;
  background: #f6f7f8;
  box-sizing: border-box;
  font-size:14px;
}
#residentialForm .services-block .services-bottom{
  display: flex;
  gap: 20px;
  width: 100%;
  align-items: end;
}
#residentialForm .services-block .services-bottom .services-bottom-left{
  width: 50%;
}
#residentialForm .services-block .services-bottom .services-bottom-left .desire-sec{
  margin-bottom: 6px;
}
#residentialForm .services-block .services-bottom .services-bottom-right{
  width: 50%;
}
.res-content{
  border: 1px solid #FFD973;
  padding: 20px;
  margin-top: 50px;
}
.submit-row{
  margin-top: 20px;
}

/* Mobile */
@media (max-width:700px) {
    #commercialForm .services-block{
      gap:10px;
    }
    #commercialForm .services-block .services-top{
      flex-direction: column;
      gap: 20px;
    }
    #commercialForm .services-block .services-top .services-top-left{
      width: 100%;
    }
    #commercialForm .services-block .services-top .services-top-right{
      width: 100%;
    }
    #commercialForm .services-block .services-bottom{
      flex-direction: column;
    }
    #commercialForm .services-block .services-bottom .services-bottom-left{
      width: 100%;
    }
     #commercialForm .services-block .services-bottom .services-bottom-left .desire-sec{
      margin-bottom: 0px;
    }
    #commercialForm .services-block .services-bottom .services-bottom-right{
      width: 100%;
    }
    /* -------RESIDENTIAL STYLES------- */
    #residentialForm .services-block{
      gap:10px;
    }
     #residentialForm .services-block .services-top{
      flex-direction: column;
      gap: 20px;
    }
    #residentialForm .services-block .services-top .services-top-left{
      width: 100%;
    }
    #residentialForm .services-block .services-top .services-top-right{
      width: 100%;
    }
    #residentialForm .services-block .services-bottom{
      flex-direction: column;
    }
    #residentialForm .services-block .services-bottom .services-bottom-left{
      width: 100%;
    }
    #residentialForm .services-block .services-bottom .services-bottom-left .desire-sec{
      margin-bottom: 0px;
    }
    #residentialForm .services-block .services-bottom .services-bottom-right{
      width: 100%;
    }
    .res-content{
      padding: 15px;
      margin-top: 30px;
    }
    .submit-row{
      margin-top: 10px;
    }
}
</style>

<div class="cpf">

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab-btn active" data-panel="commercial">Commercial Quote</button>
    <button class="tab-btn" data-panel="residential">Residential Quote</button>
  </div>

  <!-- ========================= -->
  <!-- COMMERCIAL PANEL -->
  <!-- ========================= -->
  <div class="panel" id="panel-commercial">
    <form id="commercialForm">

      <div class="form-top">
        <div class="row">
          <div class="col"><label class="field-label">Name *</label><input name="name" required></div>
        </div>
        <div class="row">
          <div class="col"><label class="field-label">Phone *</label><input name="phone" type="tel" required></div>
        </div>

        <div class="row">
          <div class="col"><label class="field-label">Email *</label><input name="email" type="email" required></div>
        </div>

        <div class="row">
          <div class="col"><label class="field-label">Business Address *</label><input name="address" required></div>
        </div>
        <div class="row">
          <div class="col">
            <label class="field-label">Category *</label>
            <select name="category" required>
              <option value="">Select category</option>
              <option>Retail</option><option>Multifamily</option>
              <option>Drive-Thru</option><option>Restaurant</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Service Block -->
      <div class="row services-block">

        <div class="services-top">
          <div class="services-top-left">
            <label class="field-label">Services Needed *</label>

            <label><input type="checkbox" name="services[]" value="Sidewalks"> Sidewalks</label>
            <label><input type="checkbox" name="services[]" value="Parking Lot"> Parking Lot</label>
            <label><input type="checkbox" id="c-be" name="services[]" value="Building Exterior"> Building Exterior</label>
            <label><input type="checkbox" id="c-dump" name="services[]" value="Dumpster"> Dumpster</label>
            <label><input type="checkbox" name="services[]" value="Window Cleaning"> Window Cleaning (≤3 stories)</label>
          </div>

          <div class="services-top-right">
            <div id="c-be-panel" class="hidden">
              <label class="field-label">How many stories?</label>
              <input name="stories" type="number" min="1">
            </div>

            <div id="c-dump-panel" class="hidden">
              <label class="field-label">Number of Dumpsters</label>
              <input name="dumpsters" type="number" min="1">
            </div>
          </div>

          
        </div>

        <div class="services-bottom">
          <div class="services-bottom-left">
            <div class="col desire-sec">
              <label class="field-label">Desired Frequency *</label>
              <select name="frequency" required>
                <option value="">Select</option>
                <option>One-Time</option><option>Bi-Weekly</option>
                <option>Monthly</option><option>Quarterly</option>
              </select>
            </div>
          </div>
          <div class="services-bottom-right">
            <div class="col">
              <label class="field-label">Additional Details</label>
              <textarea name="details"></textarea>
            </div>
          </div>
        </div>

      </div>

      <div class="submit-row">
        <button class="btn" type="submit">Submit Commercial Quote</button>
      </div>

      <div class="success hidden" id="cSuccess">Your commercial quote request has been sent successfully.</div>
    </form>
  </div>

  <!-- ========================= -->
  <!-- RESIDENTIAL PANEL (FIXED) -->
  <!-- ========================= -->
    <div class="panel hidden" id="panel-residential">

        <form id="residentialForm">

            <div class="form-top">
                <div class="row">
                  <div class="col"><label class="field-label">Name *</label><input name="name" required></div>
                </div>
                <div class="row">
                    <div class="col"><label class="field-label">Phone *</label><input name="phone" type="tel" required></div>
                </div>

                <div class="row">
                    <div class="col"><label class="field-label">Email *</label><input name="email" type="email" required></div>
                </div>

                <div class="row">
                    <div class="col"><label class="field-label">Address *</label><input name="address" required></div>
                </div>
            </div>

            <!-- FIXED SERVICE BLOCK -->
            <div class="row services-block">

                <div class="services-top">
                  <div class="services-top-left">
                    <label class="field-label">Services *</label>

                    <label><input type="checkbox" name="services[]" value="Sidewalks"> Sidewalks</label>
                    <label><input type="checkbox" name="services[]" value="Driveway"> Driveway</label>
                    <label><input type="checkbox" name="services[]" value="Patio"> Patio</label>

                    <label><input type="checkbox" id="r-be" name="services[]" value="Building Exterior"> Building Exterior</label>

                    <label><input type="checkbox" name="services[]" value="Window Cleaning"> Window Cleaning</label>
                  </div>

                  <div class="services-top-right">
                    <div id="r-be-panel" class="hidden">
                        <label class="field-label">How many stories?</label>
                        <input name="stories" type="number" min="1">

                        <label class="field-label" style="margin-top:12px;">Square Footage (SF)</label>
                        <input name="square_feet" type="number" min="0">
                    </div>
                  </div>
                </div>
                <!-- Service Bottom -->
                <div class="services-bottom">
                  <div class="services-bottom-left">
                      <div class="col desire-sec">
                        <label class="field-label">Desired Frequency *</label>
                        <select name="frequency" required>
                            <option value="">Select</option>
                            <option>One-Time</option><option>Bi-Weekly</option>
                            <option>Monthly</option><option>Quarterly</option>
                        </select>
                      </div>
                  </div>
                  <div class="services-bottom-right">
                          <div class="col">
                            <label class="field-label">Additional Details</label>
                            <textarea name="details"></textarea>
                        </div>
                      </div>
                </div>

            </div>



              <div class="submit-row">
                  <button class="btn" type="submit">Submit Residential Quote</button>
              </div>

              <div class="success hidden" id="rSuccess">
                  Your residential quote request has been sent successfully.
              </div>

        </form>


        <div class="res-content">
            <section class="quote-info">
                <p>
                    We work hard to provide your quote as quickly as possible and are usually able to send one within the hour.
                    Please note that quotes may be adjusted if additional grease stains, oil spills, or other unexpected
                    specialized cleaning requirements are discovered.
                </p>
            </section>

            <section class="canyons-discount">
                <h5>Do You Live in The Canyons?</h5>
                <p>
                    Live in The Canyons? Amazing! We’re your neighbors.
                    We want everyone in our community to enjoy a spotless home, so we’re proud to offer
                    <strong>15% off</strong> to all residents of The Canyons.
                </p>
            </section>

            <section class="owners-section">
                <h5>Our Owners</h5>
                <p>
                    We personally answer every call and email, create every quote, and meet every customer.
                </p>

                <ul>
                    <li>
                        <strong>Chaz Schmidt</strong> – Owner & Operator. You’ll see Chaz on nearly every job.
                    </li>
                    <li>
                        <strong>Isabela Schmidt</strong> – Client Support. When Chaz is on-site, Isabela responds to all
                        inquiries to keep our process smooth and hassle-free.
                    </li>
                </ul>
            </section>

        </div>
        <div>
           

        </div>

    </div>
</div>

<script>
/* ========= TAB SWITCH ========= */
document.querySelectorAll('.cpf .tab-btn').forEach(btn => {
  btn.addEventListener('click', function(){
    document.querySelectorAll('.cpf .tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.cpf .panel').forEach(p => p.classList.add('hidden'));
    btn.classList.add('active');
    document.getElementById('panel-' + btn.dataset.panel).classList.remove('hidden');
  });
});

/* ========= CONDITIONAL FIELDS ========= */
const cBE = document.getElementById("c-be");
const cBEpanel = document.getElementById("c-be-panel");
if (cBE) cBE.addEventListener('change', ()=> cBEpanel.classList.toggle('hidden', !cBE.checked));

const cDump = document.getElementById("c-dump");
const cDumpPanel = document.getElementById("c-dump-panel");
if (cDump) cDump.addEventListener('change', ()=> cDumpPanel.classList.toggle('hidden', !cDump.checked));

const rBE = document.getElementById("r-be");
const rBEpanel = document.getElementById("r-be-panel");
if (rBE) rBE.addEventListener('change', ()=> rBEpanel.classList.toggle('hidden', !rBE.checked));

/* ========= AJAX SUBMISSION ========= */
function submitForm(formId, successBoxId, subject){
  const form = document.getElementById(formId);
  const box = document.getElementById(successBoxId);

  form.addEventListener("submit", function(e){
    e.preventDefault();

    let data = new FormData(form);
    data.append("action", "send_custom_form");
    // data.append("email_to", "mdshakiburrahman448@gmail.com");
    data.append("email_to", "<?php echo get_option('admin_email'); ?>");
    data.append("subject", subject);

    fetch("<?php echo admin_url('admin-ajax.php'); ?>", { method: "POST", body: data })
      .then(response => response.json())
      .then(json => {
        if (json.success) {
          box.classList.remove("hidden");
          form.reset();

          if (cBEpanel) cBEpanel.classList.add('hidden');
          if (cDumpPanel) cDumpPanel.classList.add('hidden');
          if (rBEpanel) rBEpanel.classList.add('hidden');

          setTimeout(()=> box.classList.add("hidden"), 5000);
        } else { alert('Submission failed. Try again.'); }
      })
      .catch(err=>{ console.error(err); alert('An error occurred. Try again later.'); });
  });
}

submitForm("commercialForm", "cSuccess", "New Commercial Quote Request");
submitForm("residentialForm", "rSuccess", "New Residential Quote Request");
</script>

<!-- ========================= -->
<!-- END: CUSTOM QUOTE FORMS -->
<!-- ========================= -->
