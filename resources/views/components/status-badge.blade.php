@props(['status' => 'Aktif'])

@if (in_array(strtolower($status), ['aktif', 'active', 'a']))
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
        Aktif
    </span>
@else
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-700">
        Tidak Aktif
    </span>
@endif