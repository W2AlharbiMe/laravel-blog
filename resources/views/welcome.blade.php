<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <title>{{ env('APP_NAME') }} | Home page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100 mb-12">
    @include('layouts.navigation')
    <div class="max-w-screen-xl mx-auto mt-16">
        {{-- main section --}}
        <div class="grid grid-cols-12 gap-4">
            <a href="#!" class="relative col-span-6 w-full transform hover:-translate-y-4 transition duration-200 hover:shadow-lg" style="height: 440px;">
                <div class="absolute left-0 bottom-0 w-full h-full z-10 rounded"
                    style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>

                <div class="absolute inset-0 w-full h-full z-0">
                    <img src="https://images.unsplash.com/photo-1617278385973-2ef7661e1b36?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                        class="w-full h-full rounded shadow object-cover" />
                </div>

                <div class="p-4 absolute inset-0 w-full h-full z-10 flex flex-col items-start justify-end">
                    <span class="px-4 py-1 bg-blue-600 text-gray-200 mb-2 transform -skew-x-12">Nutrition</span>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.
                    </h2>
                    <div class="flex justify-between items-center w-full mt-3">
                        <div class="flex">
                            <img src="https://randomuser.me/api/portraits/men/97.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" />
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                                <p class="font-semibold text-gray-400 text-xs"> 15k views </p>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-300 text-sm"> 14 minutes ago</p>
                        </div>
                    </div>
                </div>
            </a>



            <a href="#!" class="relative col-span-6 w-full transform hover:-translate-y-4 transition duration-200 hover:shadow-lg" style="height: 440px;">
                <div class="absolute left-0 bottom-0 w-full h-full z-10 rounded"
                    style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>

                <div class="absolute inset-0 w-full h-full z-0">
                    <img src="https://images.unsplash.com/photo-1594389423450-e7d4b309db9f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=564&q=80"
                        class="w-full h-full rounded shadow object-cover" />
                </div>

                <div class="p-4 absolute inset-0 w-full h-full z-10 flex flex-col items-start justify-end">
                    <span
                        class="px-4 py-1 bg-yellow-600 text-gray-200 inline-flex items-center justify-center mb-2 transform -skew-x-12">Science</span>
                    <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam sit ad impedit placeat?
                    </h2>
                    <div class="flex justify-between items-center w-full ">
                        <div class="flex">
                            <img src="https://randomuser.me/api/portraits/men/82.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" />
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> Jone Ipsum </p>
                                <p class="font-semibold text-gray-400 text-xs"> 20k views </p>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-300 text-sm"> 5 hours ago</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-6 gap-4 mt-6">

            <div class="w-full col-span-4">
                @for ($i = 2; $i >= 0; $i--)

                {{-- single post --}}
                <a href="#!" class="block w-full bg-white shadow rounded mb-6 hover:bg-indigo-50 transition duration-200">
                    <div class="grid grid-flow-col gap-4">
                        {{-- image --}}
                        <div>
                            <img src="https://images.unsplash.com/photo-1617225446279-1833ed3dd3e6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                alt="" class="w-64 rounded-l object-cover" style="height: 204px;" />
                        </div>

                        {{-- info --}}
                        <div class="py-4">
                            <h1 class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                Aliquam venenatis nisl id purus rhoncus, in efficitur sem hendrerit.
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima odio deserunt
                                quibusdam iure voluptates aperiam. Fugit fugiat distinctio iste?...
                            </p>

                            {{-- by & when --}}
                            <div class="flex justify-between items-center w-full mt-3 pr-4">
                                <div class="flex">
                                    <img src="https://randomuser.me/api/portraits/men/86.jpg"
                                        class="h-10 w-10 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-semibold text-gray-500 text-sm"> eduard franz </p>
                                        <p class="font-semibold text-gray-400 text-xs"> {{ ($i+1)*24 }}k views </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm"> {{ $i+1 }} days ago</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </a>
                @endfor


                <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center"
                    aria-label="Pagination">
                    <a class="flex w-10 h-10 mr-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" title="Previous Page">
                        <span class="sr-only">Previous Page</span>
                        <svg class="block w-4 h-4 fill-current" viewBox="0 0 256 512" aria-hidden="true"
                            role="presentation">
                            <path
                                d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z">
                            </path>
                        </svg>
                    </a>
                    <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-indigo-500 text-white pointer-events-none"
                        href="#" title="Page 1">
                        1
                    </a>
                    <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" title="Page 2">
                        2
                    </a>
                    <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" aria-current="page" title="Page 3">
                        3
                    </a>
                    <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" title="Page 4">
                        4
                    </a>
                    <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" title="Page 5">
                        5
                    </a>
                    <a class="flex w-10 h-10 ml-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300"
                        href="#" title="Next Page">
                        <span class="sr-only">Next Page</span>
                        <svg class="block w-4 h-4 fill-current" viewBox="0 0 256 512" aria-hidden="true"
                            role="presentation">
                            <path
                                d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z">
                            </path>
                        </svg>
                    </a>
                </nav>
            </div>


            <div class="col-span-2 w-full">
                <div class="w-full bg-white shadow p-6 rounded">
                    <div class="mb-4">
                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> Popular Tags </h5>
                        <hr />
                    </div>
                    <ul>
                        <li class="block">
                            <a href="#!" class="block text-base text-gray-700 transition duration-200 hover:text-indigo-400">tag 1</a>
                        </li>
                        <li class="block">
                            <a href="#!" class="block text-base text-gray-700 transition duration-200 hover:text-indigo-400">tag 2</a>
                        </li>
                        <li class="block">
                            <a href="#!" class="block text-base text-gray-700 transition duration-200 hover:text-indigo-400">tag 3</a>
                        </li>
                        <li class="block">
                            <a href="#!" class="block text-base text-gray-700 transition duration-200 hover:text-indigo-400">tag 4</a>
                        </li>
                        <li class="block">
                            <a href="#!" class="block text-base text-gray-700 transition duration-200 hover:text-indigo-400">tag 5</a>
                        </li>
                    </ul>
                </div>

                <div class="w-full bg-white shadow p-6 rounded mt-6">
                    <div class="mb-4">
                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2">Subscribe</h5>
                        <hr />
                    </div>

                    <p class="text-gray-600">
                        Subscribe to our newsletter. We deliver the best articles to your inbox.
                    </p>

                    <x-input id="subs" class="block mt-1 w-full" type="text" name="subs" :value="old('subs')"
                        placeholder="your email address ..." />

                    <button class="mt-2 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-200 rounded w-full capitalize tracking-wide transition duration-200">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
