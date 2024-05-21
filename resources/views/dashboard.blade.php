<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg">
          
            <div class="filter">
                <button onclick="location.href='{{ route('movie.create') }}'" class="button-add">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="7" x2="7" y2="14" stroke="white" stroke-width="2"/>
                        <line y1="7" x2="14" y2="7" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
                <button class="button-view" onclick="toggleMenu()">
                    <svg width="65" height="23" viewBox="0 0 65 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 5L57 13.5L52 5H50L57 17L64 5H62Z" fill="white" stroke="white"/>
                        <path d="M1 21V14C1 13.4477 1.44772 13 2 13H8C8.55228 13 9 13.4477 9 14V21C9 21.5523 8.55228 22 8 22H2C1.44772 22 1 21.5523 1 21Z" stroke="white"/>
                        <path d="M12 21V14C12 13.4477 12.4477 13 13 13H19C19.5523 13 20 13.4477 20 14V21C20 21.5523 19.5523 22 19 22H13C12.4477 22 12 21.5523 12 21Z" stroke="white"/>
                        <path d="M23 21V14C23 13.4477 23.4477 13 24 13H30C30.5523 13 31 13.4477 31 14V21C31 21.5523 30.5523 22 30 22H24C23.4477 22 23 21.5523 23 21Z" stroke="white"/>
                        <path d="M34 21V14C34 13.4477 34.4477 13 35 13H41C41.5523 13 42 13.4477 42 14V21C42 21.5523 41.5523 22 41 22H35C34.4477 22 34 21.5523 34 21Z" stroke="white"/>
                        <path d="M1 9V2C1 1.44772 1.44772 1 2 1H8C8.55228 1 9 1.44772 9 2V9C9 9.55229 8.55228 10 8 10H2C1.44772 10 1 9.55229 1 9Z" stroke="white"/>
                        <path d="M12 9V2C12 1.44772 12.4477 1 13 1H19C19.5523 1 20 1.44772 20 2V9C20 9.55229 19.5523 10 19 10H13C12.4477 10 12 9.55229 12 9Z" stroke="white"/>
                        <path d="M23 9V2C23 1.44772 23.4477 1 24 1H30C30.5523 1 31 1.44772 31 2V9C31 9.55229 30.5523 10 30 10H24C23.4477 10 23 9.55229 23 9Z" stroke="white"/>
                        <path d="M34 9V2C34 1.44772 34.4477 1 35 1H41C41.5523 1 42 1.44772 42 2V9C42 9.55229 41.5523 10 41 10H35C34.4477 10 34 9.55229 34 9Z" stroke="white"/>
                    </svg>
                </button>
            
                <div id="menu" class="menu floor">
                    <ul class="menu-ul">
                        <li>
                            <p class="text-white">Вигляд</p>
                        </li>
                        <li>
                            <button class="button-menu">
                                <svg width="43" height="23" viewBox="0 0 43 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.5 19H2.5C1.67157 19 1 19.6716 1 20.5C1 21.3284 1.67157 22 2.5 22H40.5C41.3284 22 42 21.3284 42 20.5C42 19.6716 41.3284 19 40.5 19Z" stroke="white"/>
                                <path d="M40.5 7H2.5C1.67157 7 1 7.67157 1 8.5C1 9.32843 1.67157 10 2.5 10H40.5C41.3284 10 42 9.32843 42 8.5C42 7.67157 41.3284 7 40.5 7Z" stroke="white"/>
                                <path d="M40.5 1H2.5C1.67157 1 1 1.67157 1 2.5C1 3.32843 1.67157 4 2.5 4H40.5C41.3284 4 42 3.32843 42 2.5C42 1.67157 41.3284 1 40.5 1Z" stroke="white"/>
                                <path d="M40.5 13H2.5C1.67157 13 1 13.6716 1 14.5C1 15.3284 1.67157 16 2.5 16H40.5C41.3284 16 42 15.3284 42 14.5C42 13.6716 41.3284 13 40.5 13Z" stroke="white"/>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="button-menu">
                                <svg width="43" height="23" viewBox="0 0 43 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 21V14C1 13.4477 1.44772 13 2 13H8C8.55228 13 9 13.4477 9 14V21C9 21.5523 8.55228 22 8 22H2C1.44772 22 1 21.5523 1 21Z" stroke="white"/>
                                <path d="M12 21V14C12 13.4477 12.4477 13 13 13H19C19.5523 13 20 13.4477 20 14V21C20 21.5523 19.5523 22 19 22H13C12.4477 22 12 21.5523 12 21Z" stroke="white"/>
                                <path d="M23 21V14C23 13.4477 23.4477 13 24 13H30C30.5523 13 31 13.4477 31 14V21C31 21.5523 30.5523 22 30 22H24C23.4477 22 23 21.5523 23 21Z" stroke="white"/>
                                <path d="M34 21V14C34 13.4477 34.4477 13 35 13H41C41.5523 13 42 13.4477 42 14V21C42 21.5523 41.5523 22 41 22H35C34.4477 22 34 21.5523 34 21Z" stroke="white"/>
                                <path d="M1 9V2C1 1.44772 1.44772 1 2 1H8C8.55228 1 9 1.44772 9 2V9C9 9.55229 8.55228 10 8 10H2C1.44772 10 1 9.55229 1 9Z" stroke="white"/>
                                <path d="M12 9V2C12 1.44772 12.4477 1 13 1H19C19.5523 1 20 1.44772 20 2V9C20 9.55229 19.5523 10 19 10H13C12.4477 10 12 9.55229 12 9Z" stroke="white"/>
                                <path d="M23 9V2C23 1.44772 23.4477 1 24 1H30C30.5523 1 31 1.44772 31 2V9C31 9.55229 30.5523 10 30 10H24C23.4477 10 23 9.55229 23 9Z" stroke="white"/>
                                <path d="M34 9V2C34 1.44772 34.4477 1 35 1H41C41.5523 1 42 1.44772 42 2V9C42 9.55229 41.5523 10 41 10H35C34.4477 10 34 9.55229 34 9Z" stroke="white"/>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
    
                <hr>
                <div id="cardContainer" class="flex flex-wrap justify-center">
                    @if ($movie->isEmpty())
                        <div class="p-6 text-center text-gray-900 dark:text-gray-100 mb-4 sm:mb-0">
                            {{ __("Тут поки що нічого не має") }}
                        </div>
                    @else
                        <div class="card-grid">
                            @foreach ($movie as $movies)
                                <div class="card bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-lg shadow-md hover:shadow-lg transition duration-300 my-4 mt-4 mb-4">
                                    <div class="card-image">
                                        <div style="width: 100%; height: 100%; overflow: hidden;">
                                            <p class="left-corner">{{ $movies->status }}</p>
                                            <p class="right-corner">{{ $movies->rating }}/10</p>
                                            <img src="{{ asset($movies->photo) }}" alt="{{ $movies->name }}" class="card-image-content rounded-t-lg object-cover">

                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="name-genre">
                                            <h2 class="flex items-center">
                                                <span class="text-2xl font-bold text-white">{{ $movies->name }}</span>
                                                <span class="text-lg ml-2 text-gray-500">({{ $movies->type }})</span>
                                            </h2>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2">{{ $movies->genre }}</p>
                                        </div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-5 mb-5">{{ $movies->year }}</p>
                                    </div>
                                    <div class="add-more-button">
                                        <button onclick="location.href='{{ route('movie.show', ['movie' => $movies->id]) }}'">                                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="17.5" cy="17.5" r="17.5" fill="#555555"/>
                                                <circle cx="8.00003" cy="17" r="3" fill="#D9D9D9"/>
                                                <circle cx="17" cy="17" r="3" fill="#D9D9D9"/>
                                                <circle cx="26.0001" cy="17" r="3" fill="#D9D9D9"/>
                                            </svg>
                                        </button>
                                        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        
                        <div class="pagination flex justify-center mb-4">
                            {{ $movie->links() }}
                        </div>
            </div>
        </div>
        </div>
