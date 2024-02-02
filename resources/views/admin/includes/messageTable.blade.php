<div class="row">
    <div class="col-sm-12">
    <div class="card-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->firstName }} {{ $message->lastName }}</td>
                    <td>{{ $message->email }}</td>
                    <td><a href="{{ route('showMessage', ['id'=>$message->id]) }}"><img src="{{ asset('assets/admin/images/edit.png') }}" alt="Edit"></a></td>
                    <td><a href="{{ route('deleteMessage', ['id'=>$message->id]) }}" onclick="return confirm('Are you sure?')"><img src="{{ asset('assets/admin/images/delete.png') }}" alt="Delete"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>