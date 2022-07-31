@extends('layout.main', ['title' => __('Menu')])

@section('content')
    <div class="main-container">
        <div class="header">
            <div class="header__top">
                <div class="header__logo"></div>
            </div>
            <div class="header__content">
                <div class="header__title">
                    Netwrix Partner Locator
                </div>
                <div class="header__subtitle">
                    Hundreds of Netwrix partners around the world are standing by to help you. <br> With our Partner Locator you can easily find the list of authorized partners in your area.
                </div>
                <div class="header__form">
                    <form class="search-form">
                        <div class="search-form__input-line">
                            <div class="input-wrap_relative">
                                <input name="search" placeholder="Search by company name or address.." class="search-form__search">
                                <button class="search-form__search-icon"></button>
                            </div>
                        </div>
                        <div class="search-form__input-line_flex">
                            <div class="input-wrap_header-transparent">
                                <select class="input-wrap_select2" data-placeholder="Type" data-width="209px">

                                </select>
                            </div>
                            <div class="input-wrap_header-transparent input-wrap_header-twice">
                                <select class="input-wrap_select2 input-wrap_twice-first" data-placeholder="Country" data-width="200px">

                                </select>
                                <select class="input-wrap_select2 input-wrap_twice-second" data-placeholder="State" data-width="200px">

                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="partner-list-container">
            <div class="partner-list">
                <div class="partner-list__item">
                    <div class="partner-list-item-container">
                        <div class="partner-list-item-container__logo-container">
                            <div class="partner-list-item-container__logo-img">

                            </div>
                        </div>
                        <div class="partner-list-item-container__info-container">
                            <div class="partner-list-item-container__info-title">
                                Tango Technology
                            </div>
                            <div class="partner-list-item-container__info-description">
                                Sydney, Level 7, 171 Clarence Street
                            </div>
                        </div>
                        <div class="partner-list-item-container__contacts-container">
                            <div class="partner-list-item-container__contacts-website">
                                <a href="#" class="partner-list-item-container__info-link partner-list-item-container__info-link_website">Website</a>
                            </div>
                            <div class="partner-list-item-container__info-phone">
                                <a href="#" class="partner-list-item-container__info-link partner-list-item-container__info-link_phone">+61 2 8001 0250</a>
                            </div>
                        </div>
                        <div class="partner-list-item-container__company-container">
                            <div class="partner-list-item-container__company-name">
                                Distributor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partner-list__item">
                    <div class="partner-list-item-container">
                        <div class="partner-list-item-container__logo-container">
                            <div class="partner-list-item-container__logo-img">

                            </div>
                        </div>
                        <div class="partner-list-item-container__info-container">
                            <div class="partner-list-item-container__info-title">
                                Novus Insight (Connecticut Center for Advanced Technology)
                            </div>
                            <div class="partner-list-item-container__info-description">
                                Room 606, No#20 Building, Qibao International, 8633 Lane, Zhongchun Road, Minhang District Shanghai, China
                            </div>
                        </div>
                        <div class="partner-list-item-container__contacts-container">
                            <div class="partner-list-item-container__contacts-website">
                                <a href="#" class="partner-list-item-container__info-link partner-list-item-container__info-link_website">Website</a>
                            </div>
                            <div class="partner-list-item-container__info-phone">
                                <a href="#" class="partner-list-item-container__info-link partner-list-item-container__info-link_phone">+61 2 8001 0250</a>
                            </div>
                        </div>
                        <div class="partner-list-item-container__company-container">
                            <div class="partner-list-item-container__company-name">
                                Distributor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
