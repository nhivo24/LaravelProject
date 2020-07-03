@include('partials/header')  

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/smart_wizard_all.css" rel="stylesheet" type="text/css" />
    <style>
    #smartwizard {    
      margin-top: 40px;   
    }
    </style>

</head>
<body>
  <div class="container">
      <div id="smartwizard">
        <ul class="nav">
           @foreach($categories as $category)
            <li class="nav-item">
              <a class="nav-link" href="#step-{{$category->id}}">
                <strong>{{$category->name}}</strong>
              </a>
            </li>
           @endforeach
        </ul>

        <div class="tab-content">
          @foreach($categories as $category)
            <div id="step-{{$category->id}}" class="tab-pane" role="tabpanel" aria-labelledby="step-{{$category->id}}" style="height: 410px">
                 @foreach($category->products as $products)  
                 <div class="col-md-3">
                    <div style="text-transform: uppercase; ">{{ $products->name}}</div>
                  <div style="color: #d25223">  <strong>{{ $products->getPrice()}} </strong> </div><br> 
                  <div class="container-a2">
                 <ul class="caption-style-2">
                   <li>
                    <div class="img-thumbnail"><img src="{{'/storage/'.$products->image}}" style="height: 320px;width: 250px;"> 
                       <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">  
                        <form method="post" action="cart/{{$products->id}}">       
                       @csrf
                            <a style="text-align: center;" href="detail/{{$products->id}}" type="submit"class="btn btn-success"><i class="fas fa-info-circle fa-2x"></i></a>
                           <button  style="text-align: center;" type="submit"class="btn btn-success" onclick="ok()">  <i class="fas fa-shopping-cart fa-2x"></i></button>
                         </form> 
                        </div>
                      </div>
                   </li>
                </ul>
              </div>
           </div>
         @endforeach
            </div>
         @endforeach
        </div>
    </div>
  </div>
    <br /> &nbsp;
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../css/jquery.smartWizard.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

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
</body>
</html>

@include('partials/footer')

