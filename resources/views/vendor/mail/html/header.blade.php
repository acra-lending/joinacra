<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'AcraRecruit')
<img src="{{ asset('img/Acra_Logo_Horizontal.png') }}" alt="Acra Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
