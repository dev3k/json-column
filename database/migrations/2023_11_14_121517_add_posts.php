<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $user = new \App\Models\Post();
        $user->title = [
            'en' => 'AAA',
            'ru' => 'ZZZ',
        ];
        $user->save();
        $user = new \App\Models\Post();
        $user->title = [
            'en' => 'bbb',
            'ru' => 'yyy',
        ];
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
