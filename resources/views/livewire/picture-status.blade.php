<div>
<div class="flex px-8">
<ul>
@foreach ($type as $type) 
	<li>
	 {{ substr($type->mime, 6) }} - {{ number_format(($type->sumSize / 1024), 2, '.', '') }} kb
	</li>
@endforeach
	<li>
	Storage Size : {{ $totalSize }} / 100 mb
	</li>
</ul>
</div>
</div>