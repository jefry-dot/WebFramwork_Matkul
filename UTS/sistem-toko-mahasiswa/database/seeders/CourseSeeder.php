<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::create([
            'title' => 'Pemrograman Web',
            'slug' => 'pemrograman-web',
            'description' => 'Pelajari konsep dasar pengembangan web dengan HTML, CSS, JavaScript dan framework modern untuk menjadi Web Developer profesional.',
            'short_description' => 'Master HTML, CSS, JavaScript dan Framework Modern',
            'instructor' => 'Dr. Ahmad Santoso',
            'icon' => '🌐',
            'color' => 'blue',
            'duration_weeks' => 8,
            'total_lessons' => 12,
            'total_quizzes' => 6,
            'price' => 0,
            'level' => 'beginner',
            'is_active' => true,
            'is_featured' => true,
            'topics' => ['HTML5', 'CSS3', 'JavaScript', 'Responsive Design', 'PHP', 'Laravel'],
            'learning_outcomes' => 'Membangun website responsive, Menguasai JavaScript modern, Membuat aplikasi web dengan Laravel',
            'requirements' => 'Laptop dengan internet, Text editor (VS Code), Browser modern'
        ]);

        Course::create([
            'title' => 'Database Management',
            'slug' => 'database-management', 
            'description' => 'Pelajari konsep database, SQL, normalisasi, dan implementasi database dalam aplikasi untuk menjadi Database Administrator yang handal.',
            'short_description' => 'Konsep database, SQL, dan normalisasi',
            'instructor' => 'Prof. Sari Dewi',
            'icon' => '🗃️',
            'color' => 'green',
            'duration_weeks' => 6,
            'total_lessons' => 10,
            'total_quizzes' => 4,
            'price' => 0,
            'level' => 'intermediate',
            'is_active' => true,
            'is_featured' => true,
            'topics' => ['SQL Dasar', 'Normalisasi', 'ERD', 'Transaction', 'NoSQL'],
            'learning_outcomes' => 'Mendesain database yang efisien, Menulis query SQL kompleks, Mengoptimalkan performa database',
            'requirements' => 'Dasar pemrograman, MySQL Workbench'
        ]);
    }
}