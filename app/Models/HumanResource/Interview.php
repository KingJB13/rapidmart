<?php

namespace App\Models\HumanResource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'interview_date',
        'interview_time',
        'interviewer_id',
        'status',
        'interview_note'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function interviewer()
    {
        return static::belongsTo(Employee::class);
    }

    public function interviewDate()
    {
        return Carbon::parse($this->interview_date)->format('F d, Y');
    }

    public function interviewTime()
    {
        return Carbon::parse($this->interview_time)->format('h:i A');
    }

    public function getAppointedDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('h:i A');
    }

    public function appointedDate()
    {
        return Carbon::parse($this->interview_date)->format('F d, Y');
    }
}