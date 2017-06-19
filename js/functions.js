function ajaxPostFormReset(id_form,url,id_to_reload)
{
    var form = document.getElementById(id_form);
    var formData = new FormData(form); 
    var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById(id_to_reload).innerHTML = xmlHttp.responseText;
		}
	}
    xmlHttp.open("POST", url, true); 
    xmlHttp.send(formData);

    document.getElementById(id_form).reset(); //resetuje forme
}
 
function ajaxReloadElement(id_element,url,interval) {
    interval = interval || 0;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(id_element).innerHTML = this.responseText;
			if (interval > 0) 
				setTimeout( function(){ ajaxReloadElement(id_element,url,interval) }, interval);
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();

}

function confirmLink(link,message) {
	if(confirm(message)) {
		window.location.href=link;
	}
}




function postID(path,id) {
    method = "post";

    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "postID");
    hiddenField.setAttribute("value", id);
    form.appendChild(hiddenField);

    document.body.appendChild(form);
    form.submit();
}



function prepareView(thisUrl){

$(document).ready(function() {
    var processing;
    var win = $(window);
    var page = 1;
    // Each time the user scrolls
    win.scroll(function() {
        // End of the document reached?
        if (processing)
            return false;

        if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.9) {
            processing = true;
            $('#loading').show();
            $.ajax({
                type: "POST",
                url: thisUrl + 'partView',
            data: {page: page},
            dataType: 'html',
                success: function(html, textStatus, request) {
                $('#postList').append(html);
                $('#loading').hide();
                ++page;
                if(request.getResponseHeader('Stop')=="stop") {
                    $(window).unbind('scroll', this);
                    return false;
                }
                processing = false;

            }
        });
        }
    });
});


Simditor.locale = 'en-US';
toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
if(mobilecheck()) {
    toolbar = ["bold", "underline", "strikethrough", "color", "ul", "ol"];
}
var editor = new Simditor({
    textarea: $('#editor'),
    toolbar: toolbar,
    img:['width:100%']
});

}


