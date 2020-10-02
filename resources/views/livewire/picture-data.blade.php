@foreach ($picture as $pic)
			<tr>
				<td>
				<div class="flex-shrink-0 h-10 w-10">
					<img class="h-10 w-10 rounded-full" src="{{ url('storage/photos/'.$pic->name ) }}" />
				</div>
				</td>
			</tr>
@endforeach