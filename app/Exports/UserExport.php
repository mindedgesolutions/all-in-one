<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    protected $labels, $user, $role, $job, $dob_start, $dob_end, $dor_start, $dor_end, $f;

    public function __construct($labels, $user = null, $role = null, $job = null, $dob_start = null, $dob_end = null, $dor_start = null, $dor_end = null, $f = null)
    {
        $this->labels = $labels;
        $this->user = $user;
        $this->role = $role;
        $this->job = $job;
        $this->dob_start = $dob_start;
        $this->dob_end = $dob_end;
        $this->dor_start = $dor_start;
        $this->dor_end = $dor_end;
        $this->f = $f;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $users = User::with('details.userType', 'roles');

        if (!$this->f) {
            $users = $users;
        } else {
            if ($this->user) {
                $users = $users->filterByUser($this->user);
            }
            if ($this->role) {
                $users = $users->role($this->role);
            }
            $users = $users->filterFromDetails(
                $this->job,
                $this->dob_start,
                $this->dob_end,
                $this->dor_start,
                $this->dor_end
            );
        }
        $users = $users->get();

        return view('exports.export-user', ['labels' => $this->labels, 'users' => $users]);
    }
}
