<x-layout>
    <x-slot:title>Halaman {{$title}}</x-slot:title>
    
    @foreach($daftar_rapor as $rapor)

        <article class="py-8 max-w-screen-md border-b border-gray-500">
            <h2 class="mb-1 text-2xl" >Tahun Ajaran : {{$rapor ['tahun_ajaran']}}</h2>
            <div>
                <p class="my-4 font-light">Kelas : {{$rapor['kelas']}}</p>
                <p>Semester {{$rapor ['semester']}} | {{$rapor -> created_at -> format('j F Y')}}</p>
                {{-- <p>Nilai :
                    @foreach ($rapor['nilai'] as $nilai_angka)
                        {{$nilai_angka}}{{ !$loop->last ? ',' : '' }}
                    @endforeach
                </p> --}}
                <a href="/rapor/{{$rapor['slug']}}" class="font-medium text-blue-500 hover:underline" >Detail rapor &raquo;</a>
            </div>
        </article>
    @endforeach    
        
    <!-- <article class="py-8 max-w-screen-md border-b border-gray-500">
        <h2 class="mb-1 text-2xl" >Tahun Ajaran 2026/2027</h2>
        <div>
            <p class="my-4 font-light">Kelas : 1</p>
            <p>Semester Ganjil</p>
            <p>Nilai : 80 90 85</p>
            <a href="/rapor" class="font-medium text-blue-500 hover:underline" >Detail rapor &raquo;</a>
        </div>
        </article> -->
</x-layout>