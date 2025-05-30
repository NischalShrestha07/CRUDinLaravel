@include('layouts.header')

<body>
    @include('layouts.navbar')
    <div class="container mt-5"
        style="border: 2px solid black;  background:aliceblue;padding: 33px; border-radius: 15px">
        <div class="d-flex" style="justify-content: space-between">
            <h1 class="text-left">Register</h1>
            <a class="h6 text-right btn btn-dark" href="{{route('dashboard')}}">Back</a>

        </div>
        <form action="{{ route('user.register') }}" method="POST">
            @csrf
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="address" placeholder="Address" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password"
                    id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('layouts.footer')
