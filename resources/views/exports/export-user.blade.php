<table>
    <thead>
        <tr>
            @foreach ($labels as $label)
                <td>{{ $label }}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                @if (in_array('Name', $labels))
                    <td>{{ employeeName($user->id) }}</td>
                @endif
                @if (in_array('Email', $labels))
                    <td>{{ $user->email }}</td>
                @endif
                @if (in_array('Phone', $labels))
                    <td>{{ $user->phone }}</td>
                @endif
                @if (in_array('Role', $labels))
                    <td>{{ $user->roles->value('name') }}</td>
                @endif
                @if (in_array('Job profile', $labels))
                    <td>{{ $user->details->userType->name }}</td>
                @endif
                @if (in_array('Address', $labels))
                    <td>{{ employeeAddress($user->id) }}</td>
                @endif
                @if (in_array('D.O.B', $labels))
                    <td>{{ date('d-m-Y', strtotime($user->details->dob)) }}</td>
                @endif
                @if (in_array('D.O.R', $labels))
                    <td>{{ date('d-m-Y', strtotime($user->details->dor)) }}</td>
                @endif
                @if (in_array('Salary', $labels))
                    <td>{{ $user->details->salary }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
