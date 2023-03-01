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
<div class="grid justify-self-stretch p-8 w-full " >
    <div class="justify-self-start">
       <a href="/" class="font-bold text-green-900 text-3xl lg:text-4xl">RigSpotter</a>
    </div>
    <button class="text-md font-bold p-3  grid justify-self-end lg:hidden flex-row " onclick="nav()" id="icon" style="margin-top:-37.3px ">
       Menu  </button>
<div class="hidden lg:grid mr-6">
    <div class="justify-self-center " style="margin-top: -27.3px;">
       <div class="flex">
            
            <a href="" class="font-bold text-md px-6  text-green-900 hover:p-3  hover:text-gray-400">About</a>

            <a href="" class="font-bold text-md px-6 text-green-900 hover:p-3 hover:text-gray-400">Video Proofs</a>
           
           
          
            <a href="" class="font-bold text-md px-6 text-green-900 hover:p-3  hover:text-gray-400">Image Proofs</a>
            <a href="" class="font-bold text-md  px-6 text-green-900 hover:p-3 hover:text-gray-400">Upload Video</a>

       </div>
      
  
    </div>
</div>
<div class="justify-self-center ml-24 lg:ml-0 lg:justify-self-end" style="margin-top: -33.3px;">
    <div class="flex">
        <div class="mb-3 xl:w-96">
          <div class="relative mb-4 flex w-full flex-wrap items-stretch">
            <input
              type="search"
              class="relative m-0 block w-[1%] min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-800 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-gray-800 focus:shadow-te-primary focus:outline-none dark:border-gray-600  dark:placeholder:text-gray-800"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="button-addon2" />
            <span
              class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-black "
              id="basic-addon2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>

<!--Mobile View-->
<div class="   z-40 absolute  inset-y-0 left-0  flex flex-col lg:hidden sm:hidden md:hidden xl:hidden text-center" id="navbar" style="display:none;">
    <div class="grid justify-items-center fixed bg-green-100 border-solid shadow-md p-10 m-auto "  style="margin-top:-25px; height:120vh; width:220px;">
    <a href="/about" class="text-md  font-bold p-3 flex flex-nowrap flex-row  text-gray-800 " style="margin-top: 10px; margin-bottom:-75px;">
    <p class="font-bold text-md">About</p>
  </a>
    <a href="/videos" class="text-md  font-bold p-3  flex flex-nowrap flex-row  text-gray-800 " style="margin-bottom:-75px"> <p class="font-bold text-md">Video Proofs</p></a>
    <a href="/images" class="text-md  font-bold p-3 flex flex-nowrap flex-row  text-gray-800 " style="margin-bottom: -75px">
      <p class="font-bold text-md">Image Proofs</p>
    </a>
    <a href="" class="text-md  font-bold p-3 flex flex-nowrap flex-row  text-gray-800 " style="margin-bottom: -75px">
        <p class="font-bold text-md">Upload Videos</p>
      </a
    </div>
  
  </div>
  
</div>