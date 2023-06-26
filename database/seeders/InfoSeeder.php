<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programming_languages')->insert([
            'favorite' => 'Python',
            'description' => 'Python is a versatile and powerful high-level programming language that emphasizes code readability and simplicity. Developed by Guido van Rossum and first released in 1991, Python has gained immense popularity due to its clean syntax, extensive standard library, and vibrant community support.',
            'advantage_1' => "Readability and Simplicity",
            'explain_1' => "Python's clean and easy-to-understand syntax promotes code readability, making it easier for developers to write and maintain code. This feature significantly reduces the time and effort required for debugging and enhances collaboration among team members.",
            'advantage_2' => "Extensive Ecosystem and Community Support",
            'explain_2' => "Python offers an extensive collection of tools that accelerate development and streamline tasks.",
            'advantage_3' => "Cross-Platform Compatibility and Portability",
            'explain_3' => "Python is designed to be highly portable and compatible across different platforms, including Windows, macOS, and Linux.",
            'logo' => 'images/python-logo.png'
        ]);
    }
}
