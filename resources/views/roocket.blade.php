<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <style type="text/css">.swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body, .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after, .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after, .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button[not:disabled

        ]
        :hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel[not:disabled

        ]
        :hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger[not:disabled

        ]
        :hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input, .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus, .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading ~ .swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width: 500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }</style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://roocket.ir/public/img/roocket.ico">
    <meta name="csrf-token" content="SofFrPcMHhZLXml1Hw12jOm0Ydb2XaQi2sOLfBcd">
    <link rel="alternate" type="application/rss+xml" title="فید خوان مقالات - راکت"
          href="https://roocket.ir/feed/articles">
    <link rel="alternate" type="application/rss+xml" title="فید خوان ویدیوها - راکت"
          href="https://roocket.ir/feed/episodes">
    <title>راکت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول</title>
    <meta name="description"
          content="راکت وبسایت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول ، آموزش پیشرفته react native و reactjs ، آموزش node js ، آموزش پیشرفته node و انواع زبان های دیگر که همواره سعی کرده است بروزترین باشد">
    <meta name="keywords"
          content="آموزش طراحی سایت,آموزش برنامه نویسی,طراحی وب,ساخت وب سایت,آموزش git,آموزش لاراول,آموزش php,آموزش react,آموزش پی اچ پی,آموزش laravel,آموزش جاوا اسکریپت,آموزش ساخت وب سایت,آموزش بوت استرپ,آموزش mvc,آموزش React Native,راکت">
    <meta property="og:title" content="راکت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول">
    <meta property="og:description"
          content="راکت وبسایت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول ، آموزش پیشرفته react native و reactjs ، آموزش node js ، آموزش پیشرفته node و انواع زبان های دیگر که همواره سعی کرده است بروزترین باشد">
    <meta property="og:url" content="https://roocket.ir">
    <meta property="og:site_name" content="مجله آموزشی راکت">
    <meta property="og:brand" content="راکت">
    <meta property="og:locale" content="fa">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@roocketir">
    <meta name="twitter:title" content="راکت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول">
    <meta name="twitter:description"
          content="راکت وبسایت آموزش برنامه نویسی وب و موبایل ، جاوااسکریپت ، لاراول ، آموزش پیشرفته react native و reactjs ، آموزش node js ، آموزش پیشرفته node و انواع زبان های دیگر که همواره سعی کرده است بروزترین باشد">

    <link rel="stylesheet"
          href="/css/roocket/app.css">
    <link rel="stylesheet"
          href="/css/roocket/font-awesome.css">

    <script async=""
            src="%D8%B1%D8%A7%DA%A9%D8%AA%20%D8%A2%D9%85%D9%88%D8%B2%D8%B4%20%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D9%87%20%D9%86%D9%88%DB%8C%D8%B3%DB%8C%20%D9%88%D8%A8%20%D9%88%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84%20%D8%8C%20%D8%AC%D8%A7%D9%88%D8%A7%D8%A7%D8%B3%DA%A9%D8%B1%DB%8C%D9%BE%D8%AA%20%D8%8C%20%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84_files/analytics.js"></script>
    <script type="application/ld+json">
        {"@context": "http://schema.org","@type": "WebSite","url": "https://roocket.ir/","name":"راکت مجله آموزش طراحی و برنامه نویسی","potentialAction": {"@type": "SearchAction","target": "http://roocket.ir/search?search={search_term_string}","query-input": "required name=search_term_string"}}
    </script>
    <script type="application/ld+json">
        {"@context": "http://schema.org","@type": "Organization","email": "info[at]roocket.ir","name": "roocket.ir","telephone": "09381329963","sameAs" : ["https://www.instagram.com/roocketir/"]}
    </script>

    <style type="text/css">.form-error[data-v-683b2034] {
            display: block !important
        }

        .error[data-v-683b2034] {
            font-size: .8em;
            padding: 15px 0 10px;
            color: #e74c3c
        }

        .disable[data-v-683b2034] {
            background: rgba(0, 0, 0, .4) !important;
            cursor: not-allowed
        }</style>
