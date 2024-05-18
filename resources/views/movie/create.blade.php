<x-app-layout>
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center p-4 rounded-lg shadow-md">
        @csrf

        <!-- Поля форми -->
        <div class="flex flex-col mb-4">
            <label for="name" class="mb-2 text-white w-24">Назва</label>
            <input type="text" name="name" id="name" placeholder="Введіть назву" class="input rounded-md w-full" aria-label="Movie Name" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="type" class="mb-2 text-white w-24">Тип</label>
            <select name="type" id="type" class="input rounded-md w-full" aria-label="Movie Type">
                @foreach(['фільм', 'серіал', 'аніме', 'мультфільм'] as $type)
                <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="year" class="mb-2 text-white w-24">Рік</label>
            <input type="number" name="year" id="year" placeholder="Введіть рік" class="input rounded-md w-full" aria-label="Release Year" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="country" class="mb-2 text-white w-24">Країна</label>
            <input type="text" name="country" id="country" placeholder="Введіть країну" class="input rounded-md w-full" aria-label="Country" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="genre" class="mb-2 text-white w-24">Жанр</label>
            <input type="text" name="genre" id="genre" placeholder="Введіть жанр" class="input rounded-md w-full" aria-label="Genre" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="director" class="mb-2 text-white w-24">Режисер</label>
            <input type="text" name="director" id="director" placeholder="Введіть ім'я режисера" class="input rounded-md w-full" aria-label="Director" />
        </div>
        
        <div class="flex flex-col mb-4">
            <label for="status" class="mb-2 text-white w-24">Статус</label>
            <select name="status" id="status" class="input rounded-md w-full" aria-label="Movie status">
                @foreach(['Планую', 'Дивлюсь', 'Переглянуто'] as $status)
                <option value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="seasons" class="mb-2 text-white w-24">Кількість сезонів</label>
            <input type="number" name="seasons" id="seasons" placeholder="Введіть кількість сезонів" class="input rounded-md w-full" aria-label="Number of Seasons" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="rating" class="mb-2 text-white w-24">Рейтинг</label>
            <select name="rating" id="rating" class="input rounded-md w-full" aria-label="Rating">
                @for($i = 0; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="review" class="mb-2 text-white w-24">Рецензія</label>
            <textarea name="review" id="review" placeholder="Введіть свою рецензію" class="input rounded-md w-full h-32" aria-label="Review"></textarea>
        </div>

        <div class="flex flex-col mb-4">
            <label for="photo" class="mb-2 text-white w-24">Фото</label>
            <input type="file" name="photo" id="photo" class="input rounded-md w-full" aria-label="Photo" />
        </div>

        <button class="btn bg-blue text-white rounded-md p-2 w-full" type="submit">Додати</button>
    </form>
</x-app-layout>