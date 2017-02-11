$(document).ready(function () {

        var sortOrder = 'desc',
            $container = $('#container'),
            $toggleSort = $('.toggle-sort');

        $container.mixItUp();
  
        $toggleSort.on('click', function() {
            switch (sortOrder) {
                case 'desc':
                  sortOrder = 'asc';
                break;
                case 'asc':
                  sortOrder = 'desc';
                break;                
            }
            $container.mixItUp('sort', 'myorder:' + sortOrder);
        });
});
