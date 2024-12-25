<x-dashbord title=List>
    <style>
        svg {
            stroke: rgb(11 11 11);
                           }
       </style>
    <!-- component -->
    <div class="items-center justify-center ">

    </div>
    <h1 class="my-4 mx-auto text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Listes des vols</h1>

    <div class="  items-center justify-center bg-light">
        <div class="p-6 overflow-hidden px-0">
            <table class="w-full min-w-max table-auto text-left">
                <thead>
                    <tr>   
                     <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            id</p>
                    </th>

                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Airline</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                City Departing
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                City Arriving
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Duration
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                This plane has iscal 
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                               wifi
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                PricePricePrice
                            </p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Status</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                                Action</p>          
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                            <p
                                class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">            
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                    {{$flight->id}}</p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('storage/'.$flight->imageAirline) }}" alt="Spotify"
                                    class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                    {{$flight->airline}}</p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                <i class="bi bi-geo-alt"></i>
                                {{$flight->from_city}}</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                <i class="bi bi-geo-alt-fill"></i>
                                {{$flight->to_city}}</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                {{$flight->duration}} <b>h</b></p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">                          
                                {{ $flight->is_direct === 1 ? " Direct flights" : "  Stops" }}                        
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                              
                            </p>
                                <i class="bi bi-{{ $flight->has_wifi === 1 ? "wifi" : "wifi-off"  }}" style="color:{{ $flight->has_wifi === 1 ? "green" : "red"  }}" ></i>
                               
                        </td>
                        <td class="px-4 border-b border-blue-gray-50">
                            <div class="w-max"> 
                              
                                <div class="relative px-4 block grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                    style="opacity: 1;display:block">
                                  
                                    {{$flight->price}}<span class="">dh</span>   
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                               
                                <div class="flex flex-col">
                                  
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                        {{$flight->created_at->format('D M Y')}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <a type="submit" href="{{route('Flight.edit',$flight->id)}}" >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                class="w-14 h-6">
                                <path
                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                </path>
                                </svg>
                            </a>
                             
                           
                            <form action="{{route('Flight.destroy',$flight->id)}}" method="POST" style="display: inline;" >
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Voulez vous vraiment Deleted cette publication {{$flight->id}}')"
                                style="background-color: transparent;width:7px;padding:5px;margin-right:25px"
                               
                                type="submit"
                                >
                      
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.5001 6H3.5" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="#ff0000" stroke-width="1.5"></path> <path d="M18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5M18.8334 8.5L18.6334 11.5" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>

                              
                            </button>
                          
                               
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
               
                </tbody>
          
            </table>
            {{$flights->links()}}
           
        

</x-dashbord>