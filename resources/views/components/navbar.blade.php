<script>
    function nav() {
      var x = document.getElementById("navbar");
      if (x.style.display =="flex") {
        x.style.display = "none";
      } else {
        x.style.display = "flex";
      }
    }
    
    </script>
<div class="grid justify-self-stretch p-8 w-full" >
    <div class="justify-self-start">
       <a href="/" class="font-bold text-green-900 text-3xl lg:text-4xl">RigSpotter</a>
    </div>
    <button class="text-md font-bold p-3  grid justify-self-end lg:hidden flex-row " onclick="nav()" id="icon" style="margin-top:-37.3px ">
       Menu  </button>
<div class="hidden lg:grid">
    <div class="justify-self-center " style="margin-top: -27.3px;">
       <div class="flex">
            
            <a href="" class="font-bold text-md px-6 lg:text-xl text-green-900 hover:p-3  hover:text-gray-400">About</a>

            <a href="" class="font-bold text-md lg:text-xl px-6 text-green-900 hover:p-3 hover:text-gray-400">Video Evidences</a>
           
           
          
            <a href="" class="font-bold text-md px-6 lg:text-xl text-green-900 hover:p-3  hover:text-gray-400">Image Evidences</a>
        
       </div>
    </div>

    <div class="justify-self-end" style="margin-top: -27.3px;">
        <a href="" class="font-bold text-md lg:text-xl px-6 text-green-900 hover:p-3 hover:text-gray-400">Upload Video</a>
           
    </div>
</div>
<!--Mobile View-->
<div class="   z-40 absolute  inset-y-0 left-0  flex flex-col lg:hidden sm:hidden md:hidden xl:hidden text-center" id="navbar" style="display:none;">
    <div class="grid justify-items-center fixed bg-green-100 border-solid shadow-md p-10 m-auto "  style="margin-top:-25px; height:120vh; width:220px;">
    <a href="/about" class="text-md  font-bold p-3 flex flex-nowrap flex-row  text-gray-800 " style="margin-top: 10px; margin-bottom:-75px;">
    <p class="font-bold text-md">About</p>
  </a>
    <a href="/videos" class="text-md  font-bold p-3  flex flex-nowrap flex-row  text-gray-800 " style="margin-bottom:-75px"> <p class="font-bold text-md">Video Proofs</p></a>
    <a href="" class="text-md  font-bold p-3 flex flex-nowrap flex-row  text-gray-800 " style="margin-bottom: -75px">
      <p class="font-bold text-md">Image Proofs</p>
    </a>
    </div>
  
  </div>
  
</div>