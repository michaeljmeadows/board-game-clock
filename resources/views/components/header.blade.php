<div
    class="flex justify-between items-center px-4 md:px-8 py-4 border-b
        border-gray-700
        dark:border-gray-300"                
    >

    <div class="flex justify-center items-center gap-4">
        <x-button
            @click="reset()"
            class="
                hover:text-gray-600 active:text-gray-800
                dark:hover:text-gray-200 dark:active:text-gray-400"
            aria-label="Reset"
            >
            <x-fas-arrow-left
                class="inline-block h-6 w-6"
                />
        </x-button>
        <x-button
            @click="newGame()"
            class="
                hover:text-gray-600 active:text-gray-800
                dark:hover:text-gray-200 dark:active:text-gray-400"
            aria-label="New Game"
            >
            <x-fas-hourglass-start
                class="inline-block h-6 w-6"
                />
        </x-button>
        <x-button
            x-show="isGameInProgress"
            @click="endGame()"
            class="
                hover:text-gray-600 active:text-gray-800
                dark:hover:text-gray-200 dark:active:text-gray-400"
            aria-label="End Game"
            >
            <x-fas-flag-checkered
                class="inline-block h-6 w-6"
                />
        </x-button>
    </div>

    <h1 class="flex justify-center items-center gap-2 font-semibold text-xl md:text-2xl
        ">
        <span class="hidden md:inline-block">{{ __('Board Game Clock') }}</span>
        <span class="inline-block md:hidden">{{ __('BGC') }}</span>
        <a 
            href="https://github.com/michaeljmeadows/board-game-clock"
            class="transition ease-in-out duration-200
                hover:text-gray-600 active:text-gray-800
                dark:hover:text-gray-200 dark:active:text-gray-400"
            aria-label="Github"
            >
            <x-fab-github class="inline-block -mt-1 h-6 w-6" />
        </a>
    </h1>

    <div>
        <x-button
            type="button"
            @click="dark = false"
            class="
                text-yellow-500 hover:text-yellow-400 active:text-yellow-600
                dark:text-yellow-300 dark:hover:text-yellow-200 dark:active:text-yellow-400"
            aria-label="Light mode"
            >
            <x-fas-sun class="hidden md:inline-block h-6 w-6" />
        </x-button>
        <x-button 
            type="button"
            @click="dark = !dark"
            class="md:px-1 
                hover:text-gray-600 active:text-gray-800
                dark:hover:text-gray-200 dark:active:text-gray-400"
            aria-label="Toggle dark mode"
            >
            <x-fas-toggle-off x-show="!dark" class="inline-block h-6 w-6" />
            <x-fas-toggle-on x-cloak x-show="dark" class="inline-block h-6 w-6"/>
        </x-button>
        <x-button
            type="button"
            @click="dark = true"
            class="
                text-sky-700 hover:text-sky-600 active:text-sky-800
                dark:text-sky-300 dark:hover:text-sky-200 dark:active:text-sky-400"
            aria-label="Dark mode"
            >
            <x-fas-moon class="hidden md:inline-block h-6 w-6"/>
        </x-button>
    </div>
    
</div>