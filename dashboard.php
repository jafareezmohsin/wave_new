<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wave • Derman • Dashboard</title>
    <style type="text/css" data-tippy-stylesheet="">
    .tippy-iOS {
        cursor: pointer !important;
        -webkit-tap-highlight-color: transparent
    }

    .tippy-popper {
        transition-timing-function: cubic-bezier(.165, .84, .44, 1);
        max-width: calc(100% - 8px);
        pointer-events: none;
        outline: 0
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
        border-radius: 40% 40% 0 0
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow {
        bottom: -7px;
        bottom: -6.5px;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        margin: 0 3px
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .tippy-popper[x-placement^=top] .tippy-arrow {
        border-top: 8px solid #333;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
        bottom: -7px;
        margin: 0 3px;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
        -webkit-transform-origin: 0 25%;
        transform-origin: 0 25%
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(1) translate(-50%, -55%);
        transform: scale(1) translate(-50%, -55%)
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(.2) translate(-50%, -45%);
        transform: scale(.2) translate(-50%, -45%);
        opacity: 0
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective] {
        -webkit-transform-origin: bottom;
        transform-origin: bottom
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
        -webkit-transform: perspective(700px) translateY(-10px);
        transform: perspective(700px) translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: perspective(700px) rotateX(60deg);
        transform: perspective(700px) rotateX(60deg)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
        opacity: 0
    }

    .tippy-popper[x-placement^=top] [data-animation=scale] {
        -webkit-transform-origin: bottom;
        transform-origin: bottom
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(-10px) scale(.5);
        transform: translateY(-10px) scale(.5)
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
        border-radius: 0 0 30% 30%
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow {
        top: -7px;
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        margin: 0 3px
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
        position: absolute;
        left: 0
    }

    .tippy-popper[x-placement^=bottom] .tippy-arrow {
        border-bottom: 8px solid #333;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
        top: -7px;
        margin: 0 3px;
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
        -webkit-transform-origin: 0 -50%;
        transform-origin: 0 -50%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(1) translate(-50%, -45%);
        transform: scale(1) translate(-50%, -45%)
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(.2) translate(-50%);
        transform: scale(.2) translate(-50%);
        opacity: 0
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
        -webkit-transform-origin: top;
        transform-origin: top
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
        -webkit-transform: perspective(700px) translateY(10px);
        transform: perspective(700px) translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: perspective(700px) rotateX(-60deg);
        transform: perspective(700px) rotateX(-60deg)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
        opacity: 0
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale] {
        -webkit-transform-origin: top;
        transform-origin: top
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateY(10px) scale(.5);
        transform: translateY(10px) scale(.5)
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
        border-radius: 50% 0 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow {
        right: -12px;
        -webkit-transform-origin: 33.33333333% 50%;
        transform-origin: 33.33333333% 50%;
        margin: 3px 0
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .tippy-popper[x-placement^=left] .tippy-arrow {
        border-left: 8px solid #333;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        right: -7px;
        margin: 3px 0;
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(1) translate(-50%, -50%);
        transform: scale(1) translate(-50%, -50%)
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(.2) translate(-75%, -50%);
        transform: scale(.2) translate(-75%, -50%);
        opacity: 0
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective] {
        -webkit-transform-origin: right;
        transform-origin: right
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
        -webkit-transform: perspective(700px) translateX(-10px);
        transform: perspective(700px) translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: perspective(700px) rotateY(-60deg);
        transform: perspective(700px) rotateY(-60deg)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
        opacity: 0
    }

    .tippy-popper[x-placement^=left] [data-animation=scale] {
        -webkit-transform-origin: right;
        transform-origin: right
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(-10px) scale(.5);
        transform: translateX(-10px) scale(.5)
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
        border-radius: 0 50% 50% 0
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow {
        left: -12px;
        -webkit-transform-origin: 66.66666666% 50%;
        transform-origin: 66.66666666% 50%;
        margin: 3px 0
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow svg {
        position: absolute;
        left: 0;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .tippy-popper[x-placement^=right] .tippy-arrow {
        border-right: 8px solid #333;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        left: -7px;
        margin: 3px 0;
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
        -webkit-transform-origin: -50% 0;
        transform-origin: -50% 0
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
        -webkit-transform: scale(1) translate(-50%, -50%);
        transform: scale(1) translate(-50%, -50%)
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
        -webkit-transform: scale(.2) translate(-25%, -50%);
        transform: scale(.2) translate(-25%, -50%);
        opacity: 0
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective] {
        -webkit-transform-origin: left;
        transform-origin: left
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
        -webkit-transform: perspective(700px) translateX(10px);
        transform: perspective(700px) translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
        opacity: 0;
        -webkit-transform: perspective(700px) rotateY(60deg);
        transform: perspective(700px) rotateY(60deg)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
        opacity: 0
    }

    .tippy-popper[x-placement^=right] [data-animation=scale] {
        -webkit-transform-origin: left;
        transform-origin: left
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
        opacity: 0;
        -webkit-transform: translateX(10px) scale(.5);
        transform: translateX(10px) scale(.5)
    }

    .tippy-tooltip {
        position: relative;
        color: #fff;
        border-radius: .25rem;
        font-size: .875rem;
        padding: .3125rem .5625rem;
        line-height: 1.4;
        text-align: center;
        background-color: #333
    }

    .tippy-tooltip[data-size=small] {
        padding: .1875rem .375rem;
        font-size: .75rem
    }

    .tippy-tooltip[data-size=large] {
        padding: .375rem .75rem;
        font-size: 1rem
    }

    .tippy-tooltip[data-animatefill] {
        overflow: hidden;
        background-color: initial
    }

    .tippy-tooltip[data-interactive],
    .tippy-tooltip[data-interactive] .tippy-roundarrow path {
        pointer-events: auto
    }

    .tippy-tooltip[data-inertia][data-state=visible] {
        transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
    }

    .tippy-tooltip[data-inertia][data-state=hidden] {
        transition-timing-function: ease
    }

    .tippy-arrow,
    .tippy-roundarrow {
        position: absolute;
        width: 0;
        height: 0
    }

    .tippy-roundarrow {
        width: 18px;
        height: 7px;
        fill: #333;
        pointer-events: none
    }

    .tippy-backdrop {
        position: absolute;
        background-color: #333;
        border-radius: 50%;
        width: calc(110% + 2rem);
        left: 50%;
        top: 50%;
        z-index: -1;
        transition: all cubic-bezier(.46, .1, .52, .98);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .tippy-backdrop:after {
        content: "";
        float: left;
        padding-top: 100%
    }

    .tippy-backdrop+.tippy-content {
        transition-property: opacity;
        will-change: opacity
    }

    .tippy-backdrop+.tippy-content[data-state=hidden] {
        opacity: 0
    }
    </style>
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/favicon-32x32.png"
        sizes="32x32">
    <link rel="icon" type="image/png" href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/favicon-16x16.png"
        sizes="16x16">
    <link rel="manifest" href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/site.webmanifest">
    <link rel="mask-icon" href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/safari-pinned-tab.svg"
        color="#308df8">
    <link rel="shortcut icon" href="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-square150x150logo"
        content="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/mstile-150x150.png">
    <meta name="msapplication-square310x310logo"
        content="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/mstile-310x310.png">
    <meta name="msapplication-square70x70logo"
        content="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/mstile-70x70.png">
    <meta name="msapplication-wide310x150logo"
        content="https://dmrokfxvkn5v8.cloudfront.net/public/wavicon/mstile-310x150.png">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/knpkfcpnjfbniadmfchjpcigfhookhaa">
    <style>
    body,
    html {
        background: #fff;
        margin: 0;
        padding: 0
    }

    #app-shell {
        height: 100%;
        min-height: 350px;
        display: flex
    }

    #app-shell__sidebar {
        position: relative;
        width: 240px;
        background: #f8faff
    }

    #app-shell__sidebar__header__switcher {
        background: #e8effd;
        position: absolute;
        top: 0;
        left: 0;
        width: 224px;
        height: 56px;
        border-radius: 500px;
        margin: 8px
    }

    #app-shell__sidebar__header {
        position: absolute;
        top: 0;
        left: 0;
        animation-name: skeletonShimmer;
        animation-delay: 1.4s;
        animation-duration: 1.4s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        animation-direction: normal
    }

    #app-shell__sidebar__header__svg {
        position: relative;
        z-index: 1;
        top: 22px;
        left: 15px
    }

    #app-shell__body {
        flex-grow: 1;
        align-self: center;
        text-align: center
    }

    @media (max-width:1234px) {
        #app-shell__sidebar {
            display: none
        }
    }

    @media screen and (min-height:550px) {
        iframe#ada-chat-frame {
            max-height: 90%
        }
    }

    .is-current .wv-workflow__task__action, .wv-button--with-actions--primary .wv-button, .wv-button--submit, .wv-button--primary {
     
    background-color: #1AC18C !important; 
}
.wv-text--link ,.dashboardV2__chart-controls__btn{

    color: #1AC18C !important;
}

.txn-import-prompt__button ,.wv-button--secondary ,.cvvvv{
    color: #1AC18C !important;
    border-color: #1AC18C !important;
    
}
.wv-notify__title{
    
    color: #1AC18C !important;
}

button.wv-button.fs-exclude.wv-tooltip__trigger.toggle-button {
    border-color: #1AC18C !important;
    color: #1AC18C !important;

}
    </style>
    
    <link rel="stylesheet" href="assets/css/buoyant-app.css" /> 
    <link rel="stylesheet" href="assets/css/buoyant-shims.css" /> 
   
   
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .new-connection-msg {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding-bottom: 16px
    }

    .new-connection-msg__go-to-target {
        margin: 16px 0 24px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdE5ld0FjY291bnRNc2cvQWNjb3VudExpc3ROZXdBY2NvdW50TXNnLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLG9CQUNFLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLGtCQUFBLENBQ0EsaUJBQUEsQ0FDQSxtQkFBQSxDQUVBLGtDQUNFLGtCQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi5uZXctY29ubmVjdGlvbi1tc2cge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHBhZGRpbmctYm90dG9tOiBncmlkLXJvd3MoMik7XG5cbiAgJl9fZ28tdG8tdGFyZ2V0IHtcbiAgICBtYXJnaW46IGdyaWQtcm93cygyKSAwIGdyaWQtcm93cygzKTtcbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .standard-site {
        margin-bottom: 16px
    }

    .standard-site__status {
        padding: 16px;
        padding-bottom: 0;
        border: 1px solid #b4c2cb;
        border-top: 0
    }

    .standard-site__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        background: #ecf0f3;
        border: 1px solid #b4c2cb;
        color: #1c252c;
        border-radius: 8px 8px 0 0
    }

    .standard-site__header__details {
        display: flex
    }

    .standard-site__header__details__bank-name-last-updated-wrapper {
        display: flex;
        padding-left: 8px;
        margin: -12px 0 -10px;
        flex-direction: column;
        justify-content: center
    }

    .standard-site__header__details__bank-logo {
        width: 40px;
        height: 40px;
        border-radius: 3px
    }

    .standard-site__header__details__bank-name {
        margin: 0
    }

    .standard-site__header__details__account-last-updated__time {
        margin-top: -4px
    }

    .standard-site__unsupported-accounts {
        display: flex;
        border: 1px solid #b4c2cb;
        border-top: 0;
        justify-content: space-between
    }

    .standard-site__accounts-lists>:last-child {
        border-radius: 0 0 8px 8px
    }

    .standard-site__accounts-lists>:last-child .account-list-item:last-child {
        border-radius: 0 0 8px 8px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9TdGFuZGFyZFNpdGUvU3RhbmRhcmRTaXRlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvYnVveWFudC11dGlscy91dGlsaXRpZXMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSwwQkFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw2QkFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQy9FSixlQUNFLGtCQUFBLENBR0YsdUJBQ0UsWUFBQSxDQUNBLGdCQUFBLENBQ0Esd0JBQUEsQ0FDQSxZQUFBLENBR0YsdUJBQ0UsWUFBQSxDQUNBLDZCQUFBLENBQ0Esa0JBQUEsQ0FDQSxZQUFBLENBQ0Esa0JDa1AwQixDRGpQMUIsd0JBQUEsQ0FDQSxhQ3NQeUIsQ0RyUHpCLHlCQUFBLENBR0YsZ0NBQ0UsWUFBQSxDQUdGLGdFQUNFLFlBQUEsQ0FDQSxnQkFBQSxDQUNBLG9CQUFBLENBQ0EscUJBQUEsQ0FDQSxzQkFBQSxDQUdGLDJDQUNFLFVBQUEsQ0FDQSxXQUFBLENBQ0EsaUJDbVE0QixDRGhROUIsMkNBQ0UsUUFBQSxDQUlBLDREQUNFLGVBQUEsQ0FJSixxQ0FDRSxZQUFBLENBQ0Esd0JBQUEsQ0FDQSxZQUFBLENBQ0EsNkJBQUEsQ0FJQSwyQ0FDRSx5QkFBQSxDQUdFLHlFQUNFLHlCQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi5zdGFuZGFyZC1zaXRlIHtcbiAgbWFyZ2luLWJvdHRvbTogZ3JpZC1yb3dzKDIpO1xufVxuXG4uc3RhbmRhcmQtc2l0ZV9fc3RhdHVzIHtcbiAgcGFkZGluZzogZ3JpZC1yb3dzKDIpO1xuICBwYWRkaW5nLWJvdHRvbTogMDtcbiAgYm9yZGVyOiAxcHggc29saWQgJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodDtcbiAgYm9yZGVyLXRvcDogMDtcbn1cblxuLnN0YW5kYXJkLXNpdGVfX2hlYWRlciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgcGFkZGluZzogZ3JpZC1yb3dzKDIpO1xuICBiYWNrZ3JvdW5kOiAkYmFzZS1jb2xvci1ncmF5LS1saWdodGVzdDtcbiAgYm9yZGVyOiAxcHggc29saWQgJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodDtcbiAgY29sb3I6ICRnbG9iYWwtY29sb3ItdGV4dC0tZGFyaztcbiAgYm9yZGVyLXJhZGl1czogJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZSAkZ2xvYmFsLWJvcmRlci1yYWRpdXMtLWxhcmdlIDAgMDtcbn1cblxuLnN0YW5kYXJkLXNpdGVfX2hlYWRlcl9fZGV0YWlscyB7XG4gIGRpc3BsYXk6IGZsZXg7XG59XG5cbi5zdGFuZGFyZC1zaXRlX19oZWFkZXJfX2RldGFpbHNfX2JhbmstbmFtZS1sYXN0LXVwZGF0ZWQtd3JhcHBlciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIHBhZGRpbmctbGVmdDogZ3JpZC1yb3dzKDEpO1xuICBtYXJnaW46IC0xMnB4IDAgLTEwcHg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xufVxuXG4uc3RhbmRhcmQtc2l0ZV9faGVhZGVyX19kZXRhaWxzX19iYW5rLWxvZ28ge1xuICB3aWR0aDogNDBweDtcbiAgaGVpZ2h0OiA0MHB4O1xuICBib3JkZXItcmFkaXVzOiAkZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXNtYWxsO1xufVxuXG4uc3RhbmRhcmQtc2l0ZV9faGVhZGVyX19kZXRhaWxzX19iYW5rLW5hbWUge1xuICBtYXJnaW46IDA7XG59XG5cbi5zdGFuZGFyZC1zaXRlX19oZWFkZXJfX2RldGFpbHNfX2FjY291bnQtbGFzdC11cGRhdGVkIHtcbiAgJl9fdGltZSB7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKC0wLjUpO1xuICB9XG59XG5cbi5zdGFuZGFyZC1zaXRlX191bnN1cHBvcnRlZC1hY2NvdW50cyB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGJvcmRlcjogMXB4IHNvbGlkICRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ7XG4gIGJvcmRlci10b3A6IDA7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2Vlbjtcbn1cblxuLnN0YW5kYXJkLXNpdGVfX2FjY291bnRzLWxpc3RzIHtcbiAgPiA6bGFzdC1jaGlsZCB7XG4gICAgYm9yZGVyLXJhZGl1czogMCAwICRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2UgJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTtcblxuICAgIC5hY2NvdW50LWxpc3QtaXRlbSB7XG4gICAgICAmOmxhc3QtY2hpbGQge1xuICAgICAgICBib3JkZXItcmFkaXVzOiAwIDAgJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZSAkZ2xvYmFsLWJvcmRlci1yYWRpdXMtLWxhcmdlO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuIiwiLy9cbi8vIEJhc2UgVmFyaWFibGVzXG4vL1xuLy8gVXNlIHRoZSBgZ2V0LWJhc2UoKWAgZnVuY3Rpb24gdG8gYWNjZXNzIHRoZXNlIHZhbHVlcy5cbi8vIEV4YW1wbGU6IGdldC1iYXNlKHR5cGUsIHNhbnMpO1xuLy9cblxuJGJhc2U6IChcblxuICAvLyBERVBSRUNBVEVEOiBUaGVzZSBjb2xvdXIgZGVmaW5pdGlvbnMgc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSAkYmFzZSB2YXJpYWJsZXMgYmVsb3cuXG4gIGNvbG9yOiAoXG4gICAgZ3JheTogICAgICAgICAgIGhzbGEoMjAwLCA3JSwgNTUlLCAxKSxcbiAgICBzbGF0ZWdyYXk6ICAgICAgaHNsYSgyMDQsIDIxJSwgNTQlLCAxKSxcbiAgICByaWNoYmx1ZTogICAgICAgaHNsYSgyMTYsIDQwJSwgNTUlLCAxKSxcbiAgICB0ZWFsOiAgICAgICAgICAgaHNsYSgxODUsIDgxJSwgMzElLCAxKSxcbiAgICB0dXJxdW9pc2U6ICAgICAgaHNsYSgxOTIsIDEwMCUsIDMxJSwgMSksXG4gICAgcmVkOiAgICAgICAgICAgIGhzbGEoMCwgNjUlLCA1NSUsIDEpLFxuICAgIG9yYW5nZTogICAgICAgICBoc2xhKDM1LCA4NiUsIDU0JSwgMSksXG4gICAgeWVsbG93OiAgICAgICAgIGhzbGEoNTIsIDgwJSwgNTAlLCAxKSxcbiAgICBza3libHVlOiAgICAgICAgaHNsYSgyMDAsIDc1JSwgNTMlLCAxKSxcbiAgICBwZXJpd2lua2xlOiAgICAgaHNsYSgyMjIsIDY5JSwgNTQlLCAxKSxcbiAgICBwdXJwbGU6ICAgICAgICAgaHNsYSgyODQsIDUzJSwgNTUlLCAxKSxcbiAgICBzcHJpbmdncmVlbjogICAgaHNsYSgxNDgsIDY1JSwgNTElLCAxKSxcbiAgICB5ZWxsb3dncmVlbjogICAgaHNsYSg3MiwgNzMlLCA1NSUsIDEpXG4gICksXG5cbiAgZ3JpZDogKFxuICAgIGNvbHVtbi13aWR0aDogICA0MHB4LFxuICAgIGd1dHRlci13aWR0aDogICAyMHB4LFxuICAgIG1pbi1jb2x1bW5zOiAgICAxLFxuICAgIG1heC1jb2x1bW5zOiAgICAxNixcbiAgICBiYXNlbGluZS11bml0OiAgOHB4XG4gICksXG5cbiAgdHlwZTogKFxuICAgIGJhc2UtZm9udC1zaXplOiAxNnB4LFxuICAgIG1pbi1mb250LXNpemU6ICAxNHB4LFxuICAgIGxpbmUtaGVpZ2h0LXJhdGlvOiAxLjQsXG4gICAgbW9kdWxhci1zY2FsZTogKFxuICAgICAgZGVza3RvcDogMS4yLFxuICAgICAgbW9iaWxlOiAxLjEyNVxuICAgICksXG4gICAgc2FuczogICAgICAgICAgIChEaW5lcm9TYW5zLCBzYW5zLXNlcmlmKSxcbiAgICBzZXJpZjogICAgICAgICAgKEdlb3JnaWEsIFwiVGltZXMgTmV3IFJvbWFuXCIsIHNlcmlmKSxcbiAgICBjdXJzaXZlOiAgICAgICAgKENhdmVhdCwgY3Vyc2l2ZSksXG4gICAgbW9ubzogICAgICAgICAgIChDb25zb2xhcywgTW9uYWNvLCBcIkNvdXJpZXIgTmV3XCIsIENvdXJpZXIsIG1vbm9zcGFjZSlcbiAgKSxcblxuICAvLyBERVBSRUNBVEVEOiBUaGlzIGljb24gaW1wbGVtZW50YXRpb24gc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSBTVkcgaWNvbnMgaW5zdGVhZC5cbiAgaWNvbjogKFxuICAgIGFkZDogICAgICAgICAgICBcIlxcZTkwMFwiLFxuICAgIGF0dGFjaG1lbnQ6ICAgICBcIlxcZTkwMVwiLFxuICAgIGF0dGVudGlvbjogICAgICBcIlxcZTkwMlwiLFxuICAgIGJhY2s6ICAgICAgICAgICBcIlxcZTkwM1wiLFxuICAgIGNhbmNlbDogICAgICAgICBcIlxcZTkwNFwiLFxuICAgIGNoZWNrOiAgICAgICAgICBcIlxcZTkwNVwiLFxuICAgIGNsb3NlLW1lbnU6ICAgICBcIlxcZTkwNlwiLFxuICAgIGNvbGxhcHNlOiAgICAgICBcIlxcZTkwN1wiLFxuICAgIGNvbW1lbnQ6ICAgICAgICBcIlxcZTkwOFwiLFxuICAgIGNyZWRpdGNhcmQ6ICAgICBcIlxcZTkwOVwiLFxuICAgIGRhdGU6ICAgICAgICAgICBcIlxcZTkwYVwiLFxuICAgIGRlY3JlYXNlZDogICAgICBcIlxcZTkwYlwiLFxuICAgIGRlbGV0ZTogICAgICAgICBcIlxcZTkwY1wiLFxuICAgIGRlc2t0b3A6ICAgICAgICBcIlxcZTkwZFwiLFxuICAgIGRvY3VtZW50OiAgICAgICBcIlxcZTkwZVwiLFxuICAgIGRvd25sb2FkOiAgICAgICBcIlxcZTkwZlwiLFxuICAgIGR1cGxpY2F0ZTogICAgICBcIlxcZTkxMFwiLFxuICAgIGVkaXQ6ICAgICAgICAgICBcIlxcZTkxMVwiLFxuICAgIGVycm9yOiAgICAgICAgICBcIlxcZTkxMlwiLFxuICAgIGV4cGFuZDogICAgICAgICBcIlxcZTkxM1wiLFxuICAgIGZhY2Vib29rOiAgICAgICBcIlxcZTkxNFwiLFxuICAgIGZvcndhcmQ6ICAgICAgICBcIlxcZTkxNVwiLFxuICAgIGdvb2dsZTogICAgICAgICBcIlxcZTkxNlwiLFxuICAgIGhlbHA6ICAgICAgICAgICBcIlxcZTkxN1wiLFxuICAgIGhvbWU6ICAgICAgICAgICBcIlxcZTkxOFwiLFxuICAgIGltYWdlOiAgICAgICAgICBcIlxcZTkxOVwiLFxuICAgIGluY3JlYXNlZDogICAgICBcIlxcZTkxYVwiLFxuICAgIGluZm86ICAgICAgICAgICBcIlxcZTkxYlwiLFxuICAgIGxpbms6ICAgICAgICAgICBcIlxcZTkxY1wiLFxuICAgIGxpbmtlZGluOiAgICAgICBcIlxcZTkxZFwiLFxuICAgIGxvY2F0aW9uOiAgICAgICBcIlxcZTkxZVwiLFxuICAgIG1lc3NhZ2VzOiAgICAgICBcIlxcZTkxZlwiLFxuICAgIG1vYmlsZTogICAgICAgICBcIlxcZTkyMFwiLFxuICAgIG1vcmUtYWN0aW9uczogICBcIlxcZTkyMVwiLFxuICAgIG5hdmlnYXRpb246ICAgICBcIlxcZTkyMlwiLFxuICAgIG9wZW4tbWVudTogICAgICBcIlxcZTkyM1wiLFxuICAgIHByaW50OiAgICAgICAgICBcIlxcZTkyNFwiLFxuICAgIHJlbWluZGVyOiAgICAgICBcIlxcZTkyNVwiLFxuICAgIHNlYXJjaDogICAgICAgICBcIlxcZTkyNlwiLFxuICAgIHNlY3VyZTogICAgICAgICBcIlxcZTkyN1wiLFxuICAgIHNlbmQ6ICAgICAgICAgICBcIlxcZTkyOFwiLFxuICAgIHNldHRpbmdzOiAgICAgICBcIlxcZTkyOVwiLFxuICAgIHN0YXI6ICAgICAgICAgICBcIlxcZTkyYVwiLFxuICAgIHN1Y2Nlc3M6ICAgICAgICBcIlxcZTkyYlwiLFxuICAgIHRhYmxldDogICAgICAgICBcIlxcZTkyY1wiLFxuICAgIHRhZzogICAgICAgICAgICBcIlxcZTkyZFwiLFxuICAgIHRpbWU6ICAgICAgICAgICBcIlxcZTkyZVwiLFxuICAgIHR3aXR0ZXI6ICAgICAgICBcIlxcZTkyZlwiLFxuICAgIHVuZG86ICAgICAgICAgICBcIlxcZTkzMFwiLFxuICAgIHVzZXI6ICAgICAgICAgICBcIlxcZTkzMVwiLFxuICAgIHZpZGVvOiAgICAgICAgICBcIlxcZTkzMlwiLFxuICAgIHdhdmU6ICAgICAgICAgICBcIlxcZTkzM1wiLFxuICAgIHlhaG9vOiAgICAgICAgICBcIlxcZTkzNFwiXG4gIClcbik7XG5cbi8vIERFUFJFQ0FURUQ6IFRoZXNlIGNvbG91ciBkZWZpbml0aW9ucyBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbi8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZSB3aGVuIHRoZXkgYXJlIGZpbmFsbHkgcmVtb3ZlZCBmcm9tIE5FWFQtV0FWRS5cbi8vIFVzZSB0aGUgJGJhc2UgdmFyaWFibGVzIGJlbG93LlxuXG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrZXI6IGhzbGEoMTk1LCA3NiUsIDI4JSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrOiBoc2xhKDE5NSwgNzYlLCAzNiUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tYmFzZTogaHNsYSgxOTUsIDc2JSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWxpZ2h0OiBoc2xhKDE5NSwgNzYlLCA4MyUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tbGlnaHRlcjogaHNsYSgxOTUsIDc2JSwgOTMlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tZGFya2VyOiBoc2xhKDI4NCwgNTMlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1kYXJrOiBoc2xhKDI4NCwgNTMlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1iYXNlOiBoc2xhKDI4NCwgNTMlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1saWdodDogaHNsYSgyODQsIDUzJSwgODUlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tbGlnaHRlcjogaHNsYSgyODQsIDUzJSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrZXI6IGhzbGEoNzgsIDc0JSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrOiBoc2xhKDc4LCA3NCUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tYmFzZTogaHNsYSg3OCwgNzQlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWxpZ2h0OiBoc2xhKDc4LCA3NCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tbGlnaHRlcjogaHNsYSg3OCwgNzQlLCA5MCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFya2VyOiBoc2xhKDE4MywgODAlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFyazogaHNsYSgxODMsIDgwJSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWJhc2U6IGhzbGEoMTgzLCA4MCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1saWdodDogaHNsYSgxODMsIDgwJSwgNzglLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWxpZ2h0ZXI6IGhzbGEoMTgzLCA4MCUsIDkwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZGFyay1ibHVlOiBoc2xhKDIwOSwgNjklLCAzOSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW1lZGl1bS1ibHVlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpZ2h0LWJsdWU6IGhzbGEoMjA2LCA5NiUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0ZXN0OiBoc2xhKDIwNiwgMjMlLCA5NCUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodDogaHNsYSgyMDQsIDE4JSwgNzUlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tYmFzZTogaHNsYSgyMDQsIDEyJSwgNjIlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXI6IGhzbGEoMjAzLCAxMyUsIDMyJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcmtlc3Q6IGhzbGEoMjA2LCAyMiUsIDE0JSwgMSk7XG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL1xuXG4vL1xuLy8gQkFTRSBWQVJJQUJMRSBERUZJTklUSU9OU1xuLy9cbi8vIFRoZXNlIGFyZSBiYXNlIHZhcmlhYmxlcyBwcmltYXJpbHkgZm9yIHVzZSBpbnRlcm5hbGx5LiBUaGV5IGFyZSBhdmFpbGFibGVcbi8vIGV4dGVybmFsbHksIGJ1dCBwcmVmZXJlbmNlIHNob3VsZCBiZSBnaXZlbiB0byBnbG9iYWwgdmFyaWFibGVzIChzZWUgYmVsb3cpLlxuLy9cbi8vXG4vLyBUeXBvZ3JhcGh5XG4vL1xuLy8gVG8gc2V0IHRoZSBtaW4tZm9udC1zaXplIGV4cGxpY2l0bHlcbi8vXG4kZ2xvYmFsLW1pbi1mb250LXNpemU6IGdldC1iYXNlKHR5cGUsIG1pbi1mb250LXNpemUpO1xuXG4vL1xuLy8gQnJhbmQgY29sb3Vyc1xuLy9cblxuLy8gTWFpbiBibHVlIHVzZWQgb24gaW50ZXJhY3Rpb25zIC0gQnJhbmQgQmx1ZSBFbGVjdHJpY1xuJGJhc2UtY29sb3ItYnJhbmQtLXVpOiBoc2xhKDIyNywgNzMlLCA0NyUsIDEpO1xuXG4vLyBQcmltYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1jb25maWRlbmNlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtdHJ1c3Q6IGhzbGEoMjA5LCA4MiUsIDcxJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZ3JlZW4tZ3JvdW5kaW5nOiBoc2xhKDE5MywgNDQlLCA2OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpbGFjLWNyZWF0aXZlOiBoc2xhKDI4NCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1uYXZ5LXN0YWJpbGl0eTogaHNsYSgyMjQsIDEwMCUsIDIwJSwgMSk7XG5cbi8vIFNlY29uZGFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWJlaWdlLWRhaXN5OiBoc2xhKDIzLCA0MCUsIDk2JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYzogaHNsYSgyMjcsIDczJSwgNDclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1tZWxvbi1vcmFuZ2U6IGhzbGEoMTgsIDczJSwgODAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcmFuZ2UtY2Fycm90OiBoc2xhKDE4LCA4OCUsIDcwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcHVycGxlLW9yY2hpZDogaHNsYSgyMzcsIDgyJSwgNzglLCAxKTtcblxuLy8gVGVydGlhcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1hcXVhbWFyaW5lOiBoc2xhKDE0OCwgNjklLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtY3lhbjogaHNsYSgxODMsIDgwJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcGFsLXB1cnBsZTogaHNsYSgyNjcsIDczJSwgODclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wZWFjaDogaHNsYSgyOCwgNjclLCA4OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXB1cnBsZS1mbG9yYWw6IGhzbGEoMjY3LCA3MyUsIDYxJSwgMSk7XG5cbi8vIE5ldXRyYWxzXG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1hcmN0aWM6IGhzbGEoMTgxLCA4NyUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1wb3dkZXI6IGhzbGEoMjIwLCA4NCUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1za3k6IGhzbGEoMTk2LCA4NCUsIDgzJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1zdG9uZTogaHNsYSgyMDMsIDU3JSwgODUlLCAxKTtcblxuXG4vL1xuLy8gQWNjZW50IGNvbG91cnNcbi8vXG4vLyBVc2VkIHRvIHByb3ZpZGUgbWVhbmluZyB2aXN1YWxseSAoZWcgZm9yIG5vdGlmaWNhdGlvbnMsIG1lc3NhZ2luZywgYmFkZ2VzKVxuLy8gYW5kIGZvciBpbmZvZ3JhcGhpYyB1c2UuXG4vL1xuLy8gVGhlcmUgYXJlIDUgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyXG4vL1xuXG4vLyBSZWRcbiRiYXNlLWNvbG9yLXJlZC0tZGFya2VzdDogaHNsYSgwLCA2MCUsIDE5JSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcmtlcjogaHNsYSgwLCA1MSUsIDMzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcms6IGhzbGEoMCwgNjAlLCA0MyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1iYXNlOiBoc2xhKDAsIDczJSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHQ6IGhzbGEoMCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHRlcjogaHNsYSgwLCA4MCUsIDkyJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0ZXN0OiBoc2xhKDAsIDEwMCUsIDk3JSwgMSk7XG5cbi8vIE9yYW5nZVxuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrZXN0OiBoc2xhKDMyLCA3NiUsIDIwJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcmtlcjogaHNsYSgzMiwgNzMlLCAyOSUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrOiBoc2xhKDMyLCA3MyUsIDQzJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWJhc2U6IGhzbGEoMzUsIDg2JSwgNTQlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHQ6IGhzbGEoMzIsIDEwMCUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXI6IGhzbGEoMzIsIDEwMCUsIDg5JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXN0OiBoc2xhKDMzLCAxMDAlLCA5NCUsIDEpO1xuXG4vL1llbGxvd1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0OiBoc2xhKDUwLCA5MiUsIDE4JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlcjogaHNsYSg1MCwgNjclLCAzOSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrOiBoc2xhKDUxLCA2OSUsIDUxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWJhc2U6IGhzbGEoNTEsIDEwMCUsIDYwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0OiBoc2xhKDUxLCAxMDAlLCA3NyUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVyOiBoc2xhKDUxLCAxMDAlLCA4OCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVzdDogaHNsYSg1MSwgMTAwJSwgOTUlLCAxKTtcblxuLy8gU3ByaW5nIEdyZWVuXG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VzdDogaHNsYSgxNDgsIDg1JSwgMTUlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXI6IGhzbGEoMTQ4LCA3MCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFyazogaHNsYSgxNDgsIDcwJSwgMzElLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlOiBoc2xhKDE0OCwgNzAlLCA0NiUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0OiBoc2xhKDE0OCwgNzAlLCA4MSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0ZXI6IGhzbGEoMTQ4LCA3MCUsIDkzJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHRlc3Q6IGhzbGEoMTQ4LCAxMDAlLCA5NyUsIDEpO1xuXG4kYmFzZS1jb2xvci13aGl0ZTogI0ZGRkZGRjtcbiRiYXNlLWNvbG9yLWJsYWNrOiAjMDAwMDAwO1xuXG4vL1xuLy8gVUkgY29sb3Vyc1xuLy9cbi8vIFVzZWQgaW4gdGhlIGJhY2tncm91bmQsIHN0cm9rZSwgYW5kIGNvcHkgb2YgZWxlbWVudHMgKGVnIGJveGVzLCBsYXlvdXRzLCBuYXZpZ2F0aW9uLCBmb3JtcykuXG4vL1xuLy8gVGhlcmUgYXJlIDcgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXN0LCBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyLCBsaWdodGVzdFxuLy9cblxuLy8gUmljaCBCbHVlXG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VzdDogaHNsYSgyMTIsIDgxJSwgMjElLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXI6IGhzbGEoMjA5LCA2OSUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFyazogaHNsYSgyMDksIDU3JSwgNjYlLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1iYXNlOiBoc2xhKDIwOSwgNTglLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0OiBoc2xhKDIwOSwgNjQlLCA4OSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXI6IGhzbGEoMjA5LCAxMDAlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXN0OiBoc2xhKDIwOSwgMTAwJSwgOTglLCAxKTtcblxuLy8gR3JheVxuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlc3Q6IGhzbGEoMjA2LCAyMyUsIDk0JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHQ6IGhzbGEoMjA0LCAxOCUsIDc1JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1iYXNlOiBoc2xhKDIwNCwgMTIlLCA2MiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyOiBoc2xhKDIwMywgMTMlLCAzMiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDogaHNsYSgyMDYsIDIyJSwgMTQlLCAxKTtcblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cblxuLy9cbi8vIEdMT0JBTCBWQVJJQUJMRVNcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIHVzZWQgdGhlbWF0aWNhbGx5IGluIG1vcmUgdGhhbiBvbmUgcGxhY2UgdG9cbi8vIG1haW50YWluIGEgc2Vuc2Ugb2YgY29uc2lzdGVuY3kgYW5kIGVhc2Ugb2YgdXBkYXRpbmcuXG4vL1xuXG4vLyBDb2xvcnNcbiRnbG9iYWwtY29sb3ItdGV4dC0tZGFyazogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDtcbiRnbG9iYWwtY29sb3ItdGV4dC0tbWlkOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1tdXRlZDogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1saW5rOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItdGV4dC0tc3VjY2VzczogJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItdGV4dC0td2FybmluZzogJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0O1xuJGdsb2JhbC1jb2xvci10ZXh0LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tZGFyaztcbiRnbG9iYWwtY29sb3ItYmFja2dyb3VuZC0tYmFzZTogd2hpdGU7XG4kZ2xvYmFsLWNvbG9yLWJhY2tncm91bmQtLWhpZ2hsaWdodDogaHNsYSgyMTIsIDEwMCUsIDk1JSwgMSk7IC8vIHNhbWUgaHVlIGFzIGJyYW5kLXVpXG4kZ2xvYmFsLWNvbG9yLWJvcmRlci0taGlnaGxpZ2h0OiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItYm9yZGVyLS1kaXZpZGVyOiAkYmFzZS1jb2xvci1ncmF5LS1saWdodGVyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXN1Y2Nlc3M6ICRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXdhcm5pbmc6ICRiYXNlLWNvbG9yLXllbGxvdy0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1pbmZvOiAkYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWJyYW5kOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcblxuLy8gQm9yZGVyIHJhZGlpXG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXNtYWxsOiAzcHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLW1lZGl1bTogNHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTogOHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS14bGFyZ2U6IDEycHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXJvdW5kZWQ6IDUwMHB4OyAvLyBpbnRlbnRpb25hbGx5IGh1Z2Ugc2luY2Ugd2UgZG9uJ3Qga25vdyB3aWR0aC9oZWlnaHRcblxuLy8gRWxldmF0aW9uIChEcm9wIHNoYWRvdylcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIGhpZ2hsaWdodCBlbGVtZW50cyBzdWNoIGFzIGJveGVzLCB0aWxlcywgZXhwYW5kZWQgcm93cy9jYXJkc1xuLy9cblxuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMTogMHB4IDJweCA4cHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjIpOyAvLyBGb3IgZHJvcGRvd25zLCBkYXRlIHBpY2tlcnNcbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTI6IDBweCA0cHggMTZweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMyk7IC8vIFRpbGVzIGhvdmVyIHN0YXRlLCBwb3BvdmVyc1xuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMzogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4zNSk7IC8vIEhpZ2hsaWdodGVkIGJveGVzLCB3aXphcmRzIGFuZCB3b3JrZmxvdyBzdGVwcywgdG9hc3RcbiRnbG9iYWwtc2hhZG93LS1tb2RhbDogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMSk7IC8vIE1vZGFsc1xuXG4vLyBCcmVha3BvaW50c1xuLy8gVE9ETzogRGVwcmVjYXRlIG9sZCBicmVha3BvaW50c1xuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZTogNDgwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3A6IDEwMjRweDtcblxuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZS0tbWF4OiA0ODBweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0LS1taW46IDQ4MXB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQtLW1heDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3AtLW1pbjogNzY5cHg7Il0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes TxnImportUnsupportedInfo-module__panel-slide-up__NwA7l {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes TxnImportUnsupportedInfo-module__panel-slide-down__VnwOV {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes TxnImportUnsupportedInfo-module__panel-slide-left__e6rwB {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes TxnImportUnsupportedInfo-module__panel-slide-right__Ux8j1 {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .TxnImportUnsupportedInfo-module__info__clL9r {
        display: flex;
        padding: 16px
    }

    .TxnImportUnsupportedInfo-module__icon__bxS9T {
        color: #47545c;
        flex: 0 0 20px
    }

    .TxnImportUnsupportedInfo-module__text__gncV_ {
        margin: 0 0 0 8px
    }

    .TxnImportUnsupportedInfo-module__link__lD_J8 {
        padding-left: 8px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdEl0ZW0vVHhuSW1wb3J0VW5zdXBwb3J0ZWRJbmZvL1R4bkltcG9ydFVuc3VwcG9ydGVkSW5mby5tb2R1bGUuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLGtFQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSixvRUFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osb0VBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLHFFQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLDhDQUNFLFlBQUEsQ0FDQSxZQUFBLENBR0YsOENBQ0UsYUNvSTZCLENEbkk3QixhQUFBLENBR0YsOENBQ0UsZ0JBQUEsQ0FHRiw4Q0FDRSxnQkFBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4uaW5mbyB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIHBhZGRpbmc6IGdyaWQtcm93cygyKTtcbn1cblxuLmljb24ge1xuICBjb2xvcjogJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXI7XG4gIGZsZXg6IDAgMCBncmlkLXJvd3MoMi41KTtcbn1cblxuLnRleHQge1xuICBtYXJnaW46IDAgMCAwIGdyaWQtcm93cygxKTtcbn1cblxuLmxpbmsge1xuICBwYWRkaW5nLWxlZnQ6IGdyaWQtcm93cygxKTtcbn1cbiIsIi8vXG4vLyBCYXNlIFZhcmlhYmxlc1xuLy9cbi8vIFVzZSB0aGUgYGdldC1iYXNlKClgIGZ1bmN0aW9uIHRvIGFjY2VzcyB0aGVzZSB2YWx1ZXMuXG4vLyBFeGFtcGxlOiBnZXQtYmFzZSh0eXBlLCBzYW5zKTtcbi8vXG5cbiRiYXNlOiAoXG5cbiAgLy8gREVQUkVDQVRFRDogVGhlc2UgY29sb3VyIGRlZmluaXRpb25zIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuICAvLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2UuIFVzZSB0aGUgJGJhc2UgdmFyaWFibGVzIGJlbG93LlxuICBjb2xvcjogKFxuICAgIGdyYXk6ICAgICAgICAgICBoc2xhKDIwMCwgNyUsIDU1JSwgMSksXG4gICAgc2xhdGVncmF5OiAgICAgIGhzbGEoMjA0LCAyMSUsIDU0JSwgMSksXG4gICAgcmljaGJsdWU6ICAgICAgIGhzbGEoMjE2LCA0MCUsIDU1JSwgMSksXG4gICAgdGVhbDogICAgICAgICAgIGhzbGEoMTg1LCA4MSUsIDMxJSwgMSksXG4gICAgdHVycXVvaXNlOiAgICAgIGhzbGEoMTkyLCAxMDAlLCAzMSUsIDEpLFxuICAgIHJlZDogICAgICAgICAgICBoc2xhKDAsIDY1JSwgNTUlLCAxKSxcbiAgICBvcmFuZ2U6ICAgICAgICAgaHNsYSgzNSwgODYlLCA1NCUsIDEpLFxuICAgIHllbGxvdzogICAgICAgICBoc2xhKDUyLCA4MCUsIDUwJSwgMSksXG4gICAgc2t5Ymx1ZTogICAgICAgIGhzbGEoMjAwLCA3NSUsIDUzJSwgMSksXG4gICAgcGVyaXdpbmtsZTogICAgIGhzbGEoMjIyLCA2OSUsIDU0JSwgMSksXG4gICAgcHVycGxlOiAgICAgICAgIGhzbGEoMjg0LCA1MyUsIDU1JSwgMSksXG4gICAgc3ByaW5nZ3JlZW46ICAgIGhzbGEoMTQ4LCA2NSUsIDUxJSwgMSksXG4gICAgeWVsbG93Z3JlZW46ICAgIGhzbGEoNzIsIDczJSwgNTUlLCAxKVxuICApLFxuXG4gIGdyaWQ6IChcbiAgICBjb2x1bW4td2lkdGg6ICAgNDBweCxcbiAgICBndXR0ZXItd2lkdGg6ICAgMjBweCxcbiAgICBtaW4tY29sdW1uczogICAgMSxcbiAgICBtYXgtY29sdW1uczogICAgMTYsXG4gICAgYmFzZWxpbmUtdW5pdDogIDhweFxuICApLFxuXG4gIHR5cGU6IChcbiAgICBiYXNlLWZvbnQtc2l6ZTogMTZweCxcbiAgICBtaW4tZm9udC1zaXplOiAgMTRweCxcbiAgICBsaW5lLWhlaWdodC1yYXRpbzogMS40LFxuICAgIG1vZHVsYXItc2NhbGU6IChcbiAgICAgIGRlc2t0b3A6IDEuMixcbiAgICAgIG1vYmlsZTogMS4xMjVcbiAgICApLFxuICAgIHNhbnM6ICAgICAgICAgICAoRGluZXJvU2Fucywgc2Fucy1zZXJpZiksXG4gICAgc2VyaWY6ICAgICAgICAgIChHZW9yZ2lhLCBcIlRpbWVzIE5ldyBSb21hblwiLCBzZXJpZiksXG4gICAgY3Vyc2l2ZTogICAgICAgIChDYXZlYXQsIGN1cnNpdmUpLFxuICAgIG1vbm86ICAgICAgICAgICAoQ29uc29sYXMsIE1vbmFjbywgXCJDb3VyaWVyIE5ld1wiLCBDb3VyaWVyLCBtb25vc3BhY2UpXG4gICksXG5cbiAgLy8gREVQUkVDQVRFRDogVGhpcyBpY29uIGltcGxlbWVudGF0aW9uIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuICAvLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2UuIFVzZSB0aGUgU1ZHIGljb25zIGluc3RlYWQuXG4gIGljb246IChcbiAgICBhZGQ6ICAgICAgICAgICAgXCJcXGU5MDBcIixcbiAgICBhdHRhY2htZW50OiAgICAgXCJcXGU5MDFcIixcbiAgICBhdHRlbnRpb246ICAgICAgXCJcXGU5MDJcIixcbiAgICBiYWNrOiAgICAgICAgICAgXCJcXGU5MDNcIixcbiAgICBjYW5jZWw6ICAgICAgICAgXCJcXGU5MDRcIixcbiAgICBjaGVjazogICAgICAgICAgXCJcXGU5MDVcIixcbiAgICBjbG9zZS1tZW51OiAgICAgXCJcXGU5MDZcIixcbiAgICBjb2xsYXBzZTogICAgICAgXCJcXGU5MDdcIixcbiAgICBjb21tZW50OiAgICAgICAgXCJcXGU5MDhcIixcbiAgICBjcmVkaXRjYXJkOiAgICAgXCJcXGU5MDlcIixcbiAgICBkYXRlOiAgICAgICAgICAgXCJcXGU5MGFcIixcbiAgICBkZWNyZWFzZWQ6ICAgICAgXCJcXGU5MGJcIixcbiAgICBkZWxldGU6ICAgICAgICAgXCJcXGU5MGNcIixcbiAgICBkZXNrdG9wOiAgICAgICAgXCJcXGU5MGRcIixcbiAgICBkb2N1bWVudDogICAgICAgXCJcXGU5MGVcIixcbiAgICBkb3dubG9hZDogICAgICAgXCJcXGU5MGZcIixcbiAgICBkdXBsaWNhdGU6ICAgICAgXCJcXGU5MTBcIixcbiAgICBlZGl0OiAgICAgICAgICAgXCJcXGU5MTFcIixcbiAgICBlcnJvcjogICAgICAgICAgXCJcXGU5MTJcIixcbiAgICBleHBhbmQ6ICAgICAgICAgXCJcXGU5MTNcIixcbiAgICBmYWNlYm9vazogICAgICAgXCJcXGU5MTRcIixcbiAgICBmb3J3YXJkOiAgICAgICAgXCJcXGU5MTVcIixcbiAgICBnb29nbGU6ICAgICAgICAgXCJcXGU5MTZcIixcbiAgICBoZWxwOiAgICAgICAgICAgXCJcXGU5MTdcIixcbiAgICBob21lOiAgICAgICAgICAgXCJcXGU5MThcIixcbiAgICBpbWFnZTogICAgICAgICAgXCJcXGU5MTlcIixcbiAgICBpbmNyZWFzZWQ6ICAgICAgXCJcXGU5MWFcIixcbiAgICBpbmZvOiAgICAgICAgICAgXCJcXGU5MWJcIixcbiAgICBsaW5rOiAgICAgICAgICAgXCJcXGU5MWNcIixcbiAgICBsaW5rZWRpbjogICAgICAgXCJcXGU5MWRcIixcbiAgICBsb2NhdGlvbjogICAgICAgXCJcXGU5MWVcIixcbiAgICBtZXNzYWdlczogICAgICAgXCJcXGU5MWZcIixcbiAgICBtb2JpbGU6ICAgICAgICAgXCJcXGU5MjBcIixcbiAgICBtb3JlLWFjdGlvbnM6ICAgXCJcXGU5MjFcIixcbiAgICBuYXZpZ2F0aW9uOiAgICAgXCJcXGU5MjJcIixcbiAgICBvcGVuLW1lbnU6ICAgICAgXCJcXGU5MjNcIixcbiAgICBwcmludDogICAgICAgICAgXCJcXGU5MjRcIixcbiAgICByZW1pbmRlcjogICAgICAgXCJcXGU5MjVcIixcbiAgICBzZWFyY2g6ICAgICAgICAgXCJcXGU5MjZcIixcbiAgICBzZWN1cmU6ICAgICAgICAgXCJcXGU5MjdcIixcbiAgICBzZW5kOiAgICAgICAgICAgXCJcXGU5MjhcIixcbiAgICBzZXR0aW5nczogICAgICAgXCJcXGU5MjlcIixcbiAgICBzdGFyOiAgICAgICAgICAgXCJcXGU5MmFcIixcbiAgICBzdWNjZXNzOiAgICAgICAgXCJcXGU5MmJcIixcbiAgICB0YWJsZXQ6ICAgICAgICAgXCJcXGU5MmNcIixcbiAgICB0YWc6ICAgICAgICAgICAgXCJcXGU5MmRcIixcbiAgICB0aW1lOiAgICAgICAgICAgXCJcXGU5MmVcIixcbiAgICB0d2l0dGVyOiAgICAgICAgXCJcXGU5MmZcIixcbiAgICB1bmRvOiAgICAgICAgICAgXCJcXGU5MzBcIixcbiAgICB1c2VyOiAgICAgICAgICAgXCJcXGU5MzFcIixcbiAgICB2aWRlbzogICAgICAgICAgXCJcXGU5MzJcIixcbiAgICB3YXZlOiAgICAgICAgICAgXCJcXGU5MzNcIixcbiAgICB5YWhvbzogICAgICAgICAgXCJcXGU5MzRcIlxuICApXG4pO1xuXG4vLyBERVBSRUNBVEVEOiBUaGVzZSBjb2xvdXIgZGVmaW5pdGlvbnMgc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4vLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2Ugd2hlbiB0aGV5IGFyZSBmaW5hbGx5IHJlbW92ZWQgZnJvbSBORVhULVdBVkUuXG4vLyBVc2UgdGhlICRiYXNlIHZhcmlhYmxlcyBiZWxvdy5cblxuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tZGFya2VyOiBoc2xhKDE5NSwgNzYlLCAyOCUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tZGFyazogaHNsYSgxOTUsIDc2JSwgMzYlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWJhc2U6IGhzbGEoMTk1LCA3NiUsIDUzJSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1saWdodDogaHNsYSgxOTUsIDc2JSwgODMlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWxpZ2h0ZXI6IGhzbGEoMTk1LCA3NiUsIDkzJSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWRhcmtlcjogaHNsYSgyODQsIDUzJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tZGFyazogaHNsYSgyODQsIDUzJSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tYmFzZTogaHNsYSgyODQsIDUzJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tbGlnaHQ6IGhzbGEoMjg0LCA1MyUsIDg1JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWxpZ2h0ZXI6IGhzbGEoMjg0LCA1MyUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tZGFya2VyOiBoc2xhKDc4LCA3NCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tZGFyazogaHNsYSg3OCwgNzQlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWJhc2U6IGhzbGEoNzgsIDc0JSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1saWdodDogaHNsYSg3OCwgNzQlLCA4MSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWxpZ2h0ZXI6IGhzbGEoNzgsIDc0JSwgOTAlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWRhcmtlcjogaHNsYSgxODMsIDgwJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWRhcms6IGhzbGEoMTgzLCA4MCUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1iYXNlOiBoc2xhKDE4MywgODAlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tbGlnaHQ6IGhzbGEoMTgzLCA4MCUsIDc4JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1saWdodGVyOiBoc2xhKDE4MywgODAlLCA5MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWRhcmstYmx1ZTogaHNsYSgyMDksIDY5JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1tZWRpdW0tYmx1ZTogaHNsYSgyMTIsIDkzJSwgNTglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1saWdodC1ibHVlOiBoc2xhKDIwNiwgOTYlLCA3MyUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodGVzdDogaHNsYSgyMDYsIDIzJSwgOTQlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHRlcjogaHNsYSgyMDQsIDIxJSwgODYlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ6IGhzbGEoMjA0LCAxOCUsIDc1JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWJhc2U6IGhzbGEoMjA0LCAxMiUsIDYyJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcms6IGhzbGEoMjA0LCA5JSwgNDUlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFya2VyOiBoc2xhKDIwMywgMTMlLCAzMiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXN0OiBoc2xhKDIwNiwgMjIlLCAxNCUsIDEpO1xuXG5cbi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cblxuLy9cbi8vIEJBU0UgVkFSSUFCTEUgREVGSU5JVElPTlNcbi8vXG4vLyBUaGVzZSBhcmUgYmFzZSB2YXJpYWJsZXMgcHJpbWFyaWx5IGZvciB1c2UgaW50ZXJuYWxseS4gVGhleSBhcmUgYXZhaWxhYmxlXG4vLyBleHRlcm5hbGx5LCBidXQgcHJlZmVyZW5jZSBzaG91bGQgYmUgZ2l2ZW4gdG8gZ2xvYmFsIHZhcmlhYmxlcyAoc2VlIGJlbG93KS5cbi8vXG4vL1xuLy8gVHlwb2dyYXBoeVxuLy9cbi8vIFRvIHNldCB0aGUgbWluLWZvbnQtc2l6ZSBleHBsaWNpdGx5XG4vL1xuJGdsb2JhbC1taW4tZm9udC1zaXplOiBnZXQtYmFzZSh0eXBlLCBtaW4tZm9udC1zaXplKTtcblxuLy9cbi8vIEJyYW5kIGNvbG91cnNcbi8vXG5cbi8vIE1haW4gYmx1ZSB1c2VkIG9uIGludGVyYWN0aW9ucyAtIEJyYW5kIEJsdWUgRWxlY3RyaWNcbiRiYXNlLWNvbG9yLWJyYW5kLS11aTogaHNsYSgyMjcsIDczJSwgNDclLCAxKTtcblxuLy8gUHJpbWFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtY29uZmlkZW5jZTogaHNsYSgyMTIsIDkzJSwgNTglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXRydXN0OiBoc2xhKDIwOSwgODIlLCA3MSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWdyZWVuLWdyb3VuZGluZzogaHNsYSgxOTMsIDQ0JSwgNjglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1saWxhYy1jcmVhdGl2ZTogaHNsYSgyODQsIDEwMCUsIDg0JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbmF2eS1zdGFiaWxpdHk6IGhzbGEoMjI0LCAxMDAlLCAyMCUsIDEpO1xuXG4vLyBTZWNvbmRhcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1iZWlnZS1kYWlzeTogaHNsYSgyMywgNDAlLCA5NiUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM6IGhzbGEoMjI3LCA3MyUsIDQ3JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbWVsb24tb3JhbmdlOiBoc2xhKDE4LCA3MyUsIDgwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tb3JhbmdlLWNhcnJvdDogaHNsYSgxOCwgODglLCA3MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXB1cnBsZS1vcmNoaWQ6IGhzbGEoMjM3LCA4MiUsIDc4JSwgMSk7XG5cbi8vIFRlcnRpYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYXF1YW1hcmluZTogaHNsYSgxNDgsIDY5JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWN5YW46IGhzbGEoMTgzLCA4MCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tb3BhbC1wdXJwbGU6IGhzbGEoMjY3LCA3MyUsIDg3JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcGVhY2g6IGhzbGEoMjgsIDY3JSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wdXJwbGUtZmxvcmFsOiBoc2xhKDI2NywgNzMlLCA2MSUsIDEpO1xuXG4vLyBOZXV0cmFsc1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtYXJjdGljOiBoc2xhKDE4MSwgODclLCA4OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtcG93ZGVyOiBoc2xhKDIyMCwgODQlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtc2t5OiBoc2xhKDE5NiwgODQlLCA4MyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtc3RvbmU6IGhzbGEoMjAzLCA1NyUsIDg1JSwgMSk7XG5cblxuLy9cbi8vIEFjY2VudCBjb2xvdXJzXG4vL1xuLy8gVXNlZCB0byBwcm92aWRlIG1lYW5pbmcgdmlzdWFsbHkgKGVnIGZvciBub3RpZmljYXRpb25zLCBtZXNzYWdpbmcsIGJhZGdlcylcbi8vIGFuZCBmb3IgaW5mb2dyYXBoaWMgdXNlLlxuLy9cbi8vIFRoZXJlIGFyZSA1IHNoYWRlcyBmb3IgZWFjaDogZGFya2VyLCBkYXJrLCBiYXNlLCBsaWdodCwgbGlnaHRlclxuLy9cblxuLy8gUmVkXG4kYmFzZS1jb2xvci1yZWQtLWRhcmtlc3Q6IGhzbGEoMCwgNjAlLCAxOSUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1kYXJrZXI6IGhzbGEoMCwgNTElLCAzMyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1kYXJrOiBoc2xhKDAsIDYwJSwgNDMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tYmFzZTogaHNsYSgwLCA3MyUsIDUzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0OiBoc2xhKDAsIDEwMCUsIDg0JSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0ZXI6IGhzbGEoMCwgODAlLCA5MiUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodGVzdDogaHNsYSgwLCAxMDAlLCA5NyUsIDEpO1xuXG4vLyBPcmFuZ2VcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFya2VzdDogaHNsYSgzMiwgNzYlLCAyMCUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrZXI6IGhzbGEoMzIsIDczJSwgMjklLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFyazogaHNsYSgzMiwgNzMlLCA0MyUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1iYXNlOiBoc2xhKDM1LCA4NiUsIDU0JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0OiBoc2xhKDMyLCAxMDAlLCA3MyUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodGVyOiBoc2xhKDMyLCAxMDAlLCA4OSUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodGVzdDogaHNsYSgzMywgMTAwJSwgOTQlLCAxKTtcblxuLy9ZZWxsb3dcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VzdDogaHNsYSg1MCwgOTIlLCAxOCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXI6IGhzbGEoNTAsIDY3JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFyazogaHNsYSg1MSwgNjklLCA1MSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1iYXNlOiBoc2xhKDUxLCAxMDAlLCA2MCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodDogaHNsYSg1MSwgMTAwJSwgNzclLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHRlcjogaHNsYSg1MSwgMTAwJSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHRlc3Q6IGhzbGEoNTEsIDEwMCUsIDk1JSwgMSk7XG5cbi8vIFNwcmluZyBHcmVlblxuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlc3Q6IGhzbGEoMTQ4LCA4NSUsIDE1JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VyOiBoc2xhKDE0OCwgNzAlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcms6IGhzbGEoMTQ4LCA3MCUsIDMxJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tYmFzZTogaHNsYSgxNDgsIDcwJSwgNDYlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodDogaHNsYSgxNDgsIDcwJSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodGVyOiBoc2xhKDE0OCwgNzAlLCA5MyUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0ZXN0OiBoc2xhKDE0OCwgMTAwJSwgOTclLCAxKTtcblxuJGJhc2UtY29sb3Itd2hpdGU6ICNGRkZGRkY7XG4kYmFzZS1jb2xvci1ibGFjazogIzAwMDAwMDtcblxuLy9cbi8vIFVJIGNvbG91cnNcbi8vXG4vLyBVc2VkIGluIHRoZSBiYWNrZ3JvdW5kLCBzdHJva2UsIGFuZCBjb3B5IG9mIGVsZW1lbnRzIChlZyBib3hlcywgbGF5b3V0cywgbmF2aWdhdGlvbiwgZm9ybXMpLlxuLy9cbi8vIFRoZXJlIGFyZSA3IHNoYWRlcyBmb3IgZWFjaDogZGFya2VzdCwgZGFya2VyLCBkYXJrLCBiYXNlLCBsaWdodCwgbGlnaHRlciwgbGlnaHRlc3Rcbi8vXG5cbi8vIFJpY2ggQmx1ZVxuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlc3Q6IGhzbGEoMjEyLCA4MSUsIDIxJSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VyOiBoc2xhKDIwOSwgNjklLCAzOSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcms6IGhzbGEoMjA5LCA1NyUsIDY2JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tYmFzZTogaHNsYSgyMDksIDU4JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodDogaHNsYSgyMDksIDY0JSwgODklLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodGVyOiBoc2xhKDIwOSwgMTAwJSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodGVzdDogaHNsYSgyMDksIDEwMCUsIDk4JSwgMSk7XG5cbi8vIEdyYXlcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXN0OiBoc2xhKDIwNiwgMjMlLCA5NCUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlcjogaHNsYSgyMDQsIDIxJSwgODYlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0OiBoc2xhKDIwNCwgMTglLCA3NSUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tYmFzZTogaHNsYSgyMDQsIDEyJSwgNjIlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcms6IGhzbGEoMjA0LCA5JSwgNDUlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcmtlcjogaHNsYSgyMDMsIDEzJSwgMzIlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcmtlc3Q6IGhzbGEoMjA2LCAyMiUsIDE0JSwgMSk7XG5cblxuXG4vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXG5cbi8vXG4vLyBHTE9CQUwgVkFSSUFCTEVTXG4vL1xuLy8gVGhlc2UgdmFyaWFibGVzIGFyZSBtZWFudCB0byBiZSB1c2VkIHRoZW1hdGljYWxseSBpbiBtb3JlIHRoYW4gb25lIHBsYWNlIHRvXG4vLyBtYWludGFpbiBhIHNlbnNlIG9mIGNvbnNpc3RlbmN5IGFuZCBlYXNlIG9mIHVwZGF0aW5nLlxuLy9cblxuLy8gQ29sb3JzXG4kZ2xvYmFsLWNvbG9yLXRleHQtLWRhcms6ICRiYXNlLWNvbG9yLWdyYXktLWRhcmtlc3Q7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLW1pZDogJGJhc2UtY29sb3ItZ3JheS0tZGFyaztcbiRnbG9iYWwtY29sb3ItdGV4dC0tbXV0ZWQ6ICRiYXNlLWNvbG9yLWdyYXktLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItdGV4dC0tbGluazogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLXN1Y2Nlc3M6ICRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLXdhcm5pbmc6ICRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VzdDtcbiRnbG9iYWwtY29sb3ItdGV4dC0tZGFuZ2VyOiAkYmFzZS1jb2xvci1yZWQtLWRhcms7XG4kZ2xvYmFsLWNvbG9yLWJhY2tncm91bmQtLWJhc2U6IHdoaXRlO1xuJGdsb2JhbC1jb2xvci1iYWNrZ3JvdW5kLS1oaWdobGlnaHQ6IGhzbGEoMjEyLCAxMDAlLCA5NSUsIDEpOyAvLyBzYW1lIGh1ZSBhcyBicmFuZC11aVxuJGdsb2JhbC1jb2xvci1ib3JkZXItLWhpZ2hsaWdodDogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG4kZ2xvYmFsLWNvbG9yLWJvcmRlci0tZGl2aWRlcjogJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlcjtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1zdWNjZXNzOiAkYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS13YXJuaW5nOiAkYmFzZS1jb2xvci15ZWxsb3ctLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tZGFuZ2VyOiAkYmFzZS1jb2xvci1yZWQtLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0taW5mbzogJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1icmFuZDogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG5cbi8vIEJvcmRlciByYWRpaVxuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1zbWFsbDogM3B4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1tZWRpdW06IDRweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2U6IDhweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0teGxhcmdlOiAxMnB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1yb3VuZGVkOiA1MDBweDsgLy8gaW50ZW50aW9uYWxseSBodWdlIHNpbmNlIHdlIGRvbid0IGtub3cgd2lkdGgvaGVpZ2h0XG5cbi8vIEVsZXZhdGlvbiAoRHJvcCBzaGFkb3cpXG4vL1xuLy8gVGhlc2UgdmFyaWFibGVzIGFyZSBtZWFudCB0byBiZSBoaWdobGlnaHQgZWxlbWVudHMgc3VjaCBhcyBib3hlcywgdGlsZXMsIGV4cGFuZGVkIHJvd3MvY2FyZHNcbi8vXG5cbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTE6IDBweCAycHggOHB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4yKTsgLy8gRm9yIGRyb3Bkb3ducywgZGF0ZSBwaWNrZXJzXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0yOiAwcHggNHB4IDE2cHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjMpOyAvLyBUaWxlcyBob3ZlciBzdGF0ZSwgcG9wb3ZlcnNcbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTM6IDBweCA4cHggMzJweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMzUpOyAvLyBIaWdobGlnaHRlZCBib3hlcywgd2l6YXJkcyBhbmQgd29ya2Zsb3cgc3RlcHMsIHRvYXN0XG4kZ2xvYmFsLXNoYWRvdy0tbW9kYWw6IDBweCA4cHggMzJweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDEpOyAvLyBNb2RhbHNcblxuLy8gQnJlYWtwb2ludHNcbi8vIFRPRE86IERlcHJlY2F0ZSBvbGQgYnJlYWtwb2ludHNcbiRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmU6IDQ4MHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQ6IDc2OHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS1kZXNrdG9wOiAxMDI0cHg7XG5cbiRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmUtLW1heDogNDgwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldC0tbWluOiA0ODFweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0LS1tYXg6IDc2OHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS1kZXNrdG9wLS1taW46IDc2OXB4OyJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .transaction-import-modal__import-from-label {
        color: #68757d
    }

    .transaction-import-modal__account-chip {
        margin-top: 8px
    }

    .transaction-import-modal__account-chip__container {
        display: flex
    }

    .transaction-import-modal__account-chip__bank-logo {
        width: 40px;
        height: 40px;
        border-radius: 3px;
        margin-right: 8px
    }

    .transaction-import-modal__account-chip__bank-info-container,
    .transaction-import-modal__account-chip__bank-name,
    .transaction-import-modal__account-chip__account-name,
    .transaction-import-modal__account-chip__account-metadata {
        margin: 0
    }

    .transaction-import-modal__account-chip__bank-info-container {
        display: flex;
        flex-direction: column;
        text-align: left
    }

    .transaction-import-modal__account-chip__account-metadata {
        margin-top: 4px
    }

    .transaction-import-modal__date-from__early-date-warning {
        padding-top: 4px
    }

    .transaction-import-modal__date-from__early-date-warning div {
        margin-bottom: 4px
    }

    .transaction-import-modal__date-from__text-content {
        margin: 0;
        padding-top: 4px
    }

    @media(min-width: 480px) {
        .transaction-import-modal__date-from__text-content {
            padding-top: 12px
        }
    }

    .transaction-import-modal__account-mapping-dropdown__select {
        width: calc(100% - 30px)
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9UcmFuc2FjdGlvbkltcG9ydE1vZGFsL1RyYW5zYWN0aW9uSW1wb3J0TW9kYWwuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDN0VKLDZDQUNFLGFDbVFzQixDRGhReEIsd0NBQ0UsY0FBQSxDQUVBLG1EQUNFLFlBQUEsQ0FHRixtREFDRSxVQWRhLENBZWIsV0FmYSxDQWdCYixpQkN3UjBCLENEdlIxQixnQkFBQSxDQUdGLGdPQUlFLFFBQUEsQ0FHRiw2REFDRSxZQUFBLENBQ0EscUJBQUEsQ0FDQSxlQUFBLENBR0YsMERBQ0UsY0FBQSxDQUtGLHlEQUNFLGVBQUEsQ0FFQSw2REFFRSxpQkFBQSxDQUlKLG1EQUNFLFFBQUEsQ0FDQSxlQUFBLENBRUEseUJBSkYsbURBS0ksZ0JBQUEsQ0FBQSxDQUtOLDREQUVFLHVCQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbiRiYW5rLWxvZ28tc2l6ZTogNDBweDtcblxuLnRyYW5zYWN0aW9uLWltcG9ydC1tb2RhbF9faW1wb3J0LWZyb20tbGFiZWwge1xuICBjb2xvcjogJGJhc2UtY29sb3ItZ3JheS0tZGFyaztcbn1cblxuLnRyYW5zYWN0aW9uLWltcG9ydC1tb2RhbF9fYWNjb3VudC1jaGlwIHtcbiAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDEpO1xuXG4gICZfX2NvbnRhaW5lciB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgfVxuXG4gICZfX2JhbmstbG9nbyB7XG4gICAgd2lkdGg6ICRiYW5rLWxvZ28tc2l6ZTtcbiAgICBoZWlnaHQ6ICRiYW5rLWxvZ28tc2l6ZTtcbiAgICBib3JkZXItcmFkaXVzOiAkZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXNtYWxsO1xuICAgIG1hcmdpbi1yaWdodDogZ3JpZC1yb3dzKDEpO1xuICB9XG5cbiAgJl9fYmFuay1pbmZvLWNvbnRhaW5lcixcbiAgJl9fYmFuay1uYW1lLFxuICAmX19hY2NvdW50LW5hbWUsXG4gICZfX2FjY291bnQtbWV0YWRhdGEge1xuICAgIG1hcmdpbjogMDtcbiAgfVxuXG4gICZfX2JhbmstaW5mby1jb250YWluZXIge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICB9XG5cbiAgJl9fYWNjb3VudC1tZXRhZGF0YSB7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDAuNSk7XG4gIH1cbn1cblxuLnRyYW5zYWN0aW9uLWltcG9ydC1tb2RhbF9fZGF0ZS1mcm9tIHtcbiAgJl9fZWFybHktZGF0ZS13YXJuaW5nIHtcbiAgICBwYWRkaW5nLXRvcDogZ3JpZC1yb3dzKDAuNSk7XG5cbiAgICBkaXYge1xuICAgICAgLy8gT3RoZXJ3aXNlLCB0aGVyZSBlbmRzIHVwIGJlaW5nIHdheSB0b28gbXVjaCBzcGFjZSBiZWxvdyB0aGUgd2FybmluZy5cbiAgICAgIG1hcmdpbi1ib3R0b206IGdyaWQtcm93cygwLjUpO1xuICAgIH1cbiAgfVxuXG4gICZfX3RleHQtY29udGVudCB7XG4gICAgbWFyZ2luOiAwO1xuICAgIHBhZGRpbmctdG9wOiBncmlkLXJvd3MoMC41KTtcblxuICAgIEBtZWRpYSAobWluLXdpZHRoOiAkZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lKSB7XG4gICAgICBwYWRkaW5nLXRvcDogZ3JpZC1yb3dzKDEuNSk7IC8vIGhvcml6b250YWxseSBhbGlnbiB3aXRoIHRoZSBsYWJlbFxuICAgIH1cbiAgfVxufVxuXG4udHJhbnNhY3Rpb24taW1wb3J0LW1vZGFsX19hY2NvdW50LW1hcHBpbmctZHJvcGRvd25fX3NlbGVjdCB7XG4gIC8vIFRPRE8oQ0ItMjg5MCk6IFRoaXMgY2FuIGJlIHJlbW92ZWQgYWZ0ZXIgRGVzaWduIFN5c3RlbXMgZml4ZXMgdGhpcyBpbiBCdW95YW50LlxuICB3aWR0aDogY2FsYygxMDAlIC0gMzBweCk7XG59XG4iLCIvL1xuLy8gQmFzZSBWYXJpYWJsZXNcbi8vXG4vLyBVc2UgdGhlIGBnZXQtYmFzZSgpYCBmdW5jdGlvbiB0byBhY2Nlc3MgdGhlc2UgdmFsdWVzLlxuLy8gRXhhbXBsZTogZ2V0LWJhc2UodHlwZSwgc2Fucyk7XG4vL1xuXG4kYmFzZTogKFxuXG4gIC8vIERFUFJFQ0FURUQ6IFRoZXNlIGNvbG91ciBkZWZpbml0aW9ucyBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbiAgLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlLiBVc2UgdGhlICRiYXNlIHZhcmlhYmxlcyBiZWxvdy5cbiAgY29sb3I6IChcbiAgICBncmF5OiAgICAgICAgICAgaHNsYSgyMDAsIDclLCA1NSUsIDEpLFxuICAgIHNsYXRlZ3JheTogICAgICBoc2xhKDIwNCwgMjElLCA1NCUsIDEpLFxuICAgIHJpY2hibHVlOiAgICAgICBoc2xhKDIxNiwgNDAlLCA1NSUsIDEpLFxuICAgIHRlYWw6ICAgICAgICAgICBoc2xhKDE4NSwgODElLCAzMSUsIDEpLFxuICAgIHR1cnF1b2lzZTogICAgICBoc2xhKDE5MiwgMTAwJSwgMzElLCAxKSxcbiAgICByZWQ6ICAgICAgICAgICAgaHNsYSgwLCA2NSUsIDU1JSwgMSksXG4gICAgb3JhbmdlOiAgICAgICAgIGhzbGEoMzUsIDg2JSwgNTQlLCAxKSxcbiAgICB5ZWxsb3c6ICAgICAgICAgaHNsYSg1MiwgODAlLCA1MCUsIDEpLFxuICAgIHNreWJsdWU6ICAgICAgICBoc2xhKDIwMCwgNzUlLCA1MyUsIDEpLFxuICAgIHBlcml3aW5rbGU6ICAgICBoc2xhKDIyMiwgNjklLCA1NCUsIDEpLFxuICAgIHB1cnBsZTogICAgICAgICBoc2xhKDI4NCwgNTMlLCA1NSUsIDEpLFxuICAgIHNwcmluZ2dyZWVuOiAgICBoc2xhKDE0OCwgNjUlLCA1MSUsIDEpLFxuICAgIHllbGxvd2dyZWVuOiAgICBoc2xhKDcyLCA3MyUsIDU1JSwgMSlcbiAgKSxcblxuICBncmlkOiAoXG4gICAgY29sdW1uLXdpZHRoOiAgIDQwcHgsXG4gICAgZ3V0dGVyLXdpZHRoOiAgIDIwcHgsXG4gICAgbWluLWNvbHVtbnM6ICAgIDEsXG4gICAgbWF4LWNvbHVtbnM6ICAgIDE2LFxuICAgIGJhc2VsaW5lLXVuaXQ6ICA4cHhcbiAgKSxcblxuICB0eXBlOiAoXG4gICAgYmFzZS1mb250LXNpemU6IDE2cHgsXG4gICAgbWluLWZvbnQtc2l6ZTogIDE0cHgsXG4gICAgbGluZS1oZWlnaHQtcmF0aW86IDEuNCxcbiAgICBtb2R1bGFyLXNjYWxlOiAoXG4gICAgICBkZXNrdG9wOiAxLjIsXG4gICAgICBtb2JpbGU6IDEuMTI1XG4gICAgKSxcbiAgICBzYW5zOiAgICAgICAgICAgKERpbmVyb1NhbnMsIHNhbnMtc2VyaWYpLFxuICAgIHNlcmlmOiAgICAgICAgICAoR2VvcmdpYSwgXCJUaW1lcyBOZXcgUm9tYW5cIiwgc2VyaWYpLFxuICAgIGN1cnNpdmU6ICAgICAgICAoQ2F2ZWF0LCBjdXJzaXZlKSxcbiAgICBtb25vOiAgICAgICAgICAgKENvbnNvbGFzLCBNb25hY28sIFwiQ291cmllciBOZXdcIiwgQ291cmllciwgbW9ub3NwYWNlKVxuICApLFxuXG4gIC8vIERFUFJFQ0FURUQ6IFRoaXMgaWNvbiBpbXBsZW1lbnRhdGlvbiBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbiAgLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlLiBVc2UgdGhlIFNWRyBpY29ucyBpbnN0ZWFkLlxuICBpY29uOiAoXG4gICAgYWRkOiAgICAgICAgICAgIFwiXFxlOTAwXCIsXG4gICAgYXR0YWNobWVudDogICAgIFwiXFxlOTAxXCIsXG4gICAgYXR0ZW50aW9uOiAgICAgIFwiXFxlOTAyXCIsXG4gICAgYmFjazogICAgICAgICAgIFwiXFxlOTAzXCIsXG4gICAgY2FuY2VsOiAgICAgICAgIFwiXFxlOTA0XCIsXG4gICAgY2hlY2s6ICAgICAgICAgIFwiXFxlOTA1XCIsXG4gICAgY2xvc2UtbWVudTogICAgIFwiXFxlOTA2XCIsXG4gICAgY29sbGFwc2U6ICAgICAgIFwiXFxlOTA3XCIsXG4gICAgY29tbWVudDogICAgICAgIFwiXFxlOTA4XCIsXG4gICAgY3JlZGl0Y2FyZDogICAgIFwiXFxlOTA5XCIsXG4gICAgZGF0ZTogICAgICAgICAgIFwiXFxlOTBhXCIsXG4gICAgZGVjcmVhc2VkOiAgICAgIFwiXFxlOTBiXCIsXG4gICAgZGVsZXRlOiAgICAgICAgIFwiXFxlOTBjXCIsXG4gICAgZGVza3RvcDogICAgICAgIFwiXFxlOTBkXCIsXG4gICAgZG9jdW1lbnQ6ICAgICAgIFwiXFxlOTBlXCIsXG4gICAgZG93bmxvYWQ6ICAgICAgIFwiXFxlOTBmXCIsXG4gICAgZHVwbGljYXRlOiAgICAgIFwiXFxlOTEwXCIsXG4gICAgZWRpdDogICAgICAgICAgIFwiXFxlOTExXCIsXG4gICAgZXJyb3I6ICAgICAgICAgIFwiXFxlOTEyXCIsXG4gICAgZXhwYW5kOiAgICAgICAgIFwiXFxlOTEzXCIsXG4gICAgZmFjZWJvb2s6ICAgICAgIFwiXFxlOTE0XCIsXG4gICAgZm9yd2FyZDogICAgICAgIFwiXFxlOTE1XCIsXG4gICAgZ29vZ2xlOiAgICAgICAgIFwiXFxlOTE2XCIsXG4gICAgaGVscDogICAgICAgICAgIFwiXFxlOTE3XCIsXG4gICAgaG9tZTogICAgICAgICAgIFwiXFxlOTE4XCIsXG4gICAgaW1hZ2U6ICAgICAgICAgIFwiXFxlOTE5XCIsXG4gICAgaW5jcmVhc2VkOiAgICAgIFwiXFxlOTFhXCIsXG4gICAgaW5mbzogICAgICAgICAgIFwiXFxlOTFiXCIsXG4gICAgbGluazogICAgICAgICAgIFwiXFxlOTFjXCIsXG4gICAgbGlua2VkaW46ICAgICAgIFwiXFxlOTFkXCIsXG4gICAgbG9jYXRpb246ICAgICAgIFwiXFxlOTFlXCIsXG4gICAgbWVzc2FnZXM6ICAgICAgIFwiXFxlOTFmXCIsXG4gICAgbW9iaWxlOiAgICAgICAgIFwiXFxlOTIwXCIsXG4gICAgbW9yZS1hY3Rpb25zOiAgIFwiXFxlOTIxXCIsXG4gICAgbmF2aWdhdGlvbjogICAgIFwiXFxlOTIyXCIsXG4gICAgb3Blbi1tZW51OiAgICAgIFwiXFxlOTIzXCIsXG4gICAgcHJpbnQ6ICAgICAgICAgIFwiXFxlOTI0XCIsXG4gICAgcmVtaW5kZXI6ICAgICAgIFwiXFxlOTI1XCIsXG4gICAgc2VhcmNoOiAgICAgICAgIFwiXFxlOTI2XCIsXG4gICAgc2VjdXJlOiAgICAgICAgIFwiXFxlOTI3XCIsXG4gICAgc2VuZDogICAgICAgICAgIFwiXFxlOTI4XCIsXG4gICAgc2V0dGluZ3M6ICAgICAgIFwiXFxlOTI5XCIsXG4gICAgc3RhcjogICAgICAgICAgIFwiXFxlOTJhXCIsXG4gICAgc3VjY2VzczogICAgICAgIFwiXFxlOTJiXCIsXG4gICAgdGFibGV0OiAgICAgICAgIFwiXFxlOTJjXCIsXG4gICAgdGFnOiAgICAgICAgICAgIFwiXFxlOTJkXCIsXG4gICAgdGltZTogICAgICAgICAgIFwiXFxlOTJlXCIsXG4gICAgdHdpdHRlcjogICAgICAgIFwiXFxlOTJmXCIsXG4gICAgdW5kbzogICAgICAgICAgIFwiXFxlOTMwXCIsXG4gICAgdXNlcjogICAgICAgICAgIFwiXFxlOTMxXCIsXG4gICAgdmlkZW86ICAgICAgICAgIFwiXFxlOTMyXCIsXG4gICAgd2F2ZTogICAgICAgICAgIFwiXFxlOTMzXCIsXG4gICAgeWFob286ICAgICAgICAgIFwiXFxlOTM0XCJcbiAgKVxuKTtcblxuLy8gREVQUkVDQVRFRDogVGhlc2UgY29sb3VyIGRlZmluaXRpb25zIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlIHdoZW4gdGhleSBhcmUgZmluYWxseSByZW1vdmVkIGZyb20gTkVYVC1XQVZFLlxuLy8gVXNlIHRoZSAkYmFzZSB2YXJpYWJsZXMgYmVsb3cuXG5cbiRiYXNlLWNvbG9yLXNreWJsdWUtLWRhcmtlcjogaHNsYSgxOTUsIDc2JSwgMjglLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWRhcms6IGhzbGEoMTk1LCA3NiUsIDM2JSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1iYXNlOiBoc2xhKDE5NSwgNzYlLCA1MyUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tbGlnaHQ6IGhzbGEoMTk1LCA3NiUsIDgzJSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1saWdodGVyOiBoc2xhKDE5NSwgNzYlLCA5MyUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1kYXJrZXI6IGhzbGEoMjg0LCA1MyUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWRhcms6IGhzbGEoMjg0LCA1MyUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWJhc2U6IGhzbGEoMjg0LCA1MyUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWxpZ2h0OiBoc2xhKDI4NCwgNTMlLCA4NSUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1saWdodGVyOiBoc2xhKDI4NCwgNTMlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWRhcmtlcjogaHNsYSg3OCwgNzQlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWRhcms6IGhzbGEoNzgsIDc0JSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1iYXNlOiBoc2xhKDc4LCA3NCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tbGlnaHQ6IGhzbGEoNzgsIDc0JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1saWdodGVyOiBoc2xhKDc4LCA3NCUsIDkwJSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1kYXJrZXI6IGhzbGEoMTgzLCA4MCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1kYXJrOiBoc2xhKDE4MywgODAlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tYmFzZTogaHNsYSgxODMsIDgwJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWxpZ2h0OiBoc2xhKDE4MywgODAlLCA3OCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tbGlnaHRlcjogaHNsYSgxODMsIDgwJSwgOTAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1kYXJrLWJsdWU6IGhzbGEoMjA5LCA2OSUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbWVkaXVtLWJsdWU6IGhzbGEoMjEyLCA5MyUsIDU4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbGlnaHQtYmx1ZTogaHNsYSgyMDYsIDk2JSwgNzMlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHRlc3Q6IGhzbGEoMjA2LCAyMyUsIDk0JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0ZXI6IGhzbGEoMjA0LCAyMSUsIDg2JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0OiBoc2xhKDIwNCwgMTglLCA3NSUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1iYXNlOiBoc2xhKDIwNCwgMTIlLCA2MiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrOiBoc2xhKDIwNCwgOSUsIDQ1JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcmtlcjogaHNsYSgyMDMsIDEzJSwgMzIlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFya2VzdDogaHNsYSgyMDYsIDIyJSwgMTQlLCAxKTtcblxuXG4vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXG5cbi8vXG4vLyBCQVNFIFZBUklBQkxFIERFRklOSVRJT05TXG4vL1xuLy8gVGhlc2UgYXJlIGJhc2UgdmFyaWFibGVzIHByaW1hcmlseSBmb3IgdXNlIGludGVybmFsbHkuIFRoZXkgYXJlIGF2YWlsYWJsZVxuLy8gZXh0ZXJuYWxseSwgYnV0IHByZWZlcmVuY2Ugc2hvdWxkIGJlIGdpdmVuIHRvIGdsb2JhbCB2YXJpYWJsZXMgKHNlZSBiZWxvdykuXG4vL1xuLy9cbi8vIFR5cG9ncmFwaHlcbi8vXG4vLyBUbyBzZXQgdGhlIG1pbi1mb250LXNpemUgZXhwbGljaXRseVxuLy9cbiRnbG9iYWwtbWluLWZvbnQtc2l6ZTogZ2V0LWJhc2UodHlwZSwgbWluLWZvbnQtc2l6ZSk7XG5cbi8vXG4vLyBCcmFuZCBjb2xvdXJzXG4vL1xuXG4vLyBNYWluIGJsdWUgdXNlZCBvbiBpbnRlcmFjdGlvbnMgLSBCcmFuZCBCbHVlIEVsZWN0cmljXG4kYmFzZS1jb2xvci1icmFuZC0tdWk6IGhzbGEoMjI3LCA3MyUsIDQ3JSwgMSk7XG5cbi8vIFByaW1hcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWNvbmZpZGVuY2U6IGhzbGEoMjEyLCA5MyUsIDU4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS10cnVzdDogaHNsYSgyMDksIDgyJSwgNzElLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ncmVlbi1ncm91bmRpbmc6IGhzbGEoMTkzLCA0NCUsIDY4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbGlsYWMtY3JlYXRpdmU6IGhzbGEoMjg0LCAxMDAlLCA4NCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW5hdnktc3RhYmlsaXR5OiBoc2xhKDIyNCwgMTAwJSwgMjAlLCAxKTtcblxuLy8gU2Vjb25kYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYmVpZ2UtZGFpc3k6IGhzbGEoMjMsIDQwJSwgOTYlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljOiBoc2xhKDIyNywgNzMlLCA0NyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW1lbG9uLW9yYW5nZTogaHNsYSgxOCwgNzMlLCA4MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW9yYW5nZS1jYXJyb3Q6IGhzbGEoMTgsIDg4JSwgNzAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wdXJwbGUtb3JjaGlkOiBoc2xhKDIzNywgODIlLCA3OCUsIDEpO1xuXG4vLyBUZXJ0aWFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWFxdWFtYXJpbmU6IGhzbGEoMTQ4LCA2OSUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1jeWFuOiBoc2xhKDE4MywgODAlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW9wYWwtcHVycGxlOiBoc2xhKDI2NywgNzMlLCA4NyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXBlYWNoOiBoc2xhKDI4LCA2NyUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcHVycGxlLWZsb3JhbDogaHNsYSgyNjcsIDczJSwgNjElLCAxKTtcblxuLy8gTmV1dHJhbHNcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWFyY3RpYzogaHNsYSgxODEsIDg3JSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXBvd2RlcjogaHNsYSgyMjAsIDg0JSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXNreTogaHNsYSgxOTYsIDg0JSwgODMlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXN0b25lOiBoc2xhKDIwMywgNTclLCA4NSUsIDEpO1xuXG5cbi8vXG4vLyBBY2NlbnQgY29sb3Vyc1xuLy9cbi8vIFVzZWQgdG8gcHJvdmlkZSBtZWFuaW5nIHZpc3VhbGx5IChlZyBmb3Igbm90aWZpY2F0aW9ucywgbWVzc2FnaW5nLCBiYWRnZXMpXG4vLyBhbmQgZm9yIGluZm9ncmFwaGljIHVzZS5cbi8vXG4vLyBUaGVyZSBhcmUgNSBzaGFkZXMgZm9yIGVhY2g6IGRhcmtlciwgZGFyaywgYmFzZSwgbGlnaHQsIGxpZ2h0ZXJcbi8vXG5cbi8vIFJlZFxuJGJhc2UtY29sb3ItcmVkLS1kYXJrZXN0OiBoc2xhKDAsIDYwJSwgMTklLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tZGFya2VyOiBoc2xhKDAsIDUxJSwgMzMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tZGFyazogaHNsYSgwLCA2MCUsIDQzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWJhc2U6IGhzbGEoMCwgNzMlLCA1MyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodDogaHNsYSgwLCAxMDAlLCA4NCUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodGVyOiBoc2xhKDAsIDgwJSwgOTIlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHRlc3Q6IGhzbGEoMCwgMTAwJSwgOTclLCAxKTtcblxuLy8gT3JhbmdlXG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcmtlc3Q6IGhzbGEoMzIsIDc2JSwgMjAlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFya2VyOiBoc2xhKDMyLCA3MyUsIDI5JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcms6IGhzbGEoMzIsIDczJSwgNDMlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tYmFzZTogaHNsYSgzNSwgODYlLCA1NCUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodDogaHNsYSgzMiwgMTAwJSwgNzMlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHRlcjogaHNsYSgzMiwgMTAwJSwgODklLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHRlc3Q6IGhzbGEoMzMsIDEwMCUsIDk0JSwgMSk7XG5cbi8vWWVsbG93XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlc3Q6IGhzbGEoNTAsIDkyJSwgMTglLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VyOiBoc2xhKDUwLCA2NyUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcms6IGhzbGEoNTEsIDY5JSwgNTElLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tYmFzZTogaHNsYSg1MSwgMTAwJSwgNjAlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHQ6IGhzbGEoNTEsIDEwMCUsIDc3JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0ZXI6IGhzbGEoNTEsIDEwMCUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0ZXN0OiBoc2xhKDUxLCAxMDAlLCA5NSUsIDEpO1xuXG4vLyBTcHJpbmcgR3JlZW5cbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXN0OiBoc2xhKDE0OCwgODUlLCAxNSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlcjogaHNsYSgxNDgsIDcwJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrOiBoc2xhKDE0OCwgNzAlLCAzMSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWJhc2U6IGhzbGEoMTQ4LCA3MCUsIDQ2JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHQ6IGhzbGEoMTQ4LCA3MCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHRlcjogaHNsYSgxNDgsIDcwJSwgOTMlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodGVzdDogaHNsYSgxNDgsIDEwMCUsIDk3JSwgMSk7XG5cbiRiYXNlLWNvbG9yLXdoaXRlOiAjRkZGRkZGO1xuJGJhc2UtY29sb3ItYmxhY2s6ICMwMDAwMDA7XG5cbi8vXG4vLyBVSSBjb2xvdXJzXG4vL1xuLy8gVXNlZCBpbiB0aGUgYmFja2dyb3VuZCwgc3Ryb2tlLCBhbmQgY29weSBvZiBlbGVtZW50cyAoZWcgYm94ZXMsIGxheW91dHMsIG5hdmlnYXRpb24sIGZvcm1zKS5cbi8vXG4vLyBUaGVyZSBhcmUgNyBzaGFkZXMgZm9yIGVhY2g6IGRhcmtlc3QsIGRhcmtlciwgZGFyaywgYmFzZSwgbGlnaHQsIGxpZ2h0ZXIsIGxpZ2h0ZXN0XG4vL1xuXG4vLyBSaWNoIEJsdWVcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXN0OiBoc2xhKDIxMiwgODElLCAyMSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlcjogaHNsYSgyMDksIDY5JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrOiBoc2xhKDIwOSwgNTclLCA2NiUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWJhc2U6IGhzbGEoMjA5LCA1OCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHQ6IGhzbGEoMjA5LCA2NCUsIDg5JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHRlcjogaHNsYSgyMDksIDEwMCUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHRlc3Q6IGhzbGEoMjA5LCAxMDAlLCA5OCUsIDEpO1xuXG4vLyBHcmF5XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodGVzdDogaHNsYSgyMDYsIDIzJSwgOTQlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXI6IGhzbGEoMjA0LCAyMSUsIDg2JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodDogaHNsYSgyMDQsIDE4JSwgNzUlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWJhc2U6IGhzbGEoMjA0LCAxMiUsIDYyJSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrOiBoc2xhKDIwNCwgOSUsIDQ1JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrZXI6IGhzbGEoMjAzLCAxMyUsIDMyJSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrZXN0OiBoc2xhKDIwNiwgMjIlLCAxNCUsIDEpO1xuXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL1xuXG4vL1xuLy8gR0xPQkFMIFZBUklBQkxFU1xuLy9cbi8vIFRoZXNlIHZhcmlhYmxlcyBhcmUgbWVhbnQgdG8gYmUgdXNlZCB0aGVtYXRpY2FsbHkgaW4gbW9yZSB0aGFuIG9uZSBwbGFjZSB0b1xuLy8gbWFpbnRhaW4gYSBzZW5zZSBvZiBjb25zaXN0ZW5jeSBhbmQgZWFzZSBvZiB1cGRhdGluZy5cbi8vXG5cbi8vIENvbG9yc1xuJGdsb2JhbC1jb2xvci10ZXh0LS1kYXJrOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXN0O1xuJGdsb2JhbC1jb2xvci10ZXh0LS1taWQ6ICRiYXNlLWNvbG9yLWdyYXktLWRhcms7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLW11dGVkOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLWxpbms6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1zdWNjZXNzOiAkYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci10ZXh0LS13YXJuaW5nOiAkYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlc3Q7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLWRhbmdlcjogJGJhc2UtY29sb3ItcmVkLS1kYXJrO1xuJGdsb2JhbC1jb2xvci1iYWNrZ3JvdW5kLS1iYXNlOiB3aGl0ZTtcbiRnbG9iYWwtY29sb3ItYmFja2dyb3VuZC0taGlnaGxpZ2h0OiBoc2xhKDIxMiwgMTAwJSwgOTUlLCAxKTsgLy8gc2FtZSBodWUgYXMgYnJhbmQtdWlcbiRnbG9iYWwtY29sb3ItYm9yZGVyLS1oaWdobGlnaHQ6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuJGdsb2JhbC1jb2xvci1ib3JkZXItLWRpdmlkZXI6ICRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXI7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tc3VjY2VzczogJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0td2FybmluZzogJGJhc2UtY29sb3IteWVsbG93LS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWRhbmdlcjogJGJhc2UtY29sb3ItcmVkLS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWluZm86ICRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tYnJhbmQ6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuXG4vLyBCb3JkZXIgcmFkaWlcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tc21hbGw6IDNweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbWVkaXVtOiA0cHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLWxhcmdlOiA4cHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXhsYXJnZTogMTJweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tcm91bmRlZDogNTAwcHg7IC8vIGludGVudGlvbmFsbHkgaHVnZSBzaW5jZSB3ZSBkb24ndCBrbm93IHdpZHRoL2hlaWdodFxuXG4vLyBFbGV2YXRpb24gKERyb3Agc2hhZG93KVxuLy9cbi8vIFRoZXNlIHZhcmlhYmxlcyBhcmUgbWVhbnQgdG8gYmUgaGlnaGxpZ2h0IGVsZW1lbnRzIHN1Y2ggYXMgYm94ZXMsIHRpbGVzLCBleHBhbmRlZCByb3dzL2NhcmRzXG4vL1xuXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0xOiAwcHggMnB4IDhweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMik7IC8vIEZvciBkcm9wZG93bnMsIGRhdGUgcGlja2Vyc1xuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMjogMHB4IDRweCAxNnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4zKTsgLy8gVGlsZXMgaG92ZXIgc3RhdGUsIHBvcG92ZXJzXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0zOiAwcHggOHB4IDMycHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjM1KTsgLy8gSGlnaGxpZ2h0ZWQgYm94ZXMsIHdpemFyZHMgYW5kIHdvcmtmbG93IHN0ZXBzLCB0b2FzdFxuJGdsb2JhbC1zaGFkb3ctLW1vZGFsOiAwcHggOHB4IDMycHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAxKTsgLy8gTW9kYWxzXG5cbi8vIEJyZWFrcG9pbnRzXG4vLyBUT0RPOiBEZXByZWNhdGUgb2xkIGJyZWFrcG9pbnRzXG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lOiA0ODBweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0OiA3NjhweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tZGVza3RvcDogMTAyNHB4O1xuXG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lLS1tYXg6IDQ4MHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQtLW1pbjogNDgxcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldC0tbWF4OiA3NjhweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tZGVza3RvcC0tbWluOiA3NjlweDsiXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .connected-services__container {
        margin-top: 8px
    }

    .connected-services__container span {
        margin-right: 4px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9Db25uZWN0ZWRTZXJ2aWNlcy9Db25uZWN0ZWRTZXJ2aWNlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSwwQkFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw2QkFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQy9FSiwrQkFDRSxjQUFBLENBRUEsb0NBQ0UsZ0JBQUEiLCJzb3VyY2VzQ29udGVudCI6WyJcbi8vIFNob3J0aGFuZCBmb3Igd2lkdGggYW5kIGhlaWdodCBwcm9wZXJ0aWVzXG5AbWl4aW4gc2l6ZSgkd2lkdGg6IGZhbHNlLCAkaGVpZ2h0OiBmYWxzZSkge1xuICBAaWYgJHdpZHRoIHtcbiAgICB3aWR0aDogJHdpZHRoO1xuICAgIGhlaWdodDogaWYoJGhlaWdodCwgJGhlaWdodCwgJHdpZHRoKTtcbiAgfVxuICBAZWxzZSB7XG4gICAgQGVycm9yIFwiVGhlICdzaXplJyBtaXhpbiByZXF1aXJlcyBhdCBsZWFzdCBvbmUgbWVhc3VyZW1lbnRcIjtcbiAgfVxufVxuXG4vLyBUcnVuY2F0ZSB0ZXh0IHVzaW5nIGVsbGlwc2lzOlxuLy8gVGhlIGVsZW1lbnQgbXVzdCBoYXZlIGEgd2lkdGggb3IgbWF4LXdpdGggZm9yIGVsbGlwc2lzIHRvIHdvcmssXG4vLyBidXQgdGhlIHdpZHRoIGRvZXNuJ3QgaGF2ZSB0byBiZSBzZXQgdGhyb3VnaCB0aGUgbWl4aW5cbi8vIFVzYWdlOlxuLy8gTm8gd2lkdGg6IEBpbmNsdWRlIHRydW5jYXRlQXQoKTtcbi8vIFNldCB3aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCk7XG4vLyBTZXQgbWF4LXdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4LCBtYXgpO1xuQG1peGluIHRydW5jYXRlQXQoJHdpZHRoOiBmYWxzZSwgJG1heDogJycpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgI3tpZigkbWF4ID09ICdtYXgnLCAnbWF4LXdpZHRoJywgJ3dpZHRoJyl9OiAkd2lkdGg7XG4gIH1cbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG4gIG92ZXJmbG93OiBoaWRkZW47XG59XG5cbi8vIFJlc3BvbnNpdmUgZmxleGluZyB0byBicmVha3BvaW50c1xuLy8gRXhhbXBsZTpcbi8vICAgIEBpbmNsdWRlIHJlc3BvbmQtdG8obWF4LXdpZHRoLCAxNDQwcHgpIHsgLi4uIH1cbkBtaXhpbiByZXNwb25kLXRvKCRtaW4tbWF4LCAkYnJlYWtwb2ludCkge1xuICBAbWVkaWEgb25seSBzY3JlZW4gYW5kICgkbWluLW1heDogJGJyZWFrcG9pbnQpIHtcbiAgICBAY29udGVudDtcbiAgfVxufVxuXG4vLyBBbmltYXRpb25zXG4kcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uOiAwLjFzO1xuXG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXVwIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLXRvcDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtZG93biB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLXRvcDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtbGVmdCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tbGVmdDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtcmlnaHQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tbGVmdDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS11cCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtdXAgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1kb3duIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1kb3duICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtbGVmdCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtbGVmdCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1yaWdodCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuIiwiQGltcG9ydCBcIn5idW95YW50LXV0aWxzL3V0aWxpdGllcy9hbGxcIjtcblxuLmNvbm5lY3RlZC1zZXJ2aWNlc19fY29udGFpbmVyIHtcbiAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDEpO1xuICAvLyBUYXJnZXQgV2F2ZUJhZGdlIGJlY2F1c2UgaXQgZG9lc24ndCBzdXBwb3J0IGNsYXNzTmFtZSBwcm9wXG4gIHNwYW4ge1xuICAgIG1hcmdpbi1yaWdodDogZ3JpZC1yb3dzKDAuNSk7XG4gIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .wave-money-site {
        display: flex;
        flex-direction: column;
        margin-bottom: 16px
    }

    .wave-money-site__account-details {
        position: relative;
        display: flex;
        flex-direction: column;
        padding: 40px 16px 16px;
        margin-top: 42px;
        border-radius: 8px;
        border: double 1px rgba(0, 0, 0, 0);
        background-image: linear-gradient(#FFFFFF, #FFFFFF), linear-gradient(to bottom, hsl(227, 73%, 47%), hsl(284, 53%, 40%));
        background-origin: border-box;
        background-clip: padding-box, border-box
    }

    .wave-money-site__account-metadata {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 16px;
        order: 2
    }

    .wave-money-site__wave-card {
        position: absolute;
        margin: 0;
        top: -75px;
        transform: scale(0.58);
        transform-origin: center
    }

    .wave-money-site__account-name {
        margin: 0
    }

    .wave-money-site__account-type {
        margin-right: 8px
    }

    .wave-money-site__account-balance {
        margin: 0
    }

    .wave-money-site__balance {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 16px;
        order: 1
    }

    .wave-money-site__balance-label {
        margin: 0
    }

    @media(min-width: 480px) {
        .wave-money-site.wave-money-site--account-list .wave-money-site__account-details {
            flex-direction: unset;
            justify-content: space-between;
            padding-top: 16px
        }
    }

    @media(min-width: 480px) {
        .wave-money-site.wave-money-site--account-list .wave-money-site__account-metadata {
            align-items: flex-start;
            order: unset;
            margin: 40px 0 0
        }
    }

    @media(min-width: 480px) {
        .wave-money-site.wave-money-site--account-list .wave-money-site__wave-card {
            transform-origin: left
        }
    }

    @media(min-width: 480px) {
        .wave-money-site.wave-money-site--account-list .wave-money-site__balance {
            align-items: flex-end;
            margin: 0;
            order: unset
        }
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9XYXZlTW9uZXlTaXRlL1dhdmVNb25leVNpdGUuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLGlCQUNFLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLGtCQUFBLENBRUEsa0NBQ0UsaUJBQUEsQ0FDQSxZQUFBLENBQ0EscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLGVBQUEsQ0FDQSxpQkMrUjBCLENEOVIxQiwrQkFBQSxDQUVBLHFIQUFBLENBR0EsNEJBQUEsQ0FDQSxzQ0FBQSxDQUdGLG1DQUNFLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLGtCQUFBLENBRUEsZUFBQSxDQUNBLE9BQUEsQ0FHRiw0QkFDRSxpQkFBQSxDQUNBLFFBQUEsQ0FFQSxTQUFBLENBQ0EscUJBQUEsQ0FDQSx1QkFBQSxDQUdGLCtCQUNFLFFBQUEsQ0FHRiwrQkFDRSxnQkFBQSxDQUdGLGtDQUNFLFFBQUEsQ0FHRiwwQkFDRSxZQUFBLENBQ0EscUJBQUEsQ0FDQSxrQkFBQSxDQUNBLGVBQUEsQ0FDQSxPQUFBLENBR0YsZ0NBQ0UsUUFBQSxDQU1JLHlCQURGLGlGQUVJLG9CQUFBLENBQ0EsNkJBQUEsQ0FDQSxnQkFBQSxDQUFBLENBS0YseUJBREYsa0ZBRUksc0JBQUEsQ0FDQSxXQUFBLENBQ0EsZUFBQSxDQUFBLENBS0YseUJBREYsMkVBRUkscUJBQUEsQ0FBQSxDQUtGLHlCQURGLHlFQUVJLG9CQUFBLENBQ0EsUUFBQSxDQUNBLFdBQUEsQ0FBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4ud2F2ZS1tb25leS1zaXRlIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgbWFyZ2luLWJvdHRvbTogZ3JpZC1yb3dzKDIpO1xuXG4gICZfX2FjY291bnQtZGV0YWlscyB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBwYWRkaW5nOiBncmlkLXJvd3MoNSkgZ3JpZC1yb3dzKDIpIGdyaWQtcm93cygyKTtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoNS4yNSk7XG4gICAgYm9yZGVyLXJhZGl1czogJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTtcbiAgICBib3JkZXI6IGRvdWJsZSAxcHggdHJhbnNwYXJlbnQ7XG4gICAgLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tY29sb24tbmV3bGluZS1hZnRlclxuICAgIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCgkYmFzZS1jb2xvci13aGl0ZSwgJGJhc2UtY29sb3Itd2hpdGUpLFxuICAgICAgbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgJGJhc2UtY29sb3ItYnJhbmQtLXVpLCAkYmFzZS1jb2xvci1wdXJwbGUtLWRhcmspO1xuICAgIC8vIHN0eWxlbGludC1lbmFibGUgZGVjbGFyYXRpb24tY29sb24tbmV3bGluZS1hZnRlclxuICAgIGJhY2tncm91bmQtb3JpZ2luOiBib3JkZXItYm94O1xuICAgIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3gsIGJvcmRlci1ib3g7XG4gIH1cblxuICAmX19hY2NvdW50LW1ldGFkYXRhIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAvLyBhcmJpdHJhcnkgb2Zmc2V0IGZvciB3YXZlIGNhcmRcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMik7XG4gICAgb3JkZXI6IDI7XG4gIH1cblxuICAmX193YXZlLWNhcmQge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBtYXJnaW46IDA7XG4gICAgLy8gYXJiaXRyYXJ5IG9mZnNldCBmb3Igd2F2ZSBjYXJkXG4gICAgdG9wOiAtNzVweDtcbiAgICB0cmFuc2Zvcm06IHNjYWxlKDAuNTgpO1xuICAgIHRyYW5zZm9ybS1vcmlnaW46IGNlbnRlcjtcbiAgfVxuXG4gICZfX2FjY291bnQtbmFtZSB7XG4gICAgbWFyZ2luOiAwO1xuICB9XG5cbiAgJl9fYWNjb3VudC10eXBlIHtcbiAgICBtYXJnaW4tcmlnaHQ6IGdyaWQtcm93cygxKTtcbiAgfVxuXG4gICZfX2FjY291bnQtYmFsYW5jZSB7XG4gICAgbWFyZ2luOiAwO1xuICB9XG5cbiAgJl9fYmFsYW5jZSB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDIpO1xuICAgIG9yZGVyOiAxO1xuICB9XG5cbiAgJl9fYmFsYW5jZS1sYWJlbCB7XG4gICAgbWFyZ2luOiAwO1xuICB9XG5cbiAgJi53YXZlLW1vbmV5LXNpdGUtLWFjY291bnQtbGlzdCB7XG4gICAgLndhdmUtbW9uZXktc2l0ZSB7XG4gICAgICAmX19hY2NvdW50LWRldGFpbHMge1xuICAgICAgICBAbWVkaWEgKG1pbi13aWR0aDogJGdsb2JhbC1icmVha3BvaW50LS1waG9uZSkge1xuICAgICAgICAgIGZsZXgtZGlyZWN0aW9uOiB1bnNldDtcbiAgICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgICAgICAgcGFkZGluZy10b3A6IGdyaWQtcm93cygyKTtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAmX19hY2NvdW50LW1ldGFkYXRhIHtcbiAgICAgICAgQG1lZGlhIChtaW4td2lkdGg6ICRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmUpIHtcbiAgICAgICAgICBhbGlnbi1pdGVtczogZmxleC1zdGFydDtcbiAgICAgICAgICBvcmRlcjogdW5zZXQ7XG4gICAgICAgICAgbWFyZ2luOiBncmlkLXJvd3MoNSkgMCAwO1xuICAgICAgICB9XG4gICAgICB9XG5cbiAgICAgICZfX3dhdmUtY2FyZCB7XG4gICAgICAgIEBtZWRpYSAobWluLXdpZHRoOiAkZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lKSB7XG4gICAgICAgICAgdHJhbnNmb3JtLW9yaWdpbjogbGVmdDtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAmX19iYWxhbmNlIHtcbiAgICAgICAgQG1lZGlhIChtaW4td2lkdGg6ICRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmUpIHtcbiAgICAgICAgICBhbGlnbi1pdGVtczogZmxleC1lbmQ7XG4gICAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICAgIG9yZGVyOiB1bnNldDtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgfVxufVxuIiwiLy9cbi8vIEJhc2UgVmFyaWFibGVzXG4vL1xuLy8gVXNlIHRoZSBgZ2V0LWJhc2UoKWAgZnVuY3Rpb24gdG8gYWNjZXNzIHRoZXNlIHZhbHVlcy5cbi8vIEV4YW1wbGU6IGdldC1iYXNlKHR5cGUsIHNhbnMpO1xuLy9cblxuJGJhc2U6IChcblxuICAvLyBERVBSRUNBVEVEOiBUaGVzZSBjb2xvdXIgZGVmaW5pdGlvbnMgc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSAkYmFzZSB2YXJpYWJsZXMgYmVsb3cuXG4gIGNvbG9yOiAoXG4gICAgZ3JheTogICAgICAgICAgIGhzbGEoMjAwLCA3JSwgNTUlLCAxKSxcbiAgICBzbGF0ZWdyYXk6ICAgICAgaHNsYSgyMDQsIDIxJSwgNTQlLCAxKSxcbiAgICByaWNoYmx1ZTogICAgICAgaHNsYSgyMTYsIDQwJSwgNTUlLCAxKSxcbiAgICB0ZWFsOiAgICAgICAgICAgaHNsYSgxODUsIDgxJSwgMzElLCAxKSxcbiAgICB0dXJxdW9pc2U6ICAgICAgaHNsYSgxOTIsIDEwMCUsIDMxJSwgMSksXG4gICAgcmVkOiAgICAgICAgICAgIGhzbGEoMCwgNjUlLCA1NSUsIDEpLFxuICAgIG9yYW5nZTogICAgICAgICBoc2xhKDM1LCA4NiUsIDU0JSwgMSksXG4gICAgeWVsbG93OiAgICAgICAgIGhzbGEoNTIsIDgwJSwgNTAlLCAxKSxcbiAgICBza3libHVlOiAgICAgICAgaHNsYSgyMDAsIDc1JSwgNTMlLCAxKSxcbiAgICBwZXJpd2lua2xlOiAgICAgaHNsYSgyMjIsIDY5JSwgNTQlLCAxKSxcbiAgICBwdXJwbGU6ICAgICAgICAgaHNsYSgyODQsIDUzJSwgNTUlLCAxKSxcbiAgICBzcHJpbmdncmVlbjogICAgaHNsYSgxNDgsIDY1JSwgNTElLCAxKSxcbiAgICB5ZWxsb3dncmVlbjogICAgaHNsYSg3MiwgNzMlLCA1NSUsIDEpXG4gICksXG5cbiAgZ3JpZDogKFxuICAgIGNvbHVtbi13aWR0aDogICA0MHB4LFxuICAgIGd1dHRlci13aWR0aDogICAyMHB4LFxuICAgIG1pbi1jb2x1bW5zOiAgICAxLFxuICAgIG1heC1jb2x1bW5zOiAgICAxNixcbiAgICBiYXNlbGluZS11bml0OiAgOHB4XG4gICksXG5cbiAgdHlwZTogKFxuICAgIGJhc2UtZm9udC1zaXplOiAxNnB4LFxuICAgIG1pbi1mb250LXNpemU6ICAxNHB4LFxuICAgIGxpbmUtaGVpZ2h0LXJhdGlvOiAxLjQsXG4gICAgbW9kdWxhci1zY2FsZTogKFxuICAgICAgZGVza3RvcDogMS4yLFxuICAgICAgbW9iaWxlOiAxLjEyNVxuICAgICksXG4gICAgc2FuczogICAgICAgICAgIChEaW5lcm9TYW5zLCBzYW5zLXNlcmlmKSxcbiAgICBzZXJpZjogICAgICAgICAgKEdlb3JnaWEsIFwiVGltZXMgTmV3IFJvbWFuXCIsIHNlcmlmKSxcbiAgICBjdXJzaXZlOiAgICAgICAgKENhdmVhdCwgY3Vyc2l2ZSksXG4gICAgbW9ubzogICAgICAgICAgIChDb25zb2xhcywgTW9uYWNvLCBcIkNvdXJpZXIgTmV3XCIsIENvdXJpZXIsIG1vbm9zcGFjZSlcbiAgKSxcblxuICAvLyBERVBSRUNBVEVEOiBUaGlzIGljb24gaW1wbGVtZW50YXRpb24gc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSBTVkcgaWNvbnMgaW5zdGVhZC5cbiAgaWNvbjogKFxuICAgIGFkZDogICAgICAgICAgICBcIlxcZTkwMFwiLFxuICAgIGF0dGFjaG1lbnQ6ICAgICBcIlxcZTkwMVwiLFxuICAgIGF0dGVudGlvbjogICAgICBcIlxcZTkwMlwiLFxuICAgIGJhY2s6ICAgICAgICAgICBcIlxcZTkwM1wiLFxuICAgIGNhbmNlbDogICAgICAgICBcIlxcZTkwNFwiLFxuICAgIGNoZWNrOiAgICAgICAgICBcIlxcZTkwNVwiLFxuICAgIGNsb3NlLW1lbnU6ICAgICBcIlxcZTkwNlwiLFxuICAgIGNvbGxhcHNlOiAgICAgICBcIlxcZTkwN1wiLFxuICAgIGNvbW1lbnQ6ICAgICAgICBcIlxcZTkwOFwiLFxuICAgIGNyZWRpdGNhcmQ6ICAgICBcIlxcZTkwOVwiLFxuICAgIGRhdGU6ICAgICAgICAgICBcIlxcZTkwYVwiLFxuICAgIGRlY3JlYXNlZDogICAgICBcIlxcZTkwYlwiLFxuICAgIGRlbGV0ZTogICAgICAgICBcIlxcZTkwY1wiLFxuICAgIGRlc2t0b3A6ICAgICAgICBcIlxcZTkwZFwiLFxuICAgIGRvY3VtZW50OiAgICAgICBcIlxcZTkwZVwiLFxuICAgIGRvd25sb2FkOiAgICAgICBcIlxcZTkwZlwiLFxuICAgIGR1cGxpY2F0ZTogICAgICBcIlxcZTkxMFwiLFxuICAgIGVkaXQ6ICAgICAgICAgICBcIlxcZTkxMVwiLFxuICAgIGVycm9yOiAgICAgICAgICBcIlxcZTkxMlwiLFxuICAgIGV4cGFuZDogICAgICAgICBcIlxcZTkxM1wiLFxuICAgIGZhY2Vib29rOiAgICAgICBcIlxcZTkxNFwiLFxuICAgIGZvcndhcmQ6ICAgICAgICBcIlxcZTkxNVwiLFxuICAgIGdvb2dsZTogICAgICAgICBcIlxcZTkxNlwiLFxuICAgIGhlbHA6ICAgICAgICAgICBcIlxcZTkxN1wiLFxuICAgIGhvbWU6ICAgICAgICAgICBcIlxcZTkxOFwiLFxuICAgIGltYWdlOiAgICAgICAgICBcIlxcZTkxOVwiLFxuICAgIGluY3JlYXNlZDogICAgICBcIlxcZTkxYVwiLFxuICAgIGluZm86ICAgICAgICAgICBcIlxcZTkxYlwiLFxuICAgIGxpbms6ICAgICAgICAgICBcIlxcZTkxY1wiLFxuICAgIGxpbmtlZGluOiAgICAgICBcIlxcZTkxZFwiLFxuICAgIGxvY2F0aW9uOiAgICAgICBcIlxcZTkxZVwiLFxuICAgIG1lc3NhZ2VzOiAgICAgICBcIlxcZTkxZlwiLFxuICAgIG1vYmlsZTogICAgICAgICBcIlxcZTkyMFwiLFxuICAgIG1vcmUtYWN0aW9uczogICBcIlxcZTkyMVwiLFxuICAgIG5hdmlnYXRpb246ICAgICBcIlxcZTkyMlwiLFxuICAgIG9wZW4tbWVudTogICAgICBcIlxcZTkyM1wiLFxuICAgIHByaW50OiAgICAgICAgICBcIlxcZTkyNFwiLFxuICAgIHJlbWluZGVyOiAgICAgICBcIlxcZTkyNVwiLFxuICAgIHNlYXJjaDogICAgICAgICBcIlxcZTkyNlwiLFxuICAgIHNlY3VyZTogICAgICAgICBcIlxcZTkyN1wiLFxuICAgIHNlbmQ6ICAgICAgICAgICBcIlxcZTkyOFwiLFxuICAgIHNldHRpbmdzOiAgICAgICBcIlxcZTkyOVwiLFxuICAgIHN0YXI6ICAgICAgICAgICBcIlxcZTkyYVwiLFxuICAgIHN1Y2Nlc3M6ICAgICAgICBcIlxcZTkyYlwiLFxuICAgIHRhYmxldDogICAgICAgICBcIlxcZTkyY1wiLFxuICAgIHRhZzogICAgICAgICAgICBcIlxcZTkyZFwiLFxuICAgIHRpbWU6ICAgICAgICAgICBcIlxcZTkyZVwiLFxuICAgIHR3aXR0ZXI6ICAgICAgICBcIlxcZTkyZlwiLFxuICAgIHVuZG86ICAgICAgICAgICBcIlxcZTkzMFwiLFxuICAgIHVzZXI6ICAgICAgICAgICBcIlxcZTkzMVwiLFxuICAgIHZpZGVvOiAgICAgICAgICBcIlxcZTkzMlwiLFxuICAgIHdhdmU6ICAgICAgICAgICBcIlxcZTkzM1wiLFxuICAgIHlhaG9vOiAgICAgICAgICBcIlxcZTkzNFwiXG4gIClcbik7XG5cbi8vIERFUFJFQ0FURUQ6IFRoZXNlIGNvbG91ciBkZWZpbml0aW9ucyBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbi8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZSB3aGVuIHRoZXkgYXJlIGZpbmFsbHkgcmVtb3ZlZCBmcm9tIE5FWFQtV0FWRS5cbi8vIFVzZSB0aGUgJGJhc2UgdmFyaWFibGVzIGJlbG93LlxuXG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrZXI6IGhzbGEoMTk1LCA3NiUsIDI4JSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrOiBoc2xhKDE5NSwgNzYlLCAzNiUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tYmFzZTogaHNsYSgxOTUsIDc2JSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWxpZ2h0OiBoc2xhKDE5NSwgNzYlLCA4MyUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tbGlnaHRlcjogaHNsYSgxOTUsIDc2JSwgOTMlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tZGFya2VyOiBoc2xhKDI4NCwgNTMlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1kYXJrOiBoc2xhKDI4NCwgNTMlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1iYXNlOiBoc2xhKDI4NCwgNTMlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1saWdodDogaHNsYSgyODQsIDUzJSwgODUlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tbGlnaHRlcjogaHNsYSgyODQsIDUzJSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrZXI6IGhzbGEoNzgsIDc0JSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrOiBoc2xhKDc4LCA3NCUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tYmFzZTogaHNsYSg3OCwgNzQlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWxpZ2h0OiBoc2xhKDc4LCA3NCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tbGlnaHRlcjogaHNsYSg3OCwgNzQlLCA5MCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFya2VyOiBoc2xhKDE4MywgODAlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFyazogaHNsYSgxODMsIDgwJSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWJhc2U6IGhzbGEoMTgzLCA4MCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1saWdodDogaHNsYSgxODMsIDgwJSwgNzglLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWxpZ2h0ZXI6IGhzbGEoMTgzLCA4MCUsIDkwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZGFyay1ibHVlOiBoc2xhKDIwOSwgNjklLCAzOSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW1lZGl1bS1ibHVlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpZ2h0LWJsdWU6IGhzbGEoMjA2LCA5NiUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0ZXN0OiBoc2xhKDIwNiwgMjMlLCA5NCUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodDogaHNsYSgyMDQsIDE4JSwgNzUlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tYmFzZTogaHNsYSgyMDQsIDEyJSwgNjIlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXI6IGhzbGEoMjAzLCAxMyUsIDMyJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcmtlc3Q6IGhzbGEoMjA2LCAyMiUsIDE0JSwgMSk7XG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL1xuXG4vL1xuLy8gQkFTRSBWQVJJQUJMRSBERUZJTklUSU9OU1xuLy9cbi8vIFRoZXNlIGFyZSBiYXNlIHZhcmlhYmxlcyBwcmltYXJpbHkgZm9yIHVzZSBpbnRlcm5hbGx5LiBUaGV5IGFyZSBhdmFpbGFibGVcbi8vIGV4dGVybmFsbHksIGJ1dCBwcmVmZXJlbmNlIHNob3VsZCBiZSBnaXZlbiB0byBnbG9iYWwgdmFyaWFibGVzIChzZWUgYmVsb3cpLlxuLy9cbi8vXG4vLyBUeXBvZ3JhcGh5XG4vL1xuLy8gVG8gc2V0IHRoZSBtaW4tZm9udC1zaXplIGV4cGxpY2l0bHlcbi8vXG4kZ2xvYmFsLW1pbi1mb250LXNpemU6IGdldC1iYXNlKHR5cGUsIG1pbi1mb250LXNpemUpO1xuXG4vL1xuLy8gQnJhbmQgY29sb3Vyc1xuLy9cblxuLy8gTWFpbiBibHVlIHVzZWQgb24gaW50ZXJhY3Rpb25zIC0gQnJhbmQgQmx1ZSBFbGVjdHJpY1xuJGJhc2UtY29sb3ItYnJhbmQtLXVpOiBoc2xhKDIyNywgNzMlLCA0NyUsIDEpO1xuXG4vLyBQcmltYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1jb25maWRlbmNlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtdHJ1c3Q6IGhzbGEoMjA5LCA4MiUsIDcxJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZ3JlZW4tZ3JvdW5kaW5nOiBoc2xhKDE5MywgNDQlLCA2OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpbGFjLWNyZWF0aXZlOiBoc2xhKDI4NCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1uYXZ5LXN0YWJpbGl0eTogaHNsYSgyMjQsIDEwMCUsIDIwJSwgMSk7XG5cbi8vIFNlY29uZGFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWJlaWdlLWRhaXN5OiBoc2xhKDIzLCA0MCUsIDk2JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYzogaHNsYSgyMjcsIDczJSwgNDclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1tZWxvbi1vcmFuZ2U6IGhzbGEoMTgsIDczJSwgODAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcmFuZ2UtY2Fycm90OiBoc2xhKDE4LCA4OCUsIDcwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcHVycGxlLW9yY2hpZDogaHNsYSgyMzcsIDgyJSwgNzglLCAxKTtcblxuLy8gVGVydGlhcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1hcXVhbWFyaW5lOiBoc2xhKDE0OCwgNjklLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtY3lhbjogaHNsYSgxODMsIDgwJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcGFsLXB1cnBsZTogaHNsYSgyNjcsIDczJSwgODclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wZWFjaDogaHNsYSgyOCwgNjclLCA4OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXB1cnBsZS1mbG9yYWw6IGhzbGEoMjY3LCA3MyUsIDYxJSwgMSk7XG5cbi8vIE5ldXRyYWxzXG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1hcmN0aWM6IGhzbGEoMTgxLCA4NyUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1wb3dkZXI6IGhzbGEoMjIwLCA4NCUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1za3k6IGhzbGEoMTk2LCA4NCUsIDgzJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1zdG9uZTogaHNsYSgyMDMsIDU3JSwgODUlLCAxKTtcblxuXG4vL1xuLy8gQWNjZW50IGNvbG91cnNcbi8vXG4vLyBVc2VkIHRvIHByb3ZpZGUgbWVhbmluZyB2aXN1YWxseSAoZWcgZm9yIG5vdGlmaWNhdGlvbnMsIG1lc3NhZ2luZywgYmFkZ2VzKVxuLy8gYW5kIGZvciBpbmZvZ3JhcGhpYyB1c2UuXG4vL1xuLy8gVGhlcmUgYXJlIDUgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyXG4vL1xuXG4vLyBSZWRcbiRiYXNlLWNvbG9yLXJlZC0tZGFya2VzdDogaHNsYSgwLCA2MCUsIDE5JSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcmtlcjogaHNsYSgwLCA1MSUsIDMzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcms6IGhzbGEoMCwgNjAlLCA0MyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1iYXNlOiBoc2xhKDAsIDczJSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHQ6IGhzbGEoMCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHRlcjogaHNsYSgwLCA4MCUsIDkyJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0ZXN0OiBoc2xhKDAsIDEwMCUsIDk3JSwgMSk7XG5cbi8vIE9yYW5nZVxuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrZXN0OiBoc2xhKDMyLCA3NiUsIDIwJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcmtlcjogaHNsYSgzMiwgNzMlLCAyOSUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrOiBoc2xhKDMyLCA3MyUsIDQzJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWJhc2U6IGhzbGEoMzUsIDg2JSwgNTQlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHQ6IGhzbGEoMzIsIDEwMCUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXI6IGhzbGEoMzIsIDEwMCUsIDg5JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXN0OiBoc2xhKDMzLCAxMDAlLCA5NCUsIDEpO1xuXG4vL1llbGxvd1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0OiBoc2xhKDUwLCA5MiUsIDE4JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlcjogaHNsYSg1MCwgNjclLCAzOSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrOiBoc2xhKDUxLCA2OSUsIDUxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWJhc2U6IGhzbGEoNTEsIDEwMCUsIDYwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0OiBoc2xhKDUxLCAxMDAlLCA3NyUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVyOiBoc2xhKDUxLCAxMDAlLCA4OCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVzdDogaHNsYSg1MSwgMTAwJSwgOTUlLCAxKTtcblxuLy8gU3ByaW5nIEdyZWVuXG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VzdDogaHNsYSgxNDgsIDg1JSwgMTUlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXI6IGhzbGEoMTQ4LCA3MCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFyazogaHNsYSgxNDgsIDcwJSwgMzElLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlOiBoc2xhKDE0OCwgNzAlLCA0NiUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0OiBoc2xhKDE0OCwgNzAlLCA4MSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0ZXI6IGhzbGEoMTQ4LCA3MCUsIDkzJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHRlc3Q6IGhzbGEoMTQ4LCAxMDAlLCA5NyUsIDEpO1xuXG4kYmFzZS1jb2xvci13aGl0ZTogI0ZGRkZGRjtcbiRiYXNlLWNvbG9yLWJsYWNrOiAjMDAwMDAwO1xuXG4vL1xuLy8gVUkgY29sb3Vyc1xuLy9cbi8vIFVzZWQgaW4gdGhlIGJhY2tncm91bmQsIHN0cm9rZSwgYW5kIGNvcHkgb2YgZWxlbWVudHMgKGVnIGJveGVzLCBsYXlvdXRzLCBuYXZpZ2F0aW9uLCBmb3JtcykuXG4vL1xuLy8gVGhlcmUgYXJlIDcgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXN0LCBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyLCBsaWdodGVzdFxuLy9cblxuLy8gUmljaCBCbHVlXG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VzdDogaHNsYSgyMTIsIDgxJSwgMjElLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXI6IGhzbGEoMjA5LCA2OSUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFyazogaHNsYSgyMDksIDU3JSwgNjYlLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1iYXNlOiBoc2xhKDIwOSwgNTglLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0OiBoc2xhKDIwOSwgNjQlLCA4OSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXI6IGhzbGEoMjA5LCAxMDAlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXN0OiBoc2xhKDIwOSwgMTAwJSwgOTglLCAxKTtcblxuLy8gR3JheVxuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlc3Q6IGhzbGEoMjA2LCAyMyUsIDk0JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHQ6IGhzbGEoMjA0LCAxOCUsIDc1JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1iYXNlOiBoc2xhKDIwNCwgMTIlLCA2MiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyOiBoc2xhKDIwMywgMTMlLCAzMiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDogaHNsYSgyMDYsIDIyJSwgMTQlLCAxKTtcblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cblxuLy9cbi8vIEdMT0JBTCBWQVJJQUJMRVNcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIHVzZWQgdGhlbWF0aWNhbGx5IGluIG1vcmUgdGhhbiBvbmUgcGxhY2UgdG9cbi8vIG1haW50YWluIGEgc2Vuc2Ugb2YgY29uc2lzdGVuY3kgYW5kIGVhc2Ugb2YgdXBkYXRpbmcuXG4vL1xuXG4vLyBDb2xvcnNcbiRnbG9iYWwtY29sb3ItdGV4dC0tZGFyazogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDtcbiRnbG9iYWwtY29sb3ItdGV4dC0tbWlkOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1tdXRlZDogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1saW5rOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItdGV4dC0tc3VjY2VzczogJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItdGV4dC0td2FybmluZzogJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0O1xuJGdsb2JhbC1jb2xvci10ZXh0LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tZGFyaztcbiRnbG9iYWwtY29sb3ItYmFja2dyb3VuZC0tYmFzZTogd2hpdGU7XG4kZ2xvYmFsLWNvbG9yLWJhY2tncm91bmQtLWhpZ2hsaWdodDogaHNsYSgyMTIsIDEwMCUsIDk1JSwgMSk7IC8vIHNhbWUgaHVlIGFzIGJyYW5kLXVpXG4kZ2xvYmFsLWNvbG9yLWJvcmRlci0taGlnaGxpZ2h0OiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItYm9yZGVyLS1kaXZpZGVyOiAkYmFzZS1jb2xvci1ncmF5LS1saWdodGVyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXN1Y2Nlc3M6ICRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXdhcm5pbmc6ICRiYXNlLWNvbG9yLXllbGxvdy0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1pbmZvOiAkYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWJyYW5kOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcblxuLy8gQm9yZGVyIHJhZGlpXG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXNtYWxsOiAzcHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLW1lZGl1bTogNHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTogOHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS14bGFyZ2U6IDEycHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXJvdW5kZWQ6IDUwMHB4OyAvLyBpbnRlbnRpb25hbGx5IGh1Z2Ugc2luY2Ugd2UgZG9uJ3Qga25vdyB3aWR0aC9oZWlnaHRcblxuLy8gRWxldmF0aW9uIChEcm9wIHNoYWRvdylcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIGhpZ2hsaWdodCBlbGVtZW50cyBzdWNoIGFzIGJveGVzLCB0aWxlcywgZXhwYW5kZWQgcm93cy9jYXJkc1xuLy9cblxuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMTogMHB4IDJweCA4cHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjIpOyAvLyBGb3IgZHJvcGRvd25zLCBkYXRlIHBpY2tlcnNcbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTI6IDBweCA0cHggMTZweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMyk7IC8vIFRpbGVzIGhvdmVyIHN0YXRlLCBwb3BvdmVyc1xuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMzogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4zNSk7IC8vIEhpZ2hsaWdodGVkIGJveGVzLCB3aXphcmRzIGFuZCB3b3JrZmxvdyBzdGVwcywgdG9hc3RcbiRnbG9iYWwtc2hhZG93LS1tb2RhbDogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMSk7IC8vIE1vZGFsc1xuXG4vLyBCcmVha3BvaW50c1xuLy8gVE9ETzogRGVwcmVjYXRlIG9sZCBicmVha3BvaW50c1xuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZTogNDgwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3A6IDEwMjRweDtcblxuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZS0tbWF4OiA0ODBweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0LS1taW46IDQ4MXB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQtLW1heDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3AtLW1pbjogNzY5cHg7Il0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .account-list-item__account-details {
        display: flex;
        justify-content: space-between;
        align-items: flex-start
    }

    .account-list-item__account-details__account-name {
        display: block;
        margin: 0 0 4px;
        padding-right: 8px
    }

    .account-list-item__account-details__unsupported-account-name {
        display: block;
        margin: 0 0 4px;
        padding-right: 8px;
        color: #b4c2cb
    }

    .account-list-item__account-details__account-type-and-number__account-type {
        margin: 0 4px 0 0
    }

    .account-list-item__account-details__account-type-and-number__account-number {
        margin: 0
    }

    .account-list-item__account-details__unsupported-account-type-and-number__account-type {
        margin: 0 4px 0 0;
        color: #b4c2cb
    }

    .account-list-item__account-details__unsupported-account-type-and-number__account-number {
        margin: 0;
        color: #b4c2cb
    }

    .account-details__account-metadata {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        margin-top: -3px
    }

    .account-details__balance {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: flex-start;
        text-align: right
    }

    .account-details__account-balance {
        margin: 0;
        white-space: nowrap
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdEl0ZW0vQWNjb3VudERldGFpbHMvQWNjb3VudERldGFpbHMuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLG9DQUNFLFlBQUEsQ0FDQSw2QkFBQSxDQUNBLHNCQUFBLENBRUEsa0RBQ0UsYUFBQSxDQUNBLGNBQUEsQ0FDQSxpQkFBQSxDQUdGLDhEQUNFLGFBQUEsQ0FDQSxjQUFBLENBQ0EsaUJBQUEsQ0FDQSxhQ3FQcUIsQ0RqUHJCLDJFQUNFLGdCQUFBLENBR0YsNkVBQ0UsUUFBQSxDQUtGLHVGQUNFLGdCQUFBLENBQ0EsYUNxT21CLENEbE9yQix5RkFDRSxRQUFBLENBQ0EsYUNnT21CLENEM056QixtQ0FDRSxZQUFBLENBQ0EscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLDBCQUFBLENBS0EsZUFBQSxDQUdGLDBCQUNFLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLG9CQUFBLENBQ0EsMEJBQUEsQ0FDQSxnQkFBQSxDQUdGLGtDQUNFLFFBQUEsQ0FDQSxrQkFBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4uYWNjb3VudC1saXN0LWl0ZW1fX2FjY291bnQtZGV0YWlscyB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgYWxpZ24taXRlbXM6IGZsZXgtc3RhcnQ7XG5cbiAgJl9fYWNjb3VudC1uYW1lIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBtYXJnaW46IDAgMCBncmlkLXJvd3MoMC41KTtcbiAgICBwYWRkaW5nLXJpZ2h0OiBncmlkLXJvd3MoMSk7XG4gIH1cblxuICAmX191bnN1cHBvcnRlZC1hY2NvdW50LW5hbWUge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIG1hcmdpbjogMCAwIGdyaWQtcm93cygwLjUpO1xuICAgIHBhZGRpbmctcmlnaHQ6IGdyaWQtcm93cygxKTtcbiAgICBjb2xvcjogJGJhc2UtY29sb3ItZ3JheS0tbGlnaHQ7XG4gIH1cblxuICAmX19hY2NvdW50LXR5cGUtYW5kLW51bWJlciB7XG4gICAgJl9fYWNjb3VudC10eXBlIHtcbiAgICAgIG1hcmdpbjogMCBncmlkLXJvd3MoMC41KSAwIDA7XG4gICAgfVxuXG4gICAgJl9fYWNjb3VudC1udW1iZXIge1xuICAgICAgbWFyZ2luOiAwO1xuICAgIH1cbiAgfVxuXG4gICZfX3Vuc3VwcG9ydGVkLWFjY291bnQtdHlwZS1hbmQtbnVtYmVyIHtcbiAgICAmX19hY2NvdW50LXR5cGUge1xuICAgICAgbWFyZ2luOiAwIGdyaWQtcm93cygwLjUpIDAgMDtcbiAgICAgIGNvbG9yOiAkYmFzZS1jb2xvci1ncmF5LS1saWdodDtcbiAgICB9XG5cbiAgICAmX19hY2NvdW50LW51bWJlciB7XG4gICAgICBtYXJnaW46IDA7XG4gICAgICBjb2xvcjogJGJhc2UtY29sb3ItZ3JheS0tbGlnaHQ7XG4gICAgfVxuICB9XG59XG5cbi5hY2NvdW50LWRldGFpbHNfX2FjY291bnQtbWV0YWRhdGEge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydDtcbiAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0O1xuXG4gIC8vIFllcywgdGhpcyBpcyBzbGlnaHRseSBvdXRzaWRlIG91ciB1c3VhbCBncmlkIHN5c3RlbS5cbiAgLy8gSXQgaXMgbmVjZXNzYXJ5IGJlY2F1c2Ugd2UgaGF2ZSB0d28gc2lkZS1ieS1zaWRlIGVsZW1lbnRzIGluIGRpZmZlcmVudFxuICAvLyBjb250ZXh0cyB0aGF0IG5lZWQgdG8gYmUgYWxpZ25lZCAodGhlIGJhbGFuY2UgYW5kIHRoZSBhY2NvdW50IG5hbWUpLlxuICBtYXJnaW4tdG9wOiAtM3B4O1xufVxuXG4uYWNjb3VudC1kZXRhaWxzX19iYWxhbmNlIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgYWxpZ24taXRlbXM6IGZsZXgtZW5kO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7XG4gIHRleHQtYWxpZ246IHJpZ2h0O1xufVxuXG4uYWNjb3VudC1kZXRhaWxzX19hY2NvdW50LWJhbGFuY2Uge1xuICBtYXJnaW46IDA7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG59XG4iLCIvL1xuLy8gQmFzZSBWYXJpYWJsZXNcbi8vXG4vLyBVc2UgdGhlIGBnZXQtYmFzZSgpYCBmdW5jdGlvbiB0byBhY2Nlc3MgdGhlc2UgdmFsdWVzLlxuLy8gRXhhbXBsZTogZ2V0LWJhc2UodHlwZSwgc2Fucyk7XG4vL1xuXG4kYmFzZTogKFxuXG4gIC8vIERFUFJFQ0FURUQ6IFRoZXNlIGNvbG91ciBkZWZpbml0aW9ucyBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbiAgLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlLiBVc2UgdGhlICRiYXNlIHZhcmlhYmxlcyBiZWxvdy5cbiAgY29sb3I6IChcbiAgICBncmF5OiAgICAgICAgICAgaHNsYSgyMDAsIDclLCA1NSUsIDEpLFxuICAgIHNsYXRlZ3JheTogICAgICBoc2xhKDIwNCwgMjElLCA1NCUsIDEpLFxuICAgIHJpY2hibHVlOiAgICAgICBoc2xhKDIxNiwgNDAlLCA1NSUsIDEpLFxuICAgIHRlYWw6ICAgICAgICAgICBoc2xhKDE4NSwgODElLCAzMSUsIDEpLFxuICAgIHR1cnF1b2lzZTogICAgICBoc2xhKDE5MiwgMTAwJSwgMzElLCAxKSxcbiAgICByZWQ6ICAgICAgICAgICAgaHNsYSgwLCA2NSUsIDU1JSwgMSksXG4gICAgb3JhbmdlOiAgICAgICAgIGhzbGEoMzUsIDg2JSwgNTQlLCAxKSxcbiAgICB5ZWxsb3c6ICAgICAgICAgaHNsYSg1MiwgODAlLCA1MCUsIDEpLFxuICAgIHNreWJsdWU6ICAgICAgICBoc2xhKDIwMCwgNzUlLCA1MyUsIDEpLFxuICAgIHBlcml3aW5rbGU6ICAgICBoc2xhKDIyMiwgNjklLCA1NCUsIDEpLFxuICAgIHB1cnBsZTogICAgICAgICBoc2xhKDI4NCwgNTMlLCA1NSUsIDEpLFxuICAgIHNwcmluZ2dyZWVuOiAgICBoc2xhKDE0OCwgNjUlLCA1MSUsIDEpLFxuICAgIHllbGxvd2dyZWVuOiAgICBoc2xhKDcyLCA3MyUsIDU1JSwgMSlcbiAgKSxcblxuICBncmlkOiAoXG4gICAgY29sdW1uLXdpZHRoOiAgIDQwcHgsXG4gICAgZ3V0dGVyLXdpZHRoOiAgIDIwcHgsXG4gICAgbWluLWNvbHVtbnM6ICAgIDEsXG4gICAgbWF4LWNvbHVtbnM6ICAgIDE2LFxuICAgIGJhc2VsaW5lLXVuaXQ6ICA4cHhcbiAgKSxcblxuICB0eXBlOiAoXG4gICAgYmFzZS1mb250LXNpemU6IDE2cHgsXG4gICAgbWluLWZvbnQtc2l6ZTogIDE0cHgsXG4gICAgbGluZS1oZWlnaHQtcmF0aW86IDEuNCxcbiAgICBtb2R1bGFyLXNjYWxlOiAoXG4gICAgICBkZXNrdG9wOiAxLjIsXG4gICAgICBtb2JpbGU6IDEuMTI1XG4gICAgKSxcbiAgICBzYW5zOiAgICAgICAgICAgKERpbmVyb1NhbnMsIHNhbnMtc2VyaWYpLFxuICAgIHNlcmlmOiAgICAgICAgICAoR2VvcmdpYSwgXCJUaW1lcyBOZXcgUm9tYW5cIiwgc2VyaWYpLFxuICAgIGN1cnNpdmU6ICAgICAgICAoQ2F2ZWF0LCBjdXJzaXZlKSxcbiAgICBtb25vOiAgICAgICAgICAgKENvbnNvbGFzLCBNb25hY28sIFwiQ291cmllciBOZXdcIiwgQ291cmllciwgbW9ub3NwYWNlKVxuICApLFxuXG4gIC8vIERFUFJFQ0FURUQ6IFRoaXMgaWNvbiBpbXBsZW1lbnRhdGlvbiBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbiAgLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlLiBVc2UgdGhlIFNWRyBpY29ucyBpbnN0ZWFkLlxuICBpY29uOiAoXG4gICAgYWRkOiAgICAgICAgICAgIFwiXFxlOTAwXCIsXG4gICAgYXR0YWNobWVudDogICAgIFwiXFxlOTAxXCIsXG4gICAgYXR0ZW50aW9uOiAgICAgIFwiXFxlOTAyXCIsXG4gICAgYmFjazogICAgICAgICAgIFwiXFxlOTAzXCIsXG4gICAgY2FuY2VsOiAgICAgICAgIFwiXFxlOTA0XCIsXG4gICAgY2hlY2s6ICAgICAgICAgIFwiXFxlOTA1XCIsXG4gICAgY2xvc2UtbWVudTogICAgIFwiXFxlOTA2XCIsXG4gICAgY29sbGFwc2U6ICAgICAgIFwiXFxlOTA3XCIsXG4gICAgY29tbWVudDogICAgICAgIFwiXFxlOTA4XCIsXG4gICAgY3JlZGl0Y2FyZDogICAgIFwiXFxlOTA5XCIsXG4gICAgZGF0ZTogICAgICAgICAgIFwiXFxlOTBhXCIsXG4gICAgZGVjcmVhc2VkOiAgICAgIFwiXFxlOTBiXCIsXG4gICAgZGVsZXRlOiAgICAgICAgIFwiXFxlOTBjXCIsXG4gICAgZGVza3RvcDogICAgICAgIFwiXFxlOTBkXCIsXG4gICAgZG9jdW1lbnQ6ICAgICAgIFwiXFxlOTBlXCIsXG4gICAgZG93bmxvYWQ6ICAgICAgIFwiXFxlOTBmXCIsXG4gICAgZHVwbGljYXRlOiAgICAgIFwiXFxlOTEwXCIsXG4gICAgZWRpdDogICAgICAgICAgIFwiXFxlOTExXCIsXG4gICAgZXJyb3I6ICAgICAgICAgIFwiXFxlOTEyXCIsXG4gICAgZXhwYW5kOiAgICAgICAgIFwiXFxlOTEzXCIsXG4gICAgZmFjZWJvb2s6ICAgICAgIFwiXFxlOTE0XCIsXG4gICAgZm9yd2FyZDogICAgICAgIFwiXFxlOTE1XCIsXG4gICAgZ29vZ2xlOiAgICAgICAgIFwiXFxlOTE2XCIsXG4gICAgaGVscDogICAgICAgICAgIFwiXFxlOTE3XCIsXG4gICAgaG9tZTogICAgICAgICAgIFwiXFxlOTE4XCIsXG4gICAgaW1hZ2U6ICAgICAgICAgIFwiXFxlOTE5XCIsXG4gICAgaW5jcmVhc2VkOiAgICAgIFwiXFxlOTFhXCIsXG4gICAgaW5mbzogICAgICAgICAgIFwiXFxlOTFiXCIsXG4gICAgbGluazogICAgICAgICAgIFwiXFxlOTFjXCIsXG4gICAgbGlua2VkaW46ICAgICAgIFwiXFxlOTFkXCIsXG4gICAgbG9jYXRpb246ICAgICAgIFwiXFxlOTFlXCIsXG4gICAgbWVzc2FnZXM6ICAgICAgIFwiXFxlOTFmXCIsXG4gICAgbW9iaWxlOiAgICAgICAgIFwiXFxlOTIwXCIsXG4gICAgbW9yZS1hY3Rpb25zOiAgIFwiXFxlOTIxXCIsXG4gICAgbmF2aWdhdGlvbjogICAgIFwiXFxlOTIyXCIsXG4gICAgb3Blbi1tZW51OiAgICAgIFwiXFxlOTIzXCIsXG4gICAgcHJpbnQ6ICAgICAgICAgIFwiXFxlOTI0XCIsXG4gICAgcmVtaW5kZXI6ICAgICAgIFwiXFxlOTI1XCIsXG4gICAgc2VhcmNoOiAgICAgICAgIFwiXFxlOTI2XCIsXG4gICAgc2VjdXJlOiAgICAgICAgIFwiXFxlOTI3XCIsXG4gICAgc2VuZDogICAgICAgICAgIFwiXFxlOTI4XCIsXG4gICAgc2V0dGluZ3M6ICAgICAgIFwiXFxlOTI5XCIsXG4gICAgc3RhcjogICAgICAgICAgIFwiXFxlOTJhXCIsXG4gICAgc3VjY2VzczogICAgICAgIFwiXFxlOTJiXCIsXG4gICAgdGFibGV0OiAgICAgICAgIFwiXFxlOTJjXCIsXG4gICAgdGFnOiAgICAgICAgICAgIFwiXFxlOTJkXCIsXG4gICAgdGltZTogICAgICAgICAgIFwiXFxlOTJlXCIsXG4gICAgdHdpdHRlcjogICAgICAgIFwiXFxlOTJmXCIsXG4gICAgdW5kbzogICAgICAgICAgIFwiXFxlOTMwXCIsXG4gICAgdXNlcjogICAgICAgICAgIFwiXFxlOTMxXCIsXG4gICAgdmlkZW86ICAgICAgICAgIFwiXFxlOTMyXCIsXG4gICAgd2F2ZTogICAgICAgICAgIFwiXFxlOTMzXCIsXG4gICAgeWFob286ICAgICAgICAgIFwiXFxlOTM0XCJcbiAgKVxuKTtcblxuLy8gREVQUkVDQVRFRDogVGhlc2UgY29sb3VyIGRlZmluaXRpb25zIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuLy8gcmVtb3ZlZCBpbiBhbiB1cGNvbWluZyByZWxlYXNlIHdoZW4gdGhleSBhcmUgZmluYWxseSByZW1vdmVkIGZyb20gTkVYVC1XQVZFLlxuLy8gVXNlIHRoZSAkYmFzZSB2YXJpYWJsZXMgYmVsb3cuXG5cbiRiYXNlLWNvbG9yLXNreWJsdWUtLWRhcmtlcjogaHNsYSgxOTUsIDc2JSwgMjglLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWRhcms6IGhzbGEoMTk1LCA3NiUsIDM2JSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1iYXNlOiBoc2xhKDE5NSwgNzYlLCA1MyUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tbGlnaHQ6IGhzbGEoMTk1LCA3NiUsIDgzJSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1saWdodGVyOiBoc2xhKDE5NSwgNzYlLCA5MyUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1kYXJrZXI6IGhzbGEoMjg0LCA1MyUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWRhcms6IGhzbGEoMjg0LCA1MyUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWJhc2U6IGhzbGEoMjg0LCA1MyUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWxpZ2h0OiBoc2xhKDI4NCwgNTMlLCA4NSUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1saWdodGVyOiBoc2xhKDI4NCwgNTMlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWRhcmtlcjogaHNsYSg3OCwgNzQlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWRhcms6IGhzbGEoNzgsIDc0JSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1iYXNlOiBoc2xhKDc4LCA3NCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tbGlnaHQ6IGhzbGEoNzgsIDc0JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1saWdodGVyOiBoc2xhKDc4LCA3NCUsIDkwJSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1kYXJrZXI6IGhzbGEoMTgzLCA4MCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1kYXJrOiBoc2xhKDE4MywgODAlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tYmFzZTogaHNsYSgxODMsIDgwJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWxpZ2h0OiBoc2xhKDE4MywgODAlLCA3OCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tbGlnaHRlcjogaHNsYSgxODMsIDgwJSwgOTAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1kYXJrLWJsdWU6IGhzbGEoMjA5LCA2OSUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbWVkaXVtLWJsdWU6IGhzbGEoMjEyLCA5MyUsIDU4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbGlnaHQtYmx1ZTogaHNsYSgyMDYsIDk2JSwgNzMlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHRlc3Q6IGhzbGEoMjA2LCAyMyUsIDk0JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0ZXI6IGhzbGEoMjA0LCAyMSUsIDg2JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0OiBoc2xhKDIwNCwgMTglLCA3NSUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1iYXNlOiBoc2xhKDIwNCwgMTIlLCA2MiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrOiBoc2xhKDIwNCwgOSUsIDQ1JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcmtlcjogaHNsYSgyMDMsIDEzJSwgMzIlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFya2VzdDogaHNsYSgyMDYsIDIyJSwgMTQlLCAxKTtcblxuXG4vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXG5cbi8vXG4vLyBCQVNFIFZBUklBQkxFIERFRklOSVRJT05TXG4vL1xuLy8gVGhlc2UgYXJlIGJhc2UgdmFyaWFibGVzIHByaW1hcmlseSBmb3IgdXNlIGludGVybmFsbHkuIFRoZXkgYXJlIGF2YWlsYWJsZVxuLy8gZXh0ZXJuYWxseSwgYnV0IHByZWZlcmVuY2Ugc2hvdWxkIGJlIGdpdmVuIHRvIGdsb2JhbCB2YXJpYWJsZXMgKHNlZSBiZWxvdykuXG4vL1xuLy9cbi8vIFR5cG9ncmFwaHlcbi8vXG4vLyBUbyBzZXQgdGhlIG1pbi1mb250LXNpemUgZXhwbGljaXRseVxuLy9cbiRnbG9iYWwtbWluLWZvbnQtc2l6ZTogZ2V0LWJhc2UodHlwZSwgbWluLWZvbnQtc2l6ZSk7XG5cbi8vXG4vLyBCcmFuZCBjb2xvdXJzXG4vL1xuXG4vLyBNYWluIGJsdWUgdXNlZCBvbiBpbnRlcmFjdGlvbnMgLSBCcmFuZCBCbHVlIEVsZWN0cmljXG4kYmFzZS1jb2xvci1icmFuZC0tdWk6IGhzbGEoMjI3LCA3MyUsIDQ3JSwgMSk7XG5cbi8vIFByaW1hcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWNvbmZpZGVuY2U6IGhzbGEoMjEyLCA5MyUsIDU4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS10cnVzdDogaHNsYSgyMDksIDgyJSwgNzElLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ncmVlbi1ncm91bmRpbmc6IGhzbGEoMTkzLCA0NCUsIDY4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbGlsYWMtY3JlYXRpdmU6IGhzbGEoMjg0LCAxMDAlLCA4NCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW5hdnktc3RhYmlsaXR5OiBoc2xhKDIyNCwgMTAwJSwgMjAlLCAxKTtcblxuLy8gU2Vjb25kYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYmVpZ2UtZGFpc3k6IGhzbGEoMjMsIDQwJSwgOTYlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljOiBoc2xhKDIyNywgNzMlLCA0NyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW1lbG9uLW9yYW5nZTogaHNsYSgxOCwgNzMlLCA4MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW9yYW5nZS1jYXJyb3Q6IGhzbGEoMTgsIDg4JSwgNzAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wdXJwbGUtb3JjaGlkOiBoc2xhKDIzNywgODIlLCA3OCUsIDEpO1xuXG4vLyBUZXJ0aWFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWFxdWFtYXJpbmU6IGhzbGEoMTQ4LCA2OSUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1jeWFuOiBoc2xhKDE4MywgODAlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW9wYWwtcHVycGxlOiBoc2xhKDI2NywgNzMlLCA4NyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXBlYWNoOiBoc2xhKDI4LCA2NyUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcHVycGxlLWZsb3JhbDogaHNsYSgyNjcsIDczJSwgNjElLCAxKTtcblxuLy8gTmV1dHJhbHNcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWFyY3RpYzogaHNsYSgxODEsIDg3JSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXBvd2RlcjogaHNsYSgyMjAsIDg0JSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXNreTogaHNsYSgxOTYsIDg0JSwgODMlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXN0b25lOiBoc2xhKDIwMywgNTclLCA4NSUsIDEpO1xuXG5cbi8vXG4vLyBBY2NlbnQgY29sb3Vyc1xuLy9cbi8vIFVzZWQgdG8gcHJvdmlkZSBtZWFuaW5nIHZpc3VhbGx5IChlZyBmb3Igbm90aWZpY2F0aW9ucywgbWVzc2FnaW5nLCBiYWRnZXMpXG4vLyBhbmQgZm9yIGluZm9ncmFwaGljIHVzZS5cbi8vXG4vLyBUaGVyZSBhcmUgNSBzaGFkZXMgZm9yIGVhY2g6IGRhcmtlciwgZGFyaywgYmFzZSwgbGlnaHQsIGxpZ2h0ZXJcbi8vXG5cbi8vIFJlZFxuJGJhc2UtY29sb3ItcmVkLS1kYXJrZXN0OiBoc2xhKDAsIDYwJSwgMTklLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tZGFya2VyOiBoc2xhKDAsIDUxJSwgMzMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tZGFyazogaHNsYSgwLCA2MCUsIDQzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWJhc2U6IGhzbGEoMCwgNzMlLCA1MyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodDogaHNsYSgwLCAxMDAlLCA4NCUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodGVyOiBoc2xhKDAsIDgwJSwgOTIlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHRlc3Q6IGhzbGEoMCwgMTAwJSwgOTclLCAxKTtcblxuLy8gT3JhbmdlXG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcmtlc3Q6IGhzbGEoMzIsIDc2JSwgMjAlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFya2VyOiBoc2xhKDMyLCA3MyUsIDI5JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcms6IGhzbGEoMzIsIDczJSwgNDMlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tYmFzZTogaHNsYSgzNSwgODYlLCA1NCUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodDogaHNsYSgzMiwgMTAwJSwgNzMlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHRlcjogaHNsYSgzMiwgMTAwJSwgODklLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHRlc3Q6IGhzbGEoMzMsIDEwMCUsIDk0JSwgMSk7XG5cbi8vWWVsbG93XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlc3Q6IGhzbGEoNTAsIDkyJSwgMTglLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VyOiBoc2xhKDUwLCA2NyUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcms6IGhzbGEoNTEsIDY5JSwgNTElLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tYmFzZTogaHNsYSg1MSwgMTAwJSwgNjAlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHQ6IGhzbGEoNTEsIDEwMCUsIDc3JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0ZXI6IGhzbGEoNTEsIDEwMCUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0ZXN0OiBoc2xhKDUxLCAxMDAlLCA5NSUsIDEpO1xuXG4vLyBTcHJpbmcgR3JlZW5cbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXN0OiBoc2xhKDE0OCwgODUlLCAxNSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlcjogaHNsYSgxNDgsIDcwJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrOiBoc2xhKDE0OCwgNzAlLCAzMSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWJhc2U6IGhzbGEoMTQ4LCA3MCUsIDQ2JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHQ6IGhzbGEoMTQ4LCA3MCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHRlcjogaHNsYSgxNDgsIDcwJSwgOTMlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodGVzdDogaHNsYSgxNDgsIDEwMCUsIDk3JSwgMSk7XG5cbiRiYXNlLWNvbG9yLXdoaXRlOiAjRkZGRkZGO1xuJGJhc2UtY29sb3ItYmxhY2s6ICMwMDAwMDA7XG5cbi8vXG4vLyBVSSBjb2xvdXJzXG4vL1xuLy8gVXNlZCBpbiB0aGUgYmFja2dyb3VuZCwgc3Ryb2tlLCBhbmQgY29weSBvZiBlbGVtZW50cyAoZWcgYm94ZXMsIGxheW91dHMsIG5hdmlnYXRpb24sIGZvcm1zKS5cbi8vXG4vLyBUaGVyZSBhcmUgNyBzaGFkZXMgZm9yIGVhY2g6IGRhcmtlc3QsIGRhcmtlciwgZGFyaywgYmFzZSwgbGlnaHQsIGxpZ2h0ZXIsIGxpZ2h0ZXN0XG4vL1xuXG4vLyBSaWNoIEJsdWVcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXN0OiBoc2xhKDIxMiwgODElLCAyMSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlcjogaHNsYSgyMDksIDY5JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrOiBoc2xhKDIwOSwgNTclLCA2NiUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWJhc2U6IGhzbGEoMjA5LCA1OCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHQ6IGhzbGEoMjA5LCA2NCUsIDg5JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHRlcjogaHNsYSgyMDksIDEwMCUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tbGlnaHRlc3Q6IGhzbGEoMjA5LCAxMDAlLCA5OCUsIDEpO1xuXG4vLyBHcmF5XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodGVzdDogaHNsYSgyMDYsIDIzJSwgOTQlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXI6IGhzbGEoMjA0LCAyMSUsIDg2JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodDogaHNsYSgyMDQsIDE4JSwgNzUlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWJhc2U6IGhzbGEoMjA0LCAxMiUsIDYyJSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrOiBoc2xhKDIwNCwgOSUsIDQ1JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrZXI6IGhzbGEoMjAzLCAxMyUsIDMyJSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1kYXJrZXN0OiBoc2xhKDIwNiwgMjIlLCAxNCUsIDEpO1xuXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL1xuXG4vL1xuLy8gR0xPQkFMIFZBUklBQkxFU1xuLy9cbi8vIFRoZXNlIHZhcmlhYmxlcyBhcmUgbWVhbnQgdG8gYmUgdXNlZCB0aGVtYXRpY2FsbHkgaW4gbW9yZSB0aGFuIG9uZSBwbGFjZSB0b1xuLy8gbWFpbnRhaW4gYSBzZW5zZSBvZiBjb25zaXN0ZW5jeSBhbmQgZWFzZSBvZiB1cGRhdGluZy5cbi8vXG5cbi8vIENvbG9yc1xuJGdsb2JhbC1jb2xvci10ZXh0LS1kYXJrOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXN0O1xuJGdsb2JhbC1jb2xvci10ZXh0LS1taWQ6ICRiYXNlLWNvbG9yLWdyYXktLWRhcms7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLW11dGVkOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLWxpbms6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1zdWNjZXNzOiAkYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci10ZXh0LS13YXJuaW5nOiAkYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlc3Q7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLWRhbmdlcjogJGJhc2UtY29sb3ItcmVkLS1kYXJrO1xuJGdsb2JhbC1jb2xvci1iYWNrZ3JvdW5kLS1iYXNlOiB3aGl0ZTtcbiRnbG9iYWwtY29sb3ItYmFja2dyb3VuZC0taGlnaGxpZ2h0OiBoc2xhKDIxMiwgMTAwJSwgOTUlLCAxKTsgLy8gc2FtZSBodWUgYXMgYnJhbmQtdWlcbiRnbG9iYWwtY29sb3ItYm9yZGVyLS1oaWdobGlnaHQ6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuJGdsb2JhbC1jb2xvci1ib3JkZXItLWRpdmlkZXI6ICRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXI7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tc3VjY2VzczogJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0td2FybmluZzogJGJhc2UtY29sb3IteWVsbG93LS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWRhbmdlcjogJGJhc2UtY29sb3ItcmVkLS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWluZm86ICRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tYnJhbmQ6ICRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWVsZWN0cmljO1xuXG4vLyBCb3JkZXIgcmFkaWlcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tc21hbGw6IDNweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbWVkaXVtOiA0cHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLWxhcmdlOiA4cHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXhsYXJnZTogMTJweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tcm91bmRlZDogNTAwcHg7IC8vIGludGVudGlvbmFsbHkgaHVnZSBzaW5jZSB3ZSBkb24ndCBrbm93IHdpZHRoL2hlaWdodFxuXG4vLyBFbGV2YXRpb24gKERyb3Agc2hhZG93KVxuLy9cbi8vIFRoZXNlIHZhcmlhYmxlcyBhcmUgbWVhbnQgdG8gYmUgaGlnaGxpZ2h0IGVsZW1lbnRzIHN1Y2ggYXMgYm94ZXMsIHRpbGVzLCBleHBhbmRlZCByb3dzL2NhcmRzXG4vL1xuXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0xOiAwcHggMnB4IDhweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMik7IC8vIEZvciBkcm9wZG93bnMsIGRhdGUgcGlja2Vyc1xuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMjogMHB4IDRweCAxNnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4zKTsgLy8gVGlsZXMgaG92ZXIgc3RhdGUsIHBvcG92ZXJzXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0zOiAwcHggOHB4IDMycHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjM1KTsgLy8gSGlnaGxpZ2h0ZWQgYm94ZXMsIHdpemFyZHMgYW5kIHdvcmtmbG93IHN0ZXBzLCB0b2FzdFxuJGdsb2JhbC1zaGFkb3ctLW1vZGFsOiAwcHggOHB4IDMycHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAxKTsgLy8gTW9kYWxzXG5cbi8vIEJyZWFrcG9pbnRzXG4vLyBUT0RPOiBEZXByZWNhdGUgb2xkIGJyZWFrcG9pbnRzXG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lOiA0ODBweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0OiA3NjhweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tZGVza3RvcDogMTAyNHB4O1xuXG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXBob25lLS1tYXg6IDQ4MHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQtLW1pbjogNDgxcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldC0tbWF4OiA3NjhweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tZGVza3RvcC0tbWluOiA3NjlweDsiXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .account-list-item__txn-import-toggle {
        margin: 16px 0 0
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdEl0ZW0vVHhuSW1wb3J0VG9nZ2xlL1R4bkltcG9ydFRvZ2dsZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSwwQkFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw2QkFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQy9FSixzQ0FDRSxlQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi5hY2NvdW50LWxpc3QtaXRlbV9fdHhuLWltcG9ydC10b2dnbGUge1xuICBtYXJnaW46IGdyaWQtcm93cygyKSAwIDA7XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .account-list-item {
        display: flex;
        flex-direction: column;
        border: 1px solid #b4c2cb;
        border-top: 0;
        padding: 16px
    }

    .account-list-item .wv-notify--warning,
    .account-list-item .wv-notify--success,
    .account-list-item .wv-notify--danger {
        margin: 16px 0 0
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdEl0ZW0vQWNjb3VudExpc3RJdGVtLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLG1CQUNFLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLHdCQUFBLENBQ0EsWUFBQSxDQUNBLFlBQUEsQ0FLQSxvSEFHRSxlQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi5hY2NvdW50LWxpc3QtaXRlbSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGJvcmRlcjogMXB4IHNvbGlkICRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ7XG4gIGJvcmRlci10b3A6IDA7XG4gIHBhZGRpbmc6IGdyaWQtcm93cygyKTtcblxuICAvLyBUaGVyZSBpcyBubyB3YXkgY3VycmVudGx5IHRvIGF0dGFjaCBjbGFzc2VzIHRvIFdhdmVOb3RpZmljYXRpb24gZWxlbWVudHMsXG4gIC8vIHNvIHdlIGhhdmUgdG8gYWJ1c2UgaG9va2luZyBpbiB0byB0aGUgQnVveWFudCBjbGFzcy4gU29ycnkuXG4gIC8vIHN0eWxlbGludC1kaXNhYmxlIHdhdmUvbm8tdGFyZ2V0aW5nLXd2XG4gIC53di1ub3RpZnktLXdhcm5pbmcsXG4gIC53di1ub3RpZnktLXN1Y2Nlc3MsXG4gIC53di1ub3RpZnktLWRhbmdlciB7XG4gICAgbWFyZ2luOiBncmlkLXJvd3MoMikgMCAwO1xuICB9XG4gIC8vIHN0eWxlbGludC1lbmFibGUgd2F2ZS9uby10YXJnZXRpbmctd3Zcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .cannot-delete-site-modal__close-button {
        margin: 16px 0
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9TdGFuZGFyZFNpdGUvRGVsZXRlU2l0ZS9DYW5ub3REZWxldGVTaXRlTW9kYWwuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUF3Q0EsMEJBQ0UsT0FFRSxjQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNkJBQ0UsT0FFRSxnQkFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0M5RUYsd0NBQ0UsYUFBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4uY2Fubm90LWRlbGV0ZS1zaXRlLW1vZGFsIHtcbiAgJl9fY2xvc2UtYnV0dG9uIHtcbiAgICBtYXJnaW46IGdyaWQtcm93cygyKSAwO1xuICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .unsupported-accounts__toggle {
        display: flex;
        padding-right: 16px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9TdGFuZGFyZFNpdGUvVHhuSW1wb3J0VW5zdXBwb3J0ZWRBY2N0c1Nob3dUb2dnbGUvVHhuSW1wb3J0VW5zdXBwb3J0ZWRBY2N0c1Nob3dUb2dnbGUuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUF3Q0EsMEJBQ0UsT0FFRSxjQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNkJBQ0UsT0FFRSxnQkFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0MvRUosOEJBQ0UsWUFBQSxDQUNBLGtCQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi51bnN1cHBvcnRlZC1hY2NvdW50c19fdG9nZ2xlIHtcbiAgZGlzcGxheTogZmxleDtcbiAgcGFkZGluZy1yaWdodDogZ3JpZC1yb3dzKDIpO1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .account-list-page {
        max-width: 960px;
        min-height: 120px;
        margin: 0 auto
    }

    .account-list-page__spinner {
        margin-top: 48px
    }

    @media(max-width: 480px) {
        .account-list-page__header {
            flex-direction: column
        }

        .account-list-page__header .wv-header__actions {
            width: 100%;
            padding-left: 0
        }

        .account-list-page__header .wv-header__title {
            margin-bottom: 8px;
            align-self: flex-start
        }

        .account-list-page__header__connect-button {
            width: 100%;
            margin-left: 0
        }

        .account-list-page__header__payments-button {
            width: 100%;
            margin-left: 0
        }
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9BY2NvdW50TGlzdFBhZ2UvQWNjb3VudExpc3RQYWdlLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDL0VKLG1CQUNFLGVBQUEsQ0FDQSxnQkFBQSxDQUNBLGFBQUEsQ0FFQSw0QkFDRSxlQUFBLENBR0YseUJBQ0UsMkJBQ0UscUJBQUEsQ0FLQSwrQ0FDRSxVQUFBLENBQ0EsY0FBQSxDQUdGLDZDQUNFLGlCQUFBLENBQ0EscUJBQUEsQ0FJRiwyQ0FDRSxVQUFBLENBQ0EsYUFBQSxDQUdGLDRDQUNFLFVBQUEsQ0FDQSxhQUFBLENBQUEiLCJzb3VyY2VzQ29udGVudCI6WyJcbi8vIFNob3J0aGFuZCBmb3Igd2lkdGggYW5kIGhlaWdodCBwcm9wZXJ0aWVzXG5AbWl4aW4gc2l6ZSgkd2lkdGg6IGZhbHNlLCAkaGVpZ2h0OiBmYWxzZSkge1xuICBAaWYgJHdpZHRoIHtcbiAgICB3aWR0aDogJHdpZHRoO1xuICAgIGhlaWdodDogaWYoJGhlaWdodCwgJGhlaWdodCwgJHdpZHRoKTtcbiAgfVxuICBAZWxzZSB7XG4gICAgQGVycm9yIFwiVGhlICdzaXplJyBtaXhpbiByZXF1aXJlcyBhdCBsZWFzdCBvbmUgbWVhc3VyZW1lbnRcIjtcbiAgfVxufVxuXG4vLyBUcnVuY2F0ZSB0ZXh0IHVzaW5nIGVsbGlwc2lzOlxuLy8gVGhlIGVsZW1lbnQgbXVzdCBoYXZlIGEgd2lkdGggb3IgbWF4LXdpdGggZm9yIGVsbGlwc2lzIHRvIHdvcmssXG4vLyBidXQgdGhlIHdpZHRoIGRvZXNuJ3QgaGF2ZSB0byBiZSBzZXQgdGhyb3VnaCB0aGUgbWl4aW5cbi8vIFVzYWdlOlxuLy8gTm8gd2lkdGg6IEBpbmNsdWRlIHRydW5jYXRlQXQoKTtcbi8vIFNldCB3aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCk7XG4vLyBTZXQgbWF4LXdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4LCBtYXgpO1xuQG1peGluIHRydW5jYXRlQXQoJHdpZHRoOiBmYWxzZSwgJG1heDogJycpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgI3tpZigkbWF4ID09ICdtYXgnLCAnbWF4LXdpZHRoJywgJ3dpZHRoJyl9OiAkd2lkdGg7XG4gIH1cbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG4gIG92ZXJmbG93OiBoaWRkZW47XG59XG5cbi8vIFJlc3BvbnNpdmUgZmxleGluZyB0byBicmVha3BvaW50c1xuLy8gRXhhbXBsZTpcbi8vICAgIEBpbmNsdWRlIHJlc3BvbmQtdG8obWF4LXdpZHRoLCAxNDQwcHgpIHsgLi4uIH1cbkBtaXhpbiByZXNwb25kLXRvKCRtaW4tbWF4LCAkYnJlYWtwb2ludCkge1xuICBAbWVkaWEgb25seSBzY3JlZW4gYW5kICgkbWluLW1heDogJGJyZWFrcG9pbnQpIHtcbiAgICBAY29udGVudDtcbiAgfVxufVxuXG4vLyBBbmltYXRpb25zXG4kcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uOiAwLjFzO1xuXG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXVwIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLXRvcDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtZG93biB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLXRvcDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtbGVmdCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tbGVmdDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtcmlnaHQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tbGVmdDogMDtcbiAgICBvcGFjaXR5OiAxLjA7XG4gIH1cbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS11cCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtdXAgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1kb3duIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1kb3duICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtbGVmdCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtbGVmdCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1yaWdodCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuIiwiQGltcG9ydCBcIn5idW95YW50LXV0aWxzL3V0aWxpdGllcy9hbGxcIjtcblxuLmFjY291bnQtbGlzdC1wYWdlIHtcbiAgbWF4LXdpZHRoOiA5NjBweDtcbiAgbWluLWhlaWdodDogZ3JpZC1yb3dzKDE1KTtcbiAgbWFyZ2luOiAwIGF1dG87XG5cbiAgJl9fc3Bpbm5lciB7XG4gICAgbWFyZ2luLXRvcDogZ3JpZC1yb3dzKDYpO1xuICB9XG5cbiAgQG1lZGlhIChtYXgtd2lkdGg6ICRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmUpIHtcbiAgICAmX19oZWFkZXIge1xuICAgICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcblxuICAgICAgLy8gV2UgYXJlIGludGVudGlvbmFsbHkgdXNpbmcgQnVveWFudCBjbGFzc2VzIGhlcmUgYmVjYXVzZSB0aGUgQnVveWFudFxuICAgICAgLy8gaGVhZGVyIGRvZXMgbm90IHlldCBoYXZlIGEgZ29vZCBmYWxsYmFjayBmb3IgbW9iaWxlLlxuICAgICAgLy8gc3R5bGVsaW50LWRpc2FibGUgd2F2ZS9uby10YXJnZXRpbmctd3ZcbiAgICAgIC53di1oZWFkZXJfX2FjdGlvbnMge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAwO1xuICAgICAgfVxuXG4gICAgICAud3YtaGVhZGVyX190aXRsZSB7XG4gICAgICAgIG1hcmdpbi1ib3R0b206IGdyaWQtcm93cygxKTtcbiAgICAgICAgYWxpZ24tc2VsZjogZmxleC1zdGFydDtcbiAgICAgIH1cbiAgICAgIC8vIHN0eWxlbGludC1lbmFibGUgd2F2ZS9uby10YXJnZXRpbmctd3ZcblxuICAgICAgJl9fY29ubmVjdC1idXR0b24ge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgICB9XG5cbiAgICAgICZfX3BheW1lbnRzLWJ1dHRvbiB7XG4gICAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgICBtYXJnaW4tbGVmdDogMDtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .add-new-account__connection-info {
        text-align: center;
        margin: 0 auto 24px
    }

    .add-new-account__connection-info__main-title {
        margin: 16px 0 !important
    }

    @media(min-width: 768px) {
        .add-new-account__connection-info__security-message-wrapper {
            text-align: left
        }
    }

    .add-new-account__connection-info__security-message {
        display: inline-block;
        margin: 0 auto 24px;
        text-align: center
    }

    @media(min-width: 768px) {
        .add-new-account__connection-info__security-message {
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            margin-top: 32px
        }

        .add-new-account__connection-info__security-message__icon {
            margin-right: 16px
        }
    }

    .add-new-account__connection-info__security-message__title {
        margin: 16px 0 0
    }

    @media(min-width: 768px) {
        .add-new-account__connection-info__security-message__title {
            margin: 0
        }
    }

    .add-new-account__connection-info__security-message__message {
        margin: 8px auto 0
    }

    .add-new-account__connection-form {
        margin: 0 auto 16px;
        max-width: 880px
    }

    .add-new-account__connection-form.add-new-account--borderless {
        border: 0;
        padding: 0
    }

    @media(max-width: 768px) {
        .add-new-account__connection-form {
            box-shadow: none !important
        }
    }

    .add-new-account__loading-container {
        height: 80vh;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center
    }

    .add-new-account--hidden {
        display: none
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29udGFpbmVycy9BZGROZXdBY2NvdW50UGFnZS9BZGROZXdBY2NvdW50UGFnZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSwwQkFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw2QkFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQzlFRixrQ0FDRSxpQkFBQSxDQUNBLGtCQUFBLENBRUEsOENBQ0Usd0JBQUEsQ0FJQSx5QkFERiw0REFFSSxlQUFBLENBQUEsQ0FJSixvREFDRSxvQkFBQSxDQUNBLGtCQUFBLENBQ0EsaUJBQUEsQ0FFQSx5QkFMRixvREFNSSxZQUFBLENBQ0Esc0JBQUEsQ0FDQSxnQkFBQSxDQUNBLGVBQUEsQ0FFQSwwREFDRSxpQkFBQSxDQUFBLENBSUosMkRBQ0UsZUFBQSxDQUVBLHlCQUhGLDJEQUlJLFFBQUEsQ0FBQSxDQUlKLDZEQUNFLGlCQUFBLENBS04sa0NBQ0Usa0JBQUEsQ0FDQSxlQUFBLENBRUEsOERBQ0UsUUFBQSxDQUNBLFNBQUEsQ0FHRix5QkFURixrQ0FVSSwwQkFBQSxDQUFBLENBSUosb0NBQ0UsV0FBQSxDQUNBLGFBQUEsQ0FDQSxZQUFBLENBQ0EscUJBQUEsQ0FDQSxrQkFBQSxDQUNBLHNCQUFBLENBSUoseUJBQ0UsWUFBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4uYWRkLW5ldy1hY2NvdW50IHtcbiAgJl9fY29ubmVjdGlvbi1pbmZvIHtcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgbWFyZ2luOiAwIGF1dG8gZ3JpZC1yb3dzKDMpO1xuXG4gICAgJl9fbWFpbi10aXRsZSB7XG4gICAgICBtYXJnaW46IGdyaWQtcm93cygyKSAwICFpbXBvcnRhbnQ7XG4gICAgfVxuXG4gICAgJl9fc2VjdXJpdHktbWVzc2FnZS13cmFwcGVyIHtcbiAgICAgIEBtZWRpYSAobWluLXdpZHRoOiAkZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldCkge1xuICAgICAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICAgICAgfVxuICAgIH1cblxuICAgICZfX3NlY3VyaXR5LW1lc3NhZ2Uge1xuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgbWFyZ2luOiAwIGF1dG8gZ3JpZC1yb3dzKDMpO1xuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuXG4gICAgICBAbWVkaWEgKG1pbi13aWR0aDogJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQpIHtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICAgIGZsZXgtd3JhcDogbm93cmFwO1xuICAgICAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoNCk7XG5cbiAgICAgICAgJl9faWNvbiB7XG4gICAgICAgICAgbWFyZ2luLXJpZ2h0OiBncmlkLXJvd3MoMik7XG4gICAgICAgIH1cbiAgICAgIH1cblxuICAgICAgJl9fdGl0bGUge1xuICAgICAgICBtYXJnaW46IGdyaWQtcm93cygyKSAwIDA7XG5cbiAgICAgICAgQG1lZGlhIChtaW4td2lkdGg6ICRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0KSB7XG4gICAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICB9XG4gICAgICB9XG5cbiAgICAgICZfX21lc3NhZ2Uge1xuICAgICAgICBtYXJnaW46IGdyaWQtcm93cygxKSBhdXRvIDA7XG4gICAgICB9XG4gICAgfVxuICB9XG5cbiAgJl9fY29ubmVjdGlvbi1mb3JtIHtcbiAgICBtYXJnaW46IDAgYXV0byBncmlkLXJvd3MoMik7XG4gICAgbWF4LXdpZHRoOiBncmlkLXJvd3MoMTEwKTtcblxuICAgICYuYWRkLW5ldy1hY2NvdW50LS1ib3JkZXJsZXNzIHtcbiAgICAgIGJvcmRlcjogMDtcbiAgICAgIHBhZGRpbmc6IDA7XG4gICAgfVxuXG4gICAgQG1lZGlhIChtYXgtd2lkdGg6ICRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0KSB7XG4gICAgICBib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG5cbiAgJl9fbG9hZGluZy1jb250YWluZXIge1xuICAgIGhlaWdodDogODB2aDtcbiAgICBtYXJnaW46IDAgYXV0bztcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgfVxufVxuXG4uYWRkLW5ldy1hY2NvdW50LS1oaWRkZW4ge1xuICBkaXNwbGF5OiBub25lO1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes DashboardWidgetSite-module__panel-slide-up__HHqbi {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes DashboardWidgetSite-module__panel-slide-down__ZsDpp {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes DashboardWidgetSite-module__panel-slide-left__mzj_z {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes DashboardWidgetSite-module__panel-slide-right__Yh5Ds {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .DashboardWidgetSite-module__site__cu_UE {
        margin-bottom: 16px
    }

    .DashboardWidgetSite-module__header__wV9tm {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 16px;
        background: #ecf0f3;
        border: 1px solid #b4c2cb;
        border-radius: 8px 8px 0 0
    }

    .DashboardWidgetSite-module__bankLogoNameWrapper__QyPt0 {
        display: flex;
        flex-wrap: nowrap
    }

    .DashboardWidgetSite-module__bankLogo__hZxgz {
        width: 40px;
        height: 40px;
        border-radius: 3px;
        vertical-align: middle
    }

    .DashboardWidgetSite-module__bankName__EPJzJ {
        margin: 0
    }

    .DashboardWidgetSite-module__reauthNotification__nzYie {
        border: 1px solid #b4c2cb;
        border-top: 0;
        padding: 16px 16px 0;
        border-radius: 0 0 8px 8px
    }

    .DashboardWidgetSite-module__dashboardWidgetSiteAccounts__ZH43B>:last-child {
        border-radius: 0 0 8px 8px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9EYXNoYm9hcmRXaWRnZXRTaXRlL0Rhc2hib2FyZFdpZGdldFNpdGUubW9kdWxlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvYnVveWFudC11dGlscy91dGlsaXRpZXMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSw2REFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osK0RBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLCtEQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSixnRUFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQy9FSix5Q0FDRSxrQkFBQSxDQUdGLDJDQUNFLFlBQUEsQ0FDQSw2QkFBQSxDQUNBLHNCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQ3lQMEIsQ0R4UDFCLHdCQUFBLENBQ0EseUJBQUEsQ0FHRix3REFDRSxZQUFBLENBQ0EsZ0JBQUEsQ0FHRiw2Q0FDRSxVQUFBLENBQ0EsV0FBQSxDQUNBLGlCQ2tSNEIsQ0RqUjVCLHFCQUFBLENBR0YsNkNBQ0UsUUFBQSxDQUdGLHVEQUNFLHdCQUFBLENBQ0EsWUFBQSxDQUNBLG1CQUFBLENBQ0EseUJBQUEsQ0FJQSw0RUFDRSx5QkFBQSIsInNvdXJjZXNDb250ZW50IjpbIlxuLy8gU2hvcnRoYW5kIGZvciB3aWR0aCBhbmQgaGVpZ2h0IHByb3BlcnRpZXNcbkBtaXhpbiBzaXplKCR3aWR0aDogZmFsc2UsICRoZWlnaHQ6IGZhbHNlKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiBpZigkaGVpZ2h0LCAkaGVpZ2h0LCAkd2lkdGgpO1xuICB9XG4gIEBlbHNlIHtcbiAgICBAZXJyb3IgXCJUaGUgJ3NpemUnIG1peGluIHJlcXVpcmVzIGF0IGxlYXN0IG9uZSBtZWFzdXJlbWVudFwiO1xuICB9XG59XG5cbi8vIFRydW5jYXRlIHRleHQgdXNpbmcgZWxsaXBzaXM6XG4vLyBUaGUgZWxlbWVudCBtdXN0IGhhdmUgYSB3aWR0aCBvciBtYXgtd2l0aCBmb3IgZWxsaXBzaXMgdG8gd29yayxcbi8vIGJ1dCB0aGUgd2lkdGggZG9lc24ndCBoYXZlIHRvIGJlIHNldCB0aHJvdWdoIHRoZSBtaXhpblxuLy8gVXNhZ2U6XG4vLyBObyB3aWR0aDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgpO1xuLy8gU2V0IHdpZHRoIHRvIDEwMHB4OiBAaW5jbHVkZSB0cnVuY2F0ZUF0KDEwMHB4KTtcbi8vIFNldCBtYXgtd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgsIG1heCk7XG5AbWl4aW4gdHJ1bmNhdGVBdCgkd2lkdGg6IGZhbHNlLCAkbWF4OiAnJykge1xuICBAaWYgJHdpZHRoIHtcbiAgICAje2lmKCRtYXggPT0gJ21heCcsICdtYXgtd2lkdGgnLCAnd2lkdGgnKX06ICR3aWR0aDtcbiAgfVxuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmbGV4aW5nIHRvIGJyZWFrcG9pbnRzXG4vLyBFeGFtcGxlOlxuLy8gICAgQGluY2x1ZGUgcmVzcG9uZC10byhtYXgtd2lkdGgsIDE0NDBweCkgeyAuLi4gfVxuQG1peGluIHJlc3BvbmQtdG8oJG1pbi1tYXgsICRicmVha3BvaW50KSB7XG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKCRtaW4tbWF4OiAkYnJlYWtwb2ludCkge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIEFuaW1hdGlvbnNcbiRwYW5lbC1hbmltYXRpb24tZHVyYXRpb246IDAuMXM7XG5cbkBrZXlmcmFtZXMgcGFuZWwtc2xpZGUtdXAge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1kb3duIHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLXRvcDogLSBncmlkLXJvd3MoMSk7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICAxMDAlIHtcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgIG9wYWNpdHk6IDEuMDtcbiAgfVxufVxuQG1peGluIHBhbmVsLXNsaWRlLXVwIHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS11cCAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWRvd24ge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWRvd24gJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1sZWZ0IHtcbiAgYW5pbWF0aW9uOiBwYW5lbC1zbGlkZS1sZWZ0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtcmlnaHQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXJpZ2h0ICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG4iLCJAaW1wb3J0IFwifmJ1b3lhbnQtdXRpbHMvdXRpbGl0aWVzL2FsbFwiO1xuXG4uc2l0ZSB7XG4gIG1hcmdpbi1ib3R0b206IGdyaWQtcm93cygyKTtcbn1cblxuLmhlYWRlciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgYWxpZ24taXRlbXM6IGZsZXgtc3RhcnQ7XG4gIHBhZGRpbmc6IGdyaWQtcm93cygyKTtcbiAgYmFja2dyb3VuZDogJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlc3Q7XG4gIGJvcmRlcjogMXB4IHNvbGlkICRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ7XG4gIGJvcmRlci1yYWRpdXM6ICRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2UgJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZSAwIDA7XG59XG5cbi5iYW5rTG9nb05hbWVXcmFwcGVyIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiBub3dyYXA7XG59XG5cbi5iYW5rTG9nbyB7XG4gIHdpZHRoOiA0MHB4O1xuICBoZWlnaHQ6IDQwcHg7XG4gIGJvcmRlci1yYWRpdXM6ICRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tc21hbGw7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG59XG5cbi5iYW5rTmFtZSB7XG4gIG1hcmdpbjogMDtcbn1cblxuLnJlYXV0aE5vdGlmaWNhdGlvbiB7XG4gIGJvcmRlcjogMXB4IHNvbGlkICRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ7XG4gIGJvcmRlci10b3A6IDA7XG4gIHBhZGRpbmc6IGdyaWQtcm93cygyKSBncmlkLXJvd3MoMikgMDtcbiAgYm9yZGVyLXJhZGl1czogMCAwICRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2UgJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTtcbn1cblxuLmRhc2hib2FyZFdpZGdldFNpdGVBY2NvdW50cyB7XG4gID4gOmxhc3QtY2hpbGQge1xuICAgIGJvcmRlci1yYWRpdXM6IDAgMCAkZ2xvYmFsLWJvcmRlci1yYWRpdXMtLWxhcmdlICRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2U7XG4gIH1cbn1cbiIsIi8vXG4vLyBCYXNlIFZhcmlhYmxlc1xuLy9cbi8vIFVzZSB0aGUgYGdldC1iYXNlKClgIGZ1bmN0aW9uIHRvIGFjY2VzcyB0aGVzZSB2YWx1ZXMuXG4vLyBFeGFtcGxlOiBnZXQtYmFzZSh0eXBlLCBzYW5zKTtcbi8vXG5cbiRiYXNlOiAoXG5cbiAgLy8gREVQUkVDQVRFRDogVGhlc2UgY29sb3VyIGRlZmluaXRpb25zIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuICAvLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2UuIFVzZSB0aGUgJGJhc2UgdmFyaWFibGVzIGJlbG93LlxuICBjb2xvcjogKFxuICAgIGdyYXk6ICAgICAgICAgICBoc2xhKDIwMCwgNyUsIDU1JSwgMSksXG4gICAgc2xhdGVncmF5OiAgICAgIGhzbGEoMjA0LCAyMSUsIDU0JSwgMSksXG4gICAgcmljaGJsdWU6ICAgICAgIGhzbGEoMjE2LCA0MCUsIDU1JSwgMSksXG4gICAgdGVhbDogICAgICAgICAgIGhzbGEoMTg1LCA4MSUsIDMxJSwgMSksXG4gICAgdHVycXVvaXNlOiAgICAgIGhzbGEoMTkyLCAxMDAlLCAzMSUsIDEpLFxuICAgIHJlZDogICAgICAgICAgICBoc2xhKDAsIDY1JSwgNTUlLCAxKSxcbiAgICBvcmFuZ2U6ICAgICAgICAgaHNsYSgzNSwgODYlLCA1NCUsIDEpLFxuICAgIHllbGxvdzogICAgICAgICBoc2xhKDUyLCA4MCUsIDUwJSwgMSksXG4gICAgc2t5Ymx1ZTogICAgICAgIGhzbGEoMjAwLCA3NSUsIDUzJSwgMSksXG4gICAgcGVyaXdpbmtsZTogICAgIGhzbGEoMjIyLCA2OSUsIDU0JSwgMSksXG4gICAgcHVycGxlOiAgICAgICAgIGhzbGEoMjg0LCA1MyUsIDU1JSwgMSksXG4gICAgc3ByaW5nZ3JlZW46ICAgIGhzbGEoMTQ4LCA2NSUsIDUxJSwgMSksXG4gICAgeWVsbG93Z3JlZW46ICAgIGhzbGEoNzIsIDczJSwgNTUlLCAxKVxuICApLFxuXG4gIGdyaWQ6IChcbiAgICBjb2x1bW4td2lkdGg6ICAgNDBweCxcbiAgICBndXR0ZXItd2lkdGg6ICAgMjBweCxcbiAgICBtaW4tY29sdW1uczogICAgMSxcbiAgICBtYXgtY29sdW1uczogICAgMTYsXG4gICAgYmFzZWxpbmUtdW5pdDogIDhweFxuICApLFxuXG4gIHR5cGU6IChcbiAgICBiYXNlLWZvbnQtc2l6ZTogMTZweCxcbiAgICBtaW4tZm9udC1zaXplOiAgMTRweCxcbiAgICBsaW5lLWhlaWdodC1yYXRpbzogMS40LFxuICAgIG1vZHVsYXItc2NhbGU6IChcbiAgICAgIGRlc2t0b3A6IDEuMixcbiAgICAgIG1vYmlsZTogMS4xMjVcbiAgICApLFxuICAgIHNhbnM6ICAgICAgICAgICAoRGluZXJvU2Fucywgc2Fucy1zZXJpZiksXG4gICAgc2VyaWY6ICAgICAgICAgIChHZW9yZ2lhLCBcIlRpbWVzIE5ldyBSb21hblwiLCBzZXJpZiksXG4gICAgY3Vyc2l2ZTogICAgICAgIChDYXZlYXQsIGN1cnNpdmUpLFxuICAgIG1vbm86ICAgICAgICAgICAoQ29uc29sYXMsIE1vbmFjbywgXCJDb3VyaWVyIE5ld1wiLCBDb3VyaWVyLCBtb25vc3BhY2UpXG4gICksXG5cbiAgLy8gREVQUkVDQVRFRDogVGhpcyBpY29uIGltcGxlbWVudGF0aW9uIHNob3VsZCBub3QgYmUgdXNlZCBhbmQgd2lsbCBiZVxuICAvLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2UuIFVzZSB0aGUgU1ZHIGljb25zIGluc3RlYWQuXG4gIGljb246IChcbiAgICBhZGQ6ICAgICAgICAgICAgXCJcXGU5MDBcIixcbiAgICBhdHRhY2htZW50OiAgICAgXCJcXGU5MDFcIixcbiAgICBhdHRlbnRpb246ICAgICAgXCJcXGU5MDJcIixcbiAgICBiYWNrOiAgICAgICAgICAgXCJcXGU5MDNcIixcbiAgICBjYW5jZWw6ICAgICAgICAgXCJcXGU5MDRcIixcbiAgICBjaGVjazogICAgICAgICAgXCJcXGU5MDVcIixcbiAgICBjbG9zZS1tZW51OiAgICAgXCJcXGU5MDZcIixcbiAgICBjb2xsYXBzZTogICAgICAgXCJcXGU5MDdcIixcbiAgICBjb21tZW50OiAgICAgICAgXCJcXGU5MDhcIixcbiAgICBjcmVkaXRjYXJkOiAgICAgXCJcXGU5MDlcIixcbiAgICBkYXRlOiAgICAgICAgICAgXCJcXGU5MGFcIixcbiAgICBkZWNyZWFzZWQ6ICAgICAgXCJcXGU5MGJcIixcbiAgICBkZWxldGU6ICAgICAgICAgXCJcXGU5MGNcIixcbiAgICBkZXNrdG9wOiAgICAgICAgXCJcXGU5MGRcIixcbiAgICBkb2N1bWVudDogICAgICAgXCJcXGU5MGVcIixcbiAgICBkb3dubG9hZDogICAgICAgXCJcXGU5MGZcIixcbiAgICBkdXBsaWNhdGU6ICAgICAgXCJcXGU5MTBcIixcbiAgICBlZGl0OiAgICAgICAgICAgXCJcXGU5MTFcIixcbiAgICBlcnJvcjogICAgICAgICAgXCJcXGU5MTJcIixcbiAgICBleHBhbmQ6ICAgICAgICAgXCJcXGU5MTNcIixcbiAgICBmYWNlYm9vazogICAgICAgXCJcXGU5MTRcIixcbiAgICBmb3J3YXJkOiAgICAgICAgXCJcXGU5MTVcIixcbiAgICBnb29nbGU6ICAgICAgICAgXCJcXGU5MTZcIixcbiAgICBoZWxwOiAgICAgICAgICAgXCJcXGU5MTdcIixcbiAgICBob21lOiAgICAgICAgICAgXCJcXGU5MThcIixcbiAgICBpbWFnZTogICAgICAgICAgXCJcXGU5MTlcIixcbiAgICBpbmNyZWFzZWQ6ICAgICAgXCJcXGU5MWFcIixcbiAgICBpbmZvOiAgICAgICAgICAgXCJcXGU5MWJcIixcbiAgICBsaW5rOiAgICAgICAgICAgXCJcXGU5MWNcIixcbiAgICBsaW5rZWRpbjogICAgICAgXCJcXGU5MWRcIixcbiAgICBsb2NhdGlvbjogICAgICAgXCJcXGU5MWVcIixcbiAgICBtZXNzYWdlczogICAgICAgXCJcXGU5MWZcIixcbiAgICBtb2JpbGU6ICAgICAgICAgXCJcXGU5MjBcIixcbiAgICBtb3JlLWFjdGlvbnM6ICAgXCJcXGU5MjFcIixcbiAgICBuYXZpZ2F0aW9uOiAgICAgXCJcXGU5MjJcIixcbiAgICBvcGVuLW1lbnU6ICAgICAgXCJcXGU5MjNcIixcbiAgICBwcmludDogICAgICAgICAgXCJcXGU5MjRcIixcbiAgICByZW1pbmRlcjogICAgICAgXCJcXGU5MjVcIixcbiAgICBzZWFyY2g6ICAgICAgICAgXCJcXGU5MjZcIixcbiAgICBzZWN1cmU6ICAgICAgICAgXCJcXGU5MjdcIixcbiAgICBzZW5kOiAgICAgICAgICAgXCJcXGU5MjhcIixcbiAgICBzZXR0aW5nczogICAgICAgXCJcXGU5MjlcIixcbiAgICBzdGFyOiAgICAgICAgICAgXCJcXGU5MmFcIixcbiAgICBzdWNjZXNzOiAgICAgICAgXCJcXGU5MmJcIixcbiAgICB0YWJsZXQ6ICAgICAgICAgXCJcXGU5MmNcIixcbiAgICB0YWc6ICAgICAgICAgICAgXCJcXGU5MmRcIixcbiAgICB0aW1lOiAgICAgICAgICAgXCJcXGU5MmVcIixcbiAgICB0d2l0dGVyOiAgICAgICAgXCJcXGU5MmZcIixcbiAgICB1bmRvOiAgICAgICAgICAgXCJcXGU5MzBcIixcbiAgICB1c2VyOiAgICAgICAgICAgXCJcXGU5MzFcIixcbiAgICB2aWRlbzogICAgICAgICAgXCJcXGU5MzJcIixcbiAgICB3YXZlOiAgICAgICAgICAgXCJcXGU5MzNcIixcbiAgICB5YWhvbzogICAgICAgICAgXCJcXGU5MzRcIlxuICApXG4pO1xuXG4vLyBERVBSRUNBVEVEOiBUaGVzZSBjb2xvdXIgZGVmaW5pdGlvbnMgc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4vLyByZW1vdmVkIGluIGFuIHVwY29taW5nIHJlbGVhc2Ugd2hlbiB0aGV5IGFyZSBmaW5hbGx5IHJlbW92ZWQgZnJvbSBORVhULVdBVkUuXG4vLyBVc2UgdGhlICRiYXNlIHZhcmlhYmxlcyBiZWxvdy5cblxuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tZGFya2VyOiBoc2xhKDE5NSwgNzYlLCAyOCUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tZGFyazogaHNsYSgxOTUsIDc2JSwgMzYlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWJhc2U6IGhzbGEoMTk1LCA3NiUsIDUzJSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1saWdodDogaHNsYSgxOTUsIDc2JSwgODMlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWxpZ2h0ZXI6IGhzbGEoMTk1LCA3NiUsIDkzJSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWRhcmtlcjogaHNsYSgyODQsIDUzJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tZGFyazogaHNsYSgyODQsIDUzJSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tYmFzZTogaHNsYSgyODQsIDUzJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tbGlnaHQ6IGhzbGEoMjg0LCA1MyUsIDg1JSwgMSk7XG4kYmFzZS1jb2xvci1wdXJwbGUtLWxpZ2h0ZXI6IGhzbGEoMjg0LCA1MyUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tZGFya2VyOiBoc2xhKDc4LCA3NCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tZGFyazogaHNsYSg3OCwgNzQlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWJhc2U6IGhzbGEoNzgsIDc0JSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1saWdodDogaHNsYSg3OCwgNzQlLCA4MSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWxpZ2h0ZXI6IGhzbGEoNzgsIDc0JSwgOTAlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWRhcmtlcjogaHNsYSgxODMsIDgwJSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWRhcms6IGhzbGEoMTgzLCA4MCUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1iYXNlOiBoc2xhKDE4MywgODAlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tbGlnaHQ6IGhzbGEoMTgzLCA4MCUsIDc4JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1saWdodGVyOiBoc2xhKDE4MywgODAlLCA5MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWRhcmstYmx1ZTogaHNsYSgyMDksIDY5JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1tZWRpdW0tYmx1ZTogaHNsYSgyMTIsIDkzJSwgNTglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1saWdodC1ibHVlOiBoc2xhKDIwNiwgOTYlLCA3MyUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodGVzdDogaHNsYSgyMDYsIDIzJSwgOTQlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHRlcjogaHNsYSgyMDQsIDIxJSwgODYlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tbGlnaHQ6IGhzbGEoMjA0LCAxOCUsIDc1JSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWJhc2U6IGhzbGEoMjA0LCAxMiUsIDYyJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcms6IGhzbGEoMjA0LCA5JSwgNDUlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFya2VyOiBoc2xhKDIwMywgMTMlLCAzMiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXN0OiBoc2xhKDIwNiwgMjIlLCAxNCUsIDEpO1xuXG5cbi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cblxuLy9cbi8vIEJBU0UgVkFSSUFCTEUgREVGSU5JVElPTlNcbi8vXG4vLyBUaGVzZSBhcmUgYmFzZSB2YXJpYWJsZXMgcHJpbWFyaWx5IGZvciB1c2UgaW50ZXJuYWxseS4gVGhleSBhcmUgYXZhaWxhYmxlXG4vLyBleHRlcm5hbGx5LCBidXQgcHJlZmVyZW5jZSBzaG91bGQgYmUgZ2l2ZW4gdG8gZ2xvYmFsIHZhcmlhYmxlcyAoc2VlIGJlbG93KS5cbi8vXG4vL1xuLy8gVHlwb2dyYXBoeVxuLy9cbi8vIFRvIHNldCB0aGUgbWluLWZvbnQtc2l6ZSBleHBsaWNpdGx5XG4vL1xuJGdsb2JhbC1taW4tZm9udC1zaXplOiBnZXQtYmFzZSh0eXBlLCBtaW4tZm9udC1zaXplKTtcblxuLy9cbi8vIEJyYW5kIGNvbG91cnNcbi8vXG5cbi8vIE1haW4gYmx1ZSB1c2VkIG9uIGludGVyYWN0aW9ucyAtIEJyYW5kIEJsdWUgRWxlY3RyaWNcbiRiYXNlLWNvbG9yLWJyYW5kLS11aTogaHNsYSgyMjcsIDczJSwgNDclLCAxKTtcblxuLy8gUHJpbWFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtY29uZmlkZW5jZTogaHNsYSgyMTIsIDkzJSwgNTglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLXRydXN0OiBoc2xhKDIwOSwgODIlLCA3MSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWdyZWVuLWdyb3VuZGluZzogaHNsYSgxOTMsIDQ0JSwgNjglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1saWxhYy1jcmVhdGl2ZTogaHNsYSgyODQsIDEwMCUsIDg0JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbmF2eS1zdGFiaWxpdHk6IGhzbGEoMjI0LCAxMDAlLCAyMCUsIDEpO1xuXG4vLyBTZWNvbmRhcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1iZWlnZS1kYWlzeTogaHNsYSgyMywgNDAlLCA5NiUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM6IGhzbGEoMjI3LCA3MyUsIDQ3JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tbWVsb24tb3JhbmdlOiBoc2xhKDE4LCA3MyUsIDgwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tb3JhbmdlLWNhcnJvdDogaHNsYSgxOCwgODglLCA3MCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXB1cnBsZS1vcmNoaWQ6IGhzbGEoMjM3LCA4MiUsIDc4JSwgMSk7XG5cbi8vIFRlcnRpYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYXF1YW1hcmluZTogaHNsYSgxNDgsIDY5JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1ibHVlLWN5YW46IGhzbGEoMTgzLCA4MCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tb3BhbC1wdXJwbGU6IGhzbGEoMjY3LCA3MyUsIDg3JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcGVhY2g6IGhzbGEoMjgsIDY3JSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wdXJwbGUtZmxvcmFsOiBoc2xhKDI2NywgNzMlLCA2MSUsIDEpO1xuXG4vLyBOZXV0cmFsc1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtYXJjdGljOiBoc2xhKDE4MSwgODclLCA4OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtcG93ZGVyOiBoc2xhKDIyMCwgODQlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtc2t5OiBoc2xhKDE5NiwgODQlLCA4MyUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtc3RvbmU6IGhzbGEoMjAzLCA1NyUsIDg1JSwgMSk7XG5cblxuLy9cbi8vIEFjY2VudCBjb2xvdXJzXG4vL1xuLy8gVXNlZCB0byBwcm92aWRlIG1lYW5pbmcgdmlzdWFsbHkgKGVnIGZvciBub3RpZmljYXRpb25zLCBtZXNzYWdpbmcsIGJhZGdlcylcbi8vIGFuZCBmb3IgaW5mb2dyYXBoaWMgdXNlLlxuLy9cbi8vIFRoZXJlIGFyZSA1IHNoYWRlcyBmb3IgZWFjaDogZGFya2VyLCBkYXJrLCBiYXNlLCBsaWdodCwgbGlnaHRlclxuLy9cblxuLy8gUmVkXG4kYmFzZS1jb2xvci1yZWQtLWRhcmtlc3Q6IGhzbGEoMCwgNjAlLCAxOSUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1kYXJrZXI6IGhzbGEoMCwgNTElLCAzMyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1kYXJrOiBoc2xhKDAsIDYwJSwgNDMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tYmFzZTogaHNsYSgwLCA3MyUsIDUzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0OiBoc2xhKDAsIDEwMCUsIDg0JSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0ZXI6IGhzbGEoMCwgODAlLCA5MiUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1saWdodGVzdDogaHNsYSgwLCAxMDAlLCA5NyUsIDEpO1xuXG4vLyBPcmFuZ2VcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFya2VzdDogaHNsYSgzMiwgNzYlLCAyMCUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrZXI6IGhzbGEoMzIsIDczJSwgMjklLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tZGFyazogaHNsYSgzMiwgNzMlLCA0MyUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1iYXNlOiBoc2xhKDM1LCA4NiUsIDU0JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0OiBoc2xhKDMyLCAxMDAlLCA3MyUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodGVyOiBoc2xhKDMyLCAxMDAlLCA4OSUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1saWdodGVzdDogaHNsYSgzMywgMTAwJSwgOTQlLCAxKTtcblxuLy9ZZWxsb3dcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VzdDogaHNsYSg1MCwgOTIlLCAxOCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXI6IGhzbGEoNTAsIDY3JSwgMzklLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tZGFyazogaHNsYSg1MSwgNjklLCA1MSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1iYXNlOiBoc2xhKDUxLCAxMDAlLCA2MCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodDogaHNsYSg1MSwgMTAwJSwgNzclLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHRlcjogaHNsYSg1MSwgMTAwJSwgODglLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvdy0tbGlnaHRlc3Q6IGhzbGEoNTEsIDEwMCUsIDk1JSwgMSk7XG5cbi8vIFNwcmluZyBHcmVlblxuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlc3Q6IGhzbGEoMTQ4LCA4NSUsIDE1JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VyOiBoc2xhKDE0OCwgNzAlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcms6IGhzbGEoMTQ4LCA3MCUsIDMxJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tYmFzZTogaHNsYSgxNDgsIDcwJSwgNDYlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodDogaHNsYSgxNDgsIDcwJSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1saWdodGVyOiBoc2xhKDE0OCwgNzAlLCA5MyUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0ZXN0OiBoc2xhKDE0OCwgMTAwJSwgOTclLCAxKTtcblxuJGJhc2UtY29sb3Itd2hpdGU6ICNGRkZGRkY7XG4kYmFzZS1jb2xvci1ibGFjazogIzAwMDAwMDtcblxuLy9cbi8vIFVJIGNvbG91cnNcbi8vXG4vLyBVc2VkIGluIHRoZSBiYWNrZ3JvdW5kLCBzdHJva2UsIGFuZCBjb3B5IG9mIGVsZW1lbnRzIChlZyBib3hlcywgbGF5b3V0cywgbmF2aWdhdGlvbiwgZm9ybXMpLlxuLy9cbi8vIFRoZXJlIGFyZSA3IHNoYWRlcyBmb3IgZWFjaDogZGFya2VzdCwgZGFya2VyLCBkYXJrLCBiYXNlLCBsaWdodCwgbGlnaHRlciwgbGlnaHRlc3Rcbi8vXG5cbi8vIFJpY2ggQmx1ZVxuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlc3Q6IGhzbGEoMjEyLCA4MSUsIDIxJSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VyOiBoc2xhKDIwOSwgNjklLCAzOSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcms6IGhzbGEoMjA5LCA1NyUsIDY2JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tYmFzZTogaHNsYSgyMDksIDU4JSwgODElLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodDogaHNsYSgyMDksIDY0JSwgODklLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodGVyOiBoc2xhKDIwOSwgMTAwJSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1saWdodGVzdDogaHNsYSgyMDksIDEwMCUsIDk4JSwgMSk7XG5cbi8vIEdyYXlcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0ZXN0OiBoc2xhKDIwNiwgMjMlLCA5NCUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlcjogaHNsYSgyMDQsIDIxJSwgODYlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWxpZ2h0OiBoc2xhKDIwNCwgMTglLCA3NSUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tYmFzZTogaHNsYSgyMDQsIDEyJSwgNjIlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcms6IGhzbGEoMjA0LCA5JSwgNDUlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcmtlcjogaHNsYSgyMDMsIDEzJSwgMzIlLCAxKTtcbiRiYXNlLWNvbG9yLWdyYXktLWRhcmtlc3Q6IGhzbGEoMjA2LCAyMiUsIDE0JSwgMSk7XG5cblxuXG4vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXG5cbi8vXG4vLyBHTE9CQUwgVkFSSUFCTEVTXG4vL1xuLy8gVGhlc2UgdmFyaWFibGVzIGFyZSBtZWFudCB0byBiZSB1c2VkIHRoZW1hdGljYWxseSBpbiBtb3JlIHRoYW4gb25lIHBsYWNlIHRvXG4vLyBtYWludGFpbiBhIHNlbnNlIG9mIGNvbnNpc3RlbmN5IGFuZCBlYXNlIG9mIHVwZGF0aW5nLlxuLy9cblxuLy8gQ29sb3JzXG4kZ2xvYmFsLWNvbG9yLXRleHQtLWRhcms6ICRiYXNlLWNvbG9yLWdyYXktLWRhcmtlc3Q7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLW1pZDogJGJhc2UtY29sb3ItZ3JheS0tZGFyaztcbiRnbG9iYWwtY29sb3ItdGV4dC0tbXV0ZWQ6ICRiYXNlLWNvbG9yLWdyYXktLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItdGV4dC0tbGluazogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLXN1Y2Nlc3M6ICRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXI7XG4kZ2xvYmFsLWNvbG9yLXRleHQtLXdhcm5pbmc6ICRiYXNlLWNvbG9yLXllbGxvdy0tZGFya2VzdDtcbiRnbG9iYWwtY29sb3ItdGV4dC0tZGFuZ2VyOiAkYmFzZS1jb2xvci1yZWQtLWRhcms7XG4kZ2xvYmFsLWNvbG9yLWJhY2tncm91bmQtLWJhc2U6IHdoaXRlO1xuJGdsb2JhbC1jb2xvci1iYWNrZ3JvdW5kLS1oaWdobGlnaHQ6IGhzbGEoMjEyLCAxMDAlLCA5NSUsIDEpOyAvLyBzYW1lIGh1ZSBhcyBicmFuZC11aVxuJGdsb2JhbC1jb2xvci1ib3JkZXItLWhpZ2hsaWdodDogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG4kZ2xvYmFsLWNvbG9yLWJvcmRlci0tZGl2aWRlcjogJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlcjtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1zdWNjZXNzOiAkYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS13YXJuaW5nOiAkYmFzZS1jb2xvci15ZWxsb3ctLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0tZGFuZ2VyOiAkYmFzZS1jb2xvci1yZWQtLWJhc2U7XG4kZ2xvYmFsLWNvbG9yLWFjY2VudC0taW5mbzogJGJhc2UtY29sb3ItcmljaGJsdWUtLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1icmFuZDogJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtZWxlY3RyaWM7XG5cbi8vIEJvcmRlciByYWRpaVxuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1zbWFsbDogM3B4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1tZWRpdW06IDRweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0tbGFyZ2U6IDhweDtcbiRnbG9iYWwtYm9yZGVyLXJhZGl1cy0teGxhcmdlOiAxMnB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1yb3VuZGVkOiA1MDBweDsgLy8gaW50ZW50aW9uYWxseSBodWdlIHNpbmNlIHdlIGRvbid0IGtub3cgd2lkdGgvaGVpZ2h0XG5cbi8vIEVsZXZhdGlvbiAoRHJvcCBzaGFkb3cpXG4vL1xuLy8gVGhlc2UgdmFyaWFibGVzIGFyZSBtZWFudCB0byBiZSBoaWdobGlnaHQgZWxlbWVudHMgc3VjaCBhcyBib3hlcywgdGlsZXMsIGV4cGFuZGVkIHJvd3MvY2FyZHNcbi8vXG5cbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTE6IDBweCAycHggOHB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4yKTsgLy8gRm9yIGRyb3Bkb3ducywgZGF0ZSBwaWNrZXJzXG4kZ2xvYmFsLXNoYWRvdy0tZWxldmF0aW9uLS0yOiAwcHggNHB4IDE2cHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjMpOyAvLyBUaWxlcyBob3ZlciBzdGF0ZSwgcG9wb3ZlcnNcbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTM6IDBweCA4cHggMzJweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMzUpOyAvLyBIaWdobGlnaHRlZCBib3hlcywgd2l6YXJkcyBhbmQgd29ya2Zsb3cgc3RlcHMsIHRvYXN0XG4kZ2xvYmFsLXNoYWRvdy0tbW9kYWw6IDBweCA4cHggMzJweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDEpOyAvLyBNb2RhbHNcblxuLy8gQnJlYWtwb2ludHNcbi8vIFRPRE86IERlcHJlY2F0ZSBvbGQgYnJlYWtwb2ludHNcbiRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmU6IDQ4MHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQ6IDc2OHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS1kZXNrdG9wOiAxMDI0cHg7XG5cbiRnbG9iYWwtYnJlYWtwb2ludC0tcGhvbmUtLW1heDogNDgwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldC0tbWluOiA0ODFweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0LS1tYXg6IDc2OHB4O1xuJGdsb2JhbC1icmVha3BvaW50LS1kZXNrdG9wLS1taW46IDc2OXB4OyJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .txn-import-prompt__container {
        display: flex;
        justify-content: center;
        text-align: center
    }

    .txn-import-prompt__button {
        color: #2046cf;
        border-color: #2046cf;
        background: #fff
    }

    .txn-import-prompt__bank-img-icon {
        width: 152px;
        height: 128px
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9EYXNoYm9hcmRXaWRnZXRUeG5JbXBvcnRQcm9tcHQvRGFzaGJvYXJkV2lkZ2V0VHhuSW1wb3J0UHJvbXB0LnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvYnVveWFudC11dGlscy91dGlsaXRpZXMvX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXdDQSwwQkFDRSxPQUVFLGNBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsWUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDRCQUNFLE9BRUUsZUFBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLGFBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw2QkFDRSxPQUVFLGdCQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQzlFRiw4QkFDRSxZQUFBLENBQ0Esc0JBQUEsQ0FDQSxpQkFBQSxDQUdGLDJCQUNFLGFDMEptQixDRHpKbkIsb0JDeUptQixDRHhKbkIsZUNtT2UsQ0RoT2pCLGtDQUNFLFdBQUEsQ0FDQSxZQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi50eG4taW1wb3J0LXByb21wdCB7XG4gICZfX2NvbnRhaW5lciB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIH1cblxuICAmX19idXR0b24ge1xuICAgIGNvbG9yOiAkYmFzZS1jb2xvci1icmFuZC0tdWk7XG4gICAgYm9yZGVyLWNvbG9yOiAkYmFzZS1jb2xvci1icmFuZC0tdWk7XG4gICAgYmFja2dyb3VuZDogJGJhc2UtY29sb3Itd2hpdGU7XG4gIH1cblxuICAmX19iYW5rLWltZy1pY29uIHtcbiAgICB3aWR0aDogMTUycHg7XG4gICAgaGVpZ2h0OiAxMjhweDtcbiAgfVxufVxuIiwiLy9cbi8vIEJhc2UgVmFyaWFibGVzXG4vL1xuLy8gVXNlIHRoZSBgZ2V0LWJhc2UoKWAgZnVuY3Rpb24gdG8gYWNjZXNzIHRoZXNlIHZhbHVlcy5cbi8vIEV4YW1wbGU6IGdldC1iYXNlKHR5cGUsIHNhbnMpO1xuLy9cblxuJGJhc2U6IChcblxuICAvLyBERVBSRUNBVEVEOiBUaGVzZSBjb2xvdXIgZGVmaW5pdGlvbnMgc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSAkYmFzZSB2YXJpYWJsZXMgYmVsb3cuXG4gIGNvbG9yOiAoXG4gICAgZ3JheTogICAgICAgICAgIGhzbGEoMjAwLCA3JSwgNTUlLCAxKSxcbiAgICBzbGF0ZWdyYXk6ICAgICAgaHNsYSgyMDQsIDIxJSwgNTQlLCAxKSxcbiAgICByaWNoYmx1ZTogICAgICAgaHNsYSgyMTYsIDQwJSwgNTUlLCAxKSxcbiAgICB0ZWFsOiAgICAgICAgICAgaHNsYSgxODUsIDgxJSwgMzElLCAxKSxcbiAgICB0dXJxdW9pc2U6ICAgICAgaHNsYSgxOTIsIDEwMCUsIDMxJSwgMSksXG4gICAgcmVkOiAgICAgICAgICAgIGhzbGEoMCwgNjUlLCA1NSUsIDEpLFxuICAgIG9yYW5nZTogICAgICAgICBoc2xhKDM1LCA4NiUsIDU0JSwgMSksXG4gICAgeWVsbG93OiAgICAgICAgIGhzbGEoNTIsIDgwJSwgNTAlLCAxKSxcbiAgICBza3libHVlOiAgICAgICAgaHNsYSgyMDAsIDc1JSwgNTMlLCAxKSxcbiAgICBwZXJpd2lua2xlOiAgICAgaHNsYSgyMjIsIDY5JSwgNTQlLCAxKSxcbiAgICBwdXJwbGU6ICAgICAgICAgaHNsYSgyODQsIDUzJSwgNTUlLCAxKSxcbiAgICBzcHJpbmdncmVlbjogICAgaHNsYSgxNDgsIDY1JSwgNTElLCAxKSxcbiAgICB5ZWxsb3dncmVlbjogICAgaHNsYSg3MiwgNzMlLCA1NSUsIDEpXG4gICksXG5cbiAgZ3JpZDogKFxuICAgIGNvbHVtbi13aWR0aDogICA0MHB4LFxuICAgIGd1dHRlci13aWR0aDogICAyMHB4LFxuICAgIG1pbi1jb2x1bW5zOiAgICAxLFxuICAgIG1heC1jb2x1bW5zOiAgICAxNixcbiAgICBiYXNlbGluZS11bml0OiAgOHB4XG4gICksXG5cbiAgdHlwZTogKFxuICAgIGJhc2UtZm9udC1zaXplOiAxNnB4LFxuICAgIG1pbi1mb250LXNpemU6ICAxNHB4LFxuICAgIGxpbmUtaGVpZ2h0LXJhdGlvOiAxLjQsXG4gICAgbW9kdWxhci1zY2FsZTogKFxuICAgICAgZGVza3RvcDogMS4yLFxuICAgICAgbW9iaWxlOiAxLjEyNVxuICAgICksXG4gICAgc2FuczogICAgICAgICAgIChEaW5lcm9TYW5zLCBzYW5zLXNlcmlmKSxcbiAgICBzZXJpZjogICAgICAgICAgKEdlb3JnaWEsIFwiVGltZXMgTmV3IFJvbWFuXCIsIHNlcmlmKSxcbiAgICBjdXJzaXZlOiAgICAgICAgKENhdmVhdCwgY3Vyc2l2ZSksXG4gICAgbW9ubzogICAgICAgICAgIChDb25zb2xhcywgTW9uYWNvLCBcIkNvdXJpZXIgTmV3XCIsIENvdXJpZXIsIG1vbm9zcGFjZSlcbiAgKSxcblxuICAvLyBERVBSRUNBVEVEOiBUaGlzIGljb24gaW1wbGVtZW50YXRpb24gc2hvdWxkIG5vdCBiZSB1c2VkIGFuZCB3aWxsIGJlXG4gIC8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZS4gVXNlIHRoZSBTVkcgaWNvbnMgaW5zdGVhZC5cbiAgaWNvbjogKFxuICAgIGFkZDogICAgICAgICAgICBcIlxcZTkwMFwiLFxuICAgIGF0dGFjaG1lbnQ6ICAgICBcIlxcZTkwMVwiLFxuICAgIGF0dGVudGlvbjogICAgICBcIlxcZTkwMlwiLFxuICAgIGJhY2s6ICAgICAgICAgICBcIlxcZTkwM1wiLFxuICAgIGNhbmNlbDogICAgICAgICBcIlxcZTkwNFwiLFxuICAgIGNoZWNrOiAgICAgICAgICBcIlxcZTkwNVwiLFxuICAgIGNsb3NlLW1lbnU6ICAgICBcIlxcZTkwNlwiLFxuICAgIGNvbGxhcHNlOiAgICAgICBcIlxcZTkwN1wiLFxuICAgIGNvbW1lbnQ6ICAgICAgICBcIlxcZTkwOFwiLFxuICAgIGNyZWRpdGNhcmQ6ICAgICBcIlxcZTkwOVwiLFxuICAgIGRhdGU6ICAgICAgICAgICBcIlxcZTkwYVwiLFxuICAgIGRlY3JlYXNlZDogICAgICBcIlxcZTkwYlwiLFxuICAgIGRlbGV0ZTogICAgICAgICBcIlxcZTkwY1wiLFxuICAgIGRlc2t0b3A6ICAgICAgICBcIlxcZTkwZFwiLFxuICAgIGRvY3VtZW50OiAgICAgICBcIlxcZTkwZVwiLFxuICAgIGRvd25sb2FkOiAgICAgICBcIlxcZTkwZlwiLFxuICAgIGR1cGxpY2F0ZTogICAgICBcIlxcZTkxMFwiLFxuICAgIGVkaXQ6ICAgICAgICAgICBcIlxcZTkxMVwiLFxuICAgIGVycm9yOiAgICAgICAgICBcIlxcZTkxMlwiLFxuICAgIGV4cGFuZDogICAgICAgICBcIlxcZTkxM1wiLFxuICAgIGZhY2Vib29rOiAgICAgICBcIlxcZTkxNFwiLFxuICAgIGZvcndhcmQ6ICAgICAgICBcIlxcZTkxNVwiLFxuICAgIGdvb2dsZTogICAgICAgICBcIlxcZTkxNlwiLFxuICAgIGhlbHA6ICAgICAgICAgICBcIlxcZTkxN1wiLFxuICAgIGhvbWU6ICAgICAgICAgICBcIlxcZTkxOFwiLFxuICAgIGltYWdlOiAgICAgICAgICBcIlxcZTkxOVwiLFxuICAgIGluY3JlYXNlZDogICAgICBcIlxcZTkxYVwiLFxuICAgIGluZm86ICAgICAgICAgICBcIlxcZTkxYlwiLFxuICAgIGxpbms6ICAgICAgICAgICBcIlxcZTkxY1wiLFxuICAgIGxpbmtlZGluOiAgICAgICBcIlxcZTkxZFwiLFxuICAgIGxvY2F0aW9uOiAgICAgICBcIlxcZTkxZVwiLFxuICAgIG1lc3NhZ2VzOiAgICAgICBcIlxcZTkxZlwiLFxuICAgIG1vYmlsZTogICAgICAgICBcIlxcZTkyMFwiLFxuICAgIG1vcmUtYWN0aW9uczogICBcIlxcZTkyMVwiLFxuICAgIG5hdmlnYXRpb246ICAgICBcIlxcZTkyMlwiLFxuICAgIG9wZW4tbWVudTogICAgICBcIlxcZTkyM1wiLFxuICAgIHByaW50OiAgICAgICAgICBcIlxcZTkyNFwiLFxuICAgIHJlbWluZGVyOiAgICAgICBcIlxcZTkyNVwiLFxuICAgIHNlYXJjaDogICAgICAgICBcIlxcZTkyNlwiLFxuICAgIHNlY3VyZTogICAgICAgICBcIlxcZTkyN1wiLFxuICAgIHNlbmQ6ICAgICAgICAgICBcIlxcZTkyOFwiLFxuICAgIHNldHRpbmdzOiAgICAgICBcIlxcZTkyOVwiLFxuICAgIHN0YXI6ICAgICAgICAgICBcIlxcZTkyYVwiLFxuICAgIHN1Y2Nlc3M6ICAgICAgICBcIlxcZTkyYlwiLFxuICAgIHRhYmxldDogICAgICAgICBcIlxcZTkyY1wiLFxuICAgIHRhZzogICAgICAgICAgICBcIlxcZTkyZFwiLFxuICAgIHRpbWU6ICAgICAgICAgICBcIlxcZTkyZVwiLFxuICAgIHR3aXR0ZXI6ICAgICAgICBcIlxcZTkyZlwiLFxuICAgIHVuZG86ICAgICAgICAgICBcIlxcZTkzMFwiLFxuICAgIHVzZXI6ICAgICAgICAgICBcIlxcZTkzMVwiLFxuICAgIHZpZGVvOiAgICAgICAgICBcIlxcZTkzMlwiLFxuICAgIHdhdmU6ICAgICAgICAgICBcIlxcZTkzM1wiLFxuICAgIHlhaG9vOiAgICAgICAgICBcIlxcZTkzNFwiXG4gIClcbik7XG5cbi8vIERFUFJFQ0FURUQ6IFRoZXNlIGNvbG91ciBkZWZpbml0aW9ucyBzaG91bGQgbm90IGJlIHVzZWQgYW5kIHdpbGwgYmVcbi8vIHJlbW92ZWQgaW4gYW4gdXBjb21pbmcgcmVsZWFzZSB3aGVuIHRoZXkgYXJlIGZpbmFsbHkgcmVtb3ZlZCBmcm9tIE5FWFQtV0FWRS5cbi8vIFVzZSB0aGUgJGJhc2UgdmFyaWFibGVzIGJlbG93LlxuXG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrZXI6IGhzbGEoMTk1LCA3NiUsIDI4JSwgMSk7XG4kYmFzZS1jb2xvci1za3libHVlLS1kYXJrOiBoc2xhKDE5NSwgNzYlLCAzNiUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tYmFzZTogaHNsYSgxOTUsIDc2JSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXNreWJsdWUtLWxpZ2h0OiBoc2xhKDE5NSwgNzYlLCA4MyUsIDEpO1xuJGJhc2UtY29sb3Itc2t5Ymx1ZS0tbGlnaHRlcjogaHNsYSgxOTUsIDc2JSwgOTMlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tZGFya2VyOiBoc2xhKDI4NCwgNTMlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1kYXJrOiBoc2xhKDI4NCwgNTMlLCA0MCUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1iYXNlOiBoc2xhKDI4NCwgNTMlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3ItcHVycGxlLS1saWdodDogaHNsYSgyODQsIDUzJSwgODUlLCAxKTtcbiRiYXNlLWNvbG9yLXB1cnBsZS0tbGlnaHRlcjogaHNsYSgyODQsIDUzJSwgOTUlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrZXI6IGhzbGEoNzgsIDc0JSwgMjYlLCAxKTtcbiRiYXNlLWNvbG9yLXllbGxvd2dyZWVuLS1kYXJrOiBoc2xhKDc4LCA3NCUsIDQwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tYmFzZTogaHNsYSg3OCwgNzQlLCA1NSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93Z3JlZW4tLWxpZ2h0OiBoc2xhKDc4LCA3NCUsIDgxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3dncmVlbi0tbGlnaHRlcjogaHNsYSg3OCwgNzQlLCA5MCUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFya2VyOiBoc2xhKDE4MywgODAlLCAyNiUsIDEpO1xuJGJhc2UtY29sb3ItdGVhbC0tZGFyazogaHNsYSgxODMsIDgwJSwgNDAlLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWJhc2U6IGhzbGEoMTgzLCA4MCUsIDU1JSwgMSk7XG4kYmFzZS1jb2xvci10ZWFsLS1saWdodDogaHNsYSgxODMsIDgwJSwgNzglLCAxKTtcbiRiYXNlLWNvbG9yLXRlYWwtLWxpZ2h0ZXI6IGhzbGEoMTgzLCA4MCUsIDkwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZGFyay1ibHVlOiBoc2xhKDIwOSwgNjklLCAzOSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLW1lZGl1bS1ibHVlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpZ2h0LWJsdWU6IGhzbGEoMjA2LCA5NiUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWxpZ2h0ZXN0OiBoc2xhKDIwNiwgMjMlLCA5NCUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1saWdodDogaHNsYSgyMDQsIDE4JSwgNzUlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tYmFzZTogaHNsYSgyMDQsIDEyJSwgNjIlLCAxKTtcbiRiYXNlLWNvbG9yLXNsYXRlZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3Itc2xhdGVncmF5LS1kYXJrZXI6IGhzbGEoMjAzLCAxMyUsIDMyJSwgMSk7XG4kYmFzZS1jb2xvci1zbGF0ZWdyYXktLWRhcmtlc3Q6IGhzbGEoMjA2LCAyMiUsIDE0JSwgMSk7XG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL1xuXG4vL1xuLy8gQkFTRSBWQVJJQUJMRSBERUZJTklUSU9OU1xuLy9cbi8vIFRoZXNlIGFyZSBiYXNlIHZhcmlhYmxlcyBwcmltYXJpbHkgZm9yIHVzZSBpbnRlcm5hbGx5LiBUaGV5IGFyZSBhdmFpbGFibGVcbi8vIGV4dGVybmFsbHksIGJ1dCBwcmVmZXJlbmNlIHNob3VsZCBiZSBnaXZlbiB0byBnbG9iYWwgdmFyaWFibGVzIChzZWUgYmVsb3cpLlxuLy9cbi8vXG4vLyBUeXBvZ3JhcGh5XG4vL1xuLy8gVG8gc2V0IHRoZSBtaW4tZm9udC1zaXplIGV4cGxpY2l0bHlcbi8vXG4kZ2xvYmFsLW1pbi1mb250LXNpemU6IGdldC1iYXNlKHR5cGUsIG1pbi1mb250LXNpemUpO1xuXG4vL1xuLy8gQnJhbmQgY29sb3Vyc1xuLy9cblxuLy8gTWFpbiBibHVlIHVzZWQgb24gaW50ZXJhY3Rpb25zIC0gQnJhbmQgQmx1ZSBFbGVjdHJpY1xuJGJhc2UtY29sb3ItYnJhbmQtLXVpOiBoc2xhKDIyNywgNzMlLCA0NyUsIDEpO1xuXG4vLyBQcmltYXJ5XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1jb25maWRlbmNlOiBoc2xhKDIxMiwgOTMlLCA1OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtdHJ1c3Q6IGhzbGEoMjA5LCA4MiUsIDcxJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tZ3JlZW4tZ3JvdW5kaW5nOiBoc2xhKDE5MywgNDQlLCA2OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWxpbGFjLWNyZWF0aXZlOiBoc2xhKDI4NCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1uYXZ5LXN0YWJpbGl0eTogaHNsYSgyMjQsIDEwMCUsIDIwJSwgMSk7XG5cbi8vIFNlY29uZGFyeVxuJGJhc2UtY29sb3ItYnJhbmQtLWJlaWdlLWRhaXN5OiBoc2xhKDIzLCA0MCUsIDk2JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYzogaHNsYSgyMjcsIDczJSwgNDclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1tZWxvbi1vcmFuZ2U6IGhzbGEoMTgsIDczJSwgODAlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcmFuZ2UtY2Fycm90OiBoc2xhKDE4LCA4OCUsIDcwJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tcHVycGxlLW9yY2hpZDogaHNsYSgyMzcsIDgyJSwgNzglLCAxKTtcblxuLy8gVGVydGlhcnlcbiRiYXNlLWNvbG9yLWJyYW5kLS1hcXVhbWFyaW5lOiBoc2xhKDE0OCwgNjklLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLWJsdWUtY3lhbjogaHNsYSgxODMsIDgwJSwgNTUlLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1vcGFsLXB1cnBsZTogaHNsYSgyNjcsIDczJSwgODclLCAxKTtcbiRiYXNlLWNvbG9yLWJyYW5kLS1wZWFjaDogaHNsYSgyOCwgNjclLCA4OCUsIDEpO1xuJGJhc2UtY29sb3ItYnJhbmQtLXB1cnBsZS1mbG9yYWw6IGhzbGEoMjY3LCA3MyUsIDYxJSwgMSk7XG5cbi8vIE5ldXRyYWxzXG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1hcmN0aWM6IGhzbGEoMTgxLCA4NyUsIDg4JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1wb3dkZXI6IGhzbGEoMjIwLCA4NCUsIDk1JSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1za3k6IGhzbGEoMTk2LCA4NCUsIDgzJSwgMSk7XG4kYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1zdG9uZTogaHNsYSgyMDMsIDU3JSwgODUlLCAxKTtcblxuXG4vL1xuLy8gQWNjZW50IGNvbG91cnNcbi8vXG4vLyBVc2VkIHRvIHByb3ZpZGUgbWVhbmluZyB2aXN1YWxseSAoZWcgZm9yIG5vdGlmaWNhdGlvbnMsIG1lc3NhZ2luZywgYmFkZ2VzKVxuLy8gYW5kIGZvciBpbmZvZ3JhcGhpYyB1c2UuXG4vL1xuLy8gVGhlcmUgYXJlIDUgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyXG4vL1xuXG4vLyBSZWRcbiRiYXNlLWNvbG9yLXJlZC0tZGFya2VzdDogaHNsYSgwLCA2MCUsIDE5JSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcmtlcjogaHNsYSgwLCA1MSUsIDMzJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWRhcms6IGhzbGEoMCwgNjAlLCA0MyUsIDEpO1xuJGJhc2UtY29sb3ItcmVkLS1iYXNlOiBoc2xhKDAsIDczJSwgNTMlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHQ6IGhzbGEoMCwgMTAwJSwgODQlLCAxKTtcbiRiYXNlLWNvbG9yLXJlZC0tbGlnaHRlcjogaHNsYSgwLCA4MCUsIDkyJSwgMSk7XG4kYmFzZS1jb2xvci1yZWQtLWxpZ2h0ZXN0OiBoc2xhKDAsIDEwMCUsIDk3JSwgMSk7XG5cbi8vIE9yYW5nZVxuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrZXN0OiBoc2xhKDMyLCA3NiUsIDIwJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWRhcmtlcjogaHNsYSgzMiwgNzMlLCAyOSUsIDEpO1xuJGJhc2UtY29sb3Itb3JhbmdlLS1kYXJrOiBoc2xhKDMyLCA3MyUsIDQzJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWJhc2U6IGhzbGEoMzUsIDg2JSwgNTQlLCAxKTtcbiRiYXNlLWNvbG9yLW9yYW5nZS0tbGlnaHQ6IGhzbGEoMzIsIDEwMCUsIDczJSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXI6IGhzbGEoMzIsIDEwMCUsIDg5JSwgMSk7XG4kYmFzZS1jb2xvci1vcmFuZ2UtLWxpZ2h0ZXN0OiBoc2xhKDMzLCAxMDAlLCA5NCUsIDEpO1xuXG4vL1llbGxvd1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0OiBoc2xhKDUwLCA5MiUsIDE4JSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWRhcmtlcjogaHNsYSg1MCwgNjclLCAzOSUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1kYXJrOiBoc2xhKDUxLCA2OSUsIDUxJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWJhc2U6IGhzbGEoNTEsIDEwMCUsIDYwJSwgMSk7XG4kYmFzZS1jb2xvci15ZWxsb3ctLWxpZ2h0OiBoc2xhKDUxLCAxMDAlLCA3NyUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVyOiBoc2xhKDUxLCAxMDAlLCA4OCUsIDEpO1xuJGJhc2UtY29sb3IteWVsbG93LS1saWdodGVzdDogaHNsYSg1MSwgMTAwJSwgOTUlLCAxKTtcblxuLy8gU3ByaW5nIEdyZWVuXG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFya2VzdDogaHNsYSgxNDgsIDg1JSwgMTUlLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1kYXJrZXI6IGhzbGEoMTQ4LCA3MCUsIDI2JSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tZGFyazogaHNsYSgxNDgsIDcwJSwgMzElLCAxKTtcbiRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlOiBoc2xhKDE0OCwgNzAlLCA0NiUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0OiBoc2xhKDE0OCwgNzAlLCA4MSUsIDEpO1xuJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWxpZ2h0ZXI6IGhzbGEoMTQ4LCA3MCUsIDkzJSwgMSk7XG4kYmFzZS1jb2xvci1zcHJpbmdncmVlbi0tbGlnaHRlc3Q6IGhzbGEoMTQ4LCAxMDAlLCA5NyUsIDEpO1xuXG4kYmFzZS1jb2xvci13aGl0ZTogI0ZGRkZGRjtcbiRiYXNlLWNvbG9yLWJsYWNrOiAjMDAwMDAwO1xuXG4vL1xuLy8gVUkgY29sb3Vyc1xuLy9cbi8vIFVzZWQgaW4gdGhlIGJhY2tncm91bmQsIHN0cm9rZSwgYW5kIGNvcHkgb2YgZWxlbWVudHMgKGVnIGJveGVzLCBsYXlvdXRzLCBuYXZpZ2F0aW9uLCBmb3JtcykuXG4vL1xuLy8gVGhlcmUgYXJlIDcgc2hhZGVzIGZvciBlYWNoOiBkYXJrZXN0LCBkYXJrZXIsIGRhcmssIGJhc2UsIGxpZ2h0LCBsaWdodGVyLCBsaWdodGVzdFxuLy9cblxuLy8gUmljaCBCbHVlXG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VzdDogaHNsYSgyMTIsIDgxJSwgMjElLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1kYXJrZXI6IGhzbGEoMjA5LCA2OSUsIDM5JSwgMSk7XG4kYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFyazogaHNsYSgyMDksIDU3JSwgNjYlLCAxKTtcbiRiYXNlLWNvbG9yLXJpY2hibHVlLS1iYXNlOiBoc2xhKDIwOSwgNTglLCA4MSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0OiBoc2xhKDIwOSwgNjQlLCA4OSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXI6IGhzbGEoMjA5LCAxMDAlLCA5NSUsIDEpO1xuJGJhc2UtY29sb3ItcmljaGJsdWUtLWxpZ2h0ZXN0OiBoc2xhKDIwOSwgMTAwJSwgOTglLCAxKTtcblxuLy8gR3JheVxuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHRlc3Q6IGhzbGEoMjA2LCAyMyUsIDk0JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1saWdodGVyOiBoc2xhKDIwNCwgMjElLCA4NiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tbGlnaHQ6IGhzbGEoMjA0LCAxOCUsIDc1JSwgMSk7XG4kYmFzZS1jb2xvci1ncmF5LS1iYXNlOiBoc2xhKDIwNCwgMTIlLCA2MiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFyazogaHNsYSgyMDQsIDklLCA0NSUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyOiBoc2xhKDIwMywgMTMlLCAzMiUsIDEpO1xuJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDogaHNsYSgyMDYsIDIyJSwgMTQlLCAxKTtcblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cblxuLy9cbi8vIEdMT0JBTCBWQVJJQUJMRVNcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIHVzZWQgdGhlbWF0aWNhbGx5IGluIG1vcmUgdGhhbiBvbmUgcGxhY2UgdG9cbi8vIG1haW50YWluIGEgc2Vuc2Ugb2YgY29uc2lzdGVuY3kgYW5kIGVhc2Ugb2YgdXBkYXRpbmcuXG4vL1xuXG4vLyBDb2xvcnNcbiRnbG9iYWwtY29sb3ItdGV4dC0tZGFyazogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VzdDtcbiRnbG9iYWwtY29sb3ItdGV4dC0tbWlkOiAkYmFzZS1jb2xvci1ncmF5LS1kYXJrO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1tdXRlZDogJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci10ZXh0LS1saW5rOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItdGV4dC0tc3VjY2VzczogJGJhc2UtY29sb3Itc3ByaW5nZ3JlZW4tLWRhcmtlcjtcbiRnbG9iYWwtY29sb3ItdGV4dC0td2FybmluZzogJGJhc2UtY29sb3IteWVsbG93LS1kYXJrZXN0O1xuJGdsb2JhbC1jb2xvci10ZXh0LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tZGFyaztcbiRnbG9iYWwtY29sb3ItYmFja2dyb3VuZC0tYmFzZTogd2hpdGU7XG4kZ2xvYmFsLWNvbG9yLWJhY2tncm91bmQtLWhpZ2hsaWdodDogaHNsYSgyMTIsIDEwMCUsIDk1JSwgMSk7IC8vIHNhbWUgaHVlIGFzIGJyYW5kLXVpXG4kZ2xvYmFsLWNvbG9yLWJvcmRlci0taGlnaGxpZ2h0OiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcbiRnbG9iYWwtY29sb3ItYm9yZGVyLS1kaXZpZGVyOiAkYmFzZS1jb2xvci1ncmF5LS1saWdodGVyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXN1Y2Nlc3M6ICRiYXNlLWNvbG9yLXNwcmluZ2dyZWVuLS1iYXNlO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLXdhcm5pbmc6ICRiYXNlLWNvbG9yLXllbGxvdy0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1kYW5nZXI6ICRiYXNlLWNvbG9yLXJlZC0tYmFzZTtcbiRnbG9iYWwtY29sb3ItYWNjZW50LS1pbmZvOiAkYmFzZS1jb2xvci1yaWNoYmx1ZS0tZGFya2VyO1xuJGdsb2JhbC1jb2xvci1hY2NlbnQtLWJyYW5kOiAkYmFzZS1jb2xvci1icmFuZC0tYmx1ZS1lbGVjdHJpYztcblxuLy8gQm9yZGVyIHJhZGlpXG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXNtYWxsOiAzcHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLW1lZGl1bTogNHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS1sYXJnZTogOHB4O1xuJGdsb2JhbC1ib3JkZXItcmFkaXVzLS14bGFyZ2U6IDEycHg7XG4kZ2xvYmFsLWJvcmRlci1yYWRpdXMtLXJvdW5kZWQ6IDUwMHB4OyAvLyBpbnRlbnRpb25hbGx5IGh1Z2Ugc2luY2Ugd2UgZG9uJ3Qga25vdyB3aWR0aC9oZWlnaHRcblxuLy8gRWxldmF0aW9uIChEcm9wIHNoYWRvdylcbi8vXG4vLyBUaGVzZSB2YXJpYWJsZXMgYXJlIG1lYW50IHRvIGJlIGhpZ2hsaWdodCBlbGVtZW50cyBzdWNoIGFzIGJveGVzLCB0aWxlcywgZXhwYW5kZWQgcm93cy9jYXJkc1xuLy9cblxuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMTogMHB4IDJweCA4cHggMHB4IHJnYmEoJGJhc2UtY29sb3ItZ3JheS0tZGFya2VyLCAwLjIpOyAvLyBGb3IgZHJvcGRvd25zLCBkYXRlIHBpY2tlcnNcbiRnbG9iYWwtc2hhZG93LS1lbGV2YXRpb24tLTI6IDBweCA0cHggMTZweCAwcHggcmdiYSgkYmFzZS1jb2xvci1ncmF5LS1kYXJrZXIsIDAuMyk7IC8vIFRpbGVzIGhvdmVyIHN0YXRlLCBwb3BvdmVyc1xuJGdsb2JhbC1zaGFkb3ctLWVsZXZhdGlvbi0tMzogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMC4zNSk7IC8vIEhpZ2hsaWdodGVkIGJveGVzLCB3aXphcmRzIGFuZCB3b3JrZmxvdyBzdGVwcywgdG9hc3RcbiRnbG9iYWwtc2hhZG93LS1tb2RhbDogMHB4IDhweCAzMnB4IDBweCByZ2JhKCRiYXNlLWNvbG9yLWdyYXktLWRhcmtlciwgMSk7IC8vIE1vZGFsc1xuXG4vLyBCcmVha3BvaW50c1xuLy8gVE9ETzogRGVwcmVjYXRlIG9sZCBicmVha3BvaW50c1xuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZTogNDgwcHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLXRhYmxldDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3A6IDEwMjRweDtcblxuJGdsb2JhbC1icmVha3BvaW50LS1waG9uZS0tbWF4OiA0ODBweDtcbiRnbG9iYWwtYnJlYWtwb2ludC0tdGFibGV0LS1taW46IDQ4MXB4O1xuJGdsb2JhbC1icmVha3BvaW50LS10YWJsZXQtLW1heDogNzY4cHg7XG4kZ2xvYmFsLWJyZWFrcG9pbnQtLWRlc2t0b3AtLW1pbjogNzY5cHg7Il0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style>
    @keyframes panel-slide-up {

        0%,
        30% {
            margin-top: 8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-down {

        0%,
        30% {
            margin-top: -8px;
            opacity: 0
        }

        100% {
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-left {

        0%,
        30% {
            margin-left: 8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    @keyframes panel-slide-right {

        0%,
        30% {
            margin-left: -8px;
            opacity: 0
        }

        100% {
            margin-left: 0;
            opacity: 1
        }
    }

    .connected-accounts-widget__spinner {
        height: 200px
    }

    .connected-accounts-widget__container {
        min-height: 200px
    }

    .connected-accounts-widget__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px
    }

    .connected-accounts-widget__title,
    .connected-accounts-widget__link {
        margin: 0
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9idW95YW50LXV0aWxzL3V0aWxpdGllcy9fbWl4aW5zLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zcmMvY29tcG9uZW50cy9EYXNoYm9hcmRXaWRnZXQvRGFzaGJvYXJkV2lkZ2V0LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBd0NBLDBCQUNFLE9BRUUsY0FBQSxDQUNBLFNBQUEsQ0FFRixLQUNFLFlBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHSiw0QkFDRSxPQUVFLGVBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxZQUFBLENBQ0EsU0FBQSxDQUFBLENBR0osNEJBQ0UsT0FFRSxlQUFBLENBQ0EsU0FBQSxDQUVGLEtBQ0UsYUFBQSxDQUNBLFNBQUEsQ0FBQSxDQUdKLDZCQUNFLE9BRUUsZ0JBQUEsQ0FDQSxTQUFBLENBRUYsS0FDRSxhQUFBLENBQ0EsU0FBQSxDQUFBLENDOUVGLG9DQUNFLFlBQUEsQ0FHRixzQ0FDRSxnQkFBQSxDQUdGLG1DQUNFLFlBQUEsQ0FDQSw2QkFBQSxDQUNBLGtCQUFBLENBQ0Esa0JBQUEsQ0FHRixtRUFFRSxRQUFBIiwic291cmNlc0NvbnRlbnQiOlsiXG4vLyBTaG9ydGhhbmQgZm9yIHdpZHRoIGFuZCBoZWlnaHQgcHJvcGVydGllc1xuQG1peGluIHNpemUoJHdpZHRoOiBmYWxzZSwgJGhlaWdodDogZmFsc2UpIHtcbiAgQGlmICR3aWR0aCB7XG4gICAgd2lkdGg6ICR3aWR0aDtcbiAgICBoZWlnaHQ6IGlmKCRoZWlnaHQsICRoZWlnaHQsICR3aWR0aCk7XG4gIH1cbiAgQGVsc2Uge1xuICAgIEBlcnJvciBcIlRoZSAnc2l6ZScgbWl4aW4gcmVxdWlyZXMgYXQgbGVhc3Qgb25lIG1lYXN1cmVtZW50XCI7XG4gIH1cbn1cblxuLy8gVHJ1bmNhdGUgdGV4dCB1c2luZyBlbGxpcHNpczpcbi8vIFRoZSBlbGVtZW50IG11c3QgaGF2ZSBhIHdpZHRoIG9yIG1heC13aXRoIGZvciBlbGxpcHNpcyB0byB3b3JrLFxuLy8gYnV0IHRoZSB3aWR0aCBkb2Vzbid0IGhhdmUgdG8gYmUgc2V0IHRocm91Z2ggdGhlIG1peGluXG4vLyBVc2FnZTpcbi8vIE5vIHdpZHRoOiBAaW5jbHVkZSB0cnVuY2F0ZUF0KCk7XG4vLyBTZXQgd2lkdGggdG8gMTAwcHg6IEBpbmNsdWRlIHRydW5jYXRlQXQoMTAwcHgpO1xuLy8gU2V0IG1heC13aWR0aCB0byAxMDBweDogQGluY2x1ZGUgdHJ1bmNhdGVBdCgxMDBweCwgbWF4KTtcbkBtaXhpbiB0cnVuY2F0ZUF0KCR3aWR0aDogZmFsc2UsICRtYXg6ICcnKSB7XG4gIEBpZiAkd2lkdGgge1xuICAgICN7aWYoJG1heCA9PSAnbWF4JywgJ21heC13aWR0aCcsICd3aWR0aCcpfTogJHdpZHRoO1xuICB9XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICBvdmVyZmxvdzogaGlkZGVuO1xufVxuXG4vLyBSZXNwb25zaXZlIGZsZXhpbmcgdG8gYnJlYWtwb2ludHNcbi8vIEV4YW1wbGU6XG4vLyAgICBAaW5jbHVkZSByZXNwb25kLXRvKG1heC13aWR0aCwgMTQ0MHB4KSB7IC4uLiB9XG5AbWl4aW4gcmVzcG9uZC10bygkbWluLW1heCwgJGJyZWFrcG9pbnQpIHtcbiAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAoJG1pbi1tYXg6ICRicmVha3BvaW50KSB7XG4gICAgQGNvbnRlbnQ7XG4gIH1cbn1cblxuLy8gQW5pbWF0aW9uc1xuJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbjogMC4xcztcblxuQGtleWZyYW1lcyBwYW5lbC1zbGlkZS11cCB7XG4gIDAlLFxuICAzMCUge1xuICAgIG1hcmdpbi10b3A6IGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWRvd24ge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tdG9wOiAtIGdyaWQtcm93cygxKTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDEwMCUge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLWxlZnQge1xuICAwJSxcbiAgMzAlIHtcbiAgICBtYXJnaW4tbGVmdDogZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5Aa2V5ZnJhbWVzIHBhbmVsLXNsaWRlLXJpZ2h0IHtcbiAgMCUsXG4gIDMwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0gZ3JpZC1yb3dzKDEpO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbiAgMTAwJSB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgb3BhY2l0eTogMS4wO1xuICB9XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtdXAge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLXVwICRwYW5lbC1hbmltYXRpb24tZHVyYXRpb24gZWFzZS1pbi1vdXQgZm9yd2FyZHM7XG59XG5AbWl4aW4gcGFuZWwtc2xpZGUtZG93biB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtZG93biAkcGFuZWwtYW5pbWF0aW9uLWR1cmF0aW9uIGVhc2UtaW4tb3V0IGZvcndhcmRzO1xufVxuQG1peGluIHBhbmVsLXNsaWRlLWxlZnQge1xuICBhbmltYXRpb246IHBhbmVsLXNsaWRlLWxlZnQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbkBtaXhpbiBwYW5lbC1zbGlkZS1yaWdodCB7XG4gIGFuaW1hdGlvbjogcGFuZWwtc2xpZGUtcmlnaHQgJHBhbmVsLWFuaW1hdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCBmb3J3YXJkcztcbn1cbiIsIkBpbXBvcnQgXCJ+YnVveWFudC11dGlscy91dGlsaXRpZXMvYWxsXCI7XG5cbi5jb25uZWN0ZWQtYWNjb3VudHMtd2lkZ2V0IHtcbiAgJl9fc3Bpbm5lciB7XG4gICAgaGVpZ2h0OiAyMDBweDtcbiAgfVxuXG4gICZfX2NvbnRhaW5lciB7XG4gICAgbWluLWhlaWdodDogMjAwcHg7XG4gIH1cblxuICAmX19oZWFkZXIge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgbWFyZ2luLWJvdHRvbTogZ3JpZC1yb3dzKDIpO1xuICB9XG5cbiAgJl9fdGl0bGUsXG4gICZfX2xpbmsge1xuICAgIG1hcmdpbjogMDtcbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style type="text/css" id="qual_style-zba"></style>
    <style type="text/css" id="qual_style-zc8"></style>
    <style type="text/css" id="qual_style-zba"></style>
    <style type="text/css" id="qual_style-zc8"></style>
    <style data-emotion="css"></style>
</head>

<body>
    <div style="display: none;" bis_skin_checked="1">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol fill="none" viewBox="0 0 80 80" id="decor--accounting-chart-of-accounts"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m58.95 24.38c-.04 14.18.36 33.56.36 39.55s-3.95 4.75-3.95 4.75h-22.83m-1.93-57.6c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11m5.44 10.01c3.83-2.79 7.65-5.59 11.48-8.38.07-.05.14-.1.23-.1.08 0 .15.05.22.09 3.73 2.53 7.24 5.26 10.51 8.18-5.22.12-22.44.21-22.44.21zm22.43 12.44c-7.62.01-22.43.21-22.43.21m3.06-10.42c-.07 2.49-.15 6.36.01 9.12m8.03-9.12c-.07 2.49-.15 6.36.01 9.12m8.33-9.12c-.07 2.49-.15 6.36.01 9.12m-19.04 10.29c.06-.1.07-.23.02-.33-.01.08-.01.16-.02.23">
                    </path>
                    <path
                        d="m34.59 51.08c1.03.02 2.06.02 3.09.03 3.2.01 6.41-.02 9.61-.06 1.26-.01 2.52-.03 3.78-.04m-22.23 7.22c.06-.1.07-.23.03-.33-.01.08-.01.16-.02.23m5.74-.15c1.03.02 2.06.02 3.09.03 3.2.01 6.41-.02 9.61-.06 1.26-.01 2.52-.03 3.78-.04">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--accounting-reconciliation"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m58.95 24.38c-.04 14.18.36 33.56.36 39.55s-3.95 4.75-3.95 4.75h-22.83m-1.93-57.6c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11m25.64 26.43c-6.38-.12-14.64.08-21.02-.03">
                    </path>
                    <path
                        d="m44.59 40.22c2.47 1.63 5.08 3.93 7.17 5.88l-6.94 5.88m-14.08-20.08c6.38-.12 14.64.08 21.02-.03">
                    </path>
                    <path d="m34.78 26c-2.47 1.63-5.08 3.93-7.17 5.88l6.94 5.88"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--add-user" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m7.62 69.79c.1-2.75-.05-2.86.35-5.58.48-3.24.64-5.74 2.72-8.48 2.15-2.82 4.82-4.28 8.83-5.05 2.2-.43 6.36-1.18 8.46-1.89s5.41-3.33 2.15-6.98c-3.13-3.5-6.61-8.55-6.55-14.97.04-4.03 1.49-8.04 4.44-11.07 5.01-5.12 13.55-7.18 20.61-4.75 11.71 4.01 11.19 20.58 4.67 26.6-4.04 3.73-6.6 5.13-6.45 7.31.14 2.18 1.33 3.42 3.59 4.22 1.58.56 3.32.53 4.99.82 5.2.9 12.96 4.04 13.82 8.8.95 5.26 1.09 7.54.97 11.02z"
                    fill="#80bbff"></path>
                <path
                    d="m32.8 12.94c-4.39 2.08-7.78 6.16-9.01 10.86s-.29 9.92 2.51 13.89c1.19 1.69 2.71 3.17 3.63 5.03s1.11 4.3-.28 5.83c-.73.81-1.79 1.24-2.84 1.55-4.75 1.42-10.3 1.05-14.09 4.24-4.14 3.5-4.37 9.7-4.17 15.11m54.62-22.75c-5.34-.96-8.75 4.58-9.16 8.19-.34 2.97 1.39 9.75 9.01 9.75 4.17 0 8.59-4.72 8.45-8.94-.15-4.22-3.03-8.05-8.3-9zm-.64 4.89c.05 3.41.1 4.95.15 8.36m4.1-4.25c-3.41.05-4.64.1-8.05.15"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--advance" xmlns="http://www.w3.org/2000/svg">
                <path d="m65 53v-27" stroke="#001b66" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" stroke-width="6"></path>
                <g fill="#80bbff">
                    <path
                        d="m60.86 38.22c-8.6-8.03-15.75-13.89-21.84-17.91-.58-.39-1.33-.41-1.94-.08-.61.34-.98.98-.97 1.68l.71 35.43c.01.72.44 1.37 1.1 1.67a1.86 1.86 0 0 0 1.98-.27l20.9-17.72c.41-.35.65-.85.66-1.39.01-.53-.21-1.05-.6-1.41z">
                    </path>
                    <path
                        d="m38.75 38.22c-8.61-8.03-15.75-13.89-21.84-17.91a1.88 1.88 0 0 0 -1.94-.07c-.61.33-.98.98-.97 1.68l.71 35.43c.01.72.44 1.37 1.1 1.67a1.86 1.86 0 0 0 1.98-.27l20.89-17.72c.41-.35.65-.85.66-1.39.02-.54-.2-1.06-.59-1.42z">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--alert" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.468 39.984c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <path
                    d="m33.248 18.364c.56 7.69.84 15.4 1.26 23.1.1 1.79.2 3.57.33 5.36.09 1.31.3 2.31 1.75 2.62 1.26.26 2.65.1 3.92.03.69-.04 1.37-.09 2.06-.12.28-.01.55-.02.83-.02.09 0 .75.05.29-.02.98.14 1.85-.38 1.9-1.45.45-9.83.79-19.67 1.28-29.49.04-.81-.72-1.5-1.5-1.5h-10.61c-1.93 0-1.93 3 0 3h10.61l-1.5-1.5c-.49 9.83-.84 19.66-1.28 29.49.63-.48 1.27-.96 1.9-1.45-2.23-.32-4.52.22-6.76.14-.15-.01-.62.05-.47-.03-.18-.05-.17-.04.04.05.48.99.67 1.18.58.55.08-.69-.1-1.5-.15-2.19-.11-1.71-.2-3.42-.29-5.12-.38-7.15-.65-14.3-1.17-21.44-.16-1.93-3.16-1.94-3.02-.01zm4.06 45.08c2.33 1.3 4.88.41 6.77-1.22.74-.64 1.41-1.43 1.88-2.28.62-1.15.65-2.35.41-3.62-.29-1.55-1.22-2.91-2.52-3.79-1.39-.93-3.06-.95-4.65-.61-2.37.51-4.69 2.13-5.11 4.66-.46 2.78.78 5.4 3.22 6.86.67.4 1.68.17 2.05-.54.38-.72.18-1.62-.54-2.05-.12-.07-.24-.14-.36-.22-.03-.02-.38-.3-.12-.08-.16-.13-.31-.27-.46-.42l-.24-.27c.24.27 0 0-.04-.06-.12-.18-.23-.37-.33-.57-.04-.08-.14-.4-.02-.03-.03-.1-.07-.19-.1-.29-.05-.16-.09-.32-.13-.48-.02-.08-.01-.22-.05-.29.13.24.03.24.01.02-.01-.18-.02-.37-.01-.55 0-.09.01-.17.02-.26.02-.36-.01.06-.01.06-.02-.01.06-.34.08-.39.03-.14.08-.28.12-.42.11-.34-.2.33.03-.05.07-.12.14-.23.21-.34.2-.34-.19.16.09-.11.16-.16.31-.31.48-.46-.25.21.09-.06.12-.08.11-.07.23-.14.34-.21.12-.07.24-.12.36-.18.28-.14-.18.05.14-.06.48-.16.95-.3 1.45-.38.51-.08.86-.06 1.39.09.38.1-.2-.14.14.06.11.07.23.14.35.2.36.19-.11-.11.08.04.09.07.17.15.25.23.1.09.19.19.28.3-.2-.24.06.1.09.13.07.11.13.22.19.33.04.07.07.14.1.2-.05-.13-.04-.1.02.07.09.29.18.58.22.89-.03-.24 0 .02 0 .06 0 .15.02.31.01.46 0 .04.01.45-.02.46-.09.03.11-.48.02-.18l-.03.12c-.01.04-.03.08-.04.13-.05.14-.03.09.07-.16-.05.01-.19.37-.22.42-.07.13-.15.25-.24.37-.01.02-.17.22-.16.23-.02-.02.22-.27-.01 0-.13.16-.27.31-.41.46-.16.16-.33.32-.5.47-.07.06-.14.11-.21.17.31-.26-.06.04-.13.09-.18.12-.36.24-.55.34-.09.05-.19.1-.29.15-.15.07-.13.06.06-.02-.07.03-.13.05-.2.08-.2.07-.4.12-.61.17-.34.09.34-.01-.01.01-.14.01-.28.02-.41.01.01 0-.2 0-.21-.01.23.03.25.04.09.01-.07-.01-.14-.03-.21-.05-.11-.03-.21-.07-.31-.1.38.12-.07-.04-.15-.09-.68-.38-1.67-.19-2.05.54-.39.68-.21 1.62.52 2.03z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--apple" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m40.19 32.01c-3.92-.94-7.59-3.42-11.6-2.91-4.67.59-7.74 5.11-8.88 9.49-2.34 9.02 1.17 19.19 8.67 25.09 1.56 1.23 3.51 2.33 5.48 1.91.78-.16 1.48-.55 2.21-.86 2.37-1.01 5.13-1.15 7.61-.39 1.26.39 2.45.99 3.74 1.28 3.38.74 6.94-.92 9.28-3.38s3.7-5.6 5.01-8.68c-3.03-2.44-4.85-6.21-4.8-10s1.94-7.52 5.03-9.89c-2.4-4.13-7.86-6.1-11.97-4.57-1.55.58-3.17 1.55-4.57 2.41-1.38.86-5.21.5-5.21.5z"
                    fill="#80bbff"></path>
                <path
                    d="m21.44 39.29c-2.15 8.27 1.07 17.6 7.95 23.01 1.43 1.12 3.22 2.13 5.03 1.75.71-.15 1.36-.51 2.03-.79a10.4 10.4 0 0 1 6.98-.36c1.16.35 2.25.91 3.43 1.17 3.1.68 6.37-.84 8.51-3.1m-1.98-45.47c-3.03.03-6.01 1.3-8.23 3.37s-3.69 4.89-4.25 7.87c0 0 5.97-.01 8.82-2.79s3.66-8.45 3.66-8.45z"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--bank-details" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <path
                    d="m29.22 27.26c3.83-2.79 7.65-5.59 11.48-8.38.07-.05.14-.1.23-.1.08 0 .15.05.22.09 3.73 2.53 7.24 5.26 10.51 8.18-5.22.13-22.44.21-22.44.21zm22.43 12.44c-7.62.01-22.43.21-22.43.21m3.06-11.16c-.07 2.49-.15 7.11.01 9.87m8.03-9.87c-.07 2.49-.15 7.11.01 9.87m8.33-9.87c-.07 2.49-.15 7.11.01 9.87"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m23.42 46.78c-.01 1.31 0 2.86.02 3.95.01.78.65 1.41 1.48 1.45 2.52.1 7.61.28 9.67.22 5.71-.16 17.17-.45 21.36-.55.87-.02 1.54-.72 1.5-1.54l-.21-3.81c-.04-.78-.73-1.4-1.55-1.39l-30.73.22c-.85 0-1.53.64-1.54 1.45zm0 9.52c-.01 1.31 0 2.86.02 3.95.01.78.65 1.41 1.48 1.45 2.52.1 7.61.28 9.67.22 5.71-.16 17.17-.45 21.36-.55.87-.02 1.54-.72 1.5-1.54l-.21-3.81c-.04-.78-.73-1.4-1.55-1.39l-30.73.22c-.85 0-1.53.64-1.54 1.45z"
                    fill="#fff"></path>
                <path
                    d="m39.97 50.24h-1.51l-2.13-.01c-2.48-.01-6.19-.01-6.92-.02a1.5 1.5 0 0 1 .02-3h.02c.72.01 4.42.02 6.88.02l2.14.01c3.19.01 6.44-.02 9.59-.06h.02a1.5 1.5 0 0 1 .02 3c-2.67.03-5.41.06-8.13.06zm-10.54 9.54c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5h1c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5zm4.71-.01c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5l1.86-.01c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5zm5.57-.02c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5l1.86-.01c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5l-1.86.01s.01 0 0 0zm5.57-.01c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5l1.86-.01c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5l-1.86.01s.01 0 0 0zm5.58-.02c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5h1c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--business" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m35.26 65.16c0 2.77-.16 3.8 1.01 3.8h32.16c1.4 0 2.07-1.08 2.07-4.71s-.15-50.05-.15-52.13c0-2.14-.24-3.02-2.38-3.03-6.46-.03-26.98-.09-29.96-.09-2.22 0-2.93.96-2.93 2.88s.18 50.51.18 53.28z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m48.44 22.4h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.01.37-.39.68-.9.68zm0 11.16h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.01.37-.39.68-.9.68zm0 11.57h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.01.37-.39.68-.9.68zm14.49-22.73h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.02.37-.39.68-.9.68zm0 11.16h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.02.37-.39.68-.9.68zm0 11.57h-5.5c-.47 0-.87-.27-.91-.61-.16-1.55-.23-3.1-.18-4.65.01-.36.42-.65.91-.65h5.49c.49 0 .88.28.9.64l.19 4.59c.02.37-.39.68-.9.68zm-43.57 22.37c.08-2.69.07-12.89.13-12.95s4.74-.01 6.88-.09c.02 2.7.02 10.71-.01 13.41m19.31.25c.08-2.69.07-13.51.13-13.57s4.74-.01 6.88-.09c.02 2.7.02 10.71-.01 13.41">
                    </path>
                    <path
                        d="m52.63 68.12c.08-2.69.07-13.51.13-13.57s4.74-.01 6.88-.09c.02 2.7.02 10.71-.01 13.41m-35.35-34.66h-3.68a.85.85 0 0 1 -.85-.78c-.11-1.43-.15-2.86-.12-4.3.01-.46.39-.83.85-.83h3.68c.46 0 .83.36.84.82l.13 4.22c.01.48-.37.87-.85.87zm0 11.85h-3.68a.85.85 0 0 1 -.85-.78c-.11-1.43-.15-2.86-.12-4.3.01-.46.39-.83.85-.83h3.68c.46 0 .83.36.84.82l.13 4.22c.01.48-.37.87-.85.87z">
                    </path>
                    <path
                        d="m10.79 19.53c-.54 16.47-.17 32.33-.13 48.81l59.53.47m-59.35-49.3c5.29-.55 20.25-.14 23.04-.07">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--calculator" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m59.23 65.24c0-1.85-.02-5.56-.05-10.21.22-13.03.23-26.05.03-39.08 0 0 .49-5.95-3.04-5.95h-32.98c-3.53 0-3.04 5.95-3.04 5.95-.21 13.03-.2 26.05.02 39.08-.03 4.65-.05 8.36-.05 10.21 0 .47.03.88.08 1.26.04.77.22 1.62.71 2.29 1.15 1.82 3.16 1.2 3.16 1.2h31.22s2.01.62 3.16-1.2c.49-.67.67-1.52.71-2.29.04-.39.07-.79.07-1.26z"
                    fill="#80bbff"></path>
                <g stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3">
                    <path
                        d="m50.87 24.64h-20.63c-1.77 0-3.99.33-4.13-.12-.62-2-.12-4.69.04-6.69.04-.47 1.57-.84 3.41-.84h20.61c1.82 0 3.31.37 3.37.83l.1 6.17c.06.49-.87.65-2.77.65z"
                        fill="#fff" stroke="#fff"></path>
                    <path
                        d="m30.3 35.8c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.62.15 3.2 1.35 2.96 2.96zm12.07 0c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.15 3.2 1.35 2.96 2.96zm12.07 0c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.15 3.21 1.35 2.96 2.96zm-24.14 12.22c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.62.14 3.2 1.34 2.96 2.96zm12.07 0c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.14 3.2 1.34 2.96 2.96zm12.07 0c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.14 3.21 1.34 2.96 2.96zm-15.03 15.46c1.88.18 2.69-1.17 2.96-2.96.24-1.62-1.33-2.81-2.96-2.96h-12.07c-1.97-.18-2.96 1.33-2.96 2.96 0 1.71 1.33 2.81 2.96 2.96zm15.03-2.96c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.15 3.21 1.34 2.96 2.96z"
                        stroke="#001b66"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--calendar" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m15 61.25c0 1.39.46 4.88 4.19 4.88s11.98-.23 17.92-.09l9.29.21c4.91.11 12.26-.15 14.54-.15s3.62.06 3.62-5.53.61-33.41.61-36.62-1.77-4.97-4.77-4.98c-9.04-.05-31.44-.14-38.16-.14s-7.07 2.18-7.07 6.87-.17 33.66-.17 35.55z"
                    fill="#80bbff"></path>
                <path
                    d="m19.41 29.08c13.64.37 27.29.41 40.93.14m-30.96-4.63c-1.04-.08-1.9-.79-2.45-1.57-1.45-2.05-1.27-4.91.43-6.8.2-.22.41-.42.67-.57.28-.16.61-.25.93-.34.69-.19 1.39-.38 2.11-.34 1.71.09 2.97 1.41 4.01 2.63m15.13 7.34c-.74-.23-1.36-.69-1.88-1.2-1.66-1.63-2.5-3.89-2.24-6.08.1-.82.36-1.65.98-2.26 1.01-.99 2.78-1.13 4.15-.6 1.37.54 2.37 1.64 3.06 2.82m-18.74 24.61c-4.17 2.31-7.04 5.82-7.83 9.58-.38 1.83-.27 3.78.95 5.41 1.77 2.37 8.58 3.59 12.29 3.34s7.08-1.86 9.36-3.99 3.56-4.75 4.27-7.39c.57-2.15.79-4.4 0-6.52-1.09-2.95-4.19-5.47-8.1-6.6s-8.56-.85-12.16.75c-1.73.77-3.21 1.81-4.54 2.92-2.36 1.97-4.32 4.19-5.8 6.56"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--camera" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m13.01 51.87c-.03 1.14-.05 2.32.5 3.34 1.23 2.27 4.54 2.63 7.31 2.69 10.41.22 22.37-.19 32.78.03 3.24.07 9.27 1.1 10.97-1.43.78-1.16.91-3.83 1.01-5.19.44-6.37.48-14.96.11-21.34-.08-1.33-.23-2.79-1.25-3.74-.74-.69-1.78-1.16-2.84-1.16-1.9 0-6.07-.1-7.96-.1-.68 0-1.46.04-2.08-.22-1.27-.52-1.53-1.59-1.58-2.86-.1-2.36-2.29-3.67-2.97-3.68-1.98-.03-10.54-.29-12.52-.17-1.23.07-2.62.24-3.34 1.16-.6.77-.52 1.82-.88 2.71-.71 1.74-2.93 2.68-4.96 2.68-2.07 0-6.09.56-7.99 1.19-3.54 1.19-3.71 4.51-3.81 8.36 0 0-.37 12.67-.5 17.73z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m40.14 30.89c-6.17-.12-9.79 4.94-10.93 8.74s.08 8.17 3.46 10.79 8.88 3.12 12.56.82c2.31-1.44 3.87-3.67 4.71-6.03 2.76-7.74-4.54-14.21-9.8-14.32zm-18.36-7.82c.97-.03 1.93-.07 2.9-.1">
                    </path>
                    <path
                        d="m18.3 58.85c7.25.62 36.75.91 44.01.44.74-.05 1.53-.12 2.14-.54.97-.68 1.24-2 1.28-3.18.27-7.51.46-13.61.27-21.49">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--checklist" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path
                        d="m28.9 54.2c-.26 1.75-1.05 3.05-2.88 2.88-1.58-.15-2.88-1.22-2.88-2.88 0-1.59.96-3.05 2.88-2.88 1.58.14 3.11 1.3 2.88 2.88z"
                        stroke-width="3"></path>
                    <path d="m36.62 54.18c5.28-.34 14.41.15 21.63.15m-21.63-14.48c5.28-.34 14.41-.16 21.63-.16"
                        stroke-width="4"></path>
                    <path d="m23.02 40.37 2.06 3.02c.03.05.08.11.14.1.04 0 .08-.04.11-.08 1.38-1.66 4.37-5.49 5.75-7.16"
                        stroke-width="3"></path>
                    <path d="m36.62 26.49c5.28-.34 14.41.15 21.63.15" stroke-width="4"></path>
                    <path d="m23.02 27.01 2.06 3.02c.03.05.08.11.14.1.04 0 .08-.04.11-.08 1.38-1.66 4.37-5.49 5.75-7.16"
                        stroke-width="3"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--checkouts" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m65 61.87c0-1.57-.03-4.72-.06-8.66.28-11.05.3-22.1.03-33.15 0 0 .63-5.05-3.88-5.05h-7.14c-10.42-.01-27.74-.01-27.74-.01h-7.15c-4.5 0-3.88 5.05-3.88 5.05-.26 11.05-.24 22.1.04 33.15-.04 3.95-.06 7.09-.06 8.66 0 .4.04.74.1 1.07.05.65.28 1.37.91 1.94 1.47 1.54 4.03 1.02 4.03 1.02h39.79s2.56.53 4.03-1.02c.63-.57.86-1.29.91-1.94.04-.32.07-.67.07-1.06z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m51.15 58.5c2.45.16 3.5-1.03 3.85-2.62.32-1.43-1.73-2.48-3.85-2.62h-21.94c-2.57-.16-3.85 1.17-3.85 2.62 0 1.51 1.73 2.48 3.85 2.62z"
                        fill="#001b66"></path>
                    <path
                        d="m32.76 26.76 19.82 2.25c-1.48 3.14-3.29 9.07-3.67 9.29-.27.15-15.21-.08-15.53-.36-.42-.37-2.08-9.96-3.33-14.3l-4.09-.84m10.1 20.83c-.12.81-.48 1.41-1.33 1.33-.73-.07-1.33-.56-1.33-1.33 0-.74.44-1.41 1.33-1.33.73.06 1.44.6 1.33 1.33zm11.34 0c-.12.81-.48 1.41-1.33 1.33-.73-.07-1.33-.57-1.33-1.33 0-.74.44-1.41 1.33-1.33.73.06 1.44.6 1.33 1.33z">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--clock" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m67.08 40.38c0 15.13-8.54 26.79-27.31 27.39-16.98.54-27.74-13.95-26.7-28.49 1.29-18.03 14.76-25.4 25.81-26.22 14.08-1.05 28.2 12.19 28.2 27.32z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path d="m40.92 40.26c.12-4.6-.26-11.21-.18-15.12m-.28 15.14c-2.77-6.08-7.28-14.09-10.38-20.01">
                    </path>
                    <path
                        d="m40.42 37.6c-.61.09-1.16.46-1.54.94s-.6 1.08-.71 1.69c-.06.37-.09.75.02 1.11.27.93 1.35 1.42 2.31 1.35.92-.07 1.86-.64 2.11-1.53.16-.56.03-1.16-.23-1.68-.18-.36-.42-.7-.76-.9-.34-.21-.79-.26-1.14-.06m-22.75 2.3c-.39-.01-1.07-.02-1.45-.03m47.6.03c-.39-.01-1.07-.02-1.45-.03m-21.57 22.61c-.01.39-.02 1.07-.03 1.45m.03-48.54c-.01.39-.02 2.63-.03 3.01">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--cloud-default" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m61.73 63.29c4.61-.29 12.38-.8 12.38-10.38s-7.77-12.47-12.07-12.42c1.6-5.23-3.17-21.96-17.61-21.96s-23.33 8.78-23.33 19.7c-4.11-.17-14.21 3.73-14.21 13.84s8.26 11.6 13.84 11.24c.01 0 34.61.38 41-.02z"
                    fill="#80bbff"></path>
                <path
                    d="m8.92 49.4c.57-3.47 2.9-6.01 5.91-7.67 1.22-.67 2.52-1.19 3.88-1.53.52-.13 1.15-.25 1.52-.28.22-.02.43-.02.65-.02.43 0-.1-.06.27.03.96.23 1.87-.45 1.9-1.45.22-7.78 6.75-14.99 13.89-17.47 6.86-2.39 15.14-.28 18.83 6.3.94 1.68 3.54.17 2.59-1.51-3.25-5.8-10-9.12-16.57-8.78-6.99.36-13.29 4.4-17.43 9.9-2.53 3.36-4.19 7.34-4.31 11.57.63-.48 1.27-.96 1.9-1.45-2.79-.68-6.25.79-8.63 2.1-3.62 1.99-6.6 5.28-7.29 9.46-.32 1.89 2.57 2.71 2.89.8z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--cloud-download" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m61.9 63.46c4.64-.29 12.47-.8 12.47-10.46s-7.82-12.56-12.16-12.52c1.61-5.27-3.19-22.13-17.74-22.13s-23.5 8.86-23.5 19.85c-4.14-.17-14.32 3.75-14.32 13.95s8.33 11.7 13.95 11.33c0 0 34.87.39 41.3-.02z"
                    fill="#80bbff"></path>
                <path d="m40.28 53.05c-.13-7.26.09-13.1-.04-20.35m-6.67 15.76c1.86 2.81 4.47 5.78 6.69 8.16l6.69-7.89"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m8.92 49.42c.57-3.47 2.9-6.01 5.91-7.67 1.22-.67 2.52-1.19 3.88-1.53.52-.13 1.15-.25 1.52-.28.22-.02.43-.02.65-.02.43 0-.1-.06.27.03.96.23 1.87-.45 1.9-1.45.22-7.78 6.75-14.99 13.89-17.48 6.86-2.39 15.14-.28 18.84 6.31.94 1.68 3.54.17 2.59-1.51-3.25-5.8-10-9.13-16.58-8.79-6.99.36-13.29 4.4-17.44 9.9-2.53 3.36-4.19 7.35-4.31 11.58.63-.48 1.27-.96 1.9-1.45-2.79-.68-6.25.79-8.63 2.1-3.63 1.99-6.6 5.28-7.29 9.46-.31 1.89 2.58 2.7 2.9.8z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--cloud-upload" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m62.15 63.72c4.69-.29 12.6-.81 12.6-10.57s-7.91-12.69-12.29-12.65c1.63-5.33-3.23-22.36-17.93-22.36s-23.75 8.94-23.75 20.06c-4.18-.18-14.47 3.79-14.47 14.1s8.41 11.81 14.1 11.44c0 0 35.23.38 41.74-.02z"
                    fill="#80bbff"></path>
                <path d="m40.3 36.22c-.13 7.34.09 13.24-.04 20.57m-6.75-15.92c1.88-2.84 4.52-5.85 6.76-8.24l6.76 7.97"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m8.92 49.43c.57-3.47 2.9-6.02 5.92-7.68 1.22-.67 2.53-1.19 3.88-1.53.52-.13 1.15-.25 1.52-.28.22-.02.43-.02.65-.02.43 0-.1-.06.27.03.96.23 1.87-.45 1.9-1.45.22-7.79 6.76-15 13.9-17.49 6.86-2.39 15.15-.28 18.85 6.31.94 1.68 3.54.17 2.59-1.51-3.25-5.81-10.01-9.13-16.58-8.79-7 .36-13.3 4.4-17.44 9.91-2.53 3.36-4.19 7.35-4.31 11.58.63-.48 1.27-.96 1.9-1.45-2.79-.68-6.25.79-8.63 2.1-3.63 2-6.6 5.29-7.3 9.47-.33 1.89 2.56 2.7 2.88.8z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--community" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m19.58 50.41c-.22 3.23-1.84 9.54-.1 9.54 2.04 0 7.99-5.17 10.95-6.78 0 0 37.66 6.52 37.66-20.37 0-16.17-10.69-20.8-29.09-20.8s-24.59 12.48-26 16.76-1.3 9.02.16 13.27c1.27 3.67 6.42 8.38 6.42 8.38z"
                    fill="#80bbff"></path>
                <path
                    d="m61.41 39.7c-5.26-2.69-15.5-2.83-20.29.34-6.02 3.98-7.5 15.12 1.68 19.71 4.64 2.32 11.93 1.36 11.93 1.36l7.25 4.46-.38-5.87c7.39-4.1 6.2-16.73-.19-20z"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--connect" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.14 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m17.22 42.86c.15-20.83 11.51-28.3 33.52-25.95m-16.69 46.97c19.2 1.61 29.29-12.89 29.17-27.01"
                        stroke-dasharray="2 6"></path>
                    <path
                        d="m7.5 67.92c.03-.87-.02-.9.11-1.77.15-1.03.2-1.82.86-2.68.68-.89 1.53-1.35 2.8-1.6.7-.14 2.01-.37 2.68-.6.67-.22 1.71-1.05.68-2.21-.99-1.11-2.09-2.71-2.07-4.74.01-1.28.47-2.55 1.41-3.5 1.58-1.62 4.29-2.27 6.52-1.5 3.71 1.27 3.54 6.51 1.48 8.42-1.28 1.18-2.09 1.62-2.04 2.31s.42 1.08 1.14 1.34c.5.18 1.05.17 1.58.26 1.65.29 4.1 1.28 4.37 2.78.3 1.66.34 2.39.31 3.49zm45.76-37c.03-.87-.02-.9.11-1.77.15-1.03.2-1.82.86-2.68.68-.89 1.53-1.35 2.8-1.6.7-.14 2.01-.37 2.68-.6.67-.22 1.71-1.05.68-2.21-.99-1.11-2.09-2.71-2.07-4.74.01-1.28.47-2.55 1.41-3.5 1.57-1.62 4.27-2.27 6.51-1.5 3.71 1.27 3.54 6.51 1.48 8.42-1.28 1.18-2.09 1.62-2.04 2.31s.42 1.08 1.14 1.34c.5.18 1.05.17 1.58.26 1.65.29 4.1 1.28 4.37 2.78.3 1.66.34 2.39.31 3.49z">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--customize" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m65 65.24c0-1.85-.03-5.56-.06-10.21.28-13.02.3-26.05.03-39.08 0 0 .63-5.95-3.88-5.95h-42.03c-4.5 0-3.88 5.95-3.88 5.95-.26 13.03-.24 26.05.04 39.08-.04 4.65-.06 8.36-.06 10.21 0 .47.04.88.1 1.26.05.77.28 1.62.91 2.29 1.47 1.82 4.03 1.2 4.03 1.2h39.79s2.56.62 4.03-1.2c.63-.67.86-1.52.91-2.29.04-.39.07-.79.07-1.26z"
                    fill="#80bbff"></path>
                <path
                    d="m60.01 26.73c0-.13-.01-.4-.03-.74.15-.94.16-1.89.02-2.83 0 0 .33-.43-2.05-.43h-35.68c-2.38 0-2.05.43-2.05.43-.14.94-.13 1.89.02 2.83-.02.34-.03.61-.03.74 0 .03.02.06.05.09.03.06.15.12.48.17.78.13 2.13.09 2.13.09h34.5s1.36.04 2.13-.09c.33-.05.45-.11.48-.17 0-.03.03-.06.03-.09zm0 14.9c0-.13-.01-.4-.03-.74.15-.94.16-1.89.02-2.83 0 0 .33-.43-2.05-.43h-35.68c-2.38 0-2.05.43-2.05.43a8.67 8.67 0 0 0 0 2.83c-.02.34-.03.61-.03.74 0 .03.02.06.05.09.03.06.15.12.48.17.78.13 2.13.09 2.13.09h34.5s1.36.04 2.13-.09c.33-.05.45-.11.48-.17.02-.02.05-.05.05-.09zm0 15.28c0-.13-.01-.4-.03-.74.15-.94.16-1.89.02-2.83 0 0 .33-.43-2.05-.43h-35.68c-2.38 0-2.05.43-2.05.43-.14.94-.13 1.89.02 2.83-.02.34-.03.61-.03.74 0 .03.02.06.05.09.03.06.15.12.48.17.78.13 2.13.09 2.13.09h34.5s1.36.04 2.13-.09c.33-.05.45-.11.48-.17 0-.02.03-.05.03-.09z"
                    fill="#fff"></path>
                <path
                    d="m30.63 24.9c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.62.15 3.2 1.34 2.96 2.96zm25.95 14.91c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.62.14 3.2 1.34 2.96 2.96zm-19.66 15.28c-.27 1.79-1.08 3.14-2.96 2.96-1.63-.16-2.96-1.26-2.96-2.96 0-1.64.99-3.14 2.96-2.96 1.63.14 3.2 1.34 2.96 2.96z"
                    style="fill:#001b66;stroke:#001b66;stroke-width:3;stroke-miterlimit:10;stroke-linecap:round;stroke-linejoin:round">
                </path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-add" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m15 19.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <path
                    d="m26.42 69.28h24.07c2.06 0 2.71-.43 2.71-3.22v-2.36m-.37-39.34c-.01 3.94.01 6.89.05 11.3m-27.28-23.58c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11m36.79 19.96c-5.34-.96-8.75 4.58-9.16 8.19-.34 2.97 1.39 9.75 9.01 9.75 4.17 0 8.59-4.72 8.45-8.94s-3.04-8.05-8.3-9zm-.64 4.89c.05 3.41.1 4.95.15 8.36m4.1-4.25c-3.41.05-4.64.1-8.05.15"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-csv" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m14 19.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <path
                    d="m25.42 69.28h24.07c2.06 0 2.71-.43 2.71-3.22v-2.36m-.37-39.34c-.01 3.94.01 6.26.05 10.67m-27.28-22.95c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m28.38 41.36c0 5.18 0 10.35.09 15.53.01.43.02.88.28 1.23.23.32.61.48.99.6 1.3.4 22.38.23 31.75.45.68.02 1.47.1 1.9-.43.28-.35.3-.84.3-1.29.01-5.36.03-10.72.04-16.08 0-.44-.79-1.49-1.2-1.54-2.03-.27-21.55.44-29.22-.1l-3.41-.1c-.01-.02-1.52.19-1.52 1.73z"
                    fill="#fff"></path>
                <path
                    d="m32.14 49.47c0-2.92 1.94-5.3 5.36-5.3 1.4 0 3.02.59 4.17 1.99l-2.01 1.72c-.43-.49-1.21-1.07-2.17-1.07-1.27 0-2.47.92-2.47 2.66 0 1.4.92 2.61 2.47 2.61.81 0 1.68-.43 2.17-1.04l2.01 1.73a5.37 5.37 0 0 1 -4.17 1.95c-2.86.01-5.36-1.83-5.36-5.25zm9.89 3.61 1.56-1.91c.81.82 1.7 1.14 2.34 1.14s.88-.35.88-.66c0-.4-.2-.62-1.3-.98-1.56-.53-3.12-1.29-3.12-3.38 0-1.75 1.46-3.06 3.42-3.1 1.41-.03 2.67.52 3.62 1.37l-1.52 1.95c-.9-.69-1.44-.92-1.95-.92-.49 0-.72.25-.72.61 0 .35.22.62 1.26 1.03 1.82.69 3.19 1.14 3.19 3.12 0 2.57-2.15 3.39-3.87 3.39-1.32-.01-2.69-.53-3.79-1.66zm17.87-8.75-3.74 10.25h-2.41l-3.76-10.25h2.99l1.95 6.34h.03l1.98-6.34z"
                    fill="#001b66"></path>
                <path
                    d="m49.16 59.07c2.63.02 10.41.05 12.32.1.68.02 1.47.1 1.9-.43.28-.35.26-.84.3-1.29.22-2.57.04-16.39.04-16.39s.03-1.07-2.73-1.07-14.13.01-14.13.01"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-default" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.17.13 39.45.13 45.43s3.94 4.74 3.94 4.74h31.61c4.6 0 3.29-5.51 3.29-5.51.4-16.16.47-32.32.21-48.48 0 0 .49-5.95-3.04-5.95h-27.35z"
                    fill="#80bbff"></path>
                <path
                    d="m58.93 24.37c-.04 14.17.36 33.54.36 39.52s-3.94 4.74-3.94 4.74h-22.81m-1.95-57.56c-.08 2.83-.15 5.66-.23 8.5-2.77-.24-4.62-.2-7.38.11"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-invoice" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.76c.04 14.17.13 39.44.13 45.42s3.94 4.74 3.94 4.74h31.6c4.6 0 3.29-5.51 3.29-5.51.4-16.15.47-32.31.21-48.46 0 0 .49-5.95-3.04-5.95h-27.34z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m58.91 24.37c-.04 14.16.36 33.52.36 39.5s-3.94 4.74-3.94 4.74h-22.8m-1.94-57.54c-.08 2.83-.15 5.66-.23 8.49-2.77-.24-4.62-.2-7.38.11">
                    </path>
                    <path
                        d="m46.63 29.67c-2.67-.39-5.42-.78-8.08-.31s-5.23 2.02-5.86 4.27c-.22.8-.2 1.63-.09 2.45.22 1.65.87 3.42 2.51 4.32 2.05 1.13 4.76.48 7.16.85 3.07.48 5.58 2.89 5.77 5.55s-1.94 5.32-4.92 6.12c-1.16.31-2.4.36-3.62.35-2-.03-4-.23-5.95-.6">
                    </path>
                    <path d="m40.39 24.43c.22 10.98.43 21.97.65 32.95 0 .19.05.42.26.47s.25-.36.05-.26"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-pdf" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m14 19.76c.04 14.15.13 39.41.13 45.39s3.94 4.74 3.94 4.74h31.58c4.6 0 3.28-5.51 3.28-5.51.4-16.14.47-32.29.21-48.44 0 0 .49-5.94-3.04-5.94h-27.32z"
                    fill="#80bbff"></path>
                <path
                    d="m25.4 69.18h24.03c2.05 0 2.7-.43 2.7-3.22v-2.35m-.37-39.27c-.01 3.93.01 6.25.05 10.65m-27.23-22.92c-.08 2.83-.15 5.66-.23 8.49-2.76-.24-4.62-.2-7.37.11"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m28.35 41.31c0 5.17 0 10.34.09 15.5.01.43.02.88.27 1.23.23.32.61.48.99.59 1.3.4 22.34.23 31.7.45.68.02 1.47.1 1.89-.43.28-.35.3-.84.3-1.29.01-5.35.03-10.7.04-16.06 0-.44-.79-1.49-1.19-1.54-2.03-.27-21.51.44-29.17-.1l-3.4-.1c-.01 0-1.52.21-1.52 1.75z"
                    fill="#fff"></path>
                <path
                    d="m49.1 58.99c2.62.02 10.39.05 12.3.1.68.02 1.47.1 1.89-.43.28-.35.26-.84.3-1.29.22-2.57.04-16.37.04-16.37s.03-1.07-2.73-1.07-14.1.01-14.1.01"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m33.7 44.39h3.91c2.52 0 3.65 1.5 3.65 3.57 0 2.28-1.5 3.41-3.82 3.41h-1.13v3.07h-2.61zm3.31 4.66c.86 0 1.46-.4 1.46-1.15 0-.62-.48-1.15-1.46-1.15h-.71v2.29h.71zm5.25-4.66h3.63c3.17 0 5.21 2.07 5.21 5.04 0 2.96-1.91 5.01-5.17 5.01h-3.67zm3.48 7.66c1.53 0 2.53-1.18 2.53-2.62 0-1.5-1.02-2.65-2.34-2.65h-1.08v5.27zm6.53-7.66h6.91v2.39h-4.31v1.9h3.53v2.38h-3.53v3.39h-2.61v-10.06z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-person" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m58.95 24.38c-.04 14.18.36 33.56.36 39.55s-3.95 4.75-3.95 4.75h-22.83m-1.93-57.6c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11">
                    </path>
                    <path
                        d="m27.22 51.2c.04-1.09-.02-1.14.14-2.22.19-1.29.25-2.28 1.08-3.37.86-1.12 1.92-1.7 3.52-2.01.88-.17 2.53-.47 3.37-.75s2.15-1.32.85-2.78c-1.25-1.39-2.63-3.4-2.61-5.96.02-1.61.59-3.2 1.77-4.41 1.99-2.04 5.39-2.86 8.2-1.89 4.67 1.6 4.46 8.19 1.86 10.59-1.61 1.49-2.63 2.04-2.57 2.91s.53 1.36 1.43 1.68c.63.22 1.32.21 1.98.33 2.07.36 5.16 1.61 5.5 3.5.38 2.09.43 3 .39 4.39z">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-receipt" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m60.18 39.98c.04-7.56 0-15.12-.11-22.68 0-.97.01-1.78.01-2.39h-.03l-.02-4.91c.32-.14-6.04 3.84-6.31 3.82-.22-.01-5.17-2.64-7.19-3.72-2.27.6-6.81 3.43-7.38 3.4-.4-.02-5.93-3.27-6.45-3.29-.55-.01-4.33 2.17-5.48 3.3-2.4-1.11-4.74-2.3-7.14-3.41l-.02 4.81h-.02c.01.17.02.4.03.66v.19c-.1 5.75-.07 15.14-.03 24.22-.04 9.09-.07 18.48.02 24.22v.19c-.01.26-.02.49-.03.66h.03l.02 4.81c2.4-1.11 4.74-2.3 7.14-3.41 1.15 1.14 4.92 3.32 5.47 3.29.51-.02 6.05-3.27 6.45-3.29.57-.03 5.11 2.81 7.38 3.4 2.03-1.08 6.97-3.7 7.19-3.72.27-.01 6.63 3.96 6.31 3.82l.02-4.91h.03c0-.6 0-1.42-.01-2.39.13-7.54.16-15.11.12-22.67z"
                    fill="#80bbff"></path>
                <path
                    d="m26.37 25.15c5.28-.34 10.35.15 17.57.15m-17.57 10.18c5.28-.34 10.35.15 17.57.15m-17.57 10.91c5.28-.34 10.35.15 17.57.15m8.18.01c.83 0 1.29-.01 1.9-.01m-1.9-10.78c.83 0 1.29-.01 1.9-.01m-1.9-10.54c.83 0 1.29-.01 1.9-.01m-4.46 31.74c.92-.1 3.85-.06 4.46-.06"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="4"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-recurring" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m58.95 24.38c-.04 14.18.36 33.56.36 39.55s-3.95 4.75-3.95 4.75h-22.83m-1.93-57.6c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11m5.24 19.3c.6-3.94 2.87-7.69 6.34-9.66s8.11-1.89 11.27.54">
                    </path>
                    <path
                        d="m46.92 25.14c.81 2 1.23 3.43 1.67 5.54.02.08.03.18 0 .25-.04.09-.14.13-.23.17-2.27.99-3.41 1.57-5.74 2.4m7.62 4.72c-.48 3.96-2.63 7.78-6.04 9.85s-8.05 2.14-11.28-.19">
                    </path>
                    <path
                        d="m32.44 52.85c-.87-1.97-1.78-3.59-2.29-5.69-.02-.08-.04-.17-.01-.25.04-.09.13-.14.22-.18 2.24-1.06 3.36-1.67 5.67-2.57">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-reports" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 18.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path
                        d="m58.95 24.38c-.04 14.18.36 33.56.36 39.55s-3.95 4.75-3.95 4.75h-22.83m-1.93-57.6c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11"
                        stroke-width="3"></path>
                    <path
                        d="m27.23 36.56c5.28-.34 16.29-.16 23.5-.16m-23.5 10.5c5.28-.34 16.29-.16 23.5-.16m-23.5 11.21c5.28-.34 16.29-.16 23.5-.16"
                        stroke-width="4"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--document-xls" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m14 19.77c.04 14.18.13 39.48.13 45.46s3.95 4.75 3.95 4.75h31.64c4.61 0 3.28-5.51 3.28-5.51.4-16.17.47-32.35.21-48.52 0 0 .49-5.95-3.04-5.95h-27.37z"
                    fill="#80bbff"></path>
                <path
                    d="m25.42 69.28h24.07c2.06 0 2.71-.43 2.71-3.22v-2.36m-.37-39.34c-.01 3.94.01 6.26.05 10.67m-27.28-22.95c-.08 2.83-.15 5.67-.23 8.5-2.77-.24-4.62-.2-7.38.11"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m28.38 41.36c0 5.18 0 10.35.09 15.53.01.43.02.88.28 1.23.23.32.61.48.99.6 1.3.4 22.38.23 31.75.45.68.02 1.47.1 1.9-.43.28-.35.3-.84.3-1.29.01-5.36.03-10.72.04-16.08 0-.44-.79-1.49-1.2-1.54-2.03-.27-21.55.44-29.22-.1l-3.41-.1c-.01-.02-1.52.19-1.52 1.73z"
                    fill="#fff"></path>
                <path
                    d="m49.16 59.07c2.63.02 10.41.05 12.32.1.68.02 1.47.1 1.9-.43.28-.35.26-.84.3-1.29.22-2.57.04-16.39.04-16.39s.03-1.07-2.73-1.07-14.13.01-14.13.01"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m37.47 51.44h-.06l-1.79 3.01h-3.14l3.15-5.08-3.01-4.99h3.08l1.72 2.92h.04l1.72-2.92h3.06l-3.01 4.99 3.15 5.08h-3.15zm5.78-7.06h2.71v7.68h4v2.4h-6.71zm7.06 8.6 1.53-1.87c.79.81 1.67 1.12 2.3 1.12.62 0 .87-.34.87-.65 0-.4-.2-.61-1.28-.96-1.53-.52-3.06-1.26-3.06-3.32 0-1.72 1.43-3.01 3.36-3.05 1.39-.03 2.63.51 3.56 1.35l-1.49 1.9c-.88-.68-1.42-.91-1.91-.91-.48 0-.71.24-.71.6 0 .34.21.61 1.23 1.01 1.79.68 3.14 1.12 3.14 3.06 0 2.52-2.11 3.33-3.8 3.33-1.31 0-2.66-.51-3.74-1.61z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--duplicate" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m65.58 62.4c0-1.23-.02-3.7-.05-6.8.22-8.67.24-17.34.03-26.01 0 0 .5-3.96-3.08-3.96h-33.46c-3.58 0-3.08 3.96-3.08 3.96-.21 8.67-.2 17.34.03 26.01-.03 3.1-.05 5.56-.05 6.8 0 .31.03.58.08.84.04.51.22 1.08.72 1.52 1.17 1.21 3.2.8 3.2.8h31.67s2.04.41 3.2-.8c.5-.45.68-1.01.72-1.52.04-.26.07-.53.07-.84z"
                    fill="#80bbff"></path>
                <path
                    d="m55.25 22.46c0-1.94.03-2.25.03-3 0 0 .5-3.96-3.08-3.96h-33.46c-3.58 0-3.08 3.96-3.08 3.96-.21 8.67-.2 17.34.03 26.01-.03 3.1-.05 5.56-.05 6.8 0 .31.03.58.08.84.04.51.22 1.08.72 1.52 1.17 1.21 3.2.8 3.2.8h2.38"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="4"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--envelope" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m13.03 36.27c-.15-.61.39-1.93.68-2.48.33-.61.9-1.01 1.45-1.39 8.07-5.56 14.63-10.56 22.71-16.11.44-.31 1.13-1.29 2.26-1.29 1.06 0 2.56 1.04 2.91 1.28 7.43 5.14 13.73 9.74 21.05 15.05.9.65 1.82 1.33 2.47 2.26.59.85 1.12 1.84 1.12 2.9 0 .61-15.09 9.87-22.76 13.61-2.46-1.43-4.42-2.35-4.91-2.35-.28 0-4.2 2.15-4.2 2.15s-22.51-12.56-22.78-13.63z"
                    fill="#80bbff"></path>
                <path
                    d="m14.75 64.13h51.46m-20.58-14.62 20.54-12.3.11 26.87c-7.31-5.05-16.38-10.06-23.56-15.44-.87-.65-1.81-1.32-2.84-1.29-1.11.03-2.07.84-2.94 1.62-5.81 5.16-15.91 11.04-22.11 15l-.22-26.76 19.99 11.89"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--folder" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m18.51 30.73c.06-2.08-.11-8.8.41-8.88 3.87-.62 14.52-.29 14.97 0 .49.31 4.27 3.41 4.27 3.41s23.47-.49 23.54 0c.24 1.58.36 4.62.36 6.21"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m69.79 33.9s.63-2.91-3.88-2.91h-52.02c-4.5 0-3.88 2.91-3.88 2.91 1.21 7.13 4.49 20.54 5.61 24.67.05.38.28.79.91 1.12 1.47.89 4.03.59 4.03.59h39.79s2.56.3 4.03-.59c.63-.33.86-.74.91-1.12.72-4.24 3.79-17.54 4.5-24.67z"
                    fill="#80bbff"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--growth" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m66.68 34.98c0 11.04-6.36 19.55-20.35 19.99-12.65.4-20.67-10.18-19.89-20.79.96-13.15 11-18.53 19.23-19.13 10.49-.77 21.01 8.89 21.01 19.93z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path d="m52.9 30.98c-4.6 4.43-10.3 10.4-14.89 14.84l-6-6-8.4 8.4"></path>
                    <path
                        d="m45.87 29.66c2.9-.6 6.38-.81 9.23-.91l-.74 9.06m-38.86 22.24c13.05-.12 26.5.08 39.56-.03m-36.1-36.96c.12 12.96-.08 27.23.03 40.19">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--heart" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m60.84 15.23c6.54 3.68 10.72 12.3 7.87 19.24-3.3 8.07-28.98 32.5-28.98 32.5s-26.92-20.7-29.34-32.5c-1.5-7.35 1.34-15.56 7.88-19.24s16.73-3.46 21.15 5.65c7.72-11.59 21.42-5.65 21.42-5.65z"
                    fill="#80bbff"></path>
                <path
                    d="m35.01 61.13c-7.53-6.33-21.2-18.74-22.85-26.77-1.42-6.96 1.26-14.74 7.45-18.22m37.96 3.92c1.47.29 2.8 1.2 3.61 2.46a5.66 5.66 0 0 1 .75 4.3"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--hourglass" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m58.36 12.73c0 3.87.5 6.91-1.29 10.03-1.79 3.11-4.43 5.65-7.15 7.99-1.6 1.38-3.25 2.73-4.45 4.47s-1.88 3.95-1.28 5.97c.68 2.3 2.8 3.83 4.71 5.29 2.45 1.88 4.78 3.96 6.55 6.49s2.95 5.54 2.92 8.62c-.02 1.9.01 3.26.01 5.8h-36.99c0-2.54.03-3.9.01-5.8-.03-3.08 1.15-6.09 2.92-8.62s4.1-4.61 6.55-6.49c1.91-1.46 4.03-2.99 4.71-5.29.6-2.02-.09-4.24-1.28-5.97s-2.85-3.09-4.45-4.47c-2.72-2.35-5.36-4.88-7.15-7.99s-1.29-6.16-1.29-10.03z"
                    fill="#80bbff"></path>
                <path
                    d="m21.5 67.85c8.6 0 20.19-.15 36.47-.15m-36.39-56.12c1.57-.13 22.65-.08 36.31 0m-17.84 27.49c1.26-8.07 9.29-13.49 8.94-13.6"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m39.54 44.37h-.04c-.1.01-.31.04-.41.05-.02 0-.04.01-.05.01-.06.02-.17.07-.19.08.01-.01-.13.05-.18.08-.01 0-.02.01-.02.01-.12.07-.24.17-.34.26-.01.01-.03.02-.04.04-.05.05-.09.12-.13.17s-.09.11-.13.17c-.01.01-.02.03-.03.05-.06.13-.12.27-.17.4-.04.1-.04.21-.05.31s-.04.21-.03.31c.01.15.03.3.06.45 0 .02.01.04.01.06 0 .01.01.02.01.02v.01l.15.36c.01.02.02.03.03.05.04.06.1.13.13.17s.09.12.13.17l.02.02.01.01c.07.06.23.19.31.24.02.01.03.02.05.03.08.04.28.14.41.17.13.02.27.04.4.05.21.01.4-.04.58-.13.13-.04.24-.1.33-.19.16-.11.29-.25.39-.42.09-.15.16-.32.21-.49.01-.03.02-.05.02-.08.03-.15.05-.35.07-.47a.43.43 0 0 0 0-.16c-.02-.18-.03-.37-.08-.54-.05-.2-.14-.37-.27-.51-.11-.16-.25-.29-.42-.39-.17-.11-.36-.17-.56-.18-.2-.04-.4-.04-.6.03l-.36.15c-.23.13-.4.31-.54.54l-.15.36c-.07.27-.07.53 0 .8.01.04.02.07.02.11a5.46 5.46 0 0 1 -.05-.4c.01.07.01.13 0 .2.02-.13.04-.27.05-.4-.01.07-.03.13-.05.19l.15-.36c-.01.03-.03.06-.04.09.56-.23 1.13-.46 1.69-.69-.02 0-.04-.01-.05-.02l.36.15a.21.21 0 0 1 -.06-.04c.1.08.2.16.3.23-.02-.01-.03-.03-.05-.05.08.1.16.2.23.3-.02-.02-.03-.05-.04-.07l.15.36a1.64 1.64 0 0 1 -.03-.11c.02.13.04.27.05.4a.33.33 0 0 1 0-.14c-.02.13-.04.27-.05.4l.03-.12-.15.36c.01-.03.03-.06.05-.09-.08.1-.16.2-.23.3l.06-.06c-.1.08-.2.16-.3.23.02-.01.04-.03.06-.03l-.36.15c.02-.01.05-.02.07-.02-.13.02-.27.04-.4.05h.04c.21.01.4-.04.58-.13.19-.06.35-.16.48-.31.15-.14.25-.3.31-.48.09-.18.14-.37.13-.58a5.46 5.46 0 0 1 -.05-.4c-.07-.25-.2-.47-.39-.66-.1-.08-.2-.16-.3-.23-.22-.13-.47-.2-.74-.2zm-12.66 17.82c.01-.28.03-.56.07-.84-.02.13-.04.27-.05.4.1-.68.28-1.35.55-1.99-.05.13-.1.24-.15.36.26-.61.59-1.19 1-1.72.22-.29.24-.82.15-1.16-.1-.35-.36-.73-.69-.9-.35-.18-.77-.28-1.16-.15-.4.13-.65.36-.9.69-1.15 1.51-1.76 3.41-1.82 5.3-.03.79.71 1.54 1.5 1.5.84-.03 1.48-.65 1.5-1.49z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--id-card" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m20 20.51c0 3.38.13 40.23.13 45.72s3.95 4.35 3.95 4.35h31.64c4.61 0 3.28-5.06 3.28-5.06.4-14.81.47-29.64.21-44.45 0 0 .49-5.45-3.04-5.45h-31.3c-3.77 0-4.87 1.52-4.87 4.89z"
                    fill="#80bbff"></path>
                <path
                    d="m59.22 56.46c.05 3.96.09 7.17.09 9.06 0 5.99-3.95 4.75-3.95 4.75h-22.83m-5.31-15.61c.04-1.09-.02-1.14.14-2.22.19-1.29.25-2.28 1.08-3.37.86-1.12 1.92-1.7 3.52-2.01.88-.17 2.53-.47 3.37-.75s2.15-1.32.85-2.78c-1.25-1.39-2.63-3.4-2.61-5.96.02-1.61.59-3.2 1.77-4.41 1.99-2.04 5.39-2.86 8.2-1.89 4.66 1.6 4.45 8.19 1.86 10.59-1.61 1.49-2.63 2.04-2.57 2.91s.53 1.36 1.43 1.68c.63.22 1.32.21 1.98.33 2.07.36 5.16 1.61 5.5 3.5.38 2.09.43 3 .39 4.39zm5.7-34.59c3.17-.05 11.65.06 14.62.04m-11.95-.21c-.1-2.88-.16-5.76.11-8.59.01-.14.03-.29.13-.4.11-.13.29-.18.47-.2 2.88-.29 5.72-.27 8.33-.06.15.01.28.07.34.21.02.05.04.36.04.41.1 2.98.1 5.6.04 8.61"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--identity" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m25.34 25.57c-4.6 6.42-6.21 14.89-4.28 22.55m8.5-25.7c6.09-3.79 15.5-4.3 22.05.82s7.75 11.31 8.34 16.29m-6.02 1.68c.2 3.66.15 11.55-.31 15.09">
                    </path>
                    <path
                        d="m38.26 25.91c2.94-.21 5.93.57 8.39 2.19s4.36 4.07 5.31 6.85m-20.22-6.22c-2.83 2.16-3.9 5.19-3.69 8.75.12 2 1.13 13.91.46 20.81m6.88 1.2c-.5-6.44-1.01-12.9-.76-19.35.1-2.69.52-5.73 2.69-7.33 1.54-1.13 3.78-1.2 5.39-.16s2.47 3.11 2.07 4.98m-4.9.93c2.46 9.6-.33 13.73 1.66 21.3m5.71-17.57c.28 5.73.38 11.46.3 17.19m12.33-14.74c-.08 3.84-.17 7.68-.25 11.52m-37.11-3.26c.18 1.58.24 3.17.16 4.76">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--info" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <path clip-rule="evenodd"
                    d="m45.07 22.44c0 3-2.43 5.43-5.43 5.43s-5.43-2.43-5.43-5.43 2.43-5.43 5.43-5.43c3-.01 5.43 2.43 5.43 5.43zm-1.25 12.32v20.7c0 .5.33.84.84.84h.84c.92 0 1.67.75 1.67 1.67v3.34c0 .92-.75 1.67-1.67 1.67h-10.04c-.92 0-1.67-.75-1.67-1.67v-3.34c0-.92.75-1.67 1.67-1.67h.84c.5 0 .84-.33.84-.84v-14.85c0-.5-.33-.84-.84-.84h-.84c-.92 0-1.67-.75-1.67-1.67v-3.34c0-.92.75-1.67 1.67-1.67h6.69c.92 0 1.67.75 1.67 1.67z"
                    stroke="#001b66" stroke-miterlimit="10" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--instant" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd"
                    d="m36.45 68.22 2.59-16.02c.09-.57-.06-1.15-.42-1.59s-.88-.69-1.43-.69h-13.69c-.91 0-1.74-.51-2.18-1.34s-.42-1.84.06-2.64l20.91-35.34c.7-1.18 2.45-.49 2.22.88l-2.59 16.02c-.09.57.06 1.15.42 1.59s.88.69 1.43.69h13.7c.91 0 1.74.51 2.18 1.34s.42 1.84-.06 2.64l-20.92 35.33c-.7 1.18-2.44.5-2.22-.87z"
                    fill="#80bbff" fill-rule="evenodd"></path>
                <path d="m58.43 33.15-20.11 34.86m-1.13-18.09h-13.69" stroke="#001b66" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--key" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd"
                    d="m34.47 35.42c-1.43-6.4-1.31-13.71 2.89-18.74 2.05-2.46 4.92-4.14 7.92-5.25 5.62-2.07 11.65-2.19 17.08 1.72 10.12 7.28 6.62 20.67 4.74 24.33-1.79 3.49-5.13 6.05-8.83 7.38-3.69 1.34-7.72 1.54-11.63 1.15-.35-.04-.72-.07-1.06.05-.37.14-.63.46-.88.77l-4.11 5.16c-.41.52-.85 1.06-1.47 1.29-.47.18-.99.17-1.5.15l-5.19-.18-1.58 7-6.19 2.29s-.48 4.5-1.89 5.25-3.07.85-4.67.92c-1.2.06-2.42.11-3.6-.15-.57-.13-1.12-.33-1.6-.67-.76-.53-1.26-1.36-1.56-2.23-.76-2.22-.24-4.73.86-6.8 1.1-2.08 2.75-3.81 4.37-5.51 4.78-5.01 9.97-9.6 14.74-14.61z"
                    fill="#80bbff" fill-rule="evenodd"></path>
                <g stroke="#001b66" stroke-miterlimit="10" stroke-width="3">
                    <path clip-rule="evenodd"
                        d="m62.05 19.84c1.53 2.74.17 5.11-1.62 6.42s-5.11 1.11-7.05-.71-1.25-5.51.83-7.35 6.31-1.1 7.84 1.64z">
                    </path>
                    <path
                        d="m67.85 35.3c-1.12 3.58-3.67 6.68-6.96 8.48-4.27 2.33-9.37 2.4-14.23 2.4-.26 0-.52 0-.75.11-.23.1-.4.3-.57.49-1.66 1.88-4.92 5.59-5.64 6.3-.72.72-7.25.19-7.25.19s-.97 6.39-1.58 7-6.19 2.29-6.19 2.29-.84 4.27-1.89 5.25-4.81 1.98-8.81.75"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--license" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m69.63 56.56c0-1.23-.03-3.68-.08-6.76.33-8.62.36-17.24.04-25.86 0 0 .75-3.94-4.62-3.94h-50.13c-5.37 0-4.62 3.94-4.62 3.94-.32 8.62-.29 17.24.04 25.86-.04 3.08-.08 5.53-.08 6.76 0 .31.05.58.11.83.06.51.34 1.07 1.08 1.51 1.75 1.2 4.8.79 4.8.79h47.45s3.05.41 4.8-.79c.75-.44 1.02-1 1.08-1.51.08-.25.13-.52.13-.83z"
                    fill="#80bbff"></path>
                <path
                    d="m16.29 48.86c.03-.86-.01-.89.11-1.74.15-1.01.2-1.78.85-2.63.67-.88.87-1.33 2.12-1.57.68-.13 1.97-.37 2.63-.59.65-.22 1.68-1.03.67-2.17-.97-1.09-2.05-2.66-2.03-4.65.01-1.25.46-2.5 1.38-3.44 1.55-1.59 4.21-2.23 6.4-1.48 3.64 1.25 3.47 6.39 1.45 8.26-1.26 1.16-2.05 1.59-2 2.27.04.68.41 1.06 1.11 1.31.49.17 1.03.17 1.55.26 1.62.28 3.4 1.25 3.67 2.73.3 1.63.34 2.34.3 3.42zm26.35-15.51c7.83-.15 13.51.01 21.19-.17m-21.19 7.94c3.07-.11 6.6.06 9.52-.09m-9.52 6.02c5.69-.02 11.21.13 17.82-.02"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--light-bulb" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m28.04 59.33c.1-5.89.38-10.51-3.73-14.93-2.14-2.32-4.91-6.3-4.91-11.68s2.72-11.53 9.25-14.61 12.59-4.13 19.71-1.57 10.19 10.04 10.19 15.56-3.96 10.14-5.99 12.45c-3.38 3.83-3.49 11.52-3.84 14.51z"
                    fill="#80bbff"></path>
                <path
                    d="m28.66 58.88c-.07 1.7-.14 4.48-.21 6.18-.07 1.68-.13 3.42.48 4.99.99 2.54 3.61 4.16 6.29 4.64s5.44-.01 8.09-.6c1.74-.39 3.64-.94 4.6-2.44.73-1.13.76-2.56.76-3.9 0-2.38.03-5.93-.02-8.31-.01-.69-19.99-.56-19.99-.56zm1.9-19.2c2.84-2.3 4.86-5.59 5.62-9.16.23-1.09.04-2.62-1.06-2.74-.82-.09-1.42.76-1.71 1.53-.75 1.99-.68 4.28.17 6.23.5 1.15 1.36 2.25 2.56 2.61 1.41.42 2.95-.28 3.98-1.32 2.08-2.09 2.53-5.26 2.73-8.2.03-.39-.13-.94-.5-.86-.09.02-.17.08-.24.14-1.28 1.08-1.53 2.97-1.3 4.63.24 1.66.87 3.24 1.02 4.91.23 2.43 4.87-.94 3.68 1.19-2.33 4.17-7 13.37-6.9 17.18m21.69-37.04c1.23-1.8 2.66-3.47 4.25-4.96m-45.59 6.87a26.538 26.538 0 0 1 -4.46-5.61m24.36-3.61c-.01-2.33.14-4.66.43-6.97m-2.54 59.32c3.34-.16 6.68-.24 10.02-.25m-9.63 6.35c-2.25-.23-4.53-.03-6.71.58"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--location-pin" xmlns="http://www.w3.org/2000/svg">
                <path d="m21.84 67.9c11.96-.12 24.28.08 36.24-.03" stroke="#001b66" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></path>
                <path
                    d="m59.72 29.45c.16-6.87-2.05-12.08-5.95-15.37-1.15-.97-2.5-1.73-3.91-2.33-6.49-2.78-14.51-2.2-20.46 1.47s-9.4 7.27-9.4 16.93 20.05 33.48 20.05 33.48 19.46-25.17 19.67-34.18z"
                    fill="#80bbff"></path>
                <path clip-rule="evenodd"
                    d="m45.68 22.95c1.8 3.23.2 6.03-1.91 7.57s-6.03 1.31-8.31-.84-1.47-6.5.98-8.67 7.44-1.28 9.24 1.94z"
                    stroke="#001b66" stroke-miterlimit="10" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--lock" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m55.11 37.98v-11.02c0-1.94.24-4.08-.27-5.96-.71-2.64-2.44-5.09-4.34-7.02-2.23-2.27-4.74-3.47-7.9-3.85-3.65-.43-7.49.2-10.85 1.67-2.57 1.12-4.57 3.57-5.91 5.97-1.31 2.34-1.68 4.6-1.68 7.23v12.98c0 1.93 3 1.93 3 0v-10.07c0-1.83-.27-3.91.12-5.71.55-2.56 2.23-5.08 4.22-6.74 2.16-1.81 5.58-2.37 8.31-2.45 3-.09 5.7.45 7.95 2.5 1.76 1.61 3.4 3.71 4.1 6.02.49 1.6.23 3.5.23 5.15v11.29c.02 1.94 3.02 1.94 3.02.01z"
                    fill="#001b66"></path>
                <path
                    d="m48.81 37.91v-12.49c0-1.83-.06-3.5-1.2-5.05-1.51-2.04-3.94-3.46-6.45-3.77-2.68-.34-5.32.6-7.51 2.11-1.94 1.34-3.16 3.16-3.19 5.56-.02 1.46 0 2.93 0 4.39v9.25c0 1.93 3 1.93 3 0v-11.72c0-1.32-.23-2.84.64-3.94 1.11-1.41 3.28-2.42 5.01-2.67 2.18-.32 4.48.61 5.89 2.29.94 1.12.82 2.35.82 3.71v12.32c-.01 1.94 2.99 1.94 2.99.01z"
                    fill="#001b66"></path>
                <path
                    d="m61.3 68.12c0-1.1-.02-3.3-.06-6.05.24-7.72.26-15.44.03-23.17 0 0 .54-3.53-3.36-3.53h-36.41c-3.9 0-3.36 3.53-3.36 3.53-.23 7.72-.21 15.44.03 23.16-.03 2.76-.06 4.96-.06 6.05 0 .28.03.52.08.75.04.46.24.96.79 1.36 1.27 1.08 3.49.71 3.49.71h34.46s2.22.37 3.49-.71c.54-.4.74-.9.79-1.36.06-.22.09-.46.09-.74z"
                    fill="#80bbff"></path>
                <path
                    d="m43.11 56.31c2.08-.87 3.33-3.79 3.25-5.93-.08-1.98-1.17-3.77-2.86-4.8-2.05-1.25-4.93-1.38-7.07-.31-1.69.84-2.82 2.58-3.13 4.42-.21 1.27-.1 2.5.5 3.65.54 1.04 1.45 1.78 2.22 2.64-.15-.35-.29-.71-.44-1.06.04 2.25.08 4.49.13 6.74.01.8.68 1.52 1.5 1.5 1.71-.03 3.41-.07 5.12-.1.85-.02 1.45-.68 1.5-1.5l.39-6.7c.11-1.93-2.89-1.92-3 0l-.39 6.7 1.5-1.5c-1.71.03-3.41.07-5.12.1l1.5 1.5c-.02-1.33-.05-2.66-.07-3.99-.01-.76-.03-1.52-.04-2.28 0-.15 0-.3-.01-.45-.05-.71-.46-1.12-.93-1.6-.73-.73-1.49-1.44-1.46-2.55.02-.65.21-1.41.7-2.09.1-.14.52-.53.75-.67.44-.26.92-.4 1.44-.45 1.06-.1 2.34.12 3.14.71.47.35.65.61.91 1.1.12.23.25.75.25.98.01.72-.19 1.41-.53 2.05-.14.27-.32.58-.5.81s-.51.39-.01.18c-.75.31-1.28.99-1.05 1.85.15.71 1.06 1.37 1.81 1.05z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--mailbox" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m15.06 52.71c.06-5.08-.1-12.88-.04-17.96.02-1.78.04-3.56.28-5.31.18-1.29.48-2.58 1.14-3.71 1.15-1.98 3.28-3.24 5.5-3.84s4.54-.6 6.83-.61c8.61-.02 17.22-.03 25.83-.05 2.69-.01 5.66.09 7.66 1.9 2.23 2.02 2.42 5.4 2.41 8.4-.01 6.74-.21 15.04-.58 21.76z"
                    fill="#80bbff"></path>
                <path
                    d="m36.5 48.39c-.33 7.93.14 15.87-.16 23.8-.02.55.01 1.19.46 1.5.25.17.57.18.87.19 1.44.03 2.89.06 4.33.1.14-8.5-.39-16.99-.04-25.48z"
                    fill="#80bbff"></path>
                <g fill="#001b66">
                    <path
                        d="m42.55 31.32c0-2.57-.01-5.14-.02-7.71 0-1.26-.01-2.52-.01-3.79v-1.32c0-.05.04-.38 0-.42-.2-.22-.02.28-.22.21.12.04.58-.18.71-.21.98-.27 1.97-.43 2.99-.47.94-.04 2.04.17 2.89-.36 1.6-.99 1.7-3.82 1.55-5.47-.17-1.9-.62-4.25-2.85-4.54-1.54-.2-3.17-.08-4.72-.1-1.59-.02-4.19-.61-5.25.9-.6.85-.47 2.03-.48 3.01-.02 1.32-.01 2.64 0 3.96.02 1.93 3.02 1.93 3 0-.01-.95-.01-1.91-.01-2.86 0-.38.27-2.3.03-2.53-.2.16-.4.32-.61.48h.43c.18.03.4 0 .59.01.34 0 .68.01 1.02.01l1.93.03 1.89.03c.38 0 .75.01 1.13.01.11 0 .49.07.59.01.2.04.21.01.03-.08-.15-.15-.17-.11-.06.1-.06.33.28.99.33 1.37.05.4.06.81.06 1.2-.01.4-.04.8-.12 1.2-.01.08-.22.66-.19.78-.04-.18.72-.05.05-.16-1.63-.25-3.63.19-5.19.64-1.52.44-2.44 1.23-2.5 2.9-.07 1.91.01 3.85.01 5.76.01 2.47.01 4.95.01 7.42-.01 1.92 2.99 1.92 2.99-.01z">
                    </path>
                    <path
                        d="m24.39 24.29c1.72.02 3.47.45 4.76 1.65 1.54 1.43 2.19 3.54 2.33 5.59.22 3.2.09 6.46.15 9.66.06 3.38.1 6.77-.01 10.15-.03.81.71 1.5 1.5 1.5h28.77c1.93 0 1.93-3 0-3h-28.77l1.5 1.5c.12-3.78.06-7.57-.01-11.35-.06-3.5.27-7.21-.42-10.65-.97-4.89-4.86-7.99-9.8-8.05-1.94-.03-1.94 2.97 0 3z">
                    </path>
                    <path d="m16.45 52.84h45.44c1.93 0 1.93-3 0-3h-45.44c-1.93 0-1.93 3 0 3z"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--merge" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="4">
                    <path d="m40.05 24.49c-.16 8.99.12 12.89-.05 21.88l-8.05 11.89"></path>
                    <path d="m31.87 31.82c2.3-3.49 5.54-7.16 8.28-10.1l8.29 9.77m-4.9 19.57 5.54 6.83"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--money" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m9.17 25.79c0 1.93-.17 22.95-.17 26.08s1.99 2.48 1.99 2.48h56.66c1.33 0 1.43-1.67 1.43-2.9s-.2-24.31-.2-25.9-.59-2.55-3.17-2.55h-53.74c-2.43 0-2.8.87-2.8 2.79z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m33.35 29.89c-1.93 2-3.18 4.93-3.39 7.99-.25 3.58.99 7.33 3.38 9.49.91.82 1.96 1.41 3.05 1.82 3.44 1.3 7.63.61 9.93-2.74 1.95-2.84 1.98-6.9 1.38-10.51-.58-3.54-4.27-8.35-8.26-8.35s-6.09 2.3-6.09 2.3zm-13.96 6.26c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.14-.95-.3-1.96-1.08-2.52zm39 0c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.13-.95-.3-1.96-1.08-2.52z">
                    </path>
                    <path d="m11.66 55.03h53.43c1.23 0 3.99-.61 3.99-3.58v-25.39"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--money-arrow-down" xmlns="http://www.w3.org/2000/svg">
                <path d="m39 59.61c-.13-7.34.09-13.24-.04-20.58m-6.75 15.93c1.88 2.85 4.53 5.85 6.76 8.25l6.77-7.98"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m9.17 17.79c0 1.93-.17 22.95-.17 26.08s1.99 2.48 1.99 2.48h56.66c1.33 0 1.43-1.67 1.43-2.9s-.2-24.31-.2-25.9-.59-2.55-3.17-2.55h-53.74c-2.43 0-2.8.87-2.8 2.79z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m33.35 21.89c-1.93 2-3.18 4.93-3.39 7.99-.25 3.58.99 7.33 3.38 9.49.91.82 1.96 1.41 3.05 1.82 3.44 1.3 7.63.61 9.93-2.74 1.95-2.84 1.98-6.9 1.38-10.51-.58-3.54-4.27-8.35-8.26-8.35s-6.09 2.3-6.09 2.3zm-13.96 6.26c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.14-.95-.3-1.96-1.08-2.52zm39 0c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.13-.95-.3-1.96-1.08-2.52z">
                    </path>
                    <path d="m11.66 47.03h53.43c1.23 0 3.99-.61 3.99-3.58v-25.59"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--money-arrow-up" xmlns="http://www.w3.org/2000/svg">
                <path d="m39 19.1c-.13 7.34.09 13.24-.04 20.58m-6.75-15.93c1.88-2.85 4.53-5.85 6.76-8.25l6.77 7.98"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
                <path
                    d="m9.17 34.39c0 1.92-.17 22.94-.17 26.07s1.99 2.48 1.99 2.48h56.66c1.33 0 1.43-1.67 1.43-2.9s-.2-24.31-.2-25.9-.59-2.55-3.17-2.55h-53.74c-2.43.01-2.8.87-2.8 2.8z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m33.35 38.49c-1.93 2-3.18 4.93-3.39 7.99-.25 3.58.99 7.33 3.38 9.49.91.82 1.96 1.41 3.05 1.82 3.44 1.3 7.63.61 9.93-2.74 1.95-2.84 1.98-6.9 1.38-10.51-.58-3.54-4.27-8.35-8.26-8.35s-6.09 2.3-6.09 2.3zm-13.96 6.26c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.14-.95-.3-1.96-1.08-2.52zm39 0c-1.04.3-1.94 1.14-2.17 2.2s.3 2.27 1.29 2.71c.54.24 1.17.24 1.73.05a2.66 2.66 0 0 0 1.74-2.11c.14-.95-.3-1.96-1.08-2.52z">
                    </path>
                    <path d="m11.66 63.62h53.43c1.23 0 3.99-.61 3.99-3.58v-25.59"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--notification" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.568 56.076c.1 2.69-.74 3.77-2.11 6.43-2.27 4.4.29 6.98 4.63 6.25 2.99-.5 5.9-1.4 24.86-8.55 16.98-6.41 22.27-8.75 24.64-12.23 1.73-2.53-.61-5.34-5.45-6.56-3.35-.85-4.99-3.69-6-7.17-3.25-7.53-6.97-12.82-12.09-17.67-7.69-7.56-20.83-7.19-28.18.67-9.28 8.82-1.07 34.29-.3 38.84v-.01Z"
                    fill="#80BBFF"></path>
                <path
                    d="M32.378 16.055s6.23-.02 9.56 5.34M26.028 51.506s17.71-4.45 30.25-13.27M8.598 59.206s-3 3.9-1 8.45M37.158 63.426s3.99 4.22 9.85 1.89c6.2-2.47 5.67-8.66 5.67-8.66M71.888 42.586s3.09 4.94-.64 8.92"
                    stroke="#001B66" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--offline" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m19.38 55.23c29.04 10.26 42.5-17.99 31.19-35.44 0 0 10.8 3.99 16.06 12.94 4.17 7.09 3.58 19.58-3.85 27.74s-21.47 11.24-29.7 7.89c-9.47-3.86-13.7-13.13-13.7-13.13z"
                    fill="#80bbff"></path>
                <path
                    d="m30.74 35.27c3.53-.01 7.9-.18 11.41.17-2.01 2.69-4.7 6.33-7.08 9l-3.66 4.11c3.82-.05 7.63-.11 11.45-.16m-31.36-21.37c2.95-.01 5.91-.08 8.85.18-1.21 2.45-3.23 4.69-5.22 6.69l-3.06 3.09 9.6-.12m5.03-24.35c2.27-.01 4.54-.06 6.79.14-.93 1.94-2.48 3.72-4 5.3l-2.35 2.44 7.37-.09"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--paperplane" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m7.64 15.41c19.66-.94 45.82-.72 64.59-3.4.69-.1.98 1.25.7 1.89-7.73 17.22-18.32 31.13-27.75 52.28-.36.81-1.29 1.49-2.28.3 0 0-14.96-19.39-15.69-19.15l-6.65 1.89c-1.15.81-1.4-.48-1.42-1.45l.99-11.85c-.01-.92-.62-2.42-1.11-3.19l-11.58-14.94c-.5-.79-.74-2.34.2-2.38z"
                    fill="#80bbff"></path>
                <path
                    d="m20.55 49.21c1.06-1.46 5.06-6.88 5.06-6.88s32.73-19.2 43.96-27.53m-47.86 20.86a814.977 814.977 0 0 0 45.54-19.2m-23.12 50.23c-4.94-6.28-13.39-17.57-18.32-23.85"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--passport" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m59.85 62.72c0-1.63-.02-4.9-.05-9 .22-11.49.24-22.98.03-34.46 0 0 .5-5.25-3.09-5.25h-5.7c-8.32-.01-22.15-.01-22.15-.01h-5.7c-3.59 0-2.98 2.47-2.98 2.47-.21 11.49-.3 25.75-.08 37.24-.03 4.1-.02 9.78.03 10.12.04.68-.4 3.07 1.29 3.07h34.4s2.04.55 3.21-1.06c.5-.59.68-1.34.72-2.02.04-.33.07-.69.07-1.1z"
                    fill="#80bbff"></path>
                <path
                    d="m34.64 30.81c-3.14 2.96-4.11 8.1-1.97 11.85s7.35 5.5 11.19 3.53c3.85-1.98 5.47-7.14 3.94-11.19-.87-2.32-2.66-4.31-4.94-5.29s-5.01-.91-7.17.32zm-5.74-9.38c3.48.04 6.96.09 10.45.13 3.88.05 7.76.1 11.64-.14m-17.35 32.46 2.78.03 9.81.09m-8.44 6.78c1.43.12 2.87.08 4.29-.1"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-bank" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m65.84 61.76h-.74c0-.58-.04-4.23-.04-4.46 0-.44-.07-.73-.72-.73h-1.13v-.21c0-2.84-.03-17.55-.03-19.18v-1.1c.57.01 1.07.01 1.3.01.42 0 .62-.12.62-.53s-.05-4.01-.05-4.25c0-.04-.01-.07-.01-.11h1.58c2.38 0 3.51-.18 3.51-.77 0-.6-.26-5.27-.26-5.61 0-.64-.4-1.06-4.05-1.06h-1.55c-3.98-3.14-15.96-10.8-21.54-13.29-.78-.36-.88-.47-1.52-.47-.66 0-.69.08-1.59.44-6.17 2.51-20.32 10.45-24.27 13.31h-2.04c-2.38 0-3.31.41-3.31.73s.3 5.65.3 6.1c0 .44.75.56 3.9.56 0 .41.05 4.22.05 4.52 0 .31.14.39.74.39h1.09c0 3.55.03 16.78.03 20.51h-1.34c-.42 0-.58.29-.58.5 0 .19.04 3.94.05 4.68h-.94c-2.38 0-3.31.29-3.31.5 0 .22.3 6.77.3 7.09 0 .31.78.39 4.2.39 4.52 0 15.41-.02 22.61-.01 3.75.01 7.51.01 11.26.02 5.95.01 15.49.03 18.26.03 2.38 0 3.51-.12 3.51-.53s-.26-6.51-.26-6.75c.02-.42-.38-.71-4.03-.72zm-38.52 0c0-.59-.04-4.23-.04-4.45 0-.44-.07-.73-.72-.73h-1.13v-.21c0-2.84-.03-17.55-.03-19.18v-1.1c.57.01 1.07.01 1.3.01.42 0 .62-.12.62-.53s-.05-4.01-.05-4.25c0-.07-.01-.12-.01-.18h6.1c0 .37.05 4.23.05 4.53 0 .31.14.39.74.39h1.09c0 3.55.03 16.78.03 20.51h-1.34c-.42 0-.58.29-.58.5 0 .19.04 3.95.05 4.69zm19.17 0c0-.58-.04-4.23-.04-4.45 0-.44-.07-.73-.72-.73h-1.13v-.21c0-2.84-.03-17.55-.03-19.18v-1.1c.57.01 1.07.01 1.3.01.42 0 .62-.12.62-.53s-.05-4.01-.05-4.25c0-.06-.01-.11-.01-.16h1.95c1.1 0 2.33.01 3.61.01.01.47.05 4.2.05 4.5 0 .31.14.39.74.39h1.09c0 3.55.03 16.78.03 20.51h-1.34c-.42 0-.58.29-.58.5 0 .19.04 3.96.05 4.69z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path d="m21.37 23.61c13.48-.14 23.65-.47 36.11-.51" stroke-width="2"></path>
                    <path d="m11.84 31.15c14.71-.14 42.68-.41 56.28-.46m-56.28 31.79c14.71-.14 42.68-.41 56.28-.46"
                        stroke-width="3"></path>
                    <path
                        d="m14.4 32.92c0 .83.24 2.66.24 2.66s1.43-.07 1.47.48c.48 6.07.56 13.09.25 19.17-.01.26-.03.53-.16.77-.3.54-1.05.61-1.67.61-.21 1.33-.29 3.93-.23 5.28h11.64m7.2-28.97c0 .83.24 2.66.24 2.66s1.43-.07 1.47.48c.48 6.07.56 13.09.25 19.17-.01.27-.03.54-.16.77-.3.54-1.05.61-1.67.61-.21 1.33-.29 3.93-.23 5.28h11.64m7.19-28.97c0 .83.24 2.66.24 2.66s1.43-.07 1.47.48c.48 6.07.56 13.09.25 19.17-.01.27-.03.54-.16.77-.3.54-1.05.61-1.67.61-.21 1.33-.29 3.93-.23 5.28h11.64"
                        stroke-width="2"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-bank-credit-card"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m69.39 39.98c0 16.56-9.55 29.33-30.54 29.99-18.99.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path d="m16 43c.139-21.331 10.645-28.98 31-26.574m-13.7 47.454c19.2 1.61 29.29-12.89 29.17-27.01"
                        stroke-dasharray="2 6"></path>
                    <path
                        d="m7.5 56.71c3.22-2.52 9.39-6.72 9.39-6.72s6.76 3.89 9.51 6.53c-4.39.11-18.9.19-18.9.19zm18.9 11.23c-6.42 0-18.9.19-18.9.19m2.58-9.4c-.06 2.25-.12 5.74.01 8.23m6.76-8.23c-.06 2.25-.12 5.74.01 8.23m7.03-8.23c-.06 2.25-.12 5.74.01 8.23m29.11-37.43c0 .95.25 1.18 1.35 1.18 1.45 0 4.96-.05 7.28-.02 1.21.02 2.42.03 3.62.05 1.91.02 4.98.1 5.87.1.77 0 1.13-.37 1.13-1.62s-.08-8.4-.08-9.12c0-1.34-.13-2.22-1.3-2.22-3.52-.01-15.27-.03-16.9-.03-.77 0-1.06.87-1.06 1.53s.09 9.2.09 10.15zm2.01-6.71h16.05">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-cheque" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m10.17 26.79c0 1.93-.17 22.95-.17 26.08s1.99 2.48 1.99 2.48h56.66c1.33 0 1.43-1.67 1.43-2.9s-.2-24.31-.2-25.9-.59-2.55-3.17-2.55h-53.74c-2.43 0-2.8.87-2.8 2.79z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path
                        d="m63.2 34.77c-1.15-.17-2.33-.34-3.47-.13-1.14.2-2.25.87-2.52 1.83-.1.34-.08.7-.04 1.05.09.71.37 1.47 1.08 1.86.88.48 2.04.2 3.07.37 1.32.21 2.4 1.24 2.48 2.39s-.83 2.28-2.11 2.63c-.5.13-1.03.16-1.55.15-.86-.01-1.72-.1-2.55-.26"
                        stroke-width="2"></path>
                    <path d="m60.52 32.52c.09 4.72.19 9.44.28 14.15 0 .08.02.18.11.2s.11-.15.02-.11" stroke-width="2">
                    </path>
                    <path
                        d="m15.72 40.06s31.39 0 33.39-.15m-32.93 9.21s10.81 0 11.67-.15m6.44.15s6.26 0 6.76-.15m-25.18-18.28s6.26 0 6.76-.15"
                        stroke-width="3"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-credit-card" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m10.3 56.32c0 2.96.78 3.68 4.2 3.68 4.52 0 15.41-.16 22.61-.06 3.75.05 7.51.1 11.26.14 5.95.08 15.49.3 18.26.3 2.38 0 3.51-1.15 3.51-5.03s-.25-26.12-.25-28.35c0-4.15-.4-6.89-4.05-6.91-10.95-.02-47.47-.09-52.53-.09-2.38 0-3.31 2.71-3.31 4.76s.3 28.6.3 31.56z"
                    fill="#80bbff"></path>
                <path
                    d="m17.01 48.24c2.41.04 4.82.07 7.23.11l12.48.18m-18.86 6.26c3-.25 6.03-.19 9.03.16m41.18-28.1c-18.73.16-37.77.31-55.92.15v8.29c18.14.16 37.18.01 55.92-.15zm-42.43 7.69c.85-2.15 1.9-4.23 3.13-6.19m5.74 5.73c1.01-2.1 2.3-4.07 3.81-5.85m5.47 6.03c.97-2.36 2.39-4.54 4.16-6.39m3.57 6.51a78.87 78.87 0 0 1 4.45-5.68m4 5.4c1.41-2.12 3.02-4.11 4.79-5.94m-44.71-.4c-.84 2.16-1.69 4.32-2.53 6.48"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-credit-card-disabled"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m16.76 53.37c0 2.39.63 2.97 3.39 2.97 3.65 0 12.45-.13 18.26-.05l9.1.12c4.81.06 12.51.25 14.75.25 1.93 0 2.84-.93 2.84-4.06s-.21-21.09-.21-22.89c0-3.35-.33-5.57-3.27-5.58-8.85-.03-38.34-.08-42.43-.08-1.93 0-2.67 2.19-2.67 3.84s.24 23.09.24 25.48z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m40.26 47.05c.84.01 2.23.02 2.92.03m-21-.23c1.95.03 2.69.06 4.64.08m-3.94 5.21c.8.03.84.01 1.18.03m21.57-15.8c4.07-.03 13.74-.06 17.79-.09v-6.7c-2.34.02-9.2.04-11.55.06m-1.63.07c-8.73.05-23.54.05-31.98-.02v6.7c6.87.06 18.64.07 25.73.04m-13.34-.64c.69-1.74 1.54-3.42 2.53-5m4.39 4.62c.82-1.7 1.86-3.29 3.08-4.73m13.98 4.74c1.14-1.71 2.44-3.32 3.87-4.8m-32.36-.32c-.68 1.74-1.36 3.49-2.05 5.23">
                    </path>
                    <path
                        d="m75.42 40.17c0 19.15-11.04 33.92-35.32 34.68-21.94.69-35.85-17.66-34.51-36.08 1.67-22.82 19.08-32.15 33.37-33.2 18.21-1.33 36.46 15.45 36.46 34.6zm-60.19 24.87 49.14-48.52">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--payments-manual" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.87 27.08c0 12.2-7.03 21.6-22.49 22.08-13.97.43-22.83-11.25-21.98-22.97 1.06-14.53 12.15-20.48 21.25-21.14 11.59-.85 23.22 9.83 23.22 22.03z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path
                        d="m53.41 18.35c-2-.29-4.06-.59-6.05-.23-1.99.35-3.92 1.51-4.4 3.2-.17.6-.15 1.22-.07 1.84.16 1.24.65 2.57 1.88 3.24 1.54.84 3.57.36 5.37.64 2.3.36 4.18 2.17 4.33 4.16s-1.46 3.99-3.69 4.59c-.87.23-1.8.27-2.71.26-1.5-.02-3-.17-4.46-.45"
                        stroke-width="3"></path>
                    <path d="m48.73 14.42c.16 8.24.33 16.47.49 24.71 0 .14.04.32.2.35.16.04.18-.27.04-.2"
                        stroke-width="3"></path>
                    <path
                        d="m10.87 70.93c6.59.66 17.8 2.47 22.6 3.24s4.88-3.04 2.91-3.59-6.1-2.35-6.1-2.35 6.73 1.19 8.89 1.44 3.69-3.14 1.4-3.76c-2.29-.63-9.24-2.49-9.24-2.49s8.95.6 11.41.81 3.1-3.17.42-3.91-10.72-2.11-10.72-2.11 5.18-.25 7.92-.33 2.34-3.55.05-4.05-12.7.37-16.58.28c3.93-1.81 6.52-3.97 8.35-5.4 1.73-1.36.34-5.51-3.07-3.09-1.97 1.41-8.97 5.2-11.89 6.27-2.99 1.05-5.35 1.37-7.22 1.7"
                        stroke-width="2"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--percent" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path d="m27.45 53.16c9.18-9.59 17.6-17.71 27.13-26.95" stroke-width="4"></path>
                    <path
                        d="m32.27 25.04c-1.64.47-3.06 1.81-3.43 3.47s.47 3.58 2.03 4.27c.85.38 1.85.39 2.74.08 1.43-.5 2.54-1.83 2.75-3.34s-.47-3.09-1.7-3.97zm15.32 21.86c-1.64.47-3.06 1.81-3.43 3.47-.37 1.67.47 3.58 2.03 4.27.85.38 1.85.39 2.74.08 1.43-.5 2.54-1.83 2.75-3.34.21-1.5-.47-3.09-1.7-3.97z"
                        stroke-width="3"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--phone" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M56.65 65.11c0-1.85-.02-5.55-.04-10.19.19-12.99.2-25.99.02-38.99 0 0 .42-5.94-2.61-5.94h-4.81C42.2 10 30.54 10 30.54 10h-4.81c-3.03 0-2.6 5.94-2.6 5.94-.18 12.99-.16 25.99.02 38.98-.02 4.64-.04 8.34-.04 10.19 0 .47.03.87.06 1.26.03.77.19 1.61.61 2.28.99 1.82 2.71 1.2 2.71 1.2h26.77s1.72.62 2.71-1.2c.42-.67.58-1.51.61-2.28.04-.38.07-.79.07-1.26z"
                    fill="#80BBFF"></path>
                <path
                    d="M53.59 55.99c0-1.26-.02-3.78-.04-6.95.15-8.86.16-17.72.02-26.58 0 0 .35-4.05-2.13-4.05H28.31c-2.48 0-2.13 4.05-2.13 4.05-.15 8.86-.13 17.72.02 26.58-.02 3.16-.04 5.69-.04 6.95 0 .32.02.6.05.86.03.52.15 1.1.5 1.56.81 1.24 2.22.82 2.22.82h21.9s1.41.42 2.22-.82c.34-.46.47-1.03.5-1.56.02-.26.04-.54.04-.86z"
                    fill="#fff"></path>
                <path
                    d="M53.36 57.69c-4.96.24-9.93.47-14.89.41-4.06-.05-8.33-.8-12.36-.05.63.48 1.27.96 1.9 1.45-.04-12.04-.07-24.08-.11-36.12 0-1.74-.01-3.47-.01-5.2l-1.5 1.5c8.82.05 17.65.09 26.47.14 1.93.01 1.93-2.99 0-3-8.83-.05-17.65-.09-26.47-.14-.81 0-1.5.69-1.5 1.5.03 12.04.07 24.08.1 36.12.01 1.73.01 3.46.02 5.2 0 1.04.95 1.62 1.9 1.45 1.77-.33 3.66-.18 5.45-.08 2.2.13 4.4.22 6.61.24 4.8.04 9.6-.19 14.4-.42 1.91-.09 1.92-3.09-.01-3zm-14.81 6.14c-.16.1-.32.22-.45.36-.23.26-.35.48-.47.81-.07.18-.08.39-.1.58-.02.2.02.41.06.61.03.19.12.37.21.55.09.18.23.35.36.5.1.11.21.2.33.29.12.1.24.19.38.26.25.13.53.25.81.31.26.05.54.1.81.08.52-.03 1.08-.14 1.52-.44.33-.23.56-.44.78-.78.22-.33.29-.69.32-1.07.04-.42-.1-.81-.27-1.19-.03-.07-.07-.14-.12-.21-.12-.17-.25-.36-.41-.5-.21-.2-.46-.39-.73-.51-.43-.2-.79-.31-1.27-.34-.15-.01-.29.01-.44.03a1.8 1.8 0 00-.46.1c-.38.15-.74.33-1.02.66-.27.32-.36.48-.51.86-.08.2-.1.42-.12.64v.14c.01.16.03.34.07.49a1.96 1.96 0 00.26.56c.21.3.38.47.67.67.03.02.07.05.11.07.14.07.3.15.46.19.1.03.2.04.31.05.1.01.2.03.31.03.38-.01.62-.1.95-.26.32-.16.6-.56.69-.9.1-.36.05-.84-.15-1.16-.21-.32-.51-.6-.9-.69a5.46 5.46 0 00-.4-.05c-.27 0-.52.07-.76.2-.01 0-.02.01-.03.01l.36-.15c-.04.02-.08.03-.12.03.13-.02.27-.04.4-.05-.05.01-.1.01-.15 0 .13.02.27.04.4.05a.833.833 0 01-.15-.04l.36.15c-.06-.03-.11-.06-.16-.09.1.08.2.16.3.23-.05-.04-.09-.09-.14-.14.08.1.16.2.23.3a.638.638 0 01-.08-.14l.15.36c-.02-.05-.03-.1-.04-.15.02.13.04.27.05.4-.01-.06 0-.12 0-.18-.02.13-.04.27-.05.4.01-.07.03-.14.06-.2l-.15.36c.03-.07.07-.12.11-.18-.08.1-.16.2-.23.3.05-.07.11-.12.18-.18-.1.08-.2.16-.3.23.06-.04.12-.08.19-.11l-.36.15c.08-.04.17-.06.26-.07-.13.02-.27.04-.4.05.11-.01.21-.01.32 0a5.46 5.46 0 00-.4-.05c.14.02.27.06.39.11l-.36-.15c.13.06.26.13.38.22-.1-.08-.2-.16-.3-.23.09.07.17.15.24.24-.08-.1-.16-.2-.23-.3.06.08.11.16.15.26l-.15-.36c.03.07.05.14.06.21a5.46 5.46 0 01-.05-.4c.01.07.01.14 0 .21.02-.13.04-.27.05-.4-.01.06-.03.13-.05.19l.15-.36c-.03.06-.06.11-.09.16.08-.1.16-.2.23-.3-.05.07-.11.12-.17.17.1-.08.2-.16.3-.23-.08.06-.16.1-.25.14l.36-.15c-.13.05-.27.09-.41.11.13-.02.27-.04.4-.05-.15.02-.31.02-.46 0 .13.02.27.04.4.05-.16-.02-.31-.07-.45-.12l.36.15a1.35 1.35 0 01-.33-.19c.1.08.2.16.3.23a1.07 1.07 0 01-.19-.18c.08.1.16.2.23.3a1.74 1.74 0 01-.11-.18l.15.36a.794.794 0 01-.06-.22c.02.13.04.27.05.4a.604.604 0 010-.19c-.02.13-.04.27-.05.4.01-.06.03-.12.05-.18l-.15.36c.02-.05.05-.09.08-.13-.08.1-.16.2-.23.3l.09-.09c-.1.08-.2.16-.3.23.02-.01.03-.02.05-.03.33-.2.59-.53.69-.9.1-.36.05-.84-.15-1.16-.21-.32-.51-.6-.9-.69-.39-.08-.81-.05-1.16.16z"
                    fill="#001B66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--piggy-bank" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m55.28 25.39c1.14.7 2.71.71 3.88.06.71-.4 1.96-1.53 2.64-1.98s1.73-.58 2.22.07c.27.36.35.85.31 1.3-.2 1.89-.61 5.94-.46 6.36.19.51.56.93.92 1.34 1.94 2.28 3.4 5.91 4.24 8.78.96-.13 1.94-.19 2.91-.18.25 0 .51.02.71.17.26.2.32.56.35.89.21 2.37.17 4.76-.13 7.12-.04.33-.1.68-.29.96-.62.86-2.64.48-3.69.53-1.43 4.13-4.4 7.29-8.8 12.1-.22 1.62-.32 4.11-.54 5.73l-4.77.24c-.35.02-.73.03-1.01-.18-.31-.23-.4-.66-.46-1.04l-.69-4.29a60.238 60.238 0 0 1 -19.69.15c-.27 1.64-.66 3.26-1.18 4.84-2.06-.09-4.13-.18-6.19-.26-.25-2.33-.5-4.65-.74-6.98-.07-.64-5.07-5.57-6.81-9.77-2.27-5.46-1.47-14.02.61-18.31 7.38-15.17 33.16-9.79 36.66-7.65z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                    <path d="m7 46.18s5.73.92 5.53-3.38c-.24-5.11-5.46-4.23-3.28.36 2 4.2 5.53 2.3 7.47 1.18"
                        stroke-width="2"></path>
                    <path
                        d="m59.29 36.79c-.22-.11-.51-.02-.69.16s-.27.42-.36.66c-.18.49-.35 1.07-.06 1.51.11.17.28.29.46.37.46.21 1.04.16 1.45-.15s.59-.89.42-1.37-.71-.81-1.21-.71m-11.16-11.07c1.63-2.3 2.07-5.43 1.02-8.06-.87-2.19-2.66-4.07-4.94-5-2.27-.93-5.01-.86-7.17.3l-1.05.75c-3.14 2.79-4.41 8.3-1.34 11.91 0 0 2.69-.56 6.45-.54s7.03.64 7.03.64zm-13.62-.04a9.34 9.34 0 0 0 -3.63 1.21m17.27-.99c1.08.36 2.13.78 3.16 1.27"
                        stroke-width="3"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--plant" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m41.48 43.15c.18-11.9-.17-23.8.02-35.7.03-1.93-2.97-1.93-3 0-.18 11.9.17 23.8-.02 35.7-.03 1.93 2.97 1.93 3 0z"
                    fill="#001b66"></path>
                <path
                    d="m59.51 28.34c-3.48-2.59-8.17-3.02-12.1-1.24-1.9.86-3.53 2.24-4.75 3.93-.9 1.24-2.38 3.93-1.06 5.28 1.81 1.84 4.61 3.23 7.14 3.6 3.67.54 6.78-1.15 8.89-4.09 1.21-1.68 2.13-3.76 2.57-5.79.41-1.88-2.48-2.69-2.89-.8-.14.63-.34 1.24-.56 1.84-.22.59-.33.86-.68 1.55-.32.62-.72 1.29-1.12 1.82-.92 1.2-2.16 2.18-3.69 2.49-1.69.35-3.46-.19-4.94-.98-.73-.39-1.43-.84-2.09-1.34.22.17-.02-.02-.1-.08s-.15-.13-.23-.19-.15-.13-.22-.2c.15.35.29.71.44 1.06.18-2.71 3.12-4.98 5.5-5.75 2.9-.94 5.96-.31 8.39 1.49.65.48 1.67.11 2.05-.54.43-.77.1-1.58-.55-2.06zm-32.52-3.65c1.66-1.23 3.62-1.62 5.54-1 1.45.47 3.43 1.95 3.53 3.61.15-.35.29-.71.44-1.06-.13.12-.27.23-.4.35-.17.15.29-.21-.01 0-.08.06-.16.12-.25.18-.23.16-.46.31-.7.45-.23.14-.47.27-.71.38-.06.03-.45.2-.24.11-.16.06-.33.12-.49.18-.29.09-.59.17-.89.22-.26.04.19-.01-.07.01-.08.01-.16.01-.24.02-.19.01-.37.01-.56 0-.08 0-.16-.01-.24-.02.04.01.16.03-.01-.01-.19-.04-.39-.09-.57-.15-.09-.03-.37-.15-.14-.05-.14-.07-.28-.14-.41-.21-.13-.08-.26-.16-.38-.25-.23-.15.1.11-.1-.08-.22-.21-.43-.4-.63-.63-.08-.09-.16-.19-.24-.29.16.2 0-.01-.06-.1-.16-.23-.31-.47-.45-.72-.11-.2-.22-.41-.32-.61-.06-.11-.11-.23-.16-.35-.15-.32.06.16-.03-.07-.2-.53-.4-1.06-.52-1.61-.17-.79-1.09-1.25-1.85-1.05-.82.23-1.22 1.06-1.04 1.85.78 3.57 3.44 7.3 7.4 7.35 2.3.03 4.48-1.12 6.19-2.57.19-.16.35-.3.48-.52.53-.91-.02-2.28-.46-3.12-.68-1.32-1.82-2.43-3.06-3.21-2.99-1.88-7.02-1.74-9.86.37-.65.48-.98 1.3-.54 2.05.37.65 1.39 1.03 2.05.55zm24.94-13.82c-2.25-1.28-5.12-1.31-7.34.06-1.04.64-1.95 1.55-2.55 2.63-.29.53-.53 1.11-.63 1.7-.15.9-.11 1.72.7 2.29 1.26.89 2.88 1.48 4.43 1.51 2.18.04 4.03-1.24 5.03-3.13a9.96 9.96 0 0 0 1.11-3.77c.07-.78-.74-1.53-1.5-1.5-.87.04-1.42.66-1.5 1.5-.03.36.08-.47.01-.06a9.044 9.044 0 0 1 -.46 1.77c-.02.05-.16.38-.05.15a6.284 6.284 0 0 1 -.38.72l-.15.24c.01-.01-.11.15-.11.15 0-.01.2-.23.09-.12-.15.17-.29.34-.46.49-.05.04-.1.08-.15.13-.12.12.11-.1.11-.08s-.22.15-.25.16c-.1.06-.21.1-.31.17-.11.08.06-.02.08-.03-.1.03-.19.07-.29.1-.12.03-.24.05-.35.09-.21.06.26-.01.05 0-.06 0-.12.01-.18.01-.1.01-.78-.06-.81-.02.01-.01.29.05.12.01-.07-.02-.15-.03-.22-.04-.11-.02-.21-.05-.32-.08-.25-.07-.5-.16-.75-.24-.24-.09.26.13-.04-.02-.11-.05-.21-.1-.32-.15-.17-.08-.33-.18-.49-.27s-.32-.19-.47-.3c.25.43.5.86.74 1.3-.01-.12 0-.24 0-.36-.01-.2-.06.16.01-.03.04-.11.06-.24.1-.35.03-.09.07-.2.01-.05.09-.21.2-.4.32-.59.04-.07.09-.14.14-.21.02-.03.23-.3.11-.16-.12.15.13-.14.13-.14.06-.06.12-.12.18-.19.13-.14.28-.26.42-.39.12-.12-.18.12.05-.04.07-.05.14-.1.21-.14.18-.12.36-.22.55-.32.08-.04.15-.07.23-.11-.19.09-.07.03.06-.01.19-.07.38-.12.57-.17l.27-.06c.41-.08-.15-.01.08-.01.21 0 .42-.03.63-.02.12 0 .23.01.35.02.06.01.37.06.08 0 .21.04.41.08.61.13.2.06.4.12.59.2-.14-.06-.08-.03.02.02.12.06.25.13.37.2.68.39 1.67.18 2.05-.54.39-.71.2-1.64-.53-2.05z"
                    fill="#001b66"></path>
                <path
                    d="m57.27 42.01v-.02h-34.77v.02c-1.11.09-2.5.77-2.5 2.29v5.76c0 1.96 2.24 1.39 2.4 2.38.62 3.79 2.66 14.69 3.05 16.39.39 1.73.69 4.03 2.84 4.03h23.09c1.9 0 2.14-2.02 2.64-4.03.49-2.01 2.64-12.35 3.36-16.39.17-.98 2.4-.42 2.4-2.38v-5.76c0-1.52-1.39-2.2-2.51-2.29z"
                    fill="#80bbff"></path>
                <path
                    d="m27.94 54.16c7.78-.15 15.56-.21 23.34-.18 1.93.01 1.93-2.99 0-3-7.78-.03-15.56.03-23.34.18-1.93.04-1.93 3.04 0 3zm1.85 20.08c4.8.17 9.61.22 14.41.14 2.27-.04 4.55-.02 6.81-.2 1.93-.15 3.33-.92 4.08-2.78.88-2.19 1.19-4.7 1.68-7.01.53-2.52 1.06-5.05 1.56-7.58.38-1.89-2.51-2.69-2.89-.8-.88 4.4-1.7 8.84-2.8 13.18-.13.51-.26 1.4-.72 1.75-.6.45-1.82.26-2.5.29-2.15.08-4.31.13-6.46.15-4.39.05-8.78-.01-13.17-.16-1.93-.04-1.93 2.96 0 3.02z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--play" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m59.72 38.34c-13.29-12.45-24.34-21.55-33.79-27.84-.9-.6-2.07-.67-3.04-.18-.97.5-1.57 1.47-1.57 2.53l.08 53.78c0 1.1.66 2.1 1.68 2.57.38.18.8.27 1.2.28.69.01 1.37-.2 1.92-.64l33.33-26.26c.65-.51 1.04-1.27 1.08-2.08s-.29-1.6-.89-2.16z"
                    fill="#80bbff"></path>
                <path
                    d="m20.12 60.2c-.16 1.74-.17 3.48.02 5.22.16 1.48.41 3.01 1.57 4.06 1.43 1.29 3.8 1.13 5.37.19 2.09-1.25 3.96-3.03 5.81-4.59 6.39-5.37 12.63-10.92 18.96-16.37 1.56-1.34 3.11-2.68 4.69-4 .65-.54 1.29-1.08 1.95-1.62.26-.21.51-.42.77-.62l.59-.46c.65-.5.97-1.28.54-2.05-.36-.64-1.41-1.03-2.05-.54-10.88 8.34-20.52 18.18-31.32 26.61-.06.05-.2.16-.46.35-.18.14-.36.27-.55.4-.25.17-.51.34-.78.49-.18.09.26-.11.24-.1-.41.13-.96.34-1.4.23-.69-.18-.78-.93-.88-1.55-.3-1.85-.24-3.8-.07-5.65.18-1.92-2.82-1.91-3 0z"
                    fill="#001b66"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--recurring" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path d="m23.94 39.99c.87-5.76 4.19-11.25 9.26-14.12s11.86-2.76 16.47.79"></path>
                    <path
                        d="m51.26 19.74c1.18 2.92 1.8 5.01 2.45 8.09.03.12.05.26 0 .37-.06.13-.2.2-.33.25-3.32 1.44-4.99 2.29-8.4 3.5m11.14 6.91c-.7 5.78-3.85 11.37-8.82 14.4s-11.77 3.13-16.49-.28">
                    </path>
                    <path
                        d="m30.09 60.25c-1.27-2.88-2.6-5.25-3.35-8.32-.03-.12-.06-.25-.01-.37.06-.13.2-.2.32-.26 3.27-1.54 4.92-2.45 8.29-3.76">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--recurring-money" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m60.38 50.43c-4.08 10.02-21.92 17-33.64 7.36m-1.05 3.98c-.33-1.68-.75-3.1-.78-4.81 0-.07 0-.14.04-.2.05-.06.13-.08.2-.1 1.92-.43 2.9-.71 4.84-1m-10.6-26.43c4.08-10.02 21.92-17 33.64-7.36">
                    </path>
                    <path
                        d="m54.08 17.9c.33 1.68.75 3.1.78 4.81 0 .07 0 .14-.04.2-.05.06-.13.08-.2.1-1.92.43-2.9.71-4.84 1m-4.98 7.84c-1.95-.29-3.95-.57-5.89-.23-1.93.34-3.81 1.47-4.27 3.11-.16.58-.14 1.19-.07 1.78.16 1.21.63 2.5 1.83 3.15 1.49.82 3.47.35 5.22.62 2.24.35 4.07 2.11 4.21 4.05s-1.42 3.88-3.59 4.46c-.85.23-1.75.27-2.64.25-1.46-.02-2.91-.17-4.34-.44">
                    </path>
                    <path d="m40.25 28.03c.16 8.01.32 16.01.47 24.02 0 .14.04.31.19.34s.18-.26.04-.19"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--search" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m31.06 42.39c-7.3 6.48-13.62 13.96-20.88 20.49-.5.45-1.03 1.05-.72 1.88.17.46.56.87.93 1.25l3.97 4.09c.75.77 1.76 1.03 2.23.56 7.21-6.98 13.71-14.68 21.22-21.36z"
                    fill="#80bbff"></path>
                <path
                    d="m46.45 7.05c-10.11.74-22.42 7.34-23.61 23.47-.95 13.03 8.9 26.01 24.42 25.52 17.17-.52 24.98-10.97 24.98-24.52 0-13.54-12.91-25.42-25.79-24.47zm.96 41.58c-10.88.35-17.77-8.75-17.11-17.87.82-11.31 9.45-15.93 16.53-16.45 9.02-.66 18.07 7.65 18.07 17.13.01 9.5-5.47 16.81-17.49 17.19z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m64.91 31.45c0 9.49-5.47 16.81-17.5 17.18-10.88.34-17.77-8.75-17.1-17.88.83-11.31 9.46-15.93 16.53-16.45 9.02-.65 18.07 7.66 18.07 17.15z">
                    </path>
                    <path
                        d="m64.91 31.45c0 9.49-5.47 16.81-17.5 17.18-10.88.34-17.77-8.75-17.1-17.88.83-11.31 9.46-15.93 16.53-16.45 9.02-.65 18.07 7.66 18.07 17.15z">
                    </path>
                    <path
                        d="m68.97 43.88c-2.62 5.18-9.24 9.68-14.86 11.11s-12.8.31-18.83-2.05c-3.89 4.09-14.12 12.95-18.99 18.44l-6.79-6.66">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--security" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m64.73 20.61c1 .31 1.45 1 1.28 1.9-.17.89-3.76 32.64-25.58 47.16-.42.28-.99.28-1.41.01-21.56-13.95-24.92-46.65-25.01-47.53-.09-.89.45-1.29 1.32-1.54.81-.24 17.07-5.84 23.8-10.28.68-.45 1.6-.45 2.24.04 5.78 4.43 22.42 9.95 23.36 10.24z"
                    fill="#80bbff"></path>
                <path
                    d="m40.24 68.21c10.24-5.32 15.46-14.02 19.66-23.65m-37.06-19.76c6.65-1.04 12.22-3.61 17.51-7.77 0 0 5.02 5.53 16.28 7.68"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--settings" xmlns="http://www.w3.org/2000/svg">
                <g clip-rule="evenodd">
                    <path
                        d="m61.09 8.36c.5-.74 1.44-1.04 2.27-.74l.8.29c.84.3 1.36 1.14 1.27 2.03l-.41 3.96c.8.61 1.51 1.33 2.12 2.15l3.9-.27c.89-.06 1.71.49 1.98 1.34l.26.81c.28.85-.06 1.77-.82 2.25l-3.25 2.03c.02 1.09-.12 2.15-.41 3.15l2.6 2.79c.61.65.69 1.63.21 2.38l-.46.71c-.49.75-1.42 1.07-2.26.78l-3.69-1.27c-.79.63-1.67 1.15-2.63 1.54l-.62 3.9c-.14.88-.86 1.55-1.75 1.63l-.85.07c-.89.08-1.72-.46-2.01-1.3l-1.31-3.81c-.94-.23-1.84-.58-2.67-1.04l-3.55 2.05c-.77.45-1.75.31-2.37-.33l-.59-.61c-.62-.64-.72-1.62-.25-2.38l2.23-3.58c-.37-.8-.65-1.66-.81-2.56l-3.92-1.51a1.946 1.946 0 0 1 -1.23-2.05l.1-.85c.11-.88.81-1.58 1.69-1.69l4.26-.53c.39-.79.87-1.52 1.43-2.19l-1.23-4.05c-.26-.85.09-1.77.86-2.23l.73-.44c.76-.46 1.74-.34 2.37.29l2.92 2.92c.58-.14 1.17-.23 1.79-.28.35-.02.69-.03 1.03-.02zm-2.28 17.91a3.9 3.9 0 0 0 3.61-4.15 3.9 3.9 0 0 0 -4.15-3.61 3.9 3.9 0 0 0 -3.61 4.15 3.893 3.893 0 0 0 4.15 3.61z"
                        stroke="#001b66" stroke-miterlimit="10" stroke-width="3"></path>
                    <path
                        d="m37.35 25.48a2.937 2.937 0 0 1 3.62-.92l.95.44c1.27.59 1.95 2 1.62 3.36l-1.33 5.48c1.56 1.25 2.89 2.71 3.97 4.33l5.58-.85a2.94 2.94 0 0 1 3.21 1.9l.36 1c.48 1.32-.04 2.79-1.24 3.52l-4.82 2.93c.22 1.93.14 3.91-.25 5.87l4.54 3.34c1.13.83 1.52 2.34.92 3.62l-.45.96c-.59 1.27-2 1.95-3.36 1.62l-5.48-1.33a19.162 19.162 0 0 1 -4.33 3.97l.85 5.58a2.94 2.94 0 0 1 -1.9 3.21l-1 .36c-1.32.48-2.79-.04-3.52-1.24l-2.93-4.82c-1.93.22-3.91.14-5.87-.25l-3.34 4.54a2.937 2.937 0 0 1 -3.62.92l-.96-.45c-1.27-.59-1.95-2-1.62-3.36l1.33-5.48a19.162 19.162 0 0 1 -3.97-4.33l-5.58.85a2.94 2.94 0 0 1 -3.21-1.9l-.36-1c-.48-1.32.04-2.79 1.24-3.52l4.82-2.93c-.22-1.93-.14-3.91.25-5.87l-4.54-3.34a2.937 2.937 0 0 1 -.92-3.62l.45-.96c.59-1.27 2-1.95 3.36-1.62l5.48 1.33c1.25-1.56 2.71-2.89 4.33-3.97l-.85-5.58a2.94 2.94 0 0 1 1.9-3.21l1-.36c1.32-.48 2.79.04 3.52 1.24l2.93 4.82c1.93-.22 3.91-.14 5.87.25zm.75 26.96a8.66 8.66 0 0 1 -11.52 4.19 8.66 8.66 0 0 1 -4.19-11.52 8.66 8.66 0 0 1 11.52-4.19c4.34 2.03 6.22 7.18 4.19 11.52z"
                        fill="#80bbff" fill-rule="evenodd"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--shopping-cart" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m68.72 49.34c-.5 2.2-.67 2.79-3.63 2.79-3.91 0-32.41.02-34.81.02-2.06 0-3.45.05-4.6-2.71-1.06-2.56-6.08-22.54-7.27-27.15-.44-1.71-.89-4 1.24-3.75 9.4 1.08 44.79 7.19 48.66 8.36 1.95.59 2.16 1.59 2.16 3.15s-1.22 16.98-1.75 19.29z"
                    fill="#80bbff"></path>
                <path
                    d="m33.01 61.85c1.11.44 1.82 1.59 2.07 2.76.25 1.15.05 2.51-.89 3.21-.29.22-.64.36-1 .46-.4.11-.82.18-1.22.12-.7-.09-1.32-.53-1.82-1.03-.71-.72-1.26-1.63-1.39-2.63s.23-2.09 1.04-2.7c.61-.47 1.44-.62 2.2-.46.76.15 1.44.59 1.96 1.16m23.2-.89c1.11.44 1.82 1.59 2.07 2.76.25 1.15.05 2.51-.89 3.21-.29.22-.64.36-1 .46-.4.11-.82.18-1.22.12-.7-.09-1.32-.53-1.82-1.03-.71-.72-1.26-1.63-1.39-2.63-.12-1 .23-2.09 1.04-2.7.61-.47 1.44-.62 2.2-.46.76.15 1.44.59 1.96 1.16m5.7-5.08c-4.66 0-27.05 0-33.26-.29-1.31-.06-2.73-.2-3.71-1.06s-1.26-2.23-1.5-3.49c-1.94-10.3-5.92-27.83-8.63-37.96-.32-1.24-.78-2.62-1.96-3.18-1.38-.64-3.25.52-3.25 2.01s1.89 2.64 3.26 1.99c.63-.3 1.61-1.21 1.54-1.88"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--signature" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <path
                    d="m28.38 42.88c6.22-.43 12.03-4.64 13.82-10.72.9-3.05.72-6.75-1.37-9.29-.97-1.18-2.44-1.95-3.98-1.52-1.53.43-2.52 1.84-3.1 3.23-2.86 6.76-.54 14.21-1.43 21.25-.36 2.87-1.36 6.61-3.97 8.25-1.06.66-2.58.87-2.71-.77-.12-1.48 1.19-2.86 2.61-3.08 1.45-.23 2.78.73 3.83 1.6 1.3 1.09 2.49 2.32 3.93 3.23 2.78 1.75 6.33 2.3 9.15.33 4.11-2.88 7.59-11.74 3.08-15.66-1.07-.93-2.51-1.25-3.75-.43-1.25.84-1.66 2.46-1.83 3.86-.35 2.79.42 5.73 2.06 8.02 3.51 4.89 10.18 5.6 14.61 1.47 2.24-2.09 3.73-5.8 2.27-8.74-.73-1.48-2.34-2.49-4.02-2.13-1.8.39-2.4 1.94-2.59 3.6-.39 3.48.7 7.34 3.59 9.51 2.56 1.92 6.37 2.29 9 .31 1.52-1.15.03-3.75-1.51-2.59-1.78 1.34-4.23 1.15-5.93-.29-1.92-1.62-2.62-4.69-2.12-7.08.28-1.34 1.06.27 1.12.91.1 1.09-.26 2.18-.84 3.09-1.13 1.77-3.18 3-5.27 3.18-4.59.4-7.76-4.41-7.43-8.59.04-.47.1-.95.26-1.39.04-.12.13-.52.25-.57-.02.01-.02.03.17.12.92.45 1.03 2.13 1.01 2.98-.06 2.27-1.04 4.81-2.43 6.6-1.7 2.21-4.17 2.61-6.61 1.32-2.32-1.22-3.89-3.44-6.17-4.73-2.19-1.23-4.8-1.3-6.88.21-1.97 1.43-3.08 4-2.3 6.39.8 2.43 3.37 3.35 5.67 2.53 2.36-.84 4.02-2.93 5.06-5.13 2.38-5.04 1.91-10.66 1.71-16.06-.13-3.33-.16-6.81 1.02-9.98.44-1.2 1.25-2.65 2.35-1.11.86 1.21 1.08 2.79 1 4.24-.33 5.74-5.8 10.26-11.32 10.64-1.93.12-1.94 3.12-.01 2.99z"
                    fill="#001b66"></path>
                <path
                    d="m12.67 54.69a48.8 48.8 0 0 1 4.98-5.86m-5.18-.52c1.56 1.99 3.47 4.52 5.31 6.25m-5.14 7.56c17.27-.99 40.54.63 55.35-.02"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--single-user" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m8.62 69.79c.1-2.75-.05-2.86.35-5.58.48-3.24.64-5.74 2.72-8.48 2.15-2.82 4.82-4.28 8.83-5.05 2.2-.43 6.36-1.18 8.46-1.89s5.41-3.33 2.15-6.98c-3.13-3.5-6.61-8.55-6.55-14.97.04-4.03 1.49-8.04 4.44-11.07 5.01-5.12 13.55-7.18 20.61-4.75 11.71 4.01 11.19 20.58 4.67 26.6-4.04 3.73-6.6 5.13-6.45 7.31.14 2.18 1.33 3.42 3.59 4.22 1.58.56 3.32.53 4.99.82 5.2.9 12.96 4.04 13.82 8.8.95 5.26 1.09 7.54.97 11.02z"
                    fill="#80bbff"></path>
                <path
                    d="m33.8 12.94c-4.39 2.08-7.78 6.16-9.01 10.86s-.29 9.92 2.51 13.89c1.19 1.69 2.71 3.17 3.63 5.03s1.11 4.3-.28 5.83c-.73.81-1.79 1.24-2.84 1.55-4.75 1.42-10.3 1.05-14.09 4.24-4.14 3.5-4.37 9.7-4.17 15.11"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--star" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m63.21 33.01c-2.86-.05-5.72-.13-8.59-.13-1.43 0-2.86 0-4.29-.02-.54-.01-1.36.15-1.86-.04-.45-.17-.63-.7-.86-1.12-2.57-4.63-3.92-9.86-5.82-14.77-.51-1.32-2.67-2.04-3.42-.44-1.41 3.01-2.49 6.17-3.65 9.28-.54 1.46-1.08 2.92-1.7 4.35-.28.66-.58 1.32-.94 1.95-.07.12-.32.53-.44.71-.05.01-.1.03-.14.04h-.01c-.4.04-.8.08-1.21.11-1.36.1-2.72.14-4.08.18-2.08.07-4.16.08-6.24.1-1.29.01-2.59.05-3.88.05-2.93.01-3.61 1.71-1.31 3.5.4.31.75.28 1.1.28 1.8 1.49 3.55 3.04 5.43 4.44 1.11.82 2.25 1.62 3.44 2.34.61.37 1.23.73 1.87 1.06.29.15.58.29.87.43.15.07.24.13.29.16-.14 1.45-.61 2.96-.89 4.39-.31 1.54-.62 3.08-.92 4.61-.65 3.22-1.29 6.45-1.94 9.67-.33 1.63 1.44 2.56 2.69 1.55 4.49-3.62 8.85-7.43 13-11.44.74-.72 1.9-.77 2.7-.12 1.93 1.56 3.86 3.12 5.78 4.69 1.38 1.13 2.76 2.26 4.15 3.39 1.22 1 2.39 2.13 3.94 2.59 1.37.4 2.58-1.18 1.85-2.39-1.46-2.42-2.69-4.95-3.63-7.61-.49-1.4-.92-2.81-1.26-4.25-.16-.65-.3-1.31-.43-1.97-.07-.35-.34-1.31-.26-1.49.16-.35.99-.81 1.3-1.06.54-.44 1.07-.9 1.6-1.36 1.06-.91 2.11-1.81 3.15-2.74 2.06-1.84 4.07-3.74 5.93-5.77 1.08-1.17.34-3.12-1.32-3.15zm-31.61-.16c-.01.02-.02.03-.02.02-.01 0 0-.01.02-.02z"
                    fill="#80bbff"></path>
                <path
                    d="m60.81 18.41c1.77-1.78 2.8-3.07 4.57-4.85m-25.03-4.97v-4.09m.92 70.48c0-2.51-.12-1.94-.12-4.45m-22.35-50.41c-2.1-2-4.11-4.08-6.04-6.24m-2.5 54.65c1.76-1.79 1.97-2 3.73-3.79m51.53.77c.99 1.45 1.11 1.59 2.31 2.86m3.64-28.3c1.77.08 2.57-.18 4.35-.1m-72.32-1.08c1.7.09 2.59.02 4.29.12"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--stopwatch" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m67.16 44.15c0 15.15-8.55 26.83-27.36 27.43-17 .54-27.78-13.97-26.74-28.54 1.3-18.04 14.79-25.42 25.86-26.25 14.1-1.05 28.24 12.21 28.24 27.36z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m37.61 16.75c-.08-.87-.11-1.75-.09-2.62-.95.33-1.98.5-3.01.47-.11-.87-.1-1.74.04-2.61.05-.31.12-.64.36-.88.37-.39 1.03-.45 1.61-.48 3.14-.15 6.29-.17 9.44-.07.17.01.36.02.46.13.08.08.09.19.1.3l.18 2.19c.01.13.02.28-.06.39-.12.17-.37.21-.59.24l-2.59.3c.08.87.15 1.75.23 2.62m-3.04 27.41c6.68.36 15.88.1 22.57.1m-15.8-21.29c.27.17.55.34.82.5m6.89 4.15c.35.3.7.59 1.05.89m3.53 6.43c.24.53.44 1.08.6 1.64">
                    </path>
                    <path
                        d="m40.46 41.37c-.61.1-1.16.46-1.54.95-.38.48-.6 1.08-.71 1.69-.06.37-.09.75.02 1.11.27.93 1.35 1.42 2.32 1.35.93-.07 1.87-.64 2.12-1.54.16-.56.03-1.16-.23-1.69-.18-.36-.42-.7-.76-.9-.34-.21-.8-.26-1.14-.06m.13-20.9c-.04 1.69-.08 3.38-.13 5.07m.13 36.37c-.04 1.69-.08 3.38-.13 5.07m-18.12-23.2c-1.69-.04-3.38-.08-5.07-.13">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--success" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m53.37 55.28c-5.21 2.48-25.8 10.67-39.09 14.91-.77.25-1.59.49-2.37.28-1.09-.3-1.77-1.44-1.88-2.56-.12-1.12.22-2.23.55-3.31 3.91-12.69 11.09-33.18 12.46-37.83s14.38-8.47 25.83 4.26 9.72 21.77 4.5 24.25z"
                    fill="#80bbff"></path>
                <path
                    d="m22.63 31.44c.6 3.18 2.13 6.16 3.87 8.87 1.73 2.69 3.74 5.35 6.05 7.58 4.22 4.1 10.59 7.24 16.55 7.32 1.93.03 1.93-2.97 0-3-5.27-.07-11.01-3-14.67-6.69-3.94-3.97-7.84-9.29-8.9-14.88-.36-1.89-3.25-1.09-2.9.8zm11.15 3.09c1.89-1.68 1.82-4.24 2.02-6.56.08-.88.2-1.95.91-2.57 1-.87 2.68-.94 3.85-1.53 1.29-.65 2.25-1.78 2.43-3.24.14-1.17-.69-2.86.12-3.85.8-.98 2.17-1.44 3.14-2.23 1.17-.96 2.04-2.25 1.95-3.82-.11-1.92-3.11-1.93-3 0 .08 1.3-1.5 1.94-2.43 2.53-.99.63-1.97 1.37-2.52 2.43-.75 1.43-.24 2.73-.22 4.22.02 1.31-1.47 1.56-2.49 1.87-2.48.75-4.15 2.19-4.58 4.82-.29 1.78.18 4.48-1.3 5.8-1.45 1.29.68 3.41 2.12 2.13z"
                    fill="#001b66"></path>
                <path
                    d="m40.77 40.98c.54-.78.79-1.68 1.01-2.59.2-.83.3-1.67 1.18-1.99.94-.34 1.91-.48 2.83-.88.95-.41 1.81-.94 2.63-1.58 2.97-2.34 5.61-7 3.64-10.74-1.07-2.03-3.49-2.86-5.32-1.27-1.47 1.28-1.92 3.35-1.5 5.2.97 4.25 6.17 5.45 9.62 3.44 2.03-1.18 3.36-3.22 4.08-5.41.29-.9.46-1.88.93-2.71.62-1.09 1.75-1.06 2.87-1.29 1.89-.39 1.09-3.29-.8-2.89-1.6.33-3.07.56-4.15 1.91-.93 1.17-1.27 2.64-1.71 4.04-.82 2.62-3.44 5.38-6.41 4.02-1.16-.53-1.84-1.82-1.53-3.08.1-.39.44-1.15.86-1.05.65.15.72 1.6.7 2.07-.14 2.91-2.63 5.57-5.2 6.65-1.64.69-3.48.65-4.62 2.23-.96 1.33-.8 3.09-1.71 4.41-1.08 1.59 1.51 3.09 2.6 1.51zm10.07 4.69c1.76-2.81 4.32-6.72 8.2-5.53.95.29 1.85.49 2.85.3.96-.18 1.85-.7 2.64-1.27 1.68-1.2 3.2-2.59 4.56-4.15 1.26-1.45-.85-3.58-2.12-2.12-1.31 1.51-2.79 2.97-4.48 4.04-.9.57-1.5.66-2.5.34-.91-.29-1.85-.46-2.8-.38-4.27.38-6.83 3.9-8.93 7.24-1.04 1.66 1.56 3.16 2.58 1.53z"
                    fill="#001b66"></path>
                <path
                    d="m23.54 12.77c0 1.74-.98 3.08-3.14 3.15-1.96.06-3.19-1.61-3.08-3.28.15-2.07 1.7-2.92 2.97-3.02 1.63-.12 3.25 1.41 3.25 3.15zm36.65-.62c0 1.74-.98 3.08-3.14 3.15-1.95.06-3.19-1.61-3.07-3.28.15-2.07 1.7-2.92 2.97-3.02 1.61-.11 3.24 1.41 3.24 3.15zm7.78 36.03c0 1.74-.98 3.08-3.14 3.15-1.95.06-3.19-1.61-3.07-3.28.15-2.07 1.7-2.92 2.97-3.02 1.61-.11 3.24 1.41 3.24 3.15z"
                    fill="#80bbff"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--support" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m39.08 9.75c-12.35.91-27.41 8.98-28.85 28.71-1.16 15.92 10.87 31.79 29.85 31.2 20.99-.66 30.54-13.43 30.54-29.99s-15.79-31.07-31.54-29.92zm1.13 46.45c-10.46.33-17.09-8.42-16.45-17.2.79-10.88 9.1-15.32 15.9-15.82 8.68-.63 17.38 7.36 17.38 16.49s-5.26 16.17-16.83 16.53z"
                    fill="#80bbff"></path>
                <g fill="#001b66">
                    <path d="m32.91 10.45.3 12.49c.05 1.93 3.05 1.93 3 0l-.3-12.49c-.05-1.93-3.05-1.94-3 0z"></path>
                    <path
                        d="m34.73 25.26c1.93 0 1.93-3 0-3s-1.94 3 0 3zm10-14.61c.22 4.43.05 8.88.38 13.31.06.81.65 1.5 1.5 1.5.77 0 1.56-.69 1.5-1.5-.33-4.42-.15-8.88-.38-13.31-.04-.81-.66-1.5-1.5-1.5-.78 0-1.54.69-1.5 1.5zm25.65 21.76-12.49.3c-1.93.05-1.93 3.05 0 3l12.49-.3c1.93-.04 1.93-3.04 0-3z">
                    </path>
                    <path
                        d="m57.07 35.74c1.93 0 1.93-3 0-3s-1.93 3 0 3zm13.11 8.49c-4.43.22-8.88.05-13.31.38-.81.06-1.5.65-1.5 1.5 0 .77.69 1.56 1.5 1.5 4.42-.33 8.88-.15 13.31-.38.81-.04 1.5-.66 1.5-1.5 0-.78-.69-1.54-1.5-1.5zm-21.48 24.44-.3-12.49c-.05-1.93-3.05-1.93-3 0l.3 12.49c.05 1.93 3.05 1.94 3 0z">
                    </path>
                    <path
                        d="m46.88 56.86c1.93 0 1.93-3 0-3s-1.93 3 0 3zm-10 11.61c-.22-4.43-.05-8.88-.38-13.31-.06-.81-.65-1.5-1.5-1.5-.77 0-1.56.69-1.5 1.5.33 4.42.15 8.88.38 13.31.04.81.66 1.5 1.5 1.5.78 0 1.54-.69 1.5-1.5zm-26.43-19.97 12.49-.3c1.93-.05 1.93-3.05 0-3l-12.49.3c-1.93.05-1.94 3.05 0 3z">
                    </path>
                    <path
                        d="m23.76 48.18c1.93 0 1.93-3 0-3s-1.94 3 0 3zm-13.11-11.5c4.43-.22 8.88-.05 13.31-.38.81-.06 1.5-.65 1.5-1.5 0-.77-.69-1.56-1.5-1.5-4.42.33-8.88.15-13.31.38-.81.04-1.5.66-1.5 1.5 0 .78.69 1.54 1.5 1.5z">
                    </path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--thinking" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m14.37 58.06c-.26 4.04-2.27 11.94-.12 11.94 2.53 0 9.89-6.47 13.54-8.48 0 0 46.58 8.16 46.58-25.48 0-20.24-13.22-26.04-35.97-26.04s-30.42 15.62-32.16 20.97-1.61 11.28.2 16.61c1.56 4.58 7.93 10.48 7.93 10.48z"
                    fill="#80bbff"></path>
                <path
                    d="m31.87 27.88c.25-1.66.72-2.74 1.64-3.92.78-.99 1.6-2 2.73-2.7 2.11-1.32 5.16-1.39 7.52-.33s4 3.14 4.47 5.36-.18 4.54-1.56 6.44c-1.58 2.17-4.09 3.83-5.23 6.2-1 2.07-1.23 4.08-1.13 6.03"
                    stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="4"></path>
                <circle cx="40.5" cy="51.5" fill="#001b66" r="2.5"></circle>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--transaction" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m70.47 39.98c0 16.56-9.55 29.33-30.54 29.99-18.98.59-31.02-15.28-29.85-31.2 1.44-19.73 16.5-27.8 28.85-28.71 15.75-1.15 31.54 13.36 31.54 29.92z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m44.41 31.97c-1.87-.27-3.79-.55-5.64-.22s-3.65 1.41-4.1 2.98c-.16.56-.14 1.14-.06 1.71.15 1.16.61 2.39 1.75 3.02 1.43.79 3.33.33 5 .6 2.15.34 3.9 2.02 4.03 3.88.14 1.86-1.36 3.72-3.44 4.28-.81.22-1.68.25-2.53.24-1.4-.02-2.79-.16-4.16-.42">
                    </path>
                    <path
                        d="m40.05 28.31c.15 7.67.3 15.35.46 23.02 0 .13.03.3.18.33s.17-.25.04-.18m13.64 8.54c-4.22-.08-25.42.04-29.64-.03">
                    </path>
                    <path
                        d="m51.7 56.12c1.64 1.08 3.36 2.6 4.74 3.89l-4.58 3.89m-24.75-43.6c4.22-.08 24.62-.24 28.84-.32">
                    </path>
                    <path d="m29.78 16.4c-1.64 1.08-3.36 2.6-4.74 3.89l4.58 3.89"></path>
                </g>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 80" id="decor--users" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m16.53 62.02c.08-2.07-.04-2.15.26-4.2.36-2.44.48-4.32 2.05-6.38 1.62-2.13 3.63-3.22 6.65-3.81 1.66-.32 4.79-.89 6.37-1.42s4.08-2.5 1.62-5.26c-2.36-2.64-4.98-6.44-4.93-11.27.03-3.04 1.12-6.06 3.35-8.34 3.77-3.86 10.2-5.4 15.52-3.58 8.82 3.02 8.42 15.49 3.51 20.03-3.04 2.81-4.97 3.86-4.86 5.5s1 2.58 2.7 3.18c1.19.42 2.5.4 3.75.62 3.92.68 9.76 3.04 10.41 6.62.72 3.96.82 5.68.73 8.3z"
                    fill="#80bbff"></path>
                <g stroke="#001b66" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="3">
                    <path
                        d="m24.67 45.7c-.78-.25-1.57-.46-2.36-.63-.59-.12-1.19-.23-1.71-.56s-.95-.95-.94-1.64c.02-.83.64-1.43 1.17-2 1.34-1.46 2.33-3.42 2.52-5.54s-.51-4.38-1.97-5.68c-1.33-1.18-3.15-1.46-4.78-1.03">
                    </path>
                    <path
                        d="m17.52 28.55c-2.1.14-4.16 1.45-5.26 3.53s-1.13 4.9.04 6.92c.34.59.77 1.11 1.11 1.7.33.6.57 1.32.44 2.01-.13.72-.62 1.3-1.18 1.64s-1.19.49-1.82.65c-1.49.38-3.07.89-4.07 2.23-1.09 1.46-1.24 3.54-1.29 5.47 0 .17 0 .36.11.47.08.08.19.09.29.09 2.53.19 5.06.26 7.59.25m53.14-.51c2.39-.11 4.78-.26 7.17-.4.13-.01.26-.02.35-.12.08-.09.1-.22.11-.34.11-.97.22-1.96.12-2.93-.1-.98-.43-1.95-1.09-2.63-.62-.64-1.46-.94-2.27-1.19-.83-.25-1.67-.46-2.51-.63-.62-.12-1.26-.23-1.82-.56-.55-.33-1.01-.95-.99-1.64.02-.83.69-1.43 1.24-2 1.43-1.46 2.48-3.42 2.67-5.54s-.54-4.38-2.09-5.68c-1.41-1.18-3.34-1.46-5.08-1.03">
                    </path>
                    <path
                        d="m63.43 28.24c-2.24.14-4.42 1.45-5.59 3.53s-1.21 4.9.04 6.92c.36.59.82 1.11 1.18 1.7s.6 1.32.47 2.01c-.13.72-.66 1.3-1.25 1.64s-1.27.49-1.93.65">
                    </path>
                </g>
            </symbol>
        </svg>
    </div>
    <div style="display: none;" bis_skin_checked="1">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewBox="0 0 20 20" id="action" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.82 13H3a1 1 0 0 1-.78-1.625l8-10c.643-.804 1.936-.227 1.766.79L11.18 7H17a1 1 0 0 1 .78 1.625l-8 10c-.643.804-1.936.227-1.766-.79L8.82 13zm-3.74-2H10a1 1 0 0 1 .986 1.164l-.368 2.213L14.919 9H10a1 1 0 0 1-.986-1.164l.368-2.213L5.081 11z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="add" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm1-10V5.833c0-.46-.448-.833-1-.833s-1 .373-1 .833V9H5.833C5.373 9 5 9.448 5 10s.373 1 .833 1H9v3.167c0 .46.448.833 1 .833s1-.373 1-.833V11h3.167c.46 0 .833-.448.833-1s-.373-1-.833-1H11zm-1 8c4.067 0 7-2.933 7-7s-2.933-7-7-7-7 2.933-7 7 2.933 7 7 7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="add--large" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 24C6.925 24 2 19.075 2 13S6.925 2 13 2s11 4.925 11 11-4.925 11-11 11zm0-2a9 9 0 1 0 0-18 9 9 0 0 0 0 18z">
                </path>
                <path d="M12 8a1 1 0 0 1 2 0v10a1 1 0 0 1-2 0V8z"></path>
                <path d="M8 14a1 1 0 0 1 0-2h10a1 1 0 0 1 0 2H8z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="add--simple" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 9h5.167c.46 0 .833.448.833 1s-.373 1-.833 1H11v5.167c0 .46-.448.833-1 .833s-1-.373-1-.833V11H3.833C3.373 11 3 10.552 3 10s.373-1 .833-1H9V3.833C9 3.373 9.448 3 10 3s1 .373 1 .833V9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="advances" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8 11.215l-5.174 3.547a1.272 1.272 0 0 1-1.193.067c-.39-.183-.633-.545-.633-.945V6.062c0-.4.243-.762.633-.944.38-.179.837-.153 1.192.066L8 8.783V6.062c0-.4.243-.762.633-.944.38-.179.837-.153 1.192.066l5.665 3.94c.318.196.509.523.51.873a1.04 1.04 0 0 1-.508.88l-5.666 3.885a1.272 1.272 0 0 1-1.193.067c-.39-.183-.633-.545-.633-.945v-2.67zM18 5a1 1 0 0 1 1 1v8a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="alert" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1 10a9 9 0 1 0 18 0 9 9 0 0 0-18 0Zm16 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"></path>
                <path
                    d="M9.293 13.293a1 1 0 1 0 1.414 1.414 1 1 0 0 0-1.414-1.414ZM9.293 5.293A1 1 0 0 1 11 6v5a1 1 0 0 1-2 0V6a1 1 0 0 1 .293-.707Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="android" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.096 1.011c-.047.009-.095.017-.136.046a.37.37 0 0 0-.09.51l.78 1.168c-1.205.64-2.104 1.706-2.397 2.983h9.995c-.292-1.277-1.191-2.342-2.397-2.983l.78-1.168a.37.37 0 0 0-.09-.51.37.37 0 0 0-.509.102l-.86 1.27a5.583 5.583 0 0 0-3.844 0l-.859-1.27a.363.363 0 0 0-.373-.148zm1.165 2.892a.544.544 0 1 1-.002 1.088.544.544 0 0 1 .002-1.088zm3.98 0c.3 0 .542.244.542.545a.542.542 0 1 1-1.085 0c0-.301.243-.545.543-.545zM4.1 6.443c-.6 0-1.086.488-1.086 1.09v5.08c0 .601.487 1.089 1.086 1.089.127 0 .249-.027.362-.068V6.512a1.056 1.056 0 0 0-.362-.068zm1.085 0v7.984c0 .6.488 1.09 1.086 1.09h7.96a1.09 1.09 0 0 0 1.085-1.09V6.444H5.186zm11.216 0c-.127 0-.248.027-.362.069v7.122c.114.04.235.068.362.068.6 0 1.086-.488 1.086-1.089v-5.08c0-.602-.487-1.09-1.086-1.09zm-9.768 9.799v1.452c0 .8.648 1.451 1.447 1.451a1.45 1.45 0 0 0 1.447-1.451v-1.452H6.633zm4.341 0v1.452c0 .8.649 1.451 1.447 1.451a1.45 1.45 0 0 0 1.448-1.451v-1.452h-2.895z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="apple" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.186 15.027a9.817 9.817 0 0 1-.958 1.74c-.503.726-.915 1.228-1.233 1.507-.493.458-1.02.692-1.585.706-.406 0-.895-.117-1.464-.354-.572-.235-1.097-.352-1.577-.352-.503 0-1.043.117-1.62.352-.579.237-1.045.36-1.401.372-.542.024-1.082-.217-1.621-.724-.344-.303-.775-.823-1.29-1.56-.553-.787-1.008-1.699-1.364-2.739-.382-1.123-.573-2.21-.573-3.264 0-1.206.258-2.247.774-3.118.406-.7.946-1.253 1.622-1.659A4.328 4.328 0 0 1 7.09 5.31c.43 0 .995.134 1.696.399.7.265 1.148.4 1.345.4.147 0 .646-.158 1.492-.471.8-.291 1.475-.412 2.027-.364 1.499.122 2.624.72 3.373 1.795-1.34.82-2.003 1.97-1.99 3.444.012 1.149.425 2.104 1.235 2.863.367.353.777.625 1.233.818-.099.29-.203.568-.314.834zM13.749 1.36c0 .9-.325 1.74-.973 2.519-.783.925-1.73 1.46-2.756 1.375a2.832 2.832 0 0 1-.021-.341c0-.865.372-1.79 1.033-2.546.33-.382.75-.7 1.259-.955.508-.25.988-.388 1.44-.412.013.12.018.24.018.36z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="approve" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.8437 2.15195C11.2724 1.95874 10.7142 1.95179 10.2068 2.11966C9.71041 2.28386 9.33191 2.59193 9.06203 2.92062C8.97528 3.02628 8.88398 3.17385 8.81762 3.28298C8.73828 3.41345 8.64282 3.57675 8.53773 3.75838C8.47271 3.87075 8.40349 3.99103 8.3305 4.11786C8.16351 4.40803 7.97641 4.73313 7.77513 5.0757C7.32877 5.8354 6.84787 6.61943 6.42418 7.21177C6.29539 7.15134 6.1516 7.11757 5.99992 7.11757H2.99992C2.44763 7.11757 1.99992 7.56529 1.99992 8.11757V16.0107C1.99992 16.563 2.44763 17.0107 2.99992 17.0107L5.99992 17.0107C6.04531 17.0107 6.09 17.0077 6.13379 17.0018C6.26361 17.0625 6.4026 17.1099 6.5496 17.1418C7.78847 17.4109 9.46008 17.682 10.9524 17.845C11.6985 17.9265 12.4159 17.9829 13.0211 17.9966C13.5769 18.0092 14.1856 17.9925 14.6192 17.8495C15.6588 17.5066 16.3045 16.6935 16.7086 15.9377C17.1157 15.1765 17.3504 14.3383 17.5026 13.7357C17.6593 13.1157 17.8694 12.1167 17.9577 11.1637C18.0017 10.6894 18.019 10.1908 17.9721 9.74063C17.9297 9.33365 17.8182 8.77227 17.4412 8.35458C17.1186 7.99708 16.6662 7.80396 16.2994 7.68835C15.9049 7.56401 15.458 7.48392 15.0125 7.43294C14.317 7.35336 13.5531 7.33687 12.858 7.36394C13.1163 6.41225 13.2861 5.44608 13.3623 5.01271C13.3811 4.90561 13.3942 4.83089 13.4015 4.79719C13.4948 4.3667 13.4196 3.84048 13.2083 3.38555C12.9819 2.89789 12.5507 2.39108 11.8437 2.15195ZM10.6203 4.16127L10.6194 4.1621C10.7003 4.06536 10.7775 4.01716 10.841 3.99616C10.8947 3.97841 11.0011 3.95804 11.1967 4.02419C11.2822 4.0531 11.3435 4.10932 11.391 4.21163C11.416 4.26549 11.4311 4.32166 11.4375 4.36829C11.4401 4.38665 11.4407 4.39933 11.4409 4.40634C11.4212 4.50101 11.3971 4.63619 11.3675 4.80223C11.2619 5.39453 11.0863 6.37947 10.7899 7.31867C10.6154 7.87154 10.7838 8.40696 11.0752 8.76939C11.3668 9.13193 11.8572 9.41524 12.4424 9.36963C13.1669 9.31318 14.041 9.3136 14.7827 9.39846C15.1545 9.44101 15.4637 9.50157 15.6923 9.57362C15.8219 9.61446 15.8956 9.64974 15.932 9.66934C15.9445 9.70885 15.967 9.79315 15.9827 9.94345C16.0109 10.2146 16.0042 10.5715 15.9661 10.983C15.8902 11.8015 15.7041 12.6948 15.5624 13.2558C15.4162 13.8341 15.2279 14.4754 14.9407 15.0125C14.6506 15.555 14.3308 15.8589 13.9867 15.9724C13.9838 15.9732 13.9631 15.979 13.9189 15.9861C13.8697 15.9941 13.8037 16.0019 13.719 16.0081C13.5486 16.0205 13.3302 16.0245 13.0669 16.0185C12.5409 16.0065 11.8861 15.9564 11.1719 15.8783C9.75895 15.724 8.1765 15.4675 7.01586 15.2173L7.03611 9.92842C7.03627 9.88673 7.05894 9.76358 7.17174 9.5553C7.27757 9.35989 7.42521 9.15817 7.57544 8.97999C8.19884 8.24057 8.92712 7.0523 9.50424 6.07003C9.71013 5.7196 9.90485 5.38127 10.0736 5.08814C10.1451 4.96381 10.2124 4.84684 10.2735 4.74132C10.3779 4.56091 10.4641 4.41362 10.5314 4.30294C10.5761 4.2295 10.6022 4.18944 10.6135 4.17203C10.6183 4.16471 10.6204 4.16139 10.6203 4.16127Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="arrow-down" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.318 8.769a1 1 0 011.413.049L9 14.463V3a1 1 0 112 0v11.463l5.269-5.645a1 1 0 011.462 1.364l-7 7.5a1 1 0 01-1.462 0l-7-7.5a1 1 0 01.049-1.413z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="arrow-left" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.414 11l5.293 5.293a1 1 0 0 1-1.414 1.414l-7-7a1 1 0 0 1 0-1.414l7-7a1 1 0 1 1 1.414 1.414L5.414 9H17a1 1 0 0 1 0 2H5.414z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="arrow-right" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.586 9L9.293 3.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7a1 1 0 1 1-1.414-1.414L14.586 11H3a1 1 0 1 1 0-2h11.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="arrow-up" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.318 11.231a1 1 0 001.413-.049L9 5.537V17a1 1 0 102 0V5.537l5.269 5.645a1 1 0 101.462-1.364l-7-7.5a1 1 0 00-1.462 0l-7 7.5a1 1 0 00.049 1.413z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="attachment" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.722 9.496a.75.75 0 0 1 1.055-.008.737.737 0 0 1 .009 1.048l-6.86 6.919a5.203 5.203 0 0 1-7.4 0 5.286 5.286 0 0 1 0-7.432l6.86-6.92a3.719 3.719 0 0 1 5.287 0 3.77 3.77 0 0 1 0 5.302l-6.866 6.92c-.875.883-2.3.883-3.176 0a2.254 2.254 0 0 1 0-3.172l6.337-6.384a.75.75 0 0 1 1.055-.008.737.737 0 0 1 .008 1.048l-6.336 6.385a.779.779 0 0 0 0 1.09.734.734 0 0 0 1.049 0l6.866-6.919c.88-.888.88-2.333 0-3.221a2.219 2.219 0 0 0-3.16 0l-6.86 6.919a3.81 3.81 0 0 0 0 5.352 3.703 3.703 0 0 0 5.273 0l6.859-6.92z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="attention" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.916 3.222C8.369 2.453 9.153 2 10 2c.848 0 1.632.453 2.085 1.222l6.594 12.196c.426.758.428 1.689.006 2.449-.424.765-1.147 1.122-2.084 1.133H3.391c-.928-.01-1.65-.368-2.075-1.133a2.51 2.51 0 0 1 0-2.436l6.6-12.21zm-4.76 12.904a.717.717 0 0 0-.002.696c.063.114.21.174.557.178h12.46c.356-.004.502-.064.565-.178a.723.723 0 0 0-.008-.708L10.564 4.298A.657.657 0 0 0 10 3.97a.656.656 0 0 0-.557.317l-6.287 11.84zM10 14a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-6a1 1 0 0 1 1 1v3a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="back" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.813 16.187a1.15 1.15 0 0 1-1.626 1.626l-7-7a1.15 1.15 0 0 1 0-1.626l7-7a1.15 1.15 0 0 1 1.626 1.626L7.626 10l6.187 6.187z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="badge" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7 2a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H8a1 1 0 01-1-1V2zm2 1v1h2V3H9z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 4a1 1 0 011-1h3a1 1 0 010 2H5v12h10V5h-2a1 1 0 110-2h3a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V4z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 9a1 1 0 100 2 1 1 0 000-2zm-3 1a3 3 0 116 0 3 3 0 01-6 0zm0 5a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="balance" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.5 8a.5.5 0 100 1 .5.5 0 000-1zM2 8.5a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zM15.5 8a.5.5 0 100 1 .5.5 0 000-1zm-2.5.5a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zM10 2a1 1 0 011 1v13a1 1 0 11-2 0V3a1 1 0 011-1z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM2 17a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 16a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="bank" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.085 17c.506 0 .917.448.917 1s-.41 1-.917 1H1.918c-.506 0-.916-.448-.916-1s.41-1 .916-1h16.167zM4 11a1 1 0 1 1 2 0v4a1 1 0 0 1-2 0v-4zm5 0a1 1 0 1 1 2 0v4a1 1 0 0 1-2 0v-4zm5 0a1 1 0 0 1 2 0v4a1 1 0 0 1-2 0v-4zM1.392 7.122l8.25-6a.59.59 0 0 1 .719 0l8.25 6c.682.496.418 1.878-.359 1.878h-16.5C.973 9 .71 7.618 1.391 7.122zM15.08 7l-5.078-3.86L4.923 7H15.08z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="bar-graph" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.8 17H3.2c-.7 0-1.2-.5-1.2-1.2v-3.6c0-.7.5-1.2 1.2-1.2h1.6c.7 0 1.2.5 1.2 1.2v3.6c0 .7-.5 1.2-1.2 1.2zm6.1 0H9.1c-.6 0-1.1-.5-1.1-1.1V8.1C8 7.5 8.5 7 9.1 7h1.8c.6 0 1.1.5 1.1 1.1v7.8c0 .6-.5 1.1-1.1 1.1zm6.1 0h-2c-.6 0-1-.4-1-1V4c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v12c0 .6-.4 1-1 1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="briefcase" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.5 5H14V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v1H4.5C3.1 5 2 6.1 2 7.5v8C2 16.9 3.1 18 4.5 18h11c1.4 0 2.5-1.1 2.5-2.5v-8C18 6.1 16.9 5 15.5 5zM8 4h4v1H8V4zm8 11.5c0 .3-.2.5-.5.5h-11c-.3 0-.5-.2-.5-.5V11h4v1h4v-1h4v4.5zM16 9H4V7.5c0-.3.2-.5.5-.5h11c.3 0 .5.2.5.5V9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="business" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 19H2.5c-.8 0-1.5-.7-1.5-1.5v-15C1 1.7 1.7 1 2.5 1h9c.8 0 1.5.7 1.5 1.5V18c0 .6-.4 1-1 1zm-8.3-2h6.6c.4 0 .7-.3.7-.7V3.7c0-.4-.3-.7-.7-.7H3.7c-.4 0-.7.3-.7.7v12.6c0 .4.3.7.7.7z">
                </path>
                <path
                    d="M17.5 19H12c-.6 0-1-.4-1-1V6.5c0-.8.7-1.5 1.5-1.5h5c.8 0 1.5.7 1.5 1.5v11c0 .8-.7 1.5-1.5 1.5zm-3.8-2h2.6c.4 0 .7-.3.7-.7V7.7c0-.4-.3-.7-.7-.7h-2.6c-.4 0-.7.3-.7.7v8.6c0 .4.3.7.7.7zM5.5 6h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm4 0h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5z">
                </path>
                <path
                    d="M15.5 10h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm0 3h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm0 3h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm-10-7h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm4 0h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm-4 3h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zm4 0h-1c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zM9 17H5v-3.6c0-.2.2-.4.4-.4h3.1c.3 0 .5.2.5.4V17z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="camera" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.414 5H16a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3h1.586l1.707-1.707A1 1 0 0 1 8 3h4a1 1 0 0 1 .707.293L14.414 5zm-6 0L6.707 6.707A1 1 0 0 1 6 7H4a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-2a1 1 0 0 1-.707-.293L11.586 5H8.414zM10 15a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="cancel" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.592 10l5.078 5.078a1.126 1.126 0 0 1-1.592 1.592L10 11.592 4.922 16.67a1.126 1.126 0 1 1-1.592-1.592L8.408 10 3.33 4.922A1.126 1.126 0 0 1 4.922 3.33L10 8.408l5.078-5.078a1.126 1.126 0 0 1 1.592 1.592L11.592 10z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="cart" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.295 4.29a1 1 0 01.835-.282l13 1.7a1 1 0 01.858 1.149l-1 6.3A1 1 0 0117 14H6a1 1 0 01-.992-.876l-1-8a1 1 0 01.287-.833zm1.858 1.87l.73 5.84h9.263l.705-4.442L6.153 6.16z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1 3a1 1 0 011-1h2a1 1 0 01.894.553l1 2a1 1 0 01-1.788.894L3.382 4H2a1 1 0 01-1-1z"></path>
                <path d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm9 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="categorize" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9 16v-3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2Zm-2-3H4v3h3v-3Zm9-9h-3v3h3V4Zm0 9h-3v3h3v-3Zm-5-9a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V4Zm2 7a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2h-3ZM6 8.914A1 1 0 0 1 4.587 7.5l.793-.793H2.793a1 1 0 0 1 0-2h2.586l-.793-.793A1 1 0 0 1 6 2.5L8.5 5a1 1 0 0 1 0 1.414L6 8.914Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="category" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7 4H4v3h3V4Zm2 12v-3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2Zm0-9V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2Zm-2 6H4v3h3v-3Zm9-9h-3v3h3V4Zm0 9h-3v3h3v-3Zm-5-9a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2V4Zm2 7a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2h-3Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="check" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 14.586L17.293 4.293a1 1 0 0 1 1.414 1.414l-11 11a1 1 0 0 1-1.414 0l-5-5a1 1 0 0 1 1.414-1.414L7 14.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="checklist" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18 6h-8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1s-.4 1-1 1zm0 6h-8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1s-.4 1-1 1zm0 6h-8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1s-.4 1-1 1zM3.5 7.5c-.3 0-.5-.1-.7-.3L1.3 5.7c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l.8.8 2.8-2.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L4.2 7.2c-.2.2-.4.3-.7.3zm0 5.7c-.3 0-.5-.1-.7-.3l-1.5-1.4c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l.8.8 2.7-2.7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L4.2 13c-.2.2-.4.2-.7.2zm0 5.8c-.3 0-.5-.1-.7-.3l-1.5-1.5c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l.8.8L6 14c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-3.2 3.2c-.2.3-.4.4-.7.4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="close-menu" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.18 12.249c-.348.426-.175.772.376.772h6.905c.556 0 .727-.342.377-.772L10.64 8.321c-.35-.426-.91-.43-1.26 0l-3.2 3.928z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="coin" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19c-5 0-9-4-9-9s4-9 9-9 9 4 9 9-4 9-9 9zm0-16c-3.9 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7z">
                </path>
                <path
                    d="M11 14H8c-.6 0-1-.4-1-1s.4-1 1-1h3c.4 0 .5-.3.5-.5s-.1-.5-.5-.5H9c-1.6 0-2.5-1.3-2.5-2.5S7.4 6 9 6h3c.6 0 1 .4 1 1s-.4 1-1 1H9c-.4 0-.5.3-.5.5s.1.5.5.5h2c1.6 0 2.5 1.3 2.5 2.5S12.6 14 11 14z">
                </path>
                <path
                    d="M10 8c-.6 0-1-.4-1-1V5c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1zm0 8c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="collapse" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.813 14.813a1.15 1.15 0 0 1-1.626-1.626l7-7a1.15 1.15 0 0 1 1.626 0l7 7a1.15 1.15 0 0 1-1.626 1.626L10 8.626l-6.187 6.187z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="collapse-diagonal" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.2793 4.15575C17.6219 3.81321 17.583 3.21894 17.1924 2.82842C16.8019 2.43789 16.2076 2.39899 15.8651 2.74153L12.5356 6.07106V4.24263C12.5356 3.69035 12.0879 3.24263 11.5356 3.24263C10.9833 3.24263 10.5356 3.69035 10.5356 4.24263L10.5356 8.48527C10.5356 9.03756 10.9833 9.48527 11.5356 9.48527L15.7782 9.48527C16.3305 9.48527 16.7782 9.03756 16.7782 8.48527C16.7782 7.93299 16.3305 7.48527 15.7782 7.48527L13.9498 7.48527L17.2793 4.15575Z">
                </path>
                <path
                    d="M2.74153 15.8651C2.39899 16.2076 2.43789 16.8019 2.82842 17.1924C3.21894 17.5829 3.81321 17.6218 4.15575 17.2793L7.48527 13.9497L7.48527 15.7782C7.48527 16.3305 7.93299 16.7782 8.48527 16.7782C9.03756 16.7782 9.48527 16.3305 9.48527 15.7782L9.48527 11.5355C9.48527 10.9832 9.03756 10.5355 8.48527 10.5355H4.24263C3.69035 10.5355 3.24263 10.9832 3.24263 11.5355C3.24263 12.0878 3.69035 12.5355 4.24263 12.5355H6.07106L2.74153 15.8651Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="comment" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3h-3.586l-3.707 3.707A1 1 0 0 1 7 18v-3H4a3 3 0 0 1-3-3V6zm3-1a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h4a1 1 0 0 1 1 1v1.586l2.293-2.293A1 1 0 0 1 12 13h4a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="confetti" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.48 12.586a1.004 1.004 0 0 0-.972-.828c-.09-.002-2.244-.063-4.475-2.293-2.52-2.521-2.312-4.27-2.312-4.27a.998.998 0 0 0-1.915-.551L2.204 16.71A.998.998 0 0 0 3.494 18l12.36-4.306a.996.996 0 0 0 .626-1.106v-.002ZM4.861 15.341 7.58 8.242c.436.789 1.083 1.679 2.04 2.637.94.94 1.89 1.574 2.74 2l-7.498 2.462Z">
                </path>
                <path
                    d="M10.5 5.999a.997.997 0 0 0 .707-.293C12.464 4.449 12.5 3.242 12.5 2.995a1 1 0 0 0-.997-.999c-.583.036-1 .445-1.003.996-.002.415-.137.73-.707 1.3a.999.999 0 0 0 .707 1.707ZM17.334 8.242c-.138-.046-.795-.271-2.387.518a1 1 0 0 0 .89 1.792c.827-.411.828-.421.881-.406a1 1 0 0 0 .615-1.904h.001ZM16.496 4.913a.997.997 0 0 0 .707-.293l.5-.5a.999.999 0 1 0-1.414-1.414l-.5.5a.999.999 0 0 0 .707 1.707ZM3.204 8.242c.13 0 .26-.03.38-.08s.23-.12.33-.21c.09-.101.16-.21.21-.33.05-.12.08-.25.08-.38s-.03-.26-.08-.38-.12-.23-.21-.33c-.05-.04-.1-.09-.15-.12a.757.757 0 0 0-.18-.09.93.93 0 0 0-.76 0 .763.763 0 0 0-.18.09c-.05.03-.1.08-.15.12-.09.1-.16.2-.21.33a.995.995 0 0 0 .21 1.09.99.99 0 0 0 .71.29ZM11.793 8.706a.997.997 0 0 0 1.414 0l1.996-2.086a.999.999 0 1 0-1.414-1.414l-1.996 2.086a.999.999 0 0 0 0 1.414ZM16.964 16.71c.13 0 .26-.03.38-.08s.229-.12.33-.21c.09-.101.16-.21.21-.33.05-.12.08-.25.08-.38s-.03-.26-.08-.38-.12-.23-.21-.33c-.05-.04-.101-.09-.15-.12a.757.757 0 0 0-.18-.09.93.93 0 0 0-.76 0 .763.763 0 0 0-.181.09c-.05.03-.1.08-.149.12-.09.1-.16.2-.21.33a.995.995 0 0 0 .21 1.09.99.99 0 0 0 .71.29Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="copy" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 5V3h1a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h1v2H6a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-1zM8 1h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 2v2h4V3H8z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="creditcard" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 6v-.545A.455.455 0 0 0 16.545 5H3.5a.5.5 0 0 0-.5.5V6h14zm0 2H3v6.545c0 .251.204.455.455.455h13.09a.455.455 0 0 0 .455-.455V8zM3.5 3h13.045A2.455 2.455 0 0 1 19 5.455v9.09A2.455 2.455 0 0 1 16.545 17H3.455A2.455 2.455 0 0 1 1 14.545V5.5A2.5 2.5 0 0 1 3.5 3zM5 13a1 1 0 1 1 0-2h5a1 1 0 1 1 0 2H5z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="customize" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.17 4H3a1 1 0 0 0 0 2h7.17a3.001 3.001 0 0 0 5.66 0H17a1 1 0 1 0 0-2h-1.17a3.001 3.001 0 0 0-5.66 0zm2.838 0h-.016a1.02 1.02 0 0 1 .016 0z"
                    clip-rule="evenodd"></path>
                <path
                    d="M4.17 9H3a1 1 0 0 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H17a1 1 0 1 0 0-2H9.83a3.001 3.001 0 0 0-5.66 0zm2.838 0h-.016a1.036 1.036 0 0 1 .016 0z"
                    clip-rule="evenodd"></path>
                <path
                    d="M10.17 14H3a1 1 0 1 0 0 2h7.17a3.001 3.001 0 0 0 5.66 0H17a1 1 0 1 0 0-2h-1.17a3.001 3.001 0 0 0-5.66 0zm2.838 0h-.016.016z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="date" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 7V5.5a.5.5 0 0 0-.5-.5H14a1 1 0 0 1-2 0H8a1 1 0 1 1-2 0H4.5a.5.5 0 0 0-.5.5V7h12zm0 2H4v7.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V9zM8 3h4V2a1 1 0 0 1 2 0v1h1.5A2.5 2.5 0 0 1 18 5.5v11a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 2 16.5v-11A2.5 2.5 0 0 1 4.5 3H6V2a1 1 0 1 1 2 0v1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="decreased" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 11.586V10a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1h-4a1 1 0 0 1 0-2h1.586L11.5 8.914l-3.293 3.293a1 1 0 0 1-1.414 0l-5.5-5.5a1 1 0 1 1 1.414-1.414L7.5 10.086l3.293-3.293a1 1 0 0 1 1.414 0L17 11.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="delete" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 4c0-1.496 1.397-3 3-3h4c1.603 0 3 1.504 3 3h2a1 1 0 0 1 0 2v10.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 3 16.5V6a1 1 0 1 1 0-2h2zm2 0h6c0-.423-.536-1-1-1H8c-.464 0-1 .577-1 1zM5 6v10.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V6H5zm2 3a1 1 0 1 1 2 0v5a1 1 0 0 1-2 0V9zm4 0a1 1 0 1 1 2 0v4.8a1 1 0 0 1-2 0V9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="desktop" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.5 5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-13zM11 16v1h2a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h2v-1H3.5A2.5 2.5 0 0 1 1 13.5v-8A2.5 2.5 0 0 1 3.5 3h13A2.5 2.5 0 0 1 19 5.5v8a2.5 2.5 0 0 1-2.5 2.5H11z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="disapprove" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.15624 17.848C8.72749 18.0413 9.28571 18.0482 9.79317 17.8803C10.2895 17.7161 10.668 17.4081 10.9379 17.0794C11.0247 16.9737 11.116 16.8261 11.1823 16.717C11.2617 16.5865 11.3571 16.4233 11.4622 16.2416C11.5272 16.1292 11.5964 16.009 11.6694 15.8821C11.8364 15.592 12.0235 15.2669 12.2248 14.9243C12.6712 14.1646 13.1521 13.3806 13.5758 12.7882C13.7046 12.8487 13.8483 12.8824 14 12.8824H17C17.5523 12.8824 18 12.4347 18 11.8824V3.98929C18 3.437 17.5523 2.98929 17 2.98929L14 2.98929C13.9546 2.98929 13.9099 2.99231 13.8661 2.99817C13.7363 2.93746 13.5973 2.89007 13.4503 2.85815C12.2115 2.58914 10.5399 2.31805 9.04756 2.15499C8.30146 2.07346 7.58408 2.01714 6.97887 2.00341C6.42306 1.9908 5.81436 2.00753 5.38075 2.15052C4.34115 2.49335 3.69547 3.30654 3.29134 4.06229C2.88428 4.82351 2.64959 5.66171 2.4973 6.26433C2.34063 6.8843 2.13056 7.88335 2.04224 8.83634C1.99829 9.3106 1.98092 9.8092 2.02781 10.2594C2.0702 10.6663 2.18176 11.2277 2.55873 11.6454C2.88137 12.0029 3.33374 12.196 3.70056 12.3117C4.09507 12.436 4.54197 12.5161 4.98747 12.5671C5.68294 12.6466 6.44686 12.6631 7.1419 12.6361C6.8836 13.5878 6.71382 14.5539 6.63766 14.9873C6.61884 15.0944 6.60571 15.1691 6.59841 15.2028C6.50516 15.6333 6.58032 16.1595 6.7916 16.6144C7.01808 17.1021 7.44924 17.6089 8.15624 17.848ZM9.37967 15.8387L9.38051 15.8379C9.29959 15.9346 9.2224 15.9828 9.15893 16.0038C9.10526 16.0216 8.9988 16.042 8.80324 15.9758C8.71776 15.9469 8.65646 15.8907 8.60895 15.7884C8.58394 15.7345 8.56885 15.6783 8.56241 15.6317C8.55988 15.6134 8.55921 15.6007 8.55905 15.5937C8.57877 15.499 8.60287 15.3638 8.63247 15.1978C8.73806 14.6055 8.91365 13.6205 9.21009 12.6813C9.38459 12.1285 9.21616 11.593 8.92469 11.2306C8.63313 10.8681 8.14277 10.5848 7.55753 10.6304C6.833 10.6868 5.95891 10.6864 5.21726 10.6015C4.84539 10.559 4.53625 10.4984 4.30766 10.4264C4.17806 10.3855 4.10433 10.3503 4.0679 10.3307C4.05545 10.2911 4.03293 10.2068 4.01727 10.0566C3.98903 9.78542 3.99575 9.42849 4.03388 9.01699C4.10974 8.1985 4.29583 7.3052 4.43759 6.74422C4.58373 6.16589 4.77199 5.52462 5.05919 4.98755C5.34932 4.445 5.66918 4.14106 6.0132 4.02762C6.01612 4.0268 6.03683 4.02104 6.08103 4.01386C6.13023 4.00586 6.19623 3.99807 6.28091 3.9919C6.45135 3.97948 6.66977 3.97555 6.93302 3.98152C7.45902 3.99345 8.11382 4.04362 8.828 4.12166C10.241 4.27605 11.8234 4.53249 12.9841 4.78267L12.9638 10.0716C12.9637 10.1133 12.941 10.2364 12.8282 10.4447C12.7224 10.6401 12.5747 10.8418 12.4245 11.02C11.8011 11.7594 11.0728 12.9477 10.4957 13.93C10.2898 14.2804 10.0951 14.6187 9.92638 14.9119C9.85482 15.0362 9.78751 15.1532 9.72645 15.2587C9.62207 15.4391 9.53583 15.5864 9.46853 15.6971C9.42387 15.7705 9.39778 15.8106 9.38644 15.828C9.38167 15.8353 9.37951 15.8386 9.37967 15.8387Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="document" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 4.414V6h1.586L13 4.414zM16 8h-4a1 1 0 0 1-1-1V3H5.5a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8zm-4-7a1 1 0 0 1 .707.293l5 5A1 1 0 0 1 18 7v9.5a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 3 16.5v-13A2.5 2.5 0 0 1 5.5 1H12zm2 9a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h7zm0 3a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="download" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 15.586l1.293-1.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L9 15.586V9.877C9 9.393 9.448 9 10 9s1 .393 1 .877v5.709zm3.465-8.828c1.989-.001 3.737 1.359 4.327 3.342.586 1.968-.095 4.115-1.698 5.314a.812.812 0 1 1-.972-1.3c1.052-.786 1.509-2.227 1.115-3.55-.39-1.308-1.515-2.184-2.772-2.182h-.937a.812.812 0 0 1-.789-.622c-.535-2.218-2.287-3.843-4.393-4.101-2.1-.257-4.142.895-5.132 2.915-1 2.04-.712 4.53.716 6.247a.812.812 0 1 1-1.248 1.038c-1.839-2.211-2.205-5.387-.925-8 1.29-2.63 3.988-4.154 6.786-3.811 2.586.317 4.743 2.164 5.596 4.71h.326z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="drag" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 3h2v2H7V3zm0 4h2v2H7V7zm4-4h2v2h-2V3zm0 4h2v2h-2V7zm-4 4h2v2H7v-2zm4 0h2v2h-2v-2zm-4 4h2v2H7v-2zm4 0h2v2h-2v-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="duplicate" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.5 9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-7zm0-2h7A2.5 2.5 0 0 1 19 9.5v7a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 7 16.5v-7A2.5 2.5 0 0 1 9.5 7zM4 11a1 1 0 0 1 0 2h-.5A2.5 2.5 0 0 1 1 10.5v-7A2.5 2.5 0 0 1 3.5 1h7A2.5 2.5 0 0 1 13 3.5V4a1 1 0 0 1-2 0v-.5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="edit" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.75 13.836L16.586 6 14 3.414 6.164 11.25l2.586 2.586zm-1.528 1.3l-2.358-2.358-.59 2.947 2.948-.59zm11.485-8.429l-10 10a1 1 0 0 1-.51.274l-5 1a1 1 0 0 1-1.178-1.177l1-5a1 1 0 0 1 .274-.511l10-10a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1 0 1.414z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="error" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.414 10l2.293 2.293a1 1 0 0 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 1 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10zM10 19a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-2a7 7 0 1 0 0-14 7 7 0 0 0 0 14z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="expand" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 12.586l6.293-6.293a1 1 0 0 1 1.414 1.414l-7 7a1 1 0 0 1-1.414 0l-7-7a1 1 0 0 1 1.414-1.414L10 12.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="expand-diagonal" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.8285 9.19238C10.4379 8.80185 10.399 8.20759 10.7416 7.86505L14.0711 4.53552L12.2427 4.53552C11.6904 4.53552 11.2427 4.08781 11.2427 3.53552C11.2427 2.98324 11.6904 2.53552 12.2427 2.53552H16.4853C17.0376 2.53552 17.4853 2.98324 17.4853 3.53552L17.4853 7.77816C17.4853 8.33045 17.0376 8.77816 16.4853 8.77816C15.933 8.77816 15.4853 8.33045 15.4853 7.77816L15.4853 5.94974L12.1558 9.27926C11.8133 9.6218 11.219 9.5829 10.8285 9.19238Z">
                </path>
                <path
                    d="M9.19238 10.8284C9.5829 11.2189 9.6218 11.8132 9.27926 12.1557L5.94974 15.4853H7.77816C8.33045 15.4853 8.77816 15.933 8.77816 16.4853C8.77816 17.0376 8.33045 17.4853 7.77816 17.4853L3.53552 17.4853C2.98324 17.4853 2.53552 17.0376 2.53552 16.4853V12.2426C2.53552 11.6903 2.98324 11.2426 3.53552 11.2426C4.08781 11.2426 4.53552 11.6903 4.53552 12.2426L4.53552 14.0711L7.86505 10.7415C8.20759 10.399 8.80185 10.4379 9.19238 10.8284Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="facebook" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.995 1A1.995 1.995 0 0 0 1 2.995v14.01C1 18.107 1.896 19 2.997 19H10v-7.5H7.75V9.25H10V7c0-1.875.75-3 3-3h2.25v2.25h-.975C13.6 6.25 13 6.85 13 7.525V9.25h3l-.375 2.25H13V19h4.002A1.996 1.996 0 0 0 19 17.005V2.995A1.995 1.995 0 0 0 17.005 1H2.995z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="filter" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.085 15c.506 0 .917.448.917 1s-.41 1-.917 1H7.918c-.506 0-.916-.448-.916-1s.41-1 .916-1h4.167zm2-4c.506 0 .917.448.917 1s-.41 1-.917 1H5.918c-.506 0-.916-.448-.916-1s.41-1 .916-1h8.167zm2-4c.506 0 .917.448.917 1s-.41 1-.917 1H3.918c-.506 0-.916-.448-.916-1s.41-1 .916-1h12.167zm2-4c.506 0 .917.448.917 1s-.41 1-.917 1H1.918c-.506 0-.916-.448-.916-1s.41-1 .916-1h16.167z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="forward" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.586 10L6.293 3.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7a1 1 0 1 1-1.414-1.414L12.586 10z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="gift" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.88 5.02c.62 0 1.11.5 1.11 1.11v3.76c0 .57-.43 1.04-.99 1.1v5.74c0 .7-.57 1.27-1.27 1.27H4.26c-.7 0-1.27-.57-1.27-1.27v-5.74c-.56-.06-.99-.53-.99-1.1V6.13c0-.61.5-1.11 1.11-1.11H5V5c0-.97 0-3 2-3 .95 0 2.16.89 3 1.62.84-.73 2.05-1.62 3-1.62 2 0 2 2.03 2 3v.02h1.88zM11 9h4.99V7.02H11V9zm0 7h4v-5h-4v5zM4 9h5V7.02H4V9zm.99 7H9v-5H4.99v5z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="heart" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.527 5.12L9.999 6.924 8.473 5.12C6.206 2.435 2.767 4.928 4.44 8.923A17.595 17.595 0 0 0 10 15.751a17.556 17.556 0 0 0 5.545-6.797c1.673-4.034-1.752-6.51-4.02-3.834zm5.852 4.637a19.556 19.556 0 0 1-6.854 8.07.889.889 0 0 1-1.049 0 19.556 19.556 0 0 1-6.853-8.07C-.008 3.48 6.32-.528 10 3.827c3.689-4.355 10.009-.337 7.378 5.93z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="help" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-2a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM8.543 7.936a1 1 0 1 1-1.886-.664 3.4 3.4 0 0 1 6.607 1.132c0 1.105-.646 1.965-1.645 2.632a6.249 6.249 0 0 1-1.439.716 1 1 0 1 1-.632-1.897 4.594 4.594 0 0 0 .962-.483c.5-.334.754-.673.754-.97a1.4 1.4 0 0 0-2.72-.466z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="help--simple" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.985 12.893c0 .6.4 1.001 1.002 1.001s1.003-.4 1.003-1.001c0-.902.601-1.402 1.604-2.203C13.697 9.889 15 8.887 15 6.884c0-2.303-1.303-4.005-3.309-4.606-2.406-.801-5.213.2-6.516 2.103-.3.5-.2 1.101.2 1.402.502.3 1.103.2 1.404-.3.802-1.202 2.707-1.803 4.21-1.302.803.2 2.006.8 2.006 2.703 0 1.002-.602 1.502-1.604 2.203-1.103.802-2.406 1.803-2.406 3.806zm2.506 3.605a1.503 1.503 0 11-3.006-.002 1.503 1.503 0 013.006.002z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="home" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 17h2.444c.3 0 .556-.262.556-.6V8.08l-6-4.8-6 4.8v8.32c0 .338.255.6.556.6H7v-6a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6zm-2 0v-5H9v5h2zM2.375 6.82l7-5.6a1 1 0 0 1 1.25 0l7 5.6A1 1 0 0 1 18 7.6v8.8c0 1.43-1.138 2.6-2.556 2.6H4.556C3.138 19 2 17.83 2 16.4V7.6a1 1 0 0 1 .375-.78z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="id-card" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd"
                    d="M4 3h12a3 3 0 013 3v8a3 3 0 01-3 3H4a3 3 0 01-3-3V6a3 3 0 013-3zm0 2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V6a1 1 0 00-1-1H4z">
                </path>
                <path clip-rule="evenodd"
                    d="M7.5 11a3.545 3.545 0 013.425 2.508c.074.266-.149.492-.425.492h-6c-.276 0-.5-.226-.425-.492A3.545 3.545 0 017.5 11z">
                </path>
                <path d="M9 8.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="image" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 10.554V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 .6.916l8.81-8.062a.8.8 0 0 1 1.028-.043L17 10.554zm0 2.019l-4.006-3.085L5.878 16H16a1 1 0 0 0 1-1v-2.427zM4 2h12a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zm2.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="increased" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.586 7H13.5a1 1 0 0 1 0-2H18a1 1 0 0 1 1 1v4.5a1 1 0 0 1-2 0V8.414l-4.293 4.293a1 1 0 0 1-1.414 0L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 0L12 10.586 15.586 7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="info" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1 10C1 14.9706 5.02944 19 10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10ZM17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z">
                </path>
                <path d="M8 9C8 8.44772 8.44772 8 9 8H10V9C10 9.55228 9.55228 10 9 10C8.44772 10 8 9.55228 8 9Z"></path>
                <path
                    d="M8 14C8 13.4477 8.44772 13 9 13H11C11.5523 13 12 13.4477 12 14C12 14.5523 11.5523 15 11 15H9C8.44772 15 8 14.5523 8 14Z">
                </path>
                <path
                    d="M9 6C9 5.44772 9.44771 5 10 5C10.5523 5 11 5.44772 11 6C11 6.55228 10.5523 7 10 7C9.44771 7 9 6.55228 9 6Z">
                </path>
                <path
                    d="M10 8C9.44771 8 9 8.44772 9 9V13C9 13.5523 9.44771 14 10 14C10.5523 14 11 13.5523 11 13V9C11 8.44772 10.5523 8 10 8Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="items" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 3.8v4.5c0 .4-.3.7-.8.7H3.8c-.5 0-.8-.3-.8-.8V3.8c0-.5.3-.8.8-.8h4.5c.4 0 .7.3.7.8zM16.2 9h-4.4c-.5 0-.8-.3-.8-.8V3.8c0-.5.3-.8.8-.8h4.5c.4 0 .7.3.7.8v4.5c0 .4-.3.7-.8.7zm-3.7-1.5h3v-3h-3v3zM9 11.8v4.5c0 .4-.3.7-.8.7H3.8c-.5 0-.8-.3-.8-.8v-4.4c0-.5.3-.8.8-.8h4.5c.4 0 .7.3.7.8zm8 0v4.5c0 .4-.3.8-.8.8h-4.4c-.5-.1-.8-.4-.8-.9v-4.4c0-.5.3-.8.8-.8h4.5c.4 0 .7.3.7.8z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="jump-to-top" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2 2a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm7.293 3.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L11 8.414V18a1 1 0 11-2 0V8.414l-3.293 3.293a1 1 0 01-1.414-1.414l5-5z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="launchpad" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.5 10.7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM2 18.4c-.6 0-1-.4-1-1 0-2.3 1.1-3.3 2-3.8.4-.2.8-.1 1.2.2l1.4 1.4c.3.3.4.8.2 1.2-.5.9-1.5 2-3.8 2zm1.4-2.5c-.1.1-.1.2-.2.3.1-.1.3-.1.3-.2l-.1-.1z">
                </path>
                <path
                    d="M7 15c-.3 0-.5-.1-.7-.3l-1.4-1.4c-.2-.2-.3-.5-.3-.8 0-.2.8-5.3 3.8-8.3C11.6 1 17.4 1 17.7 1c.6 0 1 .4 1 1 0 .2 0 6.1-3.1 9.2-3 3-8.1 3.8-8.3 3.8H7zm-.3-2.7l.7.7c1.3-.3 4.7-1.1 6.7-3.2 1.8-1.8 2.3-5 2.5-6.7-1.7.1-4.9.7-6.7 2.5-2.1 2-2.9 5.4-3.2 6.7z">
                </path>
                <path
                    d="M5.6 10.8c-.2 0-.3 0-.4-.1L2.4 9.3c-.4-.2-.6-.6-.6-1s.3-.8.7-.9L6.7 6c.6-.2 1.1.1 1.3.6.2.5-.1 1.1-.6 1.3l-2 .7.7.3c.5.2.7.8.4 1.3-.1.4-.5.6-.9.6zm5.7 7c-.4 0-.7-.2-.9-.6L9 14.5c-.2-.5 0-1.1.4-1.3.5-.2 1.1 0 1.3.4l.3.7.7-2c.2-.5.7-.8 1.3-.6.5.2.8.7.6 1.3l-1.4 4.2c-.1.3-.4.6-.9.6zM16 7.7c-.3 0-.5-.1-.7-.3l-3-3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l3 3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="light-bulb" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2C6.7 2 4 4.7 4 8c0 2 1 3.9 2.7 5v3.1c0 .2.1.5.3.7l1.2 1.3c.2.2.5.3.7.3h2.2c.3 0 .6-.1.7-.3l1.2-1.3c.2-.2.3-.4.3-.7V13C15 11.9 16 10 16 8c0-3.3-2.7-6-6-6zm.6 14.4H9.3l-.6-.7V15h2.5v.7l-.6.7zm1.2-4.9c-.3.2-.5.5-.5.9v.6H8.8v-.6c0-.4-.2-.7-.5-.9C6.8 10.8 6 9.5 6 8c0-2.2 1.8-4 4-4s4 1.8 4 4c0 1.5-.8 2.8-2.2 3.5z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="link" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.725 11.283A.82.82 0 0 1 9.04 10.3a3.282 3.282 0 0 0 4.95.354l2.45-2.451a3.282 3.282 0 0 0-4.631-4.65l-1.412 1.404A.82.82 0 1 1 9.24 3.793l1.42-1.411a4.922 4.922 0 0 1 6.95 6.97l-2.462 2.462a4.922 4.922 0 0 1-7.423-.531zm4.55-2.566a.82.82 0 0 1-1.314.983 3.282 3.282 0 0 0-4.95-.354l-2.45 2.451a3.282 3.282 0 0 0 .04 4.6 3.279 3.279 0 0 0 4.59.05l1.403-1.402a.82.82 0 1 1 1.16 1.16L9.34 17.618a4.922 4.922 0 0 1-6.95-6.97l2.46-2.462a4.922 4.922 0 0 1 7.424.531z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="linkedin" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 2.995C1 1.893 1.893 1 2.995 1h14.01C18.107 1 19 1.893 19 2.995v14.01A1.995 1.995 0 0 1 17.005 19H2.995A1.995 1.995 0 0 1 1 17.005V2.995zM6.25 16V7.75h-3V16h3zm-1.5-9.225c.9 0 1.5-.6 1.5-1.425 0-.75-.6-1.35-1.5-1.35s-1.5.6-1.5 1.425c0 .75.6 1.35 1.5 1.35zm12 9.225v-4.5c0-2.625-1.2-3.75-2.625-3.75s-2.175.525-2.625 1.2v-1.2h-3V16h3v-4.5c0-1.35.975-1.5 1.2-1.5.225 0 1.05.3 1.05 1.5V16h3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="location" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.202 15.894a23.941 23.941 0 0 1-3.673 2.955 1 1 0 0 1-1.058 0 22.249 22.249 0 0 1-1.162-.808 23.941 23.941 0 0 1-2.511-2.147C3.438 13.564 2 11.1 2 8.545 2 4.363 5.596 1 10 1s8 3.363 8 7.545c0 2.555-1.438 5.02-3.798 7.349zm-3.705.543a21.967 21.967 0 0 0 2.3-1.967C14.814 12.48 16 10.446 16 8.545 16 5.498 13.328 3 10 3S4 5.498 4 8.545c0 1.9 1.187 3.936 3.202 5.925A21.967 21.967 0 0 0 10 16.796c.156-.11.322-.23.497-.36zM10 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="logout" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 4a2 2 0 0 1 2-2h5a1 1 0 1 1 0 2H5v12h5a1 1 0 1 1 0 2H5a2 2 0 0 1-2-2V4zm4 6a1 1 0 0 1 1-1h5.586l-1.293-1.293a1 1 0 0 1 1.414-1.414l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L13.586 11H8a1 1 0 0 1-1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="logout--large" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.3 21a1 1 0 0 1 0 2H6.8A2.8 2.8 0 0 1 4 20.2V5.8A2.8 2.8 0 0 1 6.8 3h4.5a1 1 0 1 1 0 2H6.8a.8.8 0 0 0-.8.8v14.4a.8.8 0 0 0 .8.8h4.5zM17.35 10.76a1 1 0 1 1 1.3-1.52l3.6 3.086a1 1 0 0 1 0 1.519l-3.6 3.086a1 1 0 0 1-1.3-1.519l2.713-2.326-2.714-2.327z">
                </path>
                <path d="M20.8 12a1 1 0 0 1 0 2H10a1 1 0 1 1 0-2h10.8z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="merge" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 4a1 1 0 000 2h3c1.286 0 1.892.28 2.224.553.355.293.554.696.816 1.33l.053.128c.23.562.548 1.337 1.183 1.936.739.695 1.771 1.053 3.224 1.053H15v2a.5.5 0 00.854.354l3-3a.5.5 0 000-.708l-3-3A.5.5 0 0015 7v2h-2.5c-1.118 0-1.595-.267-1.852-.51-.31-.291-.477-.69-.76-1.373-.255-.616-.61-1.463-1.393-2.108C7.688 4.345 6.571 4 5 4H2zm7.924 8.795a1 1 0 10-1.848-.763c-.276.667-.468 1.086-.828 1.394C6.92 13.707 6.315 14 5 14H2a1 1 0 100 2h3c1.608 0 2.74-.361 3.549-1.054.756-.648 1.104-1.492 1.354-2.1l.021-.05z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="messages" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.667 5L10 9.75 16.333 5H3.667zM17 7l-6.4 4.8a1 1 0 0 1-1.2 0L3 7v8.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V7zM3.5 3h13A2.5 2.5 0 0 1 19 5.5v10a2.5 2.5 0 0 1-2.5 2.5h-13A2.5 2.5 0 0 1 1 15.5v-10A2.5 2.5 0 0 1 3.5 3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="meter" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.9 17H3.1c-.4 0-.7-.2-.9-.5C1.4 15.2 1 13.6 1 12c0-5 4-9 9-9s9 4 9 9c0 1.6-.4 3.2-1.2 4.5-.2.3-.5.5-.9.5zM3.7 15h12.6c.4-.9.7-1.9.7-3 0-3.9-3.1-7-7-7s-7 3.1-7 7c0 1.1.2 2.1.7 3z">
                </path>
                <path
                    d="M9.6 15.9c-.5-.2-.7-.8-.5-1.3l2.7-5.4c.2-.5.8-.7 1.3-.5.5.2.7.8.5 1.3l-2.7 5.4c-.2.5-.8.7-1.3.5zm4.6-7.1c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l.7-.7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-.7.7c-.1.2-.4.3-.7.3zm-8.4 0c-.3 0-.5-.1-.7-.3l-.8-.7c-.3-.4-.3-1.1 0-1.5.4-.4 1-.4 1.4 0l.8.7c.4.4.4 1 0 1.4-.2.3-.5.4-.7.4zM4 13H3c-.6 0-1-.4-1-1s.4-1 1-1h1c.6 0 1 .4 1 1s-.4 1-1 1zm13 0h-1c-.6 0-1-.4-1-1s.4-1 1-1h1c.6 0 1 .4 1 1s-.4 1-1 1zm-7-6c-.6 0-1-.4-1-1V5c0-.6.4-1 1-1s1 .4 1 1v1c0 .6-.4 1-1 1z">
                </path>
                <path d="M10 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="mobile" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.31 5h5.38C13.966 5 15 6.019 15 7.276v9.448C15 17.981 13.966 19 12.69 19H7.31C6.034 19 5 17.981 5 16.724V7.276C5 6.019 6.034 5 7.31 5zm.331 2A.651.651 0 0 0 7 7.661v8.678c0 .365.287.661.641.661h4.718a.651.651 0 0 0 .641-.661V7.66A.651.651 0 0 0 12.359 7H7.641zM10 14a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="money" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14 13v1.1c-.4.2-.8.5-.9.9h-2.9c.4-.5.7-1.2.7-2H6c.1.8.3 1.5.7 2H3.9c-.1-.4-.5-.8-.9-.9V8H2c-.5 0-1 .5-1 1v7c0 .5.5 1 1 1h13c.5 0 1-.5 1-1v-3h-2zM9.8 10h3.5c.4-.6.7-1.5.7-2.5s-.3-1.9-.8-2.5H9.8c-.5.6-.8 1.5-.8 2.5s.3 1.9.8 2.5z">
                </path>
                <path
                    d="M6 9.1v.9h.9c-.1-.4-.5-.8-.9-.9zM16.1 10h.9v-.9c-.4.1-.8.5-.9.9zM17 5.9V5h-.9c.1.4.5.8.9.9zM6.9 5H6v.9c.4-.1.8-.5.9-.9z">
                </path>
                <path d="M18 3H5c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h13c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zM6 9.1V5h11V10H6v-.9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="more-actions" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 10c0 1.118.86 2 2 2 1.14 0 2-.882 2-2 0-1.118-.86-2-2-2-1.14 0-2 .882-2 2zm8 2c-1.14 0-2-.882-2-2 0-1.118.86-2 2-2 1.14 0 2 .882 2 2 0 1.118-.86 2-2 2zm6 0c-1.14 0-2-.882-2-2 0-1.118.86-2 2-2 1.14 0 2 .882 2 2 0 1.118-.86 2-2 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--accounting" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.75 21h-9c-.273 0-.531.013-.75.037v.926c.219.024.477.037.75.037h10.5c.273 0 .531-.013.75-.037v-.926a7.208 7.208 0 0 0-.75-.037h-1.5zM18 19h.25c1.8 0 2.75.18 2.75 1.333v2.334C21 23.819 20.05 24 18.25 24H7.75C5.95 24 5 23.82 5 22.667v-2.334C5 19.181 5.95 19 7.75 19H8v-2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2zm-8.5-1v1h7v-1h-7zM14 4h-2c-1.333 0-1.333-2 0-2h2c1.333 0 1.333 2 0 2zm9 2H3C1.667 6 1.667 4 3 4h20c1.333 0 1.333 2 0 2zM12 6h2v10h-2V6zm10 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM4 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--banking" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.002 11h4a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1zm1 2v7h2v-7h-2zm-8-2h4a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1zm1 2v7h2v-7h-2zm-8-2h4a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1zm1 2v7h2v-7h-2zm-3.48-4.878l11-6a1 1 0 0 1 .958 0l11 6c.91.496.558 1.878-.478 1.878h-22c-1.036 0-1.389-1.382-.48-1.878zM20.08 8l-7.078-3.86L5.923 8H20.08zm3.922 15a1 1 0 0 1 0 2h-22a1 1 0 0 1 0-2h22z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--dashboard" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.343 20A8.962 8.962 0 0 0 13 22c2.143 0 4.112-.75 5.657-2H7.343zm-1.766-1.909A.98.98 0 0 1 5.991 18h14.018a.98.98 0 0 1 .414.091 9 9 0 1 0-14.845 0zM13 24C6.925 24 2 19.075 2 13S6.925 2 13 2s11 4.925 11 11-4.925 11-11 11zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM7.293 9.707a1 1 0 0 1 1.414-1.414l1 1a1 1 0 0 1-1.414 1.414l-1-1zm11.414 0l-1 1a1 1 0 0 1-1.414-1.414l1-1a1 1 0 0 1 1.414 1.414zM12 7a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0V7zm6 8a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2h-2zM6 15a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2H6zm7 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--home" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 22V9a1 1 0 0 1 2 0v14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 1 1 2 0v13h16z"></path>
                <path
                    d="M14 18v5a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-5h-3zM2.479 10.878a1 1 0 0 1-.958-1.756l11-6a1 1 0 0 1 .958 0l11 6a1 1 0 1 1-.958 1.756L13 5.139 2.479 10.878z">
                </path>
                <path d="M10 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--launchpad" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.873 21.287c-.305.293-.629.783-.782 1.622.839-.153 1.329-.477 1.622-.782l-.84-.84zM2 25a1 1 0 0 1-1-1c0-2.989 1.388-4.312 2.553-4.895a1 1 0 0 1 1.154.188l2 2c.305.305.38.77.187 1.154C6.311 23.612 4.989 25 2 25zm14-13a2 2 0 1 0-.001-4A2 2 0 0 0 16 12">
                </path>
                <path
                    d="M22.44 6.44l-2.88-2.88c1.05-.28 2.19-.47 3.41-.53-.06 1.2-.23 2.33-.53 3.41M8.28 18.86L7.1 17.68c.53-2.1 2.99-10.22 10.36-13.39l4.25 4.25c-2.02 4.64-6.47 8.04-13.43 10.32M24 1C15.08 1 10.18 6.4 7.6 11.09c-.02 0-.03.01-.05.02l-6 3A.989.989 0 0 0 1 15c0 .38.21.72.55.89l3.51 1.76c-.03.1-.04.16-.04.17-.06.32.04.65.27.89l2 2c.19.19.45.29.71.29.1 0 .2-.01.3-.05.02-.01.03-.01.05-.02l1.76 3.52c.17.34.51.55.89.55s.72-.21.89-.55l3-6c.05-.09.08-.2.09-.3C21.64 14.46 25 9.05 25 2c0-.55-.45-1-1-1">
                </path>
                <path d="M12.5 15a1.5 1.5 0 1 0-.001-3 1.5 1.5 0 0 0 .001 3"></path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--payroll" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 7a1 1 0 0 1 0-2h3c1.758 0 3 1.304 3 3v12c0 1.696-1.242 3-3 3H4c-1.758 0-3-1.304-3-3V8c0-1.696 1.242-3 3-3h3a1 1 0 1 1 0 2H4c-.631 0-1 .387-1 1v12c0 .613.369 1 1 1h18c.631 0 1-.387 1-1V8c0-.613-.369-1-1-1h-3zm1 7a1 1 0 0 1 0 2h-6a1 1 0 0 1 0-2h6zM8 18a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3-13h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm0 2v2h4V5h-4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--proservices" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.229 5.161a.87.87 0 0 0-.458 1.678 2.653 2.653 0 0 1 1.932 2.57 2.653 2.653 0 0 1-1.93 2.569.87.87 0 1 0 .46 1.677 4.392 4.392 0 0 0 3.21-4.246 4.392 4.392 0 0 0-3.214-4.248zm-6.25-.03c-2.414 0-4.349 1.98-4.349 4.398 0 2.418 1.935 4.4 4.348 4.4s4.348-1.982 4.348-4.4c0-2.417-1.935-4.399-4.348-4.399zm-2.61 4.398c0-1.48 1.18-2.66 2.61-2.66 1.428 0 2.608 1.18 2.608 2.66 0 1.481-1.18 2.66-2.609 2.66S7.37 11.01 7.37 9.53zm10.805 6.2a.87.87 0 0 1 1.097-.555c1.982.649 3.13 2.11 3.77 3.34a8.946 8.946 0 0 1 .776 2.133 4.966 4.966 0 0 1 .038.195l.002.013.001.005v.003L23 21l.859-.136A.87.87 0 0 1 23 21.869h-2.26a.87.87 0 0 1 0-1.739h1.115a7.091 7.091 0 0 0-.358-.814c-.516-.992-1.368-2.031-2.768-2.49a.87.87 0 0 1-.555-1.097zm-3.662 3.365c.333.356.616.713.849 1.036H4.552c.233-.323.516-.68.849-1.036 1.085-1.162 2.61-2.224 4.555-2.224 1.945 0 3.47 1.062 4.556 2.224zm3.185 1.53l-.784.376.785-.375a.87.87 0 0 1-.785 1.245H3a.87.87 0 0 1-.785-1.245L3 21l-.784-.375v-.003l.003-.005.008-.015a11.14 11.14 0 0 1 .482-.846c.316-.503.79-1.175 1.421-1.85 1.25-1.338 3.204-2.776 5.826-2.776 2.623 0 4.576 1.438 5.827 2.776a12.48 12.48 0 0 1 1.783 2.464 7.456 7.456 0 0 1 .12.232l.008.015.002.005v.002h.001z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--purchases" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.395 15.007h11.793c.413 0 .777-.29.896-.712l2.045-7.288H7.646l.749 8zm-1.18-10H23.13c1.033 0 1.871.896 1.871 2 0 .195-.027.389-.079.575l-2.045 7.287c-.356 1.27-1.449 2.138-2.688 2.138H7.548c-.48 0-.883-.389-.93-.9l-.936-10a1.093 1.093 0 0 1-.003-.032L4.227 4H1.88C1.394 4 1 3.552 1 3s.394-1 .88-1h2.64c.047 0 .092.004.137.012a.934.934 0 0 1 .74.399l1.819 2.596zM10 24a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm9 2a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--reports" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 13h4a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1zm1 8h2v-6H4v6zM19 3h4a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 18h2V5h-2v16zM11 8h4a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1zm1 13h2V10h-2v11z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--sales" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23 9.003V7c0-.552-.471-1-1.053-1H4.053C3.47 6 3 6.448 3 7v2h19.913c.03 0 .058.001.087.003zm0 1.994a1.103 1.103 0 0 1-.087.003H3v8c0 .552.471 1 1.053 1h17.894C22.53 20 23 19.552 23 19v-8.003zM4.13 4h17.74C23.598 4 25 5.343 25 7v12c0 1.657-1.402 3-3.13 3H4.13C2.402 22 1 20.657 1 19V7c0-1.657 1.402-3 3.13-3zm7.261 11h8.435a1 1 0 0 1 0 2h-8.435a1 1 0 0 1 0-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="nav--taxes" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 1a1 1 0 01.707.293l5 5A1 1 0 0123 7v15.5a2.5 2.5 0 01-2.5 2.5h-15A2.5 2.5 0 013 22.5v-19A2.5 2.5 0 015.5 1H17zm-1 2H5.5a.5.5 0 00-.5.5v19a.5.5 0 00.5.5h15a.5.5 0 00.5-.5V8h-4a1 1 0 01-1-1V3zm2 1.414V6h1.586L18 4.414z">
                </path>
                <path d="M8.293 17.293a1 1 0 101.414 1.414l8-8a1 1 0 00-1.414-1.414l-8 8z"></path>
                <path fill-rule="evenodd"
                    d="M10 13a3 3 0 110-6 3 3 0 010 6zm1-3a1 1 0 11-2 0 1 1 0 012 0zM13 18a3 3 0 106 0 3 3 0 00-6 0zm3 1a1 1 0 100-2 1 1 0 000 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="navigation" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 11a1 1 0 1 1 0-2h16a1 1 0 0 1 0 2H2zm0-5a1 1 0 1 1 0-2h16a1 1 0 0 1 0 2H2zm0 10a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2H2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="note" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 1h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm1 2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H5zm2 2h6a1 1 0 0 1 0 2H7a1 1 0 1 1 0-2zm0 4h6a1 1 0 0 1 0 2H7a1 1 0 1 1 0-2zm0 4h3a1 1 0 1 1 0 2H7a1 1 0 0 1 0-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="notification-danger" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.1 1h5.8c.5 0 1 .2 1.4.6l4.1 4.1c.4.4.6.9.6 1.4v5.8c0 .5-.2 1-.6 1.4l-4.1 4.1c-.4.4-.9.6-1.4.6H7.1c-.5 0-1-.2-1.4-.6l-4.1-4.1c-.4-.4-.6-.9-.6-1.4V7.1c0-.5.2-1 .6-1.4l4.1-4.1c.4-.4.9-.6 1.4-.6zM9 6a1 1 0 112 0v5a1 1 0 11-2 0V6zm1 7a1 1 0 100 2 1 1 0 000-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="notification-info" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 19a9 9 0 110-18 9 9 0 010 18zM9 6a1 1 0 112 0 1 1 0 01-2 0zm0 2a1 1 0 000 2v3a1 1 0 100 2h2a1 1 0 100-2V9a1 1 0 00-1-1H9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="notification-success" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 19a9 9 0 100-18 9 9 0 000 18zm-2-7.414l5.293-5.293a1 1 0 111.414 1.414l-6 6a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L8 11.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="notification-warning" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.916 3.222C8.369 2.453 9.153 2 10 2c.848 0 1.632.453 2.085 1.222l6.594 11.196c.426.758.428 1.689.006 2.449-.424.765-1.147 1.122-2.084 1.133H3.391c-.928-.01-1.65-.368-2.075-1.133a2.51 2.51 0 010-2.436l6.6-11.21zM9 7a1 1 0 112 0v5a1 1 0 11-2 0V7zm1 7a1 1 0 100 2 1 1 0 000-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="open-menu" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.84 7.772c.348-.426.175-.772-.376-.772H6.559c-.556 0-.727.342-.377.772l3.2 3.928c.35.426.91.43 1.26 0l3.2-3.928h-.001z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="open-new-window" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 12a1 1 0 0 0-1 1v.5a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7a1 1 0 1 0 0-2h-.5A2.5 2.5 0 0 0 4 6.5v7A2.5 2.5 0 0 0 6.5 16h7a2.5 2.5 0 0 0 2.5-2.5V13a1 1 0 0 0-1-1Z">
                </path>
                <path
                    d="M9.32 10.657c-.39-.39-.43-.985-.087-1.327L12.563 6h-1.828a1 1 0 1 1 0-2h4.242a1 1 0 0 1 1 1v4.243a1 1 0 1 1-2 0V7.414l-3.33 3.33c-.342.342-.936.303-1.327-.087Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="phone" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.4 18C8.3 18 2 12.1 2 6.4c0-2.1 3-3.8 3.9-4.3.4-.2 1-.1 1.3.3l2.5 3.3c.3.3.3.8 0 1.2L8.2 9c.5.7 2.1 2.3 2.8 2.8l2.1-1.4c.4-.2.8-.2 1.2 0l3.3 2.5c.4.3.5.8.3 1.3-2 3.8-3.1 3.8-3.5 3.8zM6.1 4.3C5 5 4 5.9 4 6.4c0 4.5 5.3 9.5 10.3 9.6.3-.3.9-1.1 1.5-2.1l-2-1.5-2 1.3c-.2.1-.4.2-.6.2-1.4 0-5.1-3.7-5.1-5.1 0-.2.1-.4.2-.6l1.3-2-1.5-1.9z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="pie-chart" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 19c-4.4 0-8-3.6-8-8s3.6-8 8-8c.6 0 1 .4 1 1v6h6c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8zM8 5.1C5.2 5.6 3 8 3 11c0 3.3 2.7 6 6 6 3 0 5.4-2.2 5.9-5H9c-.6 0-1-.4-1-1V5.1z">
                </path>
                <path
                    d="M18 9h-6c-.6 0-1-.4-1-1V2c0-.6.4-1 1-1 3.9 0 7 3.1 7 7 0 .6-.4 1-1 1zm-5-2h3.9C16.5 5 15 3.5 13 3.1V7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="piggy-bank" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 19h-4c-.6 0-1-.4-1-1H9c0 .6-.4 1-1 1H4c-.6 0-1-.4-1-1v-2.4c-1.2-1.2-2-2.3-2-4.6 0-4.2 3.7-6.7 10-6.8.1-.1.2-.2.3-.4.3-.4 1.1-1.4 2.2-.8.5.3 1 1.1 1.9 3.3l.1.3c.4 1.1.8 1.4 1.5 1.4h1c.6 0 1 .4 1 1v4c0 .6-.4 1-1 1h-.3c-.3.5-.8 1.3-1.7 2v2c0 .6-.4 1-1 1zm-3-2h2v-1.5c0-.3.2-.6.4-.8 1.3-.9 1.6-1.9 1.6-1.9.1-.4.5-.7 1-.7V10c-2.2 0-3-1.8-3.3-2.5l-.1-.3c-.4-.9-.7-1.5-.9-1.9-.3.4-.8.9-1.6.9C8.7 6.3 3 6.7 3 11c0 1.7.5 2.3 1.7 3.4.2.2.3.5.3.8V17h2c0-.3.1-.6.3-.7.2-.3.5-.4.8-.3.9.1 1.8 0 2.8-.1.3 0 .6.1.8.2.2.2.3.5.3.8v.1z">
                </path>
                <path
                    d="M5.6 4.3c-.2 0-.3 0-.5-.1-.5-.3-.7-.9-.4-1.4.5-1 1.5-1.6 2.6-1.8 1.1-.2 2.2.2 3 1 .4.4.4 1 0 1.4-.4.4-1 .4-1.4 0C8.5 3.1 8 3 7.6 3c-.5.1-.9.4-1.1.8-.2.3-.6.5-.9.5zM12 10a1 1 0 100-2 1 1 0 000 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="plaid" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.344 2 3.392 3.284l-1.364 4.93L3.734 9.95 2 11.656l1.284 4.952 4.93 1.364 1.735-1.707L11.656 18l4.952-1.284 1.364-4.93-1.706-1.735L18 8.344l-1.284-4.952-4.931-1.364-1.734 1.706L8.344 2ZM5.305 4.233l2.609-.677 1.14 1.16-1.663 1.636-2.086-2.12Zm5.726.498 1.16-1.14 2.597.718-2.12 2.085-1.637-1.663ZM3.591 7.81l.718-2.597 2.085 2.12L4.73 8.968l-1.14-1.16Zm10.057-.42 2.12-2.085.676 2.609-1.159 1.14-1.637-1.663Zm-5.277-.042 1.664-1.637 1.636 1.664-1.663 1.637L8.37 7.348Zm-2.66 2.617 1.664-1.637 1.637 1.664-1.664 1.637-1.637-1.664Zm5.277.043 1.664-1.637 1.636 1.664-1.663 1.636-1.636-1.663Zm-7.432 2.078 1.159-1.14 1.636 1.664-2.119 2.084-.676-2.608Zm4.772.539 1.664-1.637 1.636 1.664-1.663 1.637-1.637-1.664Zm5.277.043 1.664-1.636 1.14 1.159-.718 2.596-2.086-2.119Zm-8.393 3.023 2.12-2.086 1.637 1.664-1.16 1.14-2.597-.718Zm5.734-.406 1.663-1.637 2.085 2.12-2.608.676-1.14-1.16Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="plant" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.5 2C18.4 1.9 15.2 0.3 12.7 1.7C11.9 2.1 11.4 2.8 11 3.5V2C11 1.4 10.6 1 10 1C9.4 1 9 1.4 9 2V7.4C8.8 7.1 8.5 6.8 8.1 6.6C6.2 5.5 3.8 6.7 3.5 6.8C3.2 7 3 7.4 3 7.8C3 8.1 3.2 10.7 5.1 11.9C5.7 12.3 6.4 12.4 7 12.4C7.8 12.4 8.5 12.2 9 12V16.2C7.7 16.3 6.5 16.7 5.5 17.3C5 17.6 4.9 18.2 5.2 18.7C5.4 19 6 19.2 6.5 18.9C8.4 17.8 11.6 17.8 13.5 18.9C13.6 19 13.8 19 14 19C14.3 19 14.7 18.8 14.9 18.5C15.2 18 15 17.4 14.6 17.1C13.6 16.5 12.4 16.2 11.1 16V7.9C11.7 8.2 12.9 8.6 14.2 8.6C15 8.6 15.8 8.4 16.5 8C19 6.6 19.1 3 19.1 2.8C19.1 2.5 18.9 2.2 18.5 2ZM6.1 10.1C5.5 9.8 5.2 9 5.1 8.4C5.7 8.2 6.5 8.1 7.1 8.4C7.7 8.7 8 9.5 8.1 10.1C7.5 10.3 6.7 10.4 6.1 10.1ZM15.4 6.3C14.4 6.9 13 6.6 12.1 6.2C12.3 5.3 12.8 4 13.7 3.4C14.7 2.8 16.1 3.1 17 3.5C16.9 4.3 16.5 5.7 15.4 6.3Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="play" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.235 8.805c.477.276.764.736.765 1.23.002.494-.283.958-.762 1.238l-8.5 5.468a2.017 2.017 0 01-1.788.094c-.586-.257-.95-.767-.95-1.33V4.496c0-.563.364-1.072.95-1.329a2.01 2.01 0 011.787.093l8.498 5.546z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="preview" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.207 6c-4.047 0-8 3.164-8 5 0 1.836 3.953 5 8 5 4.047 0 8-3.164 8-5 0-1.836-3.953-5-8-5Zm0 8c-3.12 0-5.61-2.236-5.975-3 .364-.764 2.854-3 5.975-3 3.121 0 5.61 2.236 5.975 3-.364.764-2.854 3-5.975 3Z">
                </path>
                <path
                    d="M10.207 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM10.207 5a1 1 0 0 0 1-1V3a1 1 0 1 0-2 0v1a1 1 0 0 0 1 1ZM16.707 6.707a.997.997 0 0 0 .707-.293l.707-.707a.999.999 0 1 0-1.414-1.414L16 5a.999.999 0 0 0 .707 1.707ZM3 6.414a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-.707-.707a.999.999 0 1 0-1.414 1.414L3 6.414Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="print" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 16h-.4C2.176 16 1 14.889 1 13.489V9.51C1 8.111 2.176 7 3.6 7H4V2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v5h.4C17.824 7 19 8.111 19 9.511v3.978c0 1.4-1.176 2.511-2.6 2.511H16v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2zm0-2v-2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2h.4c.344 0 .6-.242.6-.511V9.51c0-.269-.256-.511-.6-.511H3.6c-.344 0-.6.242-.6.511v3.978c0 .269.256.511.6.511H4zm2-7h8V3H6v4zm0 6v4h8v-4H6z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="product" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.3 4.5l-5-2.2c-.8-.4-1.8-.4-2.6 0l-5 2.2C2.7 4.9 2 5.9 2 7v5.7c0 1 .6 2 1.6 2.4l5 2.5c.9.4 2 .4 2.9 0l5-2.5c1-.5 1.6-1.4 1.6-2.4V7c-.1-1.1-.8-2.1-1.8-2.5zm-6.7-.6c.3-.1.6-.1.9 0l5 2.2h.1l-1.5.7s-.1 0-.1-.1L8.6 4.4l1-.5zM9 15.8l-4.5-2.2c-.3-.2-.5-.5-.5-.9V8l4.6 2.2c.1.1.3.1.4.2v5.4zm.5-7.2l-5-2.4h.1l1.7-.8L11.9 8l-1.4.7c-.3.1-.7.1-1-.1zm6.5 4.1c0 .3-.2.7-.5.8L11 15.8v-5.3c.1 0 .3-.1.4-.2L16 8v4.7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="product-add" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.3 4.4l-5-2.2c-.8-.4-1.8-.4-2.6 0l-5 2.2C2.7 4.9 2 5.8 2 6.9v5.7c0 1 .6 1.9 1.6 2.4l5.9 2.9c.5.2 1.1.1 1.4-.4.1-.2.1-.4.1-.6V10.3c.1 0 .3-.1.4-.2L16 8v2.7c0 .5.4.9 1 .9s1-.4 1-.9V6.9c0-1.1-.7-2-1.7-2.5zM9 15.6l-4.5-2.2c-.3-.2-.5-.5-.5-.8V8l4.6 2.2c.1.1.3.1.4.2v5.2zm2.9-7.7l-1.4.7c-.3.1-.6.1-.9 0l-5-2.4h.1l1.7-.7 5.5 2.4zm2.2-1.1c-.1 0-.1 0 0 0L8.6 4.3l1-.4c.3-.1.6-.1.9 0l5 2.2h.1l-1.5.7z">
                </path>
                <path
                    d="M15 12c.6 0 1 .4 1 1v1h1c.6 0 1 .4 1 1s-.4 1-1 1h-1v1c0 .6-.4 1-1 1s-1-.4-1-1v-1h-1c-.6 0-1-.4-1-1s.4-1 1-1h1v-1c0-.6.4-1 1-1z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="product-remove" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.3 4.4l-5-2.2c-.8-.4-1.8-.4-2.6 0l-5 2.2C2.7 4.9 2 5.8 2 6.9v5.7c0 1 .6 1.9 1.6 2.4l5.9 2.9c.5.2 1.1.1 1.4-.4.1-.2.1-.4.1-.6V10.3c.1 0 .3-.1.4-.2L16 8v2.7c0 .5.4.9 1 .9s1-.4 1-.9V6.9c0-1.1-.7-2-1.7-2.5zM9 15.6l-4.5-2.2c-.3-.2-.5-.5-.5-.8V8l4.6 2.2c.1.1.3.1.4.2v5.2zm2.9-7.7l-1.4.7c-.3.1-.6.1-.9 0l-5-2.4h.1l1.7-.7 5.5 2.4zm2.2-1.1c-.1 0-.1 0 0 0L8.6 4.3l1-.4c.3-.1.6-.1.9 0l5 2.2h.1l-1.5.7z">
                </path>
                <path d="M13 14c-.6 0-1 .4-1 1s.4 1 1 1h4c.6 0 1-.4 1-1s-.4-1-1-1h-4z"></path>
            </symbol>
            <symbol viewBox="0 0 26 26" id="profile--large" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 24C6.925 24 2 19.075 2 13S6.925 2 13 2s11 4.925 11 11-4.925 11-11 11zm0-2a9 9 0 1 0 0-18 9 9 0 0 0 0 18z">
                </path>
                <path
                    d="M13 14c-2.122 0-4-1.878-4-4s1.878-4 4-4 4 1.878 4 4-1.878 4-4 4zm0-2c1.017 0 2-.983 2-2s-.983-2-2-2-2 .983-2 2 .983 2 2 2zM6.894 20.447l-1.788-.894C6.615 16.535 9.3 15 13 15s6.385 1.535 7.894 4.553l-1.788.894C17.948 18.132 15.967 17 13 17s-4.948 1.132-6.106 3.447z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="receipt" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14 2.586l1.293-1.293C15.923.663 17 1.109 17 2v16c0 .89-1.077 1.337-1.707.707L14 17.414l-1.293 1.293a1 1 0 0 1-1.414 0L10 17.414l-1.293 1.293a1 1 0 0 1-1.414 0L6 17.414l-1.293 1.293C4.077 19.337 3 18.891 3 18V2c0-.89 1.077-1.337 1.707-.707L6 2.586l1.293-1.293a1 1 0 0 1 1.414 0L10 2.586l1.293-1.293a1 1 0 0 1 1.414 0L14 2.586zm1 13V4.414l-.293.293a1 1 0 0 1-1.414 0L12 3.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 3.414 6.707 4.707a1 1 0 0 1-1.414 0L5 4.414v11.172l.293-.293a1 1 0 0 1 1.414 0L8 16.586l1.293-1.293a1 1 0 0 1 1.414 0L12 16.586l1.293-1.293a1 1 0 0 1 1.414 0l.293.293zM13 12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h6zm0-3a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2h6zm-3-3a1 1 0 1 1 0 2H7a1 1 0 1 1 0-2h3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="refresh" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.346 7H7.5a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1V3.5a1 1 0 1 1 2 0v1.989c.157-.191.389-.473.48-.581C6.137 2.933 7.741 2 10.5 2c3.03 0 5.507 1.524 7.348 4.47a1 1 0 1 1-1.696 1.06C14.66 5.142 12.803 4 10.5 4c-2.09 0-3.178.633-4.49 2.194-.12.143-.538.655-.62.752L5.347 7zm9.308 6H12.5a1 1 0 0 1 0-2H17a1 1 0 0 1 1 1v4.5a1 1 0 0 1-2 0v-1.989c-.157.192-.389.474-.48.581C13.863 17.068 12.259 18 9.5 18c-3.03 0-5.507-1.524-7.348-4.47a1 1 0 1 1 1.696-1.06C5.34 14.858 7.197 16 9.5 16c2.09 0 3.178-.633 4.49-2.194.12-.143.539-.655.62-.752l.044-.054z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="reminder" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 13c.773 0 1-.227 1-1V8c0-3.645 3.355-7 7-7s7 3.355 7 7v4c0 .773.227 1 1 1 1.333 0 1.333 2 0 2H2c-1.333 0-1.333-2 0-2zm13.123 0A3.878 3.878 0 0 1 15 12V8c0-2.54-2.46-5-5-5S5 5.46 5 8v4c0 .362-.042.697-.123 1h10.246zM10 19c-1.997 0-2.995-1.197-2.995-2.044C7.005 16.11 6.749 16 10 16c3.25 0 2.995.11 2.995.956 0 .847-.998 2.044-2.995 2.044z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="review" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9 16C5.68629 16 3 13.3137 3 10C3 6.68629 5.68629 4 9 4C12.3137 4 15 6.68629 15 10C15 13.3137 12.3137 16 9 16ZM16.748 8C16.8318 8.32577 16.8957 8.65956 16.9381 9H18C18.5523 9 19 9.44772 19 10C19 10.5523 18.5523 11 18 11H16.9381C16.8957 11.3404 16.8318 11.6742 16.748 12H18C18.5523 12 19 12.4477 19 13C19 13.5523 18.5523 14 18 14H16C15.9768 14 15.9539 13.9992 15.9311 13.9977C14.5482 16.3902 11.9621 18 9 18C7.38639 18 5.88437 17.5223 4.62764 16.7005L2.74352 18.5847C2.35299 18.9752 1.71983 18.9752 1.3293 18.5847C0.938779 18.1941 0.938779 17.561 1.3293 17.1705L3.09852 15.4012C1.79524 13.978 1 12.0819 1 10C1 5.58172 4.58172 2 9 2C11.9621 2 14.5482 3.60984 15.9311 6.00234C15.9539 6.00079 15.9768 6 16 6H18C18.5523 6 19 6.44772 19 7C19 7.55228 18.5523 8 18 8H16.748ZM8 6C7.44772 6 7 6.44772 7 7C7 7.55228 7.44772 8 8 8H11C11.5523 8 12 7.55228 12 7C12 6.44772 11.5523 6 11 6H8ZM7 9C6.44772 9 6 9.44772 6 10C6 10.5523 6.44772 11 7 11H12C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9H7ZM7 13C7 12.4477 7.44772 12 8 12H11C11.5523 12 12 12.4477 12 13C12 13.5523 11.5523 14 11 14H8C7.44772 14 7 13.5523 7 13Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="robot" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.05071 11.5C8.05071 12.3284 7.37914 13 6.55071 13C5.72228 13 5.05071 12.3284 5.05071 11.5C5.05071 10.6716 5.72228 10 6.55071 10C7.37914 10 8.05071 10.6716 8.05071 11.5Z">
                </path>
                <path
                    d="M13.5507 13C14.3791 13 15.0507 12.3284 15.0507 11.5C15.0507 10.6716 14.3791 10 13.5507 10C12.7223 10 12.0507 10.6716 12.0507 11.5C12.0507 12.3284 12.7223 13 13.5507 13Z">
                </path>
                <path
                    d="M7.3436 13.7929C7.71856 13.4179 8.31721 13.403 8.71 13.7481C8.72646 13.7587 8.77396 13.7873 8.8596 13.8215C9.04122 13.8942 9.41342 14 10.0507 14C10.688 14 11.0602 13.8942 11.2418 13.8215C11.3275 13.7873 11.375 13.7587 11.3914 13.7481C11.7842 13.403 12.3828 13.4179 12.7578 13.7929C13.1483 14.1834 13.1483 14.8166 12.7578 15.2071L12.7174 15.2456C12.7015 15.26 12.683 15.2761 12.662 15.2934C12.6199 15.3281 12.5675 15.3677 12.5038 15.4102C12.3762 15.4953 12.2054 15.5902 11.9846 15.6785C11.5412 15.8558 10.9134 16 10.0507 16C9.18798 16 8.5602 15.8558 8.11682 15.6785C7.89602 15.5902 7.72524 15.4953 7.59757 15.4102C7.53392 15.3677 7.48153 15.3281 7.43942 15.2934C7.41838 15.2761 7.39996 15.26 7.38402 15.2456L7.3436 15.2071C6.95308 14.8166 6.95308 14.1834 7.3436 13.7929Z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.7831 4C11.9533 3.70583 12.0507 3.36429 12.0507 3C12.0507 1.89543 11.1553 1 10.0507 1C8.94613 1 8.05071 1.89543 8.05071 3C8.05071 3.36429 8.14811 3.70583 8.31828 4H4.05632C2.95175 4 2 4.89543 2 6V9.44444L1.92523 9.53043C0.676011 10.967 0.612403 13.085 1.77315 14.594L2 14.8889V15.2389C2 16.8418 3.19355 18.2193 4.76744 18.5229C8.11437 19.1683 11.776 19.1683 15.1229 18.5229C16.6968 18.2193 18 16.81 18 15.2071V14.8571L18.2268 14.5622C19.3876 13.0532 19.3239 10.9352 18.0747 9.49862L18 9.41263V5.96819C18 4.86362 17.1552 4 16.0507 4H11.7831ZM4.05069 15.2389V14.2086L3.41472 13.3746C2.83434 12.6201 2.86615 11.5611 3.49075 10.8428L4.05069 10.1924V6L16.0507 6V10.1924L16.6162 10.8428C17.2408 11.5611 17.2727 12.6201 16.6923 13.3746L16.0507 14.2086V15.2389C16.0507 15.8833 15.5935 16.437 14.9608 16.559C11.8641 17.1563 8.24292 17.1563 5.14617 16.559C4.51348 16.437 4.05069 15.8833 4.05069 15.2389Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="scan" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 11h-1V4c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v7H3c-.6 0-1 .4-1 1s.4 1 1 1h14c.6 0 1-.4 1-1s-.4-1-1-1zm-3 0H6V5c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v6zM4 16v-2h2v1c0 .6.4 1 1 1h6c.6 0 1-.4 1-1v-1h2v2c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="search" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.32 13.906l3.387 3.387a1 1 0 0 1-1.414 1.414l-3.387-3.387a8 8 0 1 1 1.414-1.414zM9 15A6 6 0 1 0 9 3a6 6 0 0 0 0 12z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="secure" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 8V6c0-2.7 2.3-5 5-5s5 2.3 5 5v2h.5a2.5 2.5 0 0 1 2.5 2.5v6a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 2 16.5v-6A2.5 2.5 0 0 1 4.5 8H5zm1 2H4.5a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5H6zm1-2h6V6c0-1.595-1.405-3-3-3S7 4.405 7 6v2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="send" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.654 1.061a1 1 0 0 1 1.284 1.284l-5.492 15.98c-.302.877-1.53.907-1.874.046L8.73 11.27 1.629 8.43c-.861-.345-.83-1.573.046-1.875l15.98-5.493zm-6.98 9.68l1.755 4.39 3.219-9.365-4.975 4.975zM9.258 9.327l4.975-4.975L4.87 7.571l4.39 1.756z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="settings" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.303 7.503a.193.193 0 0 0 .119.042h.123a2.455 2.455 0 1 1 0 4.91h-.061a.2.2 0 0 0-.183.12c-.037.085-.021.173.028.223l.043.044a2.455 2.455 0 1 1-3.472 3.472c-.094-.093-.181-.109-.266-.071a.199.199 0 0 0-.121.179v.123a2.455 2.455 0 1 1-4.91 0c-.001-.124-.053-.196-.189-.248a.197.197 0 0 0-.212.032l-.044.043A2.455 2.455 0 1 1 3.686 12.9c.093-.094.109-.181.071-.266a.199.199 0 0 0-.179-.121h-.123a2.455 2.455 0 0 1 0-4.91c.124-.001.196-.053.248-.189a.197.197 0 0 0-.032-.212l-.043-.044A2.455 2.455 0 1 1 7.1 3.686c.094.093.181.109.256.076l.147-.065a.193.193 0 0 0 .042-.119v-.123a2.455 2.455 0 1 1 4.91 0v.061c0 .08.047.152.13.187a.197.197 0 0 0 .213-.032l.044-.043A2.455 2.455 0 1 1 16.314 7.1c-.093.094-.109.181-.076.256l.065.147zm.177 2.952h.065a.455.455 0 1 0 0-.91h-.127a2.2 2.2 0 0 1-2.014-1.333l-.08-.189v-.085a2.206 2.206 0 0 1 .533-2.209l.044-.044a.455.455 0 1 0-.645-.643l-.051.051a2.196 2.196 0 0 1-2.417.444 2.201 2.201 0 0 1-1.333-2.017v-.065a.455.455 0 0 0-.91 0v.127a2.2 2.2 0 0 1-1.333 2.014l-.189.08h-.085a2.206 2.206 0 0 1-2.209-.533L5.685 5.1a.455.455 0 1 0-.643.645l.051.051c.629.643.803 1.604.464 2.368a2.207 2.207 0 0 1-2.037 1.44h-.065a.455.455 0 0 0 0 .91h.127a2.196 2.196 0 0 1 2.01 1.323 2.204 2.204 0 0 1-.449 2.435l-.044.044a.455.455 0 1 0 .645.643l.051-.051c.643-.629 1.604-.803 2.368-.464a2.207 2.207 0 0 1 1.44 2.037v.065a.455.455 0 1 0 .91 0v-.127a2.196 2.196 0 0 1 1.323-2.01 2.204 2.204 0 0 1 2.435.449l.044.044a.455.455 0 1 0 .643-.645l-.051-.051a2.2 2.2 0 0 1-.442-2.422 2.201 2.201 0 0 1 2.015-1.328zM10 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="shield" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19c-.2 0-.3 0-.5-.1C9.2 18.7 2 14.5 2 6c0-.6.4-1 1-1 .7 0 4.3-1.8 6.3-3.7.4-.4 1-.4 1.4 0 2 2 5.6 3.7 6.3 3.7.5 0 1 .5 1 1 0 9.5-7.3 12.8-7.6 12.9-.1.1-.3.1-.4.1zM4 6.8c.4 5.7 4.6 9.1 6 10.1 1.4-.8 5.6-3.6 5.9-10.1-1.6-.5-4.2-2-6-3.4C8.2 4.8 5.6 6.3 4 6.8z">
                </path>
                <path
                    d="M9 13c-.3 0-.5-.1-.7-.3l-2-2c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0L9 10.6l3.3-3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4 4c-.2.2-.4.3-.7.3z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="sort" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14 15.796l2.342-2.049a1 1 0 1 1 1.317 1.506l-4 3.5a1 1 0 0 1-1.317 0l-4-3.5a1 1 0 1 1 1.317-1.506L12 15.797V10a1 1 0 1 1 2 0v5.796zM6 4.204L3.659 6.253a1 1 0 1 1-1.317-1.506l4-3.5a1 1 0 0 1 1.317 0l4 3.5a1 1 0 0 1-1.317 1.506L8 4.203V10a1 1 0 0 1-2 0V4.204z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="split" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 14.001v-2a.5.5 0 01.854-.354l3 3a.5.5 0 010 .708l-3 3A.5.5 0 0115 18v-2h-2.5c-2.55 0-3.535-.877-4.41-2.997l-.05-.12C7.425 11.397 6.944 11 5 11H2a1 1 0 110-2h3c1.944 0 2.425-.396 3.04-1.883l.05-.12C8.965 4.877 9.95 4 12.5 4H15v-2a.5.5 0 01.854-.354l3 3a.5.5 0 010 .708l-3 3A.5.5 0 0115 8v-2h-2.5c-1.611 0-1.964.315-2.561 1.76l-.05.123C9.507 8.802 9.083 9.5 8.506 10c.577.5 1 1.2 1.381 2.117l.051.123c.597 1.445.95 1.76 2.561 1.76H15z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="star" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 3.636L8.206 7.229a.817.817 0 0 1-.616.442l-4.013.58 2.903 2.796a.803.803 0 0 1 .236.716L6.03 15.71l3.588-1.865a.827.827 0 0 1 .762 0l3.588 1.865-.685-3.948a.803.803 0 0 1 .236-.716l2.903-2.796-4.013-.58a.817.817 0 0 1-.616-.442L10 3.636zM6.929 6.132l2.337-4.681a.822.822 0 0 1 1.468 0l2.337 4.681 5.228.756c.671.096.938.911.453 1.379l-3.782 3.641.892 5.145c.115.66-.587 1.164-1.187.852L10 15.475l-4.675 2.43c-.6.312-1.302-.192-1.187-.852l.892-5.145-3.782-3.641a.806.806 0 0 1 .453-1.38l5.228-.755z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="stop" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.9 3L17 7.1v5.8L12.9 17H7.1L3 12.9V7.1L7.1 3h5.8zm0-2H7.1c-.5 0-1 .2-1.4.6L1.6 5.7c-.4.4-.6.9-.6 1.4v5.8c0 .5.2 1 .6 1.4l4.1 4.1c.4.4.9.6 1.4.6h5.8c.5 0 1-.2 1.4-.6l4.1-4.1c.4-.4.6-.9.6-1.4V7.1c0-.5-.2-1-.6-1.4l-4.1-4.1c-.4-.4-.9-.6-1.4-.6z">
                </path>
                <path d="M9 14a1 1 0 112 0 1 1 0 01-2 0zm1-9a1 1 0 00-1 1v5a1 1 0 102 0V6a1 1 0 00-1-1z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="subtract" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm1-10H5.833C5.373 9 5 9.448 5 10s.373 1 .833 1h8.334c.46 0 .833-.448.833-1s-.373-1-.833-1H11zm-1 8c4.067 0 7-2.933 7-7s-2.933-7-7-7-7 2.933-7 7 2.933 7 7 7z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="subtract--simple" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.167 9c.46 0 .833.448.833 1s-.373 1-.833 1H3.833C3.373 11 3 10.552 3 10s.373-1 .833-1h12.334z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="success" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 19a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-2a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-2-5.414l5.293-5.293a1 1 0 0 1 1.414 1.414l-6 6a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L8 11.586z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="tablet" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.5 1h9A2.5 2.5 0 0 1 17 3.5v13a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 3 16.5v-13A2.5 2.5 0 0 1 5.5 1zm0 2a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-9zM10 16a2 2 0 1 1 0-4 2 2 0 0 1 0 4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="tag" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.646 11.768l-5.878 5.878a2.5 2.5 0 0 1-3.536 0l-6.94-6.939A1 1 0 0 1 1 10V2a1 1 0 0 1 1-1h8a1 1 0 0 1 .707.293l6.94 6.94a2.5 2.5 0 0 1 0 3.535zM3 9.586l6.646 6.646a.5.5 0 0 0 .708 0l5.878-5.878a.5.5 0 0 0 0-.708L9.586 3H3v6.586zM6 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="tasks" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.19 5.92 7.52 7.59l-.27-.27a.996.996 0 1 0-1.41 1.41l.98.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l2.38-2.38a.996.996 0 1 0-1.41-1.41h-.02ZM14 7h-1c-.55 0-1 .45-1 1s.45 1 1 1h1c.55 0 1-.45 1-1s-.45-1-1-1ZM9.19 10.92l-1.67 1.67-.27-.27a.996.996 0 1 0-1.41 1.41l.98.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l2.38-2.38a.996.996 0 1 0-1.41-1.41h-.02ZM14 12h-1c-.55 0-1 .45-1 1s.45 1 1 1h1c.55 0 1-.45 1-1s-.45-1-1-1Z">
                </path>
                <path
                    d="M15.5 1h-11A2.5 2.5 0 0 0 2 3.5v13A2.5 2.5 0 0 0 4.5 19h11a2.5 2.5 0 0 0 2.5-2.5v-13A2.5 2.5 0 0 0 15.5 1Zm.5 15.5c0 .28-.22.5-.5.5h-11c-.28 0-.5-.22-.5-.5v-13c0-.28.22-.5.5-.5h11c.28 0 .5.22.5.5v13Z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="taxes" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4 1h12a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm1 2a1 1 0 00-1 1v12a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M13.707 6.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0z"></path>
                <path d="M9 6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM14 13.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="time" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <path
                        d="M9 18A9 9 0 1 1 9 0a9 9 0 0 1 0 18zm0-2A7 7 0 1 0 9 2a7 7 0 0 0 0 14zm3.215-4.616a1.023 1.023 0 1 1-1.52 1.368L8.24 10.025a1.023 1.023 0 0 1-.263-.684V3.886a1.023 1.023 0 1 1 2.046 0v5.062l2.192 2.436z"
                        id="fba"></path>
                </defs>
                <use xlink:href="#fba" transform="translate(1 1)"></use>
            </symbol>
            <symbol viewBox="0 0 20 20" id="transaction" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 10H7c-.6 0-1-.4-1-1s.4-1 1-1h6c.6 0 1 .4 1 1s-.4 1-1 1zm-2 3H7c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1s-.4 1-1 1zm5-6c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4L16.6 4l-1.3-1.3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l2 2c.4.4.4 1 0 1.4l-2 2c-.2.2-.4.3-.7.3z">
                </path>
                <path
                    d="M3 10c-.6 0-1-.4-1-1V8c0-2.8 2.2-5 5-5h10c.6 0 1 .4 1 1s-.4 1-1 1H7C5.3 5 4 6.3 4 8v1c0 .6-.4 1-1 1zm1 9c-.3 0-.5-.1-.7-.3l-2-2c-.4-.4-.4-1 0-1.4l2-2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L3.4 16l1.3 1.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3z">
                </path>
                <path
                    d="M13 17H3c-.6 0-1-.4-1-1s.4-1 1-1h10c1.7 0 3-1.3 3-3v-1c0-.6.4-1 1-1s1 .4 1 1v1c0 2.8-2.2 5-5 5z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="transfer" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.796 5l-2.049-2.342a1 1 0 011.506-1.317l3.5 4a1 1 0 010 1.317l-3.5 4a1 1 0 01-1.506-1.317L15.797 7H6a1 1 0 110-2h9.796zM4.204 13l2.049-2.341A1 1 0 004.747 9.34l-3.5 4a1 1 0 000 1.318l3.5 4a1 1 0 001.506-1.318L4.203 15H14a1 1 0 100-2H4.204zM4 6a1 1 0 11-2 0 1 1 0 012 0zm14 8a1 1 0 11-2 0 1 1 0 012 0z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="twitter" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.9 4.763c.75-.45 1.35-1.2 1.65-2.026-.75.45-1.5.75-2.325.9-.75-.75-1.725-1.2-2.775-1.2a3.681 3.681 0 0 0-3.675 3.675c0 .3 0 .6.075.825-3.075-.15-5.775-1.575-7.575-3.825-.375.526-.525 1.201-.525 1.875 0 1.276.675 2.4 1.65 3.075-.6-.075-1.2-.224-1.65-.45v.075c0 1.8 1.275 3.3 2.925 3.6-.3.075-.6.15-.975.15-.225 0-.45 0-.675-.074.45 1.5 1.8 2.55 3.45 2.55-1.275.974-2.85 1.575-4.575 1.575-.3 0-.6 0-.9-.075 1.65 1.05 3.6 1.65 5.625 1.65 6.825 0 10.5-5.625 10.5-10.5v-.45c.75-.526 1.35-1.2 1.875-1.95-.675.3-1.35.525-2.1.6z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="unavailable" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 14a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="undo" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.204 10l2.049 2.341a1 1 0 1 1-1.506 1.318l-3.5-4a1 1 0 0 1 0-1.318l3.5-4A1 1 0 1 1 6.253 5.66L4.203 8H14.52C17.018 8 19 10.239 19 13v2c0 .488-.523 1-1 1s-1-.512-1-1v-1.961c0-1.83-.985-3.039-2.48-3.039H4.204z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="upload" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.792 10.1c-.59-1.983-2.338-3.343-4.327-3.342h-.326c-.853-2.546-3.01-4.393-5.596-4.71-2.798-.343-5.497 1.18-6.786 3.812-1.28 2.612-.914 5.788.925 7.999A.812.812 0 103.93 12.82c-1.428-1.717-1.715-4.207-.716-6.247.99-2.02 3.031-3.172 5.132-2.915 2.106.258 3.858 1.883 4.393 4.101a.812.812 0 00.79.622h.937c1.256-.002 2.381.874 2.77 2.182.395 1.323-.062 2.764-1.114 3.55a.812.812 0 00.972 1.3c1.603-1.199 2.284-3.346 1.698-5.314z">
                </path>
                <path
                    d="M9 18.123c0 .484.448.877 1 .877s1-.393 1-.877v-5.709l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L9 12.414v5.709z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="user" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 11c3.924 0 6.925 2.25 8.91 6.584A1 1 0 0 1 18 19H2a1 1 0 0 1-.91-1.416C3.076 13.25 6.077 11 10 11zm6.354 6c-1.604-2.702-3.702-4-6.354-4s-4.75 1.298-6.354 4h12.708zM10 10c-2.384 0-4.5-2.116-4.5-4.5S7.616 1 10 1s4.5 2.116 4.5 4.5S12.384 10 10 10zm0-2c1.279 0 2.5-1.221 2.5-2.5S11.279 3 10 3 7.5 4.221 7.5 5.5 8.721 8 10 8z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="user-add" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 8a1 1 0 1 0-2 0v1h-1a1 1 0 1 0 0 2h1v1a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1V8zM5 6.521C5 4.591 6.546 3 8.484 3c1.939 0 3.485 1.59 3.485 3.521 0 1.93-1.546 3.521-3.485 3.521C6.546 10.042 5 8.452 5 6.521zM8.484 5C7.678 5 7 5.667 7 6.521c0 .854.678 1.521 1.484 1.521.807 0 1.485-.667 1.485-1.521C9.969 5.667 9.29 5 8.484 5zM3.983 17.182v.002-.002zM4.368 16c.13-.302.296-.632.506-.96C5.554 13.98 6.651 13 8.5 13c1.85 0 2.946.98 3.626 2.04.21.328.376.658.506.96H4.368zM14 17c.983-.18.983-.181.983-.182v-.003l-.002-.007-.003-.017a3.755 3.755 0 0 0-.056-.248 8.861 8.861 0 0 0-1.113-2.583C12.884 12.52 11.231 11 8.5 11c-2.73 0-4.384 1.52-5.31 2.96a8.855 8.855 0 0 0-1.168 2.83l-.004.018v.007l-.001.002v.001L3 17l-.983-.18A1 1 0 0 0 3 18h11a1 1 0 0 0 .983-1.18L14 17z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="user-remove" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 10a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2h-4a1 1 0 0 1-1-1zM5 6.521C5 4.591 6.546 3 8.484 3c1.939 0 3.485 1.59 3.485 3.521 0 1.93-1.546 3.521-3.485 3.521C6.546 10.042 5 8.452 5 6.521zM8.484 5C7.678 5 7 5.667 7 6.521c0 .854.678 1.521 1.484 1.521.807 0 1.485-.667 1.485-1.521C9.969 5.667 9.29 5 8.484 5zM3.983 17.182v.002-.002zM4.368 16c.13-.302.296-.632.506-.96C5.554 13.98 6.651 13 8.5 13c1.85 0 2.946.98 3.626 2.04.21.328.376.658.506.96H4.368zM14 17c.983-.18.983-.181.983-.182v-.003l-.002-.007-.003-.017a3.755 3.755 0 0 0-.056-.248 8.861 8.861 0 0 0-1.113-2.583C12.884 12.52 11.231 11 8.5 11c-2.73 0-4.384 1.52-5.31 2.96a8.855 8.855 0 0 0-1.168 2.83l-.004.018v.007l-.001.002v.001L3 17l-.983-.18A1 1 0 0 0 3 18h11a1 1 0 0 0 .983-1.18L14 17z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="user-success" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.743 7.331a1 1 0 0 1-.074 1.412l-3.333 3a1 1 0 0 1-1.338 0l-1.667-1.5a1 1 0 0 1 1.338-1.486l.998.898 2.664-2.398a1 1 0 0 1 1.412.074zM5 6.521C5 4.591 6.546 3 8.484 3c1.939 0 3.485 1.59 3.485 3.521 0 1.93-1.546 3.521-3.485 3.521C6.546 10.042 5 8.452 5 6.521zM8.484 5C7.678 5 7 5.667 7 6.521c0 .854.678 1.521 1.484 1.521.807 0 1.485-.667 1.485-1.521C9.969 5.667 9.29 5 8.484 5zM3.983 17.182v.002-.002zM4.368 16c.13-.302.296-.632.506-.96C5.554 13.98 6.651 13 8.5 13c1.85 0 2.946.98 3.626 2.04.21.328.376.658.506.96H4.368zM14 17c.983-.18.983-.181.983-.182v-.003l-.002-.007-.003-.017a3.755 3.755 0 0 0-.056-.248 8.861 8.861 0 0 0-1.113-2.583C12.884 12.52 11.231 11 8.5 11c-2.73 0-4.384 1.52-5.31 2.96a8.855 8.855 0 0 0-1.168 2.83l-.004.018v.007l-.001.002v.001L3 17l-.983-.18A1 1 0 0 0 3 18h11a1 1 0 0 0 .983-1.18L14 17z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="users" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.742 1.905a1 1 0 0 0-.527 1.93c.777.211 1.363.939 1.363 1.816 0 .877-.585 1.604-1.361 1.817a1 1 0 1 0 .528 1.929 3.875 3.875 0 0 0 2.833-3.746 3.875 3.875 0 0 0-2.836-3.746zM7.565 1.87c-2.134 0-3.839 1.75-3.839 3.88s1.705 3.88 3.839 3.88c2.133 0 3.838-1.75 3.838-3.88S9.698 1.87 7.565 1.87zM5.726 5.75c0-1.052.837-1.88 1.839-1.88 1.001 0 1.838.828 1.838 1.88s-.837 1.88-1.838 1.88c-1.002 0-1.839-.828-1.839-1.88zm8.25 5.969a1 1 0 0 1 1.262-.64c1.807.593 2.776 2.212 3.282 3.453a10.754 10.754 0 0 1 .654 2.391l.007.046.001.014.001.004v.002c0 .001 0 .002-.992.121l.992-.12a1 1 0 0 1-.992 1.12h-1.845a1 1 0 1 1 0-2h.606a8.34 8.34 0 0 0-.285-.824c-.436-1.072-1.099-1.993-2.052-2.306a1 1 0 0 1-.639-1.261zM3.773 15.117a6.66 6.66 0 0 0-.53.993h8.607a6.66 6.66 0 0 0-.53-.993c-.703-1.078-1.843-2.087-3.774-2.087-1.93 0-3.07 1.01-3.773 2.087zm10.433 1.809l-.983.184.983-.183a1 1 0 0 1-.983 1.183H1.87a1 1 0 0 1-.983-1.183l.983.183-.983-.184v-.004l.002-.006.003-.018a3.913 3.913 0 0 1 .058-.252 8.928 8.928 0 0 1 1.147-2.623c.955-1.462 2.652-2.993 5.45-2.993 2.796 0 4.494 1.531 5.448 2.994a8.928 8.928 0 0 1 1.206 2.874l.003.018.001.006v.003h.001z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="video" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.223 4h7.554C12.005 4 13 5.03 13 6.3v7.4c0 1.27-.995 2.3-2.223 2.3H3.223C1.995 16 1 14.97 1 13.7V6.3C1 5.03 1.995 4 3.223 4zm.41 2C3.283 6 3 6.297 3 6.663v6.674c0 .366.284.663.633.663h6.734c.35 0 .633-.297.633-.663V6.663c0-.366-.284-.663-.633-.663H3.633zm8.809 5.687A.75.75 0 0 1 12 11V9a.75.75 0 0 1 .442-.687l5.521-2.461A.74.74 0 0 1 19 6.538v6.924a.74.74 0 0 1-1.037.686l-5.521-2.461zM17 12V8l-3 1.559v.882L17 12z">
                </path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="wave" xmlns="http://www.w3.org/2000/svg">
                <title>Wave</title>
                <path
                    d="M2.404 14.668l.087.029c1.044.344 2.159-.208 2.478-1.227l1.18-3.965c.32-1.02-.273-2.135-1.317-2.48l-.087-.028c-1.043-.345-2.159.208-2.478 1.227l-1.18 3.965c-.32 1.019.273 2.135 1.317 2.48">
                </path>
                <path
                    d="M10.068 15.275c.245-.59.424-1.27.611-1.874.413-1.33.774-2.685 1.172-4.02l.497-1.683c.364-1.164-.191-2.398-1.235-2.742l-.087-.029c-1.041-.343-2.189.323-2.557 1.48l-2.228 7.621c-.306.98-1.03 1.694-1.872 1.97a2.406 2.406 0 0 1-1.526.007l-.087-.029a2.397 2.397 0 0 1-.201-.08c.46.681 1.388 1.407 2.473 1.773 1.207.406 2.595.226 3.635-.523.677-.487 1.094-1.122 1.405-1.871M15.833 15.269c-.088.256-1.442 3.88-5.759 2.36 0 0 .89-.288 1.183-1.34.141-.506 1.384-4.72 1.384-4.72h.003l2.385-8.238c.32-1.02 1.434-1.571 2.478-1.227l.087.029c1.044.344 1.637 1.46 1.318 2.48l-2.565 8.857s-.425 1.542-.514 1.799">
                </path>
            </symbol>
        </svg>
    </div><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-HP8P" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>


    <style>
    body div#qual_ol .qual_ol_ans_tick,
    body div#qual_ol .qual_x_select .qual_ol_ans_tick {
        left: -16px;
        top: 14px
    }

    body div#qual_ol .qual_ol_ans_item {
        padding-left: 60px
    }

    body div#qual_ol .qual_ol_ans_item.qual_x_select {
        display: flex;
        flex-wrap: wrap;
        min-height: 45px;
        align-items: center;
        padding-left: 45px
    }
    </style>

    <noscript><img height="1" width="1" style="display:none" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=318881&fmt=gif"></noscript>
    <div id="Content" style="height:100%" bis_skin_checked="1">
        <div class="wv-frame wv-frame--app zzzzzz pg-dashboard" style="" bis_skin_checked="1">
            <div class="advisor-bar-container" bis_skin_checked="1"></div>
            <div class="wv-frame__global" bis_skin_checked="1"></div>
            <div class="wv-frame__wrapper" bis_skin_checked="1">
                <?php include 'sidebar.php';?>
                <div class="wv-frame__content" bis_skin_checked="1">
                <?php include 'header.php';?>
                    <div class="wv-frame__content__body" bis_skin_checked="1">
                        <div class="wv-frame__content__body__side wv-frame__content__body__side--left"
                            bis_skin_checked="1"></div>
                        <div class="wv-frame__content__body__main" bis_skin_checked="1">
                            <div class="wv-frame__content__body__main__wrapper" data-testid="frame-wrapper"
                                bis_skin_checked="1">
                                <div class="dashboardV2" bis_skin_checked="1">
                                    <div class="wv-notify--info" bis_skin_checked="1">
                                        <div class="wv-notify__icon-holder" bis_skin_checked="1"><svg
                                                class="wv-decor-icon--large" aria-hidden="true">
                                                <use xlink:href="#decor--payments-credit-card"></use>
                                            </svg></div>
                                        <div class="wv-notify__content-wrapper" bis_skin_checked="1">
                                            <div class="wv-notify__content" bis_skin_checked="1">
                                                <h3 class="wv-heading--subsection-title wv-notify__title fs-exclude">
                                                    Getting paid the easy way</h3>
                                                <p class="wv-text wv-text--body fs-exclude wv-text--inline">Simplify
                                                    getting paid and accept payments on your invoices. Your invoicing
                                                    and accounting will be automatically updated: No extra work! </p>
                                            </div>
                                            <div class="wv-notify__actions" bis_skin_checked="1"><button
                                                    class="wv-button--secondary fs-exclude">Set up in seconds</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wv-modal wv-modal--plain wv-modal--close" bis_skin_checked="1">
                                        <div class="wv-modal__window" bis_skin_checked="1">
                                            <div role="dialog" class="wv-modal__content" aria-modal="false"
                                                aria-labelledby="wv-modal__header__title_id" bis_skin_checked="1">
                                                <div class="wv-modal__content__scroll-area" bis_skin_checked="1">
                                                    <div class="wv-modal__body" bis_skin_checked="1"><button
                                                            class="wv-close--large" aria-label="close dialog"></button>
                                                        <div class="dashboard__wpp-application-incomplete-modal__content"
                                                            bis_skin_checked="1"><img class="wv-spot"
                                                                src="https://illustrations.waveapps.com/2.8.0/spots/accept-payments.png"
                                                                alt="A person with cartoonishly long arms holding a stack of payment cards.">
                                                            <h1 class="wv-heading--title fs-unmask">Set it and collect
                                                                it</h1>
                                                            <p class="wv-heading--subtitle fs-unmask">Finish your
                                                                payments setup and get paid by your customers in as fast
                                                                as 1 - 2 business days with online payments.</p><button
                                                                class="wv-button--primary fs-unmask">Finish
                                                                setup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wv-modal__backdrop" bis_skin_checked="1"></div>
                                    </div>
                                    <div class="dashboardV2__header__container" bis_skin_checked="1">
                                        <div class="wv-header--page dashboardV2__header" bis_skin_checked="1">
                                            <div class="wv-header__title" bis_skin_checked="1">
                                                <h1 class="wv-heading--title fs-exclude">Dashboard</h1>
                                            </div>
                                            <div class="wv-header__actions" bis_skin_checked="1">
                                                <div class="wv-dropdown fs-exclude" bis_skin_checked="1"><button
                                                        class="wv-dropdown__toggle wv-button--primary">Create a new<svg
                                                            class="wv-svg-icon" aria-labelledby="open-menu-title"
                                                            aria-hidden="false">
                                                            <title id="open-menu-title">open menu icon</title>
                                                            <use xlink:href="#open-menu"></use>
                                                        </svg></button></div>
                                                <div class="toggle-button-container" bis_skin_checked="1">
                                                    <div bis_skin_checked="1"><button aria-label="Open advisor bar"
                                                            data-testid="advisor-bar-toggle-button cvvvv"
                                                            class="wv-button fs-exclude wv-tooltip__trigger toggle-button"><span
                                                                class="toggle-button__notification-dot"
                                                                data-testid="toggle-red-dot-notification"></span>
                                                            <div class="toggle-button__arrow" bis_skin_checked="1"><svg
                                                                    class="wv-svg-icon" aria-labelledby="back-title"
                                                                    aria-hidden="false">
                                                                    <title id="back-title">back icon</title>
                                                                    <use xlink:href="#back"></use>
                                                                </svg></div>
                                                            <div class="toggle-button__checklist" bis_skin_checked="1">
                                                                <svg class="wv-svg-icon" aria-labelledby="tasks-title"
                                                                    aria-hidden="false">
                                                                    <title id="tasks-title">tasks icon</title>
                                                                    <use xlink:href="#tasks"></use>
                                                                </svg>
                                                            </div>
                                                        </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboardV2__container" bis_skin_checked="1">
                                        <div class="dashboardV2__recentActivity" bis_skin_checked="1">
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1"> </div>
                                                </div>
                                                <div id="CentralBankingWidget" class="dashboardV2__recentWidget"
                                                    bis_skin_checked="1">
                                                    <div class="wv-box--gray wv-box--xlarge txn-import-prompt__container"
                                                        bis_skin_checked="1">
                                                        <div class="wv-box__content" bis_skin_checked="1"><img
                                                                class="wv-spot txn-import-prompt__bank-img-icon"
                                                                src="./assets/images/bank.png"
                                                                alt="A hand dropping a coin into a piggybank shaped like a bank.">
                                                            <h2
                                                                class="wv-heading--section-title txn-import-prompt__heading fs-unmask">
                                                                Connect your bank account or credit card</h2>
                                                            <p
                                                                class="wv-text wv-text--body txn-import-prompt__text fs-unmask">
                                                                Automate your bookkeeping by importing transactions
                                                                automatically.</p><a
                                                                href="https://next.waveapps.com/4ca14d42-ebb1-425c-8837-93261d4e42c6/connected-accounts"
                                                                class="wv-button fs-unmask txn-import-prompt__button">Connect
                                                                my account</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Overdue
                                                            invoices &amp; bills</h2>
                                                    </div>
                                                </div>
                                                <div data-testid="overdue-widget-content" bis_skin_checked="1">
                                                    <div class="wv-box dashboardV2__recentWidget fs-exclude"
                                                        bis_skin_checked="1">
                                                        <div class="wv-box__content" bis_skin_checked="1">
                                                            <p
                                                                class="wv-text wv-text--block-label fs-exclude wv-text--inline">
                                                                Overdue Invoices</p>
                                                            <ul class="wv-list">
                                                                <li class=""><a
                                                                        class="wv-text--link fs-exclude fs-exclude">Lido
                                                                        Carrier</a>, $3,300.00</li>
                                                                <li class=""><a
                                                                        class="wv-text--link fs-exclude fs-exclude">Lido
                                                                        Carrier</a>, $1,398.19</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                                </div>
                                            </div>
                                            <div class="dashboardV2__cellItem dashboardV2__thingsYouCanDo"
                                                bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Things You Can
                                                            Do</h2>
                                                    </div>
                                                </div>
                                                <ul class="wv-list--plain--vertical">
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a
                                                                href="/4ca14d42-ebb1-425c-8837-93261d4e42c6/customers/add"
                                                                class="wv-text--link fs-exclude">Add a customer</a></li>
                                                    </div>
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a href="#" class="wv-text--link fs-exclude">Add a
                                                                vendor</a></li>
                                                    </div>
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a
                                                                href="/4ca14d42-ebb1-425c-8837-93261d4e42c6/settings/invoice-estimate-settings"
                                                                class="wv-text--link fs-exclude">Customize your
                                                                invoices</a></li>
                                                    </div>
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a
                                                                href="/4ca14d42-ebb1-425c-8837-93261d4e42c6/settings/user-management"
                                                                class="wv-text--link fs-exclude">Invite a guest
                                                                collaborator</a></li>
                                                    </div>
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a
                                                                href="/4ca14d42-ebb1-425c-8837-93261d4e42c6/wave-advisors/landing"
                                                                class="wv-text--link fs-exclude">Professional accounting
                                                                help</a></li>
                                                    </div>
                                                    <div class="thingsYouCanDo__item" bis_skin_checked="1">
                                                        <li class=""><a
                                                                href="/4ca14d42-ebb1-425c-8837-93261d4e42c6/payments/settings/general"
                                                                class="wv-text--link fs-exclude">Accept credit cards to
                                                                get paid faster</a></li>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                        </div>
                                        <div class="dashboardV2__financialActivity" bis_skin_checked="1">
                                            <div class="dashboardV2__cellItem dashboardV2__widgetHeader"
                                                bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Cash Flow</h2>
                                                    </div>
                                                </div>
                                                <div class="dashboardV2__chart-info-container" bis_skin_checked="1">
                                                    <div class="dashboardV2__chart-info-section" bis_skin_checked="1">
                                                        <div bis_skin_checked="1">Cash coming in and going out of your
                                                            business.</div><a class="wv-text--link fs-exclude">View
                                                            Report</a>
                                                    </div>
                                                    <div class="dashboardV2__chart-controls dashboardV2__chart-controls__chart-header"
                                                        bis_skin_checked="1"><button
                                                            class="wv-button--link fs-exclude dashboardV2__chart-controls__btn dashboardV2__chart-controls__btn--active">Last
                                                            12 Months</button><button
                                                            class="wv-button--link fs-exclude dashboardV2__chart-controls__btn">Last
                                                            24 Months</button></div>
                                                </div>
                                                <div data-highcharts-chart="0" bis_skin_checked="1"
                                                    style="overflow: hidden;">
                                                    <div id="highcharts-0t80cmc-0" dir="ltr"
                                                        class="highcharts-container "
                                                        style="position: relative; overflow: hidden; width: 595px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none; touch-action: manipulation; outline: none; font-family: Averta, sans-serif;"
                                                        bis_skin_checked="1"><svg version="1.1" class="highcharts-root"
                                                            style="font-family: Averta, sans-serif; font-size: 12px;"
                                                            xmlns="http://www.w3.org/2000/svg" width="595" height="400"
                                                            viewBox="0 0 595 400" role="img" aria-label="">
                                                            <desc>Created with Highcharts 10.3.3</desc>
                                                            <defs>
                                                                <clipPath id="highcharts-0t80cmc-1-">
                                                                    <rect x="0" y="0" width="568" height="285"
                                                                        fill="none"></rect>
                                                                </clipPath>
                                                                <clipPath id="highcharts-0t80cmc-15-">
                                                                    <rect x="0" y="0" width="568" height="285"
                                                                        fill="none"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <rect fill="#ffffff" class="highcharts-background" x="0"
                                                                y="0" width="595" height="400" rx="0" ry="0"></rect>
                                                            <rect fill="none" class="highcharts-plot-background" x="27"
                                                                y="66" width="568" height="285"></rect>
                                                            <g class="highcharts-grid highcharts-xaxis-grid"
                                                                data-z-index="1">
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 70.5 66 L 70.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 113.5 66 L 113.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 157.5 66 L 157.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 201.5 66 L 201.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 244.5 66 L 244.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 288.5 66 L 288.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 332.5 66 L 332.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 376.5 66 L 376.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 419.5 66 L 419.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 463.5 66 L 463.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 507.5 66 L 507.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 550.5 66 L 550.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 594.5 66 L 594.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 26.5 66 L 26.5 351" opacity="1"></path>
                                                            </g>
                                                            <g class="highcharts-grid highcharts-yaxis-grid"
                                                                data-z-index="1">
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 27 209.5 L 595 209.5" opacity="1"></path>
                                                            </g>
                                                            <rect fill="none" class="highcharts-plot-border"
                                                                data-z-index="1" stroke="#cccccc" stroke-width="0"
                                                                x="27" y="66" width="568" height="285"></rect>
                                                            <g class="highcharts-axis highcharts-xaxis"
                                                                data-z-index="2">
                                                                <path fill="none" class="highcharts-axis-line"
                                                                    stroke="#ccd6eb" stroke-width="1" data-z-index="7"
                                                                    d="M 27 351.5 L 595 351.5"></path>
                                                            </g>
                                                            <g class="highcharts-axis highcharts-yaxis"
                                                                data-z-index="2">
                                                                <path fill="none" class="highcharts-axis-line"
                                                                    stroke="#ccd6eb" stroke-width="0" data-z-index="7"
                                                                    d="M 27 66 L 27 351"></path>
                                                            </g>
                                                            <g class="highcharts-series-group" data-z-index="3">
                                                                <g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-color-0 highcharts-tracker"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="url(#highcharts-0t80cmc-15-)">
                                                                    <rect x="7.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="51.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="94.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="138.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="182.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="225.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="269.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="313.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="356.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="400.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="444.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="487.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="531.5" y="143.5" width="28" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                </g>
                                                                <g class="highcharts-markers highcharts-series-0 highcharts-column-series highcharts-color-0"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="none"></g>
                                                                <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-1 highcharts-tracker"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="url(#highcharts-0t80cmc-15-)">
                                                                    <rect x="7.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="51.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="94.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="138.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="182.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="225.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="269.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="313.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="356.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="400.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="444.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="487.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="531.5" y="143.5" width="28" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                </g>
                                                                <g class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-1"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="none"></g>
                                                                <g class="highcharts-series highcharts-series-2 highcharts-line-series highcharts-color-2"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="url(#highcharts-0t80cmc-15-)">
                                                                    <path fill="none"
                                                                        d="M 21.846153846154 142.5 L 65.538461538462 142.5 L 109.23076923077 142.5 L 152.92307692307 142.5 L 196.61538461538 142.5 L 240.30769230769 142.5 L 284 142.5 L 327.6923076923 142.5 L 371.38461538461 142.5 L 415.07692307692 142.5 L 458.76923076923 142.5 L 502.46153846153 142.5 L 546.15384615384 142.5"
                                                                        class="highcharts-graph" data-z-index="1"
                                                                        stroke="#1C252C" stroke-width="2"
                                                                        stroke-linejoin="round" stroke-linecap="round">
                                                                    </path>
                                                                    <path fill="none"
                                                                        d="M 21.846153846154 142.5 L 65.538461538462 142.5 L 109.23076923077 142.5 L 152.92307692307 142.5 L 196.61538461538 142.5 L 240.30769230769 142.5 L 284 142.5 L 327.6923076923 142.5 L 371.38461538461 142.5 L 415.07692307692 142.5 L 458.76923076923 142.5 L 502.46153846153 142.5 L 546.15384615384 142.5"
                                                                        data-z-index="2" class="highcharts-tracker-line"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke="rgba(192,192,192,0.0001)"
                                                                        stroke-width="22"></path>
                                                                </g>
                                                                <g class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-color-2 highcharts-tracker"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(27,66) scale(1 1)"
                                                                    clip-path="none">
                                                                    <path fill="#1C252C"
                                                                        d="M 152 142.5 A 0 0 0 1 1 152 142.5 Z"
                                                                        class="highcharts-halo highcharts-color-2"
                                                                        data-z-index="-1" fill-opacity="0.25"
                                                                        visibility="hidden"></path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 21 146.5 A 4 4 0 1 1 21.003999999333335 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 65 146.5 A 4 4 0 1 1 65.00399999933333 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 109 146.5 A 4 4 0 1 1 109.00399999933333 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 152 146.5 A 4 4 0 1 1 152.00399999933333 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 196 146.5 A 4 4 0 1 1 196.00399999933333 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 240 146.5 A 4 4 0 1 1 240.00399999933333 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 284 146.5 A 4 4 0 1 1 284.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 327 146.5 A 4 4 0 1 1 327.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 371 146.5 A 4 4 0 1 1 371.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 415 146.5 A 4 4 0 1 1 415.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 458 146.5 A 4 4 0 1 1 458.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 502 146.5 A 4 4 0 1 1 502.00399999933336 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M 546 146.5 A 4 4 0 1 1 546.0039999993334 146.49999800000018 Z"
                                                                        stroke="#1C252C" stroke-width="2" opacity="1"
                                                                        class="highcharts-point highcharts-color-2">
                                                                    </path>
                                                                </g>
                                                            </g><text x="298" text-anchor="middle"
                                                                class="highcharts-title" data-z-index="4"
                                                                style="color: rgb(51, 51, 51); font-size: 24px; fill: rgb(51, 51, 51);"
                                                                y="30"></text><text x="298" text-anchor="middle"
                                                                class="highcharts-subtitle" data-z-index="4"
                                                                style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                                                y="24"></text><text x="0" text-anchor="start"
                                                                class="highcharts-caption" data-z-index="4"
                                                                style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                                                y="397"></text>
                                                            <g class="highcharts-legend highcharts-no-tooltip"
                                                                data-z-index="7" transform="translate(0,10)">
                                                                <rect fill="none" class="highcharts-legend-box" rx="0"
                                                                    ry="0" stroke="#999999" stroke-width="0" x="0" y="0"
                                                                    width="266" height="26"></rect>
                                                                <g data-z-index="1">
                                                                    <g>
                                                                        <g class="highcharts-legend-item highcharts-column-series highcharts-color-0 highcharts-series-0"
                                                                            data-z-index="1" transform="translate(8,3)">
                                                                            <text x="21" text-anchor="start"
                                                                                data-z-index="2" y="15"
                                                                                style="color: rgb(68, 68, 68); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(68, 68, 68);">Inflow</text>
                                                                            <rect x="2" y="4" width="12" height="12"
                                                                                fill="#23C770" class="highcharts-point"
                                                                                data-z-index="3"></rect>
                                                                        </g>
                                                                        <g class="highcharts-legend-item highcharts-column-series highcharts-color-1 highcharts-series-1"
                                                                            data-z-index="1"
                                                                            transform="translate(84.32421875,3)"><text
                                                                                x="21" y="15" text-anchor="start"
                                                                                data-z-index="2"
                                                                                style="color: rgb(68, 68, 68); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(68, 68, 68);">Outflow</text>
                                                                            <rect x="2" y="4" width="12" height="12"
                                                                                fill="#8AA2B2" class="highcharts-point"
                                                                                data-z-index="3"></rect>
                                                                        </g>
                                                                        <g class="highcharts-legend-item highcharts-line-series highcharts-color-2 highcharts-series-2"
                                                                            data-z-index="1"
                                                                            transform="translate(170.64453125,3)">
                                                                            <path fill="none" class="highcharts-graph"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                d="M 1 11 L 15 11" stroke="#1C252C">
                                                                            </path>
                                                                            <path fill="#FFFFFF"
                                                                                d="M 8 15 A 4 4 0 1 1 8.003999999333336 14.999998000000167 Z"
                                                                                class="highcharts-point"
                                                                                stroke="#1C252C" stroke-width="2"
                                                                                opacity="1"></path><text x="21" y="15"
                                                                                text-anchor="start" data-z-index="2"
                                                                                style="color: rgb(68, 68, 68); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(68, 68, 68);">Net
                                                                                Change</text>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="highcharts-axis-labels highcharts-xaxis-labels"
                                                                data-z-index="7"><text x="48.84615384615416"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">May<tspan class="highcharts-br"
                                                                        dy="14" x="48.84615384615416">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="92.53846153846615"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jun<tspan class="highcharts-br"
                                                                        dy="14" x="92.53846153846615">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="136.23076923076616"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jul<tspan class="highcharts-br"
                                                                        dy="14" x="136.23076923076616">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="179.92307692307617"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Aug<tspan class="highcharts-br"
                                                                        dy="14" x="179.92307692307617">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="223.61538461537617"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Sep<tspan class="highcharts-br"
                                                                        dy="14" x="223.61538461537617">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="267.3076923076861"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Oct<tspan class="highcharts-br"
                                                                        dy="14" x="267.3076923076861">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="310.99999999999613"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Nov<tspan class="highcharts-br"
                                                                        dy="14" x="310.99999999999613">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="354.69230769230614"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Dec<tspan class="highcharts-br"
                                                                        dy="14" x="354.69230769230614">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="398.38461538461615"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jan<tspan class="highcharts-br"
                                                                        dy="14" x="398.38461538461615">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="442.07692307691616"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Feb<tspan class="highcharts-br"
                                                                        dy="14" x="442.07692307691616">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="485.7692307692261"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Mar<tspan class="highcharts-br"
                                                                        dy="14" x="485.7692307692261">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="529.4615384615362"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Apr<tspan class="highcharts-br"
                                                                        dy="14" x="529.4615384615362">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="573.1538461538462"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">May<tspan class="highcharts-br"
                                                                        dy="14" x="573.1538461538462">&ZeroWidthSpace;
                                                                    </tspan>23</text></g>
                                                            <g class="highcharts-axis-labels highcharts-yaxis-labels"
                                                                data-z-index="7"><text x="12" text-anchor="end"
                                                                    transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="214" opacity="1">$0</text></g>
                                                            <g class="highcharts-label highcharts-tooltip highcharts-color-2"
                                                                data-z-index="8" transform="translate(139,148)"
                                                                style="cursor: default; white-space: nowrap; pointer-events: none;"
                                                                opacity="0" visibility="hidden">
                                                                <path fill="none"
                                                                    class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                                                    d="M 3.5 0.5 L 80.5 0.5 C 83.5 0.5 83.5 0.5 83.5 3.5 L 83.5 42.5 C 83.5 45.5 83.5 45.5 80.5 45.5 L 46.5 45.5 L 40.5 51.5 L 34.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                                                    stroke-width="5" stroke="#000000"
                                                                    stroke-opacity="0.049999999999999996"
                                                                    transform="translate(1, 1)"></path>
                                                                <path fill="none"
                                                                    class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                                                    d="M 3.5 0.5 L 80.5 0.5 C 83.5 0.5 83.5 0.5 83.5 3.5 L 83.5 42.5 C 83.5 45.5 83.5 45.5 80.5 45.5 L 46.5 45.5 L 40.5 51.5 L 34.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                                                    stroke-width="3" stroke="#000000"
                                                                    stroke-opacity="0.09999999999999999"
                                                                    transform="translate(1, 1)"></path>
                                                                <path fill="none"
                                                                    class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                                                    d="M 3.5 0.5 L 80.5 0.5 C 83.5 0.5 83.5 0.5 83.5 3.5 L 83.5 42.5 C 83.5 45.5 83.5 45.5 80.5 45.5 L 46.5 45.5 L 40.5 51.5 L 34.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                                                    stroke-width="1" stroke="#000000"
                                                                    stroke-opacity="0.15" transform="translate(1, 1)">
                                                                </path>
                                                                <path fill="rgba(247,247,247,0.85)"
                                                                    class="highcharts-label-box highcharts-tooltip-box"
                                                                    d="M 3.5 0.5 L 80.5 0.5 C 83.5 0.5 83.5 0.5 83.5 3.5 L 83.5 42.5 C 83.5 45.5 83.5 45.5 80.5 45.5 L 46.5 45.5 L 40.5 51.5 L 34.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                                                    stroke-width="1" stroke="#1C252C"></path><text x="8"
                                                                    data-z-index="1" y="20"
                                                                    style="color: rgb(51, 51, 51); font-size: 12px; fill: rgb(51, 51, 51);">
                                                                    <tspan>
                                                                        <tspan style="font-weight: bold;">Net Change
                                                                        </tspan>
                                                                        <tspan class="highcharts-br" dy="15" x="8">
                                                                            &ZeroWidthSpace;</tspan>
                                                                        <tspan>$ 0.00</tspan>
                                                                    </tspan>
                                                                </text>
                                                            </g>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Profit And Loss
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="dashboardV2__chart-info-container" bis_skin_checked="1">
                                                    <div class="dashboardV2__chart-info-section" bis_skin_checked="1">
                                                        <div bis_skin_checked="1">Income and expenses only (includes
                                                            unpaid invoices and bills).</div><a
                                                            class="wv-text--link fs-exclude">View Report</a>
                                                    </div>
                                                    <div class="dashboardV2__chart-controls dashboardV2__chart-controls__chart-header"
                                                        bis_skin_checked="1"><button
                                                            class="wv-button--link fs-exclude dashboardV2__chart-controls__btn dashboardV2__chart-controls__btn--active">Last
                                                            12 Months</button><button
                                                            class="wv-button--link fs-exclude dashboardV2__chart-controls__btn">Last
                                                            24 Months</button></div>
                                                </div>
                                                <div data-highcharts-chart="1" bis_skin_checked="1"
                                                    style="overflow: hidden;">
                                                    <div id="highcharts-0t80cmc-44" dir="ltr"
                                                        class="highcharts-container "
                                                        style="position: relative; overflow: hidden; width: 595px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none; touch-action: manipulation; outline: none; font-family: Averta, sans-serif;"
                                                        bis_skin_checked="1"><svg version="1.1" class="highcharts-root"
                                                            style="font-family: Averta, sans-serif; font-size: 12px;"
                                                            xmlns="http://www.w3.org/2000/svg" width="595" height="400"
                                                            viewBox="0 0 595 400" role="img" aria-label="">
                                                            <desc>Created with Highcharts 10.3.3</desc>
                                                            <defs>
                                                                <clipPath id="highcharts-0t80cmc-45-">
                                                                    <rect x="0" y="0" width="549" height="285"
                                                                        fill="none"></rect>
                                                                </clipPath>
                                                                <clipPath id="highcharts-0t80cmc-59-">
                                                                    <rect x="0" y="0" width="549" height="285"
                                                                        fill="none"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <rect fill="#ffffff" class="highcharts-background" x="0"
                                                                y="0" width="595" height="400" rx="0" ry="0"></rect>
                                                            <rect fill="none" class="highcharts-plot-background" x="46"
                                                                y="66" width="549" height="285"></rect>
                                                            <g class="highcharts-grid highcharts-xaxis-grid"
                                                                data-z-index="1">
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 87.5 66 L 87.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 129.5 66 L 129.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 172.5 66 L 172.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 214.5 66 L 214.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 256.5 66 L 256.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 298.5 66 L 298.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 341.5 66 L 341.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 383.5 66 L 383.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 425.5 66 L 425.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 467.5 66 L 467.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 510.5 66 L 510.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 552.5 66 L 552.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 594.5 66 L 594.5 351" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="0"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 45.5 66 L 45.5 351" opacity="1"></path>
                                                            </g>
                                                            <g class="highcharts-grid highcharts-yaxis-grid"
                                                                data-z-index="1">
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 351.5 L 595 351.5" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 294.5 L 595 294.5" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 237.5 L 595 237.5" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 180.5 L 595 180.5" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 123.5 L 595 123.5" opacity="1"></path>
                                                                <path fill="none" stroke="#eaeaea" stroke-width="1"
                                                                    stroke-dasharray="none" data-z-index="1"
                                                                    class="highcharts-grid-line"
                                                                    d="M 46 65.5 L 595 65.5" opacity="1"></path>
                                                            </g>
                                                            <rect fill="none" class="highcharts-plot-border"
                                                                data-z-index="1" stroke="#cccccc" stroke-width="0"
                                                                x="46" y="66" width="549" height="285"></rect>
                                                            <g class="highcharts-axis highcharts-xaxis"
                                                                data-z-index="2">
                                                                <path fill="none" class="highcharts-axis-line"
                                                                    stroke="#ccd6eb" stroke-width="1" data-z-index="7"
                                                                    d="M 46 351.5 L 595 351.5"></path>
                                                            </g>
                                                            <g class="highcharts-axis highcharts-yaxis"
                                                                data-z-index="2">
                                                                <path fill="none" class="highcharts-axis-line"
                                                                    stroke="#ccd6eb" stroke-width="0" data-z-index="7"
                                                                    d="M 46 66 L 46 351"></path>
                                                            </g>
                                                            <g class="highcharts-series-group" data-z-index="3">
                                                                <g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-color-0 highcharts-tracker"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(46,66) scale(1 1)"
                                                                    clip-path="url(#highcharts-0t80cmc-59-)">
                                                                    <rect x="5.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="47.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="89.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="132.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="174.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="216.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="258.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="301.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="343.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="385.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="427.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="469.5" y="285.5" width="14" height="0"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                    <rect x="512.5" y="17.5" width="14" height="268"
                                                                        fill="#23C770" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-0">
                                                                    </rect>
                                                                </g>
                                                                <g class="highcharts-markers highcharts-series-0 highcharts-column-series highcharts-color-0"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(46,66) scale(1 1)"
                                                                    clip-path="none"></g>
                                                                <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-1 highcharts-tracker"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(46,66) scale(1 1)"
                                                                    clip-path="url(#highcharts-0t80cmc-59-)">
                                                                    <rect x="22.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="64.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="106.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="148.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="191.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="233.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="275.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="317.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="360.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="402.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="444.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="486.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                    <rect x="529.5" y="285.5" width="14" height="0"
                                                                        fill="#8AA2B2" stroke="#ffffff" stroke-width="1"
                                                                        opacity="1"
                                                                        class="highcharts-point highcharts-color-1">
                                                                    </rect>
                                                                </g>
                                                                <g class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-1"
                                                                    data-z-index="0.1" opacity="1"
                                                                    transform="translate(46,66) scale(1 1)"
                                                                    clip-path="none"></g>
                                                            </g><text x="298" text-anchor="middle"
                                                                class="highcharts-title" data-z-index="4"
                                                                style="color: rgb(51, 51, 51); font-size: 24px; fill: rgb(51, 51, 51);"
                                                                y="30"></text><text x="298" text-anchor="middle"
                                                                class="highcharts-subtitle" data-z-index="4"
                                                                style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                                                y="24"></text><text x="0" text-anchor="start"
                                                                class="highcharts-caption" data-z-index="4"
                                                                style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                                                y="397"></text>
                                                            <g class="highcharts-legend highcharts-no-tooltip"
                                                                data-z-index="7" transform="translate(0,10)">
                                                                <rect fill="none" class="highcharts-legend-box" rx="0"
                                                                    ry="0" stroke="#999999" stroke-width="0" x="0" y="0"
                                                                    width="170" height="26"></rect>
                                                                <g data-z-index="1">
                                                                    <g>
                                                                        <g class="highcharts-legend-item highcharts-column-series highcharts-color-0 highcharts-series-0"
                                                                            data-z-index="1" transform="translate(8,3)">
                                                                            <text x="21" text-anchor="start"
                                                                                data-z-index="2" y="15"
                                                                                style="color: rgb(68, 68, 68); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(68, 68, 68);">Income</text>
                                                                            <rect x="2" y="4" width="12" height="12"
                                                                                fill="#23C770" class="highcharts-point"
                                                                                data-z-index="3"></rect>
                                                                        </g>
                                                                        <g class="highcharts-legend-item highcharts-column-series highcharts-color-1 highcharts-series-1"
                                                                            data-z-index="1"
                                                                            transform="translate(91.337890625,3)"><text
                                                                                x="21" y="15" text-anchor="start"
                                                                                data-z-index="2"
                                                                                style="color: rgb(68, 68, 68); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(68, 68, 68);">Expense</text>
                                                                            <rect x="2" y="4" width="12" height="12"
                                                                                fill="#8AA2B2" class="highcharts-point"
                                                                                data-z-index="3"></rect>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="highcharts-axis-labels highcharts-xaxis-labels"
                                                                data-z-index="7"><text x="67.11538461538538"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">May<tspan class="highcharts-br"
                                                                        dy="14" x="67.11538461538538">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="109.34615384615537"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jun<tspan class="highcharts-br"
                                                                        dy="14" x="109.34615384615537">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="151.5769230769154"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jul<tspan class="highcharts-br"
                                                                        dy="14" x="151.5769230769154">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="193.8076923076854"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Aug<tspan class="highcharts-br"
                                                                        dy="14" x="193.8076923076854">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="236.03846153845538"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Sep<tspan class="highcharts-br"
                                                                        dy="14" x="236.03846153845538">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="278.2692307692254"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Oct<tspan class="highcharts-br"
                                                                        dy="14" x="278.2692307692254">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="320.49999999999534"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Nov<tspan class="highcharts-br"
                                                                        dy="14" x="320.49999999999534">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="362.73076923076536"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Dec<tspan class="highcharts-br"
                                                                        dy="14" x="362.73076923076536">&ZeroWidthSpace;
                                                                    </tspan>22</text><text x="404.9615384615354"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Jan<tspan class="highcharts-br"
                                                                        dy="14" x="404.9615384615354">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="447.19230769230535"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Feb<tspan class="highcharts-br"
                                                                        dy="14" x="447.19230769230535">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="489.42307692307537"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Mar<tspan class="highcharts-br"
                                                                        dy="14" x="489.42307692307537">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="531.6538461538454"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">Apr<tspan class="highcharts-br"
                                                                        dy="14" x="531.6538461538454">&ZeroWidthSpace;
                                                                    </tspan>23</text><text x="573.8846153846154"
                                                                    text-anchor="middle" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="370" opacity="1">May<tspan class="highcharts-br"
                                                                        dy="14" x="573.8846153846154">&ZeroWidthSpace;
                                                                    </tspan>23</text></g>
                                                            <g class="highcharts-axis-labels highcharts-yaxis-labels"
                                                                data-z-index="7"><text x="31" text-anchor="end"
                                                                    transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="356" opacity="1">$0</text><text x="31"
                                                                    text-anchor="end" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="299" opacity="1">$1000</text><text x="31"
                                                                    text-anchor="end" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="242" opacity="1">$2000</text><text x="31"
                                                                    text-anchor="end" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="185" opacity="1">$3000</text><text x="31"
                                                                    text-anchor="end" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="128" opacity="1">$4000</text><text x="31"
                                                                    text-anchor="end" transform="translate(0,0)"
                                                                    style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                                                    y="71" opacity="1">$5000</text></g>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Payable &amp;
                                                            Owing</h2>
                                                    </div>
                                                </div>
                                                <div class="payable-and-owing-widget" bis_skin_checked="1">
                                                    <div class="payable-and-owing-widget__vsplit" bis_skin_checked="1">
                                                        <table class="wv-table--condensed">
                                                            <thead class="wv-table__header">
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="2">
                                                                        Invoices payable to you</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="wv-table__body">
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1"><a
                                                                            class="wv-text--link fs-exclude">Coming
                                                                            Due</a></td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        1-30 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$4,698.19</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        31-60 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        61-90 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        &gt; 90 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="payable-and-owing-widget__vsplit" bis_skin_checked="1">
                                                        <table class="wv-table--condensed">
                                                            <thead class="wv-table__header">
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="2">
                                                                        Bills you owe</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="wv-table__body">
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1"><a
                                                                            class="wv-text--link fs-exclude">Coming
                                                                            Due</a></td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        1-30 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        31-60 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        61-90 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                                <tr class="wv-table__row">
                                                                    <td class="wv-table__cell fs-exclude" colspan="1">
                                                                        &gt; 90 days overdue</td>
                                                                    <td class="wv-table__cell--amount fs-exclude"
                                                                        colspan="1">$0.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Net Income</h2>
                                                    </div>
                                                </div>
                                                <table class="wv-table--condensed">
                                                    <thead class="wv-table__header">
                                                        <tr class="wv-table__row">
                                                            <th class="wv-table__cell fs-exclude" colspan="1">Fiscal
                                                                Year <svg class="wv-svg-icon wv-tooltip__trigger"
                                                                    aria-labelledby="help-title" aria-hidden="true"
                                                                    tabindex="0">
                                                                    <use xlink:href="#help"></use>
                                                                </svg></th>
                                                            <th class="wv-table__cell--amount fs-exclude" colspan="1">
                                                                Previous</th>
                                                            <th class="wv-table__cell--amount fs-exclude" colspan="1">
                                                                Current</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="wv-table__body">
                                                        <tr class="wv-table__row">
                                                            <td class="wv-table__cell fs-exclude" colspan="1">Income
                                                            </td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$0.00</a></td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$4,698.19</a></td>
                                                        </tr>
                                                        <tr class="wv-table__row">
                                                            <td class="wv-table__cell fs-exclude" colspan="1">Expense
                                                            </td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$0.00</a></td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$0.00</a></td>
                                                        </tr>
                                                        <tr class="wv-table__row">
                                                            <td class="wv-table__cell fs-exclude" colspan="1">Net Income
                                                            </td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$0.00</a></td>
                                                            <td class="wv-table__cell--amount fs-exclude" colspan="1"><a
                                                                    class="wv-text--link fs-exclude">$4,698.19</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                            <div class="dashboardV2__cellItem" bis_skin_checked="1">
                                                <div class="wv-header--section" bis_skin_checked="1">
                                                    <div class="wv-header__title" bis_skin_checked="1">
                                                        <h2 class="wv-heading--section-title fs-exclude">Expense
                                                            Breakdown</h2>
                                                    </div>
                                                </div>
                                                <div class="dashboardV2__chart-controls" bis_skin_checked="1"><button
                                                        class="wv-button--link fs-exclude dashboardV2__chart-controls__btn dashboardV2__chart-controls__btn--active">This
                                                        Year</button><button
                                                        class="wv-button--link fs-exclude dashboardV2__chart-controls__btn">This
                                                        Month</button></div>
                                                <div class="dashboardV2__expense-breakdown-empty-state"
                                                    bis_skin_checked="1"><img class="empty-state-placeholder-image"
                                                        src="./assets/images/circle.png"
                                                        alt="Empty expense breakdown placeholder">
                                                    <div class="empty-state-message" bis_skin_checked="1">
                                                        <p
                                                            class="wv-text wv-text--small test fs-exclude wv-text--inline">
                                                            <strong class="wv-text--strong fs-exclude">There isn't any
                                                                data to display.</strong>
                                                        </p>
                                                        <p class="wv-text wv-text--hint fs-exclude wv-text--inline">A
                                                            chart will appear here if you add some data for this time
                                                            period.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wv-divider--whitespace" bis_skin_checked="1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <iframe src="about:blank" style="display: none;" data-gtm-yt-inspected-33866_340="true"
        data-gtm-yt-inspected-185="true"></iframe>
    <div id="WPPTrackingId" style="display: none;" bis_skin_checked="1">1ec69cb955e541ffd17fadb9b5242dcd</div>
    <iframe data-product="web_widget" title="No content" role="presentation" tabindex="-1" allow="microphone *"
        aria-hidden="true" src="about:blank"
        style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"
        data-gtm-yt-inspected-33866_340="true" data-gtm-yt-inspected-185="true"></iframe>
    <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon49179713224" bis_skin_checked="1">
        <img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon123223782602" width="0"
            height="0" alt=""
            src="https://bat.bing.com/action/0?ti=25032508&amp;Ver=2&amp;mid=2c672244-bc11-4977-8dcb-5d786b7d566d&amp;sid=481eb770fdf111edaf4cc1beb642ec48&amp;vid=482062d0fdf111ed92ab65df6588e428&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D1.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Wave&amp;p=https%3A%2F%2Fnext.waveapps.com%2F4ca14d42-ebb1-425c-8837-93261d4e42c6%2Fdashboard&amp;r=&amp;lt=10220&amp;mtp=2&amp;evt=pageLoad&amp;sv=1&amp;rn=179499">
    </div>

    <div id="ada-entry" bis_skin_checked="1">
        <div bis_skin_checked="1"
            style="position: fixed; width: 635px; height: 785px; right: 0px; background: linear-gradient(315.92deg, rgba(0, 0, 0, 0.08) 0%, rgba(0, 0, 0, 0) 40.92%); bottom: 0px; pointer-events: none; z-index: 9999; transition: all 500ms linear 0s; opacity: 0;">
        </div>
    </div>
    <div class="wv-takeover session-warning" id="inactivity-modal-751856" role="dialog" aria-hidden="false"
        bis_skin_checked="1">
        <div class="wv-takeover__content" bis_skin_checked="1">
            <div class="wv-takeover__body" bis_skin_checked="1">
                <div class="illustration" bis_skin_checked="1">
                    <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 380 320">
                        <defs>
                            <style>
                            .cls-1 {
                                fill-rule: evenodd;
                                fill: url(#linear-gradient);
                            }

                            .cls-2 {
                                fill: url(#linear-gradient-2);
                            }

                            .cls-3 {
                                fill: url(#linear-gradient-3);
                            }

                            .cls-4 {
                                fill: url(#linear-gradient-4);
                            }

                            .cls-5 {
                                fill: url(#linear-gradient-5);
                            }

                            .cls-6 {
                                fill: url(#linear-gradient-6);
                            }
                            </style>
                            <linearGradient id="linear-gradient" x1="190" y1="17.97" x2="190" y2="254.7"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#2575db"></stop>
                                <stop offset="1" stop-color="#582994"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-2" x1="187.71" y1="41.62" x2="199.66" y2="297.6"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0.2" stop-color="#2575db"></stop>
                                <stop offset="1" stop-color="#582994"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-3" x1="142.09" y1="159.25" x2="235.37" y2="159.25"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0.03" stop-color="#9ae5fc"></stop>
                                <stop offset="0.99" stop-color="#e0f4ff"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-4" x1="188.72" y1="248.75" x2="188.72" y2="202.22"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0.03" stop-color="#2c87fc"></stop>
                                <stop offset="1" stop-color="#6ebfff"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-5" x1="188.72" y1="155.25" x2="188.72" y2="49.43"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0.41" stop-color="#2c87fc"></stop>
                                <stop offset="0.86" stop-color="#6ebfff"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-6" x1="188.71" y1="230.48" x2="188.71" y2="153.96"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#e84855"></stop>
                                <stop offset="1" stop-color="#744af0"></stop>
                            </linearGradient>
                        </defs>
                        <title>spot_hourglass</title>
                        <path class="cls-1"
                            d="M329,160A139,139,0,0,1,66.57,224c-.39-.76-.77-1.52-1.15-2.28A139.15,139.15,0,0,1,80.3,74.62,139.93,139.93,0,0,1,96.61,57a139,139,0,0,1,232.18,95.33Q329,156.17,329,160Z">
                        </path>
                        <path class="cls-2"
                            d="M308.07,86.63,241,244.23,138.9,243,71.57,87.21A136.35,136.35,0,0,1,80.3,74.62,139.93,139.93,0,0,1,96.61,57,139,139,0,0,1,308.07,86.63Z">
                        </path>
                        <path class="cls-3"
                            d="M175,159.18S145,192,142.11,226.29a4.8,4.8,0,0,0,4.8,5.16h83.64a4.81,4.81,0,0,0,4.81-5.16c-2.87-34.31-32.91-67.11-32.91-67.11v-5.87s30-27.32,32.9-61.09a4.8,4.8,0,0,0-4.8-5.17H146.92a4.8,4.8,0,0,0-4.81,5.17C145,126,175,153.31,175,153.31Z">
                        </path>
                        <path class="cls-4"
                            d="M241.63,233.68v12.07H135.81V233.68a5.93,5.93,0,0,1,5.87-5.93h94A5.93,5.93,0,0,1,241.63,233.68Z">
                        </path>
                        <path class="cls-5"
                            d="M241.63,74.25V86.32a5.93,5.93,0,0,1-5.94,5.93h-94a5.93,5.93,0,0,1-5.87-5.93V74.25Z">
                        </path>
                        <path class="cls-6"
                            d="M222.17,224.24H155.26a4.8,4.8,0,0,1-4.69-5.84A99.24,99.24,0,0,1,159.78,194c2.64-4.86,12.55-6.75,22.4-9.65,3.4-1,4.9-5.22,4.9-8.64v-16.2c0-3.27-.69-6.19-3.46-8.35l-.07,0a17.52,17.52,0,0,1-1.64-1.23,2.11,2.11,0,0,1,.41-3.48,14.45,14.45,0,0,1,6.31-1.72,15.45,15.45,0,0,1,6.48,1.75,2.11,2.11,0,0,1,.45,3.49c-.33.27-.65.53-1,.76s-.48.33-.72.49c-2.93,2.17-3.72,5.11-3.72,8.41v16c0,3.48,1.53,7.5,5.28,8.91,9.38,2.84,20.57,5.72,22.63,10.22a98.42,98.42,0,0,1,8.81,23.6A4.8,4.8,0,0,1,222.17,224.24Z">
                        </path>
                    </svg>
                </div>
                <div class="wv-heading--title" bis_skin_checked="1">Looks like you’ve been away for a while</div>
                <div class="wv-text" bis_skin_checked="1">
                    As a security precaution, you will be signed out in
                    <strong class="countdown"></strong><br>
                    Remember to save anything you're working on.
                </div>
            </div>
            <div class="wv-takeover__actions" bis_skin_checked="1">
                <button class="wv-button--secondary modal-signout">Sign Out</button>
                <button class="wv-button--primary back">Back to Wave</button>
            </div>
        </div>
    </div>


</html>