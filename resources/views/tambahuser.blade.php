<x-app-layout>
    @include('template.header')
    <x-slot name="header">
    </x-slot>
    @include('template.sidebar')
</x-app-layout>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <form action="{{ url('/tambahuser') }}" method="POST">
        @csrf
       
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah User</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama</label>
                                <input type="text" class="form-control"  name="name"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Email</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" class="form-control"  name="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="helperText">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Password">
                                <p><small class="text-muted"></small></p>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Level</label>
                                <select class="form-select" id="basicSelect" name="level">
                                    <option></option>
                                    <option>admin</option>
                                    <option>kabag</option>
                                    <option>user</option>
                                </select>
                            </div>

                            <div>
                                <input type="submit" value="Tambah" class="btn icon icon-left btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
    </form>


    @include('template.footer')
</div>

</div>
</div>
