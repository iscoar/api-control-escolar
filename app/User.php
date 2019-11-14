<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $fillable = [
        'name', 'last_name', 'second_last_name', 'gender', 'password',
    ];*/
    protected $guarded = ['role'];  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public $incrementing = false;
    protected $keyType = 'string';

    public function current_township()
    {
        return $this->belongsTo('App\Township', 'current_township_id');
    }

    public function birthplace()
    {
        return $this->belongsTo('App\Township', 'birthplace_id');
    }

    public function subject_teacher_group()
    {
        return $this->hasMany('App\SubjectTeacherGroup');
    }

    public function student()
    {
        return $this->hasOne('App\Student');
    }

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }

    public function student_groups()
    {
        return $this->hasMany('App\StudentGroup', 'student_id');
    }

    public function user_documents()
    {
        return $this->hasMany('App\UserDocument');
    }

    public function subject_teacher_groups()
    {
        return $this->hasMany('App\SubjectTeacherGroup', 'teacher_id');
    }

    public function student_scores()
    {
        return $this->hasMany('App\StudentScore', 'student_id');
    }

    public function student_payments()
    {
        return $this->hasMany('App\StudentPayment', 'student_id');
    }

    public function cashier_payments()
    {
        return $this->hasMany('App\StudentPayment', 'cashier_id');
    }

    public function student_grants()
    {
        return $this->hasMany('App\StudentGrant', 'student_id');
    }
}
