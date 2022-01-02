const $ = window.jQuery;

const Preloader = {
    init() {
        setTimeout(function () {
            $('.wttb-preloader-wrap > div').fadeOut(600);
            $('.wttb-preloader-wrap').fadeOut(1500);
        }, 1000);
    }
}

export default Preloader;
