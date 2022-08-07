require('./bootstrap');
require('./common.js');

import {createApp} from 'vue'
import Select2 from 'vue3-select2-component';
import SearchPageComponent from './vue/components/SearchPageComponent.vue'
import SearchFormComponent from './vue/components/SearchForm/SearchFormComponent.vue'
import SearchInputComponent from './vue/components/SearchForm/SearchInputComponent.vue'
import SearchSelectsComponent from './vue/components/SearchForm/SearchSelectsComponent.vue'
import SearchResultComponent from './vue/components/SearchForm/SearchResultComponent.vue'

const app = createApp({});

app.component('search-page-component', SearchPageComponent);
app.component('search-form-component', SearchFormComponent);
app.component('search-input-component', SearchInputComponent);
app.component('search-selects-component', SearchSelectsComponent);
app.component('search-results-component', SearchResultComponent);

app.component('Select2', Select2)

app.mount('#app');


