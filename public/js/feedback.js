$(".applicant").click(function(){
    $("strong.student-name").replaceWith($(this).attr("name"));
});
