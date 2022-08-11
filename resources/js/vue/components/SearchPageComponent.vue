<template>
    <div class="header">
        <div class="header__top">
            <div class="header__logo"></div>
        </div>
        <div class="header__content">
            <div class="header__title">
                Netwrix <br class="br_mobile"> Partner Locator
            </div>
            <div class="header__subtitle">
                Hundreds of Netwrix partners around the world are standing by to help you. <br class="br_mobile br_desktop"> With our Partner Locator you can easily find the list of authorized partners  <br class="br_mobile"> in your area.
            </div>
            <div class="header__form" id="header-form">
                <search-form-component v-bind:action="action" v-bind:params="params" v-on:wait_search_results="waitSearch" v-on:change_search_results="setResult"/>
            </div>
        </div>
    </div>
    <div class="partner-list-container">
        <div class="partner-list">
            <search-results-component v-bind:partners=partners v-bind:loading=loading />
        </div>
    </div>
</template>

<script>
import $ from "jquery";

export default {
    props: [
        'action',
    ],
    methods: {
        waitSearch: function (request) {
            this.partners = [];
            this.loading = true;
        },
        setResult: function (data) {
            this.loading = false;
            this.params = data.params;
            this.partners = data.partners;

            // force refresh select2
            $('.input-wrap_select2').select2('destroy');
            $('.input-wrap_select2').select2({
                dropdownAutoWidth: false,
                width: 'element',
            });
        }
    },
    data(){
        return {
            partners: {

            },
            loading: true,
        }
    },
}
</script>
