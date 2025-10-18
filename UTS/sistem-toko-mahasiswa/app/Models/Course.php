<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'instructor',
        'image',
        'icon',
        'color',
        'duration_weeks',
        'total_lessons',
        'total_quizzes',
        'price',
        'discount_price',
        'level',
        'is_active',
        'is_featured',
        'topics',
        'learning_outcomes',
        'requirements'
    ];

    protected function casts(): array
    {
        return [
            'topics' => 'array',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'price' => 'decimal:2',
            'discount_price' => 'decimal:2'
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }

    public function modules()
    {
        return $this->hasMany(CourseModule::class)->orderBy('order');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function getEnrollmentCountAttribute()
    {
        return $this->enrollments()->count();
    }

    public function getDiscountedPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }

    public function getIsDiscountedAttribute()
    {
        return !is_null($this->discount_price) && $this->discount_price < $this->price;
    }
}