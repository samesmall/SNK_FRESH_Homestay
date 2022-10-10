<x-app-layout>
    <x-slot name="header">
    <div class="container">
        <div class="d-flex justify-content-start">
         <h2>{{ __('Dashboard') }} </h2>
        </div>
    </div>
    </x-slot>

    <div class="container pt-6 mt-6">
        <div class="row">
            <div class="col-md-3">
            <h2> số lượng {{count($users)}} người</h2>
            <div class="border-2">
            <h2>Create user</h2>
                <form action="/users/create" method="post">
                    @csrf
                    <label for="Name">
                        Name:
                        <input class="form-control" type="text" name="name">
                    </label><br><br>
                    <label for="Email">
                        Email:
                        <input class="form-control" type="text" name="email">
                    </label><br><br>
                    <label for="Password">
                        Password:
                        <input class="form-control" type="text" name="password">
                    </label><br><br>
                    <button class="btn btn-primary" type="submit">Create user</button>
                </form>
                </div>
            </div>
            <div class="col-md-9">
            <table class="table table-sm border border-dark">
                <thead>
                    <tr class="text-white bg-primary">
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CREATE AT</th>
                    <th scope="col">UPDATE AT</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach ($users as $row)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
