<table>
  <thead>
      <tr>
          <td colspan="3"></td>
          <td colspan="4" align="center" bgcolor="green">Contact 1</td>
          <td colspan="4" align="center" bgcolor="cornflowerblue">Contact 2</td>
      </tr>
      <tr>
          <td>Sl. No.</td>
          <td>Name</td>
          <td>Address</td>
          <td>Contact Person</td>
          <td>Email</td>
          <td>Phone No 1</td>
          <td>Phone No 2</td>
          <td>Contact Person</td>
          <td>Email</td>
          <td>Phone No 1</td>
          <td>Phone No 2</td>
      </tr>
  </thead>
  <tbody>
      @foreach ($clients as $key => $client)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address }}</td>
            {!! clientContacts($client->id)[2] !!}
            {!! clientContacts($client->id)[3] !!}
          </tr>
      @endforeach
  </tbody>
</table>
