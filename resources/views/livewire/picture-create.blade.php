<form wire:submit.prevent="store" class="w-full max-w-sm" >
  <div class="flex items-center border-b border-indigo-500 py-2">
    <input wire:model="photo" id="{{ $incurment }}" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="file">
    <button class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Upload
    </button>	
  </div>
</form>