<x-layout>
    <x-slot:title>Halaman {{$title}}</x-slot:title>
    
        <article class="py-8 max-w-screen-md border-b border-gray-500">
            <h2 class="mb-1 text-2xl" >Tahun Ajaran : {{$rapor ['tahun_ajaran']}}</h2>
            <div>
                <p class="my-4 font-light">Kelas : {{$rapor['kelas']}}</p>
                <p>Semester {{$rapor ['semester']}}</p>
                {{-- <p>Nilai :
                    @foreach ($rapor['nilai'] as $nilai_angka)
                        {{$nilai_angka}}{{ !$loop->last ? ',' : '' }}
                    @endforeach
                </p> --}}
                <p>Nilai : {{$rapor['nilai']}}</p>
                <a href="/daftar_rapor" class="font-medium text-blue-500 hover:underline" >Kembali ke daftar rapor &laquo;</a>
            </div>
        </article>
        
</x-layout>