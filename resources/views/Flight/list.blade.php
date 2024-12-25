<x-dashbord title=aa>
    <!-- component -->
    <div class="flex min-h-screen items-center justify-center bg-light">
        <div class="p-6 overflow-scroll px-0">
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
                                Account</p>          
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
                            <a href="{{route('Flight.edit',$flight->id)}}"
                                class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                type="button">
                                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-4 w-4">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <a href="{{route('Flight.destroy',$flight->id)}}"
                                class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                                type="button">
                                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.5001 6H3.5" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="#ff0000" stroke-width="1.5"></path> <path d="M18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5M18.8334 8.5L18.6334 11.5" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                </span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                <div class="text-sm text-gray-700 py-1">
                    Made with <a class="text-gray-700 font-semibold"
                        href="https://www.material-tailwind.com/?ref=tailwindcomponents" target="_blank">Material
                        Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents"
                        class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
                </div>
            </div>
        </div>

    </div>


 

    {{-- <img src="{{ asset('storage/'.$flight->imageCity) }}" alt="San miguel, italy" loading="lazy"> --}}



    {{-- <p class="card-subtitle">
        <a href="{{route('Flight.show',$flight->id)}}">{{$flight->to_city}}</a>
    </p>
    {{$flight->to_city}}



    @if ($flight->is_direct === 1)
    Direct flights
    @else
    Stops
    @endif
    {{$flight->duration}} Hour

 --}}







    <section class="m-0">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md h-full w-full">
            <div
                class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700 rounded-none flex flex-wrap gap-4 justify-between mb-4">
                <div>
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                        Cryptocurrency Market Overview
                    </h6>
                    <p
                        class="block antialiased font-sans text-sm font-light leading-normal text-inherit text-gray-600 font-normal mt-1">
                        Compare different cryptocurrencies, and make informed investment.
                    </p>
                </div>
                <div class="flex items-center w-full shrink-0 gap-4 md:w-max">
                    <div class="w-full md:w-72">
                        <div class="relative w-full min-w-[200px] h-11">
                            <div
                                class="grid place-items-center absolute text-blue-gray-500 top-2/4 right-3 -translate-y-2/4 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent placeholder:opacity-0 focus:placeholder:opacity-100 text-sm px-3 py-3 rounded-md !pr-9 border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[4.1] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">Search
                            </label>
                        </div>
                    </div>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-900 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] flex items-center gap-2"
                        type="button" data-ripple-dark="true">
                        24h<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-6 overflow-hidden !px-0 py-2">
                <table class="w-full min-w-max table-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    id
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    City Departing
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    City Arriving
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    Airline
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    Duration
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    This plane has iscal
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    This plane has wifi
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    Price
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 text-right">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-bold">
                                    Actions
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="!p-4 border-b border-gray-300">
                                <p
                                    class="block antialiased font-sans text-sm font-light leading-normal text-blue-gray-900 !font-semibold">
                                    {{$flight->id}}
                                </p>

            </div>
        </div>
        </td>
        <td class="!px-4 border-b border-gray-300">
            {{$flight->from_city}}

        </td>
        <td class="!p-4 border-b border-gray-300">

            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                {{$flight->to_city}}
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                {{$flight->from_city}}
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                {{$flight->from_city}}
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-green-500 !font-bold text-right">
                +2.92%
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                $45.31B
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                $915.61B
            </p>
        </td>
        <td class="!p-4 border-b border-gray-300">
            <p
                class="block antialiased font-sans text-sm font-light leading-normal text-inherit !font-normal text-gray-600 text-right">
                test
            </p>
        </td>

        <td class="!p-4 border-b border-gray-300">
            <div class="flex justify-end gap-4">
                <button
                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                    type="button" data-ripple-dark="true">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="h-5 w-5 text-gray-900">
                            <path d="M11.625 16.5a1.875 1.875 0 100-3.75 1.875 1.875 0 000 3.75z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zm6 16.5c.66 0 1.277-.19 1.797-.518l1.048 1.048a.75.75 0 001.06-1.06l-1.047-1.048A3.375 3.375 0 1011.625 18z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z">
                            </path>
                        </svg></span></button><button
                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                    type="button" data-ripple-dark="true">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="h-5 w-5 text-gray-900">
                            <path fill-rule="evenodd"
                                d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </button>
            </div>
        </td>
        </tr>

        </tbody>
        </table>
        </div>
        </div>
    </section>

</x-dashbord>