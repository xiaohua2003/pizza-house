       @extends('layouts.layout ')
       @section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> 
            <div>
                <h2>pizza house</h2>
            </div>
           @foreach($pizzas as $pizza)
           <div>
               {{$pizza->name}}-{{$pizza->type}}-{{$pizza->base}}
           </div>
           @endforeach
        </div>
        @endsection
 
