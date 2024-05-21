<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="box-color">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card box-color hover:shadow-lg transition duration-300 my-4">
                        <div class="main-content">
                            <div class="mr-4">
                                <div class="card-image">
                                    <div style="width: 100%; height: 100%; overflow: hidden;">
                                    <img src="{{ asset($movie->photo) }}" alt="{{ $movie->name }}" class="card-image-content rounded-t-lg object-cover">
                                    </div>
                                </div>
                            </div>
                            <div class="test-content">
                                <p class="font-semibold text-lg pt-4 pl-4">{{ $movie->name }}</p>
                                <hr class="my-4">
                                <div class="mb-4">
                                    <p class="font-semibold text-lg ">Рік виходу: {{ $movie->year }}</p>
                                    <p class="font-semibold text-lg">Країна: {{ $movie->country }}</p>
                                    <p class="font-semibold text-lg">Жанр: {{ $movie->genre }}</p>
                                    <p class="font-semibold text-lg">Кількість сезонів: {{ $movie->seasons }}</p>
                                </div>
                                <hr class="my-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-lg">Моя загальна оцінка: {{ $movie->rating }}/10</h3>
                                </div>
                                <hr class="my-4">
                                <div class="mb-4">
                                    <p class="font-semibold text-lg">Моя рецензія:</p>
                                    <p class=" text-lg">{{ $movie->review }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end p-5">
                        <button onclick="location.href='{{ route('movie.edit', ['movie' => $movie->id]) }}'" type="button" class="button-update">Редагувати</button>                            
                        <form action="{{ route('movie.destroy', ['movie' => $movie->id]) }}" method="POST" onsubmit="return confirm('Ви впевнені, що хочете видалити цей фільм?')">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="button-delete">Видалити</button>
                           
                        </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .main-content{
        display: flex;
        justify-content: space-between;   
    }

    .test-content{
        margin: 10px;
        width: 55%;
    }

    hr {
        border-width: 1px;
    }

    .card-image{
        margin-left: auto;
    }

    .bg-color{
        background-color: #3E3D3D;
    }
    .box-color{
        background-color: #2B2A2A;
        border-radius: 20px;
    }

    .card-image img {
        width: 500px;
        height: 600px;
        padding: 10px ;
        object-fit: cover;
        border-radius: 20px;
    }
    .button-update{
        background-color: #D9D9D9;
        color: #000000;
        font-weight: bold;
        padding: 5px 10px;
        margin-bottom: 30px;
        margin-right: 10px;
        border-radius: 10px;
    }
    .button-update:hover {
  background-color: #a9a7a7;
  transition: 0.5s;
}
    .button-delete{
        background-color: red;
        font-weight: bold;
        padding: 5px 10px;
        margin-bottom: 30px;
        margin-right: 10px;
        border-radius: 10px;

    }
    .button-delete:hover {
  background-color: #c92424;
  transition: 0.5s;
}
</style>
