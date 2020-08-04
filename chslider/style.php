<style type="text/css"> 
ol,
ul {
	list-style: none
}

 

 
 
 


@media (min-width: 64rem) {
	.max-width-adaptive-sm {
		max-width: 48rem;
		max-width: var(--max-width-sm)
	}
}

.max-width-adaptive-md {
	max-width: 38rem;
	max-width: var(--max-width-xs)
}

@media (min-width: 64rem) {
	.max-width-adaptive-md {
		max-width: 64rem;
		max-width: var(--max-width-md)
	}
}

.max-width-adaptive,
.max-width-adaptive-lg {
	max-width: 38rem;
	max-width: var(--max-width-xs)
}

@media (min-width: 64rem) {
	.max-width-adaptive,
	.max-width-adaptive-lg {
		max-width: 64rem;
		max-width: var(--max-width-md)
	}
}

@media (min-width: 90rem) {
	.max-width-adaptive,
	.max-width-adaptive-lg {
		max-width: 80rem;
		max-width: var(--max-width-lg)
	}
}

.max-width-adaptive-xl {
	max-width: 38rem;
	max-width: var(--max-width-xs)
}

@media (min-width: 64rem) {
	.max-width-adaptive-xl {
		max-width: 64rem;
		max-width: var(--max-width-md)
	}
}

@media (min-width: 90rem) {
	.max-width-adaptive-xl {
		max-width: 90rem;
		max-width: var(--max-width-xl)
	}
}

.grid {
	--grid-gap: 0px;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap
}

.grid>* {
	-ms-flex-preferred-size: 100%;
	flex-basis: 100%
}

[class*="grid-gap"] {
	margin-bottom: 1em * -1;
	margin-bottom: calc(var(--grid-gap, 1em)*-1);
	margin-right: 1em * -1;
	margin-right: calc(var(--grid-gap, 1em)*-1)
}

[class*="grid-gap"]>* {
	margin-bottom: 1em;
	margin-bottom: var(--grid-gap, 1em);
	margin-right: 1em;
	margin-right: var(--grid-gap, 1em)
}

.grid-gap-xxxxs {
	--grid-gap: var(--space-xxxxs)
}

.grid-gap-xxxs {
	--grid-gap: var(--space-xxxs)
}

.grid-gap-xxs {
	--grid-gap: var(--space-xxs)
}

.grid-gap-xs {
	--grid-gap: var(--space-xs)
}

.grid-gap-sm {
	--grid-gap: var(--space-sm)
}

.grid-gap-md {
	--grid-gap: var(--space-md)
}

.grid-gap-lg {
	--grid-gap: var(--space-lg)
}

.grid-gap-xl {
	--grid-gap: var(--space-xl)
}

.grid-gap-xxl {
	--grid-gap: var(--space-xxl)
}

.grid-gap-xxxl {
	--grid-gap: var(--space-xxxl)
}

.grid-gap-xxxxl {
	--grid-gap: var(--space-xxxxl)
}
 

strong,
.text-bold {
	font-weight: bold
}

s {
	text-decoration: line-through
}

u,
.text-underline {
	text-decoration: underline
}

.text-component {
	--component-body-line-height: calc(var(--body-line-height)*var(--line-height-multiplier, 1));
	--component-heading-line-height: calc(var(--heading-line-height)*var(--line-height-multiplier, 1))
}

.text-component h1,
.text-component h2,
.text-component h3,
.text-component h4 {
	line-height: 1.2;
	line-height: var(--component-heading-line-height, 1.2);
	margin-bottom: 0.25em;
	margin-bottom: calc(var(--space-xxxs)*var(--text-vspace-multiplier, 1))
}

.text-component h2,
.text-component h3,
.text-component h4 {
	margin-top: 0.75em;
	margin-top: calc(var(--space-sm)*var(--text-vspace-multiplier, 1))
}

.text-component p,
.text-component blockquote,
.text-component ul li,
.text-component ol li {
	line-height: 1.4;
	line-height: var(--component-body-line-height)
}

.text-component ul,
.text-component ol,
.text-component p,
.text-component blockquote,
.text-component .text-component__block {
	margin-bottom: 0.75em;
	margin-bottom: calc(var(--space-sm)*var(--text-vspace-multiplier, 1))
}

.text-component ul,
.text-component ol {
	padding-left: 1em
}

.text-component ul {
	list-style-type: disc
}

.text-component ol {
	list-style-type: decimal
}

.text-component img {
	display: block;
	margin: 0 auto
}

.text-component figcaption {
	text-align: center;
	margin-top: 0.5em;
	margin-top: var(--space-xs)
}

.text-component em {
	font-style: italic
}

.text-component hr {
	margin-top: 2em;
	margin-top: calc(var(--space-lg)*var(--text-vspace-multiplier, 1));
	margin-bottom: 2em;
	margin-bottom: calc(var(--space-lg)*var(--text-vspace-multiplier, 1));
	margin-left: auto;
	margin-right: auto
}

.text-component>*:first-child {
	margin-top: 0
}

.text-component>*:last-child {
	margin-bottom: 0
}

.text-component__block--full-width {
	width: 100vw;
	margin-left: calc(50% - 50vw)
}

@media (min-width: 48rem) {
	.text-component__block--left,
	.text-component__block--right {
		width: 45%
	}
	.text-component__block--left img,
	.text-component__block--right img {
		width: 100%
	}
	.text-component__block--left {
		float: left;
		margin-right: 0.75em;
		margin-right: calc(var(--space-sm)*var(--text-vspace-multiplier, 1))
	}
	.text-component__block--right {
		float: right;
		margin-left: 0.75em;
		margin-left: calc(var(--space-sm)*var(--text-vspace-multiplier, 1))
	}
}

@media (min-width: 90rem) {
	.text-component__block--outset {
		width: calc(100% + 10.5em);
		width: calc(100% + 2*var(--space-xxl))
	}
	.text-component__block--outset img {
		width: 100%
	}
	.text-component__block--outset:not(.text-component__block--right) {
		margin-left: -5.25em;
		margin-left: calc(-1*var(--space-xxl))
	}
	.text-component__block--left,
	.text-component__block--right {
		width: 50%
	}
	.text-component__block--right.text-component__block--outset {
		margin-right: -5.25em;
		margin-right: calc(-1*var(--space-xxl))
	}
}

:root {
	--icon-xxs: 12px;
	--icon-xs: 16px;
	--icon-sm: 24px;
	--icon-md: 32px;
	--icon-lg: 48px;
	--icon-xl: 64px;
	--icon-xxl: 128px
}

.icon {
	display: inline-block;
	color: inherit;
	fill: currentColor;
	height: 1em;
	width: 1em;
	line-height: 1;
	-ms-flex-negative: 0;
	flex-shrink: 0
}

.icon--xxs {
	font-size: 12px;
	font-size: var(--icon-xxs)
}

.icon--xs {
	font-size: 16px;
	font-size: var(--icon-xs)
}

.icon--sm {
	font-size: 24px;
	font-size: var(--icon-sm)
}

.icon--md {
	font-size: 32px;
	font-size: var(--icon-md)
}

.icon--lg {
	font-size: 48px;
	font-size: var(--icon-lg)
}

.icon--xl {
	font-size: 64px;
	font-size: var(--icon-xl)
}

.icon--xxl {
	font-size: 128px;
	font-size: var(--icon-xxl)
}

.icon--is-spinning {
	-webkit-animation: icon-spin 1s infinite linear;
	animation: icon-spin 1s infinite linear
}

@-webkit-keyframes icon-spin {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg)
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}

@keyframes icon-spin {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg)
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}

.icon use {
	color: inherit;
	fill: currentColor
}
 

.radio-list>*,
.checkbox-list>* {
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-align: baseline;
	align-items: baseline;
	margin-bottom: 0.375em;
	margin-bottom: var(--space-xxs)
}

