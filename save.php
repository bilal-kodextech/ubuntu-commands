<!-- jquery file upload  -->

<!-- also error message customize colour and placement  -->
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    // validate the comment form when it is submitted
    $(".storyForm").validate({
        rules: {
            "targeted_behaviour[]": "required",
            "title":"required"

        },
        messages: {
            "targeted_behaviour[]": "Please select Targeted Behaviour",
            "title":"This title is require",
        },
        errorPlacement: function(error, element) {
             if (element.attr("name") == "targeted_behaviour[]") {
                 // an example
                 error.insertAfter($("#targeted_error_message"));
            
                //OR
                error.insertBefore($("#targeted_error_message"));
            
             } else {
            
                 // the default error placement for the rest of the elements in form
                 error.insertAfter(element);
             }
          }
    });
});
</script> --}}

<!-- jquery file upload  -->