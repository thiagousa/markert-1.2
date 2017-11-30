var elixir = require('laravel-elixir');

elixir(function(mix) {
    
    // ADMIN
    mix.styles([
            '../../assets/css/bootstrap.min.css',
            '../../assets/css/slick.min.css',
            '../../assets/css/slick-theme.min.css',
            '../../assets/css/bootstrap-fileupload.css',
            '../../assets/css/cropper.css'
        ],
        'public/assets/css/vendor.css');

    mix.styles(['../../assets/js/plugins/datatables/jquery.dataTables.min.css'], 'public/assets/js/plugins/datatables/jquery.dataTables.min.css');
    mix.styles(['../../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'], 'public/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css');
    mix.styles(['../../assets/js/plugins/bootstrap-select/bootstrap-select.min.css'], 'public/assets/js/plugins/bootstrap-select/bootstrap-select.min.css');

    mix.less('../../assets/less/main.less', 'public/assets/css/main.css');

    mix.copy("resources/assets/_uploads/**", "public/assets/_uploads");
    mix.copy("resources/assets/settings/**", "public/assets/settings");
    mix.copy("resources/assets/fonts/**", "public/assets/fonts");
    mix.copy("resources/assets/img/**", "public/assets/img");
    mix.copy("resources/assets/json/**", "public/assets/json");

    mix.scripts([
            '../../assets/js/core/jquery.min.js',
            '../../assets/js/core/bootstrap.min.js',
            '../../assets/js/core/jquery.slimscroll.min.js',
            '../../assets/js/core/jquery.scrollLock.min.js',
            '../../assets/js/core/jquery.appear.min.js',
            '../../assets/js/core/jquery.countTo.min.js',
            '../../assets/js/core/jquery.placeholder.min.js',
            '../../assets/js/core/js.cookie.min.js',
            '../../assets/js/core/slick.min.js',
            '../../assets/js/core/jquery.validate.min.js',
            '../../assets/js/plugins/bootbox/bootbox.min.js',
            '../../assets/js/plugins/bootstrap-fileupload/bootstrap-fileupload.js',
            '../../assets/js/plugins/cropper/cropper.js',
            '../../assets/js/core/custom.js'
        ],
        'public/assets/js/vendor.js');

    mix.scripts(['../../assets/js/app.js'], 'public/assets/js/app.js');
    mix.scripts(['../../assets/js/pages/base_tables_datatables.js'], 'public/assets/js/pages/base_tables_datatables.js');
    mix.scripts(['../../assets/js/plugins/datatables/jquery.dataTables.min.js'], 'public/assets/js/plugins/datatables/jquery.dataTables.min.js');
    mix.scripts(['../../assets/js/plugins/datatables/jquery.dataUk.js'], 'public/assets/js/plugins/datatables/jquery.dataUk.min.js');
    mix.scripts(['../../assets/js/plugins/jquery-ui/jquery-ui.min.js'], 'public/assets/js/plugins/jquery-ui/jquery-ui.min.js');

    mix.scripts(['../../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'], 'public/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js');
    mix.scripts(['../../assets/js/plugins/bootstrap-select/bootstrap-select.min.js'], 'public/assets/js/plugins/bootstrap-select/bootstrap-select.min.js');
    mix.scripts(['../../assets/js/plugins/bootstrap-typeahead/bootstrap-typeahead.min.js'], 'public/assets/js/plugins/bootstrap-typeahead/bootstrap-typeahead.min.js');
    mix.scripts(['../../assets/js/core/jquery.mask.min.js'], 'public/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js');
    mix.scripts(['../../assets/js/core/jquery.maskmoney.js'], 'public/assets/js/jquery.maskmoney.js');

});