</x-app-layout>

<style>
  
    .filter {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px;
    }
    .button-add,.button-view {
        background-color: #3E3D3D;
        padding: 10px;
        color: #fff;
        border: 0;
        border-radius: 10px;
        vertical-align: middle;
    }
    .button-add:hover {
        background-color:#2B2A2A;
        transition: 0.5s;
    }
    .button-view:hover {
        background-color:#2B2A2A;
        transition: 0.5s;
    }
  
    .card-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: 1fr;
        gap: 50px;
    }

    .card {
        width: 100%;
        max-width: 250px;
        max-height: 350px;
        overflow: hidden;
        border-radius: 15px;
        position: relative;
        border: 2px solid;
        border-color: #2B2A2A;
        background-color: #2B2A2A;
    }

    .card:hover {
        border-color:#fff;
        transition: 0.1s;
    }

    .card-image {
        width: 100%;
        height: 223px;
        overflow: hidden;
        border-radius: 15px 15px 0 0;
    }
    /* .card-image-content:hover {
    transform: scale(1.1);
} */
    .card-image img {
        width: 100%;
        height: 100%;
        padding: 10px;
        object-fit: cover;
        border-radius: 20px;
    }

    .card-body {
        padding: 10px;
    }

    .add-more-button {
        position: absolute;
        bottom: -1px;
        right: 5px;
    }

    .left-corner, .right-corner {
        background-color: #D9D9D9;
        color: #000000;
        font-weight: bold;
        padding: 5px  ;
        border-radius: 10px;
        font-size: 12px;
        position: absolute;
        top: 10px;
        margin-top: 5px;
        
    }

    .left-corner {
        left: 20px;
    }

    .right-corner {
        right: 20px;
    }

    .button-view {
        position: relative;
        border: 0;
        z-index: 10;
    }

    .menu {
        position: absolute;
        top: 100%; 
        right: 0;
        z-index: 5; 
        background-color: #2B2A2A;
        align-items: center;
        border-radius: 10px;
        text-align: center;
        margin-top: 5px;
       
    }

    .floor {
        display: none;
    }

    .menu-ul { 
        list-style: none; 
        margin: 0;
        padding: 10px 10px;
    }

    .button-menu{
        background-color:#2B2A2A;
        border: 0;
        border-radius: 10px;
        padding: 10px;
    }
    .button-menu:hover {
        background-color:#3E3D3D;
        transition: 0.5s;
    }
    
    hr {
        border-width: 1px;
    }

</style>

<script>
    function toggleMenu() {
        var menu = document.getElementById("menu");
        menu.classList.toggle("floor");
    }
</script>