<!DOCTYPE html>
<html lang="ru">
@php
	$name = 'name_' . app()->getLocale();
	$surname = 'surname_' . app()->getLocale();
	$position = 'position_' . app()->getLocale();
	$address = 'address_' . app()->getLocale();
	$degree = 'degree_' . app()->getLocale();
	$vcard = 'vcard_' . app()->getLocale();
	$lang = app()->getLocale() === 'en' ? 'ru' : 'en';
@endphp
<head>
    <meta charSet="utf-8" />
    <title>{{ $employee->{$name} }} {{ $employee->{$surname} }}</title>
    <meta property="og:title" content="{{ $employee->{$name} }} {{ $employee->{$surname} }}" />
    <meta property="og:description"
        content="Контакты" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <style data-emotion="mui-style-global 1cxld1v">
        :root {
            --qr-global-font-family-primary: 'Rubik', sans-serif;
            --qr-global-font-family-secondary: 'Red Hat Display', sans-serif;
            --qr-global-font-weight-default: 400;
            --qr-global-font-weight-medium: 500;
            --qr-global-font-weight-bold: 700;
            --qr-global-font-size-super-small: 12px;
            --qr-global-font-size-small: 14px;
            --qr-global-font-size-default: 16px;
            --qr-global-font-size-header-default: 18px;
            --qr-global-font-size-header-medium: 20px;
            --qr-global-font-size-header-large: 22px;
            --qr-global-font-size-header-section: 26px;
            --qr-global-font-size-header-section-large: 30px;
            --qr-global-font-size-header-section-extra-large: 38px;
            --qr-global-font-size-button-default: 18px;
            --qr-global-font-size-button-medium: 20px;
            --qr-global-font-size-button-large: 22px;
            --qr-global-color-white: #FFFFFF;
            --qr-global-color-black: #000000;
            --qr-global-color-blue: #5D82D5;
            --qr-global-color-blue-hover: #3C6BC4;
            --qr-global-color-navy: #2E4370;
            --qr-global-color-red: #EF5D5D;
            --qr-global-color-yellow: #FE8C25;
            --qr-global-color-yellow-hover: #FC7A05;
            --qr-global-color-main-background: #F8F8F8;
            --qr-global-color-icon-grey: #D9DCE1;
            --qr-global-color-dash-grey: rgba(112, 112, 112, 0.15);
            --qr-global-color-lightgrey: #F8F8F8;
            --qr-global-color-lightgrey--prices: #edeef0;
            --qr-global-color-border-form-element: #D9DCE1;
            --qr-global-color-focus-form-element: rgba(63, 126, 247, 0.36);
            --qr-global-color-border-lightgrey: #e6e6e6;
            --qr-global-color-border-dashed-lightgrey: #e8e8e8;
            --qr-global-color-success: #3CBE91;
            --qr-global-color-error: #EF5D5D;
            --qr-global-color-paused: #A0A4AD;
            --qr-global-color-text-primary: #1E1D20;
            --qr-global-color-text-secondary: #424A5C;
            --qr-global-color-text-inactive: #A1A4AC;
            --qr-global-color-button-primary: #FE8C25;
            --qr-global-color-button-primary-hover: #FC7A05;
            --qr-global-color-button-secondary: #5482DB;
            --qr-global-color-button-secondary-hover: #3C6BC4;
            --qr-global-color-button-inactive: #A0A4AD;
            --qr-global-color-button-inactive-hover: #8C8C8C;
        }

        body.no-scroll {
            overflow: hidden;
        }

		.mui-style-b2gbsz .fixedHeight {
			flex: 1 1 0%;
		}

        .stripeInput {
            padding: 15px 24px;
            font-weight: 400;
            font-size: 16px;
            line-height: 1;
            box-sizing: border-box;
            height: 50px;
            border: 1px solid #d9dce1;
            border-radius: 6px;
        }

        .StripeElement--focus {
            border-color: rgba(63, 126, 247, 0.36);
        }

        .StripeElement--invalid {
            border-color: #EF5D5D;
        }

        @media screen and (max-width: 530px) {
            .stripeInput {
                height: 45px;
                padding: 13px 15px 12px 15px;
            }

            .stripeInput>.InputElement {
                font-size: 14px;
            }
        }

        .stripeInput :focus {
            border: 2px solid rgba(63, 126, 247, 0.36);
        }

        .stripeInput :hover {
            border: 2px solid rgba(63, 126, 247, 0.36);
        }

        .stripeInput :active {
            border: 2px solid rgba(63, 126, 247, 0.36);
        }

        .MuiClockPicker-root {
            padding: 14px;
        }

        .MuiClockPicker-root div[role='listbox']:focus {
            outline: none !important;
        }

        .MuiClockPicker-root span.MuiTypography-caption {
            font-weight: 500;
        }

        #lokalise-live-js-panel.flip {
            top: 0;
        }

        #lokalise-live-js-panel.flip .lokalise-live-js-logo {
            -webkit-transform: rotateZ(180deg);
            -moz-transform: rotateZ(180deg);
            -ms-transform: rotateZ(180deg);
            transform: rotateZ(180deg);
        }

        .lokalise-live-js-logo {
            -webkit-transition: -webkit-transform 0.25s;
            transition: transform 0.25s;
            cursor: pointer;
        }

        .lokalise-live-js-edit-icon {
            pointer-events: all;
        }

        .inline {
            display: inline;
        }

        :root,
        :root * {
            scrollbar-color: #aec0ea rgba(93, 130, 213, 0.2);
            scrollbar-width: thin;
        }

        *::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            max-height: 40px;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #aec0ea;
            border-radius: 8px;
            max-height: 40px;
        }

        *::-webkit-scrollbar-track {
            background-color: rgba(93, 130, 213, 0.2);
            border-radius: 8px;
        }

        *::-webkit-scrollbar-thumb:horizontal:hover,
        *::-webkit-scrollbar-thumb:vertical:hover {
            background-color: #5d82d5;
            max-height: 40px;
        }

        *::-webkit-scrollbar-thumb:horizontal:active,
        *::-webkit-scrollbar-thumb:vertical:active {
            background-color: #5d82d5;
            max-height: 40px;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        p,
        figure,
        blockquote,
        dl,
        dd,
        ul {
            margin: 0;
            padding: 0;
        }

        ul,
        ol {
            list-style: none;
        }

        html:focus-within {
            scroll-behavior: smooth;
        }

        html {
            min-height: 100%;
            height: 100%;
        }

        body {
            text-rendering: optimizeSpeed;
            font-family: 'Rubik', sans-serif;
            line-height: 1.3;
            font-weight: 400;
            font-size: 16px;
            font-weight: 500;
            font-family: 'Rubik', sans-serif;
            color: #1e1d20;
            min-height: 100%;
            height: 100%;
            letter-spacing: 0;
        }

        a:not([class]) {
            text-decoration-skip-ink: auto;
        }

        img,
        svg,
        picture {
            display: block;
        }

        input,
        button,
        textarea,
        select {
            font: inherit;
            background: none;
            padding: 0;
            margin: 0;
        }

        button {
            border: none;
            cursor: pointer;
        }

        @media (prefers-reduced-motion: reduce) {
            html:focus-within {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                -webkit-animation-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
                -webkit-animation-iteration-count: 1 !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px #ffff inset;
            -webkit-transition: background-color 5000s ease-in-out 0s;
            transition: background-color 5000s ease-in-out 0s;
        }

        .select-component-paper {
            -webkit-transition: none !important;
            transition: none !important;
        }

        #__next {
            min-height: 100%;
            height: 100%;
        }
    </style>
    <style data-emotion="mui-style-global ez57s2">
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            box-sizing: border-box;
            -webkit-text-size-adjust: 100%;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        strong,
        b {
            font-weight: 700;
        }

        body {
            margin: 0;
            color: rgba(0, 0, 0, 0.87);
            font-family: 'Rubik', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            background-color: #fff;
        }

        @media print {
            body {
                background-color: #fff;
            }
        }

        body::backdrop {
            background-color: #fff;
        }
    </style>
    <style
        data-emotion="mui-style 2xbal6 1f8tyxl 1aydud8 mu3z1 ucufxf 1nvhb8h 1ew184v 6xugel wqv4tk j07hu6 fbyc04 vfs1k6 1b2accp 1g6etrx 1xqmslm 5414kd 1jlcbwk 1f9c5e6 1hj3jxj skz180 10hul0x 14kkv6o iqi8ol zt2422 1ohb1y3">
        .mui-style-2xbal6 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            min-height: 100vh;
            position: relative;
            --qr-template-shared-facilities-container-gap: 16px;
            --qr-template-shared-facilities-container-padding: 24px 20px;
            --qr-template-shared-facilities-container-border-radius: 10px;
            --qr-template-shared-facilities-item-width: 96px;
            --qr-template-shared-facilities-item-gap: 8px;
            --qr-template-shared-facilities-item-icon-wrapper-size: 40px;
            --qr-template-shared-facilities-item-caption-color: #424a5c;
            --qr-template-shared-facilities-item-caption-font-weight: 500;
            --qr-template-shared-facilities-item-caption-font-size: 14px;
            --qr-template-shared-facilities-item-caption-line-height: 18px;
            --qr-template-shared-article-container-gap: 16px;
            --qr-template-shared-article-container-border-color: #f0f0f0;
            --qr-template-shared-article-container-padding-bottom: 12px;
            --qr-template-shared-article-icon-wrapper-width: 24px;
            --qr-template-shared-article-icon-wrapper-padding-top: 0;
            --qr-template-shared-article-icon-wrapper-justify-content: flex-start;
            --qr-template-shared-article-icon-wrapper-align-items: flex-start;
            --qr-template-shared-article-icon-wrapper-color: inherit;
            --qr-template-shared-article-content-gap: 4px;
            --qr-template-shared-article-content-group-gap: 4px;
            --qr-template-shared-article-title-font-size: 14px;
            --qr-template-shared-article-title-line-height: 20px;
            --qr-template-shared-article-content-group-title-font-size: 14px;
            --qr-template-shared-article-content-group-title-line-height: 20px;
            --qr-template-shared-article-description-font-size: 16px;
            --qr-template-shared-article-description-line-height: 24px;
            --qr-template-shared-article-description-font-weight: 400;
            --qr-template-shared-article-list-gap: 32px;
            --qr-template-shared-article-link-font-size: 16px;
            --qr-template-shared-article-link-line-height: 28px;
            --qr-template-shared-article-icon-wrapper-width: 23px;
            --qr-template-shared-social-networks-row-gap: 32px;
            --qr-template-shared-social-networks-icon-link-size: 80px;
            --qr-template-shared-social-networks-min-height: 100%;
            --qr-template-shared-social-networks-align-items: center;
            --qr-template-shared-social-networks-justify-content: center;
            --qr-template-shared-fixed-height-background-height: 364px;
            --qr-template-shared-colors-primary: #000000;
            --qr-template-shared-colors-primary-contrast: #ffffff;
            --qr-template-shared-colors-secondary: #000000;
            --qr-template-shared-colors-secondary-contrast: #ffffff;
            --qr-template-shared-card-width: 680px;
            --qr-template-shared-card-border-radius: 16px;
            --qr-template-shared-card-box-shadow: 0px 1px 15px rgba(12, 37, 54, 0.15);
            --qr-template-shared-card-flex: 1;
            --qr-template-shared-card-margin: 40px auto;
            --qr-template-shared-card-min-height: 100%;
            --qr-template-shared-negative-letter-spacing: -0.408px;
            --qr-template-shared-article-icon-wrapper-justify-content: center;
            --qr-template-vcard-header-padding: 70px 60px 44px 60px;
            --qr-template-vcard-profile-figure-gap: 12px;
            --qr-template-vcard-image-container-background: #ffffff;
            --qr-template-vcard-image-container-size: 120px;
            --qr-template-vcard-image-container-border-radius: 20px;
            --qr-template-vcard-profile-figure-caption-font-weight: 600;
            --qr-template-vcard-profile-figure-caption-font-size: 32px;
            --qr-template-vcard-profile-figure-caption-line-height: 40px;
            --qr-template-vcard-tabs-container-padding: 0 20px;
            --qr-template-vcard-tab-padding: 6px 24px;
            --qr-template-vcard-header-gap: 24px;
            --qr-template-vcard-tab-panel-padding: 70px;
            --qr-template-vcard-tab-padding: 6px 24px;
            --qr-template-vcard-tab-font-size: 16px;
            --qr-template-vcard-tab-line-height: 20px;
            --qr-template-vcard-tab-border-radius: 8px 8px 0px 0px;
            --qr-template-vcard-header-button-font-size: 12px;
            --qr-template-vcard-header-button-icon-size: 16px;
            --qr-template-vcard-header-button-padding: 11px 12px;
            --qr-template-vcard-header-button-border-width: 2px;
            --qr-template-vcard-active-tab-background-color: #ffffff;
            --qr-template-vcard-active-tab-text-color: #000000;
            --qr-template-vcard-tab-panel-background-color: #ffffff;
            --qr-template-vcard-tab-panel-text-color: #000000;
            --qr-template-shared-fixed-height-background-height: 406px;
        }

        @media (max-width: 768px) {
            .mui-style-2xbal6 {
                --qr-template-shared-facilities-container-gap: 8px;
                --qr-template-shared-facilities-container-padding: 20px 18px;
                --qr-template-shared-facilities-container-border-radius: 10px;
                --qr-template-shared-facilities-item-width: 66px;
                --qr-template-shared-facilities-item-gap: 8px;
                --qr-template-shared-facilities-item-icon-wrapper-size: 32px;
                --qr-template-shared-facilities-item-caption-color: #424a5c;
                --qr-template-shared-facilities-item-caption-font-weight: 500;
                --qr-template-shared-facilities-item-caption-font-size: 12px;
                --qr-template-shared-facilities-item-caption-line-height: 16px;
                --qr-template-shared-article-link-font-size: 16px;
                --qr-template-shared-article-link-line-height: 24px;
                --qr-template-shared-article-title-font-size: 14px;
                --qr-template-shared-article-list-gap: 12px;
                --qr-template-shared-article-container-padding-bottom: 20px;
                --qr-template-shared-social-networks-icon-link-size: 48px;
                --qr-template-shared-card-margin: 0;
                --qr-template-shared-card-width: 100%;
                --qr-template-shared-card-border-radius: 0px;
                --qr-template-shared-card-box-shadow: none;
                --qr-template-vcard-header-padding: 36px;
                --qr-template-vcard-image-container-size: 95px;
                --qr-template-vcard-profile-figure-caption-font-size: 24px;
                --qr-template-vcard-profile-figure-caption-line-height: 32px;
                --qr-template-vcard-header-gap: 16px;
                --qr-template-vcard-tab-padding: 6px 18px;
                --qr-template-vcard-tab-panel-padding: 32px;
                --qr-template-vcard-header-button-border-width: 2px;
            }
        }

        @media (max-width: 350px) {
            .mui-style-2xbal6 {
                --qr-template-shared-facilities-container-gap: 4px;
                --qr-template-shared-facilities-container-padding: 13px 5px;
                --qr-template-shared-facilities-container-border-radius: 8px;
                --qr-template-shared-facilities-item-width: 44px;
                --qr-template-shared-facilities-item-gap: 4px;
                --qr-template-shared-facilities-item-icon-wrapper-size: 20px;
                --qr-template-shared-facilities-item-caption-color: #424a5c;
                --qr-template-shared-facilities-item-caption-font-weight: 500;
                --qr-template-shared-facilities-item-caption-font-size: 8px;
                --qr-template-shared-facilities-item-caption-line-height: 10px;
                --qr-template-shared-article-container-gap: 10px;
                --qr-template-shared-article-container-padding-bottom: 8px;
                --qr-template-shared-article-icon-wrapper-width: 16px;
                --qr-template-shared-article-icon-wrapper-padding-top: 0;
                --qr-template-shared-article-content-gap: 4px;
                --qr-template-shared-article-content-group-gap: 2px;
                --qr-template-shared-article-title-font-size: 10px;
                --qr-template-shared-article-title-line-height: 14px;
                --qr-template-shared-article-content-group-title-font-size: 10px;
                --qr-template-shared-article-content-group-title-line-height: 14px;
                --qr-template-shared-article-description-font-size: 11px;
                --qr-template-shared-article-description-line-height: 15px;
                --qr-template-shared-article-list-gap: 12px;
                --qr-template-shared-article-link-font-size: 11px;
                --qr-template-shared-article-link-line-height: 15px;
                --qr-template-shared-article-icon-wrapper-width: 15px;
                --qr-template-shared-social-networks-icon-link-size: 40px;
                --qr-template-shared-social-networks-row-gap: 24px;
                --qr-template-shared-fixed-height-background-height: 0px;
                --qr-template-shared-card-margin: 0;
                --qr-template-shared-card-width: 100%;
                --qr-template-shared-card-border-radius: 0px;
                --qr-template-shared-card-box-shadow: none;
                --qr-template-shared-negative-letter-spacing: -0.26656px;
                --qr-template-vcard-header-padding: 16px 20px 16px 20px;
                --qr-template-vcard-header-gap: 17px;
                --qr-template-vcard-profile-figure-gap: 9px;
                --qr-template-vcard-image-container-size: 63px;
                --qr-template-vcard-tab-padding: 6px 19px;
                --qr-template-vcard-tab-panel-padding: 11px 20px;
                --qr-template-vcard-tabs-container-padding: 0 20px;
                --qr-template-vcard-tab-padding: 4px 12px;
                --qr-template-vcard-tab-font-size: 9px;
                --qr-template-vcard-tab-line-height: 11px;
                --qr-template-vcard-tab-border-radius: 4px 4px 0px 0px;
                --qr-template-vcard-header-button-font-size: 8px;
                --qr-template-vcard-header-button-icon-size: 10px;
                --qr-template-vcard-header-button-padding: 7px 8px;
                --qr-template-vcard-header-button-border-width: 1px;
                --qr-template-vcard-profile-figure-caption-font-size: 15px;
                --qr-template-vcard-profile-figure-caption-line-height: 20px;
            }
        }

        .mui-style-2xbal6.embedded {
            min-height: 100%;
            --qr-template-shared-facilities-container-gap: 4px;
            --qr-template-shared-facilities-container-padding: 13px 5px;
            --qr-template-shared-facilities-container-border-radius: 8px;
            --qr-template-shared-facilities-item-width: 44px;
            --qr-template-shared-facilities-item-gap: 4px;
            --qr-template-shared-facilities-item-icon-wrapper-size: 20px;
            --qr-template-shared-facilities-item-caption-color: #424a5c;
            --qr-template-shared-facilities-item-caption-font-weight: 500;
            --qr-template-shared-facilities-item-caption-font-size: 8px;
            --qr-template-shared-facilities-item-caption-line-height: 10px;
            --qr-template-shared-article-container-gap: 10px;
            --qr-template-shared-article-container-padding-bottom: 8px;
            --qr-template-shared-article-icon-wrapper-width: 16px;
            --qr-template-shared-article-icon-wrapper-padding-top: 0;
            --qr-template-shared-article-content-gap: 4px;
            --qr-template-shared-article-content-group-gap: 2px;
            --qr-template-shared-article-title-font-size: 10px;
            --qr-template-shared-article-title-line-height: 14px;
            --qr-template-shared-article-content-group-title-font-size: 10px;
            --qr-template-shared-article-content-group-title-line-height: 14px;
            --qr-template-shared-article-description-font-size: 11px;
            --qr-template-shared-article-description-line-height: 15px;
            --qr-template-shared-article-list-gap: 12px;
            --qr-template-shared-article-link-font-size: 11px;
            --qr-template-shared-article-link-line-height: 15px;
            --qr-template-shared-article-icon-wrapper-width: 15px;
            --qr-template-shared-social-networks-icon-link-size: 40px;
            --qr-template-shared-social-networks-row-gap: 24px;
            --qr-template-shared-fixed-height-background-height: 0px;
            --qr-template-shared-card-margin: 0;
            --qr-template-shared-card-width: 100%;
            --qr-template-shared-card-border-radius: 0px;
            --qr-template-shared-card-box-shadow: none;
            --qr-template-shared-negative-letter-spacing: -0.26656px;
            --qr-template-vcard-header-padding: 16px 20px 16px 20px;
            --qr-template-vcard-header-gap: 17px;
            --qr-template-vcard-profile-figure-gap: 9px;
            --qr-template-vcard-image-container-size: 63px;
            --qr-template-vcard-tab-padding: 6px 19px;
            --qr-template-vcard-tab-panel-padding: 11px 20px;
            --qr-template-vcard-tabs-container-padding: 0 20px;
            --qr-template-vcard-tab-padding: 4px 12px;
            --qr-template-vcard-tab-font-size: 9px;
            --qr-template-vcard-tab-line-height: 11px;
            --qr-template-vcard-tab-border-radius: 4px 4px 0px 0px;
            --qr-template-vcard-header-button-font-size: 8px;
            --qr-template-vcard-header-button-icon-size: 10px;
            --qr-template-vcard-header-button-padding: 7px 8px;
            --qr-template-vcard-header-button-border-width: 1px;
            --qr-template-vcard-profile-figure-caption-font-size: 15px;
            --qr-template-vcard-profile-figure-caption-line-height: 20px;
        }

        .mui-style-1f8tyxl {
			position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            width: var(--qr-template-shared-card-width);
            max-width: var(--qr-template-shared-card-width);
            border-radius: var(--qr-template-shared-card-border-radius);
            box-shadow: var(--qr-template-shared-card-box-shadow);
            margin: var(--qr-template-shared-card-margin);
            -webkit-flex: var(--qr-template-shared-card-flex);
            -ms-flex: var(--qr-template-shared-card-flex);
            flex: var(--qr-template-shared-card-flex);
            overflow: hidden;
            word-break: break-all;
            word-break: break-word;
        }

        .mui-style-1aydud8 {
            padding: var(--qr-template-vcard-header-padding);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            gap: var(--qr-template-vcard-header-gap);
            background: var(--qr-template-shared-colors-primary);
            color: var(--qr-template-shared-colors-primary-contrast);
        }

        .mui-style-mu3z1 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            gap: var(--qr-template-vcard-profile-figure-gap);
            width: 100%;
        }

        .mui-style-ucufxf {
            width: var(--qr-template-vcard-image-container-size);
            height: var(--qr-template-vcard-image-container-size);
            border-radius: var(--qr-template-vcard-image-container-border-radius);
            background: var(--qr-template-vcard-image-container-background);
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #222222;
        }

        .mui-style-ucufxf img {
            width: 100%;
            height: 100%;
        }

        .mui-style-1nvhb8h {
            font-weight: var(--qr-template-vcard-profile-figure-caption-font-weight);
            font-size: var(--qr-template-vcard-profile-figure-caption-font-size);
            line-height: var(--qr-template-vcard-profile-figure-caption-line-height);
            text-align: center;
            word-break: break-all;
            word-break: break-word;
        }

        .mui-style-1ew184v {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            min-width: 64px;
            padding: 5px 15px;
            border-radius: 4px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border: 1px solid rgba(25, 118, 210, 0.5);
            color: #1976d2;
            box-shadow: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 20px;
            line-height: 130%;
            text-transform: none;
            word-break: break-all;
            word-break: break-word;
            text-transform: none;
            font-size: var(--qr-template-vcard-header-button-font-size);
            padding: var(--qr-template-vcard-header-button-padding);
            border-width: var(--qr-template-vcard-header-button-border-width, 1px);
            font-weight: 600;
            color: var(--qr-template-shared-colors-secondary, #000000);
            border-color: var(--qr-template-shared-colors-secondary, #000000);
            margin: auto;
            overflow: hidden;
            position: relative;
            line-height: 1.3;
            border-radius: 4px;
        }

        .mui-style-1ew184v::-moz-focus-inner {
            border-style: none;
        }

        .mui-style-1ew184v.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .mui-style-1ew184v {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .mui-style-1ew184v:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(25, 118, 210, 0.04);
            border: 1px solid #1976d2;
        }

        @media (hover: none) {
            .mui-style-1ew184v:hover {
                background-color: transparent;
            }
        }

        .mui-style-1ew184v.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            border: 1px solid rgba(0, 0, 0, 0.12);
        }

        .mui-style-1ew184v:hover {
            box-shadow: none;
        }

        .mui-style-1ew184v.Mui-focusVisible {
            box-shadow: none;
        }

        .mui-style-1ew184v:active {
            box-shadow: none;
        }

        .mui-style-1ew184v.Mui-disabled {
            box-shadow: none;
        }

        .mui-style-1ew184v .span {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .mui-style-1ew184v .MuiButton-startIcon {
            margin-left: 0;
            margin-right: 4px;
            width: var(--qr-template-vcard-header-button-icon-size);
        }

        .mui-style-1ew184v .MuiButton-startIcon svg {
            width: 100%;
        }

        .mui-style-1ew184v:hover {
            background: none;
            border-color: currentColor;
        }

        .mui-style-6xugel {
            display: inherit;
            margin-right: 8px;
            margin-left: -4px;
        }

        .mui-style-6xugel>*:nth-of-type(1) {
            font-size: 20px;
        }

        .mui-style-wqv4tk {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .mui-style-j07hu6 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            overflow: hidden;
            padding: var(--qr-template-vcard-tabs-container-padding);
            background: var(--qr-template-shared-colors-primary);
            color: var(--qr-template-shared-colors-primary-contrast);
        }

        .mui-style-fbyc04 {
            padding: var(--qr-template-vcard-tab-padding);
            font-size: var(--qr-template-vcard-tab-font-size);
            line-height: var(--qr-template-vcard-tab-line-height);
            border-radius: var(--qr-template-vcard-tab-border-radius);
            font-weight: 500;
            background: transparent;
            color: inherit;
            opacity: 0.6;
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin: 0;
        }

        .mui-style-fbyc04 .label {
            overflow: hidden;
            display: grid;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .mui-style-fbyc04[data-active='true'] {
            opacity: 1;
            background: var(--qr-template-vcard-active-tab-background-color);
            color: var(--qr-template-vcard-active-tab-text-color);
        }

        .mui-style-vfs1k6 {
            background: var(--qr-template-vcard-tab-panel-background-color);
            color: var(--qr-template-vcard-tab-panel-text-color);
            padding: var(--qr-template-vcard-tab-panel-padding);
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .mui-style-vfs1k6[data-visible='false'] {
            display: none;
        }

        .mui-style-1b2accp {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0;
            margin: 0;
            gap: var(--qr-template-shared-article-list-gap);
        }

        .mui-style-1g6etrx {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: var(--qr-template-shared-article-container-gap);
        }

        @media (max-width: 411px) {
            .mui-style-1g6etrx {
                gap: 10px;
            }
        }

        .mui-style-1g6etrx:not(:last-child) {
            border-bottom: 1px solid;
            border-color: var(--qr-template-shared-article-container-border-color);
            padding-bottom: var(--qr-template-shared-article-container-padding-bottom);
        }

        .mui-style-1xqmslm {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-align-items: var(--qr-template-shared-article-icon-wrapper-align-items, flex-start);
            -webkit-box-align: var(--qr-template-shared-article-icon-wrapper-align-items, flex-start);
            -ms-flex-align: var(--qr-template-shared-article-icon-wrapper-align-items, flex-start);
            align-items: var(--qr-template-shared-article-icon-wrapper-align-items, flex-start);
            width: var(--qr-template-shared-article-icon-wrapper-width);
            min-width: var(--qr-template-shared-article-icon-wrapper-width);
            padding-top: var(--qr-template-shared-article-icon-wrapper-padding-top);
            color: var(--qr-template-shared-article-icon-wrapper-color, inherit);
        }

        .mui-style-1xqmslm svg,
        .mui-style-1xqmslm img {
            width: var(--qr-template-shared-article-icon-wrapper-width);
            height: var(--qr-template-shared-article-icon-wrapper-width);
        }

        .mui-style-5414kd {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: var(--qr-template-shared-article-content-gap);
            word-break: break-all;
            word-break: break-word;
        }

        .mui-style-1jlcbwk {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: var(--qr-template-shared-article-content-group-gap);
            word-break: break-all;
            word-break: break-word;
        }

        .mui-style-1f9c5e6 {
            font-size: var(--qr-template-shared-article-content-group-title-font-size);
            line-height: var(--qr-template-shared-article-content-group-title-line-height);
            font-weight: 500;
        }

        .mui-style-1hj3jxj {
            font-size: var(--qr-template-shared-article-link-font-size);
            line-height: var(--qr-template-shared-article-link-line-height);
            color: #5D82D5;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .mui-style-skz180 {
            display: inline-grid;
            overflow: hidden;
        }

        .mui-style-10hul0x {
            font-size: var(--qr-template-shared-article-description-font-size);
            line-height: var(--qr-template-shared-article-description-line-height);
            font-weight: var(--qr-template-shared-article-description-font-weight);
        }

        .mui-style-14kkv6o {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: var(--qr-template-shared-social-networks-min-height, 100%);
            -webkit-align-items: var(--qr-template-shared-social-networks-align-items, center);
            -webkit-box-align: var(--qr-template-shared-social-networks-align-items, center);
            -ms-flex-align: var(--qr-template-shared-social-networks-align-items, center);
            align-items: var(--qr-template-shared-social-networks-align-items, center);
            -webkit-box-pack: var(--qr-template-shared-social-networks-justify-content, center);
            -ms-flex-pack: var(--qr-template-shared-social-networks-justify-content, center);
            -webkit-justify-content: var(--qr-template-shared-social-networks-justify-content, center);
            justify-content: var(--qr-template-shared-social-networks-justify-content, center);
            gap: var(--qr-template-shared-social-networks-row-gap);
        }

        .mui-style-iqi8ol {
            position: absolute;
            z-index: -3;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .mui-style-iqi8ol .fixedHeight {
            -webkit-flex: 0;
            -ms-flex: 0;
            flex: 0;
        }

        .mui-style-zt2422 {
            height: var(--qr-template-shared-fixed-height-background-height);
            min-height: var(--qr-template-shared-fixed-height-background-height);
			background: white;
        }
		
        .mui-style-1ohb1y3 {
			background: var(--qr-template-shared-colors-primary);
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
    </style>
	<style>
		.to-site {
			color: white;
			max-width: 80px;
		}

		@media (min-width: 500px) {
			.to-site {
				max-width: 200px;
			}
		}
	</style>
    <link rel="preload"
        data-href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&amp;display=swap" />
    <link rel="stylesheet"
        data-href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&amp;display=swap" />
	<noscript data-n-css></noscript>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" />

	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div id="__next">
        <div class="Toastify"></div><!--$-->
        <div class="qr-template-shared-container mui-style-2xbal6">
            <style>
                .qr-template-shared-container {
                    --qr-template-shared-colors-primary: rgb(4%, 18%, 44%);
                    --qr-template-shared-colors-primary-contrast: #ffffff;
                    --qr-template-shared-colors-secondary: rgb(100%, 100%, 100%);
                    --qr-template-shared-colors-secondary-contrast: #000000;


                }
            </style>
            <div id="VCard" class="mui-style-1f8tyxl" x-data="{
				tab: 'contact',
			}">
				<div style="position: absolute; top: 10px; right: 20px;">
					<a style="color: #fff; font-weight:500;" href="{{ route('language', $lang) }}">
						{{ strtoupper($lang) }}
					</a>
				</div>
				<div style="position: absolute; top: 10px; left: 20px;">
					<a href="/" style="text-decoration: none">
						<img src="/images/logo.svg" alt="Sudo logo" width="60px">
						<div class="to-site">{{ __('employee.to the website') }}</div>
					</a>
				</div>
                <div class="mui-style-1aydud8">
                    <figure class="mui-style-mu3z1">
                        <div class="mui-style-ucufxf">
							@unless (empty($employee->avatar))
								<img
									src="/storage/{{ $employee->avatar }}"
									alt draggable="false" />
							@else
								<img
									src="/images/default_avatar.jpg"
									alt draggable="false" />
							@endunless
							</div>
                        <figcaption class="mui-style-1nvhb8h">
							{{ $employee->{$name} }} @if(app()->getLocale() === 'ru'){{ $employee->patronimic }} @endif{{ $employee->{$surname} }}
						</figcaption>
						@unless (empty($employee->{$degree}))
							<div>{{ $employee->{$degree} }}</div>
						@endunless
                    </figure>

					@unless (empty($employee->{$vcard}))
						<a href="/storage/{{ $employee->{$vcard} }}" 
							class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-disableElevation mui-style-1ew184v"
							tabindex="0" type="button">
							<span
								class="MuiButton-startIcon MuiButton-iconSizeMedium mui-style-6xugel">
								<svg width="16"
									height="16" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M12 4c.6 0 1 .4 1 1v14a1 1 0 1 1-2 0V5c0-.6.4-1 1-1Z"
										fill="var(--plus-icon-color, currentColor)"></path>
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4 12c0-.6.4-1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Z"
										fill="var(--plus-icon-color, currentColor)"></path>
								</svg>
							</span>
							<span data-lokalise="true" data-key="qrViews.vCard.button">
								{{ __('employee.Add to contacts') }}
							</span>
						</a>
					@endunless
                </div>

                <div class="mui-style-j07hu6">
					<button 
						type="button" 
						title="Contact"
                        class="mui-style-fbyc04" 
						:data-active="tab === 'contact'" 
						@click="tab = 'contact'"
					>
						<span class="label">
							<span data-lokalise="true"
                                data-key="qrViews.vCard.tabs.first.label"
                                class="mui-style-wqv4tk">
								{{ __('employee.Contact') }}
							</span>
						</span>
					</button>
					<button 
						type="button"
						title="Company" 
						class="mui-style-fbyc04" 
                        :data-active="tab === 'company'" 
						@click="tab = 'company'"
					>
						<span class="label">
							<span
                                data-lokalise="true" data-key="qrViews.vCard.tabs.second.label"
                                class="mui-style-wqv4tk">
								{{ __('employee.Company') }}
							</span>
						</span>
					</button>
					@if ($employee->socials->isNotEmpty())
						<button 
							type="button"
							title="Socials" 
							class="mui-style-fbyc04"
							:data-active="tab === 'socials'" 
							@click="tab = 'socials'"
						>
							<span class="label">
								<span
									data-lokalise="true" data-key="qrViews.vCard.tabs.third.label"
									class="mui-style-wqv4tk">
									{{ __('employee.Socials') }}
								</span>
							</span>
						</button>
					@endif
				</div>

                <div data-visible="true" x-show="tab === 'contact'" class="mui-style-vfs1k6">
                    <div class="mui-style-1b2accp">
						@unless (empty($employee->{$position}))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm">
									<svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19 4h-4V3a3 3 0 0 0-6 0v1H5a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h14a5 5 0 0 0 5-5V9a5 5 0 0 0-5-5Zm-8-1a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0V3Zm11 16a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V9a3 3 0 0 1 3-3h4.18a2.98 2.98 0 0 0 5.64 0H19a3 3 0 0 1 3 3v10Zm-12-9H5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1Zm-1 8H6v-6h3v6Zm11-3a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1Zm0-4a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1Zm-2 8a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 1 1Z"
											fill="var(--id-badge-icon-color, currentColor)"></path>
									</svg>
								</div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true"
											data-key="qrViews.vCard.listItems.position.title"
											class="mui-style-1f9c5e6">
											{{ __('employee.Profession') }}
										</span>
										<span
											class="mui-style-10hul0x">
											{{ $employee->{$position} }}
										</span>
									</span>
								</div>
							</div>
						@endunless

						@unless (empty($employee->phone))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.98 7.023v-4a1 1 0 1 1 2 0v2.611C17.61 5 21.681.908 22.273.316a1 1 0 1 1 1.414 1.414c-.592.592-4.642 4.665-5.268 5.293h2.561a1 1 0 1 1 0 2h-4a2 2 0 0 1-2-2Zm8.095 9.739a3.1 3.1 0 0 1 0 4.378l-.912 1.05c-8.19 7.838-28.119-12.084-20.4-20.3l1.15-1A3.081 3.081 0 0 1 7.24.929c.031.03 1.883 2.438 1.883 2.438a3.109 3.109 0 0 1-.006 4.282L7.96 9.105a12.783 12.783 0 0 0 6.931 6.945l1.465-1.165a3.1 3.1 0 0 1 4.28-.006s2.41 1.853 2.44 1.883ZM21.7 18.216s-2.393-1.842-2.424-1.872a1.1 1.1 0 0 0-1.549 0c-.027.026-2.044 1.634-2.044 1.634a1 1 0 0 1-.979.152A15.008 15.008 0 0 1 5.88 9.319a1 1 0 0 1 .145-1s1.608-2.014 1.635-2.04a1.1 1.1 0 0 0 0-1.549c-.03-.03-1.872-2.425-1.872-2.425a1.1 1.1 0 0 0-1.51.039l-1.15 1c-5.642 6.783 11.63 23.097 17.573 17.483l.912-1.051a1.12 1.12 0 0 0 .088-1.56Z"
											fill="var(--incoming-call-icon-color, currentColor)"></path>
									</svg></div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true" data-key="qrViews.vCard.listItems.phone.title" class="mui-style-1f9c5e6">
											{{ __('employee.Mobile phone') }}
										</span>
											<a href="tel:+{{ preg_replace('~ |-~', '', $employee->phone) }}" title="+{{ preg_replace('~ |-~', '', $employee->phone) }}" class="mui-style-1hj3jxj">
											<span class="mui-style-skz180">
												<span class="mui-style-wqv4tk">
													+{{ $employee->phone }}
												</span>
											</span>
										</a>
									</span>
								</div>
							</div>
						@endunless

						@unless(empty($employee->email))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#id71361)">
											<path
												d="M19 1H5a5 5 0 0 0-5 5v12a5 5 0 0 0 5 5h14a5 5 0 0 0 5-5V6a5 5 0 0 0-5-5ZM5 3h14a3 3 0 0 1 2.78 1.89l-7.66 7.66a3 3 0 0 1-4.24 0L2.22 4.89A3 3 0 0 1 5 3Zm14 18H5a3 3 0 0 1-3-3V7.5l6.46 6.46a5 5 0 0 0 7.08 0L22 7.5V18a3 3 0 0 1-3 3Z"
												fill="var(--envelope-icon-color, currentColor)"></path>
										</g>
										<defs>
											<clipPath id="id71361">
												<path fill="#fff" d="M0 0h24v24H0z"></path>
											</clipPath>
										</defs>
									</svg></div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true"
											data-key="qrViews.vCard.listItems.email.title"
											class="mui-style-1f9c5e6">
											{{ __('employee.Email') }}
										</span>
										<a
											href="mailto:{{ $employee->email }}"
											title="{{ $employee->email }}" class="mui-style-1hj3jxj">
											<span
												class="mui-style-skz180">
												<span class="mui-style-wqv4tk">
													<span
														class="__cf_email__"
														data-cfemail="4c3f622b293e2f0c3f3928236238292d21">
														{{ $employee->email }}
													</span>
												</span>
											</span>
										</a>
									</span>
								</div>
							</div>
						@endunless
                    </div>
                </div>

                <div data-visible="true" class="mui-style-vfs1k6" x-show="tab === 'company'">
                    <div class="mui-style-1b2accp">
						@unless (empty(contacts()->company_name))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm">
									<svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#id71364)">
											<path
												d="M7 14a1 1 0 0 1-1 1H5a1 1 0 0 1 0-2h1a1 1 0 0 1 1 1Zm4-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm-5 4H5a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2ZM6 5H5a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 1 0 0-2ZM6 9H5a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm13 1v9a5.006 5.006 0 0 1-5 5H5a5.006 5.006 0 0 1-5-5V5a5.006 5.006 0 0 1 5-5h6a5.006 5.006 0 0 1 5 5h3a5.006 5.006 0 0 1 5 5ZM5 22h9V5a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3Zm17-12a3 3 0 0 0-3-3h-3v15h3a3 3 0 0 0 3-3v-9Zm-3 3a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm0 4a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm0-8a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z"
												fill="var(--building-icon-color, currentColor)"></path>
										</g>
										<defs>
											<clipPath id="id71364">
												<path fill="#fff" d="M0 0h24v24H0z"></path>
											</clipPath>
										</defs>
									</svg>
								</div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true"
											data-key="qrViews.vCard.listItems.company.title"
											class="mui-style-1f9c5e6">
											{{ __('employee.Company') }}
										</span>
										<span class="mui-style-10hul0x">
											{{ contacts()->company_name }}
										</span>
									</span>
								</div>
							</div>
						@endunless

						@unless (empty(contacts()->company_phone))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.98 7.023v-4a1 1 0 1 1 2 0v2.611C17.61 5 21.681.908 22.273.316a1 1 0 1 1 1.414 1.414c-.592.592-4.642 4.665-5.268 5.293h2.561a1 1 0 1 1 0 2h-4a2 2 0 0 1-2-2Zm8.095 9.739a3.1 3.1 0 0 1 0 4.378l-.912 1.05c-8.19 7.838-28.119-12.084-20.4-20.3l1.15-1A3.081 3.081 0 0 1 7.24.929c.031.03 1.883 2.438 1.883 2.438a3.109 3.109 0 0 1-.006 4.282L7.96 9.105a12.783 12.783 0 0 0 6.931 6.945l1.465-1.165a3.1 3.1 0 0 1 4.28-.006s2.41 1.853 2.44 1.883ZM21.7 18.216s-2.393-1.842-2.424-1.872a1.1 1.1 0 0 0-1.549 0c-.027.026-2.044 1.634-2.044 1.634a1 1 0 0 1-.979.152A15.008 15.008 0 0 1 5.88 9.319a1 1 0 0 1 .145-1s1.608-2.014 1.635-2.04a1.1 1.1 0 0 0 0-1.549c-.03-.03-1.872-2.425-1.872-2.425a1.1 1.1 0 0 0-1.51.039l-1.15 1c-5.642 6.783 11.63 23.097 17.573 17.483l.912-1.051a1.12 1.12 0 0 0 .088-1.56Z"
											fill="var(--incoming-call-icon-color, currentColor)"></path>
									</svg></div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true" data-key="qrViews.vCard.listItems.phone.title" class="mui-style-1f9c5e6">
											{{ __('employee.Phone') }}
										</span>
											<a href="tel:+{{ preg_replace('~\D~', '', contacts()->company_phone) }}" title="+{{ preg_replace('~ |-~', '', contacts()->company_phone) }}" class="mui-style-1hj3jxj">
											<span class="mui-style-skz180">
												<span class="mui-style-wqv4tk">
													+{{ contacts()->company_phone }}
												</span>
											</span>
										</a>
									</span>
								</div>
							</div>
						@endunless

						@unless (empty(contacts()->website))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm"><svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#id71362)">
											<path
												d="M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24Zm8.65 7h-3.22a19.67 19.67 0 0 0-2.82-4.64c2.54.69 4.71 2.36 6.04 4.64Zm-4.15 5c0 1.02-.17 2.03-.48 3H7.98c-.31-.97-.47-1.98-.48-3 0-1.02.17-2.03.48-3h8.04c.31.97.47 1.98.48 3Zm-7.72 5h6.44A19.62 19.62 0 0 1 12 21.59 19.57 19.57 0 0 1 8.78 17Zm0-10A19.62 19.62 0 0 1 12 2.41 19.57 19.57 0 0 1 15.22 7H8.78Zm.62-4.64A19.68 19.68 0 0 0 6.57 7H3.35A10.03 10.03 0 0 1 9.4 2.36ZM2.46 9H5.9c-.26.98-.4 1.99-.4 3s.14 2.02.4 3H2.46a10 10 0 0 1 0-6Zm.9 8h3.21a19.68 19.68 0 0 0 2.83 4.64A10.03 10.03 0 0 1 3.35 17Zm11.25 4.64A19.67 19.67 0 0 0 17.43 17h3.22a10.03 10.03 0 0 1-6.04 4.64ZM21.54 15H18.1c.26-.98.4-1.99.4-3s-.14-2.02-.4-3h3.44a10 10 0 0 1 0 6Z"
												fill="var(--globe-icon-color, currentColor)"></path>
										</g>
										<defs>
											<clipPath id="id71362">
												<path fill="#fff" d="M0 0h24v24H0z"></path>
											</clipPath>
										</defs>
									</svg></div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true"
											data-key="qrViews.vCard.listItems.website.title"
											class="mui-style-1f9c5e6">
											{{ __('employee.Personal website') }}
										</span><a href="{{ contacts()->website }}"
											target="_blank" rel="nofollow ugc" title="{{ contacts()->website }}"
											class="mui-style-1hj3jxj"><span class="mui-style-skz180"><span
													class="mui-style-wqv4tk">{{ contacts()->website }}</span></span></a></span>
								</div>
							</div>
						@endunless

						@unless (empty(contacts()->location))
							<div class="mui-style-1g6etrx">
								<div class="mui-style-1xqmslm">
									<svg width="24" height="24" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#id71363)" fill="var(--map-marker-icon-color, currentColor)">
											<path d="M12 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm0 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z">
											</path>
											<path
												d="M12 24a5.27 5.27 0 0 1-4.31-2.2c-3.812-5.257-5.745-9.209-5.745-11.747a10.055 10.055 0 0 1 20.11 0c0 2.538-1.933 6.49-5.744 11.747a5.271 5.271 0 0 1-4.31 2.2Zm0-21.819a7.883 7.883 0 0 0-7.874 7.874c0 2.01 1.893 5.727 5.33 10.466a3.145 3.145 0 0 0 5.09 0c3.435-4.739 5.328-8.456 5.328-10.466A7.883 7.883 0 0 0 12 2.181Z">
											</path>
										</g>
										<defs>
											<clipPath id="id71363">
												<path fill="#fff" d="M0 0h24v24H0z"></path>
											</clipPath>
										</defs>
									</svg>
								</div>
								<div class="mui-style-5414kd">
									<span class="mui-style-1jlcbwk">
										<span data-lokalise="true"
											data-key="qrViews.vCard.listItems.location.title"
											class="mui-style-1f9c5e6">
											{{ __('employee.Location') }}
										</span>
										<a
											href="{{ contacts()->location }}"
											target="_blank" rel="nofollow ugc" class="mui-style-1hj3jxj">
											{{ contacts()->{$address} }}
										</a>
									</span>
								</div>
							</div>
						@endunless
                    </div>
                </div>

				@if ($employee->socials->isNotEmpty())
					<div data-visible="true" x-show="tab === 'socials'" class="mui-style-vfs1k6">
						<div class="mui-style-14kkv6o" style="justify-content: flex-start">
							@foreach ($employee->socials as $social)
								<div class="mui-style-1g6etrx" style="width: 100%">
									<div class="mui-style-1xqmslm">
										<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"/></svg>
									</div>
									<div class="mui-style-5414kd">
										<span class="mui-style-1jlcbwk">
											{{-- <span data-lokalise="true"
												data-key="qrViews.vCard.listItems.position.title"
												class="mui-style-1f9c5e6">
												Profession
											</span> --}}
											<span class="mui-style-10hul0x">
												<a
													href="{{ $social->link }}"
													target="_blank" rel="nofollow ugc" class="mui-style-1hj3jxj">
													{{ $social->link }}
												</a>
											</span>
										</span>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
            </div>
            <div class="mui-style-iqi8ol">
                <div class="fixedHeight mui-style-zt2422"></div>
				<div class="fullHeight mui-style-1ohb1y3"></div>
            </div>
        </div><!--/$--><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7JC973" height="0"
                width="0" style="display: none; visibility: hidden;" /></noscript>
    </div>
</body>

</html>
