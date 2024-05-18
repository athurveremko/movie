<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index()
{
    $userId = Auth::id();
    $movie = Movie::where('user_id', $userId)->paginate(12); // Змініть 10 на бажану кількість елементів на сторінці

    return view('dashboard', compact('movie'));
}

    public function showMovie()
    {
        $userId = Auth::id();
        $movie = Movie::where('user_id', $userId)->get();

        return view('movie.index', compact('movie'));
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(Request $request)
    {
        $userId = Auth::id(); // Отримання ID поточного авторизованого користувача
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'country' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'seasons' => 'required|integer|min:0',
            'rating' => 'required|integer|min:0|max:10',
            'review' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $movie = new Movie($validatedData);
        $movie->user_id = $userId; // Встановлення user_id
    
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/photos');
            $movie->photo = str_replace('public/', 'storage/', $photoPath);
        }
    
        $movie->save();
    
        return redirect()->route('dashboard')->with('success', 'Movie created successfully.');
    }
    
    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $userId = Auth::id();

        if ($movie->user_id !== $userId) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:фільм,серіал,аніме,мультфільм',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'country' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'status' => 'required|string|in:Планую,Дивлюсь,Переглянуто',
            'seasons' => 'required|integer|min:0',
            'rating' => 'required|integer|min:0|max:10',
            'review' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        $movie->fill($request->all());

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('photos', $imageName, 'public');
            $movie->photo = 'storage/photos/' . $imageName;
        }

        $movie->save();

        return redirect()->route('dashboard')->with('success', 'Фільм успішно оновлено!');
    }

    public function destroy(Movie $movie)
    {
        $userId = Auth::id();

        if ($movie->user_id !== $userId) {
            abort(403);
        }

        if ($movie->photo) {
            \Storage::disk('public')->delete(str_replace('storage/', '', $movie->photo));
        }

        $movie->delete();

        return redirect()->route('dashboard')->with('success', 'Фільм успішно видалено!');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movie.show', compact('movie'));
    }
}
