<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <button onclick="location.href='{{ route('movie.create') }}'" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    +
        </button>
        <button onclick="toggleDropDown()" id="dropDownBtn">
                <svg width="63" height="22" viewBox="0 0 63 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M55.5 15L49.8708 5.25L61.1292 5.25L55.5 15Z" fill="#3E3D3D" stroke="white" stroke-width="2"/>
                    <path d="M55.5 13L49.8708 3.25L61.1292 3.25L55.5 13Z" fill="#3E3D3D"/>
                    <rect x="0.5" y="0.5" width="41" height="3" rx="1.5" fill="#3E3D3D" stroke="white"/>
                    <path d="M0.5 8C0.5 7.17157 1.17157 6.5 2 6.5H40C40.8284 6.5 41.5 7.17157 41.5 8C41.5 8.82843 40.8284 9.5 40 9.5H2C1.17157 9.5 0.5 8.82843 0.5 8Z" fill="#3E3D3D" stroke="white"/>
                    <path d="M0.5 20C0.5 19.1716 1.17157 18.5 2 18.5H40C40.8284 18.5 41.5 19.1716 41.5 20C41.5 20.8284 40.8284 21.5 40 21.5H2C1.17157 21.5 0.5 20.8284 0.5 20Z" fill="#3E3D3D" stroke="white"/>
                    <rect x="0.5" y="12.5" width="41" height="3" rx="1.5" fill="#3E3D3D" stroke="white"/>
                </svg>
            </button>
        </h2>
        <div id="dropdown" class="hidden">
            <div class="dropdown-content">
            <p class="text-white">Вигляд</p>
            <button><svg width="43" height="22" viewBox="0 0 43 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1.17896" y="0.5" width="41" height="3" rx="1.5" fill="#2B2A2A" stroke="white"/>
                <path d="M1.17896 8C1.17896 7.17157 1.85053 6.5 2.67896 6.5H40.679C41.5074 6.5 42.179 7.17157 42.179 8C42.179 8.82843 41.5074 9.5 40.679 9.5H2.67895C1.85053 9.5 1.17896 8.82843 1.17896 8Z" fill="#2B2A2A" stroke="white"/>
                <path d="M1.17896 20C1.17896 19.1716 1.85053 18.5 2.67896 18.5H40.679C41.5074 18.5 42.179 19.1716 42.179 20C42.179 20.8284 41.5074 21.5 40.679 21.5H2.67895C1.85053 21.5 1.17896 20.8284 1.17896 20Z" fill="#2B2A2A" stroke="white"/>
                <rect x="1.17896" y="12.5" width="41" height="3" rx="1.5" fill="#2B2A2A" stroke="white"/>
                </svg>
            </button>
            <button><svg width="43" height="23" viewBox="0 0 43 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1.17896" y="0.5" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="12.092" y="0.5" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="23.0051" y="0.5" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="33.918" y="0.5" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="1.17896" y="12.6538" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="12.092" y="12.6538" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="23.0051" y="12.6538" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                <rect x="33.918" y="12.6538" width="7.91304" height="9.15385" rx="1.5" fill="#555555" stroke="white"/>
                </svg>
            </button>
        </div>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
  
   .card-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: 1fr;
        gap: 16px;
}

    .card {
        width: 100%;
        max-width: 250px;
        max-height: 350px;
        overflow: hidden;
        border-radius: 15px;
        position: relative;
    }

    .card-image {
        width: 100%;
        height: 223px;
        overflow: hidden;
        border-radius: 15px 15px 0 0;
    }
    .card-image-content:hover {
    transform: scale(1.1);
}
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
    .dropdown-content {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .dropdown-content button {
        margin-bottom: 100px;
    }
</style>

<script>
    function toggleDropDown() {
        var dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("hidden");
    }
</script>