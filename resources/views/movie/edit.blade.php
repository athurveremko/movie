<x-app-layout>
    <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center p-4 rounded-lg shadow-md">
        @csrf
        @method('PUT') <!-- Додали цей ввід, щоб вказати метод PUT -->

        <!-- Поля форми -->
        <div class="flex flex-col mb-4">
            <label for="name" class="mb-2 text-white w-24">Назва</label>
            <input type="text" name="name" id="name" value="{{ $movie->name }}" class="input rounded-md w-full" aria-label="Movie Name" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="type" class="mb-2 text-white w-24">Тип</label>
            <select name="type" id="type" class="input rounded-md w-full" aria-label="Movie Type">
                @foreach(['фільм', 'серіал', 'аніме', 'мультфільм'] as $type)
                <option value="{{ $type }}" {{ $movie->type == $type ? 'selected' : '' }}>{{ $type }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="year" class="mb-2 text-white w-24">Рік</label>
            <input type="number" name="year" id="year" value="{{ $movie->year }}" class="input rounded-md w-full" aria-label="Release Year" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="country" class="mb-2 text-white w-24">Країна</label>
            <input type="text" name="country" id="country" value="{{ $movie->country }}" class="input rounded-md w-full" aria-label="Country" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="genre" class="mb-2 text-white w-24">Жанр</label>
            <input type="text" name="genre" id="genre" value="{{ $movie->genre }}" class="input rounded-md w-full" aria-label="Genre" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="director" class="mb-2 text-white w-24">Режисер</label>
            <input type="text" name="director" id="director" value="{{ $movie->director }}" class="input rounded-md w-full" aria-label="Director" />
        </div>
        
        <div class="flex flex-col mb-4">
            <label for="status" class="mb-2 text-white w-24">Статус</label>
            <select name="status" id="status" class="input rounded-md w-full" aria-label="Movie status">
                @foreach(['Планую', 'Дивлюсь', 'Переглянуто'] as $status)
                <option value="{{ $status }}" {{ $movie->status == $status ? 'selected' : '' }}>{{ $status }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="seasons" class="mb-2 text-white w-24">Кількість сезонів</label>
            <input type="number" name="seasons" id="seasons" value="{{ $movie->seasons }}" class="input rounded-md w-full" aria-label="Number of Seasons" />
        </div>

        <div class="flex flex-col mb-4">
            <label for="rating" class="mb-2 text-white w-24">Рейтинг</label>
            <select name="rating" id="rating" class="input rounded-md w-full" aria-label="Rating">
                @for($i = 0; $i <= 10; $i++)
                <option value="{{ $i }}" {{ $movie->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="flex flex-col mb-4">
            <label for="review" class="mb-2 text-white w-24">Рецензія</label>
            <textarea name="review" id="review" class="input rounded-md w-full h-32" aria-label="Review">{{ $movie->review }}</textarea>
        </div>

        <div class="flex flex-col mb-4">
            <label for="photo" class="mb-2 text-white w-24">Фото</label>
            <input type="file" name="photo" id="photo" class="input rounded-md w-full" aria-label="Photo" />
        </div>

        <button class="btn bg-blue text-white rounded-md p-2 w-full" type="submit">Оновити</button>

    </form>
</x-app-layout>
