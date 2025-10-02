<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
            
                    <div>
                        <x-input-label for="name" value="Nom" />
            
                        <x-text-input id="name" class="block mt-1 w-full"
                                        type="text"
                                        name="name"
                                        required />
            
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="amount" value="Montant (en euros)" />
            
                        <x-text-input id="amount" class="block mt-1 w-full"
                                        type="number"
                                        step="0.01"
                                        name="amount"
                                        required />
            
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="name" value="Division" />
            
                        <input type="radio" id="dividedYes" name="dividedYes" value="Oui" checked>
                        <label for="dividedYes" class="dark:text-gray-400">Oui</label><br>
                        <input type="radio" id="dividedNo" name="dividedNo" value="Non">
                        <label for="dividedNo" class="dark:text-gray-400"  >Non</label>
            
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="name" value="Ticket" />
            
                        <input type="radio" id="receiptYes" name="receiptYes" value="Oui" >
                        <label for="receiptYes" class="dark:text-gray-400">Oui</label><br>
                        <input type="radio" id="receiptNo" name="receiptNo" value="Non" checked>
                        <label for="receiptNo" class="dark:text-gray-400">Non</label>
            
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="adjusted_amount" value="Montant ajusté (en euros)" />
            
                        <x-text-input id="adjusted_amount" class="block mt-1 w-full"
                                        type="number"
                                        step="0.01"
                                        name="amount" />
            
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="flex justify-end mt-4">
                        <x-primary-button class="m-2">
                            Ajouter une dépense
                        </x-primary-button>
                    </div>
                </form>
                <table class="table-fixed border-collapse border border-gray-400 w-full">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Nom</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Date</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Montant</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Divison</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Ticket</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Montant ajusté</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Payeur</th>
                            <th class="border border-gray-300 text-gray-600 dark:text-gray-400">Remboursé ?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td  class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>
                            <td  class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>
                            <td  class="border border-gray-300"></td>
                            <td  class="border border-gray-300"></td>
                            <td class="border border-gray-300"></td>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
