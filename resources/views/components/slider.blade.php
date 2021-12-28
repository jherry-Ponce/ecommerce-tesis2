
    <script>
        var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");
               
            cont=0;
            
            break;
            }
            
            
            }},8000);
    
    }
    
    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }
    
    
    
    function sliderButton1(){
    
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-purple-800");
        $("#sButton1").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=0
        
        }
        
        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-purple-800");
        $("#sButton2").addClass("bg-purple-800");
        reinitLoop(4000);
        cont=1
        
        }
    
        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            
    
            loopSlider();
        
        });
    
      
      </script>

    
   
      <div class="sliderAx h-auto ">
          <div id="slider-1" class="w-full h-auto  mx-auto ">
            <div class="bg-cover bg-center  text-white relative  object-fill flex ">
                <img class="w-full slider-tam" src="https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80" alt="" srcset="">
                <div class="md:w-1/2 absolute items-center">
                    <p class="font-bold text-sm uppercase">Serviceututus</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
            
                </div>  
         </div> <!-- container -->
          <br>
          </div>
    
          <div id="slider-2" class="w-full h-auto mx-auto">
            <div class="bg-cover bg-center  text-white relative object-fill">
                    <img class="w-full slider-tam" src="https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" srcset="">
                    <div class="md:w-1/2 absolute top-0">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                </div>  
             
            </div> <!-- container -->
                <br>
          </div>
       </div>
       
       <div  class="flex justify-between w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
      </div>
    
  