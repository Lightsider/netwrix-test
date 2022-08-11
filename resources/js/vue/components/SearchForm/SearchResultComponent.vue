<template>
    <p v-if="loading !== undefined && loading === true" style="text-align: center">
        Please wait…
    </p>
    <p v-else-if="partners === undefined || partners.length < 1" style="text-align: center">
        Your search parameters did not match any partners. Please try different
        search.
    </p>
    <div v-else v-for="partner in partners" class="partner-list__item">
        <div class="partner-list-item-container">
            <div class="partner-list-item-container__logo-container">
                <div class="partner-list-item-container__logo-img" :style="'background-image: url(\'' + partner.logo + '\')'">

                </div>
            </div>
            <div class="partner-list-item-container__info-container">
                <div class="partner-list-item-container__info-title">
                    {{ partner.company }}
                </div>
                <div class="partner-list-item-container__info-description">
                    {{ partner.address }}
                </div>
            </div>
            <div class="partner-list-item-container__contacts-container">
                <div class="partner-list-item-container__contacts-website">
                    <a :href="partner.website"
                       class="partner-list-item-container__info-link partner-list-item-container__info-link_website">Website</a>
                </div>
                <div class="partner-list-item-container__info-phone">
                    <a :href="'tel:' + partner.phone"
                       class="partner-list-item-container__info-link partner-list-item-container__info-link_phone">+61 2
                        8001 0250</a>
                </div>
            </div>
            <div class="partner-list-item-container__company-container">
                <div class="partner-list-item-container__company-name">
                    {{ partner.status }}
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    props: [
        'partners',
        'loading'
    ],
}
</script>