.radio-list>*:last-of-type,
.checkbox-list>*:last-of-type {
	margin-bottom: 0
}

.radio-list label,
.checkbox-list label {
	line-height: 1.4;
	line-height: var(--body-line-height);
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.radio-list input,
.checkbox-list input {
	vertical-align: top;
	margin-right: 0.25em;
	margin-right: var(--space-xxxs);
	-ms-flex-negative: 0;
	flex-shrink: 0
}

:root {
	--zindex-header: 2;
	--zindex-popover: 5;
	--zindex-fixed-element: 10;
	--zindex-overlay: 15
}

@media not all and (min-width: 32rem) {
	.display\@xs {
		display: none !important
	}
}

@media (min-width: 32rem) {
	.hide\@xs {
		display: none !important
	}
}

@media not all and (min-width: 48rem) {
	.display\@sm {
		display: none !important
	}
}

@media (min-width: 48rem) {
	.hide\@sm {
		display: none !important
	}
}

@media not all and (min-width: 64rem) {
	.display\@md {
		display: none !important
	}
}

@media (min-width: 64rem) {
	.hide\@md {
		display: none !important
	}
}

@media not all and (min-width: 80rem) {
	.display\@lg {
		display: none !important
	}
}

@media (min-width: 80rem) {
	.hide\@lg {
		display: none !important
	}
}

@media not all and (min-width: 90rem) {
	.display\@xl {
		display: none !important
	}
}

@media (min-width: 90rem) {
	.hide\@xl {
		display: none !important
	}
}

:root {
	--display: block
}

.is-visible {
	display: block !important;
	display: var(--display) !important
}

.is-hidden {
	display: none !important
}

.sr-only {
	position: absolute;
	clip: rect(1px, 1px, 1px, 1px);
	-webkit-clip-path: inset(50%);
	clip-path: inset(50%);
	width: 1px;
	height: 1px;
	overflow: hidden;
	padding: 0;
	border: 0;
	white-space: nowrap
}

.flex {
	display: -ms-flexbox;
	display: flex
}

.inline-flex {
	display: -ms-inline-flexbox;
	display: inline-flex
}

.flex-wrap {
	-ms-flex-wrap: wrap;
	flex-wrap: wrap
}

.flex-column {
	-ms-flex-direction: column;
	flex-direction: column
}

.flex-row {
	-ms-flex-direction: row;
	flex-direction: row
}

.flex-center {
	-ms-flex-pack: center;
	justify-content: center;
	-ms-flex-align: center;
	align-items: center
}

.justify-start {
	-ms-flex-pack: start;
	justify-content: flex-start
}

.justify-end {
	-ms-flex-pack: end;
	justify-content: flex-end
}

.justify-center {
	-ms-flex-pack: center;
	justify-content: center
}

.justify-between {
	-ms-flex-pack: justify;
	justify-content: space-between
}

.items-center {
	-ms-flex-align: center;
	align-items: center
}

.items-start {
	-ms-flex-align: start;
	align-items: flex-start
}

.items-end {
	-ms-flex-align: end;
	align-items: flex-end
}

@media (min-width: 32rem) {
	.flex-wrap\@xs {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap
	}
	.flex-column\@xs {
		-ms-flex-direction: column;
		flex-direction: column
	}
	.flex-row\@xs {
		-ms-flex-direction: row;
		flex-direction: row
	}
	.flex-center\@xs {
		-ms-flex-pack: center;
		justify-content: center;
		-ms-flex-align: center;
		align-items: center
	}
	.justify-start\@xs {
		-ms-flex-pack: start;
		justify-content: flex-start
	}
	.justify-end\@xs {
		-ms-flex-pack: end;
		justify-content: flex-end
	}
	.justify-center\@xs {
		-ms-flex-pack: center;
		justify-content: center
	}
	.justify-between\@xs {
		-ms-flex-pack: justify;
		justify-content: space-between
	}
	.items-center\@xs {
		-ms-flex-align: center;
		align-items: center
	}
	.items-start\@xs {
		-ms-flex-align: start;
		align-items: flex-start
	}
	.items-end\@xs {
		-ms-flex-align: end;
		align-items: flex-end
	}
}

@media (min-width: 48rem) {
	.flex-wrap\@sm {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap
	}
	.flex-column\@sm {
		-ms-flex-direction: column;
		flex-direction: column
	}
	.flex-row\@sm {
		-ms-flex-direction: row;
		flex-direction: row
	}
	.flex-center\@sm {
		-ms-flex-pack: center;
		justify-content: center;
		-ms-flex-align: center;
		align-items: center
	}
	.justify-start\@sm {
		-ms-flex-pack: start;
		justify-content: flex-start
	}
	.justify-end\@sm {
		-ms-flex-pack: end;
		justify-content: flex-end
	}
	.justify-center\@sm {
		-ms-flex-pack: center;
		justify-content: center
	}
	.justify-between\@sm {
		-ms-flex-pack: justify;
		justify-content: space-between
	}
	.items-center\@sm {
		-ms-flex-align: center;
		align-items: center
	}
	.items-start\@sm {
		-ms-flex-align: start;
		align-items: flex-start
	}
	.items-end\@sm {
		-ms-flex-align: end;
		align-items: flex-end
	}
}

@media (min-width: 64rem) {
	.flex-wrap\@md {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap
	}
	.flex-column\@md {
		-ms-flex-direction: column;
		flex-direction: column
	}
	.flex-row\@md {
		-ms-flex-direction: row;
		flex-direction: row
	}
	.flex-center\@md {
		-ms-flex-pack: center;
		justify-content: center;
		-ms-flex-align: center;
		align-items: center
	}
	.justify-start\@md {
		-ms-flex-pack: start;
		justify-content: flex-start
	}
	.justify-end\@md {
		-ms-flex-pack: end;
		justify-content: flex-end
	}
	.justify-center\@md {
		-ms-flex-pack: center;
		justify-content: center
	}
	.justify-between\@md {
		-ms-flex-pack: justify;
		justify-content: space-between
	}
	.items-center\@md {
		-ms-flex-align: center;
		align-items: center
	}
	.items-start\@md {
		-ms-flex-align: start;
		align-items: flex-start
	}
	.items-end\@md {
		-ms-flex-align: end;
		align-items: flex-end
	}
}

@media (min-width: 80rem) {
	.flex-wrap\@lg {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap
	}
	.flex-column\@lg {
		-ms-flex-direction: column;
		flex-direction: column
	}
	.flex-row\@lg {
		-ms-flex-direction: row;
		flex-direction: row
	}
	.flex-center\@lg {
		-ms-flex-pack: center;
		justify-content: center;
		-ms-flex-align: center;
		align-items: center
	}
	.justify-start\@lg {
		-ms-flex-pack: start;
		justify-content: flex-start
	}
	.justify-end\@lg {
		-ms-flex-pack: end;
		justify-content: flex-end
	}
	.justify-center\@lg {
		-ms-flex-pack: center;
		justify-content: center
	}
	.justify-between\@lg {
		-ms-flex-pack: justify;
		justify-content: space-between
	}
	.items-center\@lg {
		-ms-flex-align: center;
		align-items: center
	}
	.items-start\@lg {
		-ms-flex-align: start;
		align-items: flex-start
	}
	.items-end\@lg {
		-ms-flex-align: end;
		align-items: flex-end
	}
}

@media (min-width: 90rem) {
	.flex-wrap\@xl {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap
	}
	.flex-column\@xl {
		-ms-flex-direction: column;
		flex-direction: column
	}
	.flex-row\@xl {
		-ms-flex-direction: row;
		flex-direction: row
	}
	.flex-center\@xl {
		-ms-flex-pack: center;
		justify-content: center;
		-ms-flex-align: center;
		align-items: center
	}
	.justify-start\@xl {
		-ms-flex-pack: start;
		justify-content: flex-start
	}
	.justify-end\@xl {
		-ms-flex-pack: end;
		justify-content: flex-end
	}
	.justify-center\@xl {
		-ms-flex-pack: center;
		justify-content: center
	}
	.justify-between\@xl {
		-ms-flex-pack: justify;
		justify-content: space-between
	}
	.items-center\@xl {
		-ms-flex-align: center;
		align-items: center
	}
	.items-start\@xl {
		-ms-flex-align: start;
		align-items: flex-start
	}
	.items-end\@xl {
		-ms-flex-align: end;
		align-items: flex-end
	}
}

.flex-grow {
	-ms-flex-positive: 1;
	flex-grow: 1
}

.flex-shrink-0 {
	-ms-flex-negative: 0;
	flex-shrink: 0
}

.flex-gap-xxxs {
	margin-bottom: -0.25em;
	margin-bottom: calc(-1*var(--space-xxxs));
	margin-right: -0.25em;
	margin-right: calc(-1*var(--space-xxxs))
}

.flex-gap-xxxs>* {
	margin-bottom: 0.25em;
	margin-bottom: var(--space-xxxs);
	margin-right: 0.25em;
	margin-right: var(--space-xxxs)
}

.flex-gap-xxs {
	margin-bottom: -0.375em;
	margin-bottom: calc(-1*var(--space-xxs));
	margin-right: -0.375em;
	margin-right: calc(-1*var(--space-xxs))
}

.flex-gap-xxs>* {
	margin-bottom: 0.375em;
	margin-bottom: var(--space-xxs);
	margin-right: 0.375em;
	margin-right: var(--space-xxs)
}

.flex-gap-xs {
	margin-bottom: -0.5em;
	margin-bottom: calc(-1*var(--space-xs));
	margin-right: -0.5em;
	margin-right: calc(-1*var(--space-xs))
}

.flex-gap-xs>* {
	margin-bottom: 0.5em;
	margin-bottom: var(--space-xs);
	margin-right: 0.5em;
	margin-right: var(--space-xs)
}

.flex-gap-sm {
	margin-bottom: -0.75em;
	margin-bottom: calc(-1*var(--space-sm));
	margin-right: -0.75em;
	margin-right: calc(-1*var(--space-sm))
}

.flex-gap-sm>* {
	margin-bottom: 0.75em;
	margin-bottom: var(--space-sm);
	margin-right: 0.75em;
	margin-right: var(--space-sm)
}

.flex-gap-md {
	margin-bottom: -1.25em;
	margin-bottom: calc(-1*var(--space-md));
	margin-right: -1.25em;
	margin-right: calc(-1*var(--space-md))
}

.flex-gap-md>* {
	margin-bottom: 1.25em;
	margin-bottom: var(--space-md);
	margin-right: 1.25em;
	margin-right: var(--space-md)
}

.flex-gap-lg {
	margin-bottom: -2em;
	margin-bottom: calc(-1*var(--space-lg));
	margin-right: -2em;
	margin-right: calc(-1*var(--space-lg))
}

.flex-gap-lg>* {
	margin-bottom: 2em;
	margin-bottom: var(--space-lg);
	margin-right: 2em;
	margin-right: var(--space-lg)
}

.flex-gap-xl {
	margin-bottom: -3.25em;
	margin-bottom: calc(-1*var(--space-xl));
	margin-right: -3.25em;
	margin-right: calc(-1*var(--space-xl))
}

.flex-gap-xl>* {
	margin-bottom: 3.25em;
	margin-bottom: var(--space-xl);
	margin-right: 3.25em;
	margin-right: var(--space-xl)
}

.flex-gap-xxl {
	margin-bottom: -5.25em;
	margin-bottom: calc(-1*var(--space-xxl));
	margin-right: -5.25em;
	margin-right: calc(-1*var(--space-xxl))
}

.flex-gap-xxl>* {
	margin-bottom: 5.25em;
	margin-bottom: var(--space-xxl);
	margin-right: 5.25em;
	margin-right: var(--space-xxl)
}

.margin-xxxxs {
	margin: 0.125em;
	margin: var(--space-xxxxs)
}

.margin-xxxs {
	margin: 0.25em;
	margin: var(--space-xxxs)
}

.margin-xxs {
	margin: 0.375em;
	margin: var(--space-xxs)
}

.margin-xs {
	margin: 0.5em;
	margin: var(--space-xs)
}

.margin-sm {
	margin: 0.75em;
	margin: var(--space-sm)
}

.margin-md {
	margin: 1.25em;
	margin: var(--space-md)
}

.margin-lg {
	margin: 2em;
	margin: var(--space-lg)
}

.margin-xl {
	margin: 3.25em;
	margin: var(--space-xl)
}

.margin-xxl {
	margin: 5.25em;
	margin: var(--space-xxl)
}

.margin-xxxl {
	margin: 8.5em;
	margin: var(--space-xxxl)
}

.margin-xxxxl {
	margin: 13.75em;
	margin: var(--space-xxxxl)
}

.margin-auto {
	margin: auto
}

.margin-top-xxxxs {
	margin-top: 0.125em;
	margin-top: var(--space-xxxxs)
}

.margin-top-xxxs {
	margin-top: 0.25em;
	margin-top: var(--space-xxxs)
}

.margin-top-xxs {
	margin-top: 0.375em;
	margin-top: var(--space-xxs)
}

.margin-top-xs {
	margin-top: 0.5em;
	margin-top: var(--space-xs)
}

.margin-top-sm {
	margin-top: 0.75em;
	margin-top: var(--space-sm)
}

.margin-top-md {
	margin-top: 1.25em;
	margin-top: var(--space-md)
}

.margin-top-lg {
	margin-top: 2em;
	margin-top: var(--space-lg)
}

.margin-top-xl {
	margin-top: 3.25em;
	margin-top: var(--space-xl)
}

.margin-top-xxl {
	margin-top: 5.25em;
	margin-top: var(--space-xxl)
}

.margin-top-xxxl {
	margin-top: 8.5em;
	margin-top: var(--space-xxxl)
}

.margin-top-xxxxl {
	margin-top: 13.75em;
	margin-top: var(--space-xxxxl)
}

.margin-top-auto {
	margin-top: auto
}

.margin-bottom-xxxxs {
	margin-bottom: 0.125em;
	margin-bottom: var(--space-xxxxs)
}

.margin-bottom-xxxs {
	margin-bottom: 0.25em;
	margin-bottom: var(--space-xxxs)
}

.margin-bottom-xxs {
	margin-bottom: 0.375em;
	margin-bottom: var(--space-xxs)
}

.margin-bottom-xs {
	margin-bottom: 0.5em;
	margin-bottom: var(--space-xs)
}

.margin-bottom-sm {
	margin-bottom: 0.75em;
	margin-bottom: var(--space-sm)
}

.margin-bottom-md {
	margin-bottom: 1.25em;
	margin-bottom: var(--space-md)
}

.margin-bottom-lg {
	margin-bottom: 2em;
	margin-bottom: var(--space-lg)
}

.margin-bottom-xl {
	margin-bottom: 3.25em;
	margin-bottom: var(--space-xl)
}

.margin-bottom-xxl {
	margin-bottom: 5.25em;
	margin-bottom: var(--space-xxl)
}

.margin-bottom-xxxl {
	margin-bottom: 8.5em;
	margin-bottom: var(--space-xxxl)
}

.margin-bottom-xxxxl {
	margin-bottom: 13.75em;
	margin-bottom: var(--space-xxxxl)
}

.margin-bottom-auto {
	margin-bottom: auto
}

.margin-right-xxxxs {
	margin-right: 0.125em;
	margin-right: var(--space-xxxxs)
}

.margin-right-xxxs {
	margin-right: 0.25em;
	margin-right: var(--space-xxxs)
}

.margin-right-xxs {
	margin-right: 0.375em;
	margin-right: var(--space-xxs)
}

.margin-right-xs {
	margin-right: 0.5em;
	margin-right: var(--space-xs)
}

.margin-right-sm {
	margin-right: 0.75em;
	margin-right: var(--space-sm)
}

.margin-right-md {
	margin-right: 1.25em;
	margin-right: var(--space-md)
}

.margin-right-lg {
	margin-right: 2em;
	margin-right: var(--space-lg)
}

.margin-right-xl {
	margin-right: 3.25em;
	margin-right: var(--space-xl)
}

.margin-right-xxl {
	margin-right: 5.25em;
	margin-right: var(--space-xxl)
}

.margin-right-xxxl {
	margin-right: 8.5em;
	margin-right: var(--space-xxxl)
}

.margin-right-xxxxl {
	margin-right: 13.75em;
	margin-right: var(--space-xxxxl)
}

.margin-right-auto {
	margin-right: auto
}

.margin-left-xxxxs {
	margin-left: 0.125em;
	margin-left: var(--space-xxxxs)
}

.margin-left-xxxs {
	margin-left: 0.25em;
	margin-left: var(--space-xxxs)
}

.margin-left-xxs {
	margin-left: 0.375em;
	margin-left: var(--space-xxs)
}

.margin-left-xs {
	margin-left: 0.5em;
	margin-left: var(--space-xs)
}

.margin-left-sm {
	margin-left: 0.75em;
	margin-left: var(--space-sm)
}

.margin-left-md {
	margin-left: 1.25em;
	margin-left: var(--space-md)
}

.margin-left-lg {
	margin-left: 2em;
	margin-left: var(--space-lg)
}

.margin-left-xl {
	margin-left: 3.25em;
	margin-left: var(--space-xl)
}

.margin-left-xxl {
	margin-left: 5.25em;
	margin-left: var(--space-xxl)
}

.margin-left-xxxl {
	margin-left: 8.5em;
	margin-left: var(--space-xxxl)
}

.margin-left-xxxxl {
	margin-left: 13.75em;
	margin-left: var(--space-xxxxl)
}

.margin-left-auto {
	margin-left: auto
}

.margin-x-xxxxs {
	margin-left: 0.125em;
	margin-left: var(--space-xxxxs);
	margin-right: 0.125em;
	margin-right: var(--space-xxxxs)
}

.margin-x-xxxs {
	margin-left: 0.25em;
	margin-left: var(--space-xxxs);
	margin-right: 0.25em;
	margin-right: var(--space-xxxs)
}

.margin-x-xxs {
	margin-left: 0.375em;
	margin-left: var(--space-xxs);
	margin-right: 0.375em;
	margin-right: var(--space-xxs)
}

.margin-x-xs {
	margin-left: 0.5em;
	margin-left: var(--space-xs);
	margin-right: 0.5em;
	margin-right: var(--space-xs)
}

.margin-x-sm {
	margin-left: 0.75em;
	margin-left: var(--space-sm);
	margin-right: 0.75em;
	margin-right: var(--space-sm)
}

.margin-x-md {
	margin-left: 1.25em;
	margin-left: var(--space-md);
	margin-right: 1.25em;
	margin-right: var(--space-md)
}

.margin-x-lg {
	margin-left: 2em;
	margin-left: var(--space-lg);
	margin-right: 2em;
	margin-right: var(--space-lg)
}

.margin-x-xl {
	margin-left: 3.25em;
	margin-left: var(--space-xl);
	margin-right: 3.25em;
	margin-right: var(--space-xl)
}

.margin-x-xxl {
	margin-left: 5.25em;
	margin-left: var(--space-xxl);
	margin-right: 5.25em;
	margin-right: var(--space-xxl)
}

.margin-x-xxxl {
	margin-left: 8.5em;
	margin-left: var(--space-xxxl);
	margin-right: 8.5em;
	margin-right: var(--space-xxxl)
}

.margin-x-xxxxl {
	margin-left: 13.75em;
	margin-left: var(--space-xxxxl);
	margin-right: 13.75em;
	margin-right: var(--space-xxxxl)
}

.margin-x-auto {
	margin-left: auto;
	margin-right: auto
}

.margin-y-xxxxs {
	margin-top: 0.125em;
	margin-top: var(--space-xxxxs);
	margin-bottom: 0.125em;
	margin-bottom: var(--space-xxxxs)
}

.margin-y-xxxs {
	margin-top: 0.25em;
	margin-top: var(--space-xxxs);
	margin-bottom: 0.25em;
	margin-bottom: var(--space-xxxs)
}

.margin-y-xxs {
	margin-top: 0.375em;
	margin-top: var(--space-xxs);
	margin-bottom: 0.375em;
	margin-bottom: var(--space-xxs)
}

.margin-y-xs {
	margin-top: 0.5em;
	margin-top: var(--space-xs);
	margin-bottom: 0.5em;
	margin-bottom: var(--space-xs)
}

.margin-y-sm {
	margin-top: 0.75em;
	margin-top: var(--space-sm);
	margin-bottom: 0.75em;
	margin-bottom: var(--space-sm)
}

.margin-y-md {
	margin-top: 1.25em;
	margin-top: var(--space-md);
	margin-bottom: 1.25em;
	margin-bottom: var(--space-md)
}

.margin-y-lg {
	margin-top: 2em;
	margin-top: var(--space-lg);
	margin-bottom: 2em;
	margin-bottom: var(--space-lg)
}

.margin-y-xl {
	margin-top: 3.25em;
	margin-top: var(--space-xl);
	margin-bottom: 3.25em;
	margin-bottom: var(--space-xl)
}

.margin-y-xxl {
	margin-top: 5.25em;
	margin-top: var(--space-xxl);
	margin-bottom: 5.25em;
	margin-bottom: var(--space-xxl)
}

.margin-y-xxxl {
	margin-top: 8.5em;
	margin-top: var(--space-xxxl);
	margin-bottom: 8.5em;
	margin-bottom: var(--space-xxxl)
}

.margin-y-xxxxl {
	margin-top: 13.75em;
	margin-top: var(--space-xxxxl);
	margin-bottom: 13.75em;
	margin-bottom: var(--space-xxxxl)
}

.margin-y-auto {
	margin-top: auto;
	margin-bottom: auto
}

@media not all and (min-width: 32rem) {
	.has-margin\@xs {
		margin: 0 !important
	}
}

@media not all and (min-width: 48rem) {
	.has-margin\@sm {
		margin: 0 !important
	}
}

@media not all and (min-width: 64rem) {
	.has-margin\@md {
		margin: 0 !important
	}
}

@media not all and (min-width: 80rem) {
	.has-margin\@lg {
		margin: 0 !important
	}
}

@media not all and (min-width: 90rem) {
	.has-margin\@xl {
		margin: 0 !important
	}
}

.padding-md {
	padding: 1.25em;
	padding: var(--space-md)
}

.padding-xxxxs {
	padding: 0.125em;
	padding: var(--space-xxxxs)
}

.padding-xxxs {
	padding: 0.25em;
	padding: var(--space-xxxs)
}

.padding-xxs {
	padding: 0.375em;
	padding: var(--space-xxs)
}

.padding-xs {
	padding: 0.5em;
	padding: var(--space-xs)
}

.padding-sm {
	padding: 0.75em;
	padding: var(--space-sm)
}

.padding-lg {
	padding: 2em;
	padding: var(--space-lg)
}

.padding-xl {
	padding: 3.25em;
	padding: var(--space-xl)
}

.padding-xxl {
	padding: 5.25em;
	padding: var(--space-xxl)
}

.padding-xxxl {
	padding: 8.5em;
	padding: var(--space-xxxl)
}

.padding-xxxxl {
	padding: 13.75em;
	padding: var(--space-xxxxl)
}

.padding-component {
	padding: 1.25em;
	padding: var(--component-padding)
}

.padding-top-md {
	padding-top: 1.25em;
	padding-top: var(--space-md)
}

.padding-top-xxxxs {
	padding-top: 0.125em;
	padding-top: var(--space-xxxxs)
}

.padding-top-xxxs {
	padding-top: 0.25em;
	padding-top: var(--space-xxxs)
}

.padding-top-xxs {
	padding-top: 0.375em;
	padding-top: var(--space-xxs)
}

.padding-top-xs {
	padding-top: 0.5em;
	padding-top: var(--space-xs)
}

.padding-top-sm {
	padding-top: 0.75em;
	padding-top: var(--space-sm)
}

.padding-top-lg {
	padding-top: 2em;
	padding-top: var(--space-lg)
}

.padding-top-xl {
	padding-top: 3.25em;
	padding-top: var(--space-xl)
}

.padding-top-xxl {
	padding-top: 5.25em;
	padding-top: var(--space-xxl)
}

.padding-top-xxxl {
	padding-top: 8.5em;
	padding-top: var(--space-xxxl)
}

.padding-top-xxxxl {
	padding-top: 13.75em;
	padding-top: var(--space-xxxxl)
}

.padding-top-component {
	padding-top: 1.25em;
	padding-top: var(--component-padding)
}

.padding-bottom-md {
	padding-bottom: 1.25em;
	padding-bottom: var(--space-md)
}

.padding-bottom-xxxxs {
	padding-bottom: 0.125em;
	padding-bottom: var(--space-xxxxs)
}

.padding-bottom-xxxs {
	padding-bottom: 0.25em;
	padding-bottom: var(--space-xxxs)
}

.padding-bottom-xxs {
	padding-bottom: 0.375em;
	padding-bottom: var(--space-xxs)
}

.padding-bottom-xs {
	padding-bottom: 0.5em;
	padding-bottom: var(--space-xs)
}

.padding-bottom-sm {
	padding-bottom: 0.75em;
	padding-bottom: var(--space-sm)
}

.padding-bottom-lg {
	padding-bottom: 2em;
	padding-bottom: var(--space-lg)
}

.padding-bottom-xl {
	padding-bottom: 3.25em;
	padding-bottom: var(--space-xl)
}

.padding-bottom-xxl {
	padding-bottom: 5.25em;
	padding-bottom: var(--space-xxl)
}

.padding-bottom-xxxl {
	padding-bottom: 8.5em;
	padding-bottom: var(--space-xxxl)
}

.padding-bottom-xxxxl {
	padding-bottom: 13.75em;
	padding-bottom: var(--space-xxxxl)
}

.padding-bottom-component {
	padding-bottom: 1.25em;
	padding-bottom: var(--component-padding)
}

.padding-right-md {
	padding-right: 1.25em;
	padding-right: var(--space-md)
}

.padding-right-xxxxs {
	padding-right: 0.125em;
	padding-right: var(--space-xxxxs)
}

.padding-right-xxxs {
	padding-right: 0.25em;
	padding-right: var(--space-xxxs)
}

.padding-right-xxs {
	padding-right: 0.375em;
	padding-right: var(--space-xxs)
}

.padding-right-xs {
	padding-right: 0.5em;
	padding-right: var(--space-xs)
}

.padding-right-sm {
	padding-right: 0.75em;
	padding-right: var(--space-sm)
}

.padding-right-lg {
	padding-right: 2em;
	padding-right: var(--space-lg)
}

.padding-right-xl {
	padding-right: 3.25em;
	padding-right: var(--space-xl)
}

.padding-right-xxl {
	padding-right: 5.25em;
	padding-right: var(--space-xxl)
}

.padding-right-xxxl {
	padding-right: 8.5em;
	padding-right: var(--space-xxxl)
}

.padding-right-xxxxl {
	padding-right: 13.75em;
	padding-right: var(--space-xxxxl)
}

.padding-right-component {
	padding-right: 1.25em;
	padding-right: var(--component-padding)
}

.padding-left-md {
	padding-left: 1.25em;
	padding-left: var(--space-md)
}

.padding-left-xxxxs {
	padding-left: 0.125em;
	padding-left: var(--space-xxxxs)
}

.padding-left-xxxs {
	padding-left: 0.25em;
	padding-left: var(--space-xxxs)
}

.padding-left-xxs {
	padding-left: 0.375em;
	padding-left: var(--space-xxs)
}

.padding-left-xs {
	padding-left: 0.5em;
	padding-left: var(--space-xs)
}

.padding-left-sm {
	padding-left: 0.75em;
	padding-left: var(--space-sm)
}

.padding-left-lg {
	padding-left: 2em;
	padding-left: var(--space-lg)
}

.padding-left-xl {
	padding-left: 3.25em;
	padding-left: var(--space-xl)
}

.padding-left-xxl {
	padding-left: 5.25em;
	padding-left: var(--space-xxl)
}

.padding-left-xxxl {
	padding-left: 8.5em;
	padding-left: var(--space-xxxl)
}

.padding-left-xxxxl {
	padding-left: 13.75em;
	padding-left: var(--space-xxxxl)
}

.padding-left-component {
	padding-left: 1.25em;
	padding-left: var(--component-padding)
}

.padding-x-md {
	padding-left: 1.25em;
	padding-left: var(--space-md);
	padding-right: 1.25em;
	padding-right: var(--space-md)
}

.padding-x-xxxxs {
	padding-left: 0.125em;
	padding-left: var(--space-xxxxs);
	padding-right: 0.125em;
	padding-right: var(--space-xxxxs)
}

.padding-x-xxxs {
	padding-left: 0.25em;
	padding-left: var(--space-xxxs);
	padding-right: 0.25em;
	padding-right: var(--space-xxxs)
}

.padding-x-xxs {
	padding-left: 0.375em;
	padding-left: var(--space-xxs);
	padding-right: 0.375em;
	padding-right: var(--space-xxs)
}

.padding-x-xs {
	padding-left: 0.5em;
	padding-left: var(--space-xs);
	padding-right: 0.5em;
	padding-right: var(--space-xs)
}

.padding-x-sm {
	padding-left: 0.75em;
	padding-left: var(--space-sm);
	padding-right: 0.75em;
	padding-right: var(--space-sm)
}

.padding-x-lg {
	padding-left: 2em;
	padding-left: var(--space-lg);
	padding-right: 2em;
	padding-right: var(--space-lg)
}

.padding-x-xl {
	padding-left: 3.25em;
	padding-left: var(--space-xl);
	padding-right: 3.25em;
	padding-right: var(--space-xl)
}

.padding-x-xxl {
	padding-left: 5.25em;
	padding-left: var(--space-xxl);
	padding-right: 5.25em;
	padding-right: var(--space-xxl)
}

.padding-x-xxxl {
	padding-left: 8.5em;
	padding-left: var(--space-xxxl);
	padding-right: 8.5em;
	padding-right: var(--space-xxxl)
}

.padding-x-xxxxl {
	padding-left: 13.75em;
	padding-left: var(--space-xxxxl);
	padding-right: 13.75em;
	padding-right: var(--space-xxxxl)
}

.padding-x-component {
	padding-left: 1.25em;
	padding-left: var(--component-padding);
	padding-right: 1.25em;
	padding-right: var(--component-padding)
}

.padding-y-md {
	padding-top: 1.25em;
	padding-top: var(--space-md);
	padding-bottom: 1.25em;
	padding-bottom: var(--space-md)
}

.padding-y-xxxxs {
	padding-top: 0.125em;
	padding-top: var(--space-xxxxs);
	padding-bottom: 0.125em;
	padding-bottom: var(--space-xxxxs)
}

.padding-y-xxxs {
	padding-top: 0.25em;
	padding-top: var(--space-xxxs);
	padding-bottom: 0.25em;
	padding-bottom: var(--space-xxxs)
}

.padding-y-xxs {
	padding-top: 0.375em;
	padding-top: var(--space-xxs);
	padding-bottom: 0.375em;
	padding-bottom: var(--space-xxs)
}

.padding-y-xs {
	padding-top: 0.5em;
	padding-top: var(--space-xs);
	padding-bottom: 0.5em;
	padding-bottom: var(--space-xs)
}

.padding-y-sm {
	padding-top: 0.75em;
	padding-top: var(--space-sm);
	padding-bottom: 0.75em;
	padding-bottom: var(--space-sm)
}

.padding-y-lg {
	padding-top: 2em;
	padding-top: var(--space-lg);
	padding-bottom: 2em;
	padding-bottom: var(--space-lg)
}

.padding-y-xl {
	padding-top: 3.25em;
	padding-top: var(--space-xl);
	padding-bottom: 3.25em;
	padding-bottom: var(--space-xl)
}

.padding-y-xxl {
	padding-top: 5.25em;
	padding-top: var(--space-xxl);
	padding-bottom: 5.25em;
	padding-bottom: var(--space-xxl)
}

.padding-y-xxxl {
	padding-top: 8.5em;
	padding-top: var(--space-xxxl);
	padding-bottom: 8.5em;
	padding-bottom: var(--space-xxxl)
}

.padding-y-xxxxl {
	padding-top: 13.75em;
	padding-top: var(--space-xxxxl);
	padding-bottom: 13.75em;
	padding-bottom: var(--space-xxxxl)
}

.padding-y-component {
	padding-top: 1.25em;
	padding-top: var(--component-padding);
	padding-bottom: 1.25em;
	padding-bottom: var(--component-padding)
}

@media not all and (min-width: 32rem) {
	.has-padding\@xs {
		padding: 0 !important
	}
}

@media not all and (min-width: 48rem) {
	.has-padding\@sm {
		padding: 0 !important
	}
}

@media not all and (min-width: 64rem) {
	.has-padding\@md {
		padding: 0 !important
	}
}

@media not all and (min-width: 80rem) {
	.has-padding\@lg {
		padding: 0 !important
	}
}

@media not all and (min-width: 90rem) {
	.has-padding\@xl {
		padding: 0 !important
	}
}

.truncate {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}

.text-replace {
	overflow: hidden;
	color: transparent;
	text-indent: 100%;
	white-space: nowrap
}

.text-center {
	text-align: center
}

.text-left {
	text-align: left
}

.text-right {
	text-align: right
}

@media (min-width: 32rem) {
	.text-center\@xs {
		text-align: center
	}
	.text-left\@xs {
		text-align: left
	}
	.text-right\@xs {
		text-align: right
	}
}

@media (min-width: 48rem) {
	.text-center\@sm {
		text-align: center
	}
	.text-left\@sm {
		text-align: left
	}
	.text-right\@sm {
		text-align: right
	}
}

@media (min-width: 64rem) {
	.text-center\@md {
		text-align: center
	}
	.text-left\@md {
		text-align: left
	}
	.text-right\@md {
		text-align: right
	}
}

@media (min-width: 80rem) {
	.text-center\@lg {
		text-align: center
	}
	.text-left\@lg {
		text-align: left
	}
	.text-right\@lg {
		text-align: right
	}
}

@media (min-width: 90rem) {
	.text-center\@xl {
		text-align: center
	}
	.text-left\@xl {
		text-align: left
	}
	.text-right\@xl {
		text-align: right
	}
}

.color-inherit {
	color: inherit
}

.color-contrast-medium {
	color: hsl(240, 1%, 48%);
	color: var(--color-contrast-medium, #79797c)
}

.color-contrast-high {
	color: hsl(240, 4%, 20%);
	color: var(--color-contrast-high, #313135)
}

.color-contrast-higher {
	color: hsl(240, 8%, 12%);
	color: var(--color-contrast-higher, #1c1c21)
}

.color-primary {
	color: hsl(220, 90%, 56%);
	color: var(--color-primary, #2a6df4)
}

.color-accent {
	color: hsl(355, 90%, 61%);
	color: var(--color-accent, #f54251)
}

.color-success {
	color: hsl(94, 48%, 56%);
	color: var(--color-success, #88c559)
}

.color-warning {
	color: hsl(46, 100%, 61%);
	color: var(--color-warning, #ffd138)
}

.color-error {
	color: hsl(355, 90%, 61%);
	color: var(--color-error, #f54251)
}

.width-100\% {
	width: 100%
}

.height-100\% {
	height: 100%
}

.media-wrapper {
	position: relative;
	height: 0;
	padding-bottom: 56.25%
}

.media-wrapper iframe,
.media-wrapper video,
.media-wrapper img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%
}

.media-wrapper video,
.media-wrapper img {
	-o-object-fit: cover;
	object-fit: cover
}

.media-wrapper--4\:3 {
	padding-bottom: 75%
}

:root,
[data-theme="default"] {
	--color-primary-darker: hsl(220, 90%, 36%);
	--color-primary-darker-h: 220;
	--color-primary-darker-s: 90%;
	--color-primary-darker-l: 36%;
	--color-primary-dark: hsl(220, 90%, 46%);
	--color-primary-dark-h: 220;
	--color-primary-dark-s: 90%;
	--color-primary-dark-l: 46%;
	--color-primary: hsl(220, 90%, 56%);
	--color-primary-h: 220;
	--color-primary-s: 90%;
	--color-primary-l: 56%;
	--color-primary-light: hsl(220, 90%, 66%);
	--color-primary-light-h: 220;
	--color-primary-light-s: 90%;
	--color-primary-light-l: 66%;
	--color-primary-lighter: hsl(220, 90%, 76%);
	--color-primary-lighter-h: 220;
	--color-primary-lighter-s: 90%;
	--color-primary-lighter-l: 76%;
	--color-accent-darker: hsl(355, 90%, 41%);
	--color-accent-darker-h: 355;
	--color-accent-darker-s: 90%;
	--color-accent-darker-l: 41%;
	--color-accent-dark: hsl(355, 90%, 51%);
	--color-accent-dark-h: 355;
	--color-accent-dark-s: 90%;
	--color-accent-dark-l: 51%;
	--color-accent: hsl(355, 90%, 61%);
	--color-accent-h: 355;
	--color-accent-s: 90%;
	--color-accent-l: 61%;
	--color-accent-light: hsl(355, 90%, 71%);
	--color-accent-light-h: 355;
	--color-accent-light-s: 90%;
	--color-accent-light-l: 71%;
	--color-accent-lighter: hsl(355, 90%, 81%);
	--color-accent-lighter-h: 355;
	--color-accent-lighter-s: 90%;
	--color-accent-lighter-l: 81%;
	--color-black: hsl(240, 8%, 12%);
	--color-black-h: 240;
	--color-black-s: 8%;
	--color-black-l: 12%;
	--color-white: hsl(0, 0%, 100%);
	--color-white-h: 0;
	--color-white-s: 0%;
	--color-white-l: 100%;
	--color-success-darker: hsl(94, 48%, 36%);
	--color-success-darker-h: 94;
	--color-success-darker-s: 48%;
	--color-success-darker-l: 36%;
	--color-success-dark: hsl(94, 48%, 46%);
	--color-success-dark-h: 94;
	--color-success-dark-s: 48%;
	--color-success-dark-l: 46%;
	--color-success: hsl(94, 48%, 56%);
	--color-success-h: 94;
	--color-success-s: 48%;
	--color-success-l: 56%;
	--color-success-light: hsl(94, 48%, 66%);
	--color-success-light-h: 94;
	--color-success-light-s: 48%;
	--color-success-light-l: 66%;
	--color-success-lighter: hsl(94, 48%, 76%);
	--color-success-lighter-h: 94;
	--color-success-lighter-s: 48%;
	--color-success-lighter-l: 76%;
	--color-error-darker: hsl(355, 90%, 41%);
	--color-error-darker-h: 355;
	--color-error-darker-s: 90%;
	--color-error-darker-l: 41%;
	--color-error-dark: hsl(355, 90%, 51%);
	--color-error-dark-h: 355;
	--color-error-dark-s: 90%;
	--color-error-dark-l: 51%;
	--color-error: hsl(355, 90%, 61%);
	--color-error-h: 355;
	--color-error-s: 90%;
	--color-error-l: 61%;
	--color-error-light: hsl(355, 90%, 71%);
	--color-error-light-h: 355;
	--color-error-light-s: 90%;
	--color-error-light-l: 71%;
	--color-error-lighter: hsl(355, 90%, 81%);
	--color-error-lighter-h: 355;
	--color-error-lighter-s: 90%;
	--color-error-lighter-l: 81%;
	--color-warning-darker: hsl(46, 100%, 41%);
	--color-warning-darker-h: 46;
	--color-warning-darker-s: 100%;
	--color-warning-darker-l: 41%;
	--color-warning-dark: hsl(46, 100%, 51%);
	--color-warning-dark-h: 46;
	--color-warning-dark-s: 100%;
	--color-warning-dark-l: 51%;
	--color-warning: hsl(46, 100%, 61%);
	--color-warning-h: 46;
	--color-warning-s: 100%;
	--color-warning-l: 61%;
	--color-warning-light: hsl(46, 100%, 71%);
	--color-warning-light-h: 46;
	--color-warning-light-s: 100%;
	--color-warning-light-l: 71%;
	--color-warning-lighter: hsl(46, 100%, 81%);
	--color-warning-lighter-h: 46;
	--color-warning-lighter-s: 100%;
	--color-warning-lighter-l: 81%;
	--color-bg: hsl(0, 0%, 100%);
	--color-bg-h: 0;
	--color-bg-s: 0%;
	--color-bg-l: 100%;
	--color-contrast-lower: hsl(0, 0%, 95%);
	--color-contrast-lower-h: 0;
	--color-contrast-lower-s: 0%;
	--color-contrast-lower-l: 95%;
	--color-contrast-low: hsl(240, 1%, 83%);
	--color-contrast-low-h: 240;
	--color-contrast-low-s: 1%;
	--color-contrast-low-l: 83%;
	--color-contrast-medium: hsl(240, 1%, 48%);
	--color-contrast-medium-h: 240;
	--color-contrast-medium-s: 1%;
	--color-contrast-medium-l: 48%;
	--color-contrast-high: hsl(240, 4%, 20%);
	--color-contrast-high-h: 240;
	--color-contrast-high-s: 4%;
	--color-contrast-high-l: 20%;
	--color-contrast-higher: hsl(240, 8%, 12%);
	--color-contrast-higher-h: 240;
	--color-contrast-higher-s: 8%;
	--color-contrast-higher-l: 12%
}

@supports (--css: variables) {
	@media (min-width: 64rem) {
		:root {
			--space-unit: 1.25em
		}
	}
}

:root {
	--radius: 0.25em
}

:root {
	--font-primary: sans-serif;
	--text-base-size: 1em;
	--text-scale-ratio: 1.2;
	--text-xs: calc(1em/var(--text-scale-ratio)/var(--text-scale-ratio));
	--text-sm: calc(var(--text-xs)*var(--text-scale-ratio));
	--text-md: calc(var(--text-sm)*var(--text-scale-ratio)*var(--text-scale-ratio));
	--text-lg: calc(var(--text-md)*var(--text-scale-ratio));
	--text-xl: calc(var(--text-lg)*var(--text-scale-ratio));
	--text-xxl: calc(var(--text-xl)*var(--text-scale-ratio));
	--text-xxxl: calc(var(--text-xxl)*var(--text-scale-ratio));
	--body-line-height: 1.4;
	--heading-line-height: 1.2;
	--font-primary-capital-letter: 1
}

@supports (--css: variables) {
	@media (min-width: 64rem) {
		:root {
			--text-base-size: 1.25em;
			--text-scale-ratio: 1.25
		}
	}
}

mark {
	background-color: hsla(355, 90%, 61%, 0.2);
	background-color: hsla(var(--color-accent-h), var(--color-accent-s), var(--color-accent-l), 0.2);
	color: inherit
}

.text-component {
	--line-height-multiplier: 1;
	--text-vspace-multiplier: 1
}

.text-component blockquote {
	padding-left: 1em;
	border-left: 4px solid hsl(240, 1%, 83%);
	border-left: 4px solid var(--color-contrast-low)
}

.text-component hr {
	background: hsl(240, 1%, 83%);
	background: var(--color-contrast-low);
	height: 1px
}

.text-component figcaption {
	font-size: 0.83333em;
	font-size: var(--text-sm);
	color: hsl(240, 1%, 48%);
	color: var(--color-contrast-medium)
}

.article.text-component {
	--line-height-multiplier: 1.13;
	--text-vspace-multiplier: 1.2
}

:root {
	--btn-font-size: 1em;
	--btn-font-size-sm: calc(var(--btn-font-size) - 0.2em);
	--btn-font-size-md: calc(var(--btn-font-size) + 0.2em);
	--btn-font-size-lg: calc(var(--btn-font-size) + 0.4em);
	--btn-radius: 0.25em;
	--btn-padding-x: var(--space-sm);
	--btn-padding-y: var(--space-xs)
}

.btn {
	--color-shadow: hsla(240, 8%, 12%, 0.15);
	--color-shadow: hsla(var(--color-black-h), var(--color-black-s), var(--color-black-l), 0.15);
	box-shadow: 0 4px 16px hsla(240, 8%, 12%, 0.15);
	box-shadow: 0 4px 16px hsla(var(--color-black-h), var(--color-black-s), var(--color-black-l), 0.15);
	cursor: pointer
}

.btn--primary {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale
}

.btn--accent {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale
}

.btn--disabled {
	opacity: 0.6
}

:root {
	--form-control-padding-x: var(--space-sm);
	--form-control-padding-y: var(--space-xs);
	--form-control-radius: 0.25em
}

.form-control {
	border: 2px solid hsl(240, 1%, 83%);
	border: 2px solid var(--color-contrast-low)
}

.form-control:focus {
	outline: none;
	border-color: hsl(220, 90%, 56%);
	border-color: var(--color-primary);
	--color-shadow: hsla(220, 90%, 56%, 0.2);
	--color-shadow: hsla(var(--color-primary-h), var(--color-primary-s), var(--color-primary-l), 0.2);
	box-shadow: undefined;
	box-shadow: 0 0 0 3px var(--color-shadow)
}

.form-control:focus:focus {
	box-shadow: 0 0 0 3px hsla(220, 90%, 56%, 0.2);
	box-shadow: 0 0 0 3px var(--color-shadow)
}

.form-control[aria-invalid="true"] {
	border-color: hsl(355, 90%, 61%);
	border-color: var(--color-error)
}

.form-control[aria-invalid="true"]:focus {
	--color-shadow: hsla(355, 90%, 61%, 0.2);
	--color-shadow: hsla(var(--color-error-h), var(--color-error-s), var(--color-error-l), 0.2);
	box-shadow: undefined;
	box-shadow: 0 0 0 3px var(--color-shadow)
}

.form-control[aria-invalid="true"]:focus:focus {
	box-shadow: 0 0 0 3px hsla(355, 90%, 61%, 0.2);
	box-shadow: 0 0 0 3px var(--color-shadow)
}

.form-label {
	font-size: 0.83333em;
	font-size: var(--text-sm)
}

:root {
	--cd-color-1: hsl(0, 0%, 22%);
	--cd-color-1-h: 0;
	--cd-color-1-s: 0%;
	--cd-color-1-l: 22%;
	--cd-color-2: hsl(74, 93%, 32%);
	--cd-color-2-h: 74;
	--cd-color-2-s: 93%;
	--cd-color-2-l: 32%;
	--cd-color-3: hsl(0, 0%, 97%);
	--cd-color-3-h: 0;
	--cd-color-3-s: 0%;
	--cd-color-3-l: 97%;
	--font-primary: 'Fira Sans', sans-serif;
	--font-secondary: 'Playfair Display', serif
}

body {
	color: hsl(0, 0%, 22%);
	color: var(--cd-color-1);
	background-color: hsl(0, 0%, 97%);
	background-color: var(--cd-color-3)
}

.js .cd-h-timeline {
	opacity: 0;
	transition: opacity 0.2s
}

.js .cd-h-timeline--loaded {
	opacity: 1
}

.js .cd-h-timeline__container {
	position: relative;
	height: 100px;
	max-width: 800px
}

.js .cd-h-timeline__dates {
	position: relative;
	height: 100%;
	margin: 0 40px;
	overflow: hidden
}

.js .cd-h-timeline__dates::after,
.js .cd-h-timeline__dates::before {
	content: '';
	position: absolute;
	z-index: 2;
	top: 0;
	height: 100%;
	width: 20px
}

 
.js .cd-h-timeline__line {
	position: absolute;
	z-index: 1;
	left: 0;
	top: 49px;
	height: 2px;
	background-color: hsl(0, 0%, 87.3%);
	background-color: hsl(var(--cd-color-3-h), var(--cd-color-3-s), calc(var(--cd-color-3-l)*0.9));
	transition: -webkit-transform 0.4s;
	transition: transform 0.4s;
	transition: transform 0.4s, -webkit-transform 0.4s
}

.js .cd-h-timeline__filling-line {
	position: absolute;
	z-index: 1;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: hsl(74, 93%, 32%);
	background-color: var(--cd-color-2);
	-webkit-transform: scaleX(0);
	-ms-transform: scaleX(0);
	transform: scaleX(0);
	-webkit-transform-origin: left center;
	-ms-transform-origin: left center;
	transform-origin: left center;
	transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
	transition: transform 0.3s, -webkit-transform 0.3s
}

.js .cd-h-timeline__date {
	position: absolute;
	bottom: 0;
	z-index: 2;
	text-align: center;
	font-size: 0.8em;
	padding-bottom: 0.75em;
	padding-bottom: var(--space-sm);
	color: hsl(0, 0%, 22%);
	color: var(--cd-color-1);
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	text-decoration: none
}

.js .cd-h-timeline__date::after {
	content: '';
	position: absolute;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
	bottom: -5px;
	height: 12px;
	width: 12px;
	border-radius: 50%;
	border-width: 2px;
	border-style: solid;
	border-color: hsl(0, 0%, 87.3%);
	border-color: hsl(var(--cd-color-3-h), var(--cd-color-3-s), calc(var(--cd-color-3-l)*0.9));
	background-color: hsl(0, 0%, 97%);
	background-color: var(--cd-color-3);
	transition: background-color 0.3s, border-color .3s
}

.js .cd-h-timeline__date:hover::after {
	background-color: hsl(74, 93%, 32%);
	background-color: var(--cd-color-2);
	border-color: hsl(74, 93%, 32%);
	border-color: var(--cd-color-2)
}

@media (min-width: 64rem) {
	.js .cd-h-timeline__date {
		font-size: 0.7em
	}
}

.js .cd-h-timeline__date--selected {
	pointer-events: none
}

.js .cd-h-timeline__date--selected::after {
	background-color: hsl(74, 93%, 32%);
	background-color: var(--cd-color-2);
	border-color: hsl(74, 93%, 32%);
	border-color: var(--cd-color-2)
}

.js .cd-h-timeline__date--older-event::after {
	border-color: hsl(74, 93%, 32%);
	border-color: var(--cd-color-2)
}

.js .cd-h-timeline__navigation {
	position: absolute;
	z-index: 1;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	height: 34px;
	width: 34px;
	border-radius: 50%;
	border-width: 2px;
	border-style: solid;
	border-color: hsl(0, 0%, 87.3%);
	border-color: hsl(var(--cd-color-3-h), var(--cd-color-3-s), calc(var(--cd-color-3-l)*0.9));
	transition: border-color 0.3s
}

.js .cd-h-timeline__navigation::after {
	content: '';
	position: absolute;
	height: 16px;
	width: 16px;
	top: 50%;
	left: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
	background: url(<?php echo plugin_dir_url( dirname( __FILE__ )) . 'chslider/cd-arrow.svg';
	?>) no-repeat 0 0
}

.js .cd-h-timeline__navigation:hover {
	border-color: hsl(74, 93%, 32%);
	border-color: var(--cd-color-2)
}

.js .cd-h-timeline__navigation--prev {
	left: 0;
	-webkit-transform: translateY(-50%) rotate(180deg);
	-ms-transform: translateY(-50%) rotate(180deg);
	transform: translateY(-50%) rotate(180deg)
}

.js .cd-h-timeline__navigation--next {
	right: 0
}

.js .cd-h-timeline__navigation--inactive {
	cursor: not-allowed
}

.js .cd-h-timeline__navigation--inactive::after {
	background-position: 0 -16px
}

.js .cd-h-timeline__navigation--inactive:hover {
	border-color: hsl(0, 0%, 87.3%);
	border-color: hsl(var(--cd-color-3-h), var(--cd-color-3-s), calc(var(--cd-color-3-l)*0.9))
}

.js .cd-h-timeline__events {
	position: relative;
	width: 100%;
	overflow: hidden;
	transition: height .4s
}

.js .cd-h-timeline__event {
	position: absolute;
	z-index: 1;
	width: 100%;
	left: 0;
	top: 0;
	-webkit-transform: translateX(-100%);
	-ms-transform: translateX(-100%);
	transform: translateX(-100%);
	padding: 1px 5%;
	opacity: 0;
	-webkit-animation-duration: 0.4s;
	animation-duration: 0.4s;
	-webkit-animation-timing-function: ease-in-out;
	animation-timing-function: ease-in-out
}

.js .cd-h-timeline__event--selected {
	position: relative;
	z-index: 2;
	opacity: 1;
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}

.js .cd-h-timeline__event--enter-right,
.js .cd-h-timeline__event--leave-right {
	-webkit-animation-name: cd-enter-right;
	animation-name: cd-enter-right
}

.js .cd-h-timeline__event--enter-left,
.js .cd-h-timeline__event--leave-left {
	-webkit-animation-name: cd-enter-left;
	animation-name: cd-enter-left
}

.js .cd-h-timeline__event--leave-right,
.js .cd-h-timeline__event--leave-left {
	animation-direction: reverse
}

.js .cd-h-timeline__event-content {
	max-width: 800px
}

.js .cd-h-timeline__event-title {
	color: hsl(0, 0%, 22%);
	color: var(--cd-color-1);
	font-family: 'Playfair Display', serif;
	font-family: var(--font-secondary);
	font-weight: 700;
	font-size: 2.48832em;
	font-size: var(--text-xxxl)
}

.js .cd-h-timeline__event-date {
	display: block;
	font-style: italic;
	margin: 0.5em auto;
	margin: var(--space-xs) auto
}

.js .cd-h-timeline__event-date::before {
	content: '- '
}

@-webkit-keyframes cd-enter-right {
	0% {
		opacity: 0;
		-webkit-transform: translateX(100%);
		transform: translateX(100%)
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0%);
		transform: translateX(0%)
	}
}

@keyframes cd-enter-right {
	0% {
		opacity: 0;
		-webkit-transform: translateX(100%);
		transform: translateX(100%)
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0%);
		transform: translateX(0%)
	}
}

@-webkit-keyframes cd-enter-left {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-100%);
		transform: translateX(-100%)
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0%);
		transform: translateX(0%)
	}
}

@keyframes cd-enter-left {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-100%);
		transform: translateX(-100%)
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0%);
		transform: translateX(0%)
	}
}

html:not(.js) .cd-h-timeline__dates,
html:not(.js) .cd-h-timeline__navigation {
	display: none
}

</style>