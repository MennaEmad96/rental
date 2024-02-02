<div class="row">
    <div class="col-sm-12">
    <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Registration Date</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                    <td>{{ $user->fullName }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->active ? "Yes" : "No" }}</td>
                    <td><a href="{{ route('editUser', ['id'=>$user->id]) }}"><img src="{{ asset('assets/admin/images/edit.png') }}" alt="Edit"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>