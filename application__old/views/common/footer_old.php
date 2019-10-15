 <footer style="margin-top: 0;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright &copy; 2019 by Sportselect</p>
               </div>
            </div>
         </div>
      </footer>
</div>
      
      
      <script>
         // Example starter JavaScript for disabling form submissions if there are invalid fields
         /*(function() {
           'use strict';
           window.addEventListener('load', function() {
             // Fetch all the forms we want to apply custom Bootstrap validation styles to
             var forms = document.getElementsByClassName('needs-validation');
             // Loop over them and prevent submission
             var validation = Array.prototype.filter.call(forms, function(form) {
               form.addEventListener('submit', function(event) {
                 if (form.checkValidity() === false) {
                   event.preventDefault();
                   event.stopPropagation();
                 }
                 form.classList.add('was-validated');
               }, false);
             });
           }, false);
         })();*/

         jQuery(function(){
  var hash = window.location.hash;
  hash && jQuery('ul.nav.nav-pills a[href="' + hash + '"]').tab('show'); 
  jQuery('ul.nav.nav-pills a').click(function (e) {
     jQuery(this).tab('show');
     var scrollmem = jQuery('body').scrollTop();
     window.location.hash = this.hash;
  });
});
         jQuery("form").on("change", ".custom-file-input", function(){ 
jQuery(this).parent(".custom-file").attr("data-text", jQuery(this).val().replace(/.*(\/|\\)/, '') );
var changeimagetext = jQuery(this).parent(".custom-file").attr("data-text");
jQuery('.custom-file-label').html(changeimagetext);
});
      </script>
   </body>
</html>