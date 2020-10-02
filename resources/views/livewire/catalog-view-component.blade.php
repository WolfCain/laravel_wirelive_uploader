<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">				
                <div class="bg-gray-50">
					  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
						<h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
						{{ $catalog->name }}
						  <br>
						  <span class="text-indigo-600">Image : {{ $catalog->picture->count() }}</span>					  
						  <br>					 
						</h2>					
						<div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
						@if(!($updateMode))
						<form wire:submit.prevent="changeName" class="w-full max-w-sm" >
						  <div class="flex">
							<input wire:model="name" type="text" placeholder="Change Catalog Name" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker padding" />
							<button class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
							  Save
							</button>	
						  </div>
						</form>						
						@endif						
						<form wire:submit.prevent="searchMime">
						<select wire:model="mime" class="shadow appearance-none border rounded py-2 px-3 mx-3 text-grey-darker padding">
						<option value="image/all" >image/all</option>
						@foreach ($type as $key => $t)						
						<option value="{{ $t->mime }}" wire:key="{{ $key }}">{{ $t->mime }}</option>
						@endforeach						
						</select>
						</form>
						total size : {{ number_format(($catalog->picture->sum('size') / 1024), 2, '.', '') }} kb
						</div>
					  </div>			
				</div>
				<div class="flex flex-wrap md-6"> 
				@foreach ($catalog->picture as $key => $picture)
					<div class="w-2/6 p-2 justify-center">
					@livewire('catalog-picture-order', ['picture' => $picture, 'max' => $catalog->picture->count(), 'catalog_id' => $catalog->id ], key($picture->id))
					</div>
				@endforeach
				</div>				
            </div>
        </div>
    </div>	
</div>
