<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postcodes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApX2cFVvaOFYGHC6VrhIjrz8FHYkEu3jw"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#1c64f2\]\/10{background-color:rgb(28 100 242 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#1c64f2\]{stroke:#1c64f2}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#1c64f2\] *::selection{--tw-bg-opacity:1;background-color:rgb(28 100 242 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#1c64f2\]::selection{--tw-bg-opacity:1;background-color:rgb(28 100 242 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#1c64f2\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(28 100 242 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#1c64f2\]{--tw-text-opacity:1;color:rgb(28 100 242 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#1c64f2\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(28 100 242 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="{{ asset('images/background.svg') }}" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#1c64f2] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="items-center pt-16 pb-5">
                        <div class="flex lg:justify-center lg:col-start-2 text-center">
                            <h1 class="text-6xl w-full">
                                <img src="{{ asset('/images/postcode.png') }}" style="height: 55px; display: inline-block; margin-top: -15px; margin-right: 10px;">
                                Find My Geographical Information
                            </h1>
                        </div>
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-visible rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] md:row-span-3">
                                <div class="relative flex items-center gap-6">

                                    <div class="flex items-start gap-6 flex-col">
                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">
                                                <svg class="size-5 sm:size-6 inline-block mr-1" style="margin-top: -6px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <g fill="#1c64f2">
                                                        <path d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"></path>
                                                    </g>
                                                </svg> Find my address using my postcode
                                            </h2>
                                            <p class="mt-4 text-sm/relaxed sm:w-32">
                                                Please enter a postcode below then click on the search button. Your results will then appear and the location specified will display in the map area below.
                                            </p>
                                        </div>

                                        <div class="inline-flex items-center justify-center w-full">
                                            <hr class="w-full h-px my-1 bg-gray-200 border-0 dark:bg-gray-700">
                                        </div>

                                        <div class="flex items-start gap-6 flex-col ">
                                            <div class="grid lg:grid-cols-2 md:grid-cols-2 gap-6">
                                                <div class="justify-center">
                                                    <label for="postcodeSearch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-semibold">Postcode</label>
                                                    <div class="flex" style="height: 40px;">
                                                        <input id="postcodeSearch" type="text" class="uppercase py-2.5 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <button id="searchPostcodeBtn" type="button" class="px-3 border-gray-200 rounded-r-lg shadow-md flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold transition duration-300 rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <path d="m21 21-4.3-4.3"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div id="errorMessage" class="mt-1" style="display: none;">
                                                        <small class="text-red-600">Invalid Postcode. Please try again</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="map-canvas" class="block w-full border-gray-200 shadow-sm rounded-lg bg-gray-50" width="100%" height="400" style="border: 1px solid rgb(229 231 235); width: 100%; height: 400px;">
                                        </div>

                                        <div class="inline-flex items-center justify-center w-full mt-3">
                                            <hr class="w-full h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                                            <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">My Own Geo Project</span>
                                        </div>

                                        <a href="http://markusbotha.com/">
                                            <img src="{{ asset('images/smp-demo.png') }}" class="block w-full border-gray-200 shadow-sm rounded-lg bg-gray-50 border border-gray-200">
                                        </a>
                                        <div class="w-full text-center">
                                            Link to  <a href="http://markusbotha.com/" class="text-blue-600 hover:text-blue-700 transition duration-300">markusbotha.com</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]">
                                <div>

                                    <h2 class="text-xl font-semibold text-black dark:text-white pb-2">
                                        <svg class="size-5 sm:size-6 inline-block mr-1" style="margin-top: -6px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <g fill="#1c64f2">
                                                <path d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"></path>
                                            </g>
                                        </svg> Geographic Details
                                    </h2>

                                    <div class="grid gap-3 md:grid-cols-4 w-full">
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Postcode:</label>
                                            <input type="text" id="postcode" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Country:</label>
                                            <input id="country" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Latitude:</label>
                                            <input id="latitude" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Longitude:</label>
                                            <input id="longitude" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]">
                                <div>
                                    <h2 class="text-xl font-semibold text-black dark:text-white pb-2">
                                        <svg class="size-5 sm:size-6 inline-block mr-1" style="margin-top: -6px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <g fill="#1c64f2">
                                                <path d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"></path>
                                            </g>
                                        </svg> Regional Details
                                    </h2>

                                    <div class="grid gap-3 md:grid-cols-3 w-full">
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Region:</label>
                                            <input id="region" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">European Electoral Region:</label>
                                            <input id="european_electoral_region" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Primary Care Trust:</label>
                                            <input id="primary_care_trust" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Parliament Constituency:</label>
                                            <input type="text" id="parliamentary_constituency" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Parish:</label>
                                            <input type="text" id="parish" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Date of Introduction:</label>
                                            <input type="text" id="date_of_introduction" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin District:</label>
                                            <input type="text" id="admin_district" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin County:</label>
                                            <input id="admin_county" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin Ward:</label>
                                            <input type="text" id="admin_ward" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">NHS HA:</label>
                                            <input  id="nhs_ha" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">MSOA:</label>
                                            <input type="text" id="msoa" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">NUTS:</label>
                                            <input type="text" id="nuts" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">PFA:</label>
                                            <input  id="pfa" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">LSOA:</label>
                                            <input id="lsoa" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">CED:</label>
                                            <input id="ced" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">CCG:</label>
                                            <input id="ccg" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Eastings:</label>
                                            <input id="eastings" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Northings:</label>
                                            <input id="northings" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]">
                                <div>
                                    <h2 class="text-xl font-semibold text-black dark:text-white pb-2">
                                        <svg class="size-5 sm:size-6 inline-block mr-1" style="margin-top: -6px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <g fill="#1c64f2">
                                                <path d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"></path>
                                            </g>
                                        </svg> Codes
                                    </h2>

                                    <div class="grid gap-3 md:grid-cols-3 w-full">
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin District:</label>
                                            <input id="admin_district_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin County:</label>
                                            <input id="admin_county_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Admin Ward:</label>
                                            <input id="admin_ward_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Parish:</label>
                                            <input id="parish_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Parliament Constituency:</label>
                                            <input id="parliamentary_constituency_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">Parliament Const. {{ date('Y') }}:</label>
                                            <input id="parliamentary_constituency_{{ date('Y') }}_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                    </div>
                                    <div class="grid gap-3 md:grid-cols-4 w-full mt-4">
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">CCG:</label>
                                            <input id="ccg_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">CCG ID:</label>
                                            <input id="ccg_id_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">CED:</label>
                                            <input id="ced_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">NUTS:</label>
                                            <input id="nuts_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">LSOA:</label>
                                            <input id="lsoa_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">MSOA:</label>
                                            <input id="msoa_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">LAU2:</label>
                                            <input id="lau2_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                        <div>
                                            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">PFA:</label>
                                            <input id="pfa_code" type="text" value="" class="block w-full p-2 text-gray-900 border border-gray-200 rounded-lg bg-gray-50 text-xs" readonly disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-gray-400">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function valid_postcode(postcode) {
        postcode = postcode.replace(/\s/g, "");
        var regex = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;
        return regex.test(postcode);
    }

    async function initMap(lat, lng) {
        lat = parseFloat(lat);
        lng = parseFloat(lng);

        // Request needed libraries.
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
        const map = new Map(document.getElementById("map-canvas"), {
            center: { lat: lat, lng: lng },
            zoom: 14,
            mapId: "4504f8b37365c3d0",
        });
        const marker = new AdvancedMarkerElement({
            map,
            position: { lat: lat, lng: lng },
        });
    }

    $( "#postcodeSearch" ).on( "input", function() {
        $( "#errorMessage" ).css('display','none');
    });

    $( "#searchPostcodeBtn" ).on( "click", function() {
        let postcode = $("#postcodeSearch").val();

        if(!valid_postcode(postcode)) {
            $( "#errorMessage" ).css('display','block');
        } else {
            $.ajax({
                method: "GET",
                dataType: "json",
                url: "{{ route('api.postcode.get') }}",
                data: {
                    postcode: postcode
                }
            })
            .done(function( json ) {
                if(json.status !== 200) {
                    // Does not work
                } else {
                    $.each(json.result, function(key, value) {
                        if(value) {
                            if(key !== "codes") {
                                $("#" + key).val(value);
                            } else {
                                $.each(value, function(code_key, code_value) {
                                    $("#" + code_key + "_code").val(code_value);
                                });
                            }
                        } else {
                            $("#" + key).val('Not Specified');
                        }
                    });

                    initMap(json.result.latitude, json.result.longitude);
                }
            });
        }

    });
</script>
