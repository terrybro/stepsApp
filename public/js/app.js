jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click

});

function on() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("modal").style.display = "block";

}

function off() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("modal").style.display = "none";


}
