$(document).ready(function () {

        var sortOrder = 'desc',        
            $container = $('#container'),
            $toggleSort = $('.toggle-sort');   // Variables de mixitup que se utilizaran para el reordeanmiento de elementos

        $container.mixItUp();  // Se llama a la funcion mixitup
  
        $toggleSort.on('click', function() {   // Función que genera un método toggle ascendente/descendente
            switch (sortOrder) {
                case 'desc':
                  sortOrder = 'asc';
                break;
                case 'asc':
                  sortOrder = 'desc';
                break;                
            }
            $container.mixItUp('sort', 'myorder:' + sortOrder);  // Se llama a la función mixitup con las variables de ordenamiento
        });
});
