  $(document).ready(function () {
  $(document).on("change",".88f",function(){
    var val = $('.88f:checked').val();
    console.log(val)
  });
var stages_html = `
  <div class="row mb-6 sub-type" id="sub-type">
  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Type</label>
  <div class="row">
  <div class="col-lg-6 fv-row fv-plugins-icon-container">
  <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " aria-label="Default select example" for="stage" name="sub_type" class="stage">
  <option>Select one</option>
  <option value="shop">Shop</option>
  <option value="house">House</option>
  <option value="land">Land</option>
  <option value="live-stock">LiveStock</option>
  <option value="miscellancous">Miscellancous</option>
  </select>
  </div>
  </div>
  </div>`
  var stages_html2 = `
  <div class="row mb-6 sub-type2" id="sub-type2">
  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Type</label>
  <div class="row">
  <div class="col-lg-6 fv-row fv-plugins-icon-container">
  <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " aria-label="Default select example" for="stage" name="sub_type" class="stage">
  <option>Select one</option>
  <option value="cycle">Cycle</option>
  <option value="bike">Bike</option>
  <option value="car">Car</option>
  <option value="miscellancous">Miscellancous</option>
  </select>
  </div>
  </div>

  
  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Engine Number</label>
  <div class="row">
  <div class="col-lg-6 fv-row fv-plugins-icon-container">
  <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " for="stage" name="engine_no" class="engine_no">

  </div>
  </div>
  </div>
  <div class="row mb-6 sub-type" id="sub-type">
  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Frame Number</label>
  <div class="row">
  <div class="col-lg-6 fv-row fv-plugins-icon-container">
  <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " for="stage" name="frame_no" class="frame_no">

  </div>
  </div>
  `
  
 // var stages = `
 //  <div class="row mb-6 sub-type3" id="sub-type3">
 //  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Engine Number</label>
 //  <div class="row">
 //  <div class="col-lg-6 fv-row fv-plugins-icon-container">
 //  <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " for="stage" name="engine-no" class="engine_no">

 //  </div>
 //  </div>
 //  </div>
 //  <div class="row mb-6 sub-type" id="sub-type">
 //  <label for="stages" class="col-lg-4 col-form-label required fw-bold fs-6">Frame Number</label>
 //  <div class="row">
 //  <div class="col-lg-6 fv-row fv-plugins-icon-container">
 //  <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 " for="stage" name="frame-no" class="frame_no">

 //  </div>
 //  </div>
 //  </div>
 //  `
  $(document).on("change",".type",function(){
    var val = $('.type:checked').val();
    console.log(val);
    if(val == 'yes'){
      $('#sub-type').html(stages_html)
    }
    else{
      $('#sub-type').html(stages_html2)
    }
  });
  $(document).on("change",".sub-type2",function(){
    var val = $('.sub-type2:checked').val();
    console.log(val)
    if(val == 'car' && val == 'bike'){
      $('#sub-type3').html('stages')
    }
    else{
      $('#sub-type3').html('')
    }
  });
});


