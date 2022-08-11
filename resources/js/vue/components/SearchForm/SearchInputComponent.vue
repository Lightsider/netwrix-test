<template>
    <div class="search-form__input-line">
        <div class="input-wrap_relative">
            <input name="search" :placeholder="this.placeholder" class="search-form__search">
            <button class="search-form__search-icon" type="submit"></button>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        window.addEventListener("resize", this.setPlaceholder);
    },
    methods: {
        setPlaceholder: function () {
            if (window.innerWidth > 767) {
                this.placeholder = 'Search by company name or address..';
            } else {
                this.placeholder = 'Search';
            }

            console.log(window.innerWidth, this.placeholder);
        }
    },
    data(){
        return {
            placeholder: ''
        }
    },
    mounted() {
        this.setPlaceholder();
    }
}
</script>
