 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <!-- Custom Stylesheet -->
    {{-- <link href="('../../../../public/admin/css/style.css') " rel="stylesheet"> --}}
    <style>
        @charset "UTF-8";
/*
0 - 600: Phone
600 - 900: Tablet portrait
900 - 1200: Tablet landscape
1200 - 1800: Normal styles
1800+ : Big Desktop
1em = 16px
The smaller device rules always should write below the bigger device rules
Fixing Order => Base + Typography >> General Layout + Grid >> Page Layout + Component
*/
@import url("https://fonts.googleapis.com/css?family=Roboto:400,500,700");
@import url(../icons/font-awesome/css/font-awesome.min.css);
@import url(../icons/simple-line-icons/css/simple-line-icons.css);
@import url(../icons/weather-icons/css/weather-icons.min.css);
@import url(../icons/cryptocoins/css/cryptocoins.css);
@import url(../icons/cryptocoins/css/cryptocoins-colors.css);
@import url(../icons/linea-icons/linea.css);
@import url(../icons/ionicons/css/ionicons.css);
@import url(../icons/themify-icons/themify-icons.css);
@import url(../icons/flag-icon-css/flag-icon.min.css);
@import url(../icons/material-design-iconic-font/materialdesignicons.min.css);
@import url(../icons/pe-icon-set-weather/css/pe-icon-set-weather.min.css);
@import url(../plugins/animate/animate.min.css);
@import url(../plugins/metismenu/css/metisMenu.min.css);
@import url(../plugins/bootstrap-select/dist/css/bootstrap-select.min.css);
.gradient-1, .dropdown-mega-menu .ext-link.link-1 a, .morris-hover, .datamaps-hoverover {
  background-image: linear-gradient(230deg, #759bff, #843cf6); }

.gradient-2, .dropdown-mega-menu .ext-link.link-3 a {
  background-image: linear-gradient(230deg, #fc5286, #fbaaa2); }

.gradient-3, .dropdown-mega-menu .ext-link.link-2 a, .header-right .icons .user-img .activity {
  background-image: linear-gradient(230deg, #ffc480, #ff763b); }

.gradient-4, .sidebar-right .nav-tabs .nav-item .nav-link.active::after, .sidebar-right .nav-tabs .nav-item .nav-link.active span i::before {
  background-image: linear-gradient(230deg, #0e4cfd, #6a8eff); }

.gradient-5 {
  background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%); }

.gradient-6 {
  background-image: linear-gradient(135deg, #97ABFF 10%, #123597 100%); }

.gradient-7 {
  background-image: linear-gradient(135deg, #3C8CE7 10%, #00EAFF 100%); }

.gradient-8 {
  background-image: linear-gradient(135deg, #EE9AE5 10%, #5961F9 100%); }

.gradient-anchor, .gradient-9 {
  background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%); }

.gradient-anchor {
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important; }

/*!
 * Bootstrap v4.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #324cdd;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #ec0c38;
  --orange: #fd7e14;
  --yellow: #fa3a0e;
  --green: #2dce89;
  --teal: #00A9A2;
  --cyan: #11cdef;
  --white: #fff;
  --gray: #f7fafc;
  --gray-dark: #333333;
  --primary: #7571f9;
  --secondary: #9097c4;
  --success: #6fd96f;
  --info: #4d7cff;
  --warning: #f29d56;
  --danger: #ff5e5e;
  --light: #f8f9fa;
  --dark: #333333;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --breakpoint-xxl: 1400;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

@-ms-viewport {
  width: device-width; }

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: "Roboto", sans-serif;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #76838f;
  text-align: left;
  background-color: #F3F3F9; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #7571f9;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #2e28f6;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #8898aa;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 500;
  line-height: 1.2;
  color: #222222; }

h1, .h1 {
  font-size: 2.25rem; }

h2, .h2 {
  font-size: 1.875rem; }

h3, .h3 {
  font-size: 1.5rem; }

h4, .h4 {
  font-size: 1.125rem; }

h5, .h5 {
  font-size: 1rem; }

h6, .h6 {
  font-size: 0.875rem; }

.lead {
  font-size: 1.09375rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.09375rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #f7fafc; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #F3F3F9;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #f7fafc; }

code {
  font-size: 87.5%;
  color: #e91e63;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto, .col-xxl-1, .col-xxl-2, .col-xxl-3, .col-xxl-4, .col-xxl-5, .col-xxl-6, .col-xxl-7, .col-xxl-8, .col-xxl-9, .col-xxl-10, .col-xxl-11, .col-xxl-12, .col-xxl,
.col-xxl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  order: -1; }

.order-last {
  order: 13; }

.order-0 {
  order: 0; }

.order-1 {
  order: 1; }

.order-2 {
  order: 2; }

.order-3 {
  order: 3; }

.order-4 {
  order: 4; }

.order-5 {
  order: 5; }

.order-6 {
  order: 6; }

.order-7 {
  order: 7; }

.order-8 {
  order: 8; }

.order-9 {
  order: 9; }

.order-10 {
  order: 10; }

.order-11 {
  order: 11; }

.order-12 {
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    order: -1; }
  .order-sm-last {
    order: 13; }
  .order-sm-0 {
    order: 0; }
  .order-sm-1 {
    order: 1; }
  .order-sm-2 {
    order: 2; }
  .order-sm-3 {
    order: 3; }
  .order-sm-4 {
    order: 4; }
  .order-sm-5 {
    order: 5; }
  .order-sm-6 {
    order: 6; }
  .order-sm-7 {
    order: 7; }
  .order-sm-8 {
    order: 8; }
  .order-sm-9 {
    order: 9; }
  .order-sm-10 {
    order: 10; }
  .order-sm-11 {
    order: 11; }
  .order-sm-12 {
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    order: -1; }
  .order-md-last {
    order: 13; }
  .order-md-0 {
    order: 0; }
  .order-md-1 {
    order: 1; }
  .order-md-2 {
    order: 2; }
  .order-md-3 {
    order: 3; }
  .order-md-4 {
    order: 4; }
  .order-md-5 {
    order: 5; }
  .order-md-6 {
    order: 6; }
  .order-md-7 {
    order: 7; }
  .order-md-8 {
    order: 8; }
  .order-md-9 {
    order: 9; }
  .order-md-10 {
    order: 10; }
  .order-md-11 {
    order: 11; }
  .order-md-12 {
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    order: -1; }
  .order-lg-last {
    order: 13; }
  .order-lg-0 {
    order: 0; }
  .order-lg-1 {
    order: 1; }
  .order-lg-2 {
    order: 2; }
  .order-lg-3 {
    order: 3; }
  .order-lg-4 {
    order: 4; }
  .order-lg-5 {
    order: 5; }
  .order-lg-6 {
    order: 6; }
  .order-lg-7 {
    order: 7; }
  .order-lg-8 {
    order: 8; }
  .order-lg-9 {
    order: 9; }
  .order-lg-10 {
    order: 10; }
  .order-lg-11 {
    order: 11; }
  .order-lg-12 {
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    order: -1; }
  .order-xl-last {
    order: 13; }
  .order-xl-0 {
    order: 0; }
  .order-xl-1 {
    order: 1; }
  .order-xl-2 {
    order: 2; }
  .order-xl-3 {
    order: 3; }
  .order-xl-4 {
    order: 4; }
  .order-xl-5 {
    order: 5; }
  .order-xl-6 {
    order: 6; }
  .order-xl-7 {
    order: 7; }
  .order-xl-8 {
    order: 8; }
  .order-xl-9 {
    order: 9; }
  .order-xl-10 {
    order: 10; }
  .order-xl-11 {
    order: 11; }
  .order-xl-12 {
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1400) {
  .col-xxl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xxl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xxl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xxl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xxl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xxl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xxl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xxl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xxl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xxl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xxl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xxl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xxl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xxl-first {
    order: -1; }
  .order-xxl-last {
    order: 13; }
  .order-xxl-0 {
    order: 0; }
  .order-xxl-1 {
    order: 1; }
  .order-xxl-2 {
    order: 2; }
  .order-xxl-3 {
    order: 3; }
  .order-xxl-4 {
    order: 4; }
  .order-xxl-5 {
    order: 5; }
  .order-xxl-6 {
    order: 6; }
  .order-xxl-7 {
    order: 7; }
  .order-xxl-8 {
    order: 8; }
  .order-xxl-9 {
    order: 9; }
  .order-xxl-10 {
    order: 10; }
  .order-xxl-11 {
    order: 11; }
  .order-xxl-12 {
    order: 12; }
  .offset-xxl-0 {
    margin-left: 0; }
  .offset-xxl-1 {
    margin-left: 8.33333%; }
  .offset-xxl-2 {
    margin-left: 16.66667%; }
  .offset-xxl-3 {
    margin-left: 25%; }
  .offset-xxl-4 {
    margin-left: 33.33333%; }
  .offset-xxl-5 {
    margin-left: 41.66667%; }
  .offset-xxl-6 {
    margin-left: 50%; }
  .offset-xxl-7 {
    margin-left: 58.33333%; }
  .offset-xxl-8 {
    margin-left: 66.66667%; }
  .offset-xxl-9 {
    margin-left: 75%; }
  .offset-xxl-10 {
    margin-left: 83.33333%; }
  .offset-xxl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6; }
  .table tbody + tbody {
    border-top: 2px solid #dee2e6; }
  .table .table {
    background-color: #F3F3F9; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #dee2e6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #d8d7fd; }

.table-hover .table-primary:hover {
  background-color: #c0bffc; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #c0bffc; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #e0e2ee; }

.table-hover .table-secondary:hover {
  background-color: #d0d3e5; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #d0d3e5; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #d7f4d7; }

.table-hover .table-success:hover {
  background-color: #c3efc3; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #c3efc3; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #cddaff; }

.table-hover .table-info:hover {
  background-color: #b4c7ff; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #b4c7ff; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fbe4d0; }

.table-hover .table-warning:hover {
  background-color: #f9d7b9; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #f9d7b9; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #ffd2d2; }

.table-hover .table-danger:hover {
  background-color: #ffb9b9; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #ffb9b9; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c6c6; }

.table-hover .table-dark:hover {
  background-color: #b9b9b9; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b9b9b9; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #F3F3F9;
  background-color: #212529;
  border-color: #32383e; }

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6; }

.table-dark {
  color: #F3F3F9;
  background-color: #212529; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #32383e; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive-xxl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  height: calc(2.0625rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .form-control {
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ecebfe;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
  .form-control::placeholder {
    color: #f7fafc;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.09375rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.76563rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #76838f;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  height: calc(1.64844rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.form-control-lg {
  height: calc(2.64063rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control[size], select.form-control[multiple] {
  height: auto; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #8898aa; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #6fd96f; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  color: #212529;
  background-color: rgba(111, 217, 111, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #6fd96f; }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
  .custom-select:valid:focus,
  .custom-select.is-valid:focus {
    border-color: #6fd96f;
    box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip, .was-validated
  .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-select:valid ~ .valid-tooltip,
  .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #6fd96f; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #6fd96f; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #d4f4d4; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #97e497; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(111, 217, 111, 0.25); }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #6fd96f; }
  .was-validated .custom-file-input:valid ~ .custom-file-label::after, .custom-file-input.is-valid ~ .custom-file-label::after {
    border-color: inherit; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ff5e5e; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(255, 94, 94, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #ff5e5e; }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
  .custom-select:invalid:focus,
  .custom-select.is-invalid:focus {
    border-color: #ff5e5e;
    box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip, .was-validated
  .custom-select:invalid ~ .invalid-feedback,
  .was-validated
  .custom-select:invalid ~ .invalid-tooltip,
  .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ff5e5e; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #ff5e5e; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    background-color: #ffdede; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #ff9191; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(255, 94, 94, 0.25); }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #ff5e5e; }
  .was-validated .custom-file-input:invalid ~ .custom-file-label::after, .custom-file-input.is-invalid ~ .custom-file-label::after {
    border-color: inherit; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.25); }

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: flex;
      flex: 0 0 auto;
      flex-flow: row wrap;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: flex;
      align-items: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      align-items: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .btn {
      transition: none; } }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #fff;
  background-color: #7571f9;
  border-color: #7571f9; }
  .btn-primary:hover {
    color: #fff;
    background-color: #514cf7;
    border-color: #4540f7; }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #7571f9;
    border-color: #7571f9; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #4540f7;
    border-color: #3a34f6; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.5); }

.btn-secondary {
  color: #212529;
  background-color: #9097c4;
  border-color: #9097c4; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #7780b7;
    border-color: #6f78b2; }
  .btn-secondary:focus, .btn-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(144, 151, 196, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #212529;
    background-color: #9097c4;
    border-color: #9097c4; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6f78b2;
    border-color: #6670ae; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(144, 151, 196, 0.5); }

.btn-success {
  color: #212529;
  background-color: #6fd96f;
  border-color: #6fd96f; }
  .btn-success:hover {
    color: #212529;
    background-color: #51d151;
    border-color: #47ce47; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #212529;
    background-color: #6fd96f;
    border-color: #6fd96f; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #212529;
    background-color: #47ce47;
    border-color: #3dcc3d; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.5); }

.btn-info {
  color: #fff;
  background-color: #4d7cff;
  border-color: #4d7cff; }
  .btn-info:hover {
    color: #fff;
    background-color: #2760ff;
    border-color: #1a56ff; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(77, 124, 255, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #4d7cff;
    border-color: #4d7cff; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #1a56ff;
    border-color: #0d4dff; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(77, 124, 255, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #f29d56;
  border-color: #f29d56; }
  .btn-warning:hover {
    color: #212529;
    background-color: #ef8832;
    border-color: #ee8227; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(242, 157, 86, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #f29d56;
    border-color: #f29d56; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #ee8227;
    border-color: #ed7b1b; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(242, 157, 86, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #ff5e5e;
  border-color: #ff5e5e; }
  .btn-danger:hover {
    color: #fff;
    background-color: #ff3838;
    border-color: #ff2b2b; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #ff5e5e;
    border-color: #ff5e5e; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff2b2b;
    border-color: #ff1e1e; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #333333;
  border-color: #333333; }
  .btn-dark:hover {
    color: #fff;
    background-color: #202020;
    border-color: #1a1a1a; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(51, 51, 51, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #333333;
    border-color: #333333; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1a1a1a;
    border-color: #131313; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(51, 51, 51, 0.5); }

.btn-outline-primary {
  color: #7571f9;
  background-color: transparent;
  background-image: none;
  border-color: #7571f9; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #7571f9;
    border-color: #7571f9; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #7571f9;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #7571f9;
    border-color: #7571f9; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.5); }

.btn-outline-secondary {
  color: #9097c4;
  background-color: transparent;
  background-image: none;
  border-color: #9097c4; }
  .btn-outline-secondary:hover {
    color: #212529;
    background-color: #9097c4;
    border-color: #9097c4; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(144, 151, 196, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #9097c4;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #212529;
    background-color: #9097c4;
    border-color: #9097c4; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(144, 151, 196, 0.5); }

.btn-outline-success {
  color: #6fd96f;
  background-color: transparent;
  background-image: none;
  border-color: #6fd96f; }
  .btn-outline-success:hover {
    color: #212529;
    background-color: #6fd96f;
    border-color: #6fd96f; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #6fd96f;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #212529;
    background-color: #6fd96f;
    border-color: #6fd96f; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(111, 217, 111, 0.5); }

.btn-outline-info {
  color: #4d7cff;
  background-color: transparent;
  background-image: none;
  border-color: #4d7cff; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #4d7cff;
    border-color: #4d7cff; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(77, 124, 255, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #4d7cff;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #4d7cff;
    border-color: #4d7cff; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(77, 124, 255, 0.5); }

.btn-outline-warning {
  color: #f29d56;
  background-color: transparent;
  background-image: none;
  border-color: #f29d56; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #f29d56;
    border-color: #f29d56; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(242, 157, 86, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #f29d56;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #f29d56;
    border-color: #f29d56; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(242, 157, 86, 0.5); }

.btn-outline-danger {
  color: #ff5e5e;
  background-color: transparent;
  background-image: none;
  border-color: #ff5e5e; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #ff5e5e;
    border-color: #ff5e5e; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff5e5e;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff5e5e;
    border-color: #ff5e5e; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 94, 94, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #333333;
  background-color: transparent;
  background-image: none;
  border-color: #333333; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #333333;
    border-color: #333333; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(51, 51, 51, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #333333;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #333333;
    border-color: #333333; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(51, 51, 51, 0.5); }

.btn-link {
  font-weight: 400;
  color: #7571f9;
  background-color: transparent; }
  .btn-link:hover {
    color: #2e28f6;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #f7fafc;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  transition: opacity 0.15s linear; }
  @media screen and (prefers-reduced-motion: reduce) {
    .fade {
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent; }

.dropdown-toggle:empty::after {
  margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 0.875rem;
  color: #76838f;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #7571f9; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #f7fafc;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.76563rem;
  color: #f7fafc;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    flex: 0 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }
  .btn-group .btn + .btn,
  .btn-group .btn + .btn-group,
  .btn-group .btn-group + .btn,
  .btn-group .btn-group + .btn-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .btn + .btn-group,
  .btn-group-vertical .btn-group + .btn,
  .btn-group-vertical .btn-group + .btn-group {
    margin-left: -1px; }

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:first-child {
  margin-left: 0; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center; }
  .btn-group-vertical .btn,
  .btn-group-vertical .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn + .btn,
  .btn-group-vertical > .btn + .btn-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3; }
  .input-group > .custom-file .custom-file-input:focus {
    z-index: 4; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: flex;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  height: calc(2.64063rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.09375rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  height: calc(1.64844rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.3125rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #7571f9; }
  .custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
  .custom-control-input:active ~ .custom-control-label::before {
    color: #fff;
    background-color: white; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #f7fafc; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  position: relative;
  margin-bottom: 0; }
  .custom-control-label::before {
    position: absolute;
    top: 0.15625rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e6; }
  .custom-control-label::after {
    position: absolute;
    top: 0.15625rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #7571f9; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  background-color: #7571f9; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(117, 113, 249, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(117, 113, 249, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #7571f9; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(117, 113, 249, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  appearance: none; }
  .custom-select:focus {
    border-color: #ecebfe;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(236, 235, 254, 0.5); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #fff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #f7fafc;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    opacity: 0; }

.custom-select-sm {
  height: calc(1.64844rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%; }

.custom-select-lg {
  height: calc(2.64063rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.0625rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.0625rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #ecebfe;
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
    .custom-file-input:focus ~ .custom-file-label::after {
      border-color: #ecebfe; }
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.0625rem + 2px);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.0625rem;
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: 1px solid #ced4da;
    border-radius: 0 0.25rem 0.25rem 0; }

.custom-range {
  width: 100%;
  padding-left: 0;
  background-color: transparent;
  appearance: none; }
  .custom-range:focus {
    outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
      box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #F3F3F9, 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #7571f9;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media screen and (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
      background-color: white; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #7571f9;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media screen and (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        transition: none; } }
    .custom-range::-moz-range-thumb:active {
      background-color: white; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #7571f9;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media screen and (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        transition: none; } }
    .custom-range::-ms-thumb:active {
      background-color: white; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem; }

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      transition: none; } }

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #f7fafc; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #f7fafc;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #F3F3F9;
    border-color: #dee2e6 #dee2e6 #F3F3F9; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #7571f9; }

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.33594rem;
  padding-bottom: 0.33594rem;
  margin-right: 1rem;
  font-size: 1.09375rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.09375rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }
  .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

@media (max-width: 1399.98px) {
  .navbar-expand-xxl > .container,
  .navbar-expand-xxl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1400) {
  .navbar-expand-xxl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xxl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xxl > .container,
    .navbar-expand-xxl > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-xxl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xxl .navbar-toggler {
      display: none; } }

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: flex;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: flex;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      flex-flow: row wrap; }
      .card-group > .card {
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0; }

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0; }

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #f7fafc;
    content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #f7fafc; }

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #7571f9;
  background-color: #fff;
  border: 1px solid #dee2e6; }
  .page-link:hover {
    z-index: 2;
    color: #2e28f6;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(117, 113, 249, 0.25); }
  .page-link:not(:disabled):not(.disabled) {
    cursor: pointer; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #7571f9;
  border-color: #7571f9; }

.page-item.disabled .page-link {
  color: #f7fafc;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.09375rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.76563rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff;
  background-color: #7571f9; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #4540f7; }

.badge-secondary {
  color: #212529;
  background-color: #9097c4; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #6f78b2; }

.badge-success {
  color: #212529;
  background-color: #6fd96f; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #47ce47; }

.badge-info {
  color: #fff;
  background-color: #4d7cff; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #1a56ff; }

.badge-warning {
  color: #212529;
  background-color: #f29d56; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #ee8227; }

.badge-danger {
  color: #fff;
  background-color: #ff5e5e; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #ff2b2b; }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  .badge-light[href]:hover, .badge-light[href]:focus {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5; }

.badge-dark {
  color: #fff;
  background-color: #333333; }
  .badge-dark[href]:hover, .badge-dark[href]:focus {
    color: #fff;
    text-decoration: none;
    background-color: #1a1a1a; }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 3.8125rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #3d3b81;
  background-color: #e3e3fe;
  border-color: #d8d7fd; }
  .alert-primary hr {
    border-top-color: #c0bffc; }
  .alert-primary .alert-link {
    color: #2c2b5e; }

.alert-secondary {
  color: #4b4f66;
  background-color: #e9eaf3;
  border-color: #e0e2ee; }
  .alert-secondary hr {
    border-top-color: #d0d3e5; }
  .alert-secondary .alert-link {
    color: #353849; }

.alert-success {
  color: #3a713a;
  background-color: #e2f7e2;
  border-color: #d7f4d7; }
  .alert-success hr {
    border-top-color: #c3efc3; }
  .alert-success .alert-link {
    color: #294f29; }

.alert-info {
  color: #284085;
  background-color: #dbe5ff;
  border-color: #cddaff; }
  .alert-info hr {
    border-top-color: #b4c7ff; }
  .alert-info .alert-link {
    color: #1c2d5e; }

.alert-warning {
  color: #7e522d;
  background-color: #fcebdd;
  border-color: #fbe4d0; }
  .alert-warning hr {
    border-top-color: #f9d7b9; }
  .alert-warning .alert-link {
    color: #583a20; }

.alert-danger {
  color: #853131;
  background-color: #ffdfdf;
  border-color: #ffd2d2; }
  .alert-danger hr {
    border-top-color: #ffb9b9; }
  .alert-danger .alert-link {
    color: #602323; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #1b1b1b;
  background-color: #d6d6d6;
  border-color: #c6c6c6; }
  .alert-dark hr {
    border-top-color: #b9b9b9; }
  .alert-dark .alert-link {
    color: #020202; }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.65625rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #7571f9;
  transition: width 0.6s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
      transition: none; } }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite; }

.media {
  display: flex;
  align-items: flex-start; }

.media-body {
  flex: 1; }

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #76838f;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item:hover, .list-group-item:focus {
    z-index: 1;
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #f7fafc;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #7571f9;
    border-color: #7571f9; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-primary {
  color: #3d3b81;
  background-color: #d8d7fd; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #3d3b81;
    background-color: #c0bffc; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #3d3b81;
    border-color: #3d3b81; }

.list-group-item-secondary {
  color: #4b4f66;
  background-color: #e0e2ee; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #4b4f66;
    background-color: #d0d3e5; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #4b4f66;
    border-color: #4b4f66; }

.list-group-item-success {
  color: #3a713a;
  background-color: #d7f4d7; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #3a713a;
    background-color: #c3efc3; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #3a713a;
    border-color: #3a713a; }

.list-group-item-info {
  color: #284085;
  background-color: #cddaff; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #284085;
    background-color: #b4c7ff; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #284085;
    border-color: #284085; }

.list-group-item-warning {
  color: #7e522d;
  background-color: #fbe4d0; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #7e522d;
    background-color: #f9d7b9; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #7e522d;
    border-color: #7e522d; }

.list-group-item-danger {
  color: #853131;
  background-color: #ffd2d2; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #853131;
    background-color: #ffb9b9; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #853131;
    border-color: #853131; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #1b1b1b;
  background-color: #c6c6c6; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #1b1b1b;
    background-color: #b9b9b9; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1b1b;
    border-color: #1b1b1b; }

.close {
  float: right;
  font-size: 1.3125rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:not(:disabled):not(.disabled) {
    cursor: pointer; }
    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
      color: #000;
      text-decoration: none;
      opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -25%); }
    @media screen and (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        transition: none; } }
  .modal.show .modal-dialog {
    transform: translate(0, 0); }

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2)); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - (0.5rem * 2));
    content: ""; }

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2)); }
    .modal-dialog-centered::before {
      height: calc(100vh - (1.75rem * 2)); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Roboto", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.76563rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Roboto", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.76563rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
  .bs-popover-top .arrow::after,
  .bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.5rem 0; }
  .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25); }

  .bs-popover-top .arrow::after,
  .bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
  .bs-popover-right .arrow::after,
  .bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.5rem 0.5rem 0.5rem 0; }
  .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: rgba(0, 0, 0, 0.25); }

  .bs-popover-right .arrow::after,
  .bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1); }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
  .bs-popover-bottom .arrow::after,
  .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.5rem 0.5rem 0.5rem; }
  .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.25); }

  .bs-popover-bottom .arrow::after,
  .bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
  .bs-popover-left .arrow::after,
  .bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.5rem 0 0.5rem 0.5rem; }
  .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: rgba(0, 0, 0, 0.25); }

  .bs-popover-left .arrow::after,
  .bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #222222;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #76838f; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  align-items: center;
  width: 100%;
  backface-visibility: hidden;
  perspective: 1000px; }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
  transition: transform 0.6s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      transition: none; } }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
      transform: translate3d(0, 0, 0); } }

.carousel-item-next,
.active.carousel-item-right {
  transform: translateX(100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-next,
    .active.carousel-item-right {
      transform: translate3d(100%, 0, 0); } }

.carousel-item-prev,
.active.carousel-item-left {
  transform: translateX(-100%); }
  @supports (transform-style: preserve-3d) {
    .carousel-item-prev,
    .active.carousel-item-left {
      transform: translate3d(-100%, 0, 0); } }

.carousel-fade .carousel-item {
  opacity: 0;
  transition-duration: .6s;
  transition-property: opacity; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  opacity: 0; }

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
  transform: translateX(0); }
  @supports (transform-style: preserve-3d) {
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
      transform: translate3d(0, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #fff; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #7571f9 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #4540f7 !important; }

.bg-secondary {
  background-color: #9097c4 !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #6f78b2 !important; }

.bg-success {
  background-color: #6fd96f !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #47ce47 !important; }

.bg-info {
  background-color: #4d7cff !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #1a56ff !important; }

.bg-warning {
  background-color: #f29d56 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ee8227 !important; }

.bg-danger {
  background-color: #ff5e5e !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ff2b2b !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #333333 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1a1a1a !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-right {
  border-right: 1px solid #dee2e6 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-left {
  border-left: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #7571f9 !important; }

.border-secondary {
  border-color: #9097c4 !important; }

.border-success {
  border-color: #6fd96f !important; }

.border-info {
  border-color: #4d7cff !important; }

.border-warning {
  border-color: #f29d56 !important; }

.border-danger {
  border-color: #ff5e5e !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #333333 !important; }

.border-white {
  border-color: #fff !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1400) {
  .d-xxl-none {
    display: none !important; }
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: flex !important; }
  .d-xxl-inline-flex {
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: flex !important; }
  .d-print-inline-flex {
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  flex: 1 1 auto !important; }

.flex-grow-0 {
  flex-grow: 0 !important; }

.flex-grow-1 {
  flex-grow: 1 !important; }

.flex-shrink-0 {
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  flex-shrink: 1 !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

@media (min-width: 1400) {
  .flex-xxl-row {
    flex-direction: row !important; }
  .flex-xxl-column {
    flex-direction: column !important; }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xxl-wrap {
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xxl-fill {
    flex: 1 1 auto !important; }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xxl-start {
    justify-content: flex-start !important; }
  .justify-content-xxl-end {
    justify-content: flex-end !important; }
  .justify-content-xxl-center {
    justify-content: center !important; }
  .justify-content-xxl-between {
    justify-content: space-between !important; }
  .justify-content-xxl-around {
    justify-content: space-around !important; }
  .align-items-xxl-start {
    align-items: flex-start !important; }
  .align-items-xxl-end {
    align-items: flex-end !important; }
  .align-items-xxl-center {
    align-items: center !important; }
  .align-items-xxl-baseline {
    align-items: baseline !important; }
  .align-items-xxl-stretch {
    align-items: stretch !important; }
  .align-content-xxl-start {
    align-content: flex-start !important; }
  .align-content-xxl-end {
    align-content: flex-end !important; }
  .align-content-xxl-center {
    align-content: center !important; }
  .align-content-xxl-between {
    align-content: space-between !important; }
  .align-content-xxl-around {
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    align-content: stretch !important; }
  .align-self-xxl-auto {
    align-self: auto !important; }
  .align-self-xxl-start {
    align-self: flex-start !important; }
  .align-self-xxl-end {
    align-self: flex-end !important; }
  .align-self-xxl-center {
    align-self: center !important; }
  .align-self-xxl-baseline {
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

@media (min-width: 1400) {
  .float-xxl-left {
    float: left !important; }
  .float-xxl-right {
    float: right !important; }
  .float-xxl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

@media (min-width: 1400) {
  .m-xxl-0 {
    margin: 0 !important; }
  .mt-xxl-0,
  .my-xxl-0 {
    margin-top: 0 !important; }
  .mr-xxl-0,
  .mx-xxl-0 {
    margin-right: 0 !important; }
  .mb-xxl-0,
  .my-xxl-0 {
    margin-bottom: 0 !important; }
  .ml-xxl-0,
  .mx-xxl-0 {
    margin-left: 0 !important; }
  .m-xxl-1 {
    margin: 0.25rem !important; }
  .mt-xxl-1,
  .my-xxl-1 {
    margin-top: 0.25rem !important; }
  .mr-xxl-1,
  .mx-xxl-1 {
    margin-right: 0.25rem !important; }
  .mb-xxl-1,
  .my-xxl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xxl-1,
  .mx-xxl-1 {
    margin-left: 0.25rem !important; }
  .m-xxl-2 {
    margin: 0.5rem !important; }
  .mt-xxl-2,
  .my-xxl-2 {
    margin-top: 0.5rem !important; }
  .mr-xxl-2,
  .mx-xxl-2 {
    margin-right: 0.5rem !important; }
  .mb-xxl-2,
  .my-xxl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xxl-2,
  .mx-xxl-2 {
    margin-left: 0.5rem !important; }
  .m-xxl-3 {
    margin: 1rem !important; }
  .mt-xxl-3,
  .my-xxl-3 {
    margin-top: 1rem !important; }
  .mr-xxl-3,
  .mx-xxl-3 {
    margin-right: 1rem !important; }
  .mb-xxl-3,
  .my-xxl-3 {
    margin-bottom: 1rem !important; }
  .ml-xxl-3,
  .mx-xxl-3 {
    margin-left: 1rem !important; }
  .m-xxl-4 {
    margin: 1.5rem !important; }
  .mt-xxl-4,
  .my-xxl-4 {
    margin-top: 1.5rem !important; }
  .mr-xxl-4,
  .mx-xxl-4 {
    margin-right: 1.5rem !important; }
  .mb-xxl-4,
  .my-xxl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xxl-4,
  .mx-xxl-4 {
    margin-left: 1.5rem !important; }
  .m-xxl-5 {
    margin: 3rem !important; }
  .mt-xxl-5,
  .my-xxl-5 {
    margin-top: 3rem !important; }
  .mr-xxl-5,
  .mx-xxl-5 {
    margin-right: 3rem !important; }
  .mb-xxl-5,
  .my-xxl-5 {
    margin-bottom: 3rem !important; }
  .ml-xxl-5,
  .mx-xxl-5 {
    margin-left: 3rem !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .pt-xxl-0,
  .py-xxl-0 {
    padding-top: 0 !important; }
  .pr-xxl-0,
  .px-xxl-0 {
    padding-right: 0 !important; }
  .pb-xxl-0,
  .py-xxl-0 {
    padding-bottom: 0 !important; }
  .pl-xxl-0,
  .px-xxl-0 {
    padding-left: 0 !important; }
  .p-xxl-1 {
    padding: 0.25rem !important; }
  .pt-xxl-1,
  .py-xxl-1 {
    padding-top: 0.25rem !important; }
  .pr-xxl-1,
  .px-xxl-1 {
    padding-right: 0.25rem !important; }
  .pb-xxl-1,
  .py-xxl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xxl-1,
  .px-xxl-1 {
    padding-left: 0.25rem !important; }
  .p-xxl-2 {
    padding: 0.5rem !important; }
  .pt-xxl-2,
  .py-xxl-2 {
    padding-top: 0.5rem !important; }
  .pr-xxl-2,
  .px-xxl-2 {
    padding-right: 0.5rem !important; }
  .pb-xxl-2,
  .py-xxl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xxl-2,
  .px-xxl-2 {
    padding-left: 0.5rem !important; }
  .p-xxl-3 {
    padding: 1rem !important; }
  .pt-xxl-3,
  .py-xxl-3 {
    padding-top: 1rem !important; }
  .pr-xxl-3,
  .px-xxl-3 {
    padding-right: 1rem !important; }
  .pb-xxl-3,
  .py-xxl-3 {
    padding-bottom: 1rem !important; }
  .pl-xxl-3,
  .px-xxl-3 {
    padding-left: 1rem !important; }
  .p-xxl-4 {
    padding: 1.5rem !important; }
  .pt-xxl-4,
  .py-xxl-4 {
    padding-top: 1.5rem !important; }
  .pr-xxl-4,
  .px-xxl-4 {
    padding-right: 1.5rem !important; }
  .pb-xxl-4,
  .py-xxl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xxl-4,
  .px-xxl-4 {
    padding-left: 1.5rem !important; }
  .p-xxl-5 {
    padding: 3rem !important; }
  .pt-xxl-5,
  .py-xxl-5 {
    padding-top: 3rem !important; }
  .pr-xxl-5,
  .px-xxl-5 {
    padding-right: 3rem !important; }
  .pb-xxl-5,
  .py-xxl-5 {
    padding-bottom: 3rem !important; }
  .pl-xxl-5,
  .px-xxl-5 {
    padding-left: 3rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mt-xxl-auto,
  .my-xxl-auto {
    margin-top: auto !important; }
  .mr-xxl-auto,
  .mx-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-auto,
  .my-xxl-auto {
    margin-bottom: auto !important; }
  .ml-xxl-auto,
  .mx-xxl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

@media (min-width: 1400) {
  .text-xxl-left {
    text-align: left !important; }
  .text-xxl-right {
    text-align: right !important; }
  .text-xxl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #7571f9 !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #4540f7 !important; }

.text-secondary {
  color: #9097c4 !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #6f78b2 !important; }

.text-success {
  color: #6fd96f !important; }

a.text-success:hover, a.text-success:focus {
  color: #47ce47 !important; }

.text-info {
  color: #4d7cff !important; }

a.text-info:hover, a.text-info:focus {
  color: #1a56ff !important; }

.text-warning {
  color: #f29d56 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ee8227 !important; }

.text-danger {
  color: #ff5e5e !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #ff2b2b !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: #333333 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1a1a1a !important; }

.text-body {
  color: #76838f !important; }

.text-muted {
  color: #8898aa !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #dee2e6; }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6; } }

/*    Color Mixins
-------------------*/
.color-white {
  color: #fff; }

.body-bg {
  background: #F3F3F9; }

.text-light {
  color: #aaa !important; }

.text-info {
  color: #4d7cff !important; }

.text-pelorous {
  color: #3aa6b4 !important; }

.text-primary {
  color: #7571f9; }

.text-warning {
  color: #f29d56 !important; }

.text-kimberly {
  color: #73629B !important; }

.text-red {
  color: #ff0000; }

.text-green {
  color: #26DA87; }

.blue-italic {
  color: #324cdd;
  font-style: italic; }

.text-purple {
  color: #7C277D; }

.color-dark,
.text-dark {
  color: #464a53 !important; }

.color-dpink,
.text-dpink {
  color: #fe60ad; }

.color-lgreen,
.text-lgreen {
  color: #43e794; }

.color-gray,
.text-gray {
  color: #898989; }

.color-pale-sky,
.text-pale-sky {
  color: #6a707e; }

.icon-razzmatazz i {
  color: #f31e7a; }

.circle-rounded {
  border-radius: 50% !important; }

.icon-muted i {
  color: #8898aa !important; }

.icon-dpink i {
  color: #fe60ad !important; }

.icon-success i {
  color: #6fd96f !important; }

.icon-primary i {
  color: #7571f9 !important; }

.icon-danger i {
  color: #ff5e5e !important; }

.icon-warning i {
  color: #f29d56 !important; }

.bg-gallery {
  background: #EEEEEE !important; }

.bg-dark {
  background-color: #464a53;
  color: #fff;
  fill: #464a53; }

.bg-light {
  background-color: #aaa;
  color: #464a53;
  fill: #aaa; }

.bg-white {
  background-color: #fff; }

.bg-transparent {
  background-color: transparent;
  color: #000; }

.bg-dpink {
  background-color: #fe60ad !important; }

.bg-lgreen {
  background-color: #43e794 !important; }

.bg-inverse {
  background: #2F3D4A !important; }

.bg-pink {
  background: #6856fa !important; }

/*  Background Darken
----------------------*/
.bg-primary-darken-5 {
  background-color: #070467; }

.bg-secondary-darken-5 {
  background-color: #1e2138; }

.bg-success-darken-5 {
  background-color: #0f3a0f; }

.bg-info-darken-5 {
  background-color: #00144d; }

.bg-danger-darken-5 {
  background-color: #5e0000; }

.bg-warning-darken-5 {
  background-color: #442205; }

/*  Background Lighten
----------------------*/
.bg-primary-lighten-2 {
  background-color: white;
  color: #7571f9; }

.bg-secondary-lighten-2 {
  background-color: #f4f5f9;
  color: #9097c4; }

.bg-success-lighten-2 {
  background-color: #e8f9e8;
  color: #6fd96f; }

.bg-info-lighten-2 {
  background-color: #e6edff;
  color: #4d7cff; }

.bg-danger-lighten-2 {
  background-color: #fff7f7;
  color: #ff5e5e; }

.bg-warning-lighten-2 {
  background-color: #fdefe4;
  color: #f29d56; }

/*  Background Transparent
----------------------*/
.bg-primary-rgba1 {
  background-color: #7571f9; }

.bg-secondary-rgba1 {
  background-color: #9097c4; }

.bg-success-rgba1 {
  background-color: #6fd96f; }

.bg-info-rgba1 {
  background-color: #4d7cff; }

.bg-danger-rgba1 {
  background-color: #ff5e5e; }

.bg-warning-rgba1 {
  background-color: #f29d56; }

.bg-inverse-rgba1 {
  background-color: #2f3d4a; }

/*    Border Mixins
--------------------------*/
.border-primary {
  border-color: #7571f9; }

.border-secondary {
  border-color: #9097c4; }

.border-success {
  border-color: #6fd96f; }

.border-info {
  border-color: #4d7cff; }

.border-danger {
  border-color: #ff5e5e; }

.border-warning {
  border-color: #f29d56; }

.border-dark {
  border-color: #464a53; }

/*    color page
-----------------------------*/
.outrageous-orange {
  color: #FC5532; }
  .outrageous-orange-bg {
    background: #FC5532; }
  .outrageous-orange-shadow {
    box-shadow: 0px 10px 20px 0px rgba(252, 85, 50, 0.3); }

.flamingo-dark {
  color: #F25634; }
  .flamingo-dark-bg {
    background: #F25634; }

.fuchsia-blue {
  color: #835DC4; }
  .fuchsia-blue-bg {
    background: #835DC4; }

.candlelight {
  color: #FAD00B; }
  .candlelight-bg {
    background: #FAD00B; }

.dodger-blue {
  color: #2277EF; }
  .dodger-blue-bg {
    background: #2277EF; }
  .dodger-blue-shadow {
    box-shadow: 0px 10px 20px 0px rgba(29, 127, 240, 0.3); }

.mirage {
  color: #121929; }
  .mirage-bg {
    background: #121929; }

.big-stone {
  color: #152037; }
  .big-stone-bg {
    background: #152037; }

.sun {
  color: #F7AB10; }
  .sun-bg {
    background: #F7AB10; }

.flamingo {
  color: #F15520; }
  .flamingo-bg {
    background: #F15520; }

.turquoise {
  color: #46EEAD; }
  .turquoise-bg {
    background: #46EEAD; }

.scooter {
  color: #36B8D7; }
  .scooter-bg {
    background: #36B8D7; }

.picton-blue {
  color: #44DAF4; }
  .picton-blue-bg {
    background: #44DAF4; }

.blue-madison {
  color: #3aa6b4; }
  .blue-madison-bg {
    background: #3aa6b4; }

.cinnabar {
  color: #e45444; }
  .cinnabar-bg {
    background: #e45444; }

.danube {
  color: #5289CA; }
  .danube-bg {
    background: #5289CA; }

.violet-red {
  color: #F13C79; }
  .violet-red-bg {
    background: #F13C79; }

.buttercup {
  color: #F19D14; }
  .buttercup-bg {
    background: #F19D14; }

.blue {
  color: #4501EB; }
  .blue-bg {
    background: #4501EB; }

/*    Brand Background
-----------------------------*/
.bg-facebook {
  background: #3b5998;
  fill: #3b5998; }

.bg-twitter {
  background: #1da1f2;
  fill: #1da1f2; }

.bg-youtube {
  background: #FF0000;
  fill: #FF0000; }

.bg-instagram {
  background: #c32aa3;
  fill: #c32aa3; }

.bg-google-plus {
  background: #db4439;
  fill: #db4439; }

.bg-linkedin {
  background: #007bb6;
  fill: #007bb6; }

.color-facebook {
  color: #3b5998; }

.color-instagram {
  color: #c32aa3; }

.color-twitter {
  color: #1da1f2; }

.color-youtube {
  color: #FF0000; }

.gradient-default {
  background: #BCBCBC; }

.gradient-1 {
  color: #fff !important; }
  .gradient-1-shadow {
    box-shadow: 0px 10px 20px 0px rgba(235, 33, 83, 0.3) !important; }
  .gradient-1-text {
    color: #f53c79; }

.gradient-2 {
  color: #fff !important; }
  .gradient-2-shadow {
    box-shadow: 0px 10px 20px 0px rgba(66, 0, 235, 0.3) !important; }
  .gradient-2-text {
    color: #4409eb; }

.gradient-3 {
  color: #fff !important; }
  .gradient-3-shadow {
    box-shadow: 0px 10px 20px 0px rgba(53, 185, 216, 0.3) !important; }
  .gradient-3-text {
    color: #38bad9; }

.gradient-4 {
  color: #fff !important; }
  .gradient-4-shadow {
    box-shadow: 0px 10px 20px 0px rgba(242, 85, 33, 0.3) !important; }

.gradient-5 {
  color: #fff !important; }
  .gradient-5-shadow {
    box-shadow: 0px 10px 20px 0px rgba(235, 33, 83, 0.3) !important; }
  .gradient-5-text {
    color: rgba(235, 33, 83, 0.8); }

.gradient-6-shadow {
  box-shadow: 0px 10px 20px 0px rgba(53, 185, 216, 0.3) !important; }

.gradient-7 {
  color: #fff !important; }
  .gradient-7-shadow {
    box-shadow: 0px 10px 20px 0px rgba(201, 201, 201, 0.3) !important; }
  .gradient-7-text {
    color: #4400eb; }

.gradient-8 {
  color: #fff !important; }
  .gradient-8-shadow {
    box-shadow: 0px 10px 20px 0px rgba(242, 85, 33, 0.3) !important; }

.gradient-9 {
  color: #fff !important; }
  .gradient-9-shadow {
    box-shadow: 0px 10px 20px 0px rgba(243, 31, 121, 0.3) !important; }
  .gradient-9-text {
    color: #f31e7a; }

.ml-minus-29 {
  margin-left: -1.8125rem; }

.mr-minus-29 {
  margin-right: -1.8125rem; }

.mw-280 {
  max-width: 17.5rem; }

.mw-460 {
  max-width: 28.75rem; }

.mw-570 {
  max-width: 35.625rem; }

.mw-600 {
  max-width: 37.5rem; }

@media (min-width: 1200px) {
  .width-xl-75 {
    width: 75%; } }

.fw-500 {
  font-weight: 500 !important; }

.fw-600 {
  font-weight: 600 !important; }

.mixed-text-link {
  font-style: italic;
  border-bottom: 1px solid #BCBCBC; }

.px-4half {
  padding-left: 2rem !important;
  padding-right: 2rem !important; }

.py-4half {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important; }

.circle-40 {
  width: 40px;
  height: 40px;
  display: block;
  border-radius: 50%;
  text-align: center;
  border: 1px solid #fff; }
  .circle-40 i, .circle-40 span {
    font-size: 14px;
    line-height: 40px; }

.circle-60 {
  width: 60px;
  height: 60px;
  display: block;
  border-radius: 50%;
  text-align: center;
  border: 1px solid #fff; }
  .circle-60 i, .circle-60 span {
    font-size: 24px;
    line-height: 60px; }

.border1px-white {
  border: 1px solid #fff !important; }

.border-right {
  border-right: 1px solid #EEEEEE !important; }

.border-left {
  border-left: 1px solid #EEEEEE !important; }

.border-top {
  border-top: 1px solid #EEEEEE !important; }

.border-bottom {
  border-bottom: 1px solid #EEEEEE !important; }

.border {
  border: 1px solid #EEEEEE !important; }

.font-medium {
  font-size: 1.5rem !important; }

.font-small {
  font-size: 1.4rem !important; }

.font-x-small {
  font-size: 1.3rem !important; }

.font-tiny {
  font-size: 1.2rem !important; }

* {
  outline: none;
  box-sizing: inherit;
  margin: 0;
  padding: 0; }
  *::after {
    margin: 0;
    padding: 0; }
  *::before {
    margin: 0;
    padding: 0; }

body {
  overflow-x: hidden;
  height: 100%;
  box-sizing: border-box;
  position: relative;
  max-width: 100%; }

#main-wrapper {
  opacity: 0;
  transition: all 0.25s ease-in;
  overflow: hidden;
  position: relative; }

#main-wrapper.show {
  opacity: 1; }

.page-heading {
  font-size: 1.125rem;
  color: #333333; }

a {
  transition: all 0.4s ease-in-out;
  color: #76838f; }

a:focus,
a:hover {
  text-decoration: none; }

a.link {
  color: #464a53; }

a.link:focus,
a.link:hover {
  color: #4d7cff; }

ul {
  padding: 0; }

li {
  list-style: none; }

.img-responsive {
  width: 100%;
  height: auto;
  display: inline-block; }

.img-rounded {
  border-radius: .4rem; }

.img-flag {
  height: 1.5rem;
  width: 1.8rem; }

.img-full {
  width: 100%; }

.mdi-set,
.mdi:before {
  line-height: initial; }

blockquote {
  background: #F3F3F9;
  font-weight: 500;
  color: #262626;
  line-height: 1.8;
  padding: 1rem 1.875rem; }

.vertical-seperator {
  width: 1px;
  display: inline-block;
  min-height: 35px;
  background: #999999;
  vertical-align: middle;
  margin: 0 15px; }
  .vertical-seperator--small {
    min-height: 13px;
    margin: 0 5px; }

h6 {
  font-weight: 400; }

sub {
  font-size: 14px;
  color: #666666;
  font-weight: normal; }

.heading-primary {
  font-size: 1.8rem; }
  .heading-primary-title {
    font-size: 2.2rem;
    color: #7571f9; }

.heading-primary-light {
  font-size: 1.8rem;
  font-weight: 400; }

.heading-light {
  font-weight: 400; }

.sub-heading {
  font-size: 1.6rem; }

.display-5 {
  font-size: 3rem; }

.display-6 {
  font-size: 3.6rem; }

.box {
  border-radius: .4rem;
  padding: 1rem; }

.img-circle {
  border-radius: 100%; }

.content-body .container-fluid {
  padding: 15px 30px 0; }

@media (max-width: 767px) {
  .content-body .container-fluid {
    padding: 1.5rem 1.5rem 0;
    padding: 0.9375rem 0.9375rem 0; } }

.c-pointer {
  cursor: pointer; }

.rotate-90 {
  transform: rotate(90deg); }

.jqstooltip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box; }

.l-border-1 {
  border: 1px solid rgba(120, 130, 140, 0.13); }

.d-border-1 {
  border: 1px solid rgba(120, 130, 140, 0.13); }

.border-white-2 {
  border: 2px solid #fff; }

.border-bottom-1 {
  border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

.border-top-1 {
  border-top: 1px solid rgba(120, 130, 140, 0.13); }

.border-right-1 {
  border-right: 1px solid rgba(120, 130, 140, 0.13); }

.border-left-1 {
  border-left: 1px solid rgba(120, 130, 140, 0.13); }

.dark-overlay-1 {
  background: rgba(0, 0, 0, 0.1); }

.dark-overlay-2 {
  background: rgba(0, 0, 0, 0.2); }

.dark-overlay-3 {
  background: rgba(0, 0, 0, 0.3); }

.dark-overlay-4 {
  background: rgba(0, 0, 0, 0.4); }

.dark-overlay-5 {
  background: rgba(0, 0, 0, 0.5); }

.dark-overlay-6 {
  background: rgba(0, 0, 0, 0.6); }

.dark-overlay-7 {
  background: rgba(0, 0, 0, 0.7); }

.dark-overlay-8 {
  background: rgba(0, 0, 0, 0.8); }

.dark-overlay-9 {
  background: rgba(0, 0, 0, 0.9); }

.section-heading {
  margin-bottom: 3.5rem; }

.ofhidden {
  overflow: hidden; }

.flex-item {
  flex: 1; }

.tt-uppercase {
  text-transform: uppercase; }

.font-weight-semi-bold {
  font-weight: 500; }

.bg-dark {
  background-color: #333; }

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #EEEEEE; } }

.page-item.disabled .page-link {
  color: #bbbbbb; }

.page-item .page-link:focus {
  box-shadow: none; }

@media only screen and (min-width: 1200px) and (max-width: 1440px) {
  .col-xxl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xxl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xxl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xxl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xxl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xxl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xxl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xxl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xxl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xxl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xxl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xxl-12 {
    flex: 0 0 100%;
    max-width: 100%; } }

.panel-footer {
  padding: 0.625rem 1.25rem;
  background: #fff;
  border-top: 1px solid rgba(120, 130, 140, 0.13);
  color: #abafb3; }

.footer {
  padding-left: 15.1875rem;
  background-color: #fff; }
  .footer .copyright {
    padding: 0.9375rem;
    background: white; }
    .footer .copyright p {
      text-align: center;
      margin: 0;
      color: #898989; }
    .footer .copyright a {
      color: #7571f9; }

[data-sidebar-style="mini"] .nav-control, [data-layout="horizontal"] .nav-control {
  display: none; }

@media (max-width: 767.98px) {
  [data-sidebar-style="overlay"] .nav-header .logo-abbr {
    display: block; } }

[data-header-position="fixed"] .nav-header {
  position: fixed;
  z-index: 999;
  left: auto; }

.nav-header {
  height: 5rem;
  width: 15.1875rem;
  display: inline-block;
  text-align: left;
  position: absolute;
  left: 0;
  top: 0;
  background: #111B27;
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.15);
  transition: all .2s ease; }
  .nav-header .logo-abbr {
    display: none; }
  .nav-header .logo-compact {
    display: none; }
  @media only screen and (min-width: 1200px) and (max-width: 1350px) {
    .nav-header {
      width: 14.375rem; } }
  .nav-header .brand-logo {
    z-index: 999; }
    .nav-header .brand-logo a {
      padding: 1.607rem 1.8125rem;
      display: block; }
      .nav-header .brand-logo a i {
        font-size: 1.375rem; }
      .nav-header .brand-logo a b img {
        max-width: 1.5625rem; }
      .nav-header .brand-logo a span {
        font-size: 1.125rem; }

.nav-control {
  cursor: pointer;
  position: absolute;
  left: 1.4375rem;
  text-align: center;
  top: 46%;
  transform: translateY(-50%); }
  @media (max-width: 575.98px) {
    .nav-control {
      left: .4375rem; } }
  .nav-control .hamburger.active {
    z-index: -1; }

.hamburger {
  display: inline-block;
  right: 0;
  position: relative;
  top: 0.3125rem;
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
  width: 2.3125rem;
  z-index: 999; }
  .hamburger.is-active {
    left: 0;
    z-index: 9; }
  .hamburger .toggle-icon {
    font-size: 1.4rem;
    line-height: 2rem;
    color: #494949; }

.hamburger:hover {
  cursor: pointer; }

@media (min-width: 767px) {
  [data-sidebar-style="compact"] .nav-control {
    display: none; }
  [data-sidebar-style="compact"] .nav-header {
    width: 9.375rem; } }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .brand-title {
  display: none; }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .logo-abbr {
  display: block; }

[data-sidebar-style="full"][data-layout="horizontal"] .brand-title {
  display: none; }

[data-sidebar-style="full"][data-layout="horizontal"] .nav-header .logo-abbr {
  display: none; }

[data-sidebar-style="full"][data-layout="horizontal"] .logo-compact {
  display: block; }

[data-sidebar-style="mini"] .nav-header .logo-abbr {
  display: block; }

[data-sidebar-style="compact"] .nav-header .brand-title {
  display: none; }

[data-sidebar-style="compact"] .nav-header .logo-compact {
  display: block; }

.header {
  height: 5rem;
  z-index: 1;
  position: relative;
  padding: 0 0.9375rem;
  background: #fff;
  margin-left: 15.1875rem;
  transition: all .2s ease; }
  .header .header-content {
    height: 100%; }

@media (max-width: 767px) {
  .nav-header {
    width: 3.75rem; }
    .nav-header .brand-title {
      display: none; }
  .header-left {
    margin-left: 1.875rem; }
    [direction="rtl"] .header-left {
      margin-left: auto;
      margin-right: 1.875rem; }
  .header-content {
    margin-left: 3.75rem; }
    [direction="rtl"] .header-content {
      margin-left: 0; } }

[data-sidebar-style="full"] .header, [data-sidebar-style="overlay"] .header {
  width: calc(100% - 15.1875rem); }
  @media only screen and (min-width: 1200px) and (max-width: 1350px) {
    [data-sidebar-style="full"] .header, [data-sidebar-style="overlay"] .header {
      width: calc(100% - 14.375rem);
      margin-left: 14.375rem; } }
  @media only screen and (max-width: 767px) {
    [data-sidebar-style="full"] .header, [data-sidebar-style="overlay"] .header {
      width: calc(100% - 3.75rem);
      margin-left: 3.75rem; } }

[data-sidebar-style="mini"] .header {
  width: calc(100% - 3.75rem);
  margin-left: 3.75rem; }

[data-sidebar-style="compact"] .header {
  width: calc(100% - 9.375rem);
  margin-left: 9.375rem; }

[data-header-position="fixed"] .header {
  position: fixed;
  top: 0; }

[data-header-position="fixed"] .content-body {
  padding-top: 5rem; }

[data-header-position="fixed"] .nk-sidebar {
  margin-top: 0; }

[data-sidebar-style="compact"][data-header-position="fixed"][data-container="boxed"][data-layout="vertical"] .header {
  width: calc(1199px - 9.375rem); }

.header-left {
  float: left;
  margin-left: 50px;
  height: 100%; }
  .header-left .icons {
    float: left;
    margin: 0;
    padding: 0 0.3125rem;
    position: relative; }
    .header-left .icons > a {
      padding: 0 0.3125rem;
      color: #464a53; }
  .header-left .input-group {
    margin-top: 17px; }
    .header-left .input-group input {
      border-radius: 5px !important; }
    .header-left .input-group .input-group-text {
      font-size: 1.375rem; }
      @media (max-width: 575.98px) {
        .header-left .input-group .input-group-text {
          padding-left: .5rem; } }
  .header-left .drop-down {
    top: 0;
    height: 100%;
    box-shadow: none;
    width: 100%; }
    .header-left .drop-down form {
      height: 100%; }
    .header-left .drop-down input.form-control {
      height: 100%;
      border: none; }
      .header-left .drop-down input.form-control:focus {
        box-shadow: none; }

[data-sidebar-style="compact"] .header-left {
  margin-left: 0; }

.icons > a {
  position: relative;
  display: inline-block; }
  .icons > a i {
    font-size: 1.25rem;
    color: #abafb3; }

.icons.active .drop-down {
  display: block; }

.drop-down {
  display: none;
  z-index: 9999;
  width: 20rem;
  top: 0rem !important;
  position: absolute;
  right: 0 !important;
  left: auto !important;
  transform: translate3d(0px, 75px, 0px) !important;
  transition: all 0.4s ease-in-out;
  border-top: 0;
  background: #fff;
  color: #000;
  box-shadow: 0px 1px 10px 0 rgba(0, 0, 0, 0.15); }

.dropdown-content-heading {
  padding: 0.9375rem 0.9375rem;
  line-height: 1.25;
  background: #F9FAFC; }
  .dropdown-content-heading span {
    font-size: 1rem;
    color: #333; }
  .dropdown-content-heading i {
    color: #7571f9; }

.dropdown-content-body ul {
  padding: 0 1.25rem;
  background-color: #fff; }

.dropdown-content-body ul > li {
  float: none;
  line-height: 1.25;
  padding: 0.9375rem 0;
  position: relative;
  transition: all 0.4s ease-in-out; }

.notification-heading {
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1.25;
  color: #333; }

.notification-unread {
  background: white; }
  .notification-unread .notification-heading {
    color: #464a53; }

.avatar-img {
  border-radius: 50px;
  width: 2.5rem;
  position: absolute;
  top: 1.2rem; }

.avatar-icon {
  border-radius: 50px;
  width: 2.5rem;
  position: absolute;
  top: 0.9625rem;
  height: 2.5rem;
  padding: 0.625rem 0.8125rem; }

.notification-content {
  margin-left: 3.4375rem;
  margin-right: 1.5625rem; }

.user-avatar {
  margin-left: 0.625rem;
  font-size: 0.875rem;
  font-weight: 700; }

.notification-text {
  font-size: 0.725rem;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  padding-top: 0.1875rem;
  line-height: 1.25;
  font-weight: 300; }

.notification-timestamp {
  font-size: 0.725rem;
  display: block;
  margin-top: 0.5625rem;
  font-weight: 300; }

.notification-percentage {
  font-size: 0.75rem;
  position: relative;
  top: 0.75rem; }

.more-link {
  display: inline-block;
  color: #464a53 !important; }

.dropdown-notfication li:not(:last-child) {
  border-bottom: 1px solid #EEEEEE; }

.dropdown-notfication li a {
  display: block; }

.dropdown-notfication li:nth-child(1) .avatar-icon {
  background-color: #F6514C; }

.dropdown-notfication li:nth-child(2) .avatar-icon {
  background-color: #449036; }

.dropdown-notfication li:nth-child(3) .avatar-icon {
  background-color: #CE2B23; }

.dropdown-notfication li:nth-child(4) .avatar-icon {
  background-color: #3375E1; }

.dropdown-notfication .avatar-icon {
  top: 0.9625rem;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff; }

.dropdown-mega-menu {
  width: 100%;
  right: 0;
  left: 0;
  padding: 1.875rem; }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .dropdown-mega-menu ul {
      display: flex;
      flex-direction: column;
      height: 12.5rem !important;
      flex-wrap: wrap; } }
  .dropdown-mega-menu ul a {
    transition: all .2s; }
  .dropdown-mega-menu .heading {
    color: #000; }
  .dropdown-mega-menu .ext-link a {
    display: inline-block;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
    line-height: 2.4;
    text-align: center;
    width: 13.125rem; }

.dropdown-profile {
  width: 12rem; }
  @media (max-width: 575.98px) {
    .dropdown-profile {
      width: 12.5rem !important; } }
  .dropdown-profile .trial-day {
    color: #7571f9; }
  .dropdown-profile ul {
    padding: 0rem 0; }
  .dropdown-profile li {
    padding: 0.4375rem 1.25rem !important;
    margin-bottom: 0 !important; }
    .dropdown-profile li a {
      display: block; }
      .dropdown-profile li a span {
        transition: all .2s; }
      .dropdown-profile li a i {
        margin-right: 0.3125rem;
        font-size: 0.95rem;
        position: relative;
        top: 2px;
        color: #333; }
    .dropdown-profile li:last-child {
      padding: .7rem 0.9375rem; }

.dropdown-language {
  width: 7.5rem; }
  .dropdown-language ul {
    padding: 0.625rem 0; }
    .dropdown-language ul li {
      padding: 0.4375rem 1.25rem; }

.dropdown-task .progress {
  box-shadow: none;
  height: 0.3125rem;
  margin-bottom: 0.3125rem;
  margin-top: 0.625rem; }

.dropdown-task .progress-bar {
  box-shadow: none; }

.notify-close {
  position: absolute;
  right: 0.9375rem;
  top: 1.25rem;
  cursor: pointer;
  font-size: 0.875rem;
  opacity: 0.3; }

.log-user {
  position: relative;
  top: -0.3125rem; }
  .log-user img {
    border-radius: 50px;
    height: 1.875rem;
    width: 1.875rem;
    margin-left: 0.3125rem; }
  .log-user span {
    padding: 0 .5rem 0 0.625rem;
    font-size: 0.875rem; }

/* pulse in SVG */
svg.pulse-svg {
  overflow: visible; }
  svg.pulse-svg .first-circle, svg.pulse-svg .second-circle, svg.pulse-svg .third-circle {
    -webkit-transform: scale(0.3);
    transform: scale(0.3);
    -webkit-transform-origin: center center;
    transform-origin: center center;
    -webkit-animation: pulse-me 3s linear infinite;
    animation: pulse-me 3s linear infinite;
    fill: #7571f9; }
  svg.pulse-svg .second-circle {
    -webkit-animation-delay: 1s;
    animation-delay: 1s; }
  svg.pulse-svg .third-circle {
    -webkit-animation-delay: 2s;
    animation-delay: 2s; }

.header-right {
  float: right;
  line-height: 3rem;
  margin-top: 0;
  height: 100%; }
  .header-right ul {
    height: 100%;
    margin: 0; }
  .header-right .icons {
    float: left;
    margin: 0;
    padding: 0 0.3125rem;
    position: relative;
    height: 100%;
    display: flex;
    align-items: center; }
    @media (max-width: 575.98px) {
      .header-right .icons {
        padding: 0 0.2825rem; } }
    .header-right .icons > a {
      padding: 0 0.3125rem;
      color: #464a53; }
    .header-right .icons .dropdown-profile .badge {
      top: auto;
      bottom: auto;
      left: auto;
      right: 1.25rem; }
    .header-right .icons .badge {
      color: #fff;
      height: 1.25rem;
      width: 1.25rem;
      line-height: 0.875rem;
      font-size: 0.75rem;
      position: absolute;
      right: -2px;
      top: 2px; }
    .header-right .icons .user-img {
      position: relative;
      top: -7px; }
      .header-right .icons .user-img img {
        height: 40px;
        width: 40px;
        border: 3px solid #fff;
        border-radius: 50%;
        margin: 0;
        padding: 0;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1); }
      .header-right .icons .user-img .activity {
        height: 13px;
        width: 13px;
        border-radius: 50%;
        display: inline-block;
        position: absolute;
        border: 3px solid #fff;
        bottom: .4rem;
        right: 0rem;
        padding: 0;
        top: auto;
        left: auto; }
    .header-right .icons .dropdown-content-heading .badge {
      position: relative;
      top: auto;
      left: auto;
      right: auto;
      bottom: auto; }

/*
0 - 600: Phone
600 - 900: Tablet portrait
900 - 1200: Tablet landscape
1200 - 1800: Normal styles
1800+ : Big Desktop
1em = 16px
The smaller device rules always should write below the bigger device rules
Fixing Order => Base + Typography >> General Layout + Grid >> Page Layout + Component
*/
.nav-user {
  text-align: center;
  margin-bottom: 0.625rem;
  padding: 1.25rem 0.9375rem 0.9375rem;
  border-bottom: 1px solid rgba(120, 130, 140, 0.13); }
  .nav-user img {
    width: 3.125rem;
    height: 3.125rem; }
  .nav-user h5 {
    margin-top: 0.625rem;
    margin-bottom: 3px;
    color: #464a53; }
  .nav-user p {
    margin-bottom: 0.5rem; }
  .nav-user .nav-user-option {
    position: relative; }
    .nav-user .nav-user-option .dropdown-menu {
      left: 1.875rem !important;
      top: 1.375rem !important;
      background: #fff;
      border: 1px solid rgba(120, 130, 140, 0.13);
      box-shadow: 0 0 1.5625rem rgba(120, 130, 140, 0.13);
      padding: 0.625rem 0; }
      .nav-user .nav-user-option .dropdown-menu a {
        color: #abafb3;
        line-height: 1.6875rem; }
        .nav-user .nav-user-option .dropdown-menu a:hover, .nav-user .nav-user-option .dropdown-menu a:focus, .nav-user .nav-user-option .dropdown-menu a.active {
          background: white; }
    .nav-user .nav-user-option .setting-option {
      display: inline-block;
      cursor: pointer; }
      .nav-user .nav-user-option .setting-option i {
        font-size: 0.625rem;
        padding: 0 0.3125rem; }
    .nav-user .nav-user-option .notification-option {
      display: inline-block;
      cursor: pointer; }
      .nav-user .nav-user-option .notification-option i {
        font-size: 0.625rem;
        padding: 0 0.3125rem; }

.nav-label {
  padding: 0.8125rem 1.5625rem;
  text-transform: uppercase;
  font-size: 0.75rem;
  letter-spacing: 0.05rem;
  color: #abafb3; }

.nav-badge {
  position: absolute;
  right: 2.8125rem;
  top: 0.625rem; }

.content-body {
  margin-left: 15.1875rem;
  z-index: 0; }
  @media only screen and (min-width: 1200px) and (max-width: 1350px) {
    .content-body {
      margin-left: 14.375rem; } }

.nk-sidebar {
  width: 15.1875rem;
  padding-bottom: 112px;
  height: 100%;
  position: absolute;
  top: 5rem;
  padding-top: 0;
  z-index: 99;
  background: #fff;
  transition: all .2s ease; }
  @media only screen and (min-width: 1200px) and (max-width: 1350px) {
    .nk-sidebar {
      width: 14.375rem; } }
  .nk-sidebar ul {
    padding: 0;
    margin: 0;
    list-style: none;
    background: #fafafa; }
  .nk-sidebar .metismenu {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    background: #fff; }
    .nk-sidebar .metismenu > li {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      position: relative;
      color: #464a53; }
      .nk-sidebar .metismenu > li > a {
        transition: none; }
      .nk-sidebar .metismenu > li:hover i, .nk-sidebar .metismenu > li:focus i, .nk-sidebar .metismenu > li.active i {
        color: #464a53 !important; }
      .nk-sidebar .metismenu > li:hover span, .nk-sidebar .metismenu > li:focus span, .nk-sidebar .metismenu > li.active span {
        color: #464a53; }
      .nk-sidebar .metismenu > li:hover > a {
        background: #F3F1FA;
        color: #7571f9; }
      .nk-sidebar .metismenu > li.active > a {
        background: #F3F1FA;
        color: #464a53; }
      .nk-sidebar .metismenu > li.active ul a {
        color: #464a53; }
      .nk-sidebar .metismenu > li a > i {
        font-size: 0.95rem;
        display: inline-block;
        vertical-align: middle;
        padding: 0 0.4375rem 0 0;
        color: #464a53; }
    .nk-sidebar .metismenu a {
      position: relative;
      display: block;
      padding: 0.8125rem 1.25rem;
      outline-width: 0;
      transition: all .3s ease-out;
      color: #464a53; }
    .nk-sidebar .metismenu ul a {
      padding: 0.625rem 0.9375rem 0.625rem 2.8125rem; }
    .nk-sidebar .metismenu ul ul a {
      padding: 0.625rem 0.9375rem 0.625rem 3.75rem; }
    .nk-sidebar .metismenu .mega-menu ul.in li a:hover, .nk-sidebar .metismenu .mega-menu ul.in li a:focus, .nk-sidebar .metismenu .mega-menu ul.in li a.active {
      color: #7571f9; }
    .nk-sidebar .metismenu a {
      transition: all 0.4s ease-in-out; }
      .nk-sidebar .metismenu a:hover, .nk-sidebar .metismenu a:active, .nk-sidebar .metismenu a.active {
        text-decoration: none;
        background-color: #F3F1FA; }
    .nk-sidebar .metismenu .has-arrow:after {
      position: absolute;
      content: "";
      width: .5em;
      height: .5em;
      border-width: 1px 0 0 1px;
      border-style: solid;
      border-color: initial;
      right: 1.5em;
      -webkit-transform: rotate(135deg) translateY(-50%);
      transform: rotate(135deg) translateY(-50%);
      -webkit-transform-origin: top;
      transform-origin: top;
      top: 50%;
      transition: all .3s ease-out; }

.metismenu .active > .has-arrow:after, .metismenu .has-arrow[aria-expanded=true]:after {
  transform: rotate(225deg) translateY(-50%);
  -webkit-transform: rotate(225deg) translateY(-50%); }

@media (max-width: 767px) {
  .nav-header {
    width: 3.75rem; }
    .nav-header .brand-title {
      display: none; }
  .header-left {
    margin-left: 1.875rem; }
    .header-left input[type="search"] {
      position: absolute;
      top: -100%; }
    [direction="rtl"] .header-left {
      margin-left: auto;
      margin-right: 1.875rem; }
  .header-content {
    margin-left: 3.75rem; } }
  @media (max-width: 767px) and (max-width: 767.98px) {
    .header-content {
      margin-left: 0; } }

@media (max-width: 767px) {
    [direction="rtl"] .header-content {
      margin-left: 0; }
  .footer {
    padding-left: 0; }
  .nk-sidebar {
    transition: all 0.5s ease-in-out;
    position: absolute;
    left: 0; } }

@media (max-width: 600px) {
  .input {
    background-color: #7571f9; }
    .input span::after {
      color: #464a53; } }

.metismenu {
  transition: all .4s ease-in-out; }

.metismenu.fixed {
  position: fixed;
  top: 0;
  width: 100%;
  left: 0; }

/*
0 - 600: Phone
600 - 900: Tablet portrait
900 - 1200: Tablet landscape
1200 - 1800: Normal styles
1800+ : Big Desktop
1em = 16px
The smaller device rules always should write below the bigger device rules
Fixing Order => Base + Typography >> General Layout + Grid >> Page Layout + Component
*/
[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header {
  width: 3.75rem; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .brand-logo {
    z-index: 999; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .brand-logo a {
      padding: 1.607rem 1.0625rem;
      text-align: center; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .brand-logo a b img {
        margin-top: 0.4375rem; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nav-header .nav-control .hamburger .line {
    background-color: #464a53 !important; }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header {
  margin-left: 3.75rem;
  width: calc(100% - 3.75rem); }
  [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header {
    margin-left: auto;
    margin-right: 3.75rem; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header .header-left {
    margin-left: 3.125rem; }
    [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header .header-left {
      margin-right: 3.125rem;
      margin-left: auto; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header .header-left .drop-down {
      top: 0.3125rem; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .header .header-content {
    margin-left: 0; }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar {
  width: 3.75rem;
  overflow: visible;
  position: absolute; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .nav-text {
    display: none; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .slimScrollDiv,
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .nk-nav-scroll {
    overflow: visible !important; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu li {
    position: relative; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu li > ul {
      position: absolute;
      left: 3.75rem;
      top: 2.9375rem;
      width: 11.875rem;
      z-index: 1001;
      display: none;
      padding-left: 1px; }
      [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu li > ul {
        left: auto;
        right: 3.75rem; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu li > ul li:hover ul {
        display: block;
        left: 11.8125rem;
        top: 0; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li {
    transition: all 0.4s ease-in-out; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li > a.has-arrow:after {
      display: none; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu > ul.collapse:not(.in) {
      height: 252px !important; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu:hover > a {
      width: calc(70vw + 3.75rem); }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu:hover > ul {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      max-height: 13.75rem;
      width: 70vw; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu:hover > ul ul a {
        width: 101%; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-xl:hover > a {
      width: calc(70vw + 3.75rem); }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      max-height: 21.875rem;
      width: 70vw; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul ul a {
        width: 101%; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-lg:hover > a {
      width: calc(55vw + 3.75rem); }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      max-height: 18.125rem;
      width: 55vw; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul ul a {
        width: 101%; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-md:hover > a {
      width: calc(45vw + 3.75rem); }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      max-height: 18.75rem;
      width: 45vw; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-md:hover > ul ul a {
        width: 101%; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-sm:hover > a {
      width: calc(22vw + 3.75rem); }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      max-height: 18.125rem;
      width: 22vw; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul ul a {
        width: 101%; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover:nth-last-child(-n + 3) > ul {
      bottom: 2.9375rem;
      top: auto; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > a {
      width: 15.625rem; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > a .nav-text {
        display: inline-block;
        padding-left: 1.6875rem; }
        [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > a .nav-text {
          padding-left: auto;
          padding-right: 1.6875rem; }
    [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > ul {
      display: block;
      height: auto;
      overflow: visible; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > ul a {
        padding: 0.625rem 0.9375rem 0.625rem 0.9375rem;
        margin-left: -.1rem; }
      [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu > li:hover > ul ul a {
        padding: 0.625rem 0.9375rem 0.625rem 3rem;
        margin-left: -.1rem; }
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu .nav-label,
  [data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .nk-sidebar .metismenu .nav-badge {
    display: none; }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .content-body {
  margin-left: 3.75rem; }
  [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .content-body {
    margin-right: 3.75rem;
    margin-left: auto; }

[data-sidebar-style="full"][data-layout="vertical"] .menu-toggle + .footer {
  padding-left: 3.75rem; }
  [direction="rtl"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle + .footer {
    padding-left: 0;
    padding-right: 3.75rem; }

/*
0 - 600: Phone
600 - 900: Tablet portrait
900 - 1200: Tablet landscape
1200 - 1800: Normal styles
1800+ : Big Desktop
1em = 16px
The smaller device rules always should write below the bigger device rules
Fixing Order => Base + Typography >> General Layout + Grid >> Page Layout + Component
*/
@media only screen and (min-width: 768px) {
  [data-sidebar-style="mini"] .nav-header {
    width: 3.75rem; }
    [data-sidebar-style="mini"] .nav-header .brand-logo {
      z-index: 999; }
      [data-sidebar-style="mini"] .nav-header .brand-logo a {
        padding: 1.607rem 1.0625rem; }
        [data-sidebar-style="mini"] .nav-header .brand-logo a b img {
          margin-top: 0.4375rem; }
    [data-sidebar-style="mini"] .nav-header .nav-control {
      z-index: -1; }
      [data-sidebar-style="mini"] .nav-header .nav-control .hamburger {
        left: 3.75rem !important; }
        [data-sidebar-style="mini"] .nav-header .nav-control .hamburger .line {
          background-color: #464a53 !important; }
    [data-sidebar-style="mini"] .nav-header .brand-title {
      display: none; }
    [data-sidebar-style="mini"] .nav-header .hamburger {
      display: none; }
  [data-sidebar-style="mini"] .header-content {
    margin-left: 0; }
    [data-sidebar-style="mini"] .header-content .header-left {
      margin-left: 0.625rem; }
      [data-sidebar-style="mini"] .header-content .header-left .drop-down {
        top: 0.3125rem; }
  [data-sidebar-style="mini"] .nav-user {
    padding: 1.25rem 0.9375rem 0.9375rem; }
    [data-sidebar-style="mini"] .nav-user img {
      width: 2.1875rem;
      height: 2.1875rem;
      margin-bottom: 0.625rem; }
    [data-sidebar-style="mini"] .nav-user h5,
    [data-sidebar-style="mini"] .nav-user p {
      display: none; }
    [data-sidebar-style="mini"] .nav-user i {
      margin-top: 0.9375rem;
      display: block; }
    [data-sidebar-style="mini"] .nav-user .dropdown-menu {
      left: 2.8125rem !important;
      top: 1.375rem !important; }
  [data-sidebar-style="mini"] .nk-sidebar {
    width: 3.75rem;
    overflow: visible;
    position: absolute; }
    [data-sidebar-style="mini"] .nk-sidebar .nav-text {
      display: none; }
    [data-sidebar-style="mini"] .nk-sidebar .slimScrollDiv,
    [data-sidebar-style="mini"] .nk-sidebar .nk-nav-scroll {
      overflow: visible !important; }
    [data-sidebar-style="mini"] .nk-sidebar .metismenu li {
      position: relative; }
      [data-sidebar-style="mini"] .nk-sidebar .metismenu li a {
        padding: 0.8125rem 0.9375rem; }
      [data-sidebar-style="mini"] .nk-sidebar .metismenu li > ul {
        position: absolute;
        left: 3.75rem;
        top: 2.9375rem;
        width: 11.875rem;
        z-index: 1001;
        display: none;
        padding-left: 1px; }
        [direction="rtl"]:not([data-layout="horizontal"])[data-sidebar-style="mini"] .nk-sidebar .metismenu li > ul {
          left: auto;
          right: 3.75rem; }
    [data-sidebar-style="mini"] .nk-sidebar .metismenu > li > a.has-arrow:after {
      display: none; }
    [data-sidebar-style="mini"] .nk-sidebar .metismenu .nav-label,
    [data-sidebar-style="mini"] .nk-sidebar .metismenu .nav-badge {
      display: none; }
  [data-sidebar-style="mini"] .content-body {
    margin-left: 3.75rem; }
  [data-sidebar-style="mini"] .footer {
    padding-left: 3.75rem; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:nth-last-child(-n + 3) > ul {
    bottom: 2.9375rem;
    top: auto; } }

@media only screen and (min-width: 768px) and (max-width: 1199px) {
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:nth-last-child(-n + 6) > ul {
    bottom: 2.9375rem;
    top: auto; } }

@media only screen and (min-width: 768px) {
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li > ul {
    overflow: visible; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li > ul li:hover ul {
      display: block;
      left: 11.875rem;
      top: 0; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > a {
    width: 15.625rem; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > a .nav-text {
      display: inline-block;
      padding-left: 1.6875rem; }
      [direction="rtl"][data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > a .nav-text {
        padding-left: auto;
        padding-right: 1.6875rem; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > ul {
    display: block;
    height: auto !important;
    overflow: visible; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > ul a {
      padding: 0.625rem 0.9375rem 0.625rem 0.9375rem;
      margin-left: -1.6px; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li:hover > ul ul a {
      padding: 0.625rem 0.9375rem 0.625rem 3rem;
      margin-left: -1.6px; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu > ul.collapse:not(.in) {
    height: 252px !important; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu:hover > a {
    width: calc(70vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 13.75rem;
    width: 70vw; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > a {
    width: calc(70vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 21.875rem;
    width: 70vw; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > a {
    width: calc(80vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.125rem;
    width: 80vw; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-md:hover > a {
    width: calc(45vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.75rem;
    width: 45vw; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > a {
    width: calc(29vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.125rem;
    width: 29vw; }
    [data-sidebar-style="mini"][data-layout="vertical"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu:hover > a {
    width: calc(60vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 25rem;
    width: 60vw; }
    [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > a {
    width: calc(60vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 25.625rem;
    width: 60vw; }
    [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > a {
    width: calc(50vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 16.25rem;
    width: 50vw; }
    [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-md:hover > a {
    width: calc(40vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.75rem;
    width: 40vw; }
    [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > a {
    width: calc(22vw + 3.75rem); }
  [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.125rem;
    width: 22vw; }
    [data-sidebar-style="mini"][data-layout="vertical"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul ul a {
      width: 101%; }
  [data-sidebar-style="mini"][data-header-position="fixed"][data-container="boxed"][data-layout="vertical"] .header {
    width: calc(1199px - 3.75rem); } }

@media (min-width: 767px) {
  [data-sidebar-style="compact"] .nk-sidebar {
    width: 9.375rem; }
  [data-sidebar-style="compact"] .metismenu li {
    text-align: center; }
    [data-sidebar-style="compact"] .metismenu li a {
      padding: 0.625rem 0.9375rem 0.625rem 0.9375rem; }
  [data-sidebar-style="compact"] .nav-text {
    display: block;
    margin-top: 0.3125rem; }
  [data-sidebar-style="compact"] .nav-badge {
    display: none; }
  [data-sidebar-style="compact"] .footer {
    padding-left: 9.375rem; }
  [data-sidebar-style="compact"] .content-body {
    margin-left: 9.375rem; } }

[data-layout="vertical"][data-sidebar-style="compact"] .nk-sidebar .metismenu ul ul a {
  padding: 0.625rem 0.9375rem; }

[data-layout="vertical"][data-sidebar-style="compact"] .nk-sidebar .metismenu > li > a.has-arrow::after {
  top: 35%; }

@media (min-width: 1199px) {
  [data-layout="horizontal"] .nav-header {
    width: 9.0625rem; }
    [data-layout="horizontal"] .nav-header .nav-control {
      display: none; }
  [data-layout="horizontal"] .header {
    width: calc(100% - 9.0625rem);
    margin-left: 9.0625rem;
    z-index: 9; }
    [data-layout="horizontal"] .header .header-left {
      margin-left: 0; }
  [data-layout="horizontal"] .nk-sidebar {
    width: 100%;
    position: relative;
    height: auto;
    padding-bottom: 0;
    top: 0;
    z-index: 8; }
    [data-layout="horizontal"] .nk-sidebar .slimScrollDiv {
      overflow: visible !important; }
      [data-layout="horizontal"] .nk-sidebar .slimScrollDiv .nk-nav-scroll {
        overflow: visible !important; }
    [data-layout="horizontal"] .nk-sidebar .nav-user,
    [data-layout="horizontal"] .nk-sidebar .nav-label {
      display: none; }
    [data-layout="horizontal"] .nk-sidebar .metismenu {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      [data-layout="horizontal"] .nk-sidebar .metismenu .collapse.in {
        display: none; }
      [data-layout="horizontal"] .nk-sidebar .metismenu .has-arrow:after {
        transform: rotate(135deg) translateY(-50%); }
      [data-layout="horizontal"] .nk-sidebar .metismenu li {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        position: relative; }
        [data-layout="horizontal"] .nk-sidebar .metismenu li > ul {
          position: absolute;
          top: 2.9375rem;
          width: 100%;
          min-width: 13.75rem;
          z-index: 999;
          left: auto;
          right: auto;
          padding: 1rem 0; }
          [data-layout="horizontal"] .nk-sidebar .metismenu li > ul li {
            padding: 0 1.25rem; }
            [data-layout="horizontal"] .nk-sidebar .metismenu li > ul li a {
              transition: all .4s ease-in-out;
              padding: 0.625rem 0.9375rem 0.625rem 0.9375rem;
              margin-left: -.1rem; }
              [data-layout="horizontal"] .nk-sidebar .metismenu li > ul li a:hover {
                border-radius: .4rem; }
          [data-layout="horizontal"] .nk-sidebar .metismenu li > ul ul a {
            padding: 0.625rem 0.9375rem 0.625rem 1.875rem;
            margin-left: -.1rem; }
      [data-layout="horizontal"] .nk-sidebar .metismenu > li {
        flex: 0 0 auto;
        position: relative; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:not(:last-child) {
          position: static; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul {
          left: 0;
          right: 0;
          padding: 1.25rem 2.8125rem; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
            border-right: 1px solid #EEEEEE;
            padding: 0 1.25rem; }
            [data-theme-version="dark"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: rgba(120, 130, 140, 0.13); }
            [data-sibebarbg="color_2"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #05080b; }
            [data-sibebarbg="color_3"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #2e0c43; }
            [data-sibebarbg="color_4"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #22134e; }
            [data-sibebarbg="color_5"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #711717; }
            [data-sibebarbg="color_6"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #121843; }
            [data-sibebarbg="color_7"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #0b3564; }
            [data-sibebarbg="color_8"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #013758; }
            [data-sibebarbg="color_9"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #002629; }
            [data-sibebarbg="color_10"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li {
              border-color: #263f15; }
            [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li a {
              transition: all .4s ease-in-out; }
              [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu ul li a:hover {
                border-radius: 0.25rem; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          max-height: 13.75rem;
          width: 70vw;
          z-index: 99; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
            content: "";
            height: 100%;
            width: 1px;
            position: absolute;
            background-color: #fff;
            right: 2.8125rem;
            top: 0; }
            [data-theme-version="dark"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #1b2b42; }
            [data-sibebarbg="color_2"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #16202d; }
            [data-sibebarbg="color_3"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #4c136f; }
            [data-sibebarbg="color_4"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #331d77; }
            [data-sibebarbg="color_5"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #9c1f1f; }
            [data-sibebarbg="color_6"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #1d276b; }
            [data-sibebarbg="color_7"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #104d92; }
            [data-sibebarbg="color_8"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #01578b; }
            [data-sibebarbg="color_9"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #00545c; }
            [data-sibebarbg="color_10"][data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul::after {
              background-color: #3e6522; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu:hover > ul ul a {
            width: 101%; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          max-height: 25rem;
          width: 70vw; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul ul a {
            width: 101%; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          max-height: 25rem;
          width: 60vw;
          height: 25rem !important; } }
        @media only screen and (min-width: 1199px) and (min-width: 1200px) and (max-width: 1500px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
            width: 80vw; } }

@media (min-width: 1199px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul ul a {
            width: 101%; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          max-height: 25rem;
          width: 54vw; } }
        @media only screen and (min-width: 1199px) and (min-width: 1200px) and (max-width: 1500px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
            width: 60vw; } }

@media (min-width: 1199px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul ul a {
            width: 101%; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
          display: flex;
          flex-wrap: wrap;
          flex-direction: column;
          max-height: 20rem;
          width: 35vw; } }
        @media only screen and (min-width: 1199px) and (min-width: 1200px) and (max-width: 1500px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
            width: 35vw; } }

@media (min-width: 1199px) {
          [data-layout="horizontal"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul ul a {
            width: 101%; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li:not(:last-child) {
          border-right: 1px solid white; }
          [data-theme-version="dark"][data-layout="horizontal"] .nk-sidebar .metismenu > li:not(:last-child) {
            border-color: rgba(120, 130, 140, 0.13); }
        [direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li:not(:first-child) {
          border-right: 1px solid #EEEEEE; }
        [direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li:first-child {
          border-right: 0; }
        [data-theme-version="dark"][direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li {
          border-color: rgba(120, 130, 140, 0.13); }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li > a {
          padding: 0.8125rem 0.625rem; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li > a i {
            padding: 0 0.4375rem 0 0; }
            [direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li > a i {
              padding: 0 0 0 0.4375rem; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li > a .nav-badge {
            display: none; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li > a:after {
            display: none; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li:hover > ul {
          display: flex !important;
          flex-direction: column;
          flex-wrap: wrap; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li:hover > ul.collapse:not(.in) {
            height: auto !important; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li > ul > li:hover ul.collapse {
          display: block !important;
          position: absolute;
          left: auto !important;
          right: -100% !important;
          top: 0 !important; }
        [data-layout="horizontal"] .nk-sidebar .metismenu > li:nth-last-child(-n + 5) > ul {
          left: auto;
          right: 0; }
          [data-layout="horizontal"] .nk-sidebar .metismenu > li:nth-last-child(-n + 5) > ul > li:hover ul.collapse {
            right: auto !important;
            left: -100% !important; }
        [direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li:nth-last-child(-n + 3) > ul {
          left: 0;
          right: auto; }
          [direction="rtl"][data-layout="horizontal"] .nk-sidebar .metismenu > li:nth-last-child(-n + 3) > ul > li:hover ul.collapse {
            right: -100% !important;
            left: auto !important; }
      [data-layout="horizontal"] .nk-sidebar .metismenu > li:last-child .has-arrow:after {
        transform: rotate(-45deg) translateY(-50%); }
  [data-layout="horizontal"] .content-body {
    margin-top: 0;
    margin-left: 0; }
    [data-layout="horizontal"] .content-body .page-titles {
      margin-left: 0;
      margin-right: 0;
      margin-top: -1px;
      margin-bottom: 1.875rem; }
  [data-layout="horizontal"] .footer {
    margin-left: 0;
    margin: 0 auto; }
  [data-layout="horizontal"] .sidebar-right {
    z-index: 1; }
  [data-header-position="fixed"][data-layout="horizontal"] .nk-sidebar {
    top: 5rem; }
  [data-header-position="fixed"][data-sidebar-position="fixed"] .nk-sidebar {
    position: fixed; }
  [data-header-position="fixed"][data-layout="horizontal"][data-sidebar-position="fixed"] .content-body {
    padding-top: 6.875rem; }
  [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 21.875rem;
    width: 100%; }
    [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-xl:hover > ul ul a {
      width: 101%; }
  [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 21.875rem;
    width: 55vw; }
    [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-lg:hover > ul ul a {
      width: 101%; }
  [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.75rem;
    width: 45vw; }
    [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-md:hover > ul ul a {
      width: 101%; }
  [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    max-height: 18.125rem;
    width: 30vw; }
    [data-layout="horizontal"][data-container="boxed"] .nk-sidebar .metismenu > li.mega-menu-sm:hover > ul ul a {
      width: 101%; }
  [data-layout="horizontal"][data-container="boxed"] .footer {
    margin-left: 0;
    max-width: 1199px;
    margin: 0 auto; }
  [data-layout="horizontal"][data-container="wide"] .page-titles {
    margin-left: -30px;
    margin-right: -30px; }
  [data-layout="horizontal"][data-sidebar-style="compact"] .page-titles {
    margin-top: 0; }
  [data-layout="horizontal"][data-sidebar-style="compact"] .metismenu li > ul {
    top: 4.5625rem; }
  [data-sidebar-style="mini"][data-layout="horizontal"] .nav-header {
    width: 3.75rem; }
  [data-sidebar-style="mini"][data-layout="horizontal"] .header {
    width: calc(100% - 3.75rem);
    margin-left: 3.75rem; }
  [data-sidebar-style="mini"][data-layout="horizontal"] .metismenu > li:hover a {
    width: auto; }
    [data-sidebar-style="mini"][data-layout="horizontal"] .metismenu > li:hover a .nav-text {
      display: none; }
  [data-header-position="fixed"][data-layout="horizontal"][data-sidebar-position="fixed"][data-sidebar-style="compact"] .content-body {
    padding-top: 8.75rem; } }

[data-sidebar-style="overlay"] .nk-sidebar {
  left: -100%; }
  [direction="rtl"][data-sidebar-style="overlay"] .nk-sidebar {
    left: auto;
    right: -100%; }

[data-sidebar-style="overlay"] .content-body {
  margin-left: 0; }

[data-sidebar-style="overlay"] .header-left {
  margin-left: 3.125rem; }
  @media (max-width: 767.98px) {
    [data-sidebar-style="overlay"] .header-left {
      margin-left: 1.625rem; } }

[data-sidebar-style="overlay"] .nav-header {
  position: absolute; }
  [data-sidebar-style="overlay"] .nav-header .hamburger.is-active {
    left: 0; }
    [data-sidebar-style="overlay"] .nav-header .hamburger.is-active .line {
      background-color: #fff; }

[data-sidebar-style="overlay"] .menu-toggle .nav-header {
  position: absolute;
  left: auto; }

[data-sidebar-style="overlay"] .menu-toggle .nk-sidebar {
  left: 0; }
  [direction="rtl"][data-sidebar-style="overlay"] .menu-toggle .nk-sidebar {
    left: auto;
    right: 0; }

[data-sidebar-style="overlay"] .footer {
  padding-left: 0; }

[data-sidebar-style="overlay"][data-header-position="fixed"] .nav-header {
  position: fixed; }

[data-sidebar-position="fixed"][data-header-position="fixed"] .nav-header {
  position: fixed; }

[data-layout="vertical"] .nk-sidebar .mega-menu .mega-menu-col {
  max-width: 100%;
  flex: 0 0 100%; }

[data-sidebar-position="fixed"][data-layout="vertical"] .nav-header {
  position: fixed;
  left: auto;
  z-index: 9; }

[data-sidebar-position="fixed"][data-layout="vertical"] .nk-sidebar {
  position: fixed; }

[data-sidebar-position="fixed"][data-layout="vertical"] .menu-toggle .nk-sidebar {
  position: fixed; }

[data-header-position="fixed"][data-sidebar-position="fixed"][data-sidebar-style="overlay"][data-layout="vertical"][data-container="boxed"] .nk-sidebar {
  position: absolute; }

.sidebar-right {
  right: -15.625rem;
  position: fixed;
  top: 0;
  width: 15.625rem;
  background-color: #fff;
  height: calc(100% - 7.0625rem);
  margin-top: 5rem;
  transition: all .5s ease-in-out;
  padding-bottom: 1.875rem; }
  [direction="rtl"] .sidebar-right .slimScrollDiv {
    overflow: visible !important; }
  .sidebar-right .sidebar-right-trigger {
    position: absolute;
    z-index: 9;
    top: 3.75rem;
    right: 100%;
    background-color: #7571f9;
    color: #fff;
    display: inline-block;
    height: 3.125rem;
    width: 3.125rem;
    text-align: center;
    line-height: 3.5rem;
    font-size: 1.3125rem;
    border-radius: 50px; }
    .sidebar-right .sidebar-right-trigger span {
      display: inline-block;
      animation: bounce .7s infinite ease-in-out; }
  .sidebar-right.show {
    right: 0;
    z-index: 999; }
  .sidebar-right .nav-tabs {
    justify-content: space-between;
    position: sticky;
    top: 0;
    background-color: #fff;
    z-index: 2; }
    [data-theme-version="dark"] .sidebar-right .nav-tabs {
      background-color: #162336; }
    .sidebar-right .nav-tabs .nav-item {
      margin-bottom: 0;
      flex: 1; }
      .sidebar-right .nav-tabs .nav-item .nav-link {
        border: 0;
        font-size: 1.125rem;
        position: relative;
        text-align: center;
        background-color: #fff; }
        .sidebar-right .nav-tabs .nav-item .nav-link::after {
          position: absolute;
          left: 0;
          bottom: 0;
          width: 100%;
          height: 2px;
          content: "";
          background: transparent; }
        [data-theme-version="dark"] .sidebar-right .nav-tabs .nav-item .nav-link {
          background-color: #162336; }
        .sidebar-right .nav-tabs .nav-item .nav-link.active span i::before {
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent; }
        [data-theme-version="dark"] .sidebar-right .nav-tabs .nav-item .nav-link.active {
          border-right: none;
          border-left: none;
          border-top: none; }
  .sidebar-right .tab-content {
    padding: 1.25rem; }
    .sidebar-right .tab-content .tab-pane .admin-settings p {
      margin-bottom: 0.3125rem; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"] + label::after {
      height: 1.5625rem;
      width: 1.5625rem;
      text-align: center;
      line-height: 1.2;
      left: 0;
      top: 0; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"] + label::before {
      height: 1.5625rem;
      width: 1.5625rem; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]:not(:checked) + label::after {
      z-index: 0;
      transform: scale(1); }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]:checked + label::after {
      content: "✓";
      color: #fff; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_1:not(:checked) + label::after {
      background-color: #7571f9;
      border: 2px solid #7571f9; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_1:checked + label::after {
      background-color: #7571f9;
      border: 2px solid #7571f9; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_1:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_1:not(:checked) + label::after {
      background-color: #fff;
      border: 2px solid #464a53; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_1:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_1:checked + label::after {
      background-color: #fff;
      border: 2px solid #464a53;
      color: #464a53; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_2:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_2:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_2:not(:checked) + label::after {
      background-color: #27394F;
      border: 2px solid #27394F; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_2:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_2:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_2:checked + label::after {
      background-color: #27394F;
      border: 2px solid #27394F; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_3:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_3:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_3:not(:checked) + label::after {
      background-color: #6a1b9a;
      border: 2px solid #6a1b9a; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_3:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_3:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_3:checked + label::after {
      background-color: #6a1b9a;
      border: 2px solid #6a1b9a; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_4:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_4:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_4:not(:checked) + label::after {
      background-color: #4527a0;
      border: 2px solid #4527a0; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_4:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_4:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_4:checked + label::after {
      background-color: #4527a0;
      border: 2px solid #4527a0; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_5:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_5:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_5:not(:checked) + label::after {
      background-color: #c62828;
      border: 2px solid #c62828; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_5:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_5:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_5:checked + label::after {
      background-color: #c62828;
      border: 2px solid #c62828; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_6:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_6:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_6:not(:checked) + label::after {
      background-color: #283593;
      border: 2px solid #283593; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_6:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_6:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_6:checked + label::after {
      background-color: #283593;
      border: 2px solid #283593; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_7:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_7:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_7:not(:checked) + label::after {
      background-color: #1565c0;
      border: 2px solid #1565c0; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_7:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_7:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_7:checked + label::after {
      background-color: #1565c0;
      border: 2px solid #1565c0; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_8:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_8:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_8:not(:checked) + label::after {
      background-color: #0277bd;
      border: 2px solid #0277bd; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_8:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_8:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_8:checked + label::after {
      background-color: #0277bd;
      border: 2px solid #0277bd; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_9:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_9:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_9:not(:checked) + label::after {
      background-color: #00838f;
      border: 2px solid #00838f; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_9:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_9:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_9:checked + label::after {
      background-color: #00838f;
      border: 2px solid #00838f; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_10:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_10:not(:checked) + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_10:not(:checked) + label::after {
      background-color: #558b2f;
      border: 2px solid #558b2f; }
    .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#nav_header_bg_10:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#header_bg_10:checked + label::after, .sidebar-right .tab-content .tab-pane .admin-settings [type="radio"]#sidebar_bg_10:checked + label::after {
      background-color: #558b2f;
      border: 2px solid #558b2f; }
    .sidebar-right .tab-content .tab-pane .sidebar-recent-activity {
      margin-bottom: 3.125rem; }
      [direction="rtl"] .sidebar-right .tab-content .tab-pane .sidebar-recent-activity {
        text-align: right; }
      .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline {
        padding-top: 0.9375rem; }
        .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan::before {
          left: 6.5%;
          top: 2.5rem; }
          [data-theme-version="dark"] .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan::before {
            background-color: rgba(120, 130, 140, 0.13); }
          [direction="rtl"] .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan::before {
            right: 6.5%; }
        .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan .timeline-badge {
          left: 11.4%; }
          [direction="rtl"] .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan .timeline-badge {
            right: -3%; }
        .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan .timeline-panel {
          width: 85%;
          margin-top: 0.3125rem;
          margin-left: auto; }
          [direction="rtl"] .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan .timeline-panel {
            float: left; }
          .sidebar-right .tab-content .tab-pane .sidebar-recent-activity .timeline.timeline-workplan .timeline-panel p {
            margin-top: 0;
            font-size: 0.875rem;
            margin-bottom: 0.3125rem; }
    [direction="rtl"] .sidebar-right .tab-content .tab-pane .user-chat .all-chats {
      padding: 0; }
    .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat {
      padding: 0; }
      [data-theme-version="dark"] .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat {
        background-color: transparent; }
        [data-theme-version="dark"] .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat .chat-open {
          color: #fff; }
      [direction="rtl"] .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat {
        text-align: right; }
      .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat .user-img img {
        border-radius: 50px; }
      .sidebar-right .tab-content .tab-pane .user-chat .all-chats .single-chat:not(:last-child) {
        margin-bottom: 0.9375rem; }

@keyframes bounce {
  0% {
    transform: translateX(-8%);
    -webkit-transform: translateX(-8%); }
  50% {
    transform: translateX(8%);
    -webkit-transform: translateX(8%); }
  100% {
    transform: translateX(-8%);
    -webkit-transform: translateX(-8%); } }

@-webkit-keyframes bounce {
  0% {
    transform: translateX(-8%);
    -webkit-transform: translateX(-8%); }
  50% {
    transform: translateX(8%);
    -webkit-transform: translateX(8%); }
  100% {
    transform: translateY(-8%);
    -webkit-transform: translateY(-8%); } }

/* =============
   Calendar
============= */
.calendar {
  float: left;
  margin-bottom: 0; }

.fc-view {
  margin-top: 30px; }

.none-border .modal-footer {
  border-top: none; }

.fc-toolbar {
  margin-bottom: 5px;
  margin-top: 15px; }

.fc-toolbar h2 {
  font-size: 18px;
  font-weight: 600;
  line-height: 30px;
  text-transform: uppercase; }

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar .ui-state-hover,
.fc-toolbar button:focus,
.fc-toolbar button:hover {
  z-index: 0; }

.fc-widget-header {
  border: 1px solid rgba(120, 130, 140, 0.13) !important; }

.fc-widget-content {
  border: 1px solid rgba(120, 130, 140, 0.13) !important; }

.fc th.fc-widget-header {
  background: rgba(120, 130, 140, 0.13) !important;
  font-size: 14px;
  line-height: 20px;
  padding: 10px 0;
  text-transform: uppercase; }

.fc-button {
  border: 1px solid rgba(120, 130, 140, 0.13) !important;
  text-transform: capitalize; }

.fc-text-arrow {
  font-family: inherit;
  font-size: 16px; }

.fc-event {
  border-radius: 2px;
  border: none;
  cursor: move;
  font-size: 13px;
  margin: 5px 7px;
  padding: 5px;
  text-align: center; }

.external-event {
  cursor: move;
  margin: 10px 0;
  padding: 6px 10px; }

.fc-basic-view td.fc-week-number span {
  padding-right: 5px; }

.fc-basic-view td.fc-day-number {
  padding-right: 5px; }

#drop-remove {
  margin: 0;
  top: 3px; }

#add-category .modal-header,
#event-modal .modal-header {
  border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

#add-category .modal-dialog,
#event-modal .modal-dialog {
  max-width: 600px; }

.fc-view.fc-month-view.fc-basic-view,
.fc-view.fc-agendaWeek-view.fc-agenda-view,
.fc-view.fc-agendaDay-view.fc-agenda-view {
  overflow-y: scroll; }

.fc-view-container .fc-view table {
  min-width: 450px; }

.email-left-box {
  width: 240px;
  float: left;
  padding: 0 20px 20px 10px; }

.email-right-box {
  margin-left: 250px; }

.email-list {
  display: block;
  padding-left: 0; }
  .email-list .message {
    position: relative;
    display: block;
    height: 50px;
    line-height: 50px;
    cursor: default;
    transition-duration: 0.3s; }
    .email-list .message:hover {
      transition-duration: 0.05s; }
    .email-list .message .col-mail {
      float: left;
      position: relative; }
    .email-list .message .col-mail-1 {
      width: 90px; }
      .email-list .message .col-mail-1 .star-toggle {
        display: block;
        float: left;
        margin-top: 18px;
        font-size: 16px;
        margin-left: 5px; }
      .email-list .message .col-mail-1 .email-checkbox {
        display: block;
        float: left;
        margin: 5px 10px 0 20px; }
      .email-list .message .col-mail-1 .dot {
        display: block;
        float: left;
        border: 4px solid transparent;
        border-radius: 100px;
        margin: 22px 26px 0;
        height: 0;
        width: 0;
        line-height: 0;
        font-size: 0; }
    .email-list .message .col-mail-2 {
      position: absolute;
      top: 0;
      left: 90px;
      right: 0;
      bottom: 0; }
      .email-list .message .col-mail-2 .subject {
        position: absolute;
        top: 0;
        left: 0;
        right: 200px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap; }
      .email-list .message .col-mail-2 .date {
        position: absolute;
        top: 0;
        right: 0;
        width: 170px;
        padding-left: 80px; }

.email-checkbox {
  cursor: pointer;
  height: 15px;
  width: 15px;
  position: relative;
  display: inline-block;
  border-radius: 1px;
  position: relative;
  top: 0px; }
  .email-checkbox input {
    cursor: pointer; }
    .email-checkbox input:checked label {
      opacity: 1; }
  .email-checkbox label {
    position: absolute;
    top: 3px;
    left: 3px;
    right: 3px;
    bottom: 3px;
    cursor: pointer;
    margin-bottom: 0 !important;
    transition-duration: 0.05s; }

.mail-list a {
  vertical-align: middle;
  padding: 10px 15px;
  display: block;
  background: transparent; }

@media (max-width: 648px) {
  .email-left-box {
    width: 100%; }
  .email-right-box {
    margin-left: 0; } }

@media (max-width: 520px) {
  .email-list .message .col-mail-1 {
    width: 900px; }
    .email-list .message .col-mail-1 .title {
      left: 80px; }
  .email-list .message .col-mail-2 {
    left: 90px; }
    .email-list .message .col-mail-2 .subject {
      right: 0; }
    .email-list .message .col-mail-2 .date {
      display: none; } }

.card-profile i, .card-profile span {
  font-size: 30px; }

.card-profile h3 {
  font-size: 1.2rem; }

.card-profile__info li strong {
  max-width: 100px; }

.form-profile__icons button {
  background: none; }

.form-profile__icons li i, .form-profile__icons li span {
  color: #AEB3C5; }

.social-icons .facebook {
  background: #3b5998; }
  .social-icons .facebook i, .social-icons .facebook span {
    color: #fff; }

.social-icons .twitter {
  background: #1da1f2; }
  .social-icons .twitter i, .social-icons .twitter span {
    color: #fff; }

.social-icons .youtube {
  background: #FF0000; }
  .social-icons .youtube i, .social-icons .youtube span {
    color: #fff; }

.social-icons .googlePlus {
  background: #db4439; }
  .social-icons .googlePlus i, .social-icons .googlePlus span {
    color: #fff; }

.media-reply {
  margin-bottom: 20px; }
  .media-reply .media-body {
    padding: 20px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); }
    .media-reply .media-body .media-body {
      box-shadow: none; }
  .media-reply__link button {
    background: none; }
  .media-reply__link i, .media-reply__link span {
    color: #AFB4C5; }
    .media-reply__link i:hover, .media-reply__link span:hover {
      color: #FF4D87; }

.login-form__title {
  color: #515E75;
  margin-bottom: 20px; }

.login-form__btn {
  background: #455F98;
  color: #fff;
  padding: 13px 40px;
  font-size: 14px; }
  .login-form__btn i, .login-form__btn span {
    font-size: 16px;
    padding-right: 5px; }
  .login-form__btn.submit {
    padding: 15px 40px;
    background: #7571f9;
    font-weight: 700; }

.login-form__intro p, .login-form__intro h4 {
  margin-bottom: 0;
  color: #6A7890; }

.login-form__intro h4 {
  padding: 10px 0; }

.login-form__intro a {
  color: #596A81;
  text-decoration: underline; }

.login-input .form-group {
  margin-bottom: 30px; }
  .login-input .form-group label {
    color: #505F76;
    font-size: 15px; }
  .login-input .form-group .form-control {
    background: transparent;
    border: 0;
    border-radius: 0;
    border-bottom: 1px solid #f5f5f5;
    padding-left: 0;
    color: #7A88A1; }

.form-control:focus {
  box-shadow: none; }

.error-bg {
  background: #AFB4C5; }

.error-text {
  font-size: 5rem;
  line-height: 5rem; }

#duration-value-axis {
  height: 450px;
  width: 100%; }

#combined-bullet {
  height: 450px;
  width: 100%; }

#zoomable {
  height: 450px;
  width: 100%; }

#chartMap {
  height: 450px;
  width: 100%; }

#professional-candlesticks {
  width: 100%;
  height: 450px; }

#comparing-stock-indices {
  width: 100%;
  height: 450px; }

#multiple-panel-data {
  width: 100%;
  height: 450px; }

#depth-chart {
  width: 100%;
  height: 450px; }

.amcharts-export-menu {
  display: none; }

.amcharts-data-set-selector-div {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  width: 270px;
  margin: 0 auto; }
  .amcharts-data-set-selector-div select {
    border: 0;
    margin-left: 10px; }

.amChartsInputField {
  border: 0; }

.amcharts-data-set-select {
  border: 0; }

.amcharts-period-input,
.amcharts-period-input-selected {
  border: 0;
  margin-left: 10px; }

.amcharts-graph-g2 .amcharts-graph-stroke {
  stroke-dasharray: 3px 3px;
  stroke-linejoin: round;
  stroke-linecap: round;
  -webkit-animation: am-moving-dashes 1s linear infinite;
  animation: am-moving-dashes 1s linear infinite; }

@-webkit-keyframes am-moving-dashes {
  100% {
    stroke-dashoffset: -31px; } }

@keyframes am-moving-dashes {
  100% {
    stroke-dashoffset: -31px; } }

.lastBullet {
  -webkit-animation: am-pulsating 1s ease-out infinite;
  animation: am-pulsating 1s ease-out infinite; }

@-webkit-keyframes am-pulsating {
  0% {
    stroke-opacity: 1;
    stroke-width: 0px; }
  100% {
    stroke-opacity: 0;
    stroke-width: 50px; } }

@keyframes am-pulsating {
  0% {
    stroke-opacity: 1;
    stroke-width: 0px; }
  100% {
    stroke-opacity: 0;
    stroke-width: 50px; } }

.amcharts-graph-column-front {
  -webkit-transition: all .3s .3s ease-out;
  transition: all .3s .3s ease-out; }

.amcharts-graph-column-front:hover {
  fill: #496375;
  stroke: #496375;
  -webkit-transition: all .3s ease-out;
  transition: all .3s ease-out; }

@-webkit-keyframes am-draw {
  0% {
    stroke-dashoffset: 500%; }
  100% {
    stroke-dashoffset: 0%; } }

@keyframes am-draw {
  0% {
    stroke-dashoffset: 500%; }
  100% {
    stroke-dashoffset: 0%; } }

.ct-golden-section:before {
  float: none; }

.ct-chart {
  max-height: 300px; }

.ct-chart .ct-label {
  fill: #a3afb7;
  color: #a3afb7;
  font-size: 12px;
  line-height: 1; }

.ct-grid {
  stroke: rgba(49, 58, 70, 0.1); }

.ct-chart.simple-pie-chart-chartist .ct-label {
  color: #ffffff;
  fill: #ffffff;
  font-size: 16px; }

.ct-chart .ct-series.ct-series-a .ct-bar,
.ct-chart .ct-series.ct-series-a .ct-line,
.ct-chart .ct-series.ct-series-a .ct-point,
.ct-chart .ct-series.ct-series-a .ct-slice-donut {
  stroke: #7571f9; }

.ct-chart .ct-series.ct-series-b .ct-bar,
.ct-chart .ct-series.ct-series-b .ct-line,
.ct-chart .ct-series.ct-series-b .ct-point,
.ct-chart .ct-series.ct-series-b .ct-slice-donut {
  stroke: #ff5e5e; }

.ct-chart .ct-series.ct-series-c .ct-bar,
.ct-chart .ct-series.ct-series-c .ct-line,
.ct-chart .ct-series.ct-series-c .ct-point,
.ct-chart .ct-series.ct-series-c .ct-slice-donut {
  stroke: #6fd96f; }

.ct-chart .ct-series.ct-series-d .ct-bar,
.ct-chart .ct-series.ct-series-d .ct-line,
.ct-chart .ct-series.ct-series-d .ct-point,
.ct-chart .ct-series.ct-series-d .ct-slice-donut {
  stroke: #f29d56; }

.ct-chart .ct-series.ct-series-e .ct-bar,
.ct-chart .ct-series.ct-series-e .ct-line,
.ct-chart .ct-series.ct-series-e .ct-point,
.ct-chart .ct-series.ct-series-e .ct-slice-donut {
  stroke: #313a46; }

.ct-chart .ct-series.ct-series-f .ct-bar,
.ct-chart .ct-series.ct-series-f .ct-line,
.ct-chart .ct-series.ct-series-f .ct-point,
.ct-chart .ct-series.ct-series-f .ct-slice-donut {
  stroke: #4d7cff; }

.ct-chart .ct-series.ct-series-g .ct-bar,
.ct-chart .ct-series.ct-series-g .ct-line,
.ct-chart .ct-series.ct-series-g .ct-point,
.ct-chart .ct-series.ct-series-g .ct-slice-donut {
  stroke: #8d6e63; }

.ct-series-a .ct-area,
.ct-series-a .ct-slice-pie {
  fill: #7571f9; }

.ct-series-b .ct-area,
.ct-series-b .ct-slice-pie {
  fill: #ff5e5e; }

.ct-series-c .ct-area,
.ct-series-c .ct-slice-pie {
  fill: #6fd96f; }

.ct-series-d .ct-area,
.ct-series-d .ct-slice-pie {
  fill: #f29d56; }

.chartist-tooltip {
  position: absolute;
  display: inline-block;
  opacity: 0;
  min-width: 10px;
  padding: 2px 10px;
  border-radius: 3px;
  background: #313a46;
  color: #ffffff;
  text-align: center;
  pointer-events: none;
  z-index: 1;
  -webkit-transition: opacity .2s linear;
  -moz-transition: opacity .2s linear;
  -o-transition: opacity .2s linear;
  transition: opacity .2s linear; }

.chartist-tooltip.tooltip-show {
  opacity: 1; }

#chart_widget_3 .ct-series-a .ct-line {
  stroke: #847DFA; }

#chart_widget_3 .ct-series-a .ct-point {
  stroke: #847DFA; }

#chart_widget_3_1 .ct-series-a .ct-bar, #chart_widget_3_1 .ct-series-a .ct-line, #chart_widget_3_1 .ct-series-a .ct-point, #chart_widget_3_1 .ct-series-a .ct-slice-donut {
  stroke: #847DFA; }

#chart_widget_3_1 .ct-series-b .ct-bar, #chart_widget_3_1 .ct-series-b .ct-line, #chart_widget_3_1 .ct-series-b .ct-point, #chart_widget_3_1 .ct-series-b .ct-slice-donut {
  stroke: #ddd; }

#monthly_view_chart {
  width: 200px !important; }

.flot-chart {
  height: 350px; }

.tooltipflot {
  background-color: #000;
  font-size: 14px;
  padding: 5px 10px;
  color: rgba(255, 255, 255, 0.7);
  border-radius: 2px; }

.legendColorBox > div {
  border: 0 !important;
  padding: 0 !important; }

.legendLabel {
  font-size: 11px;
  padding-left: 5px; }

.morris-hover {
  position: absolute;
  z-index: 1;
  color: #fff; }

.morris-hover .morris-hover-point {
  color: #464a53 !important;
  margin: 3px 0;
  text-align: center;
  padding: 0 25px; }

.morris-hover .morris-hover-row-label {
  background-color: #464a53;
  text-align: center;
  padding: 5px;
  margin-bottom: 5px; }

.morris-hover.morris-default-style {
  border-radius: 5px;
  padding: 0;
  margin: 0;
  border: none;
  overflow: hidden; }

#morris-area-chart1,
#morris-area-chart2,
#morris-area-chart3,
#morris-area-chart4,
#morris-area-chart5,
#morris-area-chart6 {
  height: 200px; }

#morris-donut-chart {
  max-width: 260px !important;
  margin: 0 auto; }
  #morris-donut-chart text {
    font-size: 10px !important;
    font-family: 'Poppins'; }
    #morris-donut-chart text tspan {
      font-size: 10px !important;
      font-weight: 300 !important; }

#morris-line-chart {
  height: 360px !important; }
  #morris-line-chart .morris-hover {
    background: #fff !important; }

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #777 !important; }

::-moz-placeholder {
  /* Firefox 19+ */
  color: #777 !important; }

:-ms-input-placeholder {
  /* IE 10+ */
  color: #777 !important; }

:-moz-placeholder {
  /* Firefox 18- */
  color: #777 !important; }

/*
Input Style
------------------------*/
.form-group {
  margin-bottom: 20px; }

.form-control {
  border-radius: 0;
  box-shadow: none;
  height: 45px; }
  .form-control:hover {
    box-shadow: none; }
  .form-control.active, .form-control:focus {
    box-shadow: none; }

.input-default {
  border-radius: 4px; }

.input-flat {
  border-radius: 0; }

.input-rounded {
  border-radius: 100px; }

/*****************************************
  Input Size
******************************************/
.form-control {
  min-height: 40px; }

.form-control-sm {
  min-height: 36px; }

.form-control-lg {
  min-height: 52px; }

/*****************************************
  upload button styles
******************************************/
.file-upload {
  position: relative;
  display: inline-block; }
  .file-upload .file-upload__label {
    display: block;
    padding: 0.5em 1.5em;
    border-radius: 0.4em;
    -webkit-transition: 0.3s;
    transition: 0.3s; }
    .file-upload .file-upload__label:hover {
      cursor: pointer; }
  .file-upload .file-upload__input {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    font-size: 1;
    width: 0;
    height: 100%;
    opacity: 0; }

.drop-menu {
  width: 100%;
  display: inline-block;
  border-radius: 5px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  position: relative;
  font-size: 16px;
  height: 100%;
  text-align: left; }
  .drop-menu .select {
    cursor: pointer;
    display: block;
    padding: 10px; }
    .drop-menu .select i {
      font-size: 16px;
      margin-top: 5px;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
      float: right; }
    .drop-menu .select .currency {
      font-size: 13px;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
      float: right; }
  .drop-menu.active {
    border-radius: 5px 5px 0 0; }
    .drop-menu.active:hover {
      border-radius: 5px 5px 0 0; }
    .drop-menu.active .select i {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
  .drop-menu .dropeddown {
    position: absolute;
    width: 100%;
    left: 0;
    margin-top: 1px;
    border-radius: 0 1px 5px 5px;
    overflow: hidden;
    display: none;
    max-height: 144px;
    overflow-y: auto;
    z-index: 9;
    padding: 0;
    list-style: none; }
    .drop-menu .dropeddown li {
      padding: 10px;
      -webkit-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;
      cursor: pointer; }

.wysihtml5-toolbar {
  height: 50px; }

.textarea_editor {
  min-height: 300px; }

.bootstrap-touchspin .input-group-btn,
.bootstrap-touchspin .input-group-prepend,
.bootstrap-touchspin .input-group-append,
.bootstrap-touchspin .form-control {
  margin: 10px 0px 0px; }

input[type="checkbox"]:after {
  line-height: 1.5em;
  content: '';
  display: block;
  width: 1.2rem;
  height: 1.2rem;
  margin-top: -3px;
  margin-left: -3px;
  border: 1px solid #EEEEEE;
  border-radius: 0px;
  background: #fff;
  line-height: 1.3; }

input[type="checkbox"]:checked:after {
  width: 1.2rem;
  height: 1.2rem;
  display: block;
  content: "\f00c";
  font-family: 'FontAwesome';
  color: #7571f9;
  font-weight: 100;
  text-align: center; }

.form-check-label {
  margin-left: 5px; }

.form-check-inline .form-check-input {
  margin-right: 0.625rem; }

.asColorPicker-dropdown {
  max-width: 260px; }

.asColorPicker-trigger {
  border: 0 none;
  height: 38px;
  position: absolute;
  right: -35px;
  top: 0;
  width: 37px; }

.asColorPicker-clear {
  display: none;
  position: absolute;
  right: 10px;
  text-decoration: none;
  top: 5px; }

.daterangepicker td.active {
  background-color: #1976d2; }
  .daterangepicker td.active:hover {
    background-color: #1976d2; }

.datepicker table tr td.today {
  background: #1976d2 none repeat scroll 0 0;
  color: #ffffff; }
  .datepicker table tr td.today:hover {
    background: #1976d2 none repeat scroll 0 0;
    color: #ffffff; }

.datepicker table tr td.today.disabled {
  background: #1976d2 none repeat scroll 0 0;
  color: #ffffff; }
  .datepicker table tr td.today.disabled:hover {
    background: #1976d2 none repeat scroll 0 0;
    color: #ffffff; }

.datepicker td {
  padding: 5px 10px; }

.datepicker th {
  padding: 5px 10px; }

.wizard > .content > .body input.error {
  position: absolute;
  top: 100% !important; }

.wizard {
  position: relative; }
  .wizard > .steps {
    width: 100%;
    padding-left: 3%; }
    @media (min-width: 1200px) {
      .wizard > .steps {
        width: 60%;
        margin-left: 3%; } }
    .wizard > .steps li.current a {
      background-color: #7571f9;
      color: #fff; }
    .wizard > .steps li.disabled a, .wizard > .steps li.done a {
      background-color: #fff;
      color: #333; }
      .wizard > .steps li.disabled a:hover, .wizard > .steps li.done a:hover {
        margin: 0;
        background-color: #fff;
        border-radius: 0;
        color: #333; }
    .wizard > .steps li a {
      text-align: center;
      margin: 0;
      border-radius: 0;
      background-color: #fff; }
      .wizard > .steps li a:hover {
        margin: 0;
        background-color: #fff;
        border-radius: 0;
        color: #333; }
      @media only screen and (max-width: 767px) {
        .wizard > .steps li a {
          padding: 1em 4px; } }
      .wizard > .steps li a .number {
        display: none; }
  .wizard .content {
    min-height: 18.75rem;
    margin: 0; }
    @media only screen and (max-width: 991px) {
      .wizard .content {
        min-height: 26rem; } }
    .wizard .content > .body {
      background-color: #fff;
      width: 100%;
      height: 100%;
      padding: 2rem; }
      @media only screen and (max-width: 575px) {
        .wizard .content > .body {
          padding: 0; } }
      .wizard .content > .body .form-control {
        background-color: #F7FAFC;
        border: 1px solid #EEEEEE; }
      .wizard .content > .body input.error {
        position: relative; }
      .wizard .content > .body label.error {
        position: absolute;
        top: 100%;
        margin-left: 0; }
  .wizard > .actions {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 2rem; }
    .wizard > .actions li:not(.disabled) a {
      background-color: #7571f9;
      color: #fff; }

.wizard .actions ul li.disabled a {
  color: #333333 !important;
  background: #F7FAFC !important;
  border: 1px solid #EEEEEE; }

.wizard .actions ul li a {
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
  padding: 0.55em 2em; }

.wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
  padding: 0.55em 2em; }

@media (max-width: 680px) {
  .wizard > .steps > ul > li {
    width: 100%;
    padding-left: 0; } }

@media (max-width: 680px) {
  .wizard > .steps {
    padding-left: 0; } }

.wizard > .content {
  background: #fff;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); }

.wizard, .tabcontrol {
  overflow: visible; }

@media only screen and (max-width: 575px) {
  .step-form-tab .wizard .steps li {
    width: 50%; } }

.step-form-tab .wizard .steps li:not(.current) a {
  background-color: #EEEEEE;
  color: #7571f9; }

.step-form-tab .wizard .steps li.current a {
  background-color: #7571f9; }

.step-form-tab .wizard .steps li.done a {
  background-color: rgba(117, 113, 249, 0.5);
  color: #7571f9; }

.step-form-tab .wizard .steps li:last-child a {
  margin-right: 0; }

.step-form-tab .wizard .steps li:first-child a {
  margin-left: 0; }

@media only screen and (max-width: 575px) {
  .step-form-tab .wizard .steps li a {
    margin: 0 0.5em 0.5em; }
    .step-form-tab .wizard .steps li a:hover {
      padding: 1em 4px; } }

.step-form-vertical .wizard.vertical > .steps {
  width: 27%; }
  @media only screen and (max-width: 767px) {
    .step-form-vertical .wizard.vertical > .steps li a {
      margin-left: 0;
      margin-right: 0; } }
  @media only screen and (max-width: 575px) {
    .step-form-vertical .wizard.vertical > .steps li a {
      padding: .5rem; } }
  .step-form-vertical .wizard.vertical > .steps li:not(.current) a {
    background-color: #EEEEEE;
    color: #7571f9; }
  .step-form-vertical .wizard.vertical > .steps li.current a {
    background-color: #7571f9; }
  .step-form-vertical .wizard.vertical > .steps li.done a {
    background-color: rgba(117, 113, 249, 0.5);
    color: #7571f9; }

.step-form-vertical .wizard.vertical > .content {
  width: 73%;
  margin: 0; }
  .step-form-vertical .wizard.vertical > .content > .body {
    padding: 0 8rem; }
    @media only screen and (max-width: 575px) {
      .step-form-vertical .wizard.vertical > .content > .body {
        padding: 1rem; } }

.step-form-vertical .wizard.vertical > .actions {
  padding: 0 8rem; }
  @media only screen and (max-width: 575px) {
    .step-form-vertical .wizard.vertical > .actions {
      padding: 0; } }

.note-icon-caret,
.note-popover {
  display: none; }

.note-editor.note-frame .panel-heading {
  padding: 6px 10px 10px; }

.datamaps-hoverover {
  color: #fff;
  padding: 5px;
  border-radius: 4px; }

#world-map {
  height: 400px !important; }

.table td {
  line-height: 1.2;
  vertical-align: middle; }

.table td,
.table th {
  border-color: #f3f3f3; }

.table thead th {
  border-bottom: none;
  border-top: none;
  vertical-align: middle; }

.verticle-middle tr td {
  vertical-align: middle; }

.header-border thead tr th {
  border: 0 solid rgba(120, 130, 140, 0.13);
  font-weight: 700; }

.table-bordered thead td {
  border-bottom-width: 1px; }

.table-bordered thead th {
  border-bottom-width: 1px; }

.table-primary {
  background-color: #ecebfe;
  color: #000; }

.table-secondary {
  background-color: #e3e5f0;
  color: #000; }

.table-success {
  background-color: #d4f4d4;
  color: #000; }

.table-warning {
  background-color: #fbe2cc;
  color: #000; }

.table-danger {
  background-color: #ffdede;
  color: #000; }

.table-info {
  background-color: #cddaff;
  color: #000; }

.table-dark {
  background-color: #838996;
  color: #000; }

.table-active {
  background-color: white;
  color: #000; }

.thead-primary tr th {
  background-color: #7571f9;
  color: #fff;
  border-bottom: 0; }

.thead-secondary tr th {
  background-color: #9097c4;
  color: #fff;
  border-bottom: 0; }

.thead-success tr th {
  background-color: #6fd96f;
  color: #fff;
  border-bottom: 0; }

.thead-info tr th {
  background-color: #4d7cff;
  color: #fff;
  border-bottom: 0; }

.thead-warning tr th {
  background-color: #f29d56;
  color: #fff;
  border-bottom: 0; }

.thead-danger tr th {
  background-color: #ff5e5e;
  color: #fff;
  border-bottom: 0; }

.thead-dark tr th {
  background-color: #464a53;
  color: #fff;
  border-bottom: 0; }

.thead-muted tr th {
  background-color: #8898aa;
  color: #fff;
  border-bottom: 0; }

.primary-table-bordered {
  border: 2px solid #7571f9; }

.secondary-table-bordered {
  border: 2px solid #9097c4; }

.success-table-bordered {
  border: 2px solid #6fd96f; }

.info-table-bordered {
  border: 2px solid #4d7cff; }

.danger-table-bordered {
  border: 2px solid #ff5e5e; }

.warning-table-bordered {
  border: 2px solid #f29d56; }

.dark-table-bordered {
  border: 2px solid #464a53; }

.muted-table-bordered {
  border: 2px solid #8898aa; }

.primary-table-bg {
  background: #a5a2fb;
  color: #fff; }
  .primary-table-bg thead tr th {
    background-color: #7571f9;
    color: #fff;
    border-bottom: 0; }
  .primary-table-bg tbody tr:first-child td,
  .primary-table-bg tbody tr:first-child th {
    border-top: 0; }
  .primary-table-bg tbody tr td,
  .primary-table-bg tbody tr th {
    border-top: 1px solid white; }

.secondary-table-bg {
  background: #b1b6d6;
  color: #fff; }
  .secondary-table-bg thead tr th {
    background-color: #9097c4;
    color: #fff;
    border-bottom: 0; }
  .secondary-table-bg tbody tr:first-child td,
  .secondary-table-bg tbody tr:first-child th {
    border-top: 0; }
  .secondary-table-bg tbody tr td,
  .secondary-table-bg tbody tr th {
    border-top: 1px solid #f4f5f9; }

.success-table-bg {
  background: #97e497;
  color: #fff; }
  .success-table-bg thead tr th {
    background-color: #6fd96f;
    color: #fff;
    border-bottom: 0; }
  .success-table-bg tbody tr:first-child td,
  .success-table-bg tbody tr:first-child th {
    border-top: 0; }
  .success-table-bg tbody tr td,
  .success-table-bg tbody tr th {
    border-top: 1px solid #e8f9e8; }

.info-table-bg {
  background: #80a2ff;
  color: #fff; }
  .info-table-bg thead tr th {
    background-color: #4d7cff;
    color: #fff;
    border-bottom: 0; }
  .info-table-bg tbody tr:first-child td,
  .info-table-bg tbody tr:first-child th {
    border-top: 0; }
  .info-table-bg tbody tr td,
  .info-table-bg tbody tr th {
    border-top: 1px solid #e6edff; }

.warning-table-bg {
  background: #f6b885;
  color: #fff; }
  .warning-table-bg thead tr th {
    background-color: #f29d56;
    color: #fff;
    border-bottom: 0; }
  .warning-table-bg tbody tr:first-child td,
  .warning-table-bg tbody tr:first-child th {
    border-top: 0; }
  .warning-table-bg tbody tr td,
  .warning-table-bg tbody tr th {
    border-top: 1px solid #fdefe4; }

.danger-table-bg {
  background: #ff9191;
  color: #fff; }
  .danger-table-bg thead tr th {
    background-color: #ff5e5e;
    color: #fff;
    border-bottom: 0; }
  .danger-table-bg tbody tr:first-child td,
  .danger-table-bg tbody tr:first-child th {
    border-top: 0; }
  .danger-table-bg tbody tr td,
  .danger-table-bg tbody tr th {
    border-top: 1px solid #fff7f7; }

.dark-table-bg {
  background: #5d636f;
  color: #fff; }
  .dark-table-bg thead tr th {
    background-color: #464a53;
    color: #fff;
    border-bottom: 0; }
  .dark-table-bg tbody tr:first-child td,
  .dark-table-bg tbody tr:first-child th {
    border-top: 0; }
  .dark-table-bg tbody tr td,
  .dark-table-bg tbody tr th {
    border-top: 1px solid #9096a2; }

.muted-table-bg {
  background: #a6b2bf;
  color: #fff; }
  .muted-table-bg thead tr th {
    background-color: #8898aa;
    color: #fff;
    border-bottom: 0; }
  .muted-table-bg tbody tr:first-child td,
  .muted-table-bg tbody tr:first-child th {
    border-top: 0; }
  .muted-table-bg tbody tr td,
  .muted-table-bg tbody tr th {
    border-top: 1px solid #e1e5ea; }

.primary-table-bg-hover thead tr th {
  background-color: #7571f9;
  color: #fff;
  border-bottom: 0; }

.primary-table-bg-hover tbody tr {
  background: #a5a2fb;
  color: #fff; }
  .primary-table-bg-hover tbody tr:hover {
    background: #8d89fa; }
  .primary-table-bg-hover tbody tr:first-child td,
  .primary-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .primary-table-bg-hover tbody tr td,
  .primary-table-bg-hover tbody tr th {
    border-top: 1px solid white; }

.secondary-table-bg-hover thead tr th {
  background-color: #9097c4;
  color: #fff;
  border-bottom: 0; }

.secondary-table-bg-hover tbody tr {
  background: #b1b6d6;
  color: #fff; }
  .secondary-table-bg-hover tbody tr:hover {
    background: #a1a7cd; }
  .secondary-table-bg-hover tbody tr:first-child td,
  .secondary-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .secondary-table-bg-hover tbody tr td,
  .secondary-table-bg-hover tbody tr th {
    border-top: 1px solid #f4f5f9; }

.success-table-bg-hover thead tr th {
  background-color: #6fd96f;
  color: #fff;
  border-bottom: 0; }

.success-table-bg-hover tbody tr {
  background: #97e497;
  color: #fff; }
  .success-table-bg-hover tbody tr:hover {
    background: #83de83; }
  .success-table-bg-hover tbody tr:first-child td,
  .success-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .success-table-bg-hover tbody tr td,
  .success-table-bg-hover tbody tr th {
    border-top: 1px solid #e8f9e8; }

.info-table-bg-hover thead tr th {
  background-color: #4d7cff;
  color: #fff;
  border-bottom: 0; }

.info-table-bg-hover tbody tr {
  background: #80a2ff;
  color: #fff; }
  .info-table-bg-hover tbody tr:hover {
    background: #678fff; }
  .info-table-bg-hover tbody tr:first-child td,
  .info-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .info-table-bg-hover tbody tr td,
  .info-table-bg-hover tbody tr th {
    border-top: 1px solid #e6edff; }

.warning-table-bg-hover thead tr th {
  background-color: #f29d56;
  color: #fff;
  border-bottom: 0; }

.warning-table-bg-hover tbody tr {
  background: #f6b885;
  color: #fff; }
  .warning-table-bg-hover tbody tr:hover {
    background: #f4ab6e; }
  .warning-table-bg-hover tbody tr:first-child td,
  .warning-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .warning-table-bg-hover tbody tr td,
  .warning-table-bg-hover tbody tr th {
    border-top: 1px solid #fdefe4; }

.danger-table-bg-hover thead tr th {
  background-color: #ff5e5e;
  color: #fff;
  border-bottom: 0; }

.danger-table-bg-hover tbody tr {
  background: #ff9191;
  color: #fff; }
  .danger-table-bg-hover tbody tr:hover {
    background: #ff7878; }
  .danger-table-bg-hover tbody tr:first-child td,
  .danger-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .danger-table-bg-hover tbody tr td,
  .danger-table-bg-hover tbody tr th {
    border-top: 1px solid #fff7f7; }

.dark-table-bg-hover thead tr th {
  background-color: #464a53;
  color: #fff;
  border-bottom: 0; }

.dark-table-bg-hover tbody tr {
  background: #5d636f;
  color: #fff; }
  .dark-table-bg-hover tbody tr:hover {
    background: #525661; }
  .dark-table-bg-hover tbody tr:first-child td,
  .dark-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .dark-table-bg-hover tbody tr td,
  .dark-table-bg-hover tbody tr th {
    border-top: 1px solid #9096a2; }

.muted-table-bg-hover thead tr th {
  background-color: #8898aa;
  color: #fff;
  border-bottom: 0; }

.muted-table-bg-hover tbody tr {
  background: #a6b2bf;
  color: #fff; }
  .muted-table-bg-hover tbody tr:hover {
    background: #97a5b5; }
  .muted-table-bg-hover tbody tr:first-child td,
  .muted-table-bg-hover tbody tr:first-child th {
    border-top: 0; }
  .muted-table-bg-hover tbody tr td,
  .muted-table-bg-hover tbody tr th {
    border-top: 1px solid #e1e5ea; }

.active-member .table img {
  width: 35px; }

.dataTables_wrapper {
  padding-top: 10px; }

.dt-buttons {
  display: inline-block;
  margin-bottom: 15px;
  padding-top: 5px; }
  .dt-buttons .btn {
    margin-bottom: 10px; }

.dt-buttons .dt-button {
  border-radius: 4px;
  margin-right: 3px;
  padding: 5px 15px; }

.dataTables_info,
.dataTables_length {
  display: inline-block; }

.dataTables_length {
  margin-top: 10px; }

.dataTables_length select {
  background-color: transparent;
  background-position: center bottom, center calc(100% - 1px);
  background-repeat: no-repeat;
  background-size: 0 2px, 100% 1px;
  border: 0 none;
  padding-bottom: 5px;
  transition: background 0s ease-out 0s; }

.dataTables_length select:focus {
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  outline: medium none;
  transition-duration: 0.3s; }

.dataTables_filter {
  float: right;
  margin-top: 10px; }

.dataTables_filter input {
  background-color: transparent;
  background-position: center bottom, center calc(100% - 1px);
  background-repeat: no-repeat;
  background-size: 0 2px, 100% 1px;
  border: 0 none;
  border-radius: 0;
  box-shadow: none;
  float: none;
  margin-left: 10px;
  transition: background 0s ease-out 0s; }

.dataTables_filter input:focus {
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  outline: medium none;
  transition-duration: 0.3s; }

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
  background: transparent; }

table.dataTable thead .sorting_asc::after {
  content: "";
  cursor: pointer;
  font-family: fontawesome;
  margin-left: 10px; }

table.dataTable thead .sorting_desc::after {
  content: "";
  cursor: pointer;
  font-family: fontawesome;
  margin-left: 10px; }

table.dataTable thead .sorting::after {
  content: "";
  cursor: pointer;
  font-family: fontawesome !important;
  margin-left: 10px; }

.dataTables_wrapper .dataTables_paginate {
  padding-top: 0.25em;
  text-align: right; }

.dataTables_wrapper .dataTables_paginate .paginate_button {
  border: 1px solid rgba(120, 130, 140, 0.13);
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block;
  min-width: 1.5em;
  padding: 0.5em 1em;
  text-align: center;
  text-decoration: none; }

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
  background: transparent;
  box-shadow: none;
  cursor: default; }

.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  outline: medium none; }

.dataTables_wrapper .dataTables_paginate .ellipsis {
  padding: 0 1em; }

.dt-bootstrap {
  display: block; }

.paging_simple_numbers .pagination .paginate_button {
  padding: 0; }

.paging_simple_numbers .pagination .paginate_button a {
  border: 0 none;
  padding: 2px 10px; }

#myTable a {
  font-size: 18px;
  font-weight: 700;
  margin-right: 10px; }

#myTable i.cc {
  font-size: 30px; }

#myTable p {
  margin: 0px; }

.noUi-target {
  border-color: #7571f9; }

.noUi-connect {
  background-color: #7571f9; }
  .noUi-connects {
    background-color: #F7FAFC; }
  .noUi-connect.c-1-color {
    background-color: #6fd96f; }
  .noUi-connect.c-2-color {
    background-color: #4d7cff; }
  .noUi-connect.c-3-color {
    background-color: #7571f9; }
  .noUi-connect.c-4-color {
    background-color: #f29d56; }

#slider-toggle {
  height: 50px; }

#slider-toggle.off .noUi-handle {
  border-color: #7571f9; }

.colorpicker-slider .sliders.noUi-target#red, .colorpicker-slider .sliders.noUi-target#green, .colorpicker-slider .sliders.noUi-target#blue {
  margin: 10px;
  display: inline-block;
  height: 200px; }

.colorpicker-slider .sliders.noUi-target#red .noUi-connect {
  background: #c0392b; }

.colorpicker-slider .sliders.noUi-target#green .noUi-connect {
  background: #27ae60; }

.colorpicker-slider .sliders.noUi-target#blue .noUi-connect {
  background: #2980b9; }

.colorpicker-slider #result {
  margin: 60px 26px;
  height: 100px;
  width: 100px;
  display: inline-block;
  vertical-align: top;
  color: #7f7f7f;
  background: #7f7f7f;
  border: 1px solid #fff;
  box-shadow: 0 0 10px; }

.slider-vertical {
  height: 28rem; }

.weather-one i {
  font-size: 80px;
  position: relative;
  top: 5px; }

.weather-one h2 {
  display: inline-block;
  float: right;
  font-size: 48px;
  color: #fff; }

.weather-one .city {
  position: relative;
  text-align: right;
  top: -25px; }

.weather-one .currently {
  font-size: 16px;
  font-weight: 400;
  position: relative;
  top: 25px; }

.weather-one .celcious {
  text-align: right;
  font-size: 20px; }

.pignose-calendar {
  width: 100%;
  max-width: unset;
  border-color: #162336;
  box-shadow: none; }

.pignose-calendar.pignose-calendar-blue {
  background-color: #27394f; }

.pignose-calendar.pignose-calendar-blue .pignose-calendar-header .pignose-calendar-week,
.pignose-calendar.pignose-calendar-blue .pignose-calendar-body .pignose-calendar-row .pignose-calendar-unit a {
  color: #fff; }

.pignose-calendar.pignose-calendar-blue .pignose-calendar-top {
  border-bottom-color: #27394f;
  background-color: #7571f9; }

.pignose-calendar.pignose-calendar-blue .pignose-calendar-body .pignose-calendar-row .pignose-calendar-unit.pignose-calendar-unit-active a {
  background-color: #7571f9; }

.accordion .card {
  margin-bottom: 7px; }

.accordion .card-header {
  cursor: pointer;
  background: #fff;
  border: 1px solid #EEEEEE; }

.accordion .card-body {
  box-shadow: 0px; }

#accordion-one .fa {
  float: right; }

#accordion-one [data-toggle="collapse"] .fa:before {
  content: "\f068"; }

#accordion-one [data-toggle="collapse"].collapsed .fa:before {
  content: "\f067"; }

#accordion-two .fa {
  float: right; }

#accordion-two [data-toggle="collapse"] .fa:before {
  content: "\f106"; }

#accordion-two [data-toggle="collapse"].collapsed .fa:before {
  content: "\f107"; }

#accordion-three .fa {
  float: right; }

#accordion-three [data-toggle="collapse"] .fa:before {
  content: "\f107"; }

#accordion-three [data-toggle="collapse"].collapsed .fa:before {
  content: "\f105"; }

.badge {
  font-weight: 400;
  padding: 0.35em 0.45em; }

.badge-xs {
  font-size: 9px;
  -webkit-transform: translate(0, -2px);
  -ms-transform: translate(0, -2px);
  -o-transform: translate(0, -2px);
  transform: translate(0, -2px); }

.badge-sm {
  font-size: 12px;
  -webkit-transform: translate(0, -2px);
  -ms-transform: translate(0, -2px);
  -o-transform: translate(0, -2px);
  transform: translate(0, -2px); }

.badge-success {
  background-color: #6fd96f; }

.badge-info {
  background-color: #4d7cff;
  color: #fff; }

.badge-primary {
  background-color: #7571f9; }

.badge-warning {
  background-color: #f29d56; }

.badge-danger {
  background-color: #ff5e5e; }

.badge-dark {
  background-color: #464a53; }

.badge-light {
  background-color: #aaa;
  color: #fff; }

.label {
  padding: 7px 10px;
  line-height: 15px;
  font-weight: 600;
  border-radius: 4px;
  font-size: 85%; }

.label-pill {
  border-radius: 10rem;
  padding-left: 0.6em;
  padding-right: 0.6em; }

.label-rounded {
  border-radius: 60px; }

.label-secondary {
  background-color: #7571f9;
  color: #fff; }

.label-primary {
  background-color: #9097c4;
  color: #fff; }

.label-success {
  background-color: #6fd96f;
  color: #fff; }

.label-info {
  background-color: #4d7cff;
  color: #fff; }

.label-warning {
  background-color: #f29d56;
  color: #fff; }

.label-danger {
  background-color: #ff5e5e;
  color: #fff; }

.label-dark {
  background-color: #464a53;
  color: #fff; }

.label-light {
  background-color: #5e5e5e;
  color: #fff; }

.bootstrap-label .label {
  margin-bottom: 10px;
  display: inline-block; }

.page-titles {
  padding: 0.9375rem 1.875rem;
  background: #F3F3F9;
  transition: all .2s ease; }
  @media only screen and (max-width: 767px) {
    .page-titles {
      margin-left: -15px;
      margin-right: -15px;
      padding: 15px 0; } }
  .page-titles h4 {
    margin-bottom: 0;
    margin-top: 0;
    color: #7571f9;
    font-size: 1.25rem; }
    .page-titles h4 span {
      font-size: 0.875rem;
      font-weight: 400; }
  .page-titles .breadcrumb {
    margin-bottom: 0;
    padding: 0;
    background: transparent;
    font-size: 0.875rem;
    float: right; }
    .page-titles .breadcrumb li {
      margin-top: 0;
      margin-bottom: 0; }
      .page-titles .breadcrumb li a {
        color: #555555; }
      .page-titles .breadcrumb li.active {
        color: #555555; }
    .page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item:before {
      content: "\e606";
      font-family: 'simple-line-icons';
      font-size: 10px;
      color: #555555; }
    .page-titles .breadcrumb-datepicker {
      font-size: 0.75rem;
      color: #8898aa; }
      .page-titles .breadcrumb-datepicker__icon {
        font-size: 0.875rem; }

.btn-page .btn {
  margin-bottom: 10px;
  margin-right: 5px; }

.btn {
  padding: 7px 18px; }
  .btn:active, .btn:focus, .btn:hover {
    box-shadow: none !important; }

.btn-xs {
  font-size: 10px;
  padding: 0.25rem 0.5rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem !important; }

.btn-flat {
  border-radius: 0; }

.btn-rounded {
  border-radius: 60px; }

.btn-icon-right {
  border-left: 1px solid rgba(120, 130, 140, 0.13);
  display: inline-block;
  margin: -8px 0 -8px 13px;
  padding: 10px 0 10px 13px; }

.btn-icon-left {
  background: #fff;
  border-radius: 100px;
  display: inline-block;
  margin: -5px 13px -5px -15px;
  padding: 5px 10px 6px; }

.toggle-dropdown::after {
  margin-left: 0.755em; }

.social-btn-icon .btn {
  min-width: 75px;
  margin-bottom: 15px; }

.social-icon .btn {
  padding: 7px 14px; }

.icon-circle {
  height: 50px;
  width: 50px;
  border-radius: 100%; }

.btn-primary:active, .btn-primary:focus, .btn-primary:hover {
  background: #4540f7;
  color: #fff;
  border-color: #4540f7; }

.btn-secondary:active, .btn-secondary:focus, .btn-secondary:hover {
  background: #6f78b2;
  color: #fff;
  border-color: #6f78b2; }

.btn-success:active, .btn-success:focus, .btn-success:hover {
  background: #47ce47;
  color: #fff;
  border-color: #47ce47; }

.btn-warning:active, .btn-warning:focus, .btn-warning:hover {
  background: #ee8227;
  color: #fff;
  border-color: #ee8227; }

.btn-danger:active, .btn-danger:focus, .btn-danger:hover {
  background: #ff2b2b;
  color: #fff;
  border-color: #ff2b2b; }

.btn-info {
  color: #fff; }
  .btn-info:active, .btn-info:focus, .btn-info:hover {
    background: #1a56ff;
    color: #fff;
    border-color: #1a56ff; }

.btn-light:active, .btn-light:focus, .btn-light:hover {
  background: #919191;
  color: #fff;
  border-color: #919191; }

.btn-dark:active, .btn-dark:focus, .btn-dark:hover {
  background: #2f3137;
  color: #fff;
  border-color: #2f3137; }

.btn-outline-primary:active, .btn-outline-primary:focus, .btn-outline-primary:hover {
  background: #4540f7;
  color: #fff;
  border-color: #4540f7; }

.btn-outline-secondary {
  color: #464a53; }
  .btn-outline-secondary:active, .btn-outline-secondary:focus, .btn-outline-secondary:hover {
    background: #6f78b2;
    color: #fff;
    border-color: #6f78b2; }

.btn-outline-success:active, .btn-outline-success:focus, .btn-outline-success:hover {
  background: #47ce47;
  color: #fff;
  border-color: #47ce47; }

.btn-outline-warning:active, .btn-outline-warning:focus, .btn-outline-warning:hover {
  background: #ee8227;
  color: #fff;
  border-color: #ee8227; }

.btn-outline-danger:active, .btn-outline-danger:focus, .btn-outline-danger:hover {
  background: #ff2b2b;
  color: #fff;
  border-color: #ff2b2b; }

.btn-outline-info {
  color: #4d7cff; }
  .btn-outline-info:active, .btn-outline-info:focus, .btn-outline-info:hover {
    background: #1a56ff;
    color: #fff;
    border-color: #1a56ff; }

.btn-outline-light {
  color: #464a53; }
  .btn-outline-light:active, .btn-outline-light:focus, .btn-outline-light:hover {
    background: #919191;
    color: #fff;
    border-color: #919191; }

.btn-outline-dark:active, .btn-outline-dark:focus, .btn-outline-dark:hover {
  background: #2f3137;
  color: #fff;
  border-color: #2f3137; }

.btn-facebook {
  background: #3b5998;
  border-color: #3b5998;
  color: #fff; }
  .btn-facebook:active, .btn-facebook:focus, .btn-facebook:hover {
    background: #2d4373;
    color: #fff;
    border-color: #2d4373; }

.btn-twitter {
  background: #1da1f2;
  border-color: #1da1f2;
  color: #fff; }
  .btn-twitter:active, .btn-twitter:focus, .btn-twitter:hover {
    background: #0c85d0;
    color: #fff;
    border-color: #0c85d0; }

.btn-youtube {
  background: #FF0000;
  border-color: #FF0000;
  color: #fff; }
  .btn-youtube:active, .btn-youtube:focus, .btn-youtube:hover {
    background: #cc0000;
    color: #fff;
    border-color: #cc0000; }

.btn-instagram {
  background: #c32aa3;
  border-color: #c32aa3;
  color: #fff; }
  .btn-instagram:active, .btn-instagram:focus, .btn-instagram:hover {
    background: #992180;
    color: #fff;
    border-color: #992180; }

.btn-pinterest {
  background: #bd081c;
  border-color: #bd081c;
  color: #fff; }
  .btn-pinterest:active, .btn-pinterest:focus, .btn-pinterest:hover {
    background: #8c0615;
    color: #fff;
    border-color: #8c0615; }

.btn-linkedin {
  background: #007bb6;
  border-color: #007bb6;
  color: #fff; }
  .btn-linkedin:active, .btn-linkedin:focus, .btn-linkedin:hover {
    background: #005983;
    color: #fff;
    border-color: #005983; }

.btn-google-plus {
  background: #db4439;
  border-color: #db4439;
  color: #fff; }
  .btn-google-plus:active, .btn-google-plus:focus, .btn-google-plus:hover {
    background: #be2d23;
    color: #fff;
    border-color: #be2d23; }

.btn-google {
  background: #4285f4;
  border-color: #4285f4;
  color: #fff; }
  .btn-google:active, .btn-google:focus, .btn-google:hover {
    background: #1266f1;
    color: #fff;
    border-color: #1266f1; }

.btn-snapchat {
  background: #fffc00;
  border-color: #fffc00;
  color: #000; }
  .btn-snapchat:active, .btn-snapchat:focus, .btn-snapchat:hover {
    background: #ccca00;
    color: #000;
    border-color: #ccca00; }

.btn-whatsapp {
  background: #25d366;
  border-color: #25d366;
  color: #fff; }
  .btn-whatsapp:active, .btn-whatsapp:focus, .btn-whatsapp:hover {
    background: #1da851;
    color: #fff;
    border-color: #1da851; }

.btn-tumblr {
  background: #35465d;
  border-color: #35465d;
  color: #fff; }
  .btn-tumblr:active, .btn-tumblr:focus, .btn-tumblr:hover {
    background: #222e3d;
    color: #fff;
    border-color: #222e3d; }

.btn-reddit {
  background: #ff4500;
  border-color: #ff4500;
  color: #fff; }
  .btn-reddit:active, .btn-reddit:focus, .btn-reddit:hover {
    background: #cc3700;
    color: #fff;
    border-color: #cc3700; }

.btn-spotify {
  background: #1ed760;
  border-color: #1ed760;
  color: #fff; }
  .btn-spotify:active, .btn-spotify:focus, .btn-spotify:hover {
    background: #18aa4c;
    color: #fff;
    border-color: #18aa4c; }

.btn-yahoo {
  background: #430297;
  border-color: #430297;
  color: #fff; }
  .btn-yahoo:active, .btn-yahoo:focus, .btn-yahoo:hover {
    background: #2d0165;
    color: #fff;
    border-color: #2d0165; }

.btn-dribbble {
  background: #ea4c89;
  border-color: #ea4c89;
  color: #fff; }
  .btn-dribbble:active, .btn-dribbble:focus, .btn-dribbble:hover {
    background: #e51e6b;
    color: #fff;
    border-color: #e51e6b; }

.btn-skype {
  background: #00aff0;
  border-color: #00aff0;
  color: #fff; }
  .btn-skype:active, .btn-skype:focus, .btn-skype:hover {
    background: #008abd;
    color: #fff;
    border-color: #008abd; }

.btn-quora {
  background: #aa2200;
  border-color: #aa2200;
  color: #fff; }
  .btn-quora:active, .btn-quora:focus, .btn-quora:hover {
    background: #771800;
    color: #fff;
    border-color: #771800; }

.btn-vimeo {
  background: #1ab7ea;
  border-color: #1ab7ea;
  color: #fff; }
  .btn-vimeo:active, .btn-vimeo:focus, .btn-vimeo:hover {
    background: #1295bf;
    color: #fff;
    border-color: #1295bf; }

.card {
  margin-bottom: 30px;
  border: 0px;
  border-radius: 0.625rem;
  box-shadow: 6px 11px 41px -28px #a99de7; }
  .card-title {
    font-size: 18px;
    font-weight: 500;
    line-height: 18px; }
  .card-header {
    border-bottom: 0px;
    background: transparent; }
    .card-header:first-child {
      border-radius: 0; }
  .card .card-body {
    padding: 1.88rem 1.81rem; }
  .card-action a {
    display: inline-block;
    color: #fff;
    border-radius: 50%; }
    .card-action a:not(:last-child) {
      margin-right: 4px; }
    .card-action a i, .card-action a span {
      font-size: 12px; }
  .card-fullscreen {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 99999999;
    overflow: auto; }

.no-card-border .card {
  border: 0 !important; }

.card-img-btn {
  position: absolute;
  bottom: 15px;
  left: 30px; }

.card-bg-img-1 {
  background: url(../../assets/images/big/img6.jpg);
  background-position: center;
  background-size: cover;
  min-height: 300px; }

.card-bg-img-2 {
  background: url(../../assets/images/big/img6.jpg);
  background-position: center;
  background-size: cover;
  min-height: 400px; }

.card-loader {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.9);
  z-index: 999; }

.card-loader i {
  margin: 0 auto;
  color: #448aff;
  font-size: 1.3rem; }

.rotate-refresh {
  -webkit-animation: mymove 0.8s infinite linear;
  animation: mymove 0.8s infinite linear;
  display: inline-block; }

.card-widget .card-body {
  padding: 1.8rem;
  border-radius: 3px; }

.card-widget__title {
  font-size: 24px;
  color: #fff;
  margin-bottom: 5px; }

.card-widget__subtitle {
  font-weight: normal;
  font-size: 14px;
  color: #fff;
  margin-bottom: 0; }

.card-widget__icon {
  margin-right: 20px; }
  .card-widget__icon i, .card-widget__icon span {
    font-size: 35px;
    color: #fff; }

@-webkit-keyframes mymove {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes mymove {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

.opacity-5 {
  opacity: 0.5; }

.card-footer {
  background: white; }

.dropdown-toggle:focus {
  box-shadow: none !important; }

.dropdown-outline {
  border: 1px solid #7571f9; }

.dropdown-menu {
  font-size: inherit; }

.custom-dropdown {
  display: inline-block;
  margin-bottom: 10px; }
  .custom-dropdown .dropdown-menu {
    border: 1px solid rgba(120, 130, 140, 0.13);
    min-width: auto; }
    .custom-dropdown .dropdown-menu .dropdown-item {
      padding: 5px 15px;
      color: #abafb3; }

#preloader {
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99999999999;
  background: #fff; }

.loader {
  position: absolute;
  width: 5rem;
  height: 10rem;
  top: 50%;
  margin: 0 auto;
  left: 0;
  right: 0;
  transform: translateY(-50%); }

.circular {
  animation: rotate 2s linear infinite;
  height: 100%;
  transform-origin: center center;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto; }

.path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
  stroke-linecap: round; }

@keyframes rotate {
  100% {
    transform: rotate(360deg); } }

@keyframes dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -3.5rem; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -12.4rem; } }

@keyframes color {
  100%,
  0% {
    stroke: #d62d20; }
  40% {
    stroke: #0057e7; }
  66% {
    stroke: #008744; }
  80%,
  90% {
    stroke: #ffa700; } }

.progress-bar {
  background-color: transparent; }

.progress-bar-primary {
  background-color: #7571f9; }

.progress-bar-success {
  background-color: #6fd96f; }

.progress-bar-info {
  background-color: #4d7cff; }

.progress-bar-danger {
  background-color: #ff5e5e; }

.progress-bar-warning {
  background-color: #f29d56; }

.progress-bar-pink {
  background-color: #e91e63; }

.progress-bar.active,
.progress.active .progress-bar {
  animation: 2s linear 0s normal none infinite running progress-bar-stripes; }

.progress-vertical {
  display: inline-block;
  height: 250px;
  margin-bottom: 0;
  margin-right: 20px;
  min-height: 250px;
  position: relative; }

.progress-vertical-bottom {
  display: inline-block;
  height: 250px;
  margin-bottom: 0;
  margin-right: 20px;
  min-height: 250px;
  position: relative;
  transform: rotate(180deg); }

.progress-animated {
  animation-duration: 5s;
  animation-name: myanimation;
  transition: all 5s ease 0s; }

@keyframes myanimation {
  0% {
    width: 0; } }

@keyframes myanimation {
  0% {
    width: 0; } }

.browser .progress {
  height: 8px; }

.nav-pills .nav-link {
  border-radius: 0px; }

.default-tab .nav-link {
  background: transparent;
  border-radius: 0px;
  font-weight: 500; }

.custom-tab-1 .nav-link {
  background: transparent;
  border-radius: 0px;
  font-weight: 500; }

.timeline {
  list-style: none;
  padding: 8px 0 8px;
  position: relative; }
  .timeline:before {
    top: 20px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 2px;
    left: 25px;
    margin-right: -1.5px;
    background: #f5f5f5; }
  .timeline > li {
    margin-bottom: 5px;
    position: relative; }
    .timeline > li:before {
      content: " ";
      display: table; }
    .timeline > li:after {
      content: " ";
      display: table;
      clear: both; }
    .timeline > li > .timeline-panel {
      width: calc(100% - 35px);
      float: right;
      border-radius: 2px;
      padding: 5px 20px;
      position: relative; }
    .timeline > li > .timeline-badge {
      border-radius: 50%;
      height: 15px;
      left: 19px;
      position: absolute;
      top: 10px;
      width: 15px; }

.timeline-body > p {
  font-size: 12px; }

.timeline-badge.primary {
  background-color: #7571f9 !important; }

.timeline-badge.success {
  background-color: #6fd96f !important; }

.timeline-badge.warning {
  background-color: #f29d56 !important; }

.timeline-badge.danger {
  background-color: #ff5e5e !important; }

.timeline-badge.info {
  background-color: #4d7cff !important; }

.stat-widget-one {
  padding: 2rem;
  text-align: center; }
  .stat-widget-one .stat-digit {
    font-size: 2.5rem;
    font-weight: 700; }
  .stat-widget-one .stat-text {
    font-size: 1.1rem;
    margin-bottom: .5rem; }
  .stat-widget-one .progress {
    height: .6rem;
    margin-bottom: 0;
    margin-top: 1.5rem;
    box-shadow: none; }
  .stat-widget-one .progress-bar {
    box-shadow: none; }

.social-graph-wrapper {
  text-align: center;
  padding-bottom: 20px;
  position: relative;
  color: #fff;
  border-top-left-radius: 0.625rem;
  border-top-right-radius: 0.625rem; }
  .social-graph-wrapper.widget-facebook {
    background-color: #3b5998; }
  .social-graph-wrapper.widget-twitter {
    background-color: #1da1f2; }
  .social-graph-wrapper.widget-linkedin {
    background-color: #007bb6; }
  .social-graph-wrapper.widget-googleplus {
    background-color: #db4439; }
  .social-graph-wrapper .s-icon {
    font-size: 2.1875rem;
    position: relative;
    top: 0.625rem;
    padding: 0 10px; }

.tdl-holder {
  margin: 0 auto; }
  .tdl-holder ul {
    list-style: none;
    margin: 0;
    padding: 0; }
  .tdl-holder li {
    background-color: transparent;
    border-bottom: 1px solid #f3f3f3;
    list-style: none none;
    margin: 0;
    padding: 0; }
    .tdl-holder li span {
      margin-left: 35px;
      font-weight: 500;
      vertical-align: middle;
      -webkit-transition: all .2s linear;
      -moz-transition: all .2s linear;
      -o-transition: all .2s linear;
      transition: all 0.2s linear; }
  .tdl-holder label {
    cursor: pointer;
    display: block;
    line-height: 52px;
    padding-left: 1.5rem;
    position: relative;
    margin: 0 !important;
    color: #464a53; }
    .tdl-holder label a {
      color: #464a53;
      line-height: normal;
      height: 100%;
      text-align: center;
      text-decoration: none;
      width: 50px;
      transition: all 0.2s linear;
      padding: 18px 0px;
      font-size: 18px;
      display: flex;
      position: absolute;
      right: 0;
      display: inline-block; }
  .tdl-holder input[type=checkbox] {
    cursor: pointer;
    opacity: 0;
    position: absolute; }
    .tdl-holder input[type=checkbox] + i {
      background-color: #ddd;
      display: block;
      height: 20px;
      position: absolute;
      top: 15px;
      width: 20px;
      z-index: 1; }
    .tdl-holder input[type=checkbox]:checked + i {
      border-color: #464a53; }
    .tdl-holder input[type=checkbox]:checked + i::after {
      content: "\f00c";
      font-family: 'fontAwesome';
      display: block;
      left: 1px;
      position: absolute;
      top: -17px;
      z-index: 2;
      color: #162336; }
    .tdl-holder input[type=checkbox]:checked ~ span {
      text-decoration: line-through;
      position: relative; }
  .tdl-holder input[type=text] {
    background-color: #fff;
    height: 40px;
    margin-top: 40px;
    border-radius: 0.625rem;
    border-color: rgba(22, 35, 54, 0.5);
    color: #464a53; }

.faq-tab-panel .nav-pills .nav-link {
  display: block;
  padding: 2.4rem 1.9rem;
  background-color: #fff;
  box-shadow: 2px 3px 10px 0px rgba(119, 119, 119, 0.1);
  border-radius: 4px; }
  @media (min-width: 1400px) {
    .faq-tab-panel .nav-pills .nav-link {
      padding: 2.4rem 6rem 1.9rem 1.9rem; } }
  .faq-tab-panel .nav-pills .nav-link:not(:last-child) {
    margin-bottom: 1rem; }
  .faq-tab-panel .nav-pills .nav-link.active {
    background-color: #7571f9;
    color: #fff !important; }
    .faq-tab-panel .nav-pills .nav-link.active h4, .faq-tab-panel .nav-pills .nav-link.active p, .faq-tab-panel .nav-pills .nav-link.active i {
      color: #fff !important; }
  .faq-tab-panel .nav-pills .nav-link .media-body p {
    font-size: 1.6rem;
    color: #8898aa; }

.faq-tab-panel .nav-pills .nav-icon {
  margin-right: 2rem;
  min-width: 50px;
  text-align: center; }
  .faq-tab-panel .nav-pills .nav-icon i {
    font-size: 4rem;
    line-height: 5.6rem;
    color: #7571f9; }

.faq-tab-panel .tab-content .media i {
  color: #7571f9;
  font-size: 4rem;
  line-height: 5.6rem; }

.faq-heading h1 {
  font-size: 4rem !important;
  margin-bottom: 4rem; }

.about__list h4 {
  margin-bottom: 1.1rem; }

.about__list ul li {
  margin-bottom: .4rem; }

.about__list:last-child {
  margin-bottom: 0 !important; }

.comming-soon-wrapper {
  background-image: url("../../assets/images/big/comming-soon-bg.png");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; }
  .comming-soon-wrapper .container {
    max-width: 950px; }

.comming-soon__logo {
  font-size: 26px;
  color: #7571f9;
  font-weight: 700;
  margin-bottom: 20px; }
  @media (min-width: 768px) {
    .comming-soon__logo {
      margin-bottom: 50px; } }
  .comming-soon__logo img {
    width: 35px;
    height: 35px;
    margin-right: .4rem; }
    @media (min-width: 768px) {
      .comming-soon__logo img {
        width: 50px;
        height: 50px; } }

.comming-soon__content h1 {
  color: #7571f9;
  font-weight: 700;
  line-height: 1; }
  @media (min-width: 768px) {
    .comming-soon__content h1 {
      font-size: 6rem; } }

.comming-soon__content h3 {
  font-size: 2.2rem;
  color: #6a707e;
  margin-top: 1rem;
  margin-bottom: 1.6rem; }
  @media (min-width: 768px) {
    .comming-soon__content h3 {
      margin-top: 2rem;
      margin-bottom: 3rem; } }

.comming-soon__footer h2 {
  font-size: 3.5rem;
  color: #464a53; }

.comming-soon__form .input-group {
  max-width: 610px;
  margin-right: auto;
  margin-left: auto; }
  .comming-soon__form .input-group .form-control {
    background: transparent; }
  .comming-soon__form .input-group-append .input-group-text {
    background: #7571f9;
    color: #fff;
    padding: 0.375rem  1.8rem; }

.comming-soon__social li {
  margin-right: 1.2rem !important; }
  .comming-soon__social li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    padding: 0; }
    @media (min-width: 768px) {
      .comming-soon__social li a {
        width: 50px;
        height: 50px;
        line-height: 50px; } }
  .comming-soon__social li i {
    font-size: 1.8rem; }

#error body {
  background: #fff; }

.error-content {
  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column; }

.error-text {
  font-size: 5rem;
  line-height: 5rem;
  color: #7571f9; }

#password-page1 body {
  background: url(../../assets/images/background/password-bg.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  position: relative; }

#invoice {
  position: relative;
  margin-bottom: 12rem;
  padding: 3rem;
  background: #fff; }

#invoice-table {
  padding: 3rem 0;
  border-bottom: 0.1rem solid rgba(120, 130, 140, 0.13); }

#invoice-top {
  min-height: 12rem; }

#invoice-mid {
  min-height: 12rem; }

#invoice-bot {
  min-height: 25rem; }

.invoice-logo {
  float: left;
  height: 6rem;
  width: 6rem;
  background: url("http://michaeltruong.ca/images/logo1.png") no-repeat;
  background-size: 6rem 6rem; }

.clientlogo {
  float: left;
  height: 6rem;
  width: 6rem;
  background: url("http://michaeltruong.ca/images/client.jpg") no-repeat;
  background-size: 6rem 6rem;
  border-radius: 5rem; }

.invoice-info {
  display: block;
  float: left;
  margin-left: 2rem; }
  .invoice-info h2 {
    font-size: 1.4rem;
    color: #464a53; }
  .invoice-info p {
    font-size: 1.2rem; }

.title {
  float: right; }
  .title h4 {
    text-align: right;
    color: #464a53; }

.title p {
  text-align: right;
  font-size: 1.2rem; }

#project {
  margin-left: 52%; }
  #project p {
    font-size: 1.2rem; }

#invoice-table h2 {
  font-size: 1.8rem; }

.tabletitle {
  padding: .5rem;
  background: rgba(120, 130, 140, 0.13); }

.service {
  border: 0.1rem solid rgba(120, 130, 140, 0.13); }

.payment-details .table-borderless tbody tr td:not(:last-child) {
  color: #464a53; }

.payment-details .table-borderless tbody tr td:last-child {
  color: #8898aa; }

.table-item {
  width: 50%; }

.itemtext {
  font-size: 0.9em; }

#legalcopy {
  margin-top: 3rem; }
  #legalcopy p {
    font-size: 1.2rem; }

.legal {
  width: 70%; }

/* All Invoice Page Responsive
--------------------------- */
@media (max-width: 48rem) {
  .control-bar {
    padding: 1.5rem 1.5rem 4rem; } }

@media (max-width: 36rem) {
  .notaxrelated {
    margin-top: 1.5rem; } }

.pricing_table_one .pricing_table_content {
  background: #fff;
  text-align: center;
  border: .1rem solid #e7e7e7;
  border-radius: .3rem;
  padding: 2.5rem;
  -webkit-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out; }
  .pricing_table_one .pricing_table_content .package {
    font-weight: 700;
    font-size: 1.8rem; }
  .pricing_table_one .pricing_table_content .price {
    font-weight: 700;
    font-size: 5rem;
    line-height: 10rem; }
  .pricing_table_one .pricing_table_content hr {
    margin: 0; }
  .pricing_table_one .pricing_table_content .price_list {
    padding: 3rem 0;
    text-align: left;
    max-width: 17.5rem;
    margin: 0 auto; }
    .pricing_table_one .pricing_table_content .price_list li {
      color: #909093;
      font-size: 1.4rem;
      line-height: 2.5rem;
      padding: .7rem 0; }
      .pricing_table_one .pricing_table_content .price_list li i {
        margin-right: 1.5rem; }
  .pricing_table_one .pricing_table_content .price-btn {
    padding: 1.5rem 5rem;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 0.1rem solid rgba(120, 130, 140, 0.13);
    border-radius: .5rem;
    font-weight: 700;
    font-size: 1.4rem;
    margin-bottom: 2.5rem;
    -webkit-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out; }
  .pricing_table_one .pricing_table_content:focus, .pricing_table_one .pricing_table_content:hover {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    -webkit-box-shadow: 0 0 1rem rgba(0, 0, 0, 0.175);
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.175); }
    .pricing_table_one .pricing_table_content:focus .price-btn, .pricing_table_one .pricing_table_content:hover .price-btn {
      color: #ff5e5e; }

#register-page1 body {
  background: url(../../assets/images/background/register-bg.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  position: relative; }

#login-page2 body {
  background: url(../../assets/images/background/login-register2.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  position: relative; }
  #login-page2 body::after {
    position: absolute;
    content: '';
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(34, 144, 255, 0.5);
    z-index: -1; }

#login-page1 body {
  background: url(../../assets/images/background/login-bg.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  position: relative; }

.form-input-content {
  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column; }

#userLock-page1 body {
  background: url(../../assets/images/background/user-lock-bg.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  position: relative; }

/*  1 - media screen and (max-width: 1750px)
---------------------------------------------------------------------- */
/*  2 - media screen and (max-width: 1680px)
---------------------------------------------------------------------- */
/*  3 - media screen and (max-width: 1280px)
---------------------------------------------------------------------- */
/*  4 - media screen and (max-width: 1199px)
---------------------------------------------------------------------- */
/*  5 - media screen and (max-width: 1024px)
---------------------------------------------------------------------- */
/*  6 - media screen and (max-width: 991px)
---------------------------------------------------------------------- */
/*  7 - media screen and (max-width: 767px)
---------------------------------------------------------------------- */
/*  8 - media screen and (max-width: 680px)
---------------------------------------------------------------------- */
/*  9 - media screen and (max-width: 480px)
---------------------------------------------------------------------- */
@media (max-width: 767px) {
  .icons {
    position: static !important; }
    .icons .dropdown-profile {
      width: 17.5rem; } }

@media (max-width: 575px) {
  .icons .log-user img {
    width: 3rem;
    height: 3rem;
    margin-right: .5rem; }
  .icons .log-user span {
    display: none; } }

/*  10 - media screen and (max-width: 320px)
---------------------------------------------------------------------- */
@media (min-width: 320px) and (max-width: 359px) {
  .icons {
    position: static !important; }
    .icons .dropdown-profile {
      width: 17.5rem; }
    .icons .log-user span {
      display: none; } }

.rtl {
  text-align: right;
  direction: rtl; }
  .rtl .nav {
    padding-right: 0; }
  .rtl .navbar-nav .nav-item {
    float: right; }
  .rtl .navbar-nav .nav-item + .nav-item {
    margin-right: 1rem;
    margin-left: inherit; }
  .rtl th {
    text-align: right; }
  .rtl .alert-dismissible {
    padding-right: 1.25rem;
    padding-left: 4rem; }
  .rtl .dropdown-menu {
    right: 0;
    text-align: right; }
  .rtl .checkbox label {
    padding-right: 1.25rem;
    padding-left: inherit; }
  .rtl .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-radius: 0 0.25rem 0.25rem 0; }
  .rtl .btn-group > .btn:last-child:not(:first-child),
  .rtl .btn-group > .dropdown-toggle:not(:first-child) {
    border-radius: 0.25rem 0 0 0.25rem; }
  .rtl .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
    border-radius: 0.25rem 0 0 0.25rem; }
  .rtl .custom-control-label::after,
  .rtl .custom-control-label::before {
    right: 0;
    left: inherit; }
  .rtl .custom-select {
    padding: 0.375rem 0.75rem 0.375rem 1.75rem;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat left 0.75rem center;
    background-size: 8px 10px; }
  .rtl .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
  .rtl .input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
  .rtl .input-group > .input-group-append:not(:last-child) > .btn,
  .rtl .input-group > .input-group-append:not(:last-child) > .input-group-text,
  .rtl .input-group > .input-group-prepend > .btn,
  .rtl .input-group > .input-group-prepend > .input-group-text {
    border-radius: 0 0.25rem 0.25rem 0; }
  .rtl .input-group > .input-group-append > .btn,
  .rtl .input-group > .input-group-append > .input-group-text,
  .rtl .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
  .rtl .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
  .rtl .input-group > .input-group-prepend:not(:first-child) > .btn,
  .rtl .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
    border-radius: 0.25rem 0 0 0.25rem; }
  .rtl .input-group > .custom-select:not(:first-child),
  .rtl .input-group > .form-control:not(:first-child) {
    border-radius: 0.25rem 0 0 0.25rem; }
  .rtl .input-group > .custom-select:not(:last-child),
  .rtl .input-group > .form-control:not(:last-child) {
    border-radius: 0 0.25rem 0.25rem 0; }
  .rtl .input-group > .custom-select:not(:last-child):not(:first-child),
  .rtl .input-group > .form-control:not(:last-child):not(:first-child) {
    border-radius: 0; }
  .rtl .custom-control {
    padding-right: 1.5rem;
    padding-left: inherit;
    margin-right: inherit;
    margin-left: 1rem; }
  .rtl .custom-control-indicator {
    right: 0;
    left: inherit; }
  .rtl .custom-file-label::after {
    right: initial;
    left: -1px;
    border-radius: .25rem 0 0 .25rem; }
  .rtl .radio input,
  .rtl .radio-inline,
  .rtl .checkbox input,
  .rtl .checkbox-inline input {
    margin-right: -1.25rem;
    margin-left: inherit; }
  .rtl .list-group {
    padding-right: 0;
    padding-left: 40px; }
  .rtl .close {
    float: left; }
  .rtl .modal-header .close {
    margin: -15px auto -15px -15px; }
  .rtl .modal-footer > :not(:first-child) {
    margin-right: .25rem; }
  .rtl .alert-dismissible .close {
    right: inherit;
    left: 0; }
  .rtl .dropdown-toggle::after {
    margin-right: .255em;
    margin-left: 0; }
  .rtl .form-check-input {
    margin-right: -1.25rem;
    margin-left: inherit; }
  .rtl .form-check-label {
    padding-right: 1.25rem;
    padding-left: inherit; }
  .rtl .offset-1 {
    margin-right: 8.33333%;
    margin-left: 0; }
  .rtl .offset-2 {
    margin-right: 16.66667%;
    margin-left: 0; }
  .rtl .offset-3 {
    margin-right: 25%;
    margin-left: 0; }
  .rtl .offset-4 {
    margin-right: 33.33333%;
    margin-left: 0; }
  .rtl .offset-5 {
    margin-right: 41.66667%;
    margin-left: 0; }
  .rtl .offset-6 {
    margin-right: 50%;
    margin-left: 0; }
  .rtl .offset-7 {
    margin-right: 58.33333%;
    margin-left: 0; }
  .rtl .offset-8 {
    margin-right: 66.66667%;
    margin-left: 0; }
  .rtl .offset-9 {
    margin-right: 75%;
    margin-left: 0; }
  .rtl .offset-10 {
    margin-right: 83.33333%;
    margin-left: 0; }
  .rtl .offset-11 {
    margin-right: 91.66667%;
    margin-left: 0; }
  @media (min-width: 576px) {
    .rtl .offset-sm-0 {
      margin-right: 0;
      margin-left: 0; }
    .rtl .offset-sm-1 {
      margin-right: 8.33333%;
      margin-left: 0; }
    .rtl .offset-sm-2 {
      margin-right: 16.66667%;
      margin-left: 0; }
    .rtl .offset-sm-3 {
      margin-right: 25%;
      margin-left: 0; }
    .rtl .offset-sm-4 {
      margin-right: 33.33333%;
      margin-left: 0; }
    .rtl .offset-sm-5 {
      margin-right: 41.66667%;
      margin-left: 0; }
    .rtl .offset-sm-6 {
      margin-right: 50%;
      margin-left: 0; }
    .rtl .offset-sm-7 {
      margin-right: 58.33333%;
      margin-left: 0; }
    .rtl .offset-sm-8 {
      margin-right: 66.66667%;
      margin-left: 0; }
    .rtl .offset-sm-9 {
      margin-right: 75%;
      margin-left: 0; }
    .rtl .offset-sm-10 {
      margin-right: 83.33333%;
      margin-left: 0; }
    .rtl .offset-sm-11 {
      margin-right: 91.66667%;
      margin-left: 0; } }
  @media (min-width: 768px) {
    .rtl .offset-md-0 {
      margin-right: 0;
      margin-left: 0; }
    .rtl .offset-md-1 {
      margin-right: 8.33333%;
      margin-left: 0; }
    .rtl .offset-md-2 {
      margin-right: 16.66667%;
      margin-left: 0; }
    .rtl .offset-md-3 {
      margin-right: 25%;
      margin-left: 0; }
    .rtl .offset-md-4 {
      margin-right: 33.33333%;
      margin-left: 0; }
    .rtl .offset-md-5 {
      margin-right: 41.66667%;
      margin-left: 0; }
    .rtl .offset-md-6 {
      margin-right: 50%;
      margin-left: 0; }
    .rtl .offset-md-7 {
      margin-right: 58.33333%;
      margin-left: 0; }
    .rtl .offset-md-8 {
      margin-right: 66.66667%;
      margin-left: 0; }
    .rtl .offset-md-9 {
      margin-right: 75%;
      margin-left: 0; }
    .rtl .offset-md-10 {
      margin-right: 83.33333%;
      margin-left: 0; }
    .rtl .offset-md-11 {
      margin-right: 91.66667%;
      margin-left: 0; } }
  @media (min-width: 992px) {
    .rtl .offset-lg-0 {
      margin-right: 0;
      margin-left: 0; }
    .rtl .offset-lg-1 {
      margin-right: 8.33333%;
      margin-left: 0; }
    .rtl .offset-lg-2 {
      margin-right: 16.66667%;
      margin-left: 0; }
    .rtl .offset-lg-3 {
      margin-right: 25%;
      margin-left: 0; }
    .rtl .offset-lg-4 {
      margin-right: 33.33333%;
      margin-left: 0; }
    .rtl .offset-lg-5 {
      margin-right: 41.66667%;
      margin-left: 0; }
    .rtl .offset-lg-6 {
      margin-right: 50%;
      margin-left: 0; }
    .rtl .offset-lg-7 {
      margin-right: 58.33333%;
      margin-left: 0; }
    .rtl .offset-lg-8 {
      margin-right: 66.66667%;
      margin-left: 0; }
    .rtl .offset-lg-9 {
      margin-right: 75%;
      margin-left: 0; }
    .rtl .offset-lg-10 {
      margin-right: 83.33333%;
      margin-left: 0; }
    .rtl .offset-lg-11 {
      margin-right: 91.66667%;
      margin-left: 0; } }
  @media (min-width: 1200px) {
    .rtl .offset-xl-0 {
      margin-right: 0;
      margin-left: 0; }
    .rtl .offset-xl-1 {
      margin-right: 8.33333%;
      margin-left: 0; }
    .rtl .offset-xl-2 {
      margin-right: 16.66667%;
      margin-left: 0; }
    .rtl .offset-xl-3 {
      margin-right: 25%;
      margin-left: 0; }
    .rtl .offset-xl-4 {
      margin-right: 33.33333%;
      margin-left: 0; }
    .rtl .offset-xl-5 {
      margin-right: 41.66667%;
      margin-left: 0; }
    .rtl .offset-xl-6 {
      margin-right: 50%;
      margin-left: 0; }
    .rtl .offset-xl-7 {
      margin-right: 58.33333%;
      margin-left: 0; }
    .rtl .offset-xl-8 {
      margin-right: 66.66667%;
      margin-left: 0; }
    .rtl .offset-xl-9 {
      margin-right: 75%;
      margin-left: 0; }
    .rtl .offset-xl-10 {
      margin-right: 83.33333%;
      margin-left: 0; }
    .rtl .offset-xl-11 {
      margin-right: 91.66667%;
      margin-left: 0; } }
  @media (min-width: 1400) {
    .rtl .offset-xxl-0 {
      margin-right: 0;
      margin-left: 0; }
    .rtl .offset-xxl-1 {
      margin-right: 8.33333%;
      margin-left: 0; }
    .rtl .offset-xxl-2 {
      margin-right: 16.66667%;
      margin-left: 0; }
    .rtl .offset-xxl-3 {
      margin-right: 25%;
      margin-left: 0; }
    .rtl .offset-xxl-4 {
      margin-right: 33.33333%;
      margin-left: 0; }
    .rtl .offset-xxl-5 {
      margin-right: 41.66667%;
      margin-left: 0; }
    .rtl .offset-xxl-6 {
      margin-right: 50%;
      margin-left: 0; }
    .rtl .offset-xxl-7 {
      margin-right: 58.33333%;
      margin-left: 0; }
    .rtl .offset-xxl-8 {
      margin-right: 66.66667%;
      margin-left: 0; }
    .rtl .offset-xxl-9 {
      margin-right: 75%;
      margin-left: 0; }
    .rtl .offset-xxl-10 {
      margin-right: 83.33333%;
      margin-left: 0; }
    .rtl .offset-xxl-11 {
      margin-right: 91.66667%;
      margin-left: 0; } }
  .rtl .mr-0,
  .rtl .mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .rtl .ml-0,
  .rtl .mx-0 {
    margin-left: 0 !important;
    margin-right: 0 !important; }
  .rtl .mr-1,
  .rtl .mx-1 {
    margin-right: 0 !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-1,
  .rtl .mx-1 {
    margin-left: 0 !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-2,
  .rtl .mx-2 {
    margin-right: 0 !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-2,
  .rtl .mx-2 {
    margin-left: 0 !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-3,
  .rtl .mx-3 {
    margin-right: 0 !important;
    margin-left: 1rem !important; }
  .rtl .ml-3,
  .rtl .mx-3 {
    margin-left: 0 !important;
    margin-right: 1rem !important; }
  .rtl .mr-4,
  .rtl .mx-4 {
    margin-right: 0 !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-4,
  .rtl .mx-4 {
    margin-left: 0 !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-5,
  .rtl .mx-5 {
    margin-right: 0 !important;
    margin-left: 3rem !important; }
  .rtl .ml-5,
  .rtl .mx-5 {
    margin-left: 0 !important;
    margin-right: 3rem !important; }
  .rtl .pr-0,
  .rtl .px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .rtl .pl-0,
  .rtl .px-0 {
    padding-left: 0 !important;
    padding-right: 0 !important; }
  .rtl .pr-1,
  .rtl .px-1 {
    padding-right: 0 !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-1,
  .rtl .px-1 {
    padding-left: 0 !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-2,
  .rtl .px-2 {
    padding-right: 0 !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-2,
  .rtl .px-2 {
    padding-left: 0 !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-3,
  .rtl .px-3 {
    padding-right: 0 !important;
    padding-left: 1rem !important; }
  .rtl .pl-3,
  .rtl .px-3 {
    padding-left: 0 !important;
    padding-right: 1rem !important; }
  .rtl .pr-4,
  .rtl .px-4 {
    padding-right: 0 !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-4,
  .rtl .px-4 {
    padding-left: 0 !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-5,
  .rtl .px-5 {
    padding-right: 0 !important;
    padding-left: 3rem !important; }
  .rtl .pl-5,
  .rtl .px-5 {
    padding-left: 0 !important;
    padding-right: 3rem !important; }
  .rtl .mr-auto {
    margin-right: 0 !important;
    margin-left: auto !important; }
  .rtl .ml-auto {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .mx-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  @media (min-width: 576px) {
    .rtl .mr-sm-0,
    .rtl .mx-sm-0 {
      margin-right: 0 !important;
      margin-left: 0 !important; }
    .rtl .ml-sm-0,
    .rtl .mx-sm-0 {
      margin-left: 0 !important;
      margin-right: 0 !important; }
    .rtl .mr-sm-1,
    .rtl .mx-sm-1 {
      margin-right: 0 !important;
      margin-left: 0.25rem !important; }
    .rtl .ml-sm-1,
    .rtl .mx-sm-1 {
      margin-left: 0 !important;
      margin-right: 0.25rem !important; }
    .rtl .mr-sm-2,
    .rtl .mx-sm-2 {
      margin-right: 0 !important;
      margin-left: 0.5rem !important; }
    .rtl .ml-sm-2,
    .rtl .mx-sm-2 {
      margin-left: 0 !important;
      margin-right: 0.5rem !important; }
    .rtl .mr-sm-3,
    .rtl .mx-sm-3 {
      margin-right: 0 !important;
      margin-left: 1rem !important; }
    .rtl .ml-sm-3,
    .rtl .mx-sm-3 {
      margin-left: 0 !important;
      margin-right: 1rem !important; }
    .rtl .mr-sm-4,
    .rtl .mx-sm-4 {
      margin-right: 0 !important;
      margin-left: 1.5rem !important; }
    .rtl .ml-sm-4,
    .rtl .mx-sm-4 {
      margin-left: 0 !important;
      margin-right: 1.5rem !important; }
    .rtl .mr-sm-5,
    .rtl .mx-sm-5 {
      margin-right: 0 !important;
      margin-left: 3rem !important; }
    .rtl .ml-sm-5,
    .rtl .mx-sm-5 {
      margin-left: 0 !important;
      margin-right: 3rem !important; }
    .rtl .pr-sm-0,
    .rtl .px-sm-0 {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .rtl .pl-sm-0,
    .rtl .px-sm-0 {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    .rtl .pr-sm-1,
    .rtl .px-sm-1 {
      padding-right: 0 !important;
      padding-left: 0.25rem !important; }
    .rtl .pl-sm-1,
    .rtl .px-sm-1 {
      padding-left: 0 !important;
      padding-right: 0.25rem !important; }
    .rtl .pr-sm-2,
    .rtl .px-sm-2 {
      padding-right: 0 !important;
      padding-left: 0.5rem !important; }
    .rtl .pl-sm-2,
    .rtl .px-sm-2 {
      padding-left: 0 !important;
      padding-right: 0.5rem !important; }
    .rtl .pr-sm-3,
    .rtl .px-sm-3 {
      padding-right: 0 !important;
      padding-left: 1rem !important; }
    .rtl .pl-sm-3,
    .rtl .px-sm-3 {
      padding-left: 0 !important;
      padding-right: 1rem !important; }
    .rtl .pr-sm-4,
    .rtl .px-sm-4 {
      padding-right: 0 !important;
      padding-left: 1.5rem !important; }
    .rtl .pl-sm-4,
    .rtl .px-sm-4 {
      padding-left: 0 !important;
      padding-right: 1.5rem !important; }
    .rtl .pr-sm-5,
    .rtl .px-sm-5 {
      padding-right: 0 !important;
      padding-left: 3rem !important; }
    .rtl .pl-sm-5,
    .rtl .px-sm-5 {
      padding-left: 0 !important;
      padding-right: 3rem !important; }
    .rtl .mr-sm-auto {
      margin-right: 0 !important;
      margin-left: auto !important; }
    .rtl .ml-sm-auto {
      margin-right: auto !important;
      margin-left: 0 !important; }
    .rtl .mx-sm-auto {
      margin-right: auto !important;
      margin-left: auto !important; } }
  @media (min-width: 768px) {
    .rtl .mr-md-0,
    .rtl .mx-md-0 {
      margin-right: 0 !important;
      margin-left: 0 !important; }
    .rtl .ml-md-0,
    .rtl .mx-md-0 {
      margin-left: 0 !important;
      margin-right: 0 !important; }
    .rtl .mr-md-1,
    .rtl .mx-md-1 {
      margin-right: 0 !important;
      margin-left: 0.25rem !important; }
    .rtl .ml-md-1,
    .rtl .mx-md-1 {
      margin-left: 0 !important;
      margin-right: 0.25rem !important; }
    .rtl .mr-md-2,
    .rtl .mx-md-2 {
      margin-right: 0 !important;
      margin-left: 0.5rem !important; }
    .rtl .ml-md-2,
    .rtl .mx-md-2 {
      margin-left: 0 !important;
      margin-right: 0.5rem !important; }
    .rtl .mr-md-3,
    .rtl .mx-md-3 {
      margin-right: 0 !important;
      margin-left: 1rem !important; }
    .rtl .ml-md-3,
    .rtl .mx-md-3 {
      margin-left: 0 !important;
      margin-right: 1rem !important; }
    .rtl .mr-md-4,
    .rtl .mx-md-4 {
      margin-right: 0 !important;
      margin-left: 1.5rem !important; }
    .rtl .ml-md-4,
    .rtl .mx-md-4 {
      margin-left: 0 !important;
      margin-right: 1.5rem !important; }
    .rtl .mr-md-5,
    .rtl .mx-md-5 {
      margin-right: 0 !important;
      margin-left: 3rem !important; }
    .rtl .ml-md-5,
    .rtl .mx-md-5 {
      margin-left: 0 !important;
      margin-right: 3rem !important; }
    .rtl .pr-md-0,
    .rtl .px-md-0 {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .rtl .pl-md-0,
    .rtl .px-md-0 {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    .rtl .pr-md-1,
    .rtl .px-md-1 {
      padding-right: 0 !important;
      padding-left: 0.25rem !important; }
    .rtl .pl-md-1,
    .rtl .px-md-1 {
      padding-left: 0 !important;
      padding-right: 0.25rem !important; }
    .rtl .pr-md-2,
    .rtl .px-md-2 {
      padding-right: 0 !important;
      padding-left: 0.5rem !important; }
    .rtl .pl-md-2,
    .rtl .px-md-2 {
      padding-left: 0 !important;
      padding-right: 0.5rem !important; }
    .rtl .pr-md-3,
    .rtl .px-md-3 {
      padding-right: 0 !important;
      padding-left: 1rem !important; }
    .rtl .pl-md-3,
    .rtl .px-md-3 {
      padding-left: 0 !important;
      padding-right: 1rem !important; }
    .rtl .pr-md-4,
    .rtl .px-md-4 {
      padding-right: 0 !important;
      padding-left: 1.5rem !important; }
    .rtl .pl-md-4,
    .rtl .px-md-4 {
      padding-left: 0 !important;
      padding-right: 1.5rem !important; }
    .rtl .pr-md-5,
    .rtl .px-md-5 {
      padding-right: 0 !important;
      padding-left: 3rem !important; }
    .rtl .pl-md-5,
    .rtl .px-md-5 {
      padding-left: 0 !important;
      padding-right: 3rem !important; }
    .rtl .mr-md-auto {
      margin-right: 0 !important;
      margin-left: auto !important; }
    .rtl .ml-md-auto {
      margin-right: auto !important;
      margin-left: 0 !important; }
    .rtl .mx-md-auto {
      margin-right: auto !important;
      margin-left: auto !important; } }
  @media (min-width: 992px) {
    .rtl .mr-lg-0,
    .rtl .mx-lg-0 {
      margin-right: 0 !important;
      margin-left: 0 !important; }
    .rtl .ml-lg-0,
    .rtl .mx-lg-0 {
      margin-left: 0 !important;
      margin-right: 0 !important; }
    .rtl .mr-lg-1,
    .rtl .mx-lg-1 {
      margin-right: 0 !important;
      margin-left: 0.25rem !important; }
    .rtl .ml-lg-1,
    .rtl .mx-lg-1 {
      margin-left: 0 !important;
      margin-right: 0.25rem !important; }
    .rtl .mr-lg-2,
    .rtl .mx-lg-2 {
      margin-right: 0 !important;
      margin-left: 0.5rem !important; }
    .rtl .ml-lg-2,
    .rtl .mx-lg-2 {
      margin-left: 0 !important;
      margin-right: 0.5rem !important; }
    .rtl .mr-lg-3,
    .rtl .mx-lg-3 {
      margin-right: 0 !important;
      margin-left: 1rem !important; }
    .rtl .ml-lg-3,
    .rtl .mx-lg-3 {
      margin-left: 0 !important;
      margin-right: 1rem !important; }
    .rtl .mr-lg-4,
    .rtl .mx-lg-4 {
      margin-right: 0 !important;
      margin-left: 1.5rem !important; }
    .rtl .ml-lg-4,
    .rtl .mx-lg-4 {
      margin-left: 0 !important;
      margin-right: 1.5rem !important; }
    .rtl .mr-lg-5,
    .rtl .mx-lg-5 {
      margin-right: 0 !important;
      margin-left: 3rem !important; }
    .rtl .ml-lg-5,
    .rtl .mx-lg-5 {
      margin-left: 0 !important;
      margin-right: 3rem !important; }
    .rtl .pr-lg-0,
    .rtl .px-lg-0 {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .rtl .pl-lg-0,
    .rtl .px-lg-0 {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    .rtl .pr-lg-1,
    .rtl .px-lg-1 {
      padding-right: 0 !important;
      padding-left: 0.25rem !important; }
    .rtl .pl-lg-1,
    .rtl .px-lg-1 {
      padding-left: 0 !important;
      padding-right: 0.25rem !important; }
    .rtl .pr-lg-2,
    .rtl .px-lg-2 {
      padding-right: 0 !important;
      padding-left: 0.5rem !important; }
    .rtl .pl-lg-2,
    .rtl .px-lg-2 {
      padding-left: 0 !important;
      padding-right: 0.5rem !important; }
    .rtl .pr-lg-3,
    .rtl .px-lg-3 {
      padding-right: 0 !important;
      padding-left: 1rem !important; }
    .rtl .pl-lg-3,
    .rtl .px-lg-3 {
      padding-left: 0 !important;
      padding-right: 1rem !important; }
    .rtl .pr-lg-4,
    .rtl .px-lg-4 {
      padding-right: 0 !important;
      padding-left: 1.5rem !important; }
    .rtl .pl-lg-4,
    .rtl .px-lg-4 {
      padding-left: 0 !important;
      padding-right: 1.5rem !important; }
    .rtl .pr-lg-5,
    .rtl .px-lg-5 {
      padding-right: 0 !important;
      padding-left: 3rem !important; }
    .rtl .pl-lg-5,
    .rtl .px-lg-5 {
      padding-left: 0 !important;
      padding-right: 3rem !important; }
    .rtl .mr-lg-auto {
      margin-right: 0 !important;
      margin-left: auto !important; }
    .rtl .ml-lg-auto {
      margin-right: auto !important;
      margin-left: 0 !important; }
    .rtl .mx-lg-auto {
      margin-right: auto !important;
      margin-left: auto !important; } }
  @media (min-width: 1200px) {
    .rtl .mr-xl-0,
    .rtl .mx-xl-0 {
      margin-right: 0 !important;
      margin-left: 0 !important; }
    .rtl .ml-xl-0,
    .rtl .mx-xl-0 {
      margin-left: 0 !important;
      margin-right: 0 !important; }
    .rtl .mr-xl-1,
    .rtl .mx-xl-1 {
      margin-right: 0 !important;
      margin-left: 0.25rem !important; }
    .rtl .ml-xl-1,
    .rtl .mx-xl-1 {
      margin-left: 0 !important;
      margin-right: 0.25rem !important; }
    .rtl .mr-xl-2,
    .rtl .mx-xl-2 {
      margin-right: 0 !important;
      margin-left: 0.5rem !important; }
    .rtl .ml-xl-2,
    .rtl .mx-xl-2 {
      margin-left: 0 !important;
      margin-right: 0.5rem !important; }
    .rtl .mr-xl-3,
    .rtl .mx-xl-3 {
      margin-right: 0 !important;
      margin-left: 1rem !important; }
    .rtl .ml-xl-3,
    .rtl .mx-xl-3 {
      margin-left: 0 !important;
      margin-right: 1rem !important; }
    .rtl .mr-xl-4,
    .rtl .mx-xl-4 {
      margin-right: 0 !important;
      margin-left: 1.5rem !important; }
    .rtl .ml-xl-4,
    .rtl .mx-xl-4 {
      margin-left: 0 !important;
      margin-right: 1.5rem !important; }
    .rtl .mr-xl-5,
    .rtl .mx-xl-5 {
      margin-right: 0 !important;
      margin-left: 3rem !important; }
    .rtl .ml-xl-5,
    .rtl .mx-xl-5 {
      margin-left: 0 !important;
      margin-right: 3rem !important; }
    .rtl .pr-xl-0,
    .rtl .px-xl-0 {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .rtl .pl-xl-0,
    .rtl .px-xl-0 {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    .rtl .pr-xl-1,
    .rtl .px-xl-1 {
      padding-right: 0 !important;
      padding-left: 0.25rem !important; }
    .rtl .pl-xl-1,
    .rtl .px-xl-1 {
      padding-left: 0 !important;
      padding-right: 0.25rem !important; }
    .rtl .pr-xl-2,
    .rtl .px-xl-2 {
      padding-right: 0 !important;
      padding-left: 0.5rem !important; }
    .rtl .pl-xl-2,
    .rtl .px-xl-2 {
      padding-left: 0 !important;
      padding-right: 0.5rem !important; }
    .rtl .pr-xl-3,
    .rtl .px-xl-3 {
      padding-right: 0 !important;
      padding-left: 1rem !important; }
    .rtl .pl-xl-3,
    .rtl .px-xl-3 {
      padding-left: 0 !important;
      padding-right: 1rem !important; }
    .rtl .pr-xl-4,
    .rtl .px-xl-4 {
      padding-right: 0 !important;
      padding-left: 1.5rem !important; }
    .rtl .pl-xl-4,
    .rtl .px-xl-4 {
      padding-left: 0 !important;
      padding-right: 1.5rem !important; }
    .rtl .pr-xl-5,
    .rtl .px-xl-5 {
      padding-right: 0 !important;
      padding-left: 3rem !important; }
    .rtl .pl-xl-5,
    .rtl .px-xl-5 {
      padding-left: 0 !important;
      padding-right: 3rem !important; }
    .rtl .mr-xl-auto {
      margin-right: 0 !important;
      margin-left: auto !important; }
    .rtl .ml-xl-auto {
      margin-right: auto !important;
      margin-left: 0 !important; }
    .rtl .mx-xl-auto {
      margin-right: auto !important;
      margin-left: auto !important; } }
  @media (min-width: 1400) {
    .rtl .mr-xxl-0,
    .rtl .mx-xxl-0 {
      margin-right: 0 !important;
      margin-left: 0 !important; }
    .rtl .ml-xxl-0,
    .rtl .mx-xxl-0 {
      margin-left: 0 !important;
      margin-right: 0 !important; }
    .rtl .mr-xxl-1,
    .rtl .mx-xxl-1 {
      margin-right: 0 !important;
      margin-left: 0.25rem !important; }
    .rtl .ml-xxl-1,
    .rtl .mx-xxl-1 {
      margin-left: 0 !important;
      margin-right: 0.25rem !important; }
    .rtl .mr-xxl-2,
    .rtl .mx-xxl-2 {
      margin-right: 0 !important;
      margin-left: 0.5rem !important; }
    .rtl .ml-xxl-2,
    .rtl .mx-xxl-2 {
      margin-left: 0 !important;
      margin-right: 0.5rem !important; }
    .rtl .mr-xxl-3,
    .rtl .mx-xxl-3 {
      margin-right: 0 !important;
      margin-left: 1rem !important; }
    .rtl .ml-xxl-3,
    .rtl .mx-xxl-3 {
      margin-left: 0 !important;
      margin-right: 1rem !important; }
    .rtl .mr-xxl-4,
    .rtl .mx-xxl-4 {
      margin-right: 0 !important;
      margin-left: 1.5rem !important; }
    .rtl .ml-xxl-4,
    .rtl .mx-xxl-4 {
      margin-left: 0 !important;
      margin-right: 1.5rem !important; }
    .rtl .mr-xxl-5,
    .rtl .mx-xxl-5 {
      margin-right: 0 !important;
      margin-left: 3rem !important; }
    .rtl .ml-xxl-5,
    .rtl .mx-xxl-5 {
      margin-left: 0 !important;
      margin-right: 3rem !important; }
    .rtl .pr-xxl-0,
    .rtl .px-xxl-0 {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .rtl .pl-xxl-0,
    .rtl .px-xxl-0 {
      padding-left: 0 !important;
      padding-right: 0 !important; }
    .rtl .pr-xxl-1,
    .rtl .px-xxl-1 {
      padding-right: 0 !important;
      padding-left: 0.25rem !important; }
    .rtl .pl-xxl-1,
    .rtl .px-xxl-1 {
      padding-left: 0 !important;
      padding-right: 0.25rem !important; }
    .rtl .pr-xxl-2,
    .rtl .px-xxl-2 {
      padding-right: 0 !important;
      padding-left: 0.5rem !important; }
    .rtl .pl-xxl-2,
    .rtl .px-xxl-2 {
      padding-left: 0 !important;
      padding-right: 0.5rem !important; }
    .rtl .pr-xxl-3,
    .rtl .px-xxl-3 {
      padding-right: 0 !important;
      padding-left: 1rem !important; }
    .rtl .pl-xxl-3,
    .rtl .px-xxl-3 {
      padding-left: 0 !important;
      padding-right: 1rem !important; }
    .rtl .pr-xxl-4,
    .rtl .px-xxl-4 {
      padding-right: 0 !important;
      padding-left: 1.5rem !important; }
    .rtl .pl-xxl-4,
    .rtl .px-xxl-4 {
      padding-left: 0 !important;
      padding-right: 1.5rem !important; }
    .rtl .pr-xxl-5,
    .rtl .px-xxl-5 {
      padding-right: 0 !important;
      padding-left: 3rem !important; }
    .rtl .pl-xxl-5,
    .rtl .px-xxl-5 {
      padding-left: 0 !important;
      padding-right: 3rem !important; }
    .rtl .mr-xxl-auto {
      margin-right: 0 !important;
      margin-left: auto !important; }
    .rtl .ml-xxl-auto {
      margin-right: auto !important;
      margin-left: 0 !important; }
    .rtl .mx-xxl-auto {
      margin-right: auto !important;
      margin-left: auto !important; } }
  .rtl .text-right {
    text-align: left !important; }
  .rtl .text-left {
    text-align: right !important; }
  @media (min-width: 576px) {
    .rtl .text-sm-right {
      text-align: left !important; }
    .rtl .text-sm-left {
      text-align: right !important; } }
  @media (min-width: 768px) {
    .rtl .text-md-right {
      text-align: left !important; }
    .rtl .text-md-left {
      text-align: right !important; } }
  @media (min-width: 992px) {
    .rtl .text-lg-right {
      text-align: left !important; }
    .rtl .text-lg-left {
      text-align: right !important; } }
  @media (min-width: 1200px) {
    .rtl .text-xl-right {
      text-align: left !important; }
    .rtl .text-xl-left {
      text-align: right !important; } }
  @media (min-width: 1400) {
    .rtl .text-xxl-right {
      text-align: left !important; }
    .rtl .text-xxl-left {
      text-align: right !important; } }

.rtl .mr-0,
.rtl .mx-0 {
  margin-right: auto !important;
  margin-left: 0 !important; }

.rtl .ml-0,
.rtl .mx-0 {
  margin-left: auto !important;
  margin-right: 0 !important; }

.rtl .mr-1,
.rtl .mx-1 {
  margin-right: auto !important;
  margin-left: 0.25rem !important; }

.rtl .ml-1,
.rtl .mx-1 {
  margin-left: auto !important;
  margin-right: 0.25rem !important; }

.rtl .mr-2,
.rtl .mx-2 {
  margin-right: auto !important;
  margin-left: 0.5rem !important; }

.rtl .ml-2,
.rtl .mx-2 {
  margin-left: auto !important;
  margin-right: 0.5rem !important; }

.rtl .mr-3,
.rtl .mx-3 {
  margin-right: auto !important;
  margin-left: 1rem !important; }

.rtl .ml-3,
.rtl .mx-3 {
  margin-left: auto !important;
  margin-right: 1rem !important; }

.rtl .mr-4,
.rtl .mx-4 {
  margin-right: auto !important;
  margin-left: 1.5rem !important; }

.rtl .ml-4,
.rtl .mx-4 {
  margin-left: auto !important;
  margin-right: 1.5rem !important; }

.rtl .mr-5,
.rtl .mx-5 {
  margin-right: auto !important;
  margin-left: 3rem !important; }

.rtl .ml-5,
.rtl .mx-5 {
  margin-left: auto !important;
  margin-right: 3rem !important; }

.rtl .pr-0,
.rtl .px-0 {
  padding-right: auto !important;
  padding-left: 0 !important; }

.rtl .pl-0,
.rtl .px-0 {
  padding-left: auto !important;
  padding-right: 0 !important; }

.rtl .pr-1,
.rtl .px-1 {
  padding-right: auto !important;
  padding-left: 0.25rem !important; }

.rtl .pl-1,
.rtl .px-1 {
  padding-left: auto !important;
  padding-right: 0.25rem !important; }

.rtl .pr-2,
.rtl .px-2 {
  padding-right: auto !important;
  padding-left: 0.5rem !important; }

.rtl .pl-2,
.rtl .px-2 {
  padding-left: auto !important;
  padding-right: 0.5rem !important; }

.rtl .pr-3,
.rtl .px-3 {
  padding-right: auto !important;
  padding-left: 1rem !important; }

.rtl .pl-3,
.rtl .px-3 {
  padding-left: auto !important;
  padding-right: 1rem !important; }

.rtl .pr-4,
.rtl .px-4 {
  padding-right: auto !important;
  padding-left: 1.5rem !important; }

.rtl .pl-4,
.rtl .px-4 {
  padding-left: auto !important;
  padding-right: 1.5rem !important; }

.rtl .pr-5,
.rtl .px-5 {
  padding-right: auto !important;
  padding-left: 3rem !important; }

.rtl .pl-5,
.rtl .px-5 {
  padding-left: auto !important;
  padding-right: 3rem !important; }

.rtl .mr-auto,
.rtl .mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

.rtl .ml-auto,
.rtl .mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

@media (min-width: 576px) {
  .rtl .mr-sm-0,
  .rtl .mx-sm-0 {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .ml-sm-0,
  .rtl .mx-sm-0 {
    margin-left: auto !important;
    margin-right: 0 !important; }
  .rtl .mr-sm-1,
  .rtl .mx-sm-1 {
    margin-right: auto !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-sm-1,
  .rtl .mx-sm-1 {
    margin-left: auto !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-sm-2,
  .rtl .mx-sm-2 {
    margin-right: auto !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-sm-2,
  .rtl .mx-sm-2 {
    margin-left: auto !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-sm-3,
  .rtl .mx-sm-3 {
    margin-right: auto !important;
    margin-left: 1rem !important; }
  .rtl .ml-sm-3,
  .rtl .mx-sm-3 {
    margin-left: auto !important;
    margin-right: 1rem !important; }
  .rtl .mr-sm-4,
  .rtl .mx-sm-4 {
    margin-right: auto !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-sm-4,
  .rtl .mx-sm-4 {
    margin-left: auto !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-sm-5,
  .rtl .mx-sm-5 {
    margin-right: auto !important;
    margin-left: 3rem !important; }
  .rtl .ml-sm-5,
  .rtl .mx-sm-5 {
    margin-left: auto !important;
    margin-right: 3rem !important; }
  .rtl .pr-sm-0,
  .rtl .px-sm-0 {
    padding-right: auto !important;
    padding-left: 0 !important; }
  .rtl .pl-sm-0,
  .rtl .px-sm-0 {
    padding-left: auto !important;
    padding-right: 0 !important; }
  .rtl .pr-sm-1,
  .rtl .px-sm-1 {
    padding-right: auto !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-sm-1,
  .rtl .px-sm-1 {
    padding-left: auto !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-sm-2,
  .rtl .px-sm-2 {
    padding-right: auto !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-sm-2,
  .rtl .px-sm-2 {
    padding-left: auto !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-sm-3,
  .rtl .px-sm-3 {
    padding-right: auto !important;
    padding-left: 1rem !important; }
  .rtl .pl-sm-3,
  .rtl .px-sm-3 {
    padding-left: auto !important;
    padding-right: 1rem !important; }
  .rtl .pr-sm-4,
  .rtl .px-sm-4 {
    padding-right: auto !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-sm-4,
  .rtl .px-sm-4 {
    padding-left: auto !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-sm-5,
  .rtl .px-sm-5 {
    padding-right: auto !important;
    padding-left: 3rem !important; }
  .rtl .pl-sm-5,
  .rtl .px-sm-5 {
    padding-left: auto !important;
    padding-right: 3rem !important; }
  .rtl .mr-sm-auto,
  .rtl .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .rtl .ml-sm-auto,
  .rtl .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .rtl .mr-md-0,
  .rtl .mx-md-0 {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .ml-md-0,
  .rtl .mx-md-0 {
    margin-left: auto !important;
    margin-right: 0 !important; }
  .rtl .mr-md-1,
  .rtl .mx-md-1 {
    margin-right: auto !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-md-1,
  .rtl .mx-md-1 {
    margin-left: auto !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-md-2,
  .rtl .mx-md-2 {
    margin-right: auto !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-md-2,
  .rtl .mx-md-2 {
    margin-left: auto !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-md-3,
  .rtl .mx-md-3 {
    margin-right: auto !important;
    margin-left: 1rem !important; }
  .rtl .ml-md-3,
  .rtl .mx-md-3 {
    margin-left: auto !important;
    margin-right: 1rem !important; }
  .rtl .mr-md-4,
  .rtl .mx-md-4 {
    margin-right: auto !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-md-4,
  .rtl .mx-md-4 {
    margin-left: auto !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-md-5,
  .rtl .mx-md-5 {
    margin-right: auto !important;
    margin-left: 3rem !important; }
  .rtl .ml-md-5,
  .rtl .mx-md-5 {
    margin-left: auto !important;
    margin-right: 3rem !important; }
  .rtl .pr-md-0,
  .rtl .px-md-0 {
    padding-right: auto !important;
    padding-left: 0 !important; }
  .rtl .pl-md-0,
  .rtl .px-md-0 {
    padding-left: auto !important;
    padding-right: 0 !important; }
  .rtl .pr-md-1,
  .rtl .px-md-1 {
    padding-right: auto !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-md-1,
  .rtl .px-md-1 {
    padding-left: auto !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-md-2,
  .rtl .px-md-2 {
    padding-right: auto !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-md-2,
  .rtl .px-md-2 {
    padding-left: auto !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-md-3,
  .rtl .px-md-3 {
    padding-right: auto !important;
    padding-left: 1rem !important; }
  .rtl .pl-md-3,
  .rtl .px-md-3 {
    padding-left: auto !important;
    padding-right: 1rem !important; }
  .rtl .pr-md-4,
  .rtl .px-md-4 {
    padding-right: auto !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-md-4,
  .rtl .px-md-4 {
    padding-left: auto !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-md-5,
  .rtl .px-md-5 {
    padding-right: auto !important;
    padding-left: 3rem !important; }
  .rtl .pl-md-5,
  .rtl .px-md-5 {
    padding-left: auto !important;
    padding-right: 3rem !important; }
  .rtl .mr-md-auto,
  .rtl .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .rtl .ml-md-auto,
  .rtl .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .rtl .mr-lg-0,
  .rtl .mx-lg-0 {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .ml-lg-0,
  .rtl .mx-lg-0 {
    margin-left: auto !important;
    margin-right: 0 !important; }
  .rtl .mr-lg-1,
  .rtl .mx-lg-1 {
    margin-right: auto !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-lg-1,
  .rtl .mx-lg-1 {
    margin-left: auto !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-lg-2,
  .rtl .mx-lg-2 {
    margin-right: auto !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-lg-2,
  .rtl .mx-lg-2 {
    margin-left: auto !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-lg-3,
  .rtl .mx-lg-3 {
    margin-right: auto !important;
    margin-left: 1rem !important; }
  .rtl .ml-lg-3,
  .rtl .mx-lg-3 {
    margin-left: auto !important;
    margin-right: 1rem !important; }
  .rtl .mr-lg-4,
  .rtl .mx-lg-4 {
    margin-right: auto !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-lg-4,
  .rtl .mx-lg-4 {
    margin-left: auto !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-lg-5,
  .rtl .mx-lg-5 {
    margin-right: auto !important;
    margin-left: 3rem !important; }
  .rtl .ml-lg-5,
  .rtl .mx-lg-5 {
    margin-left: auto !important;
    margin-right: 3rem !important; }
  .rtl .pr-lg-0,
  .rtl .px-lg-0 {
    padding-right: auto !important;
    padding-left: 0 !important; }
  .rtl .pl-lg-0,
  .rtl .px-lg-0 {
    padding-left: auto !important;
    padding-right: 0 !important; }
  .rtl .pr-lg-1,
  .rtl .px-lg-1 {
    padding-right: auto !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-lg-1,
  .rtl .px-lg-1 {
    padding-left: auto !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-lg-2,
  .rtl .px-lg-2 {
    padding-right: auto !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-lg-2,
  .rtl .px-lg-2 {
    padding-left: auto !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-lg-3,
  .rtl .px-lg-3 {
    padding-right: auto !important;
    padding-left: 1rem !important; }
  .rtl .pl-lg-3,
  .rtl .px-lg-3 {
    padding-left: auto !important;
    padding-right: 1rem !important; }
  .rtl .pr-lg-4,
  .rtl .px-lg-4 {
    padding-right: auto !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-lg-4,
  .rtl .px-lg-4 {
    padding-left: auto !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-lg-5,
  .rtl .px-lg-5 {
    padding-right: auto !important;
    padding-left: 3rem !important; }
  .rtl .pl-lg-5,
  .rtl .px-lg-5 {
    padding-left: auto !important;
    padding-right: 3rem !important; }
  .rtl .mr-lg-auto,
  .rtl .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .rtl .ml-lg-auto,
  .rtl .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .rtl .mr-xl-0,
  .rtl .mx-xl-0 {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .ml-xl-0,
  .rtl .mx-xl-0 {
    margin-left: auto !important;
    margin-right: 0 !important; }
  .rtl .mr-xl-1,
  .rtl .mx-xl-1 {
    margin-right: auto !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-xl-1,
  .rtl .mx-xl-1 {
    margin-left: auto !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-xl-2,
  .rtl .mx-xl-2 {
    margin-right: auto !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-xl-2,
  .rtl .mx-xl-2 {
    margin-left: auto !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-xl-3,
  .rtl .mx-xl-3 {
    margin-right: auto !important;
    margin-left: 1rem !important; }
  .rtl .ml-xl-3,
  .rtl .mx-xl-3 {
    margin-left: auto !important;
    margin-right: 1rem !important; }
  .rtl .mr-xl-4,
  .rtl .mx-xl-4 {
    margin-right: auto !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-xl-4,
  .rtl .mx-xl-4 {
    margin-left: auto !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-xl-5,
  .rtl .mx-xl-5 {
    margin-right: auto !important;
    margin-left: 3rem !important; }
  .rtl .ml-xl-5,
  .rtl .mx-xl-5 {
    margin-left: auto !important;
    margin-right: 3rem !important; }
  .rtl .pr-xl-0,
  .rtl .px-xl-0 {
    padding-right: auto !important;
    padding-left: 0 !important; }
  .rtl .pl-xl-0,
  .rtl .px-xl-0 {
    padding-left: auto !important;
    padding-right: 0 !important; }
  .rtl .pr-xl-1,
  .rtl .px-xl-1 {
    padding-right: auto !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-xl-1,
  .rtl .px-xl-1 {
    padding-left: auto !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-xl-2,
  .rtl .px-xl-2 {
    padding-right: auto !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-xl-2,
  .rtl .px-xl-2 {
    padding-left: auto !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-xl-3,
  .rtl .px-xl-3 {
    padding-right: auto !important;
    padding-left: 1rem !important; }
  .rtl .pl-xl-3,
  .rtl .px-xl-3 {
    padding-left: auto !important;
    padding-right: 1rem !important; }
  .rtl .pr-xl-4,
  .rtl .px-xl-4 {
    padding-right: auto !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-xl-4,
  .rtl .px-xl-4 {
    padding-left: auto !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-xl-5,
  .rtl .px-xl-5 {
    padding-right: auto !important;
    padding-left: 3rem !important; }
  .rtl .pl-xl-5,
  .rtl .px-xl-5 {
    padding-left: auto !important;
    padding-right: 3rem !important; }
  .rtl .mr-xl-auto,
  .rtl .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .rtl .ml-xl-auto,
  .rtl .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; } }

@media (min-width: 1400) {
  .rtl .mr-xxl-0,
  .rtl .mx-xxl-0 {
    margin-right: auto !important;
    margin-left: 0 !important; }
  .rtl .ml-xxl-0,
  .rtl .mx-xxl-0 {
    margin-left: auto !important;
    margin-right: 0 !important; }
  .rtl .mr-xxl-1,
  .rtl .mx-xxl-1 {
    margin-right: auto !important;
    margin-left: 0.25rem !important; }
  .rtl .ml-xxl-1,
  .rtl .mx-xxl-1 {
    margin-left: auto !important;
    margin-right: 0.25rem !important; }
  .rtl .mr-xxl-2,
  .rtl .mx-xxl-2 {
    margin-right: auto !important;
    margin-left: 0.5rem !important; }
  .rtl .ml-xxl-2,
  .rtl .mx-xxl-2 {
    margin-left: auto !important;
    margin-right: 0.5rem !important; }
  .rtl .mr-xxl-3,
  .rtl .mx-xxl-3 {
    margin-right: auto !important;
    margin-left: 1rem !important; }
  .rtl .ml-xxl-3,
  .rtl .mx-xxl-3 {
    margin-left: auto !important;
    margin-right: 1rem !important; }
  .rtl .mr-xxl-4,
  .rtl .mx-xxl-4 {
    margin-right: auto !important;
    margin-left: 1.5rem !important; }
  .rtl .ml-xxl-4,
  .rtl .mx-xxl-4 {
    margin-left: auto !important;
    margin-right: 1.5rem !important; }
  .rtl .mr-xxl-5,
  .rtl .mx-xxl-5 {
    margin-right: auto !important;
    margin-left: 3rem !important; }
  .rtl .ml-xxl-5,
  .rtl .mx-xxl-5 {
    margin-left: auto !important;
    margin-right: 3rem !important; }
  .rtl .pr-xxl-0,
  .rtl .px-xxl-0 {
    padding-right: auto !important;
    padding-left: 0 !important; }
  .rtl .pl-xxl-0,
  .rtl .px-xxl-0 {
    padding-left: auto !important;
    padding-right: 0 !important; }
  .rtl .pr-xxl-1,
  .rtl .px-xxl-1 {
    padding-right: auto !important;
    padding-left: 0.25rem !important; }
  .rtl .pl-xxl-1,
  .rtl .px-xxl-1 {
    padding-left: auto !important;
    padding-right: 0.25rem !important; }
  .rtl .pr-xxl-2,
  .rtl .px-xxl-2 {
    padding-right: auto !important;
    padding-left: 0.5rem !important; }
  .rtl .pl-xxl-2,
  .rtl .px-xxl-2 {
    padding-left: auto !important;
    padding-right: 0.5rem !important; }
  .rtl .pr-xxl-3,
  .rtl .px-xxl-3 {
    padding-right: auto !important;
    padding-left: 1rem !important; }
  .rtl .pl-xxl-3,
  .rtl .px-xxl-3 {
    padding-left: auto !important;
    padding-right: 1rem !important; }
  .rtl .pr-xxl-4,
  .rtl .px-xxl-4 {
    padding-right: auto !important;
    padding-left: 1.5rem !important; }
  .rtl .pl-xxl-4,
  .rtl .px-xxl-4 {
    padding-left: auto !important;
    padding-right: 1.5rem !important; }
  .rtl .pr-xxl-5,
  .rtl .px-xxl-5 {
    padding-right: auto !important;
    padding-left: 3rem !important; }
  .rtl .pl-xxl-5,
  .rtl .px-xxl-5 {
    padding-left: auto !important;
    padding-right: 3rem !important; }
  .rtl .mr-xxl-auto,
  .rtl .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .rtl .ml-xxl-auto,
  .rtl .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important; } }

.rtl .float-left {
  float: right !important; }

.rtl .float-right {
  float: left !important; }

.rtl .float-none {
  float: none !important; }

@media (min-width: 576px) {
  .rtl .float-sm-left {
    float: right !important; }
  .rtl .float-sm-right {
    float: left !important; }
  .rtl .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .rtl .float-md-left {
    float: right !important; }
  .rtl .float-md-right {
    float: left !important; }
  .rtl .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .rtl .float-lg-left {
    float: right !important; }
  .rtl .float-lg-right {
    float: left !important; }
  .rtl .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .rtl .float-xl-left {
    float: right !important; }
  .rtl .float-xl-right {
    float: left !important; }
  .rtl .float-xl-none {
    float: none !important; } }

@media (min-width: 1400) {
  .rtl .float-xxl-left {
    float: right !important; }
  .rtl .float-xxl-right {
    float: left !important; }
  .rtl .float-xxl-none {
    float: none !important; } }

html[dir="rtl"] [direction="rtl"][data-theme-version="dark"] .border, html[dir="rtl"] [direction="rtl"][data-theme-version="dark"] .border-left, html[dir="rtl"] [direction="rtl"][data-theme-version="dark"] .border-right {
  border-color: rgba(120, 130, 140, 0.13) !important; }

html[dir="rtl"] [direction="rtl"] .card {
  text-align: right; }
  html[dir="rtl"] [direction="rtl"] .card-title, html[dir="rtl"] [direction="rtl"] .card-body {
    text-align: right; }
  html[dir="rtl"] [direction="rtl"] .card-header .table-action {
    float: left !important; }

html[dir="rtl"] [direction="rtl"] .card.card-full-width {
  right: auto;
  left: 0;
  margin-left: -3rem;
  margin-right: auto; }

html[dir="rtl"] [direction="rtl"] .text-right {
  text-align: left !important; }

html[dir="rtl"] [direction="rtl"] .text-left {
  text-align: right !important; }

html[dir="rtl"] [direction="rtl"] .border-right {
  border-left: 1px solid #EEEEEE !important;
  border-right: 0 !important; }

html[dir="rtl"] [direction="rtl"] .border-left {
  border-right: 1px solid #EEEEEE !important;
  border-left: 0 !important; }

html[dir="rtl"] [direction="rtl"] .owl-carousel, html[dir="rtl"] [direction="rtl"] .owl-carousel .owl-item {
  direction: ltr; }

html[dir="rtl"] [direction="rtl"]:not([data-container="boxed"]) .nav-header {
  left: auto;
  right: 0; }

html[dir="rtl"] [direction="rtl"] .nav-header {
  text-align: right;
  right: 0; }
  html[dir="rtl"] [direction="rtl"] .nav-header .nav-control {
    right: auto;
    left: 1.5rem; }
    html[dir="rtl"] [direction="rtl"] .nav-header .nav-control .hamburger.is-active {
      right: 6rem;
      left: auto; }
      html[dir="rtl"] [direction="rtl"] .nav-header .nav-control .hamburger.is-active .line:nth-child(1) {
        transform: translateY(0.4rem) rotate(135deg); }
      html[dir="rtl"] [direction="rtl"] .nav-header .nav-control .hamburger.is-active .line:nth-child(2) {
        transform: translateX(0.4rem); }
      html[dir="rtl"] [direction="rtl"] .nav-header .nav-control .hamburger.is-active .line:nth-child(3) {
        transform: translateY(-0.4rem) rotate(-135deg); }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="overlay"] .nav-header .hamburger.is-active {
  right: 0; }
  html[dir="rtl"] [direction="rtl"][data-sidebar-style="overlay"] .nav-header .hamburger.is-active .line:nth-child(1) {
    transform: translateY(0.4rem) rotate(-45deg); }
  html[dir="rtl"] [direction="rtl"][data-sidebar-style="overlay"] .nav-header .hamburger.is-active .line:nth-child(3) {
    transform: translateY(-0.4rem) rotate(45deg); }

html[dir="rtl"] [direction="rtl"] .header {
  margin-right: 15.1875rem; }
  @media only screen and (max-width: 767px) {
    html[dir="rtl"] [direction="rtl"] .header {
      margin-right: 2.3438rem; } }
  html[dir="rtl"] [direction="rtl"] .header .nav-control {
    right: 0.4375rem;
    left: auto; }
  html[dir="rtl"] [direction="rtl"] .header .header-left {
    float: right;
    margin-right: 50px; }
  html[dir="rtl"] [direction="rtl"] .header .header-right {
    float: left; }
    html[dir="rtl"] [direction="rtl"] .header .header-right .icons {
      float: right; }
    html[dir="rtl"] [direction="rtl"] .header .header-right .drop-down {
      right: auto;
      left: 0; }
      html[dir="rtl"] [direction="rtl"] .header .header-right .drop-down .dropdown-content-body ul > li {
        text-align: right; }
        html[dir="rtl"] [direction="rtl"] .header .header-right .drop-down .dropdown-content-body ul > li .notification-content {
          margin-right: 4.0625rem;
          margin-left: 1.5625rem; }
        html[dir="rtl"] [direction="rtl"] .header .header-right .drop-down .dropdown-content-body ul > li .notify-close {
          left: 0.9375rem;
          right: auto; }

html[dir="rtl"] [direction="rtl"][data-layout="horizontal"] .header {
  margin-right: 9.0625rem; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="mini"] .header {
  margin-right: 2.3438rem; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="compact"] .header {
  margin-right: 9.0625rem; }

html[dir="rtl"] [direction="rtl"] .nk-sidebar {
  text-align: right; }
  html[dir="rtl"] [direction="rtl"] .nk-sidebar .metismenu .has-arrow:after {
    left: 2.5rem;
    right: auto; }
  html[dir="rtl"] [direction="rtl"] .nk-sidebar .metismenu .nav-badge {
    left: 4.5rem;
    right: auto; }

html[dir="rtl"] [direction="rtl"] .content-body {
  margin-right: 27.5rem;
  margin-left: auto; }
  html[dir="rtl"] [direction="rtl"] .content-body .page-titles {
    text-align: right; }
    html[dir="rtl"] [direction="rtl"] .content-body .page-titles .breadcrumb {
      float: left; }

html[dir="rtl"] [direction="rtl"][data-layout="horizontal"] .content-body {
  margin-right: 0; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="mini"]:not([data-layout="horizontal"]) .content-body {
  margin-right: 6rem; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="compact"]:not([data-layout="horizontal"]) .content-body {
  margin-right: 15rem; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="overlay"] .content-body {
  margin-right: 0; }

html[dir="rtl"] .pricing-wrapper .single-pricing-table {
  text-align: center; }

html[dir="rtl"] .contact-options-dropdown {
  left: 2rem;
  right: auto; }

html[dir="rtl"] .card-body.contact-card {
  text-align: center !important; }
  html[dir="rtl"] .card-body.contact-card .card-title {
    text-align: center !important; }

html[dir="rtl"] .default-accordion-style .card .card-header h5 i {
  margin-left: 1.5rem; }

html[dir="rtl"] [direction="rtl"] .btn-icon-left {
  margin: -.5rem -1.3rem -.5rem 1.5rem; }

html[dir="rtl"] [direction="rtl"] .btn-icon-right {
  border-right: 1px solid #fff;
  border-left: none;
  margin: -.8rem 1.3rem -.8rem 0;
  padding: 1rem 1.3rem 1rem 0; }

html[dir="rtl"] [direction="rtl"] .email-left-box {
  float: right; }

html[dir="rtl"] [direction="rtl"] .email-right-box {
  padding-right: 34rem;
  padding-left: 0; }

html[dir="rtl"] [direction="rtl"] .email-list .message .col-mail-2 {
  left: 0;
  right: 9rem; }

html[dir="rtl"] [direction="rtl"] .sidebar-right {
  left: -25rem;
  right: auto; }
  html[dir="rtl"] [direction="rtl"] .sidebar-right.show {
    left: 0;
    right: auto; }
  html[dir="rtl"] [direction="rtl"] .sidebar-right .sidebar-right-trigger {
    left: 100%;
    right: auto; }

html[dir="rtl"] [direction="rtl"] .footer {
  padding-right: 27.5rem;
  padding-left: 0; }
  @media only screen and (max-width: 767px) {
    html[dir="rtl"] [direction="rtl"] .footer {
      padding-right: 0; } }

html[dir="rtl"] [direction="rtl"][data-container="boxed"] .footer {
  padding-right: 0; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="mini"]:not([data-layout="horizontal"]) .footer {
  padding-right: 6rem; }

html[dir="rtl"] [direction="rtl"][data-sidebar-style="compact"]:not([data-layout="horizontal"]) .footer {
  padding-right: 15rem; }

[data-nav-headerbg="color_1"] .nav-header {
  background-color: #7571f9; }

[data-nav-headerbg="color_2"] .nav-header {
  background-color: #27394F !important; }

[data-nav-headerbg="color_3"] .nav-header {
  background-color: #6a1b9a !important; }

[data-nav-headerbg="color_4"] .nav-header {
  background-color: #4527a0 !important; }

[data-nav-headerbg="color_5"] .nav-header {
  background-color: #c62828 !important; }

[data-nav-headerbg="color_6"] .nav-header {
  background-color: #283593 !important; }

[data-nav-headerbg="color_7"] .nav-header {
  background-color: #1565c0 !important; }

[data-nav-headerbg="color_8"] .nav-header {
  background-color: #0277bd !important; }

[data-nav-headerbg="color_9"] .nav-header {
  background-color: #00838f !important; }

[data-nav-headerbg="color_10"] .nav-header {
  background-color: #558b2f !important; }

[data-headerbg="color_1"] .header {
  background-color: #fff; }

[data-headerbg="color_2"] .header, [data-headerbg="color_2"] .header-left input {
  background-color: #27394F !important;
  color: #fff !important; }

[data-headerbg="color_3"] .header, [data-headerbg="color_3"] .header-left input {
  background-color: #6a1b9a !important;
  color: #fff !important; }

[data-headerbg="color_4"] .header, [data-headerbg="color_4"] .header-left input {
  background-color: #4527a0 !important;
  color: #fff !important; }

[data-headerbg="color_5"] .header, [data-headerbg="color_5"] .header-left input {
  background-color: #c62828 !important;
  color: #fff !important; }

[data-headerbg="color_6"] .header, [data-headerbg="color_6"] .header-left input {
  background-color: #283593 !important;
  color: #fff !important; }

[data-headerbg="color_7"] .header, [data-headerbg="color_7"] .header-left input {
  background-color: #1565c0 !important;
  color: #fff !important; }

[data-headerbg="color_8"] .header, [data-headerbg="color_8"] .header-left input {
  background-color: #0277bd !important;
  color: #fff !important; }

[data-headerbg="color_9"] .header, [data-headerbg="color_9"] .header-left input {
  background-color: #00838f !important;
  color: #fff !important; }

[data-headerbg="color_10"] .header, [data-headerbg="color_10"] .header-left input {
  background-color: #558b2f !important;
  color: #fff !important; }

[data-headerbg="color_2"] .header .icons > a, [data-headerbg="color_2"] .header .icons i,
[data-headerbg="color_3"] .header .icons > a,
[data-headerbg="color_3"] .header .icons i,
[data-headerbg="color_4"] .header .icons > a,
[data-headerbg="color_4"] .header .icons i,
[data-headerbg="color_5"] .header .icons > a,
[data-headerbg="color_5"] .header .icons i,
[data-headerbg="color_6"] .header .icons > a,
[data-headerbg="color_6"] .header .icons i,
[data-headerbg="color_7"] .header .icons > a,
[data-headerbg="color_7"] .header .icons i,
[data-headerbg="color_8"] .header .icons > a,
[data-headerbg="color_8"] .header .icons i,
[data-headerbg="color_9"] .header .icons > a,
[data-headerbg="color_9"] .header .icons i,
[data-headerbg="color_10"] .header .icons > a,
[data-headerbg="color_10"] .header .icons i {
  color: #fff !important; }

[data-headerbg="color_2"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_3"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_4"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_5"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_6"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_7"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_8"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_9"] .header .header-search .input-group .input-group-text i,
[data-headerbg="color_10"] .header .header-search .input-group .input-group-text i {
  color: #8898aa !important; }

[data-headerbg="color_2"] .header .toggle-icon,
[data-headerbg="color_3"] .header .toggle-icon,
[data-headerbg="color_4"] .header .toggle-icon,
[data-headerbg="color_5"] .header .toggle-icon,
[data-headerbg="color_6"] .header .toggle-icon,
[data-headerbg="color_7"] .header .toggle-icon,
[data-headerbg="color_8"] .header .toggle-icon,
[data-headerbg="color_9"] .header .toggle-icon,
[data-headerbg="color_10"] .header .toggle-icon {
  color: #fff; }

[data-sibebarbg="color_1"] .nk-sidebar .metismenu {
  background-color: #fff; }
  [data-sibebarbg="color_1"] .nk-sidebar .metismenu > li {
    color: #27394F; }
    [data-sibebarbg="color_1"] .nk-sidebar .metismenu > li ul a {
      color: #76838f; }

[data-sibebarbg="color_2"] .nk-sidebar {
  background-color: #27394F !important; }
  [data-sibebarbg="color_2"] .nk-sidebar .metismenu {
    background-color: #27394F !important; }
    [data-sibebarbg="color_2"] .nk-sidebar .metismenu .mega-menu ul.in li a:hover {
      color: #fff !important; }
    [data-sibebarbg="color_2"] .nk-sidebar .metismenu ul {
      background-color: #16202d; }
    [data-sibebarbg="color_2"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu a.active {
      background-color: #05080b !important; }
    [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a {
      background-color: #05080b !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a {
        background-color: #05080b !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #05080b !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a {
        background-color: #05080b !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #05080b !important; }
      [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_2"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #05080b !important; }

[data-sibebarbg="color_3"] .nk-sidebar {
  background-color: #6a1b9a !important; }
  [data-sibebarbg="color_3"] .nk-sidebar .metismenu {
    background-color: #6a1b9a !important; }
    [data-sibebarbg="color_3"] .nk-sidebar .metismenu ul {
      background-color: #4c136f !important; }
    [data-sibebarbg="color_3"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu a.active {
      background-color: #2e0c43 !important; }
    [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a {
      background-color: #2e0c43 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a {
        background-color: #2e0c43 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #2e0c43 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a {
        background-color: #2e0c43 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #2e0c43 !important; }
      [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_3"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #2e0c43 !important; }

[data-sibebarbg="color_4"] .nk-sidebar {
  background-color: #4527a0 !important; }
  [data-sibebarbg="color_4"] .nk-sidebar .metismenu {
    background-color: #4527a0 !important; }
    [data-sibebarbg="color_4"] .nk-sidebar .metismenu ul {
      background-color: #331d77 !important; }
    [data-sibebarbg="color_4"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu a.active {
      background-color: #22134e !important; }
    [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a {
      background-color: #22134e !important; }
    [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a {
      background-color: #22134e !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a {
        background-color: #22134e !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #22134e !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a {
        background-color: #22134e !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #22134e !important; }
      [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_4"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #22134e !important; }

[data-sibebarbg="color_5"] .nk-sidebar {
  background-color: #c62828 !important; }
  [data-sibebarbg="color_5"] .nk-sidebar .metismenu {
    background-color: #c62828 !important; }
    [data-sibebarbg="color_5"] .nk-sidebar .metismenu ul {
      background-color: #9c1f1f !important; }
    [data-sibebarbg="color_5"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu a.active {
      background-color: #711717 !important; }
    [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a {
      background-color: #711717 !important; }
    [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a {
      background-color: #711717 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a {
        background-color: #711717 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #711717 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a {
        background-color: #711717 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #711717 !important; }
      [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_5"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #711717 !important; }

[data-sibebarbg="color_6"] .nk-sidebar {
  background-color: #283593 !important; }
  [data-sibebarbg="color_6"] .nk-sidebar .metismenu {
    background-color: #283593 !important; }
    [data-sibebarbg="color_6"] .nk-sidebar .metismenu ul {
      background-color: #1d276b !important; }
    [data-sibebarbg="color_6"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu a.active {
      background-color: #121843 !important; }
    [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a {
      background-color: #121843 !important; }
    [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a {
      background-color: #121843 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a {
        background-color: #121843 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #121843 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a {
        background-color: #121843 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #121843 !important; }
      [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_6"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #121843 !important; }

[data-sibebarbg="color_7"] .nk-sidebar {
  background-color: #1565c0 !important; }
  [data-sibebarbg="color_7"] .nk-sidebar .metismenu {
    background-color: #1565c0 !important; }
    [data-sibebarbg="color_7"] .nk-sidebar .metismenu ul {
      background-color: #104d92 !important; }
    [data-sibebarbg="color_7"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu a.active {
      background-color: #0b3564 !important; }
    [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a {
      background-color: #0b3564 !important; }
    [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a {
      background-color: #0b3564 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a {
        background-color: #0b3564 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #0b3564 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a {
        background-color: #0b3564 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #0b3564 !important; }
      [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_7"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #0b3564 !important; }

[data-sibebarbg="color_8"] .nk-sidebar {
  background-color: #0277bd !important; }
  [data-sibebarbg="color_8"] .nk-sidebar .metismenu {
    background-color: #0277bd !important; }
    [data-sibebarbg="color_8"] .nk-sidebar .metismenu ul {
      background-color: #01578b !important; }
    [data-sibebarbg="color_8"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu a.active {
      background-color: #013758 !important; }
    [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a {
      background-color: #013758 !important; }
    [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a {
      background-color: #013758 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a {
        background-color: #013758 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #013758 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a {
        background-color: #013758 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #013758 !important; }
      [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_8"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #013758 !important; }

[data-sibebarbg="color_9"] .nk-sidebar {
  background-color: #00838f !important; }
  [data-sibebarbg="color_9"] .nk-sidebar .metismenu {
    background-color: #00838f !important; }
    [data-sibebarbg="color_9"] .nk-sidebar .metismenu ul {
      background-color: #00545c !important; }
    [data-sibebarbg="color_9"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu a.active {
      background-color: #002629 !important; }
    [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a {
      background-color: #002629 !important; }
    [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a {
      background-color: #002629 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a {
        background-color: #002629 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #002629 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a {
        background-color: #002629 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #002629 !important; }
      [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_9"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #002629 !important; }

[data-sibebarbg="color_10"] .nk-sidebar {
  background-color: #558b2f !important; }
  [data-sibebarbg="color_10"] .nk-sidebar .metismenu {
    background-color: #558b2f !important; }
    [data-sibebarbg="color_10"] .nk-sidebar .metismenu ul {
      background-color: #3e6522 !important; }
    [data-sibebarbg="color_10"] .nk-sidebar .metismenu a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu a.active {
      background-color: #263f15 !important; }
    [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a {
      background-color: #263f15 !important; }
    [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a {
      background-color: #263f15 !important; }
      [data-sidebar-style="mini"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a {
        background-color: #263f15 !important; }
        [data-sidebar-style="mini"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="mini"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="mini"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #263f15 !important; }
      [data-sidebar-style="full"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a {
        background-color: #263f15 !important; }
        [data-sidebar-style="full"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sidebar-style="full"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sidebar-style="full"][data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:active {
          background-color: #263f15 !important; }
      [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:hover > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li:focus > a:active, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:hover, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:focus, [data-sibebarbg="color_10"] .nk-sidebar .metismenu > li.active > a:active {
        background-color: #263f15 !important; }

@media (min-width: 992px) {
  [data-container="boxed"] #main-wrapper {
    max-width: 1199px;
    margin: 0 auto; }
    [direction="rtl"][data-container="boxed"] #main-wrapper {
      text-align: right; } }

@media only screen and (min-width: 1350px) {
  [data-layout="vertical"][data-sidebar-style="overlay"][data-container="boxed"][data-header-position="fixed"] .header {
    width: calc(1199px - 15.1875rem); } }

@media only screen and (min-width: 1200px) and (max-width: 1349px) {
  [data-layout="vertical"][data-sidebar-style="overlay"][data-container="boxed"][data-header-position="fixed"] .header {
    width: calc(1199px - 14.375rem); } }

[data-header-position="fixed"][data-layout="horizontal"][data-container="boxed"] .nk-sidebar {
  max-width: 1199px; }

[data-layout="horizontal"][data-container="boxed"][data-header-position="fixed"] .header {
  width: calc(1199px - 9.0625rem); }

[data-layout="horizontal"][data-container="boxed"][data-header-position="fixed"][data-sidebar-style="mini"] .header {
  width: calc(1199px - 3.75rem); }

[data-container="boxed"] .metismenu.fixed {
  left: auto;
  max-width: 1199px; }

[data-container="boxed"] .page-titles {
  margin-bottom: 3rem;
  padding: 15px 15px; }

[data-container="boxed"] .content-body .container-fluid {
  padding: 0.9375rem 0 0; }

[data-container="boxed"][data-layout="vertical"] .page-titles {
  margin-left: 0;
  margin-right: 0; }

[data-layout="vertical"][data-container="boxed"][data-sidebar-position="fixed"][data-header-position="static"][data-sidebar-style="overlay"] .nav-header {
  position: absolute; }

[data-layout="vertical"][data-container="boxed"][data-sidebar-position="fixed"][data-header-position="static"][data-sidebar-style="overlay"] .menu-toggle .nk-sidebar {
  position: absolute; }

@media (min-width: 992px) {
  [data-container="wide-boxed"] #main-wrapper {
    width: 90%;
    margin: 0 auto; } }

@media (min-width: 992px) {
  [data-container="wide-boxed"][data-sidebar-style="full"] .header {
    width: calc(100% - 27.5rem); }
  [data-container="wide-boxed"][data-sidebar-style="full"] .menu-toggle .header {
    width: calc(100% - 6rem); }
  [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="full"] .header {
    width: calc(90% - 27.5rem); }
  [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="full"] .menu-toggle .header {
    width: calc(90% - 6rem); } }

@media (min-width: 992px) {
  [data-container="wide-boxed"][data-sidebar-style="mini"] .header {
    width: calc(100% - 6rem); }
  [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="mini"] .header {
    width: calc(90% - 6rem); } }

@media (min-width: 992px) {
  [data-container="wide-boxed"][data-sidebar-style="compact"] .header {
    width: calc(100% - 15rem); }
  [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="compact"] .header {
    width: calc(90% - 15rem); } }

@media (min-width: 992px) {
  [data-container="wide-boxed"][data-sidebar-style="overlay"] .header {
    width: calc(100% - 27.5rem); }
  [data-header-position="fixed"][data-container="wide-boxed"][data-sidebar-style="overlay"] .header {
    width: calc(90% - 27.5rem); } }

[data-layout="horizontal"][data-container="wide-boxed"] .header {
  width: calc(100% - 14.5rem); }

[data-sidebar-style="full"][data-header-position="fixed"][data-layout="horizontal"][data-container="wide-boxed"] .header {
  width: calc(90% - 14.5rem); }

[data-sidebar-style="mini"][data-layout="horizontal"][data-container="wide-boxed"] .header {
  width: calc(100% - 6rem); }

[data-theme-version="dark"] {
  background-color: #162336 !important;
  color: #abafb3 !important; }
  [data-theme-version="dark"] h1,
  [data-theme-version="dark"] h2,
  [data-theme-version="dark"] h3,
  [data-theme-version="dark"] h4,
  [data-theme-version="dark"] h5,
  [data-theme-version="dark"] h6 {
    color: #fff !important; }
  [data-theme-version="dark"] .more-link {
    color: #abafb3 !important; }
  [data-theme-version="dark"] .bg-white {
    background-color: #1b2b42 !important; }
  [data-theme-version="dark"] .btn-light {
    border-color: rgba(120, 130, 140, 0.13) !important; }
  [data-theme-version="dark"] .text-dark {
    color: #abafb3 !important; }
  [data-theme-version="dark"] .text-pale-sky {
    color: #abafb3 !important; }
  [data-theme-version="dark"] .nav-pills {
    border-bottom-color: rgba(120, 130, 140, 0.13); }
  [data-theme-version="dark"] .grid-col {
    background-color: #1b2b42; }
  [data-theme-version="dark"] .border-right {
    border-right: 1px solid rgba(120, 130, 140, 0.13) !important; }
  [data-theme-version="dark"] .border-left {
    border-left: 1px solid rgba(120, 130, 140, 0.13) !important; }
  [data-theme-version="dark"] .border-top {
    border-top: 1px solid rgba(120, 130, 140, 0.13) !important; }
  [data-theme-version="dark"] .border-bottom {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13) !important; }
  [data-theme-version="dark"] .border {
    border: 1px solid rgba(120, 130, 140, 0.13) !important; }

[data-theme-version="dark"] .card {
  background: #27394F;
  box-shadow: none; }
  [data-theme-version="dark"] .card:hover {
    box-shadow: none; }
  [data-theme-version="dark"] .card.transparent-card {
    background: transparent; }
  [data-theme-version="dark"] .card-footer {
    background-color: #27394F;
    border-color: rgba(120, 130, 140, 0.13); }
  [data-theme-version="dark"] .card-style {
    background: #27394F; }

[data-theme-version="dark"] .header {
  background-color: #1b2b42; }

[data-theme-version="dark"] .header-right .icons > a {
  color: #abafb3; }
  [data-theme-version="dark"] .header-right .icons > a i {
    color: #abafb3; }

[data-theme-version="dark"] .header-right .notify-close {
  color: #fff; }

[data-theme-version="dark"] .header-right .dropdown-content-body ul > li {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .header-right .dropdown-content-body ul > li a {
    color: #abafb3; }

[data-theme-version="dark"] .header-right .notification-heading {
  color: #fff; }

[data-theme-version="dark"] .header-left .header-search .input-group .input-group-text {
  background-color: #162336; }

[data-theme-version="dark"] .nk-sidebar {
  box-shadow: none;
  background-color: #1b2b42; }
  [data-theme-version="dark"] .nk-sidebar ul {
    background-color: #1b2b42; }
  [data-theme-version="dark"] .nk-sidebar .metismenu {
    background-color: #1b2b42; }
    [data-theme-version="dark"] .nk-sidebar .metismenu > li:hover > a, [data-theme-version="dark"] .nk-sidebar .metismenu > li:focus > a {
      background: #1b2b42;
      color: #fff; }
    [data-theme-version="dark"] .nk-sidebar .metismenu > li.active > a {
      background: #7571f9 !important;
      color: #fff; }
    [data-theme-version="dark"] .nk-sidebar .metismenu > li a > i {
      color: #abafb3; }
    [data-theme-version="dark"] .nk-sidebar .metismenu a {
      color: #ddd; }
    [data-theme-version="dark"] .nk-sidebar .metismenu .mega-menu ul.in li a:hover, [data-theme-version="dark"] .nk-sidebar .metismenu .mega-menu ul.in li a:focus, [data-theme-version="dark"] .nk-sidebar .metismenu .mega-menu ul.in li a.active {
      color: #fff;
      background-color: #162336; }
    [data-theme-version="dark"] .nk-sidebar .metismenu a:hover, [data-theme-version="dark"] .nk-sidebar .metismenu a:focus, [data-theme-version="dark"] .nk-sidebar .metismenu a:active, [data-theme-version="dark"] .nk-sidebar .metismenu a.active {
      background-color: #162336; }

[data-theme-version="dark"] #preloader {
  background: #162336; }

[data-theme-version="dark"] .loader__bar {
  background: #7571f9;
  box-shadow: 1px 1px 0 rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .loader__ball {
  background: #7571f9; }

[data-theme-version="dark"] .sidebar-right {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .sidebar-right .nav-tabs {
    background-color: #1b2b42;
    border-bottom: 1px solid #162336; }
    [data-theme-version="dark"] .sidebar-right .nav-tabs .nav-link.active {
      background-color: #162336; }

[data-theme-version="dark"] .wallet-card .wallet-address .form-control {
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .wallet-card .wallet-address .input-group-append button {
  background-color: #162336; }

[data-theme-version="dark"] .tickercontainer li {
  color: #abafb3; }

[data-theme-version="dark"] .doc-storage-table table tbody tr {
  background-color: #7571f9; }

[data-theme-version="dark"] .file-uploading-widget .music-list li {
  background-color: #162336; }

[data-theme-version="dark"] .sorting-buttons [type=radio] + label {
  color: #abafb3; }

[data-theme-version="dark"] .sorting-buttons .hover-card, [data-theme-version="dark"] .sorting-buttons .hover-card::after {
  background-color: #162336; }

[data-theme-version="dark"] .widget-video-stats .single-video-widget:not(:last-child) {
  border-right: 1px solid rgba(120, 130, 140, 0.13); }
  [direction="rtl"][data-theme-version="dark"] .widget-video-stats .single-video-widget:not(:last-child) {
    border-right: none;
    border-left: 1px solid rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .temp-top span {
  color: #abafb3; }

[data-theme-version="dark"] .compose-content .mce-panel {
  background-color: #1b2b42; }

[data-theme-version="dark"] .compose-content .dropzone {
  background: #1b2b42 !important; }

[data-theme-version="dark"] .profile-info {
  background: #1b2b42 !important; }

[data-theme-version="dark"] .profile-tab .nav-item .nav-link {
  color: #fff; }
  [data-theme-version="dark"] .profile-tab .nav-item .nav-link:hover, [data-theme-version="dark"] .profile-tab .nav-item .nav-link:active, [data-theme-version="dark"] .profile-tab .nav-item .nav-link.active {
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #abafb3;
    color: #fff; }

[data-theme-version="dark"] .profile-uoloaded-post a h4 {
  color: #fff; }

[data-theme-version="dark"] .chat-contacts {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .chat-contacts .event-sideber-search {
    background-color: #1b2b42; }
  [data-theme-version="dark"] .chat-contacts .event-msg-left .list-group-item {
    background-color: #1b2b42; }
    [data-theme-version="dark"] .chat-contacts .event-msg-left .list-group-item.active {
      background-color: #162336; }
    [data-theme-version="dark"] .chat-contacts .event-msg-left .list-group-item .media .media-body p {
      color: #abafb3 !important; }

[data-theme-version="dark"] .event-chat-ryt {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .event-chat-ryt .chat-heading {
    border-bottom: 2px solid rgba(120, 130, 140, 0.13); }
  [data-theme-version="dark"] .event-chat-ryt .char-type {
    border-top-color: #7571f9;
    border-bottom: 1px solid #7571f9;
    background-color: #162336; }

[data-theme-version="dark"] #calendar .fc-header-toolbar button {
  background-color: #162336;
  color: #fff; }
  [data-theme-version="dark"] #calendar .fc-header-toolbar button:hover, [data-theme-version="dark"] #calendar .fc-header-toolbar button.fc-state-hover {
    background-color: #162336 !important; }

[data-theme-version="dark"] .fc-unthemed .fc-today {
  background-color: #162336 !important; }
  [data-theme-version="dark"] .fc-unthemed .fc-today span {
    color: #fff; }

[data-theme-version="dark"] .fc th.fc-widget-header {
  background-color: #162336 !important; }
  [data-theme-version="dark"] .fc th.fc-widget-header span {
    color: #abafb3; }

[data-theme-version="dark"] .payment-details .table-borderless tbody tr td:not(:last-child),
[data-theme-version="dark"] .invoice-details-table .invoice-upload {
  color: #abafb3; }

[data-theme-version="dark"] .invoice-details-table thead tr th {
  color: #fff; }

[data-theme-version="dark"] .table-show-ticket.table > tbody > tr > td {
  color: #abafb3 !important; }

[data-theme-version="dark"] .table-show-ticket.table.table-striped tbody tr:nth-of-type(odd) {
  background-color: #162336; }

[data-theme-version="dark"] .table-show-ticket.table > tbody > tr > td,
[data-theme-version="dark"] .table-show-ticket.table > tbody > tr > th,
[data-theme-version="dark"] .table-show-ticket.table > tfoot > tr > td,
[data-theme-version="dark"] .table-show-ticket.table > tfoot > tr > th,
[data-theme-version="dark"] .table-show-ticket.table > thead > tr > td,
[data-theme-version="dark"] .table-show-ticket.table > thead > tr > th {
  color: #fff; }

[data-theme-version="dark"] .support-tickets .problems-list-wrapper .problems-list > li {
  border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .ticket-comment-form label {
  border: 1px solid rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .pricing-wrapper .single-pricing-table .btn {
  color: #abafb3;
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .login-form a {
  color: #fff; }

[data-theme-version="dark"] .error-content a {
  color: #fff; }

[data-theme-version="dark"] .currency-exchange .input-group-append button {
  background-color: #162336;
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .drop-menu .select {
  color: #fff; }

[data-theme-version="dark"] .table-trans tbody tr td {
  color: #abafb3; }

[data-theme-version="dark"] .table-trans tr td a {
  color: #fff; }

[data-theme-version="dark"] .input-group.input-with-img .form-control {
  background-color: #162336;
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .card-gateway .card-body .custom-checkbox {
  color: #abafb3; }

[data-theme-version="dark"] .wallet-card .wallet-address .input-group-prepend button,
[data-theme-version="dark"] .wallet-card .wallet-address .input-group-append button {
  background-color: #1b2b42;
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .user-skill {
  border-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .card.card-full-width ul.contact-address-list > li:not(:last-child):after,
[data-theme-version="dark"] .user-intro::after {
  background-color: rgba(120, 130, 140, 0.13); }

[data-theme-version="dark"] .employee-contact-table tbody tr td:not(.text-primary) {
  color: #abafb3 !important; }

[data-theme-version="dark"] .faq-tab-panel .nav-pills .nav-link {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .faq-tab-panel .nav-pills .nav-link.active {
    background-color: #7571f9; }

[data-theme-version="dark"] .footer {
  background-color: #1b2b42; }
  [data-theme-version="dark"] .footer .copyright {
    background-color: #1b2b42; }
    [data-theme-version="dark"] .footer .copyright p {
      color: #fff; }

/*# sourceMappingURL=style.css.map */
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>

                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>

                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Home 1</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.html">Blank</a></li>
                            <li><a href="./layout-one-column.html">One Column</a></li>
                            <li><a href="./layout-two-column.html">Two column</a></li>
                            <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                            <li><a href="./layout-vertical.html">Vertical</a></li>
                            <li><a href="./layout-horizontal.html">Horizontal</a></li>
                            <li><a href="./layout-boxed.html">Boxed</a></li>
                            <li><a href="./layout-wide.html">Wide</a></li>


                            <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                            <li><a href="./email-compose.html">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a href="./app-calender.html">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-cards.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.html">Basic Form</a></li>
                            <li><a href="./form-validation.html">Form Validation</a></li>
                            <li><a href="./form-step.html">Step Form</a></li>
                            <li><a href="./form-editor.html">Editor</a></li>
                            <li><a href="./form-picker.html">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">Pikamy Cha</h3>
                                        <p class="text-muted mb-0">Canada</p>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted px-4">Following</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted">Followers</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-danger px-5">Follow Now</button>
                                    </div>
                                </div>

                                <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" class="form-profile">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="2" placeholder="Post a new message"></textarea>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <ul class="mb-0 form-profile__icons">
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-paper-plane"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-camera"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-smile"></i></button>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary px-3 ml-4">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="media media-reply">
                                    <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between mb-2">
                                            <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                            <div class="media-reply__link">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                                <button class="btn btn-transparent text-dark font-weight-bold p-0 ml-2">Reply</button>
                                            </div>
                                        </div>

                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <ul>
                                            <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/2.jpg" alt=""></li>
                                            <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/3.jpg" alt=""></li>
                                            <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/4.jpg" alt=""></li>
                                            <li class="d-inline-block"><img class="rounded" width="60" height="60" src="images/blog/1.jpg" alt=""></li>
                                        </ul>

                                        <div class="media mt-3">
                                        <img class="mr-3 circle-rounded circle-rounded" src="images/avatar/4.jpg" width="50" height="50" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="d-sm-flex justify-content-between mb-2">
                                                <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                                <div class="media-reply__link">
                                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                                    <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                                </div>
                                            </div>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media media-reply">
                                <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                        <div class="media-reply__link">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                            <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                        </div>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>

                            <div class="media media-reply">
                                <img class="mr-3 circle-rounded" src="images/avatar/2.jpg" width="50" height="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                        <div class="media-reply__link">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                            <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                        </div>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

 </body>

</html>