</head>
<body>
<div id="app" class="wrapper">
    <div data-v-683b2034="" class="modal">
        <div data-v-683b2034="" class="form-login">
            <div data-v-683b2034="" class="form-login_head"><span data-v-683b2034="" class="title">ورود به سایت</span>
                <i data-v-683b2034="" aria-hidden="true" class="fa fa-times"></i></div>
            <form data-v-683b2034="" novalidate="novalidate" class="form"><!---->
                <div data-v-683b2034="" class="loginWith"><span data-v-683b2034="" class="title">شما میتوانید بدون ثبت نام با اکانت گوگل , یاهو و یا گیت هاب وارد سایت شوید</span>
                    <div data-v-683b2034="" class="button"><a data-v-683b2034="" href="https://roocket.ir/login/yahoo">
                            <div data-v-683b2034="" aria-hidden="true" class="yahoo">Yahoo</div>
                        </a> <a data-v-683b2034="" href="https://roocket.ir/login/google"><i data-v-683b2034=""
                                                                                             aria-hidden="true"
                                                                                             class="fa fa-google"></i></a>
                        <a data-v-683b2034="" href="https://roocket.ir/login/github"><i data-v-683b2034=""
                                                                                        aria-hidden="true"
                                                                                        class="fa fa-github-square"></i></a>
                    </div>
                    <span data-v-683b2034="" class="or">یا</span></div>
                <div data-v-683b2034="" class="form-group"><label data-v-683b2034="" class="label-control">اطلاعات
                        کاربری شما</label> <input data-v-683b2034="" name="email" placeholder="ایمیل خود را وارد کنید"
                                                  required="required" autocomplete="off" class="form-control"
                                                  type="text"> <!----></div>
                <div data-v-683b2034="" class="form-group"><input data-v-683b2034="" name="password"
                                                                  placeholder="پسورد خود را وارد کنید"
                                                                  required="required" class="form-control"
                                                                  type="password"> <!----></div>
                <div data-v-683b2034="" class="form-group">
                    <button data-v-683b2034="" type="submit" class="btn btn-info">ورود</button>
                </div>
            </form>
            <div data-v-683b2034="" class="modal-footer"><a data-v-683b2034="" href="https://roocket.ir/password/reset"
                                                            class="forget-password">رمز عبور را فراموش کرده ام</a> <a
                        data-v-683b2034="" href="https://roocket.ir/register/plan" class="login-action">فرم عضویت</a>
            </div>
        </div>
    </div>
    <header class="header_section">
        <div class="nav">
            <nav class="nav_section container"><h1 class="title"><a href="https://roocket.ir/">مجله آموزشی
                        <span>راکت</span></a></h1>
                <form action="/search" class="search_box"><input name="search" placeholder="دنبال چی میگردی ؟"
                                                                 autocomplete="off" id="searchInput" type="text"> <i
                            aria-hidden="true" class="fa fa-times-circle"></i>
                    <button type="submit">جستجو</button>
                    <ul class="result_search_box"></ul>
                </form>


            </nav>
        </div>
        <div id="header_menu_toggle" class="header_menu_toggle container">
            <ul>
                <li class="no-action">
                    <form action="/search" class="search_box"><input name="search" placeholder="دنبال چی میگردی ؟"
                                                                     type="text"></form>
                </li>
                <li><a href="https://roocket.ir/">صفحه اصلی</a></li>
                <li><a href="https://roocket.ir/discuss">کاربران</a></li>
                <li><a href="https://roocket.ir/series">دوره های آموزشی</a></li>
                <li><a href="https://roocket.ir/lessons">آخرین ویدیوها</a></li>
                <li><a href="https://roocket.ir/articles">مقالات</a></li>
                <li><a href="https://roocket.ir/podcast">راکت‌کست</a></li>
                <li><a href="https://t.me/roocket_ir" rel="nofollow">کانال تلگرام</a></li>
                <li><a href="https://roocket.ir/contact-us">ارتباط با ما</a></li>
            </ul>
        </div>
        <div class="header_menu">
            <ul class="container">
                <li><a href="https://roocket.ir/">صفحه اصلی</a></li>
                <li><a href="{{route('admin.users')}}">کاربران</a></li>
                <li class="has-submenu"><a href="#">دوره های آموزشی</a>
                    <ul class="submenu">
                        <li class="submenu-item"><span class="icon"></span> <a href="https://roocket.ir/series">همه
                                دوره‌ها</a></li>
                        <li class="submenu-item"><span class="icon"></span> <a href="https://roocket.ir/lessons">آخرین
                                ویدیوها</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="header_main-bg">
            <div class="header_main container"><h2 class="header_main--title">به دنیای برنامه نویسی پرتاب شو</h2>
                <p class="header_main--description">باور
                    ما اینست که کاربران ایرانی لایق بهترین ها هستند و باید بهترین و
                    بروزترین فیلم های آموزشی و مقالات در اختیار آنها قرار بگیرد تا بتوانند
                    به سرعت پیشرفت کنند و جزء بهترین ها در صنعت طراحی و برنامه نویسی وب شوند
                    . با ما همراه باشید تا بهترین ها رو لایق بهترین کاربران کنیم</p>
                <div class="group"><a href="https://roocket.ir/series" class="course_btn">
                        دوره های آموزشی
                    </a> <a href="https://roocket.ir/articles" class="article_btn">
                        مقالات آموزشی
                    </a> <a href="https://roocket.ir/discuss" class="course_btn discuss_btn">بحث و گفتگو</a></div>
            </div>
        </div>
    </header>
    <div class="co-padding">
        <div class="box container">
            <div class="box_head"><h4 class="title">دوره‌های پیشنهادی</h4> <a href="https://roocket.ir/series"
                                                                              class="btn_more">
                    مشاهده همه دوره ها
                </a></div>

        </div>
    </div>
    <div id="offer-course-index" class="offer-course">
        <div class="container">
            <div class="right">
                <div class="last-discuss">
                    <div class="last-discuss--head">
                        <div class="right"><i class="fa fa-file-text-o"></i>
                            <h3 class="title">آخرین گفتگوهای ارسال شده</h3></div>
                    </div>

                </div>
            </div>

        </div>
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1263" height="741"></canvas>
    </div>
    <div class="co-padding gray_bg gray_bg_icon">
        <div class="box container">
            <div class="box_head"><h4 class="title">آخرین مقالات</h4> <a href="https://roocket.ir/articles"
                                                                         class="btn_more">
                    مشاهده همه مقالات
                </a></div>
            <div class="card">
                @yield('content');

        </div>
    </div>


