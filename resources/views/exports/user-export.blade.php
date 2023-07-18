<table>
  <thead>
    <tr>Sl. No.</tr>
    <tr>Name</tr>
    <tr>Email</tr>
    <tr>Phone</tr>
    <tr>Role</tr>
    <tr>Job Profile</tr>
    <tr>D.O.B</tr>
  </thead>
  <tbody>
    @foreach ($users as $key => $user)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->roles->value('name') }}</td>
      <td>{{ $user->details->userType->name }}</td>
      <td>{{ $user->details->dob }}</td>
    </tr>
    @endforeach
  </tbody>
</table>