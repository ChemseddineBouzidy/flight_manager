

<div
    x-data="setup()"
    x-init="$refs.loading.classList.add('hidden')"
    :class="{ 'dark': isDark}"
    @resize.window="watchScreen()"
>
    <div class="flex h-screen  antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
    <!-- Loading screen -->


    <!-- Sidebar first column -->
    <!-- Backdrop -->
    <div
        x-show="isSidebarOpen"
        {{-- @click="isSidebarOpen = false" --}}
        class="fixed inset-0 z-10 bg-light-800 md:hidden"
        style="opacity: 0.5"
        aria-hidden="true"
    ></div>

    <aside
        x-show="isSidebarOpen"
        x-transition:enter="transition-all transform duration-300 ease-in-out"
        x-transition:enter-start="-translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition-all transform duration-300 ease-in-out"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-full opacity-0"
        x-ref="sidebar"
        @keydown.escape="window.innerWidth <= 768 ? isSidebarOpen = false : ''"
        tabindex="-1"
        class="fixed h-full inset-y-0 z-10 flex flex-shrink-0 bg-light border-r md:static dark:border-indigo-800 dark:bg-darker focus:outline-none"
    >
        <!-- Mini column -->
        <nav class="flex flex-col flex-shrink-0 h-full px-2 py-4 border-r dark:border-indigo-800">
        <!-- Brand -->
        <div class="flex-shrink-0">
            <a
            href="{{ route('Flight.index') }}"
            class="inline-block text-xl font-bold tracking-wider text-indigo-700 uppercase dark:text-light w-32"
            >
            <img src="{{ asset('logo.png') }}" alt="" srcset="">
            </a>
        </div>
        <div class="flex flex-col items-center justify-center flex-1 space-y-4">
            <!-- Home link -->
            <!-- Active classes "bg-indigo-600 text-white" -->
            <!-- inActive classes "bg-indigo-50 text-indigo-400" -->
            <a
            href="{{route('Flight.create')}}"
            class="p-2 text-white transition-colors duration-200 bg-indigo-600 rounded-full hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800"
            >
            <span class="sr-only">Home</span>
            <svg
                class="w-7 h-7"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
            </svg>
            </a>
          
            <a
            href="{{route('Flight.create')}}"
            class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800"

            >
            <span class="sr-only">Home</span>
            <svg  class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.288"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      
            </a>
            {{-- {{route('Flight.edit',$flight->id)}} --}}
            <a href=""
            class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800"
            >
            <span class="sr-only">Users</span>
            <svg
                class="w-7 h-7"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
            </svg>
            </a>
        </div>
        <!-- Sidebar footer -->
        <!-- prevent default just to prevent form submission in this demo -->
  
            <!-- Logout button -->
            <a href="{{ route('logout') }}"
            class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800"
            >
            <span class="sr-only">Logout</span>
            <svg
                class="w-7 h-7"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
            </svg>
        </a>
        <a href="{{ route('Flight.list') }}"
        class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800"
        >
        <span class="sr-only">list</span>
        <svg
            class="w-7 h-7"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
            />
        </svg>
    </a>
        </nav>
    </aside>

    

    <!-- Search panel -->
  <div class="w-2/4 w-full ">
  


<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

{{-- <script>
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