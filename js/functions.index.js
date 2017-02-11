$(document).ready(function () {

    var containerEl  = document.querySelector('[data-ref="container"]');
    var buttonAddNew = document.querySelector('[data-ref="button-add-new"]');
    var i = $('#integ div').size() + 1;

    var mixer = mixitup(containerEl, { //inicializa una variable de mixitup que contiene al objeto y sus selectores 
        selectors: {
            target: '[data-ref="mix1"]'
        }
    });
    buttonAddNew.addEventListener('click', function() {
        mixer.insertAfter('<div class="mix1" data-ref="mix1" data-myorder="' + i +'"><input type="text" data-validation="number" data-validation-allowing="range[-99;999],negative" step="1" value="" maxlength="3" id="integ" name="integ[]"  value="" placeholder="número" /></div>', buttonAddNew);  // Función de mixitup que agrega un elemento adicional al grupo numérico
    });
});
