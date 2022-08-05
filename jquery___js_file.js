
 $(document).ready(function(){
      for (var selected_course of (window.location.search.substr(1)).split('&')) {
          var temp__course = selected_course.split("=");
          // console.log(temp__course);
          var key__ = temp__course[0];
          var value__ = temp__course[1];
          if (typeof value__ !== "undefined" && value__ != "") {
              // console.log(value__);
              // jQuery(jQuery(".jet-checkboxes-list__input[value='200']")[1]).prop("checked", "checked").change();
              jQuery(jQuery(".jet-checkboxes-list__input[value='"+ value__ +"']")[1]).prop("checked", "checked").change();

          } 
      }
  });
