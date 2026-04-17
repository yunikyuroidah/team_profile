<div class="bg-white/5 border border-white/10 p-6 rounded shadow text-white">

<h2 class="text-xl font-bold mb-4 text-white">CRUD Data Halaman: {{ ucfirst($page) }}</h2>

{{-- FORM CREATE --}}
<form method="POST" action="/store/{{ $page }}" class="mb-6 flex gap-2">
    @csrf

    <input
        name="text"
        placeholder="Masukkan data..."
        required
        class="border border-white/20 bg-white/10 text-white placeholder:text-white/50 p-2 rounded w-full">

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Tambah
    </button>
</form>


{{-- TABLE --}}
<table class="w-full border border-white/10">

<thead class="bg-white/10 text-white">
<tr>
    <th class="border border-white/10 p-2">No</th>
    <th class="border border-white/10 p-2">Data</th>
    <th class="border border-white/10 p-2">Update</th>
    <th class="border border-white/10 p-2">Delete</th>
</tr>
</thead>

<tbody>

@forelse(session($page, []) as $i => $item)

<tr>

<td class="border border-white/10 p-2 text-center">
    {{ $i + 1 }}
</td>

<td class="border border-white/10 p-2">
    {{ $item }}
</td>

<td class="border border-white/10 p-2">

<form method="POST" action="/update/{{ $page }}/{{ $i }}" class="flex gap-2">
    @csrf

    <input
        name="text"
        value="{{ $item }}"
        class="border border-white/20 bg-white/10 text-white p-1 rounded">

    <button class="bg-yellow-400 px-3 py-1 rounded">
        Update
    </button>
</form>

</td>

<td class="border border-white/10 p-2 text-center">

<a href="/delete/{{ $page }}/{{ $i }}"
    class="bg-red-500 text-white px-3 py-1 rounded">
    Delete
</a>

</td>

</tr>

@empty

<tr>
<td colspan="4" class="text-center p-4">
    Belum ada data
</td>
</tr>

@endforelse

</tbody>
</table>

</div>