<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="about_us">
                <h4 class="title">درباره راکت</h4>
                <p class="body">راکت یکی از پرتلاش‌ترین و بروزترین
                    وبسایت های آموزشی در سطح ایران است که همیشه تلاش کرده تا بتواند جدیدترین
                    و بروزترین مقالات و دوره‌های آموزشی را در اختیار علاقه‌مندان ایرانی
                    قرار دهد. تبدیل کردن برنامه نویسان ایرانی به بهترین برنامه نویسان جهان
                    هدف ماست </p>
            </div>
            <div class="roocket_section">
                <h4 class="title">بخش های سایت</h4>
                <ul class="body">
                    <li><a href="https://roocket.ir/series">دوره‌های آموزشی</a></li>
                    <li><a href="https://roocket.ir/lessons">آخرین ویدیو‌ها</a></li>
                    <li><a href="https://roocket.ir/discuss">بحث و گفتگو</a></li>
                    <li><a href="https://roocket.ir/contact-us">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="contact_us">
                <h4 class="title">ارتباط با ما</h4>
                <div class="group">
                    <div class="body">
                        <p class="description">شما میتوانید با استفاده از یکی از راه‌های زیر با ما ارتباط برقرار
                            کنید</p>
                        <ul>
                            <li><i class="fa fa-telegram"></i>شماره تلگرام :‌ ۰۹۱۱۹۱۹۸۹۰۴</li>
                        </ul>
                    </div>
                    <p class="allow">
                        <img id="jxlzjxlzjxlzjxlznbqejxlz"
                             onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=111121&amp;p=rfthrfthrfthrfthuiwkrfth", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")'
                             alt="logo-samandehi"
                             src="%D8%B1%D8%A7%DA%A9%D8%AA%20%D8%A2%D9%85%D9%88%D8%B2%D8%B4%20%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D9%87%20%D9%86%D9%88%DB%8C%D8%B3%DB%8C%20%D9%88%D8%A8%20%D9%88%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84%20%D8%8C%20%D8%AC%D8%A7%D9%88%D8%A7%D8%A7%D8%B3%DA%A9%D8%B1%DB%8C%D9%BE%D8%AA%20%D8%8C%20%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84_files/samandehi.png">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="copy_right">
                کليه حقوق محصولات و محتوای اين سایت متعلق به راکت می
                باشد و هر گونه کپی برداری از محتوا و محصولات سایت غیر مجاز و بدون رضایت
                ماست
            </div>
            <div class="social_link">
                <a href="https://www.facebook.com/roocketi" rel="me"><i class="fa fa-facebook-square"></i></a>
                <a href="#" rel="me"><i class="fa fa-google"></i></a>
                <a href="https://www.instagram.com/roocketir/" rel="me"><i class="fa fa-instagram"></i></a>
                <a href="https://roocket.ir/feed/articles" rel="me"><i class="fa fa-rss-square"></i></a>
                <a href="https://twitter.com/roocketir" rel="me"><i class="fa fa-twitter-square"></i></a>
                <a href="https://t.me/roocket_ir" rel="me"><i class="fa fa-telegram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script type="text/javascript"
        src="/js/roocket/app.js"></script>


</body>
</html>