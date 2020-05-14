@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-6 flex">
            <img src="images/parasite.jpg" alt="parasite" class="w-96" >
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite 2019</h2>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="fill-current text-orange-500 w-4"> X </span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span >Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="">Action, Thriler, Drama</span> 
                    </div>
                    <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt culpa dolore nemo. Rerum nemo sit officiis exercitationem accusantium veritatis modi quis magnam? Veritatis, minus maiores quidem adipisci aliquid earum repellat?
                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Bon Joon-ho</div>   
                                <div class="text-sm text-gray-400">Screanplay, Director, Story</div>
                            </div>
                            <div class="ml-8">
                                <div>Han Jin-Won</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <?xml version="1.0" standalone="no"?>
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                            "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="40" height="30" viewBox="0 0 1200.000000 630.000000"
                            preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,630.000000) scale(0.100000,-0.100000)"
                            fill="#000000" stroke="none"><path d="M5740 6189 c-985 -84 -1865 -642 -2375 -1504 -266 -450 -415 -1001-415 -1535 0-1235 748 -2350 1891 -2820 742 -305 1576 -305 2318 0 681 280
                            1238 797 1571 1460 207 412 320 892 320 1360 0 1153 -656 2213 -1690 2730
                            -491 245 -1072 356 -1620 309z m645 -528 c748 -120 1389 -549 1785 -1196 183
                            -298 282 -575 347 -970 28 -171 25 -533 -5 -724 -121 -755 -548 -1395 -1197
                            -1792 -277 -169 -568 -277 -906 -336 -140 -25 -177 -27 -409 -27 -232 0 -269
                            2 -409 27 -338 59 -629 167 -906 336 -649 397 -1076 1037 -1197 1792 -33 207
                            -33 551 0 758 108 673 456 1251 997 1655 377 282 783 440 1271 496 132 15 481
                            4 629 -19z"/><path d="M5580 4198 c-87 -45 -81 37 -78 -1066 l3 -973 42 -40 c41 -38 61 -44
                            123 -39 41 3 69 22 404 265 176 129 462 337 635 462 173 126 324 241 335 257
                            29 38 29 124 0 163 -17 23 -436 334 -1169 865 -191 138 -214 147 -295 106z"/></g></svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
            </div>            
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-4xl font-semibold">Reparto</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            
            
            
        </div>
    </div>
    <div class=" movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <h2 class="text-4xl font-semibold">Imagenes</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
            <div class="mt-8">
                <a href="#">
                    <img src="images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>                
            </div> 
                         
        </div>
    </div>
@endsection