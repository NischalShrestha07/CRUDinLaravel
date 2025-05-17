@include('layouts.header')

<body>
    <div class="container mt-5"
        style="border: 2px solid black;  background:aliceblue;padding: 33px; border-radius: 15px">
        <h1 class="text-center">Login</h1>
        <form action="{{route('user.authenticate')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control"
                    id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('layouts.footer')
