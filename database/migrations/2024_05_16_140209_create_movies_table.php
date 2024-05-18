<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Додано зовнішній ключ для зв'язку з користувачем
            $table->string('name');
            $table->enum('type', ['фільм', 'серіал', 'аніме', 'мультфільм']);
            $table->year('year');
            $table->string('country');
            $table->string('genre');
            $table->string('director');
            $table->string('seasons');
            $table->enum('rating', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->text('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
