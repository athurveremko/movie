<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            // Збереження шляху у базі даних
            // Наприклад, якщо у вас є модель Photo, ви можете зробити щось на кшталт:
            // Photo::create(['path' => $path]);
            return 'Фото успішно завантажено!';
        } else {
            return 'Фото не було завантажено.';
        }
}
}