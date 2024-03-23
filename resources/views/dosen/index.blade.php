<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Dosen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-12 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dosens as $dosen)
                        <tr>
                            <td>{{ $dosen->id }}</td>
                            <td>{{ $dosen->nid }}</td>
                            <td>{{ $dosen->nama_dosen }}</td>
                            <td>{{ $dosen->tempat_lahir }}</td>
                            <td>{{ $dosen->tanggal_lahir }}</td>
                            <td>{{ $dosen->jenis_kelamin }}</td>
                            <td>{{ $dosen->alamat_dosen }}</td>
                            <td>{{ $dosen->email_dosen }}</td>
                            <td>{{ $dosen->nomor_telepon }}</td>
                            <td>
                                <a href="{{ url('/edit-dosen/'.$dosen->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                               <form id="delete-form-{{$dosen->id}}" action="{{url('delete-dosen/'.$dosen->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger delete-confirm" data-id="{{$dosen->id}}">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11"> No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SweetAlert Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        // Script to handle delete confirmation with SweetAlert
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-confirm');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    const dosenId = e.target.dataset.id;
                    Swal.fire({
                        title: 'Serius Arep DiHapus?',
                        text: "Data akan dihapus permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, Hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + dosenId).submit();
                        }
                    });
                });
            });
        });
    </script>

</x-app-layout>
