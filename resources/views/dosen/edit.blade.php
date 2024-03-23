<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Dosen') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-validation-errors class="mb-4" :erorrs=$errors />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg white overflow-hidden shadow-sm sm:rounded-lg">
               <form action="{{ url('update-dosen/'.$dosens->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="nid" :value="__('Nomor Induk Dosen')" />
                    <x-text-input id="nid" class="block mt-1 w-full" type="text" name="nid" :value="$dosens->nid"  autofocus />
                </div>

                <div>
                    <x-input-label for="nama_dosen" :value="__('Nama')" />
                    <x-text-input id="nama_dosen" class="block mt-1 w-full" type="text" name="nama_dosen" :value="$dosens->nama_dosen"  autofocus />
                </div>

                <div>
                    <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                    <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="$dosens->tempat_lahir"  autofocus />
                </div>

                <div>
                    <x-input-label for="tanggal_lahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="$dosens->tanggal_lahir"  autofocus />
                </div>

                <div>
                    <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                <select id="jenis_kelamin" class="block mt-1 w-full rounded-md " name="jenis_kelamin" value="$dosens->jenis_kelamin"  autofocus>
                    <option value="laki-laki" {{ old('jenis_kelamin') === 'laki-laki' ? 'selected' : '' }}>Pilih</option>
                    <option value="laki-laki" {{ old('jenis_kelamin') === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ old('jenis_kelamin') === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                </div>

                <div>
                    <x-input-label for="alamat_dosen" :value="__('Alamat')" />
                    <x-text-input id="alamat_dosen" class="block mt-1 w-full" type="text" name="alamat_dosen" :value="$dosens->alamat_dosen"  autofocus />
                </div>

                <div>
                    <x-input-label for="email_dosen" :value="__('Email')" />
                    <x-text-input id="email_dosen" class="block mt-1 w-full" type="text" name="email_dosen" :value="$dosens->email_dosen"  autofocus />
                </div>

                <div>
                    <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
                    <x-text-input id="nomor_telepon" class="block mt-1 w-full" type="text" name="nomor_telepon" :value="$dosens->nomor_telepon"  autofocus />
                </div>

                <div>
                    <x-primary-button class="ms-3">
                        {{ __('Upadte Dosen') }}
                    </x-primary-button>
                </div>
               </form>
            </div>
        </div>
    </div>


</x-app-layout>
