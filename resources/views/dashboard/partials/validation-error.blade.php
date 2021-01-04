   {{-- Validar y mostrar errores --}}
   @if ($errors->any())
       @foreach ($errors->all() as $error)
           {{ $error }}
       @endforeach
   @endif
