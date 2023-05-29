<x-app-layout>
    @include('template.header')
    <x-slot name="header">
    </x-slot>
    @include('template.sidebar')
</x-app-layout>
<div id="main">
    <section class="section">
        <div class="card">
            <div class="card-header">
            Kelola User
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no=1; ?>
                        
                        @foreach ($data_user as $item)
                        <tr>
                            <td><?php echo $no++; ?></?php>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>{{$item['level']}}</td>
                            <td>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/tambahuser" class="btn btn-primary btn-edit"><i class="bi bi-pencil-fill"></i> Tambah User</a>
            </div>
        </div>
     
</div>

</section>
</div>

</div>
</div>



@include('template.footer')
@include('sweetalert::alert')

</div>