<form action="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante"
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full rounded-md border-gray-300"
        >
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario}}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full rounded-md border-gray-300"
        >
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
        />

        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            wire:model="ultimo_dia"
            :value="old('ultimo_dia')"
        />

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Descripcion Puesto')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripcion general del puesto, experiencia"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full rounded-md border-gray-300"
            cols="30"
            rows="10"
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            wire:model="imagen"
            accept="image/*"
        />
        
        <div class="my-5 w-10">
            @if ($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}">
            @endif
        </div>

        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>