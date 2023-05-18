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
                        
                        {{-- @foreach ($data_user as $item) --}}
                        <tr>
                            <td><?php echo $no++; ?></?php>
                            <td>Alvin Malik</td>
                            <td>3604011811990043</td>
                            <td>alvinmalik1111@gmail.com</td>
                            <td>089603396336</td>
                            <td>
                                <span class="badge bg-primary">Detail</span>
                                <span class="badge bg-danger">Hapus</span>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
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