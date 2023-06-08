@extends('layouts.app')

@section('content')
<div class="section-header">
    <h1>All Category</h1>
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
          <tr>
            <th >Id</th>
            <th >Name</th>
            <th >Created at</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($all_category as $cat )
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$cat->name}}</td>
                <td>{{$cat->created_at}}</td>
                <td>
                    <a href="{{ route('edit.category', $cat->id) }}"
                        class="btn btn-info sm" title="Edit">Edit</a>
                    <a href="{{ route('delete.category', $cat->id) }}"
                        class="btn btn-danger sm" title="Delete">Delete</a>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>



@endsection

@section('specific-js')
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('4e72a7119753e66cb9e3', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('message-channel');
        channel.bind('message-event', function(data) {
            alert(JSON.stringify(data));

            let id = JSON.stringify(data.id);
            let message = JSON.stringify(data.message);
            let username = JSON.stringify(data.username);
            let second = JSON.stringify(data.second);
            let currency = JSON.stringify(data.currency);
            let cfdId = JSON.stringify(data.cfd_wallet_id)
            let typeId = JSON.stringify(data.type_id)
            let int = parseInt(second) * 1000;

            let token = "{{ csrf_token() }}";

            $.ajax({
                method: "POST",
                url: `/play-cfd`,
                data: {
                    _token: token,
                    user_id: id,
                    cfd_id: cfdId,
                    cfd_type_id: typeId,
                    amount: message,
                }
            }).done(function(res) {
                // table.ajax.reload();
                conosle.log('aung p');
            })


            // const Toast = Swal.mixin({
            //     toast: true,
            //     position: 'top-start',
            //     showConfirmButton: false,
            //     timer: 5000,
            //     allowOutsideClick: true,
            //     timerProgressBar: true,
            //     didOpen: (toast) => {
            //         toast.addEventListener('mouseenter', Swal.stopTimer)
            //         toast.addEventListener('mouseleave', Swal.resumeTimer)
            //     }
            // })

            // Toast.fire({
            //     icon: 'info',
            //     title: username,
            //     html: `
        //     <div>
        //         <div class=" d-flex justify-content-between mb-0">
        //             <span>${currency}</span>
        //             <div>
        //                 <small class="mb-0">Amount : </small>
        //                 <p class="mb-0 d-inline">100</p>
        //             </div>
        //         </div>
        //     </div>
        //         `
            // })
        });
    </script>
@endsection
