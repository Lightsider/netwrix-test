<template>
    <form class="search-form" :action="action" v-on:submit="newSearch" ref="searchForm">
        <search-input-component/>
        <search-selects-component
            v-bind:types="params.types"
            v-bind:countries="params.countries"
            v-bind:states="params.states"
            v-bind:request="this.request"
        />
    </form>
</template>

<script>
export default {
    props: {
        action: String,
        params: {
            type: Object,
            default(rawProps) {
                return {
                    types: null,
                    countries: null,
                    states: null,
                }
            }
        }
    },
    methods: {
        newSearch: function (e) {
            e.preventDefault();
            let action = e.target.action;
            let self = this;
            let query = e.target.search.value;
            let type = e.target.type.value;
            let countryCode = e.target.countryCode.value;
            let stateCode = e.target.stateCode.value;
            let params = {
                query: query,
                type: type,
                countryCode: countryCode,
                stateCode: stateCode,
            };

            self.request = params;

            this.$emit('wait_search_results');

            axios
                .get(
                    action,
                    {
                        params: params
                    }
                )
                .then(function (response) {
                    self.$emit('change_search_results', response.data);
                }).catch(function (error) {
                console.log(error);
            });
        }
    },
    mounted() {
        this.$refs.searchForm.requestSubmit()
    },
    data(){
        return {
            request: {

            },
        }
    },
}
</script>
