@include('layouts.header')

<body>
    @include('layouts.navbar')


    <div class="container mt-5"
        style="border: 2px solid black;  background:aliceblue;padding: 33px; border-radius: 15px">
        <div style="display: flex; justify-content: space-between">

            <h1 class="text-left">Users List</h1>
            <a class="h6 text-right btn btn-dark" href="{{route('register')}}">Add User</a>
        </div>
        <table class="table mt-5 ">
            <thead class="thead-dark ">
                <tr class="table-stripped">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php

                $i=1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$i++}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('user.edit',$user->id)}}">Edit</a>
                        <form action="" class="btn btn-dark" href="{{route('user.delete',$user->id)}}">Delete</form>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
    @include('layouts.footer')
