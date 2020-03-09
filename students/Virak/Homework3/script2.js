var abc_ = 0;      // Declaring and defining global increment variable.
$(document).ready(function () {
    //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
    $('#add_more_img').click(function () {
        $(this).before($("<div/>", {
            id: 'imgdiv'
        }).fadeIn('slow').append($("<input/>", {
            name: 'imgfile[]',
            type: 'file',
            id: 'img'
        }), $("<br/><br/>")));
    });

    
    // Following function will executes on change event of file input to select different file.
    $('body').on('change', '#img', function () {
        if (this.files && this.files[0]) {
            abc_ += 1; // Incrementing global variable by 1.
            var z = abc_ - 1;
            var x = $(this).parent().find('#previewimg_' + z).remove();
            $(this).before("<div id='abcd_" + abc_ + "' class='abcd_'><img id='previewimg_" + abc_ + "' src=''/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded_;
            reader.readAsDataURL(this.files[0]);
            $(this).hide();
            $("#abcd_" + abc_).append($("<img/>", {
                id: 'imgdelete_',
                src: 'images/DeleteRed.png',
                alt: 'delete'
            }).click(function () {
                $(this).parent().parent().remove();
            }));
        }
    });
   
    // To Preview Image
    function imageIsLoaded_(d) {
        $('#previewimg_' + abc_).attr('src', d.target.result);
        
    };
});
