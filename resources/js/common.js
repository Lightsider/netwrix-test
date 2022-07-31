import $ from "jquery";
import select2 from 'select2';

select2($);

$(() => {
    $('.input-wrap_select2').select2({
        dropdownAutoWidth: false,
        width: 'element'
    });
});

