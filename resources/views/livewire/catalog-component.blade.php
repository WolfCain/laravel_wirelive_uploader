<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div class="bg-gray-50">
	  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
		<h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
		  Catalog List
		  <br>
		  <span class="text-indigo-600">{{ Auth::user()->name }}</span>					  
		  <br>					 
		</h2>					
		<div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
		@if($updateMode)
			@include('livewire.catalog-update')
		@else
			@include('livewire.catalog-create')
		@endif					
		</div>
	  </div>			
</div>
<div class="flex flex-col">  
	<!--
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	!-->
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Total Picture
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                TotalSize
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Created At
              </th>
              <th class="px-6 py-3 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
			<!--
            <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      Jane Cooper
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                      jane.cooper@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm leading-5 text-gray-500">Optimization</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>			
            <!-- More rows... -->
			@foreach ($catalog as $catalog)
			<tr>
				<td class="px-6 py-4 whitespace-no-wrap">
				<div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
				  <a href="{{ url('catalog/view/' .$catalog->id) }}" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded">{{ $catalog->name }}</a>
				 </div>                  
                </div>				
				</td>				
				<td class="px-6 py-4 whitespace-no-wrap">
					<div class="text-sm leading-5 text-gray-900"></div>
					{{ $catalog->picture()->count() }}
					<div class="text-sm leading-5 text-gray-500"></div>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap">
					<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
					
					</span>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
					{{ $catalog->created_at->format('jS F Y h:i:s A') }}
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">					
					<button wire:click="delete({{ $catalog->id }})" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded" >
						Delete
					</button>
				</td>
				</tr>
			</tr>			
			@endforeach
						
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
