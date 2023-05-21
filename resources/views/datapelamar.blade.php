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
            Data Pelamar
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no=1; ?>
                        
                        @foreach ($data_pelamar as $item)
                        <tr>
                            <td><?php echo $no++; ?></?php>
                            <td>{{$item['nama']}}</td>
                            <td>{{$item['nik']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>{{$item['nohp']}}</td>
                            <td>
                                <span class="badge bg-primary">Detail</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     
</div>

</section>
</div>

</div>
</div>



@include('template.footer')
</div>