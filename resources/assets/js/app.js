$(function($) {

    console.log('ici jquery')

    $(function() {
        $(".delete").on("submit", function () {
            return confirm("Etes vous certain de vouloir effacer ce post?");
        });
    });
})(jQuery)

$('.dropdown-toggle').dropdown();