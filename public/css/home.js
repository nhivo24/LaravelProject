 <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
                if(stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if(stepPosition === 'last') {
                    $("#next-btn").addClass('disabled');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });

           
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transition: {
                    animation: 'slide-horizontal', 
                },
                toolbarSettings: {
                    toolbarPosition: 'both', 
                    toolbarExtraButtons: [btnFinish, btnCancel]
                }
            });

          
            $("#reset-btn").on("click", function() {
               
                $('#smartwizard').smartWizard("reset");
                return true;
            });

            $("#prev-btn").on("click", function() {
           
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
              
                $('#smartwizard').smartWizard("next");
                return true;
            });


           
            $("#got_to_step").on("change", function() {
                // Go to step
                var step_index = $(this).val() - 1;
                $('#smartwizard').smartWizard("goToStep", step_index);
                return true;
            });

            $("#is_justified").on("click", function() {
           
                var options = {
                  justified: $(this).prop("checked")
                };

                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });

            $("#animation").on("change", function() {
              
                var options = {
                  transition: {
                      animation: $(this).val()
                  },
                };
                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });

            $("#theme_selector").on("change", function() {
             
                var options = {
                  theme: $(this).val()
                };
                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });

        });
    </script>
