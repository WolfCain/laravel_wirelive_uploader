<form wire:submit.prevent="store" class="w-full max-w-sm" >
  <div class="flex">
    <input wire:model="name" type="text" placeholder="Create Catalog" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker padding" />
    <button class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
      Create
    </button>	
  </div>
</form>