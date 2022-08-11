<template>
    <div class="search-form__input-line_flex">
        <div class="input-wrap_header-transparent">
            <select class="input-wrap_select2" name="type" data-width="209px">
                <option value="">Type</option>
                <option v-for="type in types" :value=type.value> {{ type.label }}</option>
            </select>
        </div>
        <div class="input-wrap_header-transparent input-wrap_header-twice">
            <select class="input-wrap_select2 input-wrap_twice-first" name="countryCode" data-width="200px"  :disabled="checkDisable(countries)">
                <option value="">Country</option>
                <option v-for="country in countries" :value=country.value :selected="checkSelectedCountry(country.value)"> {{ country.label }}</option>
            </select>
            <select class="input-wrap_select2 input-wrap_twice-second" name="stateCode" data-width="200px"  :disabled="checkDisable(states)">
                <option value="">State</option>
                <option v-for="state in states" :value=state.value :selected="checkSelectedState(state.value)"> {{ state.label }}</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    props: ['types', 'countries', 'states', 'request'],
    methods:{
        checkDisable(collection){
            return collection === undefined || collection === null || collection.length < 1;
        },
        checkSelectedCountry(value){
            return value !== undefined && this.request !== undefined && value === this.request.countryCode;
        },
        checkSelectedState(value){
            return value !== undefined && this.request !== undefined && value === this.request.stateCode;
        },
    }
}

// cos vue3 event not working in select 2

import $ from 'jquery';

function selectChange(e) {
    e.target.form.requestSubmit();
}

$(document).ready(function () {

    $('.input-wrap_select2[name="type"]').on('change', function (e) {
        selectChange(e);
    });

    $('.input-wrap_select2[name="countryCode"]').on('change', function (e) {
        selectChange(e);
    });

    $('.input-wrap_select2[name="stateCode"]').on('change', function (e) {
        selectChange(e);
    });
})

</script>

