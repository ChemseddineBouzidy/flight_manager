<div x-data="setup()" x-init="$refs.loading.classList.add('hidden')" :class="{ 'dark': isDark}"
    @resize.window="watchScreen()">
    <div class="flex h-screen  antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->


        <!-- Sidebar first column -->
        <!-- Backdrop -->
        <div x-show="isSidebarOpen" {{-- @click="isSidebarOpen = false" --}}
            class="fixed inset-0 z-10 bg-light-800 md:hidden" style="opacity: 0.5" aria-hidden="true"></div>

        <aside x-show="isSidebarOpen" x-transition:enter="transition-all transform duration-300 ease-in-out"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition-all transform duration-300 ease-in-out"
            x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0"
            x-ref="sidebar" @keydown.escape="window.innerWidth <= 768 ? isSidebarOpen = false : ''" tabindex="-1"
            class="fixed h-full inset-y-0 z-10 flex flex-shrink-0 bg-light border-r md:static dark:border-indigo-800 dark:bg-darker focus:outline-none">
            <!-- Mini column -->
            <nav class="flex flex-col flex-shrink-0 h-full px-2 py-4 border-r dark:border-indigo-800">
                <!-- Brand -->
                <div class="flex-shrink-0">
                    <a href="{{ route('Flight.index') }}"
                        class="inline-block text-xl font-bold tracking-wider text-indigo-700 uppercase dark:text-light w-32">
                        <img src="{{ asset('logo.png') }}" alt="" srcset="">
                    </a>
                </div>
                <div class="flex flex-col items-center justify-center flex-1 space-y-4">
                    <!-- Home link -->
                    <!-- Active classes "bg-indigo-600 text-white" -->
                    <!-- inActive classes "bg-indigo-50 text-indigo-400" -->
                    <a href="{{route('Flight.create')}}"
                    class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">

                        <span class="sr-only">Home</span>
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>

                  
                    <a href="{{ route('Flight.list') }}"
                        class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                        <span class="sr-only">list</span>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M8 6.00067L21 6.00139M8 12.0007L21 12.0015M8 18.0007L21 18.0015M3.5 6H3.51M3.5 12H3.51M3.5 18H3.51M4 6C4 6.27614 3.77614 6.5 3.5 6.5C3.22386 6.5 3 6.27614 3 6C3 5.72386 3.22386 5.5 3.5 5.5C3.77614 5.5 4 5.72386 4 6ZM4 12C4 12.2761 3.77614 12.5 3.5 12.5C3.22386 12.5 3 12.2761 3 12C3 11.7239 3.22386 11.5 3.5 11.5C3.77614 11.5 4 11.7239 4 12ZM4 18C4 18.2761 3.77614 18.5 3.5 18.5C3.22386 18.5 3 18.2761 3 18C3 17.7239 3.22386 17.5 3.5 17.5C3.77614 17.5 4 17.7239 4 18Z"
                                    stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>

                    <a href="{{ route('Pilot.create') }}"
                        class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                        <span class="sr-only">Users</span>
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                    <a href="{{ route('Pilot.index') }}"
                    class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                    <span class="sr-only">Users</span>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M8 6.00067L21 6.00139M8 12.0007L21 12.0015M8 18.0007L21 18.0015M3.5 6H3.51M3.5 12H3.51M3.5 18H3.51M4 6C4 6.27614 3.77614 6.5 3.5 6.5C3.22386 6.5 3 6.27614 3 6C3 5.72386 3.22386 5.5 3.5 5.5C3.77614 5.5 4 5.72386 4 6ZM4 12C4 12.2761 3.77614 12.5 3.5 12.5C3.22386 12.5 3 12.2761 3 12C3 11.7239 3.22386 11.5 3.5 11.5C3.77614 11.5 4 11.7239 4 12ZM4 18C4 18.2761 3.77614 18.5 3.5 18.5C3.22386 18.5 3 18.2761 3 18C3 17.7239 3.22386 17.5 3.5 17.5C3.77614 17.5 4 17.7239 4 18Z"
                            stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </g>
                </svg>
                </a>
                </div>
                <!-- Sidebar footer -->
                <!-- prevent default just to prevent form submission in this demo -->

                <!-- Logout button -->
                <a href="{{ route('logout') }}"
                    class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                    <span class="sr-only">Logout</span>
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </a>

            </nav>
        </aside>



        <!-- Search panel -->
        <div class="w-2/4 w-full ">



            <script
                src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

            {{--
            <script>
                const setup = () => {
                    const getTheme = () => {
                        if (window.localStorage.getItem('dark')) {
                            return JSON.parse(window.localStorage.getItem('dark'))
                        }
                        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                    }

                    const setTheme = (value) => {
                        window.localStorage.setItem('dark', value)
                    }

                    return {
                        loading: true,
                        isDark: getTheme(),
                        toggleTheme() {
                            this.isDark = !this.isDark
                            setTheme(this.isDark)
                        },
                        setLightTheme() {
                            this.isDark = false
                            setTheme(this.isDark)
                        },
                        setDarkTheme() {
                            this.isDark = true
                            setTheme(this.isDark)
                        },
                        watchScreen() {
                            if (window.innerWidth <= 768) {
                                this.isSidebarOpen = false
                                this.isUserPanelOpen = false
                            } else if (window.innerWidth >= 768 && window.innerWidth < 1280) {
                                this.isSidebarOpen = true
                                this.isUserPanelOpen = false
                            } else if (window.innerWidth >= 1280) {
                                this.isSidebarOpen = true
                                this.isUserPanelOpen = true
                            }
                        },
                        isSidebarOpen: window.innerWidth >= 768 ? true : false,
                        toggleSidbarMenu() {
                            this.isSidebarOpen = !this.isSidebarOpen
                        },
                        isUserPanelOpen: window.innerWidth >= 1280 ? true : false,
                        openUserPanel() {
                            this.isUserPanelOpen = true
                            this.$nextTick(() => {
                                this.$refs.userPanel.focus()
                            })
                        },
                        isSettingsPanelOpen: false,
                        openSettingsPanel() {
                            this.isSettingsPanelOpen = true
                            this.$nextTick(() => {
                                this.$refs.settingsPanel.focus()
                            })
                        },
                        isNotificationsPanelOpen: false,
                        openNotificationsPanel() {
                            this.isNotificationsPanelOpen = true
                            this.$nextTick(() => {
                                this.$refs.notificationsPanel.focus()
                            })
                        },
                        isSearchPanelOpen: false,
                        openSearchPanel() {
                            this.isSearchPanelOpen = true
                            this.$nextTick(() => {
                                this.$refs.searchInput.focus()
                            })
                        },
                    }
                }
            </script> --}}