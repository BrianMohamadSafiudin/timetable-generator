<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Professor extends Model
{
    use Notifiable;

    /**
     * DB table this model uses
     *
     * @var string
     */
    protected $table = 'professors';

    /**
     * Non-mass assignable fields
     */
    protected $guarded = ['id'];

    /**
     * Get the rooms that are not available to this professor
     */

    public function unavailable_rooms_professors()
    {
        return $this->belongsToMany(Room::class, 'unavailable_rooms_professors', 'professor_id', 'room_id');
    }

    /**
     * Declare relationship between a professor and the courses
     * he or she teaches
     *
     * @return Illuminate\Database\Eloquent
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_professors', 'professor_id', 'course_id');
    }

    /**
     * Declare relationship between a professor and the timeslots that he or she
     * is not available
     *
     * @return Illuminate\Database\Eloquent
     */
    public function unavailable_timeslots()
    {
        return $this->hasMany(UnavailableTimeslot::class, 'professor_id');
    }
}
