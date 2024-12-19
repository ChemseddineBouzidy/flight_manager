<x-dashbord title="all flight">
 
  <!-- Success message (optional) -->
  @if(session('success'))
  <div id="alert-additional-content-3"
    class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
    role="alert">
    <div class="flex items-center">
      <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <h3 class="text-lg font-medium">success</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
      {{session('success') }}
    </div>
    <div class="flex">

      <button type="button"
        class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800"
        data-dismiss-target="#alert-additional-content-3" aria-label="Close">
        Dismiss
      </button>
    </div>
  </div>
  @endif
  <!-- Display validation errors -->
  @if ($errors->any())
  <ul>

  </ul>
  <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
      fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Danger</span>
    <div>
      <span class="font-medium">Ensure that these requirements are met:</span>
      <ul class="mt-1.5 list-disc list-inside">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif


  <form class="p-11 bg-light" method="POST" action="{{ route('Flight.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="flex gap-[20px] ">
      <div class="w-2/4 w-full">
        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">from :</label>
          <input type="text" name="from_city" id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder=" City Arriving" />
        </div>
   

        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Airline :</label>
          <input type="text" name="airline" id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="City Departing" />
        </div>
        <div class="mb-5">

          <div class="grow">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Image Airline
              :</label>

            <div class="flex-auto items-center justify-center w-full">
              <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg class="w-12 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                  </svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                      upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" name="imageAirline" id="image" />
              </label>
            </div>


          </div>

        </div>



        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departing time
            :</label>
          <input type="time" name="departing_time" id="departing"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Departing time en hour" />


        </div>
        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arriving time :</label>
          <input type="time" name="arriving_time" id="arriving"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Arriving time en hour" />
        </div>

        
    
      </div>
      <div class="w-2/4  w-full ml-11 ">
        <div class="mb-5">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To :</label>
          <input type="text" name="to_city" id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="City Arriving" />
        </div>
        <div class="">
          
          <div class="inline">
            <label for="text" class=" inline-block mb-2 text-sm font-medium text-gray-900 dark:text-white">This plane has wifi :</label>
            <label for="text" class="ml-48 mb-2 text-sm font-medium text-gray-900 dark:text-white">This plane has iscal :</label>
          </div>
          </div>
        <div class="mb-5">      
          {{-- has_wifi : --}}
          <div class="flex items-center mb-4">
            <input id="checkbox1" type="checkbox" value=1 name="has_wifi"
              class="w-4  h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 mx-4 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>          
            <input id="checkbox2" type="checkbox" name="has_wifi" value=0
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
         
            {{-- is_direct --}}
            <div class="flex items-center ml-36">           
             <input id="checkbox3" type="checkbox" value=1 name="is_direct"
               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
             <label for="default-checkbox" class="ms-2 mx-4 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
             <input id="checkbox4" type="checkbox" name="is_direct" value=0
             class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
           <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
           </div>
          </div>
        
        </div>

       
    
      


      <div class="grow">
        <label for="image" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Image City :</label>

        <div class="flex-auto items-center justify-center w-full">
          <label for="dropzone-file"
            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg class="w-12 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
              </svg>
              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                  upload</span> or drag and drop</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input id="dropzone-file" type="file" name="imageCity" id="image" />
          </label>
        </div>


        <div class="my-5">

          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">duration :</label>
          <input type="text" name="duration" id="time-difference"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            readonly />

        </div>
       
        <div class="my-5">

          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Pilot :</label>
        

  <select id="countries" name="pilot_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Choose a Pilot</option>
    @foreach($Pilots as $Pilot)
    @if ($Pilot->availability === 0)
    <option value="{{$Pilot->id}}">{{$Pilot->name}}</option>
    @else
        NO one
    @endif
    
@endforeach
  </select>


        </div>
       
      </div>

    </div>






  </div>













    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

    <!-- Add your script below -->
    <script>
      // Get the checkboxes
      var checkbox1 = document.getElementById('checkbox1');
      var checkbox2 = document.getElementById('checkbox2');
      var checkbox3 = document.getElementById('checkbox3');
      var checkbox4 = document.getElementById('checkbox4');
      // When checkbox1 is clicked, uncheck checkbox2
      checkbox1.addEventListener('change', function () {
        if (checkbox1.checked) {
          checkbox2.checked = false;
        }
      });
      checkbox3.addEventListener('change', function () {
        if (checkbox3.checked) {
          checkbox4.checked = false;
        }
      });

      // When checkbox2 is clicked, uncheck checkbox1
      checkbox2.addEventListener('change', function () {
        if (checkbox2.checked) {
          checkbox1.checked = false;
        }
      });
      checkbox4.addEventListener('change', function () {
        if (checkbox4.checked) {
          checkbox3.checked = false;
        }
      });
    </script>
{{-- calculet diffMinutes (12:00) from inputs time --}}
<script>
  // Function to calculate the time difference
  function updateTimeDifference() {
    const departing = document.getElementById("departing").value;
    const arriving = document.getElementById("arriving").value;

    if (departing && arriving) {
      // Convert time to minutes since midnight
      const departingMinutes = toMinutes(departing);
      const arrivingMinutes = toMinutes(arriving);

      // Calculate difference in minutes (departing - arriving)
      const diffMinutes = Math.abs(departingMinutes - arrivingMinutes);

      // Display the result in the "Time Difference" input field
      document.getElementById("time-difference").value = diffMinutes;
    } else {
      // If one of the times is missing, clear the result field
      document.getElementById("time-difference").value = '';
    }
  }

  // Convert HH:MM time string to minutes
  function toMinutes(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return hours;
  }

  // Add event listeners to the time inputs
  document.getElementById("departing").addEventListener("input", updateTimeDifference);
  document.getElementById("arriving").addEventListener("input", updateTimeDifference);
</script>
</x-dashbord>
