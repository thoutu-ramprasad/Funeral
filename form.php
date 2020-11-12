<style>
 body {
     background-color: #eee
 }

 .form-control:focus {
     color: #495057;
     background-color: #fff;
     border-color: #80bdff;
     outline: 0;
     box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25)
 }

 .btn-secondary:focus {
     box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
 }

 .close:focus {
     box-shadow: 0 0 0 0rem rgba(108, 117, 125, .5)
 }

 .mt-200 {
     margin-top: 200px
 }
</style>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
 <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
 <div class="container">
     <div class="row d-flex justify-content-center mt-200"> <div  tabindex="-1">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <div class="modal-body">
                     <div id="smartwizard">
                         <ul>
                             <li><a href="#step-1">Step 1<br /><small>Account Info</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small>Personal Info</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small>Payment Info</small></a></li>
                             <li><a href="#step-4">Step 4<br /><small>Confirm details</small></a></li>
                         </ul>
                         <div>
                             <div id="step-1">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Name" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Email" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Password" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Repeat password" required> </div>
                                 </div>
                             </div>
                             <div id="step-2">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Address" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="City" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="State" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Country" required> </div>
                                 </div>
                             </div>
                             <div id="step-3" class="">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Number" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Holder Name" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="CVV" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Mobile Number" required> </div>
                                 </div>
                             </div>
                             <div id="step-4" class="">
                                 <div class="row">
                                     <div class="col-md-12"> <span>Thanks For submitting your details with BBBootstrap.com. we will send you a confirmation email. We will review your details and revert back.</span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
 <script>
 $(document).ready(function(){

$('#smartwizard').smartWizard({
selected: 0,
theme: 'dots',
autoAdjustHeight:true,
transitionEffect:'fade',
showStepURLhash: false,

});

});
 </script>