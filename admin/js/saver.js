function saver() {
    var iframe = document.getElementById("mercury_iframe");
    var innerDoc = iframe.contentDocumnet || iframe.contentWindow.document;
    var editor = innerDoc.getElementById('blogPost');
    var post = editor.innerHTML;
    var title = innerDoc.getElementById('title').value;
    var author = innerDoc.getElementById('author').value;

    var forward = true;
    if(title == "") {
        forward = false;
        alert("Please provide a title for your post.");
    }

    if(forward) {
        if(author == "") {
            forward = false;
            alert("Please provide an author for your post.");
        }
    }

    if(forward) {
        jQuery.post('save.php',{body:post,title:title,author:author},function() {
            alert('Hooray! We saved!');
        })
    }

}