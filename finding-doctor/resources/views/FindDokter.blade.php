
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="colorlib.com">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
      <link href="css/main.css" rel="stylesheet" />
      <link rel="stylesheet" href="https:://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <style>
          * {
              font-family: 'Poppins';
          }
          html {
        line-height: 1.15;
        /* 1 */
        -ms-text-size-adjust: 100%;
        /* 2 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
        }

        /* Sections
        ========================================================================== */
        /**
        * Remove the margin in all browsers (opinionated).
        */
        body {
        margin: 0;
        }

        /**
        * Add the correct display in IE 9-.
        */
        article,
        aside,
        footer,
        header,
        nav,
        section {
        display: block;
        }

        /**
        * Correct the font size and margin on `h1` elements within `section` and
        * `article` contexts in Chrome, Firefox, and Safari.
        */
        h1 {
        font-size: 2em;
        margin: 0.67em 0;
        }

        /* Grouping content
        ========================================================================== */
        /**
        * Add the correct display in IE 9-.
        * 1. Add the correct display in IE.
        */
        figcaption,
        figure,
        main {
        /* 1 */
        display: block;
        }

        /**
        * Add the correct margin in IE 8.
        */
        figure {
        margin: 1em 40px;
        }

        /**
        * 1. Add the correct box sizing in Firefox.
        * 2. Show the overflow in Edge and IE.
        */
        hr {
        box-sizing: content-box;
        /* 1 */
        height: 0;
        /* 1 */
        overflow: visible;
        /* 2 */
        }

        /**
        * 1. Correct the inheritance and scaling of font size in all browsers.
        * 2. Correct the odd `em` font sizing in all browsers.
        */
        pre {
        font-family: monospace, monospace;
        /* 1 */
        font-size: 1em;
        /* 2 */
        }

        /* Text-level semantics
        ========================================================================== */
        /**
        * 1. Remove the gray background on active links in IE 10.
        * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
        */
        a {
        background-color: transparent;
        /* 1 */
        -webkit-text-decoration-skip: objects;
        /* 2 */
        }

        /**
        * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
        * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
        */
        abbr[title] {
        border-bottom: none;
        /* 1 */
        text-decoration: underline;
        /* 2 */
        text-decoration: underline dotted;
        /* 2 */
        }

        /**
        * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
        */
        b,
        strong {
        font-weight: inherit;
        }

        /**
        * Add the correct font weight in Chrome, Edge, and Safari.
        */
        b,
        strong {
        font-weight: bolder;
        }

        /**
        * 1. Correct the inheritance and scaling of font size in all browsers.
        * 2. Correct the odd `em` font sizing in all browsers.
        */
        code,
        kbd,
        samp {
        font-family: monospace, monospace;
        /* 1 */
        font-size: 1em;
        /* 2 */
        }

        /**
        * Add the correct font style in Android 4.3-.
        */
        dfn {
        font-style: italic;
        }

        /**
        * Add the correct background and color in IE 9-.
        */
        mark {
        background-color: #ff0;
        color: #000;
        }

        /**
        * Add the correct font size in all browsers.
        */
        small {
        font-size: 80%;
        }

        /**
        * Prevent `sub` and `sup` elements from affecting the line height in
        * all browsers.
        */
        sub,
        sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
        }

        sub {
        bottom: -0.25em;
        }

        sup {
        top: -0.5em;
        }

        /* Embedded content
        ========================================================================== */
        /**
        * Add the correct display in IE 9-.
        */
        audio,
        video {
        display: inline-block;
        }

        /**
        * Add the correct display in iOS 4-7.
        */
        audio:not([controls]) {
        display: none;
        height: 0;
        }

        /**
        * Remove the border on images inside links in IE 10-.
        */
        img {
        border-style: none;
        }

        /**
        * Hide the overflow in IE.
        */
        svg:not(:root) {
        overflow: hidden;
        }

        /* Forms
        ========================================================================== */
        /**
        * 1. Change the font styles in all browsers (opinionated).
        * 2. Remove the margin in Firefox and Safari.
        */
        button,
        input,
        optgroup,
        select,
        textarea {
        font-family: sans-serif;
        /* 1 */
        font-size: 100%;
        /* 1 */
        line-height: 1.15;
        /* 1 */
        margin: 0;
        /* 2 */
        }

        /**
        * Show the overflow in IE.
        * 1. Show the overflow in Edge.
        */
        button,
        input {
        /* 1 */
        overflow: visible;
        }

        /**
        * Remove the inheritance of text transform in Edge, Firefox, and IE.
        * 1. Remove the inheritance of text transform in Firefox.
        */
        button,
        select {
        /* 1 */
        text-transform: none;
        }

        /**
        * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
        *    controls in Android 4.
        * 2. Correct the inability to style clickable types in iOS and Safari.
        */
        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
        -webkit-appearance: button;
        /* 2 */
        }

        /**
        * Remove the inner border and padding in Firefox.
        */
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
        }

        /**
        * Restore the focus styles unset by the previous rule.
        */
        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
        outline: 1px dotted ButtonText;
        }

        /**
        * Correct the padding in Firefox.
        */
        fieldset {
        padding: 0.35em 0.75em 0.625em;
        }

        /**
        * 1. Correct the text wrapping in Edge and IE.
        * 2. Correct the color inheritance from `fieldset` elements in IE.
        * 3. Remove the padding so developers are not caught out when they zero out
        *    `fieldset` elements in all browsers.
        */
        legend {
        box-sizing: border-box;
        /* 1 */
        color: inherit;
        /* 2 */
        display: table;
        /* 1 */
        max-width: 100%;
        /* 1 */
        padding: 0;
        /* 3 */
        white-space: normal;
        /* 1 */
        }

        /**
        * 1. Add the correct display in IE 9-.
        * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
        */
        progress {
        display: inline-block;
        /* 1 */
        vertical-align: baseline;
        /* 2 */
        }

        /**
        * Remove the default vertical scrollbar in IE.
        */
        textarea {
        overflow: auto;
        }

        /**
        * 1. Add the correct box sizing in IE 10-.
        * 2. Remove the padding in IE 10-.
        */
        [type="checkbox"],
        [type="radio"] {
        box-sizing: border-box;
        /* 1 */
        padding: 0;
        /* 2 */
        }

        /**
        * Correct the cursor style of increment and decrement buttons in Chrome.
        */
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
        height: auto;
        }

        /**
        * 1. Correct the odd appearance in Chrome and Safari.
        * 2. Correct the outline style in Safari.
        */
        [type="search"] {
        -webkit-appearance: textfield;
        /* 1 */
        outline-offset: -2px;
        /* 2 */
        }

        /**
        * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
        */
        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
        }

        /**
        * 1. Correct the inability to style clickable types in iOS and Safari.
        * 2. Change font properties to `inherit` in Safari.
        */
        ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
        }

        /* Interactive
        ========================================================================== */
        /*
        * Add the correct display in IE 9-.
        * 1. Add the correct display in Edge, IE, and Firefox.
        */
        details,
        menu {
        display: block;
        }

        /*
        * Add the correct display in all browsers.
        */
        summary {
        display: list-item;
        }

        /* Scripting
        ========================================================================== */
        /**
        * Add the correct display in IE 9-.
        */
        canvas {
        display: inline-block;
        }

        /**
        * Add the correct display in IE.
        */
        template {
        display: none;
        }

        /* Hidden
        ========================================================================== */
        /**
        * Add the correct display in IE 10-.
        */
        [hidden] {
        display: none;
        }

        html {
        height: 100%;
        }

        fieldset {
        margin: 0;
        padding: 0;
        -webkit-margin-start: 0;
        -webkit-margin-end: 0;
        -webkit-padding-before: 0;
        -webkit-padding-start: 0;
        -webkit-padding-end: 0;
        -webkit-padding-after: 0;
        border: 0;
        }

        legend {
        margin: 0;
        padding: 0;
        display: block;
        -webkit-padding-start: 0;
        -webkit-padding-end: 0;
        }

        /*===============================
        =            Choices            =
        ===============================*/
        .choices {
        position: relative;
        margin-bottom: 24px;
        font-size: 16px;
        }

        .choices:focus {
        outline: none;
        }

        .choices:last-child {
        margin-bottom: 0;
        }

        .choices.is-disabled .choices__inner, .choices.is-disabled .choices__input {
        background-color: #EAEAEA;
        cursor: not-allowed;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .choices.is-disabled .choices__item {
        cursor: not-allowed;
        }

        .choices[data-type*="select-one"] {
        cursor: pointer;
        }

        .choices[data-type*="select-one"] .choices__inner {
        padding-bottom: 7.5px;
        }

        .choices[data-type*="select-one"] .choices__input {
        display: block;
        width: 100%;
        padding: 10px;
        border-bottom: 1px solid #DDDDDD;
        background-color: #FFFFFF;
        margin: 0;
        }

        .choices[data-type*="select-one"] .choices__button {
        background-image: url("../../icons/cross-inverse.svg");
        padding: 0;
        background-size: 8px;
        height: 100%;
        position: absolute;
        top: 50%;
        right: 0;
        margin-top: -10px;
        margin-right: 25px;
        height: 20px;
        width: 20px;
        border-radius: 10em;
        opacity: .5;
        }

        .choices[data-type*="select-one"] .choices__button:hover, .choices[data-type*="select-one"] .choices__button:focus {
        opacity: 1;
        }

        .choices[data-type*="select-one"] .choices__button:focus {
        box-shadow: 0px 0px 0px 2px #00BCD4;
        }

        .choices[data-type*="select-one"]:after {
        content: "";
        height: 0;
        width: 0;
        border-style: solid;
        border-color: #333333 transparent transparent transparent;
        border-width: 5px;
        position: absolute;
        right: 11.5px;
        top: 50%;
        margin-top: -2.5px;
        pointer-events: none;
        }

        .choices[data-type*="select-one"].is-open:after {
        border-color: transparent transparent #333333 transparent;
        margin-top: -7.5px;
        }

        .choices[data-type*="select-one"][dir="rtl"]:after {
        left: 11.5px;
        right: auto;
        }

        .choices[data-type*="select-one"][dir="rtl"] .choices__button {
        right: auto;
        left: 0;
        margin-left: 25px;
        margin-right: 0;
        }

        .choices[data-type*="select-multiple"] .choices__inner, .choices[data-type*="text"] .choices__inner {
        cursor: text;
        }

        .choices[data-type*="select-multiple"] .choices__button, .choices[data-type*="text"] .choices__button {
        position: relative;
        display: inline-block;
        margin-top: 0;
        margin-right: -4px;
        margin-bottom: 0;
        margin-left: 8px;
        padding-left: 16px;
        border-left: 1px solid #008fa1;
        background-image: url("../../icons/cross.svg");
        background-size: 8px;
        width: 8px;
        line-height: 1;
        opacity: .75;
        }

        .choices[data-type*="select-multiple"] .choices__button:hover, .choices[data-type*="select-multiple"] .choices__button:focus, .choices[data-type*="text"] .choices__button:hover, .choices[data-type*="text"] .choices__button:focus {
        opacity: 1;
        }

        .choices__inner {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        background-color: #f9f9f9;
        padding: 7.5px 7.5px 3.75px;
        border: 1px solid #DDDDDD;
        border-radius: 2.5px;
        font-size: 14px;
        min-height: 44px;
        overflow: hidden;
        }

        .is-focused .choices__inner, .is-open .choices__inner {
        border-color: #b7b7b7;
        }

        .is-open .choices__inner {
        border-radius: 2.5px 2.5px 0 0;
        }

        .is-flipped.is-open .choices__inner {
        border-radius: 0 0 2.5px 2.5px;
        }

        .choices__list {
        margin: 0;
        padding-left: 0;
        list-style: none;
        }

        .choices__list--single {
        display: inline-block;
        padding: 4px 16px 4px 4px;
        width: 100%;
        }

        [dir="rtl"] .choices__list--single {
        padding-right: 4px;
        padding-left: 16px;
        }

        .choices__list--single .choices__item {
        width: 100%;
        }

        .choices__list--multiple {
        display: inline;
        }

        .choices__list--multiple .choices__item {
        display: inline-block;
        vertical-align: middle;
        border-radius: 20px;
        padding: 4px 10px;
        font-size: 12px;
        font-weight: 500;
        margin-right: 3.75px;
        margin-bottom: 3.75px;
        background-color: #00BCD4;
        border: 1px solid #00a5bb;
        color: #FFFFFF;
        word-break: break-all;
        }

        .choices__list--multiple .choices__item[data-deletable] {
        padding-right: 5px;
        }

        [dir="rtl"] .choices__list--multiple .choices__item {
        margin-right: 0;
        margin-left: 3.75px;
        }

        .choices__list--multiple .choices__item.is-highlighted {
        background-color: #00a5bb;
        border: 1px solid #008fa1;
        }

        .is-disabled .choices__list--multiple .choices__item {
        background-color: #aaaaaa;
        border: 1px solid #919191;
        }

        .choices__list--dropdown {
        display: none;
        z-index: 1;
        position: absolute;
        width: 100%;
        background-color: #FFFFFF;
        border: 1px solid #DDDDDD;
        top: 100%;
        margin-top: -1px;
        border-bottom-left-radius: 2.5px;
        border-bottom-right-radius: 2.5px;
        overflow: hidden;
        word-break: break-all;
        }

        .choices__list--dropdown.is-active {
        display: block;
        }

        .is-open .choices__list--dropdown {
        border-color: #b7b7b7;
        }

        .is-flipped .choices__list--dropdown {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: -1px;
        border-radius: .25rem .25rem 0 0;
        }

        .choices__list--dropdown .choices__list {
        position: relative;
        max-height: 300px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
        }

        .choices__list--dropdown .choices__item {
        position: relative;
        padding: 10px;
        font-size: 14px;
        }

        [dir="rtl"] .choices__list--dropdown .choices__item {
        text-align: right;
        }

        @media (min-width: 640px) {
        .choices__list--dropdown .choices__item--selectable {
            padding-right: 100px;
        }
        .choices__list--dropdown .choices__item--selectable:after {
            content: attr(data-select-text);
            font-size: 12px;
            opacity: 0;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        [dir="rtl"] .choices__list--dropdown .choices__item--selectable {
            text-align: right;
            padding-left: 100px;
            padding-right: 10px;
        }
        [dir="rtl"] .choices__list--dropdown .choices__item--selectable:after {
            right: auto;
            left: 10px;
        }
        }

        .choices__list--dropdown .choices__item--selectable.is-highlighted {
        background-color: #f2f2f2;
        }

        .choices__list--dropdown .choices__item--selectable.is-highlighted:after {
        opacity: .5;
        }

        .choices__item {
        cursor: default;
        }

        .choices__item--selectable {
        cursor: pointer;
        }

        .choices__item--disabled {
        cursor: not-allowed;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        opacity: .5;
        }

        .choices__heading {
        font-weight: 600;
        font-size: 12px;
        padding: 10px;
        border-bottom: 1px solid #f7f7f7;
        color: gray;
        }

        .choices__button {
        text-indent: -9999px;
        -webkit-appearance: none;
        -moz-appearance: none;
            appearance: none;
        border: 0;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center;
        cursor: pointer;
        }

        .choices__button:focus {
        outline: none;
        }

        .choices__input {
        display: inline-block;
        vertical-align: baseline;
        background-color: #f9f9f9;
        font-size: 14px;
        margin-bottom: 5px;
        border: 0;
        border-radius: 0;
        max-width: 100%;
        padding: 4px 0 4px 2px;
        }

        .choices__input:focus {
        outline: 0;
        }

        [dir="rtl"] .choices__input {
        padding-right: 2px;
        padding-left: 0;
        }

        .choices__placeholder {
        opacity: .5;
        }

        /*=====  End of Choices  ======*/
        * {
        box-sizing: border-box;
        }

        .s003 {
        min-height: 40vh;
        display: -ms-flexbox;
        display: flex;
        flex-direction: column;
        -ms-flex-pack: center;
            justify-content: center;
        -ms-flex-align: center;
            align-items: center;
        font-family: 'Poppins', sans-serif;
        background-color: #56baed;
        background-size: cover;
        background-position: center center;
        padding: 15px;
        }

        .s003 form {
        width: 100%;
        max-width: 790px;
        margin-bottom: 0;
        }

        .s003 form .inner-form {
        background: #fff;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -ms-flex-pack: justify;
            justify-content: space-between;
        -ms-flex-align: center;
            align-items: center;
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        border-radius: 3px;
        }

        .s003 form .inner-form .input-field {
        height: 68px;
        }

        .s003 form .inner-form .input-field input {
        height: 100%;
        background: transparent;
        border: 0;
        display: block;
        width: 100%;
        padding: 10px 32px;
        font-size: 16px;
        color: #555;
        }

        .s003 form .inner-form .input-field input.placeholder {
        color: #888;
        font-size: 16px;
        }

        .s003 form .inner-form .input-field input:-moz-placeholder {
        color: #888;
        font-size: 16px;
        }

        .s003 form .inner-form .input-field input::-webkit-input-placeholder {
        color: #888;
        font-size: 16px;
        }

        .s003 form .inner-form .input-field input:hover, .s003 form .inner-form .input-field input:focus {
        box-shadow: none;
        outline: 0;
        border-color: #fff;
        }

        .s003 form .inner-form .input-field.first-wrap {
        width: 200px;
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner {
        background: transparent;
        border-radius: 0;
        border: 0;
        height: 100%;
        color: #fff;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        padding: 10px 30px;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list.choices__list--single {
        display: -ms-flexbox;
        display: flex;
        padding: 0;
        -ms-flex-align: center;
            align-items: center;
        height: 100%;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__item.choices__item--selectable.choices__placeholder {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        height: 100%;
        opacity: 1;
        color: #888;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list--single .choices__item {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        height: 100%;
        color: #555;
        }

        .s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
        right: 30px;
        border-color: #e5e5e5 transparent transparent transparent;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown {
        border: 0;
        background: #fff;
        padding: 20px 30px;
        margin-top: 2px;
        border-radius: 4px;
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown .choices__item--selectable {
        padding-right: 0;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item--selectable.is-highlighted {
        background: #fff;
        color: #56baed;
        }

        .s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item {
        color: #555;
        min-height: 24px;
        }

        .s003 form .inner-form .input-field.second-wrap {
        -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .s003 form .inner-form .input-field.third-wrap {
        width: 74px;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search {
        height: 100%;
        width: 100%;
        white-space: nowrap;
        color: #fff;
        border: 0;
        cursor: pointer;
        background: #56baed;
        transition: all .2s ease-out, color .2s ease-out;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search svg {
        width: 16px;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search:hover {
        background: #56baed;
        }

        .s003 form .inner-form .input-field.third-wrap .btn-search:focus {
        outline: 0;
        box-shadow: none;
        }

        @media screen and (max-width: 992px) {
        .s003 form .inner-form .input-field {
            height: 50px;
        }
        }

        @media screen and (max-width: 767px) {
        .s003 form .inner-form {
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            padding: 20px;
        }
        .s003 form .inner-form .input-field {
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .s003 form .inner-form .input-field input {
            padding: 10px 15px;
        }
        .s003 form .inner-form .input-field.first-wrap {
            width: 100%;
            border-right: 0;
        }
        .s003 form .inner-form .input-field.first-wrap .choices__inner {
            padding: 10px 15px;
        }
        .s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
            right: 11.5px;
            border-color: #e5e5e5 transparent transparent transparent;
        }
        .s003 form .inner-form .input-field.second-wrap {
            width: 100%;
            margin-bottom: 30px;
        }
        .s003 form .inner-form .input-field.second-wrap input {
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .s003 form .inner-form .input-field.third-wrap {
            margin-bottom: 0;
            width: 100%;
        }
        }

        .card {
            background: white;
            border-radius: 10px;
            width: 50%;
        }
        input {
            font-family: 'Poppins';
        }

        h1 {
            font-weight: bold;
        }

        .btn-primary {
            background: #56baed;
            border: none;
            padding: 10px;
            margin-left: 60px;
        }

      </style>
    </head>
    <body>

        <div class="s003">
            <img src="{{ asset('Logo/Logo_tittle.png') }}" alt="" class="text-center mb-2 rounded" width="100">
            <form action="/find-doctor" method="post">
                @csrf
              <div class="inner-form">
                <div class="input-field second-wrap">
                  <input id="search" type="text" placeholder="Find Doctor?" name="search" />
                </div>
                <div class="input-field third-wrap">
                  <button class="btn-search" type="submit" name="find">
                    <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
        </div>

        <h1 class="text-center fw-bold fs-1">Doctors</h1>
     
        <table class="table table-striped container" id="myTable" style=" background: none">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Picture</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              @if ($data != NULL)
              <tbody>
                  <?php $no = 1; ?>
                @if ($data !== NULL)
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        @if($item->picture != NULL)
                        <td>
                            <img width="100" src="{{ asset('storage/' . $item->picture) }}" alt="">
                        </td>
                        @else
                        <td>
                            <img width="100" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        </td>
                        @endif
                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                @else
                    <p class="text-center">Not Found</p>
                @endif
              </tbody>
              @endif
          </table>
          
      <a href="/HomePasien" class="btn btn-primary mt-3"><< Back to Home</a>

      <script src="js/extention/choices.js"></script>
      <script>
        const choices = new Choices('[data-trigger]',
        {
          searchEnabled: false,
          itemSelectText: '',
        });

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
  
      </script>

<script>
    const collapseBtn = document.querySelector("#btn-collapse");
    collapseBtn.addEventListener("click", () => {
      const collapseNav = document.querySelector(".collapse-nav ul");
      collapseNav.classList.toggle("active");
    });
  </script>
      <script src="https:://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
  </html>
  