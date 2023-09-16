@forelse ($mahasiswas as $mahasiswa)
    {{ $mahasiswa->nama }} , {{ $mahasiswa->nim }} , {{ $mahasiswa->tanggal_lahir }} , {{ $mahasiswa->ipk }} <br>
@empty
    Tidak ada data
@endforelse
