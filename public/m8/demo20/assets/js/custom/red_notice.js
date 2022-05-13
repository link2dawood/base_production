$(document).ready(function () {
  var underprocess_html = `
  <label for="under_process" class="col-lg-4 col-form-label required fw-bold fs-6">Is Application Under Process?</label>
  <br>

  <div class="col-lg-8">
  </div>
  <div class="row">
  <div class="col-lg-8 fv-row fv-plugins-icon-container">
  <div class="w-100 d-flex">
  <label class="mt-2 px-3">No</label>
  <label class="switch">
  <input type="checkbox" class="switch_input under_process" name="red_notice" value="yes">
  <span class="slider round"></span>
  </label>
  <label class="mt-2 px-3">Yes</label>
  </div>

  </div>
  </div>`
  var stages_html = `
  <div class="row mb-6 stages" id="stages">
  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Stages</label>
  <div class="row">
  <div class="col-lg-6 fv-row fv-plugins-icon-container">
  <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " aria-label="Default select example" for="stage" name="red_notice" class="stage">
  <option>Select one</option>
  <option value="thana">Thana</option>
  <option value="fdpo office">SDPO Office</option>
  <option value="dpo office">DPO Office</option>
  <option value="rpo office">RPO Office</option>
  <option value="ig office">IG Office</option>
  <option value="home departmet">Home Department</option>
  <option value="wazart-e-dakhla / interior ministery">Wazart-e-Dakhla / Interior Ministery</option>
  </select>
  </div>
  </div>
  </div>`
  $(document).on("change",".red_notice",function(){
    var val = $('.red_notice:checked').val();
    console.log(val)
    if(val == 'yes'){
      $('#process').html('')
    }
    else{
      $('#process').html(underprocess_html)
    }
  });
  $(document).on("change",".under_process",function(){
    var val = $('.under_process:checked').val();
    console.log(val);
    if(val == 'yes'){
      $('#stages').html(stages_html)
    }
    else{
      $('#stages').html('')
    }
  });
});



